<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function assetflow()
    {
        return view('pages.projects.assetflow');
    }
}
