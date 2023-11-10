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
  

  {{-- About us End --}}

  {{-- Division --}}
  
  {{-- Division End --}}

  {{-- Gallery --}}
 
  {{-- Gallery End --}}

  {{-- Location --}}
 
  {{-- Location End --}}

@endsection
