<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                @foreach ($sliders as $item)
                    <div class="carousel-item active"
                        style="background-image: url('{{ asset('files/sliders/' . $item->image) }}');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">{{ $item->judul }}</h2>
                                <p class="animate__animated animate__fadeInUp"><?php echo $item->deskripsi; ?></p>
                                @if ($item->link)
                                    <a href="{{ $item->link }}"
                                        class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                        More</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</section>
