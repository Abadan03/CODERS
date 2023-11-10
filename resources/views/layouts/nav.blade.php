@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-lg fixed-top @if($currentRouteName != 'home') bg-white text-black @endif">
    <div class="container-fluid mx-lg-5">
        {{-- <button>Logo</button> --}}
        <img width="10%" class="img-fluid " src="{{ url('assets/img/logo.png') }}" alt="">
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span>
            {{-- <img width="100%" class="img-fluid " src="{{ url('assets/img/logo.png') }}" alt=""> --}}
        </span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link @if($currentRouteName == 'home') text-black fw-bold active @elseif ($currentRouteName != 'home') text-black @endif" href="{{ route('home')}}">Home</a>
                <a class="nav-link @if($currentRouteName == 'about') text-black fw-bold active @elseif ($currentRouteName != 'home') text-black @endif" href="{{ route('about') }}" href="#">About</a>
                <a class="nav-link @if($currentRouteName == 'news') text-black fw-bold active @elseif ($currentRouteName != 'home') text-black @endif" href="{{ route('news') }}" href="#">News</a>
                <a class="nav-link @if($currentRouteName == 'gallery') text-black fw-bold active @elseif ($currentRouteName != 'home') text-black @endif" href="{{ route('gallery') }}" href="#">Gallery</a>
                <a class="nav-link @if($currentRouteName == 'division') text-black fw-bold active @elseif ($currentRouteName != 'home') text-black @endif" href="{{ route('division') }}" href="#">Divison</a>
            </div>
        </div>
    </div>
</nav>


<script>
    window.addEventListener("scroll", function() {
        let navbar = document.querySelector(".navbar");
        if (window.scrollY > 0) {
            navbar.classList.add("navbar-scroll");
        } else {
            navbar.classList.remove("navbar-scroll");
        }
    });
</script>
