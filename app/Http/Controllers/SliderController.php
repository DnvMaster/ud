<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function slider()
    {
        $slider = Slider::find(1);
        return view('admin.slide.slide_all',compact('slider'));
    }
}
