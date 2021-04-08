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
                <img class="d-block w-100" src="{{asset('asset/img/carouel-1.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('asset/img/carouel-2.png')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('asset/img/carouel-3.png')}}" alt="Third slide">
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
        .img-fit {
            height: 150px;
            overflow: hidden;
        }

        .name-fit {
            height: 60px;
            overflow: hidden;
        }

        .bg-galaxy {
            background-image: url("https://maxbytetech.com/wp-content/uploads/2015/12/odig-marketing-digital-bg-home.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;

        }

        .bg-premium {
            background-image: url("https://i.pinimg.com/originals/cc/dd/c2/ccddc2cde5dd224b282f9163be318b01.jpg");
            background-repeat: no-repeat;
            background-position-y:60% ;
            background-size: cover;
        }
    </style>
    <div class="bg-galaxy">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
                    <a href="#" class="text-center"><img src="{{asset('asset/img/index/flash-sale.png')}}"
                                                         class="img-fluid w-100"></a>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
                    <a href="#" class="text-center"><img src="{{asset('asset/img/index/big-sale.png')}}"
                                                         class="img-fluid w-100"></a>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <a href="#" class="text-center"><img src="{{asset('asset/img/index/black-friday.png')}}"
                                                         class="img-fluid w-100"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-galaxy pb-2">
        <div class="container bg-white rounded">
            <div class="p-3">
                <div class="clearfix px-3">
                    <a href="#" class="float-left text-dark link-style-none"><h2>Số lượng có hạn</h2></a>
                    <span class="float-right"><a href="{{route('tag',['slug'=>'so-luong-co-han.aspx','page'=>1])}}"
                                                 class="text">Xem tất cả sản phẩm</a></span>
                </div>
                <div class="row p-3">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <div class="bg-color-light-blue  cursor-pointer">
                            @php
                                $products = \App\Models\Tags::where('slug','=','so-luong-co-han.aspx')->first()->products()->orderBy('updated_at','DESC')->get();
                            @endphp
                            <a class="link-style-none" href="{{route('product',['slug'=>$products->first()->slug])}}">
                                <div class="p-4">
                                    <img src="{{$products->first()->cover_image}}"
                                         class="img-fluid w-100 box-shadow rounded">
                                </div>
                                <h5 class="px-4">{{$products->first()->name}}</h5>
                                <h5 class="text-danger px-4">{{$products->first()->price}} đ</h5>
                                <div class="clearfix p-3">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 cursor-pointer">
                        <div class="mb-3  rounded ">
                            @foreach($products as $index => $product)
                                @if($index >0 && $index<4)
                                    <div class="row box-shadow align-items-center p-2 rounded">
                                        <div class="col-12 col-md-4 px-0 img-fit overflow-hidden">
                                            <img src="{{$product->cover_image}}" class="img-fluid w-100">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                            <a class="link-style-none" href="#">
                                                <h6>{{$product->name}}</h6>
                                                <p class="text-danger mb-0">2.000.000 đ</p>
                                                <small class="text mb-0">
                                                    <del>9.000.000 đ</del>
                                                </small>
                                                <div class="clearfix">

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark">
        <div class="container">
            <div class="p-3">
                @php
                    $laptop = \App\Models\Category::where('slug','=','laptop.aspx')->first();
                    $childsOfLaptop = $laptop->child()->get();
                @endphp
                <div class="d-flex justify-content-between mb-3">
                    <h2 class="text-white">Laptop </h2>
                    <span><a href="{{route('category',['slug'=>'laptop.aspx',1])}}" class="text">Xem tất cả</a></span>
                </div>
                <div class="row">
                    @foreach($childsOfLaptop as $index => $item)
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-3">
                            <a class="link-style-none" href="#">
                                <div class="card">
                                    <div class="img-fit">
                                        <img src="{{$item->cover_image}}" class="img-fluid  w-100">
                                    </div>
                                    <div class="card-body p-3">
                                        <h5>{{$item->name}}</h5>
                                        <small class="mb-5">
                                            {{$item->products()->count()}} sản phẩm
                                        </small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="bg-galaxy">
        <div class="container">
            <div class="p-3">
                @php
                    $mobile = \App\Models\Category::where('slug','=','dien-thoai.aspx')->first();
                    $childsOfMobile = $mobile->child()->get();
                @endphp
                <div class="d-flex justify-content-between mb-3">
                    <h2 class="text-white">Điện thoại </h2>
                    <span><a href="{{route('category',['slug'=>'dien-thoai.aspx',1])}}"
                             class="text">Xem tất cả</a></span>
                </div>
                <div class="row">
                    @foreach($childsOfMobile as $index => $item)
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-3">
                            <a class="link-style-none" href="#">
                                <div class="card">
                                    <div class="img-fit">
                                        <img src="{{$item->cover_image}}" class="img-fluid  w-100">
                                    </div>
                                    <div class="card-body p-3">
                                        <h5>{{$item->name}}</h5>
                                        <small class="mb-5">
                                            {{$item->products()->count()}} sản phẩm
                                        </small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark">
        <div class="container">
            <div class="p-3 box-shadow">
                @php
                    $laptop = \App\Models\Category::where('slug','=','laptop.aspx')->first();
                    $childsOfLaptop = $laptop->child()->get();
                @endphp
                <div class="d-flex justify-content-between mb-3">
                    <h2 class="text-white">Laptop </h2>
                    <span><a href="{{route('category',['slug'=>'laptop.aspx',1])}}" class="text">Xem tất cả</a></span>
                </div>
                <div class="row">
                    @foreach($childsOfLaptop as $index => $item)
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-3">
                            <a class="link-style-none" href="#">
                                <div class="card">
                                    <div class="img-fit">
                                        <img src="{{$item->cover_image}}" class="img-fluid  w-100">
                                    </div>
                                    <div class="card-body p-3">
                                        <h5>{{$item->name}}</h5>
                                        <small class="mb-5">
                                            {{$item->products()->count()}} sản phẩm
                                        </small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="bg-premium">
        <div class="container text-white">
            <div class="h2 m-0 py-5"><i class="fas text-warning fa-crown"></i> Sản phẩm cao cấp <i
                    class="fas text-warning fa-crown"></i></div>
            @php
                $products = \App\Models\Tags::where('slug','=','san-pham-cao-cap.aspx')->first()->products()->orderBy('updated_at','DESC')->get();
            @endphp
            <div class="row">
                @foreach($products as $item)
                    <div class="col-md-3 col-sm-6 col-12 py-2   ">
                        <a class="link-style-none" href="{{route('product',['slug'=>$item->slug])}}">
                            <div class="bg-white p-2 rounded-top box-shadow">
                                <div class="img-fit">
                                    <img src="{{$item->cover_image}}" class="img-fluid">
                                </div>
                            </div>
                            <div class="bg-danger px-1 rounded-bottom">
                                <div class="h6 name-fit text-white">
                                    {{$item->name}}
                                </div>
                                <div class="text-warning h5">
                                    {{$item->price}} đ
                                </div>
                                <div class="text-white">
                                    <span class="text-white">Danh mục</span>
                                    <a class="text-warning" href="{{route('category',['slug'=>$item->category()->first()->slug,'page'=>1])}}">
                                        {{$item->category()->first()->name}}
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
