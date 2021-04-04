@extends('layout.app')
@section('content')
    <link rel="stylesheet" href="{{asset('asset/css/cart.css')}}">
    <div class="container">
        @for($i=1; $i<=3; $i++)
            <div class="row my-5 box-shadow border-radius">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="{{asset('asset/img/cart-page/laptop-lenovo.png')}}" class="img-fluid w-100 border-radius p-2">
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 p-4">
                    <h5 class="text-uppercase">laptop lenovo legion 5 15imh05 (82au004xvn) geforce gtx1650 4gb intel corei5 10300h 8gb 512 gb 15.6" 120hz ips rgb win 10</h5>
                    <div class="d-flex flex-wrap align-items-center my-3">
                        <span class="text-secondary p-2"><del>24.990.000 đ</del></span>
                        <span class="text-primary h4">20.990.000 đ</span>
                    </div>
                    <h5>Số lượng</h5>
                    <div class="input-group flex-wrap text-center">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-outline-primary bg-info rounded-0 decrement decPrice">
                                <i class="fas fa-minus text-white"></i>
                            </button>
                        </div>
                        <input type="number" class="quantity counter_increment counter_decrement" value="2" min="1">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-outline-primary bg-info rounded-0 increment incPrice">
                                <i class="fas fa-plus text-white"></i>
                            </button>
                        </div>
                        <span class="h4 text-primary ml-5 total_price">41.980.000 đ</span>
                    </div>
                    <p class="float-right mt-0">
                        <span><a class="link-style-none" href="#"><i class="fas fa-info-circle fa-2x mr-2"></i></a></span>
                        <span><a class="link-style-none" href="#"><i class="fas fa-trash-alt fa-2x"></i></a></span>
                    </p>
                </div>
            </div>
        @endfor
        <div class="row mb-5 box-shadow p-3 border-radius">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                <h3 class="mb-5">Thanh toán</h3>
                <div class="row">
                    <div class="col-8"><p class="font-weight-bold">Tổng số tiền các sản phẩm</p></div>
                    <div class="col-4"><p class="text-primary total_price">125.940.000 đ</p></div>
                </div>
                <div class="row">
                    <div class="col-8"><p class="font-weight-bold">Phí vận chuyển</p></div>
                    <div class="col-4"><p class="text-primary">+ 12.000 đ</p></div>
                </div>
                <div class="row">
                    <div class="col-8"><p class="font-weight-bold">Mã khuyến mãi áp dụng</p></div>
                    <div class="col-4"><p class="text-success">- 12.000 đ</p></div>
                </div><hr>
                <div class="row">
                    <div class="col-8"><h3>Tổng</h3></div>
                    <div class="col-4"><h5 class="text-primary total_price">125.940.000 đ</h5></div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                <h3 class="mb-5">Chấp nhận thanh toán</h3>
                <div class="row bg-light-blue p-4 box-shadow border-radius">
                    <div class="col-4">
                        <a class="link-style-none" href="#">
                            <img src="{{asset('asset/img/cart-page/vnpay.png')}}" class="img-fluid w-100">
                            <p class="font-weight-bold text-center mt-2">VNPAY</p>
                        </a>
                    </div>
                    <div class="col-4">
                        <a class="link-style-none" href="#">
                            <img src="{{asset('asset/img/cart-page/momo.png')}}" class="img-fluid w-100">
                            <p class="font-weight-bold text-center mt-2">MOMO</p>
                        </a>
                    </div>
                    <div class="col-4">
                        <a class="link-style-none" href="#">
                            <img src="{{asset('asset/img/cart-page/tt-pay.png')}}" class="img-fluid w-100">
                            <p class="font-weight-bold text-center mt-2">TT Khi nhận hàng</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mx-auto mt-5 mb-3">
                <button type="submit" class="btn btn-primary border-radius pay">Tiến hành thanh toán</button>
            </div>
        </div>
        <div class="row mb-5 box-shadow p-3 hidden border-radius">
            <form action="#" method="post" class="w-100">
                <div class="row form-group">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <h5>Họ và tên</h5>
                        <input type="text" class="form-control" name="fullname" id="fullname">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <h5>Email</h5>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <h5>Số điện thoại</h5>
                        <input type="tel" class="form-control" name="telephone" id="telephone">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <h5>Địa chỉ</h5>
                        <input type="text" class="form-control" name="address" id="address">
                    </div>
                </div>
                <div class="form-group">
                    <h5>Ghi chú</h5>
                    <textarea class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <h5>Phương thức thanh toán</h5>
                    <select>
                        <option>MOMO</option>
                        <option>VNPAY</option>
                        <option>Thanh toán khi nhận hàng</option>
                    </select>
                </div>
                <div class="form-group">
                    <p class="text-center mt-4"><input type="submit" class="btn btn-success border-radius pay" value="Tiến hành thanh toán"></p>
                </div>
            </form>
        </div>
        <script>
            $(document).ready(function (){
                // increment quantity
                let increment = $('.increment');
                let counterIncrement = $('.counter_increment');
                increment.click(function () {
                    counterIncrement.val(parseInt(counterIncrement.val())+1);
                });
                // // decrement quantity
                let decrement = $('.decrement');
                let counterDecrement = $('.counter_decrement');
                decrement.click(function () {
                    if (counterDecrement.val() > 1){
                        counterDecrement.val(parseInt(counterDecrement.val())-1);
                    }
                });

                // caculate price
                $('.incPrice').click(function (){
                    let getQuantity = $('.quantity').val();
                    let totalPrice = 20990000 * getQuantity;
                    $('.total_price').text(totalPrice.toLocaleString() + ' đ');
                });

                $('.decPrice').click(function (){
                    let getQuantity = $('.quantity').val();
                    let totalPrice = 20990000 * getQuantity;
                    $('.total_price').text(totalPrice.toLocaleString() + ' đ');
                });

                // show pay method
                $('.pay').click(function (){
                    $('.hidden').removeClass('hidden');
                })
            })
        </script>
    </div>
@endsection
