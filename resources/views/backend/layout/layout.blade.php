<!DOCTYPE html>
<html lang="en">

<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword"
        content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{ asset('backend_asset') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('backend_asset') }}/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="{{ asset('backend_asset') }}/css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="{{ asset('backend_asset') }}/css/style-responsive.css" rel="stylesheet">
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext'
        rel='stylesheet' type='text/css'>
    <!-- end: CSS -->




    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{ asset('backend_asset') }}/img/favicon.ico">
    <!-- end: Favicon -->




</head>

<body>
    <!-- start: Header -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse"
                    data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="{{ url('/') }}"><span>Metro</span></a>

                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav pull-right">
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white warning-sign"></i>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="dropdown-menu-title">
                                    <span>You have 11 notifications</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">1 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">7 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">8 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">16 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">36 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">2 items sold</span>
                                        <span class="time">1 hour</span>
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-user"></i></span>
                                        <span class="message">User deleted account</span>
                                        <span class="time">2 hour</span>
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">6 hour</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">yesterday</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">yesterday</span>
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                                    <a>View all notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- start: Notifications Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white tasks"></i>
                            </a>
                            <ul class="dropdown-menu tasks">
                                <li class="dropdown-menu-title">
                                    <span>You have 17 tasks in progress</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">iOS Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim red">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">Android Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim green">47</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim yellow">32</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim greenLight">63</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim orange">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: Notifications Dropdown -->
                        <!-- start: Message Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages">
                                <li class="dropdown-menu-title">
                                    <span>You have 9 messages</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="{{ asset('backend_asset') }}/img/avatar.jpg"
                                                alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Kibria
                                            </span>
                                            <span class="time">
                                                6 min
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="{{ asset('backend_asset') }}/img/avatar.jpg"
                                                alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Ruma
                                            </span>
                                            <span class="time">
                                                56 min
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="{{ asset('backend_asset') }}/img/avatar.jpg"
                                                alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Jubayer
                                            </span>
                                            <span class="time">
                                                3 hours
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="{{ asset('backend_asset') }}/img/avatar.jpg"
                                                alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Shahin
                                            </span>
                                            <span class="time">
                                                yesterday
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="{{ asset('backend_asset') }}/img/avatar.jpg"
                                                alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Hellal
                                            </span>
                                            <span class="time">
                                                Jul 25, 2012
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: Message Dropdown -->
                        <li>
                            <a class="btn" href="#">
                                <i class="halflings-icon white wrench"></i>
                            </a>
                        </li>
                        <!-- start: User Dropdown -->
                        <li class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user"></i> {{ session('BLOG_USER_NAME') }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                <li><a href="{{ url('/admin/logout') }}"><i class="halflings-icon off"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: User Dropdown -->
                    </ul>
                </div>
                <!-- end: Header Menu -->

            </div>
        </div>
    </div>
    <!-- start: Header -->

    <div class="container-fluid-full">
        <div class="row-fluid">

            <!-- start: Main Menu -->
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li><a href="{{ url('/admin/dashboard') }}"><i class="icon-bar-chart"></i><span
                                    class="hidden-tablet">
                                    Dashboard</span></a></li>
                        <li><a href="{{ url('/admin') }}"><i class="icon-envelope"></i><span class="hidden-tablet">
                                    Messages</span></a></li>
                        <li><a href="{{ url('/admin/slider/list') }}"><i class="icon-tasks"></i><span class="hidden-tablet">
                                    Slider</span></a>
                        </li>
                        <li><a href="{{ url('/admin') }}"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI
                                    Features</span></a></li>
                        <li><a href="{{ url('/admin') }}"><i class="icon-dashboard"></i><span class="hidden-tablet">
                                    Widgets</span></a></li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3
                                </span></a>
                            <ul>
                                <li><a class="submenu" href="{{ url('/admin') }}"><i class="icon-file-alt"></i><span
                                            class="hidden-tablet"> Sub Menu 1</span></a></li>
                                <li><a class="submenu" href="{{ url('/admin') }}"><i class="icon-file-alt"></i><span
                                            class="hidden-tablet"> Sub Menu 2</span></a></li>
                                <li><a class="submenu" href="{{ url('/admin') }}"><i class="icon-file-alt"></i><span
                                            class="hidden-tablet"> Sub Menu 3</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet"> Brand</span><span class="label label-important"> 3
                                </span></a>
                            <ul>
                                <li><a class="submenu" href="{{ url('/admin/brand/add') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Add New
                                            Brand</span></a></li>
                                <li><a class="submenu" href="{{ url('/admin/brand/list') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> All
                                            Brand</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet"> Products</span><span class="label label-important"> 3
                                </span></a>
                            <ul>
                                <li><a class="submenu" href="{{ url('/admin/product/add') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Add New
                                            Product</span></a></li>
                                <li><a class="submenu" href="{{ url('/admin/products/list') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> All
                                            Products</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                                    class="hidden-tablet"> Category</span><span class="label label-important"> 3
                                </span></a>
                            <ul>
                                <li><a class="submenu" href="{{ url('/admin/category/add') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> Add New
                                            Category</span></a></li>
                                <li><a class="submenu" href="{{ url('/admin/category/list') }}"><i
                                            class="icon-file-alt"></i><span class="hidden-tablet"> All
                                            Category</span></a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/admin') }}"><i class="icon-edit"></i><span class="hidden-tablet">
                                    Forms</span></a>
                        </li>
                        <li><a href="{{ url('/admin') }}"><i class="icon-list-alt"></i><span class="hidden-tablet">
                                    Charts</span></a></li>
                        <li><a href="{{ url('/admin') }}"><i class="icon-font"></i><span class="hidden-tablet">
                                    Typography</span></a></li>
                        <li><a href="{{ url('/admin') }}"><i class="icon-picture"></i><span class="hidden-tablet">
                                    Gallery</span></a></li>
                        <li><a href="{{ url('/admin') }}"><i class="icon-align-justify"></i><span class="hidden-tablet">
                                    Tables</span></a></li>
                        <li><a href="{{ url('/admin') }}"><i class="icon-calendar"></i><span class="hidden-tablet">
                                    Calendar</span></a></li>
                        <li><a href="{{ url('/admin') }}"><i class="icon-folder-open"></i><span class="hidden-tablet">
                                    File Manager</span></a></li>
                        <li><a href="{{ url('/admin') }}"><i class="icon-star"></i><span class="hidden-tablet">
                                    Icons</span></a>
                        </li>
                        <li><a href="{{ url('/admin/login') }}"><i class="icon-lock"></i><span class="hidden-tablet">
                                    Login
                                    Page</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- end: Main Menu -->

            <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                        enabled to use this site.</p>
                </div>
            </noscript>

            <!-- start: Content -->
            <div id="content" class="span10">


                @section('BackendLayout')

                @show





            </div>
            <!--/.fluid-container-->

            <!-- end: Content -->
        </div>
        <!--/#content.span10-->
    </div>
    <!--/fluid-row-->

    <div class="modal hide fade" id="myModal">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Settings</h3>
        </div>
        <div class="modal-body">
            <p>Here settings can be configured...</p>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <a href="#" class="btn btn-primary">Save changes</a>
        </div>
    </div>

    <div class="clearfix"></div>

    <footer>

        <p>
            <span style="text-align:left;float:left">&copy; 2013 <a
                    href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap
                    Metro Dashboard</a></span>

        </p>

    </footer>

    <!-- start: JavaScript-->

    <script src="{{ asset('backend_asset') }}/js/jquery-1.9.1.min.js"></script>
    <script src="{{ asset('backend_asset') }}/js/jquery-migrate-1.0.0.min.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery-ui-1.10.0.custom.min.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery.ui.touch-punch.js"></script>

    <script src="{{ asset('backend_asset') }}/js/modernizr.js"></script>

    <script src="{{ asset('backend_asset') }}/js/bootstrap.min.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery.cookie.js"></script>

    <script src='{{ asset('backend_asset') }}/js/fullcalendar.min.js'></script>

    <script src='{{ asset('backend_asset') }}/js/jquery.dataTables.min.js'></script>

    <script src="{{ asset('backend_asset') }}/js/excanvas.js"></script>
    <script src="{{ asset('backend_asset') }}/js/jquery.flot.js"></script>
    <script src="{{ asset('backend_asset') }}/js/jquery.flot.pie.js"></script>
    <script src="{{ asset('backend_asset') }}/js/jquery.flot.stack.js"></script>
    <script src="{{ asset('backend_asset') }}/js/jquery.flot.resize.min.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery.chosen.min.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery.uniform.min.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery.cleditor.min.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery.noty.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery.elfinder.min.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery.raty.min.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery.iphone.toggle.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery.uploadify-3.1.min.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery.gritter.min.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery.imagesloaded.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery.masonry.min.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery.knob.modified.js"></script>

    <script src="{{ asset('backend_asset') }}/js/jquery.sparkline.min.js"></script>

    <script src="{{ asset('backend_asset') }}/js/counter.js"></script>

    <script src="{{ asset('backend_asset') }}/js/retina.js"></script>

    <script src="{{ asset('backend_asset') }}/js/custom.js"></script>
    <!-- end: JavaScript-->

    {{-- Bootbox --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"
        integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg=="
        crossorigin="anonymous"></script>

    <script>
        $(document).on("click", "#delete", function(e) {
            e.preventDefault();
            var link = $(this).attr("href");

            bootbox.confirm("Are You Want to Delete!", function(confirmed) {
                if (confirmed) {
                    window.location.href = link;
                };
            });
        });

    </script>

</body>

</html>
