<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.header_js')
</head>

<body>
    <!-- ======= Top Bar ======= -->
    @include('frontend.topbar')
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <div class="logo me-auto">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('files/logo.png') }}" alt="" class="img-fluid">
                </a>
            </div>
            @include('frontend.nav_details')
        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog</h2>
                </div>
            </div>
        </section>
        <!-- Breadcrumbs Section -->

        <!-- ======= Portfolio Details Section ======= -->
        <section class="portfolio-details">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="">
                            <h3 class="text-center"><b>{{ $blog[0]->title }}</b></h3>
                            <h6>{{ $blog[0]->user->name . ' - ' . date('d M Y', strtotime($blog[0]->created_at)) }}</h6>
                            <div class="col-lg-12">
                                <div class="portfolio-details-slider swiper">
                                    <div class="swiper-wrapper align-items-center">
                                        <div class="swiper-slide">
                                            <img src="{{ URL::asset('files/blog/' . $blog[0]->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <br>
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <?php echo $blog[0]->deskripsi; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Details Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontend.footer')
    <!-- End Footer -->

    @include('frontend.footer_js')

</body>

</html>
