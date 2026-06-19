<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Client;
use App\Models\Project;
use App\Models\AdminUser;
use App\Models\Deliverable;

class AgencyPlatformTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        AdminUser::create([
            'name' => 'Test Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('password'),
        ]);
    }

    public function test_intake_form_page_loads(): void
    {
        $response = $this->get('/apply');
        $response->assertStatus(200);
        $response->assertSee('Red Sea Digital Pro');
        $response->assertSee('احجز تشخيصك الرقمي');
    }

    public function test_intake_form_submission_creates_client_and_project(): void
    {
        $response = $this->post('/apply', [
            'name' => 'Ahmed Client',
            'email' => 'ahmed@example.com',
            'company' => 'Test Co',
            'whatsapp' => '+201234567890',
            'service_type' => 'marketing',
            'brief' => 'We need a full marketing campaign for our luxury resort.',
            'budget' => '5k_10k',
            'timeline' => '1 month',
        ]);

        $response->assertSessionHas('success');

        $this->assertDatabaseHas('clients', [
            'email' => 'ahmed@example.com',
            'name' => 'Ahmed Client',
        ]);

        $this->assertDatabaseHas('projects', [
            'service_type' => 'marketing',
            'budget_range' => '5k_10k',
        ]);
    }

    public function test_client_can_login_to_portal(): void
    {
        $client = Client::create([
            'name' => 'Portal User',
            'email' => 'portal@example.com',
            'password' => bcrypt('secret123'),
        ]);

        $response = $this->post('/client/login', [
            'email' => 'portal@example.com',
            'password' => 'secret123',
        ]);

        $response->assertRedirect(route('client.dashboard'));
    }

    public function test_admin_can_login_and_see_dashboard(): void
    {
        $response = $this->post('/admin/login', [
            'email' => 'admin@test.com',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('admin.dashboard'));

        $dashboardResponse = $this->get(route('admin.dashboard'));
        $dashboardResponse->assertStatus(200);
        $dashboardResponse->assertSee('لوحة التحكم');
    }

    public function test_landing_page_redirects_to_intake(): void
    {
        $response = $this->get('/');
        $response->assertRedirect('/apply');
    }

    public function test_admin_can_update_project_notes(): void
    {
        $client = Client::create([
            'name' => ' احمد العميل',
            'email' => 'ahmed@test.com',
            'password' => bcrypt('secret123'),
        ]);

        $project = Project::create([
            'client_id' => $client->id,
            'title' => 'Project A',
            'service_type' => 'ai_systems',
            'brief_text' => 'Brief content here',
            'status' => 'received',
        ]);

        $admin = AdminUser::first();

        // Login as admin
        $this->post('/admin/login', [
            'email' => 'admin@test.com',
            'password' => 'password',
        ]);

        // Submit notes
        $response = $this->post(route('admin.project.notes', $project->id), [
            'notes' => 'This is a secure internal note about Project A',
        ]);

        $response->assertRedirect();
        
        $this->assertDatabaseHas('projects', [
            'id' => $project->id,
            'internal_notes' => 'This is a secure internal note about Project A',
        ]);
    }

    public function test_client_can_submit_revision_request(): void
    {
        $client = Client::create([
            'name' => 'Portal Client',
            'email' => 'portal-client@example.com',
            'password' => bcrypt('secret123'),
        ]);

        $project = Project::create([
            'client_id' => $client->id,
            'title' => 'Project B',
            'service_type' => 'website_branding',
            'brief_text' => 'Brief content here',
            'status' => 'in_progress',
        ]);

        $deliverable = Deliverable::create([
            'project_id' => $project->id,
            'title' => 'Initial Website Mockup',
            'file_path' => 'https://example.com/mockup',
            'type' => 'link',
            'notes' => 'First draft of the home page.',
        ]);

        // Login as client
        $this->post('/client/login', [
            'email' => 'portal-client@example.com',
            'password' => 'secret123',
        ]);

        // Request a revision
        $response = $this->post(route('client.revision', $project->id), [
            'deliverable_id' => $deliverable->id,
            'client_request' => 'Please change the ambient blue light to red.',
        ]);

        $response->assertRedirect();
        
        $this->assertDatabaseHas('revisions', [
            'deliverable_id' => $deliverable->id,
            'client_request' => 'Please change the ambient blue light to red.',
            'status' => 'pending',
        ]);
    }
}
