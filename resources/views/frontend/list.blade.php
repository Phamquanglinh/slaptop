@extends('layout.app')
@section('content')
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
        <h3 class="text-white bg-info p-2 my-5"><a href="#" class="text-white">Laptop</a> &#187; Laptop Gaming</h3>
        <div class="row mb-3">
            @for($i = 1; $i<= 12; $i++)
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-4">
                    <div class="p-1 box-shadow">
                        <a class="link-style-none" href="#">
                            <div class="bg-image">
                                <h5 class="bg-danger text-white p-2 discount">-18%</h5>
                            </div>
                            <div class="p-2 bg-light">
                                <h4>Laptop HP Gaming Pavilion...</h4>
                                <p class="text-danger mb-1">15.800.000 đ</p>
                                <small class="text-secondary">18.800.000 đ</small>
                                <p><samll><img src="{{asset('asset/img/list-page/star.png')}}"> 5000 đánh giá</samll></p>
                            </div>
                        </a>
                    </div>
                </div>
            @endfor
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
@endsection
