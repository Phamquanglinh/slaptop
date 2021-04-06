@extends('layout.app')
@section('slider')
    @if(isset($error))
        <script>
            alert('{{$error}}');
        </script>
    @endif
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('asset/img/index-carouel.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('asset/img/index-carouel.png')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('asset/img/index-carouel.png')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <style>
        .bg-image{
            position: relative;
            background-repeat: no-repeat;
            background-size: 100%;
            height: 148px;
        }
        .bg-image-laptop{
            background-image: url("{{asset('asset/img/index/see-more-laptop.png')}}");
            rounded: 5px;
        }
        .bg-image-smartphone{
            background-image: url("{{asset('asset/img/index/see-more-smartphone.png')}}");
            rounded: 5px;
        }
        .bg-image-accessories{
            background-image: url("{{asset('asset/img/index/see-more-accessories.png')}}");
            rounded: 5px;
        }
        .see-more{
            position: absolute;
            width: 100%;
            height: 41px;
            background: rgba(81, 81, 81, 0.7);
            top: 40%;
        }
    </style>
    <div class="bg-info">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
                    <a href="#" class="text-center"><img src="{{asset('asset/img/index/flash-sale.png')}}" class="img-fluid w-100"></a>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
                    <a href="#" class="text-center"><img src="{{asset('asset/img/index/big-sale.png')}}" class="img-fluid w-100"></a>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <a href="#" class="text-center"><img src="{{asset('asset/img/index/black-friday.png')}}" class="img-fluid w-100"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-light">
        <div class="my-5 p-3 box-shadow">
            <div class="clearfix px-3">
                <a href="#" class="float-left text-dark link-style-none"><h2>HOT SALE THÁNG 3</h2></a>
                <span class="float-right"><a href="#" class="text">Xem tất cả sản phẩm</a></span>
            </div>
            <div class="row p-3">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                    <div class="bg-color-light-blue  cursor-pointer">
                        <a class="link-style-none" href="#">
                            <img src="{{asset('asset/img/index/laptop-hz.png')}}" class="img-fluid w-100">
                            <h3 class="p-2">Laptop Hp ZZZZ</h3>
                            <h5 class="text-danger pl-3">2.000.000 đ</h5>
                            <div class="clearfix p-3">

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 cursor-pointer">
                    <div class="row  mb-3 bg-lighter-blue ">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 px-0">
                            <a href="#"><img src="{{asset('asset/img/index/laptop-asus.png')}}" class="img-fluid w-100 "></a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                            <a class="link-style-none" href="#">
                                <h3>Laptop Asus</h3>
                                <p class="text-danger mb-0">2.000.000 đ</p>
                                <small class="text mb-0"><del>9.000.000 đ</del></small>
                                <div class="clearfix">

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row   mb-3 ">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 px-0">
                            <a href="#"><img src="{{asset('asset/img/index/laptop-asus.png')}}" class="img-fluid w-100 "></a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                            <a class="link-style-none" href="#">
                                <h3>Laptop Asus</h3>
                                <p class="text-danger mb-0">2.000.000 đ</p>
                                <small class="text mb-0"><del>9.000.000 đ</del></small>
                                <div class="clearfix">

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row   bg-lighter-blue ">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 px-0">
                            <a href="#"><img src="{{asset('asset/img/index/laptop-asus.png')}}" class="img-fluid w-100 "></a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                            <a class="link-style-none" href="#">
                                <h3>Laptop Asus</h3>
                                <p class="text-danger mb-0">2.000.000 đ</p>
                                <small class="text mb-0"><del>9.000.000 đ</del></small>
                                <div class="clearfix">

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-3 bg-light-blue box-shadow">
            <div class="clearfix mb-3">
                <a href="#" class="float-left link-style-none"><h2 class="text-primary">Điện thoại chính hãng</h2></a>
                <span class="float-right"><a href="#" class="text">Xem tất cả sản phẩm</a></span>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-3">
                    <a class="link-style-none" href="#">
                        <div class="card">
                            <img src="{{asset('asset/img/index/asus-rog-phone.png')}}" class="img-fluid  w-100">
                            <div class="card-body p-3">
                                <h3>ASUS ROG Phone 3</h3>
                                <p class="text-danger mb-0">20.000.000 đ</p>
                                <small class="mb-5"><del>20.000 đ</del></small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-3">
                    <a class="link-style-none" href="#">
                        <div class="card">
                            <img src="{{asset('asset/img/index/old-phone.png')}}" class="img-fluid  w-100">
                            <div class="card-body p-3">
                                <h3>Máy bàn cổ xoay 9 số</h3>
                                <p class="text-danger mb-0">2.000.000 đ</p>
                                <small class="mb-5"><del>20.000 đ</del></small>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-3">
                    <a class="link-style-none" href="#">
                        <div class="card">
                            <img src="{{asset('asset/img/index/asus-rog-phone.png')}}" class="img-fluid rounded w-100">
                            <div class="card-body p-3">
                                <h3>ASUS ROG Phone 3</h3>
                                <p class="text-danger mb-0">20.000.000 đ</p>
                                <small class="mb-5"><del>20.000 đ</del></small>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-3">
                    <a class="link-style-none" href="#">
                        <div class="card">
                            <img src="{{asset('asset/img/index/old-phone.png')}}" class="img-fluid rounded w-100">
                            <div class="card-body p-3">
                                <h3>Máy bàn cổ xoay 9 số</h3>
                                <p class="text-danger mb-0">2.000.000 đ</p>
                                <small class="mb-5"><del>20.000 đ</del></small>

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="my-5 p-3 box-shadow">
            <div class="clearfix px-3">
                <a class="float-left link-style-none" href="#"><h2>Phụ kiện cực hot</h2></a>
                <span class="float-right"><a href="#" class="text">Xem tất cả sản phẩm</a></span>
            </div>
            <div class="row p-3">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                    <div class="bg-color-light-blue rounded cursor-pointer">
                        <a class="link-style-none" href="#">
                            <img src="{{asset('asset/img/index/fake-amouse.png')}}" class="img-fluid w-100 rounded">
                            <h3 class="p-2">Chuột Fake</h3>
                            <h5 class="text-danger pl-3">2.000.000 đ</h5>
                            <div class="clearfix p-3">

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="row   mb-3 bg-lighter-blue rounded">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 px-0">
                            <a href="#" class="link-style-none"><img src="{{asset('asset/img/index/headphone.png')}}" class="img-fluid w-100 rounded"></a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                            <a class="link-style-none" href="#">
                                <h3>Tai nghe</h3>
                                <p class="text-danger mb-0">2.000.000 đ</p>
                                <small class="text mb-0"><del>9.000.000 đ</del></small>
                                <div class="clearfix">

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row   mb-3 rounded">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 px-0">
                            <a href="#" class="link-style-none"><img src="{{asset('asset/img/index/keyboard.png')}}" class="img-fluid w-100 rounded"></a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                            <a class="link-style-none" href="#">
                                <h3>Bàn phím</h3>
                                <p class="text-danger mb-0">2.000.000 đ</p>
                                <small class="text mb-0"><del>9.000.000 đ</del></small>
                                <div class="clearfix">

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row   bg-lighter-blue rounded">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 px-0">
                            <a href="#" class="link-style-none"><img src="{{asset('asset/img/index/speak.png')}}" class="img-fluid w-100 rounded"></a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                            <a class="link-style-none" href="#">
                                <h3>Loa</h3>
                                <p class="text-danger mb-0">2.000.000 đ</p>
                                <small class="text mb-0"><del>9.000.000 đ</del></small>
                                <div class="clearfix">

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 px-5 bg-light-blue box-shadow">
            <div class="row pt-3">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
                    <a class="link-style-none" href="#">
                        <div class="bg-image-laptop bg-image">
                            <h3 class="text-center text-white text-uppercase see-more">laptop</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
                    <a class="link-style-none" href="#">
                        <div class="bg-image-smartphone bg-image">
                            <h3 class="text-center text-white text-uppercase see-more">smartphone</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <a class="link-style-none" href="#">
                        <div class="bg-image-accessories bg-image">
                            <h3 class="text-center text-white text-uppercase see-more">accessories</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
