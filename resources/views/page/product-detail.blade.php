@extends('layouts.master')

@section('title') Product Detail @endsection

@section('product-detail')

    <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <h4>Category PAge</h4>
            <div class="site-pagination">
                <a href="">Home</a> /
                <a href="">Shop</a>
            </div>
        </div>
    </div>
    <!-- Page info end -->

    <!-- product section -->
    <section class="product-section">
        <div class="container">
            <div class="back-link">
                <a href="./category.html"> &lt;&lt; Back to Category</a>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="product">
                        <img class="product-big-img" src="{{ asset('image/'.$pro->image) }}" alt="">
                    </div>
                    {{-- <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
                        <div class="product-thumbs-track">
                            <div class="pt active" data-imgbigurl="img/single-product/1.jpg"><img src="{{ asset('image/'.$pro->image) }}" alt=""></div>

                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-6 product-details">
                    <h2 class="p-title">{{$pro->pro_name}}</h2>
                <h3 class="p-price">{{$pro->pro_price}}</h3>
                    <h4 class="p-stock">Available: <span>In Stock</span></h4>
                    <div>
                        {{$pro->stock}}
                    </div>

                    <div class="quantity">
                        <p>Quantity</p>
                        <div class="pro-qty"><input type="text" value="1"></div>
                    </div>
                    <a href="#" class="site-btn">SHOP NOW</a>
                    <div id="accordion" class="accordion-area">
                        <div class="panel">
                            <div class="panel-header" id="headingOne">
                                <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
                            </div>
                            <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="panel-body">
                                {{$pro->pro_info}}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="social-sharing">
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->

    <!-- RELATED PRODUCTS section -->
    <section class="related-product-section">
        <div class="container">
            <div class="section-title">
                <h2>RELATED PRODUCTS</h2>
            </div>
            <div class="product-slider owl-carousel">
                <div class="product-item">

                    <div class="pi-pic">
                    <a href="{{ url('/product-detail/'.$pro->id) }}">
                            <img src="{{ asset('image/'.$pro->image) }}" alt="">
                        </a>
                        <div class="pi-links">
                            <a href="{{ url('/product/'.$pro->id) }}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>{{ $pro->pro_price }}$</h6>
                        <p>{{ $pro->pro_name }} </p>
                    </div>
                </div>
                    {{-- <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="tag-new">New</div>
                        <img src="./img/product/2.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Black and White Stripes Dress</p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/product/3.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/product/4.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/product/6.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    <!-- RELATED PRODUCTS section end -->

@endsection
