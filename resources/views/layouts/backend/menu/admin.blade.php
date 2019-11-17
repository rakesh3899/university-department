<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ (Route::is('backend.admin.dashboard')) ? 'active' : '' }}">
                    <a href="{{ route('backend.admin.dashboard') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>

                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Page layouts</span>
                        <span class="pcoded-badge label label-warning">NEW</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Vertical</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="">
                                    <a href="menu-static.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Static Layout</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="menu-header-fixed.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Header Fixed</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="menu-compact.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Compact</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="menu-sidebar.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Sidebar Fixed</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="menu-bottom.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Bottom Menu</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="navbar-light.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-menu"></i>
</span>
                        <span class="pcoded-mtext">Navigation</span>
                    </a>
                </li>

            </ul>

            <div class="pcoded-navigation-label">Website Maintenance</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <li class="{{ (Route::is('backend.admin.aboutus')) ? 'active' : '' }}">
                        <a href="{{ route('backend.admin.aboutus') }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="feather icon-type"></i></span>
                            <span class="pcoded-mtext">About Us</span>
                        </a>
                    </li>
                </li>
                <li class="pcoded-hasmenu">
                    <li class="{{ (Route::is('backend.admin.headmessage')) ? 'active' : '' }}">
                        <a href="{{ route('backend.admin.headmessage') }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>
                            <span class="pcoded-mtext">Head Message</span>
                        </a>
                    </li>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">News</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ (Route::is('backend.admin.news.create')) ? 'active' : '' }}">
                            <a href="{{ route('backend.admin.news.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add News</span>
                            </a>
                        </li>
                        <li class="{{ (Route::is('backend.admin.news.index')) ? 'active' : '' }}">
                            <a href="{{ route('backend.admin.news.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">News List</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="pcoded-navigation-label">UI Element</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-box"></i>
</span>
                        <span class="pcoded-mtext">Basic</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="alert.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Alert</span>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>


        </div>
    </div>
</nav>