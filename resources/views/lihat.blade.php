@extends('layouts.main')
@section('isi')
    <div class="breadcrumb-wrapper section-padding bg-cover"
        style="background-image: url('{{ asset('files/blog/kecilbanner.png') }}');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ $detils->kategori->nama }}</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="index.html">
                            Home Page
                        </a>
                    </li>
                    <li>
                        <i class="fal fa-minus"></i>
                    </li>
                    <li>
                        standard blog
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="blog-wrapper news-wrapper section-padding border-bottom">
        <div class="container">
            <div class="news-area">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="blog-post-details border-wrap mt-0">
                            <div class="single-blog-post post-details mt-0">
                                <div class="post-content pt-0">
                                    <h2 class="mt-0">{!! $detils->title !!}
                                    </h2>
                                    <div class="post-meta mt-3">
                                        <span><i class="fal fa-user"></i>{{ $detils->user->name }}</span>
                                        <span><i class="fal fa-comments"></i>15 Comments</span>
                                        <span><i class="fal fa-calendar-alt"></i>{{ $detils->created_at }}</span>
                                    </div>
                                    <p>
                                        {!! $detils->deskripsi !!}
                                    </p>

                                    <blockquote>
                                        Diam luctus nostra dapibus varius et semper semper rutrum ad risus felis
                                        eros. Cursus libero viverra tempus netus diam vestibulum
                                    </blockquote>
                                </div>
                            </div>
                            <div class="row tag-share-wrap">
                                <div class="col-lg-8 col-12">
                                    <h4>Releted Tags</h4>
                                    <div class="tagcloud">
                                        <a href="news-details.html">Development</a>
                                        <a href="news-details.html">Digital</a>
                                        <a href="news-details.html">Tech</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end">
                                    <h4>Social Share</h4>
                                    <div class="social-share">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Popular Feeds</h3>
                                </div>
                                <div class="popular-posts">
                                    @foreach ($news as $item)
                                        <div class="single-post-item">
                                            <div class="thumb bg-cover"
                                                style="background-image: url('{{ asset('files/blog/' . $item->image) }}');">
                                            </div>
                                            <div class="post-content">
                                                <h5><a href="news-details.html">{!! $item->title !!}</a></h5>
                                                <div class="post-date">
                                                    <i class="far fa-calendar-alt"></i>{{ $item->created_at }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Never Miss News</h3>
                                </div>
                                <div class="social-link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
