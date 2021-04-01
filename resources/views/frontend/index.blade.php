@extends('layout.app')
@section('slider')
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
    <div class="container-fluid">
        <div class="bg-info p-5">
            <div class="row px-5">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
                    <p class="text-center"><img src="{{asset('asset/img/index/flash-sale.png')}}" class="img-fluid w-100"></p>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
                    <p class="text-center"><img src="{{asset('asset/img/index/big-sale.png')}}" class="img-fluid w-100"></p>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <p class="text-center"><img src="{{asset('asset/img/index/black-friday.png')}}" class="img-fluid w-100"></p>
                </div>
            </div>
        </div>
        <div class="p-5">
            <div class="border border-dark p-3 box-shadow">
                <div class="clearfix px-3">
                    <span class="float-left"><h2>HOT SALE THÁNG 3</h2></span>
                    <span class="float-right"><a href="#" class="text-secondary">Xem tất cả sản phẩm</a></span>
                </div>
                <div class="row p-3">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <div class="bg-color-light-blue">
                            <img src="{{asset('asset/img/index/laptop-hz.png')}}" class="img-fluid w-100">
                            <h3 class="p-2">Laptop Hp ZZZZ</h3>
                            <h5 class="text-danger pl-3">2.000.000 đ</h5>
                            <div class="clearfix p-3">
                                <span class="float-left bg-warning p-1">Trả góp 0%</span>
                                <small class="float-right"><img src="{{asset('asset/img/index/star.png')}}"> 7749 đánh giá</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="row p-1 border border-secondary mb-3 bg-lighter-blue">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <img src="{{asset('asset/img/index/laptop-asus.png')}}" class="img-fluid w-100">
                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                <h3>Laptop Asus</h3>
                                <p class="text-danger mb-0">2.000.000 đ</p>
                                <p class="text-secondary mb-0"><del>9.000.000 đ</del></p>
                                <div class="clearfix mt-4">
                                    <small class="float-left"><img src="{{asset('asset/img/index/star.png')}}"> 7749 đánh giá</small>
                                    <span class="float-right p-1 bg-warning">Trả góp 0%</span>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1 border border-secondary mb-3">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <img src="{{asset('asset/img/index/laptop-asus.png')}}" class="img-fluid w-100">
                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                <h3>Laptop Asus</h3>
                                <p class="text-danger mb-0">2.000.000 đ</p>
                                <p class="text-secondary mb-0"><del>9.000.000 đ</del></p>
                                <div class="clearfix mt-4">
                                    <small class="float-left"><img src="{{asset('asset/img/index/star.png')}}"> 7749 đánh giá</small>
                                    <span class="float-right p-1 bg-warning">Trả góp 0%</span>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1 border border-secondary bg-lighter-blue">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <img src="{{asset('asset/img/index/laptop-asus.png')}}" class="img-fluid w-100">
                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                <h3>Laptop Asus</h3>
                                <p class="text-danger mb-0">2.000.000 đ</p>
                                <p class="text-secondary mb-0"><del>9.000.000 đ</del></p>
                                <div class="clearfix mt-4">
                                    <small class="float-left"><img src="{{asset('asset/img/index/star.png')}}"> 7749 đánh giá</small>
                                    <span class="float-right p-1 bg-warning">Trả góp 0%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="px-5 text-center pb-4"><img src="{{asset('asset/img/index/sale-banner.png')}}" class="img-fluid w-100"></p>
        <div class="border border-info px-5 py-3 bg-light-blue box-shadow">
            <div class="clearfix mb-3">
                <span class="float-left"><h2 class="text-primary">Điện thoại chính hãng</h2></span>
                <span class="float-right"><a href="#" class="text-secondary">Xem tất cả sản phẩm</a></span>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-3">
                    <div class="card">
                        <img src="{{asset('asset/img/index/asus-rog-phone.png')}}" class="img-fluid">
                        <div class="card-body p-3">
                            <h3>ASUS ROG Phone 3</h3>
                            <h5 class="text-danger mb-0">20.000.000 đ</h5>
                            <p class="mb-5"><del>20.000 đ</del></p>
                            <small><img src="{{asset('asset/img/index/star.png')}}"> 7749 đánh giá</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-3">
                    <div class="card">
                        <img src="{{asset('asset/img/index/old-phone.png')}}" class="img-fluid">
                        <div class="card-body p-3">
                            <h3>Máy bàn cổ xoay 9 số</h3>
                            <h5 class="text-danger mb-0">2.000.000 đ</h5>
                            <p class="mb-5"><del>20.000 đ</del></p>
                            <small><img src="{{asset('asset/img/index/star.png')}}"> 7749 đánh giá</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-3">
                    <div class="card">
                        <img src="{{asset('asset/img/index/asus-rog-phone.png')}}" class="img-fluid">
                        <div class="card-body p-3">
                            <h3>ASUS ROG Phone 3</h3>
                            <h5 class="text-danger mb-0">20.000.000 đ</h5>
                            <p class="mb-5"><del>20.000 đ</del></p>
                            <small><img src="{{asset('asset/img/index/star.png')}}"> 7749 đánh giá</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-3">
                    <div class="card">
                        <img src="{{asset('asset/img/index/old-phone.png')}}" class="img-fluid">
                        <div class="card-body p-3">
                            <h3>Máy bàn cổ xoay số 9</h3>
                            <h5 class="text-danger mb-0">2.000.000 đ</h5>
                            <p class="mb-5"><del>20.000 đ</del></p>
                            <small><img src="{{asset('asset/img/index/star.png')}}"> 7749 đánh giá</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-5">
            <div class="border border-dark p-3 box-shadow">
                <div class="clearfix px-3">
                    <span class="float-left"><h2>Phụ kiện cực hot</h2></span>
                    <span class="float-right"><a href="#" class="text-secondary">Xem tất cả sản phẩm</a></span>
                </div>
                <div class="row p-3">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <div class="bg-color-light-blue">
                            <img src="{{asset('asset/img/index/fake-amouse.png')}}" class="img-fluid w-100">
                            <h3 class="p-2">Chuột Fake</h3>
                            <h5 class="text-danger pl-3">2.000.000 đ</h5>
                            <div class="clearfix p-3">
                                <span class="float-left bg-warning p-1">Trả góp 0%</span>
                                <small class="float-right"><img src="{{asset('asset/img/index/star.png')}}"> 7749 đánh giá</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="row p-1 border border-secondary mb-3 bg-lighter-blue">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <img src="{{asset('asset/img/index/headphone.png')}}" class="img-fluid w-100">
                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                <h3>Tai nghe</h3>
                                <p class="text-danger mb-0">2.000.000 đ</p>
                                <p class="text-secondary mb-0"><del>9.000.000 đ</del></p>
                                <div class="clearfix mt-4">
                                    <small class="float-left"><img src="{{asset('asset/img/index/star.png')}}"> 7749 đánh giá</small>
                                    <span class="float-right p-1 bg-warning">Trả góp 0%</span>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1 border border-secondary mb-3">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <img src="{{asset('asset/img/index/keyboard.png')}}" class="img-fluid w-100">
                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                <h3>Bàn phím</h3>
                                <p class="text-danger mb-0">2.000.000 đ</p>
                                <p class="text-secondary mb-0"><del>9.000.000 đ</del></p>
                                <div class="clearfix mt-4">
                                    <small class="float-left"><img src="{{asset('asset/img/index/star.png')}}"> 7749 đánh giá</small>
                                    <span class="float-right p-1 bg-warning">Trả góp 0%</span>
                                </div>
                            </div>
                        </div>
                        <div class="row p-1  border border-secondary bg-lighter-blue">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <img src="{{asset('asset/img/index/speak.png')}}" class="img-fluid w-100">
                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                <h3>Loa</h3>
                                <p class="text-danger mb-0">2.000.000 đ</p>
                                <p class="text-secondary mb-0"><del>9.000.000 đ</del></p>
                                <div class="clearfix mt-4">
                                    <small class="float-left"><img src="{{asset('asset/img/index/star.png')}}"> 7749 đánh giá</small>
                                    <span class="float-right p-1 bg-warning">Trả góp 0%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-5 py-3 border border-info bg-light-blue box-shadow">
            <div class="row px-5 py-3">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
                    <div class="text-center">
                        <img src="{{asset('asset/img/index/see-more-laptop.png')}}" class="img-fluid w-100">
                        <input type="submit" name="seeMoreLaptop" id="seeMoreLaptop" value="See More" class="btn btn-success mt-3">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
                    <div class="text-center">
                        <img src="{{asset('asset/img/index/see-more-smartphone.png')}}" class="img-fluid w-100">
                        <input type="submit" name="seeMoreSmartphone" id="seeMoreSmartphone" value="See More" class="btn btn-success mt-3">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="text-center">
                        <img src="{{asset('asset/img/index/see-more-accessories.png')}}" class="img-fluid w-100">
                        <input type="submit" name="seeMoreAccessories" id="seeMoreAccessories" value="See More" class="btn btn-success mt-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
