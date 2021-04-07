
    <div class="container">
        <div class="p-1 rounded">
            <div class="p-2 h3 bg-white rounded">
                Đơn hàng của <b>{{$order->users()->first()->name}}</b>
            </div>
            <div class="border p-2 bg-white">
                @foreach($carts as $cart)
                    <div class="text-dark bg-light">
                        <div class="w-25 d-flex">
                            <img src="{{$cart->getProduct()->first()->cover_image}}" class="w-25">

                            <span class="d-flex flex-column">
                                <span class="text-primary font-weight-bold h5">{{$cart->getProduct()->first()->price}} đ</span>
                                <del class="text-muted">{{$cart->getProduct()->first()->price}} đ</del>
                            </span>
                        </div>
                        <a href="{{route('product',['slug'=>$cart->getProduct()->first()->slug])}}" class="link-style-none">
                            {{$cart->getProduct()->first()->name}}
                        </a><span> x {{$cart->quantity}}</span>
                    </div>
                @endforeach
            </div>
            <hr>
            <div class="border p-3">
                <p>Tổng thanh toán : {{$total/1000}}.000 đ</p>
                <p>Địa chỉ ship hàng : {{explode('/',$order->ship_address)[0]}}</p>
                <p>Số điện thoại : {{explode('/',$order->ship_address)[1]}}</p>
                <p>Email : {{$order->users()->first()->email}}</p>
                <button class="btn btn-primary">Xác nhận đã ship</button>
            </div>
        </div>
    </div>
