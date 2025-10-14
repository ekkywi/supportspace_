<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginForm;
use App\Http\Controllers\Auth\ForgotPasswordForm;
use App\Http\Controllers\Portal\PortalPage;
use App\Http\Controllers\Portal\ModulePage;
use App\Http\Controllers\Portal\MyProfilePage;
use App\Http\Controllers\Module\SettingDashboardPage;
use App\Http\Controllers\Module\DepartmentController;
use App\Http\Controllers\Module\SectionController;


Route::get('/login', LoginForm::class)->name('login');
Route::get('/forgot-password', ForgotPasswordForm::class)->name('forgot-password');
Route::get('/portal', PortalPage::class)->name('portal');
Route::get('/modules', ModulePage::class)->name('modules');
Route::get('/my-profile', MyProfilePage::class)->name('my-profile');

// Rute untuk Settings -> Dashboard
Route::get('/settings', SettingDashboardPage::class)->name('settings.dashboard');

// Rute untuk Settings -> Departments
Route::get('/settings/departments', [DepartmentController::class, 'index'])->name('settings.departments.index');

// Rute untuk Settings -> Sections
Route::get('/settings/sections', [SectionController::class, 'index'])->name('settings.sections.index');
