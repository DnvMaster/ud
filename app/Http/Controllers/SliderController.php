<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Intervention\Image\Laravel\Facades\Image;

class SliderController extends Controller
{
    public function slider()
    {
        $slider = Slider::find(1);
        return view('admin.slide.slide_all',compact('slider'));
    }

    public function updateSlider(Request $request)
    {
        $slide_id = $request->id;
        if ($request->file('slider')) {
            $image = $request->file('slider');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::read($image)->resize(636,852)->save('upload/slider/'.$name_gen);
            $save_url = 'upload/slider/'.$name_gen;

            Slider::findOrFail($slide_id)->update([
                'title'       => $request->title,
                'short_title' => $request->short_title,
                'video_url'   => $request->video_url,
                'slider'      => $save_url,
            ]);
            $notification = array(
                'message' => 'Изображение слайда, успешно обновлено.',
                'alert-type' => 'success',
            );
            return redirect()->back()->with($notification);
        } else {
             Slider::findOrFail($slider_id)->update([
                'title'=> $request->title,
                'short_title'=> $request->short_title,
                'video_url'=> $request->video_url,
            ]);
            $notification = array(
                'message' => 'Изображение слайда, не обновлено.',
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notification);
        }
    }
}