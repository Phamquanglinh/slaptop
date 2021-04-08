<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>Bảng điều khiển</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class='nav-icon la la-book-dead'></i> Danh mục</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('brand') }}'><i class='nav-icon la-landmark'></i>Thương hiệu</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('tags') }}'><i class='nav-icon la la-tags'></i> Nhãn</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('product') }}'><i class='nav-icon la la-product-hunt'></i> Sản phẩm</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('customer') }}'><i class='nav-icon la la-user-astronaut'></i> Khách hàng</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('order') }}'><i class='nav-icon la la-money-bill'></i> Đơn hàng</a></li>
@if(backpack_user()->role == 0)
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon la la-user'></i> Người dùng</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>Quản lý File</span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('faqs') }}'><i class='nav-icon la la-question'></i> Faqs</a></li>
@endif

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('page') }}'><i class='nav-icon la la-question'></i> Pages</a></li>