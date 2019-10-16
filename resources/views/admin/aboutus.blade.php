@extends('layouts.backend.master')
@push('css')
    <style>
        .ck .ck-content{min-height:450px;}
    </style>
@endpush
@section('page-header')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>About Us</h5>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('backend.admin.dashboard') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">About Us</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="card">
                                <div class="card-header">
                                    <h5>About Us Section Editor</h5>
                                    <span>Enter About Us Title, Image, Description</span>
                                </div>
                                <div class="card-block">
                                    <form action="{{ route('backend.admin.post_aboutus') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label for="title">Enter about us title</label>
                                                    <input type="text" class="form-control" id="title" name="title" value="{{ $about->title }}">
                                                </div>
                                                <div class="form-group">
                                                    <textarea id="editor" name="description">{!! $about->description !!}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="image">Choose about us section image</label>
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                                <div class="from-group">
                                                    <label for="featured_img">Preview</label>
                                                    <img src="{{ asset( $about->image ) }}" alt="" class="img-preview" style="min-height: 105px;">
                                                    <hr/>
                                                </div>
                                                <div class="form-group">
                                                    <div style="" class="">
                                                        <button type="reset" class="btn btn-danger">Reset</button>
                                                        <button type="submit" class="btn btn-primary pull-right ">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
    {{--<script src="{{ asset('public/backend/assets/js/editor.js') }}"></script>--}}
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                //console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush