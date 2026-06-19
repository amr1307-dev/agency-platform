<?php

namespace App\Listeners;

use App\Events\ClientActivated;
use App\Models\ProjectTask;

class GenerateProjectBlueprint
{
    public function handle(ClientActivated $event): void
    {
        $project = $event->project;

        $blueprint = match ($project->service_type) {
            'website_branding' => $this->webDesignBlueprint($project->id),
            default            => $this->aiAutomationBlueprint($project->id),
        };

        foreach ($blueprint as $task) {
            ProjectTask::create($task);
        }
    }

    private function webDesignBlueprint(int $projectId): array
    {
        return [
            [
                'project_id' => $projectId,
                'title'      => 'Brand Audit & Creative Brief',
                'deadline'   => now()->addDays(3),
                'status'     => 'pending',
                'sort_order' => 1,
            ],
            [
                'project_id' => $projectId,
                'title'      => 'Wireframe & Sitemap Architecture',
                'deadline'   => now()->addDays(7),
                'status'     => 'pending',
                'sort_order' => 2,
            ],
            [
                'project_id' => $projectId,
                'title'      => 'UI/UX Homepage Design (Elementor/Figma)',
                'deadline'   => now()->addDays(12),
                'status'     => 'pending',
                'sort_order' => 3,
            ],
            [
                'project_id' => $projectId,
                'title'      => 'Full Website Development & Mobile Responsive Check',
                'deadline'   => now()->addDays(20),
                'status'     => 'pending',
                'sort_order' => 4,
            ],
        ];
    }

    private function aiAutomationBlueprint(int $projectId): array
    {
        return [
            [
                'project_id' => $projectId,
                'title'      => 'Workflow Architecture & Logic Mapping',
                'deadline'   => now()->addDays(4),
                'status'     => 'pending',
                'sort_order' => 1,
            ],
            [
                'project_id' => $projectId,
                'title'      => 'Database & Backend API Integration',
                'deadline'   => now()->addDays(10),
                'status'     => 'pending',
                'sort_order' => 2,
            ],
            [
                'project_id' => $projectId,
                'title'      => 'Frontend Dashboard Implementation',
                'deadline'   => now()->addDays(18),
                'status'     => 'pending',
                'sort_order' => 3,
            ],
            [
                'project_id' => $projectId,
                'title'      => 'Live Testing & QA Deployment',
                'deadline'   => now()->addDays(25),
                'status'     => 'pending',
                'sort_order' => 4,
            ],
        ];
    }
}
