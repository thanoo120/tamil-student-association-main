<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>TSA | @yield('p-title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Tamil Student Association - University Of Kelaniya" name="description">
        <meta content="Sarujan P" name="author">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="{{ URL::asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
        <link href="{{ URL::asset('assets/css/vendor/fullcalendar.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/vendor/quill.core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/vendor/quill.snow.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/toastr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/loader.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark"}'>
        <div class="page-loader" id="page-loader" >
            <img src="{{URL::asset('/assets/images/loader.gif')}}" class="m-auto" />
        </div>
        <div class="wrapper bg-white">
            <div class="leftside-menu">
                <a href="/home" class="logo text-center logo-light">
                    <span class="mx-auto px-auto mobile justify-content-center align-items-center">
                        <div class="logo-bg mobile">
                            <img src="{{ URL::asset('assets/images/logo.png') }}" class="mt-2" alt="" height="120">
                        </div>
                    </span>  
                </a>
                <div class="h-100 mt-2" id="leftside-menu-container" data-simplebar="">
                    @include('layouts.sidebar')
                </div>
            </div>

            <div class="content-page">
                <div class="content">
                    @include('layouts.header')
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item" style="color: #002B5B; font-weight: bold;"><a href="/home">Dashboard</a></li>
                                            <li class="breadcrumb-item" style="color: #75b5ff; font-weight: bold;">@yield('bread-item')</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title" style="color: #002B5B; font-weight: bold;">@yield('p-title')</h4>
                                </div>
                            </div>
                        </div>
                        <div>
                            <hr>
                            @yield('main')
                        </div>
                    </div>
                </div>

                <footer class="footer">
                    @include('layouts.footer')
                </footer>
            </div>
        </div>

        <div class="rightbar-overlay"></div>

        <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/app.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/vendor/apexcharts.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/ui/component.todo.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/demo.dashboard-crm.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/demo.calendar.js') }}"></script>
        <script src="{{ URL::asset('assets/js/vendor/fullcalendar.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/vendor/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/vendor/dataTables.bootstrap5.js') }}"></script>
        <script src="{{ URL::asset('assets/js/vendor/dataTables.responsive.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/vendor/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/demo.datatable-init.js') }}"></script>
        <script src="{{ URL::asset('assets/js/vendor/quill.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/demo.quilljs.js') }}"></script>
        <script src="{{ URL::asset('assets/js/vendor/dropzone.min.js') }}"></script>
        <script src="{{ URL::asset('assets/jsui/component.fileupload.js') }}"></script>
        <script src="{{URL::asset('assets/js/scripts.js')}}"></script>
        <script src="{{URL::asset('assets/js/toastr.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/sweetalert.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/chart.js') }}"></script>
        <script src="{{ URL::asset('assets/js/request.js') }}"></script>
        @yield('scripts')
        <script>
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
            @endif
        </script>
    </body>
</html>
