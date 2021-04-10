@extends('layout.app')
@section('content')
    @if(isset($data))
        @php
            $checkparent = true;
            $couter = 0;

        @endphp
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

            .top-0 {
                top: 0px !important;
            }
        </style>
        <div class="container">
            @if(isset($slug))

                @if(isset($brand)||isset($tag)||isset($categories))
                    @if(!empty($categories)&&!empty($slug['parent_url']))

                        <p class="text-primary p-2 my-5 border"><a
                                href="{{route('category',['slug'=>$slug['parent_url'],'page'=>1])}}"
                                class="text-primary">{{$slug['parent']}}</a>
                            >> <a href="{{route('category',['slug'=>$slug['main_url'],'page'=>1])}}"
                                  class="text-primary">{{$slug['main']}}</a>
                        </p>
                    @else
                        <?php $checkparent = false?>
                    @endif

                    @if(!empty($brand))
                        <p class="text-primary p-2 my-5 border">
                            <a href="{{route('brand',['slug'=>$slug['main_url'],'page'=>1])}}"
                               class="text-primary">{{$slug['main']}}</a>
                        </p>
                        <?php $checkparent = true?>
                    @endif
                    @if(!empty($tag))
                        <p class="text-primary p-2 my-5 border">
                            <a href="{{route('tag',['slug'=>$slug['main_url'],'page'=>1])}}"
                               class="text-primary">{{$slug['main']}}</a>
                        </p>
                        <?php $checkparent = true?>
                    @endif

                    @if($checkparent)
                        <div class="row mb-3">
                            @foreach($products as $items)
                                @if($couter >=(($page-1))*12 && $couter < (($page)*12) )
                                    @php
                                        $couter++;
                                    @endphp
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-4">
                                        <div class="p-1 box-shadow">
                                            <a class="link-style-none"
                                               href="{{route('product',['slug'=>$items->slug])}}">
                                                <div class="product-image position-relative">
                                                    <img class="img-fluid" src="{{$items->cover_image}}" alt="">
                                                    <h5 class="position-absolute p-2 text-white bg-danger rounded right-0 top-0">
                                                        - {!!$sell!!} %</h5>
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
                                @else
                                    @php
                                        $couter++;
                                    @endphp
                                @endif
                            @endforeach
                        </div>
                    @endif
                @endif

                @if(!$checkparent)

                    <p class="text-primary p-2 my-5 border">
                        <a href="{{route('category',['slug'=>$slug['main_url'],'page'=>1])}}"
                           class="text-primary">{{$slug['main']}}</a>
                    </p>
                    <div class="row">
                        @foreach($products as $items)
                            @foreach($items as $item)
                                @if($couter >=(($page-1))*12 && $couter < (($page)*12) )
                                    @php
                                        $couter++;
                                    @endphp
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
                                                    <h6>{{$item->name}}</h6>
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

                                @else
                                    @php
                                        $couter++;
                                    @endphp
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                @endif
            @endif
            <ul class="pagination justify-content-center">
                <?php $footer=$footer / 12 + 1 ?>
                @for($i=1;($i<= $footer);$i++)
                <li class="page-item"><a class="page-link" href="{{route(isset($tag)?'tag':'category',['slug'=>$slug['main_url'],'page'=>$i])}}">{{$i}}</a></li>
                @endfor
            </ul>
        </div>
    @endif
@endsection
