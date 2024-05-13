<nav id="navbar" class="navbar">

    <ul>
        <li><a class="nav-link scrollto" href="{{ route('index') }}#hero">Home</a></li>
        <li><a class="nav-link scrollto {{ Request::segment(1) == 'blog' || Request::segment(1) == 'blogs' ? 'active' : '' }}"
                href="{{ route('blogs') }}">Blog</a></li>
        <li><a class="nav-link scrollto {{ Request::segment(1) == 'about' ? 'active' : '' }}"
                href="{{ route('about') }}">About Us</a></li>
        <li><a class="nav-link scrollto" href="{{ route('index') }}#produk">Galery</a></li>
        <li><a class="nav-link scrollto" href="{{ route('index') }}#contact">Contact Us</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
