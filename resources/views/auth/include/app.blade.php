<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="தமிழ் மாணவர் ஒன்றியம் - களனி பல்கலைகழகம்." />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/login/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/loader.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{URL::asset('assets/js/toastr.min.js')}}"></script>
    <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <title>TSA | @yield('title')</title>
  </head>
  <body>
    <div class="page-loader" id="page-loader" >
        <img src="{{URL::asset('/assets/images/loader.gif')}}" class="m-auto" />
    </div>
    <section class="ftco-section">
      <div class="containers">
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="login-wrap px-3 py-3 p-md-4">
              <div style="background-color: #8f431a" class="icon d-flex align-items-center justify-content-center">
                <img src="{{ URL::asset('assets/images/favicon.png') }}" alt="" width="90" height="90">
              </div>
              <h3 class="text-center mb-4 font-weight-bold">TSA - UOK</h3>
              @yield('main')
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/scripts.js')}}"></script>
    <script src="{{ URL::asset('assets/js/sweetalert.min.js') }}"></script>
    @yield('scripts')
  </body>
</html>
