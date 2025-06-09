<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function edit()
    {
        // Logic to retrieve and display the about page content for editing
        return view('admin.about.edit');
    }
}
