<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginForm;
use App\Http\Controllers\Auth\ForgotPasswordForm;
use App\Http\Controllers\Portal\PortalPage;
use App\Http\Controllers\Portal\ApplicationPage;
use App\Http\Controllers\Portal\MyProfilePage;
use App\Http\Controllers\Setting\SettingPortalPage;

Route::get('/login', LoginForm::class)->name('login');
Route::get('/forgot-password', ForgotPasswordForm::class)->name('forgot-password');
Route::get('/portal', PortalPage::class)->name('portal');
Route::get('/application', ApplicationPage::class)->name('application');
Route::get('/my-profile', MyProfilePage::class)->name('my-profile');

// Router for setting application
Route::get('/settings/dashboard', SettingPortalPage::class)->name('settings.dashboard');
