@extends(backpack_view('blank'))

@php
    $widgets['before_content'][0] = [
           'class' => 'col-12',
           'type'        => 'jumbotron',
           'heading'     => 'Chào mừng '.backpack_user()->name,
           'content'     => 'Đọc kỹ hướng dẫn sử dụng trước khi dùng',
           'button_link' => backpack_url('logout'),
           'button_text' => 'Đăng xuất'
       ];

       $widgets['before_content'][1]=[
       'type'        => 'progress',
       'class'       => 'card text-white bg-primary mb-2',
       'value'       => '11.456',
       'description' => 'Registered users.',
       'progress'    => 57, // integer
       'hint'        => '8544 more until next milestone.',
       ];
       $widgets['before_content'][2]=[
       'type'        => 'progress',
       'class'       => 'card text-white bg-primary mb-2',
       'value'       => '11.456',
       'description' => 'Registered users.',
       'progress'    => 57, // integer
       'hint'        => '8544 more until next milestone.',
       ];
       $widgets['before_content'][3]=[
       'type'        => 'progress',
       'class'       => 'card text-white bg-primary mb-2',
       'value'       => '11.456',
       'description' => 'Registered users.',
       'progress'    => 57, // integer
       'hint'        => '8544 more until next milestone.',
       ];
       $widgets['before_content'][4]=[
       'type'        => 'progress',
       'class'       => 'card text-white bg-primary mb-2',
       'value'       => '11.456',
       'description' => 'Registered users.',
       'progress'    => 57, // integer
       'hint'        => '8544 more until next milestone.',
       ];



       $widgets['before_content'][5]=[
       'type'       => 'chart',
       'controller' => \App\Http\Controllers\Admin\Charts\WeeklyUsersChartController::class,

       // OPTIONALS
            'class'   => 'card mb-2',
            'wrapper' => ['class'=> 'col-md-6'] ,
            'content' => [
             'header' => 'Tổng quan',
             'body'   => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>',
                        ],
       ];
        $widgets['before_content'][6]=[
       'type'       => 'chart',
       'controller' => \App\Http\Controllers\Admin\Charts\WeeklyUsersChartController::class,

       // OPTIONALS
            'class'   => 'card mb-2',
            'wrapper' => ['class'=> 'col-md-6'] ,
            'content' => [
             'header' => 'Tổng quan',
             'body'   => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>',
                        ],
       ];

@endphp

@section('content')
    <img src="https://thietkehaithanh.com/wp-content/uploads/2019/01/thietkehaithanh-banner-laptop-800x300.png"
         class="w-100">
    <style>
        .container-fluid {
            display: flex;
            flex-wrap: wrap;
        }

        .jumbotron {
            width: 100%;
        }
    </style>
@endsection


