<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyProfilePage extends Controller
{
    public function __invoke(Request $request)
    {
        return view('contents.my-profile');
    }
}
