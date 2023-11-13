@extends('layouts.layout')
@section('content')
<div id="division" class="container-fluid text-center justify-content-center align-items-center" style="margin-top: 140px;">
    <h1 class="fw-bold">Division</h1>
    <div class="container d-flex flex-wrap p-5 justify-content-center align-items-center" style="gap: 60px">
        {{-- WEB --}}
        <div id="web">
            <a href="{{ route('web') }}" class="text-black">
                <img class="img-fluid" width="100%" src="{{ url('assets/img/web.png') }}" alt="">
                <h3 class="fw-bold mt-4">Web Development</h3>
                <div style="max-width: 260px">
                    <p>Melakukan pengembangan aplikasi berbasis Website</p>
                </div>
            </a>
        </div>
        <div id="uiux">
            <a href="{{ route('uiux') }}" class="text-black">
                <img class="img-fluid" width="67%" src="{{ url('assets/img/uiux.png') }}" alt="">
                <h3 class="fw-bold mt-4">UI / UX Design</h3>
                <div style="max-width: 260px">
                    <p>Melakukan proses Sketching, Wireframing, Mockup, hingga Prototype</p>
                </div>
            </a>
        </div>
        <div id="mobile">
            <a href="{{ route('mobile') }}" class="text-black">
                <img class="img-fluid" width="67%" src="{{ url('assets/img/mobile.png') }}" alt="">
                <h3 class="fw-bold mt-4">Mobile Development</h3>
                <div style="max-width: 260px">
                    <p>Melakukan pengembangan aplikasi berbasis Mobile App</p>
                </div>
            </a>
        </div>
        <div id="AI">
            <a href="{{ route('ai') }}" class="text-black">
                <img class="img-fluid" width="67%" src="{{ url('assets/img/ai.png') }}" alt="">
                <h3 class="fw-bold mt-4">AI Software</h3>
                <div style="max-width: 260px">
                    <p>Mengembangkan perangkat lunak berbasis kecerdasan artifisial</p>
                </div>
            </a>
        </div>
        <div id="data">
            <a href="{{ route('data') }}" class="text-black">
                <img class="img-fluid" width="67%" src="{{ url('assets/img/data.png') }}" alt="">
                <h3 class="fw-bold mt-4">Data Engineering</h3>
                <div style="max-width: 260px">
                    <p>Melakukan pengolahan data untuk dianalisa dan memperoleh manfaat</p>
                </div>
            </a>
        </div>
        <div id="comp">
            <a href="{{ route('comp') }}" class="text-black">
                <img class="img-fluid" width="67%" src="{{ url('assets/img/comp.png') }}" alt="">
                <h3 class="fw-bold mt-4">Comp. Programming</h3>
                <div style="max-width: 260px">
                    <p>Melakukan pengembangan algoritma pemrograman untuk berkompetisi</p>
                </div>
            </a>
        </div>
        {{-- WEB END --}}
    </div>
</div>
@endsection
