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
                <h1><a href="{{ route('index') }}">{{ $setting[0]->apps }}</a></h1>
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
                    <h2>Details</h2>
                    <ol>
                        <li><a href="{{ route('index') }}">Home</a></li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- Breadcrumbs Section -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="{{ URL::asset('files/galery/' . $galery[0]->image) }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>{{ $galery[0]->title }}</h3>
                        </div>
                        <div class="portfolio-description">
                            <?php echo $galery[0]->deskripsi; ?>
                        </div>
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
