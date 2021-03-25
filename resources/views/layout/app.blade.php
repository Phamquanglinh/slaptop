<!DOCTYPE html>
<html lang="vi">
<head>
    <title>{{isset($title) ? $title : 'SLaptop'}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/app.css')}}">
    <script type="text/javascript" src="{{asset('asset/js/fontawesome.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/poper.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/bootstrap.min.js')}}"></script>
</head>
<body>
<div class="container-fluid">
    <header class="bg-primary">
        <div class="py-5 bg-danger"></div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-primary">
        <div class="container">
            <a class="navbar-brand d-block d-md-none" href="#">SLaptop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sản phẩm
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Sản phẩm nổi bật</a></li>
                            <li><a class="dropdown-item" href="#">Sản phẩm bán chạy</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle dropright  " href="#">Danh mục</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Laptop</a></li>
                                    <li><a class="dropdown-item" href="#">Điện thoại</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Phụ kiện</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Sạc</a></li>
                                            <li><a class="dropdown-item" href="#">Tai nghe</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.contact')}}">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                </ul>
                <div class="text-white">
                    @if(backpack_auth()->check())
                        <a class="text-white px-1" href="{{route('backpack.account.info')}}">
                            <i class="fas fa-user"></i> {{backpack_user()->name}} </a>
                        <a class="text-white px-1" href="{{route('backpack.auth.logout')}}">
                            <i class="fas fa-sign-out-alt"></i> Đăng xuất </a>
                    @else
                        <a class="text-white px-1" href="{{route('backpack.auth.login')}}">
                            <i class="fas fa-sign-in-alt"></i> Đăng nhập </a>
                        <a class="text-white px-1 btn btn-success py-1" href="{{route('backpack.auth.register')}}">
                            <i class="fas fa-plus-square"></i> Đăng ký </a>
                    @endif
                    <button class="btn btn-outline-success text-white">
                        <a href="#" class="text-white px-1">
                            <i class="fas fa-shopping-cart"></i>
                            <div class="badge badge-danger text-white">12</div>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </nav>
@yield('slider')
@yield('content')
<!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>SLAPTOP</h6>
                    <p class="text-justify">
                        SLaptop.com là doanh nghiệp chuyên kinh doanh máy tính, điện thoại, phụ kiện Tốt nhất,
                        đảm bảo về cả chất lượng, mẫu mã.Sản phẩm đa dạng cùng nhiều chương trình khuyến mại hấp dẫn.
                    </p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Danh mục</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/category/c-language/">Máy tính</a></li>
                        <li><a href="http://scanfcode.com/category/front-end-development/">Điện thoại</a></li>
                        <li><a href="http://scanfcode.com/category/back-end-development/">Phụ kiện</a></li>
                        <li><a href="http://scanfcode.com/category/java-programming-language/">Sản phẩm đang bán
                                chạy</a></li>
                        <li><a href="http://scanfcode.com/category/android/">Sản phẩm giảm giá</a></li>
                        <li><a href="http://scanfcode.com/category/templates/">Voucher giảm giá</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Liên kết</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/about/">Giới thiệu</a></li>
                        <li><a href="{{route('frontend.contact')}}">Liên hệ</a></li>
                        <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Đăng ký làm đại lý</a></li>
                        <li><a href="http://scanfcode.com/privacy-policy/">Chính sách bảo mật</a></li>
                        <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
                        <a href="#">SLaptopTeam</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script>
        $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
            }
            var $subMenu = $(this).next('.dropdown-menu');
            $subMenu.toggleClass('show');


            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
                $('.dropdown-submenu .show').removeClass('show');
            });


            return false;
        });
    </script>
</div>
</body>
</html>
