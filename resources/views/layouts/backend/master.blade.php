<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Admindek | Admin Template</title>


    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <link rel="icon" href="https://colorlib.com//polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/bower_components/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/backend/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/assets/icon/feather/css/feather.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/assets/css/font-awesome-n.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/backend/bower_components/chartist/css/chartist.css') }}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/assets/css/widget.css') }}">
</head>
<body>

<div class="loader-bg">
    <div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        {{--header top section--}}
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a href="index.html">
                        {{ config('app.name') }}
                    </a>
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu icon-toggle-right"></i>
                    </a>
                    <a class="mobile-options waves-effect waves-light">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
<span class="input-group-prepend search-close">
<i class="feather icon-x input-group-text"></i>
</span>
                                    <input type="text" class="form-control" placeholder="Enter Keyword">
                                    <span class="input-group-append search-btn">
<i class="feather icon-search input-group-text"></i>
</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-41438d924fbf9773c880c4b8-="">
                                <i class="full-screen feather icon-maximize"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-bell"></i>
                                    <span class="badge bg-c-red">5</span>
                                </div>
                                <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{ asset('public/backend/assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{ asset('public/backend/assets/images/avatar-3.jpg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{ asset('public/backend/assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-message-square"></i>
                                    <span class="badge bg-c-green">3</span>
                                </div>
                            </div>
                        </li>
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('public/backend/assets/images/avatar-4.jpg') }}" class="img-radius" alt="User-Profile-Image">
                                    <span>{{ Auth::user()->fname }} {{ Auth::user()->lname }}</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="#!">
                                            <i class="feather icon-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="feather icon-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html">
                                            <i class="feather icon-mail"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html">
                                            <i class="feather icon-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout_form').submit();">
                                            <i class="feather icon-log-out"></i> Logout
                                        </a>
                                        <form action="{{ route('logout') }}" method="post" id="logout_form">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{--end header top section--}}

        <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="p-fixed users-main">
                    <div class="user-box">
                        <div class="chat-search-box">
                            <a class="back_friendlist">
                                <i class="feather icon-x"></i>
                            </a>
                            <div class="right-icon-control">
                                <div class="input-group input-group-button">
                                    <input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-friend-list">
                            <div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius img-radius" src="{{ asset('public/backend/assets/images/avatar-3.jpg') }}" alt="Generic placeholder image ">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="chat-header">Josephin Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{ asset('public/backend/assets/images/avatar-2.jpg') }}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{ asset('public/backend/assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alice</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{ asset('public/backend/assets/images/avatar-3.jpg') }}" alt="Generic placeholder image">
                                    <div class="live-status bg-default"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{ asset('public/backend/assets/images/avatar-2.jpg') }}" alt="Generic placeholder image">
                                    <div class="live-status bg-default"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="feather icon-x"></i> Josephin Doe
                </a>
            </div>
            <div class="main-friend-chat">
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="{{ asset('public/backend/assets/images/avatar-2.jpg') }}" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">Ohh! very nice</p>
                        </div>
                        <p class="chat-time">8:22 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="{{ asset('public/backend/assets/images/avatar-2.jpg') }}" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">can you come with me?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="chat-reply-box">
                <div class="right-icon-control">
                    <div class="input-group input-group-button">
                        <input type="text" class="form-control" placeholder="Write hear . . ">
                        <div class="input-group-append">
                            <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

                @if( Auth::user()->role->id == 1 )
                    @include('layouts.backend.menu.admin')
                @elseif( Auth::user()->role->id == 2 )
                    @include('layouts.backend.menu.teacher')
                @else
                    @include('layouts.backend.menu.student')
                @endif
                <div class="pcoded-content">

                    <div class="page-header card">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="feather icon-home bg-c-blue"></i>
                                    <div class="d-inline">
                                        <h5>Dashboard</h5>
                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class=" breadcrumb breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.html"><i class="feather icon-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">

                                    <div class="row">

                                        <div class="col-md-12 col-xl-8">
                                            <div class="card sale-card">
                                                <div class="card-header">
                                                    <h5>Deals Analytics</h5>
                                                </div>
                                                <div class="card-block">
                                                    <div id="sales-analytics" class="chart-shadow" style="height:380px"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-4">
                                            <div class="card comp-card">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <h6 class="m-b-25">Impressions</h6>
                                                            <h3 class="f-w-700 text-c-blue">1,563</h3>
                                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-eye bg-c-blue"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card comp-card">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <h6 class="m-b-25">Goal</h6>
                                                            <h3 class="f-w-700 text-c-green">30,564</h3>
                                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-bullseye bg-c-green"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card comp-card">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <h6 class="m-b-25">Impact</h6>
                                                            <h3 class="f-w-700 text-c-yellow">42.6%</h3>
                                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-hand-paper bg-c-yellow"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-12">
                                            <div class="card proj-progress-card">
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-md-6">
                                                            <h6>Published Project</h6>
                                                            <h5 class="m-b-30 f-w-700">532<span class="text-c-green m-l-10">+1.69%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-c-red" style="width:25%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <h6>Completed Task</h6>
                                                            <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-c-blue" style="width:65%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <h6>Successfull Task</h6>
                                                            <h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+0.99%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-c-green" style="width:85%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <h6>Ongoing Project</h6>
                                                            <h5 class="m-b-30 f-w-700">365<span class="text-c-green m-l-10">+0.35%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12 col-xl-4">
                                            <div class="card card-blue text-white">
                                                <div class="card-block p-b-0">
                                                    <div class="row m-b-50">
                                                        <div class="col">
                                                            <h6 class="m-b-5">Sales In July</h6>
                                                            <h5 class="m-b-0 f-w-700">$2665.00</h5>
                                                        </div>
                                                        <div class="col-auto text-center">
                                                            <p class="m-b-5">Direct Sale</p>
                                                            <h6 class="m-b-0">$1768</h6>
                                                        </div>
                                                        <div class="col-auto text-center">
                                                            <p class="m-b-5">Referal</p>
                                                            <h6 class="m-b-0">$897</h6>
                                                        </div>
                                                    </div>
                                                    <div id="sec-ecommerce-chart-line" class="" style="height:60px"></div>
                                                    <div id="sec-ecommerce-chart-bar" style="height:195px"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-12">
                                            <div class="card latest-update-card">
                                                <div class="card-header">
                                                    <h5>What’s New</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                            <li><i class="feather icon-maximize full-card"></i></li>
                                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                                            <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                            <li><i class="feather icon-trash close-card"></i></li>
                                                            <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="scroll-widget">
                                                        <div class="latest-update-box">
                                                            <div class="row p-t-20 p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <img src="{{ asset('public/backend/assets/images/avatar-4.jpg') }}" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Your Manager Posted.</h6></a>
                                                                    <p class="text-muted m-b-0">Jonny michel</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>You have 3 pending Task.</h6></a>
                                                                    <p class="text-muted m-b-0">Hemilton</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>New Order Received.</h6></a>
                                                                    <p class="text-muted m-b-0">Hemilton</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <img src="{{ asset('public/backend/assets/images/avatar-4.jpg') }}" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Your Manager Posted.</h6></a>
                                                                    <p class="text-muted m-b-0">Jonny michel</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>You have 3 pending Task.</h6></a>
                                                                    <p class="text-muted m-b-0">Hemilton</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>New Order Received.</h6></a>
                                                                    <p class="text-muted m-b-0">Hemilton</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="card latest-update-card">
                                                <div class="card-header">
                                                    <h5>Latest Activity</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                            <li><i class="feather icon-maximize full-card"></i></li>
                                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                                            <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                            <li><i class="feather icon-trash close-card"></i></li>
                                                            <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="scroll-widget">
                                                        <div class="latest-update-box">
                                                            <div class="row p-t-20 p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="b-primary update-icon ring"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Devlopment & Update</h6></a>
                                                                    <p class="text-muted m-b-0">Lorem ipsum dolor sit amet, <a href="#!" class="text-c-blue"> More</a></p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="b-primary update-icon ring"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Showcases</h6></a>
                                                                    <p class="text-muted m-b-0">Lorem dolor sit amet, <a href="#!" class="text-c-blue"> More</a></p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="b-success update-icon ring"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Miscellaneous</h6></a>
                                                                    <p class="text-muted m-b-0">Lorem ipsum dolor sit ipsum amet, <a href="#!" class="text-c-green"> More</a></p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="b-danger update-icon ring"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Your Manager Posted.</h6></a>
                                                                    <p class="text-muted m-b-0">Lorem ipsum dolor sit amet, <a href="#!" class="text-c-red"> More</a></p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="b-primary update-icon ring"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Showcases</h6></a>
                                                                    <p class="text-muted m-b-0">Lorem dolor sit amet, <a href="#!" class="text-c-blue"> More</a></p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                    <i class="b-success update-icon ring"></i>
                                                                </div>
                                                                <div class="col p-l-5">
                                                                    <a href="#!"><h6>Miscellaneous</h6></a>
                                                                    <p class="text-muted m-b-0">Lorem ipsum dolor sit ipsum amet, <a href="#!" class="text-c-green"> More</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="card table-card">
                                                <div class="card-header">
                                                    <h5>New Products</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                            <li><i class="feather icon-maximize full-card"></i></li>
                                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                                            <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                            <li><i class="feather icon-trash close-card"></i></li>
                                                            <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block p-b-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover m-b-0">
                                                            <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Product Code</th>
                                                                <th>Customer</th>
                                                                <th>Status</th>
                                                                <th>Rating</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>Sofa</td>
                                                                <td>#PHD001</td>
                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6203000122050f030b0e4c010d0f">[email&#160;protected]</a></td>
                                                                <td><label class="label label-danger">Out Stock</label></td>
                                                                <td>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Computer</td>
                                                                <td>#PHD002</td>
                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e98a8d8aa98e84888085c78a8684">[email&#160;protected]</a></td>
                                                                <td><label class="label label-success">In Stock</label></td>
                                                                <td>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mobile</td>
                                                                <td>#PHD003</td>
                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6010111220070d01090c4e030f0d">[email&#160;protected]</a></td>
                                                                <td><label class="label label-danger">Out Stock</label></td>
                                                                <td>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Coat</td>
                                                                <td>#PHD004</td>
                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c3a1a0b083a4aea2aaafeda0acae">[email&#160;protected]</a></td>
                                                                <td><label class="label label-success">In Stock</label></td>
                                                                <td>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Watch</td>
                                                                <td>#PHD005</td>
                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c0a3a4a380a7ada1a9aceea3afad">[email&#160;protected]</a></td>
                                                                <td><label class="label label-success">In Stock</label></td>
                                                                <td>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shoes</td>
                                                                <td>#PHD006</td>
                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3343424173545e525a5f1d505c5e">[email&#160;protected]</a></td>
                                                                <td><label class="label label-danger">Out Stock</label></td>
                                                                <td>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                    <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="styleSelector">
                </div>

            </div>
        </div>
    </div>
</div>





<script data-cfasync="false" src="{{ asset('public/backend/assets/js/email-decode.min.js') }}"></script>
<script src="{{ asset('public/backend/bower_components/jquery/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/backend/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('public/backend/bower_components/popper.js/js/popper.min.js') }}"></script>
<script src="{{ asset('public/backend/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('public/backend/assets/pages/waves/js/waves.min.js') }}"></script>

<script src="{{ asset('public/backend/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>

<script src="{{ asset('public/backend/assets/pages/chart/float/jquery.flot.js') }}"></script>
<script src="{{ asset('public/backend/assets/pages/chart/float/jquery.flot.categories.js') }}" ></script>
<script src="{{ asset('public/backend/assets/pages/chart/float/curvedLines.js') }}" ></script>
<script src="{{ asset('public/backend/assets/pages/chart/float/jquery.flot.tooltip.min.js') }}" ></script>

<script src="{{ asset('public/backend/bower_components/chartist/js/chartist.js') }}" ></script>

<script src="{{ asset('public/backend/assets/pages/widget/amchart/amcharts.js') }}" ></script>
<script src="{{ asset('public/backend/assets/pages/widget/amchart/serial.js') }}" ></script>
<script src="{{ asset('public/backend/assets/pages/widget/amchart/light.js') }}" ></script>

<script src="{{ asset('public/backend/assets/js/pcoded.min.js') }}" ></script>
<script src="{{ asset('public/backend/assets/js/vertical/vertical-layout.min.js') }}" ></script>
<script src="{{ asset('public/backend/assets/pages/dashboard/custom-dashboard.min.js') }}"></script>
<script src="{{ asset('public/backend/assets/js/script.min.js') }}"></script>


{{--<script src="{{ asset('public/backend/assets/js/rocket-loader.min.js') }}" data-cf-settings="41438d924fbf9773c880c4b8-|49" defer=""></script>--}}
</body>

</html>
