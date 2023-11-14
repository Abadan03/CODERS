@extends('layouts.layout')
@section('content')

  <!-- Gallery section -->
  <div class="container-fluid d-flex min-vw-100 justify-content-center flex-column gap-2" style="margin-top: 160px; gap: 60px">
      <h1 class="text-center fw-semibold" style="font-size: 40px; color: #101F4C;">
        Galery <br> Event Document
      </h1>
      {{-- Image logo & kegiatan --}}
      <div class="container-md d-flex flex-column gap-5">
        <img class="img-fluid align-items-start" src="{{ url('assets/img/logo-playbox-4.png') }}" width="20%" alt="Logo playbox season 4">
        <img class="img-fluid align-items-center " src="{{ url('assets/img/kegiatan-dojo.png') }}" width="100%" alt="Foto kegiatan CODER">

        <img class="img-fluid align-items-start" src="{{ url('assets/img/logo-waow-1.png') }}" width="20%" alt="Logo WAOW">
        <img class="img-fluid align-items-center " src="{{ url('assets/img/kegiatan-dojo.png') }}" width="100%" alt="Foto kegiatan CODER">

        <img class="img-fluid align-items-start" src="{{ url('assets/img/logo-dojo.png') }}" width="20%" alt="Logo DOJO">
        <img class="img-fluid align-items-center " src="{{ url('assets/img/kegiatan-dojo.png') }}" width="100%" alt="Foto kegiatan CODER">
      </div>

      {{-- Section About us --}}
      <div class="container-md d-flex flex-column gap-2 mb-5">
        <p class="fw-bold" style="font-size: 50px">About Us</p>

        <p class="fw-medium" style="font-size: 36px">
          Mewadahi bakat dan minat mahasiswa di bidang Teknologi,
          Informasi, dan Komunikasi untuk berkontribusi terhadap 
         Institut Teknologi Telkom Surabaya dan lingkungan sekitar.</p>

        <ol class="list-group list-group-numbered">
          <li class="list-group-item border-0" style="font-size: 36px">
            Membantu dan mendukung untuk mewadahi mahasiswa 
            ITTelkom Surabaya yang memiliki bakat dan minat dalam 
            bidang Teknologi Informasi dan Komunikasi.
          </li>
          <li class="list-group-item border-0" style="font-size: 36px">
            Membantu dan mendukung ITTelkom Surabaya untuk 
            melakukan pengembangan Teknologi Informasi dan 
            Komunikasi.
          </li>
          <li class="list-group-item border-0" style="font-size: 36px">
            Berkontribusi untuk lingkungan sekitar melalui 
            Teknologi Informasi dan Komunikasi yang bermanfaat.
          </li>
        </ol>

      </div>
  </div>
@endsection
