<?php

namespace App\Http\Controllers\Backend\Admin;

use App\News;
use Brian2694\Toastr\Facades\Toastr;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description'   => 'required',
            'image' => 'image|mimes:jpeg,jpg,png'
        ]);

        $image = $request->file('image');
        if ( isset($image) )
        {
            $image_name = "aboutus".'.'.$image->getClientOriginalExtension();
            if ( !Storage::disk('public')->exists('news') )
            {
                Storage::disk('public')->makeDirectory('news');
            }
            Image::make($image)->resize (1110,111)->save('storage/app/public/news'.$image_name);
            $image_path = 'storage/app/public/news'.$image_name;
        }
        else
        {
            $image_path = "";
        }

        $news = new News();
        $news->title = $request->get('title');
        $news->description = $request->get('description');
        $news->slug = Str::slug( $request->get('title'), '_' );
        $news->image = $image_path;
        $news->save();
        Toastr::success('News saved successfully!', 'Success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
