<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">{{ $setting[0]->email }}</a>
            <i class="bi bi-phone-fill phone-icon"></i><a
                href="whatsapp://send?text=Hello&phone={{ $setting[0]->call }}">{{ $setting[0]->call }}</a>
        </div>
        <div class="social-links d-none d-md-block">
            @if ($setting[0]->youtube)
                <a href="{{ $setting[0]->youtube }}" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
            @endif
            @if ($setting[0]->facebook)
                <a href="{{ $setting[0]->facebook }}" target="_blank" class="facebook"><i
                        class="bi bi-facebook"></i></a>
            @endif
            @if ($setting[0]->instagram)
                <a href="{{ $setting[0]->instagram }}" target="_blank" class="instagram"><i
                        class="bi bi-instagram"></i></a>
            @endif
        </div>
    </div>
</section>
