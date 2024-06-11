@extends('layouts.main')
@section('isi')
    <section class="product-section fix section-padding">
        <div class="container">
            <div class="row g-4">
                @foreach ($cerpen as $item)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-card-items mt-0">
                            <div class="product-image">
                                <img src="{{ asset('files/blog/' . $item->image) }}" alt="img">
                                <div class="product-badge">
                                    <span class="product-badge-item">Pendidikan</span>
                                </div>
                                <ul class="product-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="{{ route('detilberita', Crypt::encryptString($item->id)) }}"><i
                                                class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('detilberita', Crypt::encryptString($item->id)) }}"><i
                                                class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h6>
                                    <a
                                        href="{{ route('detilberita', Crypt::encryptString($item->id)) }}">{!! Str::limit($item->title, 75) !!}</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
