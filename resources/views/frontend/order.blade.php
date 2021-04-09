@extends('layout.app')
@section('content')
    <div class="container">
        <div class="text-left h2 py-4">Lịch sử mua hàng của bạn</div>

        @if(isset($data))
            @foreach($data as $key => $carts)
                <pre>
                </pre>
                <div class="card">
                    <div class="card-header font-weight-bold">Đơn hàng #{{$data[$key]['id']}}</div>
                </div>
                <div class="card-body">
                    @foreach($carts as $index => $cart)
                            <div class="">
                                @if(is_array($cart))
                                <div class="row">
                                    <div class="img-fit col-md-3 col-sm-6 col-12">
                                        <img src="{{$cart['image']}}" class="w-100">
                                    </div>
                                    <div class="col-md-9 col-sm-6 col-12">
                                        <div class="h6">{{$cart['name']}}</div>
                                        <small class="text-muted">
                                            <del>{{$cart['old_price']}} đ</del>
                                        </small>
                                        <div class="text-danger h5">
                                            {{$cart['price']}} đ
                                        </div>
                                        <div class="text-danger h4">
                                            Số lượng : {{$cart['quantity']}}
                                        </div>
                                        <div><a href="{{route('product',['slug'=>$cart['slug']])}}">Xem chi tiết sản phẩm</a></div>
                                    </div>
                                </div>
                                    <hr>
                                @endif
                            </div>
                    @endforeach
                </div>

            @endforeach
        @else
            <div class="flex-grow-1" style="height: 300px">
                Không có lịch sử mua hàng
            </div>
        @endif
    </div>

@endsection
