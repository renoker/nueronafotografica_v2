@extends('admin.comingsoon.master')

@section('title')
    Comingsoon
    Nuerona
@endsection

@push('css')
@endpush

@section('content')
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
        <!-- Page Body Start-->
        <div class="container-fluid p-0">
            <div class="comingsoon auth-bg-video">
                <video class="bgvideo-comingsoon" id="bgvid"
                    poster="{{ asset('cms_assets/images/other-images/coming-soon-bg.jpg') }}" playsinline="" autoplay=""
                    muted="" loop="">
                    <source src="{{ asset('cms_assets/video/auth-bg.mp4') }}" type="video/mp4" />
                </video>
                <div class="comingsoon-inner text-center">
                    <a href=""><img src="{{ asset('cms_assets/images/logo/logo-1.png') }}" alt="" /></a>
                    <h5>WE ARE COMING SOON</h5>
                    <div class="countdown" id="clockdiv">
                        <ul>
                            <li><span class="time digits" id="days"></span><span class="title">days</span></li>
                            <li><span class="time digits" id="hours"></span><span class="title">Hours</span></li>
                            <li><span class="time digits" id="minutes"></span><span class="title">Minutes</span></li>
                            <li><span class="time digits" id="seconds"></span><span class="title">Seconds</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('cms_assets/js/countdown.js') }}"></script>
    @endpush
@endsection
