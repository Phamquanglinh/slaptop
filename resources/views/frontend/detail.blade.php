@extends('layout.app')
@section('content')
    @if(isset($product))
        <?php $limit = 5?>
        <link rel="stylesheet" href="{!!asset('asset/css/detail.css')!!}">
        <style>
            .content {
                word-wrap: break-word !important;
            }

            .text-line-through {
                text-decoration: line-through !important;
            }

            .right-0 {
                right: 0 !important;
            }

            .smooth {
                transition: 0.2s !important;
            }
        </style>
        <div id="fb-root"></div>
        <div class="container pt-3 pb-5">
            <div class="slug text-primary pb-2 border-top-0 border-right-0 border-left-0 border border-primary">
                @if(isset($link['category']))
                    @if(isset($link['categoryParent_url']))
                        <a href="{!!route('category',['slug'=>$link['categoryParent_url'],'page'=>1])!!}">{!!$link['categoryParent']!!}
                            >></a>
                        <a href="{!!route('category',['slug'=>$link['category_url'],'page'=>1])!!}">{!!$link['category']!!}
                            >> </a>
                        <a href="{!!route('product',['slug'=>$link['product_url']])!!}">{!!$link['product']!!}</a>
                    @else
                        <a href="{!!route('category',['slug'=>$link['category_url'],'page'=>1])!!}">{!!$link['category']!!}
                            >> </a>
                        <a href="{!!route('product',['slug'=>$link['product_url']])!!}">{!!$link['product']!!} </a>
                    @endif
                @endif
            </div>

        </div>
        <div class="container bg-light p-5">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4 col-12">
                    <div class="img shadow-sm rounded position-relative">
                        <span class="position-absolute p-2 text-white bg-danger rounded right-0">- {!!$sell!!} %</span>
                        <img src="{{$product->cover_image}} "
                             class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-md-8 col-12 col-sm-8 col-lg-8 mt-2 mt-sm-0">
                    <div class="detail box-shadow rounded p-3">
                        <div class="h5">{!!$product->name!!}
                        </div>
                        <div class="price d-flex flex-wrap align-items-center">
                            <span class="text-muted p-2 text-line-through">{!!$product->old_price!!}đ</span><span
                                class="text-primary h4">{!!$product->price!!}đ</span>
                        </div>
                        <div class="input-group mb-3 flex-wrap">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-primary rounded-0" type="button" onclick="reduce()"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                            <input type="number" class="quantity" max="{{$product->quantity}}" min="1" id="quantity"
                                   value='1'>
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary rounded-0" type="button" onclick="add()"><i
                                        class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <button class="btn btn-info mb-2" onclick="buy('addCart')">Thêm vào giỏ hàng</button>
                        <button class="btn btn-success mb-2" onclick="buy('buyNow')">Mua ngay</button>
                    </div>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class=" mt-5 box-shadow">
                <ul class="nav nav-tabs bg-white" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                           aria-controls="home" aria-selected="true">Mô tả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                           aria-controls="profile" aria-selected="false">Thông số kỹ thuật</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                           aria-controls="contact" aria-selected="false">Thông tin bổ xung</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="p-3 content">

                            {!!$product->describe!!}

                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="p-3 content">
                            {!!$product->specifications!!}
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="p-3 content">
                            {!!$product->details!!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="text-primary h3 pb-5 text-center">Sản phẩm liên quan</div>
                <div class="row">
                    @foreach($products as $index => $items)
                        @if($index < 8)
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="box-shadow bg-white rounded ">
                                <a href="{!!route('product',['slug'=>$items->slug])!!}"
                                   class="link-style-none box-shadow bg-white">
                                    <div class="product-image p-1">
                                        <img
                                            src="{{$items->cover_image}}"
                                            class="img-fluid rounded">
                                    </div>
                                    <div class="p-1">
                                        <div class="h6">{!!$items->name!!}</div>
                                        <div class="text-primary h4">{!!$items->price!!}đ</div>
                                        <div class="text-muted">{!!$items->old_price!!}đ</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    <div class="d-flex align-items-center justify-content-center w-100 py-2 ">
                        <button class="btn btn-primary"><a class="link-style-none text-white" href="{{route('category',['slug'=>$link['category_url'],'page'=>1])}}" >Xem thêm</a></button>
                    </div>
                </div>
                @if(count($tag)!==0)
                    <div class="row">
                        <h4>Tags</h4>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="tags-group">
                                @foreach($tag as $items)
                                    <a href="{!!route('tag',['slug'=>$items->slug,'page'=>1])!!}"
                                       class="badge badge-info border-0 shadow-md">{!!$items->name!!}</a>

                                @endforeach

                            </div>
                        </div>
                    </div>
                @endif
                <div class="mt-5 box-shadow">
                    <div class="fb-comments" data-href="https://slaptop.com.vn/product/{!!$product->slug!!}" data-width="100%"
                         data-numposts="10"></div>
                </div>
            </div>
        </div>
        <script>
            function buy(method){
                var quantity = $('#quantity').val();

                url= "{{url('/cart')}}/"+method+"/{{$product->id}}/"+quantity;
                console.log(url);
               location.assign(url);
            }
            function add() {
                var quantity = document.getElementById('quantity');
                if (parseInt(quantity.value) < quantity.max) {
                    quantity.value = parseInt(quantity.value) + 1;
                }

            }

            function reduce() {
                var quantity = document.getElementById('quantity');
                if (parseInt(quantity.value) > quantity.min) {
                    quantity.value = parseInt(quantity.value) - 1;
                }
            }

        </script>
    @endif
@endsection
