<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Zero One Plus</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>شركة زيرو ون بلس  </h1>
          <h2>لتقديم جميع الخدمات والحلول التقنية </h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{asset('img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services mt-5">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="icofont-web"></i></div>
              <h4 class="title"><a href="">تصميم المواقع الالكترونية </a></h4>
              <p class="description">تصميم المواقع الالكترونية لمختلف الشركات والجمعيات والهيئات والمواقع الشخصية بما يعكس رؤيتهم وأهدافهم  .</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-ui-settings"></i></div>
              <h4 class="title"><a href="">برمجة التطبيقات الذكية </a></h4>
              <p class="description">خدمات تحليل وتصميم التطبيقات الذكية لمختلف المنصات : ويب وأجهزة أندرويد و ال IOS وبرمجيات سطح المكتب</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-paint"></i></div>
              <h4 class="title"><a href="">خدمات التصميم الغرافيكي</a></h4>
              <p class="description">ليتكامل العمل يجب أن يكون له هوية بصرية قوية وواضحة تعبر عن المشروع وتوصله للجمهور، وهذا ما يقوم به فريق المصممين لدينا.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>عن الشركة </h3>
            <p>
              @foreach($about as $info)
                @if($info->details)
                  {!! $info->details !!}
                @endif
 
            </p>

            {{-- <ul>
              <li><i class="icofont-check-circled ml-2"></i>هي توفير نظم وحلول تقنية للشركات على أعلى مستوى من الكفاءة والفاعلية ، وتقديم أعلى قيمة لمستخدميها بأنسب تكلفة مما يؤدي إلى تطوير المنشأت بأقل الإستثمارات.</li>
              <li><i class="icofont-check-circled ml-2"></i> أن نصبح شركة رائدة بنهاية هذا العقد في قطاع تطوير البرمجيات على مستوى الشرق الأوسط .</li>
              <li><i class="icofont-check-circled ml-2"></i> نؤمن بأن نجاح عملاؤنا فى ادارة أعمالهم من خلال استخدامهم لأنظمتنا هو المؤشر الرئيسى على نجاحنا . عملاؤنا شركاء دائمين لأن نجاحنا واستمرارنا يتوقف عليهم .</li>
            </ul> --}}
          </div>

          <div class="col-lg-4">
            @if($info->logo)
            <img src="{{Voyager::image($info->logo)}}" class="img-fluid mx-auto d-block mt-5" alt="zero one plus" width="300px">
            @endif
            
            @endforeach
          </div>
          
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters ">
          <div class="col-md-2">
            <div class="mx-auto d-block">
              <i class="icofont-coffee-mug Circle mx-auto d-block"></i>
              <p>meet</p>
            </div>
          </div>

          <div class="col-md-2">
            <div class="mx-auto d-block">
              <i class="icofont-paper-plane Circle mx-auto d-block"></i>
              <p>plan</p>
            </div>
          </div>

          <div class="col-md-2">
            <div class="mx-auto d-block">
              <i class="icofont-image Circle mx-auto d-block"></i>
              <p>design</p>
            </div>
          </div>

          <div class="col-md-2">
            <div class="mx-auto d-block">
              <i class="icofont-cubes Circle mx-auto d-block"></i>
              <p>develop</p>
            </div>
          </div>

          <div class="col-md-2">
            <div class="mx-auto d-block">
              <i class="icofont-check Circle mx-auto d-block"></i>
              <p>testing</p>
            </div>
          </div>

          <div class="col-md-2">
            <div class="mx-auto d-block">
              <i class="icofont-flash Circle mx-auto d-block"></i>
              <p>launch</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>أعمالنا</span>
          <h2>أعمالنا</h2>
          <p>مجموعة من التطبيقات المتنوعة والمفيدة لتلبي جميع الاحتياجات</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">الكل</li>
              @foreach($categories as $catigory)
                <li data-filter=".{{$catigory->id}}"> {{$catigory->name}} </li>
              @endforeach
            
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          @foreach($apps as $app)
{{-- to repeat --}}
          <div class="col-lg-4 col-md-6 portfolio-item {{$app->cat_id}}">
            <img src="{{Voyager::image($app->img)}}" class="img-fluid" alt="{{$app->app_name}}">
            <div class="portfolio-info">
              <a href="{{route('details',[$app->id])}}"><h4>{{$app->app_name}}</h4> </a>
              <p>{{ Str::limit(strip_tags($app->details) , 50, '...') }}</p>
              <a href="{{route('details',[$app->id])}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
{{-- to repeat --}}
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>تطبيقاتنا على المتجر</h3>
          <p>بإمكانكم مشاهدة التطبيقات على متجر PlayStore من الرابط أدناه، لتبقوا على اطلاع بكل ماهو جديد</p>
          <a class="cta-btn" href="https://play.google.com/store/apps/developer?id=zoplus+developer&hl=fa&gl=US"> <i class="icofont-shopping-cart"></i> تابعنا هنا </a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>تواصل معنا</span>
          <h2>تواصل معنا</h2>
          <p>راسلنا لتبقى على اطلاع بكل ما هو جديد ومميز في عالم البرمجيات.</p>
        </div>

        <div class="row">

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{ url('/') }}" method="post" role="form" class="php-email-form" dir="rtl">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">الاسم</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="email">البريد الالكتروني</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="subject">الموضوع</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="message">الرسالة</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                @if(session('success'))
                  <div class="alert alert-success">{{session('success')}}</div>
                @endif
              </div>
              <div class="text-center"><button type="submit">أرسل</button></div>
            </form>
          </div>

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>الموقع:</h4>
                <p>
                 {{ $info->location }}
                </p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>البريد الالكتروني:</h4>
                <p>{{ $info->mail }}</p>
              </div>

              <div class="phone" dir="ltr">
                <i class="icofont-phone"></i>
                <h4>هاتف:</h4>
                <p>{{ $info->phone }}</p>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@include('layout.footer')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src=" {{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src=" {{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
  <script src=" {{ asset('vendor/jquery.easing/jquery.easing.min.js') }} "></script>
  <script src=" {{ asset('vendor/waypoints/jquery.waypoints.min.js') }} "></script>
  <script src=" {{ asset('vendor/counterup/counterup.min.js') }}"></script>
  <script src=" {{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }} "></script>
  <script src=" {{ asset('vendor/venobox/venobox.min.js') }} "></script>
  <script src=" {{ asset('vendor/owl.carousel/owl.carousel.min.js') }} "></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>