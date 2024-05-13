<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-info">
                    <h3>{{ $setting[0]->apps }}</h3>
                    <p>
                        {{ $setting[0]->address }}<br>
                        <strong>Phone:</strong> <a style="color: white"
                            href="whatsapp://send?text=Hello&phone={{ $setting[0]->call }}">{{ $setting[0]->call }}</a><br>
                        <strong>Email:</strong> {{ $setting[0]->email }}<br>
                    </p>
                    <div class="social-links mt-3">
                        @if ($setting[0]->twitter)
                            <a href="{{ $setting[0]->twitter }}" target="_blank" class="twitter"><i
                                    class="bi bi-twitter"></i></a>
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
                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Blog</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#project">About Us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#produk">Galery</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Legalitas</h4>
                    <p>{{ $setting[0]->legalitas }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>{{ $setting[0]->apps }}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
    </div>
</footer>
