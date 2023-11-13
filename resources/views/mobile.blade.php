@extends('layouts.layout')
@section('content')

{{-- HERO --}}
<div id="hero" class="container-fluid d-flex min-vw-100 text-black text-center align-items-center justify-content-center" style="margin-top: 160px; gap: 60px" >
    <div class="flex-column text-start justify-content-center width_hero">
        <h1 class="fw-bold" style="font-size: 40px">MOBILE DEVELOPMENT</h1>
        <p class="fw-medium">CODER merupakan Unit Kegiatan Mahasiswa (UKM) dari 
            Institut Teknologi Telkom Surabaya. Kami berfokus pada 
            teknologi dengan 6 divisi, yaitu Web Development, 
            Mobile Development, UI/UX Design, AI Software, 
            Competitive Programming, Data Engineering.</p>
            {{-- Information Member --}}
        <div class="d-flex align-items-center gap-3" style="height: 100px">
            {{-- Current event --}}
            <div class="">
                <button class="text-uppercase border-0 text-white px-4" style="background-color: #590696">Current Event</button>
            </div>
            <div class="" style="border: 1px solid black; height: 20px"></div>
            <div class="mb-0" >
                <h5 class="mb-0 fw-semibold" style="color: #D49B54">79</h5>
                <h4 class="mt-0">Member</h4>
            </div>
        </div>
    </div>
    <div>
        <img class="img-fluid" width="100%" src="{{ url('assets/img/mobile_div.png') }}" alt="">
    </div>
</div>    
{{-- HERO END --}}

{{-- ABOUT US --}}
<div id="about" class="container-fluid d-flex min-vw-100 p-5 text-black align-items-center justify-content-center" style="gap: 60px; margin-top: 140px; background-color: #F4DBDC">
    <div>
        <img class="img-fluid" width="100%" src="{{ url('assets/img/computer.png') }}" alt="">
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
{{-- ABOUT US END --}}

{{-- DIVISION  --}}
<div id="division" class="container-fluid text-center justify-content-center align-items-center" style="margin-top: 140px;">
    <h2 class="fw-bold">STRUCTURE DIVISION</h2>
    <h1 class="fw-bold">Mobile Development</h1>
    <div class="container">
        <img class="img-fluid" width="100%" src="{{ url('assets/img/mobile_struc.png') }}" alt="">
    </div>
</div>
{{-- DIVISION END  --}}

{{-- KEGIATAN --}}
<div id="division" class="container-fluid p-5 text-center justify-content-center align-items-center" style="margin-top: 140px; background-color: #F4DBDC">
    <h1 class="fw-bold">KEGIATAN</h1>
    <div class="container d-flex flex-wrap justify-content-center align-items-center gap-5 mt-5 mb-5">
        <div>
            <img class="img-fluid" width="100%" src="{{ url('assets/img/kegiatan_1.png') }}" alt="">
        </div>
        <div>
            <img class="img-fluid" width="100%" src="{{ url('assets/img/kegiatan_2.png') }}" alt="">
        </div>
    </div>
</div>
{{-- KEGIATAN END --}}

@endsection