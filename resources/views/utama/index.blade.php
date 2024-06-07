@extends('layouts.main')
@section('isi')
    <section class="service-details fix section-padding">
        <div class="container">
            <div class="service-details-wrapper">
                <div class="row g-5">
                    <div class="col-12 col-lg-8">
                        <div class="service-details-items">
                            {{-- @foreach ($baru as $konten) --}}
                            <div class="details-image">
                                <img src="{{ asset('files/blog/' . $pendidikan[0]->image) }}" alt="img">
                            </div>
                            <div class="details-content">
                                <h3>
                                    <a href="#">
                                        {!! $pendidikan[0]->title !!}
                                    </a>
                                </h3>
                                <p>
                                    {!! substr($pendidikan[0]->deskripsi, 0, 150) . '...' !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Menu</h3>
                                </div>
                                <div class="service-category">
                                    <a href="" class="">
                                        Kajian
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                    <a href="" class="">
                                        Tulisan
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                    <a href="" class="">
                                        Karya
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                    <a href="" class="">
                                        Tentang
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
                            </form>
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
                    <span class="wow fadeInUp">Tulisan</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Blog</h2>
                </div>
                <a href="news-details.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
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
                                    Shikhon .H
                                </li>
                                <li>
                                    <i class="fal fa-comments"></i>
                                    Comments (03)
                                </li>
                            </ul>
                            <h5>
                                <a href="news-details.html">
                                    {!! $karakter->title !!}
                                </a>
                            </h5>
                            <a href="news-details.html" class="link-btn">
                                <span>read more</span>
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
                <a href="news-details.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
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
                                    Shikhon .H
                                </li>
                                <li>
                                    <i class="fal fa-comments"></i>
                                    Comments (03)
                                </li>
                            </ul>
                            <h5>
                                <a href="news-details.html">
                                    {{ $item->title }}
                                </a>
                            </h5>
                            <a href="news-details.html" class="link-btn">
                                <span>read more</span>
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
                <a href="news-details.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
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
                                    Shikhon .H
                                </li>
                                <li>
                                    <i class="fal fa-comments"></i>
                                    Comments (03)
                                </li>
                            </ul>
                            <h5>
                                <a href="news-details.html">
                                    {{ $sosial->title }}
                                </a>
                            </h5>
                            <a href="news-details.html" class="link-btn">
                                <span>read more</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
