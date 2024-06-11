@extends('layouts.main')
@section('isi')
    <section class="service-details fix section-padding">
        <div class="container">
            <div class="service-details-wrapper">
                <div class="row g-5">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="single-team-items">
                                <div class="team-image">
                                    <img src="{{ asset('files/blog/' . $baru[0]->image) }}" alt="team-img">
                                    <div class="social-profile">
                                        <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                        <ul>
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                                    target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/intent/tweet?text=Check%20this%20out!%20{{ urlencode(url()->current()) }}"
                                                    target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content text-center">
                                    <h4>
                                        <a href="{{ route('detilberita', Crypt::encryptString($baru[0]->id)) }}">
                                            {!! $baru[0]->title !!}
                                        </a>
                                    </h4>
                                    <p>{!! $baru[0]->kategori->nama !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="main-sidebar">
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Popular Feeds</h3>
                                    </div>
                                    <div class="service-category">
                                        <a href="" class="">
                                            Terbaru
                                            <i class="fal fa-long-arrow-right"></i>
                                        </a>
                                        <a href="" class="">
                                            View Terbanyak
                                            <i class="fal fa-long-arrow-right"></i>
                                        </a>
                                        <a href="" class="">
                                            Cuplikan Video
                                            <i class="fal fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Kerjasama</h3>
                                    </div>
                                    <form action="#" id="contact-form" class="message-form">
                                        <div class="col-lg-12">
                                            <button class="theme-btn" type="submit">
                                                <span>
                                                    Hubungi Kami
                                                    <i class="fas fa-chevron-right"></i>
                                                </span>
                                            </button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="title-section-area">
                <div class="section-title">
                    <span class="wow fadeInUp">Kajian</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Pendidikan</h2>
                </div>
                <a href="#" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
                    <span>
                        Explore Our news
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
            </div>
            <div class="news-carousel-active">
                @foreach ($pendidikan as $karakter)
                    <div class="news-card-items">
                        <div class="news-image bg-cover"
                            style="background-image: url('{{ asset('files/blog/' . $karakter->image) }}');">
                        </div>
                        <div class="news-content">
                            <ul class="post-area">
                                <li>
                                    <i class="far fa-user-circle"></i>
                                    {{ $karakter->user->name }}
                                </li>
                                <li>
                                    <i class="fal fa-comments"></i>
                                    Comments
                                </li>
                            </ul>
                            <h5>
                                <a href="{{ route('detilberita', Crypt::encryptString($karakter->id)) }}">
                                    {!! $karakter->title !!}
                                </a>
                            </h5>
                            <a href="{{ route('detilberita', Crypt::encryptString($karakter->id)) }}" class="link-btn">
                                <span>Selengkapnya</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="news-section-2 section-padding fix">
        <div class="container">
            <div class="title-section-area">
                <div class="section-title">
                    <span class="wow fadeInUp">Kajian</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Politik</h2>
                </div>
                <a href="#" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
                    <span>
                        Explore Our news
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
            </div>
            <div class="news-carousel-active">
                @foreach ($politik as $item)
                    <div class="news-card-items">
                        <div class="news-image bg-cover"
                            style="background-image: url('{{ asset('files/blog/' . $item->image) }}');">
                        </div>
                        <div class="news-content">
                            <ul class="post-area">
                                <li>
                                    <i class="far fa-user-circle"></i>
                                    {{ $item->user->name }}
                                </li>
                                <li>
                                    <i class="fal fa-comments"></i>
                                    Comments
                                </li>
                            </ul>
                            <h5>
                                <a href="{{ route('detilberita', Crypt::encryptString($item->id)) }}">
                                    {!! $item->title !!}
                                </a>
                            </h5>
                            <a href="{{ route('detilberita', Crypt::encryptString($item->id)) }}" class="link-btn">
                                <span>Selengkapnya</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="news-section-2 section-padding fix">
        <div class="container">
            <div class="title-section-area">
                <div class="section-title">
                    <span class="wow fadeInUp">Kajian</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Sosial</h2>
                </div>
                <a href="#" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
                    <span>
                        Explore Our news
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
            </div>
            <div class="news-carousel-active">
                @foreach ($sosials as $sosial)
                    <div class="news-card-items">
                        <div class="news-image bg-cover"
                            style="background-image: url('{{ asset('files/blog/' . $sosial->image) }}');">
                        </div>
                        <div class="news-content">
                            <ul class="post-area">
                                <li>
                                    <i class="far fa-user-circle"></i>
                                    {{ $sosial->user->name }}
                                </li>
                                <li>
                                    <i class="fal fa-comments"></i>
                                    Comments
                                </li>
                            </ul>
                            <h5>
                                <a href="{{ route('detilberita', Crypt::encryptString($sosial->id)) }}">
                                    {{ $sosial->title }}
                                </a>
                            </h5>
                            <a href="{{ route('detilberita', Crypt::encryptString($sosial->id)) }}" class="link-btn">
                                <span>Selengkapnya</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
