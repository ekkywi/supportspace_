<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginForm;
use App\Http\Controllers\Auth\ForgotPasswordForm;
use App\Http\Controllers\Portal\PortalPage;
use App\Http\Controllers\Portal\ModulePage;
use App\Http\Controllers\Portal\MyProfilePage;
use App\Http\Controllers\Module\SettingDashboardPage;
use App\Http\Controllers\Module\DepartmentController;
use App\Http\Controllers\Module\DepartmentArchiveController;
use App\Http\Controllers\Module\SectionController;
use App\Http\Controllers\Module\PositionController;
use App\Http\Controllers\Module\RoleController;
use App\Http\Controllers\Module\PermissionController;
use App\Http\Controllers\Module\SectionArchiveController;

Route::get('/login', LoginForm::class)->name('login');
Route::get('/forgot-password', ForgotPasswordForm::class)->name('forgot-password');
Route::get('/portal', PortalPage::class)->name('portal');
Route::get('/modules', ModulePage::class)->name('modules');
Route::get('/my-profile', MyProfilePage::class)->name('my-profile');

// Rute untuk Pengaturan Aplikasi -> Dashboard
Route::get('/settings', SettingDashboardPage::class)->name('settings.dashboard');

// Rute untuk Pengaturan Aplikasi -> Departemen
Route::get('/settings/departments', [DepartmentController::class, 'index'])->name('settings.departments.index');
Route::post('/settings/departments', [DepartmentController::class, 'store'])->name('settings.departments.store');
Route::put('/settings/departments/{department}', [DepartmentController::class, 'update'])->name('settings.departments.update');
Route::delete('/settings/departments/{department}', [DepartmentController::class, 'destroy'])->name('settings.departments.destroy');

// Rute untuk Pengaturan Aplikasi -> Departement -> Arsip
Route::get('/settings/departments/archive', [DepartmentArchiveController::class, 'index'])->name('settings.departments.archives.index');
Route::put('/settings/departments/{department}/restore', [DepartmentArchiveController::class, 'restore'])->name('settings.departments.archives.restore')->withTrashed();
Route::delete('/settings/departments/{department}/force-delete', [DepartmentArchiveController::class, 'forceDelete'])->name('settings.departments.archives.force.delete')->withTrashed();

// Rute untuk Pengaturan Aplikasi -> Bagian
Route::get('/settings/sections', [SectionController::class, 'index'])->name('settings.sections.index');
Route::post('/settings/sections', [SectionController::class, 'store'])->name('settings.sections.store');
Route::put('/settings/sections/{section}', [SectionController::class, 'update'])->name('settings.sections.update');
Route::delete('/settings/sections/{section}', [SectionController::class, 'destroy'])->name('settings.sections.destroy');

// Rute untuk Pengaturan Aplikasi -> Bagian -> Ariso
Route::get('/settings/sections/archive', [SectionArchiveController::class, 'index'])->name('settings.sections.archives.index');
Route::put('/settings/sections/{section}/restore', [SectionArchiveController::class, 'restore'])->name('settings.sections.archives.restore')->withTrashed();
Route::delete('/settings/sections/{section}/force-delete', [SectionArchiveController::class, 'forceDelete'])->name('settings.sections.archives.force.delete')->withTrashed();

//Rute untuk Pengaturan Aplikasi -> Jabatan
Route::get('/settings/positions', [PositionController::class, 'index'])->name('settings.positions.index');

//Rute untuk Pengaturan Aplikasi -> Peran
Route::get('/settings/roles', [RoleController::class, 'index'])->name('settings.roles.index');

//Rute untuk Pengaturan Aplikasi -> Hak Akses
Route::get('/settings/permissions', [PermissionController::class, 'index'])->name('settings.permissions.index');
