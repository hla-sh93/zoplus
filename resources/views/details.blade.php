<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@foreach($app as $item)
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> applications | {{$item->app_name}}</title>
  <meta content="{{$item->details}}" name="description">
  <meta content="{{$item->app_name}},{{$item->details}}" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }} " rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  {{-- Linicons --}} 
  <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css"> 

  <!-- Vendor CSS Files -->
  <link href=" {{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href=" {{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href=" {{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href=" {{ asset('vendor/venobox/venobox.css') }} " rel="stylesheet">
  <link href=" {{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }} " rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

	  @include('layout.header')

  <main id="main" dir="rtl">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex flex-row mt-5 ">
         <a href="#"><img src="{{Voyager::image( $item->img ) }}" alt="{{$item->app_name}}" class="img-fluid rounded ml-3" width="150px"></a>
         <h2 class="justify-content-center align-self-center">{{$item->app_name}}</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
              <p class="primary-color">وصف التطبيق : </p>
              <article class="secondary-color text-justify">
                {!!$item->details!!}
              </article>
          </div>
          <div class="col-md-4">
              <p class="primary-color">تصنيف التطبيق : <span class="secondary-color" > {{$item->cat->name}}</span> </p> 
              <br>
              @if($item->url)
              <a href="{{$item->url}} " target="_blanck"><button type="button" class="btn btn-primary btn-lg btn-block"><i class="icofont-download mx-1"></i> تحميل التطبيق </button></a>
              @endif
              <br>
              @if($item->wesite)
              <a href="{{$item->wesite}}" target="_blanck"><button type="button" class="btn btn-secondary btn-lg btn-block"><i class="icofont-computer mx-1"></i> زيارة الموقع</button></a>
              @endif
            </div>
        </div>



      </div>
    </section>

  </main><!-- End #main -->
@endforeach

  @include('layout.footer')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src=" {{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src=" {{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
  <script src=" {{ asset('vendor/jquery.easing/jquery.easing.min.js') }} "></script>
  <script src=" {{ asset('vendor/php-email-form/validate.js') }} "></script>
  <script src=" {{ asset('vendor/waypoints/jquery.waypoints.min.js') }} "></script>
  <script src=" {{ asset('vendor/counterup/counterup.min.js') }}"></script>
  <script src=" {{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }} "></script>
  <script src=" {{ asset('vendor/venobox/venobox.min.js') }} "></script>
  <script src=" {{ asset('vendor/owl.carousel/owl.carousel.min.js') }} "></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>