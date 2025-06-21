<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function about()
    {
        $about = About::find(1);
        return view('admin.admin_about', compact('about'));
    }
}
