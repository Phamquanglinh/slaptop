<?php
$title = 'Câu hỏi thường gặp';
?>
@extends('layout.app')
@section('content')
    <link rel="stylesheet" href="{{asset('asset/css/faq.css')}}">
    <style>
        .bg-link{
            background: #38384f;
            background-image: linear-gradient(to right, #db1a5b, #2434b7);
            position: relative;
            background-position: center;
            background-size: cover;
        }
        .card{
            border: none;
        }
        .card-header{
            background-color: white;
            padding: 10px 0;
        }
        .card-body{
        }
        button:hover{
            cursor: pointer;
            color: yellow;
        }
    </style>
    <div class="bg-link text-light">
        <div class="container">
            <div class="row m-0">
                <div class="col-md-6 p-5 title-page">
                    <h3>SLAPTOP</h3>
                    <p>
                        <img src="{{asset('asset/img/question-page/bg_line_2.png')}}" alt="">
                    </p>
                    <p>Câu hỏi thường gặp</p>
                </div>
                <div class="col-md-6">
                    <span><img class="ml-5" src="{{asset('asset/img/question-page/4.png')}}" alt=""></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="accordion">
            @foreach($faqs as $key => $faq)
            <div class="card">
                <div class="card-header" id="heading{{$key+1}}">
                        <button class="btn btn-link text-dark" data-toggle="collapse" data-target="#collapse{{$key+1}}" aria-expanded="true" aria-controls="collapse{{$key+1}}">
                            Câu hỏi {{$key+1}}: {{$faq->question}}
                        </button>
                </div>
                <div id="collapse{{$key+1}}" class="collapsing" aria-labelledby="heading{{$key+1}}" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Trả lời:</b></p>
                        <div>
                            {!! $faq->answer !!}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection



