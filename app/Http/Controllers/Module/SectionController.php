<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        return view('contents.settings-sections');
    }
}
