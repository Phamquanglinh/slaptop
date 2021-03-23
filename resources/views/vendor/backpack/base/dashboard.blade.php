@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => 'Chào mừng '.backpack_user()->name,
        'content'     => 'Đọc kỹ hướng dẫn sử dụng trước khi dùng',
        'button_link' => backpack_url('logout'),
        'button_text' => 'Đăng xuất'
    ];
@endphp

@section('content')
    <img src="https://thietkehaithanh.com/wp-content/uploads/2019/01/thietkehaithanh-banner-laptop-800x300.png" class="w-100">
@endsection
