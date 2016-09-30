<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta name="description" content="Admin, Dashboard, Bootstrap">
    <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">
    <title>Infinity - Bootstrap Admin Template</title>
    <link rel="stylesheet" href="../libs/bower/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="../assets/css/app.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
    <script src="../libs/bower/breakpoints.js/dist/breakpoints.min.js"></script>
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
        <a href="../index.html" class="navbar-brand"><span class="brand-icon"><i class="fa fa-gg"></i></span> <span
                class="brand-name">Infinity</span></a></div>
    <div class="navbar-container container-fluid">
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
                <li class="hidden-float hidden-menubar-top"><a href="javascript:void(0)" role="button"
                                                               id="menubar-fold-btn"
                                                               class="hamburger hamburger--arrowalt is-active js-hamburger"><span
                            class="hamburger-box"><span class="hamburger-inner"></span></span></a></li>
                <li><h5 class="page-title hidden-menubar-top hidden-float">Dashboard</h5></li>
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
                                    <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/221.jpg"
                                                                                     alt=""> <i
                                            class="status status-online"></i></div>
                                </div>
                                <div class="media-body"><h5 class="media-heading">John Doe</h5>
                                    <small class="media-meta">Active now</small>
                                </div>
                            </div>
                        </a> <a href="javascript:void(0)" class="media-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/205.jpg"
                                                                                     alt=""> <i
                                            class="status status-offline"></i></div>
                                </div>
                                <div class="media-body"><h5 class="media-heading">John Doe</h5>
                                    <small class="media-meta">2 hours ago</small>
                                </div>
                            </div>
                        </a> <a href="javascript:void(0)" class="media-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/207.jpg"
                                                                                     alt=""> <i
                                            class="status status-away"></i></div>
                                </div>
                                <div class="media-body"><h5 class="media-heading">Sara Smith</h5>
                                    <small class="media-meta">idle 5 min ago</small>
                                </div>
                            </div>
                        </a> <a href="javascript:void(0)" class="media-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/211.jpg"
                                                                                     alt=""> <i
                                            class="status status-away"></i></div>
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
                <li class="dropdown"><a href="javascript:void(0)" class="side-panel-toggle" data-toggle="class"
                                        data-target="#side-panel" data-class="open" role="button"><i
                            class="zmdi zmdi-hc-lg zmdi-apps"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
<aside id="menubar" class="menubar light">
    <div class="app-user">
        <div class="media">
            <div class="media-left">
                <div class="avatar avatar-md avatar-circle"><a href="javascript:void(0)"><img class="img-responsive"
                                                                                              src="../assets/images/221.jpg"
                                                                                              alt="avatar"></a></div>
            </div>
            <div class="media-body">
                <div class="foldable"><h5><a href="javascript:void(0)" class="username">John Doe</a></h5>
                    <ul>
                        <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle usertitle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <small>Web Developer</small>
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu animated flipInY">
                                <li><a class="text-color" href="/index.html"><span class="m-r-xs"><i
                                                class="fa fa-home"></i></span> <span>Home</span></a></li>
                                <li><a class="text-color" href="profile.html"><span class="m-r-xs"><i
                                                class="fa fa-user"></i></span> <span>Profile</span></a></li>
                                <li><a class="text-color" href="settings.html"><span class="m-r-xs"><i
                                                class="fa fa-gear"></i></span> <span>Settings</span></a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="text-color" href="logout.html"><span class="m-r-xs"><i
                                                class="fa fa-power-off"></i></span> <span>Home</span></a></li>
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
                            class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i> <span class="menu-text">Dashboards</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="index.html"><span class="menu-text">Dashboard 1</span></a></li>
                        <li><a href="dashboard.2.html"><span class="menu-text">Dashboard 2</span></a></li>
                        <li><a href="dashboard.3.html"><span class="menu-text">Dashboard 3</span></a></li>
                    </ul>
                </li>
                <li class="has-submenu"><a href="javascript:void(0)" class="submenu-toggle"><i
                            class="menu-icon zmdi zmdi-layers zmdi-hc-lg"></i> <span class="menu-text">Layouts</span>
                        <span class="label label-warning menu-label">2</span> <i
                            class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="../default/index.html"><span class="menu-text">Default</span></a></li>
                        <li><a href="../topbar/index.html"><span class="menu-text">Topbar</span></a></li>
                    </ul>
                </li>
                <li class="has-submenu"><a href="javascript:void(0)" class="submenu-toggle"><i
                            class="menu-icon zmdi zmdi-puzzle-piece zmdi-hc-lg"></i> <span
                            class="menu-text">UI Kit</span> <i
                            class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="buttons.html"><span class="menu-text">Buttons</span></a></li>
                        <li><a href="alerts.html"><span class="menu-text">Alerts</span></a></li>
                        <li><a href="panels.html"><span class="menu-text">Panels</span></a></li>
                        <li><a href="lists.html"><span class="menu-text">Lists</span></a></li>
                        <li><a href="icons.html"><span class="menu-text">Icons</span></a></li>
                        <li><a href="media.html"><span class="menu-text">Media</span></a></li>
                        <li><a href="widgets.html"><span class="menu-text">Widgets</span></a></li>
                        <li><a href="tabs.html"><span class="menu-text">Tabs &amp; Accordions</span></a></li>
                        <li><a href="progress.html"><span class="menu-text">Progress</span></a></li>
                    </ul>
                </li>
                <li class="has-submenu"><a href="javascript:void(0)" class="submenu-toggle"><i
                            class="menu-icon zmdi zmdi-inbox zmdi-hc-lg"></i> <span class="menu-text">Mail Box</span> <i
                            class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="inbox.html"><span class="menu-text">Inbox</span> <span
                                    class="label label-primary menu-label">12</span></a></li>
                        <li><a href="compose.html"><span class="menu-text">Compose</span></a></li>
                    </ul>
                </li>
                <li><a href="search.web.html"><i class="menu-icon zmdi zmdi-search zmdi-hc-lg"></i> <span
                            class="menu-text">Search</span></a></li>
                <li class="has-submenu"><a href="javascript:void(0)" class="submenu-toggle"><i
                            class="menu-icon zmdi zmdi-pages zmdi-hc-lg"></i> <span class="menu-text">Pages</span> <i
                            class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="profile.html"><span class="menu-text">Profile</span></a></li>
                        <li><a href="price.html"><span class="menu-text">Prices</span></a></li>
                        <li><a href="invoice.html"><span class="menu-text">Invoice</span></a></li>
                        <li><a href="gallery.1.html"><span class="menu-text">Gallery</span></a></li>
                        <li><a href="gallery.2.html"><span class="menu-text">Gallery 2</span></a></li>
                        <li><a href="support.html"><span class="menu-text">FAQ</span></a></li>
                        <li class="has-submenu"><a href="javascript:void(0)" class="submenu-toggle"><i
                                    class="menu-icon zmdi zmdi-plus zmdi-hc-lg"></i> <span
                                    class="menu-text">Misc Pages</span> <i
                                    class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                            <ul class="submenu">
                                <li><a href="login.html"><span class="menu-text">Login</span></a></li>
                                <li><a href="signup.html"><span class="menu-text">Sign Up</span></a></li>
                                <li><a href="password-forget.html"><span class="menu-text">Reset Password</span></a>
                                </li>
                                <li><a href="unlock.html"><span class="menu-text">Unlock Screen</span></a></li>
                                <li><a href="404.html"><span class="menu-text">404 Error</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu"><a href="javascript:void(0)" class="submenu-toggle"><i
                            class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i> <span class="menu-text">Forms</span> <i
                            class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="form.layouts.html"><span class="menu-text">Form Layouts</span></a></li>
                        <li><a href="form.elements.html"><span class="menu-text">Form Elements</span></a></li>
                        <li><a href="form.custom.html"><span class="menu-text">Customized Elements</span></a></li>
                        <li><a href="form.plugins.html"><span class="menu-text">Form Plugins</span></a></li>
                        <li><a href="file-upload.html"><span class="menu-text">File Upload</span></a></li>
                        <li><a href="form.datetime.html"><span class="menu-text">DateTime Pickers</span></a></li>
                        <li><a href="editors.html"><span class="menu-text">Editors</span></a></li>
                    </ul>
                </li>
                <li class="has-submenu"><a href="javascript:void(0)" class="submenu-toggle"><i
                            class="menu-icon zmdi zmdi-storage zmdi-hc-lg"></i> <span class="menu-text">Tables</span> <i
                            class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="tables.basic.html"><span class="menu-text">Basic Tables</span></a></li>
                        <li><a href="datatables.html"><span class="menu-text">DataTables</span></a></li>
                    </ul>
                </li>
                <li class="has-submenu"><a href="javascript:void(0)" class="submenu-toggle"><i
                            class="menu-icon zmdi zmdi-chart zmdi-hc-lg"></i> <span class="menu-text">Charts</span>
                        <span class="label label-success menu-label">7</span> <i
                            class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="charts.flot.html"><span class="menu-text">Flot Charts</span></a></li>
                        <li><a href="echarts.bar.html"><span class="menu-text">Bar echarts</span></a></li>
                        <li><a href="echarts.pie.html"><span class="menu-text">Pie echarts</span></a></li>
                        <li><a href="echarts.line.html"><span class="menu-text">Line echarts</span></a></li>
                        <li><a href="echarts.map.html"><span class="menu-text">Map echarts</span></a></li>
                        <li><a href="echarts.scatter.html"><span class="menu-text">Scatter echarts</span></a></li>
                        <li><a href="echarts.custom.html"><span class="menu-text">Custom echarts</span></a></li>
                    </ul>
                </li>
                <li class="has-submenu"><a href="javascript:void(0)" class="submenu-toggle"><i
                            class="menu-icon zmdi zmdi-pin zmdi-hc-lg"></i> <span class="menu-text">Maps</span> <i
                            class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="map-google.html"><span class="menu-text">Google Maps</span></a></li>
                        <li><a href="map-vector.html"><span class="menu-text">Vector Maps</span></a></li>
                    </ul>
                </li>
                <li class="has-submenu"><a href="javascript:void(0)" class="submenu-toggle"><i
                            class="menu-icon zmdi zmdi-apps zmdi-hc-lg"></i> <span class="menu-text">Apps</span> <span
                            class="label label-info menu-label">2</span> <i
                            class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
                    <ul class="submenu">
                        <li><a href="calendar.html"><span class="menu-text">Calendar</span></a></li>
                        <li><a href="contacts.html"><span class="menu-text">Contacts</span></a></li>
                    </ul>
                </li>
                <li class="menu-separator">
                    <hr>
                </li>
                <li><a href="documentation.html"><i class="menu-icon zmdi zmdi-file-text zmdi-hc-lg"></i> <span
                            class="menu-text">Documentation</span></a></li>
                <li><a href="javascript:void(0)"><i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i> <span
                            class="menu-text">Settings</span></a></li>
                <li><a href="javascript:void(0)"><i class="menu-icon zmdi zmdi-language-javascript zmdi-hc-lg"></i>
                        <span class="menu-text">Angular Version</span></a></li>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <header class="widget-header"><h4 class="widget-title">DatePicker</h4></header>
                        <hr class="widget-separator">
                        <div class="widget-body">
                            <div class="row">
                                <div class="col-md-4"><label for="datetimepicker1">Inline Display</label>
                                    <div id="datetimepicker1" data-plugin="datetimepicker"
                                         data-options="{ inline: true, viewMode: 'days' }"></div>
                                </div>
                                <div class="col-md-7 col-md-offset-1">
                                    <div class="form-group" style="position: relative"><label for="datetimepicker5">Simple
                                            input with default date</label><input type="text" id="datetimepicker5"
                                                                                  class="form-control"
                                                                                  data-plugin="datetimepicker"
                                                                                  data-options="{ defaultDate: '3/27/2016' }">
                                    </div>
                                    <div class="form-group"><label for="datetimepicker2">Minimum Setup</label>
                                        <div class="input-group date" id="datetimepicker2" data-plugin="datetimepicker">
                                            <input type="text" class="form-control"> <span
                                                class="input-group-addon bg-info text-white"><span
                                                    class="glyphicon glyphicon-calendar"></span></span></div>
                                    </div>
                                    <div class="form-group"><label for="datetimepicker4">Min View Mode</label>
                                        <div class="input-group date" id="datetimepicker4" data-plugin="datetimepicker"
                                             data-options="{ viewMode: 'years', format: 'MM/YYYY' }"><input type="text"
                                                                                                            class="form-control">
                                            <span class="input-group-addon bg-info text-white"><span
                                                    class="glyphicon glyphicon-calendar"></span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="widget">
                        <header class="widget-header"><h4 class="widget-title">Bootstrap Timepicker</h4></header>
                        <hr class="widget-separator">
                        <div class="widget-body">
                            <form action="#" class="form-horizontal">
                                <div class="form-group"><label for="timepicker" class="col-sm-4 control-label">Data
                                        attributes:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group"><input id="timepicker" class="form-control"
                                                                        data-provide="timepicker"
                                                                        data-template="dropdown" data-minute-step="1"
                                                                        type="text"> <span
                                                class="input-group-addon bg-info"><i
                                                    class="glyphicon glyphicon-time"></i></span></div>
                                        <p class="m-h-md">
                                            <small>The timepicker can be instantiated lazily without using javascript
                                                using <code>data-provide="timepicker"</code>.
                                            </small>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group"><label for="timepicker1" class="col-sm-4 control-label">Default
                                        Timepicker:</label>
                                    <div class="input-group bootstrap-timepicker timepicker col-sm-6"><input
                                            id="timepicker1" type="text" class="form-control" data-plugin="timepicker"
                                            data-options="{ showInputs: false }"> <span
                                            class="input-group-addon bg-info"><i
                                                class="glyphicon glyphicon-time"></i></span></div>
                                </div>
                                <div class="form-group"><label for="timepicker2" class="col-sm-4 control-label">24 hour
                                        Timepicker:</label>
                                    <div class="input-group bootstrap-timepicker timepicker col-sm-6"><input
                                            id="timepicker2" type="text" class="form-control input-small"
                                            data-plugin="timepicker"
                                            data-options="{ showInputs: false, showMeridian: false }"> <span
                                            class="input-group-addon bg-info"><i
                                                class="glyphicon glyphicon-time"></i></span></div>
                                </div>
                                <div class="form-group"><label for="timepicker3" class="col-sm-4 control-label">Minute
                                        step Timepicker:</label>
                                    <div class="input-group bootstrap-timepicker timepicker col-sm-6"><input
                                            id="timepicker3" type="text" class="form-control input-small"
                                            data-plugin="timepicker"
                                            data-options="{ minuteStep: 5, disableFocus: true }"> <span
                                            class="input-group-addon bg-info"><i
                                                class="glyphicon glyphicon-time"></i></span></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
                <div class="copyright pull-left">Copyright RaThemes 2016 &copy;</div>
            </div>
        </footer>
    </div>
</main>
<div id="app-customizer" class="app-customizer"><a href="javascript:void(0)" class="app-customizer-toggle theme-color"
                                                   data-toggle="class" data-class="open" data-active="false"
                                                   data-target="#app-customizer"><i class="fa fa-gear"></i></a>
    <div class="customizer-tabs">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#menubar-customizer" aria-controls="menubar-customizer"
                                                      role="tab" data-toggle="tab">Menubar</a></li>
            <li role="presentation"><a href="#navbar-customizer" aria-controls="navbar-customizer" role="tab"
                                       data-toggle="tab">Navbar</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active fade" id="menubar-customizer">
                <div class="hidden-menubar-top hidden-float">
                    <div class="m-b-0"><label for="menubar-fold-switch">Fold Menubar</label>
                        <div class="pull-right"><input id="menubar-fold-switch" type="checkbox" data-switchery
                                                       data-size="small"></div>
                    </div>
                    <hr class="m-h-md">
                </div>
                <div class="radio radio-default m-b-md"><input type="radio" id="menubar-light-theme"
                                                               name="menubar-theme" data-toggle="menubar-theme"
                                                               data-theme="light"><label
                        for="menubar-light-theme">Light</label></div>
                <div class="radio radio-inverse m-b-md"><input type="radio" id="menubar-dark-theme" name="menubar-theme"
                                                               data-toggle="menubar-theme" data-theme="dark"><label
                        for="menubar-dark-theme">Dark</label></div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="navbar-customizer"></div>
        </div>
    </div>
    <hr class="m-0">
    <div class="customizer-reset">
        <button id="customizer-reset-btn" class="btn btn-block btn-outline btn-primary">Reset</button>
        <a href="https://themeforest.net/item/infinity-responsive-web-app-kit/16230780"
           class="m-t-sm btn btn-block btn-danger">Buy Now</a></div>
</div>
<div id="side-panel" class="side-panel">
    <div class="panel-header"><h4 class="panel-title">Friends</h4></div>
    <div class="scrollable-container">
        <div class="media-group"><a href="javascript:void(0)" class="media-group-item">
                <div class="media">
                    <div class="media-left">
                        <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/221.jpg" alt=""> <i
                                class="status status-online"></i></div>
                    </div>
                    <div class="media-body"><h5 class="media-heading">John Doe</h5>
                        <small class="media-meta">active now</small>
                    </div>
                </div>
            </a> <a href="javascript:void(0)" class="media-group-item">
                <div class="media">
                    <div class="media-left">
                        <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/205.jpg" alt=""> <i
                                class="status status-online"></i></div>
                    </div>
                    <div class="media-body"><h5 class="media-heading">John Doe</h5>
                        <small class="media-meta">active now</small>
                    </div>
                </div>
            </a> <a href="javascript:void(0)" class="media-group-item">
                <div class="media">
                    <div class="media-left">
                        <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/206.jpg" alt=""> <i
                                class="status status-online"></i></div>
                    </div>
                    <div class="media-body"><h5 class="media-heading">Adam Kiti</h5>
                        <small class="media-meta">active now</small>
                    </div>
                </div>
            </a> <a href="javascript:void(0)" class="media-group-item">
                <div class="media">
                    <div class="media-left">
                        <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/207.jpg" alt=""> <i
                                class="status status-away"></i></div>
                    </div>
                    <div class="media-body"><h5 class="media-heading">Jane Doe</h5>
                        <small class="media-meta">away</small>
                    </div>
                </div>
            </a> <a href="javascript:void(0)" class="media-group-item">
                <div class="media">
                    <div class="media-left">
                        <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/208.jpg" alt=""> <i
                                class="status status-away"></i></div>
                    </div>
                    <div class="media-body"><h5 class="media-heading">Sara Adams</h5>
                        <small class="media-meta">away</small>
                    </div>
                </div>
            </a> <a href="javascript:void(0)" class="media-group-item">
                <div class="media">
                    <div class="media-left">
                        <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/209.jpg" alt=""> <i
                                class="status status-away"></i></div>
                    </div>
                    <div class="media-body"><h5 class="media-heading">Smith Doe</h5>
                        <small class="media-meta">away</small>
                    </div>
                </div>
            </a> <a href="javascript:void(0)" class="media-group-item">
                <div class="media">
                    <div class="media-left">
                        <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/219.jpg" alt=""> <i
                                class="status status-away"></i></div>
                    </div>
                    <div class="media-body"><h5 class="media-heading">Dana Dyab</h5>
                        <small class="media-meta">away</small>
                    </div>
                </div>
            </a> <a href="javascript:void(0)" class="media-group-item">
                <div class="media">
                    <div class="media-left">
                        <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/210.jpg" alt=""> <i
                                class="status status-offline"></i></div>
                    </div>
                    <div class="media-body"><h5 class="media-heading">Jeffry Way</h5>
                        <small class="media-meta">2 hours ago</small>
                    </div>
                </div>
            </a> <a href="javascript:void(0)" class="media-group-item">
                <div class="media">
                    <div class="media-left">
                        <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/211.jpg" alt=""> <i
                                class="status status-offline"></i></div>
                    </div>
                    <div class="media-body"><h5 class="media-heading">Jane Doe</h5>
                        <small class="media-meta">5 hours ago</small>
                    </div>
                </div>
            </a> <a href="javascript:void(0)" class="media-group-item">
                <div class="media">
                    <div class="media-left">
                        <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/212.jpg" alt=""> <i
                                class="status status-offline"></i></div>
                    </div>
                    <div class="media-body"><h5 class="media-heading">Adam Khoury</h5>
                        <small class="media-meta">22 minutes ago</small>
                    </div>
                </div>
            </a> <a href="javascript:void(0)" class="media-group-item">
                <div class="media">
                    <div class="media-left">
                        <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/207.jpg" alt=""> <i
                                class="status status-offline"></i></div>
                    </div>
                    <div class="media-body"><h5 class="media-heading">Sara Smith</h5>
                        <small class="media-meta">2 days ago</small>
                    </div>
                </div>
            </a> <a href="javascript:void(0)" class="media-group-item">
                <div class="media">
                    <div class="media-left">
                        <div class="avatar avatar-xs avatar-circle"><img src="../assets/images/211.jpg" alt=""> <i
                                class="status status-offline"></i></div>
                    </div>
                    <div class="media-body"><h5 class="media-heading">Donia Dyab</h5>
                        <small class="media-meta">3 days ago</small>
                    </div>
                </div>
            </a></div>
    </div>
</div>
<script src="../assets/js/core.min.js"></script>
<script src="../assets/js/app.min.js"></script>
<script src="../libs/bower/moment/moment.js"></script>
<script src="../libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="../assets/js/fullcalendar.js"></script>
</body>
</html>