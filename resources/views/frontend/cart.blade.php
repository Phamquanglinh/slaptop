@extends('layout.app')
@section('content')
    <link rel="stylesheet" href="{{asset('asset/css/cart.css')}}">
    <style>
        @media all and (max-width: 992px) {
            .name-order, .quantity-string, .form-label{
                font-size: 1rem;
            }
            .new-price {
                font-size: 1.2rem;
            }
            .title-size-responsive {
                font-size: 1.5rem;
            }
            .size-responsive {
                font-size: 0.8rem;
            }
        }
    </style>
    @if(isset($carts->first()->id))
    <div class="container">
        <div class="orderList">
                @foreach($carts as $key => $cart)
                    @php
                        $product = $cart->getProduct()->first();
                    @endphp
                    <div class="order row my-5 box-shadow border-radius">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <img src="{{$product->cover_image}}"
                                 class="img-fluid w-75 border-radius p-2">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 p-4">
                            <h5 class="text-uppercase name-order">{{$product->name}}</h5>
                            <div class="d-flex flex-wrap align-items-center my-3">
                                <span class="text-secondary p-2"><del>{{$product->old_price}}</del></span>
                                <span class="text-primary h4 new-price">{{$product->price}}</span>
                            </div>
                            <h5 class="quantity-string">Số lượng</h5>
                            <div class="input-group flex-wrap text-center">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-primary bg-info rounded-0"
                                            onclick="addCount({{$key}},{{$product->price}},'minus');sumPrice()">
                                        <i class="fas fa-minus text-white"></i>
                                    </button>
                                </div>
                                <input type="number" class="quantity" value="{{$cart->quantity}}" min="1" id="slot-{{$key}}">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-primary bg-info rounded-0"
                                            onclick="addCount({{$key}},{{$product->price}}, 'plus');sumPrice()">
                                        <i class="fas fa-plus text-white"></i>
                                    </button>
                                </div>
                                <span class="h4 text-primary ml-5 total-price" id="total-{{$key}}">{{$product->price * $cart->quantity}} đ</span>
                            </div>
                            <p class="float-right my-0">
                                <span><a class="link-style-none" href="#"><i class="fas fa-info-circle mr-2"></i></a></span>
                                <span><a class="link-style-none" href="#"><i class="fas fa-trash-alt"></i></a></span>
                            </p>
                        </div>
                    </div>
            @endforeach
        </div>
        <div class="row mb-5 box-shadow p-3 border-radius">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                <h3 class="mb-5 title-size-responsive">Thanh toán</h3>
                <div class="row">
                    <div class="col-8"><p class="font-weight-bold size-responsive">Tổng số tiền các sản phẩm</p></div>
                    <div class="col-4"><p class="text-primary size-responsive" id="total-price"> đ</p></div>
                </div>
                <div class="row">
                    <div class="col-8"><p class="font-weight-bold size-responsive">Phí vận chuyển</p></div>
                    <div class="col-4"><p class="text-primary size-responsive">+ 12.000 đ</p></div>
                </div>
                <div class="row">
                    <div class="col-8"><p class="font-weight-bold size-responsive">Mã khuyến mãi áp dụng</p></div>
                    <div class="col-4"><p class="text-success size-responsive">- 12.000 đ</p></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-7 col-lg-7"><h3 class="title-size-responsive">Tổng</h3></div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4"><h5 class="text-primary" id="after-price">62.970.000
                            đ</h5></div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                <h3 class="mb-5 title-size-responsive">Chấp nhận thanh toán</h3>
                <div class="row bg-light-blue p-4 box-shadow border-radius">
                    <div class="col-4">
                        <img src="{{asset('asset/img/cart-page/vnpay.png')}}" class="img-fluid w-100">
                        <p class="font-weight-bold text-center mt-2 size-responsive">VNPAY</p>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('asset/img/cart-page/momo.png')}}" class="img-fluid w-100">
                        <p class="font-weight-bold text-center mt-2 size-responsive">MOMO</p>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('asset/img/cart-page/tt-pay.png')}}" class="img-fluid w-100">
                        <p class="font-weight-bold text-center mt-2 size-responsive">TT Khi nhận hàng</p>
                    </div>
                </div>
            </div>
            <div class="mx-auto mt-3">
                <button type="submit" class="btn btn-primary border-radius pay" onclick="getOrderData()">Tiến hành thanh
                    toán
                </button>
            </div>
        </div>
        <div class="row mb-5 box-shadow p-3 hidden border-radius">
            <div class="h4">Đơn hàng</div>
            <div id="bill" class="text-muted my-4"></div>
            <form action="#" method="post" class="w-100">
                @csrf
                <div class="row form-group">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <h5 class="form-label">Họ và tên</h5>
                        <input type="text" class="form-control" name="fullname" id="fullname">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <h5 class="form-label">Email</h5>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <h5 class="form-label">Số điện thoại</h5>
                        <input type="tel" class="form-control" name="telephone" id="telephone">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <h5 class="form-label">Địa chỉ</h5>
                        <input type="text" class="form-control" name="address" id="address">
                    </div>
                </div>
                <div class="form-group">
                    <h5 class="form-label">Ghi chú</h5>
                    <textarea class="form-control" rows="5"></textarea>
                </div>
                <input name="order-container" value="" type="hidden" id="order-container">
                <div class="form-group">
                    <h5 class="form-label">Phương thức thanh toán</h5>
                    <select name="pay">
                        <option>MOMO</option>
                        <option>VNPAY</option>
                        <option>Thanh toán khi nhận hàng</option>
                    </select>
                </div>
                <div class="form-group">
                    <p class="text-center mt-4">
                        <input type="submit" class="btn btn-success border-radius" value="Tiến hành thanh toán">
                    </p>
                </div>
            </form>
        </div>
        <script>
            function addCount(count,price, method) {
                let idQuantityInput = "slot-" + count; // get id
                let quantityValue = Number($('#'+idQuantityInput).val());
                if (method === "plus") {
                    quantityValue += 1;
                } else {
                    if (quantityValue > 1) {
                        quantityValue -= 1;
                    }
                }
                document.getElementById(idQuantityInput).value = quantityValue;
                let idTotalPrice = "total-" + count;
                $('#'+idTotalPrice).text((parseInt(price) * quantityValue));
                function getQuantity(index) {
                    return $('#'+index).val();
                }
            }
            //Total
           function sumPrice(){
               var finalPrice =0;
               $('.total-price').each(function (){
                   finalPrice += parseInt($(this).text());
               });
               $('#total-price').text(finalPrice).toLocaleString();
               $('#after-price').text(finalPrice).toLocaleString();
           }

            // show pay method
            $('.pay').click(function () {
                $('.hidden').removeClass('hidden');
                $('.orderList').addClass('hidden');
                $('.pay').addClass('hidden');
            })
            sumPrice();
        </script>
    </div>
    @else
        <div class="text-center p-5">Giỏ hàng trống , hãy quay lại mua hàng nhé !!</div>
    @endif
@endsection
