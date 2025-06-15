<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Панель администратора</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">
        <link href="{{ asset('backend/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />  
        <link href="{{ asset('backend/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    </head>
    <body data-topbar="dark">
        <div id="layout-wrapper">
            @include('admin.body.header')
            @include('admin.body.sidebar')
            <div class="main-content">
                @yield('admin')
                @include('admin.body.footer')
            </div>
        </div>
        <div class="rightbar-overlay"></div>
        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/libs/node-waves/waves.min.js') }}"></script>
        <!-- apexcharts -->
        <script src="{{ asset('backend/libs/apexcharts/apexcharts.min.js') }}"></script>
        <!-- jquery.vectormap map -->
        <script src="{{ asset('backend/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('backend/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/js/pages/dashboard.init.js') }}"></script>
        <script src="{{ asset('backend/js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            @if(Session::has('message'))
               var type = "{{ Session::get('alert-type','info') }}"
               switch(type) {
                   case 'info': 
                        toastr.info(" {{ Session::get('message') }} ");
                    break;
                    case 'success': 
                        toastr.success(" {{ Session::get('message') }} ");
                    break;
                    case 'warning': 
                        toastr.warning(" {{ Session::get('message') }} ");
                    break;
                    case 'error': 
                        toastr.error(" {{ Session::get('message') }} ");
                    break;
               }
            @endif
        </script>
    </body>
</html>