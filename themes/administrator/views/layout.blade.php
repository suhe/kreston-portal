<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta name="description" content="Admin, Dashboard, Bootstrap">
    <meta name="csrf_token" content="{!! csrf_token() !!}" />
    <link rel="shortcut icon" sizes="196x196" href="{!! Theme::asset('administrator::images/logo.png') !!}" />
    <title>Infinity - Bootstrap Admin Template</title>
    <link rel="stylesheet" href="{!! Theme::asset('libs/bower/font-awesome/css/font-awesome.min.css') !!}" />
    <link rel="stylesheet" href="{!! Theme::asset('libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css') !!}" />
    <link rel="stylesheet" href="{!! Theme::asset('css/app.min.css') !!}" />
    <link rel="stylesheet" href="{!! Theme::asset('libs/bower/jquery-confirm/jquery-confirm.min.css') !!}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
    <script src="{!! Theme::asset('libs/bower/breakpoints.js/dist/breakpoints.min.js') !!}"></script>
    <script>Breakpoints();</script>
</head>
<body class="menubar-left menubar-unfold menubar-light theme-primary">
<nav id="app-navbar" class="navbar navbar-inverse navbar-fixed-top primary">
    <div class="navbar-header">
        <button type="button" id="menubar-toggle-btn"
                class="navbar-toggle visible-xs-inline-block navbar-toggle-left hamburger hamburger--collapse js-hamburger">
            <span class="sr-only">Toggle navigation</span> <span class="hamburger-box"><span
                        class="hamburger-inner"></span></span></button>
        <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse"
                data-target="#app-navbar-collapse" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
            <span class="zmdi zmdi-hc-lg zmdi-more"></span></button>
        <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse"
                data-target="#navbar-search" aria-expanded="false"><span class="sr-only">Toggle navigation</span> <span
                    class="zmdi zmdi-hc-lg zmdi-search"></span></button>
        <a href="index.html" class="navbar-brand"><span class="brand-icon"><i class="fa fa-gg"></i></span> <span
                    class="brand-name">Infinity</span></a>
    </div>

    <div class="navbar-container container-fluid">
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
                <li class="hidden-float hidden-menubar-top"><a href="javascript:void(0)" role="button"
                                                               id="menubar-fold-btn"
                                                               class="hamburger hamburger--arrowalt is-active js-hamburger"><span
                                class="hamburger-box"><span class="hamburger-inner"></span></span></a></li>
                <li><h5 class="page-title hidden-menubar-top hidden-float"></h5></li>
            </ul>
            <ul class="nav navbar-toolbar navbar-toolbar-right navbar-right">
                <li class="nav-item dropdown hidden-float"><a href="javascript:void(0)" data-toggle="collapse"
                                                              data-target="#navbar-search" aria-expanded="false"><i
                                class="zmdi zmdi-hc-lg zmdi-search"></i></a></li>
                <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false"><i
                                class="zmdi zmdi-hc-lg zmdi-notifications"></i></a>
                    <div class="media-group dropdown-menu animated flipInY"><a href="javascript:void(0)"
                                                                               class="media-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <div class="avatar avatar-xs avatar-circle"><img src="assets/images/221.jpg" alt="">
                                        <i class="status status-online"></i></div>
                                </div>
                                <div class="media-body"><h5 class="media-heading">John Doe</h5>
                                    <small class="media-meta">Active now</small>
                                </div>
                            </div>
                        </a> <a href="javascript:void(0)" class="media-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <div class="avatar avatar-xs avatar-circle"><img src="assets/images/205.jpg" alt="">
                                        <i class="status status-offline"></i></div>
                                </div>
                                <div class="media-body"><h5 class="media-heading">{!! Auth::user()->first_name !!}</h5>
                                    <small class="media-meta">2 hours ago</small>
                                </div>
                            </div>
                        </a> <a href="javascript:void(0)" class="media-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <div class="avatar avatar-xs avatar-circle"><img src="assets/images/207.jpg" alt="">
                                        <i class="status status-away"></i></div>
                                </div>
                                <div class="media-body"><h5 class="media-heading">Sara Smith</h5>
                                    <small class="media-meta">idle 5 min ago</small>
                                </div>
                            </div>
                        </a> <a href="javascript:void(0)" class="media-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <div class="avatar avatar-xs avatar-circle"><img src="assets/images/211.jpg" alt="">
                                        <i class="status status-away"></i></div>
                                </div>
                                <div class="media-body"><h5 class="media-heading">Donia Dyab</h5>
                                    <small class="media-meta">idle 5 min ago</small>
                                </div>
                            </div>
                        </a></div>
                </li>
                <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false"><i
                                class="zmdi zmdi-hc-lg zmdi-settings"></i></a>
                    <ul class="dropdown-menu animated flipInY">
                        <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>My
                                Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>Balance</a>
                        </li>
                        <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-phone-msg"></i>Connection<span
                                        class="label label-primary">3</span></a></li>
                        <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-info"></i>privacy</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
<aside id="menubar" class="menubar light">
    <div class="app-user">
        <div class="media">
            <div class="media-left">
                <div class="avatar avatar-md avatar-circle">
                    <a href="javascript:void(0)">
                        <img class="img-responsive" src="{!! Theme::asset('images/221.jpg') !!}" alt="avatar">
                    </a>
                </div>
            </div>
            <div class="media-body">
                <div class="foldable">
                    <h5><a href="javascript:void(0)" class="username">{!! Auth::user()->first_name !!}</a></h5>
                    <ul>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <small>{!! Auth::user()->email!!}</small> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">
                                <li><a class="text-color" href="/index.html"><span class="m-r-xs"><i class="fa fa-home"></i></span> <span>Home</span></a></li>
                                <li><a class="text-color" href="profile.html"><span class="m-r-xs"><i class="fa fa-user"></i></span> <span>Profile</span></a></li>
                                <li><a class="text-color" href="settings.html"><span class="m-r-xs"><i class="fa fa-gear"></i></span> <span>Settings</span></a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="text-color" href="{!! url("session/logout") !!}"><span class="m-r-xs"><i class="fa fa-power-off"></i></span> <span>{!! Lang::get("action.logout") !!}</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">
                <li class="has-submenu"><a href="javascript:void(0)" class="submenu-toggle"><i
                                class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i> <span
                                class="menu-text">Dashboards</span> <i
                                class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="index.html"><span class="menu-text">Web Statistic</span></a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-puzzle-piece zmdi-hc-lg"></i> <span class="menu-text">Home Page</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="{!! url("home-banner/administrator") !!}"><span class="menu-text">Banner</span></a></li>

                    </ul>
                </li>
                <li>
                    <a href="search.web.html"><i class="menu-icon zmdi zmdi-search zmdi-hc-lg"></i> <span class="menu-text">Job vacancy</span></a>
                </li>
                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle"><i class="menu-icon zmdi zmdi-pages zmdi-hc-lg"></i>
                        <span class="menu-text">Pages</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="profile.html"><span class="menu-text">Navigation</span></a></li>
                        <li><a href="{!! url("news/administrator") !!}"><span class="menu-text">News</span></a></li>
                        <li><a href="{!! url("page/administrator") !!}"><span class="menu-text">Static Page</span></a></li>
                        <li><a href="invoice.html"><span class="menu-text">Article</span></a></li>
                    </ul>
                </li>
                <li class="has-submenu"><a href="javascript:void(0)" class="submenu-toggle"><i
                                class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i> <span class="menu-text">Company Profile</span> <i
                                class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="{!! url("people/administrator") !!}"><span class="menu-text">Our People</span></a></li>
                        <li><a href="form.elements.html"><span class="menu-text">Contact Us</span></a></li>
                        <li><a href="form.elements.html"><span class="menu-text">Newsletter</span></a></li>
                    </ul>
                </li>
                <li class="has-submenu"><a href="javascript:void(0)" class="submenu-toggle"><i
                                class="menu-icon zmdi zmdi-storage zmdi-hc-lg"></i> <span class="menu-text">Media</span> <i
                                class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="tables.basic.html"><span class="menu-text">Gallery</span></a></li>

                    </ul>
                </li>
                <li class="has-submenu"><a href="javascript:void(0)" class="submenu-toggle"><i
                                class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i> <span class="menu-text">Administration</span> <span
                                <i
                                class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="{!! url('user/administrator') !!}"><span class="menu-text">{!! Lang::get("app.user")!!}</span></a></li>
                        <li><a href="echarts.bar.html"><span class="menu-text">Setting</span></a></li>
                    </ul>
                </li>


            </ul>
        </div>
    </div>
</aside>
<div id="navbar-search" class="navbar-search collapse">
    <div class="navbar-search-inner">
        <form action="#"><span class="search-icon"><i class="fa fa-search"></i></span> <input class="search-field"
                                                                                              type="search"
                                                                                              placeholder="search...">
        </form>
        <button type="button" class="search-close" data-toggle="collapse" data-target="#navbar-search"
                aria-expanded="false"><i class="fa fa-close"></i></button>
    </div>
    <div class="navbar-search-backdrop" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false"></div>
</div>
<main id="app-main" class="app-main">
    <div class="wrap">
        <section class="app-content">
        @yield("content")
		<div id="divLoading"></div>
        </section>
    </div>
    <div class="wrap p-t-0">
        <footer class="app-footer">
            <div class="clearfix">
                <ul class="footer-menu pull-right">
                    <li><a href="javascript:void(0)">Careers</a></li>
                    <li><a href="javascript:void(0)">Privacy Policy</a></li>
                    <li><a href="javascript:void(0)">Feedback <i class="fa fa-angle-up m-l-md"></i></a></li>
                </ul>
                <div class="copyright pull-left">Copyright &copy; {!! date('Y') !!}</div>
            </div>
        </footer>
    </div>
</main>

<script src="{!! Theme::asset('js/core.min.js') !!}"></script>
<script src="{!! Theme::asset('js/app.min.js') !!}"></script>
<script src="{!! Theme::asset('libs/bower/moment/moment.js') !!}"></script>
<script src="{!! Theme::asset('libs/bower/fullcalendar/dist/fullcalendar.min.js') !!}"></script>
<script src="{!! Theme::asset('assets/js/fullcalendar.js') !!}"></script>
<script src="{!! Theme::asset('libs/bower/jquery-confirm/jquery-confirm.min.js') !!}"></script>
@stack('scripts')
</body>
</html>