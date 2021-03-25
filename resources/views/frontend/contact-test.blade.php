<?php
$title = 'Liên Hệ';
?>
@extends('layout.app')
@section('content')
<style>
    .form-control:focus {
        outline: none !important;
        box-shadow: none !important;
        border-bottom-color: lightskyblue !important;
    }

    .form-right-img {
        background-image: url('{{asset('asset/img/contact-form-right-bg.png')}}');
        background-attachment: fixed;
        /*background-repeat: no-repeat;*/
        background-size: auto;
        height: 100%;
        display: flex;
        align-items: center;
    }

    .form-right-img .overlay {
        width: 100%;
        text-align: center !important;
        background-color: rgba(255, 255, 255, 0.7) !important;
        color: rgba(0, 0, 0, 0.7) !important;
    }
</style>
<div class="container-fluid py-5 bg-light">
    <div class="container">

        <div class="row py-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <h1 class="font-weight-light text-center display-5">CONTACT US</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-center">
                        <a href="#"><span
                                class="fas fa-map-marker-alt text-white p-4 small rounded-circle bg-info"></span></a>
                        <p class="mt-2">Addrress: <span class="font-weight-lighter text-info">Số 128 Đường Hồ Tùng Mậu Quận Mai Dịch Hà Nội</span>
                        </p>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-center">
                        <a href="#"><span
                                class="fas fa-phone-alt text-white p-4 small rounded-circle bg-info"></span></a>
                        <p class="mt-2">Phone: <span class="font-weight-lighter text-info">+84 562201674</span></p>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-center">
                        <a href="#"><span
                                class="fas fa-paper-plane text-white p-4 small rounded-circle bg-info"></span></a>
                        <p class="mt-2">Email: <span class="font-weight-lighter text-info">Slaptop88.com</span></p>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-center">
                        <a href="#"><span
                                class="fas fa-globe text-white p-4 small rounded-circle bg-info"></span></a>
                        <p class="mt-2">Website: <span class="font-weight-lighter text-info">OurWebsite.com</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="row py-5 px-2">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 form-container p-0  bg-white">
                <form class="form-group p-5">
                    <label for="<?=$title?>"><h1 class="font-weight-light mb-2">Contact Us</h1></label>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="font-weight-bold small mt-5 mb-0">FULL NAME</label>
                            <input type="text" name="full-name"
                                   class="form-control py-2 pl-0 d-inline-block border-top-0 border-left-0 border-right-0 rounded-0"
                                   id="fullName"
                                   placeholder="Name">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="font-weight-bold small mt-5 mb-0">EMAIL ADDRESS</label>
                            <input type="email" name="email"
                                   class="form-control py-2 pl-0 d-inline-block border-top-0 border-left-0 border-right-0 rounded-0"
                                   id="email"
                                   placeholder="Your Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <label class="font-weight-bold small mt-5 mb-0">SUBJECT</label>
                            <input type="text" name="subject"
                                   class="form-control py-2 pl-0 d-inline-block border-top-0 border-left-0 border-right-0 rounded-0"
                                   id="subject"
                                   placeholder="Your Subject">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <label class="font-weight-bold small mt-5 mb-0">MESSAGE</label>
                            <textarea name="message"
                                      class="form-control py-2 pl-0 d-inline-block border-top-0 border-left-0 border-right-0 rounded-0"
                                      id="message"
                                      placeholder="Your Message"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info mt-5 rounded-0 px-5">SEND MESSAGE <span
                            class="fas fa-paper-plane"></span></button>
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 p-0">
                <div class="form-right-img">
                    <div class="overlay py-5 pl-5">
                        <h1 class="font-weight-bold">The Best For You !</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
