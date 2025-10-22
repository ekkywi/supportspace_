<?php

namespace App\Http\Controllers\Modules\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        return view('contents.settings-permissions');
    }
}
