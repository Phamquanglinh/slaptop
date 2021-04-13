@extends('layout.app')
@section('content')
    <link rel="stylesheet" href="{{asset('asset/css/profile.css')}}">
        <div class="container">
            <div class="showProfile">
                <h3 class="text-center font-weight-bold mt-5">Hồ sơ của bạn</h3>
                <ul class="list-group mt-5 mb-4">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">
                        <span class="font-weight-bold">Tên</span>
                        <span>{{backpack_user()->name}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="font-weight-bold">Email</span>
                        <span>{{backpack_user()->email}}</span>
                    </li>
                    @if(($customer) != null)
                        <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">
                            <span class="font-weight-bold">Số điện thoại</span>
                            <span>{{$customer->number_phone}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="font-weight-bold">Địa chỉ</span>
                            <span>{{$customer->address}}</span>
                        </li>
                    @endif
                </ul>
                <p class="text-center mb-5">
                    <input type="submit" class="btn btn-outline-primary btnUpdateProfile" value="Cập nhật hồ sơ" name="btnUpdateProfile">
                </p>
            </div>
            <div class="updateProfile hidden">
                @if(($customer) != null)
                    <h3 class="text-center font-weight-bold mb-5">Cập nhật hồ sơ</h3>
                    <form action="{{route('frontend.profile.update')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <input type="hidden" name="id_user" value="{{backpack_user()->id}}">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                <label for="name" class="font-weight-bold">Tên</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{backpack_user()->name}}">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                <label for="email" class="font-weight-bold">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{backpack_user()->email}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="hidden" name="user_id" value="{{$customer->user_id}}">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                <label for="telephoneNumber" class="font-weight-bold">Số điện thoại</label>
                                <input type="tel" class="form-control" name="phone" value="{{$customer->number_phone}}" id="telephoneNumber">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                <label for="address" class="font-weight-bold">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" value="{{$customer->address}}" id="address">
                            </div>
                        </div>
                        <div class="form-group text-center mb-5">
                            <input type="submit" class="btn btn-outline-success" value="Cập nhật">
                        </div>
                    </form>
                @else
                    <form action="{{route('frontend.profile.store')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <input type="hidden" name="user_id" value="{{backpack_user()->id}}">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                <label for="telephoneNumber" class="font-weight-bold">Số điện thoại</label>
                                <input type="tel" class="form-control" name="phone" value="" id="telephoneNumber">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                <label for="address" class="font-weight-bold">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" value="" id="address">
                            </div>
                        </div>
                        <div class="form-group text-center mb-5">
                            <input type="submit" class="btn btn-outline-success" value="Tạo">
                        </div>
                    </form>
                @endif
                <form action="{{route('change.password.user')}}" method="post">
                    @csrf
                   <div class="row">
                       <div class="form-group col-md-4 col-12">
                           <label>Mật khẩu cũ</label>
                           <input class="form-control" name="oldPassword" type="password" required>
                       </div>
                       <div class="form-group col-md-4 col-12">
                           <label>Mật khẩu mới</label>
                           <input class="form-control" name="newPassword" minlength="8" type="password" required>
                       </div>
                       <div class="form-group col-md-4 col-12">
                           <label>Nhập lại mật khẩu mới</label>
                           <input class="form-control" name="rePassword" minlength="8" type="password" required>
                       </div>
                   </div>
                    <button type="submit" class="btn btn-success my-2 text-center d-block3">Đổi mật khẩu</button>
                </form>
            </div>
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
            <script>
                $('.btnUpdateProfile').click(function () {
                    $('.showProfile').addClass('hidden');
                    $('.updateProfile').removeClass('hidden');
                });
            </script>
        </div>
@endsection
