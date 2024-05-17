@extends('themes.njajan.layouts.app')
@include('themes.njajan.shared.slider')
@section('content')
<!-- Popular -->
<section class="popular">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6">
            <h1>Popular</h1>
          </div>
          <div class="col-6 text-end">
            <a href="#" class="btn-first">View All</a>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-3 col-6">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="{{ asset('themes/njajan/assets/img/makanan/mie ayam.jpg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Mie Ayam</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 15.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="{{ asset('themes/njajan/assets/img/makanan/nasi goreng.jpeg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Nasi Goreng</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 20.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-3 mt-lg-0">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="{{ asset('themes/njajan/assets/img/minuman/es cendol.jpeg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Es Cendol</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 23.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-3 mt-lg-0">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="#"><img src="{{ asset('themes/njajan/assets/img/makanan/tahu bakso.jpg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Tahu Bakso</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 10.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Latest -->
    <section class="latest">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6">
            <h1>Latest</h1>
          </div>
          <div class="col-6 text-end">
            <a href="product.html" class="btn-first">View All</a>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-3 col-6">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="{{ asset('themes/njajan/assets/img/minuman/es campur.jpeg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Es Campur</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 10.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="{{ asset('themes/njajan/assets/img/minuman/es cincau.jpeg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Es Cincau</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 14.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-3 mt-lg-0">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="{{ asset('themes/njajan/assets/img/minuman/es doger.jpeg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Es Doger</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 12.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-3 mt-lg-0">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="{{ asset('themes/njajan/assets/img/minuman/es kepal milo.jpeg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Es Kepal Milo</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 12.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Subscribe  -->
    <section class="subscribe">
      <div class="container">
        <div class="subscribe-wrapper">
          <div class="row justify-content-center text-center">
            <div class="col-lg-6 col-md-7 col-10 col-sub">
              <h1>Subscribe to get latest updates!</h1>
              <form action="#" class="mt-5">
                <div class="input-group w-100">
                  <input type="email" class="form-control" placeholder="Type your email ..">
                  <button class="btn btn-outline-warning">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
