@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <img src="{{asset('asset/img/list-page/laptop-lenovo.png')}}" class="img-fluid w-100 border-radius">
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <h5 class="text-uppercase">laptop lenovo legion 5 15imh05 (82au004xvn) geforce gtx1650 4gb intel corei5 10300h 8gb 512 gb 15.6" 120hz ips rgb win 10</h5>
                <p>
                    <small><del>24.990.000 đ</del></small>
                    <span class="text-primary">20.990.000 đ</span>
                </p>
                <h6>Số lượng</h6>
                <div class="row">
                    <div class="col-2">
                        <button type="button" name="plus" class="btn btn-info">+</button>
                    </div>
                    <div class="col-2">
                        <input type="button" class="bg-white border-0" value="1">
                    </div>
                    <div class="col-2">
                        <button type="button" name="minus" class="btn btn-info">-</button>
                    </div>
                    <div class="col-6"><h6 class="text-primary">21.990.000 đ</h6></div>
                </div>
                <p class="float-right">
                    <span><img src="{{asset('asset/img/list-page/i.png')}}" class="img-fluid"></span>
                    <span><img src="{{asset('asset/img/list-page/trash.png')}}" class="img-fluid"></span>
                </p>
            </div>
        </div>
    </div>
@endsection
