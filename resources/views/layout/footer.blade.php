  <!-- ======= Footer ======= -->
  @foreach($about as $info)
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>تابعنا على وسائل التواصل الاجتماعي </h3>
          </div>
        </div>
        <div class="social-links">
          @if($info->telegram) <a href="tel:{{$info->telegram}}" class="twitter"><i class="bx bxl-telegram"></i></a>@endif
          @if($info->facebook) <a href="{{$info->facebook}}" class="facebook" target="_blanck"><i class="bx bxl-facebook"></i></a>@endif
          @if($info->Instagram) <a href="{{$info->Instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>@endif
          @if($info->whatsapp) <a href="tel:{{$info->whatsapp}}" class="google-plus"><i class="bx bxl-whatsapp"></i></a>@endif
          @if($info->linkedIn) <a href="{{$info->linkedIn}}" class="linkedin"><i class="bx bxl-linkedin"></i></a> @endif
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Zero One Plus Company </span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->
  @endforeach