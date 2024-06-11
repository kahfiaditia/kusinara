<div class="mean__menu-wrapper">
    <div class="main-menu">
        <nav id="mobile-menu">
            <ul>
                <li>
                    <a href="{{ route('utama') }}">Home</a>
                </li>
                <li>
                    <a href="#">
                        Kajian
                        <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('pendidikan') }}">Pendidikan</a></li>
                        <li><a href="{{ route('sosial') }}">Sosial</a></li>
                        <li><a href="{{ route('politik') }}">Politik</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        Tulisan
                        <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('artikel') }}">Artikel</a></li>
                        <li><a href="{{ route('blogss') }}">Blog</a></li>
                        <li><a href="{{ route('berita') }}">Berita</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        Karya
                        <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">Cerpen</a></li>
                        <li><a href="#">Puisi</a></li>
                        <li><a href="#">Pantun</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Tentang</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
