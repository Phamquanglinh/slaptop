@extends('layout.app')
@section('content')
    <style>
       .product-image .img-fluid{
         max-height:12rem!important;
       }
    </style>
    <div class="container py-5">
        @if(isset($search)&&$search)
            <h1 class="py-5">Kết quả tìm kiếm của:{{$title}}</h1>
            @if(empty($parentData))
                <div class="row mb-3">
                    @foreach($products as $items)
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-4">
                            <div class="p-1 box-shadow">
                                <a class="link-style-none"
                                   href="{{route('product',['slug'=>$items->slug])}}">
                                    <div class="product-image position-relative">
                                        <img class="img-fluid" src="{{$items->cover_image}}" alt="">
                                    </div>

                                    <div class="p-2 bg-light">
                                        <h6>{{$items->name}}</h6>
                                        <p class="text-danger mb-1">{{$items->price}} đ</p>
                                        <small class="text-secondary">{{$items->old_price}} đ</small>
                                        <p>
                                            <samll>

                                                <img
                                                    src="{{asset('asset/img/list-page/star.png')}}"> {{$items->rate}}
                                                đánh giá
                                            </samll>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row">
                    @foreach($parentData as $items)
                        @foreach($items as $item)
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-4">
                                <div class="p-1 box-shadow">
                                    <a class="link-style-none"
                                       href="{{route('product',['slug'=>$item->slug])}}">
                                        <div class="product-image position-relative">
                                            <img class="img-fluid" src="{{$item->cover_image}}">
                                        </div>

                                        <div class="p-2 bg-light">
                                            <h6>{{$item->name}}</h6>
                                            <p class="text-danger mb-1">{{$item->price}} đ</p>
                                            <small class="text-secondary"><del>{{$item->old_price}} đ</del></small>
                                            <p>
                                                <samll><img
                                                        src="{{asset('asset/img/list-page/star.png')}}"> {{$item->rate}}
                                                    đánh giá
                                                </samll>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            @endif
        @else
            <h1 class="text-center text-danger">Không có kết quả nào được tìm thấy!</h1>
        @endif
    </div>

@endsection
