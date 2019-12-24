@extends('layouts.backend.master')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend') }}/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend') }}/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend') }}/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <style>
        .news_list_img{
            width:200px;
            height:100px;
        }
    </style>
@endpush
@section('page-header')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>News List</h5>
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
                        <li class="breadcrumb-item"><a href="#!">News List</a> </li>
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
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SL NO</th>
                                        <th>News Title</th>
                                        <th>Image</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php($i = 0)
                                @foreach($newses as $news)
                                    @php($i++)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $news->title }}</td>
                                        <td><img src='{{ asset($news->image) }}' class="news_list_img" alt='{{ $news->title }}'></td>
                                        <td>{{ $news->created_at->diffForHumans() }}</td>
                                        <td>2011/04/25</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL NO</th>
                                        <th>News Title</th>
                                        <th>Image</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('public/backend') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('public/backend') }}/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('public/backend') }}/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('public/backend') }}/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('public/backend') }}/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('public/backend') }}/assets/pages/data-table/js/data-table-custom.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endpush