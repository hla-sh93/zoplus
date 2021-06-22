  <!-- ======= Header ======= -->
@foreach($about as $info)
  <div class="header-top-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="social-links float-right">
            @if($info->telegram)  <a href="{{$info->telegram}}"><i class="icofont-telegram"></i></a> @endif
            @if($info->facebook)  <a href="{{$info->facebook}}"><i class="icofont-facebook"></i></a>@endif
            @if($info->whatsapp)  <a href="{{$info->whatsapp}}"><i class="icofont-whatsapp"></i></a>@endif
            @if($info->linkedIn)  <a href="{{$info->linkedIn}}"><i class="icofont-linkedin"></i></a>@endif
            @if($info->Instagram) <a href="{{$info->Instagram}}"><i class="icofont-instagram"></i></a>@endif
          </div>
        </div>
        <div class="col-md-6">
          @if($info->mail)
          <p class="float-left"><a href="mailto:{{$info->mail}}"><i class="icofont-envelope mr-1"></i> {{$info->mail}}</a> </p>
          @endif
        </div>
      </div>
    </div>
  </div>

  <header id="header" class="fixed-top">
   <!-- ======= Top Header ======= -->  

    <div class="container d-flex align-items-center">

      <a href="{{ url('/') }}" class="logo mr-auto"><img src="{{asset ('img/logo2.png')}}" alt="zero one plus" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="#contact">تواصل معنا</a></li>
          <li><a href="#portfolio">أعمالنا</a></li>
          <li><a href="#about">عن الشركة</a></li>
          <li class="active"><a href={{ url('/') }}>الرئيسية</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  @endforeach