<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingDashboardPage extends Controller
{
    public function __invoke(Request $request)
    {
        return view('contents.settings-dashboard');
    }
}
