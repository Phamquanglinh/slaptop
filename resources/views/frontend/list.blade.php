@extends('layout.app')
@section('content')
    @if(isset($data))
    <link rel="stylesheet" href="{{asset('asset/css/list.css')}}">
    <style>
        .box-shadow{
            box-sizing: border-box;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
        .bg-image{
            position: relative;
            background-image: url("{{asset('asset/img/list-page/category.png')}}");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            height: 182px;
            border-radius: 5px;
        }
        .discount{
            position: absolute;
            right: 0;
        }
    </style>
    <div class="container">
        @if($slug)
        <h3 class="text-white bg-info p-2 my-5"><a href="{{route('category',['slug'=>$slug['parent_url']])}}" class="text-white">{{$slug['parent']}}</a>
            >> <a href="{{route('category',['slug'=>$slug['main_url']])}}" class="text-white">{{$slug['main']}}</a>
        </h3>
        @endif
        <div class="row mb-3">
            @foreach($products as $items)
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-4">
                    <div class="p-1 box-shadow">
                        <a class="link-style-none" href="{{route('product',['slug'=>$items->slug])}}">
                            <div class="bg-image">
                                <h5 class="bg-danger text-white p-2 discount">-18%</h5>
                            </div>
                            <div class="p-2 bg-light">
                                <h4>{{$items->name}}</h4>
                                <p class="text-danger mb-1">{{$items->price}} d</p>
                                <small class="text-secondary">{{$items->old_price}} d</small>
                                <p><samll><img src="{{asset('asset/img/list-page/star.png')}}"> {{$items->rate}} đánh giá</samll></p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
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
    @else <h1 class="text-center text-danger">Nothings select</h1>
        <script>
            alert('category haven\'t been selected!');
        </script>
    @endif
@endsection
