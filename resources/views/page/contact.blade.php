@extends('layouts.master')

@section('title') Contact @endsection

@section('contact')

    <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <h4>Contact</h4>
            <div class="site-pagination">
                <a href="">Home</a> /
                <a href="">Contact</a>
            </div>
        </div>
    </div>
    <!-- Page info end -->

    <!-- Contact section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 contact-info">
                    <h3>Get in touch</h3>
                    <p>Main Str, no 23, New York</p>
                    <p>+546 990221 123</p>
                    <p>hosting@contact.com</p>
                    <div class="contact-social">
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                    <form class="contact-form">
                        <input type="text" placeholder="Your name">
                        <input type="text" placeholder="Your e-mail">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Message"></textarea>
                        <button class="site-btn">SEND NOW</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125075.6395538072!2d104.8199750948198!3d11.579523963322155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310787bfd4dc3743%3A0xe4b7bfe089f41253!2sCambodia!5e0!3m2!1sen!2sus!4v1580528487088!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <!-- Contact section end -->


    <!-- Related product section -->
    <section class="related-product-section spad">
        <div class="container">
            <div class="section-title">
                <h2>Your Favorites</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
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
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/product/5.jpg" alt="">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/product/9.jpg" alt="">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/product/1.jpg" alt="">
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
            </div>
        </div>
    </section>
    <!-- Related product section end -->

@endsection
