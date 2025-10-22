<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginForm;
use App\Http\Controllers\Auth\ForgotPasswordForm;
use App\Http\Controllers\Portal\PortalPage;
use App\Http\Controllers\Portal\ModulePage;
use App\Http\Controllers\Portal\MyProfilePage;
use App\Http\Controllers\Modules\Settings\SettingDashboardPage;
use App\Http\Controllers\Modules\Settings\DepartmentController;
use App\Http\Controllers\Modules\Settings\DepartmentArchiveController;
use App\Http\Controllers\Modules\Settings\SectionController;
use App\Http\Controllers\Modules\Settings\SectionArchiveController;
use App\Http\Controllers\Modules\Settings\PositionController;
use App\Http\Controllers\Modules\Settings\PositionArchiveController;
use App\Http\Controllers\Modules\Settings\RoleController;
use App\Http\Controllers\Modules\Settings\RoleArchiveController;
use App\Http\Controllers\Modules\Settings\PermissionController;

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
Route::get('/settings/departments/archives', [DepartmentArchiveController::class, 'index'])->name('settings.departments.archives.index');
Route::put('/settings/departments/{department}/restore', [DepartmentArchiveController::class, 'restore'])->name('settings.departments.archives.restore')->withTrashed();
Route::delete('/settings/departments/{department}/force-delete', [DepartmentArchiveController::class, 'forceDelete'])->name('settings.departments.archives.force.delete')->withTrashed();

// Rute untuk Pengaturan Aplikasi -> Bagian
Route::get('/settings/sections', [SectionController::class, 'index'])->name('settings.sections.index');
Route::post('/settings/sections', [SectionController::class, 'store'])->name('settings.sections.store');
Route::put('/settings/sections/{section}', [SectionController::class, 'update'])->name('settings.sections.update');
Route::delete('/settings/sections/{section}', [SectionController::class, 'destroy'])->name('settings.sections.destroy');

// Rute untuk Pengaturan Aplikasi -> Bagian -> Arsip
Route::get('/settings/sections/archives', [SectionArchiveController::class, 'index'])->name('settings.sections.archives.index');
Route::put('/settings/sections/{section}/restore', [SectionArchiveController::class, 'restore'])->name('settings.sections.archives.restore')->withTrashed();
Route::delete('/settings/sections/{section}/force-delete', [SectionArchiveController::class, 'forceDelete'])->name('settings.sections.archives.force.delete')->withTrashed();

//Rute untuk Pengaturan Aplikasi -> Jabatan
Route::get('/settings/positions', [PositionController::class, 'index'])->name('settings.positions.index');
Route::post('/settings/positions', [PositionController::class, 'store'])->name('settings.positions.store');
Route::put('/settings/positions/{position}', [PositionController::class, 'update'])->name('settings.positions.update');
Route::delete('/settings/positions/{position}', [PositionController::class, 'destroy'])->name('settings.positions.destroy');

// Rute untuk Pengaturan Aplikasi -> Jabatan -> Arsip
Route::get('/settings/positions/archives', [PositionArchiveController::class, 'index'])->name('settings.positions.archives.index');
Route::put('/settings/positions/{position}/restore', [PositionArchiveController::class, 'restore'])->name('settings.positions.archives.restore')->withTrashed();
Route::delete('/settings/positions/{position}/force-delete', [PositionArchiveController::class, 'forceDelete'])->name('settings.positions.archives.force.delete')->withTrashed();

// Rute untuk Pengaturan Aplikasi -> Peran
Route::get('/settings/roles', [RoleController::class, 'index'])->name('settings.roles.index');
Route::post('/settings/roles', [RoleController::class, 'store'])->name('settings.roles.store');
Route::put('/settings/roles/{role}', [RoleController::class, 'update'])->name('settings.roles.update');
Route::delete('/settings/roles/{role}', [RoleController::class, 'destroy'])->name('settings.roles.destroy');

// Rute untuk Pengaturan Aplikasi -> Peran -> Arsip
Route::get('/settings/roles/archive', [RoleArchiveController::class, 'index'])->name("settings.roles.archives.index");
Route::put('/settings/roles/{role}/restore', [RoleArchiveController::class, 'restore'])->name("settings.roles.archives.restore")->withTrashed();
Route::delete('/settings/roles/{role}/force-delete', [RoleArchiveController::class, 'forceDelete'])->name('settings.roles.archives.force.delete')->withTrashed();

//Rute untuk Pengaturan Aplikasi -> Hak Akses
Route::get('/settings/permissions', [PermissionController::class, 'index'])->name('settings.permissions.index');
