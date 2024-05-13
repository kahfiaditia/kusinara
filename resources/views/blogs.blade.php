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
        <section id="portfolio-details" class="portfolio-details">
            @foreach ($blog as $item)
                <?php $id = Crypt::encryptString($item->id); ?>
                <div class="container" data-aos="fade-up">
                    <a href="{{ route('blog', $id) }}" style="color: #444">
                        <div class="row gy-4">
                            <div class="col-lg-4">
                                <div class="portfolio-details-slider swiper">
                                    <div class="swiper-wrapper align-items-center">
                                        <div class="swiper-slide">
                                            <img src="{{ URL::asset('files/blog/' . $item->image) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="portfolio-info">
                                    <h3>{{ $item->title }}</h3>
                                    <table width="100%">
                                        <tr>
                                            <td><b>User :</b>
                                                {{ $item->user->name }}
                                            </td>
                                            <td style="text-align: right">
                                                {{ date('d M Y', strtotime($item->created_at)) }}</td>
                                        </tr>
                                    </table>
                                    <?php echo substr($item->deskripsi, 0, 800) . ' ...'; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <br>
            @endforeach
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
