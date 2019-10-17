<?php

namespace App\Http\Controllers\Backend\Admin;

use App\HeadMessage;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class HeadMessageController extends Controller
{
    public function index()
    {
        $about = HeadMessage::find(1);
        return view('admin.headmessage', compact('about'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description'   => 'required',
            'image' => 'image|mimes:jpeg,jpg,png'
        ]);

        if( HeadMessage::find(1) ){
            $aboutus = HeadMessage::find(1);
        }
        else
        {
            $aboutus = new HeadMessage();
        }
        $aboutus->title = $request->get('title');
        $aboutus->description = $request->get('description');
        $image = $request->file('image');
        if ( isset($image) )
        {
            $image_name = "head".'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize (220,180)->save('storage/app/public/'.$image_name);
            $image_path = 'storage/app/public/'.$image_name;
        }
        else
        {
            $image_path = ($aboutus->image)? $aboutus->image : "";
        }
        $aboutus->image = $image_path;
        $aboutus->save();
        Toastr::success('Hed\'s Message content saved', 'Success');
        return redirect()->back();
    }
}
