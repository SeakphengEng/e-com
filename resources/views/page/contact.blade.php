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
                <img src="img/img1080.png" alt="Can'see your Image">
                <img src="img/img1080.png" alt="Can'see your Image">
                <img src="img/img1080.png" alt="Can'see your Image">
                <img src="img/img1080.png" alt="Can'see your Image">
                <img src="img/img1080.png" alt="Can'see your Image">
                <img src="img/img1080.png" alt="Can'see your Image">
                <img src="img/img1080.png" alt="Can'see your Image">
                <img src="img/img1080.png" alt="Can'see your Image">
                </div>
                <div class="col-lg-6 contact-info">
                    <h3>Get in touch</h3>
                    <p>Phnom Penh 12150, 809 Kampuchea Krom Blvd (128),</p>
                    <p>+85 8133 0498</p>
                    <p>espcomputer@gmail.com</p>
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
                        <textarea placeholder="Message"></textarea>
                        <button class="site-btn">SEND NOW</button>
                    </form>
                </div>
            </div>
            
        </div>
    <!-- Contact section end -->



@endsection
