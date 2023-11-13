@extends('layouts.layout')
@section('content')

<!-- Gallery section -->
<div class="container-fluid d-flex min-vw-100 justify-content-center flex-column gap-2" style="margin-top: 160px; gap: 60px">
    <h1 class="text-center fw-semibold" style="font-size: 40px; color: #101F4C;">
    News Event
    </h1>
    <div class="container container-fluid ">
        <h1 class="text-start">Latest News</h1>
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-5 mt-5 mb-5">
            <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                <img class="img-fluid" width="230px" src="{{ url('assets/img/playbox.png') }}" alt="">
                <img class="img-fluid" width="330px" src="{{ url('assets/img/news.png') }}" alt="">
                <h3 class="fw-bold">
                    COMPETITIVE 
                    PROGRAMMING
                </h3>
                <p class="text-start" style="max-width: 360px">CODER merupakan Unit Kegiatan Mahasiswa (UKM) dari  Institut Teknologi Telkom Surabaya. Kami berfokus pada teknologi dengan 6 divisi, yaitu : Web Development,Mobile Development, UI/UX Design, AI Software, Competitive Programming, Data Engineering.</p>
            </div>
            <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                <img class="img-fluid" width="230px" src="{{ url('assets/img/dojo.png') }}" alt="">
                <img class="img-fluid" width="330px" src="{{ url('assets/img/news.png') }}" alt="">
                <h3 class="fw-bold">
                    COMPETITIVE 
                    PROGRAMMING
                </h3>
                <p class="text-start" style="max-width: 360px">CODER merupakan Unit Kegiatan Mahasiswa (UKM) dari  Institut Teknologi Telkom Surabaya. Kami berfokus pada teknologi dengan 6 divisi, yaitu : Web Development,Mobile Development, UI/UX Design, AI Software, Competitive Programming, Data Engineering.</p>
            </div>
            <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                <img class="img-fluid" width="230px" src="{{ url('assets/img/waow.png') }}" alt="">
                <img class="img-fluid" width="330px" src="{{ url('assets/img/news.png') }}" alt="">
                <h3 class="fw-bold">
                    COMPETITIVE 
                    PROGRAMMING
                </h3>
                <p class="text-start" style="max-width: 360px">CODER merupakan Unit Kegiatan Mahasiswa (UKM) dari  Institut Teknologi Telkom Surabaya. Kami berfokus pada teknologi dengan 6 divisi, yaitu : Web Development,Mobile Development, UI/UX Design, AI Software, Competitive Programming, Data Engineering.</p>
            </div>
           
        </div>
    </div>

</div>
@endsection
