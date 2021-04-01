<?php
$title = 'Giới thiệu';
?>
@extends('layout.app')
@section('content')
    <style>
        .bg-images{
            background-image:url('{{asset('asset/img/about-page/about1.jpg')}}')
        }
    </style>
    <link rel="stylesheet" href="{{asset('asset/css/about.css')}}">
    <div class="container-fluid">
        <div class="container">
            <div class="bg-images p-5">
                <div class="title-bg text-light mt-lg-5">SLAPTOP</div>
                <div class="text-light mt-3"><span class="title-1 mr-3">Mang </span><span class="title-2 font-weight-bold">NIỀM TIN </span></div>
                <div class="title-3 mt-3 text-light">cho khách hàng.</div>
            </div>
            <h1 class="text-center m-3"><b>GIỚI THIỆU VỀ SLAPTOP</b></h1>
            <p class="text-center"><b>Công ty Cổ phần Máy tính Hà Nội Slaptop là một trong những doanh nghiệp tiên phong trong lĩnh vực Công nghệ thông tin tại Hà Nội.</b></p>
            <p class="p-3" style="font-size: 15px">* Với tầm nhìn dài hạn, SLAPTOP tập trung vào đầu tư vào lĩnh vực công nghệ máy tính. Trên tinh thần phát triển bền vững và chuyên nghiệp, SLAPTOP được cơ cấu với các sản phẩm kinh doanh chính gồm:</p>
            <div class="text-center">
                <img class="m-3 success" src="{{asset('asset/img/about-page/img7.png')}}" alt="">
            </div>
            <div class="p-3" style="font-size: 20px;"><b>Văn hóa SLAPTOP</b> được thể hiện qua bốn giá trị cốt lõi: <b>TẬN TÂM</b> – <b>TRÁCH NHIỆM</b> – <b>SÁNG TẠO</b> – <b>KHÁC BIỆT</b></div>
            <div class="row justify-content-center text-center text-light">
                <div class="col-12 col-md-4 bg-warning mt-5 element">
                    <img class="mt-5" src="{{asset('asset/img/about-page/img1.jpg')}}" alt="">
                    <p class="title">TẬN TÂM</p>
                    <i>"Vượt trên sự mong đợi"</i><br>
                    <span>SLAPTOP đặt tận tâm là nền tảng của phục vụ, lấy khách hàng làm trung tâm, mang đến những giá trị đích thực tới khách hàng.</span>
                </div>
                <div class="col-12 col-md-1"></div>
                <div class="col-12 col-md-4 bg-danger mt-5 element">
                    <img class="mt-5" src="{{asset('asset/img/about-page/img2.jpg')}}" alt="">
                    <p class="title">TRÁCH NHIỆM</p>
                    <i>"Chúng ta luôn cố gắng"</i><br>
                    <span class="my-3">SLAPTOP đặt chữ TÍN lên hàng đầu, luôn thể hiện tinh thần trách nhiệm cao cùng phương châm “Làm hết việc chứ không làm hết giờ”.</span>
                </div>
            </div>
            <div class="row justify-content-center text-center text-light">
                <div class="col-12 col-md-4 bg-primary mt-5 element">
                    <img class="mt-5" src="{{asset('asset/img/about-page/img3.jpg')}}" alt="">
                    <p class="title">KHÁC BIỆT</p>
                    <i>"Dám nghĩ - Dám làm"</i><br>
                    <span>SLAPTOP đặt sự khác biệt là chủ trương để xây dựng công ty thành một doanh nghiệp dẫn đầu.</span>
                </div>
                <div class="col-12 col-md-1"></div>
                <div class="col-12 col-md-4 bg-info mt-5 element">
                    <img class="mt-5" src="{{asset('asset/img/about-page/img4.jpg')}}" alt="">
                    <p class="title">SÁNG TẠO</p>
                    <i>"Không gì là không thể"</i><br>
                    <span>SLAPTOP coi sáng tạo là đòn bẩy để phát triển, luôn đề cao các sáng kiến để hoàn thiện, hiệu quả hơn, nâng tầm giá trị.</span>
                </div>
            </div>
            <h3 class="p-3"><b>Những dấu mốc quan trọng:</b></h3>
            <ul>
                <li>2001: Thành lập công ty TNHH MÁY TÍNH HÀ NỘI</li>
                <li>2007: Áp dụng ISO 9000:2001, Hệ thống tiêu chuẩn quản lý chất lượng sản phẩm trên toàn cầu</li>
                <li>2010: Khai trương Showroom thứ hai tại 43 Thái Hà – Đống Đa – Hà Nội</li>
                <li>2014: Cổ phần hóa công ty, đổi tên thành CÔNG TY CỔ PHẦN MÁY TÍNH HÀ NỘI</li>
                <li>2016: Khai trương Showroom thứ tư tại 77 + 79 Nguyễn Văn Huyên – Cầu Giấy – Hà Nội</li>
                <li>2021: Khai trương Showroom thứ năm tại 511+513 Quang Trung – Hà Đông – Hà Nội</li>
            </ul>
            <div>
                <h3 class="p-3"><b>Những dự án đã thực hiện</b></h3>
                <ul>
                    <li>Tư vấn và lắp đặt hệ thống mạng máy tính cho Viện Khoa học Kỹ thuật Nông nghiệp Việt Nam.</li>
                    <li>Tư vấn và thiết kế, lắp đặt hệ thống máy tính, máy in và mạng cho Nhà xuất bản Phụ nữ Hà Nội.</li>
                    <li>Cung cấp và lắp đặt hệ thống mạng cho Trường Đại Học Công nghệ – ĐHQGHN.</li>
                    <li>Cung cấp máy tính và thiết bị mạng cho Tổng Công ty Viễn thông Quân Đội.</li>
                    <li>Cung cấp máy tính cho dự án Đào tạo Giáo viên THCS – Bộ Giáo dục và Đào tạo.</li>
                    <li>Là một trong sáu thành viên của Dự án G6 cung cấp máy tính giá ưu đãi cho học sinh, sinh viên.</li>
                    <li>Cung cấp máy tính và thiết bị mạng cho Học viện công nghệ Bưu chính Viễn Thông.</li>
                    <li>Cung cấp máy chiếu, máy tính để bàn, phần mềm quản lý giáo dục cho Phòng Giáo dục và Đào tạo Quận Nam Từ Liêm.</li>
                </ul>
                <p class="p-3">Ngoài các dự án, giải pháp trên công ty còn có nhiều hợp đồng cung cấp thiết bị tin học. Công ty đã có quan hệ với hàng nghìn khách hàng và luôn để lại cho khách hàng niềm tin tưởng ở khả năng chuyên môn, lòng nhiệt tình, tính cách chu đáo với các dịch vụ bảo hành bảo trì sau bán hàng.</p>
            </div>
            <div>
                <h3 class="p-3"><b>Những thành tựu đã đạt được</b></h3>
                <div class="text-center">
                    <img class="m-5 success" src="{{asset('asset/img/about-page/img5.png')}}" alt="">
                    <img class="m-5 success" src="{{asset('asset/img/about-page/img6.png')}}">
                </div>
                <ul>
                    <li>Bằng những nỗ lực không mệt mỏi, SLAPTOP tự hào là nhà bán lẻ thiết bị công nghệ cao được khách hàng và các đối tác tin tưởng và yêu mến. Đó là giải thưởng và niềm tự hào vô giá của chúng tôi.</li>
                    <li>Suốt 20 năm qua, SLAPTOP liên tiếp được ghi nhận:</li>
                    <li class="ml-5"><b>Top 10 nhà bán lẻ ICT tại Việt Nam </b> (ICT Associate, HCMC)</li>
                    <li class="ml-5"><b>Thương hiệu được yêu thích nhất:</b> Nhà bán lẻ ICT khu vực phía Nam (eChip)</li>
                    <li class="ml-5"><b>Là đối tác bán lẻ cao cấp nhất</b> của các hãng công nghệ hàng đầu thế giới <br>như Microsoft, Dell, Asus, Acer, Lenovo, MSI, Samsung, LG, WD, Intel, AMD…</li>
                </ul>
                <h4><b>Tin Tưởng Và Cống Hiến Tận Tâm</b></h4>
                <p>Tương lai được kiến tạo từ những việc bạn làm hôm nay chứ không phải ngày mai, hãy gia nhập đại gia đình SLAPTOP và cùng nhau tạo nên những giá trị<br> tự hào !</p>
            </div>
        </div>
    </div>
@endsection
