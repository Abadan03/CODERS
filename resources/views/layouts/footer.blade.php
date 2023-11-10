@php
    $currentRouteName = Route::currentRouteName();
@endphp


<!-- Remove the container if you want to extend the Footer to full width. -->
<div class=" mx-auto" style="">
    <!-- Footer -->
    <footer
    class="text-center text-lg-start p-4 text-white bg-footer"
    >
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h4 class="fs-2 mb-4 fw-bold">
                Address
              </h4>
              <p>
                Kampus ITTelkom Surabaya
                Jl. Ketintang No.156,
                KetintangKota Surabaya,
                Jawa Timur 60231
              </p>
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h4 class="fs-2 mb-4 fw-bold">Usefull Links</h4>
              <p>
                <a class="text-white">Telkom Indonesia</a>
              </p>
              <p>
                <a class="text-white">Yayasan Pendidikan Telkom</a>
              </p>
              <p>
                <a class="text-white">IT Telkom Surabaya</a>
              </p>
              {{-- <p>
                <a class="text-white">Bootstrap Angular</a>
              </p> --}}
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h4 class="fs-2 mb-4 fw-bold">Contact</h4>
              <p><i class="fas fa-home mr-3"></i>ukmcoder@ittelkom-sby.ac.id</p>
              {{-- <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p> --}}
              <p><i class="fas fa-phone mr-3"></i>+62 838 7753 4525</p>
              {{-- <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p> --}}
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto ">
              <h4 class="fs-2 mb-4 ">Follow us</h4>
  
              <!-- Instagram -->
              <a
                 
                 href="#!"
                 {{-- role="button" --}}
                 >
                 <img width="20px" class="img-fluid " src="{{ url('assets/img/instagram.png') }}" alt="">
              </a>
  
              <!-- Youtube -->
            <a>
                <img width="20px" class="img-fluid " src="{{ url('assets/img/youtube.png') }}" alt="">
            </a>
  
              <!-- Tiktok -->
              <a>
                <img width="20px" class="img-fluid " src="{{ url('assets/img/tiktok.png') }}" alt="">
              </a>
  
              
                <div class="mt-4">
                    <img width="50%" class="img-fluid " src="{{ url('assets/img/logo_white.png') }}" alt="">
                </div>
            </div>
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->
  
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of .container -->