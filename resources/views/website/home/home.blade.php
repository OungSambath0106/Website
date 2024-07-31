@extends('website.app')
@section('content')
    @include('website.home.home-style')
    <div class="content">
        <div class="row mt--3 mx-0 justify-content-center align-content-center">
            <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
                <div id="carouselExample" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($banners as $index => $banner)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset('uploads/banner/' . $banner->banners) }}" class="d-block w-100"
                                    alt="{{ $banner->alt_text }}" style="height: 84vh; object-fit: cover">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="card mt-5 main-card">
                        <div class="card-title mt-4">
                            <h2 class="text-center text-gradient fw-bold" style="color: #1077B8">{{ __('All Categories') }}
                            </h2>
                        </div>
                        <div class="card-body body-cate">
                            <div class="col-3 all-category p-2 text-center">
                                <div class="img-container">
                                    <img src="\website\upload\img55.png" alt="not found"
                                        style="height: 40vh; object-fit: contain">
                                    <div class="text-overlay">
                                        <h5 class=" mt-4 text-uppercase">Nike</h5>
                                        <span>430 products</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 all-category p-2 text-center">
                                <div class="img-container">
                                    <img src="\website\upload\img1111.png" alt="not found"
                                        style="height: 40vh; object-fit: contain">
                                    <div class="text-overlay">
                                        <h5 class=" mt-4 text-uppercase">Adidas</h5>
                                        <span>250 products</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 all-category p-2 text-center">
                                <div class="img-container">
                                    <img src="\website\upload\img111.png" alt="not found"
                                        style="height: 40vh; object-fit: contain">
                                    <div class="text-overlay">
                                        <h5 class=" mt-4 text-uppercase">New Balance</h5>
                                        <span>120 products</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 all-category p-2 text-center">
                                <div class="img-container">
                                    <img src="\website\upload\img11.png" alt="not found"
                                        style="height: 40vh; object-fit: contain">
                                    <div class="text-overlay">
                                        <h5 class=" mt-4 text-uppercase">Vans</h5>
                                        <span>500 products</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 banner1 mt-5">
                    @foreach ($promotions as $promotion)
                        <img src="{{ asset('uploads/promotion/' . $promotion->images) }}" class="d-block w-100"
                            alt="{{ $promotion->alt_text }}" style="">
                    @endforeach
                </div>
            </div>
            <div class="row mt--3 mx-0 justify-content-center align-content-center">
                <div class="col-12 main-product mt-5">
                    <div class="product">
                        @foreach ($cate as $category)
                            <img src="{{ asset('uploads/category/' . $category->icon_images) }}" alt="Image not found">
                        @endforeach
                    </div>
                </div>

                <div class="row justify-content-center" id="latest-product">
                    <div class="col-10">
                        <div class="card container-card mt-5 mb-4 p-4 shadow-lg border-0">
                            <div class="row">
                                <h5 class="p-2 title text-gradient">{{ __('Latest Product') }}</h5>
                                <div class="col-6">
                                    <div class="latest-product d-flex justify-content-center">
                                        <div class="col-7">
                                            <img class="annimation" src="\website\upload\p1.png" alt="not found">
                                        </div>
                                        <div class="col-5 main-price">
                                            <img class="best-price" src="\website\upload\p2.png" alt="not found">
                                            <span class="name">Off-White x Air Jordan 1 <br> Retro High OG 'UNC' </span>
                                            <span class="price">$500</span>
                                            <br>
                                            <a href="#" name="" id=""
                                                class="btn btn-sm mt-3">{{ __('Learn more') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row ">
                                        <div class="card col-md-12 card-pro d-flex justify-content-center">
                                            <div class="main-text ">
                                                <span class="text-pro">Off-White x Air Jordan 1<br> Retro High OG
                                                    'Chicago'</span><br>
                                                <span class="">$300</span><br>
                                                <a href="#" class="btn btn-sm">
                                                    {{ __('Buy Now') }}</i></a>
                                            </div>
                                            <div class="main-img">
                                                <img class="img5" src="\website\upload\img55.png" alt="not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-12 d-flex gap-1 justify-content-center">
                                            <div class="col-4 mt-3 text-center">
                                                <div class="card card-img">
                                                    <div class="text-price">
                                                        <h6>TEnis Vans Infantil</h6>
                                                        <span>$100</span>
                                                    </div>
                                                    <img src="/website/upload/img11.png" class="mt-4" alt="not found">
                                                </div>
                                            </div>
                                            <div class="col-4 mt-3 text-center">
                                                <div class="card card-img">
                                                    <div class="text-price">
                                                        <h6>New Balance 530 "White/Indigo"</h6>
                                                        <span>$230</span>
                                                    </div>
                                                    <img src="/website/upload/img111.png" class="mt-4" alt="not found">
                                                </div>
                                            </div>
                                            <div class="col-4 mt-3 text-center">
                                                <div class="card card-img">
                                                    <div class="text-price">
                                                        <h6>Tenis Adidas Breaknet Feminino</h6>
                                                        <span>$120</span>
                                                    </div>
                                                    <img src="/website/upload/img1111.png" class="mt-4"
                                                        alt="not found">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container my-3" id="nike">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="row d-flex justify-content-between mb-1">
                                <div class="col-md-6">
                                    <h5 class="fw-bolder text-uppercase text-gradient">{{ __('Nike') }}</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="float-end shadow-hover">
                                        <h6 class="fw-bold text-gradient">{{ __('See All') }}</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="items-slider">
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 my-3" id="best-selling">
                    <div class="row justify-content-center p-3">
                        <div class="card d-flex p-4 shadow border-0" style="background-color: #0a4569;">
                            <div class="row">
                                <div class="row d-flex justify-content-between mb-1">
                                    <div class="col-md-12">
                                        <h5 class="fw-bolder text-white">{{ __('Best Selling') }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-promotion border-0 shadow-lg">
                                        <div class="card-header head-img">
                                            <img src="\website\upload\img55.png" alt="not found" style="height: 25vh; object-fit: contain">
                                        </div>
                                        <div class="card-body promotion-body">
                                            <h6 class="card-title fw-bold product-title" style="color: #1077B8;">Off-White x Air Jordan
                                                1 Retro High OG 'Chicago'
                                            </h6>
                                            <div class="row d-flex">
                                                <div class="col-12 d-flex gap-4">
                                                    <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">
                                                        $1200.00</p>
                                                </div>
                                            </div>
                                            <div class="rate-promotion">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-promotion border-0 shadow-lg">
                                        <div class="card-header head-img">
                                            <img src="\website\upload\img1111.png" alt="not found" style="height: 25vh; object-fit: contain">
                                        </div>
                                        <div class="card-body promotion-body">
                                            <h6 class="card-title fw-bold product-title" style="color: #1077B8;">Tenis Adidas Breaknet Feminino
                                            </h6>
                                            <div class="row d-flex">
                                                <div class="col-12 d-flex gap-4">
                                                    <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">
                                                        $1200.00</p>
                                                </div>
                                            </div>
                                            <div class="rate-promotion">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-promotion border-0 shadow-lg">
                                        <div class="card-header head-img">
                                            <img src="\website\upload\img11.png" alt="not found" style="height: 25vh; object-fit: contain">
                                        </div>
                                        <div class="card-body promotion-body">
                                            <h6 class="card-title fw-bold product-title" style="color: #1077B8;">Tenis Vans Infantil
                                            </h6>
                                            <div class="row d-flex">
                                                <div class="col-12 d-flex gap-4">
                                                    <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">
                                                        $1200.00</p>
                                                </div>
                                            </div>
                                            <div class="rate-promotion">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-promotion border-0 shadow-lg">
                                        <div class="card-header head-img">
                                            <img src="\website\upload\p1.png" alt="not found" style="height: 25vh; object-fit: contain">
                                        </div>
                                        <div class="card-body promotion-body">
                                            <h6 class="card-title fw-bold product-title" style="color: #1077B8;">Off-White x Air Jordan
                                                1 Retro High OG 'UNC'
                                            </h6>
                                            <div class="row d-flex">
                                                <div class="col-12 d-flex gap-4">
                                                    <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">
                                                        $1200.00</p>
                                                </div>
                                            </div>
                                            <div class="rate-promotion">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container my-3" id="adidas">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="row d-flex justify-content-between mb-1">
                                <div class="col-md-6">
                                    <h5 class="fw-bolder text-uppercase text-gradient">{{ __('Adidas') }}</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="float-end shadow-hover">
                                        <h6 class="fw-bold text-gradient">{{ __('See All') }}</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="items-slider">
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Repeat item blocks as needed -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-3 mb-5" id="new-balance">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="row d-flex justify-content-between mb-1">
                                <div class="col-md-6">
                                    <h5 class="fw-bolder text-uppercase text-gradient">{{ __('New Balance') }}</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="float-end shadow-hover">
                                        <h6 class="fw-bold text-gradient">{{ __('See All') }}</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="items-slider">
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card home-desktop border-0 shadow-lg">
                                        <div class="card-header head-img justify-content-center">
                                            <img src="\website\upload\img55.png" alt="not found">
                                        </div>
                                        <div class="card-body desktop-body">
                                            <h6 class="card-title fw-bold" style="color: #1077B8;">Off-White x Air Jordan
                                                1</h6>
                                            <p class="card-text fw-bold" style="margin-bottom: 0;color:#008E06">$1200.00
                                            </p>
                                            <div class="rate">
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                                <span>(5)</span>
                                                <div class="addcard float-end">
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Repeat item blocks as needed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const content = [{
                    title: 'Camera security Installer',
                    description: 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ty',
                    image: '/website/upload/service.png',
                    backgroundImage: '/website/upload/service.png'
                },
                {
                    title: 'Set up and install network',
                    description: 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s  when an unknown printer took a galley of type and scrambled it to make a ty',
                    image: '/website/upload/service1.png',
                    backgroundImage: '/website/upload/service1.png'
                },
                {
                    title: 'Wifi solution',
                    description: 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s  when an unknown printer took a galley of type and scrambled it to make a ty',
                    image: '/website/upload/service2.png',
                    backgroundImage: '/website/upload/service2.png'
                },
                {
                    title: 'Solution for data back up',
                    description: 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ty',
                    image: '/website/upload/service3.png',
                    backgroundImage: '/website/upload/service3.png'
                }
            ];

            let currentIndex = 0;

            document.getElementById('nextButton').addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % content.length;
                updateContent('slide-up');
            });

            document.getElementById('prevButton').addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + content.length) % content.length;
                updateContent('slide-down');
            });

            function updateContent(animationClass) {
                const divTitle = document.getElementById('divTitle');
                divTitle.classList.add('fade-out');
                const serviceImage = document.getElementById('serviceImage');
                serviceImage.classList.add('fade-out');
                setTimeout(() => {
                    const currentContent = content[currentIndex];
                    document.getElementById('divTitle').textContent = currentContent.title;
                    document.getElementById('divDescription').textContent = currentContent.description;
                    document.getElementById('serviceImage').src = currentContent.image;
                    document.getElementById('cardBackground').style.backgroundImage =
                        `url(${currentContent.backgroundImage})`;
                    divTitle.classList.remove('fade-out');
                    divTitle.classList.add(animationClass);
                    serviceImage.classList.remove('fade-out');
                    serviceImage.classList.add(animationClass);
                }, 500); // Match the CSS transition duration
                setTimeout(() => {
                    divTitle.classList.remove(animationClass);
                    serviceImage.classList.remove(animationClass);
                }, 1000); // Match the CSS transition duration
            }

            // Initial content load
            updateContent('slide-up');
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elements = document.querySelectorAll('.product-title');
                elements.forEach(function(element) {
                    var text = element.textContent;
                    if (text.length > 22) {
                        element.textContent = text.slice(0, 22) + '...';
                    }
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var modalElement = document.getElementById('videoModal');

                modalElement.addEventListener('hide.bs.modal', function() {
                    var video = document.getElementById('modalVideo');
                    var iframe = document.getElementById('modalIframe');

                    if (video) {
                        video.pause();
                        video.currentTime = 0;
                    }

                    if (iframe) {
                        iframe.src = iframe.src;
                    }
                });
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const productContainer = document.querySelector(".product");
                const images = productContainer.querySelectorAll("img");
                const numberOfImages = images.length;

                const minSets = 3;
                const totalImagesNeeded = numberOfImages * minSets;
                const additionalImagesNeeded = totalImagesNeeded - numberOfImages;

                for (let i = 0; i < additionalImagesNeeded; i++) {
                    const clone = images[i % numberOfImages].cloneNode(true);
                    productContainer.appendChild(clone);
                }

                let scrollAmount = 0;

                function scrollImages() {
                    scrollAmount -= 1; // Adjust this value to control the speed
                    if (scrollAmount <= -productContainer.scrollWidth / minSets) {
                        scrollAmount = 0;
                    }
                    productContainer.style.transform = `translateX(${scrollAmount}px)`;
                    requestAnimationFrame(scrollImages);
                }

                scrollImages();
            });
        </script>
    @endsection
