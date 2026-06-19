<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientPortalController;
use App\Http\Controllers\ClientPasswordSetupController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return redirect('/apply');
});

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/apply', [ClientController::class, 'create'])->name('apply');
Route::post('/apply', [ClientController::class, 'store'])->name('apply.store');

Route::prefix('client')->name('client.')->group(function () {
    Route::get('/login', [ClientPortalController::class, 'login'])->name('login');
    Route::post('/login', [ClientPortalController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [ClientPortalController::class, 'logout'])->name('logout');
    Route::get('/setup-password/{token}', [ClientPasswordSetupController::class, 'showSetupForm'])->name('setup-password.form');
    Route::post('/setup-password/{token}', [ClientPasswordSetupController::class, 'storePassword'])->name('setup-password.store');

    Route::middleware('auth:client')->group(function () {
        Route::get('/dashboard', [ClientPortalController::class, 'dashboard'])->name('dashboard');
        Route::get('/project/{id}', [ClientPortalController::class, 'project'])->name('project');
        Route::post('/project/{id}/revision', [ClientPortalController::class, 'requestRevision'])->name('revision');
        Route::post('/task/{taskId}/approve', [ClientPortalController::class, 'approveTask'])->name('task.approve');
        Route::post('/task/{taskId}/revision', [ClientPortalController::class, 'requestRevision'])->name('task.revision');
    });
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'login'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/projects', [AdminController::class, 'projects'])->name('projects');
        Route::get('/project/{id}', [AdminController::class, 'projectDetail'])->name('project.detail');
        Route::post('/project/{id}/status', [AdminController::class, 'updateStatus'])->name('project.status');
        Route::post('/project/{id}/notes', [AdminController::class, 'updateNotes'])->name('project.notes');
        Route::post('/project/{id}/deliverable', [AdminController::class, 'addDeliverable'])->name('project.deliverable');
        Route::get('/clients', [AdminController::class, 'clients'])->name('clients');
        Route::get('/client/{id}', [AdminController::class, 'clientDetail'])->name('client.detail');
    });
});
