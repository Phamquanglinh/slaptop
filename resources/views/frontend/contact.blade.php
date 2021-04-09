<?php
$title = 'Liên hệ';
?>
@extends('layout.app')
@section('content')
    <div class="container">
        <div class="text-center  text-primary p-5 h2">Liên hệ với chúng tôi</div>
        <div class="px-5 w-100 location">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.887548836526!2d105.7739293154024!3d21.037184992865445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455f90fe8ad65%3A0xec38b94cb36de0ab!2zVmnhu4duIEPDtG5nIG5naOG7hyB0aMO0bmcgdGluIFQzSA!5e0!3m2!1svi!2s!4v1616483457715!5m2!1svi!2s"
               style="border:0;" allowfullscreen="" width="100%" loading="lazy">
            </iframe>
            <div class="address mt-5">
                <p class="text-uppercase h3">Công ty cổ phần SLapTop</p>
                <p class="h5 text-secondary"><i class="fas fa-phone text-primary"></i> 0904.800.240 / 0898.644.232</p>
                <p class="h5 text-secondary"><i class="fas fa-mail-bulk text-primary"></i> Teamslap@example.com</p>
                <p class="h5 text-secondary"><i class="fas fa-map-marked-alt text-primary"></i> 128a Đường Hồ Tùng Mậu, Mai Dịch, Cầu Giấy, Hà Nội, Việt Nam</p>
            </div>
        </div>
        <div class="form px-5 pb-5">
            <form action="{{$_SERVER['PHP_SELF']}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Địa chỉ Email</label>
                    <input type="email" name="contact-email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên của bạn</label>
                    <input type="text" name="contact-name" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Lời nhắn của bạn</label>
                    <textarea type="contact-message" class="form-control" id="exampleInputEmail1"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
        </div>
    </div>
@endsection
