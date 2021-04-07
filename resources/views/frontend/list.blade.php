@extends('layout.app')
@section('content')
    @if(isset($data))
        <?php $checkparent = true?>
        <link rel="stylesheet" href="{{asset('asset/css/list.css')}}">
        <style>
            .box-shadow {
                box-sizing: border-box;
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            }

            .discount {
                position: absolute;
                right: 0;
            }

            .right-0 {
                right: 0 !important;
            }
            .top-0{
                top:0px!important;
            }
        </style>
        <div class="container">
            @if(isset($slug))

                @if(isset($brand)||isset($tag)||isset($categories))
                    @if(!empty($categories)&&!empty($slug['parent_url']))

                        <h3 class="text-white bg-info p-2 my-5"><a
                                href="{{route('category',['slug'=>$slug['parent_url']])}}"
                                class="text-white">{{$slug['parent']}}</a>
                            >> <a href="{{route('category',['slug'=>$slug['main_url']])}}"
                                  class="text-white">{{$slug['main']}}</a>
                        </h3>
                    @else
                        <?php $checkparent = false?>
                    @endif

                    @if(!empty($brand))
                        <h3 class="text-white bg-info p-2 my-5">
                            <a href="{{route('brand',['slug'=>$slug['main_url']])}}"
                               class="text-white">{{$slug['main']}}</a>
                        </h3>
                        <?php $checkparent = true?>
                    @endif
                    @if(!empty($tag))
                        <h3 class="text-white bg-info p-2 my-5">
                            <a href="{{route('tag',['slug'=>$slug['main_url']])}}"
                               class="text-white">{{$slug['main']}}</a>
                        </h3>
                        <?php $checkparent = true?>
                    @endif

                    @if($checkparent)
                        <div class="row mb-3">
                            @foreach($products as $items)
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-4">
                                    <div class="p-1 box-shadow">
                                        <a class="link-style-none" href="{{route('product',['slug'=>$items->slug])}}">
                                            <div class="product-image position-relative">
                                                <img class="img-fluid" src="{{$items->cover_image}}">
                                                <h5 class="position-absolute p-2 text-white bg-danger rounded right-0 top-0">
                                                    - {!!$sell!!} %</h5>
                                            </div>

                                            <div class="p-2 bg-light">
                                                <h4>{{$items->name}}</h4>
                                                <p class="text-danger mb-1">{{$items->price}} d</p>
                                                <small class="text-secondary">{{$items->old_price}} d</small>
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
                    @endif
                @endif

                @if(!$checkparent)

                    <h3 class="text-white bg-info p-2 my-5">
                        <a href="{{route('category',['slug'=>$slug['main_url']])}}"
                           class="text-white">{{$slug['main']}}</a>
                    </h3>
                    <div class="row">
                        @foreach($products as $items)
                            @foreach($items as $item)
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-4">
                                    <div class="p-1 box-shadow">
                                        <a class="link-style-none"
                                           href="{{route('product',['slug'=>$item->slug])}}">
                                            <div class="product-image position-relative">
                                                <img class="img-fluid" src="{{$item->cover_image}}">
                                                @if($sell[$item->name]>0)
                                                    <h5 class="position-absolute p-2 text-white bg-danger rounded right-0 top-0">
                                                        - {!!$sell[$item->name]!!} %</h5>
                                                @else
                                                    <h5 class="position-absolute p-2 text-white bg-danger rounded right-0 top-0">{!!$sell[$item->name]!!}
                                                        %</h5>
                                                @endif
                                            </div>

                                            <div class="p-2 bg-light">
                                                <h4>{{$item->name}}</h4>
                                                <p class="text-danger mb-1">{{$item->price}} d</p>
                                                <small class="text-secondary">{{$item->old_price}} d</small>
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

            @endif

            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">9</a></li>
            </ul>
        </div>

    @endif
@endsection
