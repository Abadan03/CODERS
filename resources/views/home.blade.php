@extends('layouts.layout')
@section('content')

 <!-- Hero -->
  <div id="hero" class="container-fluid d-flex min-vw-100 text-black text-center align-items-center justify-content-center" style="margin-top: 160px; gap: 60px" >
    <div class="flex-column text-start justify-content-center width_hero">
        <h1 class="fw-bold" style="font-size: 40px">Creativity on Digital Environment
            in Room of Technology</h1>
        <p class="fw-medium">CODER merupakan Unit Kegiatan Mahasiswa (UKM) dari 
            Institut Teknologi Telkom Surabaya. Kami berfokus pada 
            teknologi dengan 6 divisi, yaitu Web Development, 
            Mobile Development, UI/UX Design, AI Software, 
            Competitive Programming, Data Engineering.</p>
            {{-- Information Member --}}
        <div class="d-flex align-items-center gap-3" style="height: 100px">
            {{-- Current event --}}
            <div class="">
                <button class="text-uppercase border-0 text-white px-4 button_hero">Current Event</button>
            </div>
            <div class="" style="border: 1px solid black; height: 20px"></div>
            <div class="mb-0" >
                <h5 class="mb-0 header_primary fw-semibold">219</h5>
                <h4 class="mt-0">Member</h4>
            </div>
            <div class="" style="border: 1px solid black; height: 20px"></div>
            <div class="mb-0" >
                <h5 class="mb-0 header_primary fw-semibold">6</h5>
                <h4 class="mt-0">Divison</h4>
            </div>
        </div>
    </div>
    <div>
        <img class="img-fluid" width="100%" src="{{ url('assets/img/logo_hero.png') }}" alt="">
    </div>
  </div>
<!-- Hero End -->


{{-- About US --}}
<div id="about" class="container-fluid d-flex min-vw-100 text-black align-items-center justify-content-center" style="gap: 60px; margin-top: 140px;">
    <div>
        <img class="img-fluid" width="100%" src="{{ url('assets/img/about.png') }}" alt="">
    </div>
    <div class="flex-column">
        <h1 class="fw-bold">
            About <span style="color: red">US</span>
        </h1>
        <h3 class="fw-semibold">Visi</h3>
        <p style="max-width: 620px;">Mewadahi bakat dan minat mahasiswa di bidang Teknologi,Informasi, dan Komunikasi untuk berkontribusi terhadap Institut Teknologi Telkom Surabaya dan lingkungan sekita.</p>
        <h3 class="fw-semibold">Misi</h3>
        <p style="max-width: 620px;">
            &#8594; Membantu dan mendukung untuk mewadahi mahasiswa ITTelkom Surabaya yang memiliki bakat dan minat dalam bidang Teknologi Informasi danKomunikasi.
            <br>&#8594; Membantu dan mendukung ITTelkom Surabaya untuk melakukan pengembangan Teknologi Informasi dan Komunikasi.
            <br>&#8594; Berkontribusi untuk lingkungan sekitar melalui Teknologi Informasi dan Komunikasi yang bermanfaat.
        </p>
    </div>
</div>
  
{{-- About us End --}}

{{-- Division --}}
<div id="division" class="container-fluid text-center justify-content-center align-items-center" style="margin-top: 140px;">
    <h2 class="fw-bold">Division</h2>
    <h1 class="fw-bold">Our Awesome Division</h1>
    <div class="container d-flex flex-wrap p-5 justify-content-center align-items-center" style="gap: 60px">
        {{-- WEB --}}
        <div id="web">
            <img class="img-fluid" width="100%" src="{{ url('assets/img/web.png') }}" alt="">
            <h3 class="fw-bold mt-4">Web Development</h3>
            <div style="max-width: 260px">
                <p>Melakukan pengembangan aplikasi berbasis Website</p>
            </div>
        </div>
        <div id="web">
            <img class="img-fluid" width="67%" src="{{ url('assets/img/uiux.png') }}" alt="">
            <h3 class="fw-bold mt-4">UI / UX Design</h3>
            <div style="max-width: 260px">
                <p>Melakukan proses Sketching, Wireframing, Mockup, hingga Prototype</p>
            </div>
        </div>
        <div id="web">
            <img class="img-fluid" width="67%" src="{{ url('assets/img/mobile.png') }}" alt="">
            <h3 class="fw-bold mt-4">Mobile Development</h3>
            <div style="max-width: 260px">
                <p>Melakukan pengembangan aplikasi berbasis Mobile App</p>
            </div>
        </div>
        <div id="web">
            <img class="img-fluid" width="67%" src="{{ url('assets/img/ai.png') }}" alt="">
            <h3 class="fw-bold mt-4">AI Software</h3>
            <div style="max-width: 260px">
                <p>Mengembangkan perangkat lunak berbasis kecerdasan artifisial</p>
            </div>
        </div>
        <div id="web">
            <img class="img-fluid" width="67%" src="{{ url('assets/img/data.png') }}" alt="">
            <h3 class="fw-bold mt-4">Data Engineering</h3>
            <div style="max-width: 260px">
                <p>Melakukan pengolahan data untuk dianalisa dan memperoleh manfaat</p>
            </div>
        </div>
        <div id="web">
            <img class="img-fluid" width="67%" src="{{ url('assets/img/comp.png') }}" alt="">
            <h3 class="fw-bold mt-4">Comp. Programming</h3>
            <div style="max-width: 260px">
                <p>Melakukan pengembangan algoritma pemrograman untuk berkompetisi</p>
            </div>
        </div>
        {{-- WEB END --}}
    </div>
</div>
{{-- Division End --}}

{{-- Gallery --}}
<div id="gallery" class="container-fluid text-center justify-content-center align-items-center" style="margin-top: 140px;">
    <h2 class="fw-bold">Gallery</h2>
    <h1 class="fw-bold">Event documentation</h1>
    <div>
        <img class="img-fluid" width="67%" src="{{ url('assets/img/gallery.png') }}" alt="">
    </div>
</div>
{{-- Gallery End --}}

{{-- Location --}}
<div id="location" class="container-fluid text-center justify-content-center align-items-center" style="margin-top: 140px;">
    <h1 class="fw-bold">Our Location</h1>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.385592317823!2d112.72608527483939!3d-7.310506092697374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd1cb925a1d%3A0x1dbecb0b2e9b059f!2sInstitut%20Teknologi%20Telkom%20Surabaya!5e0!3m2!1sen!2sid!4v1699886777710!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
{{-- Location End --}}

{{-- Partner --}}
<div id="Partner" class="container-fluid text-center justify-content-center align-items-center" style="margin-top: 140px;">
    <h2 style="color: gray">Partner With</h2>
    <div class="container container-fluid justify-content-center align-items-center">
        <img class="img-fluid" width="230px" src="{{ url('assets/img/partner.png') }}" alt="">
    </div>
</div>
{{-- Partner End --}}

{{-- Our Events --}}
<div id="Partner" class="container-fluid text-center justify-content-center align-items-center" style="margin-top: 140px; margin-bottom: 140px">
    <h2 style="color: gray">Our Events</h2>
    <div class="d-flex flex-wrap justify-content-center align-items-center" style="gap: 60px">
        <div>
            <img class="img-fluid" width="230px" src="{{ url('assets/img/playbox.png') }}" alt="">
        </div>
        <div>
            <img class="img-fluid" width="230px" src="{{ url('assets/img/dojo.png') }}" alt="">
        </div>
        <div>
            <img class="img-fluid" width="230px" src="{{ url('assets/img/waow.png') }}" alt="">
        </div>
    </div>
</div>
{{-- Our Events End --}}

@endsection
