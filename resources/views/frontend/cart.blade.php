@extends('layout.app')
@section('content')
    <link rel="stylesheet" href="{{asset('asset/css/cart.css')}}">
    <div class="container">
        <div class="order row my-5 box-shadow border-radius">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <img src="{{asset('asset/img/cart-page/laptop-lenovo.png')}}" class="img-fluid w-100 border-radius p-2">
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 p-4">
                <h5 class="text-uppercase">laptop lenovo legion 5 15imh05 (82au004xvn) geforce gtx1650 4gb intel corei5 10300h 8gb 512 gb 15.6" 120hz ips rgb win 10</h5>
                <div class="d-flex flex-wrap align-items-center my-3">
                    <span class="text-secondary p-2"><del>24.990.000 đ</del></span>
                    <span class="text-primary h4 new-price">20.990.000 đ</span>
                </div>
                <h5>Số lượng</h5>
                <div class="input-group flex-wrap text-center">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-outline-primary bg-info rounded-0" onclick="addCount(1, 'minus')">
                            <i class="fas fa-minus text-white"></i>
                        </button>
                    </div>
                    <input type="number" class="quantity" value="2" min="1" id="slot-1">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-outline-primary bg-info rounded-0" onclick="addCount(1, 'plus')">
                            <i class="fas fa-plus text-white"></i>
                        </button>
                    </div>
                    <span class="h4 text-primary ml-5" id="total-1">41.980.000 đ</span>
                </div>
                <p class="float-right mt-0">
                    <span><a class="link-style-none" href="#"><i class="fas fa-info-circle fa-2x mr-2"></i></a></span>
                    <span><a class="link-style-none" href="#"><i class="fas fa-trash-alt fa-2x"></i></a></span>
                </p>
            </div>
        </div>
        <div class="order row my-5 box-shadow border-radius">
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
                        <button type="button" class="btn btn-outline-primary bg-info rounded-0" onclick="addCount(2, 'minus')">
                            <i class="fas fa-minus text-white"></i>
                        </button>
                    </div>
                    <input type="number" class="quantity" value="2" min="1" id="slot-2">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-outline-primary bg-info rounded-0" onclick="addCount(2, 'plus')">
                            <i class="fas fa-plus text-white"></i>
                        </button>
                    </div>
                    <span class="h4 text-primary ml-5" id="total-2">41.980.000 đ</span>
                </div>
                <p class="float-right mt-0">
                    <span><a class="link-style-none" href="#"><i class="fas fa-info-circle fa-2x mr-2"></i></a></span>
                    <span><a class="link-style-none" href="#"><i class="fas fa-trash-alt fa-2x"></i></a></span>
                </p>
            </div>
        </div>
        <div class="order row my-5 box-shadow border-radius">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <img src="{{asset('asset/img/cart-page/laptop-lenovo.png')}}" class="img-fluid w-100 border-radius p-2">
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 p-4">
                <h5 class="text-uppercase">laptop lenovo legion 5 15imh05 (82au004xvn) geforce gtx1650 4gb intel corei5 10300h 8gb 512 gb 15.6" 120hz ips rgb win 10</h5>
                <div class="d-flex flex-wrap align-items-center my-3">
                    <span class="text-secondary p-2"><del>24.990.000 đ</del></span>
                    <span class="text-primary h4 new-price">20.990.000 đ</span>
                </div>
                <h5>Số lượng</h5>
                <div class="input-group flex-wrap text-center">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-outline-primary bg-info rounded-0" onclick="addCount(3, 'minus')">
                            <i class="fas fa-minus text-white"></i>
                        </button>
                    </div>
                    <input type="number" class="quantity" value="2" min="1" id="slot-3">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-outline-primary bg-info rounded-0" onclick="addCount(3, 'plus')">
                            <i class="fas fa-plus text-white"></i>
                        </button>
                    </div>
                    <span class="h4 text-primary ml-5" id="total-3">41.980.000 đ</span>
                </div>
                <p class="float-right mt-0">
                    <span><a class="link-style-none" href="#"><i class="fas fa-info-circle fa-2x mr-2"></i></a></span>
                    <span><a class="link-style-none" href="#"><i class="fas fa-trash-alt fa-2x"></i></a></span>
                </p>
            </div>
        </div>
        <div class="row mb-5 box-shadow p-3 border-radius">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                <h3 class="mb-5">Thanh toán</h3>
                <div class="row">
                    <div class="col-8"><p class="font-weight-bold">Tổng số tiền các sản phẩm</p></div>
                    <div class="col-4"><p class="text-primary" id="total-price">125.940.000 đ</p></div>
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
                    <div class="col-4"><h5 class="text-primary" id="after-price">125.940.000 đ</h5></div>
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
            function addCount(count, method){
                let idQuantityInput = "slot-" + count; // get id
                let quantityValue = Number(document.getElementById(idQuantityInput).value);
                if (method === "plus"){
                    quantityValue += 1;
                } else {
                    if(quantityValue > 1){
                        quantityValue -= 1;
                    }
                }
                document.getElementById(idQuantityInput).value = quantityValue;
                let idTotalPrice = "total-" + count;
                document.getElementById(idTotalPrice).innerHTML = (20990000 * quantityValue).toLocaleString() + ' đ';
                function getPrice(index) {
                    return document.getElementById(index).innerHTML; //Function get price form index id
                }
                function getQuantity(index){
                    return document.getElementById(index).value;
                }
                let totalPrice = 0;
                let totalQuantity = 0;
                let orders=document.getElementsByClassName("order");
                for (let i = 1; i <= orders.length; i++){
                    let checkoutIndex = "total-" + i; // Make ID checkout
                    let quantityIndex="slot-" + i; // Make ID quantity
                    totalQuantity += Number(getQuantity(quantityIndex));
                    totalPrice += Number(getPrice(checkoutIndex));
                }
                document.getElementById("total-price").innerHTML = totalPrice.toLocaleString() + ' đ';
                document.getElementById("after-price").innerHTML = (totalQuantity * 20990000).toLocaleString() + ' đ';
            }
            // show pay method
            $('.pay').click(function (){
                $('.hidden').removeClass('hidden');
            })
        </script>
    </div>
@endsection
