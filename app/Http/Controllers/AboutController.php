<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Intervention\Image\Laravel\Facades\Image;

class AboutController extends Controller
{
    public function about()
    {
        $about = About::find(1);
        return view('admin.admin_about', compact('about'));
    }

     public function aboutUpdate(Request $request)
    {
        $about_id = $request->id;
        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::read($image)->resize(523,605)->save('upload/about/'.$name_gen);
            $save_url = 'upload/about/'.$name_gen;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about' => $save_url,
            ]);
            $notification = array(
                'message' => 'Изображение секции о нас, успешно обновлено.',
                'alert-type' => 'success',
            );
            return redirect()->back()->with($notification);
        } else {
             About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
            ]);
            $notification = array(
                'message' => 'Изображение секции о нас не обновлено.',
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notification);
        }
    }

}
