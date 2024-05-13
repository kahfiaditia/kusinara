<section id="produk" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title">
            <h2>Galery</h2>
        </div>
        <div class="row portfolio-container">
            @foreach ($galery as $item)
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <img src="{{ URL::asset('files/galery/' . $item->image) }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $item->judul }}</h4>
                            <div class="portfolio-links">
                                <a href="{{ URL::asset('files/galery/' . $item->image) }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="{{ $item->judul }}"><i class="bi bi-eye"></i></a>
                                <?php $id = Crypt::encryptString($item->id); ?>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
