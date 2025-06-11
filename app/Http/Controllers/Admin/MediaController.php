<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index(){

        $medias= Media::latest()->get();
        return view('admin.medias.index', compact('medias'));
    }
}
