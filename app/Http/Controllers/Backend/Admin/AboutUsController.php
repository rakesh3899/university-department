<?php

namespace App\Http\Controllers\Backend\Admin;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AboutUs;
use Intervention\Image\Facades\Image;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = AboutUs::find(1);
        return view('admin.aboutus', compact('about'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description'   => 'required',
            'image' => 'image|mimes:jpeg,jpg,png'
        ]);

        if( AboutUs::find(1) ){
            $aboutus = AboutUs::find(1);
        }
        else
        {
            $aboutus = new AboutUs();
        }
        $aboutus->title = $request->get('title');
        $aboutus->description = $request->get('description');
        $image = $request->file('image');
        if ( isset($image) )
        {
            $image_name = "aboutus".'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize (1110,111)->save('storage/app/public/'.$image_name);
            $image_path = 'storage/app/public/'.$image_name;
        }
        else
        {
            $image_path = ($aboutus->image)? $aboutus->image : "";
        }
        $aboutus->image = $image_path;
        $aboutus->save();
        Toastr::success('About us content saved', 'Success');
        return redirect()->back();
    }
}
