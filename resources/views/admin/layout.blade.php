<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Admin</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('admin/vendors/images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('admin/vendors/images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('admin/vendors/images/favicon-16x16.png')}}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('admin/vendors/styles/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('admin/vendors/styles/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('admin/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('admin/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('admin/vendors/styles/style.css')}}">
    @stack('css')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>
<body>


<div class="header">
    <div class="header-left">

    </div>
    <div class="header-right">


        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="{{url('admin/vendors/images/photo1.jpg')}}" alt="">
						</span>
                    <span class="user-name">Admin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="{{route('admin.users.edit')}}"><i class="dw dw-user1"></i> Profile</a>

                    <form method="POST" action="{{route('logout')}}" >
                        @csrf

                        <button class="dropdown-item" type="submit">
                            <i class="dw dw-delete-3"></i>
                            Log Out
                        </button>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{url('admin/vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo">
            <img src="{{url('admin/vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{route('admin.home')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.blogs.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-diagram"></span><span class="mtext">Blogs</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.services.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-invoice"></span><span class="mtext">Services</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.settings.edit',1)}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-browser2"></span><span class="mtext">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.contacts.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-library"></span><span class="mtext">Contact Us</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
    @yield('content')
</div>
<!-- js -->
<script src="{{url('admin/vendors/scripts/core.js')}}"></script>
<script src="{{url('admin/vendors/scripts/script.min.js')}}"></script>
<script src="{{url('admin/vendors/scripts/process.js')}}"></script>
<script src="{{url('admin/vendors/scripts/layout-settings.js')}}"></script>
<script src="{{url('admin/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('admin/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('admin/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
@stack('js')
<script src="{{url('admin/vendors/scripts/dashboard.js')}}"></script>
</body>
</html>
