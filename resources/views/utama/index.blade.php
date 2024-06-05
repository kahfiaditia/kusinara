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
                                <img src="{{ asset('files/blog/' . $baru[0]->image) }}" alt="img">
                            </div>
                            <div class="details-content">
                                <h3>{{ $baru[0]->title }}</h3>
                                <p>
                                    {!! $baru[0]->deskripsi !!}
                                </p>
                                {{-- @endforeach --}}

                                <div class="details-image-2">
                                    <div class="row g-4">
                                        @foreach ($blog as $item)
                                            <div class="col-lg-6">
                                                <img src="{{ asset('assets2/img/logo/newsblog.png') }}" alt="img">
                                                <h4>
                                                    <a href="news-details.html">
                                                        {{ $item->title }}
                                                    </a>
                                                </h4>
                                            </div>
                                        @endforeach


                                        {{-- <div class="col-lg-6">
                                            <img src="{{ asset('assets2/img/logo/newsblog.png') }}" alt="img">
                                            <h4>
                                                <a href="news-details.html">
                                                    Kajian Malam Jumat
                                                </a>
                                            </h4>
                                        </div> --}}
                                    </div>
                                </div>
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
@endsection
