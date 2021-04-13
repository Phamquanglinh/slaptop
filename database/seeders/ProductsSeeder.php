<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
            DB::table('products')->insert([

                'name'=>'Asus VivoBook X415EA i5 1135G7/8GB/512GB/Win10 (EK033T)',
                'price'=>15490000,
                'old_price'=>17890000,
                'quantity'=>50,
                'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/235982/asus-vivobook-x415ea-i5-ek033t-17-600x600.jpg',
                'rate'=>5,
                'category_id'=>3, //Laptop Văn phòng
                'brand_id'=>2,
                'user_id'=>random_int(1,5),
                'describe'=> '<h2>Đặc điểm nổi bật của Asus VivoBook X415EA i5 1135G7/8GB/512GB/Win10 (EK033T)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/235982/Slider/review-800x444.jpg" /></p>

<p><a href="https://www.thegioididong.com/laptop/asus-vivobook-x415ea-i5-ek033t" target="_blank">Laptop Asus VivoBook X415EA i5 (EK033T)</a>&nbsp;đi theo xu hướng thiết kế hiện đại, tối giản, ch&uacute; trọng v&agrave;o độ linh hoạt v&agrave; cơ động để người d&ugrave;ng dễ di chuyển hằng ng&agrave;y. Chiếc m&aacute;y n&agrave;y sở hữu bộ vi xử l&iacute; gen 11 đến từ nh&agrave; Intel cho hiệu suất l&agrave;m việc cao, ổn định.&nbsp;</p>

<h3>Thiết kế tối giản, gọn g&agrave;ng với trọng lượng chỉ 1.55 kg</h3>

<p><a href="https://www.thegioididong.com/laptop-asus-vivobook" target="_blank">Asus VivoBook</a>&nbsp;mang đến kiểu d&aacute;ng đơn giản, gọn g&agrave;ng v&agrave; tinh tế với vỏ ngo&agrave;i được l&agrave;m từ chất liệu nhựa, phủ sơn m&agrave;u bạc sang trọng h&uacute;t mắt người nh&igrave;n. Bạn&nbsp;c&oacute; thể dễ d&agrave;ng cầm m&aacute;y bằng một tay hay cho v&agrave;o balo v&agrave; mang theo mỗi ng&agrave;y.</p>

<p><a href="https://www.thegioididong.com/images/44/235982/4.jpg" onclick="return false;"><img alt="Laptop Asus VivoBook X415EA i5 (EK033T) - Thiết kế " src="https://cdn.tgdd.vn/Products/Images/44/235982/4.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/laptop-asus" target="_blank">Laptop Asus</a>&nbsp;VivoBook sử dụng&nbsp;<strong>bảo mật v&acirc;n tay</strong>&nbsp;để mở kh&oacute;a, m&aacute;y c&oacute; cảm biến v&acirc;n tay t&iacute;ch hợp ngay tr&ecirc;n b&agrave;n di chuột cho ph&eacute;p bạn mở kh&oacute;a chỉ sau một lần chạm thay v&igrave; phải g&otilde; mật khẩu d&agrave;i d&ograve;ng, an to&agrave;n hơn cho m&aacute;y.</p>

<p><a href="https://www.thegioididong.com/images/44/235982/8.jpg" onclick="return false;"><img alt="Laptop Asus VivoBook X415EA i5 (EK033T) - Vân tay" src="https://cdn.tgdd.vn/Products/Images/44/235982/8.jpg" /></a></p>

<p>M&aacute;y c&oacute; khả năng kết nối linh hoạt, trao đổi dữ liệu giữa c&aacute;c thiết bị dễ d&agrave;ng nhờ trang bị những cổng giao tiếp đa dạng như cổng USB 3.2, 2 cổng USB 2.0, HDMI, USB Type-C.&nbsp;Chuẩn<strong>&nbsp;Wi-Fi 802.11 a/b/g/n/ac</strong>&nbsp;tốc độ tối đa l&ecirc;n đến&nbsp;<strong>1730 Mbps&nbsp;</strong>gi&uacute;p người d&ugrave;ng trải nghiệm tốc độ mạng nhanh, ổn định.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/235982/7.jpg" onclick="return false;"><img alt="Laptop Asus VivoBook X415EA i5 (EK033T) - Kết nối " src="https://cdn.tgdd.vn/Products/Images/44/235982/7.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
                'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Asus VivoBook X415EA i5 1135G7/8GB/512GB/Win10 (EK033T)</h3>

<p><img alt="Thông số kỹ thuật 235982" src="https://cdn.tgdd.vn/Products/Images/44/235982/Kit/asus-vivobook-x415ea-i5-ek033t-note.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-bo-xu-ly-intel-core-the-he-thu-11-1304404" target="_blank">Intel Core i5 Tiger Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cpu-laptop-intel-core-i5-tiger-lake-1135g7-1305385" target="_blank">1135G7</a></p>
	</li>
	<li>Tốc độ CPU
	<p>2.40 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.2 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (On board 4GB +1 khe 4GB)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>3200 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>20 GB</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;Hỗ trợ khe cắm HDD SATA</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>14 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-led-backlit-led-backlight-1183188" target="_blank">LED Backlit</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-tich-hop-la-gi-950047" target="_blank">Card đồ họa t&iacute;ch hợp</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-card-do-hoa-tich-hop-intel-iris-xe-graphics-1305192" target="_blank">Intel Iris Xe Graphics</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/am-thanh-sonicmaster-la-gi-950390" target="_blank">SonicMaster audio</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">1 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516" target="_blank">2 x USB 2.0</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
	</li>
	<li>Khe đọc thẻ nhớ
	<p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">Micro SD</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">VGA Webcam</a></p>
	</li>
	<li>T&iacute;nh năng kh&aacute;c
	<p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 325.4 mm - Rộng 216 mm - D&agrave;y 19.9 mm</p>
	</li>
	<li>Trọng lượng
	<p>1.55 kg</p>
	</li>
	<li>Chất liệu
	<p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p>2-cell Li-ion, 37 Wh</p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2020</p>
	</li>
</ul>

<p>&nbsp;</p>
',
                'details'=> '<h2>Cấu h&igrave;nh ổn định, &iacute;t ti&ecirc;u tốn điện năng nhờ sử dụng CPU Core i5 thế hệ 11</h2>

<p>Bộ vi xử l&yacute;&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank">Core i5</a></strong>&nbsp;Tiger Lake gi&uacute;p chạy mượt c&aacute;c ứng dụng văn ph&ograve;ng v&agrave; cả những t&aacute;c vụ nặng hơn như thiết kế, l&agrave;m poster bằng AI, Photoshop,... Con chip n&agrave;y c&oacute; xung nhịp cơ bản&nbsp;<strong>2.40 GHz&nbsp;</strong>v&agrave; tối đa&nbsp;<strong>4.2 GHz&nbsp;</strong>khi &eacute;p xung gi&uacute;p hoạt động ổn định, &iacute;t ti&ecirc;u tốn điện năng.</p>

<p>Bộ vi xử l&iacute; n&agrave;y t&iacute;ch hợp card đồ họa&nbsp;<strong>Intel Iris Xe Graphics</strong>&nbsp;c&oacute; khả năng t&aacute;i hiện h&igrave;nh ảnh mượt m&agrave;, hỗ trợ sử dụng c&aacute;c phần mềm đồ họa tốt hơn, bạn cũng c&oacute; thể chơi được c&aacute;c tựa game nhẹ, đồ họa kh&ocirc;ng qu&aacute; cao.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/235982/2.jpg" onclick="return false;"><img alt="Laptop Asus VivoBook X415EA i5 (EK033T) - Cấu hình " src="https://cdn.tgdd.vn/Products/Images/44/235982/2.jpg" /></a></p>

<p>M&aacute;y sử dụng&nbsp;<a href="https://www.thegioididong.com/laptop-8-gb" target="_blank"><strong>RAM 8 GB</strong></a><strong>&nbsp;</strong>loại<strong>&nbsp;DDR4&nbsp;</strong>với 1 khe On board 4 GB v&agrave; 1 khe 4 GB rời, với tốc độ&nbsp;<strong>Bus RAM 3200 MHz&nbsp;</strong>cho khả năng đa nhiệm tốt, chạy đồng thời nhiều ứng dụng vẫn mượt m&agrave;. M&aacute;y cũng hỗ trợ n&acirc;ng cấp RAM tối đa l&ecirc;n đến 20 GB.&nbsp;</p>

<p><strong><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank">Ổ cứng SSD</a></strong>&nbsp;512 GB M.2 PCIe tốc độ đọc v&agrave; ghi dữ liệu vượt trội gi&uacute;p m&aacute;y khởi động, mở ứng dụng v&agrave; những thao t&aacute;c kh&aacute;c phản hồi si&ecirc;u nhanh, đảm bảo c&ocirc;ng việc của bạn sẽ lu&ocirc;n mượt m&agrave;, kh&ocirc;ng tốn nhiều thời gian chờ đợi. Dung lượng&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">512 GB</a></strong>&nbsp;đ&atilde; đủ để người d&ugrave;ng lưu trữ những t&agrave;i liệu học tập, l&agrave;m việc thường ng&agrave;y. Ngo&agrave;i ra, laptop hỗ trợ th&ecirc;m 1 khe cắm HDD SATA để tiện cho việc n&acirc;ng cấp ổ cứng khi cần thiết.</p>

<p><a href="https://www.thegioididong.com/images/44/235982/3.jpg" onclick="return false;"><img alt="Laptop Asus VivoBook X415EA i5 (EK033T) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/235982/3.jpg" /></a></p>

<h3>M&agrave;n h&igrave;nh NanoEdge hiển thị h&igrave;nh ảnh sắc n&eacute;t với độ ph&acirc;n giải Full HD</h3>

<p><a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;sở hữu m&agrave;n h&igrave;nh&nbsp;<a href="https://www.thegioididong.com/laptop-14-inch" target="_blank"><strong>14 inch</strong></a>&nbsp;NanoEdge viền mỏng tuyệt đẹp&nbsp;kết hợp với c&ocirc;ng nghệ LED Backlit cho h&igrave;nh ảnh sắc n&eacute;t, t&aacute;i hiện m&agrave;u sắc ch&acirc;n thực. Viền m&agrave;n h&igrave;nh mỏng gi&uacute;p tỉ lệ m&agrave;n h&igrave;nh so với th&acirc;n m&aacute;y lớn hơn, kh&ocirc;ng gian nh&igrave;n rộng r&atilde;i hơn.&nbsp;</p>

<p>C&ocirc;ng nghệ&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank"><strong>Chống ch&oacute;i Anti Glare</strong></a>&nbsp;giảm t&igrave;nh trạng ch&oacute;i, nh&ograve;e h&igrave;nh ảnh khi sử dụng m&aacute;y t&iacute;nh ở ngo&agrave;i trời nắng, gi&uacute;p cho mắt đỡ mỏi v&agrave; bị ch&oacute;i mắt so với c&aacute;c loại m&agrave;n h&igrave;nh kh&aacute;c.</p>

<p><a href="https://www.thegioididong.com/images/44/235982/6.jpg" onclick="return false;"><img alt="Laptop Asus VivoBook X415EA i5 (EK033T) - Màn hình " src="https://cdn.tgdd.vn/Products/Images/44/235982/6.jpg" /></a></p>

<p>C&ocirc;ng nghệ &acirc;m thanh&nbsp;<strong><a href="https://www.thegioididong.com/hoi-dap/am-thanh-sonicmaster-la-gi-950390" target="_blank">SonicMaster audio</a></strong>&nbsp;gi&uacute;p &acirc;m thanh ph&aacute;t ra trong trẻo, lọc tiếng ồn tốt, bạn c&oacute; thể thoải m&aacute;i thư gi&atilde;n với những b&agrave;i h&aacute;t c&oacute; &acirc;m bass mạnh, ngo&agrave;i ra c&ograve;n t&iacute;ch hợp bộ chỉnh Wizard Audio chuy&ecirc;n nghiệp.</p>

<p><a href="https://www.thegioididong.com/images/44/235982/9.jpg" onclick="return false;"><img alt="Laptop Asus VivoBook X415EA i5 (EK033T) - Âm thanh " src="https://cdn.tgdd.vn/Products/Images/44/235982/9.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/laptop?g=hoc-tap-van-phong" target="_blank">Laptop học tập - văn ph&ograve;ng</a>&nbsp;Asus VivoBook X415EA i5 (EK033T) với hiệu năng ổn định, l&agrave;m việc, học tập đều mượt m&agrave;, ổn định c&ugrave;ng thiết kế sang trọng, mỏng nhẹ c&oacute; thể đồng h&agrave;nh c&ugrave;ng bạn mỗi ng&agrave;y.&nbsp;</p>

<p>&nbsp;</p>
',
                'slug'=>Str::slug('Asus VivoBook X415EA i5 1135G7/8GB/512GB/Win10 (EK033T)','-').'.aspx',
                'created_at'=>now(),

            ]);

        DB::table('products')->insert([

            'name'=>' HP 15s fq2028TU i5 1135G7/8GB/512GB/Win10 (2Q5Y5PA)',
            'price'=>16990000,
            'old_price'=>17990000,
            'quantity'=>50,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/232907/hp-15s-fq2028tu-i5-2q5y5pa-600x600.jpg',
            'rate'=>400,
            'category_id'=>4, //Laptop Gaming
            'brand_id'=>1, //HP
            'user_id'=>random_int(1,5),
            'describe'=> '<h2>Đặc điểm nổi bật của HP 15s fq2028TU i5 1135G7/8GB/512GB/Win10 (2Q5Y5PA)</h2>
                            <p><img src="https://cdn.tgdd.vn/Products/Images/44/232907/Slider/2028-800x444.jpg" /></p>
                            <p><a href="https://www.thegioididong.com/laptop/hp-15s-fq2028tu-i5-2q5y5pa" target="_blank">HP 15s fq2028TU i5 (2Q5Y5PA)</a>&nbsp;c&oacute; vẻ ngo&agrave;i nổi bật với m&agrave;u bạc thời trang, viền m&agrave;n h&igrave;nh si&ecirc;u mỏng. Cấu h&igrave;nh b&ecirc;n trong của m&aacute;y mới thực sự l&agrave;m bạn bất ngờ khi đ&acirc;y l&agrave; chiếc laptop c&oacute; hiệu năng cực mạnh trong tầm gi&aacute;.</p>
                            <h3>Bộ vi xử l&yacute; mạnh mẽ, đ&aacute;p ứng ho&agrave;n hảo c&ocirc;ng việc văn ph&ograve;ng</h3>
                            <p>Sở hữu con chip&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank">Intel Core i5</a>&nbsp;Tiger Lake​&nbsp;1135G7</strong>&nbsp;thuộc d&ograve;ng&nbsp;<a href="https://www.thegioididong.com/laptop-cpu-intel-gen-11" target="_blank">CPU thế hệ thứ 11</a>, laptop sẽ mang lại cho bạn một hiệu suất đồ họa cao, cải thiện tuổi thọ pin đ&aacute;ng kể. Con chip sản&nbsp;xuất tr&ecirc;n tiến tr&igrave;nh&nbsp;<strong>10 nm</strong>&nbsp;ti&ecirc;n tiến,&nbsp;với&nbsp;<strong>4 nh&acirc;n 8 luồng&nbsp;</strong>cho xung nhịp cơ sở l&agrave;<strong>&nbsp;2.4 GHz</strong>&nbsp;v&agrave; xung nhịp tối đa&nbsp;<strong>4.2 GHz&nbsp;</strong>nhờ Turbo Boost, gi&uacute;p laptop bạn đủ để chạy tốt những ứng dụng văn ph&ograve;ng, học tập v&agrave; cả những t&aacute;c vụ nặng hơn như chỉnh sửa ảnh, bi&ecirc;n tập video.</p>
                            <p>Đi c&ugrave;ng với đ&oacute; l&agrave;&nbsp;<strong><a href="https://www.thegioididong.com/laptop-8-gb" target="_blank">RAM 8 GB</a>&nbsp;</strong>gi&uacute;p bạn l&agrave;m việc với hiệu suất cao hơn v&igrave; tốc độ&nbsp;mở c&aacute;c tập tin lớn nhanh ch&oacute;ng, mở được nhiều ứng dụng c&ugrave;ng l&uacute;c&nbsp;hay mở nhiều tab Chrome cũng kh&ocirc;ng giật lag. Ngo&agrave;i ra, RAM 8 GB c&ograve;n gi&uacute;p laptop thiết kế Photoshop, AI,... cực kỳ ổn định v&agrave; mượt m&agrave;.</p>
                            <p><a href="https://www.thegioididong.com/images/44/232907/hp-15s-fq2028tu-i5-2q5y5pa-111121-081121.jpg" onclick="return false;"><img alt="HP 15s fq2028TU i5 (2Q5Y5PA) - Hiệu năng" src="https://cdn.tgdd.vn/Products/Images/44/232907/hp-15s-fq2028tu-i5-2q5y5pa-111121-081121.jpg" /></a></p>
                            <p>Nhờ ổ cứng&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">SSD 512 GB</a>&nbsp;M.2 PCIe,&nbsp;</strong>bạn sẽ được tận hưởng sự mượt m&agrave;, nhanh ch&oacute;ng&nbsp;trong việc tăng tốc to&agrave;n diện m&aacute;y t&iacute;nh, cả tốc độ khởi động, mở ứng dụng lẫn truyền dữ liệu. Kh&ocirc;ng chỉ thế, bạn c&ograve;n được sở hữu một kh&ocirc;ng gian lưu trữ cực kỳ rộng lớn gi&uacute;p bạn thỏa sức lưu lại những t&agrave;i liệu học tập, những đoạn video hay bức ảnh qu&yacute; gi&aacute;.</p>
                            <p><a href="https://www.thegioididong.com/images/44/232907/hp-15s-fq2028tu-i5-2q5y5pa-111121-081158.jpg" onclick="return false;"><img alt="HP 15s fq2028TU i5 (2Q5Y5PA) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/232907/hp-15s-fq2028tu-i5-2q5y5pa-111121-081158.jpg" /></a></p>
                          ',
            'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết HP 15s fq2028TU i5 1135G7/8GB/512GB/Win10 (2Q5Y5PA)</h3>
                                <p><img alt="Thông số kỹ thuật 232907" src="https://cdn.tgdd.vn/Products/Images/44/232907/Kit/hp-15s-fq2028tu-i5-2q5y5pa-note.jpg" style="height:430px; width:500px" /></p>
                                <ul>
                                    <li>﻿</li>
                                    <li>Bộ xử l&yacute;</li>
                                    <li>C&ocirc;ng nghệ CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-bo-xu-ly-intel-core-the-he-thu-11-1304404" target="_blank">Intel Core i5 Tiger Lake</a></p>
                                    </li>
                                    <li>Loại CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cpu-laptop-intel-core-i5-tiger-lake-1135g7-1305385" target="_blank">1135G7</a></p>
                                    </li>
                                    <li>Tốc độ CPU
                                    <p>2.40 GHz</p>
                                    </li>
                                    <li>Tốc độ tối đa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.2 GHz</a></p>
                                    </li>
                                    <li>Bộ nhớ RAM, Ổ cứng</li>
                                    <li>RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
                                    </li>
                                    <li>Loại RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
                                    </li>
                                    <li>Tốc độ Bus RAM
                                    <p>3200 MHz</p>
                                    </li>
                                    <li>Hỗ trợ RAM tối đa
                                    <p>32 GB</p>
                                    </li>
                                    <li>Ổ cứng
                                    <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh</li>
                                    <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                    <p>15.6 inch</p>
                                    </li>
                                    <li>Độ ph&acirc;n giải
                                    <p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
                                    </li>
                                    <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-man-hinh-wled-backlit-tren-laptop-la-gi-1263016" target="_blank">Wled-backlit</a><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh cảm ứng
                                    <p>Kh&ocirc;ng c&oacute;</p>
                                    </li>
                                    <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                    <li>Thiết kế card
                                    <p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-tich-hop-la-gi-950047" target="_blank">Card đồ họa t&iacute;ch hợp</a></p>
                                    </li>
                                    <li>Card đồ họa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-card-do-hoa-tich-hop-intel-iris-xe-graphics-1305192" target="_blank">Intel Iris Xe Graphics</a></p>
                                    </li>
                                    <li>C&ocirc;ng nghệ &acirc;m thanh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-realtek-high-defi-1181909" target="_blank">Realtek High Definition Audio</a></p>
                                    </li>
                                    <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                    <li>Cổng giao tiếp
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
                                    </li>
                                    <li>Kết nối kh&ocirc;ng d&acirc;y
                                    <p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
                                    </li>
                                    <li>Khe đọc thẻ nhớ
                                    <p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">SD</a></p>
                                    </li>
                                    <li>Webcam
                                    <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
                                    </li>
                                    <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                    <p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
                                    </li>
                                    <li>K&iacute;ch thước &amp; trọng lượng</li>
                                    <li>K&iacute;ch thước
                                    <p>D&agrave;i 358.5 mm - Rộng 242 mm - D&agrave;y 18 mm</p>
                                    </li>
                                    <li>Trọng lượng
                                    <p>1.592 kg</p>
                                    </li>
                                    <li>Chất liệu
                                    <p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
                                    </li>
                                    <li>Th&ocirc;ng tin kh&aacute;c</li>
                                    <li>Loại PIN
                                    <p>PIN liền</p>
                                    </li>
                                    <li>Th&ocirc;ng tin Pin
                                    <p>3-cell Li-ion, 41 Wh</p>
                                    </li>
                                    <li>Hệ điều h&agrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                    </li>
                                    <li>Thời điểm ra mắt
                                    <p>2020</p>
                                    </li>
                                </ul>
                                ',
            'details'=> '<h2>Thiết kế mỏng nhẹ, tinh tế</h2>
                            <p>Với sự tinh tế trong thiết kế của m&igrave;nh,&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq-co-ban" target="_blank">HP 15s</a>&nbsp;đ&atilde; mang đến vẻ bề ngo&agrave;i thanh tho&aacute;t v&agrave; cực kỳ hiện đại với m&agrave;u bạc v&ocirc; c&ugrave;ng thời trang, thanh lịch. B&ecirc;n cạnh m&agrave;u sắc đẹp mắt, laptop khiến người d&ugrave;ng ấn tượng bởi trọng lượng chỉ với&nbsp;<strong>1.592 kg</strong>&nbsp;c&ugrave;ng với độ mỏng chỉ&nbsp;<strong>18 mm&nbsp;</strong>mang đến t&iacute;nh di động hơn bao giờ hết.</p>
                            <p><a href="https://www.thegioididong.com/images/44/232907/hp-15s-fq2028tu-i5-2q5y5pa-111221-081206.jpg" onclick="return false;"><img alt="HP 15s fq2028TU i5 (2Q5Y5PA) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/232907/hp-15s-fq2028tu-i5-2q5y5pa-111221-081206.jpg" /></a></p>
                            <p>B&ecirc;n cạnh những kết nối truyền thống như cổng&nbsp;<strong>USB 3.1, HDMI,&nbsp;</strong>khe đọc thẻ nhớ&nbsp;<strong>SD,</strong>&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;c&ograve;n mang tr&ecirc;n m&igrave;nh kết nối&nbsp;<strong>USB Type-C</strong>&nbsp;ti&ecirc;n tiến, sao lưu dữ liệu tốc độ rất cao. Đồng thời kết nối USB Type-C cũng nhỏ gọn, v&ocirc; c&ugrave;ng tiện lợi với 2 đầu cắm.</p>
                            <p>Ngo&agrave;i ra,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a>&nbsp;gi&uacute;p&nbsp;tăng cường tốc độ kết nối Internet của laptop để bạn c&oacute; thể online, lướt web một c&aacute;ch mượt m&agrave;. Cộng với sự hỗ trợ của&nbsp;<a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-kho-1113891" target="_blank">Bluetooth v5.0</a>, bạn dễ d&agrave;ng&nbsp;kết nối với nhiều thiết bị kh&aacute;c nhau m&agrave; kh&ocirc;ng gặp bất k&igrave; kh&oacute; khăn g&igrave;.</p>
                            <p><a href="https://www.thegioididong.com/images/44/232907/hp-15s-fq2028tu-i5-2q5y5pa-111121-081129.jpg" onclick="return false;"><img alt="HP 15s fq2028TU i5 (2Q5Y5PA) - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/232907/hp-15s-fq2028tu-i5-2q5y5pa-111121-081129.jpg" /></a></p>
                            <h3>Trải nghiệm h&igrave;nh ảnh sắc n&eacute;t, ch&acirc;n thật</h3>
                            <p>Nhờ trang bị c&ocirc;ng nghệ m&agrave;n h&igrave;nh&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">IPS</a>,&nbsp;g&oacute;c nh&igrave;n của bạn cũng được mở rộng đến&nbsp;<strong>178 độ&nbsp;</strong>với m&agrave;n h&igrave;nh&nbsp;<a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15,6 inch</a>&nbsp;cho độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>, hiển thị tốt mọi nội dung, mang đến những cảm gi&aacute;c mới lạ khi xem phim hay giải tr&iacute;.&nbsp;</p>
                            <p>Ngo&agrave;i ra nhờ c&ocirc;ng nghệ chống ch&oacute;i&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Anti Glare</a>, bạn dễ d&agrave;ng ho&agrave;n th&agrave;nh thật tốt c&ocirc;ng việc của m&igrave;nh d&ugrave; ở ngo&agrave;i trời với &aacute;nh s&aacute;ng ch&oacute;i gắt. Hơn nữa, với sự hỗ trợ của&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-man-hinh-wled-backlit-tren-laptop-la-gi-1263016" target="_blank">Wled-backlit</a>, c&ocirc;ng nghệ n&agrave;y sẽ gi&uacute;p m&agrave;n h&igrave;nh c&oacute; độ s&aacute;ng cao, m&agrave;u sắc kh&aacute; tốt đ&aacute;p ứng đủ nhu cầu của người d&ugrave;ng.</p>
                            <p><a href="https://www.thegioididong.com/images/44/232907/hp-15s-fq2028tu-i5-2q5y5pa-111121-081150.jpg" onclick="return false;"><img alt="HP 15s fq2028TU i5 (2Q5Y5PA) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/232907/hp-15s-fq2028tu-i5-2q5y5pa-111121-081150.jpg" /></a></p>
                            <p>Hiểu được niềm đam m&ecirc; &acirc;m nhạc của người d&ugrave;ng,&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">laptop HP</a>&nbsp;đ&atilde; tinh tế trang bị c&ocirc;ng nghệ&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-realtek-high-defi-1181909" target="_blank">Realtek High Definition Audio</a>&nbsp;gi&uacute;p tinh chỉnh &acirc;m trong trẻo, sống động hơn, phục vụ nhu cầu nghe nhạc, giải tr&iacute; hay họp online rất tốt.</p>
                            <p>Laptop HP 15s fq2028TU i5 (2Q5Y5PA) sở hữu một cấu h&igrave;nh mạnh mẽ trong th&acirc;n m&aacute;y&nbsp;<a href="https://www.thegioididong.com/laptop?g=mong-nhe-thoi-trang" target="_blank">mỏng nhẹ</a>, gi&uacute;p bạn xử l&yacute; gọn những t&aacute;c vụ thường ng&agrave;y, đ&aacute;p ứng trọn vẹn mọi nhu cầu học tập văn ph&ograve;ng.</p>
                         ',
            'slug'=>Str::slug(' HP 15s fq2028TU i5 1135G7/8GB/512GB/Win10 (2Q5Y5PA)','-').'.aspx',
            'created_at'=>now(),

        ]);

        DB::table('products')->insert([

            'name'=>'Asus VivoBook X515MA N4020/4GB/256GB/Win10 (BR111T)',
            'price'=>6990000,
            'old_price'=>7990000,
            'quantity'=>100,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/233852/t-600x400.jpg',
            'rate'=>400,
            'category_id'=>3, //Laptop Văn phòng
            'brand_id'=>2,
            'user_id'=>random_int(1,5),
            'describe'=> '<h2>Đặc điểm nổi bật của Asus VivoBook X515MA N4020/4GB/256GB/Win10 (BR111T)</h2>
                            <p><img src="https://cdn.tgdd.vn/Products/Images/44/233852/Slider/Untitled-1-800x444.jpg" /></p>
                            <h2>Laptop Asus VivoBook X515MA (BR111T) l&agrave; một mẫu&nbsp;<a href="https://www.thegioididong.com/laptop?g=hoc-tap-van-phong" target="_blank">laptop học tập - văn ph&ograve;ng</a>&nbsp;c&oacute; thiết kế gọn nhẹ, hiệu năng ổn định ph&ugrave; hợp với c&aacute;c bạn thường xuy&ecirc;n sử dụng c&aacute;c ứng dụng văn ph&ograve;ng nhẹ nh&agrave;ng.</h2>
                            <h3>Cấu h&igrave;nh ổn định, xử l&yacute; tốt c&aacute;c ứng dụng văn ph&ograve;ng</h3>
                            <p><a href="https://www.thegioididong.com/laptop-asus-vivobook" target="_blank">Laptop Asus VivoBook</a>&nbsp;được trang bị con chip&nbsp;<a href="https://www.thegioididong.com/laptop-celeron-pentium" target="_blank">Intel Celeron&nbsp;</a>c&oacute; hiệu năng ổn định xử l&yacute; c&aacute;c t&aacute;c vụ căn bản, với<strong>&nbsp;2 nh&acirc;n 2 luồng&nbsp;</strong>chip đạt xung nhịp&nbsp;<strong>1.10 GHz</strong>&nbsp;bạn lướt web, xem phim, nghe nhạc,... V&agrave; đạt xung nhịp tối đa l&agrave;<strong>&nbsp;2.8 GHz</strong>&nbsp;nhờ&nbsp;<strong>Turbo Boost&nbsp;</strong>để xử l&yacute; một số c&ocirc;ng việc văn ph&ograve;ng như: Word, Excel, Powerpoint,...</p>
                            <p>Đi c&ugrave;ng với chip l&agrave; card đồ họa t&iacute;ch hợp&nbsp;<strong>Intel UHD Graphics 600</strong>&nbsp;hỗ trợ việc xử l&yacute; h&igrave;nh ảnh tốt hơn v&agrave; tiết kiệm pin hiệu quả nhờ c&oacute; mức ti&ecirc;u thụ điện năng thấp n&ecirc;n th&iacute;ch hợp cho c&aacute;c t&aacute;c vụ văn ph&ograve;ng cơ bản.</p>
                            <p>M&aacute;y c&oacute;&nbsp;<a href="https://www.thegioididong.com/laptop?g=4-gb" target="_blank"><strong>RAM 4 GB</strong></a>&nbsp;cho khả năng xử l&yacute; đa nhiệm ổn định, bạn c&oacute; thể mở c&ugrave;ng l&uacute;c nhiều ứng dụng để phục vụ cho c&ocirc;ng việc tốt hơn m&agrave; kh&ocirc;ng lo m&aacute;y bị đơ hay giật. Nếu 4 GB c&oacute; thể l&agrave; qu&aacute; &iacute;t với bạn th&igrave; m&aacute;y c&ograve;n hỗ trợ n&acirc;ng cấp RAM l&ecirc;n&nbsp;<strong>16 GB</strong>&nbsp;gi&uacute;p bạn dễ d&agrave;ng n&acirc;ng cấp cho ph&ugrave; hợp với nhu cầu sử dụng.</p>
                            <p><a href="https://www.thegioididong.com/images/44/233852/asus-vivobook-x515ma-n4020-br111t-151221-101256.jpg" onclick="return false;"><img alt="Laptop Asus VivoBook X515MA (BR111T) - Hiệu năng" src="https://cdn.tgdd.vn/Products/Images/44/233852/asus-vivobook-x515ma-n4020-br111t-151221-101256.jpg" /></a></p>
                            <p>Thời gian khởi động m&aacute;y nhanh ch&oacute;ng v&agrave; khả năng lưu trữ lớn nhờ ổ cứng&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=ssd-256-gb" target="_blank">SSD 256 GB</a>&nbsp;</strong>tr&ecirc;n laptop. Bạn chỉ cần mất khoảng 10 - 15 gi&acirc;y để khởi động laptop v&agrave; 3 &ndash; 5 gi&acirc;y để khởi động c&aacute;c ứng dụng văn ph&ograve;ng, giải tr&iacute;, thỏa sức lưu trữ mọi dữ liệu cần thiết cho c&ocirc;ng việc, học tập hay những bộ phim y&ecirc;u th&iacute;ch để xem khi rảnh.</p>
                            <p><a href="https://www.thegioididong.com/images/44/233852/asus-vivobook-x515ma-n4020-br111t-151321-101347.jpg" onclick="return false;"><img alt="Laptop Asus VivoBook X515MA (BR111T) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/233852/asus-vivobook-x515ma-n4020-br111t-151321-101347.jpg" /></a></p>
                          ',
            'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Asus VivoBook X515MA N4020/4GB/256GB/Win10 (BR111T)</h3>
                                    <p><img alt="Thông số kỹ thuật 233852" src="https://cdn.tgdd.vn/Products/Images/44/233852/Kit/asus-vivobook-x515ma-n4020-br111t-note.jpg" style="height:430px; width:500px" /></p>
                                    <ul>
                                        <li>﻿</li>
                                        <li>Bộ xử l&yacute;</li>
                                        <li>C&ocirc;ng nghệ CPU
                                        <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-chip-intel-celeron-1199905" target="_blank">Intel Celeron</a></p>
                                        </li>
                                        <li>Loại CPU
                                        <p>N4020</p>
                                        </li>
                                        <li>Tốc độ CPU
                                        <p>1.10 GHz</p>
                                        </li>
                                        <li>Tốc độ tối đa
                                        <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 2.8 GHz</a></p>
                                        </li>
                                        <li>Bộ nhớ RAM, Ổ cứng</li>
                                        <li>RAM
                                        <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">4 GB</a></p>
                                        </li>
                                        <li>Loại RAM
                                        <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (1 khe)</a></p>
                                        </li>
                                        <li>Hỗ trợ RAM tối đa
                                        <p>16 GB</p>
                                        </li>
                                        <li>Ổ cứng
                                        <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD 256GB NVMe PCIe</a>,&nbsp;Hỗ trợ khe cắm HDD SATA</p>
                                        </li>
                                        <li>M&agrave;n h&igrave;nh</li>
                                        <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                        <p>15.6 inch</p>
                                        </li>
                                        <li>Độ ph&acirc;n giải
                                        <p>HD (1366 x 768)</p>
                                        </li>
                                        <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                        <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-led-backlit-led-backlight-1183188" target="_blank">LED Backlit</a></p>
                                        </li>
                                        <li>M&agrave;n h&igrave;nh cảm ứng
                                        <p>Kh&ocirc;ng c&oacute;</p>
                                        </li>
                                        <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                        <li>Thiết kế card
                                        <p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-tich-hop-la-gi-950047" target="_blank">Card đồ họa t&iacute;ch hợp</a></p>
                                        </li>
                                        <li>Card đồ họa
                                        <p><a href="https://www.thegioididong.com/hoi-dap/intel-uhd-graphics-600-la-gi-co-gi-noi-bat-1269381" target="_blank">Intel UHD Graphics 600</a></p>
                                        </li>
                                        <li>C&ocirc;ng nghệ &acirc;m thanh
                                        <p><a href="https://www.thegioididong.com/hoi-dap/am-thanh-sonicmaster-la-gi-950390" target="_blank">SonicMaster audio</a></p>
                                        </li>
                                        <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                        <li>Cổng giao tiếp
                                        <p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">1 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516" target="_blank">2 x USB 2.0</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
                                        </li>
                                        <li>Kết nối kh&ocirc;ng d&acirc;y
                                        <p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-bluetooth-41-co-gi-dac-biet-984016" target="_blank">Bluetooth 4.1</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
                                        </li>
                                        <li>Khe đọc thẻ nhớ
                                        <p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">Micro SD</a></p>
                                        </li>
                                        <li>Webcam
                                        <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">VGA Webcam</a></p>
                                        </li>
                                        <li>T&iacute;nh năng kh&aacute;c
                                        <p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
                                        </li>
                                        <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                        <p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
                                        </li>
                                        <li>K&iacute;ch thước &amp; trọng lượng</li>
                                        <li>K&iacute;ch thước
                                        <p>D&agrave;i 360.2 mm - Rộng 234.9 mm - D&agrave;y 19.9 mm</p>
                                        </li>
                                        <li>Trọng lượng
                                        <p>1.8 kg</p>
                                        </li>
                                        <li>Chất liệu
                                        <p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
                                        </li>
                                        <li>Th&ocirc;ng tin kh&aacute;c</li>
                                        <li>Loại PIN
                                        <p>PIN liền</p>
                                        </li>
                                        <li>Th&ocirc;ng tin Pin
                                        <p>2-cell Li-ion, 37 Wh</p>
                                        </li>
                                        <li>Hệ điều h&agrave;nh
                                        <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                        </li>
                                        <li>Thời điểm ra mắt
                                        <p>2020</p>
                                        </li>
                                    </ul>
                                ',
            'details'=> '<h2>Thiết kế gọn g&agrave;ng, linh hoạt cho việc di chuyển</h2>
                            <p>Chiếc<a href="https://www.thegioididong.com/laptop-asus" target="_blank">&nbsp;laptop Asus</a>&nbsp;c&oacute; lớp vỏ được l&agrave;m từ chất liệu nhựa vừa cho khối lượng nhẹ vừa gi&uacute;p tản nhiệt nhanh ch&oacute;ng, c&aacute;c g&oacute;c cạnh của m&aacute;y được v&aacute;t cong tỉ mỉ tạo n&ecirc;n sự liền mạch cho c&aacute;c bộ phận của laptop.</p>
                            <p>M&aacute;y c&oacute; trọng lượng chỉ&nbsp;<strong>1.8 kg&nbsp;</strong>v&agrave; mỏng&nbsp;<strong>19.9 mm</strong>&nbsp;kh&aacute; l&agrave; nhỏ gọn, sẽ kh&ocirc;ng g&acirc;y ra bất cứ vấn đề g&igrave; khi bạn di chuyển c&ugrave;ng với n&oacute;, bạn chỉ cần bỏ n&oacute; v&agrave;o những chiếc balo hay t&uacute;i x&aacute;ch c&oacute; k&iacute;ch thước vừa phải l&agrave; đ&atilde; c&oacute; thể mang theo thuận tiện cho c&ocirc;ng việc.</p>
                            <p><a href="https://www.thegioididong.com/images/44/233852/asus-vivobook-x515ma-n4020-br111t-151421-101410.jpg" onclick="return false;"><img alt="Laptop Asus VivoBook X515MA (BR111T) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/233852/asus-vivobook-x515ma-n4020-br111t-151421-101410.jpg" style="height:444px; width:800px" /></a></p>
                            <p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank"><strong>Cảm biến v&acirc;n tay</strong></a>&nbsp;được t&iacute;ch hợp tr&ecirc;n b&agrave;n di chuột gi&uacute;p bạn mở kh&oacute;a nhanh ch&oacute;ng chỉ với một c&aacute;i chạm nhẹ. B&ecirc;n cạnh tốc độ mở kh&oacute;a nhanh cảm biến c&ograve;n c&oacute; khả năng bảo mật tốt hơn so với mật khẩu trước đ&acirc;y, gi&uacute;p đảm bảo an to&agrave;n cho c&aacute;c dữ liệu quan trọng b&ecirc;n trong m&aacute;y.</p>
                            <p><a href="https://www.thegioididong.com/images/44/233852/cam-bien-van-tay.jpg" onclick="return false;"><img alt="Laptop Asus VivoBook X515MA (BR111T) - Vân tay" src="https://cdn.tgdd.vn/Products/Images/44/233852/cam-bien-van-tay.jpg" /></a></p>
                            <p>Tuy m&aacute;y c&oacute; k&iacute;ch thước nhỏ gọn nhưng vẫn trang bị đầy đủ c&aacute;c cổng kết nối th&ocirc;ng dụng dọc hai b&ecirc;n th&acirc;n m&aacute;y như: USB 3.2, USB 2.0, HDMI, khe đọc thẻ nhớ Micro SD, USB Type-C gi&uacute;p kết nối c&oacute; d&acirc;y dễ d&agrave;ng với c&aacute;c thiết bị kh&aacute;c như tivi hay m&aacute;y chiếu, chia sẻ dữ liệu nhanh ch&oacute;ng v&agrave; hỗ trợ c&ocirc;ng suất truyền tải điện l&ecirc;n đến 100W. Ngo&agrave;i ra, m&aacute;y c&ograve;n c&oacute; 2 phương thức kết nối kh&ocirc;ng d&acirc;y Bluetooth 4.1 v&agrave; Wi-Fi 802.11 a/b/g/n/ac cho tốc độ đường truyền nhanh, phạm vi kết nối lớn.</p>
                            <p><a href="https://cdn.tgdd.vn/2021/02/content/ckn-800x500.jpg" onclick="return false;"><img alt="Laptop Asus VivoBook X515MA (BR111T) - Cổng kết nối" src="https://cdn.tgdd.vn/2021/02/content/ckn-800x500.jpg" style="height:500px; width:800px" /></a></p>
                            <h3>M&agrave;n h&igrave;nh lớn, h&igrave;nh ảnh sắc n&eacute;t</h3>
                            <p><a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;sở hữu m&agrave;n h&igrave;nh&nbsp;<strong><a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a></strong>&nbsp;với độ ph&acirc;n giải&nbsp;<strong><a href="https://www.thegioididong.com/laptop-hd" target="_blank">HD</a>&nbsp;</strong>cho h&igrave;nh ảnh hiển thị sống động tr&ecirc;n một kh&ocirc;ng gian rộng r&atilde;i với chất lượng tốt nhất. Kết hợp c&ocirc;ng nghệ chống ch&oacute;i&nbsp;<strong>Anti Glare</strong>&nbsp;để h&igrave;nh ảnh chi tiết, ch&acirc;n thực v&agrave; r&otilde; r&agrave;ng nhất ở mọi g&oacute;c nh&igrave;n, thoải m&aacute;i cả khi l&agrave;m việc ngo&agrave;i trời.&nbsp;</p>
                            <p>M&agrave;n h&igrave;nh sử dụng c&ocirc;ng nghệ&nbsp;<strong>LED Backlit</strong>&nbsp;cho m&agrave;n h&igrave;nh mỏng, ti&ecirc;u tốn &iacute;t điện năng. Ngo&agrave;i ra c&ograve;n gi&uacute;p tăng độ tương phản của h&igrave;nh ảnh v&agrave; m&agrave;u sắc hiển thị để khung h&igrave;nh trở n&ecirc;n ho&agrave;n hảo hơn, đem đến cho bạn những khung h&igrave;nh tốt nhất.</p>
                            <p><a href="https://www.thegioididong.com/images/44/233852/asus-vivobook-x515ma-n4020-br111t-151321-101316.jpg" onclick="return false;"><img alt="Laptop Asus VivoBook X515MA (BR111T) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/233852/asus-vivobook-x515ma-n4020-br111t-151321-101316.jpg" /></a></p>
                            <p>M&aacute;y sử dụng&nbsp;<a href="https://www.thegioididong.com/hoi-dap/am-thanh-sonicmaster-la-gi-950390" target="_blank">c&ocirc;ng nghệ&nbsp;<strong>SonicMaster</strong></a>&nbsp;đ&acirc;y l&agrave; c&ocirc;ng nghệ &acirc;m thanh độc quyền tr&ecirc;n c&aacute;c sản phẩm của Asus. N&oacute; gi&uacute;p tối ưu &acirc;m thanh dựa tr&ecirc;n phần cứng tr&ecirc;n m&aacute;y t&iacute;nh cho &acirc;m thanh ph&aacute;t ra to, r&otilde; r&agrave;ng, lọc bỏ tiếng ồn, &acirc;m Bass s&acirc;u, &acirc;m thanh ch&acirc;n thực v&agrave; sinh động,... tạo n&ecirc;n kh&ocirc;ng gian &acirc;m nhạc sống động để bạn đắm ch&igrave;m v&agrave;o đ&oacute;.</p>
                            <p><a href="https://www.thegioididong.com/images/44/233852/asus-vivobook-x515ma-n4020-br111t-090221-0438053.jpg" onclick="return false;"><img alt="Laptop Asus VivoBook X515MA (BR111T) - Âm thanh" src="https://cdn.tgdd.vn/Products/Images/44/233852/asus-vivobook-x515ma-n4020-br111t-090221-0438053.jpg" /></a></p>
                            <p><a href="https://www.thegioididong.com/laptop/asus-vivobook-x515ma-n4020-br111t" target="_blank">Laptop Asus VivoBook X515MA (BR111T)</a>&nbsp;l&agrave; sự lựa chọn ph&ugrave; hợp d&agrave;nh cho sinh vi&ecirc;n, nh&acirc;n vi&ecirc;n văn ph&ograve;ng khi cần một chiếc laptop mỏng nhẹ, di động nhưng vẫn c&oacute; cấu h&igrave;nh ổn định đ&aacute;p ứng tốt c&aacute;c nhu cầu l&agrave;m việc căn bản.</p>
                        ',
            'slug'=>Str::slug('Asus VivoBook X515MA N4020/4GB/256GB/Win10 (BR111T)','-').'.aspx',
            'created_at'=>now(),

        ]);

        DB::table('products')->insert([

            'name'=>'HP 348 G7 i5 10210U/8GB/512GB/Win10 (9PH06PA)',
            'price'=>16990000,
            'old_price'=>17890000,
            'quantity'=>150,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/218439/hp-348-g7-i5-9ph06pa-kg2-1-218439-600x600.jpg',
            'rate'=>400,
            'category_id'=>3, //Laptop Văn phòng
            'brand_id'=>1,
            'user_id'=>random_int(1,5),
            'describe'=> '<h2>Đặc điểm nổi bật của HP 348 G7 i5 10210U/8GB/512GB/Win10 (9PH06PA)</h2>
                            <p><img src="https://cdn.tgdd.vn/Products/Images/44/218439/Slider/hp-348-g7-i5-9ph06pa-284420-094424.jpg" /></p>
                            <h2><a href="https://www.thegioididong.com/laptop/hp-348-g7-i5-10210u-8gb-512gb-win10-9ph06pa" target="_blank">Laptop HP 348 G7 i5 (9PH06PA)</a>&nbsp;l&agrave; mẫu laptop gi&aacute; mềm, thiết kế đẹp của HP, tập trung v&agrave;o cấu h&igrave;nh v&agrave; c&aacute;c tiện &iacute;ch sử dụng. M&aacute;y ph&ugrave; hợp cho c&aacute;c bạn sinh vi&ecirc;n hay nh&acirc;n vi&ecirc;n văn ph&ograve;ng d&ugrave;ng để xử l&yacute; c&ocirc;ng việc, học tập v&agrave; giải tr&iacute; h&agrave;ng ng&agrave;y.</h2>
                            <h3>Hiệu năng mạnh mẽ, tốc độ nhanh ch&oacute;ng</h3>
                            <p>Nắm bắt được sự thay đổi về c&ocirc;ng nghệ chiếc laptop HP cũng được trang bị CPU Intel&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank">Core i5</a></strong>&nbsp;thế hệ thứ 10 (vừa ra mắt cuối năm 2019) v&agrave; dung lượng&nbsp;<strong><a href="https://www.thegioididong.com/laptop-8-gb" target="_blank">RAM 8 GB</a></strong>.</p>
                            <p>Với cấu h&igrave;nh n&agrave;y, m&aacute;y đủ sức xử l&iacute; mượt m&agrave; c&aacute;c ứng dụng văn ph&ograve;ng từ cơ bản như Word, Exel,... v&agrave; khả năng xử l&iacute; h&igrave;nh ảnh chuy&ecirc;n s&acirc;u hơn với Photoshop, Ai&hellip;.</p>
                            <p><a href="https://www.thegioididong.com/images/44/218439/hp-348-g7-i5-9ph06pa-i5-10.jpg" onclick="return false;"><img alt="CPU Intel Core i5 thế hệ thứ 10 và dung lượng RAM 8 GB" src="https://cdn.tgdd.vn/Products/Images/44/218439/hp-348-g7-i5-9ph06pa-i5-10.jpg" /></a></p>
                            <p>Bạn cũng c&oacute; thể chiến những game th&ocirc;ng dụng như LOL, CS:GO ở mức setting trung b&igrave;nh m&agrave; &iacute;t c&oacute; hiện tượng giật lag.</p>
                            <p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">T&igrave;m hiểu về CPU Intel thế hệ thứ 10</a></p>
                            <p>Tốc độ phản hồi của m&aacute;y sẽ trở n&ecirc;n nhanh ch&oacute;ng với ổ cứng&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq-o-cung-ssd" target="_blank">SSD</a>. Thời gian khởi động m&aacute;y th&ocirc;ng thường chỉ v&agrave;o khoảng 20 gi&acirc;y.</p>
                            <p>B&ecirc;n cạnh đ&oacute; dung lượng&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">512 GB</a>&nbsp;</strong>l&agrave; kh&aacute; dư giả ở hiện tại, dung lượng n&agrave;y tương đương với hơn 400 tập phim Full HD 45 ph&uacute;t th&ocirc;ng thường, đảm bảo bạn c&oacute; đủ kh&ocirc;ng gian lưu trữ t&agrave;i liệu, ứng dụng..</p>
                            <p><a href="https://www.thegioididong.com/images/44/218439/hp-348-g7-i5-9ph06pa-ssd.jpg" onclick="return false;"><img alt="HP 348 G7 có ổ cứng SSD 512 GB" src="https://cdn.tgdd.vn/Products/Images/44/218439/hp-348-g7-i5-9ph06pa-ssd.jpg" /></a></p>
                            <h3>&nbsp;</h3>
                          ',
            'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết HP 348 G7 i5 10210U/8GB/512GB/Win10 (9PH06PA)</h3>
                                <p><img alt="Thông số kỹ thuật 218439" src="https://cdn.tgdd.vn/Products/Images/44/218439/Kit/hp-348-g7-i5-9ph06pa-note.jpg" style="height:430px; width:500px" /></p>
                                <ul>
                                    <li>﻿</li>
                                    <li>Bộ xử l&yacute;</li>
                                    <li>C&ocirc;ng nghệ CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i5 Comet Lake</a></p>
                                    </li>
                                    <li>Loại CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cpu-intel-core-i5-10210u-tren-laptop-la-gi-1239745" target="_blank">10210U</a></p>
                                    </li>
                                    <li>Tốc độ CPU
                                    <p>1.60 GHz</p>
                                    </li>
                                    <li>Tốc độ tối đa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.2 GHz</a></p>
                                    </li>
                                    <li>Bộ nhớ RAM, Ổ cứng</li>
                                    <li>RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
                                    </li>
                                    <li>Loại RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
                                    </li>
                                    <li>Tốc độ Bus RAM
                                    <p>2666 MHz</p>
                                    </li>
                                    <li>Hỗ trợ RAM tối đa
                                    <p>32 GB</p>
                                    </li>
                                    <li>Ổ cứng
                                    <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;Hỗ trợ khe cắm HDD SATA</p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh</li>
                                    <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                    <p>14 inch</p>
                                    </li>
                                    <li>Độ ph&acirc;n giải
                                    <p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
                                    </li>
                                    <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti-Glare</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh cảm ứng
                                    <p>Kh&ocirc;ng c&oacute;</p>
                                    </li>
                                    <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                    <li>Thiết kế card
                                    <p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-tich-hop-la-gi-950047" target="_blank">Card đồ họa t&iacute;ch hợp</a></p>
                                    </li>
                                    <li>Card đồ họa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/card-man-hinh-intel-uhd-graphics-tren-laptop-la-gi-1199634" target="_blank">Intel UHD Graphics</a></p>
                                    </li>
                                    <li>C&ocirc;ng nghệ &acirc;m thanh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-realtek-high-defi-1181909" target="_blank">Realtek High Definition Audio</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-am-thanh-stereo-am-thanh-kep-dual-spea-920547" target="_blank">Loa k&eacute;p (2 k&ecirc;nh)</a></p>
                                    </li>
                                    <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                    <li>Cổng giao tiếp
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">3 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
                                    </li>
                                    <li>Kết nối kh&ocirc;ng d&acirc;y
                                    <p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
                                    </li>
                                    <li>Khe đọc thẻ nhớ
                                    <p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">SD</a></p>
                                    </li>
                                    <li>Webcam
                                    <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
                                    </li>
                                    <li>T&iacute;nh năng kh&aacute;c
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tieu-chuan-quan-su-my-mil-std-810g-1304935" target="_blank">Độ bền chuẩn qu&acirc;n đội MLT STD 810G</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
                                    </li>
                                    <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                    <p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
                                    </li>
                                    <li>K&iacute;ch thước &amp; trọng lượng</li>
                                    <li>K&iacute;ch thước
                                    <p>D&agrave;i 324 mm - Rộng 225.9 mm - D&agrave;y 19.9 mm</p>
                                    </li>
                                    <li>Trọng lượng
                                    <p>1.5 kg</p>
                                    </li>
                                    <li>Chất liệu
                                    <p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
                                    </li>
                                    <li>Th&ocirc;ng tin kh&aacute;c</li>
                                    <li>Loại PIN
                                    <p>PIN liền</p>
                                    </li>
                                    <li>Th&ocirc;ng tin Pin
                                    <p><a href="https://www.thegioididong.com/hoi-dap/pin-li-po-la-gi-pin-li-ion-la-gi-pin-3-cell-6-ce-1190023" target="_blank">Li-Ion 3 cell</a></p>
                                    </li>
                                    <li>Hệ điều h&agrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                    </li>
                                    <li>Thời điểm ra mắt
                                    <p>2019</p>
                                    </li>
                                </ul>
                            ',
            'details'=> '<h2>Chiếc m&aacute;y 14 inch gọn nhẹ kh&ocirc;ng ngờ</h2>
                            <p><a href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">HP</a>&nbsp;348 G7 được thiết kế đặc biệt d&agrave;nh cho đối tượng kh&aacute;ch h&agrave;ng thường xuy&ecirc;n mang chiếc laptop b&ecirc;n cạnh với trọng lượng chỉ&nbsp;<strong>1.5 kg</strong>, lớp vỏ nhựa được gia c&ocirc;ng cứng c&aacute;p gi&uacute;p cho chiếc m&aacute;y trở n&ecirc;n chắc chắn.</p>
                            <p><a href="https://www.thegioididong.com/images/44/218439/hp-348-g7-i5-9ph06pa-kg2.jpg" onclick="return false;"><img alt="Chiếc máy 14 inch gọn nhẹ không ngờ" src="https://cdn.tgdd.vn/Products/Images/44/218439/hp-348-g7-i5-9ph06pa-kg2.jpg" /></a></p>
                            <p>HP thiết kế phần ghề nổi ở ch&iacute;nh giữa m&agrave;n h&igrave;nh gi&uacute;p&nbsp;mở đ&oacute;ng m&aacute;y dễ d&agrave;ng hơn, hạn chế nỗi lo hư bản lề.</p>
                            <p>Laptop HP 348 G7 chuẩn qu&acirc;n đội được thiết kế chịu được trường hợp rớt t&igrave;nh cờ,&nbsp;chống va đập, vẫn hoạt động tốt nếu c&oacute; v&ocirc; t&igrave;nh đ&aacute;nh rơi.</p>
                            <h3>H&igrave;nh ảnh chất lượng cao</h3>
                            <p>M&agrave;n h&igrave;nh<strong>&nbsp;<a href="https://www.thegioididong.com/laptop-14-inch" target="_blank">14 inch</a></strong>, viền mỏng ở 2 b&ecirc;n c&ugrave;ng độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;(1920 x 1080) hiển thị h&igrave;nh ảnh r&otilde; n&eacute;t, đẹp mắt.</p>
                            <p>Tấm nền IPS hiển thị m&agrave;u sắc tốt hơn, g&oacute;c nh&igrave;n rộng rất hữu &iacute;ch trong qu&aacute; tr&igrave;nh thiết kế đồ họa hay chia sẻ nội dung với đồng nghiệp, bạn b&egrave; xung quanh. C&ocirc;ng nghệ chống ch&oacute;i Anti-Glare gi&uacute;p th&ocirc;ng tin tr&ecirc;n m&aacute;y vẫn dễ nh&igrave;n trong điều kiện &aacute;nh s&aacute;ng mạnh chiếu v&agrave;o m&agrave;n h&igrave;nh.</p>
                            <p><a href="https://www.thegioididong.com/images/44/218439/hp-348-g7-i5-9ph06pa-inch.jpg" onclick="return false;"><img alt="Màn hình 14 inch, viền mỏng ở 2 bên" src="https://cdn.tgdd.vn/Products/Images/44/218439/hp-348-g7-i5-9ph06pa-inch.jpg" /></a></p>
                            <h3>Thời lượng pin đủ d&ugrave;ng, v&acirc;n tay, cổng kết nối tiện dụng</h3>
                            <p>Được trang bị Pin Li-Ion 3 cell, chiếc m&aacute;y c&oacute; thể hoạt động li&ecirc;n tục 4 giờ đồng hồ, sẵn s&agrave;ng b&ecirc;n bạn trong những cuộc họp hay l&agrave;m việc nh&oacute;m.&nbsp;</p>
                            <p>Chỉ với một chạm nhẹ, cảm biến sẽ qu&eacute;t v&acirc;n tay để mở kh&oacute;a thiết bị một c&aacute;ch nhanh ch&oacute;ng.</p>
                            <p><a href="https://www.thegioididong.com/images/44/218439/hp-348-g7-i5-9ph06pa-va%CC%82ntay.jpg" onclick="return false;"><img alt="Chỉ với một chạm nhẹ, cảm biến sẽ quét vân tay" src="https://cdn.tgdd.vn/Products/Images/44/218439/hp-348-g7-i5-9ph06pa-va%CC%82ntay.jpg" /></a></p>
                            <p>HP 348 G7 hỗ trợ đầy đủ c&aacute;c cổng kết nối th&ocirc;ng dụng nhất hiện nay như: 3 x USB 3.1, HDMI, LAN (RJ45), USB Type-C. Chiếc m&aacute;y sẽ kết nối tốt với c&aacute;c thiết bị ngoại vi phục vụ nhu cầu học tập, l&agrave;m việc của bạn.</p>
                            <p><a href="https://www.thegioididong.com/images/44/218439/hp-348-g7-i5-9ph06pa-usb.jpg" onclick="return false;"><img alt="HP 348 G7 hỗ trợ đầy đủ các cổng kết nối thông dụng" src="https://cdn.tgdd.vn/Products/Images/44/218439/hp-348-g7-i5-9ph06pa-usb.jpg" /></a></p>
                        ',
            'slug'=>Str::slug('HP 348 G7 i5 10210U/8GB/512GB/Win10 (9PH06PA)','-').'.aspx',
            'created_at'=>now(),
        ]);

        DB::table('products')->insert([

            'name'=>'HP Pavilion x360 dw1016TU i3 1115G4/4GB/256GB/Touch/Pen/Office H&S2019/Win10 (2H3Q0PA)',
            'price'=>14490000,
            'old_price'=>15890000,
            'quantity'=>150,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/234731/360-600x600.jpg',
            'rate'=>400,
            'category_id'=>3, //Laptop Văn phòng
            'brand_id'=>1,
            'user_id'=>random_int(1,5),
            'describe'=> '<h2>Đặc điểm nổi bật của HP Pavilion x360 dw1016TU i3 1115G4/4GB/256GB/Touch/Pen/Office H&amp;S2019/Win10 (2H3Q0PA)</h2>
                            <p><img src="https://cdn.tgdd.vn/Products/Images/44/234731/Slider/DDNB-800x444.jpg" /></p>
                            <h2>Laptop 2 trong 1&nbsp;<a href="https://www.thegioididong.com/laptop/hp-pavilion-x360-dw1016tu-i3-2h3q0pa" target="_blank">HP Pavilion x360 dw1016TU i3 (2H3Q0PA)</a>&nbsp;với cấu h&igrave;nh đủ d&ugrave;ng, trọng lượng mỏng nhẹ thỏa sức dịch chuyển c&ugrave;ng cơ chế sử dụng linh hoạt cho bạn thỏa sức l&agrave;m việc, giải tr&iacute; v&agrave; s&aacute;ng tạo mỗi ng&agrave;y.&nbsp;</h2>
                            <h3>Thiết kế mỏng nhẹ, bản lề gập xoay 360 độ</h3>
                            <p><a href="https://www.thegioididong.com/laptop-hp-compaq-pavilion" target="_blank">HP Pavilion</a>&nbsp;x360 to&aacute;t l&ecirc;n sự cao cấp nhờ thiết kế mỏng nhẹ, đường n&eacute;t mạnh mẽ nhưng kh&ocirc;ng k&eacute;m phần tinh tế. Độ mỏng ấn tượng chỉ&nbsp;<strong>19 mm</strong>&nbsp;v&agrave;&nbsp;<strong>1.65 kg</strong>&nbsp;thỏa sức dịch chuyển, cực k&igrave; ph&ugrave; hợp với nhu cầu di chuyển thường xuy&ecirc;n của giới trẻ hiện đại.</p>
                            <p><a href="https://www.thegioididong.com/images/44/234731/thiet-ke.jpg" onclick="return false;"><img alt="HP Pavilion x360 dw1016TU i3 (2H3Q0PA) - thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/234731/thiet-ke.jpg" /></a></p>
                            <p>Bản lề của HP Pavilion c&oacute; t&iacute;nh năng&nbsp;<strong>gập xoay 360</strong>&nbsp;độ cộng th&ecirc;m m&agrave;n h&igrave;nh cảm ứng đa điểm gi&uacute;p bạn c&oacute; thể t&ugrave;y chỉnh giữa nhiều chế độ sử dụng như chế độ laptop như b&igrave;nh thường, chế độ lều khi trao đổi th&ocirc;ng tin, họp nh&oacute;m hay gập lại để sử dụng như một chiếc m&aacute;y t&iacute;nh bảng thực thụ cực k&igrave; tiện lợi.&nbsp;</p>
                            <p><a href="https://www.thegioididong.com/images/44/234731/360-do.jpg" onclick="return false;"><img alt="HP Pavilion x360 dw1016TU i3 (2H3Q0PA) - 360 độ" src="https://cdn.tgdd.vn/Products/Images/44/234731/360-do.jpg" /></a></p>
                            <p>M&aacute;y c&oacute; c&aacute;c cổng kết nối th&ocirc;ng dụng cho c&ocirc;ng việc văn ph&ograve;ng như 2 cổng USB 3.1, HDMI v&agrave; USB Type-C truyền dữ liệu tốc độ cao cộng với khe thẻ nhớ Micro SD gi&uacute;p bạn chia sẻ dữ liệu dễ d&agrave;ng giữa laptop v&agrave; c&aacute;c thiết bị kh&aacute;c.</p>
                            <p><a href="https://www.thegioididong.com/images/44/234731/ket-noi.jpg" onclick="return false;"><img alt="HP Pavilion x360 dw1016TU i3 (2H3Q0PA) - kết nối" src="https://cdn.tgdd.vn/Products/Images/44/234731/ket-noi.jpg" /></a></p>
                            <p>Với phương thức kết nối kh&ocirc;ng d&acirc;y<strong>&nbsp;Bluetooth v5.0</strong>&nbsp;v&agrave;&nbsp;<strong>Wi-Fi 802.11 a/b/g/n/ac</strong>&nbsp;cho ph&eacute;p bạn kết nối với đường truyền tốc độ cao v&agrave; ổn định để l&agrave;m việc, học trực tuyến, xem phim, lướt web,...</p>
                            <p><a href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">Laptop HP</a>&nbsp;c&oacute;&nbsp;<strong>cảm biến v&acirc;n tay&nbsp;</strong>để mở kh&oacute;a thiết bị, thanh to&aacute;n trực tuyến một c&aacute;ch rất nhanh ch&oacute;ng, tiện lợi so với nhập mật khẩu truyền thống m&agrave; c&ograve;n bảo mật an to&agrave;n hơn.</p>
                            <p><a href="https://www.thegioididong.com/images/44/234731/bao-mat.jpg" onclick="return false;"><img alt="HP Pavilion x360 dw1016TU i3 (2H3Q0PA) - bảo mật" src="https://cdn.tgdd.vn/Products/Images/44/234731/bao-mat.jpg" /></a></p>
                            <h3>&nbsp;</h3>
                            ',
            'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết HP Pavilion x360 dw1016TU i3 1115G4/4GB/256GB/Touch/Pen/Office H&amp;S2019/Win10 (2H3Q0PA)</h3>
                                    <p><img alt="Thông số kỹ thuật 234731" src="https://cdn.tgdd.vn/Products/Images/44/234731/Kit/hp-pavilion-x360-dw1016tu-i3-2h3q0pa-note.jpg" style="height:430px; width:500px" /></p>
                                    <ul>
                                        <li>﻿</li>
                                        <li>Bộ xử l&yacute;</li>
                                        <li>C&ocirc;ng nghệ CPU
                                        <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-bo-xu-ly-intel-core-the-he-thu-11-1304404" target="_blank">Intel Core i3 Tiger Lake</a></p>
                                        </li>
                                        <li>Loại CPU
                                        <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cpu-laptop-intel-core-i3-tiger-lake-1115g4-1305062" target="_blank">1115G4</a></p>
                                        </li>
                                        <li>Tốc độ CPU
                                        <p>3.00 GHz</p>
                                        </li>
                                        <li>Tốc độ tối đa
                                        <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.1 GHz</a></p>
                                        </li>
                                        <li>Bộ nhớ RAM, Ổ cứng</li>
                                        <li>RAM
                                        <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">4 GB</a></p>
                                        </li>
                                        <li>Loại RAM
                                        <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
                                        </li>
                                        <li>Tốc độ Bus RAM
                                        <p>3200 MHz</p>
                                        </li>
                                        <li>Hỗ trợ RAM tối đa
                                        <p>32 GB</p>
                                        </li>
                                        <li>Ổ cứng
                                        <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD 256GB NVMe PCIe</a></p>
                                        </li>
                                        <li>M&agrave;n h&igrave;nh</li>
                                        <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                        <p>14 inch</p>
                                        </li>
                                        <li>Độ ph&acirc;n giải
                                        <p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
                                        </li>
                                        <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                        <p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-man-hinh-wled-backlit-tren-laptop-la-gi-1263016" target="_blank">Wled-backlit</a><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a></p>
                                        </li>
                                        <li>M&agrave;n h&igrave;nh cảm ứng
                                        <p>C&oacute;</p>
                                        </li>
                                        <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                        <li>Thiết kế card
                                        <p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-tich-hop-la-gi-950047" target="_blank">Card đồ họa t&iacute;ch hợp</a></p>
                                        </li>
                                        <li>Card đồ họa
                                        <p><a href="https://www.thegioididong.com/hoi-dap/card-man-hinh-intel-uhd-graphics-tren-laptop-la-gi-1199634" target="_blank">Intel UHD Graphics</a></p>
                                        </li>
                                        <li>C&ocirc;ng nghệ &acirc;m thanh
                                        <p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-bang-olufsen-tren-laptop-955118" target="_blank">Bang &amp; Olufsen audio</a></p>
                                        </li>
                                        <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                        <li>Cổng giao tiếp
                                        <p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
                                        </li>
                                        <li>Kết nối kh&ocirc;ng d&acirc;y
                                        <p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
                                        </li>
                                        <li>Khe đọc thẻ nhớ
                                        <p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">SD</a></p>
                                        </li>
                                        <li>Webcam
                                        <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
                                        </li>
                                        <li>T&iacute;nh năng kh&aacute;c
                                        <p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
                                        </li>
                                        <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                        <p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
                                        </li>
                                        <li>K&iacute;ch thước &amp; trọng lượng</li>
                                        <li>K&iacute;ch thước
                                        <p>D&agrave;i 221 mm - Rộng 324 mm - D&agrave;y 19 mm</p>
                                        </li>
                                        <li>Trọng lượng
                                        <p>1.65 kg</p>
                                        </li>
                                        <li>Chất liệu
                                        <p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
                                        </li>
                                        <li>Th&ocirc;ng tin kh&aacute;c</li>
                                        <li>Loại PIN
                                        <p>PIN liền</p>
                                        </li>
                                        <li>Th&ocirc;ng tin Pin
                                        <p><a href="https://www.thegioididong.com/hoi-dap/pin-li-po-la-gi-pin-li-ion-la-gi-pin-3-cell-6-ce-1190023" target="_blank">Li-Ion 3 cell</a></p>
                                        </li>
                                        <li>Hệ điều h&agrave;nh
                                        <p>Windows 10 Home SL + Office Home&amp;Student 2019 vĩnh viễn</p>
                                        </li>
                                        <li>Thời điểm ra mắt
                                        <p>2020</p>
                                        </li>
                                    </ul>
                                    ',
            'details'=> '<h2>Cấu h&igrave;nh ổn định, xử l&iacute; nhanh&nbsp;</h2>
                            <p>Laptop HP&nbsp;Pavilion x360 sở hữu sức mạnh của vi xử l&iacute;&nbsp;<strong>Intel&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i3" target="_blank">Core i3</a>&nbsp;Tiger Lake&nbsp;<a href="https://www.thegioididong.com/laptop-cpu-intel-gen-11" target="_blank">gen 11</a>&nbsp;</strong>sản xuất tr&ecirc;n tiến tr&igrave;nh 10nm, xung nhịp trung b&igrave;nh 3.00 GHz, tốc độ tối đa l&agrave; 4.1 GHz cho khả năng xử l&iacute; mạnh mẽ, sử dụng l&otilde;i Willow Cove ti&ecirc;u tốn &iacute;t năng lượng hơn. T&iacute;ch hợp trong con chip n&agrave;y l&agrave; card đồ họa&nbsp;Intel UHD Graphics tăng khả năng đồ họa để h&igrave;nh ảnh hiển thị sắc n&eacute;t hơn.</p>
                            <p><a href="https://www.thegioididong.com/images/44/234731/cau-hinh.jpg" onclick="return false;"><img alt="HP Pavilion x360 dw1016TU i3 (2H3Q0PA) - cấu hình" src="https://cdn.tgdd.vn/Products/Images/44/234731/cau-hinh.jpg" /></a></p>
                            <p>B&ecirc;n cạnh đ&oacute; m&aacute;y trang bị&nbsp;<a href="https://www.thegioididong.com/laptop?g=4-gb" target="_blank"><strong>4 GB RAM</strong></a>&nbsp;DDR4 với tốc độ Bus 3200 MHz cho khả năng đa nhiệm ổn, c&oacute; thể sử dụng nhiều ứng dụng c&ugrave;ng l&uacute;c, chẳng hạn như vừa l&agrave;m việc tr&ecirc;n Word vừa tham khảo t&agrave;i liệu từ h&agrave;ng chục tab Chrome. M&aacute;y c&ograve;n hỗ trợ khe RAM tối đa l&ecirc;n đến 32 GB thuận tiện cho việc n&acirc;ng cấp về sau.</p>
                            <p><a href="https://www.thegioididong.com/images/44/234731/ram.jpg" onclick="return false;"><img alt="HP Pavilion x360 dw1016TU i3 (2H3Q0PA) - ram" src="https://cdn.tgdd.vn/Products/Images/44/234731/ram.jpg" /></a></p>
                            <p><strong><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank">Ổ cứng SSD</a>&nbsp;256 GB NVMe PCIe</strong>&nbsp;cho tốc độ khởi chạy Windows, c&aacute;c t&aacute;c vụ đều diễn ra mượt m&agrave;, nhanh ch&oacute;ng. Dung lượng&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-256-gb" target="_blank">256 GB</a>&nbsp;đủ d&ugrave;ng để lưu trữ thoải m&aacute;i c&aacute;c t&agrave;i liệu l&agrave;m việc cũng như phim ảnh,...</p>
                            <p><a href="https://www.thegioididong.com/images/44/234731/ssd.jpg" onclick="return false;"><img alt="HP Pavilion x360 dw1016TU i3 (2H3Q0PA) - ssd" src="https://cdn.tgdd.vn/Products/Images/44/234731/ssd.jpg" /></a></p>
                            <h3>M&agrave;n h&igrave;nh cảm ứng đa điểm, hiển thị sắc n&eacute;t</h3>
                            <p>HP Pavilion x360 trang bị m&agrave;n h&igrave;nh&nbsp;<a href="https://www.thegioididong.com/laptop-14-inch" target="_blank"><strong>14 inch</strong></a>&nbsp;<strong>Full HD</strong>, được trang bị th&ecirc;m tấm nền IPS cho khung h&igrave;nh ảnh sắc n&eacute;t, m&agrave;u sắc rực rỡ, chất lượng hiển thị đồng nhất ở nhiều g&oacute;c nh&igrave;n. Viền m&agrave;n h&igrave;nh được thiết kế mỏng ở 3 cạnh đem đến cảm gi&aacute;c nh&igrave;n dễ chịu, kh&ocirc;ng bị sao nh&atilde;ng khi l&agrave;m việc.&nbsp;</p>
                            <p><a href="https://www.thegioididong.com/images/44/234731/man-hinh.jpg" onclick="return false;"><img alt="HP Pavilion x360 dw1016TU i3 (2H3Q0PA) - màn hình" src="https://cdn.tgdd.vn/Products/Images/44/234731/man-hinh.jpg" /></a></p>
                            <p>M&agrave;n h&igrave;nh c&oacute; t&iacute;nh năng&nbsp;<strong>cảm ứng&nbsp;</strong>cực nhạy, c&aacute;c thao t&aacute;c chạm, vuốt, thu ph&oacute;ng lu&ocirc;n mượt m&agrave; để bạn c&oacute; thể sử dụng thật thoải m&aacute;i ở mọi chế độ như lướt web, chỉnh sửa ảnh trực tiếp bằng tay như tr&ecirc;n m&aacute;y t&iacute;nh bảng.&nbsp;</p>
                            <p><a href="https://www.thegioididong.com/images/44/234731/cam-ung.jpg" onclick="return false;"><img alt="HP Pavilion x360 dw1016TU i3 (2H3Q0PA) - cảm ứng" src="https://cdn.tgdd.vn/Products/Images/44/234731/cam-ung.jpg" /></a></p>
                            <p>Tuy c&oacute; viền rất mỏng nhưng m&aacute;y t&iacute;nh vẫn trang bị một HD webcam để người d&ugrave;ng c&oacute; thể tr&ograve; chuyện trực tuyến, họp online với h&igrave;nh ảnh r&otilde; n&eacute;t.</p>
                            <p><a href="https://https//www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;sử dụng c&ocirc;ng nghệ &acirc;m thanh&nbsp;<strong>Bang &amp; Olufsen audio</strong>&nbsp;t&iacute;ch hợp c&aacute;c khả năng lọc tiếng ồn, gi&uacute;p &acirc;m thanh to v&agrave; r&otilde; r&agrave;ng hơn để bạn thoải m&aacute;i nghe nhạc, học online hay giải tr&iacute; với c&aacute;c tựa phim.</p>
                            <p><a href="https://www.thegioididong.com/images/44/234731/am-thanh.jpg" onclick="return false;"><img alt="HP Pavilion x360 dw1016TU i3 (2H3Q0PA) - âm thanh" src="https://cdn.tgdd.vn/Products/Images/44/234731/am-thanh.jpg" /></a></p>
                            <p>HP Pavilion x360 dw1016TU i3 (2H3Q0PA) l&agrave; chiếc&nbsp;<a href="https://www.thegioididong.com/laptop-man-hinh-gap-360-do" target="_blank">laptop 2 trong 1</a>&nbsp;mỏng gọn v&agrave; hiện đại, ph&ugrave; hợp với học sinh sinh vi&ecirc;n, người s&aacute;ng tạo nội dung, d&acirc;n văn ph&ograve;ng,...</p>
                            ',
            'slug'=>Str::slug('Asus Zenbook 14 Q407IQ (Ryzen 5 - 4500U, 8GB, 256B, VGA NVIDIA MX350, 14.0 FHD)','-').'.aspx',
            'created_at'=>now(),
        ]);

        DB::table('products')->insert([
            'name'=>'HP Pavilion 15 eg0070TU i5 1135G7/8GB/512GB/Office H&S2019/Win10 (2L9H3PA)',
            'price'=>17490000,
            'old_price'=>19890000,
            'quantity'=>50,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/233627/hp-pavilion-15-eg0070tu-i5-2l9h3pa-151521-051520-600x600.jpg',
            'rate'=>400,
            'category_id'=>3, //Laptop Văn phòng
            'brand_id'=>1,
            'user_id'=>random_int(1,5),
            'describe'=> '<h2>Đặc điểm nổi bật của HP Pavilion 15 eg0070TU i5 1135G7/8GB/512GB/Office H&amp;S2019/Win10 (2L9H3PA)</h2>
                            <p><img src="https://cdn.tgdd.vn/Products/Images/44/233627/Slider/15-800x444.jpg" /></p>
                            <p><a href="https://www.thegioididong.com/laptop/hp-pavilion-15-eg0070tu-i5-2l9h3pa" target="_blank">Laptop HP Pavilion 15 eg0070TU i5 1135G7</a>&nbsp;mang đến hiệu năng ổn định nhờ sở hữu con chip Intel Core i5 gen 11, xử l&yacute; tốt c&aacute;c c&ocirc;ng việc văn ph&ograve;ng v&agrave; đồ họa cơ bản. Đ&acirc;y sẽ l&agrave; người bạn đồng h&agrave;nh tốt nhất của bạn trong c&ocirc;ng việc v&agrave; học tập.</p>
                            <h3>Cấu h&igrave;nh mạnh mẽ, xử l&yacute; trơn tru mọi c&ocirc;ng việc</h3>
                            <p>Chiếc<a href="https://www.thegioididong.com/laptop" target="_blank">&nbsp;laptop&nbsp;</a>n&agrave;y được trang bị con chip&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank">Intel Core i5&nbsp;</a>Tiger Lake&nbsp;<a href="https://www.thegioididong.com/laptop-cpu-intel-gen-11" target="_blank">thế hệ 11</a>&nbsp;mới nhất hiện nay, con chip c&oacute; 4 nh&acirc;n 8 luồng cho xung nhịp trung b&igrave;nh l&agrave;&nbsp;<strong>&nbsp;2.40 GHz</strong>&nbsp;khi xử l&yacute; c&aacute;c t&aacute;c vụ nhẹ nh&agrave;ng như l&agrave;m việc với Word hay xem phim, lướt web giải tr&iacute; v&agrave; đạt xung nhịp tối đa l&ecirc;n đến<strong>&nbsp;4.2 GHz</strong>&nbsp;nhờ c&ocirc;ng nghệ Turbo Boost để xử l&yacute; c&aacute;c t&aacute;c vụ nặng hơn như Photoshop, render video,...</p>
                            <p>B&ecirc;n cạnh đ&oacute; chip Intel Core i5 c&ograve;n sử dụng l&otilde;i&nbsp;<strong>Willow Cove&nbsp;</strong>gi&uacute;p ti&ecirc;u tốn &iacute;t năng lượng hơn, k&eacute;o d&agrave;i thời lượng pin l&agrave;m việc hiệu quả hơn.</p>
                            <p>Card t&iacute;ch hợp Intel Iris Xe Graphics mang đến h&igrave;nh ảnh rực rỡ, cho hiệu năng đồ họa cao. Khi card đồ họa n&agrave;y kết hợp c&ugrave;ng chip gen 11 sẽ đem đến khả năng chơi được c&aacute;c tựa game như Children of Morta, Corruption 2029, Little Nightmares,... ở mức đồ họa trung b&igrave;nh, kh&aacute;.</p>
                            <p><a href="https://www.thegioididong.com/images/44/233627/hp-pavilion-15-eg0070tu-i5-2l9h3pa-164821-034841.jpg" onclick="return false;"><img alt="Laptop HP Pavilion 15 eg0070TU i5 (1135G7) - Intel" src="https://cdn.tgdd.vn/Products/Images/44/233627/hp-pavilion-15-eg0070tu-i5-2l9h3pa-164821-034841.jpg" /></a></p>
                            <p>Trang bị<strong>&nbsp;<a href="https://www.thegioididong.com/laptop-8-gb" target="_blank">RAM 8 GB</a></strong>&nbsp;c&oacute;<strong>&nbsp;tốc độ Bus RAM</strong>&nbsp;l&ecirc;n đến&nbsp;<strong>3200 MHz</strong>&nbsp;đem đến khả năng đa nhiệm tốt, bạn c&oacute; thể mở c&ugrave;ng l&uacute;c nhiều ứng dụng m&agrave; vẫn kh&ocirc;ng bị giảm tốc độ xử l&yacute; của m&aacute;y, bạn c&oacute; thể vừa mở Photoshop để chỉnh sửa h&igrave;nh ảnh vừa mở Google để tra cứu th&ocirc;ng tin m&agrave; kh&ocirc;ng lo m&aacute;y bị đứng hay phản hồi chậm. Laptop HP c&ograve;n hỗ trợ&nbsp;<strong>32 GB</strong>&nbsp;gi&uacute;p dễ d&agrave;ng n&acirc;ng cấp khi cần, phục vụ c&ocirc;ng việc tốt hơn.</p>
                            <p><a href="https://www.thegioididong.com/images/44/233627/hp-pavilion-15-eg0070tu-i5-2l9h3pa-164821-034848.jpg" onclick="return false;"><img alt="Laptop HP Pavilion 15 eg0070TU i5 (1135G7) - RAM" src="https://cdn.tgdd.vn/Products/Images/44/233627/hp-pavilion-15-eg0070tu-i5-2l9h3pa-164821-034848.jpg" /></a></p>
                            <p>Sở hữu ổ cứng&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">SSD 512</a>&nbsp;GB M.2 PCIe</strong>&nbsp;kh&ocirc;ng chỉ cho tốc độ đọc, ghi dữ liệu nhanh hơn ổ cứng HDD m&agrave; con cho thời gian khởi động m&aacute;y v&agrave; v&agrave;o ứng dụng chỉ mất khoảng v&agrave;i gi&acirc;y. Dung lượng&nbsp;<strong>512 GB</strong>&nbsp;cho kh&ocirc;ng gian lưu trữ rộng r&atilde;i, bạn c&oacute; thể thoải m&aacute;i lưu trữ t&agrave;i liệu học tập hay những bộ phim y&ecirc;u th&iacute;ch m&agrave; kh&ocirc;ng lo ổ cứng bị đầy l&agrave;m giảm tốc độ m&aacute;y.</p>
                            <p><a href="https://www.thegioididong.com/images/44/233627/hp-pavilion-15-eg0070tu-i5-2l9h3pa-164821-034856.jpg" onclick="return false;"><img alt="Laptop HP Pavilion 15 eg0070TU i5 (1135G7) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/233627/hp-pavilion-15-eg0070tu-i5-2l9h3pa-164821-034856.jpg" /></a></p>
                            <h3>&nbsp;</h3>
                            ',
            'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết HP Pavilion 15 eg0070TU i5 1135G7/8GB/512GB/Office H&amp;S2019/Win10 (2L9H3PA)</h3>
                                    <p><img alt="Thông số kỹ thuật 233627" src="https://cdn.tgdd.vn/Products/Images/44/233627/Kit/hp-pavilion-15-eg0070tu-i5-2l9h3pa-note.jpg" style="height:430px; width:500px" /></p>
                                    <ul>
                                        <li>﻿</li>
                                        <li>Bộ xử l&yacute;</li>
                                        <li>C&ocirc;ng nghệ CPU
                                        <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-bo-xu-ly-intel-core-the-he-thu-11-1304404" target="_blank">Intel Core i5 Tiger Lake</a></p>
                                        </li>
                                        <li>Loại CPU
                                        <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cpu-laptop-intel-core-i5-tiger-lake-1135g7-1305385" target="_blank">1135G7</a></p>
                                        </li>
                                        <li>Tốc độ CPU
                                        <p>2.40 GHz</p>
                                        </li>
                                        <li>Tốc độ tối đa
                                        <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.2 GHz</a></p>
                                        </li>
                                        <li>Bộ nhớ RAM, Ổ cứng</li>
                                        <li>RAM
                                        <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
                                        </li>
                                        <li>Loại RAM
                                        <p>DDR4 2 khe (1 khe 4GB + 1 khe 4GB)</p>
                                        </li>
                                        <li>Tốc độ Bus RAM
                                        <p>3200 MHz</p>
                                        </li>
                                        <li>Hỗ trợ RAM tối đa
                                        <p>32 GB</p>
                                        </li>
                                        <li>Ổ cứng
                                        <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a></p>
                                        </li>
                                        <li>M&agrave;n h&igrave;nh</li>
                                        <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                        <p>15.6 inch</p>
                                        </li>
                                        <li>Độ ph&acirc;n giải
                                        <p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
                                        </li>
                                        <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                        <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-led-backlit-led-backlight-1183188" target="_blank">LED Backlit</a></p>
                                        </li>
                                        <li>M&agrave;n h&igrave;nh cảm ứng
                                        <p>Kh&ocirc;ng c&oacute;</p>
                                        </li>
                                        <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                        <li>Thiết kế card
                                        <p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-tich-hop-la-gi-950047" target="_blank">Card đồ họa t&iacute;ch hợp</a></p>
                                        </li>
                                        <li>Card đồ họa
                                        <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-card-do-hoa-tich-hop-intel-iris-xe-graphics-1305192" target="_blank">Intel Iris Xe Graphics</a></p>
                                        </li>
                                        <li>C&ocirc;ng nghệ &acirc;m thanh
                                        <p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-bang-olufsen-tren-laptop-955118" target="_blank">Bang &amp; Olufsen audio</a></p>
                                        </li>
                                        <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                        <li>Cổng giao tiếp
                                        <p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
                                        </li>
                                        <li>Kết nối kh&ocirc;ng d&acirc;y
                                        <p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
                                        </li>
                                        <li>Khe đọc thẻ nhớ
                                        <p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">Micro SD</a></p>
                                        </li>
                                        <li>Webcam
                                        <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
                                        </li>
                                        <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                        <p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
                                        </li>
                                        <li>K&iacute;ch thước &amp; trọng lượng</li>
                                        <li>K&iacute;ch thước
                                        <p>D&agrave;i 360.2 mm - Rộng 234.0 mm - D&agrave;y 17.9 mm</p>
                                        </li>
                                        <li>Trọng lượng
                                        <p>1.685 kg</p>
                                        </li>
                                        <li>Chất liệu
                                        <p>Vỏ nhựa - nắp lưng bằng kim loại</p>
                                        </li>
                                        <li>Th&ocirc;ng tin kh&aacute;c</li>
                                        <li>Loại PIN
                                        <p>PIN liền</p>
                                        </li>
                                        <li>Th&ocirc;ng tin Pin
                                        <p>3-cell Li-ion, 40.04 Wh</p>
                                        </li>
                                        <li>Hệ điều h&agrave;nh
                                        <p>Windows 10 Home SL + Office Home&amp;Student 2019 vĩnh viễn</p>
                                        </li>
                                        <li>Thời điểm ra mắt
                                        <p>2020</p>
                                        </li>
                                    </ul>
                                    ',
            'details'=> '<h2>Kiểu d&aacute;ng sang trọng, m&agrave;u sắc đẹp mắt</h2>
                            <p>Chiếc<a href="https://www.thegioididong.com/laptop-hp-compaq-pavilion" target="_blank">&nbsp;laptop HP Pavilion</a>&nbsp;n&agrave;y được bao phủ bởi gam m&agrave;u bạc sang trọng, nổi bật thu h&uacute;t từ &aacute;nh nh&igrave;n đầu ti&ecirc;n, vỏ m&aacute;y được l&agrave;m từ nhựa - nắp lưng bằng kim loại vừa đẹp mắt vừa gi&uacute;p tản nhiệt hiệu quả. M&aacute;y c&oacute; k&iacute;ch thước kh&aacute; nhỏ gọn chỉ lớn khổ giấy A4 một ch&uacute;t, khối lượng chỉ&nbsp;<strong>1.685 kg</strong>&nbsp;v&agrave; mỏng<strong>&nbsp;17.9 mm</strong>&nbsp;bạn c&oacute; thể cho v&agrave;o balo mang theo khi di chuyển thuận tiện cho c&ocirc;ng việc.</p>
                            <p><a href="https://www.thegioididong.com/images/44/233627/hp-pavilion-15-eg0070tu-i5-2l9h3pa-164921-034903.jpg" onclick="return false;"><img alt="Laptop HP Pavilion 15 eg0070TU i5 (1135G7) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/233627/hp-pavilion-15-eg0070tu-i5-2l9h3pa-164921-034903.jpg" /></a></p>
                            <p>C&aacute;c cổng kết nối như: USB 3.2, USB Type-C, HDMI, khe thẻ nhớ được sắp xếp gọn g&agrave;ng 2 b&ecirc;n th&acirc;n m&aacute;y. Hỗ trợ bạn kết nối dễ d&agrave;ng với c&aacute;c thiết bị ngoại vi m&agrave; kh&ocirc;ng cần adapter chuyển đổi vừa cồng kềnh vừa tốn k&eacute;m.</p>
                            <p>Ngo&agrave;i ra laptop cũng t&iacute;ch hợp giao thức kh&ocirc;ng d&acirc;y Wi-Fi 802.11 a/b/g/n/ac cho tốc độ truyền tải, kết nối internet tại những nơi đ&ocirc;ng người như qu&aacute;n c&agrave; ph&ecirc; đều nhanh ch&oacute;ng. Bluetooth v5.0 cho tốc độ đường truyền l&ecirc;n đến&nbsp;<strong>50 Mbps</strong>&nbsp;v&agrave; phạm vi ph&aacute;t s&oacute;ng l&ecirc;n đến&nbsp;<strong>300 m&nbsp;</strong>khi kh&ocirc;ng c&oacute; vật cản.</p>
                            <p><a href="https://www.thegioididong.com/images/44/233627/hp-pavilion-15-eg0070tu-i5-2l9h3pa-164821-034834.jpg" onclick="return false;"><img alt="Laptop HP Pavilion 15 eg0070TU i5 (1135G7) - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/233627/hp-pavilion-15-eg0070tu-i5-2l9h3pa-164821-034834.jpg" /></a></p>
                            <h3>M&agrave;u sắc rực rỡ, h&igrave;nh ảnh sắc n&eacute;t</h3>
                            <p><a href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">Laptop HP</a>&nbsp;sở hữu m&agrave;n h&igrave;nh c&oacute; độ ph&acirc;n giải<strong>&nbsp;<a href="https://www.thegioididong.com/laptop-full-hd" target="_blank">Full HD</a></strong>&nbsp;c&oacute; k&iacute;ch thước lớn l&ecirc;n đến<strong>&nbsp;<a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a></strong>, h&igrave;nh ảnh hiển thị sắc n&eacute;t m&agrave;u sắc ch&acirc;n thực tr&ecirc;n một kh&ocirc;ng gian rộng gi&uacute;p bạn c&oacute; trải nghiệm nhập vai hơn. M&agrave;n h&igrave;nh được tang bị th&ecirc;m tấm nền IPS cho g&oacute;c nh&igrave;n rộng l&ecirc;n&nbsp;<strong>178 độ,</strong>&nbsp;thoải m&aacute;i quan s&aacute;t m&agrave;n h&igrave;nh ở bất kỳ g&oacute;c n&agrave;o.</p>
                            <p>C&ocirc;ng nghệ LED Backlit tiết kiệm điện năng ti&ecirc;u thụ tối đa gi&uacute;p thời lượng pin k&eacute;o d&agrave;i, l&agrave;m việc l&acirc;u hơn cho một lần sạc.</p>
                            <p><a href="https://www.thegioididong.com/images/44/233627/hp-pavilion-15-eg0070tu-i5-2l9h3pa-165321-035320.jpg" onclick="return false;"><img alt="Laptop HP Pavilion 15 eg0070TU i5 (1135G7) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/233627/hp-pavilion-15-eg0070tu-i5-2l9h3pa-165321-035320.jpg" /></a></p>
                            <p>C&ocirc;ng nghệ &acirc;m thanh&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-bang-olufsen-va-cong-nghe-am-thanh-cua-955118" target="_blank">Bang &amp; Olufsen</a>&nbsp;c&oacute; khả năng lọc tiếng ồn hiệu quả, gi&uacute;p &acirc;m thanh to v&agrave; r&otilde; r&agrave;ng hơn.&nbsp;</p>
                            <p><a href="https://www.thegioididong.com/images/44/233627/hp-pavilion-15-eg0070tu-i5-2l9h3pa-164821-034819.jpg" onclick="return false;"><img alt="Laptop HP Pavilion 15 eg0070TU i5 (1135G7) - Âm thanh" src="https://cdn.tgdd.vn/Products/Images/44/233627/hp-pavilion-15-eg0070tu-i5-2l9h3pa-164821-034819.jpg" /></a></p>
                            <p>Laptop HP Pavilion 15 eg0070TU i5 1135G7 thuộc d&ograve;ng&nbsp;<a href="https://www.thegioididong.com/laptop?g=hoc-tap-van-phong" target="_blank">m&aacute;y t&iacute;nh học tập, văn ph&ograve;ng</a>&nbsp;với cấu h&igrave;nh mạnh mẽ đem lại hiệu quả hoạt động tốt sẽ l&agrave; người bạn đồng h&agrave;nh ph&ugrave; hợp cho sinh vi&ecirc;n, nh&acirc;n vi&ecirc;n văn ph&ograve;ng.</p>
                            ',
            'slug'=>Str::slug('HP Pavilion 15 eg0070TU i5 1135G7/8GB/512GB/Office H&S2019/Win10 (2L9H3PA)','-').'.aspx',
            'created_at'=>now(),
        ]);

        DB::table('products')->insert([

            'name'=>'HP Pavilion 15 eg0007TU i3 1115G4/4GB/256GB/Office H&S2019//Win10 (2D9K4PA)',
            'price'=>14490000,
            'old_price'=>16890000,
            'quantity'=>50,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-600x600.jpg',
            'rate'=>400,
            'category_id'=>3, //Laptop Văn phòng
            'brand_id'=>1,
            'user_id'=>random_int(1,5),
            'describe'=> '<h2>Đặc điểm nổi bật của HP Pavilion 15 eg0007TU i3 1115G4/4GB/256GB/Office H&amp;S2019//Win10 (2D9K4PA)</h2>
                            <p><img src="https://cdn.tgdd.vn/Products/Images/44/236147/Slider/vi-vn-hp-pavilion-15-eg0007tu-i3-2d9k4pa-1.jpg" /></p>
                            <p><a href="https://www.thegioididong.com/hoi-dap/card-man-hinh-intel-uhd-graphics-tren-laptop-la-gi-1199634" target="_blank">T&igrave;m hiểu th&ecirc;m</a></p>
                            <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">T&igrave;m hiểu th&ecirc;m</a></p>
                            <p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-bang-olufsen-tren-laptop-955118" target="_blank">T&igrave;m hiểu th&ecirc;m</a></p>
                            <p>Với CPU Gen 11 mạnh mẽ&nbsp;<a href="https://www.thegioididong.com/laptop/hp-pavilion-15-eg0007tu-i3-2d9k4pa" target="_blank">HP Pavilion 15 eg007TU i3 (2D9K4PA)</a>&nbsp;l&agrave; mẫu laptop c&oacute; hiệu năng b&ecirc;n trong ổn định, mượt m&agrave; c&ugrave;ng vẻ ngo&agrave;i kh&aacute; gọn nhẹ, ph&ugrave; hợp với đa phần nhu cầu của c&aacute;c bạn học sinh, sinh vi&ecirc;n v&agrave; d&acirc;n văn ph&ograve;ng hiện nay.</p>
                            <h3>Thiết kế sang trọng c&ugrave;ng nắp lưng v&agrave; chiếu nghỉ tay bằng kim loại</h3>
                            <p>Pavilion 15 c&oacute; thiết kế hiện đại, kh&aacute; gọn nhẹ với độ d&agrave;y&nbsp;<strong>17.9 mm</strong>&nbsp;v&agrave; trọng lượng chỉ&nbsp;<strong>1.685 kg</strong>, bạn ho&agrave;n to&agrave;n c&oacute; thể đem m&aacute;y theo thường xuy&ecirc;n trong những chuyến c&ocirc;ng t&aacute;c, hội họp, học nh&oacute;m,...&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;được chế t&aacute;c tỉ mỉ từng chi tiết vỏ ngo&agrave;i với phần nắp lưng v&agrave; chiếu nghỉ tay được l&agrave;m từ kim loại,&nbsp;c&aacute;c g&oacute;c cạnh được bo tr&ograve;n tỉ mỉ, tr&ecirc;n mặt lưng c&ograve;n th&ecirc;m điểm nhấn thương hiệu logo HP b&oacute;ng lo&aacute;ng, đẹp mắt.</p>
                            <p><a href="https://www.thegioididong.com/images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-2-1.jpg" onclick="return false;"><img alt="HP Pavilion 15 eg0007TU i3 1115G4 (2D9K4PA) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-2-1.jpg" /></a></p>
                            <p>B&agrave;n ph&iacute;m&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">laptop HP</a>&nbsp;được thiết kế full size rộng r&atilde;i, h&agrave;nh tr&igrave;nh ph&iacute;m s&acirc;u, ph&iacute;m nhấn lớn tạo cảm gi&aacute;c thoải m&aacute;i khi ấn. Ngo&agrave;i ra m&aacute;y c&ograve;n trang bị b&agrave;n ph&iacute;m số đ&aacute;p ứng tốt nhu cầu sử dụng của c&aacute;c c&ocirc;ng việc li&ecirc;n quan đến t&iacute;nh to&aacute;n. B&agrave;n di chuột được thiết kế lệch về b&ecirc;n tr&aacute;i tạo kh&ocirc;ng gian đặt tay lớn, tr&aacute;nh trường hợp v&ocirc; t&igrave;nh đụng tr&uacute;ng khi k&ecirc; tay.</p>
                            <p><a href="https://www.thegioididong.com/images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-7-1.jpg" onclick="return false;"><img alt="HP Pavilion 15 eg0007TU i3 1115G4 (2D9K4PA) - Bàn phím fullsize" src="https://cdn.tgdd.vn/Products/Images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-7-1.jpg" /></a></p>
                            <p>M&aacute;y được trang bị 2 cổng USB 3.1, HDMI, khe thẻ nhớ Micro SD c&ugrave;ng cổng Type-C ti&ecirc;n tiến gi&uacute;p việc kết nối với c&aacute;c thiết bị ngoại vi như chuột, b&agrave;n ph&iacute;m rời, m&aacute;y chiếu, tivi,... thuận tiện v&agrave; dễ d&agrave;ng hơn.</p>
                            <p><a href="https://www.thegioididong.com/images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-10-1.jpg" onclick="return false;"><img alt="HP Pavilion 15 eg0007TU i3 1115G4 (2D9K4PA) - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-10-1.jpg" /></a></p>
                            <p>Khả năng truyền tải dữ liệu qua kết nối kh&ocirc;ng d&acirc;y của&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq-pavilion" target="_blank">laptop HP Pavilion</a>&nbsp;cũng được đảm bảo tốt kể cả ở những nơi đ&ocirc;ng người nhờ đạt chuẩn&nbsp;<strong>Bluetooth v5.0</strong>&nbsp;với tốc độ kết nối l&ecirc;n đến&nbsp;<strong>50 Mbps</strong>&nbsp;c&ugrave;ng chuẩn&nbsp;<strong>Wi-Fi 802.11 a/b/g/n/ac&nbsp;</strong>cho tốc độ đường truyền nhanh ch&oacute;ng với&nbsp;<strong>1730 Mpbs</strong>, phạm vị phủ s&oacute;ng rộng<strong>.</strong></p>
                            <h3>&nbsp;</h3>
                            ',
            'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết HP Pavilion 15 eg0007TU i3 1115G4/4GB/256GB/Office H&amp;S2019//Win10 (2D9K4PA)</h3>
                                <p><img alt="Thông số kỹ thuật 236147" src="https://cdn.tgdd.vn/Products/Images/44/236147/Kit/hp-pavilion-15-eg0007tu-i3-2d9k4pa-note.jpg" style="height:430px; width:500px" /></p>
                                <ul>
                                    <li>﻿</li>
                                    <li>Bộ xử l&yacute;</li>
                                    <li>C&ocirc;ng nghệ CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-bo-xu-ly-intel-core-the-he-thu-11-1304404" target="_blank">Intel Core i3 Tiger Lake</a></p>
                                    </li>
                                    <li>Loại CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cpu-laptop-intel-core-i3-tiger-lake-1115g4-1305062" target="_blank">1115G4</a></p>
                                    </li>
                                    <li>Tốc độ CPU
                                    <p>3.00 GHz</p>
                                    </li>
                                    <li>Tốc độ tối đa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.1 GHz</a></p>
                                    </li>
                                    <li>Bộ nhớ RAM, Ổ cứng</li>
                                    <li>RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">4 GB</a></p>
                                    </li>
                                    <li>Loại RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
                                    </li>
                                    <li>Tốc độ Bus RAM
                                    <p>3200 MHz</p>
                                    </li>
                                    <li>Hỗ trợ RAM tối đa
                                    <p>32 GB</p>
                                    </li>
                                    <li>Ổ cứng
                                    <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD 256GB NVMe PCIe</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh</li>
                                    <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                    <p>15.6 inch</p>
                                    </li>
                                    <li>Độ ph&acirc;n giải
                                    <p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
                                    </li>
                                    <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-led-backlit-led-backlight-1183188" target="_blank">LED Backlit</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh cảm ứng
                                    <p>Kh&ocirc;ng c&oacute;</p>
                                    </li>
                                    <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                    <li>Thiết kế card
                                    <p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-tich-hop-la-gi-950047" target="_blank">Card đồ họa t&iacute;ch hợp</a></p>
                                    </li>
                                    <li>Card đồ họa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/card-man-hinh-intel-uhd-graphics-tren-laptop-la-gi-1199634" target="_blank">Intel UHD Graphics</a></p>
                                    </li>
                                    <li>C&ocirc;ng nghệ &acirc;m thanh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-bang-olufsen-tren-laptop-955118" target="_blank">Bang &amp; Olufsen audio</a></p>
                                    </li>
                                    <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                    <li>Cổng giao tiếp
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
                                    </li>
                                    <li>Kết nối kh&ocirc;ng d&acirc;y
                                    <p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
                                    </li>
                                    <li>Khe đọc thẻ nhớ
                                    <p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">Micro SD</a></p>
                                    </li>
                                    <li>Webcam
                                    <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
                                    </li>
                                    <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                    <p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
                                    </li>
                                    <li>K&iacute;ch thước &amp; trọng lượng</li>
                                    <li>K&iacute;ch thước
                                    <p>D&agrave;i 360.2 mm - Rộng 234.0 mm - D&agrave;y 17.9 mm</p>
                                    </li>
                                    <li>Trọng lượng
                                    <p>1.685 kg</p>
                                    </li>
                                    <li>Chất liệu
                                    <p>Nắp lưng v&agrave; chiếu nghỉ tay bằng kim loại</p>
                                    </li>
                                    <li>Th&ocirc;ng tin kh&aacute;c</li>
                                    <li>Loại PIN
                                    <p>PIN liền</p>
                                    </li>
                                    <li>Th&ocirc;ng tin Pin
                                    <p>3-cell Li-ion, 41 Wh</p>
                                    </li>
                                    <li>Hệ điều h&agrave;nh
                                    <p>Windows 10 Home SL + Office Home&amp;Student 2019 vĩnh viễn</p>
                                    </li>
                                    <li>Thời điểm ra mắt
                                    <p>2020</p>
                                    </li>
                                </ul>
                                ',
            'details'=> '<h2>Chip Intel Tiger Lake hiệu năng mạnh mẽ, ổn định</h2>
                            <p>Pavilion 15 eg007TU sở hữu chip&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cpu-laptop-intel-core-i3-tiger-lake-1115g4-1305062" target="_blank">Core i3 1115G4</a>&nbsp;hiện đại, mạnh mẽ, gi&uacute;p việc xử l&iacute; c&aacute;c t&aacute;c vụ văn ph&ograve;ng h&agrave;ng ng&agrave;y như Office, xem phim, lướt web nhẹ nh&agrave;ng, nhanh ch&oacute;ng với xung nhịp trung b&igrave;nh đạt mức&nbsp;<strong>3.0 GHz</strong>. C&ocirc;ng nghệ&nbsp;<strong>Turbo Boost</strong>&nbsp;c&ograve;n gi&uacute;p CPU c&oacute; thể &eacute;p xung l&ecirc;n đến&nbsp;<strong>4.1 GHz</strong>&nbsp;khi m&aacute;y vận h&agrave;nh những phần mềm nặng hơn như Photoshop hoặc Illustrator, gi&uacute;p đảm bảo hiệu suất học tập, l&agrave;m việc văn ph&ograve;ng của bạn trong bất k&igrave; t&aacute;c vụ n&agrave;o.</p>
                            <p><a href="https://www.thegioididong.com/images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-4-1.jpg" onclick="return false;"><img alt="HP Pavilion 15 eg0007TU i3 1115G4 (2D9K4PA) - Cấu hình" src="https://cdn.tgdd.vn/Products/Images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-4-1.jpg" /></a></p>
                            <p>Đi k&egrave;m với CPU l&agrave; bộ&nbsp;<a href="https://www.thegioididong.com/laptop?g=4-gb" target="_blank">RAM 4 GB</a>&nbsp;chuẩn&nbsp;<strong>DDR4</strong>&nbsp;2 khe cho khả năng đa nhiệm của m&aacute;y ổn định, c&oacute; thể chuyển qua lại nhiều tab c&ocirc;ng việc kh&aacute;c nhau một c&aacute;ch trơn tru, mượt m&agrave; với tốc độ bus RAM&nbsp;<strong>3200 MHz</strong>. Ngo&agrave;i ra, HP c&ograve;n hỗ trợ n&acirc;ng cấp RAM tối đa đến&nbsp;<strong>32 GB</strong>, đ&aacute;p ứng mọi nhu cầu về hiệu năng m&aacute;y của bạn.</p>
                            <p><a href="https://www.thegioididong.com/images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-5-1.jpg" onclick="return false;"><img alt="HP Pavilion 15 eg0007TU i3 1115G4 (2D9K4PA) - RAM" src="https://cdn.tgdd.vn/Products/Images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-5-1.jpg" /></a></p>
                            <p><a href="https://www.thegioididong.com/laptop?g=ssd-256-gb" target="_blank">SSD 256 GB</a>&nbsp;<strong>NVMe PCle</strong>&nbsp;cho tốc độ truy xuất dữ liệu v&agrave; khởi động m&aacute;y nhanh, cung cấp đủ dung lượng lưu trữ cho c&aacute;c phần mềm v&agrave; t&agrave;i liệu c&ocirc;ng việc, học tập của bạn.</p>
                            <p><a href="https://www.thegioididong.com/images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-6-1.jpg" onclick="return false;"><img alt="HP Pavilion 15 eg0007TU i3 1115G4 (2D9K4PA) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-6-1.jpg" /></a></p>
                            <h3>Giải tr&iacute; ấn tượng tr&ecirc;n&nbsp;<a href="https://www.thegioididong.com/laptop-full-hd" target="_blank">m&agrave;n h&igrave;nh Full HD</a></h3>
                            <p>B&ecirc;n cạnh c&ocirc;ng việc hằng ng&agrave;y th&igrave;&nbsp;laptop HP&nbsp;cũng đ&aacute;p ứng tốt nhu cầu về giải tr&iacute;, trải nghiệm với&nbsp;<a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">m&agrave;n h&igrave;nh&nbsp;15.6 inch</a>&nbsp;rộng r&atilde;i c&ugrave;ng độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;(1920 x 1080) cho h&igrave;nh ảnh hiển thị sắc n&eacute;t m&agrave;u sắc ch&iacute;nh x&aacute;c mang đến cho bạn những khung h&igrave;nh cực kỳ hấp dẫn.</p>
                            <p>Những c&ocirc;ng nghệ ti&ecirc;n tiến hiện nay về chất lượng h&igrave;nh ảnh cũng được trang bị tr&ecirc;n laptop n&agrave;y, từ tấm nền&nbsp;<strong>IPS</strong>&nbsp;cho g&oacute;c nh&igrave;n rộng 178 độ gi&uacute;p bạn&nbsp;quan s&aacute;t của bạn từ mọi g&oacute;c nh&igrave;n đều ổn định, c&ocirc;ng nghệ chống ch&oacute;i&nbsp;<strong>Anti Glare&nbsp;</strong>c&oacute; khả năng ch&oacute;ng ch&oacute;i tuyệt vời, h&igrave;nh ảnh kh&ocirc;ng bị biến dạng hay bị qu&aacute; ch&oacute;i trong điều kiện &aacute;nh s&aacute;ng mạnh.</p>
                            <p>B&ecirc;n cạnh đ&oacute;,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-led-backlit-led-backlight-1183188" target="_blank">LED Backlit</a>&nbsp;c&ograve;n gi&uacute;p m&aacute;y tiết kiệm điện năng hơn khi sử dụng v&agrave; cho m&agrave;u sắc h&igrave;nh ảnh hiển thị tươi s&aacute;ng hơn, đẹp hơn.</p>
                            <p><a href="https://www.thegioididong.com/images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-8-1.jpg" onclick="return false;"><img alt="HP Pavilion 15 eg0007TU i3 1115G4 (2D9K4PA) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-8-1.jpg" /></a></p>
                            <p>C&ocirc;ng nghệ &acirc;m thanh&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-bang-olufsen-tren-laptop-955118" target="_blank">Bang &amp; Olufsen audio</a>&nbsp;được t&iacute;ch hợp tr&ecirc;n m&aacute;y gi&uacute;p việc xem phim, nghe nhạc thư gi&atilde;n sau những giờ l&agrave;m việc, học tập căng thẳng trở n&ecirc;n chất lượng hơn. B&amp;O tăng khả năng lọc tiếng ồn, t&aacute;i tạo &acirc;m thanh trở n&ecirc;n to, r&otilde;, trung thực.</p>
                            <p><a href="https://www.thegioididong.com/images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-9-1.jpg" onclick="return false;"><img alt="HP Pavilion 15 eg0007TU i3 1115G4 (2D9K4PA) - Âm thanh" src="https://cdn.tgdd.vn/Products/Images/44/236147/hp-pavilion-15-eg0007tu-i3-2d9k4pa-9-1.jpg" /></a></p>
                            <p>Nhờ hiệu năng ổn định của&nbsp;<a href="https://www.thegioididong.com/laptop-cpu-intel-gen-11" target="_blank">CPU Intel thế hệ 11</a>&nbsp;đi k&egrave;m với c&ocirc;ng nghệ &acirc;m thanh, h&igrave;nh ảnh ti&ecirc;n tiến, HP Pavilion 15 eg0007TU ph&ugrave; hợp với phần lớn nhu cầu sở hữu&nbsp;<a href="https://www.thegioididong.com/laptop?g=hoc-tap-van-phong" target="_blank">laptop d&agrave;nh cho học tập, văn ph&ograve;ng</a>&nbsp;tốt của giới trẻ hiện nay.</p>
                            ',
            'slug'=>Str::slug('HP Pavilion 15 eg0007TU i3 1115G4/4GB/256GB/Office H&S2019//Win10 (2D9K4PA)','-').'.aspx',
            'created_at'=>now(),
        ]);

        DB::table('products')->insert([
            'name'=>'Dell Vostro 3500 i5 1135G7/8GB/256GB/2GB MX330/Win10 (P90F006V3500B)',
            'price'=>17490000,
            'old_price'=>19890000,
            'quantity'=>50,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/235540/3-600x600.jpg',
            'rate'=>400,
            'category_id'=>3, //Laptop Văn phòng
            'brand_id'=>3,
            'user_id'=>random_int(1,5),
            'describe'=> '<h2>Đặc điểm nổi bật của Dell Vostro 3500 i5 1135G7/8GB/256GB/2GB MX330/Win10 (P90F006V3500B)</h2>
                            <p><img src="https://cdn.tgdd.vn/Products/Images/44/235540/Slider/P90F006V3500B-800x444.jpg" /></p>
                            <p>Với cấu h&igrave;nh kết hợp của Intel Core i5 thế hệ thứ 11 v&agrave; card đồ họa rời&nbsp;NVIDIA GeForce MX330,&nbsp;<a href="https://thegioididong.com/sp-235540" target="_blank">Dell Vostro 3500 i5 (P90F006V3500B)</a>&nbsp;sẽ mang đến cho bạn một sản phẩm chơi game mạnh mẽ trong thiết kế kh&aacute; gọn nhẹ.</p>
                            <h3>Hiệu năng mạnh mẽ với card đồ họa rời&nbsp;NVIDIA GeForce MX330</h3>
                            <p>Dell đem đến bộ vi xử l&iacute;&nbsp;<a href="https://www.dienmayxanh.com/laptop?g=core-i5" target="_blank"><strong>Core i5</strong></a>&nbsp;Tiger Lake&nbsp;<a href="https://www.dienmayxanh.com/laptop?g=cpu-intel-the-he-11-moi" target="_blank"><strong>thế hệ 11</strong></a>&nbsp;xử l&iacute; tốt c&aacute;c t&aacute;c vụ nặng như thiết kế đồ hoạ, chỉnh sửa h&igrave;nh ảnh, video,... Con chip n&agrave;y đủ sức &ldquo;c&acirc;n&rdquo; mọi ứng dụng văn ph&ograve;ng, học tập phổ biến, l&agrave;m việc trực tuyến lẫn c&aacute;c ứng dụng đồ họa 2D với&nbsp;<strong>4 nh&acirc;n</strong>,&nbsp;<strong>8 luồng&nbsp;</strong>với tốc độ cơ bản l&agrave;&nbsp;<strong>2.40 GHz</strong>&nbsp;v&agrave; được đẩy l&ecirc;n đến tối đa<strong>&nbsp;4.2 GHz&nbsp;</strong>khi &eacute;p xung.</p>
                            <p><a href="https://www.thegioididong.com/images/44/235540/dell-vostro-3500-i5-v3500bcau-hinh.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3500 i5 (P90F006V3500B) - Cấu hình" src="https://cdn.tgdd.vn/Products/Images/44/235540/dell-vostro-3500-i5-v3500bcau-hinh.jpg" /></a></p>
                            <p>Mẫu laptop n&agrave;y của Dell c&ograve;n được trang bị&nbsp;<a href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank">card đồ hoạ rời</a>&nbsp;<a href="https://www.thegioididong.com/hoi-dap/nvidia-geforce-mx330-tren-laptop-la-gi-1264163" target="_blank">NVIDIA GeForce MX330 2GB</a>&nbsp;gi&uacute;p bạn c&oacute; thể chơi tốt mọi game eSports v&agrave; sẵn s&agrave;ng cho c&aacute;c tựa game bom tấn AAA như: Counter-Strike: Global Offensive, Dota 2, Gears Tactics, Nioh 2,... ở mức trung b&igrave;nh hay thoải m&aacute;i&nbsp;thử sức với c&aacute;c t&aacute;c vụ đồ hoạ cơ bản&nbsp;với<strong>&nbsp;kiến tr&uacute;c Turing</strong>&nbsp;c&ugrave;ng<strong>&nbsp;384 nh&acirc;n đồ hoạ.</strong></p>
                            <p><a href="https://www.thegioididong.com/images/44/235540/dell-vostro-3500-i5-v3500bcard.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3500 i5 (P90F006V3500B) - Card đồ họa" src="https://cdn.tgdd.vn/Products/Images/44/235540/dell-vostro-3500-i5-v3500bcard.jpg" /></a></p>
                            <p>Bộ nhớ&nbsp;<strong><a href="https://www.thegioididong.com/laptop-8-gb" target="_blank">RAM 8 GB</a></strong>&nbsp;cho việc trải nghiệm laptop mượt m&agrave;, thao t&aacute;c được nhiều phần mềm c&ugrave;ng một l&uacute;c như vừa mở phần mềm thiết kế, vừa nghe nhạc, lướt web. M&aacute;y c&ograve;n hỗ trợ n&acirc;ng cấp RAM l&ecirc;n đến&nbsp;<strong>16&nbsp;GB&nbsp;</strong>gi&uacute;p bạn c&oacute; thể n&acirc;ng cấp hiệu năng của m&aacute;y đ&aacute;p ứng nhu cầu c&ocirc;ng việc của m&igrave;nh.</p>
                            <p>Nhờ c&oacute;&nbsp;<strong><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank">ổ cứng SSD</a>&nbsp;256 GB</strong>, mọi thao t&aacute;c đều được xử l&iacute; nhanh, mở m&aacute;y chỉ trong gi&acirc;y l&aacute;t. Đi k&egrave;m l&agrave; kh&ocirc;ng gian lưu trữ&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=ssd-256-gb" target="_blank">256 GB</a></strong>&nbsp;gi&uacute;p bạn thoải m&aacute;i lưu c&aacute;c tựa phim, file Photoshop nặng.</p>
                            <p><a href="https://www.thegioididong.com/images/44/235540/dell-vostro-3500-i5-v3500bssd.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3500 i5 (P90F006V3500B) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/235540/dell-vostro-3500-i5-v3500bssd.jpg" /></a></p>
                            <h3>&nbsp;</h3>
                            ',
            'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Dell Vostro 3500 i5 1135G7/8GB/256GB/2GB MX330/Win10 (P90F006V3500B)</h3>
                                    <p><img alt="Thông số kỹ thuật 235540" src="https://cdn.tgdd.vn/Products/Images/44/235540/Kit/dell-vostro-3500-i5-v3500b-note.jpg" style="height:430px; width:500px" /></p>
                                    <ul>
                                        <li>﻿</li>
                                        <li>Bộ xử l&yacute;</li>
                                        <li>C&ocirc;ng nghệ CPU
                                        <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-bo-xu-ly-intel-core-the-he-thu-11-1304404" target="_blank">Intel Core i5 Tiger Lake</a></p>
                                        </li>
                                        <li>Loại CPU
                                        <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cpu-laptop-intel-core-i5-tiger-lake-1135g7-1305385" target="_blank">1135G7</a></p>
                                        </li>
                                        <li>Tốc độ CPU
                                        <p>2.40 GHz</p>
                                        </li>
                                        <li>Tốc độ tối đa
                                        <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.2 GHz</a></p>
                                        </li>
                                        <li>Bộ nhớ RAM, Ổ cứng</li>
                                        <li>RAM
                                        <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
                                        </li>
                                        <li>Loại RAM
                                        <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
                                        </li>
                                        <li>Tốc độ Bus RAM
                                        <p>3200 MHz</p>
                                        </li>
                                        <li>Hỗ trợ RAM tối đa
                                        <p>16 GB</p>
                                        </li>
                                        <li>Ổ cứng
                                        <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD 256GB NVMe PCIe</a>,&nbsp;Hỗ trợ khe cắm HDD SATA</p>
                                        </li>
                                        <li>M&agrave;n h&igrave;nh</li>
                                        <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                        <p>15.6 inch</p>
                                        </li>
                                        <li>Độ ph&acirc;n giải
                                        <p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
                                        </li>
                                        <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                        <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a>WVA<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-led-backlit-led-backlight-1183188" target="_blank">LED Backlight</a></p>
                                        </li>
                                        <li>M&agrave;n h&igrave;nh cảm ứng
                                        <p>Kh&ocirc;ng c&oacute;</p>
                                        </li>
                                        <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                        <li>Thiết kế card
                                        <p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
                                        </li>
                                        <li>Card đồ họa
                                        <p><a href="https://www.thegioididong.com/hoi-dap/nvidia-geforce-mx330-tren-laptop-la-gi-1264163" target="_blank">NVIDIA GeForce MX330, 2GB</a></p>
                                        </li>
                                        <li>C&ocirc;ng nghệ &acirc;m thanh
                                        <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-realtek-high-defi-1181909" target="_blank">Realtek High Definition Audio</a></p>
                                        </li>
                                        <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                        <li>Cổng giao tiếp
                                        <p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">2 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516#usb-20" target="_blank">USB 2.0</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
                                        </li>
                                        <li>Kết nối kh&ocirc;ng d&acirc;y
                                        <p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
                                        </li>
                                        <li>Khe đọc thẻ nhớ
                                        <p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">SD</a></p>
                                        </li>
                                        <li>Webcam
                                        <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
                                        </li>
                                        <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                        <p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
                                        </li>
                                        <li>K&iacute;ch thước &amp; trọng lượng</li>
                                        <li>K&iacute;ch thước
                                        <p>D&agrave;i 363.96 mm - Rộng 249 mm - D&agrave;y 19.9 mm</p>
                                        </li>
                                        <li>Trọng lượng
                                        <p>1.98 kg</p>
                                        </li>
                                        <li>Chất liệu
                                        <p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
                                        </li>
                                        <li>Th&ocirc;ng tin kh&aacute;c</li>
                                        <li>Loại PIN
                                        <p>PIN liền</p>
                                        </li>
                                        <li>Th&ocirc;ng tin Pin
                                        <p>3-cell Li-ion, 42 Wh</p>
                                        </li>
                                        <li>Hệ điều h&agrave;nh
                                        <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                        </li>
                                        <li>Thời điểm ra mắt
                                        <p>2020</p>
                                        </li>
                                    </ul>
                                    ',
            'details'=> '<h2>Kiểu d&aacute;ng đơn giản nhưng v&ocirc; c&ugrave;ng mạnh mẽ</h2>
                            <p>Thiết kế của&nbsp;<a href="https://www.thegioididong.com/laptop-dell-vostro" target="_blank">laptop Dell Vostro</a>&nbsp;tuy đơn giản nhưng lại đậm c&aacute; t&iacute;nh v&agrave; v&ocirc; c&ugrave;ng mạnh mẽ. Với trọng lượng chỉ&nbsp;<strong>1.98 kg&nbsp;</strong>v&agrave; độ d&agrave;y&nbsp;<strong>19.9 mm,</strong>&nbsp;vỏ ngo&agrave;i bằng nhựa nh&aacute;m, mịn gi&uacute;p cầm m&aacute;y chắc, dễ d&agrave;ng cầm theo b&ecirc;n m&igrave;nh để giải tr&iacute;, chơi game mọi l&uacute;c mọi nơi.</p>
                            <p><a href="https://www.thegioididong.com/images/44/235540/dell-vostro-3500-i5-v3500bthiet-ke.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3500 i5 (P90F006V3500B) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/235540/dell-vostro-3500-i5-v3500bthiet-ke.jpg" /></a></p>
                            <p>Tr&ecirc;n&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;c&oacute; đầy đủ những kết nối phục vụ c&ocirc;ng việc v&agrave; hoạt động chơi game của bạn gồm 3 cổng&nbsp;<strong>USB 3.2, HDMI, LAN,&nbsp;USB Type-C,&nbsp;USB 2.0</strong>&nbsp;v&agrave;&nbsp;khe cắm thẻ nhớ&nbsp;<strong>Micro SD</strong>&nbsp;gi&uacute;p bạn truyền dữ liệu nhanh ch&oacute;ng, thỏa sức kết nối với bất kỳ thiết bị ngoại vi n&agrave;o.</p>
                            <p><a href="https://www.thegioididong.com/images/44/235540/dell-vostro-3500-i5-v3500bckn.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3500 i5 (P90F006V3500B) - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/235540/dell-vostro-3500-i5-v3500bckn.jpg" /></a></p>
                            <p>Ngo&agrave;i ra, Dell Vostro c&ograve;n c&oacute; khả năng kết nối kh&ocirc;ng d&acirc;y với Bluetooth v5.0 với tốc độ kết nối l&ecirc;n đến&nbsp;<strong>50 Mbps</strong>&nbsp;v&agrave; Wi-Fi 802.11 a/b/gn/ac cho việc kết nối ổn định, mượt m&agrave;. B&ecirc;n cạnh đ&oacute;, tr&ecirc;n&nbsp;<a href="https://www.thegioididong.com/laptop-dell" target="_blank">laptop Dell</a>&nbsp;n&agrave;y được trang bị một&nbsp;<strong>Webcam HD</strong>&nbsp;gi&uacute;p việc gọi điện video, chia sẻ với người th&acirc;n, họp hay học trực tuyến cực kỳ hiệu quả.</p>
                            <h3>Đắm ch&igrave;m trong những thước phim với h&igrave;nh ảnh sống động</h3>
                            <p>M&agrave;n h&igrave;nh laptop Dell Vostro n&agrave;y c&oacute; k&iacute;ch thước&nbsp;<strong><a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a></strong>&nbsp;với độ ph&acirc;n giải&nbsp;<strong><a href="https://www.thegioididong.com/laptop-full-hd" target="_blank">Full HD</a>&nbsp;</strong>cho h&igrave;nh ảnh sắc n&eacute;t, sống động, đưa bạn đến kh&ocirc;ng gian game m&atilde;n nh&atilde;n, đắm ch&igrave;m trong cuộc phi&ecirc;u lưu ly kỳ, hấp dẫn.&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wide-viewing-angle-la-gi-uu-nhuoc-diem-1302188" target="_blank">Wide View Angle (WVA)</a>&nbsp;mang đến cho m&agrave;n h&igrave;nh một g&oacute;c nh&igrave;n rộng l&ecirc;n đến&nbsp;<strong>178 độ</strong>&nbsp;gi&uacute;p bạn c&oacute; sự trải nghiệm h&igrave;nh ảnh kh&ocirc;ng bị biến dạng d&ugrave; quan s&aacute;t m&agrave;n h&igrave;nh ở nhiều vị tr&iacute; kh&aacute;c nhau.</p>
                            <p>B&ecirc;n cạnh đ&oacute;, với c&ocirc;ng nghệ&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">chống ch&oacute;i Anti-Glare</a>&nbsp;gi&uacute;p bạn l&agrave;m việc thuận tiện trong m&ocirc;i trường nhiều &aacute;nh s&aacute;ng m&agrave; kh&ocirc;ng sợ m&agrave;n h&igrave;nh bị ch&oacute;i l&oacute;a. Hơn nữa&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-led-backlit-led-backlight-1183188" target="_blank">LED Backlit</a>&nbsp;gi&uacute;p laptop bạn &iacute;t bị ti&ecirc;u thụ điện năng, phần n&agrave;o gi&uacute;p bạn bảo vệ được m&ocirc;i trường xung quanh.</p>
                            <p><a href="https://www.thegioididong.com/images/44/235540/dell-vostro-3500-i5-v3500bman-hinh.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3500 i5 (P90F006V3500B) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/235540/dell-vostro-3500-i5-v3500bman-hinh.jpg" /></a></p>
                            <p>Laptop&nbsp;sử dụng c&ocirc;ng nghệ &acirc;m thanh&nbsp;<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/cong-nghe-am-thanh-realtek-high-definition-audio-l-1191434" target="_blank">Realtek High Definition Audio</a>&nbsp;cung cấp bộ t&ugrave;y chỉnh chuy&ecirc;n s&acirc;u, khuếch đại &acirc;m thanh to r&otilde; nhưng kh&ocirc;ng bị r&egrave;, nhiễu.</p>
                            <p><a href="https://www.thegioididong.com/images/44/235540/dell-vostro-3500-i5-v3500bam-thanh.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3500 i5 (P90F006V3500B) - Âm thanh" src="https://cdn.tgdd.vn/Products/Images/44/235540/dell-vostro-3500-i5-v3500bam-thanh.jpg" /></a></p>
                            <p>Dell Vostro 3500 i5 (P90F006V3500B) hứa hẹn sẽ l&agrave; người bạn đồng h&agrave;nh tuyệt vời c&ugrave;ng bạn, c&oacute; sức mạnh đột ph&aacute; mang đến cho bạn trải nghiệm chơi game đỉnh cao trong ph&acirc;n kh&uacute;c&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>.</p>
                            ',
            'slug'=>Str::slug('Dell Vostro 3500 i5 1135G7/8GB/256GB/2GB MX330/Win10 (P90F006V3500B)','-').'.aspx',
            'created_at'=>now(),
        ]);

        DB::table('products')->insert([
            'name'=>'Dell Inspiron 3505 R3 3250U/8GB/256GB/Win10 (Y1N1T1)',
            'price'=>11490000,
            'old_price'=>12890000,
            'quantity'=>50,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/235376/dell-inspiron-3505-r3-y1n1t1-15-600x600.jpg',
            'rate'=>400,
            'category_id'=>3, //Laptop Văn phòng
            'brand_id'=>3,
            'user_id'=>random_int(1,5),
            'describe'=> '<h2>Đặc điểm nổi bật của Dell Inspiron 3505 R3 3250U/8GB/256GB/Win10 (Y1N1T1)</h2>
                            <p><img src="https://cdn.tgdd.vn/Products/Images/44/235376/Slider/vi-vn-dell-inspiron-3505-r3-y1n1t1-1.jpg" /></p>
                            <p><a href="https://www.thegioididong.com/laptop/dell-inspiron-3505-r3-y1n1t1" target="_blank">Laptop Dell Inspiron 3505 R3 (Y1N1T1)</a>&nbsp;với thiết kế trang nh&atilde;, hiện đại, hiệu năng đủ d&ugrave;ng c&ugrave;ng m&agrave;n h&igrave;nh hiển thị sắc n&eacute;t mang đến cho học sinh, sinh vi&ecirc;n v&agrave; d&acirc;n văn ph&ograve;ng một sự lựa chọn ph&ugrave; hợp trong ph&acirc;n kh&uacute;c gi&aacute; rẻ.</p>
                            <h3>Thiết kế đơn giản, hiện đại&nbsp;</h3>
                            <p><a href="https://www.dienmayxanh.com/laptop-dell-inspiron" target="_blank">Laptop Dell Inspiron</a>&nbsp;được thiết kế kh&aacute; đơn giản, vỏ m&aacute;y được l&agrave;m từ nhựa nhưng kh&aacute; chắc chắn, bền bỉ, đường n&eacute;t m&aacute;y được bo tr&ograve;n tinh tế. Th&acirc;n m&aacute;y c&oacute; độ d&agrave;y chỉ&nbsp;<strong>19.9 mm</strong>, trọng lượng&nbsp;<strong>1.8 kg</strong>&nbsp;để bạn thoải m&aacute;i đồng h&agrave;nh c&ugrave;ng chiếc m&aacute;y mỗi ng&agrave;y.</p>
                            <p><a href="https://www.thegioididong.com/images/44/235376/dell-inspiron-3505-r3-y1n1t1-2-1.jpg" onclick="return false;"><img alt="Dell Inspiron 3505 R3 3250U (Y1N1T1) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/235376/dell-inspiron-3505-r3-y1n1t1-2-1.jpg" /></a></p>
                            <p><a href="https://www.dienmayxanh.com/laptop-dell" target="_blank">Laptop Dell</a>&nbsp;Inspiron c&oacute; khả năng kết nối tuyệt vời nhờ c&aacute;c cổng kết nối th&ocirc;ng dụng hiện nay như USB 3.1, HDMI, USB 2.0 v&agrave; khe cắm thẻ nhớ SD để xuất th&ocirc;ng tin sang m&aacute;y chiếu, trao đổi dữ liệu với thiết bị ngoại vi được nhanh ch&oacute;ng.</p>
                            <p><a href="https://www.thegioididong.com/images/44/235376/dell-inspiron-3505-r3-y1n1t1-8-1.jpg" onclick="return false;"><img alt="Dell Inspiron 3505 R3 3250U (Y1N1T1) - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/235376/dell-inspiron-3505-r3-y1n1t1-8-1.jpg" /></a></p>
                            <p>Về kết nối kh&ocirc;ng d&acirc;y,&nbsp;<a href="https://www.dienmayxanh.com/laptop" target="_blank">laptop</a>&nbsp;c&oacute; chuẩn&nbsp;<strong>Wi-Fi 802.11 a/b/g/n/ac</strong>&nbsp;hiện đại cho đường truyền ổn định, độ trễ thấp để học tập v&agrave; l&agrave;m việc online kh&ocirc;ng bị gi&aacute;n đoạn.</p>
                            <h3>&nbsp;</h3>
                            ',
            'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Dell Inspiron 3505 R3 3250U/8GB/256GB/Win10 (Y1N1T1)</h3>
                                <p><img alt="Thông số kỹ thuật 235376" src="https://cdn.tgdd.vn/Products/Images/44/235376/Kit/dell-inspiron-3505-r3-y1n1t1-note.jpg" style="height:430px; width:500px" /></p>
                                <ul>
                                    <li>﻿</li>
                                    <li>Bộ xử l&yacute;</li>
                                    <li>C&ocirc;ng nghệ CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/chip-amd-la-gi-uu-va-nhuoc-diem-so-voi-chip-intel-1191868" target="_blank">AMD Ryzen 3</a></p>
                                    </li>
                                    <li>Loại CPU
                                    <p>3250U</p>
                                    </li>
                                    <li>Tốc độ CPU
                                    <p>2.60 GHz</p>
                                    </li>
                                    <li>Tốc độ tối đa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 3.5 GHz</a></p>
                                    </li>
                                    <li>Bộ nhớ RAM, Ổ cứng</li>
                                    <li>RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
                                    </li>
                                    <li>Loại RAM
                                    <p>DDR4 2 khe (1 khe 4GB + 1 khe 4GB)</p>
                                    </li>
                                    <li>Tốc độ Bus RAM
                                    <p>3200 MHz</p>
                                    </li>
                                    <li>Hỗ trợ RAM tối đa
                                    <p>32 GB</p>
                                    </li>
                                    <li>Ổ cứng
                                    <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD 256GB NVMe PCIe</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh</li>
                                    <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                    <p>15.6 inch</p>
                                    </li>
                                    <li>Độ ph&acirc;n giải
                                    <p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
                                    </li>
                                    <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a>WVA<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh cảm ứng
                                    <p>Kh&ocirc;ng c&oacute;</p>
                                    </li>
                                    <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                    <li>Thiết kế card
                                    <p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-tich-hop-la-gi-950047" target="_blank">Card đồ họa t&iacute;ch hợp</a></p>
                                    </li>
                                    <li>Card đồ họa
                                    <p>AMD Radeon Graphics</p>
                                    </li>
                                    <li>C&ocirc;ng nghệ &acirc;m thanh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-realtek-high-defi-1181909" target="_blank">Realtek High Definition Audio</a></p>
                                    </li>
                                    <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                    <li>Cổng giao tiếp
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516#usb-20" target="_blank">USB 2.0</a></p>
                                    </li>
                                    <li>Kết nối kh&ocirc;ng d&acirc;y
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-bluetooth-743602" target="_blank">Bluetooth</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
                                    </li>
                                    <li>Khe đọc thẻ nhớ
                                    <p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">SD</a></p>
                                    </li>
                                    <li>Webcam
                                    <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
                                    </li>
                                    <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                    <p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
                                    </li>
                                    <li>K&iacute;ch thước &amp; trọng lượng</li>
                                    <li>K&iacute;ch thước
                                    <p>D&agrave;i 363.9 mm - Rộng 249 mm - D&agrave;y 19.9 mm</p>
                                    </li>
                                    <li>Trọng lượng
                                    <p>1.8 kg</p>
                                    </li>
                                    <li>Chất liệu
                                    <p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
                                    </li>
                                    <li>Th&ocirc;ng tin kh&aacute;c</li>
                                    <li>Loại PIN
                                    <p>PIN liền</p>
                                    </li>
                                    <li>Th&ocirc;ng tin Pin
                                    <p>3-cell Li-ion, 42 Wh</p>
                                    </li>
                                    <li>Hệ điều h&agrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                    </li>
                                    <li>Thời điểm ra mắt
                                    <p>2020</p>
                                    </li>
                                </ul>
                                ',
            'details'=> '<h2>Sử dụng văn ph&ograve;ng, lướt web mượt m&agrave;&nbsp;</h2>
                            <p>Dell Inspiron mang trong m&igrave;nh con chip&nbsp;<strong><a href="https://www.dienmayxanh.com/laptop-cpu-amd" target="_blank">AMD Ryzen 3</a></strong>&nbsp;<strong>3250U</strong>&nbsp;tuy kh&ocirc;ng qu&aacute; mạnh nhưng đủ để chạy ổn định c&aacute;c ứng dụng văn ph&ograve;ng như Word, Excel, học trực tuyến với Teams, Zoom,... lướt web, xem phim giải tr&iacute; thoải m&aacute;i. Con chip n&agrave;y c&oacute; 2 nh&acirc;n 4 luồng với xung nhịp trung b&igrave;nh&nbsp;<strong>2.60 GHz</strong>&nbsp;v&agrave; tối đa&nbsp;<strong>3.50 GHz&nbsp;</strong>nhờ c&ocirc;ng nghệ&nbsp;<strong>Turbo Boost&nbsp;</strong>hỗ trợ &eacute;p xung.</p>
                            <p>M&aacute;y c&oacute; bộ nhớ&nbsp;<strong><a href="https://www.dienmayxanh.com/laptop?g=8-gb" target="_blank">RAM 8 GB</a>&nbsp;</strong>DDR4 2 khe (1 khe 4GB + 1 khe 4GB) cho m&aacute;y khả năng đa nhiệm ổn định, chuyển đổi linh hoạt giữa nhiều ứng dụng với nhau m&agrave; vẫn đảm bảo mượt m&agrave; với tốc độ&nbsp;<strong>Bus RAM&nbsp;3200 MHz</strong>&nbsp;. M&aacute;y c&ograve;n hỗ trợ RAM tối đa&nbsp;<strong>32&nbsp;GB</strong>&nbsp;để bạn tiện lợi n&acirc;ng cấp khi cần.</p>
                            <p><a href="https://www.thegioididong.com/images/44/235376/dell-inspiron-3505-r3-y1n1t1-4-1.jpg" onclick="return false;"><img alt="Dell Inspiron 3505 R3 3250U (Y1N1T1) - Cấu hình" src="https://cdn.tgdd.vn/Products/Images/44/235376/dell-inspiron-3505-r3-y1n1t1-4-1.jpg" /></a></p>
                            <p><strong><a href="https://www.dienmayxanh.com/laptop-o-cung-ssd" target="_blank">Ổ cứng SSD</a></strong>&nbsp;<strong><a href="https://www.dienmayxanh.com/laptop?g=ssd-256-gb" target="_blank">256 GB</a></strong>&nbsp;NVMe PCIe cho ph&eacute;p khả năng lưu trữ lớn, tăng tốc độ xử l&yacute; của laptop, gi&uacute;p mọi thao t&aacute;c tr&ecirc;n m&aacute;y lu&ocirc;n nhanh ch&oacute;ng, tốc độ khởi động chỉ khoảng&nbsp;<strong>10-15 gi&acirc;y</strong>, cho bạn l&agrave;m việc năng suất hơn.&nbsp;B&ecirc;n cạnh đ&oacute; th&igrave; dung lượng 256 GB cho ph&eacute;p bạn lưu trữ thoải m&aacute;i c&aacute;c tệp dữ liệu c&ocirc;ng việc, h&igrave;nh ảnh, video,...</p>
                            <p><a href="https://www.thegioididong.com/images/44/235376/dell-inspiron-3505-r3-y1n1t1-5-1.jpg" onclick="return false;"><img alt="Dell Inspiron 3505 R3 3250U (Y1N1T1) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/235376/dell-inspiron-3505-r3-y1n1t1-5-1.jpg" /></a></p>
                            <h3>Hiển thị r&otilde; n&eacute;t, g&oacute;c nh&igrave;n rộng&nbsp;</h3>
                            <p>M&agrave;n h&igrave;nh&nbsp;<strong><a href="https://www.dienmayxanh.com/laptop-tren-15-inch" target="_blank">15.6 inch</a></strong>&nbsp;độ ph&acirc;n giải&nbsp;<strong>Full HD (1920 x 1080)</strong>&nbsp;gi&uacute;p hiển thị h&igrave;nh ảnh r&otilde; n&eacute;t, m&agrave;u sắc c&oacute; độ trung thực cao. M&agrave;n h&igrave;nh sử dụng c&ocirc;ng nghệ&nbsp;<strong>WVA</strong>&nbsp;mang đến độ tương phản cao, g&oacute;c nh&igrave;n rộng l&ecirc;n đến&nbsp;<strong>178 độ</strong>&nbsp;để bạn c&oacute; được kh&ocirc;ng gian giải tr&iacute; thoải m&aacute;i nhất, h&igrave;nh ảnh đồng nhất qua từng g&oacute;c nh&igrave;n.&nbsp;</p>
                            <p>B&ecirc;n cạnh đ&oacute;, với c&ocirc;ng nghệ<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank"><strong>&nbsp;Anti Glare</strong></a>, m&agrave;n h&igrave;nh sẽ được phủ một lớp nh&aacute;m mờ c&oacute; t&iacute;nh năng<strong>&nbsp;chống ch&oacute;i,</strong>&nbsp;giảm t&igrave;nh trạng mờ, l&oacute;a, hay nh&ograve;e h&igrave;nh, cho chất lượng hiển thị tốt kể cả khi sử dụng m&aacute;y ngo&agrave;i trời.</p>
                            <p><a href="https://www.thegioididong.com/images/44/235376/dell-inspiron-3505-r3-y1n1t1-6-1.jpg" onclick="return false;"><img alt="Dell Inspiron 3505 R3 3250U (Y1N1T1) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/235376/dell-inspiron-3505-r3-y1n1t1-6-1.jpg" /></a></p>
                            <p>Ở cạnh tr&ecirc;n của m&agrave;n h&igrave;nh được trang bị một chiếc&nbsp;<strong>HD webcam</strong>&nbsp;để tiện cho việc gọi nh&oacute;m, họp trực tuyến, tr&ograve; chuyện online c&ugrave;ng bạn b&egrave; với h&igrave;nh ảnh chất lượng.&nbsp;</p>
                            <p>C&ocirc;ng nghệ&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-realtek-high-defini-1181909" target="_blank"><strong>Realtek High Definition Audio</strong></a>&nbsp;c&oacute; khả năng khuếch đại &acirc;m thanh, cung cấp &acirc;m thanh to r&otilde; m&agrave; chất &acirc;m vẫn trong trẻo.</p>
                            <p><a href="https://www.thegioididong.com/images/44/235376/dell-inspiron-3505-r3-y1n1t1-7-1.jpg" onclick="return false;"><img alt="Dell Inspiron 3505 R3 3250U (Y1N1T1) - Âm thanh" src="https://cdn.tgdd.vn/Products/Images/44/235376/dell-inspiron-3505-r3-y1n1t1-7-1.jpg" /></a></p>
                            <p>Dell Inspiron 3505 R3 (Y1N1T1) l&agrave; chiếc&nbsp;<a href="https://www.dienmayxanh.com/laptop?g=hoc-tap-van-phong" target="_blank">laptop học tập - văn ph&ograve;ng</a>&nbsp;ph&ugrave; hợp với người d&ugrave;ng văn ph&ograve;ng hoặc sinh vi&ecirc;n, học sinh cần một c&ocirc;ng cụ hỗ trợ tốt cho c&ocirc;ng việc cũng như giải tr&iacute; v&agrave; c&oacute; mức gi&aacute; th&agrave;nh rẻ.</p>
                            ',
            'slug'=>Str::slug('Dell Inspiron 3505 R3 3250U/8GB/256GB/Win10 (Y1N1T1)','-').'.aspx',
            'created_at'=>now(),
        ]);

        DB::table('products')->insert([
            'name'=>'Dell Vostro 3590 i7 10510U/8GB/256GB/2GB 610R5/Win10 (GRMGK2)',
            'price'=>20490000,
            'old_price'=>22890000,
            'quantity'=>60,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-220718-220718-600x600.jpg',
            'rate'=>400,
            'category_id'=>3, //Laptop Văn phòng
            'brand_id'=>3,
            'user_id'=>random_int(1,5),
            'describe'=> '<h2>Đặc điểm nổi bật của Dell Vostro 3590 i7 10510U/8GB/256GB/2GB 610R5/Win10 (GRMGK2)</h2>
                            <p><img src="https://cdn.tgdd.vn/Products/Images/44/220718/Slider/vi-vn-dell-vostro-3590-i7-grmgk2.jpg" /></p>
                            <p><a href="https://www.thegioididong.com/laptop/dell-vostro-3590-i7-grmgk2" target="_blank">Laptop Dell Vostro 3590 i7 (GRMGK2)</a>&nbsp;l&agrave; phi&ecirc;n bản&nbsp;<a href="https://www.thegioididong.com/laptop?g=do-hoa-ky-thuat" target="_blank">laptop đồ họa kĩ thuật</a>&nbsp;c&oacute; thiết kế hiện đại, cấu h&igrave;nh khỏe với vi xử l&iacute; gen 10 v&agrave; card đồ họa rời. Đ&acirc;y ch&iacute;nh l&agrave; chiếc laptop đ&aacute;ng c&acirc;n nhắc đối với d&acirc;n đồ họa hay sinh vi&ecirc;n khối ng&agrave;nh kĩ thuật.</p>
                            <h3>Đơn giản, hiện đại</h3>
                            <p><a href="https://www.thegioididong.com/laptop-dell" target="_blank">Dell</a>&nbsp;Vostro 3590 được thiết kế đơn giản, chắc chắn, trọng lượng nhẹ, khoảng<strong>&nbsp;1.99 kg</strong>, độ d&agrave;y&nbsp;<strong>19.8 mm</strong>&nbsp;mỏng nhẹ đối với một chiếc laptop 15.6 inch dễ d&agrave;ng để bạn đem theo b&ecirc;n m&igrave;nh.&nbsp;</p>
                            <p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-kg.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7 được thiết kế đơn giản" src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-kg.jpg" /></a></p>
                            <p>Chỉ cần chạm nhẹ, cảm biến sẽ qu&eacute;t v&acirc;n tay gi&uacute;p bạn mở kh&oacute;a thiết bị m&agrave; kh&ocirc;ng cần nhập mật khẩu.</p>
                            <p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-va%CC%82ntay-1.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7 mở khóa mà không cần nhập mật khẩu" src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-va%CC%82ntay-1.jpg" /></a></p>
                            <p>M&agrave;n h&igrave;nh<strong>&nbsp;<a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a>&nbsp;Full HD (1920 x 1080)</strong>&nbsp;sử dụng c&ocirc;ng nghệ m&agrave;n h&igrave;nh&nbsp;<strong>LED Backlit</strong>&nbsp;hiển thị h&igrave;nh ảnh sắc n&eacute;t, m&agrave;u sắc tươi s&aacute;ng v&agrave; độ tương phản h&igrave;nh ảnh cao hơn.</p>
                            <p>Tấm nền&nbsp;<strong>Anti-Glare</strong>&nbsp;gi&uacute;p chống ch&oacute;i nếu bạn phải sử dụng m&aacute;y dưới trời nắng, ngược s&aacute;ng,...</p>
                            <p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-inch.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7 hiển thị hình ảnh sắc nét" src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-inch.jpg" /></a></p>
                            <h3>&nbsp;</h3>
                            ',
            'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Dell Vostro 3590 i7 10510U/8GB/256GB/2GB 610R5/Win10 (GRMGK2)</h3>
                                <p><img alt="Thông số kỹ thuật 220718" src="https://cdn.tgdd.vn/Products/Images/44/220718/Kit/dell-vostro-3590-i7-grmgk2-mo-ta.jpg" style="height:430px; width:500px" /></p>
                                <ul>
                                    <li>﻿</li>
                                    <li>Bộ xử l&yacute;</li>
                                    <li>C&ocirc;ng nghệ CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i7 Comet Lake</a></p>
                                    </li>
                                    <li>Loại CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-cpu-laptop-intel-core-i7-10510u-1239800" target="_blank">10510U</a></p>
                                    </li>
                                    <li>Tốc độ CPU
                                    <p>1.80 GHz</p>
                                    </li>
                                    <li>Tốc độ tối đa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.9 GHz</a></p>
                                    </li>
                                    <li>Bộ nhớ RAM, Ổ cứng</li>
                                    <li>RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
                                    </li>
                                    <li>Loại RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (On board +1 khe)</a></p>
                                    </li>
                                    <li>Tốc độ Bus RAM
                                    <p>2666 MHz</p>
                                    </li>
                                    <li>Hỗ trợ RAM tối đa
                                    <p>16 GB</p>
                                    </li>
                                    <li>Ổ cứng
                                    <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD 256GB NVMe PCIe</a>,&nbsp;Hỗ trợ khe cắm HDD SATA</p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh</li>
                                    <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                    <p>15.6 inch</p>
                                    </li>
                                    <li>Độ ph&acirc;n giải
                                    <p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
                                    </li>
                                    <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti-Glare</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-led-backlit-led-backlight-1183188" target="_blank">LED Backlit</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh cảm ứng
                                    <p>Kh&ocirc;ng c&oacute;</p>
                                    </li>
                                    <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                    <li>Thiết kế card
                                    <p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
                                    </li>
                                    <li>Card đồ họa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/amd-radeon-610-tren-laptop-co-gi-dac-biet-manh-nhu-the-nao-1270147" target="_blank">AMD Radeon 610R5, 2GB</a></p>
                                    </li>
                                    <li>C&ocirc;ng nghệ &acirc;m thanh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-waves-maxx-audio-1180272" target="_blank">Waves MaxxAudio</a></p>
                                    </li>
                                    <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                    <li>Cổng giao tiếp
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516#usb-20" target="_blank">USB 2.0</a><a href="https://www.thegioididong.com/hoi-dap/vga-la-gi-920575" target="_blank">VGA (D-Sub)</a></p>
                                    </li>
                                    <li>Kết nối kh&ocirc;ng d&acirc;y
                                    <p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
                                    </li>
                                    <li>Khe đọc thẻ nhớ
                                    <p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">Micro SD</a></p>
                                    </li>
                                    <li>Webcam
                                    <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
                                    </li>
                                    <li>T&iacute;nh năng kh&aacute;c
                                    <p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
                                    </li>
                                    <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                    <p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
                                    </li>
                                    <li>K&iacute;ch thước &amp; trọng lượng</li>
                                    <li>K&iacute;ch thước
                                    <p>D&agrave;i 380 mm - Rộng 258 mm - D&agrave;y 19.8 mm</p>
                                    </li>
                                    <li>Trọng lượng
                                    <p>1.99 kg</p>
                                    </li>
                                    <li>Chất liệu
                                    <p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
                                    </li>
                                    <li>Th&ocirc;ng tin kh&aacute;c</li>
                                    <li>Model Adapter sạc
                                    <p>LA65NS2-01</p>
                                    </li>
                                    <li>Loại PIN
                                    <p>PIN liền</p>
                                    </li>
                                    <li>Th&ocirc;ng tin Pin
                                    <p><a href="https://www.thegioididong.com/hoi-dap/pin-li-po-la-gi-pin-li-ion-la-gi-pin-3-cell-6-ce-1190023" target="_blank">Li-Ion 3 cell</a></p>
                                    </li>
                                    <li>Hệ điều h&agrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                    </li>
                                    <li>Thời điểm ra mắt
                                    <p>2019</p>
                                    </li>
                                </ul>
                                ',
            'details'=> '<h2>Hiệu năng ấn tượng&nbsp;</h2>
                            <p><a href="https://www.thegioididong.com/laptop-dell-vostro" target="_blank">Dell Vostro</a>&nbsp;sử dụng CPU Intel&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Core i7</a></strong>&nbsp;Comet Lake thế hệ 10 mạnh mẽ, được cải tiến về hiệu năng, sử dụng được c&aacute;c ứng dụng nặng, chơi được c&aacute;c tựa game phổ biến.&nbsp;</p>
                            <p><a href="https://www.thegioididong.com/laptop?g=8-gb" target="_blank"><strong>RAM 8 GB</strong></a>&nbsp;mang lại khả năng xử l&iacute; đa nhiệm mượt m&agrave;, dễ d&agrave;ng chuyển đổi giữa c&aacute;c ứng dụng đang mở. M&aacute;y c&ograve;n hỗ trợ 1 khe RAM 16 GB cho người d&ugrave;ng dễ n&acirc;ng cấp.&nbsp;</p>
                            <p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-core-i7-gen-10.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7 (GRMGK2) là phiên bản laptop đồ họa kĩ thuật " src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-core-i7-gen-10.jpg" /></a></p>
                            <p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">T&igrave;m hiểu về vi xử l&iacute; thế hệ 10.</a></p>
                            <p><a href="https://www.thegioididong.com/laptop-dell-o-cung-ssd" target="_blank">Ổ cứng SSD</a><strong>&nbsp;<a href="https://www.thegioididong.com/laptop#g:127554" target="_blank">256 GB</a></strong>&nbsp;lưu trữ đủ d&ugrave;ng, tốc độ nhanh ch&oacute;ng. Với ổ cứng SSD n&agrave;y, bạn chỉ mất khoảng 10-15s để khởi động Windows.&nbsp;</p>
                            <p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-ssd.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7 lưu trữ đủ dùng" src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-ssd.jpg" /></a></p>
                            <p><a href="https://www.thegioididong.com/laptop-dell-card-do-hoa-roi" target="_blank">Card đồ họa rời</a><strong>&nbsp;AMD Radeon 610R5, 2GB</strong>&nbsp;gi&uacute;p chạy mượt c&aacute;c ứng dụng đồ họa y&ecirc;u cầu xử l&yacute; h&igrave;nh ảnh ở mức cao, xử l&iacute; video kh&ocirc;ng qu&aacute; phức tạp.</p>
                            <p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-amd.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7 chạy mượt các ứng dụng đồ họa " src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-amd.jpg" /></a></p>
                            <p><a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;c&oacute; c&aacute;c cổng giao tiếp phổ biến như: USB 3.1, HDMI, USB 2.0. Ngo&agrave;i ra, m&aacute;y c&ograve;n c&oacute; cổng VGA tiện lợi kết nối với c&aacute;c thiết bị ở cơ quan, trường lớp.</p>
                            <p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-usb.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7 có các cổng giao tiếp phổ biến " src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-usb.jpg" /></a></p>
                            <p>C&ocirc;ng nghệ &acirc;m thanh<strong>&nbsp;Waves MaxxAudio</strong>&nbsp;tinh chỉnh &acirc;m thanh to r&otilde;, giả lập hiệu ứng &acirc;m thanh v&ograve;m ch&acirc;n thật, sống động.</p>
                            <p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-a%CC%82m-thanh.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7  tinh chỉnh âm thanh to rõ" src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-a%CC%82m-thanh.jpg" /></a></p>
                            <p>Laptop trang bị b&agrave;n ph&iacute;m với k&iacute;ch thước ti&ecirc;u chuẩn, c&aacute;c ph&iacute;m c&oacute; độ nảy tốt, Touchpad rộng r&atilde;i với khả năng hỗ trợ đa điểm gi&uacute;p bạn dễ d&agrave;ng tương t&aacute;c với m&aacute;y.&nbsp;</p>
                            <p>Nh&igrave;n chung,&nbsp;<a href="https://www.thegioididong.com/laptop/dell-vostro-3590-i5-10210u-4gb-1tb-win10-grmgk1" target="_blank">Dell Vostro 3590</a>&nbsp;phi&ecirc;n bản i7 c&oacute; cấu h&igrave;nh ổn định, đ&aacute;p ứng nhu cầu văn ph&ograve;ng, thiết kế 2D v&agrave; giải tr&iacute; với c&aacute;c tựa game nhẹ. B&ecirc;n cạnh đ&oacute;, m&aacute;y cũng c&oacute; thiết kế bền chắc, tiện lợi di chuyển c&ugrave;ng nhiều t&iacute;nh năng hiện đại.&nbsp;</p>
                            ',
            'slug'=>Str::slug('Dell Vostro 3590 i7 10510U/8GB/256GB/2GB 610R5/Win10 (GRMGK2)','-').'.aspx',
            'created_at'=>now(),
        ]);

        DB::table('products')->insert([
            'name'=>'Asus TUF Gaming FX506LH i5 10300H/8GB/512GB/144Hz/4GB GTX1650/Win10 (HN002T)',
            'price'=>20490000,
            'old_price'=>22490000,
            'quantity'=>50,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/236022/asus-uf-gaming-fx506lh-i5-hn002t-15-600x600.jpg',
            'rate'=>400,
            'category_id'=>4,
            'brand_id'=>2,
            'user_id'=>random_int(1,5),
            'describe'=> '<h2>Đặc điểm nổi bật của Asus TUF Gaming FX506LH i5 10300H/8GB/512GB/144Hz/4GB GTX1650/Win10 (HN002T)</h2>
                            <p><img src="https://cdn.tgdd.vn/Products/Images/44/236022/Slider/asus-uf-gaming-fx506lh-i5-hn002t-130321-0711570.jpg" /></p>
                            <p>Với sự mạnh mẽ, bền bỉ từ thiết kế vẻ ngo&agrave;i lẫn b&ecirc;n trong cấu h&igrave;nh,&nbsp;<a href="https://www.thegioididong.com/laptop/asus-uf-gaming-fx506lh-i5-hn002t" target="_blank">Asus TUF Gaming FX506LH (HN002T)</a>&nbsp;sẽ l&agrave; một trợ thủ đắc lực của bạn trong tr&ograve; chơi y&ecirc;u th&iacute;ch v&agrave; cả những t&aacute;c vụ nặng kh&aacute;c.</p>
                            <h3>Đa nhiệm mượt m&agrave; với Chip Intel Core i5&nbsp;<a href="https://www.thegioididong.com/laptop-cpu-intel-gen-10" target="_blank">thế hệ 10</a>&nbsp;ti&ecirc;u chuẩn gaming</h3>
                            <p><a href="https://www.thegioididong.com/laptop-asus-tuf-gaming" target="_blank">Asus TUF Gaming</a>&nbsp;được trang bị chip&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Comet Lake</a>&nbsp;<strong>10300H</strong>&nbsp;cho hiệu năng ổn định, chiến game cực chất với&nbsp;<strong>4 nh&acirc;n 8 luồng</strong>&nbsp;c&ugrave;ng xung nhịp &eacute;p l&ecirc;n đến&nbsp;<strong>4.5 GHz</strong>&nbsp;nhờ c&ocirc;ng nghệ&nbsp;<strong>Turbo Boost</strong>.</p>
                            <p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ hoạ rời</a>&nbsp;m&agrave; FX506LH sử dụng l&agrave;&nbsp;<a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-gtx-1650-co-manh-kh-1201415" target="_blank">NVIDIA GeForce GTX 1650 4GB</a>. Card được thiết kế theo kiến tr&uacute;c&nbsp;<strong>Turning</strong>&nbsp;ti&ecirc;n tiến, gi&uacute;p c&acirc;n bằng giữa sức mạnh xử l&iacute; h&igrave;nh ảnh v&agrave; điện năng ti&ecirc;u thụ của m&aacute;y cho c&aacute;c game thủ trải nghiệm mượt m&agrave; c&aacute;c tr&ograve; chơi nổi tiếng như PUBG, GTA V, Battlefield,... tr&ecirc;n độ ph&acirc;n giải Full HD hay sử dụng tốt c&aacute;c phần mềm đồ hoạ như: Photoshop, Illustrator, Premiere,...</p>
                            <p><a href="https://www.thegioididong.com/images/44/236022/asus-tuf-gaming-fx506lh-4.jpg" onclick="return false;"><img alt="Laptop Asus TUF Gaming FX506LH i5 (HN002T) - Cấu hình" src="https://cdn.tgdd.vn/Products/Images/44/236022/asus-tuf-gaming-fx506lh-4.jpg" /></a></p>
                            <p><a href="https://www.thegioididong.com/laptop-8-gb" target="_blank">RAM 8 GB</a>&nbsp;loại&nbsp;<strong>DDR4</strong>&nbsp;(2 khe) đảm bảo khả năng đa nhiệm của m&aacute;y ổn định với tốc độ Bus RAM l&ecirc;n đến&nbsp;<strong>2933 MHz</strong>, bạn c&oacute; thể vừa chơi game, vừa ph&aacute;t trực tiếp, vừa xử l&iacute; c&aacute;c t&aacute;c vụ kh&aacute;c m&agrave; kh&ocirc;ng phải lo lắng qu&aacute; nhiều về tốc độ xử l&iacute; của m&aacute;y. Ngo&agrave;i ra, Asus c&ograve;n hỗ trợ n&acirc;ng cấp RAM đến&nbsp;<strong>32 GB</strong>&nbsp;để bạn dễ d&agrave;ng c&oacute; được hiệu năng như &yacute; muốn.</p>
                            <p>Ổ cứng&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">SSD 512 GB</a>&nbsp;chuẩn&nbsp;<strong>M.2 PCle</strong>&nbsp;cho tốc độ khởi động m&aacute;y v&agrave; truy xuất dữ liệu nhanh ch&oacute;ng chỉ từ 5 - 10 gi&acirc;y, đủ kh&ocirc;ng gian lưu trữ để tải về những tựa game v&agrave; phần mềm ưu th&iacute;ch. Ngo&agrave;i ra, m&aacute;y c&ograve;n hỗ trợ khe cắm SSD M.2 PCle kh&aacute;c gi&uacute;p bạn dễ d&agrave;ng n&acirc;ng cấp bộ nhớ của m&igrave;nh.</p>
                            <p><a href="https://www.thegioididong.com/images/44/236022/asus-tuf-gaming-fx506lh-05.jpg" onclick="return false;"><img alt="Laptop Asus TUF Gaming FX506LH i5 (HN002T) - RAM và SSD" src="https://cdn.tgdd.vn/Products/Images/44/236022/asus-tuf-gaming-fx506lh-05.jpg" /></a></p>
                            <h3>Tối ưu ho&aacute; hiển thị với&nbsp;<a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">m&agrave;n h&igrave;nh 15.6 inch</a>&nbsp;viền&nbsp;<strong>7 mm</strong></h3>
                            <p><a href="https://www.thegioididong.com/laptop-asus" target="_blank">Laptop Asus</a>&nbsp;chế t&aacute;c m&agrave;n h&igrave;nh viền mỏng&nbsp;mang đến h&igrave;nh ảnh chất lượng với độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;sắc n&eacute;t. Đ&acirc;y l&agrave; m&agrave;n h&igrave;nh c&oacute; tốc độ khung h&igrave;nh&nbsp;<strong>144 Hz</strong>&nbsp;gi&uacute;p h&igrave;nh ảnh trong game chuyển động mượt m&agrave;, tối ưu nhất v&agrave; giảm thiểu hiện tượng bị x&eacute; h&igrave;nh.</p>
                            <p>Tấm nền&nbsp;<strong>IPS&nbsp;</strong>cho g&oacute;c nh&igrave;n dễ chịu&nbsp;c&ugrave;ng c&ocirc;ng nghệ chống ch&oacute;i&nbsp;<strong>Anti Glare</strong>&nbsp;đảm bảo h&igrave;nh ảnh hiển thị trong điều kiện &aacute;nh s&aacute;ng n&agrave;o cũng ổn định, đem đến trải nghiệm chơi game, l&agrave;m việc, giải tr&iacute; cực k&igrave; h&agrave;i l&ograve;ng.</p>
                            <p><a href="https://www.thegioididong.com/images/44/236022/asus-tuf-gaming-fx506lh-6.jpg" onclick="return false;"><img alt="Laptop Asus TUF Gaming FX506LH i5 (HN002T) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/236022/asus-tuf-gaming-fx506lh-6.jpg" /></a></p>
                            <p>C&ocirc;ng nghệ giả lập &acirc;m thanh v&ograve;m&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-dts-tren-laptop-la-gi-1261821#dts-ultra-audio" target="_blank">DTS X:Ultra Audio</a>&nbsp;gi&uacute;p t&aacute;i tạo &acirc;m thanh giống như thực tế, cho &acirc;m thanh to, ch&acirc;n thực, r&otilde; r&agrave;ng. Nhờ c&ocirc;ng nghệ n&agrave;y m&agrave; bạn ho&agrave;n to&agrave;n c&oacute; thể nghe r&otilde; được tiếng bước ch&acirc;n của người chơi kh&aacute;c trong những tựa game nhập vai v&agrave; dễ d&agrave;ng d&agrave;nh chiến thắng.</p>
                            <p><a href="https://www.thegioididong.com/images/44/236022/asus-tuf-gaming-fx506lh-10.jpg" onclick="return false;"><img alt="Laptop Asus TUF Gaming FX506LH i5 (HN002T) - Âm thanh" src="https://cdn.tgdd.vn/Products/Images/44/236022/asus-tuf-gaming-fx506lh-10.jpg" /></a></p>
                            <h3>&nbsp;</h3>
                            ',
            'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Asus TUF Gaming FX506LH i5 10300H/8GB/512GB/144Hz/4GB GTX1650/Win10 (HN002T)</h3>
                                <p><img alt="Thông số kỹ thuật 236022" src="https://cdn.tgdd.vn/Products/Images/44/236022/Kit/asus-uf-gaming-fx506lh-i5-hn002t-note.jpg" style="height:430px; width:500px" /></p>
                                <ul>
                                    <li>﻿</li>
                                    <li>Bộ xử l&yacute;</li>
                                    <li>C&ocirc;ng nghệ CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i5 Comet Lake</a></p>
                                    </li>
                                    <li>Loại CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-i5-10300h-uu-nhuoc-diem-la-1263751" target="_blank">10300H</a></p>
                                    </li>
                                    <li>Tốc độ CPU
                                    <p>2.50 GHz</p>
                                    </li>
                                    <li>Tốc độ tối đa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.5 GHz</a></p>
                                    </li>
                                    <li>Bộ nhớ RAM, Ổ cứng</li>
                                    <li>RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
                                    </li>
                                    <li>Loại RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
                                    </li>
                                    <li>Tốc độ Bus RAM
                                    <p>2933 MHz</p>
                                    </li>
                                    <li>Hỗ trợ RAM tối đa
                                    <p>32 GB</p>
                                    </li>
                                    <li>Ổ cứng
                                    <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cac-chuan-toc-do-cua-o-cung-ssd-tren-1115453" target="_blank">Hỗ trợ khe cắm SSD M.2 PCIe</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh</li>
                                    <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                    <p>15.6 inch</p>
                                    </li>
                                    <li>Độ ph&acirc;n giải
                                    <p>Full HD (1920 x 1080), 144Hz</p>
                                    </li>
                                    <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh cảm ứng
                                    <p>Kh&ocirc;ng c&oacute;</p>
                                    </li>
                                    <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                    <li>Thiết kế card
                                    <p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
                                    </li>
                                    <li>Card đồ họa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-gtx-1650-co-manh-kh-1201415" target="_blank">NVIDIA GeForce GTX1650 4GB</a></p>
                                    </li>
                                    <li>C&ocirc;ng nghệ &acirc;m thanh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-dts-tren-laptop-la-gi-1261821#dts-ultra-audio" target="_blank">DTS X:Ultra Audio</a></p>
                                    </li>
                                    <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                    <li>Cổng giao tiếp
                                    <p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">2 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516#usb-20" target="_blank">USB 2.0</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
                                    </li>
                                    <li>Kết nối kh&ocirc;ng d&acirc;y
                                    <p><a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a></p>
                                    </li>
                                    <li>Webcam
                                    <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
                                    </li>
                                    <li>T&iacute;nh năng kh&aacute;c
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">Đ&egrave;n b&agrave;n ph&iacute;m chuyển m&agrave;u RGB</a></p>
                                    </li>
                                    <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
                                    </li>
                                    <li>K&iacute;ch thước &amp; trọng lượng</li>
                                    <li>K&iacute;ch thước
                                    <p>D&agrave;i 359 mm - Rộng 256 mm - D&agrave;y 24.9 mm</p>
                                    </li>
                                    <li>Trọng lượng
                                    <p>2.3 kg</p>
                                    </li>
                                    <li>Chất liệu
                                    <p>Vỏ nhựa - nắp lưng bằng kim loại</p>
                                    </li>
                                    <li>Th&ocirc;ng tin kh&aacute;c</li>
                                    <li>Loại PIN
                                    <p>PIN liền</p>
                                    </li>
                                    <li>Th&ocirc;ng tin Pin
                                    <p>3-cell Li-ion, 48 Wh</p>
                                    </li>
                                    <li>Hệ điều h&agrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                    </li>
                                    <li>Thời điểm ra mắt
                                    <p>2020</p>
                                    </li>
                                </ul>
                                ',
            'details'=> '<h2>Kiểu d&aacute;ng mạnh mẽ, c&aacute; t&iacute;nh ph&ugrave; hợp cho c&aacute;c game thủ</h2>
                            <p>M&aacute;y c&oacute; lớp vỏ ngo&agrave;i bằng nhựa chắc tay c&ugrave;ng nắp lưng bằng kim loại m&agrave;u x&aacute;m sang trọng c&ugrave;ng với biểu tượng gaming đặc trưng của TUF. Một chiếc&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;nhưng trọng lượng chỉ&nbsp;<strong>2.3 kg</strong>&nbsp;l&agrave; một trong những điểm bạn sẽ bất ngờ khi t&igrave;m hiểu về chiếc m&aacute;y t&iacute;nh n&agrave;y. Bạn sẽ dễ d&agrave;ng cho v&agrave;o balo để mang theo trong những chuyến đi c&ocirc;ng t&aacute;c, c&agrave; ph&ecirc;, họp mặt chiến game c&ugrave;ng bạn b&egrave;,...</p>
                            <p><a href="https://www.thegioididong.com/images/44/236022/asus-tuf-gaming-fx506lh-02.jpg" onclick="return false;"><img alt="Laptop Asus TUF Gaming FX506LH i5 (HN002T) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/236022/asus-tuf-gaming-fx506lh-02.jpg" /></a></p>
                            <p>C&ocirc;ng nghệ&nbsp;<strong>HyperCool</strong>&nbsp;độc quyền bao gồm hệ thống Anti-Dust Cooling c&oacute; thể tuỳ chỉnh 3 chế độ quạt kh&aacute;c nhau gi&uacute;p tăng cường khả năng tản nhiệt của chiếc laptop n&agrave;y.</p>
                            <p><a href="https://www.thegioididong.com/images/44/236022/asus-tuf-gaming-fx506lh-9.jpg" onclick="return false;"><img alt="Laptop Asus TUF Gaming FX506LH i5 (HN002T) - Tản nhiệt" src="https://cdn.tgdd.vn/Products/Images/44/236022/asus-tuf-gaming-fx506lh-9.jpg" /></a></p>
                            <p>M&aacute;y c&ograve;n đạt chuẩn&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 - 802.11ax</a>&nbsp;cho tốc độ truyền tải đến&nbsp;<strong>10.000 Mbps</strong>&nbsp;v&agrave; chuẩn&nbsp;<strong>Bluetooth v5.0</strong>&nbsp;cho tốc độ kết nối kh&ocirc;ng d&acirc;y ổn định, tải dữ liệu nhanh ch&oacute;ng.</p>
                            <p>C&aacute;c cổng kết nối như: USB 3.2, HDMI, LAN (RJ45), USB Type-C, jack sạc, jack tai nghe đều được đặt b&ecirc;n cạnh tr&aacute;i của m&aacute;y gi&uacute;p truyền tải dữ liệu qua c&aacute;c thiết bị ngoại vi thuận tiện m&agrave; kh&ocirc;ng l&agrave;m ảnh hưởng đến kh&ocirc;ng gian d&ugrave;ng chuột ph&iacute;a b&ecirc;n tay phải.</p>
                            <p><a href="https://www.thegioididong.com/images/44/236022/asus-tuf-gaming-fx506lh-11.jpg" onclick="return false;"><img alt="Laptop Asus TUF Gaming FX506LH i5 (HN002T) - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/236022/asus-tuf-gaming-fx506lh-11.jpg" /></a></p>
                            <h3>Tr&agrave;n đầy cảm hứng chiến game với b&agrave;n ph&iacute;m thiết kế độc đ&aacute;o</h3>
                            <p><a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;c&oacute; h&agrave;nh tr&igrave;nh ph&iacute;m&nbsp;<strong>1.8 mm</strong>, kh&ocirc;ng gian ph&iacute;m rộng r&atilde;i v&agrave; tuổi thọ l&ecirc;n đến&nbsp;<strong>20 triệu</strong>&nbsp;lần nhấn, đủ cho nhiều năm l&agrave;m việc v&agrave; chơi game. C&ocirc;ng nghệ&nbsp;<strong>Overstroke</strong>&nbsp;độc quyền gi&uacute;p r&uacute;t ngắn h&agrave;nh tr&igrave;nh k&iacute;ch hoạt ph&iacute;m, tăng số lượng chuyển động ph&iacute;m mỗi ph&uacute;t, gi&uacute;p th&ocirc;ng tin ghi lại nhanh hơn v&agrave; tiện lợi hơn.</p>
                            <p><a href="https://www.thegioididong.com/images/44/236022/asus-tuf-gaming-fx506lh-7.jpg" onclick="return false;"><img alt="Laptop Asus TUF Gaming FX506LH i5 (HN002T) - Bàn phím" src="https://cdn.tgdd.vn/Products/Images/44/236022/asus-tuf-gaming-fx506lh-7.jpg" /></a></p>
                            <p>B&ecirc;n cạnh đ&oacute;, b&agrave;n ph&iacute;m c&ograve;n sở hữu giải đ&egrave;n&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">Led RGB</a>&nbsp;chuyển m&agrave;u ấn tượng c&ugrave;ng thiết kế cụm ph&iacute;m&nbsp;<strong>WASD</strong>&nbsp;nổi bật so với những ph&iacute;m c&ograve;n lại gi&uacute;p bạn c&oacute; th&ecirc;m hứng th&uacute; để thể hiện những kĩ năng th&agrave;nh thạo tr&ecirc;n game.</p>
                            <p><a href="https://www.thegioididong.com/images/44/236022/asus-tuf-gaming-fx506lh-08.jpg" onclick="return false;"><img alt="Asus TUF Gaming FX506LH i5 10300H (HN002T) - Đèn LED RGB" src="https://cdn.tgdd.vn/Products/Images/44/236022/asus-tuf-gaming-fx506lh-08.jpg" /></a></p>
                            <p>Nhờ được trang bị chip Core i5 gen 10 v&agrave; card rời GTX 1650 4GB,... Asus TUF Gaming FX506LH c&oacute; hiệu năng mạnh mẽ, chiến game tốt, ph&ugrave; hợp với những bạn trẻ đam m&ecirc; game, c&oacute; nhu cầu giải tr&iacute; c&ugrave;ng bạn b&egrave; sau những giờ l&agrave;m việc căng thẳng. Đối với d&acirc;n thiết kế đồ hoạ đ&ograve;i hỏi cấu h&igrave;nh m&aacute;y cao th&igrave; đ&acirc;y cũng l&agrave; một sự lựa chọn tốt.</p>
                            ',
            'slug'=>Str::slug('Asus TUF Gaming FX506LH i5 10300H/8GB/512GB/144Hz/4GB GTX1650/Win10 (HN002T)','-').'.aspx',
            'created_at'=>now(),
        ]);

        DB::table('products')->insert([
        'name'=>'Dell G3 15 3500 i5 10300H/8GB/256GB+1TB/120Hz/4GB GTX1650/Win10 (70223130)',
        'price'=>22490000,
        'old_price'=>23890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-082721-042709-600x600.jpg',
        'rate'=>400,
        'category_id'=>4,
        'brand_id'=>3,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Dell G3 15 3500 i5 10300H/8GB/256GB+1TB/120Hz/4GB GTX1650/Win10 (70223130)</h2>
                        <p><img src="https://cdn.tgdd.vn/Products/Images/44/232481/Slider/dell-g3-15-3500-i5-70223130-110121-0840324.jpg" /></p>
                        <p><a href="https://www.thegioididong.com/laptop/dell-g3-15-3500-i5-70223130" target="_blank">Laptop Dell G3 15 3500 i5 (70223130)</a>&nbsp;l&agrave; chiếc laptop gaming thuộc series G của nh&agrave; Dell với thiết kế cực ngầu v&agrave; hiệu năng mạnh mẽ, hứa hẹn sẽ l&agrave; người bạn đồng h&agrave;nh của c&aacute;c game thủ trong mọi cuộc chiến.&nbsp;</p>
                        <h3>Thiết kế mạnh mẽ c&aacute; t&iacute;nh</h3>
                        <p>Dell G3 15 3500 i5 c&oacute; thiết kế mạnh mẽ với c&aacute;c đường cắt vu&ocirc;ng vức, tone xanh - đen cực k&igrave; nổi bật. M&aacute;y c&oacute; độ d&agrave;y&nbsp;<strong>28.18 mm</strong>&nbsp;v&agrave; trọng lượng&nbsp;<strong>2.56 kg</strong>, kh&aacute; gọn nhẹ đối với một chiếc laptop gaming.</p>
                        <p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114621-084624.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114621-084624.jpg" /></a></p>
                        <p>B&agrave;n ph&iacute;m tr&ecirc;n Dell G3 c&oacute;&nbsp;<strong>đ&egrave;n nền</strong>&nbsp;m&agrave;u xanh vừa tiện lợi cho việc g&otilde; ph&iacute;m ở nơi thiếu &aacute;nh s&aacute;ng vừa tr&ocirc;ng ấn tượng hơn. Phần Touchpad được đặt lệch hẳn sang một b&ecirc;n với một đường viền xanh chạy dọc bắt mắt.</p>
                        <p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114521-084508.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - Đèn bàn phím" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114521-084508.jpg" /></a></p>
                        <p><a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;c&ograve;n c&oacute;&nbsp;<strong>cảm biến v&acirc;n tay&nbsp;</strong>t&iacute;ch hợp tr&ecirc;n ph&iacute;m nguồn cực tiện lợi để mở m&aacute;y v&agrave; tăng khả năng bảo mật cho m&aacute;y. M&aacute;y cũng trang bị một Webcam HD tiện lợi cho c&aacute;c cuộc gọi nh&oacute;m, hội họp hoặc c&aacute;c streamer.&nbsp;</p>
                        <p><a href="https://www.thegioididong.com/laptop-dell" target="_blank">Laptop Dell</a>&nbsp;gaming được trang bị đa dạng cổng kết nối tiện lợi như:&nbsp;<strong>USB 3.2</strong>,&nbsp;<strong>HDMI</strong>,&nbsp;<strong>LAN (RJ45)</strong>. Ngo&agrave;i ra, chuẩn&nbsp;<strong>Bluetooth v5.0&nbsp;</strong>v&agrave;&nbsp;<strong>Wi-Fi 802.11 a/b/g/n/ac</strong>&nbsp;gi&uacute;p c&aacute;c kết nối kh&ocirc;ng d&acirc;y mượt m&agrave;, ổn định để chơi game online thoải m&aacute;i.</p>
                        <p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114521-084518.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - Kết nối" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114521-084518.jpg" /></a></p>
                        <h3>&nbsp;</h3>
                        ',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Dell G3 15 3500 i5 10300H/8GB/256GB+1TB/120Hz/4GB GTX1650/Win10 (70223130)</h3>
                                <p><img alt="Thông số kỹ thuật 232481" src="https://cdn.tgdd.vn/Products/Images/44/232481/Kit/dell-g3-15-3500-i5-70223130-note.jpg" style="height:430px; width:500px" /></p>
                                <ul>
                                    <li>﻿</li>
                                    <li>Bộ xử l&yacute;</li>
                                    <li>C&ocirc;ng nghệ CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i5 Ice Lake</a></p>
                                    </li>
                                    <li>Loại CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-i5-10300h-uu-nhuoc-diem-la-1263751" target="_blank">10300H</a></p>
                                    </li>
                                    <li>Tốc độ CPU
                                    <p>2.50 GHz</p>
                                    </li>
                                    <li>Tốc độ tối đa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.5 GHz</a></p>
                                    </li>
                                    <li>Bộ nhớ RAM, Ổ cứng</li>
                                    <li>RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
                                    </li>
                                    <li>Loại RAM
                                    <p>DDR4 2 khe (1 khe 4GB + 1 khe 4GB)</p>
                                    </li>
                                    <li>Tốc độ Bus RAM
                                    <p>2933 MHz</p>
                                    </li>
                                    <li>Hỗ trợ RAM tối đa
                                    <p>16 GB</p>
                                    </li>
                                    <li>Ổ cứng
                                    <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD 256GB NVMe PCIe</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/hdd-la-gi-922791" target="_blank">HDD: 1 TB</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh</li>
                                    <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                    <p>15.6 inch</p>
                                    </li>
                                    <li>Độ ph&acirc;n giải
                                    <p>Full HD (1920 x 1080), 120Hz</p>
                                    </li>
                                    <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                    <p>WVA&nbsp;,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh cảm ứng
                                    <p>Kh&ocirc;ng c&oacute;</p>
                                    </li>
                                    <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                    <li>Thiết kế card
                                    <p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
                                    </li>
                                    <li>Card đồ họa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-gtx-1650-co-manh-kh-1201415" target="_blank">NVIDIA GeForce GTX1650 4GB</a></p>
                                    </li>
                                    <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                    <li>Cổng giao tiếp
                                    <p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">3 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a></p>
                                    </li>
                                    <li>Kết nối kh&ocirc;ng d&acirc;y
                                    <p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
                                    </li>
                                    <li>Khe đọc thẻ nhớ
                                    <p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">SD</a></p>
                                    </li>
                                    <li>Webcam
                                    <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
                                    </li>
                                    <li>T&iacute;nh năng kh&aacute;c
                                    <p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
                                    </li>
                                    <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
                                    </li>
                                    <li>K&iacute;ch thước &amp; trọng lượng</li>
                                    <li>K&iacute;ch thước
                                    <p>D&agrave;i 364.46 mm - Rộng 254 mm - D&agrave;y 28.18 mm</p>
                                    </li>
                                    <li>Trọng lượng
                                    <p>2.56 kg</p>
                                    </li>
                                    <li>Chất liệu
                                    <p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
                                    </li>
                                    <li>Th&ocirc;ng tin kh&aacute;c</li>
                                    <li>Loại PIN
                                    <p>PIN liền</p>
                                    </li>
                                    <li>Th&ocirc;ng tin Pin
                                    <p>3-cell Li-ion, 51 Wh</p>
                                    </li>
                                    <li>Hệ điều h&agrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                    </li>
                                    <li>Thời điểm ra mắt
                                    <p>2020</p>
                                    </li>
                                </ul>
                                ',
        'details'=> '<h2>Hiệu năng cao, chiến game cực đ&atilde;</h2>
                        <p>Dell G3 trang bị chip Intel&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank"><strong>Core i5</strong></a>&nbsp;Ice Lake d&ograve;ng H&nbsp;<strong><a href="https://www.thegioididong.com/laptop-cpu-intel-gen-10" target="_blank">thế hệ 10</a></strong>&nbsp;với xung nhịp cơ bản&nbsp;<strong>2.50 GHz</strong>&nbsp;v&agrave; tốc độ tối đa l&ecirc;n đến&nbsp;<strong>4.5 GHz</strong>&nbsp;nhờ c&ocirc;ng nghệ &eacute;p xung&nbsp;<strong>Turbo Boost</strong>&nbsp;mang lại hiệu năng mạnh mẽ thỏa sức giải tr&iacute; với c&aacute;c tựa game hot đồ họa cao, mượt m&agrave; v&agrave; tiết kiệm điện năng.</p>
                        <p>Bộ nhớ&nbsp;<a href="https://www.thegioididong.com/laptop-8-gb" target="_blank"><strong>RAM 8 GB</strong></a>&nbsp;(c&oacute; thể n&acirc;ng cấp tối đa&nbsp;<strong>16 GB</strong>) cho khả năng đa nhiệm tốt, vừa l&agrave;m việc vừa nghe nhạc hay c&oacute; thể mở nhiều tab Chrome c&ugrave;ng l&uacute;c.</p>
                        <p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114521-084539.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - Hiệu năng" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114521-084539.jpg" /></a></p>
                        <p>Tốc độ m&aacute;y được cải thiện đ&aacute;ng kể khi vừa trang bị&nbsp;<strong><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank">ổ cứng SSD</a></strong>&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-256-gb" target="_blank">256 GB</a>&nbsp;tốc độ cao vừa c&oacute; ổ cứng HDD 1 TB tiện lợi cho việc lưu trữ.</p>
                        <p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114621-084602.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114621-084602.jpg" /></a></p>
                        <p><a href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank"><strong>Card đồ họa rời</strong></a>&nbsp;<strong>NVIDIA GeForce GTX 1650 4 GB</strong>&nbsp;với bộ vi xử l&yacute; đa luồng mạnh mẽ v&agrave; kiến tr&uacute;c Turing n&acirc;ng hiệu năng đồ họa l&ecirc;n một tầm cao mới. Những tựa game y&ecirc;u cầu đồ họa cao sẽ được thể hiện chi tiết, kh&ocirc;ng giật lag, trải nghiệm thiết kế 2D hay chỉnh sửa video cũng rất mượt m&agrave;.</p>
                        <p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114521-084528.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - Chơi game" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114521-084528.jpg" /></a></p>
                        <h3>Giải tr&iacute; m&atilde;n nh&atilde;n với m&agrave;n h&igrave;nh 120 Hz</h3>
                        <p>M&agrave;n h&igrave;nh tr&ecirc;n Dell G3 c&oacute; k&iacute;ch thước&nbsp;<strong><a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a></strong>, 2 cạnh b&ecirc;n được thiết kế mỏng cho trải nghiệm quan s&aacute;t thoải m&aacute;i hơn.&nbsp;Độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;gi&uacute;p mọi thứ trở n&ecirc;n sống động, ch&acirc;n thực để xem phim, chơi game đều đ&atilde; mắt. Tần số qu&eacute;t l&ecirc;n đến<strong>&nbsp;120Hz</strong>&nbsp;gi&uacute;p h&igrave;nh ảnh hiển thị mượt m&agrave; hơn, loại bỏ hiện tượng giật x&eacute; h&igrave;nh khi chơi những tựa game y&ecirc;u cầu đồ họa cao.&nbsp;</p>
                        <p>M&agrave;n h&igrave;nh c&ograve;n được trang bị c&ocirc;ng nghệ chống ch&oacute;i&nbsp;<strong>Anti Glare</strong>&nbsp;gi&uacute;p hiển thị ổn định ngay cả khi sử dụng ở điều kiện &aacute;nh s&aacute;ng phức tạp.</p>
                        <p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114521-084549.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114521-084549.jpg" /></a></p>
                        <p>Dải loa k&eacute;p với &acirc;m thanh&nbsp;<strong>Realtek Nahimic 3D Audio</strong>&nbsp;t&aacute;i hiện mọi &acirc;m thanh, tiếng động, nền nhạc trong game cực k&igrave; sống động, dễ d&agrave;ng ph&aacute;t hiện kẻ địch từ mọi hướng.</p>
                        <p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114421-084459.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - Âm thanh" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114421-084459.jpg" /></a></p>
                        <p>Thiết kế 2 quạt k&eacute;p cho ph&eacute;p bạn chơi game kh&ocirc;ng bị gi&aacute;n đoạn v&agrave; đảm bảo nhiệt độ hệ thống lu&ocirc;n m&aacute;t mẻ để hiệu năng đạt mức cao nhất.&nbsp;</p>
                        <p>Laptop Dell G3 15 3500 i5 (70223130) l&agrave; d&ograve;ng&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;tầm trung với thiết kế đậm vẻ cả t&iacute;nh v&agrave; hiệu năng khỏe, ph&ugrave; hợp với c&aacute;c game thủ trẻ hoặc người vừa l&agrave;m văn ph&ograve;ng, đồ họa vừa muốn giải tr&iacute; với c&aacute;c tựa game.</p>
                        ',
        'slug'=>Str::slug('Dell G3 15 3500 i5 10300H/8GB/256GB+1TB/120Hz/4GB GTX1650/Win10 (70223130)','-').'.aspx',
        'created_at'=>now(),
        ]);

        DB::table('products')->insert([
        'name'=>'Asus Gaming Rog Strix G512 i5 10300H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (IAL013T)',
        'price'=>24490000,
        'old_price'=>26890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/225940/asus-gaming-rog-strix-g512-i5-ial031t-225940-225940-600x600.jpg',
        'rate'=>400,
        'category_id'=>4,
        'brand_id'=>2,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Asus Gaming Rog Strix G512 i5 10300H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (IAL013T)</h2>
                        <p><img src="https://cdn.tgdd.vn/Products/Images/44/225940/Slider/vi-vn-asus-gaming-rog-strix-g512-i5-ial031t-thumbvideo.jpg" /></p>
                        <p><a href="https://www.thegioididong.com/laptop/asus-gaming-rog-strix-g512-i5-ial013t" target="_blank">Laptop Asus Gaming ROG Strix G512 i5 (IAL013T)</a>&nbsp;mang đến ng&ocirc;n ngữ thiết kế hiện đại, cấu h&igrave;nh mạnh mẽ với vi xử l&iacute; gen 10 mới, card đồ họa rời GeForce GTX 1650Ti, chiến những tựa game nặng k&iacute; nhất.&nbsp;&nbsp;</p>
                        <h3>Mạnh mẽ, c&aacute; t&iacute;nh</h3>
                        <p><a href="https://www.thegioididong.com/laptop-asus" target="_blank">Asus</a>&nbsp;Gaming ROG Strix G512 được thiết kế theo xu hướng hiện đại nhưng vẫn giữ được vẻ mạnh mẽ đặc trưng của d&ograve;ng laptop gaming.&nbsp;</p>
                        <p>Họa tiết phay xước tương phản cắt ch&eacute;o tr&ecirc;n nắp lưng c&ugrave;ng với logo ROG s&aacute;ng b&oacute;ng tạo n&ecirc;n vẻ ngo&agrave;i đầy ấn tượng cho Rog Strix G512.&nbsp;</p>
                        <p>M&aacute;y c&oacute; trọng lượng&nbsp;<strong>2.3 kg</strong>&nbsp;v&agrave; độ d&agrave;y&nbsp;<strong>25.8 mm</strong>, kh&ocirc;ng qu&aacute; nặng hoặc cồng kềnh để bạn đem theo laptop đi học, đi l&agrave;m hằng ng&agrave;y.</p>
                        <p><a href="https://www.thegioididong.com/images/44/225940/asus-gaming-rog-strix-g512-i5-ial013t-thie%CC%82%CC%81t-ke%CC%82%CC%81.jpg" onclick="return false;"><img alt="Asus Gaming ROG Strix G512 được thiết kế theo xu hướng hiện đại " src="https://cdn.tgdd.vn/Products/Images/44/225940/asus-gaming-rog-strix-g512-i5-ial013t-thie%CC%82%CC%81t-ke%CC%82%CC%81.jpg" /></a></p>
                        <h3>Vi xử l&iacute; t&acirc;n tiến nhất&nbsp;</h3>
                        <p>Với con chip Intel&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank"><strong>Core i5</strong></a>&nbsp;10300H 4 nh&acirc;n 8 luồng, xung nhịp tối đa đạt 4.5 GHz, Asus Rog cho tốc độ xử l&iacute; nhanh v&agrave; mạnh, kể cả với c&aacute;c t&aacute;c vụ nặng hay c&aacute;c tựa game hot nhất hiện nay.</p>
                        <p><a href="https://www.thegioididong.com/laptop?g=8-gb" target="_blank"><strong>RAM 8 GB</strong></a>&nbsp;đa nhiệm mượt m&agrave;, kh&ocirc;ng g&acirc;y hiện tượng giật lắc khi mở nhiều ứng dụng c&ugrave;ng l&uacute;c. M&aacute;y cũng hỗ trợ n&acirc;ng cấp RAM tối đa l&ecirc;n 32 GB để người d&ugrave;ng c&oacute; được trải nghiệm tốt hơn.&nbsp;</p>
                        <p><a href="https://www.thegioididong.com/images/44/225940/asus-gaming-rog-strix-g512-i5-ial013t-hie%CC%A3%CC%82u-na%CC%86ng.jpg" onclick="return false;"><img alt="Asus Gaming ROG Strix G512 | Card đồ họa rời khủng NVIDIA GeForce GTX 1650Ti 4GB " src="https://cdn.tgdd.vn/Products/Images/44/225940/asus-gaming-rog-strix-g512-i5-ial013t-hie%CC%A3%CC%82u-na%CC%86ng.jpg" /></a></p>
                        <p><a href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank">Card đồ họa rời</a>&nbsp;khủng&nbsp;<a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-gtx-1650-co-manh-kh-1201415" target="_blank"><strong>NVIDIA GeForce GTX 1650Ti 4GB</strong></a>&nbsp;đem đến cho Asus Rog khả năng xử l&iacute; đồ họa cực k&igrave; mượt m&agrave;, sử dụng chuy&ecirc;n nghiệp Photoshop, Ai hay dựng Vlog, chỉnh sửa video kh&ocirc;ng qu&aacute; phức tạp. C&aacute;c tựa game y&ecirc;u cầu đồ họa cao cũng kh&ocirc;ng l&agrave;m kh&oacute; được chiếc m&aacute;y n&agrave;y.</p>
                        <p><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank">Ổ cứng&nbsp;</a><strong><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank">SSD</a>&nbsp;512 GB M.2 PCIe</strong>&nbsp;cho tốc độ đọc ghi nhanh, mở ứng dụng trong t&iacute;ch tắc. Đặc biệt, m&aacute;y hỗ trợ th&ecirc;m đến 2 khe cắm SSD M.2 PCIe cho người d&ugrave;ng n&acirc;ng cấp thoải m&aacute;i.&nbsp;</p>
                        <h3>&nbsp;</h3>
                        ',
                                'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Asus Gaming Rog Strix G512 i5 10300H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (IAL013T)</h3>
                            <p><img alt="Thông số kỹ thuật 225940" src="https://cdn.tgdd.vn/Products/Images/44/225940/Kit/asus-gaming-rog-strix-g512-i5-ial013t-note.jpg" style="height:430px; width:500px" /></p>
                            <ul>
                                <li>﻿</li>
                                <li>Bộ xử l&yacute;</li>
                                <li>C&ocirc;ng nghệ CPU
                                <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i5 Comet Lake</a></p>
                                </li>
                                <li>Loại CPU
                                <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-i5-10300h-uu-nhuoc-diem-la-1263751" target="_blank">10300H</a></p>
                                </li>
                                <li>Tốc độ CPU
                                <p>2.50 GHz</p>
                                </li>
                                <li>Tốc độ tối đa
                                <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.5 GHz</a></p>
                                </li>
                                <li>Bộ nhớ RAM, Ổ cứng</li>
                                <li>RAM
                                <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
                                </li>
                                <li>Loại RAM
                                <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
                                </li>
                                <li>Tốc độ Bus RAM
                                <p>2933 MHz</p>
                                </li>
                                <li>Hỗ trợ RAM tối đa
                                <p>32 GB</p>
                                </li>
                                <li>Ổ cứng
                                <p>Hỗ trợ th&ecirc;m 2 khe cắm SSD M.2 PCIe&nbsp;,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a></p>
                                </li>
                                <li>M&agrave;n h&igrave;nh</li>
                                <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                <p>15.6 inch</p>
                                </li>
                                <li>Độ ph&acirc;n giải
                                <p>Full HD (1920 x 1080), 144Hz</p>
                                </li>
                                <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                <p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a></p>
                                </li>
                                <li>M&agrave;n h&igrave;nh cảm ứng
                                <p>Kh&ocirc;ng c&oacute;</p>
                                </li>
                                <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                <li>Thiết kế card
                                <p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
                                </li>
                                <li>Card đồ họa
                                <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-card-do-hoa-nvidia-geforce-gtx-1650ti-uu-nhuoc-1284193" target="_blank">NVIDIA GeForce GTX 1650Ti 4GB</a></p>
                                </li>
                                <li>C&ocirc;ng nghệ &acirc;m thanh
                                <p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-smart-ampart-amp-tren-laptop-la-gi-1273792" target="_blank">C&ocirc;ng nghệ Smart AMP</a></p>
                                </li>
                                <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                <li>Cổng giao tiếp
                                <p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">3 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
                                </li>
                                <li>Kết nối kh&ocirc;ng d&acirc;y
                                <p><a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-bluetooth-51-tren-laptop-la-gi-1273789" target="_blank">Bluetooth 5.1</a></p>
                                </li>
                                <li>Webcam
                                <p>Kh&ocirc;ng t&iacute;ch hợp</p>
                                </li>
                                <li>T&iacute;nh năng kh&aacute;c
                                <p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">Đ&egrave;n b&agrave;n ph&iacute;m chuyển m&agrave;u RGB</a></p>
                                </li>
                                <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                <p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
                                </li>
                                <li>K&iacute;ch thước &amp; trọng lượng</li>
                                <li>K&iacute;ch thước
                                <p>D&agrave;i 360 mm - Rộng 275 mm - D&agrave;y 25.8 mm</p>
                                </li>
                                <li>Trọng lượng
                                <p>2.3 kg</p>
                                </li>
                                <li>Chất liệu
                                <p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
                                </li>
                                <li>Th&ocirc;ng tin kh&aacute;c</li>
                                <li>Model Adapter sạc
                                <p>A18-150P1A</p>
                                </li>
                                <li>Loại PIN
                                <p>PIN liền</p>
                                </li>
                                <li>Th&ocirc;ng tin Pin
                                <p><a href="https://www.thegioididong.com/hoi-dap/pin-li-po-la-gi-pin-li-ion-la-gi-pin-3-cell-6-ce-1190023" target="_blank">Li-Ion 3 cell</a></p>
                                </li>
                                <li>Hệ điều h&agrave;nh
                                <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                </li>
                                <li>Thời điểm ra mắt
                                <p>2020</p>
                                </li>
                            </ul>
                            ',
        'details'=> '<h2>M&agrave;n h&igrave;nh benzel&nbsp;<a href="https://www.thegioididong.com/laptop-vien-man-hinh-mong" target="_blank">viền mỏng</a>, hiển thị sống động từng chi tiết</h2>
                        <p><a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;được trang bị m&agrave;n h&igrave;nh&nbsp;<a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank"><strong>15.6 inch</strong></a>&nbsp;độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;cung cấp h&igrave;nh ảnh ch&acirc;n thực, độ n&eacute;t cao.&nbsp;</p>
                        <p>Thiết kế&nbsp;<a href="https://www.thegioididong.com/laptop-vien-man-hinh-mong" target="_blank">viền m&agrave;n h&igrave;nh si&ecirc;u mỏng&nbsp;</a>bezel c&ugrave;ng c&ocirc;ng nghệ IPS cho g&oacute;c nh&igrave;n rộng, mang đến kh&ocirc;ng gian giải tr&iacute; lớn, cho trải nghiệm nh&igrave;n đắm ch&igrave;m, chơi game thoải m&aacute;i m&agrave; kh&ocirc;ng bị ph&acirc;n t&acirc;m.</p>
                        <p><a href="https://www.thegioididong.com/images/44/225940/asus-gaming-rog-strix-g512-i5-ial013t-144hz.jpg" onclick="return false;"><img alt="Asus Gaming ROG Strix G512 | Màn hình benzel viền mỏng" src="https://cdn.tgdd.vn/Products/Images/44/225940/asus-gaming-rog-strix-g512-i5-ial013t-144hz.jpg" /></a></p>
                        <p>Tần số qu&eacute;t m&agrave;n h&igrave;nh&nbsp;<strong>144 Hz</strong>&nbsp;sẽ l&agrave; lợi thế cho bạn trong c&aacute;c cuộc chiến, h&igrave;nh ảnh hiển thị ch&iacute;nh x&aacute;c, chuyển động mượt m&agrave;, tr&aacute;nh t&igrave;nh trạng giật x&eacute; h&igrave;nh để đem đến cho game thủ những trải nghiệm tuyệt vời nhất.</p>
                        <p>C&ocirc;ng nghệ&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-smart-ampart-amp-tren-laptop-la-gi-1273792" target="_blank">Smart AMP</a>&nbsp;mang đến &acirc;m th&agrave;nh v&ograve;m chất lượng cao, thể hiện những &acirc;m thanh nhỏ một c&aacute;ch chi tiết, dễ d&agrave;ng ph&aacute;t hiện kẻ địch từ mọi hướng.&nbsp;</p>
                        <p><a href="https://www.thegioididong.com/images/44/225940/asus-gaming-rog-strix-g512-i5-ial013t-a%CC%82mm-thanh.jpg" onclick="return false;"><img alt="Asus Gaming ROG Strix G512 | Công nghệ Smart AMP" src="https://cdn.tgdd.vn/Products/Images/44/225940/asus-gaming-rog-strix-g512-i5-ial013t-a%CC%82mm-thanh.jpg" /></a></p>
                        <p>Khả năng kết nối cũng l&agrave; một điểm mạnh của chiếc&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;n&agrave;y. Với 3 cổng&nbsp;<a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">USB 3.2</a>, HDMI, USB Type-C v&agrave; cổng mạng LAN, bạn c&oacute; thể nối m&aacute;y với nhiều thiết bị, hỗ trợ xuất h&igrave;nh ảnh ra m&agrave;n h&igrave;nh 4K.</p>
                        <p><a href="https://www.thegioididong.com/images/44/225940/asus-gaming-rog-strix-g512-i5-ial013t-wifi-u-s-b.jpg" onclick="return false;"><img alt="Khả năng kết nối cũng là một điểm mạnh của chiếc laptop Asus Gaming Rog Strix" src="https://cdn.tgdd.vn/Products/Images/44/225940/asus-gaming-rog-strix-g512-i5-ial013t-wifi-u-s-b.jpg" /></a></p>
                        <p>B&agrave;n ph&iacute;m c&oacute; đ&egrave;n nền chuyển m&agrave;u RGB l&agrave; một đặc trưng nổi bật tr&ecirc;n d&ograve;ng Asus Rog, bạn ho&agrave;n to&agrave;n c&oacute; thể t&ugrave;y chỉnh m&agrave;u b&agrave;n ph&iacute;m theo &yacute; muốn của m&igrave;nh.&nbsp;</p>
                        <p>Cụm ph&iacute;m WASD được l&agrave;m nổi bật để dễ thao t&aacute;c hơn khi chơi game.&nbsp;</p>
                        <p>Với độ bền hơn 20 triệu lần bấm, Asus ROG c&oacute; thể đồng h&agrave;nh c&ugrave;ng bạn trong thời gian d&agrave;i m&agrave; vẫn đảm bảo độ ch&iacute;nh x&aacute;c.&nbsp;</p>
                        <p><a href="https://www.thegioididong.com/images/44/225940/asus-gaming-rog-strix-g512-i5-ial013t-ba%CC%80n-phi%CC%81m.jpg" onclick="return false;"><img alt="Asus Gaming ROG Strix G512 | Bàn phím có đèn nền" src="https://cdn.tgdd.vn/Products/Images/44/225940/asus-gaming-rog-strix-g512-i5-ial013t-ba%CC%80n-phi%CC%81m.jpg" /></a></p>
                        <h3>Hệ thống tản nhiệt th&ocirc;ng minh</h3>
                        <p>Asus trang bị cho m&aacute;y hệ thống tản nhiệt hiện đại kết hợp với phần mềm ROG Armory Crate chuyển đổi liền mạch giữa c&aacute;c chế độ vận h&agrave;nh.</p>
                        <p>Hệ thống quạt k&eacute;p 83 c&aacute;nh quạt gi&uacute;p tăng luồng kh&iacute; v&agrave; l&aacute; tản nhiệt si&ecirc;u mỏng mở rộng diện t&iacute;ch bề mặt để tản nhiệt cho khả năng l&agrave;m m&aacute;t nhanh, tối ưu hiệu suất l&agrave;m việc cho m&aacute;y.</p>
                        <p><a href="https://www.thegioididong.com/images/44/225940/asus-gaming-rog-strix-g512-i5-ial013t-ta%CC%89n-nhie%CC%A3%CC%82t.jpg" onclick="return false;"><img alt="Asus Gaming ROG Strix G512 | Hệ thống tản nhiệt thông minh" src="https://cdn.tgdd.vn/Products/Images/44/225940/asus-gaming-rog-strix-g512-i5-ial013t-ta%CC%89n-nhie%CC%A3%CC%82t.jpg" /></a></p>
                        <p>Laptop&nbsp;<a href="https://www.thegioididong.com/laptop-asus-rog" target="_blank">Asus ROG</a>&nbsp;Strix G512 i5 (IAL013T) đem đến một sức mạnh đ&aacute;ng gờm trong thiết kế hiện đại, tinh tế. Đ&acirc;y l&agrave; chiếc m&aacute;y t&iacute;nh x&aacute;ch tay chơi game đ&aacute;ng sở hữu cho c&aacute;c game thủ trẻ với những t&iacute;nh năng đầy nổi bật trong ph&acirc;n kh&uacute;c gi&aacute;.</p>
                        ',
        'slug'=>Str::slug('Asus Gaming Rog Strix G512 i5 10300H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (IAL013T)','-').'.aspx',
        'created_at'=>now(),
        ]);

        DB::table('products')->insert([
        'name'=>'Asus Gaming Rog Strix G512 i7 10750H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (IAL001T)',
        'price'=>28490000,
        'old_price'=>29890000,
        'quantity'=>50,
        'cover_image'=>'https://laptopaz.vn/media/lib/1761_71jVnEQUFXL._AC_SL1500_.jpg',
        'rate'=>400,
        'category_id'=>4,
        'brand_id'=>2,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Asus Gaming Rog Strix G512 i7 10750H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (IAL001T)</h2>
                        <p><img src="https://cdn.tgdd.vn/Products/Images/44/225687/Slider/vi-vn-asus-gaming-rog-strix-g512-i7-ial001t-thumbvideo.jpg" /></p>
                        <h2><a href="https://www.thegioididong.com/laptop/asus-gaming-rog-strix-g512-i7-ial001t" target="_blank">Laptop Asus Gaming Rog Strix G512 i7 (IAL001T)</a>&nbsp;l&agrave; chiếc laptop gaming c&oacute; cấu h&igrave;nh mạnh mẽ v&agrave; thiết kế hầm hố đậm chất gaming. M&aacute;y được trang bị chip Intel Core i7 thế hệ mới nhất c&ugrave;ng với m&agrave;n h&igrave;nh cao cấp chuẩn gaming gi&uacute;p bạn thỏa sức chiến những tựa game cực đỉnh.</h2>
                        <h3>Thiết kế mạnh mẽ đậm chất gaming</h3>
                        <p>Chiếc laptop&nbsp;<a href="https://www.thegioididong.com/laptop-asus-rog" target="_blank">Asus Gaming Rog</a>&nbsp;n&agrave;y c&oacute; thiết kế vỏ nhựa nặng<strong>&nbsp;2.3 kg</strong>&nbsp;kh&aacute; nhẹ so với c&aacute;c d&ograve;ng&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;kh&aacute;c.</p>
                        <p><a href="https://www.thegioididong.com/images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-183120-043149.jpg" onclick="return false;"><img alt="Laptop Asus Gaming Rog Strix G512 i7 (IAL001T) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-183120-043149.jpg" /></a></p>
                        <p>B&ecirc;n cạnh đ&oacute; b&agrave;n ph&iacute;m c&ograve;n được trang bị đ&egrave;n nền chuyển m&agrave;u tạo n&eacute;t độc đ&aacute;o v&agrave; gi&uacute;p bạn c&oacute; thể sử dụng m&aacute;y kể cả khi ở trong b&oacute;ng tối.</p>
                        <p><a href="https://www.thegioididong.com/images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-183220-043235.jpg" onclick="return false;"><img alt="Laptop Asus Gaming Rog Strix G512 i7 (IAL001T) - Đèn bàn phím" src="https://cdn.tgdd.vn/Products/Images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-183220-043235.jpg" /></a></p>
                        <h3>Cấu h&igrave;nh mạnh, chiến game thả ga</h3>
                        <p>Laptop sử dụng bộ vi xử l&yacute;&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Intel Core i7</a></strong>&nbsp;thế hệ thứ 10 cho bạn hiệu năng tốt hơn so với c&aacute;c d&ograve;ng thế hệ cũ. B&ecirc;n cạnh đ&oacute; m&aacute;y c&ograve;n được trang bị th&ecirc;m&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=8-gb" target="_blank">RAM 8 GB&nbsp;</a></strong>đ&atilde; nhiệm ổn định, bạn c&oacute; thể mở c&ugrave;ng l&uacute;c nhiều ứng dụng m&agrave; kh&ocirc;ng lo m&aacute;y bị đơ hay giật.</p>
                        <p><a href="https://www.thegioididong.com/images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-250820-0949260.jpg" onclick="return false;"><img alt="Laptop Asus Gaming Rog Strix G512 i7 (IAL001T) - Cấu hình" src="https://cdn.tgdd.vn/Products/Images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-250820-0949260.jpg" /></a></p>
                        <p><strong><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank">Ổ cứng&nbsp;SSD</a>&nbsp;512 GB</strong>&nbsp;cho tốc độ khởi động m&aacute;y, mở ứng dụng cực nhanh chỉ trong v&agrave;i gi&acirc;y. Ngo&agrave;i ra, c&ograve;n hỗ trợ th&ecirc;m 2 khe cắm SSD gi&uacute;p bạn dễ d&agrave;ng n&acirc;ng cấp bộ nhớ cho chiếc laptop của m&igrave;nh.</p>
                        <p><a href="https://www.thegioididong.com/images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-110821-090815.jpg" onclick="return false;"><img alt="Laptop Asus Gaming Rog Strix G512 i7 (IAL001T) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-110821-090815.jpg" /></a></p>
                        <h3>&nbsp;</h3>
                        ',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Asus Gaming Rog Strix G512 i7 10750H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (IAL001T)</h3>
                                <p><img alt="Thông số kỹ thuật 225687" src="https://cdn.tgdd.vn/Products/Images/44/225687/Kit/asus-gaming-rog-strix-g512-i7-ial001t-note.jpg" style="height:430px; width:500px" /></p>
                                <ul>
                                    <li>﻿</li>
                                    <li>Bộ xử l&yacute;</li>
                                    <li>C&ocirc;ng nghệ CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i7 Comet Lake</a></p>
                                    </li>
                                    <li>Loại CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-i7-10750h-uu-nhuoc-diem-la-1292162" target="_blank">10750H</a></p>
                                    </li>
                                    <li>Tốc độ CPU
                                    <p>2.60 GHz</p>
                                    </li>
                                    <li>Tốc độ tối đa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 5.0 GHz</a></p>
                                    </li>
                                    <li>Bộ nhớ RAM, Ổ cứng</li>
                                    <li>RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
                                    </li>
                                    <li>Loại RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
                                    </li>
                                    <li>Tốc độ Bus RAM
                                    <p>2933 MHz</p>
                                    </li>
                                    <li>Hỗ trợ RAM tối đa
                                    <p>32 GB</p>
                                    </li>
                                    <li>Ổ cứng
                                    <p>Hỗ trợ th&ecirc;m 2 khe cắm SSD M.2 PCIe&nbsp;,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh</li>
                                    <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                    <p>15.6 inch</p>
                                    </li>
                                    <li>Độ ph&acirc;n giải
                                    <p>Full HD (1920 x 1080), 144Hz</p>
                                    </li>
                                    <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh cảm ứng
                                    <p>Kh&ocirc;ng c&oacute;</p>
                                    </li>
                                    <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                    <li>Thiết kế card
                                    <p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
                                    </li>
                                    <li>Card đồ họa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-card-do-hoa-nvidia-geforce-gtx-1650ti-uu-nhuoc-1284193" target="_blank">NVIDIA GeForce GTX 1650Ti 4GB</a></p>
                                    </li>
                                    <li>C&ocirc;ng nghệ &acirc;m thanh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-smart-ampart-amp-tren-laptop-la-gi-1273792" target="_blank">C&ocirc;ng nghệ Smart AMP</a></p>
                                    </li>
                                    <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                    <li>Cổng giao tiếp
                                    <p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">3 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
                                    </li>
                                    <li>Kết nối kh&ocirc;ng d&acirc;y
                                    <p><a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-bluetooth-51-tren-laptop-la-gi-1273789" target="_blank">Bluetooth 5.1</a></p>
                                    </li>
                                    <li>Webcam
                                    <p>Kh&ocirc;ng t&iacute;ch hợp</p>
                                    </li>
                                    <li>T&iacute;nh năng kh&aacute;c
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">Đ&egrave;n b&agrave;n ph&iacute;m chuyển m&agrave;u RGB</a></p>
                                    </li>
                                    <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
                                    </li>
                                    <li>K&iacute;ch thước &amp; trọng lượng</li>
                                    <li>K&iacute;ch thước
                                    <p>D&agrave;i 360 mm - Rộng 275 mm - D&agrave;y 25.8 mm</p>
                                    </li>
                                    <li>Trọng lượng
                                    <p>2.3 Kg</p>
                                    </li>
                                    <li>Chất liệu
                                    <p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
                                    </li>
                                    <li>Th&ocirc;ng tin kh&aacute;c</li>
                                    <li>Model Adapter sạc
                                    <p>ADP-150CH B</p>
                                    </li>
                                    <li>Loại PIN
                                    <p>PIN liền</p>
                                    </li>
                                    <li>Th&ocirc;ng tin Pin
                                    <p><a href="https://www.thegioididong.com/hoi-dap/pin-li-po-la-gi-pin-li-ion-la-gi-pin-3-cell-6-ce-1190023" target="_blank">Li-Ion 3 cell</a></p>
                                    </li>
                                    <li>Hệ điều h&agrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                    </li>
                                    <li>Thời điểm ra mắt
                                    <p>2020</p>
                                    </li>
                                </ul>
                                ',
        'details'=> '<h2>N&acirc;ng t&acirc;m giải tr&iacute; với card đồ họa mạnh mẽ</h2>
                        <p>Với card đồ họa rời&nbsp;<a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-gtx-1650-co-manh-kh-1201415" target="_blank"><strong>NVIDIA GeForce GTX 1650Ti 4 GB</strong></a>&nbsp;bạn c&oacute; thể chơi c&aacute;c tựa game c&oacute; cấu h&igrave;nh khủng như: Far Cry 5, Just Cause, Project Cars,... hay sử dụng c&aacute;c phần mềm thiết kế như: Adobe Photoshop, Ai, Premiere,...</p>
                        <p><a href="https://www.thegioididong.com/images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-043020-093006.jpg" onclick="return false;"><img alt="Asus Gaming Rog Strix G512 i7 (IAL001T) - NVIDIA GeForce GTX 1650Ti 4GB" src="https://cdn.tgdd.vn/Products/Images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-043020-093006.jpg" /></a></p>
                        <h3>M&agrave;n h&igrave;nh lớn, h&igrave;nh ảnh chất lượng cao</h3>
                        <p>M&aacute;y được trang bị m&agrave;n h&igrave;nh<strong>&nbsp;<a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a></strong>&nbsp;độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;cho h&igrave;nh ảnh hiển thị sắc n&eacute;t n&acirc;ng cao trải nghiệm h&igrave;nh ảnh khi chơi game. C&ocirc;ng nghệ<strong>&nbsp;IPS</strong>&nbsp;cho g&oacute;c nh&igrave;n si&ecirc;u rộng th&aacute;ch thức mọi vị tr&iacute; trong khi chơi game.</p>
                        <p>Viền m&agrave;n h&igrave;nh được thiết kế mỏng để c&aacute;c game thủ c&oacute; được trải nghiệm chơi game ch&igrave;m đắm v&agrave; đ&atilde; mắt nhất.</p>
                        <p><a href="https://www.thegioididong.com/images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-110921-090945.jpg" onclick="return false;"><img alt="Laptop Asus Gaming Rog Strix G512 i7 (IAL001T) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-110921-090945.jpg" /></a></p>
                        <h3>N&acirc;ng tầm giải tr&iacute; với &acirc;m thanh cực đỉnh</h3>
                        <p><a href="https://www.thegioididong.com/laptop-asus" target="_blank">Laptop Asus</a>&nbsp;sở hữu c&ocirc;ng nghệ &acirc;m thanh&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-smart-ampart-amp-tren-laptop-la-gi-1273792" target="_blank"><strong>Smart AMP</strong></a>&nbsp;đem đến hiệu ứng &acirc;m thanh vang vọng cực kỳ sống động n&acirc;ng cao chất lượng giải tr&iacute; cho bạn.</p>
                        <p><a href="https://www.thegioididong.com/images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-183220-043207.jpg" onclick="return false;"><img alt="Laptop Asus Gaming Rog Strix G512 i7 (IAL001T) - Âm thanh" src="https://cdn.tgdd.vn/Products/Images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-183220-043207.jpg" /></a></p>
                        <h3>Hỗ trợ đa dạng cổng kết nối</h3>
                        <p>Chiếc laptop n&agrave;y hỗ trợ c&aacute;c cổng kết nối như:<strong>&nbsp;<a href="https://https//www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">USB 3.2</a></strong>,<strong>&nbsp;USB Type - C</strong>,<strong>&nbsp;HDMI</strong>,&nbsp;<strong>LAN</strong>&nbsp;gi&uacute;p bạn dễ d&agrave;ng kết nối chiếc&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;của m&igrave;nh với c&aacute;c thiết bị kh&aacute;c.</p>
                        <p><a href="https://www.thegioididong.com/images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-272120-022128.jpg" onclick="return false;"><img alt="Laptop Asus Gaming Rog Strix G512 i7 (IAL001T) - Kết nối" src="https://cdn.tgdd.vn/Products/Images/44/225687/asus-gaming-rog-strix-g512-i7-ial001t-272120-022128.jpg" /></a></p>
                        <p>Với c&aacute;c t&iacute;nh năng tr&ecirc;n chiếc laptop Asus Gaming Rog Strix G512 i7&nbsp;(IAL001T) n&agrave;y sẽ l&agrave; một sự lựa chọn l&yacute; tưởng cho c&aacute;c game thủ.</p>
                        ',
        'slug'=>Str::slug('Asus Gaming Rog Strix G512 i7 10750H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (IAL001T)','-').'.aspx',
        'created_at'=>now(),
        ]);

        DB::table('products')->insert([
        'name'=>'Dell G5 15 5500 i7 10750H/16GB/512GB/144Hz/6GB RTX2060/Win10 (70228123)',
        'price'=>33490000,
        'old_price'=>35890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/232901/dell-g5-15-5500-i7-70228123-094621-024632-600x600.jpg',
        'rate'=>400,
        'category_id'=>4,
        'brand_id'=>3,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Dell G5 15 5500 i7 10750H/16GB/512GB/144Hz/6GB RTX2060/Win10 (70228123)</h2>
                        <p><img src="https://cdn.tgdd.vn/Products/Images/44/232901/Slider/dell-g5-15-5500-i7-70228123-140121-0945259.jpg" /></p>
                        <p><a href="https://www.thegioididong.com/laptop/dell-g5-15-5500-i7-70228123" target="_blank">Laptop Dell G5 15 5500 i7 (70228123)</a>&nbsp;với cấu h&igrave;nh mạnh mẽ, thiết kế đẹp mắt, chiếc laptop Dell n&agrave;y sẽ đem lại trải nghiệm chơi game cực đ&atilde;, l&agrave;m việc mượt m&agrave;.</p>
                        <h3>Thiết kế nổi bật đậm chất gaming</h3>
                        <p>Chiếc laptop thuộc d&ograve;ng&nbsp;<a href="https://www.thegioididong.com/laptop-dell-gaming-g-series" target="_blank">Dell Gaming G-series</a>&nbsp;n&agrave;y sở hữu gam m&agrave;u đen viền xanh ở phần đế c&ugrave;ng với những đường cắt t&aacute;o bạo v&agrave; lớp vỏ từ chất liệu nhựa cứng tạo n&ecirc;n sự tương phản nổi bật c&aacute; t&iacute;nh. Trọng lượng của m&aacute;y l&agrave;&nbsp;<strong>2.65 kg</strong>&nbsp;v&agrave; độ d&agrave;y&nbsp;<strong>31.13 mm</strong>&nbsp;kh&ocirc;ng chiếm qu&aacute; nhiều diện t&iacute;ch nơi g&oacute;c b&agrave;n l&agrave;m việc hay trong balo của những game thủ.</p>
                        <p><a href="https://www.thegioididong.com/images/44/232901/dell-g5-15-5500-i7-70228123-kg.jpg" onclick="return false;"><img alt="Chiếc laptop thuộc dòng Dell Gaming G-series này sở hữu gam màu đen viền xanh" src="https://cdn.tgdd.vn/Products/Images/44/232901/dell-g5-15-5500-i7-70228123-kg.jpg" /></a></p>
                        <p>Dell mang đến sự an to&agrave;n tuyệt đối cho người d&ugrave;ng từ bảo vệ phần cứng vật l&yacute; như lưu mật khẩu đến bảo mật nhận diện bằng v&acirc;n tay, mở m&aacute;y nhanh ch&oacute;ng chỉ với một chạm.</p>
                        <p><a href="https://www.thegioididong.com/images/44/232901/dell-g5-15-5500-i7-70228123-van-tay.jpg" onclick="return false;"><img alt="Dell mang đến sự an toàn tuyệt đối " src="https://cdn.tgdd.vn/Products/Images/44/232901/dell-g5-15-5500-i7-70228123-van-tay.jpg" /></a></p>
                        <p><a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;Dell G5 15 5500 vẫn được trang bị đầy đủ c&aacute;c cổng kết nối, bao gồm cổng RJ45, USB 3.2, HDMI, Thunderbolt 3,&nbsp;Mini Displayport v&agrave; khe thẻ nhớ SD để truyền dữ liệu nhanh, đầu ra video v&agrave; hỗ trợ chia sẻ dữ liệu l&ecirc;n m&agrave;n h&igrave;nh tr&igrave;nh chiếu hay tivi, m&aacute;y in,... Đối với kết nối kh&ocirc;ng d&acirc;y, m&aacute;y c&oacute; Bluetooth v5.0 v&agrave; Wi-Fi 802.11 a/b/g/n/ac cho người d&ugrave;ng sử dụng Internet c&oacute; tốc độ cao, phạm vi t&iacute;n hiệu tốt, mang đến trải nghiệm mượt m&agrave; khi chơi game.</p>
                        <p><a href="https://www.thegioididong.com/images/44/232901/dell-g5-15-5500-i7-70228123-usb.jpg" onclick="return false;"><img alt="Laptop Dell G5 15 5500 vẫn được trang bị đầy đủ các cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/232901/dell-g5-15-5500-i7-70228123-usb.jpg" /></a></p>
                        <h3>&nbsp;</h3>
                        ',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Dell G5 15 5500 i7 10750H/16GB/512GB/144Hz/6GB RTX2060/Win10 (70228123)</h3>
                                <p><img alt="Thông số kỹ thuật 232901" src="https://cdn.tgdd.vn/Products/Images/44/232901/Kit/dell-g5-15-5500-i7-70228123-note.jpg" style="height:430px; width:500px" /></p>
                                <ul>
                                    <li>﻿</li>
                                    <li>Bộ xử l&yacute;</li>
                                    <li>C&ocirc;ng nghệ CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i7 Comet Lake</a></p>
                                    </li>
                                    <li>Loại CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-i7-10750h-uu-nhuoc-diem-la-1292162" target="_blank">10750H</a></p>
                                    </li>
                                    <li>Tốc độ CPU
                                    <p>2.60 GHz</p>
                                    </li>
                                    <li>Tốc độ tối đa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 5.0 GHz</a></p>
                                    </li>
                                    <li>Bộ nhớ RAM, Ổ cứng</li>
                                    <li>RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">16 GB</a></p>
                                    </li>
                                    <li>Loại RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
                                    </li>
                                    <li>Tốc độ Bus RAM
                                    <p>2933 MHz</p>
                                    </li>
                                    <li>Hỗ trợ RAM tối đa
                                    <p>32 GB</p>
                                    </li>
                                    <li>Ổ cứng
                                    <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cac-chuan-toc-do-cua-o-cung-ssd-tren-1115453" target="_blank">Hỗ trợ khe cắm SSD M.2 PCIe</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh</li>
                                    <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                    <p>15.6 inch</p>
                                    </li>
                                    <li>Độ ph&acirc;n giải
                                    <p>Full HD (1920 x 1080), 144Hz</p>
                                    </li>
                                    <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                    <p>WVA&nbsp;,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh cảm ứng
                                    <p>Kh&ocirc;ng c&oacute;</p>
                                    </li>
                                    <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                    <li>Thiết kế card
                                    <p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
                                    </li>
                                    <li>Card đồ họa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-rtx-2060-co-manh-kh-1201376" target="_blank">NVIDIA GeForce RTX2060</a></p>
                                    </li>
                                    <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                    <li>Cổng giao tiếp
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cong-thunderbolt-la-gi-uu-va-nhuoc-diem-cua-thunde-1180891" target="_blank">Thunderbolt 3</a><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">1 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516" target="_blank">2 x USB 2.0</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/mini-displayport-la-gi-966831" target="_blank">Mini DisplayPort</a></p>
                                    </li>
                                    <li>Kết nối kh&ocirc;ng d&acirc;y
                                    <p><a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a></p>
                                    </li>
                                    <li>Khe đọc thẻ nhớ
                                    <p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">SD</a></p>
                                    </li>
                                    <li>Webcam
                                    <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
                                    </li>
                                    <li>T&iacute;nh năng kh&aacute;c
                                    <p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
                                    </li>
                                    <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
                                    </li>
                                    <li>K&iacute;ch thước &amp; trọng lượng</li>
                                    <li>K&iacute;ch thước
                                    <p>D&agrave;i 364.46 mm - Rộng 254 mm - D&agrave;y 31.13 mm</p>
                                    </li>
                                    <li>Trọng lượng
                                    <p>2.65 kg</p>
                                    </li>
                                    <li>Chất liệu
                                    <p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
                                    </li>
                                    <li>Th&ocirc;ng tin kh&aacute;c</li>
                                    <li>Loại PIN
                                    <p>PIN liền</p>
                                    </li>
                                    <li>Th&ocirc;ng tin Pin
                                    <p>4-cell Polymer, 68 Wh</p>
                                    </li>
                                    <li>Hệ điều h&agrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                    </li>
                                    <li>Thời điểm ra mắt
                                    <p>2020</p>
                                    </li>
                                </ul>
                                ',
        'details'=> '<h2>Cấu h&igrave;nh khủng, chiến mọi tựa game</h2>
                    <p>Thiết bị được trang bị bộ xử l&yacute; Intel&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank"><strong>Core i7</strong></a>&nbsp;<a href="https://www.thegioididong.com/laptop-cpu-intel-gen-11" target="_blank">Gen 10</a>&nbsp;dung lượng&nbsp;<a href="https://www.thegioididong.com/laptop?g=16-gb" target="_blank"><strong>RAM 16 GB</strong></a>&nbsp;đem lại hiệu năng nhanh v&agrave; nhạy cho m&aacute;y khả năng trở th&agrave;nh chiếc&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;chơi tốt mọi tựa game nặng v&agrave; đồ họa chuy&ecirc;n nghiệp, render video chất lượng cao.</p>
                    <p><a href="https://www.thegioididong.com/images/44/232901/dell-g5-15-5500-i7-70228123-nvidia.jpg" onclick="return false;"><img alt="Thiết bị được trang bị bộ xử lý Intel Core i7 Gen 11 " src="https://cdn.tgdd.vn/Products/Images/44/232901/dell-g5-15-5500-i7-70228123-nvidia.jpg" /></a></p>
                    <p>C&ugrave;ng với bộ xử l&yacute; tr&ecirc;n l&agrave; thanh&nbsp;<a href="https://www.thegioididong.com/laptop-dell-o-cung-ssd" target="_blank">ổ cứng SSD</a>&nbsp;512 GB M.2 cho tốc độ truy cập dữ liệu si&ecirc;u nhanh v&agrave; khả năng lưu trữ cực lớn gi&uacute;p mở, xử l&yacute; mượt mọi t&aacute;c vụ văn ph&ograve;ng v&agrave; cả những ứng dụng như Photoshop, Ai hay Premier. Nếu dung lượng&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank"><strong>512 GB</strong></a>&nbsp;l&agrave; chưa đủ nhanh để bạn l&agrave;m việc hay kh&ocirc;ng đủ chỗ để bạn lưu trữ số lượng lớn video render, tựa game nặng th&igrave; bạn c&oacute; thể n&acirc;ng cấp th&ecirc;m ổ cứng SSD qua khe c&oacute; sẵn.</p>
                    <p><a href="https://www.thegioididong.com/images/44/232901/dell-g5-15-5500-i7-70228123-ram.jpg" onclick="return false;"><img alt="SSD 512 GB M.2 cho tốc độ truy cập dữ liệu siêu nhanh " src="https://cdn.tgdd.vn/Products/Images/44/232901/dell-g5-15-5500-i7-70228123-ram.jpg" /></a></p>
                    <p>Với card đồ họa rời&nbsp;<a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-rtx-2060-co-manh-kh-1201376" target="_blank">NVIDIA&reg; GeForce RTX&trade; 2060 6 GB</a>, bạn c&oacute; thể y&ecirc;n t&acirc;m để sử dụng để chơi mọi tựa game hot hiện nay như Blood Chaos M, PUBG, Call of Duty Warzone, Among Us,... với mức setting cao m&agrave; kh&ocirc;ng lo hiện tượng giật, lag. Ngo&agrave;i ra, kh&ocirc;ng chỉ dừng lại ở việc chơi game m&agrave; card đồ hoạ n&agrave;y c&ograve;n đ&oacute;ng vai tr&ograve; đ&aacute;p ứng n&acirc;ng cao sức mạnh cho m&aacute;y để c&acirc;n mọi ứng dụng đồ họa chuy&ecirc;n nghiệp như tạo ra bản vẽ bằng AutoCAD, chỉnh sửa v&agrave; gh&eacute;p ảnh bằng Photoshop, cắt gh&eacute;p video tr&ecirc;n phần mềm Adobe Premiere&nbsp; hay After Effects,...&nbsp;</p>
                    <p><a href="https://www.thegioididong.com/images/44/232901/dell-g5-15-5500-i7-70228123-rtx-2060.jpg" onclick="return false;"><img alt="Với card đồ họa rời NVIDIA® GeForce RTX™ 2060 6 GB, bạn có thể yên tâm để sử dụng để chơi mọi tựa game hot " src="https://cdn.tgdd.vn/Products/Images/44/232901/dell-g5-15-5500-i7-70228123-rtx-2060.jpg" /></a></p>
                    <h3>Trải nghiệm qu&aacute; tr&igrave;nh chơi game ho&agrave;n hảo</h3>
                    <p>M&aacute;y t&iacute;ch hợp c&ocirc;ng nghệ Game Shift, h&ocirc;̃ trợ game thủ tùy bi&ecirc;́n từng trải nghi&ecirc;̣m cá nh&acirc;n từ hi&ecirc;̣u ứng chỉnh đ&ecirc;̀n n&ecirc;̀n, vi&ecirc;̣c quản l&yacute; nhi&ecirc;̣t đ&ocirc;̣, ngu&ocirc;̀n đi&ecirc;̣n cho đến &acirc;m thanh. Một v&iacute; dụ cho Game Shift đ&oacute; l&agrave; tính năng tăng t&ocirc;́c sức mạnh CPU nhi&ecirc;̣t đ&ocirc;̣ CPU trong máy giảm tới khoảng 66 đ&ocirc;̣ đ&ecirc;́n 67 đ&ocirc;̣, h&ecirc;̣ th&ocirc;́ng tản nhi&ecirc;̣t giúp máy kh&ocirc;ng bị nóng quá khi chơi game.</p>
                    <p><a href="https://www.thegioididong.com/images/44/232901/dell-g5-15-5500-i7-70228123-den-nen.jpg" onclick="return false;"><img alt="Độ nảy của bàn phím tốt kết hợp đổi màu bàn phím đèn nền RGB " src="https://cdn.tgdd.vn/Products/Images/44/232901/dell-g5-15-5500-i7-70228123-den-nen.jpg" /></a></p>
                    <p>Độ nảy của b&agrave;n ph&iacute;m tốt kết hợp đổi m&agrave;u b&agrave;n ph&iacute;m đ&egrave;n nền RGB 4 v&ugrave;ng t&ugrave;y chọn với c&aacute;c ph&iacute;m WASD theo &yacute; th&iacute;ch, tăng sự hứng th&uacute; trong trận game.</p>
                    <h3>M&agrave;n h&igrave;nh sắc n&eacute;t v&agrave; g&oacute;c nh&igrave;n rộng</h3>
                    <p>M&agrave;n h&igrave;nh Dell G5 rộng&nbsp;<a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank"><strong>15.6 inch</strong></a>, độ ph&acirc;n giải Full HD (1920 x 1080) cho c&aacute;c h&igrave;nh ảnh hiển thị tr&ecirc;n m&agrave;n đều sắc n&eacute;t ở mọi từng chi tiết. Tần số qu&eacute;t 144 Hz gi&uacute;p m&agrave;n h&igrave;nh truyền tải h&igrave;nh ảnh một c&aacute;ch liền mạch kể cả những m&agrave;n game phức tạp nhất v&agrave; loại bỏ ho&agrave;n to&agrave;n t&igrave;nh trạng giật h&igrave;nh thường thấy.</p>
                    <p><a href="https://www.thegioididong.com/images/44/232901/dell-g5-15-5500-i7-70228123-man-hinh.jpg" onclick="return false;"><img alt="Màn hình Dell G5 rộng 15.6 inch, độ phân giải Full HD " src="https://cdn.tgdd.vn/Products/Images/44/232901/dell-g5-15-5500-i7-70228123-man-hinh.jpg" /></a></p>
                    <p>C&ocirc;ng nghệ chống ch&oacute;i Anti Glare gi&uacute;p chất lượng hiển thị nơi &aacute;nh s&aacute;ng mạnh kh&ocirc;ng bị nho&egrave; hay ch&oacute;i. Th&ecirc;m nữa l&agrave; c&ocirc;ng nghệ WVA (Wide Viewing Angle) cung cấp cho bạn g&oacute;c nh&igrave;n rộng r&atilde;i, bạn c&oacute; thể quan s&aacute;t th&ocirc;ng tin ở mọi g&oacute;c kh&aacute;c nhau nhưng vẫn đảm bảo sự r&otilde; r&agrave;ng.</p>
                    <p><a href="https://www.thegioididong.com/laptop-dell" target="_blank">Laptop Dell</a>&nbsp;được trang bị c&ocirc;ng nghệ &acirc;m thanh Realtek Nahimic 3D Audio, sự đắm ch&igrave;m trong &acirc;m thanh của tr&ograve; chơi khiến bạn thật sự đ&aacute;ng kinh ngạc nhờ trường &acirc;m thanh mở rộng theo ba chiều. Sự cảm nhận &acirc;m thanh ấy như thể bạn đang ở trong t&acirc;m điểm của h&agrave;nh động v&agrave; để bản th&acirc;n bị cuốn theo cảm x&uacute;c khi h&ograve;a m&igrave;nh v&agrave;o tr&ograve; chơi.</p>
                    <p><a href="https://www.thegioididong.com/images/44/232901/dell-g5-15-5500-i7-70228123-am-thanh.jpg" onclick="return false;"><img alt="Laptop Dell được trang bị công nghệ âm thanh Realtek Nahimic 3D Audio" src="https://cdn.tgdd.vn/Products/Images/44/232901/dell-g5-15-5500-i7-70228123-am-thanh.jpg" /></a></p>
                    <p>T&oacute;m lại, laptop Dell G5 15 5500 i7 (70228123) kh&ocirc;ng chỉ để c&aacute;c game thủ đắm m&igrave;nh v&agrave;o c&aacute;c tựa game đ&igrave;nh đ&aacute;m m&agrave; c&ograve;n sử dụng thiết bị n&agrave;y để xử l&yacute; mượt m&agrave; mọi t&aacute;c vụ đồ họa - kỹ thuật với cấu h&igrave;nh khủng, thiết kế hiện đại.</p>
                    ',
        'slug'=>Str::slug('Dell G5 15 5500 i7 10750H/16GB/512GB/144Hz/6GB RTX2060/Win10 (70228123)','-').'.aspx',
        'created_at'=>now(),
        ]);

        DB::table('products')->insert([
        'name'=>'Dell G5 15 5500 i7 10750H/8GB/512GB/120Hz/6GB GTX1660Ti/Win10 (70225485)',
        'price'=>29490000,
        'old_price'=>31890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/232902/dell-g5-15-5500-i7-70225485-094921-024956-600x600.jpg',
        'rate'=>400,
        'category_id'=>4,
        'brand_id'=>3,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Dell G5 15 5500 i7 10750H/8GB/512GB/120Hz/6GB GTX1660Ti/Win10 (70225485)</h2>
                        <p><img src="https://cdn.tgdd.vn/Products/Images/44/232902/Slider/dell-g5-15-5500-i7-70225485-120121-0957112.jpg" /></p>
                        <h2><a href="https://www.thegioididong.com/laptop/dell-g5-15-5500-i7-70225485" target="_blank">Laptop Dell G5 15 5500 i7 (70225485)</a>&nbsp;l&agrave; mẫu laptop gaming được thiết kế theo phong c&aacute;ch lịch l&atilde;m đầy mạnh mẽ. Cấu h&igrave;nh mạnh, hiệu suất đồ họa cao c&ugrave;ng m&agrave;n h&igrave;nh l&yacute; tưởng cho việc chơi game l&agrave; những ưu điểm khiến chiếc laptop n&agrave;y trở n&ecirc;n nổi bật trong ph&acirc;n kh&uacute;c.&nbsp;</h2>
                        <h3>Diện mạo đậm chất gaming&nbsp;</h3>
                        <p>Kh&ocirc;ng cần phải hầm hố, gai g&oacute;c nhưng vẫn đủ mạnh mẽ với những đường cắt t&aacute;o bạo v&agrave; kết hợp với những đường viền m&agrave;u xanh nổi bật. Lớp vỏ của m&aacute;y được l&agrave;m bằng chất liệu nhựa cứng chắc chắn v&agrave; tản nhiệt tốt hơn. M&aacute;y c&oacute; độ d&agrave;y&nbsp;<strong>31.13 mm</strong>&nbsp;v&agrave; trọng lượng&nbsp;<strong>2.65 kg</strong>&nbsp;kh&ocirc;ng chiếm nhiều diện t&iacute;ch khi đặt tr&ecirc;n b&agrave;n hoặc đem theo.</p>
                        <p><a href="https://cdn.tgdd.vn/2021/01/content/TK-800x444.jpg" onclick="return false;"><img alt="Laptop Dell G5 15 5500 i7 (70225485) - Thiết kế" src="https://cdn.tgdd.vn/2021/01/content/TK-800x444.jpg" style="height:444px; width:800px" /></a></p>
                        <p><a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;c&oacute; cảm biến v&acirc;n tay nằm b&ecirc;n tr&ecirc;n b&agrave;n ph&iacute;m t&iacute;ch hợp trong n&uacute;t nguồn một c&aacute;ch gọn g&agrave;ng, gi&uacute;p đăng nhập 1 chạm nhanh ch&oacute;ng đồng thời tăng độ bảo mật.</p>
                        <p><a href="https://cdn.tgdd.vn/2021/01/content/Van-tay-800x444-1.jpg" onclick="return false;"><img alt="Laptop Dell G5 15 5500 i7 (70225485) - Vân tay" src="https://cdn.tgdd.vn/2021/01/content/Van-tay-800x444-1.jpg" style="height:444px; width:800px" /></a></p>
                        <p><a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">Laptop gaming</a>&nbsp;Dell G5 hỗ trợ đa dạng c&aacute;c cổng giao tiếp phổ biến như: USB 3.2, Thunderbolt 3, USB 2.0, HDMI gi&uacute;p m&aacute;y t&iacute;nh kết nối với c&aacute;c thiết bị ngoại vi một c&aacute;ch dễ d&agrave;ng, truyền dữ liệu tốc độ cao. Chuẩn Wi-Fi 6 - 802.11ax, Bluetooth v5.0 cho c&aacute;c kết nối kh&ocirc;ng d&acirc;y ổn định để bạn thỏa sức chiến game m&agrave; kh&ocirc;ng lo gi&aacute;n đoạn v&igrave; rớt mạng.</p>
                        <p><a href="https://cdn.tgdd.vn/2021/01/content/CKN-800x444.jpg" onclick="return false;"><img alt="Laptop Dell G5 15 5500 i7 (70225485) - Cổng kết nối" src="https://cdn.tgdd.vn/2021/01/content/CKN-800x444.jpg" style="height:444px; width:800px" /></a></p>
                        <p>C&ocirc;ng nghệ Game Shift n&acirc;ng cao được t&iacute;ch hợp sẵn để k&iacute;ch hoạt chế độ hiệu năng cao khi bấm n&uacute;t F7 tr&ecirc;n b&agrave;n ph&iacute;m. T&iacute;nh năng n&agrave;y nhằm tối ưu tốc độ quạt của m&aacute;y t&iacute;nh, gi&uacute;p giữ nhiệt độ ổn định.&nbsp;</p>
                        <p>B&agrave;n ph&iacute;m được chế tạo tỉ mỉ v&agrave; bền bỉ sau h&agrave;ng triệu lần bấm để ph&ugrave; hợp với nhu cầu chơi game l&acirc;u d&agrave;i. B&ecirc;n cạnh đ&oacute;, b&agrave;n ph&iacute;m c&oacute; trang bị đ&egrave;n nền gi&uacute;p bạn c&oacute; thể chơi game hay l&agrave;m việc ở bất k&igrave; kh&ocirc;ng gian n&agrave;o.</p>
                        <p><a href="https://cdn.tgdd.vn/2021/01/content/RGB-800x444.jpg" onclick="return false;"><img alt="Laptop Dell G5 15 5500 i7 (70225485) - Bàn phím" src="https://cdn.tgdd.vn/2021/01/content/RGB-800x444.jpg" style="height:444px; width:800px" /></a></p>
                        <h3>&nbsp;</h3>
                        ',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Dell G5 15 5500 i7 10750H/8GB/512GB/120Hz/6GB GTX1660Ti/Win10 (70225485)</h3>
                                <p><img alt="Thông số kỹ thuật 232902" src="https://cdn.tgdd.vn/Products/Images/44/232902/Kit/dell-g5-15-5500-i7-70225485-note.jpg" style="height:430px; width:500px" /></p>
                                <ul>
                                    <li>﻿</li>
                                    <li>Bộ xử l&yacute;</li>
                                    <li>C&ocirc;ng nghệ CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i7 Comet Lake</a></p>
                                    </li>
                                    <li>Loại CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-i7-10750h-uu-nhuoc-diem-la-1292162" target="_blank">10750H</a></p>
                                    </li>
                                    <li>Tốc độ CPU
                                    <p>2.60 GHz</p>
                                    </li>
                                    <li>Tốc độ tối đa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 5.0 GHz</a></p>
                                    </li>
                                    <li>Bộ nhớ RAM, Ổ cứng</li>
                                    <li>RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
                                    </li>
                                    <li>Loại RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
                                    </li>
                                    <li>Tốc độ Bus RAM
                                    <p>2933 MHz</p>
                                    </li>
                                    <li>Hỗ trợ RAM tối đa
                                    <p>32 GB</p>
                                    </li>
                                    <li>Ổ cứng
                                    <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cac-chuan-toc-do-cua-o-cung-ssd-tren-1115453" target="_blank">Hỗ trợ khe cắm SSD M.2 PCIe</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh</li>
                                    <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                    <p>15.6 inch</p>
                                    </li>
                                    <li>Độ ph&acirc;n giải
                                    <p>Full HD (1920 x 1080), 120Hz</p>
                                    </li>
                                    <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                    <p>WVA&nbsp;,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh cảm ứng
                                    <p>Kh&ocirc;ng c&oacute;</p>
                                    </li>
                                    <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                    <li>Thiết kế card
                                    <p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
                                    </li>
                                    <li>Card đồ họa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-gtx-1660-ti-choi-du-1183155" target="_blank">NVIDIA GeForce GTX 1660Ti</a></p>
                                    </li>
                                    <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                    <li>Cổng giao tiếp
                                    <p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">1 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/cong-thunderbolt-la-gi-uu-va-nhuoc-diem-cua-thunde-1180891" target="_blank">Thunderbolt 3</a><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516" target="_blank">2 x USB 2.0</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/mini-displayport-la-gi-966831" target="_blank">Mini DisplayPort</a></p>
                                    </li>
                                    <li>Kết nối kh&ocirc;ng d&acirc;y
                                    <p><a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a></p>
                                    </li>
                                    <li>Khe đọc thẻ nhớ
                                    <p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">SD</a></p>
                                    </li>
                                    <li>Webcam
                                    <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
                                    </li>
                                    <li>T&iacute;nh năng kh&aacute;c
                                    <p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
                                    </li>
                                    <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
                                    </li>
                                    <li>K&iacute;ch thước &amp; trọng lượng</li>
                                    <li>K&iacute;ch thước
                                    <p>D&agrave;i 364.46 mm - Rộng 254 mm - D&agrave;y 31.13 mm</p>
                                    </li>
                                    <li>Trọng lượng
                                    <p>2.65 kg</p>
                                    </li>
                                    <li>Chất liệu
                                    <p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
                                    </li>
                                    <li>Th&ocirc;ng tin kh&aacute;c</li>
                                    <li>Model Adapter sạc
                                    <p>LA240PM190</p>
                                    </li>
                                    <li>Loại PIN
                                    <p>PIN liền</p>
                                    </li>
                                    <li>Th&ocirc;ng tin Pin
                                    <p>4-cell Polymer, 68 Wh</p>
                                    </li>
                                    <li>Hệ điều h&agrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                    </li>
                                    <li>Thời điểm ra mắt
                                    <p>2020</p>
                                    </li>
                                </ul>
                                ',
        'details'=> '<h2>Hiệu năng mạnh mẽ, c&acirc;n mọi tựa game hot</h2>
                        <p><a href="https://www.thegioididong.com/laptop-dell-gaming-g-series" target="_blank">Laptop Dell G5</a>&nbsp;mang đến sức mạnh từ con chip Intel&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Core i7</a></strong>&nbsp;Ice Lake gen 10 d&ograve;ng H với xung nhịp cơ bản&nbsp;<strong>2.60 GHz</strong>&nbsp;v&agrave; đạt&nbsp;<strong>5.0 GHz</strong>&nbsp;khi &eacute;p xung kết hợp với&nbsp;<a href="https://www.thegioididong.com/laptop-8-gb" target="_blank"><strong>RAM 8 GB</strong></a>&nbsp;tốc độ Bus RAM 2933 MHz cho hiệu năng &ldquo;c&acirc;n&rdquo; mọi ứng dụng nặng, l&agrave;m việc đa nhiệm hay chơi game hay streaming đều mượt m&agrave;. Hơn nữa, m&aacute;y cũng c&oacute; sẵn 1 thanh RAM trống để tiện cho việc n&acirc;ng cấp về sau (Hỗ trợ RAM tối đa 32 GB).</p>
                        <p><a href="https://cdn.tgdd.vn/2021/01/content/Hieu-nang-800x444-6.jpg" onclick="return false;"><img alt="Laptop Dell G5 15 5500 i7 (70225485) - Hiệu năng" src="https://cdn.tgdd.vn/2021/01/content/Hieu-nang-800x444-6.jpg" style="height:444px; width:800px" /></a></p>
                        <p><a href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank">Card đồ họa rời</a>&nbsp;<strong>NVIDIA GeForce GTX 1660Ti 6 GB</strong>&nbsp;cho khả năng đồ họa đỉnh cao, đ&aacute;p ứng nhu cầu thiết kế 3D bằng AutoCAD, chỉnh sửa ảnh bằng Photoshop, dựng video bằng Premiere hay After Effects,... v&agrave; đặc biệt l&agrave; chơi game cực đ&atilde;, c&aacute;c tựa game hot hiện nay như PUBG, Call of Duty Warzone, Apex Legends... với mức setting cao.</p>
                        <p><a href="https://cdn.tgdd.vn/2021/01/content/Choi-game-800x444.jpg" onclick="return false;"><img alt="Laptop Dell G5 15 5500 i7 (70225485) - Card rời" src="https://cdn.tgdd.vn/2021/01/content/Choi-game-800x444.jpg" style="height:444px; width:800px" /></a></p>
                        <p><strong><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank">Ổ cứng SSD</a></strong>&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank"><strong>512 GB</strong></a>&nbsp;M.2 PCIe mang lại tốc độ khởi động Windows v&agrave; truy xuất dữ liệu nhanh ch&oacute;ng c&ugrave;ng kh&ocirc;ng gian lưu trữ thoải m&aacute;i.&nbsp;Hỗ trợ th&ecirc;m 1 khe cắm SSD M.2 PCIe để bạn thoải m&aacute;i n&acirc;ng cấp gi&uacute;p tăng tốc cho m&aacute;y.</p>
                        <p><a href="https://cdn.tgdd.vn/2021/01/content/SSD-800x444-5.jpg" onclick="return false;"><img alt="Laptop Dell G5 15 5500 i7 (70225485) - SSD" src="https://cdn.tgdd.vn/2021/01/content/SSD-800x444-5.jpg" /></a></p>
                        <h3>M&agrave;n h&igrave;nh chuẩn gaming&nbsp;</h3>
                        <p>M&agrave;n h&igrave;nh laptop c&oacute; k&iacute;ch thước&nbsp;<strong><a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a></strong>, độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>, h&igrave;nh ảnh mang lại v&ocirc; c&ugrave;ng sống động, tương phản tốt. Tần số qu&eacute;t&nbsp;<strong>120 Hz</strong>&nbsp;thể hiện mượt m&agrave; chuyển động trong game để bạn kh&ocirc;ng bỏ lỡ bất k&igrave; khoảnh khắc n&agrave;o trong trận chiến. C&ocirc;ng nghệ chống ch&oacute;i gi&uacute;p m&agrave;n h&igrave;nh kh&ocirc;ng bị nh&ograve;e v&agrave; ch&oacute;i s&aacute;ng khi ngồi trước cửa sổ hay &aacute;nh đ&egrave;n.</p>
                        <p><a href="https://cdn.tgdd.vn/2021/01/content/Man-hinh-800x444-6.jpg" onclick="return false;"><img alt="Laptop Dell G5 15 5500 i7 (70225485) - Màn hình" src="https://cdn.tgdd.vn/2021/01/content/Man-hinh-800x444-6.jpg" /></a></p>
                        <p>Giải tr&iacute; cực đ&atilde; với hệ thống loa k&eacute;p v&agrave; c&ocirc;ng nghệ Realtek Nahimic 3D Audio cho chất &acirc;m sống động, thể hiện r&otilde; từng chi tiết trong game.</p>
                        <p>Với cấu h&igrave;nh khủng, thiết kế hiện đại,&nbsp;<a href="https://www.thegioididong.com/laptop-dell" target="_blank">laptop Dell</a>&nbsp;G5 15 5500 i7 (70225485) cực ph&ugrave; hợp với c&aacute;c game thủ trẻ hoặc người l&agrave;m thiết kế, s&aacute;ng tạo nội dung.&nbsp;</p>
                        ',
        'slug'=>Str::slug('Dell G5 15 5500 i7 10750H/8GB/512GB/120Hz/6GB GTX1660Ti/Win10 (70225485)','-').'.aspx',
        'created_at'=>now(),
        ]);

        DB::table('products')->insert([
        'name'=>'HP Pavilion Gaming 16 a0109TX i7 10870H/8GB/32GB+512GB/4GB GTX1650Ti/Win10 (31J26PA)',
        'price'=>30490000,
        'old_price'=>32890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/235439/hp-pavilion-gaming-16-a0109tx-i7-31j26pa-600x600.jpg',
        'rate'=>400,
        'category_id'=>4,
        'brand_id'=>1,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>Được trang bị cấu h&igrave;nh tuyệt vời Intel Core i7 thế hệ thứ 10 v&agrave; card đồ họa rời NVIDIA GeForce,&nbsp;<a href="https://thegioididong.com/sp-235439" target="_blank">HP Pavilion Gaming 16 a0109TX i7 (31J26PA)</a>&nbsp;l&agrave; chiếc laptop&nbsp;c&oacute; thể đ&aacute;p ứng ho&agrave;n hảo mọi nhu cầu của bạn từ c&ocirc;ng việc cho đến chơi game.</h3>
                        <h3>Cấu h&igrave;nh mạnh mẽ, vượt trội</h3>
                        <p>Laptop gaming HP thỏa sức c&acirc;n mọi tựa game với sức mạnh phi thường của bộ xử l&yacute;&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Intel Core i7</a>&nbsp;-&nbsp;<strong>10870H&nbsp;</strong>thuộc d&ograve;ng&nbsp;<a href="https://www.thegioididong.com/laptop-cpu-intel-gen-10" target="_blank">CPU thế hệ thứ 10</a>. Bộ xử l&yacute; n&agrave;y sở hữu&nbsp;xung nhịp cơ bản l&agrave;&nbsp;<strong>2.2 GHz</strong>&nbsp;v&agrave; tối đa l&ecirc;n tới&nbsp;<strong>5.0 GHz&nbsp;</strong>gi&uacute;p&nbsp;tăng lượng khung h&igrave;nh tr&ecirc;n gi&acirc;y, tăng hiệu năng to&agrave;n diện v&agrave; tăng tốc độ xuất lưu định dạng file video độ ph&acirc;n giải 4K&nbsp;nhưng vẫn tiết kiệm điện đ&aacute;ng kể.</p>
                        <p><strong><a href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank">Card đồ họa rời</a></strong>&nbsp;<strong>NVIDIA GeForce GTX 1650Ti 4GB</strong>&nbsp;cho khả năng xử l&yacute; đồ họa khi chơi c&aacute;c tựa game v&ocirc; c&ugrave;ng mạnh mẽ, y&ecirc;u cầu đồ họa cao như CS:GO, Far Cry 5, Genshin Impact,... đối với mức setting từ cao đến ultra. B&ecirc;n cạnh đ&oacute;, card c&ograve;n gi&uacute;p laptop render đồ hoạ với độ ph&acirc;n giải cao hơn,&nbsp;tăng hiệu suất hoạt động cũng như đồ hoạ được render đẹp hơn, ch&acirc;n thật hơn.</p>
                        <p>Kết hợp với&nbsp;<a href="https://www.thegioididong.com/laptop-8-gb" target="_blank"><strong>RAM 8 GB</strong></a>&nbsp;sử dụng đa nhiệm mượt m&agrave; với tốc độ Bus RAM l&ecirc;n đến&nbsp;<strong>3200 MHz</strong>, người d&ugrave;ng c&oacute; thể xử l&yacute; c&ugrave;ng l&uacute;c nhiều việc kh&aacute;c nhau m&agrave; kh&ocirc;ng lo lắng việc đơ m&aacute;y. Tuyệt vời hơn khi laptop c&ograve;n hỗ trợ khe RAM trống để người d&ugrave;ng n&acirc;ng cấp th&ecirc;m RAM tối đa đến 32 GB nếu c&oacute; nhu cầu.</p>
                        <p><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank"><strong>Ổ cứng SSD</strong></a>&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank"><strong>512 GB</strong></a><strong>&nbsp;M.2 PCIe&nbsp;</strong>cho tốc độ cao gi&uacute;p&nbsp;m&aacute;y t&iacute;nh gaming của bạn vận h&agrave;nh trơn tru, khởi động nhanh ch&oacute;ng. Ngo&agrave;i ra n&oacute; c&ograve;n đem lại&nbsp;cho bạn kh&ocirc;ng gian số rộng lớn thỏa sức lưu phim ảnh hay c&aacute;c tựa game y&ecirc;u th&iacute;ch, c&aacute;c file t&agrave;i liệu nặng m&agrave; kh&ocirc;ng lo đầy bộ nhớ.&nbsp;</p>
                        <p>Hơn nữa, laptop c&ograve;n trang bị th&ecirc;m ổ cứng&nbsp;<strong>Intel Optane 32 GB&nbsp;</strong>gi&uacute;p tăng khả năng truy cập, xuất dữ liệu trong&nbsp;<strong>ổ cứng HDD</strong>. Ch&iacute;nh v&igrave; vậy, laptop HP c&ograve;n hỗ trợ th&ecirc;m&nbsp;khe cắm HDD SATA gi&uacute;p bạn c&oacute; kh&ocirc;ng gian lưu trữ lớn hơn nữa.</p>
                        ',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết HP Pavilion Gaming 16 a0109TX i7 10870H/8GB/32GB+512GB/4GB GTX1650Ti/Win10 (31J26PA)</h3>
                                <ul>
                                    <li>﻿</li>
                                    <li>Bộ xử l&yacute;</li>
                                    <li>C&ocirc;ng nghệ CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i7 Comet Lake</a></p>
                                    </li>
                                    <li>Loại CPU
                                    <p>10870H</p>
                                    </li>
                                    <li>Tốc độ CPU
                                    <p>2.20 GHz</p>
                                    </li>
                                    <li>Tốc độ tối đa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 5.0 GHz</a></p>
                                    </li>
                                    <li>Bộ nhớ RAM, Ổ cứng</li>
                                    <li>RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
                                    </li>
                                    <li>Loại RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
                                    </li>
                                    <li>Tốc độ Bus RAM
                                    <p>3200 MHz</p>
                                    </li>
                                    <li>Hỗ trợ RAM tối đa
                                    <p>32 GB</p>
                                    </li>
                                    <li>Ổ cứng
                                    <p><a href="https://www.thegioididong.com/hoi-dap/bo-nho-intel-optane-la-gi-1213036" target="_blank">Intel Optane 32GB (H10)</a><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>Hỗ trợ khe cắm HDD SATA</p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh</li>
                                    <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                    <p>16.1 inch</p>
                                    </li>
                                    <li>Độ ph&acirc;n giải
                                    <p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
                                    </li>
                                    <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-man-hinh-wled-backlit-tren-laptop-la-gi-1263016" target="_blank">Wled-backlit</a><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh cảm ứng
                                    <p>Kh&ocirc;ng c&oacute;</p>
                                    </li>
                                    <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                    <li>Thiết kế card
                                    <p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-tich-hop-la-gi-950047" target="_blank">Card đồ họa t&iacute;ch hợp</a></p>
                                    </li>
                                    <li>Card đồ họa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-card-do-hoa-nvidia-geforce-gtx-1650ti-uu-nhuoc-1284193" target="_blank">NVIDIA GeForce GTX 1650Ti 4GB</a></p>
                                    </li>
                                    <li>C&ocirc;ng nghệ &acirc;m thanh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-bang-olufsen-tren-laptop-955118" target="_blank">Bang &amp; Olufsen audio</a></p>
                                    </li>
                                    <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                    <li>Cổng giao tiếp
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
                                    </li>
                                    <li>Kết nối kh&ocirc;ng d&acirc;y
                                    <p><a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a></p>
                                    </li>
                                    <li>Khe đọc thẻ nhớ
                                    <p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">SD</a></p>
                                    </li>
                                    <li>Webcam
                                    <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
                                    </li>
                                    <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
                                    </li>
                                    <li>K&iacute;ch thước &amp; trọng lượng</li>
                                    <li>K&iacute;ch thước
                                    <p>D&agrave;i 370 mm - Rộng 262.5 mm - D&agrave;y 23.5 mm</p>
                                    </li>
                                    <li>Trọng lượng
                                    <p>2.21 kg</p>
                                    </li>
                                    <li>Chất liệu
                                    <p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
                                    </li>
                                    <li>Th&ocirc;ng tin kh&aacute;c</li>
                                    <li>Loại PIN
                                    <p>PIN liền</p>
                                    </li>
                                    <li>Th&ocirc;ng tin Pin
                                    <p>3-cell Li-ion, 52.5 Wh</p>
                                    </li>
                                    <li>Hệ điều h&agrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                    </li>
                                    <li>Thời điểm ra mắt
                                    <p>2020</p>
                                    </li>
                                </ul>
                                ',
        'details'=> '<h3>Thiết kế sang trọng nhưng kh&ocirc;ng k&eacute;m phần mạnh mẽ</h3>
                    <p>Nhờ chế t&aacute;c từ vỏ nhựa,&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq-pavilion" target="_blank">HP Pavilion</a>&nbsp;cho bạn cảm gi&aacute;c gọn nhẹ với trọng lượng chỉ&nbsp;<strong>2.21 kg&nbsp;</strong>v&agrave; độ d&agrave;y&nbsp;<strong>23.5 mm</strong>, để bạn thỏa sức dịch chuyển, tận hưởng niềm đam m&ecirc; game mọi l&uacute;c mọi nơi.</p>
                    <p><a href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">Laptop HP</a>&nbsp;c&ograve;n hỗ trợ cả kết nối&nbsp;<strong>HDMI,&nbsp;USB 3.1,&nbsp;LAN (RJ45)</strong>&nbsp;v&agrave; cả<strong>&nbsp;USB Type-C</strong>&nbsp;gi&uacute;p bạn thuận tiện trong việc kết nối với c&aacute;c thiết bị ngoại vi cần thiết. Ngo&agrave;i ra, laptop c&ograve;n trang bị th&ecirc;m&nbsp;khe thẻ nhớ&nbsp;<strong>Micro SD</strong>&nbsp;gi&uacute;p bạn chia sẻ dễ d&agrave;ng giữa laptop v&agrave; c&aacute;c thiết bị kh&aacute;c.</p>
                    <p>B&ecirc;n cạnh đ&oacute;, việc c&oacute; th&ecirc;m&nbsp;phương thức kết nối kh&ocirc;ng d&acirc;y<strong>&nbsp;Bluetooth v5.0</strong>&nbsp;v&agrave;&nbsp;<strong>Wi-Fi 6 - 802.11ax</strong>&nbsp;c&agrave;ng dễ d&agrave;ng hơn trong việc kết nối nhờ đường truyền tốc độ cao v&agrave; ổn định.</p>
                    <p>B&agrave;n ph&iacute;m l&agrave; thứ kh&ocirc;ng thể thiếu đối với một chiếc laptop gaming. H&agrave;nh tr&igrave;nh ph&iacute;m s&acirc;u với thiết kế hợp l&yacute; v&agrave; tốc độ phản hồi nhạy b&eacute;n cộng th&ecirc;m&nbsp;<strong>đ&egrave;n b&agrave;n ph&iacute;m</strong>&nbsp;gi&uacute;p tăng trải nghiệm cho c&aacute;c game thủ, khiến họ thỏa sức thể hiện c&aacute;c kỹ năng của m&igrave;nh.</p>
                    <h3>M&atilde;n nh&atilde;n với m&agrave;n h&igrave;nh sắc n&eacute;t, tinh tế</h3>
                    <p>HP Pavilion trang bị m&agrave;n h&igrave;nh&nbsp;<strong><a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">16.1 inch</a></strong>&nbsp;<strong>Full HD&nbsp;</strong>gi&uacute;p bạn đắm ch&igrave;m trong thế giới game với h&igrave;nh ảnh ch&acirc;n thực đến từng chi tiết, đồ họa đẹp đang nổi l&ecirc;n ngay trước mắt bạn. Với&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">tấm nền IPS</a>, bạn sẽ được tận hưởng tựa game y&ecirc;u th&iacute;ch ở g&oacute;c nh&igrave;n rộng, độ tương phản cao, gi&uacute;p những nh&acirc;n vật trong game xuất hiện một c&aacute;ch ho&agrave;n hảo.</p>
                    <p>Ngo&agrave;i ra,&nbsp;<a href="https://thegioididong.com/hoi-dap/cong-nghe-man-hinh-wled-backlit-tren-laptop-la-gi-1263016" target="_blank">c&ocirc;ng nghệ Wled-backlit</a>&nbsp;c&ograve;n gi&uacute;p m&agrave;n h&igrave;nh c&oacute; độ s&aacute;ng cao, m&agrave;u sắc kh&aacute; tốt đ&aacute;p ứng đủ nhu cầu của người d&ugrave;ng, đem lại trải nghiệm tuyệt vời cho người d&ugrave;ng khi xem phim, show giải tr&iacute; sau giờ l&agrave;m việc.</p>
                    <p>C&ocirc;ng nghệ&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">chống ch&oacute;i Anti Glare</a>&nbsp;l&agrave;m giảm thiểu t&igrave;nh trạng m&agrave;n h&igrave;nh bị ch&oacute;i khi sử dụng ngo&agrave;i nắng. M&agrave;n h&igrave;nh c&oacute; tần số qu&eacute;t<strong>&nbsp;60 Hz&nbsp;</strong>vẫn l&agrave; chuẩn m&agrave;n h&igrave;nh phổ biến nhất hiện nay v&agrave; đủ cho người d&ugrave;ng sử dụng th&ocirc;ng thường như xem film, xem video,&hellip;</p>
                    <p><a href="https://https//www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;sử dụng c&ocirc;ng nghệ &acirc;m thanh&nbsp;<strong>Bang &amp; Olufsen audio</strong>&nbsp;t&iacute;ch hợp c&aacute;c khả năng lọc tiếng ồn, gi&uacute;p &acirc;m thanh to v&agrave; r&otilde; r&agrave;ng hơn để bạn c&oacute; được trải nghiệm nghe đ&uacute;ng như &yacute; th&iacute;ch với mỗi hoạt động nghe nhạc, xem phim hay chơi game.</p>
                    <p>HP Pavilion Gaming 16 a0109TX i7 (31J26PA)&nbsp;l&agrave; chiếc&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;được&nbsp;thiết kế nhỏ gọn để game thủ c&oacute; thể tận hưởng những tựa game y&ecirc;u th&iacute;ch mọi l&uacute;c mọi nơi.</p>
                    ',
        'slug'=>Str::slug('HP Pavilion Gaming 16 a0109TX i7 10870H/8GB/32GB+512GB/4GB GTX1650Ti/Win10 (31J26PA)','-').'.aspx',
        'created_at'=>now(),
        ]);

        DB::table('products')->insert([
        'name'=>'Asus TUF Gaming FX506LI i5 10300H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (HN039T)',
        'price'=>20490000,
        'old_price'=>21890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/234613/TUF2-600x400.jpg',
        'rate'=>400,
        'category_id'=>4,
        'brand_id'=>2,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Asus TUF Gaming FX506LI i5 10300H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (HN039T)</h2>
                        <p><img src="https://cdn.tgdd.vn/Products/Images/44/234613/Slider/DNNB-800x444.jpg" /></p>
                        <h2><a href="https://www.thegioididong.com/laptop/asus-tuf-gaming-fx506li-i5-10300h-8gb-512gb-4gb-gt" target="_blank">Asus TUF Gaming FX506LI i5 (HN039T)</a>&nbsp;l&agrave; mẫu laptop gaming tầm trung với thiết kế c&aacute; t&iacute;nh mạnh mẽ, hiệu năng cao, m&agrave;n h&igrave;nh hiển thị đẹp. Đ&acirc;y ch&iacute;nh l&agrave; chiếc laptop l&iacute; tưởng cho cả học tập, l&agrave;m việc, thiết kế đồ họa v&agrave; đặc biệt l&agrave; chiến game cực đ&atilde;.</h2>
                        <h3>Hiệu năng mạnh mẽ c&acirc;n mọi game hot&nbsp;</h3>
                        <p>Chiếc m&aacute;y t&iacute;nh gaming n&agrave;y trang bị con chip Intel&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank">Core i5</a></strong>&nbsp;Comet Lake&nbsp;<a href="https://www.thegioididong.com/laptop-cpu-intel-gen-10" target="_blank">gen 10</a>&nbsp;d&ograve;ng H cho khả năng xử l&iacute; mạnh v&agrave; ổn định. Kết hợp với&nbsp;<a href="https://www.thegioididong.com/laptop-8-gb" target="_blank"><strong>RAM 8 GB</strong></a>&nbsp;sử dụng đa nhiệm mượt m&agrave;, người d&ugrave;ng c&oacute; thể xử l&yacute; c&ugrave;ng l&uacute;c nhiều việc kh&aacute;c nhau m&agrave; kh&ocirc;ng lo lắng việc đơ m&aacute;y. Với cấu h&igrave;nh n&agrave;y, người d&ugrave;ng c&oacute; thể l&agrave;m văn ph&ograve;ng, chiến game thỏa th&iacute;ch hay l&agrave;m đồ họa chuy&ecirc;n nghiệp m&aacute;y đều c&oacute; thể đ&aacute;p ứng tốt. Asus TUF Gaming hỗ trợ khe RAM trống để người d&ugrave;ng n&acirc;ng cấp th&ecirc;m RAM tối đa đến 32 GB nếu c&oacute; nhu cầu.</p>
                        <p><a href="https://www.thegioididong.com/images/44/234613/ram-8g.jpg" onclick="return false;"><img alt="Asus TUF Gaming FX506LI i5 (HN039T) - ram" src="https://cdn.tgdd.vn/Products/Images/44/234613/ram-8g.jpg" /></a></p>
                        <p><strong><a href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank">Card đồ họa rời</a></strong>&nbsp;<strong>NVIDIA GeForce GTX 1650Ti 4GB</strong>&nbsp;cho khả năng xử l&yacute; đồ họa ấn tượng, t&aacute;i hiện h&igrave;nh ảnh mượt m&agrave; khi chơi c&aacute;c tựa game y&ecirc;u cầu đồ họa cao như CS:GO, Far Cry 5, Genshin Impact,... đối với mức setting từ cao đến ultra. B&ecirc;n cạnh đ&oacute;, bạn cũng c&oacute; thể d&ugrave;ng m&aacute;y trong việc thiết kế poster, chỉnh sửa h&igrave;nh ảnh chuy&ecirc;n nghiệp tr&ecirc;n Photoshop, AI, dựng ảnh 3D bằng AutoCAD hay dựng video tr&ecirc;n Premiere.&nbsp;</p>
                        <p><a href="https://www.thegioididong.com/images/44/234613/card.jpg" onclick="return false;"><img alt="Asus TUF Gaming FX506LI i5 (HN039T) - card" src="https://cdn.tgdd.vn/Products/Images/44/234613/card.jpg" /></a></p>
                        <p><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank"><strong>Ổ cứng SSD</strong></a>&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank"><strong>512 GB</strong></a>&nbsp;M.2 PCIe cho bạn kh&ocirc;ng gian số rộng lớn thỏa sức lưu phim ảnh hay c&aacute;c tựa game y&ecirc;u th&iacute;ch, c&aacute;c file t&agrave;i liệu nặng m&agrave; kh&ocirc;ng lo đầy bộ nhớ. Ổ cứng n&agrave;y cho tốc độ đọc ghi l&ecirc;n đến&nbsp;<strong>3500 MB/s</strong>&nbsp;để chiếc m&aacute;y t&iacute;nh gaming của bạn vận h&agrave;nh trơn tru, khởi động nhanh ch&oacute;ng.</p>
                        <p><a href="https://www.thegioididong.com/images/44/234613/ssd-512.jpg" onclick="return false;"><img alt="Asus TUF Gaming FX506LI i5 (HN039T) - ssd" src="https://cdn.tgdd.vn/Products/Images/44/234613/ssd-512.jpg" /></a></p>
                        <h3>&nbsp;</h3>
                        ',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Asus TUF Gaming FX506LI i5 10300H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (HN039T)</h3>
                                <p><img alt="Thông số kỹ thuật 234613" src="https://cdn.tgdd.vn/Products/Images/44/234613/Kit/asus-tuf-gaming-fx506li-i5-hn039t-note.jpg" style="height:430px; width:500px" /></p>
                                <ul>
                                    <li>﻿</li>
                                    <li>Bộ xử l&yacute;</li>
                                    <li>C&ocirc;ng nghệ CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i5 Comet Lake</a></p>
                                    </li>
                                    <li>Loại CPU
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-i5-10300h-uu-nhuoc-diem-la-1263751" target="_blank">10300H</a></p>
                                    </li>
                                    <li>Tốc độ CPU
                                    <p>2.50 GHz</p>
                                    </li>
                                    <li>Tốc độ tối đa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.5 GHz</a></p>
                                    </li>
                                    <li>Bộ nhớ RAM, Ổ cứng</li>
                                    <li>RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
                                    </li>
                                    <li>Loại RAM
                                    <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
                                    </li>
                                    <li>Tốc độ Bus RAM
                                    <p>2933 MHz</p>
                                    </li>
                                    <li>Hỗ trợ RAM tối đa
                                    <p>32 GB</p>
                                    </li>
                                    <li>Ổ cứng
                                    <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cac-chuan-toc-do-cua-o-cung-ssd-tren-1115453" target="_blank">Hỗ trợ khe cắm SSD M.2 PCIe</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh</li>
                                    <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                    <p>15.6 inch</p>
                                    </li>
                                    <li>Độ ph&acirc;n giải
                                    <p>Full HD (1920 x 1080), 144Hz</p>
                                    </li>
                                    <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a></p>
                                    </li>
                                    <li>M&agrave;n h&igrave;nh cảm ứng
                                    <p>Kh&ocirc;ng c&oacute;</p>
                                    </li>
                                    <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                    <li>Thiết kế card
                                    <p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
                                    </li>
                                    <li>Card đồ họa
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-card-do-hoa-nvidia-geforce-gtx-1650ti-uu-nhuoc-1284193" target="_blank">NVIDIA GeForce GTX 1650Ti 4GB</a></p>
                                    </li>
                                    <li>C&ocirc;ng nghệ &acirc;m thanh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-dts-tren-laptop-la-gi-1261821#dts-ultra-audio" target="_blank">DTS X:Ultra Audio</a></p>
                                    </li>
                                    <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                    <li>Cổng giao tiếp
                                    <p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">2 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516#usb-20" target="_blank">USB 2.0</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
                                    </li>
                                    <li>Kết nối kh&ocirc;ng d&acirc;y
                                    <p><a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a></p>
                                    </li>
                                    <li>Webcam
                                    <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
                                    </li>
                                    <li>T&iacute;nh năng kh&aacute;c
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">Đ&egrave;n b&agrave;n ph&iacute;m chuyển m&agrave;u RGB</a></p>
                                    </li>
                                    <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                    <p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
                                    </li>
                                    <li>K&iacute;ch thước &amp; trọng lượng</li>
                                    <li>K&iacute;ch thước
                                    <p>D&agrave;i 359 mm - Rộng 256 mm - D&agrave;y 24.9 mm</p>
                                    </li>
                                    <li>Trọng lượng
                                    <p>2.3 kg</p>
                                    </li>
                                    <li>Chất liệu
                                    <p>Vỏ nhựa - nắp lưng bằng kim loại</p>
                                    </li>
                                    <li>Th&ocirc;ng tin kh&aacute;c</li>
                                    <li>Loại PIN
                                    <p>PIN liền</p>
                                    </li>
                                    <li>Th&ocirc;ng tin Pin
                                    <p>3-cell Li-ion, 48 Wh</p>
                                    </li>
                                    <li>Hệ điều h&agrave;nh
                                    <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                    </li>
                                    <li>Thời điểm ra mắt
                                    <p>2020</p>
                                    </li>
                                </ul>
                                ',
        'details'=> '<h2>Thiết kế gaming cực chất</h2>
                    <p>Thiết kế của&nbsp;<a href="https://www.thegioididong.com/laptop-asus-tuf-gaming" target="_blank">Asus TUF Gaming</a>&nbsp;mang đậm chất gaming gi&uacute;p game thủ thể hiện được phong c&aacute;ch mạnh mẽ, c&aacute; t&iacute;nh. Tuy hầm hố l&agrave; thế nhưng th&acirc;n m&aacute;y được l&agrave;m kh&aacute; mỏng gọn để ph&ugrave; hợp với nhu cầu dịch chuyển nhiều của c&aacute;c bạn trẻ, chiếc m&aacute;y c&oacute; độ d&agrave;y&nbsp;<strong>24.9 mm</strong>, trọng lượng<strong>&nbsp;2.3 kg</strong>&nbsp;dễ d&agrave;ng cho v&agrave;o balo để đem theo v&agrave; kh&ocirc;ng tốn nhiều diện t&iacute;ch khi đặt tr&ecirc;n b&agrave;n l&agrave;m việc.</p>
                    <p>Th&acirc;n m&aacute;y được l&agrave;m từ vỏ nhựa, ri&ecirc;ng nắp lưng bằng kim loại tạo cho m&aacute;y vẻ sang trọng v&agrave; cảm gi&aacute;c m&aacute;t tay khi sờ v&agrave;o. Asus TUF Gaming đ&atilde; trải qua c&aacute;c b&agrave;i kiểm tra khắc nghiệt về độ bền n&ecirc;n người d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m khi sử dụng trong thời gian d&agrave;i.&nbsp;</p>
                    <p><a href="https://www.thegioididong.com/images/44/234613/thiet-ke.jpg" onclick="return false;"><img alt="Asus TUF Gaming FX506LI i5 (HN039T) - thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/234613/thiet-ke.jpg" /></a></p>
                    <p><a href="https://www.thegioididong.com/laptop-asus" target="_blank">Laptop Asus</a>&nbsp;Gaming FX506LI trang bị c&ocirc;ng nghệ tản nhiệt HyperCool đem đến 3 t&ugrave;y chỉnh chế độ quạt c&ugrave;ng c&ocirc;ng nghệ Fan Overboost gi&uacute;p m&aacute;y duy tr&igrave; nhiệt độ ổn định để vận h&agrave;nh được hết c&ocirc;ng suất.&nbsp;</p>
                    <p><a href="https://www.thegioididong.com/images/44/234613/khe-tan-nhiet.jpg" onclick="return false;"><img alt="Asus TUF Gaming FX506LI i5 (HN039T) - tản nhiệt" src="https://cdn.tgdd.vn/Products/Images/44/234613/khe-tan-nhiet.jpg" /></a></p>
                    <p>Phần mềm Gaming Armory Crate chuy&ecirc;n dụng cho ph&eacute;p kiểm so&aacute;t hệ thống, thiết lập chế độ ph&ugrave; hợp. Bạn cũng c&oacute; thể đổi m&agrave;u b&agrave;n ph&iacute;m tr&ecirc;n ứng dụng n&agrave;y.&nbsp;</p>
                    <p>Cổng USB 3.2, HDMI, USB 2.0, USB Type-C đa năng hỗ trợ c&ocirc;ng nghệ DisplayPort 1.4 hỗ trợ kết nối m&agrave;n h&igrave;nh chơi game G-SYNC phụ ở độ ph&acirc;n giải l&ecirc;n đến 4K. M&aacute;y c&oacute; chuẩn kết nối kh&ocirc;ng d&acirc;y Wi-Fi 6 - 802.11ax v&agrave; Bluetooth v5.0 cho ph&eacute;p kết nối nhanh, thỏa sức l&agrave;m việc, chơi game online với đường truyền ổn định.&nbsp;</p>
                    <p><a href="https://www.thegioididong.com/images/44/234613/cong.jpg" onclick="return false;"><img alt="Asus TUF Gaming FX506LI i5 (HN039T) - kết nối" src="https://cdn.tgdd.vn/Products/Images/44/234613/cong.jpg" /></a></p>
                    <p><a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;trang bị đ&egrave;n nền&nbsp;<strong>b&agrave;n ph&iacute;m RGB</strong>&nbsp;gi&uacute;p bạn điều khiển m&agrave;u sắc v&agrave; thể hiện phong c&aacute;ch độc đ&aacute;o cho ri&ecirc;ng m&igrave;nh. Cụm ph&iacute;m WASD được thiết kế nổi bật để bạn dễ thao t&aacute;c khi chơi game.&nbsp;</p>
                    <p><a href="https://www.thegioididong.com/images/44/234613/den-ban-phim.jpg" onclick="return false;"><img alt="Asus TUF Gaming FX506LI i5 (HN039T) - bàn phím" src="https://cdn.tgdd.vn/Products/Images/44/234613/den-ban-phim.jpg" /></a></p>
                    <h3>M&agrave;n h&igrave;nh giải tr&iacute; chuẩn gaming&nbsp;</h3>
                    <p>M&agrave;n h&igrave;nh k&iacute;ch thước&nbsp;<strong><a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a>&nbsp;</strong>độ ph&acirc;n giải&nbsp;<strong>Full HD (1920 x 1080)</strong>&nbsp;với tốc độ qu&eacute;t l&ecirc;n đến&nbsp;<strong>144Hz&nbsp;</strong>l&agrave; m&agrave;n h&igrave;nh l&iacute; tưởng cho việc chơi c&aacute;c tựa game tốc độ với h&igrave;nh ảnh r&otilde; n&eacute;t, m&agrave;u sắc rực rỡ, loại bỏ hiện tượng x&eacute; h&igrave;nh.&nbsp;</p>
                    <p>Được thiết kế ph&ugrave; hợp với xu hướng hiện đại,&nbsp;<a href="https://www.thegioididong.com/laptop-vien-man-hinh-mong" target="_blank">viền m&agrave;n h&igrave;nh mỏng</a>&nbsp;cả 3 cạnh để đem đến kh&ocirc;ng gian giải tr&iacute; tối đa cho người d&ugrave;ng, kết hợp với&nbsp;<strong>tấm nền IPS</strong>&nbsp;cho khả năng hiển thị r&otilde; n&eacute;t ở mọi g&oacute;c nh&igrave;n. Ngo&agrave;i ra, m&agrave;n h&igrave;nh cũng c&oacute; trang bị c&ocirc;ng nghệ chống ch&oacute;i&nbsp;<strong>Anti Glare</strong>&nbsp;để giảm thiểu t&igrave;nh trạng m&agrave;n h&igrave;nh bị ch&oacute;i khi sử dụng ngo&agrave;i nắng.&nbsp;</p>
                    <p><a href="https://www.thegioididong.com/images/44/234613/man-hinh.jpg" onclick="return false;"><img alt="Asus TUF Gaming FX506LI i5 (HN039T) - màn hình" src="https://cdn.tgdd.vn/Products/Images/44/234613/man-hinh.jpg" /></a></p>
                    <p>C&ocirc;ng nghệ &acirc;m thanh DTS X Ultra Audio cho chất &acirc;m mạnh mẽ uy lực, thể hiện chi tiết từng &acirc;m nhỏ nhất đồng thời giả lập &acirc;m v&ograve;m cho bạn cảm gi&aacute;c như đang thật sự h&ograve;a m&igrave;nh trong game.</p>
                    <p>Asus TUF Gaming FX506LI i5 (HN039T) l&agrave; chiếc&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;d&agrave;nh cho c&aacute;c bạn trẻ hiện đại với cấu h&igrave;nh &ldquo;c&acirc;n&rdquo; mọi nhu cầu từ l&agrave;m việc đến giải tr&iacute; v&agrave; được b&aacute;n với mức gi&aacute; phải chăng.&nbsp;</p>
                    ',
        'slug'=>Str::slug('Asus TUF Gaming FX506LI i5 10300H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (HN039T)','-').'.aspx',
        'created_at'=>now(),
        ]);

        DB::table('products')->insert([
        'name'=>'Asus TUF Gaming FX506LI i7 10870H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (HN096T)',
        'price'=>24490000,
        'old_price'=>25890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/234614/TUF1-600x400.jpg',
        'rate'=>400,
        'category_id'=>4,
        'brand_id'=>2,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Asus TUF Gaming FX506LI i7 10870H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (HN096T)</h2>
                        <p><img src="https://cdn.tgdd.vn/Products/Images/44/234614/Slider/asus-tuf-gaming-fx506li-i7-hn096t-260121-0439291.jpg" /></p>
                        <h3><a href="https://www.thegioididong.com/laptop/asus-tuf-gaming-fx506li-i7-hn096t" target="_blank">Laptop Asus TUF Gaming FX506LI i7 (HN096T)</a>&nbsp;sở hữu cấu h&igrave;nh mạnh mẽ c&ugrave;ng vẻ ngo&agrave;i chuẩn gaming, đ&acirc;y sẽ l&agrave; &quot;trợ thủ&quot; ho&agrave;n hảo d&agrave;nh cho game thủ v&agrave; nhu cầu đa nhiệm t&aacute;c vụ nặng.&nbsp;</h3>
                        <h3>Đa nhiệm mượt m&agrave; c&aacute;c t&aacute;c vụ nặng với cấu h&igrave;nh mạnh mẽ</h3>
                        <p>Kh&ocirc;ng chỉ được trang bị bộ vi xử l&yacute;&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Intel Core i7</a>&nbsp;thế hệ thứ 10&nbsp;</strong>m&agrave; chiếc laptop Asus TUF Gaming FX506LI i7 (HN096T) c&ograve;n được hỗ trợ&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=8-gb" target="_blank">RAM 8 GB</a></strong>&nbsp;v&agrave; khả năng n&acirc;ng cấp l&ecirc;n đến&nbsp;<strong>32 GB</strong>&nbsp;cho hiệu năng xử l&yacute; ấn tượng kh&ocirc;ng chỉ ở c&aacute;c t&aacute;c vụ cơ bản m&agrave; c&ograve;n ở c&aacute;c t&aacute;c vụ nặng m&agrave; kh&ocirc;ng lo giật hay đứng m&aacute;y. Bạn sẽ dễ d&agrave;ng vừa chơi game, vừa nghe nhạc, hoặc vừa xử l&yacute; c&aacute;c t&aacute;c vụ đồ họa, vừa chạy c&aacute;c ứng dụng văn ph&ograve;ng kh&aacute;c tr&ecirc;n laptop với thao t&aacute;c mượt m&agrave;, nhạy b&eacute;n nhất.</p>
                        <p>Card đồ họa rời&nbsp;<a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-gtx-1650-co-manh-kh-1201415" target="_blank">NVIDIA GeForce GTX 1650Ti 4 GB</a>&nbsp;được t&iacute;ch hợp tr&ecirc;n chiếc laptop gaming gi&uacute;p n&acirc;ng cao hiệu năng l&ecirc;n đến&nbsp;<strong>70%</strong>&nbsp;so với card GTX 1050, cho c&aacute;c game thủ nhẹ nh&agrave;ng chiến c&aacute;c tựa game đồ họa nặng như Far Cry 5, Just Cause, Project Cars... khi chơi tr&ecirc;n độ ph&acirc;n giải&nbsp;<strong>FullHD</strong>, hay sử dụng tốt c&aacute;c phần mềm thiết kế như: Adobe Photoshop, Ai, Premiere... Tốc độ load m&agrave;n h&igrave;nh nhanh hơn, mang đến trải nghiệm ho&agrave;n hảo.</p>
                        <p><a href="https://cdn.tgdd.vn/2021/01/content/CPU-800x444.jpg" onclick="return false;"><img alt="Laptop Asus TUF Gaming FX506LI i7 (HN096T) - CPU" src="https://cdn.tgdd.vn/2021/01/content/CPU-800x444.jpg" style="height:444px; width:800px" /></a></p>
                        <p><strong><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank">Ổ cứng&nbsp;SSD</a>&nbsp;512 GB</strong>&nbsp;cho tốc độ khởi động m&aacute;y, mở ứng dụng cực nhanh chỉ trong v&agrave;i gi&acirc;y. Ngo&agrave;i ra, m&aacute;y c&ograve;n hỗ trợ th&ecirc;m khe cắm SSD M.2 PCle gi&uacute;p bạn dễ d&agrave;ng n&acirc;ng cấp bộ nhớ cho chiếc laptop của m&igrave;nh.</p>
                        <p><a href="https://cdn.tgdd.vn/2021/01/content/SSD-800x444-9.jpg" onclick="return false;"><img alt="Laptop Asus TUF Gaming FX506LI i7 (HN096T) - Đa nhiệm" src="https://cdn.tgdd.vn/2021/01/content/SSD-800x444-9.jpg" style="height:444px; width:800px" /></a></p>
                        <h3>&nbsp;</h3>
                        ',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Asus TUF Gaming FX506LI i7 10870H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (HN096T)</h3>
                            <p><img alt="Thông số kỹ thuật 234614" src="https://cdn.tgdd.vn/Products/Images/44/234614/Kit/asus-tuf-gaming-fx506li-i7-hn096t-note-1.jpg" style="height:430px; width:500px" /></p>
                            <ul>
                                <li>﻿</li>
                                <li>Bộ xử l&yacute;</li>
                                <li>C&ocirc;ng nghệ CPU
                                <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i7 Comet Lake</a></p>
                                </li>
                                <li>Loại CPU
                                <p>10870H</p>
                                </li>
                                <li>Tốc độ CPU
                                <p>2.20 GHz</p>
                                </li>
                                <li>Tốc độ tối đa
                                <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 5.0 GHz</a></p>
                                </li>
                                <li>Bộ nhớ RAM, Ổ cứng</li>
                                <li>RAM
                                <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
                                </li>
                                <li>Loại RAM
                                <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
                                </li>
                                <li>Tốc độ Bus RAM
                                <p>2933 MHz</p>
                                </li>
                                <li>Hỗ trợ RAM tối đa
                                <p>32 GB</p>
                                </li>
                                <li>Ổ cứng
                                <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cac-chuan-toc-do-cua-o-cung-ssd-tren-1115453" target="_blank">Hỗ trợ khe cắm SSD M.2 PCIe</a></p>
                                </li>
                                <li>M&agrave;n h&igrave;nh</li>
                                <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                <p>15.6 inch</p>
                                </li>
                                <li>Độ ph&acirc;n giải
                                <p>Full HD (1920 x 1080), 144Hz</p>
                                </li>
                                <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a></p>
                                </li>
                                <li>M&agrave;n h&igrave;nh cảm ứng
                                <p>Kh&ocirc;ng c&oacute;</p>
                                </li>
                                <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                <li>Thiết kế card
                                <p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
                                </li>
                                <li>Card đồ họa
                                <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-card-do-hoa-nvidia-geforce-gtx-1650ti-uu-nhuoc-1284193" target="_blank">NVIDIA GeForce GTX 1650Ti 4GB</a></p>
                                </li>
                                <li>C&ocirc;ng nghệ &acirc;m thanh
                                <p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-dts-tren-laptop-la-gi-1261821#dts-ultra-audio" target="_blank">DTS X:Ultra Audio</a></p>
                                </li>
                                <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                <li>Cổng giao tiếp
                                <p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">2 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516#usb-20" target="_blank">USB 2.0</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
                                </li>
                                <li>Kết nối kh&ocirc;ng d&acirc;y
                                <p><a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a></p>
                                </li>
                                <li>Webcam
                                <p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
                                </li>
                                <li>T&iacute;nh năng kh&aacute;c
                                <p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">Đ&egrave;n b&agrave;n ph&iacute;m chuyển m&agrave;u RGB</a></p>
                                </li>
                                <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                <p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
                                </li>
                                <li>K&iacute;ch thước &amp; trọng lượng</li>
                                <li>K&iacute;ch thước
                                <p>D&agrave;i 359 mm - Rộng 256 mm - D&agrave;y 24.9 mm</p>
                                </li>
                                <li>Trọng lượng
                                <p>2.3 kg</p>
                                </li>
                                <li>Chất liệu
                                <p>Vỏ nhựa - nắp lưng bằng kim loại</p>
                                </li>
                                <li>Th&ocirc;ng tin kh&aacute;c</li>
                                <li>Loại PIN
                                <p>PIN liền</p>
                                </li>
                                <li>Th&ocirc;ng tin Pin
                                <p>3-cell Li-ion, 48 Wh</p>
                                </li>
                                <li>Hệ điều h&agrave;nh
                                <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                </li>
                                <li>Thời điểm ra mắt
                                <p>2020</p>
                                </li>
                            </ul>
                            ',
        'details'=> '<h2>Thiết kế mạnh mẽ, chắc chắn, c&aacute; t&iacute;nh</h2>
                    <p>Biểu tượng gaming đặc trưng tr&ecirc;n lớp vỏ nhựa m&agrave;u x&aacute;m nổi bật, c&ugrave;ng thiết kế g&oacute;c cạnh tạo độ sắc n&eacute;t, c&aacute; t&iacute;nh, thu h&uacute;t cho chiếc laptop Asus HN096T. Trọng lượng&nbsp;<strong>2.3 kg</strong>, d&agrave;y&nbsp;<strong>24.9 mm</strong>, kh&ocirc;ng qu&aacute; nặng nề so với c&aacute;c phi&ecirc;n bản&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;kh&aacute;c tr&ecirc;n thị trường, Asus HN096T sẽ dễ d&agrave;ng để bạn mang theo.</p>
                    <p><a href="https://cdn.tgdd.vn/2021/01/content/TK-800x444-2.jpg" onclick="return false;"><img alt="Laptop Asus TUF Gaming FX506LI i7 (HN096T) - Thiết kế" src="https://cdn.tgdd.vn/2021/01/content/TK-800x444-2.jpg" style="height:444px; width:800px" /></a></p>
                    <p>B&agrave;n ph&iacute;m sử dụng hiệu ứng đ&egrave;n Led chuyển m&agrave;u RGB sẽ thật ấn tượng khi chiến game trong m&ocirc;i trường thiếu s&aacute;ng, th&ecirc;m nổi bật, th&ecirc;m hứng th&uacute; v&agrave; thao t&aacute;c th&ecirc;m tiện lợi. RGB được t&ugrave;y chỉnh th&ocirc;ng qua phần mềm TUF Aura Core t&iacute;ch hợp sẵn tr&ecirc;n m&aacute;y để bạn c&oacute; thể thể hiện phong c&aacute;ch độc đ&aacute;o của ri&ecirc;ng m&igrave;nh.</p>
                    <p>Khả năng tản nhiệt của chiếc laptop n&agrave;y cũng cực tốt nhờ c&ocirc;ng nghệ HyperCool độc quyền bao gồm hệ thống Anti-Dust Cooling c&oacute; thể chỉnh 3 chế độ quạt kh&aacute;c nhau. Thiết kế 2 quạt mang lại hiệu quả l&agrave;m m&aacute;t tối ưu nhất.</p>
                    <p><a href="https://cdn.tgdd.vn/2021/01/content/Tan-nhiet-800x444-3.jpg" onclick="return false;"><img alt="Laptop Asus TUF Gaming FX506LI i7 (HN096T) - Tản nhiệt" src="https://cdn.tgdd.vn/2021/01/content/Tan-nhiet-800x444-3.jpg" style="height:444px; width:800px" /></a></p>
                    <p>Kết nối ngoại vi thuận tiện nhờ đa dạng c&aacute;c cổng kết nối hỗ trợ, bao gồm: 2 cổng USB 3.2, HDMI, cổng LAN, USB 2.0, USB Type-C, v&agrave; c&aacute;c kết nối kh&ocirc;ng d&acirc;y si&ecirc;u nhạy Wifi 6 &ndash; 802.11ax, Bluetooth 5.0 để bạn dễ d&agrave;ng kết nối chiếc&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;của m&igrave;nh với c&aacute;c thiết bị kh&aacute;c, phục vụ cho nhu cầu giải tr&iacute; hay c&ocirc;ng việc.</p>
                    <h3>Mang đến khung h&igrave;nh chất lượng cao tr&ecirc;n m&agrave;n h&igrave;nh lớn 15.6 inch</h3>
                    <p><a href="https://www.thegioididong.com/laptop-asus" target="_blank">Laptop Asus</a>&nbsp;được trang bị m&agrave;n h&igrave;nh&nbsp;<strong><a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a>&nbsp;</strong>với viền m&agrave;n h&igrave;nh mỏng,&nbsp;độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;gi&uacute;p hiển thị h&igrave;nh ảnh sắc n&eacute;t, n&acirc;ng cao trải nghiệm khi chơi game. C&ocirc;ng nghệ m&agrave;n h&igrave;nh&nbsp;<strong>IPS</strong>&nbsp;cho g&oacute;c nh&igrave;n rộng để người chơi nắm bắt mọi vị tr&iacute; tr&ecirc;n m&agrave;n h&igrave;nh game, nắm giữ cơ hội dẫn đầu trận đấu. Tần số qu&eacute;t h&igrave;nh 144Hz đảm bảo c&aacute;c khoảnh khắc chuyển động mượt m&agrave;, &iacute;t bị t&igrave;nh trạng giật h&igrave;nh, x&eacute; h&igrave;nh khi cho game ở mức settings cao.</p>
                    <p>C&ocirc;ng nghệ chống ch&oacute;i&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Anti Glare</a>&nbsp;được trang bị cho m&agrave;n h&igrave;nh Asus HN096T bảo vệ chất lượng h&igrave;nh ảnh trong mọi điều kiện &aacute;nh s&aacute;ng, để khi sử dụng laptop ngo&agrave;i trời, g&oacute;c nh&igrave;n vẫn kh&ocirc;ng bị ảnh hưởng, đảm bảo tốt hơn cho thị lực.</p>
                    <p>&Acirc;m thanh cực đỉnh tr&ecirc;n c&ocirc;ng nghệ&nbsp;<strong><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-dts-tren-laptop-la-gi-1261821#dts-ultra-audio" target="_blank">DTS&reg; X:Ultra Audio</a></strong>&nbsp;t&aacute;i tạo m&ocirc;i trường &acirc;m thanh 3D thể hiện chất &acirc;m sống động như thực tế, mang người chơi v&agrave;o kh&ocirc;ng gian ch&acirc;n thật của từng tựa game đang trải nghiệm.</p>
                    <p>Với c&aacute;c t&iacute;nh năng tuyệt vời tr&ecirc;n, hẳn bạn chẳng n&ecirc;n bỏ lỡ chiếc laptop TUF Gaming FX506LI i7 (HN096T) n&agrave;y cho cả mục đ&iacute;ch chiến game giải tr&iacute; đỉnh cao, hay phục vụ nhu cầu thiết kế chuy&ecirc;n nghiệp&hellip;</p>
                    ',
        'slug'=>Str::slug('Asus TUF Gaming FX506LI i7 10870H/8GB/512GB/144Hz/4GB GTX1650Ti/Win10 (HN096T)','-').'.aspx',
        'created_at'=>now(),
        ]);

        DB::table('products')->insert([
        'name'=>'Asus TUF Gaming FX516PM i7 11370H/16GB/512GB/6GB RTX3060/144Hz/Win10 (HN023T)',
        'price'=>32490000,
        'old_price'=>33890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/236769/asus-tuf-gaming-fx516pm-i7-hn023t-14-600x600.jpg',
        'rate'=>400,
        'category_id'=>4,
        'brand_id'=>2,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Asus TUF Gaming FX516PM i7 11370H/16GB/512GB/6GB RTX3060/144Hz/Win10 (HN023T)</h2>
                        <p><img src="https://cdn.tgdd.vn/Products/Images/44/236769/Slider/vi-vn-asus-tuf-gaming-fx516pm-i7-hn023t-1.jpg" /></p>
                        <h3><a href="https://www.thegioididong.com/laptop/asus-tuf-gaming-fx516pm-i7-hn023t" target="_blank">Laptop Asus TUF Gaming FX516PM i7 (HN023T)</a>&nbsp;sở hữu d&ograve;ng chip CPU Intel Core i7 thế hệ 11 mạnh mẽ mang đến hiệu năng ấn tượng cho nhu cầu thiết kế đồ họa, l&agrave;m việc văn ph&ograve;ng v&agrave; cả chiến game cực chất.</h3>
                        <h3>Cấu h&igrave;nh chuẩn gaming, thỏa sức chiến mọi tựa game</h3>
                        <p>Được trang bị d&ograve;ng chip<strong>&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Intel Core i7</a>&nbsp;</strong>Tiger Lake<strong>&nbsp;<a href="https://www.thegioididong.com/laptop-cpu-intel-gen-11" target="_blank">thế hệ 11</a></strong>&nbsp;với&nbsp;<strong>4 nh&acirc;n,&nbsp;8 luồng</strong>, mức xung nhịp trung b&igrave;nh l&agrave;&nbsp;<strong>3.30 GHz</strong>&nbsp;v&agrave; đạt xung nhịp tối đa&nbsp;<strong>4.8 GHz</strong>&nbsp;nhờ Turbo Boost, thể hiện hiệu năng xử l&yacute; ấn tượng tr&ecirc;n c&aacute;c t&aacute;c vụ nặng, Asus TUF Gaming FX516PM được xem l&agrave; một đề cử đắt gi&aacute; cho người d&ugrave;ng t&igrave;m kiếm laptop phục vụ đồ họa kỹ thuật hay chiến game chuy&ecirc;n nghiệp.</p>
                        <p>Kết hợp c&ugrave;ng với&nbsp;<a href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank">card đồ họa rời</a><strong>&nbsp;NVIDIA&nbsp;GeForce&nbsp;RTX&nbsp;3060 6GB</strong>&nbsp;cho khả năng xử l&yacute; độ họa mạnh mẽ, render video, chỉnh sửa ảnh 3D hay chiến c&aacute;c tựa game hot, setting cao đến ultra như CS:GO, Far Cry 5, Genshin Impact,... trở n&ecirc;n thật đơn giản tr&ecirc;n chiếc&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;n&agrave;y.</p>
                        <p><a href="https://www.thegioididong.com/images/44/236769/asus-tuf-gaming-fx516pm-i7-hn023t-4-1.jpg" onclick="return false;"><img alt="Asus TUF Gaming FX516PM i7 11370H (HN023T) - Cấu hình" src="https://cdn.tgdd.vn/Products/Images/44/236769/asus-tuf-gaming-fx516pm-i7-hn023t-4-1.jpg" /></a></p>
                        <p><strong><a href="https://www.thegioididong.com/laptop?g=16-gb" target="_blank">RAM 16 GB</a></strong>&nbsp;đẩy nhanh tốc độ xử l&yacute; đa t&aacute;c vụ, lướt web, chơi game mượt m&agrave; song song với c&aacute;c c&ocirc;ng việc đồ họa kh&aacute;c, kh&ocirc;ng lo giật lag, đứng m&agrave;n h&igrave;nh với tốc độ bus RAM 3200 Hz. N&acirc;ng cấp RAM đến&nbsp;<strong>32 GB</strong>&nbsp;dễ d&agrave;ng cho người c&oacute; nhu cầu.</p>
                        <p><strong><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank">Ổ cứng SSD</a>&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">512 GB</a>&nbsp;M.2 PCIe</strong>&nbsp;với tốc độ đọc ghi nhanh ch&oacute;ng, l&agrave; kho lưu trữ l&yacute; tưởng cho t&agrave;i liệu l&agrave;m việc, phim ảnh, c&aacute;c bản nhạc hay c&aacute;c tựa game y&ecirc;u th&iacute;ch của bạn&hellip; Đồng thời hỗ trợ&nbsp;<strong>khe cắm SSD M.2 PCle</strong>&nbsp;tạo kh&ocirc;ng gian lưu trữ kh&ocirc;ng giới hạn cho c&aacute;c t&agrave;i nguy&ecirc;n của bạn.</p>
                        <p><a href="https://www.thegioididong.com/images/44/236769/asus-tuf-gaming-fx516pm-i7-hn023t-5-1.jpg" onclick="return false;"><img alt="Asus TUF Gaming FX516PM i7 11370H (HN023T) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/236769/asus-tuf-gaming-fx516pm-i7-hn023t-5-1.jpg" /></a></p>
                        <h3>&nbsp;</h3>
                      ',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Asus TUF Gaming FX516PM i7 11370H/16GB/512GB/6GB RTX3060/144Hz/Win10 (HN023T)</h3>
                            <p><img alt="Thông số kỹ thuật 236769" src="https://cdn.tgdd.vn/Products/Images/44/236769/Kit/asus-tuf-gaming-fx516pm-i7-hn023t-note.jpg" style="height:430px; width:500px" /></p>
                            <ul>
                                <li>﻿</li>
                                <li>Bộ xử l&yacute;</li>
                                <li>C&ocirc;ng nghệ CPU
                                <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-bo-xu-ly-intel-core-the-he-thu-11-1304404" target="_blank">Intel Core i7 Tiger Lake</a></p>
                                </li>
                                <li>Loại CPU
                                <p>11370H</p>
                                </li>
                                <li>Tốc độ CPU
                                <p>3.30 GHz</p>
                                </li>
                                <li>Tốc độ tối đa
                                <p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.8 GHz</a></p>
                                </li>
                                <li>Bộ nhớ RAM, Ổ cứng</li>
                                <li>RAM
                                <p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">16 GB</a></p>
                                </li>
                                <li>Loại RAM
                                <p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
                                </li>
                                <li>Tốc độ Bus RAM
                                <p>3200 MHz</p>
                                </li>
                                <li>Hỗ trợ RAM tối đa
                                <p>32 GB</p>
                                </li>
                                <li>Ổ cứng
                                <p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cac-chuan-toc-do-cua-o-cung-ssd-tren-1115453" target="_blank">Hỗ trợ khe cắm SSD M.2 PCIe</a></p>
                                </li>
                                <li>M&agrave;n h&igrave;nh</li>
                                <li>K&iacute;ch thước m&agrave;n h&igrave;nh
                                <p>15.6 inch</p>
                                </li>
                                <li>Độ ph&acirc;n giải
                                <p>Full HD (1920 x 1080), 144Hz</p>
                                </li>
                                <li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
                                <p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a>Adaptive-Sync</p>
                                </li>
                                <li>M&agrave;n h&igrave;nh cảm ứng
                                <p>Kh&ocirc;ng c&oacute;</p>
                                </li>
                                <li>Đồ họa v&agrave; &Acirc;m thanh</li>
                                <li>Thiết kế card
                                <p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
                                </li>
                                <li>Card đồ họa
                                <p>NVIDIA&nbsp;GeForce&nbsp;RTX&nbsp;3060, 6GB</p>
                                </li>
                                <li>C&ocirc;ng nghệ &acirc;m thanh
                                <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-am-thanh-stereo-am-thanh-kep-dual-spea-920547" target="_blank">Stereo speakers</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-dts-tren-laptop-la-gi-1261821#dts-ultra-audio" target="_blank">DTS X:Ultra Audio</a></p>
                                </li>
                                <li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
                                <li>Cổng giao tiếp
                                <p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">3 x USB 3.2</a><a href="https://www.thegioididong.com/tin-tuc/tim-hieu-ve-cong-thunderbolt-4-1248860" target="_blank">Thunderbolt4 USB-C</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI 2.0</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a></p>
                                </li>
                                <li>Kết nối kh&ocirc;ng d&acirc;y
                                <p><a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-bluetooth-51-tren-laptop-la-gi-1273789" target="_blank">Bluetooth 5.1</a></p>
                                </li>
                                <li>Webcam
                                <p>Kh&ocirc;ng t&iacute;ch hợp</p>
                                </li>
                                <li>Đ&egrave;n b&agrave;n ph&iacute;m
                                <p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
                                </li>
                                <li>K&iacute;ch thước &amp; trọng lượng</li>
                                <li>K&iacute;ch thước
                                <p>D&agrave;i 360 mm - Cao 252 mm - D&agrave;y 19.9 mm</p>
                                </li>
                                <li>Trọng lượng
                                <p>2.0 Kg</p>
                                </li>
                                <li>Chất liệu
                                <p>Vỏ nhựa - nắp lưng bằng kim loại</p>
                                </li>
                                <li>Th&ocirc;ng tin kh&aacute;c</li>
                                <li>Model Adapter sạc
                                <p>ADP-200JB D</p>
                                </li>
                                <li>Loại PIN
                                <p>PIN liền</p>
                                </li>
                                <li>Th&ocirc;ng tin Pin
                                <p>4-cell Li-ion, 76 Wh</p>
                                </li>
                                <li>Hệ điều h&agrave;nh
                                <p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
                                </li>
                                <li>Thời điểm ra mắt
                                <p>2021</p>
                                </li>
                            </ul>
                            ',
        'details'=> '<h2>Huyền b&iacute;, sang trọng trong thiết kế</h2>
                        <p>D&ugrave; mang cấu h&igrave;nh chuẩn gaming nhưng&nbsp;<a href="https://www.thegioididong.com/laptop-asus-tuf-gaming" target="_blank">Asus TUF Gaming</a>&nbsp;n&agrave;y lại c&oacute; vẻ ngo&agrave;i rất huyền b&iacute; với m&agrave;u đen x&aacute;m đầy t&ograve; m&ograve; khiến ai cũng phải muốn thử trải nghiệm. Lớp vỏ nhựa, nắp lưng kim loại sang trọng, kh&ocirc;ng g&acirc;y trở ngại cho nhu cầu sử dụng văn ph&ograve;ng, giao tiếp c&ocirc;ng việc.</p>
                        <p>Trọng lượng m&aacute;y&nbsp;<strong>2 kg</strong>, d&agrave;y&nbsp;<strong>19.9 mm</strong>&nbsp;kh&aacute; gọn nhẹ cho một thiết kế chuẩn gaming, m&agrave; vẫn thật chắc chắn, ấn tượng.</p>
                        <p><a href="https://www.thegioididong.com/images/44/236769/asus-tuf-gaming-fx516pm-i7-hn023t-2-1.jpg" onclick="return false;"><img alt="Asus TUF Gaming FX516PM i7 11370H (HN023T) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/236769/asus-tuf-gaming-fx516pm-i7-hn023t-2-1.jpg" /></a></p>
                        <p><a href="https://www.thegioididong.com/laptop-asus" target="_blank">Laptop Asus</a>&nbsp;hỗ trợ đ&egrave;n b&agrave;n ph&iacute;m, thật thoải m&aacute;i để chiến game ban đ&ecirc;m hay thao t&aacute;c l&agrave;m việc trong điều kiện thiếu s&aacute;ng.</p>
                        <p><a href="https://www.thegioididong.com/images/44/236769/asus-tuf-gaming-fx516pm-i7-hn023t-7-1.jpg" onclick="return false;"><img alt="Asus TUF Gaming FX516PM i7 11370H (HN023T) - Đèn bàn phím" src="https://cdn.tgdd.vn/Products/Images/44/236769/asus-tuf-gaming-fx516pm-i7-hn023t-7-1.jpg" /></a></p>
                        <p>Hỗ trợ đa dạng c&aacute;c cổng kết nối: USB 3.2 x 3, Thunderbolt4 USB-C, HDMI, LAN (RJ45) v&agrave; kết nối kh&ocirc;ng d&acirc;y chất lượng cao Wi-Fi 6, Bluetooth 5.0 phuc vụ ho&agrave;n hảo cho mọi nhu cầu sử dụng.</p>
                        <p><a href="https://www.thegioididong.com/images/44/236769/asus-tuf-gaming-fx516pm-i7-hn023t-10-1.jpg" onclick="return false;"><img alt="Asus TUF Gaming FX516PM i7 11370H (HN023T) - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/236769/asus-tuf-gaming-fx516pm-i7-hn023t-10-1.jpg" /></a></p>
                        <h3>M&agrave;n h&igrave;nh giải tr&iacute; game chất lượng cao, thỏa m&atilde;n tầm nh&igrave;n</h3>
                        <p>M&agrave;n h&igrave;nh laptop k&iacute;ch thước&nbsp;<strong><a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a></strong>&nbsp;với độ ph&acirc;n giải sắc n&eacute;t&nbsp;<strong>Full HD (1920 x 1080)</strong>, tần số qu&eacute;t đến&nbsp;<strong>144 Hz</strong>&nbsp;mang đến những h&igrave;nh ảnh v&agrave; chuyển động l&yacute; tưởng cho những tựa game h&agrave;nh động, tốc độ, loại bỏ ho&agrave;n to&agrave;n hiện tượng nh&ograve;e m&agrave;u, x&eacute; h&igrave;nh.</p>
                        <p><a href="https://www.thegioididong.com/laptop-vien-man-hinh-mong" target="_blank">Viền m&agrave;n h&igrave;nh mỏng</a>&nbsp;cả 3 cạnh mở rộng khung h&igrave;nh tốt, m&agrave;n h&igrave;nh chống ch&oacute;i&nbsp;<strong>Anti Glare</strong>&nbsp;v&agrave;&nbsp;<strong>tấm nền IPS&nbsp;</strong>bảo to&agrave;n chất lượng khung h&igrave;nh ở mọi g&oacute;c nh&igrave;n v&agrave; trong điều kiện chiếu s&aacute;ng kh&aacute;c nhau, để mỗi ph&uacute;t trải nghiệm c&ugrave;ng chiếc&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;l&agrave; sự thỏa m&atilde;n thị gi&aacute;c cao nhất.</p>
                        <p><a href="https://www.thegioididong.com/images/44/236769/asus-tuf-gaming-fx516pm-i7-hn023t-9-1.jpg" onclick="return false;"><img alt="Asus TUF Gaming FX516PM i7 11370H (HN023T) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/236769/asus-tuf-gaming-fx516pm-i7-hn023t-9-1.jpg" /></a></p>
                        <p>C&ocirc;ng nghệ &acirc;m thanh&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-dts-tren-laptop-la-gi-1261821" target="_blank"><strong>DTS X Ultra Audio</strong></a>&nbsp;cho chất &acirc;m mạnh mẽ uy lực, thể hiện chi tiết từng &acirc;m nhỏ nhất đồng thời giả lập &acirc;m v&ograve;m cho bạn cảm gi&aacute;c như đang thật sự h&ograve;a m&igrave;nh trong game.</p>                                               <p>Laptop Asus TUF Gaming FX516PM i7 (HN023T) chắc chắn sẽ kh&ocirc;ng l&agrave;m c&aacute;c gamer thất vọng, với những gi&aacute; trị m&agrave; n&oacute; sở hữu. Chiến game, đồ họa kỹ thuật, tất cả thật nhẹ nh&agrave;ng tr&ecirc;n chiếc laptop mạnh mẽ n&agrave;y.</p>
                    ',
        'slug'=>Str::slug('Asus TUF Gaming FX516PM i7 11370H/16GB/512GB/6GB RTX3060/144Hz/Win10 (HN023T)','-').'.aspx',
        'created_at'=>now(),
        ]);

        DB::table('products')->insert([
            'name'=>'Dell G3 15 3500 i5 10300H/8GB/256GB+1TB/120Hz/4GB GTX1650/Win10 (70223130)',
            'price'=>22490000,
            'old_price'=>23890000,
            'quantity'=>50,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-082721-042709-600x600.jpg',
            'rate'=>400,
            'category_id'=>7,
            'brand_id'=>3,
            'user_id'=>random_int(1,5),
            'describe'=> '<h2>Đặc điểm nổi bật của Dell G3 15 3500 i5 10300H/8GB/256GB+1TB/120Hz/4GB GTX1650/Win10 (70223130)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/232481/Slider/dell-g3-15-3500-i5-70223130-110121-0840324.jpg" /></p>

<h2><a href="https://www.thegioididong.com/laptop/dell-g3-15-3500-i5-70223130" target="_blank">Laptop Dell G3 15 3500 i5 (70223130)</a>&nbsp;l&agrave; chiếc laptop gaming thuộc series G của nh&agrave; Dell với thiết kế cực ngầu v&agrave; hiệu năng mạnh mẽ, hứa hẹn sẽ l&agrave; người bạn đồng h&agrave;nh của c&aacute;c game thủ trong mọi cuộc chiến.&nbsp;</h2>

<h3>Thiết kế mạnh mẽ c&aacute; t&iacute;nh</h3>

<p>Dell G3 15 3500 i5 c&oacute; thiết kế mạnh mẽ với c&aacute;c đường cắt vu&ocirc;ng vức, tone xanh - đen cực k&igrave; nổi bật. M&aacute;y c&oacute; độ d&agrave;y&nbsp;<strong>28.18 mm</strong>&nbsp;v&agrave; trọng lượng&nbsp;<strong>2.56 kg</strong>, kh&aacute; gọn nhẹ đối với một chiếc laptop gaming.</p>

<p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114621-084624.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114621-084624.jpg" /></a></p>

<p>B&agrave;n ph&iacute;m tr&ecirc;n Dell G3 c&oacute;&nbsp;<strong>đ&egrave;n nền</strong>&nbsp;m&agrave;u xanh vừa tiện lợi cho việc g&otilde; ph&iacute;m ở nơi thiếu &aacute;nh s&aacute;ng vừa tr&ocirc;ng ấn tượng hơn. Phần Touchpad được đặt lệch hẳn sang một b&ecirc;n với một đường viền xanh chạy dọc bắt mắt.</p>

<p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114521-084508.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - Đèn bàn phím" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114521-084508.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;c&ograve;n c&oacute;&nbsp;<strong>cảm biến v&acirc;n tay&nbsp;</strong>t&iacute;ch hợp tr&ecirc;n ph&iacute;m nguồn cực tiện lợi để mở m&aacute;y v&agrave; tăng khả năng bảo mật cho m&aacute;y. M&aacute;y cũng trang bị một Webcam HD tiện lợi cho c&aacute;c cuộc gọi nh&oacute;m, hội họp hoặc c&aacute;c streamer.&nbsp;</p>

<p><a href="https://www.thegioididong.com/laptop-dell" target="_blank">Laptop Dell</a>&nbsp;gaming được trang bị đa dạng cổng kết nối tiện lợi như:&nbsp;<strong>USB 3.2</strong>,&nbsp;<strong>HDMI</strong>,&nbsp;<strong>LAN (RJ45)</strong>. Ngo&agrave;i ra, chuẩn&nbsp;<strong>Bluetooth v5.0&nbsp;</strong>v&agrave;&nbsp;<strong>Wi-Fi 802.11 a/b/g/n/ac</strong>&nbsp;gi&uacute;p c&aacute;c kết nối kh&ocirc;ng d&acirc;y mượt m&agrave;, ổn định để chơi game online thoải m&aacute;i.</p>

<p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114521-084518.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - Kết nối" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114521-084518.jpg" /></a></p>

<h3>&nbsp;</h3>
',
            'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Dell G3 15 3500 i5 10300H/8GB/256GB+1TB/120Hz/4GB GTX1650/Win10 (70223130)</h3>

<p><img alt="Thông số kỹ thuật 232481" src="https://cdn.tgdd.vn/Products/Images/44/232481/Kit/dell-g3-15-3500-i5-70223130-note.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i5 Ice Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-i5-10300h-uu-nhuoc-diem-la-1263751" target="_blank">10300H</a></p>
	</li>
	<li>Tốc độ CPU
	<p>2.50 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.5 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p>DDR4 2 khe (1 khe 4GB + 1 khe 4GB)</p>
	</li>
	<li>Tốc độ Bus RAM
	<p>2933 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>16 GB</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD 256GB NVMe PCIe</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/hdd-la-gi-922791" target="_blank">HDD: 1 TB</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>15.6 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p>Full HD (1920 x 1080), 120Hz</p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p>WVA&nbsp;,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-gtx-1650-co-manh-kh-1201415" target="_blank">NVIDIA GeForce GTX1650 4GB</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">3 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
	</li>
	<li>Khe đọc thẻ nhớ
	<p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">SD</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>T&iacute;nh năng kh&aacute;c
	<p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 364.46 mm - Rộng 254 mm - D&agrave;y 28.18 mm</p>
	</li>
	<li>Trọng lượng
	<p>2.56 kg</p>
	</li>
	<li>Chất liệu
	<p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p>3-cell Li-ion, 51 Wh</p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2020</p>
	</li>
</ul>
',
            'details'=> '<h2>Hiệu năng cao, chiến game cực đ&atilde;</h2>

<p>Dell G3 trang bị chip Intel&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank"><strong>Core i5</strong></a>&nbsp;Ice Lake d&ograve;ng H&nbsp;<strong><a href="https://www.thegioididong.com/laptop-cpu-intel-gen-10" target="_blank">thế hệ 10</a></strong>&nbsp;với xung nhịp cơ bản&nbsp;<strong>2.50 GHz</strong>&nbsp;v&agrave; tốc độ tối đa l&ecirc;n đến&nbsp;<strong>4.5 GHz</strong>&nbsp;nhờ c&ocirc;ng nghệ &eacute;p xung&nbsp;<strong>Turbo Boost</strong>&nbsp;mang lại hiệu năng mạnh mẽ thỏa sức giải tr&iacute; với c&aacute;c tựa game hot đồ họa cao, mượt m&agrave; v&agrave; tiết kiệm điện năng.</p>

<p>Bộ nhớ&nbsp;<a href="https://www.thegioididong.com/laptop-8-gb" target="_blank"><strong>RAM 8 GB</strong></a>&nbsp;(c&oacute; thể n&acirc;ng cấp tối đa&nbsp;<strong>16 GB</strong>) cho khả năng đa nhiệm tốt, vừa l&agrave;m việc vừa nghe nhạc hay c&oacute; thể mở nhiều tab Chrome c&ugrave;ng l&uacute;c.</p>

<p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114521-084539.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - Hiệu năng" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114521-084539.jpg" /></a></p>

<p>Tốc độ m&aacute;y được cải thiện đ&aacute;ng kể khi vừa trang bị&nbsp;<strong><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank">ổ cứng SSD</a></strong>&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-256-gb" target="_blank">256 GB</a>&nbsp;tốc độ cao vừa c&oacute; ổ cứng HDD 1 TB tiện lợi cho việc lưu trữ.</p>

<p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114621-084602.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114621-084602.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank"><strong>Card đồ họa rời</strong></a>&nbsp;<strong>NVIDIA GeForce GTX 1650 4 GB</strong>&nbsp;với bộ vi xử l&yacute; đa luồng mạnh mẽ v&agrave; kiến tr&uacute;c Turing n&acirc;ng hiệu năng đồ họa l&ecirc;n một tầm cao mới. Những tựa game y&ecirc;u cầu đồ họa cao sẽ được thể hiện chi tiết, kh&ocirc;ng giật lag, trải nghiệm thiết kế 2D hay chỉnh sửa video cũng rất mượt m&agrave;.</p>

<p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114521-084528.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - Chơi game" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114521-084528.jpg" /></a></p>

<h3>Giải tr&iacute; m&atilde;n nh&atilde;n với m&agrave;n h&igrave;nh 120 Hz</h3>

<p>M&agrave;n h&igrave;nh tr&ecirc;n Dell G3 c&oacute; k&iacute;ch thước&nbsp;<strong><a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a></strong>, 2 cạnh b&ecirc;n được thiết kế mỏng cho trải nghiệm quan s&aacute;t thoải m&aacute;i hơn.&nbsp;Độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;gi&uacute;p mọi thứ trở n&ecirc;n sống động, ch&acirc;n thực để xem phim, chơi game đều đ&atilde; mắt. Tần số qu&eacute;t l&ecirc;n đến<strong>&nbsp;120Hz</strong>&nbsp;gi&uacute;p h&igrave;nh ảnh hiển thị mượt m&agrave; hơn, loại bỏ hiện tượng giật x&eacute; h&igrave;nh khi chơi những tựa game y&ecirc;u cầu đồ họa cao.&nbsp;</p>

<p>M&agrave;n h&igrave;nh c&ograve;n được trang bị c&ocirc;ng nghệ chống ch&oacute;i&nbsp;<strong>Anti Glare</strong>&nbsp;gi&uacute;p hiển thị ổn định ngay cả khi sử dụng ở điều kiện &aacute;nh s&aacute;ng phức tạp.</p>

<p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114521-084549.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114521-084549.jpg" /></a></p>

<p>Dải loa k&eacute;p với &acirc;m thanh&nbsp;<strong>Realtek Nahimic 3D Audio</strong>&nbsp;t&aacute;i hiện mọi &acirc;m thanh, tiếng động, nền nhạc trong game cực k&igrave; sống động, dễ d&agrave;ng ph&aacute;t hiện kẻ địch từ mọi hướng.</p>

<p><a href="https://www.thegioididong.com/images/44/232481/dell-g3-15-3500-i5-70223130-114421-084459.jpg" onclick="return false;"><img alt="Dell G3 15 3500 i5 (70223130) - Âm thanh" src="https://cdn.tgdd.vn/Products/Images/44/232481/dell-g3-15-3500-i5-70223130-114421-084459.jpg" /></a></p>

<p>Thiết kế 2 quạt k&eacute;p cho ph&eacute;p bạn chơi game kh&ocirc;ng bị gi&aacute;n đoạn v&agrave; đảm bảo nhiệt độ hệ thống lu&ocirc;n m&aacute;t mẻ để hiệu năng đạt mức cao nhất.&nbsp;</p>

<p>Laptop Dell G3 15 3500 i5 (70223130) l&agrave; d&ograve;ng&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;tầm trung với thiết kế đậm vẻ cả t&iacute;nh v&agrave; hiệu năng khỏe, ph&ugrave; hợp với c&aacute;c game thủ trẻ hoặc người vừa l&agrave;m văn ph&ograve;ng, đồ họa vừa muốn giải tr&iacute; với c&aacute;c tựa game.</p>
',
            'slug'=>Str::slug('Dell G3 15 3500 i5 10300H/8GB/256GB+1TB/120Hz/4GB GTX1650/Win10 (70223130)','-').'.aspx',
            'created_at'=>now(),
        ]);

        DB::table('products')->insert([
            'name'=>'HP Pavilion 15 eg0007TX i7 1165G7/8GB/512GB/2GB MX450/Office H&S2019//Win10 (2D9D5PA)',
            'price'=>23490000,
            'old_price'=>24890000,
            'quantity'=>50,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/236146/hp-pavilion-15-eg0007tx-i7-2d9d5pa-600x600.jpg',
            'rate'=>400,
            'category_id'=>7,
            'brand_id'=>1,
            'user_id'=>random_int(1,5),
            'describe'=> '<h2>Đặc điểm nổi bật của HP Pavilion 15 eg0007TX i7 1165G7/8GB/512GB/2GB MX450/Office H&amp;S2019//Win10 (2D9D5PA)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/236146/Slider/vi-vn-hp-pavilion-15-eg0007tx-i7-2d9d5pa-1.jpg" /></p>

<p><a href="https://www.thegioididong.com/laptop/hp-pavilion-15-eg0007tx-i7-2d9d5pa" target="_blank">Laptop HP Pavilion 15 eg0007TX i7 (2D9D5PA)</a>&nbsp;l&agrave; chiếc laptop sang trọng - cao cấp được ra mắt năm 2020 của nh&agrave; HP. Với điểm mạnh về hiệu năng c&ugrave;ng thiết kế đơn giản, tinh tế, HP Pavilion 15 lu&ocirc;n nằm trong top những chiếc laptop đ&aacute;ng sở hữu nhất trong ph&acirc;n kh&uacute;c.</p>

<h3>Kiểu d&aacute;ng gọn nhẹ, sang trọng v&agrave; tinh tế</h3>

<p>Với thiết kế thanh mảnh, chất liệu nắp lưng v&agrave; chiếu nghỉ tay bằng kim loại với logo HP s&aacute;ng b&oacute;ng tr&ecirc;n mặt lưng,&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq-pavilion" target="_blank">HP Pavilion</a>&nbsp;mang đến thiết kế sang trọng, đẹp mắt m&agrave; vẫn đảm bảo độ mỏng nhẹ, việc di chuyển m&aacute;y trở n&ecirc;n dễ d&agrave;ng hơn khi m&aacute;y chỉ nặng&nbsp;<strong>1.723 kg&nbsp;</strong>v&agrave; d&agrave;y&nbsp;<strong>17.9 mm</strong>&nbsp;cho bạn dễ d&agrave;ng cho v&agrave;o balo đem theo b&ecirc;n m&igrave;nh.</p>

<p><a href="https://www.thegioididong.com/images/44/236146/hp-pavilion-15-eg0007tx-i7-2d9d5pa-2-1.jpg" onclick="return false;"><img alt="HP Pavilion 15 eg0007TX i7 1165G7 2D9D5PA) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/236146/hp-pavilion-15-eg0007tx-i7-2d9d5pa-2-1.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;c&oacute; c&aacute;c cổng giao tiếp th&ocirc;ng dụng, gồm 2 cổng USB 3.1, HDMI gi&uacute;p truyền tải h&igrave;nh ảnh v&agrave; &acirc;m thanh qua thiết bị kh&aacute;c nhưng vẫn giữ được độ ph&acirc;n giải cũng như chất lượng h&igrave;nh ảnh, USB Type-C v&agrave; 1 khe đọc thẻ nhớ Micro SD, HP Pavilion cho ph&eacute;p người d&ugrave;ng kết nối m&aacute;y với nhiều ứng dụng kh&aacute;c nhau để trao đổi, truyền tải dữ liệu tốc độ cao, tiết kiệm pin cho thiết bị.</p>

<p><a href="https://www.thegioididong.com/images/44/236146/hp-pavilion-15-eg0007tx-i7-2d9d5pa-8-1.jpg" onclick="return false;"><img alt="HP Pavilion 15 eg0007TX i7 1165G7 2D9D5PA) - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/236146/hp-pavilion-15-eg0007tx-i7-2d9d5pa-8-1.jpg" /></a></p>

<p><strong>WiFi 802.11 chuẩn a/b/g/n/ac</strong>&nbsp;với băng tần&nbsp;<strong>5 GHz</strong>&nbsp;v&agrave; tốc độ tối đa l&ecirc;n đến&nbsp;<strong>1730 Mbps</strong>&nbsp;cho khả năng kết nối ổn định để bạn l&agrave;m việc, xem phim online với đường truyền mạnh, kh&ocirc;ng bị chập chờn.</p>

<h3>Hiệu năng mạnh, l&agrave;m việc lẫn giải tr&iacute; cực đ&atilde;&nbsp;</h3>

<p>HP Pavilion 15 sử dụng con chip thế hệ thứ 11 Intel&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Core i7</a></strong>&nbsp;Tiger Lake d&agrave;nh cho những chiếc laptop mỏng nhẹ v&agrave; laptop cao cấp, cho hiệu năng xử l&iacute; cao, được sản xuất tr&ecirc;n tiến tr&igrave;nh&nbsp;<strong>10 nm</strong>&nbsp;với<strong>&nbsp;4 nh&acirc;n 8 luồng</strong>&nbsp;- xung nhịp cao nhất đến<strong>&nbsp;4.7 GHz</strong>&nbsp;hứa hẹn mang đến trải nghiệm l&agrave;m việc mượt m&agrave; nhất đối với c&aacute;c ứng dụng văn ph&ograve;ng, đồ họa 2D ở mức chuy&ecirc;n nghiệp như Photoshop, AI,...</p>

<p>Laptop c&ograve;n c&oacute; cho m&igrave;nh&nbsp;<strong><a href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank">card đồ họa rời</a></strong>&nbsp;<strong>NVIDIA GeForce MX450 2 GB</strong>&nbsp;gi&uacute;p h&igrave;nh ảnh t&aacute;i hiện mượt m&agrave;, l&agrave;m đồ họa với hiệu suất cao. C&aacute;c thao t&aacute;c như chỉnh sửa ảnh, vẽ logo hay thiết kế poster bằng AI chuy&ecirc;n nghiệp, dựng h&igrave;nh 3D hay cắt sửa video đều được hỗ trợ một c&aacute;ch mượt m&agrave;. M&aacute;y cũng chơi được c&aacute;c tựa game cấu h&igrave;nh từ thấp đến trung b&igrave;nh như LOL, PUBG,...</p>

<p><a href="https://www.thegioididong.com/laptop-8-gb" target="_blank"><strong>RAM 8 GB</strong></a>&nbsp;<strong>DDR4 (2 khe)</strong>&nbsp;cho khả năng đa nhiệm mượt v&agrave; ổn định để bạn c&oacute; thể sử dụng được nhiều ứng dụng c&ugrave;ng một l&uacute;c với tốc độ&nbsp;<strong>Bus RAM</strong>&nbsp;trung b&igrave;nh l&agrave;&nbsp;<strong>3200 MHz</strong>. B&ecirc;n cạnh đ&oacute;, m&aacute;y cũng hỗ trợ RAM tối đa&nbsp;<strong>32 GB</strong>&nbsp;cho người d&ugrave;ng c&oacute; nhu cầu n&acirc;ng cấp.</p>

<p><a href="https://www.thegioididong.com/images/44/236146/hp-pavilion-15-eg0007tx-i7-2d9d5pa-4-1.jpg" onclick="return false;"><img alt="HP Pavilion 15 eg0007TX i7 1165G7 2D9D5PA) - Cấu hình" src="https://cdn.tgdd.vn/Products/Images/44/236146/hp-pavilion-15-eg0007tx-i7-2d9d5pa-4-1.jpg" /></a></p>

<p>Laptop c&ograve;n được trang bị&nbsp;<strong><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank">ổ cứng SSD</a></strong>&nbsp;<strong>512 GB M.2 PCIe&nbsp;</strong>c&oacute; tốc độ đọc ghi cực nhanh cho HP Pavilion khả năng vận h&agrave;nh nhanh ch&oacute;ng,lưu trữ thoải m&aacute;i m&agrave; kh&ocirc;ng lo hết bộ nhớ.</p>

<p><a href="https://www.thegioididong.com/images/44/236146/hp-pavilion-15-eg0007tx-i7-2d9d5pa-5-1.jpg" onclick="return false;"><img alt="HP Pavilion 15 eg0007TX i7 1165G7 2D9D5PA) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/236146/hp-pavilion-15-eg0007tx-i7-2d9d5pa-5-1.jpg" /></a></p>

<h3>&nbsp;</h3>
',
            'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết HP Pavilion 15 eg0007TX i7 1165G7/8GB/512GB/2GB MX450/Office H&amp;S2019//Win10 (2D9D5PA)</h3>

<p><img alt="Thông số kỹ thuật 236146" src="https://cdn.tgdd.vn/Products/Images/44/236146/Kit/hp-pavilion-15-eg0007tx-i7-2d9d5pa-note.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-bo-xu-ly-intel-core-the-he-thu-11-1304404" target="_blank">Intel Core i7 Tiger Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/chip-intel-core-i7-1165g7-co-gi-moi-so-voi-cac-the-1305222" target="_blank">1165G7</a></p>
	</li>
	<li>Tốc độ CPU
	<p>2.80 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p>Turbo Boost 4.7 GHz</p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>3200 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>32 GB</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>15.6 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-led-backlit-led-backlight-1183188" target="_blank">LED Backlit</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
	</li>
	<li>Card đồ họa
	<p>NVIDIA GeForce MX450, 2GB</p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-bang-olufsen-tren-laptop-955118" target="_blank">Bang &amp; Olufsen audio</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
	</li>
	<li>Khe đọc thẻ nhớ
	<p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">Micro SD</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 360.2 mm - Rộng 234.0 mm - D&agrave;y 17.9 mm</p>
	</li>
	<li>Trọng lượng
	<p>1.723 kg</p>
	</li>
	<li>Chất liệu
	<p>Nắp lưng v&agrave; chiếu nghỉ tay bằng kim loại</p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p>3-cell Li-ion, 41 Wh</p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p>Windows 10 Home SL + Office Home&amp;Student 2019 vĩnh viễn</p>
	</li>
	<li>Thời điểm ra mắt
	<p>2020</p>
	</li>
</ul>
',
            'details'=> '<h2>M&agrave;n h&igrave;nh hiển thị r&otilde; n&eacute;t, chống ch&oacute;i hiệu quả&nbsp;</h2>

<p>HP trang bị cho sản phẩm n&agrave;y một m&agrave;n h&igrave;nh&nbsp;<a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank"><strong>15.6 inch</strong></a>&nbsp;với độ ph&acirc;n giải&nbsp;<a href="https://www.thegioididong.com/laptop-full-hd" target="_blank"><strong>Full HD</strong></a>&nbsp;đem đến h&igrave;nh ảnh sắc n&eacute;t, m&agrave;u sắc được t&aacute;i hiện đầy ch&acirc;n thực. M&agrave;n h&igrave;nh rộng, viền mỏng kết hợp với tấm nền<strong>&nbsp;IPS</strong>&nbsp;gi&uacute;p m&agrave;u sắc cũng như g&oacute;c nh&igrave;n được cải thiện tốt hơn l&ecirc;n tới&nbsp;<strong>178 độ</strong>.</p>

<p>C&ocirc;ng nghệ&nbsp;<strong><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">chống ch&oacute;i</a></strong>&nbsp;gi&uacute;p người d&ugrave;ng kh&ocirc;ng bị mỏi mắt, m&agrave;n h&igrave;nh kh&ocirc;ng bị ch&oacute;i mờ d&ugrave; được sử dụng ở điều kiện &aacute;nh s&aacute;ng mạnh như ngo&agrave;i trời hay trước cửa sổ.</p>

<p><a href="https://www.thegioididong.com/images/44/236146/hp-pavilion-15-eg0007tx-i7-2d9d5pa-6-1.jpg" onclick="return false;"><img alt="HP Pavilion 15 eg0007TX i7 1165G7 2D9D5PA) - Hình ảnh hiển thị" src="https://cdn.tgdd.vn/Products/Images/44/236146/hp-pavilion-15-eg0007tx-i7-2d9d5pa-6-1.jpg" /></a></p>

<p>Tuy laptop mỏng nhẹ nhưng&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">laptop HP</a>&nbsp;Pavilion vẫn đem đến &acirc;m thanh được khuếch đại to r&otilde;, trong trẻo v&agrave; ch&acirc;n thực nhờ c&oacute; c&ocirc;ng nghệ&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-bang-olufsen-tren-laptop-955118" target="_blank">Bang &amp; Olufsen audio</a>.</p>

<p><a href="https://www.thegioididong.com/images/44/236146/hp-pavilion-15-eg0007tx-i7-2d9d5pa-7-1.jpg" onclick="return false;"><img alt="HP Pavilion 15 eg0007TX i7 1165G7 2D9D5PA) - Âm thanh" src="https://cdn.tgdd.vn/Products/Images/44/236146/hp-pavilion-15-eg0007tx-i7-2d9d5pa-7-1.jpg" /></a></p>

<p>Laptop HP Pavilion 15 eg0007TX i7 (2D9D5PA) l&agrave; phi&ecirc;n bản&nbsp;<a href="https://www.thegioididong.com/laptop?g=cao-cap-sang-trong" target="_blank">laptop cao cấp sang trọng</a>&nbsp;c&oacute; thiết kế mỏng nhẹ, m&agrave;n h&igrave;nh lớn, hiệu năng cao, ph&ugrave; hợp với giới doanh nh&acirc;n, văn ph&ograve;ng.&nbsp;</p>
',
            'slug'=>Str::slug('HP Pavilion 15 eg0007TX i7 1165G7/8GB/512GB/2GB MX450/Office H&S2019//Win10 (2D9D5PA)','-').'.aspx',
            'created_at'=>now(),
        ]);

        DB::table('products')->insert([
            'name'=>'Dell Vostro 3590 i7 10510U/8GB/256GB/2GB 610R5/Win10 (GRMGK2)',
            'price'=>20490000,
            'old_price'=>21890000,
            'quantity'=>50,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-220718-220718-600x600.jpg',
            'rate'=>400,
            'category_id'=>7,
            'brand_id'=>3,
            'user_id'=>random_int(1,5),
            'describe'=> '<h2>Đặc điểm nổi bật của Dell Vostro 3590 i7 10510U/8GB/256GB/2GB 610R5/Win10 (GRMGK2)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/220718/Slider/vi-vn-dell-vostro-3590-i7-grmgk2.jpg" /></p>

<p><a href="https://www.thegioididong.com/laptop/dell-vostro-3590-i7-grmgk2" target="_blank">Laptop Dell Vostro 3590 i7 (GRMGK2)</a>&nbsp;l&agrave; phi&ecirc;n bản&nbsp;<a href="https://www.thegioididong.com/laptop?g=do-hoa-ky-thuat" target="_blank">laptop đồ họa kĩ thuật</a>&nbsp;c&oacute; thiết kế hiện đại, cấu h&igrave;nh khỏe với vi xử l&iacute; gen 10 v&agrave; card đồ họa rời. Đ&acirc;y ch&iacute;nh l&agrave; chiếc laptop đ&aacute;ng c&acirc;n nhắc đối với d&acirc;n đồ họa hay sinh vi&ecirc;n khối ng&agrave;nh kĩ thuật.</p>

<h3>Đơn giản, hiện đại</h3>

<p><a href="https://www.thegioididong.com/laptop-dell" target="_blank">Dell</a>&nbsp;Vostro 3590 được thiết kế đơn giản, chắc chắn, trọng lượng nhẹ, khoảng<strong>&nbsp;1.99 kg</strong>, độ d&agrave;y&nbsp;<strong>19.8 mm</strong>&nbsp;mỏng nhẹ đối với một chiếc laptop 15.6 inch dễ d&agrave;ng để bạn đem theo b&ecirc;n m&igrave;nh.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-kg.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7 được thiết kế đơn giản" src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-kg.jpg" /></a></p>

<p>Chỉ cần chạm nhẹ, cảm biến sẽ qu&eacute;t v&acirc;n tay gi&uacute;p bạn mở kh&oacute;a thiết bị m&agrave; kh&ocirc;ng cần nhập mật khẩu.</p>

<p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-va%CC%82ntay-1.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7 mở khóa mà không cần nhập mật khẩu" src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-va%CC%82ntay-1.jpg" /></a></p>

<p>M&agrave;n h&igrave;nh<strong>&nbsp;<a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a>&nbsp;Full HD (1920 x 1080)</strong>&nbsp;sử dụng c&ocirc;ng nghệ m&agrave;n h&igrave;nh&nbsp;<strong>LED Backlit</strong>&nbsp;hiển thị h&igrave;nh ảnh sắc n&eacute;t, m&agrave;u sắc tươi s&aacute;ng v&agrave; độ tương phản h&igrave;nh ảnh cao hơn.</p>

<p>Tấm nền&nbsp;<strong>Anti-Glare</strong>&nbsp;gi&uacute;p chống ch&oacute;i nếu bạn phải sử dụng m&aacute;y dưới trời nắng, ngược s&aacute;ng,...</p>

<p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-inch.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7 hiển thị hình ảnh sắc nét" src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-inch.jpg" /></a></p>

<h3>&nbsp;</h3>
',
            'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Dell Vostro 3590 i7 10510U/8GB/256GB/2GB 610R5/Win10 (GRMGK2)</h3>

<p><img alt="Thông số kỹ thuật 220718" src="https://cdn.tgdd.vn/Products/Images/44/220718/Kit/dell-vostro-3590-i7-grmgk2-mo-ta.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i7 Comet Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-cpu-laptop-intel-core-i7-10510u-1239800" target="_blank">10510U</a></p>
	</li>
	<li>Tốc độ CPU
	<p>1.80 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.9 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (On board +1 khe)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>2666 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>16 GB</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD 256GB NVMe PCIe</a>,&nbsp;Hỗ trợ khe cắm HDD SATA</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>15.6 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti-Glare</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-led-backlit-led-backlight-1183188" target="_blank">LED Backlit</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/amd-radeon-610-tren-laptop-co-gi-dac-biet-manh-nhu-the-nao-1270147" target="_blank">AMD Radeon 610R5, 2GB</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-waves-maxx-audio-1180272" target="_blank">Waves MaxxAudio</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516#usb-20" target="_blank">USB 2.0</a><a href="https://www.thegioididong.com/hoi-dap/vga-la-gi-920575" target="_blank">VGA (D-Sub)</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
	</li>
	<li>Khe đọc thẻ nhớ
	<p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">Micro SD</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>T&iacute;nh năng kh&aacute;c
	<p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 380 mm - Rộng 258 mm - D&agrave;y 19.8 mm</p>
	</li>
	<li>Trọng lượng
	<p>1.99 kg</p>
	</li>
	<li>Chất liệu
	<p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Model Adapter sạc
	<p>LA65NS2-01</p>
	</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p><a href="https://www.thegioididong.com/hoi-dap/pin-li-po-la-gi-pin-li-ion-la-gi-pin-3-cell-6-ce-1190023" target="_blank">Li-Ion 3 cell</a></p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2019</p>
	</li>
</ul>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
            'details'=> '<h2>Hiệu năng ấn tượng&nbsp;</h2>

<p><a href="https://www.thegioididong.com/laptop-dell-vostro" target="_blank">Dell Vostro</a>&nbsp;sử dụng CPU Intel&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Core i7</a></strong>&nbsp;Comet Lake thế hệ 10 mạnh mẽ, được cải tiến về hiệu năng, sử dụng được c&aacute;c ứng dụng nặng, chơi được c&aacute;c tựa game phổ biến.&nbsp;</p>

<p><a href="https://www.thegioididong.com/laptop?g=8-gb" target="_blank"><strong>RAM 8 GB</strong></a>&nbsp;mang lại khả năng xử l&iacute; đa nhiệm mượt m&agrave;, dễ d&agrave;ng chuyển đổi giữa c&aacute;c ứng dụng đang mở. M&aacute;y c&ograve;n hỗ trợ 1 khe RAM 16 GB cho người d&ugrave;ng dễ n&acirc;ng cấp.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-core-i7-gen-10.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7 (GRMGK2) là phiên bản laptop đồ họa kĩ thuật " src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-core-i7-gen-10.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/laptop-dell-o-cung-ssd" target="_blank">Ổ cứng SSD</a><strong>&nbsp;<a href="https://www.thegioididong.com/laptop#g:127554" target="_blank">256 GB</a></strong>&nbsp;lưu trữ đủ d&ugrave;ng, tốc độ nhanh ch&oacute;ng. Với ổ cứng SSD n&agrave;y, bạn chỉ mất khoảng 10-15s để khởi động Windows.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-ssd.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7 lưu trữ đủ dùng" src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-ssd.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/laptop-dell-card-do-hoa-roi" target="_blank">Card đồ họa rời</a><strong>&nbsp;AMD Radeon 610R5, 2GB</strong>&nbsp;gi&uacute;p chạy mượt c&aacute;c ứng dụng đồ họa y&ecirc;u cầu xử l&yacute; h&igrave;nh ảnh ở mức cao, xử l&iacute; video kh&ocirc;ng qu&aacute; phức tạp.</p>

<p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-amd.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7 chạy mượt các ứng dụng đồ họa " src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-amd.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;c&oacute; c&aacute;c cổng giao tiếp phổ biến như: USB 3.1, HDMI, USB 2.0. Ngo&agrave;i ra, m&aacute;y c&ograve;n c&oacute; cổng VGA tiện lợi kết nối với c&aacute;c thiết bị ở cơ quan, trường lớp.</p>

<p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-usb.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7 có các cổng giao tiếp phổ biến " src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-usb.jpg" /></a></p>

<p>C&ocirc;ng nghệ &acirc;m thanh<strong>&nbsp;Waves MaxxAudio</strong>&nbsp;tinh chỉnh &acirc;m thanh to r&otilde;, giả lập hiệu ứng &acirc;m thanh v&ograve;m ch&acirc;n thật, sống động.</p>

<p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-a%CC%82m-thanh.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7  tinh chỉnh âm thanh to rõ" src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-a%CC%82m-thanh.jpg" /></a></p>

<p>Laptop trang bị b&agrave;n ph&iacute;m với k&iacute;ch thước ti&ecirc;u chuẩn, c&aacute;c ph&iacute;m c&oacute; độ nảy tốt, Touchpad rộng r&atilde;i với khả năng hỗ trợ đa điểm gi&uacute;p bạn dễ d&agrave;ng tương t&aacute;c với m&aacute;y.&nbsp;</p>

<p>Nh&igrave;n chung,&nbsp;<a href="https://www.thegioididong.com/laptop/dell-vostro-3590-i5-10210u-4gb-1tb-win10-grmgk1" target="_blank">Dell Vostro 3590</a>&nbsp;phi&ecirc;n bản i7 c&oacute; cấu h&igrave;nh ổn định, đ&aacute;p ứng nhu cầu văn ph&ograve;ng, thiết kế 2D v&agrave; giải tr&iacute; với c&aacute;c tựa game nhẹ. B&ecirc;n cạnh đ&oacute;, m&aacute;y cũng c&oacute; thiết kế bền chắc, tiện lợi di chuyển c&ugrave;ng nhiều t&iacute;nh năng hiện đại.&nbsp;</p>

<p>ạn phải sử dụng m&aacute;y dưới trời nắng, ngược s&aacute;ng,...</p>

<p><a href="https://www.thegioididong.com/images/44/220718/dell-vostro-3590-i7-grmgk2-inch.jpg" onclick="return false;"><img alt="Laptop Dell Vostro 3590 i7 hiển thị hình ảnh sắc nét" src="https://cdn.tgdd.vn/Products/Images/44/220718/dell-vostro-3590-i7-grmgk2-inch.jpg" /></a></p>
',
            'slug'=>Str::slug('Dell Vostro 3590 i7 10510U/8GB/256GB/2GB 610R5/Win10 (GRMGK2)','-').'.aspx',
            'created_at'=>now(),
        ]);DB::table('products')->insert([
        'name'=>'HP Envy 13 aq1057TX i7 10510U/8GB/512GB/2GB MX250/Win10 (8XS68PA)',
        'price'=>29490000,
        'old_price'=>30890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/220503/hp-envy-13-i7-8xs68pa-220503-220503-600x600.jpg',
        'rate'=>400,
        'category_id'=>7,
        'brand_id'=>1,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của HP Envy 13 aq1057TX i7 10510U/8GB/512GB/2GB MX250/Win10 (8XS68PA)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/220503/Slider/hp-envy-13-i7-8xs68pa-013820-063849-709.jpg" /></p>

<p><a href="https://www.thegioididong.com/laptop/hp-envy-13-i7-8xs68pa" target="_blank">Laptop HP Envy 13 aq1057TX i7 (8XS68PA)</a>&nbsp;l&agrave; chiếc laptop thuộc d&ograve;ng&nbsp;<a href="https://www.thegioididong.com/laptop/hp-envy-13-ah1010tu" target="_blank">HP Envy 13</a>&nbsp;vừa được ra mắt năm 2019 c&oacute; cấu h&igrave;nh mạnh mẽ với chip Intel Core i7 thế hệ mới c&ugrave;ng card đồ họa rời. M&aacute;y c&oacute; thiết kế si&ecirc;u mỏng nhẹ ph&ugrave; hợp với người thường xuy&ecirc;n di chuyển.&nbsp;</p>

<h3>Thiết kế hiện đại, sang trọng với họa tiết v&acirc;n gỗ</h3>

<p><a href="https://www.thegioididong.com/laptop-hp-compaq-envy" target="_blank">HP Envy</a>&nbsp;13 aq1057TX i7 sở hữu thiết kế mang hơi hướng hiện đại, trẻ trung với vỏ kim loại nguy&ecirc;n khối c&oacute; họa tiết v&acirc;n gỗ độc đ&aacute;o tr&ecirc;n chiếu nghỉ tay.</p>

<p><a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;si&ecirc;u mỏng nhẹ chỉ&nbsp;<strong>14.7 mm</strong>. nặng&nbsp;<strong>1.17 kg</strong>&nbsp;- chỉ xấp xỉ v&agrave;i quyển s&aacute;ch, bạn thậm ch&iacute; sẽ qu&ecirc;n mất m&igrave;nh đang mang theo laptop khi cho n&oacute; v&agrave;o balo.</p>

<p><a href="https://www.thegioididong.com/images/44/220503/hp-envy-13-i7-8xs68pa-thie%CC%82%CC%81tke%CC%82%CC%81.jpg" onclick="return false;"><img alt="HP Envy 13 aq1057TX i7 sở hữu thiết kế mang hơi hướng hiện đại" src="https://cdn.tgdd.vn/Products/Images/44/220503/hp-envy-13-i7-8xs68pa-thie%CC%82%CC%81tke%CC%82%CC%81.jpg" /></a></p>

<h3>Vi xử l&iacute; thế hệ 10 mạnh mẽ</h3>

<p><strong>CPU Intel&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Core i7&nbsp;</a>thế hệ 10</strong>&nbsp;(ra mắt cuối năm 2019) đem đến hiệu năng mạnh mẽ chạy được c&aacute;c ứng dụng nặng.</p>

<p><a href="https://www.thegioididong.com/laptop?g=8-gb" target="_blank"><strong>RAM 8 GB</strong></a>&nbsp;đa nhiệm tốt, sử dụng nhiều ứng dụng hay tr&ecirc;n 20 tab&nbsp;Chrome c&ugrave;ng l&uacute;c vẫn kh&ocirc;ng xảy ra giật lag m&aacute;y.</p>

<p><a href="https://www.thegioididong.com/images/44/220503/hp-envy-13-i7-8xs68pa-corei7.jpg" onclick="return false;"><img alt="HP Envy 13 aq1057TX | CPU Intel Core i7 thế hệ 10" src="https://cdn.tgdd.vn/Products/Images/44/220503/hp-envy-13-i7-8xs68pa-corei7.jpg" /></a></p>

<p><strong>Ổ cứng&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq-o-cung-ssd" target="_blank">SSD&nbsp;</a>512 GB M.2 PCIe</strong>&nbsp;đem đến tốc độ xử l&iacute; nhanh để bạn kh&ocirc;ng cần chờ đợi l&acirc;u. Dung lượng lưu trữ rộng 512 GB cho người d&ugrave;ng lưu trữ thoải m&aacute;i m&agrave; kh&ocirc;ng lo ngại đầy bộ nhớ.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/220503/hp-envy-13-i7-8xs68pa-512gb.jpg" onclick="return false;"><img alt="HP Envy 13 aq1057TX | Ổ cứng SSD 512 GB " src="https://cdn.tgdd.vn/Products/Images/44/220503/hp-envy-13-i7-8xs68pa-512gb.jpg" /></a></p>

<p><strong><a href="https://www.thegioididong.com/laptop-hp-compaq-card-do-hoa-roi" target="_blank">Card đồ họa rời</a>&nbsp;NVIDIA GeForce MX250 2 GB&nbsp;</strong>hỗ trợ sử dụng c&aacute;c ứng dụng đồ họa 2D mượt m&agrave;, chuy&ecirc;n nghiệp tr&ecirc;n Photoshop, Illustrator, Lightroom,... Bạn cũng c&oacute; thể chỉnh sửa video đơn giản hoặc chơi một số tựa game phổ biến với cấu h&igrave;nh n&agrave;y.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/220503/hp-envy-13-i7-8xs68pa-usb-mx250.jpg" onclick="return false;"><img alt="Laptop HP Envy 13 aq1057TX i7 | Card đồ họa rời NVIDIA GeForce MX250 " src="https://cdn.tgdd.vn/Products/Images/44/220503/hp-envy-13-i7-8xs68pa-usb-mx250.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết HP Envy 13 aq1057TX i7 10510U/8GB/512GB/2GB MX250/Win10 (8XS68PA)</h3>

<p><img alt="Thông số kỹ thuật 220503" src="https://cdn.tgdd.vn/Products/Images/44/220503/Kit/hp-envy-13-i7-8xs68pa-note.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i7 Comet Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-cpu-laptop-intel-core-i7-10510u-1239800" target="_blank">10510U</a></p>
	</li>
	<li>Tốc độ CPU
	<p>1.80 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.9 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (On board)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>2400 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>Kh&ocirc;ng hỗ trợ n&acirc;ng cấp</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>13.3 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-man-hinh-wled-backlit-tren-laptop-la-gi-1263016" target="_blank">Wled-backlit</a><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-card-do-hoa-nvidia-geforce-mx250-2gb-1204684" target="_blank">NVIDIA GeForce MX250 2GB</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p>HP Audio Boost 4 loa&nbsp;,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-bang-olufsen-tren-laptop-955118" target="_blank">Bang &amp; Olufsen audio</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
	</li>
	<li>Khe đọc thẻ nhớ
	<p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">Micro SD</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>T&iacute;nh năng kh&aacute;c
	<p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 307 mm - Rộng 211.5 mm - D&agrave;y 14.7 mm</p>
	</li>
	<li>Trọng lượng
	<p>1.17 kg</p>
	</li>
	<li>Chất liệu
	<p>Vỏ kim loại nguy&ecirc;n khối</p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p><a href="https://www.thegioididong.com/hoi-dap/pin-li-po-la-gi-pin-li-ion-la-gi-pin-3-cell-6-ce-1190023" target="_blank">Li-Ion 4 cell</a></p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2019</p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>M&agrave;n h&igrave;nh viền mỏng IPS&nbsp;</h2>

<p>M&agrave;n h&igrave;nh&nbsp;<strong><a href="https://www.thegioididong.com/laptop-13-inch" target="_blank">13.3 inch</a></strong>&nbsp;(1920 x 1080) sử dụng&nbsp;<strong>c&ocirc;ng nghệ IPS&nbsp;</strong>cho h&igrave;nh ảnh sắc n&eacute;t, độ tương phản cao, h&igrave;nh ảnh v&agrave; m&agrave;u sắc kh&ocirc;ng bị biến đổi với mọi g&oacute;c nh&igrave;n.&nbsp;</p>

<p><a href="https://www.thegioididong.com/laptop-hp-compaq-vien-man-hinh-mong" target="_blank">Viền m&agrave;n h&igrave;nh mỏng</a>&nbsp;ở cả 4 cạnh gi&uacute;p kh&ocirc;ng gian nh&igrave;n trở n&ecirc;n rộng v&agrave; &iacute;t ph&acirc;n t&acirc;m hơn khi giải tr&iacute;, l&agrave;m việc.</p>

<p><a href="https://www.thegioididong.com/images/44/220503/hp-envy-13-i7-8xs68pa-133inch.jpg" onclick="return false;"><img alt="HP Envy 13 aq1057TX | Màn hình 13.3 inch" src="https://cdn.tgdd.vn/Products/Images/44/220503/hp-envy-13-i7-8xs68pa-133inch.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">HP</a>&nbsp;sử dụng c&ocirc;ng nghệ&nbsp;<strong>Bang &amp; Olufsen audio</strong>&nbsp;lọc tiếng ồn hiệu quả, tinh chỉnh &acirc;m thanh to r&otilde; hơn.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/220503/hp-envy-13-i7-8xs68pa-a%CC%82mthanh.jpg" onclick="return false;"><img alt="HP Envy 13 aq1057TX i7 |  Bang &amp; Olufsen audio" src="https://cdn.tgdd.vn/Products/Images/44/220503/hp-envy-13-i7-8xs68pa-a%CC%82mthanh.jpg" /></a></p>

<p>Tuy sở hữu một thiết kế mỏng nhẹ nhưng HP Envy vẫn trang bị kh&aacute; đầy đủ c&aacute;c cổng kết nối cần thiết cho người d&ugrave;ng, gồm 2 cổng USB 3.1 v&agrave; 1 cổng USB Type C dễ d&agrave;ng kết nối với c&aacute;c thiết bị ngoại vi như loa, m&agrave;n h&igrave;nh, m&aacute;y chiếu,...</p>

<p><a href="https://www.thegioididong.com/images/44/220503/hp-envy-13-i7-8xs68pa-usb.jpg" onclick="return false;"><img alt="HP Envy 13 aq1057TX i7 trang bị khá đầy đủ các cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/220503/hp-envy-13-i7-8xs68pa-usb.jpg" /></a></p>

<h3>Bảo mật hiện đại</h3>

<p>N&acirc;ng cao bảo mật nhờ&nbsp;<strong>cảm biến v&acirc;n tay&nbsp;</strong>được đặt gọn g&agrave;ng ngay cạnh b&agrave;n ph&iacute;m gi&uacute;p mở kh&oacute;a nhanh, tiện lợi.</p>

<p>B&ecirc;n cạnh đ&oacute;, phần mềm HP BIOS Recovery bảo vệ tốt hơn cho dữ liệu tr&ecirc;n m&aacute;y, hạn chế đ&aacute;nh cắp dữ liệu.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/220503/hp-envy-13-i7-8xs68pa-va%CC%82ntay.jpg" onclick="return false;"><img alt="HP Envy 13 aq1057TX i7 có  cảm biến vân tay" src="https://cdn.tgdd.vn/Products/Images/44/220503/hp-envy-13-i7-8xs68pa-va%CC%82ntay.jpg" /></a></p>

<p><strong>C&ocirc;ng tắc kh&oacute;a camera&nbsp;</strong>nằm ngay cạnh b&ecirc;n của m&aacute;y cho bạn chủ động hơn trong việc kiểm so&aacute;t camera của laptop, c&oacute; thể tắt camera khi kh&ocirc;ng sử dụng để đảm bảo ri&ecirc;ng tư.</p>

<p><a href="https://www.thegioididong.com/images/44/220503/hp-envy-13-i7-8xs68pa-ta%CC%86%CC%81tcamera.jpg" onclick="return false;"><img alt="HP Envy 13 aq1057TX i7 | Công tắc khóa camera " src="https://cdn.tgdd.vn/Products/Images/44/220503/hp-envy-13-i7-8xs68pa-ta%CC%86%CC%81tcamera.jpg" /></a></p>

<p>B&agrave;n ph&iacute;m trang bị đ&egrave;n nền để người d&ugrave;ng dễ sử dụng khi thiếu s&aacute;ng.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/220503/hp-envy-13-i7-8xs68pa-de%CC%80nbp.jpg" onclick="return false;"><img alt="Bàn phím trang bị đèn nền " src="https://cdn.tgdd.vn/Products/Images/44/220503/hp-envy-13-i7-8xs68pa-de%CC%80nbp.jpg" /></a></p>

<p>Laptop HP Envy 13 aq1057TX i7 (8XS68PA) l&agrave; chiếc&nbsp;<a href="https://www.thegioididong.com/laptop?g=cao-cap-sang-trong" target="_blank">laptop cao cấp</a>&nbsp;với thiết kế si&ecirc;u gọn nhẹ v&agrave; sức mạnh đ&aacute;ng kinh ngạc đ&aacute;ng để trải nghiệm trong ph&acirc;n kh&uacute;c.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('HP Envy 13 aq1057TX i7 10510U/8GB/512GB/2GB MX250/Win10 (8XS68PA)','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>'Lenovo IdeaPad Slim 5 15IIL05 i5/1035G1/8GB/512GB/2GB MX330/Win10 (81YK004UVN)',
        'price'=>18490000,
        'old_price'=>19890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-usb-222639-600x600.jpg',
        'rate'=>400,
        'category_id'=>7,
        'brand_id'=>6,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Lenovo IdeaPad Slim 5 15IIL05 i5/1035G1/8GB/512GB/2GB MX330/Win10 (81YK004UVN)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/222639/Slider/lenovo-ideapad-5-15iil05-i5-81yk004uvn-200520-0340490.jpg" /></p>

<p><a href="https://www.thegioididong.com/laptop/lenovo-ideapad-5-15iil05-i5-81yk004uvn" target="_blank">Laptop Lenovo IdeaPad 5 15IIL05 (81YK004UVN)</a>&nbsp;l&agrave; chiếc&nbsp;<a href="https://www.thegioididong.com/laptop?g=hoc-tap-van-phong" target="_blank">laptop học tập văn ph&ograve;ng</a>&nbsp;c&oacute; thiết kế mỏng nhẹ v&agrave; cấu h&igrave;nh mạnh với vi xử l&iacute; Intel Gen 10. M&aacute;y c&ograve;n trang bị card đồ họa rời để n&acirc;ng cao hiệu năng đồ họa, thoải m&aacute;i giải tr&iacute; với c&aacute;c tựa game phổ biến.</p>

<h3>Cấu h&igrave;nh khỏe, đồ họa mượt m&agrave;</h3>

<p><a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;trang bị bộ vi xử l&yacute;&nbsp;<strong>Intel&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank">Core i5</a></strong>&nbsp;thế hệ 10 chạy mượt ứng dụng văn ph&ograve;ng hay lướt web, xem phim,...&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=8-gb" target="_blank">RAM 8 GB</a></strong>&nbsp;c&oacute; khả năng đa nhiệm nhanh, kh&ocirc;ng giật lắc cho d&ugrave; bạn mở nhiều ứng dụng.&nbsp;</p>

<p><a href="https://www.thegioididong.com/laptop-lenovo-ideapad" target="_blank">Lenovo IdeaPad</a>&nbsp;phản hồi mọi thao t&aacute;c chỉ trong t&iacute;ch tắc với&nbsp;<strong>ổ cứng SSD&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">512 GB</a></strong>. Lưu trữ thoải m&aacute;i với 512 GB dung lượng, lưu được nhiều tựa phim, game hay t&agrave;i liệu,... m&agrave; kh&ocirc;ng lo hết bộ nhớ. M&aacute;y cũng c&oacute; khả năng n&acirc;ng cấp ổ cứng HDD để lưu trữ được nhiều hơn.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-i5.jpg" onclick="return false;"><img alt="Lenovo IdeaPad 5 15IIL05 (81YK004UVN) | Core i5 thế hệ 10" src="https://cdn.tgdd.vn/Products/Images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-i5.jpg" /></a></p>

<p><strong><a href="https://www.thegioididong.com/laptop-lenovo-card-do-hoa-roi" target="_blank">Card đồ họa rời</a>&nbsp;NVIDIA GeForce MX330, 2GB&nbsp;</strong>cho khả năng đồ họa ổn định, bạn c&oacute; thể sử dụng Photoshop, Ai hoặc cắt gh&eacute;p video đơn giản, dựng vlog,... hay giải tr&iacute; bằng c&aacute;c tựa game phổ biến, chẳng hạn như Li&ecirc;n minh huyền thoại, CS:GO,...</p>

<p><a href="https://www.thegioididong.com/images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-nvidia2-nvidia.jpg" onclick="return false;"><img alt="Lenovo IdeaPad 5 15IIL05 (81YK004UVN) | Card đồ họa rời NVIDIA GeForce MX330" src="https://cdn.tgdd.vn/Products/Images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-nvidia2-nvidia.jpg" /></a></p>

<h3>Bảo mật v&acirc;n tay th&ocirc;ng minh</h3>

<p>Cảm biến v&acirc;n tay qu&eacute;t cực nhanh, mở m&aacute;y trong nh&aacute;y mắt, gi&uacute;p bạn tiết kiệm thời gian v&agrave; cơ chế bảo mật n&agrave;y cũng an to&agrave;n hơn so với bảo mật bằng mật khẩu th&ocirc;ng thường.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-va%CC%82n-tay.jpg" onclick="return false;"><img alt="Lenovo IdeaPad 5 15IIL05 (81YK004UVN) | Bảo mật vân tay" src="https://cdn.tgdd.vn/Products/Images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-va%CC%82n-tay.jpg" /></a></p>

<h3>Kh&ocirc;ng gian giải tr&iacute; bất tận</h3>

<p>M&agrave;n h&igrave;nh&nbsp;<strong><a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a>&nbsp;Full HD (1920 x 1080)</strong>&nbsp;cho mọi khung h&igrave;nh sống động, văn bản v&agrave; h&igrave;nh ảnh hiển thị sắc n&eacute;t. Thiết kế&nbsp;<a href="https://www.thegioididong.com/laptop-lenovo-vien-man-hinh-mong" target="_blank">viền m&agrave;n h&igrave;nh mỏng</a>&nbsp;hợp với xu hướng hiện nay, tăng kh&ocirc;ng gian nh&igrave;n trong tổng thể m&aacute;y vẫn nhỏ gọn.&nbsp;</p>

<p>Tấm nền chống ch&oacute;i gi&uacute;p người kh&ocirc;ng bị ch&oacute;i khi sử dụng ở ngo&agrave;i trời, nơi nắng gắt.</p>

<p><a href="https://www.thegioididong.com/images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-inch.jpg" onclick="return false;"><img alt="Lenovo IdeaPad 5 15IIL05 (81YK004UVN) | 15.6 inch Full HD (1920 x 1080)" src="https://cdn.tgdd.vn/Products/Images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-inch.jpg" /></a></p>

<p>C&ocirc;ng nghệ Dolby Audio cho chất &acirc;m trong trẻo, giả lập &acirc;m thanh v&ograve;m ph&aacute;t ra từ nhiều hướng cho trải nghiệm nghe nhạc, xem phim, chơi game ấn tượng hơn bao giờ hết.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-a%CC%82m-thanh.jpg" onclick="return false;"><img alt="Lenovo IdeaPad 5 15IIL05 (81YK004UVN) | Công nghệ Dolby Audio" src="https://cdn.tgdd.vn/Products/Images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-a%CC%82m-thanh.jpg" /></a></p>

<p>M&aacute;y c&oacute; c&aacute;c cổng giao tiếp th&ocirc;ng dụng: USB Type-C, USB 3.0 v&agrave; HDMI phục vụ nhu cầu kết nối với laptop, tivi, m&aacute;y chiếu trong những buổi họp, thuyết tr&igrave;nh, hội thảo hay l&agrave;m việc nh&oacute;m.</p>

<p><a href="https://www.thegioididong.com/images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-usb.jpg" onclick="return false;"><img alt="Lenovo IdeaPad 5 15IIL05 (81YK004UVN) | Cổng giao tiếp thông dụng" src="https://cdn.tgdd.vn/Products/Images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-usb.jpg" /></a></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Lenovo IdeaPad Slim 5 15IIL05 i5/1035G1/8GB/512GB/2GB MX330/Win10 (81YK004UVN)</h3>

<p><img alt="Thông số kỹ thuật 222639" src="https://cdn.tgdd.vn/Products/Images/44/222639/Kit/lenovo-ideapad-5-15iil05-i5-81yk004uvn-n-2.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i5 Ice Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/kham-pha-bo-vi-xu-ly-laptop-intel-core-i5-1035g1-1239768" target="_blank">1035G1</a></p>
	</li>
	<li>Tốc độ CPU
	<p>1.00 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 3.6 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (On board)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>3200 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>Kh&ocirc;ng hỗ trợ n&acirc;ng cấp</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;Hỗ trợ khe cắm HDD SATA</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>15.6 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti-Glare</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/nvidia-geforce-mx330-tren-laptop-la-gi-1264163" target="_blank">NVIDIA GeForce MX330, 2GB</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/am-thanh-dolby-audio-premium-co-gi-dac-biet-1017812" target="_blank">Dolby AudioPremium</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p>USB Type-C (Power Delivery and DisplayPort)<a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516" target="_blank">2 x USB 3.0</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
	</li>
	<li>Khe đọc thẻ nhớ
	<p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">SD</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>T&iacute;nh năng kh&aacute;c
	<p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a>,&nbsp;C&ocirc;ng tắc kh&oacute;a camera</p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 357.4 mm - Rộng 233.17 mm - D&agrave;y 17.9 mm</p>
	</li>
	<li>Trọng lượng
	<p>1.7 Kg</p>
	</li>
	<li>Chất liệu
	<p>Vỏ nhựa - nắp lưng bằng kim loại</p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Model Adapter sạc
	<p>ADLX65CCGE2A</p>
	</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p><a href="https://www.thegioididong.com/hoi-dap/pin-li-po-la-gi-pin-li-ion-la-gi-pin-3-cell-6-ce-1190023" target="_blank">Li-Ion 3 cell</a></p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2020</p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>Thiết kế đơn giản, tinh tế</h2>

<p>Laptop mang thiết kế cơ bản của d&ograve;ng Lenovo IdeaPad 5. Vỏ ngo&agrave;i được l&agrave;m từ chất liệu nhựa, nắp m&aacute;y kim loại tăng độ sang trọng cũng như cảm gi&aacute;c mịn, m&aacute;t tay khi sờ v&agrave;o.&nbsp;</p>

<p>Độ d&agrave;y chỉ&nbsp;<strong>17.9 mm</strong>, c&acirc;n nặng&nbsp;<strong>1.7 kg</strong>&nbsp;ph&ugrave; hợp với người d&ugrave;ng cần đem theo laptop thường xuy&ecirc;n.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-095920-115903.jpg" onclick="return false;"><img alt=" Lenovo IdeaPad Slim 5 15IIL05 i5 - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-095920-115903.jpg" /></a></p>

<p>B&agrave;n ph&iacute;m c&oacute; k&iacute;ch thước lớn, độ nảy tốt sẽ gi&uacute;p bạn g&otilde; ph&iacute;m &ecirc;m &aacute;i, ch&iacute;nh x&aacute;c hơn. H&agrave;ng ph&iacute;m số được thiết kế ri&ecirc;ng biệt ph&ugrave; hợp cho người thường xuy&ecirc;n nhập số liệu. Th&ecirc;m một điểm cộng l&agrave; b&agrave;n ph&iacute;m c&oacute; t&iacute;ch hợp đ&egrave;n nền để bạn sử dụng ở mọi kh&ocirc;ng gian, kể cả nơi thiếu &aacute;nh s&aacute;ng.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-bp-so%CC%82%CC%81.jpg" onclick="return false;"><img alt="Lenovo IdeaPad 5 15IIL05 (81YK004UVN) | Hàng phím số được thiết kế riêng biệt " src="https://cdn.tgdd.vn/Products/Images/44/222639/lenovo-ideapad-5-15iil05-i5-81yk004uvn-bp-so%CC%82%CC%81.jpg" /></a></p>

<p>Nh&igrave;n chung, c&oacute; thể n&oacute;i&nbsp;<a href="https://www.thegioididong.com/laptop-lenovo" target="_blank">Lenovo</a>&nbsp;IdeaPad 5 l&agrave; mẫu m&aacute;y đ&aacute;ng sở hữu đối với kh&aacute;ch h&agrave;ng l&agrave; học sinh sinh vi&ecirc;n hay nh&acirc;n vi&ecirc;n văn ph&ograve;ng bởi những ưu điểm l&agrave; cấu h&igrave;nh khỏe, vận h&agrave;nh nhanh, thiết kế sang trọng v&agrave; gi&aacute; th&agrave;nh hợp l&iacute;.&nbsp;</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Lenovo IdeaPad Slim 5 15IIL05 i5/1035G1/8GB/512GB/2GB MX330/Win10 (81YK004UVN)','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>'Lenovo IdeaPad Slim 3 14IIL05 i7 1065G7/8GB/512GB/Win10 (81WD0040VN)',
        'price'=>18490000,
        'old_price'=>20890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-222638-1-600x600.jpg',
        'rate'=>400,
        'category_id'=>7,
        'brand_id'=>6,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Lenovo IdeaPad Slim 3 14IIL05 i7 1065G7/8GB/512GB/Win10 (81WD0040VN)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/222638/Slider/vi-vn-lenovo-ideapad-3-14iil05-i7-81wd0040vn-thumbvideo.jpg" /></p>

<p>Sự lựa chọn tuyệt vời trong ph&acirc;n kh&uacute;c tầm trung gọi t&ecirc;n&nbsp;<a href="https://www.thegioididong.com/laptop/lenovo-ideapad-3-14iil05-i7-81wd0040vn" target="_blank">laptop Lenovo IdeaPad 3 14IIL05 i7</a>&nbsp;hứa hẹn sẽ đ&aacute;p ứng tốt nhu cầu sử dụng laptop thường ng&agrave;y của d&acirc;n văn ph&ograve;ng v&agrave; đặc biệt l&agrave; c&aacute;c bạn sinh vi&ecirc;n đang t&igrave;m kiếm thiết bị hỗ trợ học thiết kế đồ hoạ.</p>

<h3>Thiết kế nhỏ gọn</h3>

<p>IdeaPad 3 14IIL05 l&agrave; sản phẩm c&oacute; mặt lưng fade xước dọc lần đầu ti&ecirc;n xuất hiện tr&ecirc;n c&aacute;c sản phẩm nh&agrave;&nbsp;<a href="https://www.thegioididong.com/laptop-lenovo" target="_blank">lenovo</a>, m&agrave;u bạc đồng nhất tr&ecirc;n mọi bề mặt v&agrave; c&aacute;c cạnh được l&agrave;m nh&aacute;m kh&ocirc;ng chỉ giảm trầy xước gi&uacute;p tăng tuổi thọ cho m&aacute;y m&agrave; c&ograve;n t&ocirc;n l&ecirc;n sự sang trọng đẹp mắt.&nbsp;</p>

<p>Được gia c&ocirc;ng với lớp vỏ nhựa n&ecirc;n trọng lượng m&aacute;y được tối ưu chỉ c&ograve;n 1.6 kg rất thoải m&aacute;i để bạn l&agrave;m việc khi ngồi tr&ecirc;n &ocirc; t&ocirc; hay cầm đi họp vội.</p>

<p><a href="https://www.thegioididong.com/images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-kg-1.jpg" onclick="return false;"><img alt="Lenovo IdeaPad 3 14IIL05 i7 | Thiết kế nhỏ gọn" src="https://cdn.tgdd.vn/Products/Images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-kg-1.jpg" /></a></p>

<p>M&aacute;y c&oacute; thiết kế bản lề gập mở 180 độ linh hoạt hơn cho bạn khi giao tiếp với kh&aacute;ch h&agrave;ng hay dễ d&agrave;ng tương t&aacute;c với m&agrave;n h&igrave;nh khi đứng thuyết tr&igrave;nh, thiết kế n&agrave;y cũng gi&uacute;p thiết bị bền hơn bởi d&ugrave; bạn c&oacute; mở qu&aacute; tay th&igrave; cũng kh&ocirc;ng bị g&atilde;y bản lề.</p>

<p><a href="https://www.thegioididong.com/images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-180-do%CC%A3%CC%82-1.jpg" onclick="return false;"><img alt="Lenovo IdeaPad 3 14IIL05 có thiết kế bản lề gập mở 180 độ" src="https://cdn.tgdd.vn/Products/Images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-180-do%CC%A3%CC%82-1.jpg" /></a></p>

<p>Tuy c&oacute; thiết kế mỏng&nbsp;<strong>19.9 mm</strong>&nbsp;nhưng Lenovo IdeaPad vẫn được trang bị kh&aacute; đầy đủ c&aacute;c cổng phổ biến như cổng HDMI, USB 3.0, USB 2.0, tiện lợi chia sẻ th&ocirc;ng tin l&ecirc;n m&agrave;n h&igrave;nh lớn, kết nối nhanh ch&oacute;ng với c&aacute;c thiết bị hỗ trợ.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-usb-1.jpg" onclick="return false;"><img alt="Lenovo IdeaPad 3 14IIL05 i7 | Kết nối nhanh chóng" src="https://cdn.tgdd.vn/Products/Images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-usb-1.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Lenovo IdeaPad Slim 3 14IIL05 i7 1065G7/8GB/512GB/Win10 (81WD0040VN)</h3>

<p><img alt="Thông số kỹ thuật 222638" src="https://cdn.tgdd.vn/Products/Images/44/222638/Kit/lenovo-ideapad-3-14iil05-i7-81wd0040vn-note-2.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i7 Ice Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/kham-pha-bo-xu-ly-laptop-intel-core-i7-1065g7-1239978" target="_blank">1065G7</a></p>
	</li>
	<li>Tốc độ CPU
	<p>1.30 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 3.9 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (On board 4GB +1 khe 4GB)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>2666 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>12 GB</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;Hỗ trợ khe cắm HDD SATA</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>14 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-man-hinh-tn-la-gi-1172816" target="_blank">Tấm nền TN</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti-Glare</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-tich-hop-la-gi-950047" target="_blank">Card đồ họa t&iacute;ch hợp</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-card-do-hoa-iris-plus-1215709" target="_blank">Intel Iris Plus Graphics</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/am-thanh-dolby-audio-premium-co-gi-dac-biet-1017812" target="_blank">Dolby AudioPremium</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516" target="_blank">2 x USB 3.0</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516#usb-20" target="_blank">USB 2.0</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
	</li>
	<li>Khe đọc thẻ nhớ
	<p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">SD</a></p>
	</li>
	<li>Webcam
	<p>0.3 MP</p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 327.1 mm - Rộng 241 mm - D&agrave;y 19.9 mm</p>
	</li>
	<li>Trọng lượng
	<p>1.6 kg</p>
	</li>
	<li>Chất liệu
	<p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Model Adapter sạc
	<p>ADLX65CCGE2A</p>
	</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p><a href="https://www.thegioididong.com/hoi-dap/pin-li-po-la-gi-pin-li-ion-la-gi-pin-3-cell-6-ce-1190023" target="_blank">Li-Ion 2 cell</a></p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2020</p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>Hiệu năng đột ph&aacute;</h2>

<p><a href="https://www.thegioididong.com/laptop-lenovo-ideapad" target="_blank">Lenovo IdeaPad</a>&nbsp;3 14IIL05 l&agrave; một m&aacute;y t&iacute;nh x&aacute;ch tay mạnh mẽ cho việc xử l&iacute; những t&aacute;c vụ h&agrave;ng ng&agrave;y nhờ bộ xử l&yacute; Intel&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank"><strong>Core i7</strong></a>&nbsp;thế hệ thứ 10 cũng như RAM 8 GB đảm bảo mọi thao t&aacute;c từ soạn văn bản, lướt web cho đến sửa chữa h&igrave;nh ảnh, video chuy&ecirc;n nghiệp với Premie, mọi hiện tượng giật lag dường như kh&ocirc;ng c&ograve;n xuất hiện tr&ecirc;n phi&ecirc;n bản n&agrave;y.</p>

<p>Bạn&nbsp;c&oacute; thể n&acirc;ng cấp&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=8-gb" target="_blank">RAM 8 GB</a></strong>&nbsp;l&ecirc;n 12 GB để loại bỏ ho&agrave;n to&agrave;n vấn đề reload hay đơ m&aacute;y khi sử dụng nhiều ứng dụng đồ họa song song như Photoshop, Ai, Premie,...</p>

<p>IdeaPad 3 14IIL05 l&agrave; chiếc laptop văn ph&ograve;ng cấu h&igrave;nh khỏe dư sức đ&aacute;p ứng đủ mọi nhu cầu văn ph&ograve;ng v&agrave; đồ họa gần như chuy&ecirc;n nghiệp.</p>

<p><a href="https://www.thegioididong.com/images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-i7-1.jpg" onclick="return false;"><img alt="Lenovo IdeaPad 3 14IIL05 i7 | Core i7 thế hệ thứ 10" src="https://cdn.tgdd.vn/Products/Images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-i7-1.jpg" /></a></p>

<p>B&ecirc;n cạnh đ&oacute;,&nbsp;<a href="https://www.thegioididong.com/laptop-lenovo-o-cung-ssd" target="_blank">ổ cứng&nbsp;</a><strong><a href="https://www.thegioididong.com/laptop-lenovo-o-cung-ssd" target="_blank">SSD</a>&nbsp;512 GB</strong>&nbsp;l&agrave;m cho Lenovo IdeaPad 3 14IIL05 mạnh mẽ trọn vẹn khi m&agrave; việc thực hiện c&aacute;c t&aacute;c vụ rất nhanh ch&oacute;ng, khởi động m&aacute;y chưa đến 20 gi&acirc;y, kh&ocirc;ng gian lưu trữ th&igrave; thoải m&aacute;i v&ocirc; c&ugrave;ng.</p>

<p><a href="https://www.thegioididong.com/images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-ssd-1.jpg" onclick="return false;"><img alt="Lenovo IdeaPad 3 14IIL05 i7 | Ổ cứng SSD 512 GB" src="https://cdn.tgdd.vn/Products/Images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-ssd-1.jpg" /></a></p>

<h3>Tuyệt vời cho giải tr&iacute;</h3>

<p>C&aacute;c cạnh viền mỏng hai b&ecirc;n gi&uacute;p tận dụng tối đa m&agrave;n h&igrave;nh&nbsp;<strong>Full HD</strong>&nbsp;k&iacute;ch thước chuẩn&nbsp;<a href="https://www.thegioididong.com/laptop-14-inch" target="_blank"><strong>14 inch</strong></a>&nbsp;của IdeaPad 3, mang lại cho chiếc m&aacute;y t&iacute;nh n&agrave;y một vẻ ngo&agrave;i hiện đại v&agrave; gọn g&agrave;ng. Với c&ocirc;ng nghệ Anti-Glare m&agrave; m&aacute;y được trang bị th&igrave; bạn c&oacute; thể sử dụng ở ngo&agrave;i trời m&agrave; vẫn nh&igrave;n r&otilde; mọi th&ocirc;ng tin tr&ecirc;n m&agrave;n h&igrave;nh.&nbsp;</p>

<p>Thật tiếc khi m&aacute;y chỉ c&oacute; tấm nền TN do đ&oacute; bạn chỉ c&oacute; thể quan s&aacute;t h&igrave;nh ảnh từ g&oacute;c nh&igrave;n ch&iacute;nh diện, hơi bất tiện nếu bạn sử dụng m&aacute;y cho việc học nh&oacute;m m&agrave; muốn chia sẻ t&agrave;i liệu cho người kế b&ecirc;n tuy nhi&ecirc;n sẽ l&agrave; lợi thế cho những ai chuộng sự ri&ecirc;ng tư khi l&agrave;m việc ở nơi c&ocirc;ng cộng.</p>

<p><a href="https://www.thegioididong.com/images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-inch-1.jpg" onclick="return false;"><img alt="Lenovo IdeaPad 3 14IIL05 i7 | Tuyệt vời cho giải trí" src="https://cdn.tgdd.vn/Products/Images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-inch-1.jpg" /></a></p>

<p>M&aacute;y t&iacute;nh x&aacute;ch tay IdeaPad 3 được t&iacute;ch hợp thiết kế&nbsp;webcam với một m&agrave;n trập vật l&yacute;. Khi bạn đ&atilde; ho&agrave;n tất cuộc tr&ograve; chuyện video, chỉ cần đ&oacute;ng cửa trập camera để đảm bảo ngăn chặn th&ocirc;ng tin c&aacute; nh&acirc;n bị r&ograve; rỉ.</p>

<p><a href="https://www.thegioididong.com/images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-ma%CC%80n-tra%CC%A3%CC%82p.jpg" onclick="return false;"><img alt="Lenovo IdeaPad 3 14IIL05 i7 | Cửa trập màn hình" src="https://cdn.tgdd.vn/Products/Images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-ma%CC%80n-tra%CC%A3%CC%82p.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;sử dụng loa k&eacute;p với c&ocirc;ng nghệ Dolby Audio, tối ưu h&oacute;a &acirc;m thanh để khi n&oacute; đến tai bạn thật to, r&otilde; v&agrave; chất lượng.</p>

<p><a href="https://www.thegioididong.com/images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-a%CC%82m-thanh-1.jpg" onclick="return false;"><img alt="Lenovo IdeaPad 3 14IIL05 i7 | Dolby Audio" src="https://cdn.tgdd.vn/Products/Images/44/222638/lenovo-ideapad-3-14iil05-i7-81wd0040vn-a%CC%82m-thanh-1.jpg" /></a></p>

<p>Laptop Lenovo IdeaPad 3 14IIL05 i7 l&agrave; phi&ecirc;n bản laptop mạnh mẽ ph&ugrave; hợp cho nhu cầu thiết kế đồ hoạ. M&aacute;y c&oacute; cấu h&igrave;nh khỏe với chip Core i7 thế hệ 10, ổ cứng SSD 512 GB si&ecirc;u nhanh c&ugrave;ng một thiết kế mỏng nhẹ tiện dụng chắc chắn sẽ l&agrave;m bạn h&agrave;i l&ograve;ng.&nbsp;</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Lenovo IdeaPad Slim 3 14IIL05 i7 1065G7/8GB/512GB/Win10 (81WD0040VN)','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>'Asus VivoBook A512FL i5 10210U/8GB/512GB/2GB MX250/Win10 (EJ569T)',
        'price'=>18090000,
        'old_price'=>19990000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/217320/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-9-217320-600x600.jpg',
        'rate'=>400,
        'category_id'=>7,
        'brand_id'=>2,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Asus VivoBook A512FL i5 10210U/8GB/512GB/2GB MX250/Win10 (EJ569T)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/217320/Slider/-vi-vn-asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-fix.jpg" /></p>

<p><a href="https://www.thegioididong.com/laptop/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250" target="_blank">Laptop Asus VivoBook A512FL (EJ569T)</a>&nbsp;l&agrave; chiếc&nbsp;<a href="https://www.thegioididong.com/laptop?g=mong-nhe-thoi-trang" target="_blank">laptop nhỏ gọn</a>&nbsp;ph&ugrave; hợp với đối tượng học sinh, sinh vi&ecirc;n hay nh&acirc;n vi&ecirc;n văn ph&ograve;ng. Chiếc m&aacute;y được trang bị cấu h&igrave;nh mạnh mẽ đủ để bạn thoải m&aacute;i sử dụng c&aacute;c ứng dụng văn ph&ograve;ng hiện nay v&agrave; hỗ trợ tốt trong việc xử l&iacute; h&igrave;nh ảnh bằng Photoshop, Ai.</p>

<h3>Laptop Asus khoẻ khoắn, mạnh mẽ</h3>

<p>C&aacute;c g&oacute;c cạnh được bo tr&ograve;n tỉ mỉ. To&agrave;n bộ m&aacute;y được l&agrave;m bằng&nbsp;<strong>chất liệu nhựa</strong>&nbsp;m&agrave;u &aacute;nh v&agrave;ng tạo cảm gi&aacute;c sang trọng khi nh&igrave;n v&agrave;o.&nbsp;</p>

<p>Trọng lượng của m&aacute;y chỉ&nbsp;<strong>1.67 kg</strong>, vừa đủ nhẹ để bạn mang đến bất cứ nơi đ&acirc;u l&agrave;m việc.</p>

<p><a href="https://www.thegioididong.com/images/44/217320/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-167kg-2.jpg" onclick="return false;"><img alt="Laptop Asus khoẻ khoắn, mạnh mẽ" src="https://cdn.tgdd.vn/Products/Images/44/217320/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-167kg-2.jpg" /></a></p>

<h3>M&agrave;n h&igrave;nh k&iacute;ch thước 15.6 inch</h3>

<p>Chiếc&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;n&agrave;y sở hữu m&agrave;n h&igrave;nh<strong>&nbsp;<a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a></strong>, độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;cho m&agrave;u sắc đẹp mắt, độ s&aacute;ng cao, tương phản tốt. Thiết kế&nbsp;<a href="https://www.thegioididong.com/laptop-vien-man-hinh-mong" target="_blank">viền mỏng</a>&nbsp;gi&uacute;p cho trải nghiệm nh&igrave;n thoải m&aacute;i hơn.</p>

<p>Với c&ocirc;ng nghệ<strong>&nbsp;Anti-Glare</strong>&nbsp;chống ch&oacute;i tốt, bạn c&oacute; thể sử dụng laptop ở nhiều điều kiện kh&aacute;c nhau d&ugrave; ở nơi c&oacute; &aacute;nh s&aacute;ng mạnh.</p>

<p><a href="https://www.thegioididong.com/images/44/217320/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-156inch-1.jpg" onclick="return false;"><img alt="Màn hình kích thước 15.6 inch" src="https://cdn.tgdd.vn/Products/Images/44/217320/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-156inch-1.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Asus VivoBook A512FL i5 10210U/8GB/512GB/2GB MX250/Win10 (EJ569T)</h3>

<p><img alt="Thông số kỹ thuật 217320" src="https://cdn.tgdd.vn/Products/Images/44/217320/Kit/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-note.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i5 Comet Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/cpu-intel-core-i5-10210u-tren-laptop-la-gi-1239745" target="_blank">10210U</a></p>
	</li>
	<li>Tốc độ CPU
	<p>1.60 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.2 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (On board 4GB +1 khe 4GB)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>2666 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>20 GB</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;Hỗ trợ khe cắm HDD SATA</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>15.6 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti-Glare</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-card-do-hoa-nvidia-geforce-mx250-2gb-1204684" target="_blank">NVIDIA GeForce MX250 2GB</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-realtek-high-defi-1181909" target="_blank">Realtek High Definition Audio</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516" target="_blank">2 x USB 2.0</a><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
	</li>
	<li>Khe đọc thẻ nhớ
	<p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">Micro SD</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>T&iacute;nh năng kh&aacute;c
	<p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 357.2 mm - Rộng 230.4 mm - D&agrave;y 19.9 mm</p>
	</li>
	<li>Trọng lượng
	<p>1.67 kg</p>
	</li>
	<li>Chất liệu
	<p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Model Adapter sạc
	<p>ADP-65DW Z</p>
	</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p><a href="https://www.thegioididong.com/hoi-dap/pin-li-po-la-gi-pin-li-ion-la-gi-pin-3-cell-6-ce-1190023" target="_blank">Li-Ion 2 cell</a></p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2019</p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>C&ocirc;ng nghệ Intel Core i5 -&nbsp;Ổ cứng SSD 512 GB</h2>

<p>D&acirc;n văn ph&ograve;ng sẽ h&agrave;i l&ograve;ng với cấu h&igrave;nh&nbsp;<strong>Intel&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank">Core i5</a>&nbsp;</strong>- thế hệ 10 (mới ra mắt cuối 2019) c&ugrave;ng với dung lượng&nbsp;<strong><a href="https://www.thegioididong.com/laptop-8-gb" target="_blank">RAM 8 GB</a></strong>&nbsp;m&agrave; m&aacute;y sở hữu. Dễ d&agrave;ng l&agrave;m việc với c&aacute;c ứng dụng văn ph&ograve;ng Word, Excel, Powerpoint,... v&agrave; thiết kế đồ hoạ 2D tr&ecirc;n Ai, Photoshop,... mượt m&agrave;.</p>

<p><a href="https://www.thegioididong.com/images/44/217320/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-i5-10-2.jpg" onclick="return false;"><img alt="Công nghệ Intel Core i5 - Ổ cứng SSD 512 GB" src="https://cdn.tgdd.vn/Products/Images/44/217320/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-i5-10-2.jpg" /></a></p>

<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">T&igrave;m hiểu về CPU Intel Gen 10</a></p>

<p><a href="https://www.thegioididong.com/laptop-asus-card-do-hoa-roi" target="_blank">Card đồ họa rời</a><strong>&nbsp;NVIDIA GeForce MX250 2GB</strong>&nbsp;được trang bị nhằm tăng khả năng xử l&iacute; mượt m&agrave; t&aacute;c vụ thiết kế đồ hoạ v&agrave; chơi c&aacute;c game phổ biến hiện nay: Li&ecirc;n Minh Huyền Thoại, Dota 2,...</p>

<p><a href="https://www.thegioididong.com/images/44/217320/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-mx2502gb-2.jpg" onclick="return false;"><img alt="NVIDIA GeForce MX250 2GB được trang bị " src="https://cdn.tgdd.vn/Products/Images/44/217320/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-mx2502gb-2.jpg" /></a></p>

<p>M&aacute;y c&oacute; khả năng khởi động nhanh chưa đến 20 gi&acirc;y, mở c&aacute;c ứng dụng trong t&iacute;ch tắc v&agrave; đa nhiệm c&ugrave;ng l&uacute;c nhiều tab Chrome nhờ v&agrave;o ổ cứng&nbsp;<a href="https://www.thegioididong.com/laptop-asus-o-cung-ssd" target="_blank">SSD&nbsp;</a><strong>512 GB</strong>.</p>

<p><a href="https://www.thegioididong.com/images/44/217320/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-512gb-2.jpg" onclick="return false;"><img alt="Máy có khả năng khởi động nhanh " src="https://cdn.tgdd.vn/Products/Images/44/217320/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-512gb-2.jpg" /></a></p>

<h3>T&iacute;nh năng bảo mật v&acirc;n tay</h3>

<p>Ph&iacute;m bấm của m&aacute;y t&iacute;nh&nbsp;<a href="https://www.thegioididong.com/laptop-asus" target="_blank">Asus</a>&nbsp;c&oacute; h&agrave;nh tr&igrave;nh ngắn, khoảng c&aacute;ch ph&iacute;m hợp l&iacute; v&agrave; độ nảy tốt, đem lại cảm gi&aacute;c g&otilde; ph&iacute;m nhẹ nh&agrave;ng.</p>

<p>Cảm biến v&acirc;n tay được đặt t&iacute;ch hợp với b&agrave;n di chuột. Cảm biến v&acirc;n tay 1 chạm nhanh gi&uacute;p n&acirc;ng cao t&iacute;nh bảo mật cho m&aacute;y.</p>

<p><a href="https://www.thegioididong.com/images/44/217320/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-156inch-va%CC%82ntay.jpg" onclick="return false;"><img alt="Cảm biến vân tay được đặt tích hợp với bàn di chuột" src="https://cdn.tgdd.vn/Products/Images/44/217320/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-156inch-va%CC%82ntay.jpg" /></a></p>

<h3>Dễ d&agrave;ng kết nối, chia sẻ dữ liệu</h3>

<p>Thuộc d&ograve;ng&nbsp;<a href="https://www.thegioididong.com/laptop/asus-a512fa-i5-8265u-8gb-1tb-win10-ej552t" target="_blank">Asus VivoBook 15</a>, laptop&nbsp;được trang bị nhiều cổng kết nối hiện đại, hợp với xu thế hiện nay như:&nbsp;<strong>USB 2.0</strong>,<strong>&nbsp;USB 3.1</strong>,&nbsp;<strong>HDMI</strong>,&nbsp;<strong>USB Type-C</strong>,...</p>

<p><a href="https://www.thegioididong.com/images/44/217320/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-usb-2.jpg" onclick="return false;"><img alt="Đầy đủ cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/217320/asus-vivobook-a512fl-i5-10210u-8gb-512gb-2gb-mx250-usb-2.jpg" /></a></p>

<p>Sản phẩm n&agrave;y sẽ đ&aacute;p ứng tốt những y&ecirc;u cầu t&igrave;m kiếm một thiết bị c&ocirc;ng nghệ của c&aacute;c bạn học sinh, sinh vi&ecirc;n.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Asus VivoBook A512FL i5 10210U/8GB/512GB/2GB MX250/Win10 (EJ569T)','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>'HP ZBook FireFly 14 G7 i5 10210U/8GB/256GB/4GB QuadroP520/Win10 Pro (8VK70AV)',
        'price'=>31490000,
        'old_price'=>32890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/227721/hp-zbook-firefly-14-g7-i5-8vk70av-075920-025914-600x600.jpg',
        'rate'=>400,
        'category_id'=>7,
        'brand_id'=>1,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của HP ZBook FireFly 14 G7 i5 10210U/8GB/256GB/4GB QuadroP520/Win10 Pro (8VK70AV)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/227721/Slider/hp-zbook-firefly-14-g7-i5-8vk70av-140920-0747210.jpg" /></p>

<p>Nếu bạn đang t&igrave;m một thiết bị c&oacute; hiệu năng cao, c&oacute; thể đ&aacute;p ứng tốt mọi t&aacute;c vụ từ cơ bản đến chuy&ecirc;n nghiệp m&agrave; c&ograve;n si&ecirc;u gọn nhẹ th&igrave;&nbsp;<a href="https://www.thegioididong.com/laptop/hp-zbook-firefly-14-g7-i5-8vk70av" target="_blank">Hp ZBook FireFly 14 G7 i5 (8VK70AV)</a>&nbsp;l&agrave; sản phẩm tuyệt vời d&agrave;nh cho bạn.</p>

<h3>Thiết kế ho&agrave;n hảo d&agrave;nh cho người thường xuy&ecirc;n di chuyển</h3>

<p>Trọng lượng nhẹ chỉ<strong>&nbsp;1.41 kg</strong>,&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq-zbook" target="_blank">Hp ZBook&nbsp;</a>FireFly 14 l&agrave; chiếc m&aacute;y trạm nhỏ nhất v&agrave; nhẹ nhất của&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">HP</a>&nbsp;từ trước đến nay, cung cấp t&iacute;nh di động đột ph&aacute; thực sự.</p>

<p>Độ bền chuẩn qu&acirc;n đội của&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;đ&atilde; được kiểm chứng nghi&ecirc;m ngặt, an to&agrave;n khi sử dụng tr&ecirc;n m&aacute;y bay. Laptop c&oacute; m&agrave;u x&aacute;m tối đẳng cấp gi&uacute;p t&ocirc;n l&ecirc;n sự sang trọng cho người sở hữu.</p>

<p><a href="https://www.thegioididong.com/images/44/227721/hp-zbook-firefly-14-g7-i5-8vk70va-071020-111020.jpg" onclick="return false;"><img alt="Laptop HP ZBook FireFly 14 G7 i5 (8VK70AV) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/227721/hp-zbook-firefly-14-g7-i5-8vk70va-071020-111020.jpg" /></a></p>

<p>Đặc biệt ở phi&ecirc;n bản n&agrave;y, Firefly 14 c&oacute; thiết kế b&agrave;n ph&iacute;m ho&agrave;n to&agrave;n mới, HP đ&atilde; kh&eacute;o l&eacute;o di chuyển loa sang hai b&ecirc;n cạnh b&agrave;n ph&iacute;m cho trải nghiệm &acirc;m thanh tốt hơn, di chuyển n&uacute;t nguồn v&agrave;o h&agrave;ng ph&iacute;m chức năng ph&iacute;a tr&ecirc;n ph&iacute;m Backspace,...</p>

<p>B&agrave;n ph&iacute;m mang lại cảm gi&aacute;c g&otilde; thoải m&aacute;i, h&agrave;nh tr&igrave;nh ph&iacute;m ngắn, độ nảy rất tốt, kh&ocirc;ng g&acirc;y tiếng ồn khih g&otilde;. B&agrave;n di chuột mịn mượt v&agrave; nhạy gi&uacute;p người d&ugrave;ng thao t&aacute;c dễ d&agrave;ng m&agrave; kh&ocirc;ng cần đến chuột.&nbsp;</p>

<p>C&aacute;c cổng kết nối được bố tr&iacute; đầy đủ dọc 2 b&ecirc;n cạnh m&aacute;y gồm: 2 cổng USB 3.1, HDMI, 2 cổng Thunderbolt 3 (USB Type-C), nano sim khe,...</p>

<p><a href="https://www.thegioididong.com/images/44/227721/hp-zbook-firefly-14-g7-i5-8vk70va-070920-110946.jpg" onclick="return false;"><img alt="Laptop HP ZBook FireFly 14 G7 i5 (8VK70AV) - Kết nối" src="https://cdn.tgdd.vn/Products/Images/44/227721/hp-zbook-firefly-14-g7-i5-8vk70va-070920-110946.jpg" /></a></p>

<h3>Đ&aacute;p ứng được mọi nhu cầu đa dạng</h3>

<p>M&aacute;y được trang bị bộ vi xử l&yacute;&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank"><strong>Core i5</strong></a>&nbsp;thế hệ 10 mới kết hợp c&ugrave;ng&nbsp;<a href="https://www.thegioididong.com/laptop?g=8-gb" target="_blank"><strong>RAM 8 GB</strong></a>&nbsp;gi&uacute;p bạn xử l&yacute; c&aacute;c t&aacute;c vụ mượt m&agrave;, thiết kế 2D chuy&ecirc;n nghiệp,...</p>

<p><a href="https://www.thegioididong.com/images/44/227721/hp-zbook-firefly-14-g7-i5-8vk70va-070920-110956.jpg" onclick="return false;"><img alt="Laptop HP ZBook FireFly 14 G7 i5 (8VK70AV) - Core i5" src="https://cdn.tgdd.vn/Products/Images/44/227721/hp-zbook-firefly-14-g7-i5-8vk70va-070920-110956.jpg" /></a></p>

<p>Ổ cứng&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-256-gb" target="_blank"><strong>SSD 256 GB</strong></a>&nbsp;gi&uacute;p laptop nhanh ch&oacute;ng trong khởi động v&agrave; mở ứng dụng, ngo&agrave;i ra n&oacute; c&ograve;n đem đến kh&ocirc;ng gian lưu trữ rộng r&atilde;i.</p>

<p><a href="https://www.thegioididong.com/images/44/227721/hp-zbook-firefly-14-g7-i5-8vk70va-071020-111031.jpg" onclick="return false;"><img alt="Laptop HP ZBook FireFly 14 G7 i5 (8VK70AV) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/227721/hp-zbook-firefly-14-g7-i5-8vk70va-071020-111031.jpg" /></a></p>

<p>T&iacute;ch hợp d&ograve;ng&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq-card-do-hoa-roi" target="_blank">card đồ họa</a>&nbsp;NVIDIA Quadro P520 4 GB hiệu năng cao, chuy&ecirc;n dụng cho người d&ugrave;ng c&oacute; chuy&ecirc;n ng&agrave;nh kiến tr&uacute;c thường sử dụng c&aacute;c phần mềm như&nbsp;Autodesk, Sketchup, Autocad 2D,&hellip; giờ đ&acirc;y kh&ocirc;ng c&ograve;n l&agrave; trở ngại.</p>

<p><a href="https://www.thegioididong.com/images/44/227721/hp-zbook-firefly-14-g7-i5-8vk70va-070920-110936.jpg" onclick="return false;"><img alt="Laptop HP ZBook FireFly 14 G7 i5 (8VK70AV) - Card đồ họa" src="https://cdn.tgdd.vn/Products/Images/44/227721/hp-zbook-firefly-14-g7-i5-8vk70va-070920-110936.jpg" /></a></p>

<p>Với c&aacute;c t&aacute;c vụ văn ph&ograve;ng, độ s&aacute;ng m&agrave;n h&igrave;nh v&agrave; loa ngo&agrave;i ở mức tối đa th&igrave; m&aacute;y cho thời lượng pin đạt 6-7 tiếng, đủ d&ugrave;ng cho một ng&agrave;y d&agrave;i l&agrave;m việc, thoải m&aacute;i mang theo m&aacute;y ra ngo&agrave;i m&agrave; kh&ocirc;ng cần đem theo bộ sạc.</p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết HP ZBook FireFly 14 G7 i5 10210U/8GB/256GB/4GB QuadroP520/Win10 Pro (8VK70AV)</h3>

<p><img alt="Thông số kỹ thuật 227721" src="https://cdn.tgdd.vn/Products/Images/44/227721/Kit/hp-zbook-firefly-14-g7-i5-8vk70av-n-2.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i5 Comet Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/cpu-intel-core-i5-10210u-tren-laptop-la-gi-1239745" target="_blank">10210U</a></p>
	</li>
	<li>Tốc độ CPU
	<p>1.60 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.2 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (On board)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>2666 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>Kh&ocirc;ng hỗ trợ n&acirc;ng cấp</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD 256GB NVMe PCIe</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>14 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
	</li>
	<li>Card đồ họa
	<p>NVIDIA Quadro P520, 4GB</p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-bang-olufsen-tren-laptop-955118" target="_blank">Bang &amp; Olufsen audio</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cong-thunderbolt-la-gi-uu-va-nhuoc-diem-cua-thunde-1180891" target="_blank">2 x Thunderbolt 3 (USB-C)</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>T&iacute;nh năng kh&aacute;c
	<p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 323 mm - Rộng 214.6 mm - D&agrave;y 17.9 mm</p>
	</li>
	<li>Trọng lượng
	<p>1.41 kg</p>
	</li>
	<li>Chất liệu
	<p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ kim loại</a></p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Model Adapter sạc
	<p>TPN-CA16</p>
	</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p><a href="https://www.thegioididong.com/hoi-dap/pin-li-po-la-gi-pin-li-ion-la-gi-pin-3-cell-6-ce-1190023" target="_blank">Li-Ion 3 cell</a></p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Pro</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2020</p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>M&agrave;n h&igrave;nh viền mỏng, độ s&aacute;ng cao</h2>

<p>Hỗ trợ độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>, ZBook FireFly đảm bảo h&igrave;nh ảnh c&oacute; độ sắc n&eacute;t, chi tiết m&agrave;u sắc sống động.</p>

<p>Với Hp ZBook FireFly 14, bạn c&oacute; thể thoải m&aacute;i tận hưởng m&agrave;n h&igrave;nh hiển thị chất lượng cao kể cả khi l&agrave;m việc ngo&agrave;i trời nhờ c&oacute; độ s&aacute;ng 550-nit v&agrave; c&ocirc;ng nghệ chống ch&oacute;i Anti Glare.</p>

<p>C&ugrave;ng thiết kế hiện đại&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq-vien-man-hinh-mong" target="_blank">viền benzel si&ecirc;u mỏng</a>&nbsp;gi&uacute;p kh&ocirc;ng gian hiển thị th&ecirc;m phần rộng lớn so với k&iacute;ch thước&nbsp;<a href="https://www.thegioididong.com/laptop-14-inch" target="_blank"><strong>14 inch</strong></a>&nbsp;th&ocirc;ng thường, tỷ lệ hiển thị m&agrave;n h&igrave;nh l&ecirc;n tới 85% so với th&acirc;n m&aacute;y.</p>

<p><a href="https://www.thegioididong.com/images/44/227721/hp-zbook-firefly-14-g7-i5-8vk70va-071020-111008.jpg" onclick="return false;"><img alt="Laptop HP ZBook FireFly 14 G7 i5 (8VK70AV) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/227721/hp-zbook-firefly-14-g7-i5-8vk70va-071020-111008.jpg" /></a></p>

<p>Ngo&agrave;i ra, m&aacute;y c&ograve;n được trang bị c&ocirc;ng nghệ chống nh&igrave;n trộm HP Sure View Reflect, bảo mật hiển thị tr&ecirc;n m&agrave;n h&igrave;nh laptop, khi người kh&aacute;c quan s&aacute;t từ 2 ph&iacute;a sẽ kh&ocirc;ng thể thấy được th&ocirc;ng tin.</p>

<p>Kh&ocirc;ng chỉ bảo mật ở m&agrave;n h&igrave;nh, m&aacute;y c&ograve;n được trang bị thiết bị cảm biến v&acirc;n tay hiện đại m&agrave; hầu hết c&aacute;c laptop đời mới đều sở hữu, với mục đ&iacute;ch tiết kiệm thời gian đăng nhập, g&otilde; mật khẩu v&agrave; tr&aacute;nh để người kh&aacute;c biết được c&aacute;ch đăng nhập.</p>

<p>M&aacute;y c&ograve;n trang bị một cần gạt vật l&iacute; gi&uacute;p đ&oacute;ng mở webcam dễ d&agrave;ng bằng tay, tr&aacute;nh t&igrave;nh trạng hacker x&acirc;m nhập v&agrave; đ&aacute;nh cắp h&igrave;nh ảnh của người d&ugrave;ng.</p>

<p><a href="https://www.thegioididong.com/images/44/227721/hp-zbook-firefly-14-g7-i5-8vk70va-070920-110927.jpg" onclick="return false;"><img alt="Laptop HP ZBook FireFly 14 G7 i5 (8VK70AV) - Bảo mật vân tay" src="https://cdn.tgdd.vn/Products/Images/44/227721/hp-zbook-firefly-14-g7-i5-8vk70va-070920-110927.jpg" /></a></p>

<p>HP gọi HP ZBook FireFly 14 G7 i5 (8VK70AV) l&agrave; chiếc m&aacute;y trạm di động c&oacute; m&agrave;n h&igrave;nh di động s&aacute;ng nhất thế giới quả kh&ocirc;ng ngoa. B&ecirc;n cạnh đ&oacute;, n&oacute; c&ograve;n sở hữu nhiều t&iacute;nh năng ti&ecirc;n tiến đi k&egrave;m th&igrave; c&oacute; l&iacute; do g&igrave; m&agrave; bạn kh&ocirc;ng sở hữu ngay một chiếc&nbsp;<a href="https://www.thegioididong.com/laptop?g=cao-cap-sang-trong" target="_blank">laptop đa năng</a>, hiện đại m&agrave; lại c&ograve;n sang trọng n&agrave;y?</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('HP ZBook FireFly 14 G7 i5 10210U/8GB/256GB/4GB QuadroP520/Win10 Pro (8VK70AV)','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>'HP Pavilion 15 eg0072TU i7 1165G7/8GB/512GB/Office H&S2019/Win10 (2P1N3PA)',
        'price'=>21990000,
        'old_price'=>22890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/236959/hp-pavilion-15-eg0072tu-i7-1165g7-8gb-512gb-office-600x600.jpg',
        'rate'=>400,
        'category_id'=>7,
        'brand_id'=>1,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3><a href="https://www.thegioididong.com/laptop/hp-pavilion-15-eg0072tu-i7-2p1n3pa" target="_blank">Laptop HP Pavilion 15 eg0072TU i7 (2P1N3PA)</a>&nbsp;với thiết kế tinh tế v&agrave; hiện đại, bao bọc b&ecirc;n ngo&agrave;i bằng lớp vỏ nh&ocirc;m chắc chắn c&ugrave;ng b&ecirc;n trong cấu h&igrave;nh mạnh mẽ. Đ&acirc;y sẽ l&agrave; người &ldquo;bạn hữu&quot; mang lại cho bạn những gi&acirc;y ph&uacute;t thoải m&aacute;i v&agrave; tuyệt vời nhất khi học tập, l&agrave;m việc, giải tr&iacute;.</h3>

<h3>Thiết kế tinh tế đầy thanh lịch</h3>

<p><a href="https://www.thegioididong.com/laptop-hp-compaq-pavilion" target="_blank">HP Pavilion</a>&nbsp;lấy t&ocirc;ng m&agrave;u chủ đạo v&agrave;ng &aacute;nh kim với nắp lưng v&agrave;ng ấm, chiếu nghỉ tay v&agrave;ng s&aacute;ng kết hợp với những đường n&eacute;t g&oacute;c cạnh vu&ocirc;ng vắn. Tất cả đ&atilde; tạo n&ecirc;n một tổng thể đầy tinh tế v&agrave; thanh lịch, bắt mắt từ c&aacute;i nh&igrave;n đầu ti&ecirc;n.</p>

<p>Chiếc m&aacute;y thiết kế đầy tối gi&atilde;n với trọng lượng&nbsp;<strong>1.685 kg</strong><strong>&nbsp;</strong>v&agrave; bề d&agrave;y&nbsp;<strong>17.9 mm</strong>&nbsp;gi&uacute;p c&aacute;c bạn c&oacute; thể dễ d&agrave;ng mang v&aacute;c v&agrave; di chuyển đi học hay đi l&agrave;m m&agrave; kh&ocirc;ng cần tốn qu&aacute; nhiều sức lực.</p>

<p>HP Pavilion c&ograve;n tinh &yacute; khi trang bị th&ecirc;m&nbsp;<strong>HD webcam</strong>&nbsp;cung cấp h&igrave;nh ảnh chất lượng, r&otilde; r&agrave;ng với độ ph&acirc;n giải&nbsp;<strong>HD 720p</strong>&nbsp;gi&uacute;p bạn c&oacute; thể dễ d&agrave;ng li&ecirc;n lạc với bạn b&egrave;, người th&acirc;n qua mạng x&atilde; hội hay những giờ học tr&ecirc;n: Zoom, Google Meets,...&nbsp;</p>

<p>M&aacute;y được trang bị đầy đủ c&aacute;c cổng giao tiếp tiện dụng hiện nay như:&nbsp;<strong>2 x USB 3.1</strong>,&nbsp;<strong>HDMI</strong>,&nbsp;<strong>USB Type-C</strong>, khe đọc thẻ nhớ&nbsp;<strong>Micro SD&nbsp;</strong>hỗ trợ việc truyền tải v&agrave; chia sẻ dữ liệu giữa&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;sang c&aacute;c thiết bị kh&aacute;c một c&aacute;ch thuận tiện, nhanh ch&oacute;ng. Đồng thời, hỗ trợ th&ecirc;m c&aacute;c kết nối kh&ocirc;ng<a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760">&nbsp;</a>d&acirc;y:&nbsp;<strong>Bluetooth v5.0</strong>,&nbsp;<strong>Wi-Fi 802.11 a/b/g/n/ac&nbsp;</strong>đảm bảo tốc độ đường truyền mạng lu&ocirc;n ổn định, mượt m&agrave; v&agrave; tiết kiệm điện năng hơn so với thế hệ trước đ&oacute;.&nbsp;&nbsp;</p>

<h3>Hiệu năng mạnh mẽ, xử l&iacute; đa nhiệm c&aacute;c t&aacute;c vụ</h3>

<p><a href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">Laptop HP</a>&nbsp;được trang bị chip&nbsp;<strong>Intel Core i7 Tiger Lake gen 11</strong>&nbsp;hiện đại với c&ocirc;ng nghệ&nbsp;<strong>10 SuperFin</strong>&nbsp;gi&uacute;p tăng đến&nbsp;<strong>20%&nbsp;</strong>tần số xung nhịp cho hiệu năng hoạt động ổn định, mượt m&agrave; đa t&aacute;c vụ từ học tập đến đồ hoạ 2D. Đi k&egrave;m với&nbsp;<strong>4 nh&acirc;n 8 luồng</strong>&nbsp;kết hợp card đồ hoạ<strong>&nbsp;Intel Iris Xe</strong>&nbsp;hỗ trợ xử l&iacute; tốt c&aacute;c t&aacute;c vụ đồ hoạ nặng hay xuất file c&oacute; độ ph&acirc;n giải&nbsp;<strong>4K</strong>&nbsp;hoặc&nbsp;<strong>8K HDR</strong>.</p>

<p>Bộ nhớ<a href="https://www.thegioididong.com/laptop-8-gb" target="_blank"><strong>&nbsp;RAM 8 GB DDR4</strong></a>&nbsp;xử l&iacute; đa nhiệm nhiều t&aacute;c vụ, c&oacute; thể mở l&ecirc;n đến 30 tab Chrome ngay khi khối lượng c&ocirc;ng việc nhiều c&ugrave;ng một l&uacute;c. Thiết kế h&igrave;nh ảnh tr&ecirc;n Photoshop, Ai hay chỉnh sửa video tr&ecirc;n Premiere một c&aacute;ch trơn tru, mượt m&agrave;, kh&ocirc;ng lo c&aacute;c hiện tượng giật lag hay đứng m&aacute;y đem lại ưu thế cho bạn ho&agrave;n th&agrave;nh c&ocirc;ng việc một c&aacute;ch nhanh ch&oacute;ng, kh&ocirc;ng lo chậm trễ.&nbsp;</p>

<p>Laptop c&oacute; ổ cứng<strong>&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">SSD 512 GB</a>&nbsp;M.2 PCIe&nbsp;</strong>tốc độ đọc, ghi dữ liệu v&agrave; hiệu suất nhanh ch&oacute;ng. Cho bạn một kh&ocirc;ng gian c&oacute; thể tho&aacute;i m&aacute;i lưu trữ dữ liệu phục vụ c&ocirc;ng việc đồ hoạ, hoạc tập văn ph&ograve;ng. Đồng thời, ổ cứng cũng cho thời gian phản hồi nhanh, việc khởi động m&aacute;y chưa đến 5s.</p>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết HP Pavilion 15 eg0072TU i7 1165G7/8GB/512GB/Office H&amp;S2019/Win10 (2P1N3PA)</h3>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-bo-xu-ly-intel-core-the-he-thu-11-1304404" target="_blank">Intel Core i7 Tiger Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/chip-intel-core-i7-1165g7-co-gi-moi-so-voi-cac-the-1305222" target="_blank">1165G7</a></p>
	</li>
	<li>Tốc độ CPU
	<p>2.80 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p>Turbo Boost 4.7 GHz</p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (On board 4GB +1 khe 4GB)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>3200 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>32 GB</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>15.6 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-led-backlit-led-backlight-1183188" target="_blank">LED Backlit</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-tich-hop-la-gi-950047" target="_blank">Card đồ họa t&iacute;ch hợp</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-card-do-hoa-tich-hop-intel-iris-xe-graphics-1305192" target="_blank">Intel Iris Xe Graphics</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-bang-olufsen-tren-laptop-955118" target="_blank">Bang &amp; Olufsen audio</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
	</li>
	<li>Khe đọc thẻ nhớ
	<p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">Micro SD</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 360.2 mm - Rộng 234.0 mm - D&agrave;y 17.9 mm</p>
	</li>
	<li>Trọng lượng
	<p>1.685 kg</p>
	</li>
	<li>Chất liệu
	<p>Nắp lưng v&agrave; chiếu nghỉ tay bằng kim loại</p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p>3-cell Li-ion, 41 Wh</p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p>Windows 10 Home SL + Office Home&amp;Student 2019 vĩnh viễn</p>
	</li>
	<li>Thời điểm ra mắt
	<p>2020</p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h3>&nbsp;</h3>

<h3>M&agrave;n h&igrave;nh 15.6 inch thời thượng, h&igrave;nh ảnh sắc n&eacute;t</h3>

<p>Laptop HP Pavilion c&oacute;&nbsp;<a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">m&agrave;n h&igrave;nh 15.6 inch&nbsp;</a>với độ ph&acirc;n giải&nbsp;<strong>Full HD (1920 x 1080)</strong>&nbsp;kết hợp c&ocirc;ng nghệ m&agrave;n h&igrave;nh<strong>&nbsp;LED Backlit</strong>&nbsp;c&ugrave;ng tấm nền&nbsp;<strong>IPS</strong>&nbsp;gi&uacute;p g&oacute;c nh&igrave;n rộng, h&igrave;nh ảnh hiển thị ch&iacute;nh x&aacute;c nhất đem đến cho bạn cảm gi&aacute;c tận hưởng từng khung cảnh chuyển động sắc n&eacute;t, ch&acirc;n thật nhất.</p>

<p>Ngo&agrave;i ra, c&ocirc;ng nghệ&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">chống ch&oacute;i Anti Glare</a><strong>&nbsp;</strong>c&oacute; tr&ecirc;n m&aacute;y gi&uacute;p m&agrave;n h&igrave;nh chống lo&aacute;, chống ch&oacute;i khi l&agrave;m việc dưới cường độ &aacute;nh s&aacute;ng cao, bảo vệ đ&ocirc;i mắt bạn đỡ mỏi khi l&agrave;m ngo&agrave;i trời trong nhiều giờ liền.</p>

<p>C&ocirc;ng nghệ &acirc;m thanh<strong>&nbsp;</strong><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-bang-olufsen-tren-laptop-955118" target="_blank">Bang &amp; Olufsen Audio</a>&nbsp;t&iacute;ch hợp khả năng lọc tiếng ồn đem đến &acirc;m thanh to v&agrave; r&otilde; r&agrave;ng hơn. Gi&uacute;p bạn ho&agrave; m&igrave;nh v&agrave;o những &acirc;m thanh sống động qua từng b&agrave;i nhạc hay từng thoại phim.</p>

<p>Laptop HP Pavilion 15 eg0072TU i7 (2P1N3PA)<strong>&nbsp;</strong>với cấu h&igrave;nh mạnh mẽ c&ugrave;ng thiết kế tinh tế, sẽ l&agrave; lựa chọn l&iacute; tưởng đ&aacute;p ứng nhu cầu học tập văn ph&ograve;ng lẫn thiết kế đồ hoạ d&agrave;nh cho bạn.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('HP Pavilion 15 eg0072TU i7 1165G7/8GB/512GB/Office H&S2019/Win10 (2P1N3PA)','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>'Dell Vostro 5402 i7 1165G7/16GB/512GB/2GB MX330/Win10 (70231338)',
        'price'=>25490000,
        'old_price'=>27890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/232475/dell-vostro-5402-i7-70231338-064321-114334-600x600.jpg',
        'rate'=>400,
        'category_id'=>7,
        'brand_id'=>3,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Dell Vostro 5402 i7 1165G7/16GB/512GB/2GB MX330/Win10 (70231338)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/232475/Slider/5402-800x444.jpg" /></p>

<p><a href="https://thegioididong.com/sp-232475" target="_blank">Dell Vostro 5402 i7 (70231338)</a>&nbsp;l&agrave; một lựa chọn đ&aacute;ng tin cậy cho người d&ugrave;ng khi mang tr&ecirc;n m&igrave;nh cấu h&igrave;nh tuyệt vời đến từ bộ vi xử l&yacute; Intel thế hệ thứ 11, thiết kế tinh tế, bền bỉ cộng với thời lượng pin ấn tượng đến bất ngờ.</p>

<h3>Mạnh mẽ vượt trội với Core i7 thế hệ thứ 11</h3>

<p>Dell Vostro 5402 i7 l&agrave; phương tiện l&yacute; tưởng để l&agrave;m việc khi mang tr&ecirc;n m&igrave;nh bộ vi xử l&yacute;&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Intel Core i7</a>&nbsp;-&nbsp;<strong>1165G7</strong>&nbsp;thuộc d&ograve;ng&nbsp;<a href="https://www.thegioididong.com/laptop-cpu-intel-gen-11" target="_blank">CPU thế hệ thứ 11</a>&nbsp;mạnh mẽ mang đến khả năng xử l&yacute; mạnh mẽ c&aacute;c t&aacute;c vụ hạng nặng như: Photoshop, Adobe Premiere, mang đến hiệu năng mạnh mẽ đảm bảo xử l&yacute; tốt c&aacute;c c&ocirc;ng việc của bạn với&nbsp;<strong>4 nh&acirc;n 8 luồng&nbsp;</strong>c&oacute; xung nhịp cơ bản l&agrave;<strong>&nbsp;2.8 GHz&nbsp;</strong>v&agrave; xung nhịp tối đa l&ecirc;n tới&nbsp;<strong>4.7 GHz</strong>.</p>

<p>Sức mạnh của Dell Vostro chưa dừng lại ở đ&oacute;, phi&ecirc;n bản n&agrave;y đ&atilde; được trang bị sẵn&nbsp;<a href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank">card đồ họa rời</a>&nbsp;<strong>NVIDIA GeForce MX330, 2GB</strong>, tăng cường khả năng l&agrave;m đồ họa, th&iacute;ch hợp cho c&ocirc;ng việc chỉnh sửa ảnh, video. Thậm ch&iacute; bạn c&ograve;n c&oacute; thể giải tr&iacute; với những tựa game 3D tr&ecirc;n chiếc laptop nhỏ gọn n&agrave;y.</p>

<p>Dell Vostro 5402 i7 sở hữu bộ nhớ&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=16-gb" target="_blank">RAM 16 GB</a></strong>&nbsp;<strong>DDR4&nbsp;</strong>gi&uacute;p laptop chạy đa nhiệm hơn rất nhiều.&nbsp;D&ugrave; chỉnh những bức ảnh độ ph&acirc;n giải h&agrave;ng tỷ pixels hay thiết kế đồ họa photoshop, AI v&agrave; xử l&yacute; video c&ugrave;ng l&uacute;c, laptop vẫn đ&aacute;p ứng chạy cực kỳ mượt m&agrave;. Tuyệt vời hơn khi bạn c&oacute; thể n&acirc;ng cấp l&ecirc;n&nbsp;<strong>32 GB</strong>&nbsp;để bạn thỏa sức đa nhiệm tr&ecirc;n chiếc laptop n&agrave;y.</p>

<p><a href="https://www.thegioididong.com/images/44/232475/dell-vostro-5402-i7-70231338-080021-030040.jpg" onclick="return false;"><img alt="Dell Vostro 5402 i7 (70231338) - cấu hình" src="https://cdn.tgdd.vn/Products/Images/44/232475/dell-vostro-5402-i7-70231338-080021-030040.jpg" /></a></p>

<p>Ổ cứng&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">SSD 512 GB</a>&nbsp;M.2 PCIe</strong>&nbsp;kh&ocirc;ng chỉ mang đến cho bạn một kh&ocirc;ng gian v&ocirc; c&ugrave;ng rộng lớn để lưu trữ những nội dung, t&agrave;i liệu cần thiết m&agrave; n&oacute; c&ograve;n gi&uacute;p tốc độ khởi động m&aacute;y nhanh trong v&agrave;i gi&acirc;y, mở ứng dụng v&agrave; truyền dữ liệu cũng nhanh đ&aacute;ng kinh ngạc.</p>

<p><a href="https://www.thegioididong.com/images/44/232475/dell-vostro-5402-i7-70231338-080021-030059.jpg" onclick="return false;"><img alt="Dell Vostro 5402 i7 (70231338) - ssd" src="https://cdn.tgdd.vn/Products/Images/44/232475/dell-vostro-5402-i7-70231338-080021-030059.jpg" /></a></p>

<h3>Gọn nhẹ, bền bỉ đậm chất ri&ecirc;ng</h3>

<p>Với một c&ocirc;ng việc y&ecirc;u cầu việc di chuyển thường xuy&ecirc;n, bạn thật sự cần một chiếc laptop gọn nhẹ như con&nbsp;<a href="https://www.thegioididong.com/laptop-dell-vostro" target="_blank">Dell Vostro</a>&nbsp;n&agrave;y. Nhờ sở hữu độ mỏng chỉ&nbsp;<strong>16.74 mm&nbsp;</strong>v&agrave; trọng lượng vỏn vẹn&nbsp;<strong>1.36 kg</strong>, bạn dễ d&agrave;ng c&ugrave;ng người bạn đồng h&agrave;nh của bạn đi khắp mọi nơi bất cứ l&uacute;c n&agrave;o.</p>

<p>Th&acirc;n m&aacute;y chắc chắn, đảm bảo được trọng lượng gọn nhẹ nhờ được ho&agrave;n thiện từ nhựa nhưng vẫn giữ được vẻ sang trọng v&igrave; nắp lưng l&agrave;m từ kim loại. Logo được thiết kế b&oacute;ng bẩy, nổi bật ở giữa mặt lưng laptop.</p>

<p><a href="https://www.thegioididong.com/images/44/232475/dell-vostro-5402-i7-70231338-080121-030107.jpg" onclick="return false;"><img alt="Dell Vostro 5402 i7 (70231338) - thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/232475/dell-vostro-5402-i7-70231338-080121-030107.jpg" /></a></p>

<p>D&ugrave; c&oacute; thiết kế mỏng nhẹ nhưng&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;vẫn mang tr&ecirc;n m&igrave;nh đầy đủ c&aacute;c cổng kết nối phổ biến th&ocirc;ng dụng để bạn dễ d&agrave;ng kết nối những thiết bị ngoại vi bao gồm 2 cổng&nbsp;<strong>USB 3.2, HDMI</strong>,&nbsp;<strong>LAN (RJ45) v&agrave; USB Type-C&nbsp;</strong>v&agrave; đầu đọc thẻ nhớ&nbsp;<strong>Micro SD.&nbsp;</strong>Với nhiều cổng kết nối như vậy, c&ocirc;ng việc của bạn sẽ diễn ra thuận lợi hơn khi cắm th&ecirc;m c&aacute;c thiết bị bổ trợ cần thiết.</p>

<p><a href="https://www.thegioididong.com/images/44/232475/dell-vostro-5402-i7-70231338-080021-030021.jpg" onclick="return false;"><img alt="Dell Vostro 5402 i7 (70231338) - cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/232475/dell-vostro-5402-i7-70231338-080021-030021.jpg" /></a></p>

<p>Để bạn dễ d&agrave;ng kết nối với c&aacute;c thiết bị kh&aacute;c m&agrave; kh&ocirc;ng cần đến d&acirc;y cắm,&nbsp;<a href="https://www.thegioididong.com/laptop-dell" target="_blank">laptop Dell</a>&nbsp;đ&atilde; hỗ trợ bạn cổng kết nối kh&ocirc;ng d&acirc;y&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a>&nbsp;v&agrave;&nbsp;<a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-kho-1113891" target="_blank">Bluetooth v5.0</a>. Từ đ&oacute;, tốc độ lướt web, kết nối Internet hay tốc độ truyền dữ liệu trở n&ecirc;n nhanh ch&oacute;ng hơn.</p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Dell Vostro 5402 i7 1165G7/16GB/512GB/2GB MX330/Win10 (70231338)</h3>

<p><img alt="Thông số kỹ thuật 232475" src="https://cdn.tgdd.vn/Products/Images/44/232475/Kit/dell-vostro-5402-i7-70231338-note.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-bo-xu-ly-intel-core-the-he-thu-11-1304404" target="_blank">Intel Core i7 Tiger Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/chip-intel-core-i7-1165g7-co-gi-moi-so-voi-cac-the-1305222" target="_blank">1165G7</a></p>
	</li>
	<li>Tốc độ CPU
	<p>2.80 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p>Turbo Boost 4.7 GHz</p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">16 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>3200 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>32 GB</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cac-chuan-toc-do-cua-o-cung-ssd-tren-1115453" target="_blank">Hỗ trợ khe cắm SSD M.2 PCIe</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>14 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p>WVA<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/nvidia-geforce-mx330-tren-laptop-la-gi-1264163" target="_blank">NVIDIA GeForce MX330, 2GB</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-realtek-high-defi-1181909" target="_blank">Realtek High Definition Audio</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">2 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
	</li>
	<li>Khe đọc thẻ nhớ
	<p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">Micro SD</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>T&iacute;nh năng kh&aacute;c
	<p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;y 321.3 mm - Rộng 216.2mm - D&agrave;y 16.74 mm</p>
	</li>
	<li>Trọng lượng
	<p>1.36 kg</p>
	</li>
	<li>Chất liệu
	<p>Vỏ nhựa - nắp lưng bằng kim loại</p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p>3-cell Li-ion, 40 Wh</p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2020</p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>H&igrave;nh ảnh sống động, sắc n&eacute;t đến từng chi tiết</h2>

<p>Với một m&agrave;n h&igrave;nh lớn k&iacute;ch thước&nbsp;<a href="https://www.thegioididong.com/laptop-14-inch" target="_blank">14 inch</a>&nbsp;cộng th&ecirc;m độ ph&acirc;n giải sắc n&eacute;t&nbsp;<strong>Full HD,&nbsp;</strong>laptop sẽ mang lại cho bạn&nbsp;nhiều nội dung hơn tr&ecirc;n m&agrave;n h&igrave;nh với h&igrave;nh ảnh cực kỳ sắc n&eacute;t, gi&uacute;p cho bạn ho&agrave;n th&agrave;nh c&ocirc;ng việc một c&aacute;ch hiệu quả.&nbsp;</p>

<p>Đặc biệt, laptop c&ograve;n được sở hữu c&ocirc;ng nghệ m&agrave;n h&igrave;nh&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wide-viewing-angle-la-gi-uu-nhuoc-diem-1302188" target="_blank">WVA</a>&nbsp;mang đến cho m&agrave;n h&igrave;nh laptop một g&oacute;c nh&igrave;n rộng l&ecirc;n đến&nbsp;<strong>178 độ</strong>, bạn c&oacute; thể xem m&agrave;n h&igrave;nh ở nhiều vị tr&iacute; kh&aacute;c nhau m&agrave; h&igrave;nh ảnh vẫn kh&ocirc;ng bị biến dạng v&agrave; cảm gi&aacute;c khung h&igrave;nh tr&agrave;n viền nhờ viền m&agrave;n h&igrave;nh được l&agrave;m mỏng ở 3 cạnh.</p>

<p><a href="https://www.thegioididong.com/images/44/232475/dell-vostro-5402-i7-70231338-080021-030050.jpg" onclick="return false;"><img alt="Dell Vostro 5402 i7 (70231338) - màn hình" src="https://cdn.tgdd.vn/Products/Images/44/232475/dell-vostro-5402-i7-70231338-080021-030050.jpg" /></a></p>

<p>Laptop Dell đ&atilde; n&acirc;ng trải nghiệm của bạn l&ecirc;n tầm cao hơn với sự trang bị c&ocirc;ng nghệ &acirc;m thanh&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-realtek-high-defini-1181909" target="_blank">Realtek High Definition Audio</a>&nbsp;gi&uacute;p&nbsp;cung cấp chất lượng &acirc;m thanh tương đối ổn định, khuếch đại &acirc;m thanh khi chơi game, xem phim, nghe nhạc,&hellip;</p>

<p><a href="https://www.thegioididong.com/images/44/232475/dell-vostro-5402-i7-70231338-080021-030013.jpg" onclick="return false;"><img alt="Dell Vostro 5402 i7 (70231338) - âm thanh" src="https://cdn.tgdd.vn/Products/Images/44/232475/dell-vostro-5402-i7-70231338-080021-030013.jpg" /></a></p>

<h3>Bảo mật hiện đại, mở kh&oacute;a chỉ với một chạm</h3>

<p>Bạn dễ d&agrave;ng khởi động m&aacute;y một c&aacute;ch nhanh ch&oacute;ng v&agrave; thuận tiện chỉ sau một c&uacute; chạm. Được t&iacute;ch hợp&nbsp;<a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">bảo mật v&acirc;n tay</a>&nbsp;ngay tr&ecirc;n n&uacute;t nguồn, laptop sẽ dễ d&agrave;ng nhận diện v&acirc;n tay v&agrave; mở kh&oacute;a ngay lập tức. Nhờ vậy, bạn sẽ được bảo mật những th&ocirc;ng tin quan trọng tr&ecirc;n laptop, kh&ocirc;ng lo bị hack một c&aacute;ch dễ d&agrave;ng.</p>

<p><a href="https://www.thegioididong.com/images/44/232475/dell-vostro-5402-i7-70231338-263021-093036.jpg" onclick="return false;"><img alt="Dell Vostro 5402 i7 (70231338) - vân tay" src="https://cdn.tgdd.vn/Products/Images/44/232475/dell-vostro-5402-i7-70231338-263021-093036.jpg" /></a></p>

<p>B&ecirc;n cạnh đ&oacute;, laptop c&ograve;n trang bị th&ecirc;m b&agrave;n ph&iacute;m g&otilde; rất nhạy, độ phản hồi cao, h&agrave;nh tr&igrave;nh ph&iacute;m s&acirc;u gi&uacute;p tăng tốc độ g&otilde; văn bản của bạn. Kh&ocirc;ng chỉ dừng lại ở đ&oacute;, để bạn dễ d&agrave;ng l&agrave;m việc trong trời tối hay ở điều kiện thiếu s&aacute;ng, Dell đ&atilde; t&iacute;ch hợp&nbsp;<strong>đ&egrave;n nền&nbsp;</strong>v&agrave;o b&agrave;n ph&iacute;m v&ocirc; c&ugrave;ng tinh tế.</p>

<p><a href="https://www.thegioididong.com/images/44/232475/dell-vostro-5402-i7-70231338-080021-030031.jpg" onclick="return false;"><img alt="Dell Vostro 5402 i7 (70231338) - bàn phím" src="https://cdn.tgdd.vn/Products/Images/44/232475/dell-vostro-5402-i7-70231338-080021-030031.jpg" /></a></p>

<p>Với cấu h&igrave;nh v&ocirc; c&ugrave;ng mạnh mẽ như vậy,&nbsp;Dell Vostro 5402 i7 (70231338) thật sự rất đ&aacute;ng tin cậy cho người d&ugrave;ng trong việc chọn mua để sử dụng trong ph&acirc;n kh&uacute;c&nbsp;<a href="https://www.thegioididong.com/laptop?g=hoc-tap-van-phong" target="_blank">học tập - văn ph&ograve;ng.</a></p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Dell Vostro 5402 i7 1165G7/16GB/512GB/2GB MX330/Win10 (70231338)','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>'Laptop Lenovo Thinkpad E590 20NBS07000 - Intel Core i5',
        'price'=>13490000,
        'old_price'=>14890000,
        'quantity'=>50,
        'cover_image'=>'https://laptop88.vn/media/product/4522_artboard_3.png',
        'rate'=>400,
        'category_id'=>8,
        'brand_id'=>6,
        'user_id'=>random_int(1,5),
        'describe'=> '<p><strong>Lenovo ThinkPad E590 - Bền bỉ hơn, kết nối nhiều hơn</strong></p>

<p><strong><img alt="" src="https://laptop88.vn/media/lib/4522_1.png" /></strong></p>

<p>Lenovo ThinkPad E590 được biết tới với thiết kế bắt mắt hơn, b&agrave;n ph&iacute;m hiện đại, v&agrave; đặc biệt l&agrave; cấu h&igrave;nh mạnh mẽ, chắc chắn đ&acirc;y sẽ l&agrave; một sự lựa chọn tuyệt vời cho c&aacute;c doanh nghiệp vừa v&agrave; nhỏ.</p>

<p><strong>Thiết kế chắc chắn</strong></p>

<p>Laptop Lenovo ThinkPad E590 được thiết kế với kiểu d&aacute;ng tinh tế, chắc chắn. Sản phẩm c&oacute; trọng lượng nhẹ để dễ d&agrave;ng mang theo b&ecirc;n m&igrave;nh hỗ trợ c&ocirc;ng việc, học tập.</p>

<p><img alt="" src="https://laptop88.vn/media/lib/4522_2.png" /></p>

<p><strong>Kết nối đa dạng</strong></p>

<p>ThinkPad E590 được trang bị kh&aacute; đầy đủ c&aacute;c cổng kết nối cơ bản như cổng mạng RJ45, 1 cổng USB 2.0, 2 cổng USB 3.0, cổng HDMI, đầu đọc thẻ nhớ MicroSD, jack &acirc;m thanh 3.5 v&agrave; cổng USB-C đồng thời l&agrave; cổng sạc cho m&aacute;y.</p>

<p><img alt="" src="https://laptop88.vn/media/lib/4522_3.png" /></p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật</h3>

<table>
	<tbody>
		<tr>
			<td>Hệ điều h&agrave;nh</td>
			<td>
			<p>Free Dos</p>
			</td>
		</tr>
		<tr>
			<td>Bộ vi xử l&yacute;</td>
			<td>
			<p>Intel Core i5 8265U 1.6GHz, 6MB</p>
			</td>
		</tr>
		<tr>
			<td>Bộ nhớ Ram</td>
			<td>
			<p>4GB DDR4</p>
			</td>
		</tr>
		<tr>
			<td>Ổ đĩa cứng</td>
			<td>
			<p>1TB</p>
			</td>
		</tr>
		<tr>
			<td>M&agrave;n h&igrave;nh</td>
			<td>
			<p>15.6&quot;&nbsp;HD</p>
			</td>
		</tr>
		<tr>
			<td>Đồ họa</td>
			<td>
			<p>Intel HD 620 / AMD RX 550X 2GB</p>
			</td>
		</tr>
		<tr>
			<td>Keyboard + Mouse</td>
			<td>
			<p>Keyboard Laptop + Touchpad</p>
			</td>
		</tr>
		<tr>
			<td>Camera</td>
			<td>
			<p>HD 720p</p>
			</td>
		</tr>
		<tr>
			<td>Pin (Battery)</td>
			<td>
			<p>3CELL_45WH</p>
			</td>
		</tr>
		<tr>
			<td>&Acirc;m thanh</td>
			<td>
			<p>Dolby&reg; Advanced Audio&trade; Skype-certified dual-array mic 2 1.5W stereo speakers</p>
			</td>
		</tr>
		<tr>
			<td>Phụ kiện k&egrave;m theo</td>
			<td>
			<p>Full box</p>
			</td>
		</tr>
		<tr>
			<td>K&iacute;ch thước</td>
			<td>
			<p>369mm x 252.5mm x 19.9mm</p>
			</td>
		</tr>
		<tr>
			<td>Khối lượng</td>
			<td>
			<p>2.1kg</p>
			</td>
		</tr>
		<tr>
			<td>Bảo h&agrave;nh</td>
			<td>
			<p>12 th&aacute;ng</p>
			</td>
		</tr>
		<tr>
			<td>H&atilde;ng sản xuất</td>
			<td>
			<p>Lenovo</p>
			</td>
		</tr>
	</tbody>
</table>
',
        'details'=> '<p>.<strong>B&agrave;n ph&iacute;m v&agrave; Touchpad</strong></p>

<p>B&agrave;n ph&iacute;m l&agrave; một trong những yếu tố tạo n&ecirc;n huyền thoại ThinkPad, mặc d&ugrave; kh&ocirc;ng phải l&agrave; một sản phẩm cao cấp nhưng E590 vẫn được trang bị b&agrave;n ph&iacute;m chất lượng. H&agrave;nh tr&igrave;nh ph&iacute;m s&acirc;u 1,78mm v&agrave; cần một lực 72g để thao t&aacute;c. Cảm gi&aacute;c đ&aacute;nh m&aacute;y rất tốt, hạn chế sai lỗi ch&iacute;nh tả v&agrave; tốc độ đ&aacute;nh m&aacute;y đạt được l&agrave; rất tốt.</p>

<p><img alt="" src="https://laptop88.vn/media/lib/4522_4.png" /></p>

<p>Touchpad của ThinPad E590 cũng sở hữu chất lượng tốt với bề mặt kh&aacute; mịn, kh&ocirc;ng bị b&aacute;m tay, c&aacute;c thao t&aacute;c ch&iacute;nh x&aacute;c v&agrave; nhận diện đa điểm tốt.</p>

<p><strong>Cấu h&igrave;nh ổn định</strong></p>

<p>M&aacute;y được trang bị bộ vi xử l&yacute; Intel Core i5 8265U 1.6GHz, 6MB, RAM 4GB gi&uacute;p xử l&yacute; c&aacute;c t&aacute;c vụ nhanh ch&oacute;ng, mượt m&agrave;, hỗ trợ đa nhiệm tốt. Ổ cứng 1TB để bạn thoải m&aacute;i lưu trữ dữ liệu v&agrave; c&agrave;i đặt phần mềm. Với cấu h&igrave;nh n&agrave;y sẽ hỗ trợ cho người d&ugrave;ng c&oacute; thể chạy c&aacute;c chương tr&igrave;nh mượt m&agrave; v&agrave; cung cấp tốc độ xử l&yacute; dữ liệu nhanh ch&oacute;ng.</p>

<p><img alt="" src="https://laptop88.vn/media/lib/4522_5.png" /></p>

<p><strong>&Acirc;m thanh</strong></p>

<p>Theo đ&aacute;nh gi&aacute; của chuy&ecirc;n trang laptopmag th&igrave; ThinkPad E590 l&agrave; một trong những mẫu laptop c&oacute; loa ngo&agrave;i lớn nhất tr&ecirc;n thị trường. Mặc d&ugrave; chất lượng kh&ocirc;ng qu&aacute; xuất sắc nhưng khi sử dụng trong c&aacute;c buổi họp nếu kh&ocirc;ng c&oacute; loa ngo&agrave;i th&igrave; đ&acirc;y sẽ l&agrave; một chiếc laptop l&yacute; tưởng.</p>

<p><img alt="" src="https://laptop88.vn/media/lib/4522_6.png" /></p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Laptop Lenovo Thinkpad E590 20NBS07000 - Intel Core i5','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>'HP EliteBook X360 1040 G7 i7 10710U/16GB/512GB+32GB/Pen/Touch/Win10 Pro (230P8PA)',
        'price'=>48490000,
        'old_price'=>50890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-600x600.jpg',
        'rate'=>400,
        'category_id'=>8,
        'brand_id'=>1,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của HP EliteBook X360 1040 G7 i7 10710U/16GB/512GB+32GB/Pen/Touch/Win10 Pro (230P8PA)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/232152/Slider/hp-elitebook-x360-1040-g7-i7-230p8pa-311220-0239481.jpg" /></p>

<h2>Laptop&nbsp;<a href="https://www.thegioididong.com/laptop/hp-elitebook-x360-1040-g7-i7-230p8pa" target="_blank">HP EliteBook X360 1040 (230P8PA)</a>&nbsp;l&agrave; một phi&ecirc;n bản laptop với thiết kế mỏng nhẹ c&ugrave;ng với chip Core i7 hiệu năng mạnh mẽ. Đ&acirc;y thực sự l&agrave; con laptop đ&aacute;ng mong đợi d&agrave;nh cho doanh nh&acirc;n hay c&aacute;c bạn c&oacute; nhu cầu di chuyển cao.</h2>

<h3>Cấu h&igrave;nh khủng, n&acirc;ng cao năng suất l&agrave;m việc</h3>

<p>Được sử dụng bộ vi xử l&yacute; đến từ h&atilde;ng Intel,&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Intel Core i7</a>&nbsp;<strong>Comet Lake</strong>&nbsp;được trang bị&nbsp;<strong>6 nh&acirc;n 12 luồng</strong>&nbsp;đem đến sự cải tiến về hiệu năng lẫn tốc độ xử l&yacute;, gi&uacute;p n&acirc;ng cao năng suất l&agrave;m việc của người d&ugrave;ng với xung nhịp cơ sở l&agrave;&nbsp;<strong>1.1 GHz</strong>&nbsp;v&agrave; được &eacute;p xung tối đa l&ecirc;n đến&nbsp;<strong>4.7 GHz.</strong></p>

<p><a href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315620-025603.jpg" onclick="return false;"><img alt="HP EliteBook X360 1040 (230P8PA) - CPU" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315620-025603.jpg" /></a></p>

<p>B&ecirc;n cạnh đ&oacute;, laptop HP c&ograve;n được trang bị bộ nhớ&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=16-gb" target="_blank">RAM 16 GB</a></strong>&nbsp;gi&uacute;p bạn c&oacute; thể chạy được Photoshop, Ai, chỉnh sửa video, dựng vlog mượt m&agrave;, đ&aacute;p ứng tốt nhu cầu c&ocirc;ng việc của bạn.</p>

<p><a href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315620-025646.jpg" onclick="return false;"><img alt="HP EliteBook X360 1040 (230P8PA) - RAM" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315620-025646.jpg" /></a></p>

<p>Ngo&agrave;i ra, laptop c&oacute; trang bị ổ cứng&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">SSD 512 GB</a></strong>&nbsp;<strong>M.2 PCIe&nbsp;</strong>vận h&agrave;nh mượt m&agrave;, nhanh ch&oacute;ng,&nbsp;tăng tốc độ khởi động m&aacute;y với thời gian&nbsp;chỉ khoảng 10-15 gi&acirc;y. Đồng thời n&oacute; c&ograve;n gi&uacute;p laptop&nbsp;truy cập ứng dụng cũng như truy xuất dữ liệu với tốc độ cực nhanh, mang đến cho bạn một sự h&agrave;i l&ograve;ng đ&aacute;ng mong đợi.</p>

<p>Kh&ocirc;ng chỉ vậy, HP c&ograve;n hỗ trợ th&ecirc;m&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq-bo-nho-intel-optane" target="_blank">Intel Optane 32GB (H10)</a>, đem đến cho người d&ugrave;ng một kh&ocirc;ng gian cực kỳ lớn để lưu trữ c&aacute;c tệp tin như phim, t&agrave;i liệu hoặc album ảnh m&agrave; kh&ocirc;ng cần lo lắng dung lượng bị đầy l&agrave;m giảm tốc độ m&aacute;y.</p>

<p><a href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315720-025703.jpg" onclick="return false;"><img alt="HP EliteBook X360 1040 (230P8PA) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315720-025703.jpg" /></a></p>

<h3><strong>Si&ecirc;u phẩm trong thiết kế mỏng nhẹ, lịch l&atilde;m</strong></h3>

<p>Được bao bọc bởi vỏ kim loại nguy&ecirc;n khối,&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq-elitebook" target="_blank">laptop HP EliteBook</a>&nbsp;sẽ kh&ocirc;ng khiến bạn thất vọng bởi vẻ ngo&agrave;i chắc chắn nhưng đường n&eacute;t rất tỉ mỉ v&agrave; kh&ocirc;ng k&eacute;m phần sang trọng của m&igrave;nh.</p>

<p>Kh&ocirc;ng chỉ ấn tượng bởi vẻ bề ngo&agrave;i cao cấp, laptop HP v&ocirc; c&ugrave;ng mỏng chỉ&nbsp;<strong>16.6 mm</strong>&nbsp;v&agrave; trọng lượng chỉ dừng lại ở&nbsp;<strong>1.392 kg</strong>. Nhờ vậy, bạn c&oacute; thể dễ d&agrave;ng đem theo hay để gọn trong balo v&agrave; di chuyển một c&aacute;ch tiện lợi nhất.</p>

<p><a href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315720-025725.jpg" onclick="return false;"><img alt="HP EliteBook X360 1040 (230P8PA) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315720-025725.jpg" /></a></p>

<p>Tuy mỏng nhẹ như vậy nhưng&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">laptop HP</a>&nbsp;c&oacute; kh&aacute; đầy đủ c&aacute;c cổng kết nối th&ocirc;ng dụng như&nbsp;<strong>USB 3.1 Type-C với Thunderbolt</strong>,&nbsp;<strong>USB 3.1</strong>&nbsp;v&agrave; cổng&nbsp;<strong>HDMI</strong>.</p>

<p>Ngo&agrave;i ra, HP c&ograve;n được trang bị c&aacute;c cổng kết nối ngo&agrave;i kh&ocirc;ng d&acirc;y v&ocirc; c&ugrave;ng tiện lợi như&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-1187524" target="_blank">Wi-Fi 6 - 802.11ax</a>&nbsp;gi&uacute;p laptop&nbsp;<strong>cải thiện tốc độ tải</strong>, gi&uacute;p&nbsp;<strong>tr&aacute;nh mất kết nối</strong>&nbsp;v&agrave; những vấn đề kh&aacute;c.,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>&nbsp;với tốc độ kết nối cao l&ecirc;n đến&nbsp;<strong>50 Mbps</strong>&nbsp;v&agrave; ph&aacute;t s&oacute;ng l&ecirc;n đến<strong>&nbsp;300 m</strong>&nbsp;kh&ocirc;ng c&oacute; vật cản.</p>

<p><a href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315520-025544.jpg" onclick="return false;"><img alt="HP EliteBook X360 1040 (230P8PA) - Kết nối" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315520-025544.jpg" /></a></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết HP EliteBook X360 1040 G7 i7 10710U/16GB/512GB+32GB/Pen/Touch/Win10 Pro (230P8PA)</h3>

<p><img alt="Thông số kỹ thuật 232152" src="https://cdn.tgdd.vn/Products/Images/44/232152/Kit/hp-elitebook-x360-1040-g7-i7-230p8pa-note.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i7 Comet Lake</a></p>
	</li>
	<li>Loại CPU
	<p>10710U</p>
	</li>
	<li>Tốc độ CPU
	<p>1.10 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p>Turbo Boost 4.7 GHz</p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">16 GB</a></p>
	</li>
	<li>Loại RAM
	<p>LPDDR4 (on board)</p>
	</li>
	<li>Tốc độ Bus RAM
	<p>2933 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>Kh&ocirc;ng hỗ trợ n&acirc;ng cấp</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/bo-nho-intel-optane-la-gi-1213036" target="_blank">Intel Optane 32GB (H10)</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>14 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a>Độ s&aacute;ng 1000 nits<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-bao-mat-hp-sure-view-la-gi-cach-kich-hoa-1211189" target="_blank">HP Sure View</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>C&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-tich-hop-la-gi-950047" target="_blank">Card đồ họa t&iacute;ch hợp</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/card-man-hinh-intel-uhd-graphics-tren-laptop-la-gi-1199634" target="_blank">Intel UHD Graphics</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-bang-olufsen-tren-laptop-955118" target="_blank">Bang &amp; Olufsen audio</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p>2 x USB 3.1 Type-C with Thunderbolt<a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/camera-ir-tren-laptop-la-gi-1269288" target="_blank">Camera IR</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>T&iacute;nh năng kh&aacute;c
	<p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 319.3 mm - Rộng 202.6 mm - D&agrave;y 16.6 mm</p>
	</li>
	<li>Trọng lượng
	<p>1.392 kg</p>
	</li>
	<li>Chất liệu
	<p>Vỏ kim loại nguy&ecirc;n khối</p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p>4-cell - 78.5 Wh Li-ion</p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Pro</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2020</p>
	</li>
</ul>
',
        'details'=> '<h2><strong>Trải nghiệm th&uacute; vị với m&agrave;n h&igrave;nh sắc n&eacute;t, ch&acirc;n thật</strong></h2>

<p>Với độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>, m&agrave;n h&igrave;nh laptop&nbsp;<a href="https://www.thegioididong.com/laptop-14-inch" target="_blank">14 inch</a>&nbsp;đem đến cho người d&ugrave;ng ch&igrave;m đắm trong những thước phim tuyệt đỉnh, ch&acirc;n thật với h&igrave;nh ảnh r&otilde; n&eacute;t hơn bao giờ hết. Hơn nữa, m&agrave;n h&igrave;nh c&ograve;n được trang bị c&ocirc;ng nghệ chống ch&oacute;i&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Anti Glare</a>, người d&ugrave;ng dễ d&agrave;ng l&agrave;m việc trong m&ocirc;i trường nhiều &aacute;nh s&aacute;ng hoặc đem lại khả năng nh&igrave;n r&otilde; khi ở ngo&agrave;i trời.</p>

<p>Nhờ&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">tấm nền IPS</a>, m&agrave;n h&igrave;nh laptop&nbsp;hiển thị h&igrave;nh ảnh với g&oacute;c nh&igrave;n rộng 178 độ, thường được sử dụng trong c&aacute;c thiết bị cao cấp, rất th&iacute;ch hợp cho thiết kế đồ họa vốn đ&ograve;i hỏi khắt khe về chất lượng hiển thị.</p>

<p><a href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315520-025521.jpg" onclick="return false;"><img alt="HP EliteBook X360 1040 (230P8PA) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315520-025521.jpg" /></a></p>

<p>Sở hữu thiết kế bản lề&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq-man-hinh-gap-360-do" target="_blank">gập xoay 360 độ</a>,&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq-man-hinh-cam-ung" target="_blank">m&agrave;n h&igrave;nh cảm ứng</a>&nbsp;hiện đại c&oacute; thể dễ d&agrave;ng chuyển đổi từ chế độ laptop sang m&aacute;y t&iacute;nh bảng hoặc bất cứ tư thế n&agrave;o bạn muốn. B&ecirc;n cạnh đ&oacute;,&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;c&ograve;n được đi k&egrave;m b&uacute;t cảm ứng cực nhạy, thiết kế, chỉnh sửa ảnh nhanh ch&oacute;ng, cho bạn thỏa sức s&aacute;ng tạo với niềm đam m&ecirc; của m&igrave;nh.</p>

<p><a href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315620-025626.jpg" onclick="return false;"><img alt="HP EliteBook X360 1040 (230P8PA) - Cảm ứng" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315620-025626.jpg" /></a></p>

<h3><strong>Mở kh&oacute;a v&acirc;n tay chỉ với một chạm&nbsp;</strong></h3>

<p>Ngo&agrave;i ra, laptop HP EliteBook c&ograve;n c&oacute; t&iacute;nh năng&nbsp;<a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">bảo mật bằng v&acirc;n tay</a>&nbsp;hiện đại, mở m&aacute;y nhanh chỉ bằng một chạm, gi&uacute;p bạn bảo vệ c&aacute;c dữ liệu an to&agrave;n hơn, kh&ocirc;ng lo bị đ&aacute;nh cắp mật khẩu. Được&nbsp;<strong>trang bị đ&egrave;n nền&nbsp;</strong>tr&ecirc;n b&agrave;n ph&iacute;m, người d&ugrave;ng dễ d&agrave;ng, tiện lợi sử dụng laptop ở bất cứ nơi n&agrave;o ngay cả trong điều kiện thiếu s&aacute;ng.</p>

<p><a href="https://www.thegioididong.com/images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315720-025755.jpg" onclick="return false;"><img alt="HP EliteBook X360 1040 (230P8PA) - Vân tay" src="https://cdn.tgdd.vn/Products/Images/44/232152/hp-elitebook-x360-1040-g7-i7-230p8pa-315720-025755.jpg" /></a></p>

<p>Trải nghiệm &acirc;m thanh chất lượng cao từ c&ocirc;ng nghệ&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-bang-olufsen-va-cong-nghe-am-thanh-cua-955118" target="_blank">Bang &amp; Olufsen audio</a>, c&ocirc;ng nghệ tự động tinh chỉnh &acirc;m thanh v&agrave; lọc tiếng ồn, mang đến trải nghiệm như một rạp h&aacute;t tại nh&agrave; gi&uacute;p bạn thoải m&aacute;i thư gi&atilde;n trong căn ph&ograve;ng của m&igrave;nh.</p>

<p>Với c&aacute;c t&iacute;nh năng tr&ecirc;n, Laptop HP EliteBook X360 1040 (230P8PA) tự tin l&agrave; một trong những chiếc laptop doanh nh&acirc;n văn ph&ograve;ng hiện đại đ&aacute;ng sở hữu nhất d&agrave;nh cho giới doanh nh&acirc;n, văn ph&ograve;ng nhờ&nbsp;<a href="https://www.thegioididong.com/laptop?g=mong-nhe-thoi-trang" target="_blank">thiết kế mỏng nhẹ</a>&nbsp;nhưng kh&ocirc;ng k&eacute;m phần sang trọng, lịch l&atilde;m.</p>
',
        'slug'=>Str::slug('HP EliteBook X360 1040 G7 i7 10710U/16GB/512GB+32GB/Pen/Touch/Win10 Pro (230P8PA)','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>'Asus VivoBook Pro F571GD i5 8300H/8GB/512GB/4GB GTX1050/Win10 (BQ387T)',
        'price'=>18490000,
        'old_price'=>19890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-18-600x600.jpg',
        'rate'=>400,
        'category_id'=>8,
        'brand_id'=>2,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Asus VivoBook Pro F571GD i5 8300H/8GB/512GB/4GB GTX1050/Win10 (BQ387T)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/211877/Slider/vi-vn-f571gd.jpg" /></p>

<p><a href="https://www.thegioididong.com/laptop/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10" target="_blank">Laptop Asus F571GD (BQ387T)</a>&nbsp;l&agrave; chiếc laptop c&oacute;&nbsp;cấu h&igrave;nh mạnh mẽ c&ugrave;ng với m&agrave;n h&igrave;nh lớn. Laptop hướng đến người d&ugrave;ng l&agrave; sinh vi&ecirc;n, nh&acirc;n vi&ecirc;n văn ph&ograve;ng đ&ograve;i hỏi nhu cầu thiết kế đồ họa cao v&agrave; chơi game, giải tr&iacute;.&nbsp;</p>

<h3>Cấu h&igrave;nh mạnh mẽ hướng đến nhu cầu đồ họa kỹ thuật&nbsp;</h3>

<p>Laptop&nbsp;<a href="https://www.thegioididong.com/laptop-asus" target="_blank">Asus</a>&nbsp;F571GD (BQ387T) được trang bị bộ vi xử l&yacute; Intel&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank"><strong>Core i5</strong></a>&nbsp;thế hệ thứ 8 v&agrave;&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=8-gb" target="_blank">RAM 8 GB</a>&nbsp;</strong>c&ugrave;ng hệ điều h&agrave;nh&nbsp;<a href="https://www.thegioididong.com/phan-mem-windows10" target="_blank">Windown 10</a><strong>&nbsp;</strong>mang đến khả năng xử l&yacute; mượt m&agrave; từ c&aacute;c ứng dụng&nbsp;<a href="https://www.thegioididong.com/phan-mem-microsoft-office" target="_blank">Office</a>&nbsp;cho đến c&aacute;c ứng dụng đồ họa như:&nbsp;<strong>Photoshop, AI, CorelDraw</strong>,...&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-27.jpg" onclick="return false;"><img alt="Laptop Asus F571GD được trang bị chip Core i5 thế hệ 8, RAM 8 GB " src="https://cdn.tgdd.vn/Products/Images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-27.jpg" /></a></p>

<p>Ngo&agrave;i ra m&aacute;y t&iacute;nh c&ograve;n được hỗ trợ khe RAM tối đa l&ecirc;n đến&nbsp;<strong>16 GB</strong>&nbsp;gi&uacute;p bạn dễ d&agrave;ng n&acirc;ng cấp th&ecirc;m cho chiếc m&aacute;y của m&igrave;nh.&nbsp;</p>

<p>C&ugrave;ng với đ&oacute;&nbsp;<a href="https://www.thegioididong.com/laptop-asus" target="_blank">m&aacute;y t&iacute;nh x&aacute;ch tay Asus</a>&nbsp;c&ograve;n trang bị th&ecirc;m&nbsp;<a href="https://www.thegioididong.com/laptop?f=card-do-hoa-roi" target="_blank">card đồ họa rời</a>&nbsp;<strong>NVIDIA GeForce GTX 1050</strong>,&nbsp;<strong>4 GB</strong>&nbsp;mang đến khả năng xử l&yacute; video bằng After Effect, Premiere v&agrave; chơi được một số game như&nbsp;<strong>Fortnite</strong>,&nbsp;<strong>Battlefield</strong>&nbsp;ở mức setting cao v&agrave;&nbsp;<strong>Far Cry 5</strong>&nbsp;ở mức setting vừa v&agrave; thấp.</p>

<p><a href="https://www.thegioididong.com/images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-19.jpg" onclick="return false;"><img alt="Laptop Asus F571GD chơi game và đồ họa mượt mà" src="https://cdn.tgdd.vn/Products/Images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-19.jpg" /></a></p>

<h3>Khởi động cực nhanh</h3>

<p>M&aacute;y t&iacute;nh sở hữu ổ cứng&nbsp;<strong><a href="https://www.thegioididong.com/laptop?f=o-cung-ssd" target="_blank">SSD</a>&nbsp;512 GB M.2 PCIe</strong>&nbsp;mang đến khả năng khởi động m&aacute;y từ&nbsp;<strong>10 -15 gi&acirc;y</strong>, khởi động ứng dụng từ&nbsp;<strong>3 - 5 gi&acirc;y.</strong></p>

<p>Dung lượng&nbsp;<strong>512 GB</strong>&nbsp;mang đến khả năng lưu trữ lớn gi&uacute;p bạn dễ d&agrave;ng lưu trữ t&agrave;i liệu, h&igrave;nh ảnh cho c&aacute;c nhu cầu thiết kế đồ họa, kỹ thuật.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-20.jpg" onclick="return false;"><img alt="Laptop Asus F571GD được trang bị ổ cứng SSD 512 GB " src="https://cdn.tgdd.vn/Products/Images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-20.jpg" /></a></p>

<h3>M&agrave;n h&igrave;nh&nbsp;Wide View mang đến g&oacute;c nh&igrave;n rộng&nbsp;</h3>

<p>M&agrave;n h&igrave;nh lớn&nbsp;<a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank"><strong>15.6 inch</strong></a>, độ ph&acirc;n giải Full HD c&ugrave;ng với viền m&agrave;n h&igrave;nh mỏng mang đến chất lượng h&igrave;nh ảnh ch&acirc;n thực v&agrave; r&otilde; r&agrave;ng đến từng chi tiết v&agrave; bạn sẽ cảm thấy thoải m&aacute;i hơn rất nhiều khi l&agrave;m việc l&acirc;u c&ugrave;ng chiếc m&aacute;y c&ograve;n m&agrave;n h&igrave;nh lớn n&agrave;y.&nbsp;</p>

<p>M&agrave;n h&igrave;nh&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-wide-view-la-gi-1014134" target="_blank">Wide View</a>&nbsp;mang đến g&oacute;c nh&igrave;n rộng hơn gi&uacute;p bạn dễ d&agrave;ng thực hiện c&aacute;c thao t&aacute;c thiết kế đồ họa, chỉnh sửa h&igrave;nh ảnh v&agrave; chơi game tr&ecirc;n chiếc m&aacute;y.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-3fix.jpg" onclick="return false;"><img alt="Laptop Asus F571GD sở hữu màn hình 15.6 inch Full HD" src="https://cdn.tgdd.vn/Products/Images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-3fix.jpg" /></a></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Asus VivoBook Pro F571GD i5 8300H/8GB/512GB/4GB GTX1050/Win10 (BQ387T)</h3>

<p><img alt="Thông số kỹ thuật 211877" src="https://cdn.tgdd.vn/Products/Images/44/211877/Kit/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-note.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/dong-chip-intel-core-i5-the-he-thu-8-co-gi-moi-1176776" target="_blank">Intel Core i5 Coffee Lake</a></p>
	</li>
	<li>Loại CPU
	<p>8300H</p>
	</li>
	<li>Tốc độ CPU
	<p>2.30 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.0 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (On board +1 khe)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>2400 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>24 GB</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD 512 GB M.2 PCIe</a>,&nbsp;Hỗ trợ khe cắm HDD SATA</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>15.6 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-wide-view-la-gi-1014134" target="_blank">M&agrave;n h&igrave;nh Wide View</a><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a></p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-geforce-gtx-1050-976580" target="_blank">NVIDIA GeForce GTX 1050, 4GB</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/audio-by-harman-la-gi-958471" target="_blank">Audio by Harman/Kardon</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-b-1180516" target="_blank">2 x USB 2.0</a><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-42-la-gi-895615" target="_blank">Bluetooth 4.2</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
	</li>
	<li>Khe đọc thẻ nhớ
	<p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">SD</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>T&iacute;nh năng kh&aacute;c
	<p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 359 mm - Rộng 248 mm - D&agrave;y 21.9 mm</p>
	</li>
	<li>Trọng lượng
	<p>2.14 kg</p>
	</li>
	<li>Chất liệu
	<p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p><a href="https://www.thegioididong.com/hoi-dap/pin-li-po-la-gi-pin-li-ion-la-gi-pin-3-cell-6-ce-1190023" target="_blank">Li-Ion 3 cell</a></p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>Bảo mật v&acirc;n tay tiện lợi</h2>

<p>Với Asus F571GD, chỉ cần một lần chạm l&agrave; bạn đ&atilde; mở kh&oacute;a được chiếc m&aacute;y của m&igrave;nh, nhanh gọn v&agrave; bảo mật rất nhiều.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-23.jpg" onclick="return false;"><img alt="Laptop Asus F571GD bảo mật vân tay tiện lợi" src="https://cdn.tgdd.vn/Products/Images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-23.jpg" /></a></p>

<p>Laptop sở hữu c&ocirc;ng nghệ &acirc;m thanh Audio By Harman gi&uacute;p cho &acirc;m thanh lớn hơn, mang đến những cảm gi&aacute;c chơi game sống động, ch&acirc;n thực.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-26.jpg" onclick="return false;"><img alt="Laptop Asus F571GD được trang bị công nghệ âm thanh Audio By Harman " src="https://cdn.tgdd.vn/Products/Images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-26.jpg" /></a></p>

<h3>K&iacute;ch thước v&agrave; trọng lượng</h3>

<p>Laptop c&oacute; k&iacute;ch thước lớn với trọng lượng 2.14 kg v&agrave; độ d&agrave;y 21.9 mm. Tuy nhi&ecirc;n n&oacute;&nbsp;kh&ocirc;ng qu&aacute; cồng kềnh để ch&uacute;ng ta mang theo chiếc m&aacute;y b&ecirc;n cạnh khi đi học hay đi l&agrave;m.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-24.jpg" onclick="return false;"><img alt="Laptop Asus F571GD có vẻ ngoài sang trọng" src="https://cdn.tgdd.vn/Products/Images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-24.jpg" /></a></p>

<p>B&ecirc;n cạnh việc sở hữu cấu h&igrave;nh mạnh mẽ, laptop Asus F571GD c&ograve;n sở hữu vẻ ngo&agrave;i sang trọng v&agrave; c&oacute; mức gi&aacute; vừa phải. Đ&acirc;y l&agrave; một lựa chọn đ&aacute;ng c&acirc;n nhắc d&agrave;nh cho c&aacute;c bạn sinh vi&ecirc;n v&agrave; nh&acirc;n vi&ecirc;n văn ph&ograve;ng.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-22.jpg" onclick="return false;"><img alt="Laptop Asus F571GD có vẻ ngoài sang trọng" src="https://cdn.tgdd.vn/Products/Images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-22.jpg" /></a></p>

<h3>Thời lượng pin l&ecirc;n đến 10 tiếng&nbsp;</h3>

<p>Laptop trang bị pin Li-Ion 3 cell cho thời gian sử dụng thực tế l&ecirc;n đến 10 giờ, thoải m&aacute;i l&agrave;m việc, học tập cả ng&agrave;y m&agrave; kh&ocirc;ng cần cắm sạc. Bạn cũng c&oacute; thể đem laptop theo b&ecirc;n m&igrave;nh m&agrave; kh&ocirc;ng qu&aacute; bận t&acirc;m đến việc hết pin.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-3fix-1.jpg" onclick="return false;"><img alt="Laptop ASUS F571GD có pin sử dụng được khoảng 10 tiếng" src="https://cdn.tgdd.vn/Products/Images/44/211877/asus-f571gd-i5-8300h-8gb-512gb-4gb-gtx1050-win10-3fix-1.jpg" /></a></p>
',
        'slug'=>Str::slug('Asus VivoBook Pro F571GD i5 8300H/8GB/512GB/4GB GTX1050/Win10 (BQ387T)','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>'Lenovo IdeaPad L340 15IRH i7 9750H/8GB/1TB/3GB GTX1050/Win10 (81LK00FBVN)',
        'price'=>19490000,
        'old_price'=>20890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/210511/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx7-210511-2-600x600.jpg',
        'rate'=>400,
        'category_id'=>8,
        'brand_id'=>6,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Lenovo IdeaPad L340 15IRH i7 9750H/8GB/1TB/3GB GTX1050/Win10 (81LK00FBVN)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/210511/Slider/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx-(1).jpg" /></p>

<p><a href="https://www.thegioididong.com/laptop/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx" target="_blank">Laptop Lenovo IdeaPad L340 15IRH i7 (81LK00FBVN)</a>&nbsp;l&agrave; chiếc&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;vừa được ra mắt thu h&uacute;t sự ch&uacute; &yacute; của nhiều game thủ bởi cấu h&igrave;nh mạnh, thiết kế đẹp mắt v&agrave; c&oacute; mức gi&aacute; phải chăng.&nbsp;</p>

<h3>Cấu h&igrave;nh mạnh, chiến game khủng</h3>

<p><a href="https://www.thegioididong.com/laptop-lenovo" target="_blank">Laptop Lenovo&nbsp;</a>IdeaPad L340 15IRH i7 (81LK00FBVN) sở hữu CPU&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank">Core i7</a>&nbsp;thế hệ thứ 9,&nbsp;<a href="https://www.thegioididong.com/laptop?g=8-gb" target="_blank">RAM 8 GB</a>&nbsp;đa nhiệm mượt m&agrave; đem lại hiệu năng mạnh mẽ,&nbsp;<strong>chiến c&aacute;c game nặng như: Fornite, Far Cry 5, PUBG,... với mức setting trung b&igrave;nh đến cao.</strong></p>

<p><a href="https://www.thegioididong.com/images/44/210511/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx1.jpg" onclick="return false;"><img alt="Cấu hình Lenovo IdeaPad L340 15IRH " src="https://cdn.tgdd.vn/Products/Images/44/210511/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx1.jpg" /></a></p>

<h3>Mọi chuyển động được t&aacute;i hiện mượt m&agrave;</h3>

<p>Laptop trang bị&nbsp;<a href="https://www.thegioididong.com/laptop?f=card-do-hoa-roi" target="_blank">card đồ họa</a><strong>&nbsp;</strong>NVIDIA GeForce GTX 1050 3GB&nbsp;cho khả năng t&aacute;i hiện h&igrave;nh ảnh mượt m&agrave;, kh&ocirc;ng giật lag. B&ecirc;n cạnh chơi game khủng, card đồ họa n&agrave;y c&ograve;n gi&uacute;p bạn&nbsp;<strong>thiết kế đồ họa chuy&ecirc;n nghiệp với Sketchup, AutoCAD hay Photoshop 3D...</strong></p>

<p><a href="https://www.thegioididong.com/images/44/210511/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx2.jpg" onclick="return false;"><img alt="Card màn hình Lenovo IdeaPad L340 15IRH " src="https://cdn.tgdd.vn/Products/Images/44/210511/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx2.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Lenovo IdeaPad L340 15IRH i7 9750H/8GB/1TB/3GB GTX1050/Win10 (81LK00FBVN)</h3>

<p><img alt="Thông số kỹ thuật 210511" src="https://cdn.tgdd.vn/Products/Images/44/210511/Kit/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx-mo-ta1.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-dong-chip-intel-core-i7-the-he-thu-8-1176718" target="_blank">Intel Core i7 Coffee Lake</a></p>
	</li>
	<li>Loại CPU
	<p>9750H</p>
	</li>
	<li>Tốc độ CPU
	<p>2.60 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.5 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (1 khe)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>2400 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>16 GB</p>
	</li>
	<li>Ổ cứng
	<p>HDD: 1 TB SATA3&nbsp;,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cac-chuan-toc-do-cua-o-cung-ssd-tren-1115453" target="_blank">Hỗ trợ khe cắm SSD M.2 PCIe</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>15.6 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-man-hinh-tn-la-gi-1172816" target="_blank">Tấm nền TN</a><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-led-backlit-led-backlight-1183188" target="_blank">LED Backlit</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti-Glare</a></p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-geforce-gtx-1050-976580" target="_blank">NVIDIA GeForce GTX 1050, 3GB</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-realtek-high-defi-1181909" target="_blank">Realtek High Definition Audio</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 363 mm - Rộng 254.6 mm - D&agrave;y 23.9 mm</p>
	</li>
	<li>Trọng lượng
	<p>2.14 kg</p>
	</li>
	<li>Chất liệu
	<p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p><a href="https://www.thegioididong.com/hoi-dap/pin-li-po-la-gi-pin-li-ion-la-gi-pin-3-cell-6-ce-1190023" target="_blank">Li-Ion 3 cell</a></p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>Thiết kế gọn g&agrave;ng, c&aacute;c dải m&agrave;u xanh nổi bật</h2>

<p>Được l&agrave;m từ chất liệu nhựa, d&agrave;y&nbsp;<strong>23</strong><strong>.9 mm&nbsp;</strong>v&agrave; nặng&nbsp;<strong>2.14 kg</strong>, laptop&nbsp;<a href="https://www.thegioididong.com/laptop-lenovo-ideapad" target="_blank">Lenovo IdeaPad</a>&nbsp;L340 15IRH sở hữu vẻ ngo&agrave;i tối giản v&agrave; hơi &quot;hiền&quot; so với hầu hết c&aacute;c laptop gaming tr&ecirc;n thị trường. Điểm nhấn tr&ecirc;n thiết kế nằm ở c&aacute;c dải m&agrave;u xanh nổi bật tr&ecirc;n th&acirc;n m&aacute;y v&agrave; b&agrave;n ph&iacute;m.</p>

<p><a href="https://www.thegioididong.com/images/44/210511/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx6.jpg" onclick="return false;"><img alt="Thiết kế Lenovo IdeaPad L340 15IRH " src="https://cdn.tgdd.vn/Products/Images/44/210511/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx6.jpg" /></a></p>

<h3>M&agrave;n h&igrave;nh 15.6 inch Full HD - giải tr&iacute; cực đ&atilde;</h3>

<p>M&agrave;n h&igrave;nh<a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">&nbsp;laptop&nbsp;</a><strong><a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a>&nbsp;Full HD</strong>&nbsp;với c&ocirc;ng nghệ&nbsp;<strong>Anti-Glare</strong>&nbsp;sẽ đem đến cho bạn kh&ocirc;ng gian giải tr&iacute; rộng r&atilde;i với h&igrave;nh ảnh c&oacute; độ n&eacute;t cao, m&agrave;u sắc ch&acirc;n thật.</p>

<p><a href="https://www.thegioididong.com/images/44/210511/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx5.jpg" onclick="return false;"><img alt="Màn hình Lenovo IdeaPad L340 15IRH " src="https://cdn.tgdd.vn/Products/Images/44/210511/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx5.jpg" /></a></p>

<h3>Dung lượng lưu trữ rộng&nbsp;</h3>

<p>Ngo&agrave;i ra, laptop c&ograve;n trang bị<strong>&nbsp;ổ cứng HDD 1 TB</strong>&nbsp;gi&uacute;p người d&ugrave;ng thoải m&aacute;i lưu trữ t&agrave;i liệu, c&aacute;c bộ phim Full HD hay h&agrave;ng trăm tựa game. M&aacute;y cũng hỗ trợ khe cắm SSD M.2 PCIe cho người d&ugrave;ng thuận tiện n&acirc;ng cấp ổ cứng.</p>

<p><a href="https://www.thegioididong.com/images/44/210511/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx3.jpg" onclick="return false;"><img alt="Ổ cứng Lenovo IdeaPad L340 15IRH " src="https://cdn.tgdd.vn/Products/Images/44/210511/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx3.jpg" /></a></p>

<h3>B&agrave;n ph&iacute;m đ&egrave;n nền xanh độc đ&aacute;o</h3>

<p>G&otilde; ph&iacute;m nhanh v&agrave; chuẩn x&aacute;c hơn với b&agrave;n ph&iacute;m to, r&otilde;, c&oacute; h&agrave;ng ph&iacute;m số ri&ecirc;ng biệt. B&ecirc;n cạnh đ&oacute;, thiết kế đ&egrave;n b&agrave;n ph&iacute;m nền xanh độc đ&aacute;o v&agrave; ấn tượng hơn cho c&aacute;c game thủ.</p>

<p><a href="https://www.thegioididong.com/images/44/210511/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx7.jpg" onclick="return false;"><img alt="Đèn nền Lenovo IdeaPad L340 15IRH " src="https://cdn.tgdd.vn/Products/Images/44/210511/lenovo-ideapad-l340-15irh-i7-9750h-8gb-1tb-3gb-gtx7.jpg" /></a></p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Lenovo IdeaPad L340 15IRH i7 9750H/8GB/1TB/3GB GTX1050/Win10 (81LK00FBVN)','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>' MSI GL65 Leopard 10SCXK i7 10750H/8GB/512GB/4GB GTX1650/144Hz/Balo/Win10 (093VN)',
        'price'=>23490000,
        'old_price'=>24890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-16-600x600.jpg',
        'rate'=>400,
        'category_id'=>8,
        'brand_id'=>9,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của MSI GL65 Leopard 10SCXK i7 10750H/8GB/512GB/4GB GTX1650/144Hz/Balo/Win10 (093VN)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/235499/Slider/vi-vn-msi-gl65-leopard-10scxk-i7-093vn-1.jpg" /></p>

<p>Chiếc&nbsp;<a href="https://www.thegioididong.com/laptop/msi-gl65-leopard-10scxk-i7-093vn" target="_blank">laptop MSI GL65 Leopard 10SCXK i7(093VN)&nbsp;</a>chắc chắn sẽ l&agrave; sự lựa chọn th&iacute;ch hợp d&agrave;nh cho những game thủ với hiệu năng mượt m&agrave; với CPU Intel Core i7, NVIDIA GeForce GTX 1650 4GB.</p>

<h3>Thiết kế độc đ&aacute;o, mang đậm phong c&aacute;ch esport</h3>

<p>Ngay từ vẻ ngo&agrave;i đ&atilde; n&oacute;i l&ecirc;n sự mạnh mẽ của chiếc&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;n&agrave;y với gam m&agrave;u đen nh&aacute;m c&aacute; t&iacute;nh, những đường cắt độc đ&aacute;o v&agrave; logo m&agrave;u đỏ nổi bật nằm tr&ecirc;n mặt lưng kim loại rắn chắc. Bạn ho&agrave;n to&agrave;n c&oacute; thể mở m&aacute;y ra bằng một tay bởi bản lề linh hoạt, cho việc đ&oacute;ng mở m&aacute;y v&ocirc; c&ugrave;ng nhẹ nh&agrave;ng.</p>

<p>M&aacute;y c&oacute; khối lượng&nbsp;<strong>2.3 kg</strong>&nbsp;v&agrave; d&agrave;y<strong>&nbsp;21.7 mm</strong>, tuy kh&ocirc;ng mỏng nhẹ như những chiếc laptop doanh nh&acirc;n nhưng vẫn thuộc h&agrave;ng thiết kế gọn nhẹ trong ph&acirc;n kh&uacute;c gaming. Chơi game đa số l&agrave; c&aacute;c nam hoặc bạn nữ c&oacute; c&aacute; t&iacute;nh mạnh mẽ n&ecirc;n việc di chuyển chiếc laptop n&agrave;y cũng kh&ocirc;ng vướng v&iacute;u, bạn chỉ cần để v&agrave;o balo v&agrave; di chuyển.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-2-2.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 10750H (093VN) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-2-2.jpg" /></a></p>

<p>Với c&aacute;c game thủ th&igrave; b&agrave;n ph&iacute;m l&agrave; một chi tiết rất quan trọng khi lựa chọn, chiếc laptop n&agrave;y sử dụng b&agrave;n ph&iacute;m<strong>&nbsp;Per-key RGB&nbsp;</strong>cho tốc độ phản hồi nhanh, h&agrave;nh tr&igrave;nh tối ưu cho việc chơi game kết hợp c&ugrave;ng&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">hệ thống đ&egrave;n nền chuyển m&agrave;u</a><strong>&nbsp;</strong>gi&uacute;p bạn nhanh ch&oacute;ng t&igrave;m được ph&iacute;m cần nhấn nhanh ch&oacute;ng dựa theo m&agrave;u sắc. Ngo&agrave;i ra, đ&egrave;n nền n&agrave;y c&oacute; thể thay đổi theo nhạc nền trong game kh&aacute; l&agrave; th&uacute; vị.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-8-2.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 10750H (093VN) - Đèn Led đổi màu RGB" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-8-2.jpg" /></a></p>

<p>Dọc th&acirc;n m&aacute;y được tranh bị c&aacute;c cổng như: USB 3.2 kết nối với chuột v&agrave; truyền dữ liệu, HDMI chia sẻ m&agrave;n h&igrave;nh l&ecirc;n m&aacute;y chiếu hay tivi trong c&aacute;c buổi thi đấu game, Mini DisplayPort đa dụng c&oacute; thể truyền dữ liệu v&agrave; kết nối mạng, LAN (RJ45) kết nối với mạng c&oacute; d&acirc;y, USB Type-C truyền tải h&igrave;nh ảnh chất lượng cao.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-10-2.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 10750H (093VN) - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-10-2.jpg" /></a></p>

<p>Ngo&agrave;i kết nối c&oacute; d&acirc;y&nbsp;<a href="https://https//www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;c&ograve;n hỗ trợ 2 phương thức kết nối kh&ocirc;ng d&acirc;y l&agrave;&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 - 802.11ax</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-bluetooth-51-tren-laptop-la-gi-1273789" target="_blank">Bluetooth 5.1</a>&nbsp;cho tốc độ truyền tải dữ liệu nhanh hơn với tốc độ l&ecirc;n đến hơn 10.000 Mbps v&agrave; phạm vị phủ s&oacute;ng rộng.</p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết MSI GL65 Leopard 10SCXK i7 10750H/8GB/512GB/4GB GTX1650/144Hz/Balo/Win10 (093VN)</h3>

<p><img alt="Thông số kỹ thuật 235499" src="https://cdn.tgdd.vn/Products/Images/44/235499/Kit/msi-gl65-leopard-10scxk-i7-093vn-note.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i7 Comet Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-i7-10750h-uu-nhuoc-diem-la-1292162" target="_blank">10750H</a></p>
	</li>
	<li>Tốc độ CPU
	<p>2.60 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 5.0 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>3200 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>64 GB</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;Hỗ trợ khe cắm HDD SATA</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>15.6 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p>Full HD (1920 x 1080), 144Hz</p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-gtx-1650-co-manh-kh-1201415" target="_blank">NVIDIA GeForce GTX1650 4GB</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-realtek-high-defi-1181909" target="_blank">Realtek High Definition Audio</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">3 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/mini-displayport-la-gi-966831" target="_blank">Mini DisplayPort</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-bluetooth-51-tren-laptop-la-gi-1273789" target="_blank">Bluetooth 5.1</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a></p>
	</li>
	<li>Webcam
	<p>Được t&iacute;ch hợp</p>
	</li>
	<li>T&iacute;nh năng kh&aacute;c
	<p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">Đ&egrave;n b&agrave;n ph&iacute;m chuyển m&agrave;u RGB</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 359 mm - Rộng 254 mm - D&agrave;y 21.7 mm</p>
	</li>
	<li>Trọng lượng
	<p>2.3 kg</p>
	</li>
	<li>Chất liệu
	<p>Nắp lưng v&agrave; chiếu nghỉ tay bằng kim loại</p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p>6-cell Li-ion, 51 Wh</p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2020</p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>C&acirc;n mọi tựa game với cấu h&igrave;nh mạnh mẽ</h2>

<p>Chiếc<a href="https://www.thegioididong.com/laptop-msi?g=laptop-gaming" target="_blank">&nbsp;laptop gaming MSI&nbsp;</a>n&agrave;y được trang bị bộ xử l&yacute;&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Intel Core i7</a>&nbsp;10750H c&oacute; thể chiến tốt c&aacute;c tựa game khủng như: MORTAL KOMBAT 11, FAR CRY: NEW DAWN, GEARS 5,... với&nbsp;<strong>6 l&otilde;i&nbsp;</strong>v&agrave;<strong>&nbsp;12</strong>&nbsp;<strong>luồng</strong>, tốc độ xung nhịp tối đa l&ecirc;n tới 5.00 GHz.&nbsp; Hiệu năng của i7 10750H được n&acirc;ng l&ecirc;n&nbsp;<strong>15%</strong>&nbsp;so với thế hệ trước l&agrave; i7-9750H đem đến cho một trải nghiệm chơi game &ldquo;đ&atilde;&rdquo; hơn.</p>

<p><a href="https://www.thegioididong.com/laptop-cpu-intel-gen-10" target="_blank">CPU thế hệ thứ 10</a>&nbsp;kết hợp c&ugrave;ng&nbsp;<a href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank">card đồ họa rời</a>&nbsp;<a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-gtx-1650-co-manh-kh-1201415" target="_blank">NVIDIA GeForce GTX 1650 4GB</a>&nbsp;cho h&igrave;nh ảnh trong game cũng được thể hiện sống động, đổ b&oacute;ng, phản chiếu &aacute;nh s&aacute;ng cực ch&acirc;n thật. B&ecirc;n cạnh chơi game th&igrave; m&aacute;y cũng chạy tốt c&aacute;c phần mềm đồ họa chuy&ecirc;n nghiệp như: Sketchup, 3ds Max, Autocad,... giờ đ&acirc;y chiếc<a href="https://www.thegioididong.com/laptop-msi" target="_blank">&nbsp;laptop MSI</a>&nbsp;n&agrave;y kh&ocirc;ng chỉ chơi game cực mượt m&agrave; c&ograve;n c&oacute; khả năng đồ họa cao, đ&aacute;p ứng tốt nhu cầu của một gamer l&agrave;m trong lĩnh vực s&aacute;ng tạo.</p>

<p><a href="https://www.thegioididong.com/laptop-8-gb" target="_blank"><strong>RAM 8 GB</strong></a>&nbsp;DDR4 (2 khe) cho khả năng xử l&yacute; đa nhiệm mạnh mẽ, đ&aacute;p ứng được hầu hết c&aacute;c nhu cầu giải tr&iacute; l&agrave;m việc của bạn, d&ugrave; bạn mở nhiều ứng dụng c&ugrave;ng l&uacute;c m&agrave; kh&ocirc;ng bị giật hay đứng m&aacute;y với tốc độ Bus RAM<strong>&nbsp;3200 MHz</strong>. B&ecirc;n cạnh đ&oacute;, m&aacute;y cũng hỗ trợ n&acirc;ng cấp RAM tối đa l&ecirc;n đến&nbsp;<strong>64 GB</strong>, bạn c&oacute; thể n&acirc;ng cấp mức cho ph&ugrave; hợp với nhu cầu sử dụng của m&igrave;nh.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-4-2.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 10750H (093VN) - Cấu hình" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-4-2.jpg" /></a></p>

<p>M&aacute;y sử dụng&nbsp;<a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank"><strong>Ổ cứng SSD</strong></a>&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank"><strong>512 GB</strong></a>&nbsp;M.2 PCIe cho khả năng phản hồi nhanh ch&oacute;ng, khởi động m&aacute;y hay v&agrave;o ứng dụng chỉ mất v&agrave;i gi&acirc;y. B&ecirc;n cạnh ổ cứng SSD m&aacute;y c&ograve;n hỗ trợ khe cắm HDD SATA gi&uacute;p bạn dễ d&agrave;ng mở rộng kh&ocirc;ng gian lưu trữ.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-5-2.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 10750H (093VN) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-5-2.jpg" /></a></p>

<p>Giải ph&aacute;p tản nhiệt&nbsp;<strong>Cooler Boost 5</strong>&nbsp;chuy&ecirc;n dụng cho cả CPU v&agrave; GPU gi&uacute;p giảm thiệu hơi n&oacute;ng nhanh ch&oacute;ng, tối ưu luồng gi&oacute; để đảm bảo mang lại hiệu năng game cao trong một th&acirc;n m&aacute;y gọn g&agrave;ng với&nbsp;<strong>6 ống dẫn nhiệt</strong>,<strong>&nbsp;2 quạt&nbsp;</strong>c&ugrave;ng khe tản nhiệt rộng tối ưu cho luồng kh&iacute; lưu th&ocirc;ng.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-7-2.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 10750H (093VN) - Tản nhiệt" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-7-2.jpg" /></a></p>

<h3>M&agrave;n h&igrave;nh sắc n&eacute;t, &acirc;m thanh sống động l&yacute; tưởng cho việc chơi game</h3>

<p>M&agrave;n h&igrave;nh&nbsp;<strong><a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a></strong>&nbsp;gi&uacute;p kh&ocirc;ng gian hiển thị được mở rộng, hiệu ứng h&igrave;nh ảnh sống động v&agrave; m&agrave;u sắc được t&aacute;i tạo ch&iacute;nh x&aacute;c với độ ph&acirc;n giải Full HD (1920 x 1080). Tần số qu&eacute;t 144 Hz gi&uacute;p bạn nắm bắt kịp thời từng chuyển động trong game tăng khả năng chiến thắng với tốc độ chuyển đổi giữa c&aacute;c khung h&igrave;nh cực nhanh v&agrave; c&oacute; độ chi tiết cao.</p>

<p>Với&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">tấm nền IPS</a>, g&oacute;c nh&igrave;n của m&agrave;n h&igrave;nh sẽ lớn hơn l&ecirc;n tới&nbsp;<strong>178 độ</strong>&nbsp;nhưng vẫn đảm bảo m&agrave;u sắc v&agrave; độ chi tiết của h&igrave;nh ảnh vẫn ch&iacute;nh x&aacute;c như khi nh&igrave;n từ ch&iacute;nh x&aacute;c.<strong>&nbsp;</strong>C&ocirc;ng nghệ&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">chống ch&oacute;i Anti Glare</a>&nbsp;gi&uacute;p bạn dễ d&agrave;ng sử dụng laptop ở những nơi c&oacute; độ s&aacute;ng cao với khả năng kh&ocirc;ng đổ b&oacute;ng, ch&oacute;i s&aacute;ng như những m&agrave;n h&igrave;nh mặt gương.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-6-2.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 10750H (093VN) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-6-2.jpg" /></a></p>

<p>Tăng cường chất lượng &acirc;m thanh trong game, t&ugrave;y chỉnh &acirc;m thanh theo nhu cầu nghe nhạc, xem phim v&agrave; họp trực tuyến của bạn với c&ocirc;ng nghệ &acirc;m thanh&nbsp;<strong>Realtek High Definition Audio</strong>.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-09.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 (093VN) - Âm thanh" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-09.jpg" /></a></p>

<p>Trải nghiệm chơi game cực đỉnh với laptop MSI GL65 Leopard 10SCXK i7(093VN) c&oacute; cấu h&igrave;nh mạnh mẽ, tốc độ xử l&yacute; nhanh, m&agrave;n h&igrave;nh hỗ trợ chơi game tốt.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug(' MSI GL65 Leopard 10SCXK i7 10750H/8GB/512GB/4GB GTX1650/144Hz/Balo/Win10 (093VN)','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>'HP Pavilion 16 a0109TX i7 10870H/8GB/32GB+512GB/4GB GTX1650Ti/Win10 (31J26PA)',
        'price'=>30490000,
        'old_price'=>31890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/235439/hp-pavilion-gaming-16-a0109tx-i7-31j26pa-600x600.jpg',
        'rate'=>400,
        'category_id'=>8,
        'brand_id'=>1,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>Được trang bị cấu h&igrave;nh tuyệt vời Intel Core i7 thế hệ thứ 10 v&agrave; card đồ họa rời NVIDIA GeForce,&nbsp;<a href="https://thegioididong.com/sp-235439" target="_blank">HP Pavilion Gaming 16 a0109TX i7 (31J26PA)</a>&nbsp;l&agrave; chiếc laptop&nbsp;c&oacute; thể đ&aacute;p ứng ho&agrave;n hảo mọi nhu cầu của bạn từ c&ocirc;ng việc cho đến chơi game.</h3>

<h3>Cấu h&igrave;nh mạnh mẽ, vượt trội</h3>

<p>Laptop gaming HP thỏa sức c&acirc;n mọi tựa game với sức mạnh phi thường của bộ xử l&yacute;&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Intel Core i7</a>&nbsp;-&nbsp;<strong>10870H&nbsp;</strong>thuộc d&ograve;ng&nbsp;<a href="https://www.thegioididong.com/laptop-cpu-intel-gen-10" target="_blank">CPU thế hệ thứ 10</a>. Bộ xử l&yacute; n&agrave;y sở hữu&nbsp;xung nhịp cơ bản l&agrave;&nbsp;<strong>2.2 GHz</strong>&nbsp;v&agrave; tối đa l&ecirc;n tới&nbsp;<strong>5.0 GHz&nbsp;</strong>gi&uacute;p&nbsp;tăng lượng khung h&igrave;nh tr&ecirc;n gi&acirc;y, tăng hiệu năng to&agrave;n diện v&agrave; tăng tốc độ xuất lưu định dạng file video độ ph&acirc;n giải 4K&nbsp;nhưng vẫn tiết kiệm điện đ&aacute;ng kể.</p>

<p><strong><a href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank">Card đồ họa rời</a></strong>&nbsp;<strong>NVIDIA GeForce GTX 1650Ti 4GB</strong>&nbsp;cho khả năng xử l&yacute; đồ họa khi chơi c&aacute;c tựa game v&ocirc; c&ugrave;ng mạnh mẽ, y&ecirc;u cầu đồ họa cao như CS:GO, Far Cry 5, Genshin Impact,... đối với mức setting từ cao đến ultra. B&ecirc;n cạnh đ&oacute;, card c&ograve;n gi&uacute;p laptop render đồ hoạ với độ ph&acirc;n giải cao hơn,&nbsp;tăng hiệu suất hoạt động cũng như đồ hoạ được render đẹp hơn, ch&acirc;n thật hơn.</p>

<p>Kết hợp với&nbsp;<a href="https://www.thegioididong.com/laptop-8-gb" target="_blank"><strong>RAM 8 GB</strong></a>&nbsp;sử dụng đa nhiệm mượt m&agrave; với tốc độ Bus RAM l&ecirc;n đến&nbsp;<strong>3200 MHz</strong>, người d&ugrave;ng c&oacute; thể xử l&yacute; c&ugrave;ng l&uacute;c nhiều việc kh&aacute;c nhau m&agrave; kh&ocirc;ng lo lắng việc đơ m&aacute;y. Tuyệt vời hơn khi laptop c&ograve;n hỗ trợ khe RAM trống để người d&ugrave;ng n&acirc;ng cấp th&ecirc;m RAM tối đa đến 32 GB nếu c&oacute; nhu cầu.</p>

<p><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank"><strong>Ổ cứng SSD</strong></a>&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank"><strong>512 GB</strong></a><strong>&nbsp;M.2 PCIe&nbsp;</strong>cho tốc độ cao gi&uacute;p&nbsp;m&aacute;y t&iacute;nh gaming của bạn vận h&agrave;nh trơn tru, khởi động nhanh ch&oacute;ng. Ngo&agrave;i ra n&oacute; c&ograve;n đem lại&nbsp;cho bạn kh&ocirc;ng gian số rộng lớn thỏa sức lưu phim ảnh hay c&aacute;c tựa game y&ecirc;u th&iacute;ch, c&aacute;c file t&agrave;i liệu nặng m&agrave; kh&ocirc;ng lo đầy bộ nhớ.&nbsp;</p>

<p>Hơn nữa, laptop c&ograve;n trang bị th&ecirc;m ổ cứng&nbsp;<strong>Intel Optane 32 GB&nbsp;</strong>gi&uacute;p tăng khả năng truy cập, xuất dữ liệu trong&nbsp;<strong>ổ cứng HDD</strong>. Ch&iacute;nh v&igrave; vậy, laptop HP c&ograve;n hỗ trợ th&ecirc;m&nbsp;khe cắm HDD SATA gi&uacute;p bạn c&oacute; kh&ocirc;ng gian lưu trữ lớn hơn nữa.</p>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết HP Pavilion Gaming 16 a0109TX i7 10870H/8GB/32GB+512GB/4GB GTX1650Ti/Win10 (31J26PA)</h3>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i7 Comet Lake</a></p>
	</li>
	<li>Loại CPU
	<p>10870H</p>
	</li>
	<li>Tốc độ CPU
	<p>2.20 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 5.0 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>3200 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>32 GB</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/bo-nho-intel-optane-la-gi-1213036" target="_blank">Intel Optane 32GB (H10)</a><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>Hỗ trợ khe cắm HDD SATA</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>16.1 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-man-hinh-wled-backlit-tren-laptop-la-gi-1263016" target="_blank">Wled-backlit</a><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-tich-hop-la-gi-950047" target="_blank">Card đồ họa t&iacute;ch hợp</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-card-do-hoa-nvidia-geforce-gtx-1650ti-uu-nhuoc-1284193" target="_blank">NVIDIA GeForce GTX 1650Ti 4GB</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-am-thanh-bang-olufsen-tren-laptop-955118" target="_blank">Bang &amp; Olufsen audio</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a></p>
	</li>
	<li>Khe đọc thẻ nhớ
	<p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">SD</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 370 mm - Rộng 262.5 mm - D&agrave;y 23.5 mm</p>
	</li>
	<li>Trọng lượng
	<p>2.21 kg</p>
	</li>
	<li>Chất liệu
	<p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p>3-cell Li-ion, 52.5 Wh</p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2020</p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h3>Được trang bị cấu h&igrave;nh tuyệt vời Intel Core i7 thế hệ thứ 10 v&agrave; card đồ họa rời NVIDIA GeForce,&nbsp;<a href="https://thegioididong.com/sp-235439" target="_blank">HP Pavilion Gaming 16 a0109TX i7 (31J26PA)</a>&nbsp;l&agrave; chiếc laptop&nbsp;c&oacute; thể đ&aacute;p ứng ho&agrave;n hảo mọi nhu cầu của bạn từ c&ocirc;ng việc cho đến chơi game.</h3>

<h3>Cấu h&igrave;nh mạnh mẽ, vượt trội</h3>

<p>Laptop gaming HP thỏa sức c&acirc;n mọi tựa game với sức mạnh phi thường của bộ xử l&yacute;&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Intel Core i7</a>&nbsp;-&nbsp;<strong>10870H&nbsp;</strong>thuộc d&ograve;ng&nbsp;<a href="https://www.thegioididong.com/laptop-cpu-intel-gen-10" target="_blank">CPU thế hệ thứ 10</a>. Bộ xử l&yacute; n&agrave;y sở hữu&nbsp;xung nhịp cơ bản l&agrave;&nbsp;<strong>2.2 GHz</strong>&nbsp;v&agrave; tối đa l&ecirc;n tới&nbsp;<strong>5.0 GHz&nbsp;</strong>gi&uacute;p&nbsp;tăng lượng khung h&igrave;nh tr&ecirc;n gi&acirc;y, tăng hiệu năng to&agrave;n diện v&agrave; tăng tốc độ xuất lưu định dạng file video độ ph&acirc;n giải 4K&nbsp;nhưng vẫn tiết kiệm điện đ&aacute;ng kể.</p>

<p><strong><a href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank">Card đồ họa rời</a></strong>&nbsp;<strong>NVIDIA GeForce GTX 1650Ti 4GB</strong>&nbsp;cho khả năng xử l&yacute; đồ họa khi chơi c&aacute;c tựa game v&ocirc; c&ugrave;ng mạnh mẽ, y&ecirc;u cầu đồ họa cao như CS:GO, Far Cry 5, Genshin Impact,... đối với mức setting từ cao đến ultra. B&ecirc;n cạnh đ&oacute;, card c&ograve;n gi&uacute;p laptop render đồ hoạ với độ ph&acirc;n giải cao hơn,&nbsp;tăng hiệu suất hoạt động cũng như đồ hoạ được render đẹp hơn, ch&acirc;n thật hơn.</p>

<p>Kết hợp với&nbsp;<a href="https://www.thegioididong.com/laptop-8-gb" target="_blank"><strong>RAM 8 GB</strong></a>&nbsp;sử dụng đa nhiệm mượt m&agrave; với tốc độ Bus RAM l&ecirc;n đến&nbsp;<strong>3200 MHz</strong>, người d&ugrave;ng c&oacute; thể xử l&yacute; c&ugrave;ng l&uacute;c nhiều việc kh&aacute;c nhau m&agrave; kh&ocirc;ng lo lắng việc đơ m&aacute;y. Tuyệt vời hơn khi laptop c&ograve;n hỗ trợ khe RAM trống để người d&ugrave;ng n&acirc;ng cấp th&ecirc;m RAM tối đa đến 32 GB nếu c&oacute; nhu cầu.</p>

<p><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank"><strong>Ổ cứng SSD</strong></a>&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank"><strong>512 GB</strong></a><strong>&nbsp;M.2 PCIe&nbsp;</strong>cho tốc độ cao gi&uacute;p&nbsp;m&aacute;y t&iacute;nh gaming của bạn vận h&agrave;nh trơn tru, khởi động nhanh ch&oacute;ng. Ngo&agrave;i ra n&oacute; c&ograve;n đem lại&nbsp;cho bạn kh&ocirc;ng gian số rộng lớn thỏa sức lưu phim ảnh hay c&aacute;c tựa game y&ecirc;u th&iacute;ch, c&aacute;c file t&agrave;i liệu nặng m&agrave; kh&ocirc;ng lo đầy bộ nhớ.&nbsp;</p>

<p>Hơn nữa, laptop c&ograve;n trang bị th&ecirc;m ổ cứng&nbsp;<strong>Intel Optane 32 GB&nbsp;</strong>gi&uacute;p tăng khả năng truy cập, xuất dữ liệu trong&nbsp;<strong>ổ cứng HDD</strong>. Ch&iacute;nh v&igrave; vậy, laptop HP c&ograve;n hỗ trợ th&ecirc;m&nbsp;khe cắm HDD SATA gi&uacute;p bạn c&oacute; kh&ocirc;ng gian lưu trữ lớn hơn nữa.</p>

<h3>Thiết kế sang trọng nhưng kh&ocirc;ng k&eacute;m phần mạnh mẽ</h3>

<p>Nhờ chế t&aacute;c từ vỏ nhựa,&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq-pavilion" target="_blank">HP Pavilion</a>&nbsp;cho bạn cảm gi&aacute;c gọn nhẹ với trọng lượng chỉ&nbsp;<strong>2.21 kg&nbsp;</strong>v&agrave; độ d&agrave;y&nbsp;<strong>23.5 mm</strong>, để bạn thỏa sức dịch chuyển, tận hưởng niềm đam m&ecirc; game mọi l&uacute;c mọi nơi.</p>

<p><a href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">Laptop HP</a>&nbsp;c&ograve;n hỗ trợ cả kết nối&nbsp;<strong>HDMI,&nbsp;USB 3.1,&nbsp;LAN (RJ45)</strong>&nbsp;v&agrave; cả<strong>&nbsp;USB Type-C</strong>&nbsp;gi&uacute;p bạn thuận tiện trong việc kết nối với c&aacute;c thiết bị ngoại vi cần thiết. Ngo&agrave;i ra, laptop c&ograve;n trang bị th&ecirc;m&nbsp;khe thẻ nhớ&nbsp;<strong>Micro SD</strong>&nbsp;gi&uacute;p bạn chia sẻ dễ d&agrave;ng giữa laptop v&agrave; c&aacute;c thiết bị kh&aacute;c.</p>

<p>B&ecirc;n cạnh đ&oacute;, việc c&oacute; th&ecirc;m&nbsp;phương thức kết nối kh&ocirc;ng d&acirc;y<strong>&nbsp;Bluetooth v5.0</strong>&nbsp;v&agrave;&nbsp;<strong>Wi-Fi 6 - 802.11ax</strong>&nbsp;c&agrave;ng dễ d&agrave;ng hơn trong việc kết nối nhờ đường truyền tốc độ cao v&agrave; ổn định.</p>

<p>B&agrave;n ph&iacute;m l&agrave; thứ kh&ocirc;ng thể thiếu đối với một chiếc laptop gaming. H&agrave;nh tr&igrave;nh ph&iacute;m s&acirc;u với thiết kế hợp l&yacute; v&agrave; tốc độ phản hồi nhạy b&eacute;n cộng th&ecirc;m&nbsp;<strong>đ&egrave;n b&agrave;n ph&iacute;m</strong>&nbsp;gi&uacute;p tăng trải nghiệm cho c&aacute;c game thủ, khiến họ thỏa sức thể hiện c&aacute;c kỹ năng của m&igrave;nh.</p>

<h3>M&atilde;n nh&atilde;n với m&agrave;n h&igrave;nh sắc n&eacute;t, tinh tế</h3>

<p>HP Pavilion trang bị m&agrave;n h&igrave;nh&nbsp;<strong><a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">16.1 inch</a></strong>&nbsp;<strong>Full HD&nbsp;</strong>gi&uacute;p bạn đắm ch&igrave;m trong thế giới game với h&igrave;nh ảnh ch&acirc;n thực đến từng chi tiết, đồ họa đẹp đang nổi l&ecirc;n ngay trước mắt bạn. Với&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">tấm nền IPS</a>, bạn sẽ được tận hưởng tựa game y&ecirc;u th&iacute;ch ở g&oacute;c nh&igrave;n rộng, độ tương phản cao, gi&uacute;p những nh&acirc;n vật trong game xuất hiện một c&aacute;ch ho&agrave;n hảo.</p>

<p>Ngo&agrave;i ra,&nbsp;<a href="https://thegioididong.com/hoi-dap/cong-nghe-man-hinh-wled-backlit-tren-laptop-la-gi-1263016" target="_blank">c&ocirc;ng nghệ Wled-backlit</a>&nbsp;c&ograve;n gi&uacute;p m&agrave;n h&igrave;nh c&oacute; độ s&aacute;ng cao, m&agrave;u sắc kh&aacute; tốt đ&aacute;p ứng đủ nhu cầu của người d&ugrave;ng, đem lại trải nghiệm tuyệt vời cho người d&ugrave;ng khi xem phim, show giải tr&iacute; sau giờ l&agrave;m việc.</p>

<p>C&ocirc;ng nghệ&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">chống ch&oacute;i Anti Glare</a>&nbsp;l&agrave;m giảm thiểu t&igrave;nh trạng m&agrave;n h&igrave;nh bị ch&oacute;i khi sử dụng ngo&agrave;i nắng. M&agrave;n h&igrave;nh c&oacute; tần số qu&eacute;t<strong>&nbsp;60 Hz&nbsp;</strong>vẫn l&agrave; chuẩn m&agrave;n h&igrave;nh phổ biến nhất hiện nay v&agrave; đủ cho người d&ugrave;ng sử dụng th&ocirc;ng thường như xem film, xem video,&hellip;</p>

<p><a href="https://https//www.thegioididong.com/laptop" target="_blank">Laptop</a>&nbsp;sử dụng c&ocirc;ng nghệ &acirc;m thanh&nbsp;<strong>Bang &amp; Olufsen audio</strong>&nbsp;t&iacute;ch hợp c&aacute;c khả năng lọc tiếng ồn, gi&uacute;p &acirc;m thanh to v&agrave; r&otilde; r&agrave;ng hơn để bạn c&oacute; được trải nghiệm nghe đ&uacute;ng như &yacute; th&iacute;ch với mỗi hoạt động nghe nhạc, xem phim hay chơi game.</p>

<p>HP Pavilion Gaming 16 a0109TX i7 (31J26PA)&nbsp;l&agrave; chiếc&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;được&nbsp;thiết kế nhỏ gọn để game thủ c&oacute; thể tận hưởng những tựa game y&ecirc;u th&iacute;ch mọi l&uacute;c mọi nơi.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('HP Pavilion 16 a0109TX i7 10870H/8GB/32GB+512GB/4GB GTX1650Ti/Win10 (31J26PA)','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>'Dell Inspiron 7501 i7 10750H/8GB/512GB/4GB GTX1650Ti/Win10 (X3MRY1)',
        'price'=>28490000,
        'old_price'=>30890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/235378/dell-inspiron-7501-i7-x3mry1-600x600.jpg',
        'rate'=>400,
        'category_id'=>8,
        'brand_id'=>3,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>&nbsp;</h2>

<h2><a href="https://www.thegioididong.com/laptop/dell-inspiron-7501-i7-x3mry1" target="_blank">Dell Inspiron 7501 i7 (X3MRY1)</a>&nbsp;sẽ gi&uacute;p bạn khơi dậy niềm đam m&ecirc; v&agrave; l&agrave;m việc cực kỳ hiệu quả cho c&aacute;c game thủ hay d&acirc;n thiết kế đồ họa với mẫu m&atilde; thanh lịch, m&agrave;n h&igrave;nh sắc n&eacute;t v&agrave; bộ xử l&yacute; mạnh mẽ Intel Core i7 thế hệ thứ 10.</h2>

<h3>Cấu h&igrave;nh mạnh mẽ, đ&aacute;p ứng ho&agrave;n hảo trong c&ocirc;ng việc</h3>

<p>Với sức mạnh từ bộ vi xử l&yacute;&nbsp;<a href="https://www.thegioididong.com/laptop-cpu-intel-gen-10" target="_blank">Intel thế hệ thứ 10</a>, con chip&nbsp;<strong>Intel Core i7 - 10750H&nbsp;</strong>thuộc d&ograve;ng&nbsp;<strong>Comet Lake&nbsp;</strong>với&nbsp;<strong>6 nh&acirc;n</strong>,&nbsp;<strong>12 luồng</strong>, gi&uacute;p tăng tốc về hiệu năng, lượng khung h&igrave;nh tr&ecirc;n gi&acirc;y, tốc độ xuất video,... B&ecirc;n cạnh đ&oacute;, CPU c&ograve;n được cung cấp xung nhịp cơ bản&nbsp;<strong>2.6 GHz</strong>&nbsp;v&agrave; xung nhịp tối đa l&ecirc;n tới&nbsp;<strong>5.0 GHz</strong>. Tuy mạnh mẽ nhưng bộ vi xử l&yacute; n&agrave;y tiết kiệm điện đ&aacute;ng kể cho laptop,&nbsp;cực k&igrave; th&iacute;ch hợp với nhu cầu chinh chiến c&aacute;c tựa game li&ecirc;n tục hay c&aacute;c t&aacute;c vụ đồ họa.</p>

<p>Điểm cộng của chiếc laptop n&agrave;y l&agrave;&nbsp;<a href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank">card m&agrave;n h&igrave;nh rời</a>&nbsp;<strong>NVIDIA GeForce GTX 1650Ti 4GB</strong>&nbsp;sử dụng vi kiến tr&uacute;c Touring mang đến hiệu suất xử l&yacute; đồ họa tối ưu, tăng trải nghiệm chơi game, gi&uacute;p bạn chiến đủ c&aacute;c tựa game online v&agrave; offline với mức đồ họa từ thấp đến trung b&igrave;nh.&nbsp;Bạn c&ograve;n c&oacute; thể tha hồ s&aacute;ng tạo, chỉnh sửa ảnh, bi&ecirc;n tập video hay chơi game tr&ecirc;n mẫu laptop n&agrave;y.</p>

<p>Ngo&agrave;i ra laptop được trang bị&nbsp;<strong><a href="https://www.thegioididong.com/laptop-8-gb" target="_blank">RAM 8 GB</a>&nbsp;</strong>mang lại khả năng xử l&iacute; đa nhiệm mượt m&agrave;, dễ d&agrave;ng chuyển đổi giữa c&aacute;c ứng dụng đang mở.&nbsp;Bạn c&ograve;n c&oacute; thể thực hiện c&aacute;c t&aacute;c vụ văn ph&ograve;ng, thiết kế Photoshop cực kỳ ổn định v&agrave; mượt m&agrave;.</p>

<p>Ổ cứng&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">SSD 512 GB</a>&nbsp;M.2 PCIe</strong>&nbsp;vừa mang đến cho bạn một kh&ocirc;ng gian lưu trữ rộng lớn c&aacute;c t&agrave;i liệu cần thiết, vừa gi&uacute;p tốc độ khởi động m&aacute;y nhanh trong v&agrave;i gi&acirc;y, mở ứng dụng v&agrave; truyền dữ liệu cũng nhanh đ&aacute;ng kinh ngạc.</p>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Dell Inspiron 7501 i7 10750H/8GB/512GB/4GB GTX1650Ti/Win10 (X3MRY1)</h3>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i7 Comet Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-i7-10750h-uu-nhuoc-diem-la-1292162" target="_blank">10750H</a></p>
	</li>
	<li>Tốc độ CPU
	<p>2.60 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 5.0 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (1 khe)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>2933 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>16 GB</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>15.6 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p>WVA<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-card-do-hoa-nvidia-geforce-gtx-1650ti-uu-nhuoc-1284193" target="_blank">NVIDIA GeForce GTX 1650Ti 4GB</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-realtek-high-defi-1181909" target="_blank">Realtek High Definition Audio</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">2 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a></p>
	</li>
	<li>Khe đọc thẻ nhớ
	<p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">Micro SD</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>T&iacute;nh năng kh&aacute;c
	<p><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 356.1 mm - Rộng 234.5 mm - D&agrave;y 18.9 mm</p>
	</li>
	<li>Trọng lượng
	<p>1.81 kg</p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p>3-cell Li-ion, 56 Wh</p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2020</p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>&nbsp;</h2>

<h3>Vẻ đẹp sang trọng, đậm c&aacute; t&iacute;nh</h3>

<p>Nhờ m&agrave;u bạc sang trọng, đẹp qu&yacute; ph&aacute;i khiến cho&nbsp;<a href="https://www.thegioididong.com/laptop-dell-inspiron" target="_blank">Dell Inspiron</a>&nbsp;to&aacute;t l&ecirc;n được sự thanh lịch của m&aacute;y. Hơn nữa, với&nbsp;trọng lượng m&aacute;y chỉ&nbsp;<strong>1.81 kg</strong>&nbsp;v&agrave; mỏng&nbsp;<strong>18.9 mm,&nbsp;</strong>laptop đem lại cảm gi&aacute;c thoải m&aacute;i khi sử dụng, dễ d&agrave;ng mang đi mọi nơi bạn muốn.</p>

<p>D&ugrave; mỏng nhẹ nhưng laptop Dell Inspiron vẫn t&iacute;ch hợp đầy đủ c&aacute;c cổng kết nối th&ocirc;ng dụng, cho ph&eacute;p bạn kết nối với thiết bị ngoại vi hiệu quả bao gồm&nbsp;2 cổng&nbsp;<strong>USB 3.1, HDMI, USB Type-C&nbsp;</strong>v&agrave;&nbsp;khe đọc thẻ&nbsp;<strong>Micro SD</strong>. Kh&ocirc;ng chỉ vậy, khả năng kết nối kh&ocirc;ng d&acirc;y của&nbsp;<a href="https://www.thegioididong.com/laptop-dell" target="_blank">laptop Dell</a>&nbsp;cũng thuộc h&agrave;ng đầu nhờ chuẩn&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 - 802.11ax</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-kho-1113891" target="_blank">Bluetooth v5.0</a>&nbsp;tăng tốc độ kết nối, độ ổn định v&agrave; phạm vi kết nối để bạn lu&ocirc;n c&oacute; được tốc độ mạng tin cậy nhất.</p>

<p>B&agrave;n ph&iacute;m được thiết kế tỉ mỉ c&oacute; độ nảy tốt, g&otilde; &ecirc;m &aacute;i, h&agrave;nh tr&igrave;nh ph&iacute;m hợp l&yacute; gi&uacute;p bạn đ&aacute;nh m&aacute;y nhanh v&agrave; ch&iacute;nh x&aacute;c hơn.&nbsp;Với sự trang bị&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank"><strong>đ&egrave;n nền</strong></a>&nbsp;dưới b&agrave;n ph&iacute;m, bạn c&oacute; thể g&otilde; ph&iacute;m ch&iacute;nh x&aacute;c hơn trong đ&ecirc;m tối, đồng thời khiến m&aacute;y t&iacute;nh trở n&ecirc;n thẩm mĩ hơn.</p>

<p>Laptop c&ograve;n hỗ trợ bảo mật th&ocirc;ng qua&nbsp;<strong><a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">cảm biến v&acirc;n tay</a>,&nbsp;</strong>chỉ với một c&aacute;i chạm nhẹ, bạn đ&atilde; c&oacute; thể đưa m&aacute;y từ trạng th&aacute;i ngủ sang l&agrave;m việc chỉ trong v&agrave;i gi&acirc;y nhưng vẫn bảo mật an to&agrave;n cho dữ liệu, t&ocirc;n trọng quyền ri&ecirc;ng tư của người d&ugrave;ng.</p>

<h3>Tận hưởng m&agrave;n h&igrave;nh sắc n&eacute;t, sống động</h3>

<p>Nhờ m&agrave;n h&igrave;nh lớn&nbsp;<a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15,6 inch</a>&nbsp;với độ ph&acirc;n giải&nbsp;<strong>Full HD&nbsp;</strong>tuyệt đẹp mang tới cho bạn những kh&ocirc;ng gian hiển thị rộng lớn, h&igrave;nh ảnh tươi s&aacute;ng, m&agrave;u sắc sống động v&agrave; độ n&eacute;t cao.&nbsp;C&ocirc;ng nghệ m&agrave;n h&igrave;nh&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">chống ch&oacute;i Anti-Glare</a>&nbsp;gi&uacute;p bạn dễ d&agrave;ng l&agrave;m việc trong m&ocirc;i trường c&oacute; cường độ &aacute;nh s&aacute;ng cao m&agrave; kh&ocirc;ng bị ch&oacute;i l&oacute;a.</p>

<p>Đồng thời,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wide-viewing-angle-la-gi-uu-nhuoc-diem-1302188" target="_blank">WVA</a>&nbsp;mang đến cho m&agrave;n h&igrave;nh laptop một g&oacute;c nh&igrave;n rộng l&ecirc;n đến&nbsp;<strong>178 độ</strong>, gi&uacute;p bạn c&oacute; thể xem m&agrave;n h&igrave;nh ở nhiều vị tr&iacute; kh&aacute;c nhau m&agrave; h&igrave;nh ảnh vẫn kh&ocirc;ng bị biến dạng,&nbsp;gi&uacute;p mọi thứ tr&ecirc;n m&agrave;n h&igrave;nh hiển thị với chất lượng chuẩn rạp chiếu phim.</p>

<p>Kh&ocirc;ng những vậy,&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;c&ograve;n được trang bị c&ocirc;ng nghệ &acirc;m thanh&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-realtek-high-defini-1181909" target="_blank">Realtek High Definition Audio</a>&nbsp;khuếch đại &acirc;m thanh, cung cấp bộ t&ugrave;y chỉnh chuy&ecirc;n s&acirc;u, gi&uacute;p bạn t&ugrave;y chỉnh &acirc;m nhạc theo sở th&iacute;ch của m&igrave;nh.</p>

<p>Với thiết kế sang trọng v&agrave; nhỏ gọn của m&igrave;nh,&nbsp;Dell Inspiron 7501 i7 (X3MRY1) hứa hẹn sẽ l&agrave; người bạn đồng h&agrave;nh tuyệt vời trong ph&acirc;n kh&uacute;c&nbsp;<a href="https://www.thegioididong.com/laptop?g=cao-cap-sang-trong" target="_blank">laptop cao cấp - sang trọng.</a></p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Dell Inspiron 7501 i7 10750H/8GB/512GB/4GB GTX1650Ti/Win10 (X3MRY1)','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>'HP 348 G7 i5 10210U/8GB/512GB/Win10 (9PH06PA)',
        'price'=>16490000,
        'old_price'=>18890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/218439/hp-348-g7-i5-9ph06pa-kg2-1-218439-600x600.jpg',
        'rate'=>400,
        'category_id'=>8,
        'brand_id'=>1,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của HP 348 G7 i5 10210U/8GB/512GB/Win10 (9PH06PA)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/218439/Slider/hp-348-g7-i5-9ph06pa-284420-094424.jpg" /></p>

<p><a href="https://www.thegioididong.com/laptop/hp-348-g7-i5-10210u-8gb-512gb-win10-9ph06pa" target="_blank">Laptop HP 348 G7 i5 (9PH06PA)</a>&nbsp;l&agrave; mẫu laptop gi&aacute; mềm, thiết kế đẹp của HP, tập trung v&agrave;o cấu h&igrave;nh v&agrave; c&aacute;c tiện &iacute;ch sử dụng. M&aacute;y ph&ugrave; hợp cho c&aacute;c bạn sinh vi&ecirc;n hay nh&acirc;n vi&ecirc;n văn ph&ograve;ng d&ugrave;ng để xử l&yacute; c&ocirc;ng việc, học tập v&agrave; giải tr&iacute; h&agrave;ng ng&agrave;y.</p>

<h3>Hiệu năng mạnh mẽ, tốc độ nhanh ch&oacute;ng</h3>

<p>Nắm bắt được sự thay đổi về c&ocirc;ng nghệ chiếc laptop HP cũng được trang bị CPU Intel&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=core-i5" target="_blank">Core i5</a></strong>&nbsp;thế hệ thứ 10 (vừa ra mắt cuối năm 2019) v&agrave; dung lượng&nbsp;<strong><a href="https://www.thegioididong.com/laptop-8-gb" target="_blank">RAM 8 GB</a></strong>.</p>

<p>Với cấu h&igrave;nh n&agrave;y, m&aacute;y đủ sức xử l&iacute; mượt m&agrave; c&aacute;c ứng dụng văn ph&ograve;ng từ cơ bản như Word, Exel,... v&agrave; khả năng xử l&iacute; h&igrave;nh ảnh chuy&ecirc;n s&acirc;u hơn với Photoshop, Ai&hellip;.</p>

<p><a href="https://www.thegioididong.com/images/44/218439/hp-348-g7-i5-9ph06pa-i5-10.jpg" onclick="return false;"><img alt="CPU Intel Core i5 thế hệ thứ 10 và dung lượng RAM 8 GB" src="https://cdn.tgdd.vn/Products/Images/44/218439/hp-348-g7-i5-9ph06pa-i5-10.jpg" /></a></p>

<p>Bạn cũng c&oacute; thể chiến những game th&ocirc;ng dụng như LOL, CS:GO ở mức setting trung b&igrave;nh m&agrave; &iacute;t c&oacute; hiện tượng giật lag.</p>

<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">T&igrave;m hiểu về CPU Intel thế hệ thứ 10</a></p>

<p>Tốc độ phản hồi của m&aacute;y sẽ trở n&ecirc;n nhanh ch&oacute;ng với ổ cứng&nbsp;<a href="https://www.thegioididong.com/laptop-hp-compaq-o-cung-ssd" target="_blank">SSD</a>. Thời gian khởi động m&aacute;y th&ocirc;ng thường chỉ v&agrave;o khoảng 20 gi&acirc;y.</p>

<p>B&ecirc;n cạnh đ&oacute; dung lượng&nbsp;<strong><a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank">512 GB</a>&nbsp;</strong>l&agrave; kh&aacute; dư giả ở hiện tại, dung lượng n&agrave;y tương đương với hơn 400 tập phim Full HD 45 ph&uacute;t th&ocirc;ng thường, đảm bảo bạn c&oacute; đủ kh&ocirc;ng gian lưu trữ t&agrave;i liệu, ứng dụng..</p>

<p><a href="https://www.thegioididong.com/images/44/218439/hp-348-g7-i5-9ph06pa-ssd.jpg" onclick="return false;"><img alt="HP 348 G7 có ổ cứng SSD 512 GB" src="https://cdn.tgdd.vn/Products/Images/44/218439/hp-348-g7-i5-9ph06pa-ssd.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết HP 348 G7 i5 10210U/8GB/512GB/Win10 (9PH06PA)</h3>

<p><img alt="Thông số kỹ thuật 218439" src="https://cdn.tgdd.vn/Products/Images/44/218439/Kit/hp-348-g7-i5-9ph06pa-note.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i5 Comet Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/cpu-intel-core-i5-10210u-tren-laptop-la-gi-1239745" target="_blank">10210U</a></p>
	</li>
	<li>Tốc độ CPU
	<p>1.60 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 4.2 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>2666 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>32 GB</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;Hỗ trợ khe cắm HDD SATA</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>14 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-fhd-la-gi-956294" target="_blank">Full HD (1920 x 1080)</a></p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tan-so-quet-cua-man-hinh-laptop-la-gi-co-bao-nhieu-loai-1270588" target="_blank">60Hz</a><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti-Glare</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-tich-hop-la-gi-950047" target="_blank">Card đồ họa t&iacute;ch hợp</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/card-man-hinh-intel-uhd-graphics-tren-laptop-la-gi-1199634" target="_blank">Intel UHD Graphics</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-realtek-high-defi-1181909" target="_blank">Realtek High Definition Audio</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-am-thanh-stereo-am-thanh-kep-dual-spea-920547" target="_blank">Loa k&eacute;p (2 k&ecirc;nh)</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/cac-tieu-chuan-cong-usb-tren-laptop-va-cach-phan-biet-1180516#usb-31" target="_blank">3 x USB 3.1</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-1113891" target="_blank">Bluetooth v5.0</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wifi-80211-chuan-a-b-g-n-ac-tren-cac-thiet-bi-di-d-734195" target="_blank">Wi-Fi 802.11 a/b/g/n/ac</a></p>
	</li>
	<li>Khe đọc thẻ nhớ
	<p><a href="https://www.thegioididong.com/hoi-dap/khe-cam-the-nho-tren-laptop-de-lam-gi-cong-dung-cu-1190121" target="_blank">SD</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>T&iacute;nh năng kh&aacute;c
	<p><a href="https://www.thegioididong.com/hoi-dap/tieu-chuan-quan-su-my-mil-std-810g-1304935" target="_blank">Độ bền chuẩn qu&acirc;n đội MLT STD 810G</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/fingerprint-sensor-la-gi-va-co-tac-dung-gi-904389" target="_blank">Bảo mật v&acirc;n tay</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p>Kh&ocirc;ng c&oacute; đ&egrave;n</p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 324 mm - Rộng 225.9 mm - D&agrave;y 19.9 mm</p>
	</li>
	<li>Trọng lượng
	<p>1.5 kg</p>
	</li>
	<li>Chất liệu
	<p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p><a href="https://www.thegioididong.com/hoi-dap/pin-li-po-la-gi-pin-li-ion-la-gi-pin-3-cell-6-ce-1190023" target="_blank">Li-Ion 3 cell</a></p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2019</p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>Chiếc m&aacute;y 14 inch gọn nhẹ kh&ocirc;ng ngờ</h2>

<p><a href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank">HP</a>&nbsp;348 G7 được thiết kế đặc biệt d&agrave;nh cho đối tượng kh&aacute;ch h&agrave;ng thường xuy&ecirc;n mang chiếc laptop b&ecirc;n cạnh với trọng lượng chỉ&nbsp;<strong>1.5 kg</strong>, lớp vỏ nhựa được gia c&ocirc;ng cứng c&aacute;p gi&uacute;p cho chiếc m&aacute;y trở n&ecirc;n chắc chắn.</p>

<p><a href="https://www.thegioididong.com/images/44/218439/hp-348-g7-i5-9ph06pa-kg2.jpg" onclick="return false;"><img alt="Chiếc máy 14 inch gọn nhẹ không ngờ" src="https://cdn.tgdd.vn/Products/Images/44/218439/hp-348-g7-i5-9ph06pa-kg2.jpg" /></a></p>

<p>HP thiết kế phần ghề nổi ở ch&iacute;nh giữa m&agrave;n h&igrave;nh gi&uacute;p&nbsp;mở đ&oacute;ng m&aacute;y dễ d&agrave;ng hơn, hạn chế nỗi lo hư bản lề.</p>

<p>Laptop HP 348 G7 chuẩn qu&acirc;n đội được thiết kế chịu được trường hợp rớt t&igrave;nh cờ,&nbsp;chống va đập, vẫn hoạt động tốt nếu c&oacute; v&ocirc; t&igrave;nh đ&aacute;nh rơi.</p>

<h3>H&igrave;nh ảnh chất lượng cao</h3>

<p>M&agrave;n h&igrave;nh<strong>&nbsp;<a href="https://www.thegioididong.com/laptop-14-inch" target="_blank">14 inch</a></strong>, viền mỏng ở 2 b&ecirc;n c&ugrave;ng độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;(1920 x 1080) hiển thị h&igrave;nh ảnh r&otilde; n&eacute;t, đẹp mắt.</p>

<p>Tấm nền IPS hiển thị m&agrave;u sắc tốt hơn, g&oacute;c nh&igrave;n rộng rất hữu &iacute;ch trong qu&aacute; tr&igrave;nh thiết kế đồ họa hay chia sẻ nội dung với đồng nghiệp, bạn b&egrave; xung quanh. C&ocirc;ng nghệ chống ch&oacute;i Anti-Glare gi&uacute;p th&ocirc;ng tin tr&ecirc;n m&aacute;y vẫn dễ nh&igrave;n trong điều kiện &aacute;nh s&aacute;ng mạnh chiếu v&agrave;o m&agrave;n h&igrave;nh.</p>

<p><a href="https://www.thegioididong.com/images/44/218439/hp-348-g7-i5-9ph06pa-inch.jpg" onclick="return false;"><img alt="Màn hình 14 inch, viền mỏng ở 2 bên" src="https://cdn.tgdd.vn/Products/Images/44/218439/hp-348-g7-i5-9ph06pa-inch.jpg" /></a></p>

<h3>Thời lượng pin đủ d&ugrave;ng, v&acirc;n tay, cổng kết nối tiện dụng</h3>

<p>Được trang bị Pin Li-Ion 3 cell, chiếc m&aacute;y c&oacute; thể hoạt động li&ecirc;n tục 4 giờ đồng hồ, sẵn s&agrave;ng b&ecirc;n bạn trong những cuộc họp hay l&agrave;m việc nh&oacute;m.&nbsp;</p>

<p>Chỉ với một chạm nhẹ, cảm biến sẽ qu&eacute;t v&acirc;n tay để mở kh&oacute;a thiết bị một c&aacute;ch nhanh ch&oacute;ng.</p>

<p><a href="https://www.thegioididong.com/images/44/218439/hp-348-g7-i5-9ph06pa-va%CC%82ntay.jpg" onclick="return false;"><img alt="Chỉ với một chạm nhẹ, cảm biến sẽ quét vân tay" src="https://cdn.tgdd.vn/Products/Images/44/218439/hp-348-g7-i5-9ph06pa-va%CC%82ntay.jpg" /></a></p>

<p>HP 348 G7 hỗ trợ đầy đủ c&aacute;c cổng kết nối th&ocirc;ng dụng nhất hiện nay như: 3 x USB 3.1, HDMI, LAN (RJ45), USB Type-C. Chiếc m&aacute;y sẽ kết nối tốt với c&aacute;c thiết bị ngoại vi phục vụ nhu cầu học tập, l&agrave;m việc của bạn.</p>

<p><a href="https://www.thegioididong.com/images/44/218439/hp-348-g7-i5-9ph06pa-usb.jpg" onclick="return false;"><img alt="HP 348 G7 hỗ trợ đầy đủ các cổng kết nối thông dụng" src="https://cdn.tgdd.vn/Products/Images/44/218439/hp-348-g7-i5-9ph06pa-usb.jpg" /></a></p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('HP 348 G7 i5 10210U/8GB/512GB/Win10 (9PH06PA)','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>'MSI GL65 Leopard 10SCXK i7 10750H/8GB/512GB/4GB GTX1650/144Hz/Balo/Win10 (093VN)',
        'price'=>18490000,
        'old_price'=>19890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-16-600x600.jpg',
        'rate'=>400,
        'category_id'=>8,
        'brand_id'=>9,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của MSI GL65 Leopard 10SCXK i7 10750H/8GB/512GB/4GB GTX1650/144Hz/Balo/Win10 (093VN)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/235499/Slider/vi-vn-msi-gl65-leopard-10scxk-i7-093vn-1.jpg" /></p>

<p>Chiếc&nbsp;<a href="https://www.thegioididong.com/laptop/msi-gl65-leopard-10scxk-i7-093vn" target="_blank">laptop MSI GL65 Leopard 10SCXK i7(093VN)&nbsp;</a>chắc chắn sẽ l&agrave; sự lựa chọn th&iacute;ch hợp d&agrave;nh cho những game thủ với hiệu năng mượt m&agrave; với CPU Intel Core i7, NVIDIA GeForce GTX 1650 4GB.</p>

<h3>Thiết kế độc đ&aacute;o, mang đậm phong c&aacute;ch esport</h3>

<p>Ngay từ vẻ ngo&agrave;i đ&atilde; n&oacute;i l&ecirc;n sự mạnh mẽ của chiếc&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;n&agrave;y với gam m&agrave;u đen nh&aacute;m c&aacute; t&iacute;nh, những đường cắt độc đ&aacute;o v&agrave; logo m&agrave;u đỏ nổi bật nằm tr&ecirc;n mặt lưng kim loại rắn chắc. Bạn ho&agrave;n to&agrave;n c&oacute; thể mở m&aacute;y ra bằng một tay bởi bản lề linh hoạt, cho việc đ&oacute;ng mở m&aacute;y v&ocirc; c&ugrave;ng nhẹ nh&agrave;ng.</p>

<p>M&aacute;y c&oacute; khối lượng&nbsp;<strong>2.3 kg</strong>&nbsp;v&agrave; d&agrave;y<strong>&nbsp;21.7 mm</strong>, tuy kh&ocirc;ng mỏng nhẹ như những chiếc laptop doanh nh&acirc;n nhưng vẫn thuộc h&agrave;ng thiết kế gọn nhẹ trong ph&acirc;n kh&uacute;c gaming. Chơi game đa số l&agrave; c&aacute;c nam hoặc bạn nữ c&oacute; c&aacute; t&iacute;nh mạnh mẽ n&ecirc;n việc di chuyển chiếc laptop n&agrave;y cũng kh&ocirc;ng vướng v&iacute;u, bạn chỉ cần để v&agrave;o balo v&agrave; di chuyển.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-2-2.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 10750H (093VN) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-2-2.jpg" /></a></p>

<p>Với c&aacute;c game thủ th&igrave; b&agrave;n ph&iacute;m l&agrave; một chi tiết rất quan trọng khi lựa chọn, chiếc laptop n&agrave;y sử dụng b&agrave;n ph&iacute;m<strong>&nbsp;Per-key RGB&nbsp;</strong>cho tốc độ phản hồi nhanh, h&agrave;nh tr&igrave;nh tối ưu cho việc chơi game kết hợp c&ugrave;ng&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">hệ thống đ&egrave;n nền chuyển m&agrave;u</a><strong>&nbsp;</strong>gi&uacute;p bạn nhanh ch&oacute;ng t&igrave;m được ph&iacute;m cần nhấn nhanh ch&oacute;ng dựa theo m&agrave;u sắc. Ngo&agrave;i ra, đ&egrave;n nền n&agrave;y c&oacute; thể thay đổi theo nhạc nền trong game kh&aacute; l&agrave; th&uacute; vị.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-8-2.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 10750H (093VN) - Đèn Led đổi màu RGB" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-8-2.jpg" /></a></p>

<p>Dọc th&acirc;n m&aacute;y được tranh bị c&aacute;c cổng như: USB 3.2 kết nối với chuột v&agrave; truyền dữ liệu, HDMI chia sẻ m&agrave;n h&igrave;nh l&ecirc;n m&aacute;y chiếu hay tivi trong c&aacute;c buổi thi đấu game, Mini DisplayPort đa dụng c&oacute; thể truyền dữ liệu v&agrave; kết nối mạng, LAN (RJ45) kết nối với mạng c&oacute; d&acirc;y, USB Type-C truyền tải h&igrave;nh ảnh chất lượng cao.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-10-2.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 10750H (093VN) - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-10-2.jpg" /></a></p>

<p>Ngo&agrave;i kết nối c&oacute; d&acirc;y&nbsp;<a href="https://https//www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;c&ograve;n hỗ trợ 2 phương thức kết nối kh&ocirc;ng d&acirc;y l&agrave;&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 - 802.11ax</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-bluetooth-51-tren-laptop-la-gi-1273789" target="_blank">Bluetooth 5.1</a>&nbsp;cho tốc độ truyền tải dữ liệu nhanh hơn với tốc độ l&ecirc;n đến hơn 10.000 Mbps v&agrave; phạm vị phủ s&oacute;ng rộng.</p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết MSI GL65 Leopard 10SCXK i7 10750H/8GB/512GB/4GB GTX1650/144Hz/Balo/Win10 (093VN)</h3>

<p><img alt="Thông số kỹ thuật 235499" src="https://cdn.tgdd.vn/Products/Images/44/235499/Kit/msi-gl65-leopard-10scxk-i7-093vn-note.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i7 Comet Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-i7-10750h-uu-nhuoc-diem-la-1292162" target="_blank">10750H</a></p>
	</li>
	<li>Tốc độ CPU
	<p>2.60 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 5.0 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">8 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>3200 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>64 GB</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;Hỗ trợ khe cắm HDD SATA</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>15.6 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p>Full HD (1920 x 1080), 144Hz</p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">Chống ch&oacute;i Anti Glare</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-gtx-1650-co-manh-kh-1201415" target="_blank">NVIDIA GeForce GTX1650 4GB</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-am-thanh-realtek-high-defi-1181909" target="_blank">Realtek High Definition Audio</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">3 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/mini-displayport-la-gi-966831" target="_blank">Mini DisplayPort</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-bluetooth-51-tren-laptop-la-gi-1273789" target="_blank">Bluetooth 5.1</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a></p>
	</li>
	<li>Webcam
	<p>Được t&iacute;ch hợp</p>
	</li>
	<li>T&iacute;nh năng kh&aacute;c
	<p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">Đ&egrave;n b&agrave;n ph&iacute;m chuyển m&agrave;u RGB</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 359 mm - Rộng 254 mm - D&agrave;y 21.7 mm</p>
	</li>
	<li>Trọng lượng
	<p>2.3 kg</p>
	</li>
	<li>Chất liệu
	<p>Nắp lưng v&agrave; chiếu nghỉ tay bằng kim loại</p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p>6-cell Li-ion, 51 Wh</p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2020</p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>C&acirc;n mọi tựa game với cấu h&igrave;nh mạnh mẽ</h2>

<p>Chiếc<a href="https://www.thegioididong.com/laptop-msi?g=laptop-gaming" target="_blank">&nbsp;laptop gaming MSI&nbsp;</a>n&agrave;y được trang bị bộ xử l&yacute;&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank">Intel Core i7</a>&nbsp;10750H c&oacute; thể chiến tốt c&aacute;c tựa game khủng như: MORTAL KOMBAT 11, FAR CRY: NEW DAWN, GEARS 5,... với&nbsp;<strong>6 l&otilde;i&nbsp;</strong>v&agrave;<strong>&nbsp;12</strong>&nbsp;<strong>luồng</strong>, tốc độ xung nhịp tối đa l&ecirc;n tới 5.00 GHz.&nbsp; Hiệu năng của i7 10750H được n&acirc;ng l&ecirc;n&nbsp;<strong>15%</strong>&nbsp;so với thế hệ trước l&agrave; i7-9750H đem đến cho một trải nghiệm chơi game &ldquo;đ&atilde;&rdquo; hơn.</p>

<p><a href="https://www.thegioididong.com/laptop-cpu-intel-gen-10" target="_blank">CPU thế hệ thứ 10</a>&nbsp;kết hợp c&ugrave;ng&nbsp;<a href="https://www.thegioididong.com/laptop-card-do-hoa-roi" target="_blank">card đồ họa rời</a>&nbsp;<a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-gtx-1650-co-manh-kh-1201415" target="_blank">NVIDIA GeForce GTX 1650 4GB</a>&nbsp;cho h&igrave;nh ảnh trong game cũng được thể hiện sống động, đổ b&oacute;ng, phản chiếu &aacute;nh s&aacute;ng cực ch&acirc;n thật. B&ecirc;n cạnh chơi game th&igrave; m&aacute;y cũng chạy tốt c&aacute;c phần mềm đồ họa chuy&ecirc;n nghiệp như: Sketchup, 3ds Max, Autocad,... giờ đ&acirc;y chiếc<a href="https://www.thegioididong.com/laptop-msi" target="_blank">&nbsp;laptop MSI</a>&nbsp;n&agrave;y kh&ocirc;ng chỉ chơi game cực mượt m&agrave; c&ograve;n c&oacute; khả năng đồ họa cao, đ&aacute;p ứng tốt nhu cầu của một gamer l&agrave;m trong lĩnh vực s&aacute;ng tạo.</p>

<p><a href="https://www.thegioididong.com/laptop-8-gb" target="_blank"><strong>RAM 8 GB</strong></a>&nbsp;DDR4 (2 khe) cho khả năng xử l&yacute; đa nhiệm mạnh mẽ, đ&aacute;p ứng được hầu hết c&aacute;c nhu cầu giải tr&iacute; l&agrave;m việc của bạn, d&ugrave; bạn mở nhiều ứng dụng c&ugrave;ng l&uacute;c m&agrave; kh&ocirc;ng bị giật hay đứng m&aacute;y với tốc độ Bus RAM<strong>&nbsp;3200 MHz</strong>. B&ecirc;n cạnh đ&oacute;, m&aacute;y cũng hỗ trợ n&acirc;ng cấp RAM tối đa l&ecirc;n đến&nbsp;<strong>64 GB</strong>, bạn c&oacute; thể n&acirc;ng cấp mức cho ph&ugrave; hợp với nhu cầu sử dụng của m&igrave;nh.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-4-2.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 10750H (093VN) - Cấu hình" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-4-2.jpg" /></a></p>

<p>M&aacute;y sử dụng&nbsp;<a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank"><strong>Ổ cứng SSD</strong></a>&nbsp;<a href="https://www.thegioididong.com/laptop?g=ssd-512-gb" target="_blank"><strong>512 GB</strong></a>&nbsp;M.2 PCIe cho khả năng phản hồi nhanh ch&oacute;ng, khởi động m&aacute;y hay v&agrave;o ứng dụng chỉ mất v&agrave;i gi&acirc;y. B&ecirc;n cạnh ổ cứng SSD m&aacute;y c&ograve;n hỗ trợ khe cắm HDD SATA gi&uacute;p bạn dễ d&agrave;ng mở rộng kh&ocirc;ng gian lưu trữ.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-5-2.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 10750H (093VN) - SSD" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-5-2.jpg" /></a></p>

<p>Giải ph&aacute;p tản nhiệt&nbsp;<strong>Cooler Boost 5</strong>&nbsp;chuy&ecirc;n dụng cho cả CPU v&agrave; GPU gi&uacute;p giảm thiệu hơi n&oacute;ng nhanh ch&oacute;ng, tối ưu luồng gi&oacute; để đảm bảo mang lại hiệu năng game cao trong một th&acirc;n m&aacute;y gọn g&agrave;ng với&nbsp;<strong>6 ống dẫn nhiệt</strong>,<strong>&nbsp;2 quạt&nbsp;</strong>c&ugrave;ng khe tản nhiệt rộng tối ưu cho luồng kh&iacute; lưu th&ocirc;ng.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-7-2.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 10750H (093VN) - Tản nhiệt" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-7-2.jpg" /></a></p>

<h3>M&agrave;n h&igrave;nh sắc n&eacute;t, &acirc;m thanh sống động l&yacute; tưởng cho việc chơi game</h3>

<p>M&agrave;n h&igrave;nh&nbsp;<strong><a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a></strong>&nbsp;gi&uacute;p kh&ocirc;ng gian hiển thị được mở rộng, hiệu ứng h&igrave;nh ảnh sống động v&agrave; m&agrave;u sắc được t&aacute;i tạo ch&iacute;nh x&aacute;c với độ ph&acirc;n giải Full HD (1920 x 1080). Tần số qu&eacute;t 144 Hz gi&uacute;p bạn nắm bắt kịp thời từng chuyển động trong game tăng khả năng chiến thắng với tốc độ chuyển đổi giữa c&aacute;c khung h&igrave;nh cực nhanh v&agrave; c&oacute; độ chi tiết cao.</p>

<p>Với&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">tấm nền IPS</a>, g&oacute;c nh&igrave;n của m&agrave;n h&igrave;nh sẽ lớn hơn l&ecirc;n tới&nbsp;<strong>178 độ</strong>&nbsp;nhưng vẫn đảm bảo m&agrave;u sắc v&agrave; độ chi tiết của h&igrave;nh ảnh vẫn ch&iacute;nh x&aacute;c như khi nh&igrave;n từ ch&iacute;nh x&aacute;c.<strong>&nbsp;</strong>C&ocirc;ng nghệ&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-chong-choi-anti-glare-1182688" target="_blank">chống ch&oacute;i Anti Glare</a>&nbsp;gi&uacute;p bạn dễ d&agrave;ng sử dụng laptop ở những nơi c&oacute; độ s&aacute;ng cao với khả năng kh&ocirc;ng đổ b&oacute;ng, ch&oacute;i s&aacute;ng như những m&agrave;n h&igrave;nh mặt gương.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-6-2.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 10750H (093VN) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-6-2.jpg" /></a></p>

<p>Tăng cường chất lượng &acirc;m thanh trong game, t&ugrave;y chỉnh &acirc;m thanh theo nhu cầu nghe nhạc, xem phim v&agrave; họp trực tuyến của bạn với c&ocirc;ng nghệ &acirc;m thanh&nbsp;<strong>Realtek High Definition Audio</strong>.</p>

<p><a href="https://www.thegioididong.com/images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-09.jpg" onclick="return false;"><img alt="Laptop MSI GL65 Leopard 10SCXK i7 (093VN) - Âm thanh" src="https://cdn.tgdd.vn/Products/Images/44/235499/msi-gl65-leopard-10scxk-i7-093vn-09.jpg" /></a></p>

<p>Trải nghiệm chơi game cực đỉnh với laptop MSI GL65 Leopard 10SCXK i7(093VN) c&oacute; cấu h&igrave;nh mạnh mẽ, tốc độ xử l&yacute; nhanh, m&agrave;n h&igrave;nh hỗ trợ chơi game tốt.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('MSI GL65 Leopard 10SCXK i7 10750H/8GB/512GB/4GB GTX1650/144Hz/Balo/Win10 (093VN)','-').'.aspx',
        'created_at'=>now(),
    ]);DB::table('products')->insert([
        'name'=>'MSI Gaming Leopard 10SDK GL65 i7 10750H/16GB/512GB/144Hz/6GB GTX1660Ti/Win10 (242VN)',
        'price'=>31490000,
        'old_price'=>32890000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-16-600x600.jpg',
        'rate'=>400,
        'category_id'=>8,
        'brand_id'=>9,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của MSI Gaming Leopard 10SDK GL65 i7 10750H/16GB/512GB/144Hz/6GB GTX1660Ti/Win10 (242VN)</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/44/225857/Slider/MSIGamingLeopard10SDK-780x433.jpg" /></p>

<p><a href="https://www.thegioididong.com/laptop/msi-gaming-leopard-10sdr-gl65-i7-242vn" target="_blank">Laptop MSI Gaming Leopard 10SDRK GL65 i7 (242VN)</a>&nbsp;l&agrave; chiếc&nbsp;<a href="https://www.thegioididong.com/laptop?g=laptop-gaming" target="_blank">laptop gaming</a>&nbsp;với thiết kế chuẩn hiện đại, hiệu năng mạnh mẽ với CPU thế hệ mới mang lại sức mạnh chiến game đỉnh cao cho c&aacute;c game thủ lựa chọn l&iacute; tưởng trong tầm gi&aacute;.</p>

<h3>Cấu h&igrave;nh khủng, chiến game cực chất</h3>

<p>MSI Leopard GL65 sở hữu cấu h&igrave;nh ấn tượng với chip Intel&nbsp;<a href="https://www.thegioididong.com/laptop?g=core-i7" target="_blank"><strong>Core i7</strong></a>&nbsp;thế hệ 10 d&ograve;ng H 6 nh&acirc;n 12 luồng, cho xung nhịp tối đa l&ecirc;n đến 5.0 GHz.&nbsp;</p>

<p><strong><a href="https://www.thegioididong.com/laptop?g=16-gb" target="_blank">RAM 16 GB</a></strong>&nbsp;cho khả năng đa nhiệm mượt m&agrave;, sử dụng được nhiều ứng dụng c&ugrave;ng l&uacute;c, sử dụng Photoshop chuy&ecirc;n nghiệp hoặc dựng video, l&agrave;m vlog trơn tru.</p>

<p><strong><a href="https://www.thegioididong.com/laptop-o-cung-ssd" target="_blank">Ổ cứng SSD</a>&nbsp;512 GB</strong>&nbsp;kh&ocirc;ng chỉ đem đến tốc độ vận h&agrave;nh nhanh, mở m&aacute;y, v&agrave;o game chỉ trong v&agrave;i gi&acirc;y m&agrave; c&ograve;n cho bạn kh&ocirc;ng gian lưu trữ lớn, đủ để lưu trữ h&agrave;ng trăm tựa game.</p>

<p><a href="https://www.thegioididong.com/images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-160620-100606.jpg" onclick="return false;"><img alt="Laptop MSI Gaming Leopard 10SDK GL65 i7 (242VN) - Cấu hình" src="https://cdn.tgdd.vn/Products/Images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-160620-100606.jpg" /></a></p>

<p>Đặc biệt, m&aacute;y được trang bị&nbsp;<strong><a href="https://www.thegioididong.com/laptop-card-do-hoa-roi">card đồ họa rời</a>&nbsp;<a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-gtx-1660-ti-choi-du-1183155" target="_blank">GeForce GTX 1660Ti</a>&nbsp;</strong>được x&acirc;y dựng với hiệu năng đồ họa đột ph&aacute; của kiến ​​tr&uacute;c NVIDIA Turing mang lại hiệu năng mạnh gấp 3 lần so với GPU đời cũ, tăng tốc cực nhanh cho c&aacute;c tựa game hiện đại như LOL, CSGO, PUBG với mức setting cao.</p>

<p><a href="https://www.thegioididong.com/images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-160620-100603.jpg" onclick="return false;"><img alt="Laptop MSI Gaming Leopard 10SDK GL65 i7 (242VN) - Card đồ họa" src="https://cdn.tgdd.vn/Products/Images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-160620-100603.jpg" /></a></p>

<h3>M&agrave;n h&igrave;nh chuẩn gaming&nbsp;</h3>

<p>M&agrave;n h&igrave;nh&nbsp;<strong><a href="https://www.thegioididong.com/laptop-tren-15-inch" target="_blank">15.6 inch</a>&nbsp;Full HD</strong>&nbsp;với thiết kế viền mỏng 6.5 mm kh&ocirc;ng chỉ mang đến h&igrave;nh ảnh ch&acirc;n thực m&agrave; c&ograve;n khiến m&agrave;n h&igrave;nh lớn hơn trong một h&igrave;nh dạng nhỏ gọn. Tấm nền IPS gi&uacute;p cho g&oacute;c nh&igrave;n rộng, trải nghiệm chơi game đắm ch&igrave;m.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-160620-100609.jpg" onclick="return false;"><img alt="Laptop MSI Gaming Leopard 10SDK GL65 i7 (242VN) - Màn hình" src="https://cdn.tgdd.vn/Products/Images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-160620-100609.jpg" /></a></p>

<p>Tần số qu&eacute;t m&agrave;n h&igrave;nh đạt 144 Hz cho tốc độ đọc cực nhanh, hạn chế t&igrave;nh trạng giật x&eacute; h&igrave;nh khi chơi c&aacute;c tựa game đồ họa cao.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-160620-100612.jpg" onclick="return false;"><img alt="Laptop MSI Gaming Leopard 10SDK GL65 i7 (242VN) - Quét hình" src="https://cdn.tgdd.vn/Products/Images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-160620-100612.jpg" /></a></p>

<p>Độ phủ m&agrave;u rộng khoảng 100 sRGB, độ s&aacute;ng tối đa khoảng 247 nit cho h&igrave;nh ảnh sắc n&eacute;t, m&agrave;u sắc trung thực v&agrave; độ s&aacute;ng cao, sử dụng được cả khi ngồi ngo&agrave;i trời.&nbsp;</p>

<p>C&ocirc;ng nghệ Nahimic 3 tinh chỉnh &acirc;m thanh to r&otilde;, cho bạn trải nghiệm &acirc;m thanh v&ograve;m ch&igrave;m đắm như đang h&ograve;a m&igrave;nh v&agrave;o tr&ograve; chơi.&nbsp;&nbsp;</p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết MSI Gaming Leopard 10SDK GL65 i7 10750H/16GB/512GB/144Hz/6GB GTX1660Ti/Win10 (242VN)</h3>

<p><img alt="Thông số kỹ thuật 225857" src="https://cdn.tgdd.vn/Products/Images/44/225857/Kit/msi-gaming-leopard-10sdr-gl65-i7-242vn-note.jpg" style="height:430px; width:500px" /></p>

<ul>
	<li>﻿</li>
	<li>Bộ xử l&yacute;</li>
	<li>C&ocirc;ng nghệ CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-the-he-10-1212148" target="_blank">Intel Core i7 Comet Lake</a></p>
	</li>
	<li>Loại CPU
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-vi-xu-ly-intel-core-i7-10750h-uu-nhuoc-diem-la-1292162" target="_blank">10750H</a></p>
	</li>
	<li>Tốc độ CPU
	<p>2.60 GHz</p>
	</li>
	<li>Tốc độ tối đa
	<p><a href="https://www.thegioididong.com/hoi-dap/turbo-boost-la-gi-cai-dat-turbo-boost-nhu-the-nao-884498" target="_blank">Turbo Boost 5.0 GHz</a></p>
	</li>
	<li>Bộ nhớ RAM, Ổ cứng</li>
	<li>RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-lap-top-la-gi-dung-luong-bao-nhieu-la-du-1172167" target="_blank">16 GB</a></p>
	</li>
	<li>Loại RAM
	<p><a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173#ddr4" target="_blank">DDR4 (2 khe)</a></p>
	</li>
	<li>Tốc độ Bus RAM
	<p>2666 MHz</p>
	</li>
	<li>Hỗ trợ RAM tối đa
	<p>32 GB</p>
	</li>
	<li>Ổ cứng
	<p><a href="https://www.thegioididong.com/hoi-dap/o-cung-ssd-la-gi-923073" target="_blank">SSD: 512 GB, M.2 PCIe</a>,&nbsp;Hỗ trợ khe cắm HDD SATA</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>K&iacute;ch thước m&agrave;n h&igrave;nh
	<p>15.6 inch</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p>Full HD (1920 x 1080), 144Hz</p>
	</li>
	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752" target="_blank">Tấm nền IPS</a></p>
	</li>
	<li>M&agrave;n h&igrave;nh cảm ứng
	<p>Kh&ocirc;ng c&oacute;</p>
	</li>
	<li>Đồ họa v&agrave; &Acirc;m thanh</li>
	<li>Thiết kế card
	<p><a href="https://www.thegioididong.com/hoi-dap/nen-mua-laptop-co-card-do-hoa-roi-nao-1181568" target="_blank">Card đồ họa rời</a></p>
	</li>
	<li>Card đồ họa
	<p><a href="https://www.thegioididong.com/hoi-dap/card-do-hoa-roi-nvidia-geforce-gtx-1660-ti-choi-du-1183155" target="_blank">NVIDIA GeForce GTX 1660Ti</a></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-am-thanh-stereo-am-thanh-kep-dual-spea-920547" target="_blank">Stereo speakers</a></p>
	</li>
	<li>Cổng kết nối &amp; t&iacute;nh năng mở rộng</li>
	<li>Cổng giao tiếp
	<p><a href="https://www.thegioididong.com/hoi-dap/usb-32-la-gi-co-nhung-gi-dac-biet-1261132" target="_blank">3 x USB 3.2</a><a href="https://www.thegioididong.com/hoi-dap/hoi-dap-hdmi-la-gi-930605" target="_blank">HDMI</a><a href="https://www.thegioididong.com/hoi-dap/cho-minh-hoi-thong-so-laptop-co-nhung-cai-nay-10-743872" target="_blank">LAN (RJ45)</a><a href="https://www.thegioididong.com/hoi-dap/mini-displayport-la-gi-966831" target="_blank">Mini DisplayPort</a><a href="https://www.thegioididong.com/hoi-dap/usb-type-c-chua-n-mu-c-co-ng-ke-t-no-i-mo-i-723760" target="_blank">USB Type-C</a></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y
	<p><a href="https://www.thegioididong.com/hoi-dap/cong-nghe-bluetooth-51-tren-laptop-la-gi-1273789" target="_blank">Bluetooth 5.1</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/wi-fi-chuan-80211ax-la-gi-tim-hieu-ve-wi-fi-the-he-thu-6-1187524" target="_blank">Wi-Fi 6 AX201</a></p>
	</li>
	<li>Webcam
	<p><a href="https://www.thegioididong.com/hoi-dap/webcam-la-gi-951409" target="_blank">HD webcam</a></p>
	</li>
	<li>T&iacute;nh năng kh&aacute;c
	<p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">Đ&egrave;n b&agrave;n ph&iacute;m chuyển m&agrave;u RGB</a></p>
	</li>
	<li>Đ&egrave;n b&agrave;n ph&iacute;m
	<p><a href="https://www.thegioididong.com/hoi-dap/cach-bat-den-ban-phim-laptop-956550" target="_blank">C&oacute;</a></p>
	</li>
	<li>K&iacute;ch thước &amp; trọng lượng</li>
	<li>K&iacute;ch thước
	<p>D&agrave;i 359 mm - Rộng 254 mm - D&agrave;y 21.7 mm</p>
	</li>
	<li>Trọng lượng
	<p>2.3 kg</p>
	</li>
	<li>Chất liệu
	<p><a href="https://www.thegioididong.com/hoi-dap/chat-lieu-thuong-dung-tren-laptop-va-uu-nhuoc-diem-1192823" target="_blank">Vỏ nhựa</a></p>
	</li>
	<li>Th&ocirc;ng tin kh&aacute;c</li>
	<li>Model Adapter sạc
	<p>A15-180P1A</p>
	</li>
	<li>Loại PIN
	<p>PIN liền</p>
	</li>
	<li>Th&ocirc;ng tin Pin
	<p><a href="https://www.thegioididong.com/hoi-dap/pin-li-po-la-gi-pin-li-ion-la-gi-pin-3-cell-6-ce-1190023" target="_blank">Li-Ion 6 cell</a></p>
	</li>
	<li>Hệ điều h&agrave;nh
	<p><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-windows-10-va-cac-phien-ban-cua-no-hie-1184370" target="_blank">Windows 10 Home SL</a></p>
	</li>
	<li>Thời điểm ra mắt
	<p>2020</p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>Thiết kế gaming mạnh mẽ&nbsp;</h2>

<p>MSI&nbsp;Leopard đem đến thiết kế mạnh mẽ nhưng kh&ocirc;ng k&eacute;m phần sang trọng, viền m&agrave;n h&igrave;nh mỏng chuẩn thời thượng. Tuy được v&aacute;t gọt rất mỏng nhưng cạnh tr&ecirc;n của m&aacute;y vẫn trang bị webcam để tiện dụng khi gọi video hay livestream.&nbsp;</p>

<p>Phần đ&aacute;y m&aacute;y c&oacute; nhiều hoa văn g&oacute;c cạnh khiến m&aacute;y tr&ocirc;ng ngầu hơn, đồng thời gi&uacute;p m&aacute;y chống trượt khi đặt tr&ecirc;n b&agrave;n.&nbsp;</p>

<p>M&aacute;y c&oacute; trọng lượng chỉ&nbsp;<strong>2.3 kg</strong>, đ&aacute;p ứng ti&ecirc;u ch&iacute; vừa mạnh mẽ, vừa mỏng nhẹ dễ d&agrave;ng x&ecirc; dịch.</p>

<p><a href="https://www.thegioididong.com/images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-162320-022313.jpg" onclick="return false;"><img alt="Laptop MSI Gaming Leopard 10SDK GL65 i7 (242VN) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-162320-022313.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/laptop-msi" target="_blank">MSI</a>&nbsp;sử dụng b&agrave;n ph&iacute;m steelseries độ nảy tốt, cảm gi&aacute;c g&otilde; &ecirc;m &aacute;i thoải m&aacute;i. B&agrave;n ph&iacute;m RGB-PER-KEY c&oacute; khả năng t&ugrave;y chỉnh m&agrave;u cho từng ph&iacute;m.</p>

<p><a href="https://www.thegioididong.com/images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-160520-100559.jpg" onclick="return false;"><img alt="Laptop MSI Gaming Leopard 10SDK GL65 i7 (242VN) - Bàn phím" src="https://cdn.tgdd.vn/Products/Images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-160520-100559.jpg" /></a></p>

<p>MSI trang bị cho&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;c&aacute;c cổng kết nối HDMI, Type C, USB 3.2 chuẩn hiện đại, đem lại băng th&ocirc;ng kết nối rộng hơn, truyền dữ liệu cực nhanh, c&oacute; thể xuất h&igrave;nh ảnh ra m&agrave;n h&igrave;nh 4K để xem đ&atilde; hơn.</p>

<p><a href="https://www.thegioididong.com/images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-162320-022307.jpg" onclick="return false;"><img alt="Laptop MSI Gaming Leopard 10SDK GL65 i7 (242VN) - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-162320-022307.jpg" /></a></p>

<h3>Hệ thống tản nhiệt hiện đại&nbsp;</h3>

<p>Kh&ocirc;ng thể kh&ocirc;ng n&oacute;i đến hệ thống tản nhiệt Cooler Boost 5 mới nhất của MSI. Với 2 quạt song song v&agrave; 4 khe tho&aacute;t kh&iacute;, 7 ống đồng dẫn nhiệt cao cấp, m&aacute;y t&iacute;nh được l&agrave;m m&aacute;t nhanh, cho hiệu năng mạnh v&agrave; gia tăng đ&aacute;ng kể độ bền của laptop gaming.&nbsp;</p>

<p>Mặt đ&aacute;y của m&aacute;y c&oacute; phần lưới dưới được l&agrave;m lớn hơn, tản nhiệt hiệu quả so với thế hệ cũ.</p>

<p><a href="https://www.thegioididong.com/images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-161920-101909.jpg" onclick="return false;"><img alt="Laptop MSI Gaming Leopard 10SDK GL65 i7 (242VN) - Tản nhiệt" src="https://cdn.tgdd.vn/Products/Images/44/225857/msi-gaming-leopard-10sdr-gl65-i7-242vn-161920-101909.jpg" /></a></p>

<p>M&aacute;y sử dụng loại pin Li-Ion 6 cell 52 Wh, sau khi lướt web, xem phim, l&agrave;m &iacute;t việc văn ph&ograve;ng v&agrave; chơi game th&igrave; n&oacute; trụ được khoảng 4 - 5 giờ qu&aacute; đủ để chiến v&agrave;i v&aacute;n PUBG.</p>

<p>Với mức gi&aacute; hợp l&iacute;, laptop&nbsp;<a href="https://www.thegioididong.com/laptop-msi-gaming" target="_blank">MSI gaming</a>&nbsp;10SDRK GL65 i7 (242VN) đem đến hiệu năng cao v&agrave; thiết kế nổi bật, ph&ugrave; hợp với c&aacute;c game thủ trẻ hoặc người l&agrave;m đồ họa.&nbsp;</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('MSI Gaming Leopard 10SDK GL65 i7 10750H/16GB/512GB/144Hz/6GB GTX1660Ti/Win10 (242VN)','-').'.aspx',
        'created_at'=>now(),
    ]);

        DB::table('products')->insert([
            'name'=>'',
            'price'=>16990000,
            'old_price'=>17990000,
            'quantity'=>50,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/9499/230315/adapter-sac-type-c-20w-cho-iphone-ipad-apple-mhje3-avatar-1-600x600.jpg',
            'rate'=>400,
            'category_id'=>10,
            'brand_id'=>10,
            'user_id'=>random_int(1,5),
            'describe'=> '<h3>Giới thiệu sản phẩm</h3>

<h3>Thiết kế gọn đẹp, đầu cắm 2 chấu phổ biến</h3>

<p>Kiểu d&aacute;ng&nbsp;<a href="https://www.thegioididong.com/adapter-sac" target="_blank">adapter sạc</a>&nbsp;đơn giản, trang nh&atilde;, chất lượng tốt cho độ bền cao. Thiết kế đầu cắm loại c&oacute; 2 chấu quen thuộc, d&ugrave;ng được với c&aacute;c ổ điện ở mọi nơi từ nh&agrave; cho tới c&ocirc;ng sở, trường học, nh&agrave; h&agrave;ng, kh&aacute;ch sạn,...</p>

<p><a href="https://www.thegioididong.com/images/58/230315/adapter-sac-type-c-20w-cho-iphone-ipad-apple-mhje3-264920-024901.jpg" onclick="return false;"><img alt="Adapter Sạc Type C 20W dùng cho iPhone/iPad Apple MHJE3 Trắng - Thiết kế gọn đẹp" src="https://cdn.tgdd.vn/Products/Images/58/230315/adapter-sac-type-c-20w-cho-iphone-ipad-apple-mhje3-264920-024901.jpg" /></a></p>

<h3>Sạc nhanh qua cổng ra Type-C c&ocirc;ng suất mạnh mẽ 20W</h3>

<p>Đặc biệt, t&iacute;ch hợp c&ocirc;ng nghệ Power Delivery hỗ trợ&nbsp;<a href="https://www.thegioididong.com/adapter-sac-sac-nhanh" target="_blank">sạc nhanh</a>&nbsp;ở nhiều d&ograve;ng điện &aacute;p kh&aacute;c nhau, gi&uacute;p thiết bị được nạp đầy năng lượng trong thời gian ngắn một c&aacute;ch an to&agrave;n, tối ưu nhất.</p>

<p>Cổng Type-C kh&aacute; th&ocirc;ng dụng n&ecirc;n cho adapter l&agrave;m việc được với nhiều loại&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai" target="_blank">c&aacute;p sạc</a>&nbsp;tr&ecirc;n thị trường như&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai-type-c-type-c" target="_blank">c&aacute;p Type-C - Type-C</a>,&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai-type-c-lightning" target="_blank">c&aacute;p Type-C - Lightning</a>.</p>

<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-power-delivery-la-gi-1212331" target="_blank">C&ocirc;ng nghệ Power Delivery l&agrave; g&igrave;?</a></p>

<p><a href="https://www.thegioididong.com/images/58/230315/adapter-sac-type-c-20w-cho-iphone-ipad-apple-mhje3-264920-024907.jpg" onclick="return false;"><img alt="Adapter Sạc Type C 20W dùng cho iPhone/iPad Apple MHJE3 Trắng - Sạc nhanh qua cổng ra Type-C công suất mạnh mẽ 20W" src="https://cdn.tgdd.vn/Products/Images/58/230315/adapter-sac-type-c-20w-cho-iphone-ipad-apple-mhje3-264920-024907.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>',
            'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Model:
	<p><em>MHJE3</em></p>
	</li>
	<li>Chức năng:
	<p><em>Sạc</em></p>
	</li>
	<li>Đầu ra:
	<p><em>Type C: 20W</em></p>
	</li>
	<li>C&ocirc;ng nghệ/Tiện &iacute;ch:
	<p><em>Power Delivery</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>Mỹ</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Việt Nam / Trung Quốc (t&ugrave;y l&ocirc; h&agrave;ng)</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
            'details'=> '<h3>Apple MHJE3 ph&ugrave; hợp 100% với c&aacute;c d&ograve;ng iPhone, iPad</h3>

<p>Sử dụng&nbsp;<a href="https://www.thegioididong.com/adapter-sac-apple" target="_blank">Adapter sạc Apple</a>&nbsp;n&agrave;y để nạp pin cho&nbsp;iPhone, iPad của bạn kh&ocirc;ng những cho khả năng kết nối cao, tăng tuổi thọ cho pin m&agrave; c&ograve;n gi&uacute;p bảo vệ người d&ugrave;ng v&agrave; thiết bị hiệu quả.</p>

<p><a href="https://www.thegioididong.com/images/58/230315/adapter-sac-type-c-20w-cho-iphone-ipad-apple-mhje3-264820-024854.jpg" onclick="return false;"><img alt="Adapter Sạc Type C 20W dùng cho iPhone/iPad Apple MHJE3 Trắng - Apple MHJE3 phù hợp 100% với các dòng iPhone, iPad" src="https://cdn.tgdd.vn/Products/Images/58/230315/adapter-sac-type-c-20w-cho-iphone-ipad-apple-mhje3-264820-024854.jpg" /></a></p>

<p>Nếu h&agrave;nh trang thường nhật của bạn đang thiếu 1 chiếc&nbsp;adapter&nbsp;sạc nhanh&nbsp;ch&iacute;nh h&atilde;ng tin cậy của Apple th&igrave; mẫu&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai/adapter-sac-type-c-20w-cho-iphone-ipad-apple-mhje3" target="_blank">adapter Sạc Type C cho 20W d&ugrave;ng cho iPhone/iPad Apple MHJE3 trắng</a>&nbsp;chắc chắn l&agrave; lựa chọn tuyệt vời, chọn mua ngay để trải nghiệm khả năng sạc ấn tượng của em n&oacute; n&agrave;o!</p>

<p>&nbsp;</p>',
            'slug'=>Str::slug('','-').'.aspx',
            'created_at'=>now(),

        ]);

        DB::table('products')->insert([
            'name'=>'Adapter Sạc 12W dùng cho iPhone/iPad/iPod Apple MGN03 Trắng',
            'price'=>490000,
            'old_price'=>590000,
            'quantity'=>50,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/9499/226750/adapter-sac-12w-cho-iphone-ipad-ipod-apple-mgn03-600x600.jpg',
            'rate'=>400,
            'category_id'=>10,
            'brand_id'=>10,
            'user_id'=>random_int(1,5),
            'describe'=> '<h3>Giới thiệu sản phẩm</h3>

<h3><a href="https://www.thegioididong.com/cap-dien-thoai/adapter-sac-12w-cho-iphone-ipad-ipod-apple-mgn03" target="_blank">Adapter Sạc 12W Apple MGN03 Trắng</a>&nbsp;được Apple tạo h&igrave;nh nhỏ nhắn quen thuộc, thiết kế chu&ocirc;i chọn thường d&ugrave;ng, tổng thể&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai-adapter-sac-cu-sac" target="_blank">củ sạc</a>&nbsp;gọn g&agrave;ng, dễ cất giữ</h3>

<p><a href="https://www.thegioididong.com/images/58/226750/adapter-sac-12w-cho-iphone-ipad-ipod-apple-mgn03-280620-100659.jpg" onclick="return false;"><img alt="Adapter Sạc 12W dùng cho iPhone/iPad/iPod Apple MGN03 Trắng" src="https://cdn.tgdd.vn/Products/Images/58/226750/adapter-sac-12w-cho-iphone-ipad-ipod-apple-mgn03-280620-100659.jpg" /></a></p>

<h3>Cổng USB 12 W c&oacute; thể kết nối nhiều loại c&aacute;p sạc th&ocirc;ng dụng hiện tại</h3>

<p><a href="https://www.thegioididong.com/images/58/226750/adapter-sac-12w-cho-iphone-ipad-ipod-apple-mgn03-280620-100653.jpg" onclick="return false;"><img alt="Adapter Sạc 12W dùng cho iPhone/iPad/iPod Apple MGN03 Trắng" src="https://cdn.tgdd.vn/Products/Images/58/226750/adapter-sac-12w-cho-iphone-ipad-ipod-apple-mgn03-280620-100653.jpg" /></a></p>

<h3>&nbsp;</h3>
',
            'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Model:
	<p><em>MGN03</em></p>
	</li>
	<li>Chức năng:
	<p><em>Sạc</em></p>
	</li>
	<li>Đầu ra:
	<p><em>USB: 5V - 2.4A</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>Mỹ</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Việt Nam / Trung Quốc (t&ugrave;y l&ocirc; h&agrave;ng)</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
            'details'=> '<h3>Adapter Sạc 12 W của&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai-apple" target="_blank">Apple</a>&nbsp;hỗ trợ sạc nhanh cho c&aacute;c thiết bị iPhone, iPad, iPod đang c&oacute; mặt tr&ecirc;n thị trường</h3>

<p><a href="https://www.thegioididong.com/images/58/226750/adapter-sac-12w-cho-iphone-ipad-ipod-apple-mgn03-280620-100646.jpg" onclick="return false;"><img alt="Adapter Sạc 12W dùng cho iPhone/iPad/iPod Apple MGN03 Trắng" src="https://cdn.tgdd.vn/Products/Images/58/226750/adapter-sac-12w-cho-iphone-ipad-ipod-apple-mgn03-280620-100646.jpg" /></a></p>

<p>Với kiểu d&aacute;ng được tối ưu gọn g&agrave;ng, tiện lợi cho người d&ugrave;ng mang theo,&nbsp;Adapter Sạc 12W d&ugrave;ng cho iPhone/iPad/iPod Apple MGN03 Trắng sẽ l&agrave; một trợ thủ cho c&aacute;c thiết bị iPhone, iPad, iPod.</p>

<p>&nbsp;</p>
',
            'slug'=>Str::slug('Adapter Sạc 12W dùng cho iPhone/iPad/iPod Apple MGN03 Trắng','-').'.aspx',
            'created_at'=>now(),

        ]);DB::table('products')->insert([
        'name'=>'Cáp sạc không dây Apple Watch Magnetic 1 m Apple MX2E2 Trắng',
        'price'=>790000,
        'old_price'=>990000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/58/215984/cap-sac-apple-watch-magnetic-1m-apple-mx2e2-1-600x600.jpg',
        'rate'=>400,
        'category_id'=>10,
        'brand_id'=>10,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>Giới thiệu sản phẩm</h3>

<p><a href="https://www.thegioididong.com/cap-dien-thoai-apple" target="_blank">C&aacute;p sạc Apple</a>&nbsp;với&nbsp;thiết kế gọn nhẹ,&nbsp;<strong>chiều d&agrave;i 1m</strong>&nbsp;thuận tiện đem theo b&ecirc;n m&igrave;nh c&ugrave;ng<strong>&nbsp;t&iacute;nh năng sạc cảm ứng</strong>&nbsp;gi&uacute;p bạn sạc&nbsp;<a href="https://www.thegioididong.com/dong-ho-thong-minh-apple" target="_blank">Apple Watch</a>&nbsp;ho&agrave;n to&agrave;n dễ d&agrave;ng.</p>

<p><a href="https://www.thegioididong.com/images/58/215984/cap-sac-apple-watch-magnetic-1m-apple-mx2e21.jpg" onclick="return false;"><img alt="Thiết kế nhỏ gọn, dễ dàng sử dụng - Cáp sạc Apple Watch Magnetic 1m Apple MX2E2 Trắng" src="https://cdn.tgdd.vn/Products/Images/58/215984/cap-sac-apple-watch-magnetic-1m-apple-mx2e21.jpg" /></a></p>

<p>Nam ch&acirc;m của Magnetic&nbsp;sẽ&nbsp;<strong>tự động h&uacute;t Apple Watch</strong>&nbsp;gi&uacute;p sạc dễ d&agrave;ng tiện lợi. Đặc biệt với&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai-cap-sac-apple-watch" target="_blank">d&acirc;y sạc Apple Watch</a>&nbsp;Magnetic bạn kh&ocirc;ng cần phải căn chỉnh ch&iacute;nh x&aacute;c, bạn chỉ cần đưa đưa lại gần Apple Watch.</p>

<p><a href="https://www.thegioididong.com/images/58/215984/cap-sac-apple-watch-magnetic-1m-apple-mx2e22.jpg" onclick="return false;"><img alt="Đầu nam châm tự động hút Apple Watch giúp sạc dễ dàng - Cáp sạc Apple Watch Magnetic 1m Apple MX2E2 Trắng" src="https://cdn.tgdd.vn/Products/Images/58/215984/cap-sac-apple-watch-magnetic-1m-apple-mx2e22.jpg" /></a></p>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>&nbsp;</h3>

<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Chức năng:
	<p><em>Sạc</em></p>
	</li>
	<li>Đầu v&agrave;o:
	<p><em>USB (Type-A)</em></p>
	</li>
	<li>Đầu ra:
	<p><em>Đế nam ch&acirc;m từ t&iacute;nh</em></p>
	</li>
	<li>Độ d&agrave;i d&acirc;y:
	<p><em>1 m</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>Mỹ</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Việt Nam/Trung Quốc (t&ugrave;y l&ocirc; h&agrave;ng)</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h3><a href="https://www.thegioididong.com/cap-dien-thoai" target="_blank">C&aacute;p sạc</a><strong>&nbsp;sử dụng cổng USB th&ocirc;ng dụng</strong>. C&oacute; thể sử dụng chung với&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai-adapter-cu-sac" target="_blank">củ sạc</a>&nbsp;hoặc&nbsp;<a href="https://www.thegioididong.com/sac-dtdd" target="_blank">sạc dự ph&ograve;ng</a>&nbsp;để nạp điện cho thiết bị của bạn.</h3>

<p><a href="https://www.thegioididong.com/images/58/215984/cap-sac-apple-watch-magnetic-1m-apple-mx2e23.jpg" onclick="return false;"><img alt="Đầu sạc USB thông dụng - Cáp sạc Apple Watch Magnetic 1m Apple MX2E2 Trắng" src="https://cdn.tgdd.vn/Products/Images/58/215984/cap-sac-apple-watch-magnetic-1m-apple-mx2e23.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/cap-dien-thoai/cap-sac-apple-watch-magnetic-1m-apple-mx2e2" target="_blank">C&aacute;p sạc Apple Watch Magnetic 1m Apple MX2E2 Trắng</a>&nbsp;với thiết kế trang nh&atilde; c&ugrave;ng t&iacute;nh năng sạc cảm ứng gi&uacute;p người d&ugrave;ng dễ d&agrave;ng sử dụng, loại bỏ được sự phức tạp ph&ugrave; hợp cho những người sử dụng Apple Watch.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Cáp sạc không dây Apple Watch Magnetic 1 m Apple MX2E2 Trắng','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Adapter Sạc Type-C 87W Apple MNF82 Trắng',
        'price'=>2490000,
        'old_price'=>2990000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/9499/209110/209110-600x600.jpg',
        'rate'=>400,
        'category_id'=>10,
        'brand_id'=>10,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>Giới thiệu sản phẩm</h3>

<h3><a href="https://www.thegioididong.com/cap-dien-thoai/adapter-type-c-87w-cho-ipad-macbook-apple-trang" target="_blank">Adapter Sạc Type-C 87W Apple MNF82 Trắng</a>&nbsp;c&oacute; thết kế đơn giản, nhỏ gọn, với logo Apple nằm giữa cho Adapter th&ecirc;m phần&nbsp;sang trọng hơn</h3>

<p><a href="https://www.thegioididong.com/images/58/209110/adapter-type-c-87w-cho-ipad-macbook-apple-trang-1-1.jpg" onclick="return false;"><img alt="Thiết kế nhỏ gọn, có thể gấp chuôi sạc lại tiện lợi - Adapter Sạc Type-C 87W Apple MNF82 Trắng" src="https://cdn.tgdd.vn/Products/Images/58/209110/adapter-type-c-87w-cho-ipad-macbook-apple-trang-1-1.jpg" /></a></p>

<h3><a href="https://www.thegioididong.com/adapter-sac" target="_blank">Adapter sạc</a>&nbsp;trang bị cổng sạc USB Type-C hiện đại, kết nối với&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai" target="_blank">c&aacute;p</a>&nbsp;2 đầu Type-C để sạc nhanh cho&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;của bạn</h3>

<p><a href="https://www.thegioididong.com/images/58/209110/adapter-type-c-87w-cho-ipad-macbook-apple-trang-fixx1.jpg" onclick="return false;"><img alt="Cổng sạc Type-C, sạc nhanh cho laptop - Adapter Sạc Type-C 87W Apple MNF82 Trắng" src="https://cdn.tgdd.vn/Products/Images/58/209110/adapter-type-c-87w-cho-ipad-macbook-apple-trang-fixx1.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>&nbsp;</h3>

<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Model:
	<p><em>MNF82</em></p>
	</li>
	<li>Chức năng:
	<p><em>Sạc</em></p>
	</li>
	<li>Đầu ra:
	<p><em>Type C: 87W</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>Mỹ</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Việt Nam / Trung Quốc (t&ugrave;y l&ocirc; h&agrave;ng)</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h3><a href="https://www.thegioididong.com/adapter-sac-apple" target="_blank">Adapter Apple</a>&nbsp;MNF82 tương th&iacute;ch với nhiều mẫu laptop v&agrave; c&aacute;c mẫu&nbsp;<a href="https://www.thegioididong.com/laptop-apple-macbook" target="_blank">MacBook</a>&nbsp;c&oacute; cổng&nbsp;Type-C, Thunderbolt 3 như:</h3>

<p>-&nbsp;MacBook&nbsp;(Retina, 12 inch, 2015 - 2017).</p>

<p>- MacBook Air (Retina, 13 inch, 2018 trở l&ecirc;n).</p>

<p>- MacBook Pro (13 inch, 2016 trở l&ecirc;n).</p>

<p>- MacBook Pro (15 inch, 2016 trở l&ecirc;n).</p>

<p><a href="https://www.thegioididong.com/images/58/209110/adapter-type-c-87w-cho-ipad-macbook-apple-trang-5.jpg" onclick="return false;"><img alt="Dùng cho MacBook, MacBook Pro, MacBook Air - Adapter Sạc Type-C 87W Apple MNF82 Trắng" src="https://cdn.tgdd.vn/Products/Images/58/209110/adapter-type-c-87w-cho-ipad-macbook-apple-trang-5.jpg" /></a></p>

<h3>Gi&uacute;p cho thiết bị th&ocirc;ng minh của bạn nhanh ch&oacute;ng đầy pin với c&ocirc;ng suất sạc l&ecirc;n đến 87W, tiết kiệm thời gian sạc pin một c&aacute;ch hiệu quả</h3>

<p><a href="https://www.thegioididong.com/images/58/209110/adapter-type-c-87w-cho-ipad-macbook-apple-trang-fixx3.jpg" onclick="return false;"><img alt="Sạc nhanh với với 87 W - Adapter Sạc Type-C 87W Apple MNF82 Trắng" src="https://cdn.tgdd.vn/Products/Images/58/209110/adapter-type-c-87w-cho-ipad-macbook-apple-trang-fixx3.jpg" /></a></p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Sạc không dây xe hơi 20W Xiaomi GDS4127GL Đen',
        'price'=>120000,
        'old_price'=>1390000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/9499/226548/sac-khong-day-xe-hoi-20w-xiaomi-gds4127gl-den-18-600x600.jpg',
        'rate'=>400,
        'category_id'=>10,
        'brand_id'=>4,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>Giới thiệu sản phẩm</h3>

<h3><a href="https://www.thegioididong.com/cap-dien-thoai/sac-khong-day-xe-hoi-20w-xiaomi-gds4127gl-den" target="_blank">Sạc kh&ocirc;ng d&acirc;y xe hơi 20W Xiaomi GDS4127GL Đen</a>&nbsp;thiết kế 2 trong 1 với chức năng kẹp điện thoại v&agrave; sạc kh&ocirc;ng d&acirc;y d&ugrave;ng tr&ecirc;n &ocirc; t&ocirc;</h3>

<p>Kiểu d&aacute;ng gọn g&agrave;ng, sang trọng, đ&egrave;n b&aacute;o cảm ứng tinh tế, đẹp mắt trong kh&ocirc;ng gian nội thất &ocirc; t&ocirc;.</p>

<p><a href="https://www.thegioididong.com/images/58/226548/sac-khong-day-xe-hoi-20w-xiaomi-gds4127gl-den-064420-044433.jpg" onclick="return false;"><img alt="Sạc không dây cho ô tô - Sạc không dây xe hơi 20W Xiaomi GDS4127GL Đen" src="https://cdn.tgdd.vn/Products/Images/58/226548/sac-khong-day-xe-hoi-20w-xiaomi-gds4127gl-den-064420-044433.jpg" /></a></p>

<h3>Lắp đặt dễ d&agrave;ng với đế kẹp chắc chắn cố định được tr&ecirc;n nhiều vị tr&iacute;, đế đệm phẳng tiếp x&uacute;c an to&agrave;n v&agrave; k&iacute;n chặt với thiết bị</h3>

<p>Bạn c&oacute; thể sử dụng đế kẹp l&ecirc;n gi&aacute; đỡ, cửa th&ocirc;ng gi&oacute;, hoặc d&ugrave;ng đế đệm phẳng để đặt l&ecirc;n c&aacute;c vị tr&iacute;, kh&ocirc;ng gian của nhiều loại xe kh&aacute;c nhau.</p>

<p><a href="https://www.thegioididong.com/images/58/226548/sac-khong-day-xe-hoi-20w-xiaomi-gds4127gl-den-065120-045149.jpg" onclick="return false;"><img alt="Dễ lắp đặt - Sạc không dây xe hơi 20W Xiaomi GDS4127GL Đen" src="https://cdn.tgdd.vn/Products/Images/58/226548/sac-khong-day-xe-hoi-20w-xiaomi-gds4127gl-den-065120-045149.jpg" /></a></p>

<h3>Gi&aacute; đỡ với mặt k&iacute;nh 2.5D s&aacute;ng b&oacute;ng, tiếp x&uacute;c an to&agrave;n với điện thoại, tr&aacute;nh trầy xước, tay kẹp cố định điện thoại chắc chắn</h3>

<p>Đặc biệt,&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai-sac-khong-day" target="_blank">sạc kh&ocirc;ng d&acirc;y</a>&nbsp;c&oacute; tay kẹp với cơ chế đ&oacute;ng mở cảm biến tự động nhạy b&eacute;n. Khi người d&ugrave;ng đưa điện thoại lại gần, cảm biến sẽ tự động mở 2 m&aacute; kẹp ra để đặt điện thoại v&agrave;o, chỉ cần k&eacute;o nhẹ l&agrave; 2 m&aacute; kẹp sẽ tự động mở ra.</p>

<p>Gi&aacute; kẹp cho khả năng mở rộng l&ecirc;n đến 81.5 mm d&ugrave;ng tốt với mọi điện thoại th&ocirc;ng minh hiện nay.</p>

<p><a href="https://www.thegioididong.com/images/58/226548/sac-khong-day-xe-hoi-20w-xiaomi-gds4127gl-den-065120-045154.jpg" onclick="return false;"><img alt="Tiện dụng - Sạc không dây xe hơi 20W Xiaomi GDS4127GL Đen" src="https://cdn.tgdd.vn/Products/Images/58/226548/sac-khong-day-xe-hoi-20w-xiaomi-gds4127gl-den-065120-045154.jpg" /></a></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Model:
	<p><em>GDS4127GL</em></p>
	</li>
	<li>Chức năng:
	<p><em>Sạc</em></p>
	</li>
	<li>Đầu ra:
	<p><em>Kh&ocirc;ng d&acirc;y: 20W Max</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>Trung Quốc</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Trung Quốc</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h3>T&iacute;ch hợp sạc nhanh kh&ocirc;ng d&acirc;y tối đa 20 W, nhanh ch&oacute;ng nạp đầy pin cho điện thoại</h3>

<p>Sản phẩm tương th&iacute;ch với hầu hết c&aacute;c thiết bị hỗ trợ sạc kh&ocirc;ng d&acirc;y th&ocirc;ng qua chuẩn sạc Qi. Khoảng c&aacute;ch cảm biến sạc kh&ocirc;ng d&acirc;y l&ecirc;n đến 4 mm, cho đường truyền sạc ổn định cả khi điện thoại c&oacute; d&ugrave;ng ốp lưng.</p>

<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/hoi-dap/chuan-sac-qi-la-gi-nhung-thiet-bi-nao-ho-tro-sac-k-1139025" target="_blank">T&igrave;m hiểu về chuẩn sạc kh&ocirc;ng d&acirc;y Qi v&agrave; c&aacute;c thiết bị c&oacute; hỗ trợ Qi</a>.</p>

<p><a href="https://www.thegioididong.com/images/58/226548/sac-khong-day-xe-hoi-20w-xiaomi-gds4127gl-den-064420-044446.jpg" onclick="return false;"><img alt="Nạp pin nhanh cho điện thoại - Sạc không dây xe hơi 20W Xiaomi GDS4127GL Đen" src="https://cdn.tgdd.vn/Products/Images/58/226548/sac-khong-day-xe-hoi-20w-xiaomi-gds4127gl-den-064420-044446.jpg" /></a></p>

<h3>Đầu v&agrave;o USB-C sạc nhanh th&ocirc;ng dụng dễ d&agrave;ng để sử dụng với c&aacute;p sạc đi k&egrave;m</h3>

<p><a href="https://www.thegioididong.com/images/58/226548/sac-khong-day-xe-hoi-20w-xiaomi-gds4127gl-den-064420-044451.jpg" onclick="return false;"><img alt="Cấp nguồn đơn giản - Sạc không dây xe hơi 20W Xiaomi GDS4127GL Đen" src="https://cdn.tgdd.vn/Products/Images/58/226548/sac-khong-day-xe-hoi-20w-xiaomi-gds4127gl-den-064420-044451.jpg" /></a></p>

<p>T&oacute;m lại,&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai-xiaomi" target="_blank">sạc kh&ocirc;ng d&acirc;y xe hơi Xiaomi</a>&nbsp;GDS4127GL Đen, phụ kiện tiện &iacute;ch 2 trong 1 khi d&ugrave;ng smartphone tr&ecirc;n xe &ocirc; t&ocirc;, th&ecirc;m an to&agrave;n cho người cầm l&aacute;i.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Sạc không dây xe hơi 20W Xiaomi GDS4127GL Đen','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Sạc xe hơi 2 cổng 2.4A Xiaomi GDS4104GL Xám đen',
        'price'=>240000,
        'old_price'=>290000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/9499/223894/sac-xe-hoi-2-cong-24a-xiaomi-gds4104gl-xam-den-600x600.jpg',
        'rate'=>400,
        'category_id'=>10,
        'brand_id'=>4,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>Giới thiệu sản phẩm</h3>

<p><a href="https://www.thegioididong.com/cap-dien-thoai-sac-xe-hoi" target="_blank">Sạc xe hơi</a>&nbsp;chuy&ecirc;n dụng c&oacute;&nbsp;thiết kế nhẹ gọn, m&agrave;u x&aacute;m đen sang trọng, hiện đại</p>

<p>Với k&iacute;ch cỡ nhỏ nhắn, tiện cầm nắm, sản phẩm di chuyển, cất giữ linh hoạt, sử dụng sạc pin cho nhiều thiết bị từ&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank">điện thoại</a>,&nbsp;<a href="https://www.thegioididong.com/may-tinh-bang" target="_blank">tablet</a>, m&aacute;y ảnh kỹ thuật số đến m&aacute;y chơi game Console.</p>

<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/hoi-dap/chon-cap-sac-phu-hop-cho-dien-thoai-1020035" target="_blank">Chọn c&aacute;p sạc ph&ugrave; hợp cho điện thoại th&ocirc;ng minh</a></p>

<p><a href="https://www.thegioididong.com/images/58/223894/sac-xe-hoi-2-cong-24a-xiaomi-gds4104gl-xam-den-1-1.jpg" onclick="return false;"><img alt="Sạc xe hơi 2 cổng 2.4A Xiaomi GDS4104GL Xám đen - Thiết kế nhẹ gọn" src="https://cdn.tgdd.vn/Products/Images/58/223894/sac-xe-hoi-2-cong-24a-xiaomi-gds4104gl-xam-den-1-1.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/images/58/223894/sac-xe-hoi-2-cong-24a-xiaomi-gds4104gl-xam-den-2-1.jpg" onclick="return false;"><img alt="Sạc xe hơi 2 cổng 2.4A Xiaomi GDS4104GL Xám đen - Sạc cho nhiều thiết bị" src="https://cdn.tgdd.vn/Products/Images/58/223894/sac-xe-hoi-2-cong-24a-xiaomi-gds4104gl-xam-den-2-1.jpg" /></a></p>

<h3>Sạc đồng thời 2 thiết bị với 2 cổng USB 2.4A&nbsp;</h3>

<p>Sản phẩm ph&ugrave; hợp với nhiều loại&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai" target="_blank">c&aacute;p sạc</a>&nbsp;kh&aacute;c nhau, sạc c&ugrave;ng l&uacute;c 2 thiết bị với 2 cổng 5V - 2.4A, cũng c&oacute; thể sạc ri&ecirc;ng lẻ từng cổng 5V - 2.4A, 9V - 2A v&agrave; 12V - 1.5A, t&ugrave;y nhu cầu.</p>

<p>Adapter sạc sử dụng tốt với nhiều d&ograve;ng xe hơi nhờ đầu v&agrave;o 12/24V.</p>

<p><a href="https://www.thegioididong.com/images/58/223894/sac-xe-hoi-2-cong-24a-xiaomi-gds4104gl-xam-den-3-1.jpg" onclick="return false;"><img alt="Sạc xe hơi 2 cổng 2.4A Xiaomi GDS4104GL Xám đen - Sạc đồng thời 2 thiết bị" src="https://cdn.tgdd.vn/Products/Images/58/223894/sac-xe-hoi-2-cong-24a-xiaomi-gds4104gl-xam-den-3-1.jpg" /></a></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '',
        'details'=> '<h3>Cắm Adapter v&agrave;o đầu lấy điện/tẩu thuốc l&aacute; tr&ecirc;n xe hơi nhanh ch&oacute;ng, đơn giản</h3>

<p>Sạc xe hơi sử dụng nguồn điện từ m&aacute;y ph&aacute;t điện của xe khi bạn nổ m&aacute;y hay khi tắt m&aacute;y nhưng vẫn mở kh&oacute;a điện.</p>

<p><strong>Lưu &yacute;:&nbsp;</strong>Trường hợp bạn<strong>&nbsp;</strong>mở kh&oacute;a điện m&agrave; kh&ocirc;ng nổ m&aacute;y, Adapter sẽ chuyển sang lấy điện từ bộ ắc-quy n&ecirc;n cần tr&aacute;nh sạc như vậy, chỉ n&ecirc;n sạc trong trường hợp khẩn cấp.</p>

<p><a href="https://www.thegioididong.com/images/58/223894/sac-xe-hoi-2-cong-24a-xiaomi-gds4104gl-xam-den-5-1.jpg" onclick="return false;"><img alt="Sạc xe hơi 2 cổng 2.4A Xiaomi GDS4104GL Xám đen - Cắm Adapter vào đầu lấy điện/tẩu thuốc lá trên xe hơi" src="https://cdn.tgdd.vn/Products/Images/58/223894/sac-xe-hoi-2-cong-24a-xiaomi-gds4104gl-xam-den-5-1.jpg" /></a></p>

<h3><a href="https://www.thegioididong.com/cap-dien-thoai-xiaomi-sac-xe-hoi" target="_blank">Sạc xe hơi Xiaomi</a>&nbsp;dễ d&agrave;ng cắm sạc với đ&egrave;n LED chiếu s&aacute;ng r&otilde; r&agrave;ng, tiện quan s&aacute;t v&agrave; t&igrave;m kiếm vị tr&iacute; cổng sạc</h3>

<p><a href="https://www.thegioididong.com/images/58/223894/sac-xe-hoi-2-cong-24a-xiaomi-gds4104gl-xam-den-4-1.jpg" onclick="return false;"><img alt="Sạc xe hơi 2 cổng 2.4A Xiaomi GDS4104GL Xám đen - Dễ dàng cắm sạc với đèn LED chiếu sáng rõ ràng" src="https://cdn.tgdd.vn/Products/Images/58/223894/sac-xe-hoi-2-cong-24a-xiaomi-gds4104gl-xam-den-4-1.jpg" /></a></p>

<p>T&oacute;m lại,&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai/sac-xe-hoi-2-cong-24a-xiaomi-gds4104gl-xam-den" target="_blank">Sạc xe hơi 2 cổng 2.4A Xiaomi GDS4104GL X&aacute;m đen</a>&nbsp;đến từ thương hiệu điện tử danh tiếng Xiaomi của Trung Quốc với mẫu m&atilde; thời trang, dễ sạc pin c&aacute;c thiết bị tr&ecirc;n xe hơi, tiện dụng, xứng đ&aacute;ng được mọi người chọn mua v&agrave; sử dụng hằng ng&agrave;y.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Sạc xe hơi 2 cổng 2.4A Xiaomi GDS4104GL Xám đen','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Adapter Sạc 45W Apple MacBook Air MC747',
        'price'=>2390000,
        'old_price'=>2590000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/9499/92799/adapter-sac-macbook-air-magsafe-45w-apple-mc747-tr-avatar-1-1-600x600.jpg',
        'rate'=>400,
        'category_id'=>10,
        'brand_id'=>10,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>Giới thiệu sản phẩm</h3>

<h3><a href="https://www.thegioididong.com/adapter-sac" target="_blank">Adapter sạc</a>&nbsp;MC747 chuy&ecirc;n dụng cho Macbook Air, ph&ugrave; hợp cho c&aacute;c d&ograve;ng m&aacute;y</h3>

<p>- MacBook Air (13 inch, Mid 2011).</p>

<p>- MacBook Air (11 inch, Mid 2011).</p>

<p>- MacBook Air (13 inch, Late 2010).</p>

<p>- MacBook Air (11 inch, Late 2010).</p>

<p>- MacBook Air (Mid 2009).</p>

<p>- MacBook Air (Late 2008).</p>

<p>- MacBook Air (Nguy&ecirc;n bản).</p>

<p>&nbsp;</p>
<p><a href="https://www.thegioididong.com/images/58/92799/adapter-sac-macbook-air-magsafe-45w-apple-mc747-tr-2-2.jpg" onclick="return false;"><img alt="Adapter Sạc 45W Apple MacBook Air MC747 dành cho Macbook Air" src="https://cdn.tgdd.vn/Products/Images/58/92799/adapter-sac-macbook-air-magsafe-45w-apple-mc747-tr-2-2.jpg" /></a></p>

<h3><a href="https://www.thegioididong.com/cap-dien-thoai/adapter-sac-macbook-air-magsafe-45w-apple-mc747-tr" target="_blank">Adapter Sạc 45W Apple MacBook Air MC747</a>&nbsp;c&oacute; thiết kế gọn g&agrave;ng, với hai ch&acirc;n sạc c&oacute; thể gập lại gi&uacute;p bạn dễ d&agrave;ng cất v&agrave;o balo v&agrave; mang đi</h3>

<p><a href="https://www.thegioididong.com/images/58/92799/adapter-sac-macbook-air-magsafe-45w-apple-mc747-tr-1-1.jpg" onclick="return false;"><img alt="Adapter Sạc 45W Apple MacBook Air MC747 có thiết kế thông minh" src="https://cdn.tgdd.vn/Products/Images/58/92799/adapter-sac-macbook-air-magsafe-45w-apple-mc747-tr-1-1.jpg" /></a></p>

<h3>&nbsp;Đầu kết nối MagSafe (h&iacute;t nam ch&acirc;m với m&aacute;y) gi&uacute;p c&aacute;p khi sạc kh&oacute; rớt ra, dễ d&agrave;ng sử dụng trong b&oacute;ng tối</h3>

<p><a href="https://www.thegioididong.com/images/58/92799/adapter-sac-macbook-air-magsafe-45w-apple-mc747-tr-4-1.jpg" onclick="return false;"><img alt="Adapter Sạc 45W Apple MacBook Air MC747 có cổng kết nối Magsafe" src="https://cdn.tgdd.vn/Products/Images/58/92799/adapter-sac-macbook-air-magsafe-45w-apple-mc747-tr-4-1.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '',
        'details'=> '<h3><a href="https://www.thegioididong.com/adapter-sac-apple" target="_blank">Sạc Apple</a>&nbsp;trang bị cảm ứng từ t&iacute;nh, khi chạm tay v&agrave;o Jack sạc sẽ tự động ngắt điện, an to&agrave;n cho người d&ugrave;ng, đ&aacute;p ứng c&aacute;c ti&ecirc;u chuẩn khắt khe của &Acirc;u ch&acirc;u</h3>

<p><a href="https://www.thegioididong.com/images/58/92799/adapter-sac-macbook-air-magsafe-45w-apple-mc747-tr-5-1.jpg" onclick="return false;"><img alt="Adapter Sạc 45W Apple MacBook Air MC747 an toàn cho người dùng" src="https://cdn.tgdd.vn/Products/Images/58/92799/adapter-sac-macbook-air-magsafe-45w-apple-mc747-tr-5-1.jpg" /></a></p>

<h3>C&ocirc;ng suất 45 W cho tốc độ sạc nhanh v&agrave; ổn định, tiết kiệm thời gian khi sạc</h3>

<p><a href="https://www.thegioididong.com/images/58/92799/adapter-sac-macbook-air-magsafe-45w-apple-mc747-tr5.jpg" onclick="return false;"><img alt="Adapter Sạc 45W MacBook Air MC747 sạc nhanh, ổn định" src="https://cdn.tgdd.vn/Products/Images/58/92799/adapter-sac-macbook-air-magsafe-45w-apple-mc747-tr5.jpg" /></a></p>

<h3>Đ&egrave;n Led th&ocirc;ng minh nằm ở vị tr&iacute; đầu của kết nối DC, khi đ&egrave;n s&aacute;ng xanh, b&aacute;o hiệu thiết bị của bạn đ&atilde; đầy pin</h3>

<p><a href="https://www.thegioididong.com/images/58/92799/adapter-sac-macbook-air-magsafe-45w-apple-mc747-tr-3-2.jpg" onclick="return false;"><img alt="Adapter Sạc 45W Apple MacBook Air MC747 có đèn Led tiện lợi" src="https://cdn.tgdd.vn/Products/Images/58/92799/adapter-sac-macbook-air-magsafe-45w-apple-mc747-tr-3-2.jpg" /></a></p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Adapter Sạc 45W Apple MacBook Air MC747','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Adapter sạc 5W Apple iPhone MD813ZM-A',
        'price'=>400000,
        'old_price'=>500000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/9499/76056/adapter-sac-5w-iphone-ipad-ipod-apple-md813zma-6-600x600.jpg',
        'rate'=>400,
        'category_id'=>10,
        'brand_id'=>10,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>&nbsp;</h3>

<h3>Giới thiệu sản phẩm</h3>

<h3><a href="https://www.thegioididong.com/adapter-sac" target="_blank">Adapter&nbsp;sạc</a>&nbsp;5 W với thiết kế si&ecirc;u gọn nhẹ, thuận tiện mang theo mọi l&uacute;c mọi nơi</h3>

<p><a href="https://www.thegioididong.com/images/58/76056/adapter-sac-5w-iphone-ipad-ipod-apple-md813zma-3.jpg" onclick="return false;"><img alt="Adapter sạc 5W Apple iPhone MD813ZM-A - Thiết kế nhỏ gọn, thuận tiện cho việc mang theo" src="https://cdn.tgdd.vn/Products/Images/58/76056/adapter-sac-5w-iphone-ipad-ipod-apple-md813zma-3.jpg" /></a></p>

<h3><a href="https://www.thegioididong.com/cap-dien-thoai/adapter-sac-5w-iphone-ipad-ipod-apple-md813zma" target="_blank">Adapter sạc 5W Apple iPhone MD813ZM-A</a>&nbsp;tương th&iacute;ch hầu hết mọi&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai" target="_blank">c&aacute;p sạc</a>&nbsp;phổ biến như: Lightning, Micro USB, Type-C,...</h3>

<p><a href="https://www.thegioididong.com/images/58/76056/adapter-sac-5w-iphone-ipad-ipod-apple-md813zma-4.jpg" onclick="return false;"><img alt="Adapter sạc 5W Apple iPhone MD813ZM-A - Tương thích tất cả cáp sạc" src="https://cdn.tgdd.vn/Products/Images/58/76056/adapter-sac-5w-iphone-ipad-ipod-apple-md813zma-4.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Model:
	<p><em>MD813ZM-A</em></p>
	</li>
	<li>Chức năng:
	<p><em>Sạc</em></p>
	</li>
	<li>Đầu ra:
	<p><em>USB: 5V - 1A</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>Mỹ</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Việt Nam / Trung Quốc (t&ugrave;y l&ocirc; h&agrave;ng)</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h3>&nbsp;</h3>

<h3>Sử dụng được với&nbsp;<a href="https://www.thegioididong.com/dtdd-apple-iphone" target="_blank">iPhone</a>,&nbsp;<a href="https://www.thegioididong.com/may-tinh-bang-apple-ipad" target="_blank">iPad</a>, iPod của Apple. D&ograve;ng điện ra ổn định, đ&aacute;p ứng được c&aacute;c ti&ecirc;u chuẩn khắt khe</h3>

<p>Ngo&agrave;i sạc cho c&aacute;c sản phẩm của Apple bạn c&oacute; thể d&ugrave;ng&nbsp;<a href="https://www.thegioididong.com/adapter-sac-apple" target="_blank">Adapter Apple</a>&nbsp;để sạc pin cho hầu hết&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank">điện thoại</a>,&nbsp;<a href="https://www.thegioididong.com/may-tinh-bang" target="_blank">m&aacute;y t&iacute;nh bảng</a>,&nbsp;<a href="https://www.thegioididong.com/sac-dtdd" target="_blank">pin sạc dự ph&ograve;ng</a>,... với c&ocirc;ng suất 5W d&ograve;ng ra tối đa 1A.</p>

<p>&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/58/76056/adapter-sac-5w-iphone-ipad-ipod-apple-md813zma-fix.jpg" onclick="return false;"><img alt="Adapter sạc 5W Apple iPhone MD813ZM-A - Sạc được hầu hết mọi thiết bị" src="https://cdn.tgdd.vn/Products/Images/58/76056/adapter-sac-5w-iphone-ipad-ipod-apple-md813zma-fix.jpg" /></a></p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Adapter sạc 5W Apple iPhone MD813ZM-A','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Adapter sạc 12W Apple MD836ZM',
        'price'=>450000,
        'old_price'=>550000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/9499/76055/adapter-sac-12w-iphone-ipad-ipod-apple-md836zm-a-8-600x600.jpg',
        'rate'=>400,
        'category_id'=>10,
        'brand_id'=>10,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>Giới thiệu sản phẩm</h3>

<h3><a href="https://www.thegioididong.com/adapter-sac" target="_blank">Adapter</a>&nbsp;thiết kế nhỏ gọn,&nbsp;tiết kiệm kh&ocirc;ng gian trong balo, t&uacute;i x&aacute;ch, tr&ecirc;n b&agrave;n học hay b&agrave;n l&agrave;m việc, d&ugrave;ng mọi l&uacute;c mọi nơi.</h3>

<p><a href="https://www.thegioididong.com/images/58/76055/adapter-sac-12w-iphone-ipad-ipod-apple-md836zm-a-5.jpg" onclick="return false;"><img alt="Thuận lợi mang theo với thiết kế nhỏ gọn - Adapter sạc 12W Apple MD836ZM" src="https://cdn.tgdd.vn/Products/Images/58/76055/adapter-sac-12w-iphone-ipad-ipod-apple-md836zm-a-5.jpg" /></a></p>

<h3>C&ocirc;ng suất sạc 12W,&nbsp;<a href="https://www.thegioididong.com/adapter-sac-apple" target="_blank">Adapter Apple</a>&nbsp;ph&ugrave; hợp với mọi d&ograve;ng&nbsp;<a href="https://www.thegioididong.com/dtdd-apple-iphone" target="_blank">iPhone</a>,&nbsp;<a href="https://www.thegioididong.com/may-tinh-bang-apple-ipad" target="_blank">iPad</a>, iPod</h3>

<p><a href="https://www.thegioididong.com/images/58/76055/adapter-sac-12w-iphone-ipad-ipod-apple-md836zm-a-6.jpg" onclick="return false;"><img alt="Phù hợp với hầu hết các dòng iPhone, iPad, iPod - Adapter sạc 12W Apple MD836ZM" src="https://cdn.tgdd.vn/Products/Images/58/76055/adapter-sac-12w-iphone-ipad-ipod-apple-md836zm-a-6.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '',
        'details'=> '<h3>Cổng USB th&ocirc;ng dụng gi&uacute;p&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai/adapter-sac-12w-iphone-ipad-ipod-apple-md836zm-a#3" target="_blank">Adapter sạc 12W Apple MD836ZM</a>&nbsp;kết nối được nhiều loại&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai" target="_blank">c&aacute;p sạc</a>&nbsp;kh&aacute;c nhau, hỗ trợ sạc pin cho&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank">điện thoại</a>,&nbsp;<a href="https://www.thegioididong.com/may-tinh-bang" target="_blank">m&aacute;y t&iacute;nh bảng</a>&nbsp;tương th&iacute;ch</h3>

<p><a href="https://www.thegioididong.com/images/58/76055/adapter-sac-12w-iphone-ipad-ipod-apple-md836zm-a-7.jpg" onclick="return false;"><img alt="Kết nối được nhiều cáp sạc khác nhau - Adapter sạc 12W Apple iPad MD836ZM" src="https://cdn.tgdd.vn/Products/Images/58/76055/adapter-sac-12w-iphone-ipad-ipod-apple-md836zm-a-7.jpg" /></a></p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Adapter sạc 12W Apple MD836ZM','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Adapter sạc 45W Apple MacBook Air D592 Trắng',
        'price'=>2490000,
        'old_price'=>3090000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/9499/89579/adapter-sac-macbook-air-45w-apple-d592-trang-avatar-1-1-600x600.jpg',
        'rate'=>400,
        'category_id'=>10,
        'brand_id'=>10,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>Giới thiệu sản phẩm</h3>

<h3><a href="https://www.thegioididong.com/adapter-sac" target="_blank">Adapter sạc</a>&nbsp;D592 chuy&ecirc;n dụng cho MacBook Air, ph&ugrave; hợp cho c&aacute;c d&ograve;ng m&aacute;y</h3>

<p>- MacBook Air (13 inch, 2017).</p>

<p>- MacBook Air (11 inch, Early 2015).</p>

<p>- MacBook Air (13 inch, Early 2015).</p>

<p>- MacBook Air (11 inch, Early 2014).</p>

<p>- MacBook Air (13 inch, Early 2014).</p>

<p>- MacBook Air (11 inch, Mid 2013).</p>

<p>- MacBook Air (13 inch, Mid 2013).</p>

<p>- MacBook Air (11 inch, Mid 2012).</p>

<p>- MacBook Air (13 inch, Mid 2012).</p>

<p><a href="https://www.thegioididong.com/images/58/89579/adapter-sac-macbook-air-45w-apple-d592-trang1-1.jpg" onclick="return false;"><img alt="Adapter sạc 45W Apple MacBook Air D592 dùng cho MacBook Air" src="https://cdn.tgdd.vn/Products/Images/58/89579/adapter-sac-macbook-air-45w-apple-d592-trang1-1.jpg" /></a></p>

<h3><a href="https://www.thegioididong.com/cap-dien-thoai/adapter-sac-macbook-air-45w-apple-d592-trang" target="_blank">Adapter sạc 45W Apple MacBook Air D592</a>&nbsp;l&agrave; sản phẩm ch&iacute;nh h&atilde;ng c&oacute; thiết kế nhỏ gọn, kh&ocirc;ng chiếm nhiều diện t&iacute;ch, c&oacute; thể cuộn lại gọn g&agrave;ng v&agrave; dễ d&agrave;ng mang theo</h3>

<p><a href="https://www.thegioididong.com/images/58/89579/adapter-sac-macbook-air-45w-apple-d592-trang2.jpg" onclick="return false;"><img alt="Adapter sạc 45W Apple MacBook Air D592 dễ mang theo" src="https://cdn.tgdd.vn/Products/Images/58/89579/adapter-sac-macbook-air-45w-apple-d592-trang2.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>&nbsp;</h3>

<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Model:
	<p><em>D592</em></p>
	</li>
	<li>Chức năng:
	<p><em>Sạc</em></p>
	</li>
	<li>Đầu ra:
	<p><em>MagSafe: 45W</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>Mỹ</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Việt Nam / Trung Quốc (t&ugrave;y l&ocirc; h&agrave;ng)</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h3><a href="https://www.thegioididong.com/adapter-sac-apple" target="_blank">Adapter sạc Apple</a>&nbsp;c&oacute; đầu kết nối MagSafe (h&iacute;t nam ch&acirc;m với m&aacute;y) gi&uacute;p c&aacute;p khi sạc kh&oacute; rớt ra</h3>

<p><a href="https://www.thegioididong.com/images/58/89579/adapter-sac-macbook-air-45w-apple-d592-trang3-1.jpg" onclick="return false;"><img alt="Adapter sạc 45W Apple MacBook Air D592 có kết nối MagSafe" src="https://cdn.tgdd.vn/Products/Images/58/89579/adapter-sac-macbook-air-45w-apple-d592-trang3-1.jpg" /></a></p>

<h3>Trang bị cảm ứng từ t&iacute;nh, khi bạn chạm tay v&agrave;o chỗ jack đang kết nối sẽ tự động ngắt điện, đ&aacute;p ứng c&aacute;c ti&ecirc;u chuẩn khắt khe của ch&acirc;u &Acirc;u<a href="https://www.thegioididong.com/images/58/89579/adapter-sac-macbook-air-45w-apple-d592-trang4-1.jpg" onclick="return false;"><img alt="Adapter sạc 45W Apple MacBook Air D592 an toàn cho người dùng" src="https://cdn.tgdd.vn/Products/Images/58/89579/adapter-sac-macbook-air-45w-apple-d592-trang4-1.jpg" /></a></h3>

<h3>C&ocirc;ng suất 45 W cho tốc độ sạc nhanh ch&oacute;ng v&agrave; ổn định</h3>

<p><a href="https://www.thegioididong.com/images/58/89579/adapter-sac-macbook-air-45w-apple-d592-trang5.jpg" onclick="return false;"><img alt="Adapter sạc 45W Apple MacBook Air D592 sạc nhanh chóng, ổn định" src="https://cdn.tgdd.vn/Products/Images/58/89579/adapter-sac-macbook-air-45w-apple-d592-trang5.jpg" /></a></p>

<h3>Đ&egrave;n Led th&ocirc;ng minh nằm ở vị tr&iacute; đầu của kết nối DC&nbsp;sẽ s&aacute;ng gi&uacute;p th&ocirc;ng b&aacute;o t&igrave;nh trạng pin, khi đ&egrave;n chuyển m&agrave;u xanh l&agrave; b&aacute;o hiệu thiết bị đ&atilde; được sạc đầy</h3>

<p><a href="https://www.thegioididong.com/images/58/89579/adapter-sac-macbook-air-45w-apple-d592-trang2-1.jpg" onclick="return false;"><img alt="Adapter sạc 45W Apple MacBook Air D592 cò đèn Led tiện lợi" src="https://cdn.tgdd.vn/Products/Images/58/89579/adapter-sac-macbook-air-45w-apple-d592-trang2-1.jpg" /></a></p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Adapter sạc 45W Apple MacBook Air D592 Trắng','-').'.aspx',
        'created_at'=>now(),

    ]);
    DB::table('products')->insert([
        'name'=>'Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL',
        'price'=>90000,
        'old_price'=>90000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-ava-1-600x600.jpg',
        'rate'=>400,
        'category_id'=>11,
        'brand_id'=>4,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>Giới thiệu sản phẩm</h3>

<h3>Thiết kế nhỏ gọn, ph&ugrave; hợp với nhiều k&iacute;ch cỡ tai</h3>

<p><a href="https://www.thegioididong.com/tai-nghe/bluetooth-tws-xiaomi-earbuds-basic-2" target="_blank">Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL</a>&nbsp;c&oacute; k&iacute;ch thước nhỏ gọn chỉ nặng&nbsp;<strong>4.1 g&nbsp;</strong>kh&ocirc;ng hề nặng tai khi sử dụng l&acirc;u. Tai nghe tặng k&egrave;m<strong>&nbsp;3 n&uacute;t đệm tai&nbsp;</strong>với k&iacute;ch thước kh&aacute;c nhau gi&uacute;p bạn dễ d&agrave;ng lựa chọn ph&ugrave; hợp với tai tr&aacute;nh lỏng lẻo, rơi rớt.</p>

<p><a href="https://www.thegioididong.com/images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-1.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL-Thiết kế" src="https://cdn.tgdd.vn/Products/Images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-1.jpg" /></a></p>

<h3>&Acirc;m thanh r&otilde; r&agrave;ng, s&acirc;u lắng</h3>

<p>M&agrave;ng loa của&nbsp;<a href="https://www.thegioididong.com/tai-nghe" target="_blank">tai nghe&nbsp;</a>c&oacute; k&iacute;ch thước<strong>&nbsp;7.2 mm</strong>&nbsp;cho &acirc;m bass c&aacute;c th&ecirc;m d&agrave;y v&agrave; s&acirc;u, bạn c&oacute; thể tận hưởng c&aacute;c bản nhạc EDM, Pop, Rock,... một c&aacute;ch trọn vẹn kh&ocirc;ng bị nửa vời.</p>

<p><a href="https://www.thegioididong.com/images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-2-1.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL- Thiết kế" src="https://cdn.tgdd.vn/Products/Images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-2-1.jpg" /></a></p>

<h3>Bắt trọn &acirc;m thanh với c&ocirc;ng nghệ khử tiếng ồn DSP</h3>

<p><a href="https://www.thegioididong.com/tai-nghe-xiaomi-bluetooth" target="_blank">Tai nghe Bluetooth Xiaomi</a>&nbsp;sử dụng c&ocirc;ng nghệ&nbsp;<strong>lọc &acirc;m, khử ồn DSP</strong>. C&ocirc;ng nghệ n&agrave;y sẽ ph&acirc;n t&iacute;ch v&agrave; loại bỏ c&aacute;c t&iacute;n hiệu nhiễu gi&uacute;p bạn thưởng thức &acirc;m nhạc tuyệt vời, tập trung v&agrave;o cuộc đ&agrave;m thoại hơn. Nghe gọi dễ d&agrave;ng với micro được t&iacute;ch hợp tr&ecirc;n tai nghe.</p>

<p><a href="https://www.thegioididong.com/images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-3.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL- DSP" src="https://cdn.tgdd.vn/Products/Images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-3.jpg" /></a></p>

<h3>Y&ecirc;n t&acirc;m sử dụng với&nbsp;<a href="https://www.thegioididong.com/tai-nghe-chong-nuoc" target="_blank">khả năng chống nước</a>&nbsp;IPX4</h3>

<p>Trước đ&acirc;y khi đi hồ bơi hay những ng&agrave;y ẩm thấp, mưa r&agrave;o bạn sẽ kh&ocirc;ng sử dụng tai nghe v&igrave; lo lắng n&oacute; sẽ bị d&iacute;nh nước g&acirc;y hỏng h&oacute;c kh&ocirc;ng thể sử dụng được nữa, th&igrave; giờ đ&acirc;y bạn c&oacute; thể y&ecirc;n t&acirc;m sử dụng bởi chiếc<a href="https://www.thegioididong.com/tai-nghe-xiaomi" target="_blank">&nbsp;tai nghe Xiaomi&nbsp;</a>n&agrave;y được trang bị c&ocirc;ng nghệ chống nước IPX4 c&oacute; khả năng bảo vệ tai nghe trước những tia nước.</p>

<p><a href="https://www.thegioididong.com/images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-5.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL- IPX4" src="https://cdn.tgdd.vn/Products/Images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-5.jpg" /></a></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Tương th&iacute;ch:
	<p><em>Android</em><em>Windows</em><em>iOS (iPhone)</em></p>
	</li>
	<li>Cổng sạc:
	<p><em>Micro USB</em></p>
	</li>
	<li>Thời gian sử dụng:
	<p><em>4 giờ</em></p>
	</li>
	<li>Thời gian sạc đầy:
	<p><em>1.5 giờ</em></p>
	</li>
	<li>Kết nối c&ugrave;ng l&uacute;c:
	<p><em>1 thiết bị</em></p>
	</li>
	<li>Hỗ trợ kết nối:
	<p><em>10m (Bluetooth 5.0)</em></p>
	</li>
	<li>Ph&iacute;m điều khiển:
	<p><em>Nghe/nhận cuộc gọi</em><em>Ph&aacute;t/dừng chơi nhạc</em></p>
	</li>
	<li>Điều khiển bằng:
	<p><em>Ph&iacute;m nhấn</em></p>
	</li>
	<li>Trọng lượng:
	<p><em>35.4 g</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>Trung Quốc</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Trung Quốc</em></p>
	</li>
</ul>
',
        'details'=> '<h3>Nghe nhạc thả ga, sạc đầy pin nhanh ch&oacute;ng</h3>

<p>Khi sử dụng 2 tai nghe c&ugrave;ng l&uacute;c để nghe nhạc hay đ&agrave;m thoại thời gian d&ugrave;ng khoảng&nbsp;<strong>4 giờ</strong>, c&ograve;n khi bạn chỉ d&ugrave;ng 1 b&ecirc;n tai nghe th&igrave; thời gian sử dụng l&agrave;<strong>&nbsp;5 giờ</strong>. Hộp sạc thời lượng pin&nbsp;<strong>12 tiếng</strong>, tức l&agrave; c&oacute; thể sạc cho tai nghe được&nbsp;<strong>3 lần</strong>.</p>

<p>Khi sử dụng hết pin bạn c&oacute; thể sạc đầy lại cho tai nghe trong&nbsp;<strong>1.5 giờ</strong>, c&ograve;n thời gian sạc đầy cho hộp sạc l&agrave;&nbsp;<strong>2 giờ</strong>.</p>

<p><a href="https://www.thegioididong.com/images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-8.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL- Pin" src="https://cdn.tgdd.vn/Products/Images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-8.jpg" /></a></p>

<h3><a href="https://www.thegioididong.com/tai-nghe-khong-day" target="_blank">Tai nghe Bluetooth True Wireless&nbsp;</a>c&oacute; thể sử dụng độc lập từng chiếc, bạn c&oacute; thể d&ugrave;ng 1 chiếc để đ&agrave;m thoại khi đang l&aacute;i xe m&agrave; kh&ocirc;ng g&acirc;y mất tập trung</h3>

<p><a href="https://www.thegioididong.com/images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-7.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL- Dùng riêng lẻ" src="https://cdn.tgdd.vn/Products/Images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-7.jpg" /></a></p>

<h3>Kết nối kh&ocirc;ng d&acirc;y nhanh ch&oacute;ng, tương th&iacute;ch với nhiều thiết bị nhờ c&ocirc;ng nghệ Bluetooth 5.0</h3>

<p>Tai nghe Bluetooth True Wireless Xiaomi sử dụng kết nối<strong>&nbsp;<a href="https://www.thegioididong.com/hoi-dap/bluetooth-50-chuan-bluetooth-danh-cho-thoi-dai-kho-1113891" target="_blank">Bluetooth 5.0</a></strong>&nbsp;cho phạm vi kết nối ổn định l&ecirc;n đến&nbsp;<strong>10 m</strong>, tương th&iacute;ch với tất cả c&aacute;c thiết bị sử dụng hệ điều h&agrave;nh Android, Windows, iOS,...</p>

<p>Khi bạn lấy tai nghe ra khỏi hộp sạc th&igrave; n&oacute; sẽ tự kết nối với thiết bị đ&atilde; được gh&eacute;p nối trước đ&oacute;, gi&uacute;p tiết kiệm thời gian thao t&aacute;c lại từ đầu. Ngược lại khi bạn để tai nghe v&agrave;o lại hộp sạc th&igrave; tai nghe sẽ tự động tắt.</p>

<p><a href="https://www.thegioididong.com/images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-6.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL- Bluetooth 5.0" src="https://cdn.tgdd.vn/Products/Images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-6.jpg" /></a></p>

<h3>Cạnh ngo&agrave;i của tai nghe được t&iacute;ch hợp n&uacute;t bấm vật l&yacute; gi&uacute;p bạn thức hiện c&aacute;c thao t&aacute;c điều chỉnh nhanh ch&oacute;ng</h3>

<p>- Nhấn 1 c&aacute;i để nghe/ c&uacute;p m&aacute;y khi c&oacute; cuộc gọi.</p>

<p>- Bấm giữ 1 gi&acirc;y để từ chối cuộc gọi đến.</p>

<p>- Nhấn để dừng/ ph&aacute;t khi bạn đang nghe nhạc.</p>

<p>- Nhấn đ&uacute;p để bật trợ l&yacute; giọng n&oacute;i.</p>

<p><a href="https://www.thegioididong.com/images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-4-1.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL- Thao tác điều chỉnh" src="https://cdn.tgdd.vn/Products/Images/54/236262/bluetooth-tws-xiaomi-earbuds-basic-2-4-1.jpg" /></a></p>

<p>Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL cho kết nối ổn định, tương th&iacute;ch với nhiều thiết bị, chất &acirc;m trong trẻo, khử ồn tốt, chống nước tuyệt vời sẽ l&agrave; một phụ kiện kh&ocirc;ng thể bỏ qua của c&aacute;c t&iacute;nh đồ &acirc;m nhạc.</p>
',
        'slug'=>Str::slug('Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL','-').'.aspx',
        'created_at'=>now(),

    ]);
        DB::table('products')->insert([
            'name'=>'Tai nghe Bluetooth AirPods Pro Wireless Charge Apple MWP22',
            'price'=>5490000,
            'old_price'=>59990000,
            'quantity'=>50,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/54/236026/airpods-pro-wireless-charge-apple-mwp22-ava-600x600.jpg',
            'rate'=>400,
            'category_id'=>11,
            'brand_id'=>10,
            'user_id'=>random_int(1,5),
            'describe'=> '<h3>Giới thiệu sản phẩm</h3>

<h3>Thiết kế nhỏ gọn, dễ d&agrave;ng đem theo bất cứ đ&acirc;u</h3>

<p><a href="https://www.thegioididong.com/tai-nghe/tai-nghe-bluetooth-airpods-pro-apple-mwp22" target="_blank">AirPods Pro</a>&nbsp;với thiết kế gọn g&agrave;ng, đẹp v&agrave; tinh tế,&nbsp;<a href="https://www.thegioididong.com/tai-nghe" target="_blank">tai nghe</a>&nbsp;được thiết kế theo dạng&nbsp;In-ear thay v&igrave; Earbuds như&nbsp;<a href="https://www.thegioididong.com/tai-nghe/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2" target="_blank">AirPods 2</a>, cho ph&eacute;p&nbsp;<strong>chống ồn tốt hơn, kh&oacute; rớt khi đeo v&agrave; &ecirc;m tai hơn</strong>.</p>

<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tai-nghe-earbuds-tai-nghe-in-ear-la-gi-khac-nhau-1219749" target="_blank">Tai nghe Earbuds, tai nghe Inear l&agrave; g&igrave;? Kh&aacute;c nhau như thế n&agrave;o?</a></p>

<p><a href="https://www.thegioididong.com/images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22.jpg" onclick="return false;"><img alt="Thiết kế nhỏ gọn, tinh tế - Tai nghe Bluetooth Airpods Pro Apple" src="https://cdn.tgdd.vn/Products/Images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22.jpg" /></a></p>

<h3>Kết nối nhanh v&agrave; ổn định với c&ocirc;ng nghệ Bluetooth 5.0</h3>

<p><a href="https://www.thegioididong.com/tai-nghe-bluetooth" target="_blank">Tai nghe Bluetooth</a>&nbsp;AirPods Pro vẫn cho&nbsp;tốc độ kết nối ấn tượng, chỉ&nbsp;<strong>khoảng&nbsp;1 - 2 gi&acirc;y</strong>&nbsp;sau khi mở nắp (với c&aacute;c thiết bị của Apple như iPhone, iPad, MacBook,...) v&agrave;&nbsp;<strong>khoảng 3 - 4 gi&acirc;y</strong>&nbsp;đối với Android (sau lần kết nối đầu ti&ecirc;n).</p>

<p><a href="https://www.thegioididong.com/images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang2.jpg" onclick="return false;"><img alt="Kết nối nhanh chóng - Tai nghe Bluetooth Airpods Pro Apple" src="https://cdn.tgdd.vn/Products/Images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang2.jpg" /></a></p>

<h3>Linh hoạt lựa chọn với 3 k&iacute;ch cỡ đệm tai k&egrave;m theo</h3>

<p>Do chuyển sang dạng In-ear, n&ecirc;n AirPods Pro được&nbsp;<strong>k&egrave;m theo đệm tai cao su với 3 k&iacute;ch cỡ kh&aacute;c nhau</strong>, gi&uacute;p người d&ugrave;ng c&oacute; nhiều lựa chọn ph&ugrave; hợp với cỡ tai của m&igrave;nh, đem lại trải nghiệm thoải m&aacute;i nhất.</p>

<p><a href="https://www.thegioididong.com/images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang3.jpg" onclick="return false;"><img alt="Đi kèm theo 3 cặp đệm tai - Tai nghe Bluetooth Airpods Pro Apple" src="https://cdn.tgdd.vn/Products/Images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang3.jpg" /></a></p>

<h3>&Acirc;m thanh chất lượng, sống động c&ugrave;ng c&ocirc;ng nghệ Adaptive EQ tự&nbsp;điều chỉnh &acirc;m thanh th&ocirc;ng minh</h3>

<p>AirPods Pro được n&acirc;ng cấp mạnh mẽ ở chất lượng &acirc;m thanh, cho &acirc;m bass mạnh mẽ hơn, ch&acirc;n thực hơn, độ chi tiết cao hơn, c&ugrave;ng c&ocirc;ng nghệ Adaptive EQ, cho ph&eacute;p<strong>&nbsp;tự động điều chỉnh tần số &acirc;m thanh</strong>&nbsp;của bản nhạc theo h&igrave;nh dạng tai người d&ugrave;ng, mang lại trải nghiệm &acirc;m thanh tốt nhất.</p>

<p>C&oacute; chip H1 chất lượng cao, xử l&yacute; &acirc;m thanh kỹ thuật số,&nbsp;<strong>tốc độ kết nối nhanh</strong>, cho độ trễ gần như bằng kh&ocirc;ng.</p>

<p><a href="https://www.thegioididong.com/images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trangfixx4.jpg" onclick="return false;"><img alt="Công nghệ Adaptive EQ tùy chỉnh âm tùy theo người dùng - Tai nghe Bluetooth Airpods Pro Apple" src="https://cdn.tgdd.vn/Products/Images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trangfixx4.jpg" /></a></p>

<h3><a href="https://www.thegioididong.com/tai-nghe-khong-day" target="_blank">Tai nghe True Wireless</a>&nbsp;AirPods Pro trang bị 2 chế độ: Transparency Mode (xuy&ecirc;n &acirc;m) v&agrave; Noise Cancellation Mode (chống ồn chủ động)</h3>

<p><strong>- Chống ồn chủ động:</strong>&nbsp;Với chế độ n&agrave;y, tai nghe sẽ khử tiếng ồn ngo&agrave;i m&ocirc;i trường, loại bỏ tạp &acirc;m xung quanh lọt v&agrave;o tai, gi&uacute;p bạn đắm ch&igrave;m v&agrave;o bản nhạc m&agrave; kh&ocirc;ng bị ảnh hưởng bởi tiếng ồn xung quanh.</p>

<p><strong>- Chế độ xuy&ecirc;n &acirc;m:&nbsp;</strong>Khi chuyển sang chế độ n&agrave;y, AirPods Pro cho ph&eacute;p bạn nghe được cả nhạc đang ph&aacute;t v&agrave; &acirc;m thanh b&ecirc;n ngo&agrave;i, gi&uacute;p bạn dễ d&agrave;ng hơn khi tr&ograve; chuyện với mọi người d&ugrave; đang đeo tai nghe.</p>

<p><a href="https://www.thegioididong.com/images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-6.jpg" onclick="return false;"><img alt="Trang bị chống ồn và chế độ xuyên âm - Tai nghe Bluetooth Airpods Pro Apple" src="https://cdn.tgdd.vn/Products/Images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-6.jpg" /></a></p>

<h3>Điều khiển dễ d&agrave;ng, nhanh ch&oacute;ng với cảm ứng lực hiện đại</h3>

<p><a href="https://www.thegioididong.com/tai-nghe-apple-bluetooth" target="_blank">Tai nghe Bluetooth Apple</a>&nbsp;AirPods Pro&nbsp;sử dụng cảm ứng lực để điều khiển,&nbsp;kh&ocirc;ng cần thao t&aacute;c nhiều tr&ecirc;n điện thoại, cụ thể như sau:</p>

<p><strong>- B&oacute;p 1 lần:</strong>&nbsp;Ph&aacute;t/tạm dừng nhạc hoặc trả lời cuộc gọi.</p>

<p><strong>- B&oacute;p 2 lần:</strong>&nbsp;Chuyển b&agrave;i kế tiếp.</p>

<p><strong>- B&oacute;p 3 lần:</strong>&nbsp;Quay lại b&agrave;i trước.</p>

<p><strong>- Nhấn giữ:</strong>&nbsp;Chuyển đổi giữa chế độ chống ồn chủ động v&agrave; chế độ xuy&ecirc;n &acirc;m.</p>

<p>Ngo&agrave;i ra, AirPods Pro c&ograve;n hỗ trợ kết nối nhanh với trợ l&yacute; ảo bằng c&aacute;ch n&oacute;i&nbsp;<strong>&quot;Hey Siri&quot;</strong>, sau đ&oacute; bạn c&oacute; thể ra lệnh ph&aacute;t b&agrave;i h&aacute;t, thực hiện cuộc gọi, nhờ dẫn đường v&agrave; c&aacute;c y&ecirc;u cầu kh&aacute;c (chỉ hỗ trợ giọng n&oacute;i Tiếng Anh).</p>

<p><a href="https://www.thegioididong.com/images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-7.jpg" onclick="return false;"><img alt="Cảm ứng lực dễ dàng thao tác, hiện đại - Tai nghe Bluetooth Airpods Pro Apple" src="https://cdn.tgdd.vn/Products/Images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-7.jpg" /></a></p>

<h3>&nbsp;</h3>
',
            'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Tương th&iacute;ch:
	<p><em>Android</em><em>iOS (iPhone)</em></p>
	</li>
	<li>Cổng sạc:
	<p><em>Lightning</em><em>Sạc kh&ocirc;ng d&acirc;y</em></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh:
	<p><em><a href="https://www.thegioididong.com/hoi-dap/cac-cong-nghe-am-thanh-tren-tai-nghe-apple-1241387#anc" target="_blank">Active Noise Cancellation</a></em><em><a href="https://www.thegioididong.com/hoi-dap/cac-cong-nghe-am-thanh-tren-tai-nghe-apple-1241387#aeq" target="_blank">Adaptive EQ</a></em></p>
	</li>
	<li>Thời gian sử dụng:
	<p><em>4.5 giờ</em></p>
	</li>
	<li>Thời gian sạc đầy:
	<p><em>2 giờ</em></p>
	</li>
	<li>Kết nối c&ugrave;ng l&uacute;c:
	<p><em>1 thiết bị</em></p>
	</li>
	<li>Hỗ trợ kết nối:
	<p><em>10m (Bluetooth 5.0)</em></p>
	</li>
	<li>Ph&iacute;m điều khiển:
	<p><em>Mic thoại</em><em>Nghe/nhận cuộc gọi</em><em>Ph&aacute;t/dừng chơi nhạc</em><em>Chuyển b&agrave;i h&aacute;t</em></p>
	</li>
	<li>Điều khiển bằng:
	<p><em>Cảm ứng chạm</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>Mỹ</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Việt Nam / Trung Quốc (t&ugrave;y l&ocirc; h&agrave;ng)</em></p>
	</li>
</ul>
',
            'details'=> '<h3>T&iacute;ch hợp sạc kh&ocirc;ng d&acirc;y chuẩn Qi cho hộp sạc</h3>

<p>Hộp sạc AirPods Pro hỗ trợ<a href="https://www.thegioididong.com/cap-dien-thoai-sac-khong-day" target="_blank">&nbsp;sạc kh&ocirc;ng d&acirc;y</a>&nbsp;theo chuẩn Qi, tương th&iacute;ch hầu hết c&aacute;c loại đế sạc kh&ocirc;ng d&acirc;y hiện nay.</p>

<p><a href="https://www.thegioididong.com/images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang7.jpg" onclick="return false;"><img alt="Hỗ trợ sạc không dây chuẩn Qi - Tai nghe Bluetooth Airpods Pro Apple" src="https://cdn.tgdd.vn/Products/Images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang7.jpg" /></a></p>

<p>Ngo&agrave;i ra, bạn c&oacute; thể sạc cho hộp sạc qua cổng&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai-cap-iphone-lightning" target="_blank">Lightning</a>, đi k&egrave;m theo bộ sản phẩm l&agrave;&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai-type-c-lightning" target="_blank">c&aacute;p USB-C To Lightning</a>&nbsp;giống với c&aacute;p sạc đi k&egrave;m với&nbsp;iPhone 11 Pro/11 Pro Max.</p>

<p><a href="https://www.thegioididong.com/images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang8.jpg" onclick="return false;"><img alt="Hỗ trợ sạc qua cổng Lightning - Tai nghe Bluetooth Airpods Pro Apple" src="https://cdn.tgdd.vn/Products/Images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang8.jpg" /></a></p>

<h3>Thời lượng pin cho ph&eacute;p nghe nhạc đến 4.5 giờ, đ&agrave;m thoại đến 3.5 giờ</h3>

<p>Khi bật chức năng khử tiếng ồn chủ động, thời gian nghe nhạc đến 4.5 giờ v&agrave; thời gian đ&agrave;m thoại đến 3.5 giờ li&ecirc;n tục nếu bật chống ồn, c&ograve;n&nbsp;nếu tắt chống ồn, c&oacute; thể nghe nhạc đến 5 giờ v&agrave; đ&agrave;m thoại đến 4.5 giờ.</p>

<p>Khi d&ugrave;ng tai nghe AirPods Pro với hộp sạc th&igrave; người d&ugrave;ng sẽ c&oacute; thời gian&nbsp;<strong>24 giờ nghe nhạc v&agrave; 18 giờ đ&agrave;m thoại</strong>&nbsp;li&ecirc;n tục khi được sạc đầy.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/54/236026/airpods-pro-wireless-charge-apple-mwp22-90.jpg" onclick="return false;"><img alt="Có thể nghe nhạc liên tục trong 4.5 giờ và 3.5 giờ đàm thoại - Tai nghe Bluetooth Airpods Pro Apple" src="https://cdn.tgdd.vn/Products/Images/54/236026/airpods-pro-wireless-charge-apple-mwp22-90.jpg" /></a></p>

<h3>Tiết kiệm thời gian với khả năng sạc nhanh</h3>

<p>Với t&iacute;nh năng&nbsp;<strong>sạc 5 ph&uacute;t được 1 giờ nghe nhạc</strong>, AirPods Pro gi&uacute;p cho bạn tiết kiệm thời gian v&agrave; an t&acirc;m hơn mỗi khi tai nghe hết pin.</p>

<p><a href="https://www.thegioididong.com/images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang10.jpg" onclick="return false;"><img alt="Hỗ trợ sạc nhanh, 5 phút cho 1 giờ nghe nhạc - Tai nghe Bluetooth Airpods Pro Apple" src="https://cdn.tgdd.vn/Products/Images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang10.jpg" /></a></p>

<h3>Khả năng kh&aacute;ng nước v&agrave; mồ h&ocirc;i với chuẩn chống nước IPX4</h3>

<p>AirPods Pro c&oacute; thể chống được mưa nhỏ v&agrave; mồ h&ocirc;i khi vận động, gi&uacute;p người d&ugrave;ng y&ecirc;n t&acirc;m v&agrave; thoải m&aacute;i hơn khi đeo để chơi thể thao hoặc c&oacute; v&ocirc; t&igrave;nh gặp mưa (kh&ocirc;ng n&ecirc;n đeo khi bơi hoặc ng&acirc;m nước).</p>

<p><a href="https://www.thegioididong.com/images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang11-1.jpg" onclick="return false;"><img alt="Hỗ trợ chống nước và mồ hôi chuẩn IPX4 - Tai nghe Bluetooth Airpods Pro Apple" src="https://cdn.tgdd.vn/Products/Images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang11-1.jpg" /></a></p>

<h3>Dễ d&agrave;ng theo d&otilde;i trạng th&aacute;i pin th&ocirc;ng qua đ&egrave;n LED</h3>

<p>Đ&egrave;n LED được đặt ở vị tr&iacute; ngay mặt trước hộp sạc để người d&ugrave;ng tiện theo d&otilde;i trạng th&aacute;i pin, cụ thể đ&egrave;n xanh b&aacute;o hiệu pin đầy v&agrave; đ&egrave;n cam l&agrave; pin yếu.</p>

<p><a href="https://www.thegioididong.com/images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-8.jpg" onclick="return false;"><img alt="Trang bị đèn LED báo pin tiện lợi - Tai nghe Bluetooth Airpods Pro Apple" src="https://cdn.tgdd.vn/Products/Images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-8.jpg" /></a></p>

<h3>Bộ sản phẩm gồm c&oacute;:</h3>

<p>Hộp sạc, tai nghe (b&ecirc;n trong hộp sạc), d&acirc;y c&aacute;p USB-C To Lightning, 3 cặp đệm tai Silicon (2 cặp rời, 1 cặp đi k&egrave;m sẵn trong tai nghe), s&aacute;ch hướng dẫn.</p>

<p><a href="https://www.thegioididong.com/images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang12.jpg" onclick="return false;"><img alt="Bộ sản phẩm bao gồm Tai nghe, Hộp sạc, USB-C to Lightning, đệm tai Silicon (3 cỡ), sách hướng dẫn" src="https://cdn.tgdd.vn/Products/Images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang12.jpg" /></a></p>

<h3>Hướng dẫn kết nối iPhone/iPad với&nbsp;AirPods Pro:</h3>

<p>- Bật Bluetooth tr&ecirc;n iPhone/iPad.</p>

<p>- Mở nắp hộp&nbsp;AirPods Pro, giữ nguy&ecirc;n tai nghe trong hộp, l&uacute;c n&agrave;y tr&ecirc;n thiết bị sẽ xuất hiện 1 bảng pop-up c&oacute; h&igrave;nh tai nghe v&agrave; chữ Connect (kết nối).</p>

<p>- Bấm Connect sau n&oacute; nhấn giữ n&uacute;t nhấn ph&iacute;a mặt sau hộp sạc, đợi v&agrave;i gi&acirc;y l&agrave; ho&agrave;n th&agrave;nh việc kết nối. Những lần sau chỉ cần mở nắp hộp, tai nghe sẽ tự động kết nối với thiết bị.</p>

<p>Với MacOS (MacBook/iMac), iPhone c&aacute;ch kết nối cũng rất dễ d&agrave;ng v&agrave; tương th&iacute;ch tốt.</p>

<p><a href="https://www.thegioididong.com/images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang15.jpg" onclick="return false;"><img alt="Hướng dẫn kết nối Tai nghe Bluetooth Airpods Pro Apple Trắng" src="https://cdn.tgdd.vn/Products/Images/54/236026/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang15.jpg" /></a></p>

<p>Nh&igrave;n chung, với thiết kế nhỏ gọn,<strong>&nbsp;</strong>linh hoạt v&agrave; hợp thời trang,&nbsp;tai nghe Apple&nbsp;AirPods Pro sẽ mang đến cho người d&ugrave;ng những trải nghiệm &acirc;m thanh tốt nhất, chế độ chống ồn chủ động v&agrave; chế độ xuy&ecirc;n &acirc;m hoạt động cực k&igrave; hiệu quả, mang lại trải nghiệm tuyệt vời chất lượng &acirc;m thanh ch&acirc;n thực.&nbsp;</p>
',
            'slug'=>Str::slug('Tai nghe Bluetooth AirPods Pro Wireless Charge Apple MWP22','-').'.aspx',
            'created_at'=>now(),

        ]);DB::table('products')->insert([
        'name'=>'Tai nghe Bluetooth AirPods 2 Wireless charge Apple MRXJ2',
        'price'=>4990000,
        'old_price'=>5990000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/54/236025/airpods-2-wireless-charge-apple-mrxj2-ava-600x600.jpg',
        'rate'=>400,
        'category_id'=>11,
        'brand_id'=>10,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>Giới thiệu sản phẩm</h3>

<h3>Thiết kế nhỏ gọn, ấn tượng người nh&igrave;n</h3>

<p><a href="https://www.thegioididong.com/tai-nghe" target="_blank">Tai nghe&nbsp;</a>sở hữu thiết kế thời trang v&agrave; nhỏ gọn, trọng lượng cũng rất nhẹ kh&ocirc;ng kh&aacute;c mấy so với&nbsp;<a href="https://www.thegioididong.com/tai-nghe-bluetooth" target="_blank">tai nghe Bluetooth</a>&nbsp;AirPods thế hệ đầu ti&ecirc;n. Tai nghe&nbsp;c&ograve;n được phủ l&ecirc;n một lớp chất liệu mới ở đầu mỗi tai nghe để gi&uacute;p tai nghe b&aacute;m tr&ecirc;n tai người đeo hơn, tr&aacute;nh bị rơi rớt hơn.</p>

<p><a href="https://www.thegioididong.com/images/54/236025/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-1-2.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Wireless charge Apple MRXJ2 Trắng có thiết kế nhỏ gọn" src="https://cdn.tgdd.vn/Products/Images/54/236025/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-1-2.jpg" /></a></p>

<h3>Truy cập nhanh v&agrave;o Siri bằng c&aacute;ch n&oacute;i &quot;Hey Siri&quot;</h3>

<p>Với sự trở lại của&nbsp;<a href="https://www.thegioididong.com/tai-nghe/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2" target="_blank">Tai nghe Bluetooth AirPods 2 Wireless charge</a>&nbsp;n&agrave;y th&igrave;&nbsp;khả năng chống ồn, xử l&yacute; &acirc;m thanh b&ecirc;n ngo&agrave;i tốt hơn so với tai nghe AirPods đời đầu v&agrave; bạn c&oacute; thể kết nối với&nbsp;nhanh v&agrave;o Siri bằng c&aacute;ch n&oacute;i&nbsp;&ldquo;Hey Siri&rdquo;&nbsp;v&agrave; thực hiện y&ecirc;u cầu của bạn. Ngo&agrave;i ra sản phẩm c&ograve;n c&oacute; thể điều chỉnh &acirc;m lượng, thay đổi b&agrave;i h&aacute;t, thực hiện cuộc gọi hoặc thậm ch&iacute; nhận chỉ đường tiện lợi.</p>

<p><a href="https://www.thegioididong.com/images/54/236025/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-8-1.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Wireless charge Apple MRXJ2 Trắng dễ dàng kết nối với Siri" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" /></a></p>

<h3><a href="https://www.thegioididong.com/tai-nghe-khong-day" target="_blank">Tai nghe kh&ocirc;ng d&acirc;y</a>&nbsp;Apple dễ d&agrave;ng thao t&aacute;c bằng cảm ứng để&nbsp;nhận cuộc gọi, nghe hoặc tạm dừng đoạn nhạc, tiện lợi khi kh&ocirc;ng cần thao t&aacute;c nhiều tr&ecirc;n&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank">điện thoại</a></h3>

<h3><a href="https://www.thegioididong.com/images/54/236025/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-9-1.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Wireless charge Apple MRXJ2 Trắng thao tác dễ dàng" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" /></a></h3>

<h3>Sạc pin cho tai nghe dễ d&agrave;ng qua cổng sạc&nbsp;<a href="https://www.thegioididong.com/cap-dien-thoai-cap-iphone-lightning" target="_blank">Lightning</a>&nbsp;hoặc c&oacute; thể sạc kh&ocirc;ng d&acirc;y nhờ được trang bị chuẩn sạc Qi hiện đại</h3>

<h3><a href="https://www.thegioididong.com/images/54/236025/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-7-1.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Wireless charge Apple MRXJ2 Trắng được sạc pin thông qua cổng Lightning" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" /></a><a href="https://www.thegioididong.com/images/54/236025/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-6-1.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Wireless charge Apple MRXJ2 Trắng có thể sạc không dây" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" /></a></h3>

<h3>Bạn c&oacute; thể d&ugrave;ng&nbsp;<a href="https://www.thegioididong.com/tai-nghe-nhet-trong" target="_blank">tai nghe nh&eacute;t trong</a>&nbsp;để nghe nhạc l&ecirc;n đến 5 giờ với &acirc;m lượng l&agrave; 50% cho mỗi một lần sạc đầy hoặc sử dụng song song với hộp sạc c&oacute; thể d&ugrave;ng được l&ecirc;n đến 24 giờ.</h3>

<p><a href="https://www.thegioididong.com/images/54/236025/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-3-2.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Wireless charge Apple MRXJ2 Trắng có thời lượng nghe nhạc lớn" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" /></a><a href="https://www.thegioididong.com/images/54/236025/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-5-1.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Wireless charge Apple MRXJ2 Trắng dùng được 24 giờ" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" /></a></p>

<h3>Khi hết pin m&agrave; kh&ocirc;ng c&oacute; thời gian, bạn chỉ cần sạc&nbsp;<a href="https://www.thegioididong.com/tai-nghe-apple-bluetooth" target="_blank">tai nghe Bluetooth Apple</a>&nbsp;với&nbsp;15 ph&uacute;t v&agrave; đ&atilde; c&oacute; thể tận hưởng &acirc;m nhạc th&ecirc;m 3 giờ sau đ&oacute;</h3>

<p><a href="https://www.thegioididong.com/images/54/236025/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-4-2.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Wireless charge Apple MRXJ2 Trắng sạc nhanh khi đang bận" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" /></a></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Tương th&iacute;ch:
	<p><em>Android</em><em>iOS (iPhone)</em></p>
	</li>
	<li>Cổng sạc:
	<p><em>Lightning</em><em>Sạc kh&ocirc;ng d&acirc;y</em></p>
	</li>
	<li>Thời gian sử dụng:
	<p><em>5 giờ</em></p>
	</li>
	<li>Thời gian sạc đầy:
	<p><em>2 giờ</em></p>
	</li>
	<li>Kết nối c&ugrave;ng l&uacute;c:
	<p><em>1 thiết bị</em></p>
	</li>
	<li>Hỗ trợ kết nối:
	<p><em>10m (Bluetooth 5.0)</em></p>
	</li>
	<li>Ph&iacute;m điều khiển:
	<p><em>Mic thoại</em><em>Nghe/nhận cuộc gọi</em><em>Ph&aacute;t/dừng chơi nhạc</em><em>Chuyển b&agrave;i h&aacute;t</em></p>
	</li>
	<li>Điều khiển bằng:
	<p><em>Cảm ứng chạm</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>Mỹ</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Việt Nam / Trung Quốc (t&ugrave;y l&ocirc; h&agrave;ng)</em></p>
	</li>
</ul>
',
        'details'=> '<h3>C&oacute; đ&egrave;n Led b&aacute;o sạc khi sạc pin</h3>

<p>Với vỏ sạc kh&ocirc;ng d&acirc;y bạn sẽ sạc sản phẩm một c&aacute;ch nhanh ch&oacute;ng v&agrave; dễ d&agrave;ng. Chỉ cần đặt vỏ m&aacute;y xuống tr&ecirc;n một tấm sạc tương th&iacute;ch Qi v&agrave; để n&oacute; sạc. Đ&egrave;n b&aacute;o Led ở mặt trước của vỏ cho ph&eacute;p bạn biết rằng&nbsp;<a href="https://www.thegioididong.com/tai-nghe-khong-da" target="_blank">tai nghe True Wireless</a>&nbsp;AirPods của bạn đang sạc. V&agrave; khi bạn rời khỏi thảm sạc, bạn c&oacute; thể sử dụng cổng Lightning để sạc.</p>

<p><a href="https://www.thegioididong.com/images/54/236025/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-10-1.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Wireless charge Apple MRXJ2 Trắng có đèn Led tiện lợi" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" /></a></p>

<p>Chip H1 ho&agrave;n to&agrave;n mới cho tốc độ kết nối tức th&igrave;, chuyển đổi giữa c&aacute;c thiết bị nhanh ch&oacute;ng. D&ugrave; bạn sử dụng đeo cả hai tai nghe hay chỉ một tai nghe th&igrave; chip H1 sẽ tự động định tuyến &acirc;m thanh v&agrave; kết nối micro gi&uacute;p bạn.</p>

<h3>Thiết bị c&oacute; thể kết nối với c&aacute;c sản phẩm:</h3>

<p>- iPhone, iPad v&agrave; iPod touch c&oacute; iOS 12.2 trở l&ecirc;n.</p>

<p>- C&aacute;c mẫu Apple Watch c&oacute; watchOS 5.2 trở l&ecirc;n.</p>

<p>- C&aacute;c mẫu m&aacute;y Mac c&oacute; macOS 10.14.4 trở l&ecirc;n.</p>

<p>- C&aacute;c mẫu Apple TV c&oacute; tvOS 12.2 trở l&ecirc;n.<a href="https://www.thegioididong.com/images/54/236025/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-2-2.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Wireless charge Apple MRXJ2 Trắng kết nối nhanh chóng" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" /></a></p>

<h3>Bộ sản phẩm gồm c&oacute;: Tai nghe, s&aacute;ch hướng dẫn, hộp sạc: Lightning<a href="https://www.thegioididong.com/images/54/236025/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2-1-org2.jpg" onclick="return false;"><img alt="Bộ sản phẩm gồm có Tai nghe, Sách hướng dẫn, Hộp sạc: Lightning." src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX6+vqsEtnpAAAACklEQVQI12NgAAAAAgAB4iG8MwAAAABJRU5ErkJggg==" /></a></h3>

<h3>Hướng dẫn kết nối v&agrave; sử dụng&nbsp;<a href="https://www.thegioididong.com/tai-nghe-apple" target="_blank">tai nghe Apple</a>:</h3>

<p>- Từ m&agrave;n h&igrave;nh ch&iacute;nh iPhone, vuốt từ dưới l&ecirc;n để mở Control Center v&agrave; bật Bluetooth.</p>

<p>- Mở nắp hộp AirPods vẫn để 2 tai nghe b&ecirc;n trong hộp, l&uacute;c n&agrave;y tr&ecirc;n iPhone sẽ xuất hiện 1 bảng pops up c&oacute; h&igrave;nh tai nghe v&agrave; d&ograve;ng chữ Connect.</p>

<p>- Bấm Connect, sau đ&oacute; bấm Done l&agrave; ho&agrave;n tất kết nối.</p>

<p>- Những lần sau, bạn chỉ cần lấy tai nghe ra khỏi hộp l&agrave; iPhone sẽ tự động kết nối.</p>
',
        'slug'=>Str::slug('Tai nghe Bluetooth AirPods 2 Wireless charge Apple MRXJ2','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Tai nghe Bluetooth AirPods 2 Apple MV7N2',
        'price'=>3990000,
        'old_price'=>4990000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/54/236016/bluetooth-airpods-2-apple-mv7n2-imei-ava-600x600.jpg',
        'rate'=>400,
        'category_id'=>11,
        'brand_id'=>10,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>Giới thiệu sản phẩm</h3>

<h3><a href="https://www.thegioididong.com/tai-nghe/tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang" target="_blank">Tai nghe Bluetooth AirPods 2 Apple MV7N2 Trắng</a>&nbsp;vẫn giữ cho m&igrave;nh thiết kế hiện đại, cao cấp, hợp thời trang</h3>

<p><a href="https://www.thegioididong.com/images/54/236016/tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang-1-org1.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Apple MV7N2 Trắng thiết kế hiện đại, cao cấp" src="https://cdn.tgdd.vn/Products/Images/54/236016/tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang-1-org1.jpg" /></a></p>

<h3><a href="https://www.thegioididong.com/tai-nghe" target="_blank">Tai nghe</a>&nbsp;AirPods 2 trang bị chip H1 gi&uacute;p tai nghe kết nối ổn định, nhanh ch&oacute;ng v&agrave; tiết kiệm pin hơn</h3>

<p><a href="https://www.thegioididong.com/images/54/236016/tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang-1-org3.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Apple MV7N2 Trắng hỗ trợ chip H1 xử lý tốt hơn " src="https://cdn.tgdd.vn/Products/Images/54/236016/tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang-1-org3.jpg" /></a></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Tương th&iacute;ch:
	<p><em>Android</em><em>iOS (iPhone)</em></p>
	</li>
	<li>Cổng sạc:
	<p><em>Lightning</em></p>
	</li>
	<li>Thời gian sử dụng:
	<p><em>5 giờ</em></p>
	</li>
	<li>Thời gian sạc đầy:
	<p><em>2 giờ</em></p>
	</li>
	<li>Kết nối c&ugrave;ng l&uacute;c:
	<p><em>1 thiết bị</em></p>
	</li>
	<li>Hỗ trợ kết nối:
	<p><em>10m (Bluetooth 5.0)</em></p>
	</li>
	<li>Ph&iacute;m điều khiển:
	<p><em>Mic thoại</em><em>Nghe/nhận cuộc gọi</em><em>Ph&aacute;t/dừng chơi nhạc</em><em>Chuyển b&agrave;i h&aacute;t</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>Mỹ</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Việt Nam / Trung Quốc (t&ugrave;y l&ocirc; h&agrave;ng)</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h3>Hỗ trợ k&iacute;ch hoạt Siri bằng giọng n&oacute;i &quot;Hey, Siri&quot; v&agrave; thao t&aacute;c cảm ứng tiện lợi</h3>

<p>Ngo&agrave;i ra,&nbsp;<a href="https://www.thegioididong.com/tai-nghe-bluetooth" target="_blank">tai nghe Bluetooth</a>&nbsp;AirPods 2 c&ograve;n hỗ trợ nhận cuộc gọi, c&oacute; thể nghe hoặc tạm dừng đoạn nhạc đang ph&aacute;t tr&ecirc;n điện thoại bằng những thao t&aacute;c chạm cảm ứng tr&ecirc;n tai nghe, tiện lợi cho người d&ugrave;ng khi di chuyển.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/54/236016/tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang-1-org-2.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Apple MV7N2 Trắng kích hoạt Siri bằng giọng nói " src="https://cdn.tgdd.vn/Products/Images/54/236016/tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang-1-org-2.jpg" /></a></p>

<h3>Kết nối được hầu hết với c&aacute;c thiết bị Apple v&agrave; cả với c&aacute;c thiết bị hệ điều h&agrave;nh Android, Windows</h3>

<p><a href="https://www.thegioididong.com/tai-nghe-apple" target="_blank">Tai nghe Apple</a>&nbsp;AirPods 2 sử dụng chuẩn kết nối&nbsp;<strong>Bluetooth 5.0&nbsp;</strong>được tối ưu cho mọi thiết bị của h&atilde;ng như iPhone, iPad, iMac, Macbook, Apple Watch v&agrave; cả những thiết bị&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank">điện thoại</a>,&nbsp;<a href="https://www.thegioididong.com/may-tinh-bang" target="_blank">m&aacute;y t&iacute;nh bảng</a>&nbsp;chạy Android hay&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>, m&aacute;y t&iacute;nh Windows.</p>

<p><a href="https://www.thegioididong.com/images/54/236016/tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang-1-org-23.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Apple MV7N2 Trắng kết nối với hầu hết các thiết bị Apple" src="https://cdn.tgdd.vn/Products/Images/54/236016/tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang-1-org-23.jpg" /></a></p>

<h3>Trang bị c&ocirc;ng nghệ khử tiếng ồn cuộc gọi, đảm bảo chất lượng cuộc đ&agrave;m thoại tốt nhất</h3>

<p><a href="https://www.thegioididong.com/tai-nghe-apple-bluetooth" target="_blank">Tai nghe Bluetooth Apple</a>&nbsp;AirPods 2 trang bị t&iacute;nh năng khử ồn để tạo điểm nhấn kh&aacute;c biệt so với chiếc AirPods thế hệ đầu, nhằm cho ra&nbsp;<strong>chất &acirc;m tuyệt vời</strong>&nbsp;v&agrave;&nbsp;<strong>cải thiện khoảng c&aacute;ch kết nối</strong>&nbsp;giữa c&aacute;c thiết bị.</p>

<p><a href="https://www.thegioididong.com/images/54/236016/tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang-1-org-25.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Apple MV7N2 Trắng khử tiếng ồn" src="https://cdn.tgdd.vn/Products/Images/54/236016/tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang-1-org-25.jpg" /></a></p>

<h3>Nghe nhạc l&ecirc;n đến 5 giờ cho mỗi một lần sạc nhanh 15 ph&uacute;t v&agrave; c&oacute; thể sử dụng hơn 24 giờ khi sạc nhiều lần với hộp sạc</h3>

<p>Điểm đặc biệt tr&ecirc;n&nbsp;<a href="https://www.thegioididong.com/tai-nghe-khong-da" target="_blank">tai nghe True Wireless</a>,&nbsp;<strong>sạc nhanh 15 ph&uacute;t</strong>&nbsp;sẽ c&oacute; thể nghe đến&nbsp;<strong>3 giờ&nbsp;</strong>(sử dụng ở mức &acirc;m lượng 50%) nhờ c&ocirc;ng nghệ sạc nhanh t&iacute;ch hợp.</p>

<p><a href="https://www.thegioididong.com/images/54/236016/tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang-15.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth AirPods 2 Apple MV7N2 Trắng sử dụng pin dài lâu" src="https://cdn.tgdd.vn/Products/Images/54/236016/tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang-15.jpg" /></a></p>
',
        'slug'=>Str::slug('Tai nghe Bluetooth AirPods 2 Apple MV7N2','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Tai nghe EP Gaming Asus Rog Cetra Core Đen',
        'price'=>1990000,
        'old_price'=>2590000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/54/231420/ep-gaming-asus-rog-cetra-core-den-avatar-1-1-600x600.jpg',
        'rate'=>400,
        'category_id'=>11,
        'brand_id'=>2,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>Giới thiệu sản phẩm</h3>

<h3><a href="https://www.thegioididong.com/tai-nghe" target="_blank">Tai nghe</a>&nbsp;kiểu c&ocirc;ng th&aacute;i học tạo cảm gi&aacute;c thoải m&aacute;i trong từng khoảnh khắc trải nghiệm</h3>

<p>Asus Rog Cetra Core c&oacute; vẻ ngo&agrave;i tinh xảo, m&agrave;u đen sang trọng, logo m&agrave;u đỏ bắt mắt, t&ocirc; điểm cho phong c&aacute;ch thời trang của bạn th&ecirc;m nổi bật, ấn tượng.</p>

<p>Kiểu&nbsp;<a href="https://www.thegioididong.com/tai-nghe-nhet-trong" target="_blank">tai nghe nh&eacute;t trong</a>&nbsp;chế tạo c&ocirc;ng th&aacute;i học đeo vừa vặn, chắc chắn, c&aacute;ch ly tiếng ồn hiệu quả.</p>

<p><a href="https://www.thegioididong.com/images/54/231420/ep-gaming-asus-rog-cetra-core-den-282120-042153.jpg" onclick="return false;"><img alt="Tai nghe EP Gaming Asus Rog Cetra Core Đen - Kiểu công thái học tạo cảm giác thoải mái trong từng khoảnh khắc trải nghiệm" src="https://cdn.tgdd.vn/Products/Images/54/231420/ep-gaming-asus-rog-cetra-core-den-282120-042153.jpg" /></a></p>

<h3>&Acirc;m thanh chi tiết, sống động c&ugrave;ng tr&igrave;nh điều khiển Asus Essence lớn 10 mm độc quyền&nbsp;</h3>

<p>Asus Rog Cetra Core đ&aacute;p ứng tần số rộng 20 &ndash; 40kHz, driver 10 mm c&oacute; khả năng tối ưu h&oacute;a &acirc;m thanh chơi game, t&aacute;i tạo &acirc;m bass s&acirc;u lắng, mạnh mẽ, cho bạn thưởng thức &acirc;m thanh trung thực, l&ocirc;i cuốn bất ngờ c&ugrave;ng&nbsp;<a href="https://www.thegioididong.com/tai-nghe-co-day" target="_blank">tai nghe c&oacute; d&acirc;y</a>.</p>

<p><a href="https://www.thegioididong.com/images/54/231420/ep-gaming-asus-rog-cetra-core-den-282220-042200.jpg" onclick="return false;"><img alt="Tai nghe EP Gaming Asus Rog Cetra Core Đen - Âm thanh chi tiết, sống động" src="https://cdn.tgdd.vn/Products/Images/54/231420/ep-gaming-asus-rog-cetra-core-den-282220-042200.jpg" /></a></p>

<h3>Đầu 3.5 mm phổ biến cho ph&eacute;p kết nối đa thiết bị</h3>

<p>Ngo&agrave;i&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank">điện thoại</a>, bạn c&ograve;n gh&eacute;p nối mượt m&agrave; với Nintendo Switch, PlayStation 4, Xbox One, PC v&agrave; Mac, lựa chọn thiết bị chơi game đa dạng, tiện &iacute;ch.</p>

<p><a href="https://www.thegioididong.com/images/54/231420/ep-gaming-asus-rog-cetra-core-den-282220-042214.jpg" onclick="return false;"><img alt="Tai nghe EP Gaming Asus Rog Cetra Core Đen - Đầu 3.5 mm phổ biến cho phép kết nối đa thiết bị" src="https://cdn.tgdd.vn/Products/Images/54/231420/ep-gaming-asus-rog-cetra-core-den-282220-042214.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Tương th&iacute;ch:
	<p><em>Android</em><em>Windows</em><em>iOS (iPhone)</em></p>
	</li>
	<li>Jack cắm:
	<p><em>3.5 mm</em></p>
	</li>
	<li>Kết nối c&ugrave;ng l&uacute;c:
	<p><em>1 thiết bị</em></p>
	</li>
	<li>Ph&iacute;m điều khiển:
	<p><em>Ph&aacute;t/dừng chơi nhạc</em><em>Tăng/giảm &acirc;m lượng</em></p>
	</li>
	<li>Độ d&agrave;i d&acirc;y
	<p><em>130 cm</em></p>
	</li>
	<li>Trọng lượng:
	<p><em>16 g</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>Đ&agrave;i Loan</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Trung Quốc</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h3>N&uacute;t điều khiển vật l&yacute; kiểm so&aacute;t tai nghe dễ d&agrave;ng&nbsp;</h3>

<p>Bộ điều khiển t&iacute;ch hợp 3 n&uacute;t nhấn cho bạn tăng &acirc;m lượng, ph&aacute;t/dừng nhạc v&agrave; giảm &acirc;m lượng tức th&igrave;, t&ugrave;y chỉnh ch&iacute;nh x&aacute;c, y&ecirc;n t&acirc;m, chơi game liền mạch, kh&ocirc;ng gi&aacute;n đoạn.</p>

<p><a href="https://www.thegioididong.com/images/54/231420/ep-gaming-asus-rog-cetra-core-den-282220-042208.jpg" onclick="return false;"><img alt="Tai nghe EP Gaming Asus Rog Cetra Core Đen - Nút điều khiển vật lý kiểm soát tai nghe dễ dàng" src="https://cdn.tgdd.vn/Products/Images/54/231420/ep-gaming-asus-rog-cetra-core-den-282220-042208.jpg" /></a></p>

<h3>Tin cậy khi sử dụng v&agrave; bảo quản với nhiều phụ kiện đi k&egrave;m</h3>

<p>3 cặp m&uacute;t tai bằng silicone, 1 cặp m&uacute;t xốp, 3 cặp v&agrave;nh tai v&agrave; t&uacute;i đựng&nbsp;<a href="https://www.thegioididong.com/tai-nghe-asus" target="_blank">tai nghe Asus</a>&nbsp;c&ugrave;ng phụ kiện tr&ograve;n xinh xắn cho bạn dễ chọn m&uacute;t/v&agrave;nh tai ph&ugrave; hợp khổ tai, bảo quản sản phẩm đơn giản, tr&aacute;nh rơi rớt tối đa.</p>

<p><a href="https://www.thegioididong.com/images/54/231420/ep-gaming-asus-rog-cetra-core-den-282220-042220.jpg" onclick="return false;"><img alt="Tai nghe EP Gaming Asus Rog Cetra Core Đen - Tin cậy khi sử dụng và bảo quản với nhiều phụ kiện đi kèm" src="https://cdn.tgdd.vn/Products/Images/54/231420/ep-gaming-asus-rog-cetra-core-den-282220-042220.jpg" /></a></p>

<p>Thật kh&oacute; cưỡng lại sự quyến rũ của&nbsp;<a href="https://www.thegioididong.com/tai-nghe/ep-gaming-asus-rog-cetra-core-den" target="_blank">tai nghe EP Gaming Asus Rog Cetra Core đen</a>&nbsp;bạn nhỉ, đừng để những tr&ograve; game dần trở n&ecirc;n tẻ nhạt, sắm ngay&nbsp;Asus Rog Cetra Core để tận hưởng kho&aacute;i cảm khi chơi c&aacute;c tựa game hấp dẫn ngay.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Tai nghe EP Gaming Asus Rog Cetra Core Đen','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN6',
        'price'=>1690000,
        'old_price'=>1790000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-avatar-1-1-600x600.jpg',
        'rate'=>400,
        'category_id'=>11,
        'brand_id'=>8,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN6</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/54/228895/Slider/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-301020-0728520.jpg" /></p>

<h3>Thiết kế với m&agrave;u đen s&agrave;nh điệu, hoặc m&agrave;u trắng hiện đại,&nbsp;dễ d&agrave;ng thu phục mọi người d&ugrave;ng</h3>

<p><a href="https://www.thegioididong.com/tai-nghe/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6" target="_blank">Tai nghe Bluetooth True Wireless LG HBS-FN6</a>&nbsp;k&iacute;ch thước nhỏ gọn với hộp sạc vừa vặn trong l&ograve;ng b&agrave;n tay, dễ d&agrave;ng để bạn mang theo đến mọi nơi.</p>

<p><a href="https://www.thegioididong.com/images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-302920-022922.jpg" onclick="return false;"><img alt="Sang trọng, nhỏ gọn - Tai nghe Bluetooth True Wireless LG HBS-FN6" src="https://cdn.tgdd.vn/Products/Images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-302920-022922.jpg" /></a></p>

<p>Cấu tạo k&iacute;n kh&iacute;t với tai c&ugrave;ng đệm tai chất liệu silicone cao cấp kh&ocirc;ng g&acirc;y k&iacute;ch ứng gi&uacute;p chống ồn hiệu quả, tạo cảm gi&aacute;c thoải m&aacute;i suốt ng&agrave;y d&agrave;i.</p>

<p><a href="https://www.thegioididong.com/images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-302920-022932.jpg" onclick="return false;"><img alt="Vừa vặn, cách âm tốt - Tai nghe Bluetooth True Wireless LG HBS-FN6" src="https://cdn.tgdd.vn/Products/Images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-302920-022932.jpg" /></a></p>

<h3>C&ocirc;ng nghệ &acirc;m thanh ti&ecirc;n tiến từ Meridian cho&nbsp;<a href="https://www.thegioididong.com/tai-nghe-lg" target="_blank">tai nghe LG</a>&nbsp;chất lượng &acirc;m ch&acirc;n thực, sống động với độ ph&acirc;n giải cao</h3>

<p>C&ocirc;ng nghệ Xử l&yacute; T&iacute;n hiệu Số (DSP)&nbsp;kiểm so&aacute;t tuyệt đối t&iacute;n hiệu &acirc;m thanh, n&acirc;ng cao trải nghiệm nghe trong mọi kh&ocirc;ng gian, kể cả khi bạn sử dụng những nơi c&ocirc;ng cộng đ&ocirc;ng người, nhiều tiếng ồn.</p>

<p><a href="https://www.thegioididong.com/images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-302920-022942.jpg" onclick="return false;"><img alt="Tín hiệu số DSP- Tai nghe Bluetooth True Wireless LG HBS-FN6" src="https://cdn.tgdd.vn/Products/Images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-302920-022942.jpg" /></a></p>

<p>C&ocirc;ng nghệ MQA mang chất lượng &acirc;m thanh chuẩn ph&ograve;ng thu, diễn tả trọn vẹn &yacute; nghĩa của từng bản nhạc.</p>

<p><a href="https://www.thegioididong.com/images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-302920-022951.jpg" onclick="return false;"><img alt="MQA- Tai nghe Bluetooth True Wireless LG HBS-FN6" src="https://cdn.tgdd.vn/Products/Images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-302920-022951.jpg" /></a></p>

<p>C&ocirc;ng nghệ Headphone Spatial Processing (HSP, Xử l&yacute; Kh&ocirc;ng gian Tai nghe) của Meridian li&ecirc;n kết hiệu quả 2 tai nghe, m&ocirc; phỏng kh&ocirc;ng gian &acirc;m nhạc sống động, thưởng thức trải nghiệm nghe nhạc như đang đứng trong 1 s&acirc;n khấu &acirc;m nhạc thực sự.</p>

<p><a href="https://www.thegioididong.com/images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303020-023002.jpg" onclick="return false;"><img alt="Âm thanh sống động, chân thực - Tai nghe Bluetooth True Wireless LG HBS-FN6" src="https://cdn.tgdd.vn/Products/Images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303020-023002.jpg" /></a></p>

<h3>Kh&ocirc;ng mất kết nối với m&ocirc;i trường xung quanh, chỉ cần chạm nhẹ v&agrave;o&nbsp;<a href="https://www.thegioididong.com/tai-nghe" target="_blank">tai nghe</a>&nbsp;để nhận thức đầy đủ &acirc;m thanh từ m&ocirc;i trường ngo&agrave;i</h3>

<p>Tiện lợi khi bạn cần giao tiếp, hoặc nghe c&aacute;c th&ocirc;ng b&aacute;o tr&ecirc;n đường đi hay 1 điểm dừng ch&acirc;n n&agrave;o đ&oacute;,&hellip;</p>

<p><a href="https://www.thegioididong.com/images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303020-023013.jpg" onclick="return false;"><img alt="Dễ dàng kết nối với môi trường - Tai nghe Bluetooth True Wireless LG HBS-FN6" src="https://cdn.tgdd.vn/Products/Images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303020-023013.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Tương th&iacute;ch:
	<p><em>Android</em><em>Windows</em><em>iOS (iPhone)</em></p>
	</li>
	<li>Cổng sạc:
	<p><em>Type-C</em></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh:
	<p><em>Meridian</em></p>
	</li>
	<li>Thời gian sử dụng:
	<p><em>6 giờ</em></p>
	</li>
	<li>Thời gian sạc đầy:
	<p><em>1 giờ</em></p>
	</li>
	<li>Kết nối c&ugrave;ng l&uacute;c:
	<p><em>1 thiết bị</em></p>
	</li>
	<li>Hỗ trợ kết nối:
	<p><em>10m (Bluetooth 5.0)</em></p>
	</li>
	<li>Điều khiển bằng:
	<p><em>Cảm ứng chạm</em></p>
	</li>
	<li>Trọng lượng:
	<p><em>44.4g</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>H&agrave;n Quốc</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Việt Nam</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>Đ&agrave;m thoại với chất lượng &acirc;m thanh r&otilde; rệt qua micro k&eacute;p hiệu suất cao, khử tiếng ồn hiệu quả</h2>

<p>Khử tiếng vang, giảm ồn, khuếch đại giọng n&oacute;i để chất lượng cuộc đ&agrave;m thoại tốt nhất ngay cả trong kh&ocirc;ng gian đ&ocirc;ng người, nhiều tiếng ồn.</p>

<p><a href="https://www.thegioididong.com/images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303020-023023.jpg" onclick="return false;"><img alt="Đàm thoại tốt - Tai nghe Bluetooth True Wireless LG HBS-FN6" src="https://cdn.tgdd.vn/Products/Images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303020-023023.jpg" /></a></p>

<h3>Tai nghe th&ocirc;ng minh tự động ph&aacute;t v&agrave; ngừng nhạc khi bạn gắn hoặc th&aacute;o thiết bị khỏi tai, tiết kiệm năng lượng hiệu quả</h3>

<p><a href="https://www.thegioididong.com/images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303020-023034.jpg" onclick="return false;"><img alt="Hoạt động thông minh - Tai nghe Bluetooth True Wireless LG HBS-FN6" src="https://cdn.tgdd.vn/Products/Images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303020-023034.jpg" /></a></p>

<h3>Kết nối nhanh v&agrave; ổn định với Bluetooth 5.0, khoảng c&aacute;ch kết nối đến 10 m</h3>

<p><a href="https://www.thegioididong.com/images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303020-023047.jpg" onclick="return false;"><img alt="Kết nối nhanh, ổn định - Tai nghe Bluetooth True Wireless LG HBS-FN6" src="https://cdn.tgdd.vn/Products/Images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303020-023047.jpg" /></a></p>

<h3>Khả năng chống nước v&agrave; mồ h&ocirc;i tốt với chuẩn IPX4&nbsp;</h3>

<p>T&iacute;nh năng kh&aacute;ng nước nhẹ chuẩn IPX4&nbsp;gi&uacute;p người d&ugrave;ng an t&acirc;m khi ra mồ h&ocirc;i hay bất chợt gặp những cơn mưa nhỏ.</p>

<p><a href="https://www.thegioididong.com/images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303020-023059.jpg" onclick="return false;"><img alt="Chống nước IPX4 - Tai nghe Bluetooth True Wireless LG HBS-FN6" src="https://cdn.tgdd.vn/Products/Images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303020-023059.jpg" /></a></p>

<h3>Sử dụng cổng sạc Type-C phổ biến, hỗ trợ sạc kh&ocirc;ng d&acirc;y tiện lợi, thời lượng pin sử pin l&ecirc;n đến 18 giờ k&egrave;m theo hộp sạc</h3>

<p>Người d&ugrave;ng c&oacute; thể sử dụng chung c&aacute;p sạc của&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank">điện thoại</a>&nbsp;c&oacute; cổng Type-C (sản phẩm c&oacute; k&egrave;m theo c&aacute;p sạc). Ngo&agrave;i ra hộp sạc c&ograve;n hỗ trợ sạc kh&ocirc;ng d&acirc;y gọn g&agrave;ng v&agrave; tiện lợi.</p>

<p>Với 6 giờ từ tai nghe v&agrave; th&ecirc;m 12 giờ dung lượng từ hộp sạc, bạn thoải m&aacute;i thưởng thức &acirc;m nhạc, giải tr&iacute; v&agrave; sử dụng tai nghe cho c&ocirc;ng việc suốt ng&agrave;y d&agrave;i.</p>

<p>Đặc biệt, tai nghe t&iacute;ch hợp c&ocirc;ng nghệ sạc nhanh với chỉ 5 ph&uacute;t sạc cho 1 giờ d&ugrave;ng th&ecirc;m, chẳng lo lắng khi bạn cần d&ugrave;ng trong trường hợp thiết yếu.</p>

<p><a href="https://www.thegioididong.com/images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303120-023109.jpg" onclick="return false;"><img alt="Pin tốt - Tai nghe Bluetooth True Wireless LG HBS-FN6" src="https://cdn.tgdd.vn/Products/Images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303120-023109.jpg" /></a></p>

<h3>Hộp sạc kh&aacute;ng khuẩn UVnano diệt khuẩn đến 99.9%, bảo vệ tai nghe, bảo vệ người d&ugrave;ng</h3>

<p><a href="https://www.thegioididong.com/images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303120-023119.jpg" onclick="return false;"><img alt="Hộp sạc kháng khuẩn - Tai nghe Bluetooth True Wireless LG HBS-FN6" src="https://cdn.tgdd.vn/Products/Images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303120-023119.jpg" /></a></p>

<h3>Kết nối quản l&yacute; v&agrave; t&igrave;m kiếm tai nghe của bạn qua ứng dụng TONE Free</h3>

<p>Cho ph&eacute;p bạn&nbsp; điều chỉnh &acirc;m thanh với bốn c&agrave;i đặt trước Meridian EQ v&agrave; hai chế độ EQ t&ugrave;y chỉnh. Tăng hoặc giảm c&aacute;c tần số cụ thể để c&aacute; nh&acirc;n h&oacute;a tất cả &acirc;m nhạc theo c&aacute;ch bạn th&iacute;ch.</p>

<p>X&aacute;c định vị tr&iacute; tai nghe khi bạn nhấn ph&aacute;t &acirc;m thanh trong trang T&igrave;m tai nghe của t&ocirc;i tr&ecirc;n TONE Free, tai nghe sẽ ph&aacute;t ra tiếng b&iacute;p để bạn t&igrave;m kiếm, hữu &iacute;ch khi bị thất lạc.</p>

<p><a href="https://www.thegioididong.com/images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303120-023130.jpg" onclick="return false;"><img alt="Ứng dụng quản lý - Tai nghe Bluetooth True Wireless LG HBS-FN6" src="https://cdn.tgdd.vn/Products/Images/54/228895/tai-nghe-bluetooth-true-wireless-lg-hbs-fn6-303120-023130.jpg" /></a></p>

<p>C&oacute; thể thấy,&nbsp;<a href="https://www.thegioididong.com/tai-nghe-bluetooth" target="_blank">tai nghe Bluetooth</a>&nbsp;True Wireless LG HBS-FN6&nbsp;với thiết kế đẹp mắt c&ugrave;ng chất &acirc;m mạnh mẽ, sống động, ch&acirc;n thực, đem đến cho người d&ugrave;ng trải nghiệm thật ấn tượng, thỏa m&atilde;n.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN6','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4',
        'price'=>1190000,
        'old_price'=>1690000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-avatar-1-1-600x600.jpg',
        'rate'=>400,
        'category_id'=>11,
        'brand_id'=>8,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/54/228893/Slider/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-301020-0721210.jpg" /></p>

<h3><a href="https://www.thegioididong.com/tai-nghe/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4" target="_blank">Tai nghe Bluetooth True Wireless LG HBS-FN4</a>&nbsp;thiết kế nhỏ nhắn, hiện đại, tinh tế, kết hợp hộp sạc gọn g&agrave;ng tiện lợi để mang theo</h3>

<p>Sản phẩm c&oacute; 2 m&agrave;u t&ugrave;y chọn đen sang trọng, trắng hiện đại.</p>

<p><a href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014120-044159.jpg" onclick="return false;"><img alt="Sang đẹp - Tai nghe Bluetooth True Wireless LG HBS-FN4" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014120-044159.jpg" /></a></p>

<h3>Chống ồn, c&aacute;ch &acirc;m tốt với thiết kế k&iacute;n chặt b&ecirc;n trong tai, hỗ trợ v&ograve;ng đệm silicone tạo sự thoải m&aacute;i d&ugrave; d&ugrave;ng suốt ng&agrave;y d&agrave;i</h3>

<p>Chất liệu silicone sử dụng cho v&ograve;ng đệm l&agrave; loại d&ugrave;ng trong y khoa, &ecirc;m mềm, kh&ocirc;ng g&acirc;y k&iacute;ch ứng, an to&agrave;n cho mọi người d&ugrave;ng.</p>

<p>Đặc biệt, tai nghe ngưng v&agrave; ph&aacute;t nhạc tự động th&ocirc;ng qua hệ cảm biến khi tai nghe được gắn hoặc th&aacute;o rời khỏi tai người d&ugrave;ng, tiết kiệm pin hiệu quả cho thiết bị.</p>

<p><a href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044211.jpg" onclick="return false;"><img alt="Cách âm tốt - Tai nghe Bluetooth True Wireless LG HBS-FN4" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044211.jpg" /></a></p>

<h3>&Acirc;m thanh chất lượng cao với &acirc;m bass mạnh mẽ, r&agrave;nh mạch qua củ loa 6 mm v&agrave; c&ocirc;ng nghệ &acirc;m thanh ti&ecirc;n tiến của Meridian&nbsp;</h3>

<p>Tối ưu h&oacute;a &acirc;m thanh trong mọi kh&ocirc;ng gian nhờ c&ocirc;ng nghệ Xử l&yacute; T&iacute;n hiệu Số (DSP)&nbsp;kiểm so&aacute;t tuyệt đối t&iacute;n hiệu &acirc;m thanh ở cả nơi y&ecirc;n tĩnh đến ồn &agrave;o n&aacute;o nhiệt.</p>

<p><a href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044220.jpg" onclick="return false;"><img alt="DSP - Tai nghe Bluetooth True Wireless LG HBS-FN4" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044220.jpg" /></a></p>

<p>Mang đến trải nghiệm &acirc;m thanh ho&agrave;n chỉnh, tinh tế, diễn đạt trọn vẹn &yacute; nghĩa &acirc;m nhạc như trong ph&ograve;ng thu với c&ocirc;ng nghệ MQA.</p>

<p><a href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044229.jpg" onclick="return false;"><img alt="MQA - Tai nghe Bluetooth True Wireless LG HBS-FN4" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044229.jpg" /></a></p>

<p>M&ocirc; phỏng kh&ocirc;ng gian &acirc;m nhạc ch&acirc;n thực v&agrave; s&ocirc;i động như ở s&acirc;n khấu lớn với sự li&ecirc;n kết hiệu quả 2 tai nghe v&agrave; c&ocirc;ng nghệ Headphone Spatial Processing (HSP, Xử l&yacute; Kh&ocirc;ng gian Tai nghe).</p>

<p>Bạn sẽ c&oacute; trải nghiệm &acirc;m nhạc thật ho&agrave;n hảo, như đang sống trong thế giới của bản nhạc m&agrave; qu&ecirc;n đi rằng m&igrave;nh đang sử dụng cặp tai nghe.</p>

<p><a href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044240.jpg" onclick="return false;"><img alt="HSP - Tai nghe Bluetooth True Wireless LG HBS-FN4" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044240.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Tương th&iacute;ch:
	<p><em>Android</em><em>Windows</em><em>iOS (iPhone)</em></p>
	</li>
	<li>Cổng sạc:
	<p><em>Type-C</em></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh:
	<p><em>Meridian</em></p>
	</li>
	<li>Thời gian sử dụng:
	<p><em>6 giờ</em></p>
	</li>
	<li>Thời gian sạc đầy:
	<p><em>1 giờ</em></p>
	</li>
	<li>Kết nối c&ugrave;ng l&uacute;c:
	<p><em>1 thiết bị</em></p>
	</li>
	<li>Hỗ trợ kết nối:
	<p><em>10m (Bluetooth 5.0)</em></p>
	</li>
	<li>Điều khiển bằng:
	<p><em>Cảm ứng chạm</em></p>
	</li>
	<li>Trọng lượng:
	<p><em>44.4g</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>H&agrave;n Quốc</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Việt Nam</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>Kết nối với m&ocirc;i trường xung quanh bằng c&aacute;ch nhấn nhẹ v&agrave;o&nbsp;<a href="https://www.thegioididong.com/tai-nghe" target="_blank">tai nghe</a></h2>

<p>Sử dụng khi bạn cần giao tiếp ngắn, trao đổi 1 cuộc hội thoại, nghe th&ocirc;ng b&aacute;o tại điểm dừng ch&acirc;n hoặc&hellip; Một c&aacute;ch sử dụng tai nghe an to&agrave;n, tiện lợi.</p>

<p><a href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044251.jpg" onclick="return false;"><img alt="Kết nối với môi trường xung quanh - Tai nghe Bluetooth True Wireless LG HBS-FN4" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014220-044251.jpg" /></a></p>

<h3>Đ&agrave;m thoại tiện lợi qua micro k&eacute;p hiệu suất cao, khử tiếng ồn, giảm tiếng vang, ghi &acirc;m, truyền tải &acirc;m thanh r&otilde; rệt, hiệu quả</h3>

<p>Ngay cả khi đ&agrave;m thoại qua tai nghe, chất lượng nội dung vẫn thật tốt nhất cả trong kh&ocirc;ng gian đ&ocirc;ng người, nhiều tiếng ồn.</p>

<p><a href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044303.jpg" onclick="return false;"><img alt="Đàm thoại chất lượng cao - Tai nghe Bluetooth True Wireless LG HBS-FN4" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044303.jpg" /></a></p>

<h3>Chuẩn Bluetooth 5.0 kết nối mượt m&agrave; đến 10m, trải nghiệm kh&ocirc;ng gian sử dụng tự do, l&yacute; th&uacute;</h3>

<p><a href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044311.jpg" onclick="return false;"><img alt="Bluetooth 5.0 - Tai nghe Bluetooth True Wireless LG HBS-FN4" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044311.jpg" /></a></p>

<h3>Kh&aacute;ng nước v&agrave; mồ h&ocirc;i tốt với chuẩn IPX4 bảo vệ tai nghe, thoải m&aacute;i sử dụng khi luyện tập hay gặp cơn mưa bất chợt</h3>

<p><a href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044323.jpg" onclick="return false;"><img alt="Kháng nước IPX4 - Tai nghe Bluetooth True Wireless LG HBS-FN4" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044323.jpg" /></a></p>

<h3>Sử dụng li&ecirc;n tục suốt ng&agrave;y d&agrave;i m&agrave; kh&ocirc;ng lo cạn năng lượng, với thời lượng pin l&ecirc;n đến 18 giờ k&egrave;m theo hộp sạc</h3>

<p>Bao gồm 6 giờ từ tai nghe v&agrave; th&ecirc;m 12 giờ dung lượng từ hộp sạc. Đặc biệt, tai nghe t&iacute;ch hợp c&ocirc;ng nghệ sạc nhanh với 60 ph&uacute;t d&ugrave;ng th&ecirc;m chỉ sau 5 ph&uacute;t sạc, kh&ocirc;ng lo ngại khi cần d&ugrave;ng gấp tai nghe.</p>

<p><a href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044332.jpg" onclick="return false;"><img alt="Dung lượng pin tốt - Tai nghe Bluetooth True Wireless LG HBS-FN4" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044332.jpg" /></a></p>

<h3>Kết nối quản l&yacute; v&agrave; t&igrave;m kiếm tai nghe của bạn qua ứng dụng TONE Free</h3>

<p>T&ugrave;y chỉnh tăng hoặc giảm c&aacute;c tần số cụ thể để c&aacute; nh&acirc;n h&oacute;a phong c&aacute;ch thưởng thức &acirc;m nhạc của bạn tr&ecirc;n tai nghe.</p>

<p>Đồng thời, khi gặp rắc rối trong việc t&igrave;m kiếm chiếc tai nghe nhỏ nhắn, h&atilde;y d&ugrave;ng TONE Free với trang &ldquo;T&igrave;m tai nghe của t&ocirc;i&rdquo;, chỉ cần nhấn chọn, chiếc tai nghe đang cần t&igrave;m sẽ ph&aacute;t tiếng b&iacute;p, dễ d&agrave;ng t&igrave;m kiếm hơn.</p>

<p><a href="https://www.thegioididong.com/images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044341.jpg" onclick="return false;"><img alt="Tone Free - Tai nghe Bluetooth True Wireless LG HBS-FN4" src="https://cdn.tgdd.vn/Products/Images/54/228893/tai-nghe-bluetooth-true-wireless-lg-hbs-fn4-014320-044341.jpg" /></a></p>

<p>C&oacute; thể thấy,&nbsp;<a href="https://www.thegioididong.com/tai-nghe-bluetooth" target="_blank">tai nghe Bluetooth</a>&nbsp;True Wireless LG HBS-FN4, lựa chọn tuyệt vời để c&aacute; nh&acirc;n h&oacute;a kh&ocirc;ng gian v&agrave; sở th&iacute;ch &acirc;m nhạc của ch&iacute;nh bạn, mang đến trải nghiệm ho&agrave;n hảo, l&yacute; th&uacute; khi sử dụng.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Tai nghe Bluetooth True Wireless LG Tone Free HBS-FN4','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Tai nghe Bluetooth True Wireless Earphones 2 Basic Xiaomi BHR4089GL',
        'price'=>1290000,
        'old_price'=>1890000,
        'quantity'=>50,
        'cover_image'=>'',
        'rate'=>400,
        'category_id'=>11,
        'brand_id'=>4,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Tai nghe Bluetooth True Wireless Earphones 2 Basic Xiaomi BHR4089GL</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/54/226702/Slider/maxresdefault-800x450.jpg" /></p>

<h3>Thiết kế đơn giản, gọn g&agrave;ng, m&agrave;u sắc thời thượng</h3>

<p><a href="https://www.thegioididong.com/tai-nghe/tai-nghe-true-wireless-earphones-2-basic-xiaomi" target="_blank">Tai nghe Bluetooth TWS Earphones 2 Basic Xiaomi BHR4089GL</a>&nbsp;c&oacute; hộp đựng cũng l&agrave; hộp sạc h&igrave;nh vu&ocirc;ng cho cảm gi&aacute;c cầm nắm vừa tay, c&ugrave;ng gam m&agrave;u trắng thời thượng tạo n&ecirc;n phong c&aacute;ch cho bạn. Tai nghe đi k&egrave;m với chiếc hộp đựng được l&agrave;m bằng nhựa, mặt trước c&oacute; đ&egrave;n Led th&ocirc;ng b&aacute;o thời lượng pin, mặt sau hộp c&oacute; cổng sạc USB Type C.</p>

<p><a href="https://www.thegioididong.com/images/54/226702/tai-nghe-true-wireless-earphones-2-basic-xiaomi-051820-061822.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth TWS Earphones 2 Basic Xiaomi BHR4089GL Trắng - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/54/226702/tai-nghe-true-wireless-earphones-2-basic-xiaomi-051820-061822.jpg" /></a></p>

<h3>Điều khiển tai nghe tiện lợi bằng cảm ứng tr&ecirc;n tai nghe</h3>

<p><a href="https://www.thegioididong.com/tai-nghe-khong-day" target="_blank">Tai nghe True Wireless</a>&nbsp;được trang bị điều khiển cảm ứng tr&ecirc;n tai nghe gi&uacute;p bạn thực hiện c&aacute;c thao t&aacute;c nhận/từ chối cuộc gọi, ph&aacute;t/tạm dừng nhạc, k&iacute;ch hoạt trợ l&yacute; giọng n&oacute;i,...</p>

<p><a href="https://www.thegioididong.com/images/54/226702/tai-nghe-true-wireless-earphones-2-basic-xiaomi-052020-062008.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth TWS Earphones 2 Basic Xiaomi BHR4089GL Trắng - Điều khiển" src="https://cdn.tgdd.vn/Products/Images/54/226702/tai-nghe-true-wireless-earphones-2-basic-xiaomi-052020-062008.jpg" /></a></p>

<p>C&aacute;c thao t&aacute;c điều khiển cảm biến:</p>

<ul>
	<li>
	<p>Chạm 2 lần bất k&igrave; để trả lời/c&uacute;p m&aacute;y.</p>
	</li>
	<li>
	<p>Chạm 2 lần để ph&aacute;t/tạm dừng 1 b&ecirc;n tai nghe.</p>
	</li>
	<li>
	<p>Để ph&aacute;t/tạm dừng 2 b&ecirc;n tai nghe bạn chỉ cần chạm tai nghe b&ecirc;n phải 2 lần.</p>
	</li>
	<li>
	<p>Chạm tai nghe b&ecirc;n tr&aacute;i 2 lần để k&iacute;ch hoạt trợ l&yacute; giọng n&oacute;i.</p>
	</li>
	<li>
	<p>Chạm v&agrave; giữ 3 gi&acirc;y để bật/tắt chế độ khử ồn.</p>
	</li>
</ul>

<h3>Kết nối với&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank">điện thoại</a>,&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>,&nbsp;<a href="https://www.thegioididong.com/may-tinh-bang" target="_blank">m&aacute;y t&iacute;nh bảng</a>,... dễ d&agrave;ng v&agrave; ổn định qua Bluetooth 5.0</h3>

<p>Tai nghe Xiaomi ứng dụng c&ocirc;ng nghệ Bluetooth 5.0 cho tốc độ kết nối nhanh v&agrave; ổn định trong phạm vi 10 m, kết nối dễ d&agrave;ng với smart phone.</p>

<p><a href="https://www.thegioididong.com/images/54/226702/tai-nghe-true-wireless-earphones-2-basic-xiaomi-052120-062122.jpg" onclick="return false;"><img alt="Tai nghe Bluetooth TWS Earphones 2 Basic Xiaomi BHR4089GL Trắng - Bluetooth 5.0" src="https://cdn.tgdd.vn/Products/Images/54/226702/tai-nghe-true-wireless-earphones-2-basic-xiaomi-052120-062122.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '',
        'details'=> '',
        'slug'=>Str::slug('Tai nghe Bluetooth True Wireless Earphones 2 Basic Xiaomi BHR4089GL','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Tai nghe chụp tai Gaming Asus TUF H3 Đen Đỏ',
        'price'=>990000,
        'old_price'=>1190000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/54/223020/tai-nghe-chup-tai-gaming-asus-tuf-h3-den-do-avatar-1-600x600.jpg',
        'rate'=>400,
        'category_id'=>11,
        'brand_id'=>2,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Tai nghe C&oacute; D&acirc;y Chụp Tai Gaming Asus TUF H3</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/54/223020/Slider/tai-nghe-chup-tai-gaming-asus-tuf-h3-den-do-070820-0509200.jpg" /></p>

<h3><a href="https://www.thegioididong.com/tai-nghe/tai-nghe-chup-tai-gaming-asus-tuf-h3-den-do" target="_blank">Tai nghe chụp tai Gaming Asus TUF H3</a>&nbsp;c&oacute;&nbsp;thiết kế s&agrave;nh điệu, phong c&aacute;ch, nhỏ gọn v&agrave; tiện dụng</h3>

<p>Với thiết kế chụp tai c&ugrave;ng phần quai to, d&agrave;y,&nbsp;Gaming Asus TUF H3 t&ocirc;ng m&agrave;u đen đỏ chủ đạo gi&uacute;p cố định, hạn chế x&ecirc; dịch khi bạn chuyển động.</p>

<p>Logo TUF được l&agrave;m nổi bật tr&ecirc;n thiết kế v&acirc;n xước l&agrave;m tăng phần c&aacute; t&iacute;nh cho sản phẩm.</p>

<p>Ngo&agrave;i ra&nbsp;<a href="https://www.thegioididong.com/tai-nghe-gaming" target="_blank">tai nghe chơi game</a>&nbsp;c&oacute; v&ograve;ng đeo v&agrave; cặp l&agrave;m bằng chất liệu th&eacute;p kh&ocirc;ng gỉ bền bỉ, l&agrave;m tăng th&ecirc;m độ ổn định v&agrave; tuổi thọ cho sản phẩm.</p>

<p><a href="https://www.thegioididong.com/images/54/223020/tai-nghe-chup-tai-gaming-asus-tuf-h3-den-do-091620-091615.jpg" onclick="return false;"><img alt="Tai nghe chụp tai Gaming Asus TUF H3 Đen Đỏ - Thiết kế sành điệu" src="https://cdn.tgdd.vn/Products/Images/54/223020/tai-nghe-chup-tai-gaming-asus-tuf-h3-den-do-091620-091615.jpg" /></a></p>

<h3>Đệm tai mềm mại nhưng kh&ocirc;ng đủ to để đeo to&agrave;n bộ n&ecirc;n nếu sử dụng&nbsp;<a href="https://www.thegioididong.com/tai-nghe" target="_blank">tai nghe</a>&nbsp;l&acirc;u sẽ g&acirc;y kh&oacute; chịu đ&ocirc;i ch&uacute;t</h3>

<p><a href="https://www.thegioididong.com/images/54/223020/tai-nghe-chup-tai-gaming-asus-tuf-h3-den-do-6-de%CC%A3%CC%82m-tai.jpg" onclick="return false;"><img alt="Tai nghe chụp tai Gaming Asus TUF H3 Đen Đỏ - Đệm tai" src="https://cdn.tgdd.vn/Products/Images/54/223020/tai-nghe-chup-tai-gaming-asus-tuf-h3-den-do-6-de%CC%A3%CC%82m-tai.jpg" /></a></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Tương th&iacute;ch:
	<p><em>Android</em><em>Windows</em></p>
	</li>
	<li>Jack cắm:
	<p><em>3.5 mm</em></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh:
	<p><em><a href="https://www.thegioididong.com/hoi-dap/cac-cong-nghe-am-thanh-thuong-thay-tren-tai-nghe-h-1222527#am-vom-71" target="_blank">&Acirc;m thanh v&ograve;m 7.1</a></em></p>
	</li>
	<li>Kết nối c&ugrave;ng l&uacute;c:
	<p><em>1 thiết bị</em></p>
	</li>
	<li>Trọng lượng:
	<p><em>294g</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>Đ&agrave;i Loan</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Trung Quốc</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>Trải nghiệm &acirc;m thanh mạnh mẽ, sống động với c&ocirc;ng nghệ&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cac-cong-nghe-am-thanh-thuong-thay-tren-tai-nghe-h-1222527#am-vom-71" target="_blank">&acirc;m thanh v&ograve;m 7.1</a>&nbsp;v&agrave; m&agrave;ng loa ASUS Essence 50 mm</h2>

<p>C&ocirc;ng nghệ buồng c&aacute;ch &acirc;m độc quyền, m&agrave;ng loa k&iacute;ch cỡ tới 50 mm cho &acirc;m thanh rộng, r&otilde; n&eacute;t c&ugrave;ng c&ocirc;ng nghệ &acirc;m thanh v&ograve;m 7.1 tạo m&ocirc;i trường &acirc;m thanh 3D bao tr&ugrave;m, cho bạn ho&agrave;n to&agrave;n ch&igrave;m đắm trong tựa game y&ecirc;u th&iacute;ch.&nbsp;</p>

<p><a href="https://www.thegioididong.com/images/54/223020/tai-nghe-chup-tai-gaming-asus-tuf-h3-den-do-091620-091626.jpg" onclick="return false;"><img alt="Tai nghe chụp tai Gaming Asus TUF H3 Đen Đỏ - Trải nghiệm âm thanh mạnh mẽ" src="https://cdn.tgdd.vn/Products/Images/54/223020/tai-nghe-chup-tai-gaming-asus-tuf-h3-den-do-091620-091626.jpg" /></a></p>

<h3>Micro&nbsp;<a href="https://www.thegioididong.com/tai-nghe?g=tai-nghe-chup-tai" target="_blank">tai nghe chụp tai</a>&nbsp;gọn đẹp, kiểu l&ograve; xo tiện điều chỉnh, truyền tải &acirc;m thanh nhanh, to, cho bạn giao tiếp trong game dễ d&agrave;ng</h3>

<p><a href="https://www.thegioididong.com/images/54/223020/tai-nghe-chup-tai-gaming-asus-tuf-h3-den-do-091620-091630.jpg" onclick="return false;"><img alt="Tai nghe chụp tai Gaming Asus TUF H3 Đen Đỏ - Micro tai nghe chụp tai gọn đẹp" src="https://cdn.tgdd.vn/Products/Images/54/223020/tai-nghe-chup-tai-gaming-asus-tuf-h3-den-do-091620-091630.jpg" /></a></p>

<h3><a href="https://www.thegioididong.com/tai-nghe-asus" target="_blank">Tai nghe Asus</a>&nbsp;ph&ugrave; hợp với nhiều thiết bị</h3>

<p>Kết nối dễ d&agrave;ng tai nghe với&nbsp;<a href="https://www.thegioididong.com/may-tinh-de-ban" target="_blank">m&aacute;y t&iacute;nh để b&agrave;n</a>,&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>,&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank">điện thoại</a>,&nbsp;<a href="https://www.thegioididong.com/may-tinh-bang" target="_blank">m&aacute;y t&iacute;nh bảng</a>&nbsp;qua cổng 3.5mm hoặc sử dụng với thiết bị chơi game PlayStation 4,&nbsp;Nintendo Switch,&nbsp;Xbox,...</p>

<p><a href="https://www.thegioididong.com/images/54/223020/tai-nghe-chup-tai-gaming-asus-tuf-h3-den-do-091820-091849.jpg" onclick="return false;"><img alt="Tai nghe chụp tai Gaming Asus TUF H3 Đen Đỏ - Phù hợp với nhiều thiết bị" src="https://cdn.tgdd.vn/Products/Images/54/223020/tai-nghe-chup-tai-gaming-asus-tuf-h3-den-do-091820-091849.jpg" /></a></p>

<p>N&oacute;i t&oacute;m lại, tai nghe chụp tai Gaming Asus TUF H3 Đen Đỏ l&agrave; lựa chọn mua sắm th&ocirc;ng minh cho mọi gam thủ nhờ thiết kế c&aacute; t&iacute;nh, bền tốt, sử dụng thoải m&aacute;i, hứa hẹn sẽ hỗ trợ bạn tạo n&ecirc;n những m&agrave;n game đỉnh cao.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Tai nghe chụp tai Gaming Asus TUF H3 Đen Đỏ','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Tai nghe Bluetooth Thể Thao LG Tone Platinum SE HBS-1120',
        'price'=>16990000,
        'old_price'=>17990000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-avatar-1-600x600.jpg',
        'rate'=>400,
        'category_id'=>11,
        'brand_id'=>8,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Tai nghe Bluetooth Thể Thao LG Tone Platinum SE HBS-1120</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/54/211183/Slider/tai-nghe-bluetooth-lg-hbs-1120-den-045220-085255-306.jpg" /></p>

<h3><a href="https://www.thegioididong.com/tai-nghe/tai-nghe-bluetooth-lg-hbs-1120-den" target="_blank">Tai nghe Bluetooth LG HBS-1120</a>&nbsp;thiết kế cao cấp, tinh xảo, nổi bật khi đeo</h3>

<p><a href="https://www.thegioididong.com/images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-1-1.jpg" onclick="return false;"><img alt="Thiết kế tinh xảo, nổi bật - Tai nghe Bluetooth LG HBS-1120 Đen" src="https://cdn.tgdd.vn/Products/Images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-1-1.jpg" /></a></p>

<h3>Đệm&nbsp;<a href="https://www.thegioididong.com/tai-nghe" target="_blank">tai nghe</a>&nbsp;mềm mại, n&uacute;t tai c&oacute; thể thu v&agrave;o tiện lợi, đảm bảo mang đến trải nghiệm thoải m&aacute;i, dễ chịu nhất</h3>

<p><a href="https://www.thegioididong.com/images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-2-1.jpg" onclick="return false;"><img alt="Đệm tai nghe mềm mại, êm ái khi đeo - Tai nghe Bluetooth LG HBS-1120 Đen" src="https://cdn.tgdd.vn/Products/Images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-2-1.jpg" /></a></p>

<h3>&Acirc;m thanh được điều chỉnh bởi Harman Kardon - thương hiệu &acirc;m thanh nổi tiếng to&agrave;n cầu, cho ra chất &acirc;m tốt nhất</h3>

<p><a href="https://www.thegioididong.com/images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-3-1.jpg" onclick="return false;"><img alt="Âm thanh được điều chỉnh bởi Harman Kardon - Tai nghe Bluetooth LG HBS-1120 Đen" src="https://cdn.tgdd.vn/Products/Images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-3-1.jpg" /></a></p>

<h3>T&iacute;ch hợp Google Assistant, ra lệnh nhanh ch&oacute;ng, tiện lợi m&agrave; kh&ocirc;ng cần mở kh&oacute;a điện thoại</h3>

<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-google-assistant-tro-ly-ao-1172276" target="_blank">T&igrave;m hiểu Google Assistant trợ l&yacute; ảo tiếng Việt đầu ti&ecirc;n</a>.</p>

<p><a href="https://www.thegioididong.com/images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-4-1.jpg" onclick="return false;"><img alt="Tích hợp Google Assistant - Tai nghe Bluetooth LG HBS-1120 Đen" src="https://cdn.tgdd.vn/Products/Images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-4-1.jpg" /></a></p>

<h3><a href="https://www.thegioididong.com/tai-nghe-nhet-trong" target="_blank">Tai nghe nh&eacute;t trong</a>&nbsp;trang bị micro hỗ trợ đ&agrave;m thoại, nhận giọng n&oacute;i để tương t&aacute;c với Google Assistant</h3>

<p><a href="https://www.thegioididong.com/images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-5-1.jpg" onclick="return false;"><img alt="Trang bị micro hỗ trợ đàm thoại - Tai nghe Bluetooth LG HBS-1120 Đen" src="https://cdn.tgdd.vn/Products/Images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-5-1.jpg" /></a></p>

<h3><a href="https://www.thegioididong.com/tai-nghe-lg" target="_blank">Tai nghe LG</a>&nbsp;HBS-112 sử dụng c&ocirc;ng nghệ Bluetooth 4.2 cho kết nối ổn định, mượt m&agrave; trong khoảng c&aacute;ch 10 m</h3>

<p><a href="https://www.thegioididong.com/images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-6-1.jpg" onclick="return false;"><img alt="Công nghệ Bluetooth 4.2 cho kết nối ổn định, mượt mà - Tai nghe Bluetooth LG HBS-1120 Đen" src="https://cdn.tgdd.vn/Products/Images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-6-1.jpg" /></a></p>

<h3>Tương th&iacute;ch với hầu hết&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank">điện thoại</a>,&nbsp;<a href="https://www.thegioididong.com/may-tinh-bang" target="_blank">m&aacute;y t&iacute;nh bảng</a>&nbsp;v&agrave;&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>&nbsp;c&oacute; bluetooth hiện nay</h3>

<p><a href="https://www.thegioididong.com/images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-7-1.jpg" onclick="return false;"><img alt="Tương thích với hầu hết điện thoại, máy tính bảng và laptop - Tai nghe Bluetooth LG HBS-1120 Đen" src="https://cdn.tgdd.vn/Products/Images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-7-1.jpg" /></a></p>

<h3>Dung lượng pin 220 mAh, sạc trong 2 giờ, nghe nhạc 12 giờ v&agrave; đ&agrave;m thoại 13 giờ li&ecirc;n tục</h3>

<p><a href="https://www.thegioididong.com/images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-8-1.jpg" onclick="return false;"><img alt="Nghe nhạc 12 giờ và đàm thoại 13 giờ liên tục - Tai nghe Bluetooth LG HBS-1120 Đen" src="https://cdn.tgdd.vn/Products/Images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-8-1.jpg" /></a></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h2>&nbsp;</h2>

<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Tương th&iacute;ch:
	<p><em>Android</em><em>MacOS (Macbook, iMac)</em><em>Windows</em><em>iOS (iPhone)</em><em>Windows Phone</em></p>
	</li>
	<li>Cổng sạc:
	<p><em>Micro USB</em></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh:
	<p><em><a href="https://www.thegioididong.com/hoi-dap/cac-cong-nghe-am-thanh-thuong-thay-tren-tai-nghe-h-1222527#Quad-Layer" target="_blank">Quad Layer</a></em></p>
	</li>
	<li>Thời gian sử dụng:
	<p><em>12 giờ</em></p>
	</li>
	<li>Thời gian sạc đầy:
	<p><em>2 giờ</em></p>
	</li>
	<li>Kết nối c&ugrave;ng l&uacute;c:
	<p><em>2 thiết bị</em></p>
	</li>
	<li>Hỗ trợ kết nối:
	<p><em>10m (Bluetooth 4.2)</em></p>
	</li>
	<li>Ph&iacute;m điều khiển:
	<p><em>Mic thoại</em><em>Nghe/nhận cuộc gọi</em><em>Ph&aacute;t/dừng chơi nhạc</em><em>Chuyển b&agrave;i h&aacute;t</em><em>Tăng/giảm &acirc;m lượng</em></p>
	</li>
	<li>K&iacute;ch thước:
	<p><em>D&agrave;i 17.9 cm - Rộng 15.5 cm - D&agrave;y 1.28cm</em></p>
	</li>
	<li>Trọng lượng:
	<p><em>54 g</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>H&agrave;n Quốc</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Việt Nam</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2><a href="https://www.thegioididong.com/tai-nghe-bluetooth" target="_blank">Tai nghe bluetooth</a>&nbsp;LG&nbsp;HBS-112 với c&aacute;c n&uacute;t t&iacute;nh năng tiện &iacute;ch như:</h2>

<p>- Nhận cuộc gọi, dừng/ph&aacute;t nhạc.</p>

<p>- Chuyển b&agrave;i h&aacute;t, tăng giảm &acirc;m lượng.</p>

<p>- N&uacute;t k&iacute;ch hoạt Google Assistant.</p>

<p><a href="https://www.thegioididong.com/images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-10-1.jpg" onclick="return false;"><img alt="Trang bị các nút tính năng tiện ích - Tai nghe Bluetooth LG HBS-1120 Đen" src="https://cdn.tgdd.vn/Products/Images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-10-1.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-9-1.jpg" onclick="return false;"><img alt="Trang bị các nút tính năng tiện ích - Tai nghe Bluetooth LG HBS-1120 Đen" src="https://cdn.tgdd.vn/Products/Images/54/211183/tai-nghe-bluetooth-lg-hbs-1120-den-9-1.jpg" /></a></p>

<p>C&oacute; thể thấy,&nbsp;<a href="https://www.thegioididong.com/tai-nghe-bluetooth" target="_blank">tai nghe Bluetooth LG</a>&nbsp;HBS-1120 nổi bật với&nbsp;<strong>chất lượng &acirc;m thanh tốt</strong>&nbsp;nhờ sự kết hợp với&nbsp;Harman Kardon, b&ecirc;n cạnh đ&oacute;, việc&nbsp;<strong>t&iacute;ch hợp Google Assistant</strong>&nbsp;v&agrave; thời lượng&nbsp;<strong>pin sử dụng ấn tượng đến 13 giờ</strong>, sản phẩm ph&ugrave; hợp cho người d&ugrave;ng y&ecirc;u th&iacute;ch nghe nhạc, y&ecirc;u th&iacute;ch sự tiện lợi của trợ l&yacute; ảo v&agrave; sử dụng trong thời gian d&agrave;i với những chuyến đi, du lịch, d&atilde; ngoại.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Tai nghe Bluetooth Thể Thao LG Tone Platinum SE HBS-1120','-').'.aspx',
        'created_at'=>now(),

    ]);
    DB::table('products')->insert([
        'name'=>'Loa Bluetooth LG Xboom Go PL7 Xanh Đen',
        'price'=>2090000,
        'old_price'=>2790000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-600x600-1-600x600.jpg',
        'rate'=>400,
        'category_id'=>12,
        'brand_id'=>8,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Loa Bluetooth LG Xboom Go PL7</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/2162/227187/Slider/loa-bluetooth-lg-xboom-go-pl7-xanh-den-071020-0314020.jpg" /></p>

<p><img src="https://cdn.tgdd.vn/Products/Images/2162/227187/Kit/loa-bluetooth-lg-xboom-go-pl7-xanh-den-n.jpg" /></p>

<h3>&nbsp;</h3>

<h3>Kiểu d&aacute;ng nhỏ gọn, linh hoạt cho mọi cuộc vui</h3>

<p><a href="https://www.thegioididong.com/loa-laptop/loa-bluetooth-lg-xboom-go-pl7-xanh-den" target="_blank">Loa Bluetooth LG Xboom Go PL7</a>&nbsp;sở hữu m&agrave;u xanh đen đẹp mắt, vỏ ngo&agrave;i phủ chất liệu cao su cầm kh&aacute; &ecirc;m tay. Loa được thiết kế theo dạng bầu dục, nhỏ gọn m&agrave; kh&ocirc;ng k&eacute;m phần sang trọng.</p>

<p><a href="https://www.thegioididong.com/images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-144620-084645.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL7 Xanh Đen" src="https://cdn.tgdd.vn/Products/Images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-144620-084645.jpg" /></a></p>

<p>C&aacute;c n&uacute;t điều khiển tr&ecirc;n th&acirc;n&nbsp;<a href="https://www.thegioididong.com/loa-laptop" target="_blank">loa</a>&nbsp;r&otilde; r&agrave;ng, dễ nhận biết v&agrave; sử dụng.</p>

<p><a href="https://www.thegioididong.com/images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-153820-123852.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL7 - Nút chức năng" src="https://cdn.tgdd.vn/Products/Images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-153820-123852.jpg" /></a></p>

<h3>&Acirc;m bass s&acirc;u hơn, &acirc;m sắc phong ph&uacute; hơn với&nbsp;c&ocirc;ng nghệ Meridian</h3>

<p>C&ocirc;ng nghệ Meridian tr&ecirc;n&nbsp;<a href="https://www.thegioididong.com/loa-laptop-lg" target="_blank">loa LG</a>&nbsp;Xboom sẽ đưa bạn v&agrave;o kh&ocirc;ng gian &acirc;m nhạc đầy tuyệt diệu với phần cải thiện &acirc;m bass s&acirc;u lắng hơn v&agrave; từng &acirc;m sắc thể hiện r&otilde; n&eacute;t, phong ph&uacute;.</p>

<p><a href="https://www.thegioididong.com/images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-144820-084816.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL7 Xanh Đen - Công nghệ Meridian" src="https://cdn.tgdd.vn/Products/Images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-144820-084816.jpg" /></a></p>

<h3>Khuếch đại v&agrave; mở rộng trường &acirc;m thanh qua t&iacute;nh năng&nbsp;Sound Boost</h3>

<p>Chỉ cần nhấn v&agrave;o&nbsp;Sound Boost, loa&nbsp;Bluetooth LG sẽ đưa &acirc;m thanh lan rộng một c&aacute;ch mạnh mẽ hơn, phủ kh&ocirc;ng gian của bạn ngập tr&agrave;n giai điệu.</p>

<p><a href="https://www.thegioididong.com/images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-144920-084912.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL7 Xanh Đen - Sound Boost" src="https://cdn.tgdd.vn/Products/Images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-144920-084912.jpg" /></a></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Loại loa:
	<p><em>Loa bluetooth</em></p>
	</li>
	<li>Tương th&iacute;ch:
	<p><em>Android</em><em>Windows</em><em>iOS (iPhone)</em></p>
	</li>
	<li>Tổng c&ocirc;ng suất:
	<p><em>30 W</em></p>
	</li>
	<li>Thời gian sử dụng:
	<p><em>Sạc khoảng 5 tiếng</em><em>D&ugrave;ng khoảng 24 tiếng</em></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh:
	<p><em>Meridian</em><em>Sound Boost</em></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y:
	<p><em>Bluetooth</em></p>
	</li>
	<li>Kết nối kh&aacute;c:
	<p><em>AUX in</em></p>
	</li>
	<li>Tiện &iacute;ch:
	<p><em>Kết nối kh&ocirc;ng d&acirc;y nhiều loa c&ugrave;ng l&uacute;c</em><em><a href="https://www.thegioididong.com/hoi-dap/chong-nuoc-va-chong-bui-tren-smart-phone-771130" target="_blank">Chống nước IPX5</a></em><em>Google Assistant</em></p>
	</li>
	<li>Ph&iacute;m điều khiển:
	<p><em>Bật/tắt bluetooth</em><em>N&uacute;t nguồn</em><em>Tăng/giảm &acirc;m lượng</em><em>Ph&aacute;t/dừng chơi nhạc</em></p>
	</li>
	<li>Điều khiển bằng điện thoại:
	<p><em>LG XBOOM</em></p>
	</li>
	<li>K&iacute;ch thước:
	<p><em>D&agrave;i 25 cm - Đường k&iacute;nh 10 cm - Nặng 1.46 kg</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>H&agrave;n Quốc</em></p>
	</li>
	<li>D&ograve;ng sản phẩm:
	<p><em>2020</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>Cảm nhận nhịp nhạc mạnh mẽ với c&ocirc;ng suất 30 W v&agrave; cặp loa si&ecirc;u trầm</h2>

<p><a href="https://www.thegioididong.com/images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-144920-084957.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL7 Xanh Đen - Công suất 20 W" src="https://cdn.tgdd.vn/Products/Images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-144920-084957.jpg" /></a></p>

<h3>Thỏa sức chơi tiệc ngo&agrave;i trời kh&ocirc;ng ngại mưa gi&oacute; khi loa được trang bị&nbsp;chống nước IPX5</h3>

<p><a href="https://www.thegioididong.com/images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-145020-085044.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL7 Xanh Đen - Chống nước IPX5" src="https://cdn.tgdd.vn/Products/Images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-145020-085044.jpg" /></a></p>

<h3>Kết nối nhanh ch&oacute;ng v&agrave; ổn định th&ocirc;ng qua&nbsp;Bluetooth với khoảng c&aacute;ch tối đa l&ecirc;n đến 10 m</h3>

<p><a href="https://www.thegioididong.com/images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-145120-085119.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL7 Xanh Đen - Bluetooth" src="https://cdn.tgdd.vn/Products/Images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-145120-085119.jpg" /></a></p>

<h3>Tiện lợi điều khiển loa bằng giọng n&oacute;i nhờ&nbsp;Google Assistant (Android) hoặc Siri (iOS)</h3>

<p><a href="https://www.thegioididong.com/images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-145220-085205.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL7 Xanh Đen - Điều khiển bằng giọng nói" src="https://cdn.tgdd.vn/Products/Images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-145220-085205.jpg" /></a></p>

<h3>Điều khiển loa bằng ứng dụng Xboom c&agrave;i đặt tr&ecirc;n điện thoại</h3>

<p>Những điện thoại x&agrave;i hệ điều h&agrave;nh Android, Windows v&agrave; iOS (iPhone) đều c&oacute; thể c&agrave;i đặt được ứng dụng Xboom. Tr&ecirc;n ứng dụng n&agrave;y, bạn c&oacute; thể điều khiển mọi t&iacute;nh năng của loa như: Tắt/mở nhạc, chỉnh m&agrave;u sắc đ&egrave;n led,...</p>

<p><a href="https://www.thegioididong.com/images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-145320-085336.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL7 Xanh Đen - Ứng dụng Xboom" src="https://cdn.tgdd.vn/Products/Images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-145320-085336.jpg" /></a></p>

<h3>Tiệc lớn th&ecirc;m h&agrave;o hứng với kết nối kh&ocirc;ng d&acirc;y nhiều loa c&ugrave;ng l&uacute;c</h3>

<p>Loa Bluetooth LG Xboom Go PL7 hỗ trợ kết nối kh&ocirc;ng d&acirc;y đến 100 loa c&ugrave;ng một l&uacute;c, gi&uacute;p &acirc;m nhạc đồng bộ ngay cả trong kh&ocirc;ng gian lớn.</p>

<p><a href="https://www.thegioididong.com/images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-145420-085428.jpg" onclick="return false;"><img alt="Kết nối không dây nhiều loa cùng lúc" src="https://cdn.tgdd.vn/Products/Images/2162/227187/loa-bluetooth-lg-xboom-go-pl7-xanh-den-145420-085428.jpg" /></a></p>

<p>Nh&igrave;n chung, chiếc loa&nbsp;Bluetooth LG Xboom Go PL7 Xanh Đen vừa nhỏ gọn vừa đẹp mắt lại nhiều t&iacute;nh năng thể n&agrave;y th&igrave; chắc chắn kh&ocirc;ng thể bỏ qua được đối với c&aacute;c bạn trẻ y&ecirc;u &acirc;m nhạc rồi.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Loa Bluetooth LG Xboom Go PL7 Xanh Đen','-').'.aspx',
        'created_at'=>now(),

    ]);

        DB::table('products')->insert([
            'name'=>'Loa Bluetooth LG Xboom Go PL5 Xanh Đen',
            'price'=>1690000,
            'old_price'=>1790000,
            'quantity'=>50,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-600x600-1-600x600.jpg',
            'rate'=>400,
            'category_id'=>12,
            'brand_id'=>8,
            'user_id'=>random_int(1,5),
            'describe'=> '<h2>Đặc điểm nổi bật của Loa Bluetooth LG Xboom Go PL5</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/2162/227186/Slider/loa-bluetooth-lg-xboom-go-pl5-xanh-den-071020-0314260.jpg" /></p>

<p><img src="https://cdn.tgdd.vn/Products/Images/2162/227186/Kit/loa-bluetooth-lg-xboom-go-pl5-xanh-den-note.jpg" /></p>

<h3>Thiết kế đơn giản, phong c&aacute;ch năng động</h3>

<p><a href="https://www.thegioididong.com/loa-laptop/loa-bluetooth-lg-xboom-go-pl5-xanh-den" target="_blank">Loa Bluetooth LG Xboom Go PL5 Xanh Đen</a>&nbsp;c&oacute; thiết kế h&igrave;nh trụ nằm ngang tạo cảm gi&aacute;c vừa vặn khi cầm tr&ecirc;n tay, m&agrave;u xanh đen trẻ trung năng động.</p>

<p>Thoải m&aacute;i mang chiếc loa Bluetooth n&agrave;y tham gia v&agrave;o c&aacute;c bữa tiệc tại bể bơi hay ngo&agrave;i trời m&agrave; kh&ocirc;ng cần lo lắng bị ướt nước với chuẩn kh&aacute;ng nước IPX5.</p>

<p><a href="https://www.thegioididong.com/images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-151720-011738.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL5 - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-151720-011738.jpg" /></a></p>

<h3>Cảm nhận được &acirc;m thanh mạnh mẽ v&agrave; s&ocirc;i động hơn</h3>

<p>Khi &acirc;m thanh ph&aacute;t ra ở mức tối đa vẫn kh&ocirc;ng bị m&eacute;o, r&egrave; hay biến dạng &acirc;m thanh cho bạn trải nghiệm &acirc;m thanh tuyệt vời với c&ocirc;ng nghệ Meridian.</p>

<p><a href="https://www.thegioididong.com/images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-151720-011730.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL5 - Meridian " src="https://cdn.tgdd.vn/Products/Images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-151720-011730.jpg" /></a></p>

<p>&Acirc;m thanh được khuếch đại lan tỏa khắp kh&ocirc;ng gian, l&agrave;m khuấy đảo cả bữa tiệc với c&ocirc;ng nghệ Sound Boost.</p>

<p><a href="https://www.thegioididong.com/images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-151720-011734.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL5 - Sound Boost" src="https://cdn.tgdd.vn/Products/Images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-151720-011734.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/loa-laptop-bluetooth" target="_blank">Loa Bluetooth</a>&nbsp;mang đến trải nghiệm nghe nhạc, chơi game với chất lượng &acirc;m thanh r&otilde; r&agrave;ng, đầy đủ bass nhờ c&ocirc;ng suất loa l&ecirc;n đến 20 W.</p>

<p>B&ecirc;n cạnh đ&oacute; đ&egrave;n m&agrave;u được trang bị b&ecirc;n tr&ecirc;n m&agrave;ng loa sẽ g&oacute;p phần tạo bầu kh&ocirc;ng kh&iacute; cho bạn tận hưởng &acirc;m nhạc trọn vẹn nhất.</p>

<p><a href="https://www.thegioididong.com/images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-151520-021552.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL5 - Công suất" src="https://cdn.tgdd.vn/Products/Images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-151520-021552.jpg" /></a></p>

<h3>Loa LG kết nối ổn định trong phạm vi 10 m với c&ocirc;ng nghệ Bluetooth</h3>

<p><a href="https://www.thegioididong.com/images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-150820-020838.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL5 - Bluetooth" src="https://cdn.tgdd.vn/Products/Images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-150820-020838.jpg" /></a></p>

<h3>&nbsp;</h3>
',
            'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Loại loa:
	<p><em>Loa bluetooth</em></p>
	</li>
	<li>Tổng c&ocirc;ng suất:
	<p><em>20 W</em></p>
	</li>
	<li>Thời gian sử dụng:
	<p><em>Sạc khoảng 4 tiếng</em><em>D&ugrave;ng khoảng 18 tiếng</em></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh:
	<p><em>Meridian</em><em>Sound Boost</em></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y:
	<p><em>Bluetooth</em></p>
	</li>
	<li>Kết nối kh&aacute;c:
	<p><em>AUX in</em></p>
	</li>
	<li>Tiện &iacute;ch:
	<p><em>Google Assistant</em><em><a href="https://www.thegioididong.com/hoi-dap/chong-nuoc-va-chong-bui-tren-smart-phone-771130" target="_blank">Chống nước IPX5</a></em></p>
	</li>
	<li>Ph&iacute;m điều khiển:
	<p><em>Bật/tắt bluetooth</em><em>N&uacute;t nguồn</em><em>Tăng/giảm &acirc;m lượng</em><em>Ph&aacute;t/dừng chơi nhạc</em><em>Bật/tắt Sound Boost</em></p>
	</li>
	<li>Điều khiển bằng điện thoại:
	<p><em>LG XBOOM</em></p>
	</li>
	<li>K&iacute;ch thước:
	<p><em>D&agrave;i 19.5 cm - đường k&iacute;nh 7.9cm - Nặng 0.62 kg</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>H&agrave;n Quốc</em></p>
	</li>
	<li>D&ograve;ng sản phẩm:
	<p><em>2020</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
            'details'=> '<h2>Điều khiển loa dễ d&agrave;ng bằng giọng n&oacute;i</h2>

<p>Để khởi động trợ l&yacute; giọng n&oacute;i bạn chỉ cần nhấn giữ n&uacute;t ph&aacute;t/dừng nhạc trong 2 gi&acirc;y v&agrave; k&iacute;ch hoạt Google Assistant tr&ecirc;n điện thoại Android hoặc Siri tr&ecirc;n iOS. Bạn c&oacute; thể n&oacute;i để bật/tắt loa, ph&aacute;t/dừng nhạc, &acirc;m lượng v&agrave; một số chức năng c&oacute; tr&ecirc;n chiếc&nbsp;<a href="https://www.thegioididong.com/loa-laptop-lg-bluetooth" target="_blank">loa Bluetooth LG&nbsp;</a>n&agrave;y.</p>

<p><a href="https://www.thegioididong.com/images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-151720-011701.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL5 - Điều khiển bằng giọng nói" src="https://cdn.tgdd.vn/Products/Images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-151720-011701.jpg" /></a></p>

<p>Trong một bữa tiệc ngo&agrave;i trời hay ở kh&ocirc;ng gian lớn một chiếc&nbsp;<a href="https://www.thegioididong.com/loa-laptop" target="_blank">loa</a>&nbsp;kh&ocirc;ng thể ph&aacute;t ra &acirc;m thanh bao phủ to&agrave;n bộ kh&ocirc;ng gian được, với loa Bluetooth LG Xboom Go PL5 bạn c&oacute; thể li&ecirc;n kết c&ugrave;ng l&uacute;c nhiều loa với nhau cho &acirc;m thanh bao phủ to&agrave;n bộ ng&oacute;c ng&aacute;ch của bữa tiệc.</p>

<p><a href="https://www.thegioididong.com/images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-152620-012600.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL5 - Liên kết 100 loa" src="https://cdn.tgdd.vn/Products/Images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-152620-012600.jpg" /></a></p>

<h3>Điều khiển loa bằng điện thoại dễ d&agrave;ng th&ocirc;ng qua ứng dụng XBOOM</h3>

<p>Bạn c&oacute; thể điều chỉnh m&agrave;u sắc, tốc độ của đ&egrave;n led th&ocirc;ng qua ứng dụng XBOOM.</p>

<p><a href="https://www.thegioididong.com/images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-155620-015643.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL5 - XBOOM" src="https://cdn.tgdd.vn/Products/Images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-155620-015643.jpg" /></a></p>

<h3>Dung lượng pin lớn, cho thời gian sử dụng l&ecirc;n đến 18 tiếng</h3>

<p><a href="https://www.thegioididong.com/images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-151720-011719.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL5 - Pin" src="https://cdn.tgdd.vn/Products/Images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-151720-011719.jpg" /></a></p>

<h3>C&aacute;c n&uacute;t điều khiển tr&ecirc;n loa</h3>

<p><a href="https://www.thegioididong.com/images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-150120-020118.jpg" onclick="return false;"><img alt="Loa Bluetooth LG Xboom Go PL5 -Nút điều khiển" src="https://cdn.tgdd.vn/Products/Images/2162/227186/loa-bluetooth-lg-xboom-go-pl5-xanh-den-150120-020118.jpg" /></a></p>

<p>Loa Bluetooth LG Xboom Go PL5 Xanh Đen sở hữu thiết kế đẹp mắt, dung lượng pin lớn c&ugrave;ng với &acirc;m thanh mạnh mẽ sẽ sự lựa chọn l&yacute; tưởng cho những người y&ecirc;u &acirc;m nhạc.</p>

<p>&nbsp;</p>
',
            'slug'=>Str::slug('Loa Bluetooth LG Xboom Go PL5 Xanh Đen','-').'.aspx',
            'created_at'=>now(),

        ]);DB::table('products')->insert([
        'name'=>'Loa kéo karaoke LG RL2 50W',
        'price'=>5990000,
        'old_price'=>7990000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/2162/202728/loa-keo-lg-rl2-10-600x600.jpg',
        'rate'=>400,
        'category_id'=>12,
        'brand_id'=>8,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Đặc điểm nổi bật của Loa k&eacute;o karaoke LG RL2</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/2162/202728/Slider/vi-vn-lg-rl2.jpg" /></p>

<p><img src="https://cdn.tgdd.vn/Products/Images/2162/202728/Kit/loa-keo-lg-rl2.jpg" /></p>

<h3><a href="https://www.thegioididong.com/loa-laptop/loa-keo-lg-rl2" target="_blank">Loa k&eacute;o karaoke LG RL2 50W</a>&nbsp;thiết kế sang trọng, kết cấu ho&agrave;n thiện, vững chắc, t&ocirc;n vinh n&eacute;t hiện đại, trẻ trung cho mọi kh&ocirc;ng gian sử dụng</h3>

<p><a href="https://www.thegioididong.com/images/2162/202728/lg-rl2-5.jpg" onclick="return false;"><img alt="Thiết kế sang trọng, kết cấu hoàn thiện, vững chắc - Loa kéo karaoke LG RL2 50W" src="https://cdn.tgdd.vn/Products/Images/2162/202728/lg-rl2-5.jpg" /></a></p>

<h3>&Acirc;m thanh trung thực, mạnh mẽ, cuốn h&uacute;t bất tận với&nbsp;<a href="https://www.thegioididong.com/loa-laptop-tu-40w-100w" target="_blank">c&ocirc;ng suất 50 W</a>,&nbsp;loa trầm 6.5&quot;</h3>

<p>Loa trầm ph&aacute;t &acirc;m trầm tinh tế t&aacute;i hiện từng nốt nhạc r&otilde; r&agrave;ng, sắc sảo, cho bạn cảm nhận &acirc;m thanh ch&acirc;n thật, quyến rũ.</p>

<p><a href="https://www.thegioididong.com/loa-laptop-loa-keo" target="_blank">Loa k&eacute;o</a>&nbsp;sử dụng li&ecirc;n tục trong thời gian từ 13 - 16 tiếng, sạc đầy trong 8 - 10 tiếng cho bạn ca h&aacute;t, nghe nhạc thoải m&aacute;i, d&agrave;i l&acirc;u.</p>

<p><a href="https://www.thegioididong.com/images/2162/202728/lg-rl2-7.jpg" onclick="return false;"><img alt="Âm thanh trung thực, mạnh mẽ - Loa kéo karaoke LG RL2 50W" src="https://cdn.tgdd.vn/Products/Images/2162/202728/lg-rl2-7.jpg" /></a></p>

<h3>Tay k&eacute;o vali c&ugrave;ng b&aacute;nh xe nhỏ cho bạn di chuyển loa k&eacute;o linh hoạt, nhẹ nh&agrave;ng đến mọi địa điểm</h3>

<p><a href="https://www.thegioididong.com/images/2162/202728/lg-rl2-6.jpg" onclick="return false;"><img alt="Tay kéo vali cùng bánh xe nhỏ cho bạn di chuyển loa kéo linh hoạt - Loa kéo karaoke LG RL2 50W" src="https://cdn.tgdd.vn/Products/Images/2162/202728/lg-rl2-6.jpg" /></a></p>

<h3>Kết nối kh&ocirc;ng d&acirc;y&nbsp;Bluetooth c&oacute; thể kết nối 3 thiết bị c&ugrave;ng l&uacute;c cho khả năng chuyển đổi, ph&aacute;t nhạc linh động, đa dạng, tiện lợi hơn&nbsp;</h3>

<p><a href="https://www.thegioididong.com/images/2162/202728/lg-rl2-8.jpg" onclick="return false;"><img alt="Kết nối không dây Bluetooth có thể kết nối 3 thiết bị cùng lúc - Loa kéo karaoke LG RL2 50W" src="https://cdn.tgdd.vn/Products/Images/2162/202728/lg-rl2-8.jpg" /></a></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li>Loại loa:
	<p><em>Loa k&eacute;o</em></p>
	</li>
	<li>Tổng c&ocirc;ng suất:
	<p><em>50 W</em></p>
	</li>
	<li>Thời gian sử dụng:
	<p><em>D&ugrave;ng khoảng 13 - 16 tiếng</em><em>Sạc khoảng 8 - 10 tiếng</em></p>
	</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh:
	<p><em>Vocal Effects</em><em>Key charger</em><em>X&oacute;a giọng h&aacute;t tr&ecirc;n bản gốc Voice canceller</em><em>Hiệu ứng vang Echo mode</em><em>Karaoke Star</em><em>1 loa trầm 6.5&quot;</em></p>
	</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y:
	<p><em>Bluetooth</em></p>
	</li>
	<li>Kết nối kh&aacute;c:
	<p><em>Jack 6.5 Micro</em><em>Jack 3.5 mm</em><em>USB</em></p>
	</li>
	<li>Tiện &iacute;ch:
	<p><em>B&aacute;nh xe dễ di chuyển</em><em>C&oacute; thể h&aacute;t Karaoke</em><em>Kết nối nhiều thiết bị bluetooth c&ugrave;ng l&uacute;c</em><em>C&oacute; tay k&eacute;o</em></p>
	</li>
	<li>K&iacute;ch thước:
	<p><em>Cao 42 cm - Ngang 35.3 cm - S&acirc;u 29.2 cm - Nặng 10 kg</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>H&agrave;n Quốc</em></p>
	</li>
	<li>D&ograve;ng sản phẩm:
	<p><em>2019</em></p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>Đ&egrave;n LED đa sắc m&agrave;u tăng th&ecirc;m sự h&agrave;o hứng, s&ocirc;i nổi cho c&aacute;c bữa tiệc, cuộc vui</h2>

<p><a href="https://www.thegioididong.com/images/2162/202728/lg-rl2-10.jpg" onclick="return false;"><img alt="Đèn LED đa sắc màu - Loa kéo karaoke LG RL2 50W" src="https://cdn.tgdd.vn/Products/Images/2162/202728/lg-rl2-10.jpg" /></a></p>

<h3>H&aacute;t&nbsp;Karaoke dễ d&agrave;ng, tiện lợi với nhiều t&iacute;nh năng, c&ocirc;ng nghệ hỗ trợ hiện đại</h3>

<p>Loa x&oacute;a bỏ giọng h&aacute;t tr&ecirc;n bản nhạc gốc với c&ocirc;ng nghệ&nbsp;Voice canceller, hiệu ứng vang -&nbsp;Echo mode, Karaoke Star, nhiều&nbsp;chế độ giọng h&aacute;t như&nbsp;Duet Man, Duet Woman,&nbsp;Bass, Soprabo, Helium... H&aacute;t Karaoke với ứng dụng Youtube th&ocirc;ng qua kết nối&nbsp;Bluetooth dễ d&agrave;ng,&nbsp;cho bạn ca h&aacute;t, thưởng thức &acirc;m nhạc th&uacute; vị, hấp dẫn hơn.</p>

<p><a href="https://www.thegioididong.com/images/2162/202728/lg-rl2-9.jpg" onclick="return false;"><img alt="Hát Karaoke dễ dàng - Loa kéo karaoke LG RL2 50W" src="https://cdn.tgdd.vn/Products/Images/2162/202728/lg-rl2-9.jpg" /></a></p>

<h3>C&oacute; 2 cổng kết nối th&ocirc;ng dụng USB v&agrave;&nbsp;Bluetooth</h3>

<p><a href="https://www.thegioididong.com/images/2162/202728/lg-rl2-11.jpg" onclick="return false;"><img alt="Có 2 cổng kết nối thông dụng USB và Bluetooth - Loa kéo karaoke LG RL2 50W" src="https://cdn.tgdd.vn/Products/Images/2162/202728/lg-rl2-11.jpg" /></a></p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Loa kéo karaoke LG RL2 50W','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Loa thanh soundbar LG 4.1 SNH5 600W',
        'price'=>16990000,
        'old_price'=>17990000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/2162/225990/lg-snh5-1-1-org.jpg',
        'rate'=>400,
        'category_id'=>12,
        'brand_id'=>8,
        'user_id'=>random_int(1,5),
        'describe'=> '<p><img alt="Thông số kỹ thuật Loa thanh soundbar LG 4.1 SNH5 600W" src="https://cdn.tgdd.vn/Products/Images/2162/225990/Kit/lg-snh5-note-1.jpg" style="height:585px; width:780px" /></p>

<h3>Thiết kế sang trọng, hiện đại</h3>

<p><a href="https://www.dienmayxanh.com/dan-loa-dvd/lg-snh5" target="_blank">Loa thanh soundbar LG 4.1 SNH5 600W</a>&nbsp;sở hữu thiết kế hiện đại, mang vẻ sang trọng thời thượng. Gam m&agrave;u đen đồng nhất với phong c&aacute;ch chuy&ecirc;n nghiệp th&iacute;ch hợp với mọi kh&ocirc;ng gian giải tr&iacute; của gia đ&igrave;nh bạn. Mặt trước loa thanh được bọc một lớp lưới kim loại cứng c&aacute;p bảo vệ m&agrave;ng loa b&ecirc;n trong tốt hơn. Phần c&ograve;n lại của th&acirc;n loa được bao phủ bởi một lớp nhựa nh&aacute;m đẹp mắt v&agrave; dễ d&agrave;ng lau ch&ugrave;i.</p>

<p>Loa si&ecirc;u trầm kết nối c&oacute; d&acirc;y với loa thanh gi&uacute;p &acirc;m thanh được đồng bộ hơn.</p>

<p><img alt="Loa thanh soundbar LG 4.1 SNH5 600W - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/2162/225990/lg-snh5-183221-033207.jpg" /></p>

<h3>&Acirc;m thanh v&ograve;m đa chiều, lan tỏa mạnh mẽ c&ugrave;ng c&ocirc;ng nghệ DTS Virtual:X</h3>

<p>C&ocirc;ng nghệ DTS Virtual:X giả lập &acirc;m thanh v&ograve;m sống động, cho bạn cảm gi&aacute;c &acirc;m thanh v&ograve;m đa chiều bao trọn lấy kh&ocirc;ng gian xung quanh bạn mang đến trải nghiệm xem phim rạp tại nh&agrave;.</p>

<p>Ngo&agrave;i ra c&oacute; c&oacute; sự hỗ trợ của c&ocirc;ng nghệ Bass&nbsp;Blast+ tăng cường dải &acirc;m trầm, cho những giai điệu s&acirc;u lắng hơn.</p>

<p><img alt="Loa thanh soundbar LG 4.1 SNH5 600W - DTS Virtual:X" src="https://cdn.tgdd.vn/Products/Images/2162/225990/lg-snh5-183321-033353.jpg" /></p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Loa thanh soundbar LG 4.1 SNH5 600W</h3>

<ul>
	<li>Th&ocirc;ng tin chung</li>
	<li>Loại sản phẩm:Loa thanh (soundbar)</li>
	<li>Số lượng k&ecirc;nh:4.1 k&ecirc;nh</li>
	<li>Tổng c&ocirc;ng suất:600 W</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh:AI Sound ProBass Blast<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/cong-nghe-am-thanh-tren-dan-may-lg-1214294#dts-virtual-x" target="_blank">DTS Virtual:X</a></li>
	<li>&Acirc;m thanh đọc được:<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/mot-so-dinh-dang-am-thanh-video-pho-bien-ma-loa-da-844443#mp3" target="_blank">mp3</a></li>
	<li>Tiện &iacute;ch:C&oacute; cổng USB,&nbsp;C&oacute; k&egrave;m remote</li>
	<li>Kết nối</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y:Bluetooth 4.0,&nbsp;Wireless Active Subwoofer</li>
	<li>Kết nối kh&aacute;c:HDMIOpticalUSB</li>
	<li>Th&ocirc;ng tin sản phẩm</li>
	<li>Loa ch&iacute;nh:Cao 99 cm - Ngang 12.5 cm - S&acirc;u 9.7 cm - Nặng 6.5 kg</li>
	<li>Chất liệu loa:Loa ch&iacute;nh: lưới kim loại - Loa trầm: th&acirc;n gỗ, lưới vải</li>
	<li>Thương hiệu của:H&agrave;n Quốc</li>
	<li>Sản xuất tại:Trung Quốc</li>
	<li>D&ograve;ng sản phẩm:2020</li>
	<li>Bộ b&aacute;n h&agrave;ng chuẩn:D&acirc;y nguồn,&nbsp;Remote</li>
	<li>H&atilde;ng:LG.</li>
</ul>
',
        'details'=> '<p>Trải nghiệm &acirc;m thanh như tại rạp ngay trong ch&iacute;nh căn nh&agrave; của bạn</p>

<p>C&ocirc;ng suất 600 W v&agrave; hệ thống&nbsp;<a href="https://www.dienmayxanh.com/dan-loa-dvd-lg?g=41-kenh" target="_blank">loa LG 4.1 k&ecirc;nh</a>&nbsp;mang đến những &acirc;m trầm cực k&igrave; tinh tế, r&otilde; r&agrave;ng. &Acirc;m thanh được hạn chế tối đa khả năng m&eacute;o tiếng v&agrave; nhiễu s&oacute;ng cho bạn đắm ch&igrave;m trong từng giai điệu của &acirc;m nhạc.</p>

<p><img alt="Loa thanh soundbar LG 4.1 SNH5 600W - Trải nghiệm âm thanh" src="https://cdn.tgdd.vn/Products/Images/2162/225990/lg-snh5-183221-033254.jpg" /></p>

<h3>Đồng bộ &acirc;m thanh v&agrave; nội dung đang xem với AI&nbsp;Sound Pro</h3>

<p>AI Sound Pro tr&ecirc;n&nbsp;<a href="https://www.dienmayxanh.com/dan-loa-dvd-lg-loa-thanh" target="_blank">loa thanh LG</a>&nbsp;sẽ tự động ph&acirc;n t&iacute;ch nội dung, tối ưu h&oacute;a c&aacute;c c&agrave;i đặt &acirc;m thanh cho nội dung đang ph&aacute;t. Bạn c&oacute; thể nghe r&otilde; c&aacute;c đoạn đối thoại với chất lượng cao. Hay những bộ phim h&agrave;nh động c&oacute; những pha gay cấn đến nghẹt thở được t&aacute;i hiện như thực nhờ &acirc;m thanh sắc n&eacute;t.</p>

<p><img alt="Loa thanh LG SNH5 - AI Sound Pro" src="https://cdn.tgdd.vn/Products/Images/2162/225990/lg-snh5-183421-033452.jpg" /></p>

<h3>Thưởng thức nội dung tr&ecirc;n tivi với &acirc;m thanh tuyệt vời hơn</h3>

<p><a href="https://www.dienmayxanh.com/dan-loa-dvd-loa-thanh" target="_blank">Loa thanh</a>&nbsp;LG&nbsp;c&oacute; thể dễ d&agrave;ng kết nối với chiếc tivi LG th&ocirc;ng qua Bluetooth hoặc d&acirc;y c&aacute;p quang.</p>

<p><img alt="Loa thanh LG SNH5 - Kết nối tivi" src="https://cdn.tgdd.vn/Products/Images/2162/225990/lg-snh5-183521-033532.jpg" /></p>

<h3>Dễ d&agrave;ng kết nối&nbsp;<a href="https://www.dienmayxanh.com/dan-loa-dvd" target="_blank">loa</a>&nbsp;với c&aacute;c thiết bị kh&aacute;c qua c&aacute;c cổng: HDMI, Optical, USB, cổng WOOFER kết nối loa Sub với loa thanh</h3>

<p><img alt="Loa thanh soundbar LG 4.1 SNH5 600W- Kết nối" src="https://cdn.tgdd.vn/Products/Images/2162/225990/lg-snh5-035120-095151.png" /></p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Loa thanh soundbar LG 4.1 SNH5 600W','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Loa karaoke LG OL45 220W',
        'price'=>2990000,
        'old_price'=>3790000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/2162/202724/loa-karaoke-lg-ol45-1-3-org.jpg',
        'rate'=>400,
        'category_id'=>12,
        'brand_id'=>8,
        'user_id'=>random_int(1,5),
        'describe'=> '<p><img alt="Thông số kỹ thuật Loa karaoke LG OL45 220W" src="https://cdn.tgdd.vn/Products/Images/2162/202724/Kit/loa-karaoke-lg-ol45-3.jpg" style="height:585px; width:780px" /></p>

<h3>Thiết kế nhỏ gọn, tiện lợi</h3>

<p><a href="https://www.dienmayxanh.com/dan-loa-dvd/lg-ol45" target="_blank">Loa karaoke LG OL45 220W</a>&nbsp;với thiết kế dạng hộp nhỏ gọn,&nbsp;dễ d&agrave;ng mang theo bất k&igrave; đ&acirc;u để bạn c&oacute; thể tổ chức bữa tiệc &acirc;m nhạc s&ocirc;i động ngay lập tức chuẩn kh&ocirc;ng cần chỉnh.</p>

<p>Tổng c&ocirc;ng suất l&ecirc;n đến 220 W c&ugrave;ng &aacute;nh s&aacute;ng nhấp nh&aacute;y từ đ&egrave;n sẽ gi&uacute;p bạn đắm ch&igrave;m trong trải nghiệm &acirc;m thanh tuyệt vời ấy.</p>

<p><img alt="Loa karaoke LG OL45 220W - Công suất" src="https://cdn.tgdd.vn/Products/Images/2162/202724/lg-ol45-5.jpg" /></p>

<h3>Chế độ Multi Color Lighting cho bữa tiệc &acirc;m nhạc th&ecirc;m phần bắt mắt</h3>

<p><a href="https://www.dienmayxanh.com/dan-loa-dvd-lg" target="_blank">Loa LG</a>&nbsp;sẽ gi&uacute;p bạn đắm m&igrave;nh&nbsp;trong kh&ocirc;ng kh&iacute; s&ocirc;i động đầy cảm hứng giống như trong club &quot;ch&iacute;nh hiệu&quot; với nhiều chế độ đ&egrave;n chiếu s&aacute;ng t&ugrave;y theo phong c&aacute;ch tiệc của bạn.</p>

<p><img alt="Loa karaoke LG OL45 220W - Chế độ Multi Color Lighting " src="https://cdn.tgdd.vn/Products/Images/2162/202724/lg-ol45-6.jpg" /></p>

<h3>Đồng bộ &acirc;m thanh với tivi một c&aacute;ch dễ d&agrave;ng</h3>

<p><img alt="Loa karaoke LG OL45 220W - TV Sound Sync" src="https://cdn.tgdd.vn/Products/Images/2162/202724/lg-ol45-9.jpg" /></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Loa karaoke LG OL45 220W</h3>

<ul>
	<li>Th&ocirc;ng tin chung</li>
	<li>Loại sản phẩm:Loa k&eacute;o</li>
	<li>Tổng c&ocirc;ng suất:220 W</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh:Hiệu ứng vang Echo modeX&oacute;a giọng h&aacute;t tr&ecirc;n bản gốc Voice canceller<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/cong-nghe-am-thanh-tren-dan-may-lg-1214294#vocal-effects" target="_blank">Vocal Effects</a>Key charger</li>
	<li>Số đường tiếng của loa:1 đường tiếng</li>
	<li>&Acirc;m thanh đọc được:<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/mot-so-dinh-dang-am-thanh-video-pho-bien-ma-loa-da-844443" target="_blank">mp3, wma, wmv</a>,&nbsp;aac codec</li>
	<li>Tiện &iacute;ch:Nhạc Multi Color Lighting,&nbsp;Nghe được FM Radio</li>
	<li>Kết nối</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y:Bluetooth</li>
	<li>Kết nối kh&aacute;c:Jack 6.5 MicroAngtenJack b&ocirc;ng sen trắng đỏUSB</li>
	<li>Điều khiển bằng điện thoại:<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#ung-dung-xboom" target="_blank">LG XBOOM</a></li>
	<li>Th&ocirc;ng tin sản phẩm</li>
	<li>Loa ch&iacute;nh:Cao 31.7 cm - Ngang 42.5 cm - S&acirc;u 32 cm - Nặng 7.9 kg</li>
	<li>Số lượng loa Bass:1 loa</li>
	<li>K&iacute;ch thước loa Bass:Khoảng 16 cm</li>
	<li>Số lượng loa Treble:1 loa</li>
	<li>Số lượng loa Mid:1 loa</li>
	<li>Thương hiệu của:H&agrave;n Quốc</li>
	<li>Sản xuất tại:Trung Quốc</li>
	<li>D&ograve;ng sản phẩm:2019</li>
	<li>H&atilde;ng:LG.</li>
</ul>
',
        'details'=> '<p>Điều khiển từ xa với ứng dụng LG Xboom c&agrave;i đặt ngay tr&ecirc;n điện thoại</p>

<p><img alt="Loa karaoke LG OL45 220W - Ứng dụng DJ" src="https://cdn.tgdd.vn/Products/Images/2162/202724/lg-ol45-132920-042957.jpg" /></p>

<h3>Ca h&aacute;t thật dễ d&agrave;ng v&agrave; th&uacute; vị hơn với 18 hiệu ứng giọng h&aacute;t kh&aacute;c nhau</h3>

<p>18 hiệu ứng giọng h&aacute;t bao gồm 6 hiệu ứng: Bass, Soprano, Helium, Robot, Duet Man v&agrave; Duet Woman kết hợp&nbsp;c&ugrave;ng với 3 chế độ tiếng vang. Bật hiệu ứng n&agrave;y tại n&uacute;t&nbsp;<strong>&quot;Voice Effect&quot;</strong>, loa sẽ c&oacute; khả năng&nbsp;gi&uacute;p giảm giọng h&aacute;t trong bản nhạc v&agrave; bộ thay đổi &acirc;m điệu gi&uacute;p điều chỉnh &acirc;m nhạc theo giọng h&aacute;t của bạn. Để bạn c&oacute; thể trở th&agrave;nh một ng&ocirc;i sao karaoke như mong đợi.</p>

<p><img alt="Loa karaoke LG OL45 220W - Hiệu ứng 18 giọng hát khác nhau" src="https://cdn.tgdd.vn/Products/Images/2162/202724/lg-ol45-112720-072729.jpg" /></p>

<h3>Thỏa sức h&aacute;t karaoke bất k&igrave; l&uacute;c n&agrave;o với&nbsp;<a href="https://www.dienmayxanh.com/dan-loa-dvd?g=dan-am-thanh" target="_blank">d&agrave;n &acirc;m thanh nghe nhạc</a></h3>

<p>Với cổng micro được trang bị sẵn tr&ecirc;n loa LG OL45, bạn c&oacute; thể kết nối micro với loa để h&aacute;t karaoke thư gi&atilde;n, hay thỏa đam m&ecirc; ca h&aacute;t bất k&igrave; l&uacute;c n&agrave;o.</p>

<p><img alt="Loa karaoke LG OL45 220W - TV Sound Sync" src="https://cdn.tgdd.vn/Products/Images/2162/202724/lg-ol45-7.jpg" /></p>

<h3>Kết nối 2 loa kh&ocirc;ng d&acirc;y nhanh ch&oacute;ng</h3>

<p>T&iacute;nh năng n&agrave;y gi&uacute;p bạn bạn mở rộng kh&ocirc;ng gian party &acirc;m nhạc bằng c&aacute;ch kết nối 2&nbsp;<a href="https://www.dienmayxanh.com/dan-loa-dvd?g=loa-keo" target="_blank">loa karaoke</a>&nbsp;lại với nhau, mang đến bạn trải nghiệm &acirc;m thanh ấn tượng hơn, s&ocirc;i động hơn.</p>

<p><img alt="Loa karaoke LG OL45 220W - Kết nối 2 loa" src="https://cdn.tgdd.vn/Products/Images/2162/202724/lg-ol45-4.jpg" /></p>

<h3>Hỗ trợ nhiều cổng kết nối phổ biến</h3>

<p><img alt="Loa karaoke LG OL45 220W - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/2162/202724/lg-ol45-10.jpg" /></p>
',
        'slug'=>Str::slug('Loa karaoke LG OL45 220W','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Loa kéo karaoke LG XBOOM RK4 80W',
        'price'=>3490000,
        'old_price'=>4990000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/2162/202725/loa-keo-lg-rk4-1-7-org.jpg',
        'rate'=>400,
        'category_id'=>12,
        'brand_id'=>8,
        'user_id'=>random_int(1,5),
        'describe'=> '<p><img alt="Thông số kỹ thuật Loa kéo karaoke LG XBOOM RK4 80W" src="https://cdn.tgdd.vn/Products/Images/2162/202725/Kit/loa-keo-lg-rk4-1.jpg" style="height:585px; width:780px" /></p>

<h3>Kiểu d&aacute;ng mạnh mẽ, hiện đại</h3>

<p><a href="https://www.dienmayxanh.com/dan-loa-dvd/lg-rk4" target="_blank">Loa k&eacute;o karaoke LG RK4 80W</a>&nbsp;c&oacute; thiết kế gọn g&agrave;ng c&ugrave;ng t&ocirc;ng m&agrave;u đen mạnh mẽ, tổng thể hiện đại, bắt mắt. Loa&nbsp;karaoke&nbsp;trang bị b&aacute;nh xe c&ugrave;ng tay k&eacute;o gi&uacute;p dễ d&agrave;ng di chuyển tiện dụng hay cố định với ch&acirc;n đế gi&uacute;p n&acirc;ng loa.</p>

<p><img alt="Loa kéo karaoke LG RK4 80W - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/2162/202725/lg-rk4-4.jpg" /></p>

<h3>C&ocirc;ng suất 80W cho &acirc;m thanh r&otilde; r&agrave;ng, trong trẻo với hiệu ứng &acirc;m mạnh mẽ</h3>

<p><a href="https://www.dienmayxanh.com/dan-loa-dvd?g=loa-keo" target="_blank">Loa k&eacute;o</a>&nbsp;c&oacute; 1 loa trầm v&agrave; 1 loa Tweeter gi&uacute;p từng lời h&aacute;t, giai điệu, hiệu ứng trở n&ecirc;n sống động, r&otilde; r&agrave;ng, cho ph&eacute;p bạn trải nghiệm giải tr&iacute; nghe thoải m&aacute;i, th&uacute; vị, th&iacute;ch hợp sử dụng ở những buổi tiệc ngo&agrave;i trời, cắm trại.</p>

<p><img alt="Loa kéo karaoke LG RK4 80W - Công suất" src="https://cdn.tgdd.vn/Products/Images/2162/202725/lg-rk4-5.jpg" /></p>

<h3>Kết nối Bluetooth kh&ocirc;ng d&acirc;y với&nbsp;<a href="https://www.dienmayxanh.com/dan-loa-dvd-lg" target="_blank">loa</a>&nbsp;k&eacute;o tiện lợi, nhanh ch&oacute;ng</h3>

<p><img alt="Loa kéo karaoke LG RK4 80W - Kết nối Bluetooth" src="https://cdn.tgdd.vn/Products/Images/2162/202725/lg-rk4-6.jpg" /></p>

<h3>Trang bị đ&egrave;n led nhiều m&agrave;u đẹp mắt, ph&ugrave; hợp với nhịp điệu &acirc;m nhạc, tăng phần th&uacute; vị cho buổi tiệc của bạn</h3>

<p><img alt="Loa kéo karaoke LG RK4 80W - Trang bị đèn led" src="https://cdn.tgdd.vn/Products/Images/2162/202725/lg-rk4-8.jpg" /></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Loa k&eacute;o karaoke LG XBOOM RK4 80W</h3>

<ul>
	<li>Th&ocirc;ng tin chung</li>
	<li>Loại sản phẩm:Loa k&eacute;o</li>
	<li>Tổng c&ocirc;ng suất:80 W</li>
	<li>Nguồn:B&igrave;nh ắc quy</li>
	<li>Số đường tiếng của loa:1 đường tiếng</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh:1 loa trầm 15&quot;, 1 loa Tweeter</li>
	<li>&Acirc;m thanh đọc được:<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/mot-so-dinh-dang-am-thanh-video-pho-bien-ma-loa-da-844443#mp3" target="_blank">mp3</a>,&nbsp;sbc</li>
	<li>Tiện &iacute;ch:Đ&egrave;n nhiều m&agrave;u - Multi color speaker lightingCh&acirc;n đế n&acirc;ng loa - Tripod installationC&oacute; thể h&aacute;t KaraokeB&aacute;nh xe dễ di chuyểnC&oacute; tay k&eacute;o</li>
	<li>Kết nối</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y:Bluetooth</li>
	<li>Kết nối kh&aacute;c:Jack 6.5 MicroJack b&ocirc;ng sen trắng đỏThẻ nhớUSB</li>
	<li>Th&ocirc;ng tin sản phẩm</li>
	<li>Loa ch&iacute;nh:Cao 71 cm - Ngang 44.2 cm - S&acirc;u 36.5 cm - Nặng 14.9 kg</li>
	<li>Số lượng loa Bass:1 loa</li>
	<li>K&iacute;ch thước loa Bass:3 tấc</li>
	<li>Số lượng loa Treble:1 loa</li>
	<li>Số lượng loa Mid:1 loa</li>
	<li>Thương hiệu của:H&agrave;n Quốc</li>
	<li>Sản xuất tại:Trung Quốc</li>
	<li>D&ograve;ng sản phẩm:2019</li>
	<li>H&atilde;ng:LG</li>
</ul>
',
        'details'=> '<p>Tận hưởng gi&aacute;i tr&iacute; h&aacute;t Karaoke thoải m&aacute;i mọi l&uacute;c, mọi nơi</p>

<p>Bạn c&oacute; thể kết nối&nbsp;<a href="https://www.dienmayxanh.com/dan-loa-dvd-lg" target="_blank">loa LG</a>&nbsp;đến c&aacute;c nguồn ph&aacute;t như điện thoại, laptop, tivi,... chọn b&agrave;i h&aacute;t Karaoke y&ecirc;u th&iacute;ch l&agrave; bạn đ&atilde; c&oacute; thể bắt đầu tận hưởng giải tr&iacute; đ&iacute;ch thực.</p>

<p><img alt="Loa kéo karaoke LG RK4 80W - Hát Karaoke" src="https://cdn.tgdd.vn/Products/Images/2162/202725/lg-rk4-7.jpg" /></p>

<h3>Đa dạng c&aacute;c cổng kết nối</h3>

<p><img alt="Đa dạng cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/2162/202725/lg-rk4-11.jpg" /></p>
',
        'slug'=>Str::slug('Loa kéo karaoke LG XBOOM RK4 80W','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Loa thanh soundbar LG 4.1 SN5R 520W',
        'price'=>6990000,
        'old_price'=>7990000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/2162/225986/loa-thanh-lg-sn5r-1-1-org.jpg',
        'rate'=>400,
        'category_id'=>12,
        'brand_id'=>8,
        'user_id'=>random_int(1,5),
        'describe'=> '<p><img alt="Thông số kỹ thuật Loa thanh soundbar LG 4.1 SN5R 520W" src="https://cdn.tgdd.vn/Products/Images/2162/225986/Kit/loa-thanh-lg-sn5r-n-1.jpg" style="height:585px; width:780px" /></p>

<h3>Thiết kế thanh mảnh, tối giản ph&ugrave; hợp với mọi kh&ocirc;ng gian</h3>

<p><a href="https://www.dienmayxanh.com/dan-loa-dvd/lg-sn5r" target="_blank">Loa thanh soundbar LG 4.1 SN5R 520W</a>&nbsp;được lấy m&agrave;u đen l&agrave;m chủ đạo thế hiện sự mạnh mẽ v&agrave; chắc chắn từ c&aacute;i nh&igrave;n đầu ti&ecirc;n. Thiết kế thanh mảnh cộng với đường n&eacute;t bo g&oacute;c tinh tế tạo n&ecirc;n tổng thể thu h&uacute;t lại h&ograve;a hợp được với bất kể kh&ocirc;ng gian n&agrave;o.</p>

<p><img alt="Loa thanh LG SN5R - Thiết kế thanh mảnh" src="https://cdn.tgdd.vn/Products/Images/2162/225986/lg-sn5r-173720-073753.jpg" /></p>

<h3>Hệ thống &acirc;m thanh mang đến trải nghiệm như tại rạp ngay trong căn nh&agrave; của bạn</h3>

<p>Bạn vẫn thưởng thức được những bộ phim điện ảnh g&acirc;y cấn, hấp dẫn bao phủ bởi &acirc;m thanh sống động như bạn đang ngồi trong một rạp chiếu phim nhờ c&ocirc;ng nghệ&nbsp;<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/cong-nghe-am-thanh-tren-dan-may-lg-1214294#dts-virtual-x" target="_blank">DTS Virtual:X</a>. Bạn c&oacute; thể cảm nhận sự kh&aacute;c biệt so với những loa th&ocirc;ng thường, &acirc;m thanh từ&nbsp;<a href="https://www.dienmayxanh.com/dan-loa-dvd-loa-thanh" target="_blank">loa thanh</a>&nbsp;LG ph&aacute;t ra đa chiều mạnh mẽ.</p>

<p><img alt="Loa thanh LG SN5R - DTS Virtual:X" src="https://cdn.tgdd.vn/Products/Images/2162/225986/lg-sn5r-171120-061125.jpg" /></p>

<h3>Chất lượng &acirc;m thanh được n&acirc;ng cấp vượt trội với độ ph&acirc;n giải cao 24bit/96kHz</h3>

<p><img alt="Loa thanh LG SN5R - Âm thanh độ phân giải cao" src="https://cdn.tgdd.vn/Products/Images/2162/225986/lg-sn5r-171120-061135.jpg" /></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Loa thanh soundbar LG 4.1 SN5R 520W</h3>

<ul>
	<li>Th&ocirc;ng tin chung</li>
	<li>Loại sản phẩm:Loa thanh (soundbar)</li>
	<li>Số lượng k&ecirc;nh:4.1 k&ecirc;nh</li>
	<li>Tổng c&ocirc;ng suất:520 W</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh:<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/cong-nghe-am-thanh-tren-dan-may-lg-1214294#dts-virtual-x" target="_blank">DTS Virtual:X</a>AI Sound ProBass Blast</li>
	<li>&Acirc;m thanh đọc được:<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/mot-so-dinh-dang-am-thanh-video-pho-bien-ma-loa-da-844443#mp3" target="_blank">mp3</a></li>
	<li>Tiện &iacute;ch:C&oacute; cổng USB,&nbsp;C&oacute; k&egrave;m remote</li>
	<li>Kết nối</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y:Bluetooth 4.0</li>
	<li>Kết nối kh&aacute;c:HDMIOpticalUSB</li>
	<li>Th&ocirc;ng tin sản phẩm</li>
	<li>Loa ch&iacute;nh:Cao 89 cm - Ngang 11.8 cm - S&acirc;u 5.7 cm - Nặng 6.5 kg</li>
	<li>Chất liệu loa:Loa ch&iacute;nh: Mold - Loa trầm: th&acirc;n gỗ, lưới vải</li>
	<li>Thương hiệu của:H&agrave;n Quốc</li>
	<li>Sản xuất tại:Trung Quốc</li>
	<li>D&ograve;ng sản phẩm:2020</li>
	<li>Bộ b&aacute;n h&agrave;ng chuẩn:D&acirc;y nguồn,&nbsp;Remote</li>
	<li>H&atilde;ng:LG.</li>
</ul>
',
        'details'=> '<p>&Acirc;m thanh ch&acirc;n thực tr&agrave;n ngập căn ph&ograve;ng</p>

<p>Chế độ Bass Blast đẩy s&acirc;u &acirc;m trầm, cho &acirc;m thanh ph&aacute;t ra tr&ograve;n v&agrave; chắc hơn gi&uacute;p bạn cảm nhận được độ rung động của &acirc;m thanh, kết hợp c&ocirc;ng suất&nbsp;520 W v&agrave; hệ thống 4.1 k&ecirc;nh&nbsp;<a href="https://www.dienmayxanh.com/dan-loa-dvd" target="_blank">loa</a>&nbsp;mang đến bạn những &acirc;m trầm s&acirc;u lắng, &acirc;m thanh bắt tai đến từng chi tiết nhỏ.</p>

<p><img alt="Loa thanh LG SN5R - 4.1 kênh" src="https://cdn.tgdd.vn/Products/Images/2162/225986/lg-sn5r-171120-061131.jpg" /></p>

<h3>Tối ưu h&oacute;a &acirc;m thanh ph&ugrave; hợp với nội dung đang xem với c&ocirc;ng nghệ&nbsp;AI Sound Pro</h3>

<p>C&ocirc;ng nghệ AI Sound Pro tr&ecirc;n&nbsp;<a href="https://www.dienmayxanh.com/dan-loa-dvd-lg" target="_blank">loa LG</a>&nbsp;c&oacute; khả năng tự động ph&acirc;n t&iacute;ch nội dung v&agrave; tối ưu h&oacute;a c&aacute;c c&agrave;i đặt &acirc;m thanh ph&ugrave; hợp với nội dung đang ph&aacute;t. V&iacute; dụ như những đoạn hội thoại sẽ được n&acirc;ng cao cho r&otilde; n&eacute;t c&aacute;c &acirc;m.</p>

<p><img alt="Loa thanh LG SN5R - AI Sound Pro" src="https://cdn.tgdd.vn/Products/Images/2162/225986/lg-sn5r-171120-061145.jpg" /></p>

<h3><a href="https://www.dienmayxanh.com/dan-loa-dvd-lg-loa-thanh" target="_blank">Loa thanh LG</a>&nbsp;hỗ trợ c&aacute;c kết nối th&ocirc;ng dụng như: Bluetooth 4.0, HDMI, Optical, USB</h3>

<p><img alt="Loa thanh LG SN5R - Kết nối" src="https://cdn.tgdd.vn/Products/Images/2162/225986/lg-sn5r-290820-030833.jpg" /></p>
',
        'slug'=>Str::slug('Loa thanh soundbar LG 4.1 SN5R 520W','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Loa thanh soundbar LG 3.1.2 SL8Y 440W',
        'price'=>16990000,
        'old_price'=>17990000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/2162/202894/lg-sl8y-1-2-org.jpg',
        'rate'=>400,
        'category_id'=>12,
        'brand_id'=>8,
        'user_id'=>random_int(1,5),
        'describe'=> '<p><img alt="Thông số kỹ thuật Loa thanh soundbar LG 3.1.2 SL8Y 440W" src="https://cdn.tgdd.vn/Products/Images/2162/202894/Kit/lg-sl8y.jpg" style="height:585px; width:780px" /></p>

<h3>Hướng dẫn c&aacute;ch&nbsp;k&iacute;ch hoạt bluetooth loa soundbar LG SL8Y</h3>

<p><strong>Bước 1:</strong>&nbsp;Mở ứng dụng Google Home v&agrave; chọn t&agrave;i khoản Google.</p>

<p><strong>Bước 2:</strong>&nbsp;Cấp quyền truy cập GPS cho Google Home.</p>

<p><strong>Bước 3:</strong>&nbsp;Google Home t&igrave;m kiếm loa&nbsp;LG SL8Y.</p>

<p><strong>Bước 4:</strong>&nbsp;Loa kết nối th&agrave;nh c&ocirc;ng với Google Home.</p>

<p><strong>Bước 5:</strong>&nbsp;X&aacute;c nhận chia sẻ để cải thiện trải nghiệm.</p>

<p><strong>Bước 6:&nbsp;</strong>Chọn vị tr&iacute; đặt loa.</p>

<p><strong>Bước 7:&nbsp;</strong>Chọn Wifi nh&agrave;.</p>

<p><strong>Bước 8:&nbsp;</strong>Loa tự động kết nối Wifi nh&agrave;. L&uacute;c n&agrave;y, tr&ecirc;n loa LG đ&atilde; k&iacute;ch hoạt Bluetooth.</p>

<p>&nbsp;</p>

<h3>Thiết kế tối giản ph&ugrave; hợp với kh&ocirc;ng gian sống hiện đại</h3>

<p><a href="https://www.dienmayxanh.com/dan-loa-dvd/lg-sl8y" target="_blank">Loa thanh soundbar LG 3.1.2 SL8Y 440W</a>&nbsp;g&acirc;y ấn tượng bởi kiểu d&aacute;ng thanh mảnh, gọn nhẹ c&ugrave;ng t&ocirc;ng m&agrave;u đen trung t&iacute;nh sẽ mang đến phong c&aacute;ch sống hiện đại, h&agrave;i ho&agrave; cho kh&ocirc;ng gian đặt.</p>

<p><img alt="Loa thanh soundbar LG 3.1.2 SL8Y 440W - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/2162/202894/loa-thanh-lg-sl8y1.jpg" /></p>

<h3>Hệ thống &acirc;m thanh v&ograve;m 3.1.2 k&ecirc;nh đi c&ugrave;ng c&ocirc;ng suất lớn 440 W</h3>

<p><a href="https://www.dienmayxanh.com/dan-loa-dvd-lg?g=loa" target="_blank">Loa soundbar LG</a>&nbsp;sở hữu&nbsp;tổng c&ocirc;ng suất l&ecirc;n đến 440 W bao gồm 2 loa trước (50 W/loa), 1 loa giữa 40 W,&nbsp; 2 loa tr&ecirc;n (40 W/loa) v&agrave; loa si&ecirc;u trầm (loa Bass) 220 W lớn sẽ mang đến bạn những &acirc;m trầm s&acirc;u lắng tr&agrave;n ngập với những bản t&igrave;nh ca s&acirc;u lắng, trữ t&igrave;nh.</p>

<p><img alt="Loa thanh soundbar LG 3.1.2 SL8Y 440W - Công suất" src="https://cdn.tgdd.vn/Products/Images/2162/202894/loa-thanh-lg-sl8y8.jpg" /></p>

<h3>&Acirc;m thanh sống động như đang trải nghiệm trực tiếp tại rạp chiếu nhờ c&ocirc;ng nghệ Dolby ATMOS</h3>

<p>B&ecirc;n cạnh đ&oacute;,&nbsp;<a href="https://www.dienmayxanh.com/dan-loa-dvd" target="_blank">loa</a>&nbsp;thanh n&agrave;y c&ograve;n được ứng dụng c&ocirc;ng nghệ&nbsp;<strong>Meridian</strong>&nbsp;c&oacute; khả năng tinh chỉnh v&agrave; kết hợp c&aacute;c t&iacute;n hiệu &acirc;m thanh, tạo ra một trường &acirc;m thanh mới c&oacute; độ cao v&agrave; độ s&acirc;u lớn hơn, mang đến bạn cảm gi&aacute;c &acirc;m thanh sống động như đang bao tr&ugrave;m hết kh&ocirc;ng gian.</p>

<p><img alt="Loa thanh soundbar LG 3.1.2 SL8Y 440W - Dolby ATMOS" src="https://cdn.tgdd.vn/Products/Images/2162/202894/loa-thanh-lg-sl8y3.jpg" /></p>

<h3>Cảm nhận chất lượng &acirc;m thanh Hi-Res đỉnh cao với độ ph&acirc;n giải&nbsp;24 bit/96kHz</h3>

<p><img alt="Loa thanh soundbar LG 3.1.2 SL8Y 440W - Hi-Res" src="https://cdn.tgdd.vn/Products/Images/2162/202894/lg-sl8y-8.jpg" /></p>

<h3>T&iacute;nh năng Google ChromeCast hỗ trợ ph&aacute;t nhạc trực tuyến từ điện thoại của bạn th&ocirc;ng qua loa cho cả nh&agrave; c&ugrave;ng nghe</h3>

<p>B&ecirc;n cạnh đ&oacute;, bạn c&ograve;n c&oacute; thể tải ứng dụng&nbsp;<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/ung-dung-lg-av-remote-la-gi-848472" target="_blank">LG AV Remote</a>&nbsp;để c&oacute; thể điều khiển chuyển b&agrave;i, tăng giảm &acirc;m lượng tr&ecirc;n loa thanh LG n&agrave;y bằng điện thoại th&ocirc;ng minh của m&igrave;nh.</p>

<p><img alt="Loa thanh soundbar LG 3.1.2 SL8Y 440W - Google ChromeCast" src="https://cdn.tgdd.vn/Products/Images/2162/202894/loa-thanh-lg-sl8y6.jpg" /></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Loa thanh soundbar LG 3.1.2 SL8Y 440W</h3>

<ul>
	<li>Th&ocirc;ng tin chung</li>
	<li>Loại sản phẩm:Loa thanh (soundbar)</li>
	<li>Số lượng k&ecirc;nh:3.1.2 k&ecirc;nh</li>
	<li>Tổng c&ocirc;ng suất:440 W</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh:<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/cong-nghe-am-thanh-tren-dan-may-lg-1214294#dts-virtual-x" target="_blank">DTS:X</a><a href="https://www.dienmayxanh.com/kinh-nghiem-hay/cong-nghe-am-thanh-tren-dan-may-lg-1214294#hi-res-audio-24-bit-96-khz" target="_blank">Hi-res Audio (24bit/96kHz)</a><a href="https://www.dienmayxanh.com/kinh-nghiem-hay/cong-nghe-am-thanh-tren-dan-may-lg-1214294#meridian-technology" target="_blank">Meridian Technology</a><a href="https://www.dienmayxanh.com/kinh-nghiem-hay/cong-nghe-am-thanh-tren-dan-may-lg-1214294#dolby-atmos" target="_blank">Dolby Atmos</a></li>
	<li>&Acirc;m thanh đọc được:wav<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/mot-so-dinh-dang-am-thanh-video-pho-bien-ma-loa-da-844443#mp3" target="_blank">mp3</a><a href="https://www.dienmayxanh.com/kinh-nghiem-hay/mot-so-dinh-dang-am-thanh-video-pho-bien-ma-loa-da-844443#flac" target="_blank">flac (lossless)</a><a href="https://www.dienmayxanh.com/kinh-nghiem-hay/mot-so-dinh-dang-am-thanh-video-pho-bien-ma-loa-da-844443#aac" target="_blank">aac</a>ogg</li>
	<li>Tiện &iacute;ch:<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/nhung-tinh-nang-noi-bat-tren-dan-am-thanh-lg-1217667#chromecast" target="_blank">Chromecast</a>C&oacute; k&egrave;m remoteM&agrave;n h&igrave;nh hiển thị</li>
	<li>Kết nối</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y:WifiBluetoothLoa sub kết nối kh&ocirc;ng d&acirc;y với loa thanh</li>
	<li>Kết nối kh&aacute;c:HDMIHDMI ARC (cắm tivi)OpticalUSB</li>
	<li>Điều khiển bằng điện thoại:LG AV Remote</li>
	<li>Th&ocirc;ng tin sản phẩm</li>
	<li>Loa ch&iacute;nh:Cao 5.7 cm - Ngang 106 cm - S&acirc;u 11.9 cm - Nặng 4.4 kg</li>
	<li>Loa sub (loa Bass):Cao 38.8 cm - Ngang 22 cm - S&acirc;u 31 cm - Nặng 7.8 kg</li>
	<li>Thương hiệu của:H&agrave;n Quốc</li>
	<li>Sản xuất tại:Trung Quốc</li>
	<li>D&ograve;ng sản phẩm:2019</li>
	<li>H&atilde;ng:LG</li>
</ul>
',
        'details'=> '<p>Remote điều khiển từ xa tiện lợi.</p>

<p>Với remote tr&ecirc;n tay, bạn dễ d&agrave;ng điều khiển loa từ xa như tắt tiếng, chuyển b&agrave;i,... một c&aacute;ch nhanh ch&oacute;ng m&agrave; kh&ocirc;ng cần di chuyển lại gần loa.</p>

<p><img alt="Loa thanh soundbar LG 3.1.2 SL8Y 440W - Remote" src="https://cdn.tgdd.vn/Products/Images/2162/202894/lg-sl8y-18.jpg" /></p>

<h3>Kết nối đa dạng với nhiều thiết bị</h3>

<p><img alt="Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/2162/202894/lg-sl8y-214920-094913.jpg" /></p>
',
        'slug'=>Str::slug('Loa thanh soundbar LG 3.1.2 SL8Y 440W','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Loa Karaoke LG XBOOM RN5',
        'price'=>4190000,
        'old_price'=>4790000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/2162/223478/lg-rn5-1-org.jpg',
        'rate'=>400,
        'category_id'=>12,
        'brand_id'=>8,
        'user_id'=>random_int(1,5),
        'describe'=> '<p><img alt="Thông số kỹ thuật Loa Karaoke LG XBOOM RN5" src="https://cdn.tgdd.vn/Products/Images/2162/223478/Kit/lg-rn5-note.jpg" style="height:585px; width:780px" /></p>

<h3>Thiết kế với kiểu d&aacute;ng h&igrave;nh trụ nhỏ gọn, hiện đại</h3>

<p><a href="https://www.dienmayxanh.com/dan-loa-dvd/lg-rn5" target="_blank">Loa Karaoke LG Xboom RN5</a>&nbsp;được thiết kế với kiểu d&aacute;ng h&igrave;nh trụ, nhỏ gọn gồm 1 loa trầm khoảng 20 cm v&agrave; 2 loa tweeter (loa treble) mang lại cảm gi&aacute;c cứng c&aacute;p, chắc chắn. M&agrave;u đen b&oacute;ng chủ đạo với c&aacute;c cạnh ph&iacute;a tr&ecirc;n được bo tr&ograve;n tạo n&ecirc;n sự sang trọng cho căn ph&ograve;ng.</p>

<p><img alt="Loa Karaoke LG Xboom RN5 - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/2162/223478/lg-rn5-282020-102020.jpg" /></p>

<h3>&Acirc;m thanh trầm, r&otilde; n&eacute;t với kh&ocirc;ng gian tr&ecirc;n 50 m&eacute;t vu&ocirc;ng nhờ c&ocirc;ng suất 300 W c&ugrave;ng c&ocirc;ng nghệ Super Bass Boost</h3>

<p>&Acirc;m thanh tr&ecirc;n chiếc&nbsp;<a href="https://www.dienmayxanh.com/dan-loa-dvd-lg" target="_blank">loa LG</a>&nbsp;Xboom n&agrave;y được cải thiện nhờ c&ocirc;ng nghệ Super Bass Boost mang lại &acirc;m trầm mạnh mẽ v&agrave; sắc n&eacute;t hơn.</p>

<p>Ngo&agrave;i ra, với những ph&ograve;ng kh&aacute;ch c&oacute; diện t&iacute;ch tr&ecirc;n 50m vu&ocirc;ng, chiếc&nbsp;<a href="https://www.dienmayxanh.com/dan-loa-dvd" target="_blank">loa</a>&nbsp;n&agrave;y c&oacute; thể đ&aacute;p ứng nhờ c&ocirc;ng suất 300 W gi&uacute;p &acirc;m thanh phủ khắp mọi kh&ocirc;ng gian.</p>

<p><img alt="Loa Karaoke LG Xboom RN5 - Công suất mạnh mẽ" src="https://cdn.tgdd.vn/Products/Images/2162/223478/lg-rn5-270820-030835.jpg" /></p>

<h3>Dễ d&agrave;ng chuyển đổi kết nối giữa 3 thiết bị với t&iacute;nh năng kết nối đa điểm</h3>

<p>T&iacute;nh năng kết nối đa điểm cho ph&eacute;p gh&eacute;p nối loa với 3 điện thoại Android c&ugrave;ng l&uacute;c qua Bluetooth hoặc qua ứng dụng Xboom. Việc chuyển đổi giữa 3 nguồn nhạc trở n&ecirc;n dễ d&agrave;ng, nhanh ch&oacute;ng hơn m&agrave; kh&ocirc;ng phải tốn thời gian tạm dừng để kết nối lại.</p>

<p><img alt="Loa Karaoke LG Xboom RN5 - Chuyển đổi giữa 3 điện thoại" src="https://cdn.tgdd.vn/Products/Images/2162/223478/loa-karaoke-lg-rn5-071320-041359.jpg" /></p>

<h3>Tạo hiệu ứng nhấp nh&aacute;y tr&ecirc;n đ&egrave;n flash của điện thoại với t&iacute;nh năng Party Strobe</h3>

<p>Hiệu ứng nhấp nh&aacute;y tr&ecirc;n đ&egrave;n flash điện thoại Android được đồng bộ với nhịp điệu của &acirc;m nhạc được tạo ra nhờ t&iacute;nh năng Party Strobe. T&iacute;nh năng n&agrave;y c&oacute; thể hỗ trợ cho tối đa 3 điện thoại Android kết nối c&ugrave;ng l&uacute;c.</p>

<p><img alt="Loa Karaoke LG Xboom RN5 - Tính năng Party Strobe" src="https://cdn.tgdd.vn/Products/Images/2162/223478/lg-rn5-270920-030914.jpg" /></p>

<h3>Dễ d&agrave;ng chuyển đổi dữ liệu ngay tr&ecirc;n loa với t&iacute;nh năng Copy USB to USB</h3>

<p>Loa n&agrave;y c&oacute; thể ph&aacute;t nhạc th&ocirc;ng qua cổng USB đồng thời c&oacute; thể hỗ trợ chuyển đổi dữ liệu dễ d&agrave;ng hơn giữa 2 USB với nhau khi được cắm c&ugrave;ng l&uacute;c với loa.</p>

<p><img alt="Loa Karaoke LG Xboom RN5 - Chuyển đổi tệp giữa 2 USB dễ dàng" src="https://cdn.tgdd.vn/Products/Images/2162/223478/lg-rn5-271020-031005.jpg" /></p>

<h3>Kết nối 2 loa kh&ocirc;ng d&acirc;y, điều khiển đ&egrave;n tr&ecirc;n loa tiện lợi với chế độ Wireless Party Link c&ugrave;ng Dance Lighting</h3>

<p>Loa được t&iacute;ch hợp chế độ Wireless Party Link - kết nối kh&ocirc;ng d&acirc;y, cho ph&eacute;p gh&eacute;p nối 2 loa LG Xboom với nhau nhằm mang đến trải nghiệm &acirc;m thanh hơn.</p>

<p>Ngo&agrave;i ra, sản phẩm c&ograve;n c&oacute; chế độ Dance Lighting cho ph&eacute;p điều khiển &aacute;nh s&aacute;ng đ&egrave;n LED nhấp nh&aacute;y theo điệu nhạc tạo ra buổi tr&igrave;nh diễn &aacute;nh s&aacute;ng ấn tượng, thu h&uacute;t.</p>

<p><img alt="Loa Karaoke LG Xboom RN5 - Tăng hiệu ứng tiệc âm thanh" src="https://cdn.tgdd.vn/Products/Images/2162/223478/lg-rn5-271020-031055.jpg" /></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Loa Karaoke LG XBOOM RN5</h3>

<ul>
	<li>Th&ocirc;ng tin chung</li>
	<li>Loại sản phẩm:Loa k&eacute;o</li>
	<li>Tổng c&ocirc;ng suất:300 W</li>
	<li>C&ocirc;ng nghệ &acirc;m thanh:<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#dance-lighting" target="_blank">Chế độ Dance Lighting</a><a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#super-bass-boost" target="_blank">Super Bass Boost</a><a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#wireless-party-link" target="_blank">Chế độ kết nối kh&ocirc;ng d&acirc;y Wireless Party Link</a><a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#dj" target="_blank">B&agrave;n hiệu chỉnh DJ - DJ Pad</a><a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#party-strobe" target="_blank">T&iacute;nh năng Party Strobe</a></li>
	<li>&Acirc;m thanh đọc được:<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/mot-so-dinh-dang-am-thanh-video-pho-bien-ma-loa-da-844443" target="_blank">mp3, wma, wmv</a><a href="https://www.dienmayxanh.com/kinh-nghiem-hay/nhung-duoi-file-hinh-anh-pho-bien-dan-may-doc-duoc-847848" target="_blank">jpeg</a>progressive jpegaac codecmpeg2xvid</li>
	<li>Tiện &iacute;ch:<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#ung-dung-xboom" target="_blank">Ứng dụng điều khiển nhạc th&ocirc;ng minh Xboom</a><a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#usb" target="_blank">Copy USB to USB</a>C&oacute; thể h&aacute;t KaraokeNghe được FM Radio<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#dj" target="_blank">B&agrave;n DJ hiệu chỉnh nhạc</a>Kết nối loa với TV<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#wireless-party-link" target="_blank">Gh&eacute;p nối kh&ocirc;ng d&acirc;y với nhiều loa kh&aacute;c (Wireless Party Link)</a><a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#ket-noi-da-diem" target="_blank">Chơi nhạc Multi Bluetooth, Multi Jukebox</a></li>
	<li>Kết nối</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y:Bluetooth</li>
	<li>Kết nối kh&aacute;c:Cổng GuitarAngtenJack 6.5 MicroUSB</li>
	<li>Điều khiển bằng điện thoại:<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#ung-dung-xboom" target="_blank">LG XBOOM</a></li>
	<li>Th&ocirc;ng tin sản phẩm</li>
	<li>Loa ch&iacute;nh:D&agrave;i 33 cm - Rộng 34.4 cm - Cao 68.5 cm - Nặng 13.7 kg</li>
	<li>Số lượng loa Bass:1 loa</li>
	<li>K&iacute;ch thước loa Bass:Khoảng 20 cm</li>
	<li>Số lượng loa Treble:2 loa</li>
	<li>Thương hiệu của:H&agrave;n Quốc</li>
	<li>Sản xuất tại:Trung Quốc</li>
	<li>D&ograve;ng sản phẩm:2020</li>
	<li>Bộ b&aacute;n h&agrave;ng chuẩn:D&acirc;y nguồnRemote1 sợi Ăng-ten FM</li>
	<li>H&atilde;ng:LG</li>
</ul>
',
        'details'=> '<p>Phối c&aacute;c bản nhạc theo phong c&aacute;ch ri&ecirc;ng với b&agrave;n hiệu chỉnh DJ - DJ Pad</p>

<p>Tr&ecirc;n sản phẩm c&ograve;n trang bị b&agrave;n hiệu chỉnh DJ - DJ Pad c&ugrave;ng c&aacute;c hiệu ứng &acirc;m thanh được t&iacute;ch hợp gồm 3 chế độ: Club, Drum, v&agrave; User. Khi ở chế độ User, bạn c&oacute; thể tạo hiệu ứng &acirc;m thanh (mẫu) th&ocirc;ng qua ứng dụng Xboom sau đ&oacute; đồng bộ h&oacute;a c&aacute;c mẫu đ&oacute; ph&aacute;t ra loa dễ d&agrave;ng.</p>

<p><img alt="Loa Karaoke LG Xboom RN5 - Thỏa sức chơi nhạc với bàn DJ - DJ Pad" src="https://cdn.tgdd.vn/Products/Images/2162/223478/lg-rn5-272820-032829.jpg" /></p>

<h3><a href="https://www.dienmayxanh.com/dan-loa-dvd?g=dieu-khien-bang-dien-thoai" target="_blank">Điều khiển bằng điện thoại</a>&nbsp;dễ d&agrave;ng, tiện lợi qua ứng dụng XBoom</h3>

<p>Link tải ứng dụng XBoom theo phi&ecirc;n bản:&nbsp;<a href="https://play.google.com/store/apps/details?id=com.lge.media.lgxboom&amp;hl=vi" target="_blank">Android</a>&nbsp;/&nbsp;<a href="https://apps.apple.com/vn/app/lg-xboom/id1486733524?l=vi" target="_blank">AppStore</a>.</p>

<p><img alt="Loa Karaoke LG Xboom RN5 - Điều khiển qua ừn dụng Xboom" src="https://cdn.tgdd.vn/Products/Images/2162/223478/lg-rn5-271220-031224.jpg" /></p>

<h3>Chế độ h&aacute;t Karaoke v&agrave; điều chỉnh hiệu ứng giọng h&aacute;t Voice Effect tiện lợi</h3>

<p>Với cổng kết nối micro được trang bị tr&ecirc;n&nbsp;<a href="https://www.dienmayxanh.com/dan-loa-dvd?g=loa-keo" target="_blank">loa k&eacute;o</a>&nbsp;n&agrave;y, bạn sẽ trở th&agrave;nh ca sĩ dễ d&agrave;ng hơn, thoả sức với đam m&ecirc; ca h&aacute;t bất k&igrave; l&uacute;c n&agrave;o.</p>

<p>Đồng thời, giọng h&aacute;t của bạn c&oacute; thể được điều chỉnh dễ d&agrave;ng tr&ecirc;n chiếc loa n&agrave;y với hơn 18 hiệu ứng giọng h&aacute;t kh&aacute;c nhau như: Bass, Soprano, Helium, Robot, Duet Man, Duet Woman,...</p>

<p><img alt="Loa Karaoke LG Xboom RN5 - Đáp ứng nhu cầu hát Karaoke" src="https://cdn.tgdd.vn/Products/Images/2162/223478/lg-rn5-270020-040021.jpg" /></p>

<h3>Trang bị c&aacute;c cổng kết nối th&ocirc;ng dụng, tiện lợi</h3>

<p>Loa Karaoke LG RN5 được t&iacute;ch hợp c&aacute;c cổng kết nối phổ biến tr&ecirc;n&nbsp;<a href="https://www.dienmayxanh.com/dan-loa-dvd?g=dan-am-thanh" target="_blank">d&agrave;n &acirc;m thanh nghe nhạc</a>&nbsp;gi&uacute;p hỗ trợ kết nối dễ d&agrave;ng hơn như: Jack Micro 6.5, Jack Guitar, 2 cổng USB, cổng Angtenna.</p>

<p><img alt="Loa karaoke LG OL45 220W - Đa dạng cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/2162/223478/lg-rn5-204220-104251.jpg" /></p>

<p>Nh&igrave;n chung,&nbsp;Loa Karaoke LG RN5 l&agrave; lựa chọn th&iacute;ch hợp&nbsp;phổ biến hiện nay với nhiều t&iacute;nh năng, c&ocirc;ng nghệ hiện đại như: điều khiển qua điện thoại, kết nối 2 loa trực tiếp,... mang lại cho người d&ugrave;ng những gi&acirc;y ph&uacute;t tận hưởng &acirc;m thanh tuyệt vời.</p>
',
        'slug'=>Str::slug('Loa Karaoke LG XBOOM RN5','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Loa Karaoke LG XBOOM RN7',
        'price'=>8990000,
        'old_price'=>9990000,
        'quantity'=>50,
        'cover_image'=>'https://cdn.tgdd.vn/Products/Images/2162/223940/lg-rn7-1-2-org.jpg',
        'rate'=>400,
        'category_id'=>12,
        'brand_id'=>8,
        'user_id'=>random_int(1,5),
        'describe'=> '<p><img alt="Thông số kỹ thuật Loa Karaoke LG XBOOM RN7" src="https://cdn.tgdd.vn/Products/Images/2162/223940/Kit/lg-rn7-note.jpg" style="height:585px; width:780px" /></p>

<h3>Thiết kế dạng đứng c&ugrave;ng t&ocirc;ng m&agrave;u đen mạnh mẽ</h3>

<p><a href="https://www.dienmayxanh.com/dan-loa-dvd/lg-rn7" target="_blank">Loa Karaoke LG Xboom RN7</a>&nbsp;sở hữu thiết kế h&igrave;nh chữ nhật đứng gi&uacute;p bạn tiết kiệm kh&ocirc;ng gian, t&ocirc;ng m&agrave;u đen đan xen m&agrave;u đỏ tạo n&ecirc;n một tổng thể h&agrave;i h&ograve;a. Với 1 loa Bass, 2 loa&nbsp;Treble v&agrave; 2 loa Mid&nbsp;vừa mang lại &acirc;m thanh s&ocirc;i động vừa mang lại sự đẹp mắt cho kh&ocirc;ng gian được bố tr&iacute;.</p>

<p><img alt="Loa Karaoke LG Xboom RN7 - Thiết kế hiện đại" src="https://cdn.tgdd.vn/Products/Images/2162/223940/lg-rn7-042220-122220.jpg" /></p>

<h3>&Acirc;m trầm mạnh mẽ, r&otilde; n&eacute;t với c&ocirc;ng suất loa 500 W c&ugrave;ng c&ocirc;ng nghệ&nbsp;Super Bass Boost</h3>

<p><a href="https://www.dienmayxanh.com/dan-loa-dvd-lg" target="_blank">Loa LG</a>&nbsp;Xboom sở hữu c&ocirc;ng nghệ&nbsp;Super Bass Boost gi&uacute;p &acirc;m thanh được cải thiện tốt hơn, &acirc;m trầm nổi bật, mạnh mẽ v&agrave; r&otilde; n&eacute;t hơn.</p>

<p>B&ecirc;n cạnh đ&oacute;,&nbsp;<a href="http://www.dienmayxanh.com/dan-loa-dvd?g=tu-500-w-1000-w" target="_blank">loa c&oacute; c&ocirc;ng suất 500 W</a>&nbsp;cho &acirc;m thanh lớn lan tỏa khắp kh&ocirc;ng gian, mang đến cho bạn trải nghiệm &acirc;m nhạc s&ocirc;i động v&agrave; tuyệt vời.</p>

<p><img alt="Loa Karaoke LG Xboom RN7 - Công nghệ Super Bass Boost" src="https://cdn.tgdd.vn/Products/Images/2162/223940/lg-rn7-044420-124445.jpg" /></p>

<h3>Thắp s&aacute;ng s&agrave;n nhảy, biến kh&ocirc;ng gian trở n&ecirc;n s&ocirc;i động hơn nhờ c&ocirc;ng nghệ Multi Color Lighting</h3>

<p><a href="https://www.dienmayxanh.com/dan-loa-dvd" target="_blank">Loa</a>&nbsp;sở hữu c&ocirc;ng nghệ&nbsp;Multi Color Lighting c&oacute; c&aacute;c đ&egrave;n LED với nhiều m&agrave;u sắc kh&aacute;c nhau v&agrave; thay đổi theo nhịp điệu, nhờ đ&oacute; sẽ tăng th&ecirc;m hứng th&uacute; cho c&aacute;c bữa tiệc của bạn được ấn tượng v&agrave; vui tươi hơn.</p>

<p><img alt="Loa Karaoke LG Xboom RN7 - Công nghệ Multi color Lighting" src="https://cdn.tgdd.vn/Products/Images/2162/223940/lg-rn7-044520-124514.jpg" /></p>

<h3>Tạo hiệu ứng nhấp nh&aacute;y tr&ecirc;n đ&egrave;n flash của điện thoại với t&iacute;nh năng Party Strobe</h3>

<p><a href="https://www.dienmayxanh.com/dan-loa-dvd?g=loa-keo" target="_blank">Loa k&eacute;o</a>&nbsp;c&oacute; khả năng tạo hiệu ứng &aacute;nh s&aacute;ng nhấp nh&aacute;y đồng bộ với nhịp điệu của &acirc;m nhạc. T&iacute;nh năng n&agrave;y hỗ trợ tối đa 3 điện thoại th&ocirc;ng minh Android kết nối c&ugrave;ng một l&uacute;c.</p>

<p><img alt="Loa Karaoke LG Xboom RN7 - Party Strobe" src="https://cdn.tgdd.vn/Products/Images/2162/223940/lg-rn7-045120-125115.jpg" /></p>

<h3>Kết hợp &acirc;m nhạc theo phong c&aacute;ch ri&ecirc;ng, l&agrave;m chủ &acirc;m nhạc nhờ b&agrave;n hiệu chỉnh DJ - DJ Pad</h3>

<p><a href="https://www.dienmayxanh.com/dan-loa-dvd-lg?g=loa-keo" target="_blank">Loa k&eacute;o LG</a>&nbsp;nhờ&nbsp;b&agrave;n hiệu chỉnh DJ - DJ Pad c&oacute; c&aacute;c c&ocirc;ng cụ v&agrave; hiệu ứng &acirc;m thanh t&iacute;ch hợp gồm 3 chế độ:&nbsp;Club, Drum, User. Trong đ&oacute;, với chế độ User&nbsp;bạn c&oacute; thể tạo hiệu ứng &acirc;m thanh (mẫu) th&ocirc;ng qua một ứng dụng Xboom, sau đ&oacute; đồng bộ h&oacute;a c&aacute;c mẫu đ&oacute; v&agrave; ph&aacute;t ra loa dễ d&agrave;ng.</p>

<p><img alt="Loa Karaoke LG Xboom RN7 - bàn hiệu chỉnh DJ - DJ Pad" src="https://cdn.tgdd.vn/Products/Images/2162/223940/lg-rn7-041420-011439.jpg" /></p>

<h3>Kết nối hai loa lại với nhau, tăng gấp đ&ocirc;i &acirc;m thanh ph&aacute;t ra nhờ&nbsp;chế độ kết nối kh&ocirc;ng d&acirc;y Wireless Party Link</h3>

<p>Loa&nbsp;LG Xboom RN7 với chế độ kết nối kh&ocirc;ng d&acirc;y&nbsp;Wireless Party Link cho ph&eacute;p kết nối hai loa lại với nhau, tăng gấp đ&ocirc;i &acirc;m thanh, nhờ đ&oacute; &acirc;m thanh lan tỏa rộng hơn cho buổi tiệc th&ecirc;m vui vẻ v&agrave; s&ocirc;i động.</p>

<p><img alt="Loa Karaoke LG Xboom RN7 - Wireless Party Link" src="https://cdn.tgdd.vn/Products/Images/2162/223940/lg-rn7-042020-102016.jpg" /></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<h3>Th&ocirc;ng số kỹ thuật chi tiết Loa Karaoke LG XBOOM RN7</h3>

<ul>
	<li>Th&ocirc;ng tin chung</li>
	<li>Loại sản phẩm:Loa k&eacute;o</li>
	<li>Tổng c&ocirc;ng suất:500 W</li>
	<li>&Acirc;m thanh đọc được:<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/mot-so-dinh-dang-am-thanh-video-pho-bien-ma-loa-da-844443" target="_blank">mp3, wma, wmv</a></li>
	<li>Tiện &iacute;ch:<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#ung-dung-xboom" target="_blank">Ứng dụng điều khiển nhạc th&ocirc;ng minh Xboom</a><a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#usb" target="_blank">Copy USB to USB</a>C&oacute; thể h&aacute;t KaraokeNghe được FM Radio<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#dj" target="_blank">B&agrave;n DJ hiệu chỉnh nhạc</a>Kết nối loa với TV<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#wireless-party-link" target="_blank">Gh&eacute;p nối kh&ocirc;ng d&acirc;y với nhiều loa kh&aacute;c (Wireless Party Link)</a><a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#ket-noi-da-diem" target="_blank">Chơi nhạc Multi Bluetooth, Multi Jukebox</a></li>
	<li>Kết nối</li>
	<li>Kết nối kh&ocirc;ng d&acirc;y:Bluetooth</li>
	<li>Kết nối kh&aacute;c:Jack 6.5 MicroCổng GuitarFMOpticalUSB</li>
	<li>Điều khiển bằng điện thoại:<a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-noi-bat-tren-loa-xboom-lg-1260912#ung-dung-xboom" target="_blank">LG XBOOM</a></li>
	<li>Th&ocirc;ng tin sản phẩm</li>
	<li>Loa ch&iacute;nh:D&agrave;i 33 cm - Rộng 34.4 cm - Cao 78.5 cm - Nặng 15.9 kg</li>
	<li>Số lượng loa Bass:1 loa</li>
	<li>Số lượng loa Treble:2 loa</li>
	<li>Số lượng loa Mid:2 loa</li>
	<li>Thương hiệu của:H&agrave;n Quốc</li>
	<li>Sản xuất tại:Trung Quốc</li>
	<li>D&ograve;ng sản phẩm:2020</li>
	<li>Bộ b&aacute;n h&agrave;ng chuẩn:D&acirc;y nguồn,&nbsp;Remote</li>
	<li>H&atilde;ng:LG.</li>
</ul>
',
        'details'=> '<p>Dễ d&agrave;ng chuyển đổi kết nối giữa 3 thiết bị với t&iacute;nh năng kết nối đa điểm&nbsp;Multi Bluetooth</p>

<p>T&iacute;nh năng n&agrave;y cho ph&eacute;p bạn kết nối 3 thiết bị điện thoại Android c&ugrave;ng l&uacute;c với loa th&ocirc;ng qua Bluetooth hoặc qua ứng dụng Xboom. Bạn c&oacute; thể&nbsp;điều khiển li&ecirc;n tục danh s&aacute;ch nhạc đang ph&aacute;t m&agrave; kh&ocirc;ng bị gi&aacute;n đoạn &acirc;m nhạc.</p>

<p><img alt="LOA KARAOKE LG XBOOM RN7" src="https://cdn.tgdd.vn/Products/Images/2162/223940/lg-rn7-072420-042404.jpg" /></p>

<h3>Chuyển đổi dữ liệu ngay tr&ecirc;n loa dễ d&agrave;ng với t&iacute;nh năng&nbsp;Copy USB to USB</h3>

<p>Loa LG c&oacute; thể ghi lại danh s&aacute;ch nhạc, c&aacute;c bản mix DJ v&agrave;&nbsp;ph&aacute;t nhạc th&ocirc;ng qua USB, đồng thời c&oacute; thể hỗ trợ chuyển đổi dữ liệu dễ d&agrave;ng hơn giữa 2 USB với nhau khi được cắm c&ugrave;ng l&uacute;c tr&ecirc;n loa.</p>

<p><img alt="Loa Karaoke LG Xboom RN7 - Copy USB to USB" src="https://cdn.tgdd.vn/Products/Images/2162/223940/lg-rn7-044320-014316.jpg" /></p>

<h3><img alt="Loa Karaoke LG Xboom RN7 - LG XBoom" src="https://cdn.tgdd.vn/Products/Images/2162/223940/lg-rn7-044720-014752.jpg" /></h3>

<h3>Tự tin khoe giọng h&aacute;t v&agrave; h&oacute;a th&acirc;n th&agrave;nh ca sĩ thực thụ với chế độ Karaoke</h3>

<p>Với cổng kết nối micro được trang bị tr&ecirc;n loa, bạn c&oacute; thể thỏa sức với đam m&ecirc; ca h&aacute;t bất kỳ l&uacute;c n&agrave;o như h&oacute;a th&acirc;n th&agrave;nh một ca sĩ thực thụ.</p>

<p>B&ecirc;n cạnh đ&oacute;, bạn c&oacute; thể t&ugrave;y &yacute; điều chỉnh, giảm giọng h&aacute;t của m&igrave;nh qua chế độ&nbsp;Voice Canceller v&agrave;&nbsp;điều chỉnh cao độ của b&agrave;i h&aacute;t ph&ugrave; hợp với giọng của bạn qua chế độ&nbsp;Key Changer.</p>

<p><img alt="Loa Karaoke LG Xboom RN7 - Chế độ Karaoke" src="https://cdn.tgdd.vn/Products/Images/2162/223940/lg-rn7-045320-015307.jpg" /></p>

<h3>Đồng bộ h&oacute;a &acirc;m thanh kết nối giữa loa với tivi&nbsp;th&ocirc;ng qua c&aacute;p quang hoặc Bluetooth</h3>

<p><img alt="Loa Karaoke LG Xboom RN7 - Kết nối tivi" src="https://cdn.tgdd.vn/Products/Images/2162/223940/lg-rn7-045620-015629.jpg" /></p>

<h3>Hỗ trợ c&aacute;c cổng kết nối tiện lợi</h3>

<p><img alt="Loa Karaoke LG Xboom RN7 - Cổng kết nối" src="https://cdn.tgdd.vn/Products/Images/2162/223940/lg-rn7-302120-032144.jpg" /></p>
',
        'slug'=>Str::slug('Loa Karaoke LG XBOOM RN7','-').'.aspx',
        'created_at'=>now(),

    ]);

        DB::table('products')->insert([
            'name'=>'Chuột Gaming Asus TUF M3 Đen',
            'price'=>690000,
            'old_price'=>790000,
            'quantity'=>50,
            'cover_image'=>'https://cdn.tgdd.vn/Products/Images/86/220368/chuot-gaming-asus-tuf-m3-den-1-600x600.jpg',
            'rate'=>400,
            'category_id'=>13,
            'brand_id'=>2,
            'user_id'=>random_int(1,5),
            'describe'=> '<h2>Đặc điểm nổi bật của Chuột Gaming Asus TUF M3 Đen</h2>

<p><img src="https://cdn.tgdd.vn/Products/Images/86/220368/Slider/chuot-gaming-asus-tuf-m3-den-220620-1128060.jpg" /></p>

<h3>Thiết kế đơn giản, kh&ocirc;ng qu&aacute; hầm hố</h3>

<p><a href="https://www.thegioididong.com/chuot-may-tinh/chuot-gaming-asus-tuf-m3-den#1" target="_blank">Chuột Gaming Asus TUF M3 Đen</a>&nbsp;c&oacute; thiết kế nhỏ gọn, c&ugrave;ng chất liệu nhựa c&oacute; độ ma s&aacute;t cao gi&uacute;p cho việc cầm nắm chắc chắn hơn. Kiểu Ergonomic ph&ugrave; hợp với người thuận tay phải. Trọng lượng chỉ 84 gram kh&aacute; nhẹ, tiện dụng.</p>

<p><a href="https://www.thegioididong.com/images/86/220368/chuot-gaming-asus-tuf-m3-den1.jpg" onclick="return false;"><img alt="Thiết kế đơn giản và nhỏ gọn - Chuột Gaming Asus TUF M3 Đen" src="https://cdn.tgdd.vn/Products/Images/86/220368/chuot-gaming-asus-tuf-m3-den1.jpg" /></a></p>

<h3>Linh hoạt thay đổi độ nhạy chuột c&ugrave;ng với bốn cấp&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-dpi-chuot-may-tinh-la-gi-980986" target="_blank">DPI</a></h3>

<p><a href="https://www.thegioididong.com/chuot-may-tinh-asus" target="_blank">Chuột ASUS</a>&nbsp;được trang bị cảm biến quang 200 - 7000 DPI&nbsp;cho người d&ugrave;ng dễ d&agrave;ng điều chỉnh độ nhạy khi di chuyển chuột sao cho ph&ugrave; hợp với từng loại game.</p>

<p><a href="https://www.thegioididong.com/images/86/220368/chuot-gaming-asus-tuf-m3-den2.jpg" onclick="return false;"><img alt="Cảm biến quang với độ phân giải 200 - 7000 DPI - Chuột Gaming Asus TUF M3 Đen" src="https://cdn.tgdd.vn/Products/Images/86/220368/chuot-gaming-asus-tuf-m3-den2.jpg" /></a></p>

<h3>Kết nối được hầu hết c&aacute;c loại&nbsp;<a href="https://www.thegioididong.com/laptop" target="_blank">laptop</a>,&nbsp;<a href="https://www.thegioididong.com/may-tinh-de-ban" target="_blank">PC</a>&nbsp;th&ocirc;ng qua cổng USB</h3>

<p>D&acirc;y kết nối được bọc lớp nhựa bền bỉ c&ugrave;ng&nbsp;<strong>độ d&agrave;i 184 cm</strong>&nbsp;cho người d&ugrave;ng thoải m&aacute;i sử dụng.</p>

<h3><a href="https://www.thegioididong.com/images/86/220368/chuot-gaming-asus-tuf-m3-den6.jpg" onclick="return false;"><img alt="Dễ dàng kết nối vs laptop, PC qua cổng USB - Chuột Gaming Asus TUF M3 Đen" src="https://cdn.tgdd.vn/Products/Images/86/220368/chuot-gaming-asus-tuf-m3-den6.jpg" /></a></h3>

<h3>Sử dụng đ&egrave;n ASUS Aura Sync RGB t&ugrave;y biến m&agrave;u sắc logo gi&uacute;p&nbsp;<a href="https://www.thegioididong.com/chuot-may-tinh" target="_blank">chuột</a>&nbsp;nổi bật hơn khi sử dụng ở m&ocirc;i trường tối</h3>

<h3><a href="https://www.thegioididong.com/images/86/220368/chuot-gaming-asus-tuf-m3-den3.jpg" onclick="return false;"><img alt="Sử dụng công nghệ chiếu sáng  LED AURA SYNC RGB - Chuột Gaming Asus TUF M3 Đen" src="https://cdn.tgdd.vn/Products/Images/86/220368/chuot-gaming-asus-tuf-m3-den3.jpg" /></a></h3>

<h3>&nbsp;</h3>
',
            'specifications'=> '<h2>Th&ocirc;ng số kỹ thuật</h2>

<ul>
	<li><a href="https://www.thegioididong.com/hoi-dap/tim-hieu-dpi-chuot-may-tinh-la-gi-980986" target="_blank">Độ ph&acirc;n giải:</a>

	<p><em>200 - 7000 DPI</em></p>
	</li>
	<li>Tốc độ phản hồi:
	<p><em>1000Hz/1ms (0.001 gi&acirc;y)</em></p>
	</li>
	<li>Đ&egrave;n LED:
	<p><em>C&oacute;</em></p>
	</li>
	<li>C&aacute;ch kết nối:
	<p><em>D&acirc;y cắm USB</em></p>
	</li>
	<li>Độ d&agrave;i d&acirc;y / Khoảng c&aacute;ch kết nối:
	<p><em>184 cm</em></p>
	</li>
	<li>Trọng lượng:
	<p><em>84g</em></p>
	</li>
	<li>Thương hiệu của:
	<p><em>Đ&agrave;i Loan</em></p>
	</li>
	<li>Sản xuất tại:
	<p><em>Trung Quốc</em></p>
	</li>
</ul>
',
            'details'=> '<h2>Trang bị bảy n&uacute;t chức năng, c&oacute; thể t&ugrave;y chỉnh</h2>

<p>Được trang bị c&aacute;c n&uacute;t điều chỉnh như: DPI, cuộn trang (scroll up, scroll down, scroll click) v&agrave; n&uacute;t tiến một trang (forward), l&ugrave;i một trang (backward).</p>

<p>Dễ d&agrave;ng điều chỉnh theo nhu cầu sử dụng của m&igrave;nh ngay tr&ecirc;n chuột, n&uacute;t nhấn &ecirc;m nhẹ, độ bền l&ecirc;n đến 10 triệu lần. B&ecirc;n cạnh đ&oacute;, con lăn răng cưa cuộn trang ch&iacute;nh x&aacute;c, nhanh nhạy.</p>

<p><a href="https://www.thegioididong.com/images/86/220368/chuot-gaming-asus-tuf-m3-den4-1.jpg" onclick="return false;"><img alt="Bảy nút chức năng, có thể tùy chỉnh - Chuột Gaming Asus TUF M3 Đen" src="https://cdn.tgdd.vn/Products/Images/86/220368/chuot-gaming-asus-tuf-m3-den4-1.jpg" /></a></p>

<h3>Dễ d&agrave;ng thiết lập ri&ecirc;ng chức năng cho chuột của bạn với tiện &iacute;ch Armoury II</h3>

<p>Sử dụng tiện &iacute;ch Armoury II cho bạn dễ d&agrave;ng thiết lập c&aacute;c điểu khiển mở rộng v&agrave; thực hiện c&agrave;i đặt ri&ecirc;ng tr&ecirc;n thiết bị như: T&ugrave;y biến m&agrave;u sắc, g&aacute;n n&uacute;t bấm,...</p>

<p>Tải tiện &iacute;ch Armoury II:&nbsp;<a href="https://www.asus.com/Keyboards-Mice/TUF-Gaming-M5/HelpDesk_Download/" target="_blank">Download</a></p>

<p><a href="https://www.thegioididong.com/images/86/220368/chuot-gaming-asus-tuf-m3-den5.jpg" onclick="return false;"><img alt="Sử dụng các trình điều khiển mở rộng  với tiện tích Armoury II - Chuột Gaming Asus TUF M3 Đen" src="https://cdn.tgdd.vn/Products/Images/86/220368/chuot-gaming-asus-tuf-m3-den5.jpg" /></a></p>

<p><a href="https://www.thegioididong.com/chuot-may-tinh-gaming" target="_blank">Chuột Gaming</a>&nbsp;Asus TUF M3 thiết kế đơn giản, nhỏ gọn c&ugrave;ng độ nhạy cao cho người d&ugrave;ng di chuyển ch&iacute;nh x&aacute;c khi chơi game.</p>
',
            'slug'=>Str::slug('Chuột Gaming Asus TUF M3 Đen','-').'.aspx',
            'created_at'=>now(),

        ]);

        DB::table('products')->insert([
        'name'=>'Điện thoại di động Blackberry Key One - Black - Chính hãng',
        'price'=>4290000,
        'old_price'=>5990000,
        'quantity'=>50,
        'cover_image'=>'https://hoanghamobile.com/i/preview/Uploads/2020/12/30/image-removebg-preview.png',
        'rate'=>400,
        'category_id'=>15,
        'user_id'=>random_int(1,5),
        'describe'=> '<p>Thiết kế độc đ&aacute;o kh&ocirc;ng &ldquo;đụng h&agrave;ng&rdquo;</p>

<p>Những mẫu điện thoại tới từ BlackBerry lu&ocirc;n c&oacute; được những thiết kế độc đ&aacute;o, mang ngoại h&igrave;nh kh&aacute;c hẳn với những mẫu smartphone hiện đang c&oacute; tr&ecirc;n thị trường v&agrave; BlackBerry Key One cũng kh&ocirc;ng phải l&agrave; một ngoại lệ. Người d&ugrave;ng khi lựa chọn Key One l&agrave; đ&atilde; x&aacute;c định trước sẽ gắn b&oacute; l&acirc;u d&agrave;i với một chiếc smartphone Android c&oacute; t&iacute;ch hợp b&agrave;n ph&iacute;m QWERTY vật l&yacute; huyền thoại một thời. Phần mặt trước nổi trội bởi b&agrave;n ph&iacute;m QWERTY th&igrave; mặt sau của m&aacute;y cũng khiến người d&ugrave;ng phải xi&ecirc;u l&ograve;ng. Mặt lưng của m&aacute;y được ho&agrave;n thiện bằng v&acirc;n cao su nổi, đi ngược lại ho&agrave;n to&agrave;n so với tất cả c&aacute;c h&atilde;ng smartphone hiện nay, khi số đ&ocirc;ng c&aacute;c mẫu điện thoại th&ocirc;ng minh ng&agrave;y nay đều được l&agrave;m kh&ocirc;ng bằng nhựa th&igrave; l&agrave; kim loại hoặc k&iacute;nh.&nbsp;</p>

<p><img src="https://lh3.googleusercontent.com/u66zxmDBD9OwkSxL-LLdMfV8MihJziC53AN6SMkpjlbne8Zv-EwjN1NL2tkrn-pfj2ekH7U1I-qQ6-TsXve6cdH7C5Sl1axa9ahKwK05ob4SLg8e-8tYpek-n49LeZytiXlYHYc" style="height:416px; width:624px" /></p>

<p>BlackBerry Key One mang lại cho người d&ugrave;ng một cảm gi&aacute;c cầm nắm kh&aacute; chắc tay với khung viền kim loại chắc chắn, bền b&igrave;, đặc biệt c&ograve;n được bo tr&ograve;n uốn cong sang 2 b&ecirc;n cạnh, gi&uacute;p cho mọi thao t&aacute;c sử dụng của người d&ugrave;ng kh&ocirc;ng hề bị cấn. Ngo&agrave;i ra, BlackBerry đ&atilde; rất tinh tế khi cho bo cong cả phần cạnh dưới, gi&uacute;p người d&ugrave;ng c&oacute; thể thoải m&aacute;i hơn khi phải nhập liệu trong thời gian d&agrave;i. Tuy l&agrave; một mẫu điện thoại mang nhiều hơi hướng ho&agrave;i cổ, thế nhưng BlackBerry cũng kh&ocirc;ng qu&ecirc;n t&iacute;ch hợp v&agrave;o Key One những c&ocirc;ng nghệ bảo mật mới. Phần cảm biến v&acirc;n tay một chạm tr&ecirc;n Key One hoạt động kh&aacute; ổn định, nhanh v&agrave; nhạy, kể cả khi tay người d&ugrave;ng c&oacute; d&iacute;nh nước hoặc bụi nhẹ th&igrave; cảm biến vẫn phản ứng b&igrave;nh thường.&nbsp;</p>

<p>Khả năng nhiếp ảnh tốt d&ugrave; chỉ c&oacute; 1 camera</p>

<p>Đi ngược lại xu hướng của c&aacute;c mẫu smartphone hiện tại l&agrave; c&agrave;ng c&oacute; nhiều camera c&agrave;ng tốt th&igrave; BlackBerry Key One chỉ sở hữu duy nhất 1 camera mặt sau độ ph&acirc;n giải 12MP, khẩu độ mở f/2.0. Tuy chỉ sở hữu 1 cảm biến camera duy nhất ở mặt sau thế nhưng ảnh cho ra từ Key One cho ra chất lượng hiển thị rất ổn, kh&ocirc;ng thua k&eacute;m qu&aacute; nhiều so với c&aacute;c mẫu điện thoại tầm trung hiện nay. Tốc độ chụp v&agrave; lưu ảnh ở mức vừa ổn, chỉ c&oacute; một v&agrave;i nhược điểm nhỏ l&agrave; khi chụp bằng chế độ HDR, m&aacute;y vẫn c&ograve;n một ch&uacute;t lag nhẹ.&nbsp;</p>

<p><img src="https://lh5.googleusercontent.com/YfLDWLRzW33tAQdrCcG1E6fXiSinuYKcXa8Vhb7xfmsBNfbdl_9ZnPqPaKQ2q_Ysir-Vkb-hXYfoY8zufQQcxF1vP1xemv575OtgXqdrhvnHCiuDo7s3l6gD1MGY4js1ViYBiMw" style="height:351px; width:624px" /></p>

<p>Như đ&atilde; n&oacute;i ở tr&ecirc;n, chất lượng ảnh cho ra từ BlackBerry Key One c&oacute; chất lượng ảnh kh&aacute; tốt, đặc biệt l&agrave; c&aacute;c chi tiết trong ảnh được t&aacute;i tạo lại rất ấn tượng, độ tương phản v&agrave; b&atilde;o h&ograve;a ảnh ổn, kh&ocirc;ng bị qu&aacute; gắt hoặc qu&aacute; bệt khi chụp trong điều kiện đủ s&aacute;ng. Về ph&iacute;a camera selfie ph&iacute;a trước c&oacute; k&iacute;ch thước ống k&iacute;nh kh&aacute; lớn, c&oacute; độ ph&acirc;n giải 8MP, cung cấp khả năng chụp đ&ecirc;m kh&aacute; tốt.</p>

<p>&nbsp;</p>
',
        'specifications'=> '<table>
	<tbody>
		<tr>
			<td><strong>C&ocirc;ng nghệ m&agrave;n h&igrave;nh</strong></td>
			<td>IPS LCD</td>
		</tr>
		<tr>
			<td><strong>Độ ph&acirc;n giải</strong></td>
			<td>1080 x 1620 Pixels</td>
		</tr>
		<tr>
			<td><strong>M&agrave;n h&igrave;nh rộng</strong></td>
			<td>4.5&quot;</td>
		</tr>
		<tr>
			<td><strong>Mặt k&iacute;nh cảm ứng</strong></td>
			<td>K&iacute;nh cường lực Corning Gorilla Glass 4</td>
		</tr>
		<tr>
			<th colspan="2">Camera sau</th>
		</tr>
		<tr>
			<td><strong>Độ ph&acirc;n giải</strong></td>
			<td>12 MP</td>
		</tr>
		<tr>
			<td><strong>Quay phim</strong></td>
			<td>
			<ol>
				<li>4K 2160p@24fps</li>
				<li>4K 2160p@30fps</li>
				<li>FullHD 1080@24fps</li>
				<li>FullHD 1080p@30fps</li>
				<li>FullHD 1080p@60fps</li>
				<li>HD 720p@24fps</li>
				<li>HD 720p@30fps</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>T&iacute;nh năng</strong></td>
			<td>
			<ol>
				<li>Chạm lấy n&eacute;t</li>
				<li>HDR</li>
				<li>Lấy n&eacute;t theo pha (PDAF)</li>
				<li>Nhận diện khu&ocirc;n mặt</li>
				<li>Quay chậm (Slow Motion)</li>
				<li>To&agrave;n cảnh (Panorama)</li>
				<li>Tự động lấy n&eacute;t (AF)</li>
			</ol>
			</td>
		</tr>
		<tr>
			<th colspan="2">Camera trước</th>
		</tr>
		<tr>
			<td><strong>Độ ph&acirc;n giải</strong></td>
			<td>8 MP</td>
		</tr>
		<tr>
			<th colspan="2">Hệ điều h&agrave;nh &amp; CPU</th>
		</tr>
		<tr>
			<td><strong>Tốc độ CPU</strong></td>
			<td>2.0 GHz</td>
		</tr>
		<tr>
			<td><strong>Chip đồ họa (GPU)</strong></td>
			<td>Adreno 506</td>
		</tr>
		<tr>
			<th colspan="2">Bộ nhớ &amp; Lưu trữ</th>
		</tr>
		<tr>
			<td><strong>RAM</strong></td>
			<td>4 GB</td>
		</tr>
		<tr>
			<td><strong>Bộ nhớ trong (ROM)</strong></td>
			<td>64 GB</td>
		</tr>
		<tr>
			<td><strong>Bộ nhớ c&ograve;n lại (khả dụng)</strong></td>
			<td>Khoảng 50 GB</td>
		</tr>
		<tr>
			<td><strong>Thẻ nhớ ngo&agrave;i</strong></td>
			<td>MicroSD, hỗ trợ tối đa 256 GB</td>
		</tr>
		<tr>
			<th colspan="2">Kết nối</th>
		</tr>
		<tr>
			<td><strong>Mạng di động</strong></td>
			<td>Hỗ trợ 4G</td>
		</tr>
		<tr>
			<td><strong>Số khe sim</strong></td>
			<td>1 Nano SIM</td>
		</tr>
		<tr>
			<td><strong>Wifi</strong></td>
			<td>
			<ol>
				<li>Wi-Fi 802.11 a/b/g/n/ac</li>
				<li>Wi-Fi Direct</li>
				<li>Wi-Fi hotspot</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>GPS</strong></td>
			<td>
			<ol>
				<li>A-GPS</li>
				<li>BDS</li>
				<li>GLONASS</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Bluetooth</strong></td>
			<td>
			<ol>
				<li>LE</li>
				<li>v4.0</li>
				<li>v4.2</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Kết nối kh&aacute;c</strong></td>
			<td>NFC</td>
		</tr>
		<tr>
			<td><strong>Cổng kết nối/sạc</strong></td>
			<td>USB Type-C</td>
		</tr>
		<tr>
			<td><strong>Jack tai nghe</strong></td>
			<td>3.5 mm</td>
		</tr>
		<tr>
			<th colspan="2">Thiết kế - trọng lượng</th>
		</tr>
		<tr>
			<td><strong>Thiết kế</strong></td>
			<td>Nguy&ecirc;n khối</td>
		</tr>
		<tr>
			<td><strong>K&iacute;ch thước</strong></td>
			<td>D&agrave;i 149.3 mm - Ngang 72.5 mm - D&agrave;y 9.4 mm</td>
		</tr>
		<tr>
			<td><strong>Trọng lượng</strong></td>
			<td>180 g</td>
		</tr>
		<tr>
			<th colspan="2">Pin &amp; Sạc</th>
		</tr>
		<tr>
			<td><strong>Dung lượng pin</strong></td>
			<td>3505 mAh</td>
		</tr>
		<tr>
			<td><strong>Loại pin</strong></td>
			<td>Li-Po</td>
		</tr>
		<tr>
			<th colspan="2">Tiện &iacute;ch</th>
		</tr>
		<tr>
			<td><strong>Xem phim</strong></td>
			<td>
			<ol>
				<li>3GP</li>
				<li>AVI</li>
				<li>DivX</li>
				<li>H.264(MPEG4-AVC)</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Nghe nhạc</strong></td>
			<td>
			<ol>
				<li>AAC</li>
				<li>FLAC</li>
				<li>MP3</li>
				<li>OGG</li>
				<li>WAV</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Ghi &acirc;m</strong></td>
			<td>Kh&ocirc;ng</td>
		</tr>
		<tr>
			<td><strong>T&iacute;nh năng đặc biệt</strong></td>
			<td>Chạm 2 lần tắt/s&aacute;ng m&agrave;n h&igrave;nh</td>
		</tr>
		<tr>
			<td><strong>Bảo mật n&acirc;ng cao</strong></td>
			<td>
			<ol>
				<li>Mở kh&oacute;a bằng v&acirc;n tay</li>
				<li>Mở kho&aacute; khu&ocirc;n mặt</li>
			</ol>
			</td>
		</tr>
	</tbody>
</table>
',
        'details'=> '<p>Hiệu năng kh&ocirc;ng d&agrave;nh cho chơi game</p>

<p>Phải nhắc lại r&otilde; r&agrave;ng một điều rằng, BlackBerry Key One sinh ra kh&ocirc;ng phải l&agrave; để d&agrave;nh cho c&aacute;c t&aacute;c vụ như chơi game hoặc xem phim. BlackBerry Key One sở hữu một tỉ lệ m&agrave;n h&igrave;nh c&oacute; thể n&oacute;i l&agrave; đi ngược lại so với tr&agrave;o lưu hiện nay, khi c&aacute;c mẫu smartphone kh&aacute;c đều c&oacute; tỉ lệ l&agrave; 18.5:9, 19:9 hoặc 20:9 tr&agrave;n viền th&igrave; m&aacute;y lại c&oacute; m&agrave;n h&igrave;nh tỉ lệ c&oacute; phần ho&agrave;i cổ v&agrave; dị - 4:3.</p>

<p><img src="https://lh3.googleusercontent.com/gfPWZCLN51INpRF-Gt2rmqdGJcvqK6DSIvhjm3-F8miQZS54u2D2SZUzdOCf6B7K0UOKmfcH1IIjy0ziIOZ4rZkluCRIQwwkDEG8NmzbjU4pMWW-x3xLKysQF9JpjMby_gjGjEg" style="height:351px; width:624px" /></p>

<p>Cung cấp khả năng xử l&yacute; cho BlackBerry Key One l&agrave; bộ vi xử l&yacute; Snapdragon 625 c&ugrave;ng thanh RAM 3GB, bộ nhớ trong 32GB. R&otilde; r&agrave;ng l&agrave; với bộ cấu h&igrave;nh n&agrave;y, BlackBerry Key One kh&ocirc;ng phải l&agrave; chiếc điện thoại cho c&aacute;c game thủ hay những người d&ugrave;ng hay chơi game. Đối tượng người d&ugrave;ng ch&iacute;nh m&agrave; Key One nhắm tới l&agrave; những kh&aacute;ch h&agrave;ng doanh nh&acirc;n, l&agrave;m văn ph&ograve;ng cần những thao t&aacute;c nhập liệu nhanh v&agrave; ch&iacute;nh x&aacute;c. Key One được BlackBerry trang bị vi&ecirc;n pin dung lượng 3.505mAh kh&aacute; hợp l&yacute; với cấu h&igrave;nh phần cứng của m&aacute;y. Tr&ecirc;n thực tế, Key One cung cấp cho người d&ugrave;ng 6h30 onscreen li&ecirc;n tục v&agrave; thoải m&aacute;i đ&aacute;p ứng nhu cầu một ng&agrave;y d&agrave;i l&agrave;m việc.&nbsp;</p>

<p>BlackBerry Key One sở hữu nhiều ưu điểm hơn nhược điểm</p>

<p>Key One sở hữu rất nhiều ưu điểm hơn l&agrave; nhiều nhược điểm theo như nhiều &yacute; kiến của người d&ugrave;ng. Key One tuy chỉ c&oacute; 1 camera đơn ph&iacute;a sau nhưng chất lượng ảnh cho ra lại cực k&igrave; chất lượng, hiệu năng với Snapdragon 625 l&agrave; ổn với c&aacute;c t&aacute;c vụ văn ph&ograve;ng thường ng&agrave;y, m&agrave;n h&igrave;nh hiển thị r&otilde; d&ugrave; ở ngo&agrave;i trời nắng gắt, loa thoại r&otilde; r&agrave;ng c&ugrave;ng vi&ecirc;n pin bền bỉ. Đ&oacute; l&agrave; c&ograve;n chưa kể với b&agrave;n ph&iacute;m QWERTY m&agrave; người d&ugrave;ng một khi đ&atilde; sử dụng quen th&igrave; sẽ kh&ocirc;ng thể dứt ra được, hỗ trợ c&ocirc;ng việc mạnh mẽ với BlackBerry Hub v&agrave; Hotkey.</p>

<p><img src="https://lh5.googleusercontent.com/-Tho6UbL5yAJsajoJPMZNT6O31cUMILxcJtv8hBUT90bKFF8DSLpea4xX_FiOM5VU9qo3D0_hSM7DNXb0h0kyeoBxflwH7eC4GelxIY_X9JzyiHDJ2GI5zPG70ok_rysBTkDCSo" style="height:351px; width:624px" /></p>
',
        'slug'=>Str::slug('Điện thoại di động Blackberry Key One - Black - Chính hãng','-').'.aspx',
        'created_at'=>now(),

    ]);

        DB::table('products')->insert([
            'name'=>'Điện thoại di động Blackberry KEY 2 - Chính hãng',
            'price'=>9990000,
            'old_price'=>10990000,
            'quantity'=>50,
            'cover_image'=>'https://hoanghamobile.com/i/preview/Uploads/2020/10/27/Key2%202.png',
            'rate'=>400,
            'category_id'=>15,
            'user_id'=>random_int(1,5),
            'describe'=> '<h3><strong>THIẾT KẾ NAM T&Iacute;NH, LỊCH L&Atilde;M</strong></h3>

<p>To&agrave;n bộ khung của m&aacute;y được gia c&ocirc;ng bằng kim loại v&agrave; được v&aacute;t phẳng, cạnh m&aacute;y được cắt nhẹ tạo cảm gi&aacute;c m&aacute;y phẳng v&agrave; thanh tho&aacute;t nhưng vẫn kh&ocirc;ng k&eacute;m phần chắc chắn v&agrave; nam t&iacute;nh. Mặt lưng được thiết kế &ocirc; kim cương gi&uacute;p chống trơn trượt. Thiết kế mặt lưng n&agrave;y v&ocirc; c&ugrave;ng độc đ&aacute;o v&agrave; chỉ c&oacute; ở tr&ecirc;n c&aacute;c smartphone nh&agrave; Blackberry. C&aacute;c ph&iacute;m nguồn, tiện &iacute;ch, tăng giảm &acirc;m lượng được chuyển hết sang cạnh phải. Tổng thể m&aacute;y mỏng v&agrave; nhẹ hơn so với KEYone tuy nhi&ecirc;n lại d&agrave;i hơn do b&agrave;n ph&iacute;m được thiết kế lớn hơn 20% so với phi&ecirc;n bản cũ.</p>

<p>&nbsp;</p>

<h3><strong>B&Agrave;N PH&Iacute;M VẬT L&Yacute; ĐA CHỨC NĂNG</strong></h3>

<p>Với việc tăng k&iacute;ch thước b&agrave;n ph&iacute;m, Blackberry KEY2 cho thao t&aacute;c bấm dễ d&agrave;ng hơn, đặc biệt l&agrave; đối với những người c&oacute; b&agrave;n tay to, 2 ph&iacute;m chết được bố tr&iacute; ở cuối b&agrave;n ph&iacute;m để thao t&aacute;c bấm thuận tiện hơn. B&agrave;n ph&iacute;m tr&ecirc;n KEY2 cũng được thiết kế nh&aacute;m thay v&igrave; b&oacute;ng như tr&ecirc;n KEYone, do vậy sẽ &iacute;t b&aacute;m v&acirc;n tay hơn.</p>

<p>B&agrave;n ph&iacute;m vật l&yacute; ở tr&ecirc;n một chiếc smartphone 2018 l&agrave; một n&eacute;t cổ điển lịch l&atilde;m khiến người ta nhớ đến những chiếc điện thoại cục gạch xưa cũ. Tuy nhi&ecirc;n một khi đ&atilde; đi k&egrave;m với một chiếc điện thoại th&ocirc;ng minh th&igrave; b&agrave;n ph&iacute;m cũng phải th&ocirc;ng minh. B&agrave;n ph&iacute;m cứng tr&ecirc;n chiếc KEY2 được t&iacute;ch hợp nhiều tiện &iacute;ch cho trải nghiệm nhanh ch&oacute;ng v&agrave; thuận tiện. Đầu ti&ecirc;n phải kể đến n&uacute;t Speed key. N&uacute;t n&agrave;y khi với ph&iacute;m tắt sẽ hỗ trợ đa nhiệm nhanh v&agrave; tiện hơn tr&ecirc;n KEY2. Gải sử như khi bạn chọn g&aacute;n chữ Z để mở Zalo, khi giữ ph&iacute;m Speed Key v&agrave; ph&iacute;m Z c&oacute; thể chuyển nhanh qua Zalo từ ứng dụng hiện tại lu&ocirc;n thay v&igrave; quay về m&agrave;n h&igrave;nh ch&iacute;nh hoặc bấm n&uacute;t đa nhiệm. Một tiện &iacute;ch kh&aacute;c c&oacute; thể gọi l&agrave; n&eacute;t độc đ&aacute;o chỉ ri&ecirc;ng Blackberry c&oacute; đ&oacute; l&agrave; cảm biến v&acirc;n tay được đặt ngay ở ph&iacute;m c&aacute;ch thay v&igrave; ở ph&iacute;a sau hay n&uacute;t nguồn như nhiều smartphone Android kh&aacute;c.</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
            'specifications'=> '<table>
	<tbody>
		<tr>
			<td><strong>C&ocirc;ng nghệ m&agrave;n h&igrave;nh</strong></td>
			<td>IPS LCD</td>
		</tr>
		<tr>
			<td><strong>Độ ph&acirc;n giải</strong></td>
			<td>1080 x 1620 Pixels</td>
		</tr>
		<tr>
			<td><strong>M&agrave;n h&igrave;nh rộng</strong></td>
			<td>4.5&quot;</td>
		</tr>
		<tr>
			<td><strong>Mặt k&iacute;nh cảm ứng</strong></td>
			<td>K&iacute;nh cường lực Corning Gorilla Glass 3</td>
		</tr>
		<tr>
			<th colspan="2">Camera sau</th>
		</tr>
		<tr>
			<td><strong>Độ ph&acirc;n giải</strong></td>
			<td>2 camera 12 MP</td>
		</tr>
		<tr>
			<td><strong>Quay phim</strong></td>
			<td>4K 2160p@30fps</td>
		</tr>
		<tr>
			<td><strong>T&iacute;nh năng</strong></td>
			<td>
			<ol>
				<li>Chạm lấy n&eacute;t</li>
				<li>HDR</li>
				<li>Nhận diện khu&ocirc;n mặt</li>
				<li>To&agrave;n cảnh (Panorama)</li>
				<li>Tự động lấy n&eacute;t (AF)</li>
			</ol>
			</td>
		</tr>
		<tr>
			<th colspan="2">Camera trước</th>
		</tr>
		<tr>
			<td><strong>Độ ph&acirc;n giải</strong></td>
			<td>8 MP</td>
		</tr>
		<tr>
			<th colspan="2">Hệ điều h&agrave;nh &amp; CPU</th>
		</tr>
		<tr>
			<td><strong>Tốc độ CPU</strong></td>
			<td>4 nh&acirc;n 2.2 GHz &amp; 4 nh&acirc;n 1.8 GHz</td>
		</tr>
		<tr>
			<td><strong>Chip đồ họa (GPU)</strong></td>
			<td>Adreno 512</td>
		</tr>
		<tr>
			<th colspan="2">Bộ nhớ &amp; Lưu trữ</th>
		</tr>
		<tr>
			<td><strong>RAM</strong></td>
			<td>6 GB</td>
		</tr>
		<tr>
			<td><strong>Bộ nhớ trong (ROM)</strong></td>
			<td>64 GB</td>
		</tr>
		<tr>
			<td><strong>Bộ nhớ c&ograve;n lại (khả dụng)</strong></td>
			<td>52 GB</td>
		</tr>
		<tr>
			<td><strong>Thẻ nhớ ngo&agrave;i</strong></td>
			<td>MicroSD, hỗ trợ tối đa 256 GB</td>
		</tr>
		<tr>
			<th colspan="2">Kết nối</th>
		</tr>
		<tr>
			<td><strong>Mạng di động</strong></td>
			<td>Hỗ trợ 4G</td>
		</tr>
		<tr>
			<td><strong>Số khe sim</strong></td>
			<td>2 Nano SIM</td>
		</tr>
		<tr>
			<td><strong>Wifi</strong></td>
			<td>
			<ol>
				<li>Dual-band (2.4 GHz/5 GHz)</li>
				<li>Wi-Fi 802.11 a/b/g/n/ac</li>
				<li>Wi-Fi Direct</li>
				<li>Wi-Fi hotspot</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>GPS</strong></td>
			<td>
			<ol>
				<li>A-GPS</li>
				<li>BDS</li>
				<li>GLONASS</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Bluetooth</strong></td>
			<td>
			<ol>
				<li>v4.2</li>
				<li>v5.0</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Kết nối kh&aacute;c</strong></td>
			<td>OTG</td>
		</tr>
		<tr>
			<td><strong>Cổng kết nối/sạc</strong></td>
			<td>USB Type-C</td>
		</tr>
		<tr>
			<td><strong>Jack tai nghe</strong></td>
			<td>3.5 mm</td>
		</tr>
		<tr>
			<th colspan="2">Thiết kế - trọng lượng</th>
		</tr>
		<tr>
			<td><strong>Thiết kế</strong></td>
			<td>Nguy&ecirc;n khối</td>
		</tr>
		<tr>
			<td><strong>K&iacute;ch thước</strong></td>
			<td>D&agrave;i 151.4 mm - Ngang 71.8 mm - D&agrave;y 8.5 mm</td>
		</tr>
		<tr>
			<td><strong>Trọng lượng</strong></td>
			<td>168 g</td>
		</tr>
		<tr>
			<th colspan="2">Pin &amp; Sạc</th>
		</tr>
		<tr>
			<td><strong>Dung lượng pin</strong></td>
			<td>3500 mAh</td>
		</tr>
		<tr>
			<td><strong>Loại pin</strong></td>
			<td>Li-Ion</td>
		</tr>
		<tr>
			<th colspan="2">Tiện &iacute;ch</th>
		</tr>
		<tr>
			<td><strong>Xem phim</strong></td>
			<td>
			<ol>
				<li>3GP</li>
				<li>AVI</li>
				<li>DivX</li>
				<li>H.264(MPEG4-AVC)</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Nghe nhạc</strong></td>
			<td>
			<ol>
				<li>AAC</li>
				<li>FLAC</li>
				<li>MP3</li>
				<li>OGG</li>
				<li>WAV</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Ghi &acirc;m</strong></td>
			<td>C&oacute; (microphone chuy&ecirc;n dụng chống ồn)</td>
		</tr>
		<tr>
			<td><strong>Bảo mật n&acirc;ng cao</strong></td>
			<td>Mở kh&oacute;a bằng v&acirc;n tay</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>
',
            'details'=> '<h3><strong>CẤU H&Igrave;NH MẠNH MẼ</strong></h3>

<p>KEY2 được trang bị con chip snapdragon 660 8 nh&acirc;n, con chip được xem như người anh em với snapdragon 845 do cũng được t&iacute;ch hợp bộ xử l&yacute; t&iacute;n hiệu số Hexagon 680 (DSP) để kết hợp với CPU v&agrave; GPU trong c&aacute;c t&aacute;c vụ m&aacute;y học. RAM của m&aacute;y được tăng l&ecirc;n 6GB cho khả năng đa nhiệm tuyệt vời v&agrave; đồng thời cho trải nghiệm mượt m&agrave; v&agrave; bền bỉ hơn so với KEYone do được tối ưu hiệu năng rất tốt. M&aacute;y được c&agrave;i sẵn Android 8.1 v&agrave; vẫn giữ lại một số t&iacute;nh năng đặc trưng tr&ecirc;n blackberry như BB Hub, launcher, Dtek hay locker. Vi&ecirc;n pin của m&aacute;y c&oacute; dung lượng 3500mAh, một con số kh&ocirc;ng qu&aacute; ấn tượng nhưng do hệ điều h&agrave;nh tối ưu tốt n&ecirc;n m&aacute;y c&oacute; thể sử dụng sang ng&agrave;y thứ hai mới cần phải sạc.</p>

<p>Đối với cấu h&igrave;nh n&agrave;y m&aacute;y ho&agrave;n to&agrave;n c&oacute; thể chiến c&aacute;c game nặng như Asphalt 8 hay PUBG mobile cũng như hoạt động mượt m&agrave; với nhiều ứng dụng mở c&ugrave;ng 1 l&uacute;c. Tuy nhi&ecirc;n với thiết kế m&agrave;n h&igrave;nh 4&rdquo;5 c&ugrave;ng tỉ lệ 3:2 kh&aacute; l&agrave; &ldquo;độc&rdquo; th&igrave; m&aacute;y c&oacute; lẽ sẽ kh&ocirc;ng thật sự ph&ugrave; hợp với việc chơi game. Suy cho c&ugrave;ng Blackberry vẫn nổi tiếng với những sản phẩm d&agrave;nh cho giới doanh nh&acirc;n, ch&iacute;nh v&igrave; vậy mục đ&iacute;ch sử dụng cho c&ocirc;ng việc lu&ocirc;n được ưu ti&ecirc;n đặt l&ecirc;n h&agrave;ng đầu.</p>

<p><strong>CỤM CAMERA K&Eacute;P ĐẦU TI&Ecirc;N TR&Ecirc;N SMARTPHONE BLACKBERRY</strong></p>

<p>Lần đầu ti&ecirc;n tr&ecirc;n một smartphone Blackberry ch&uacute;ng ta thấy sự xuất hiện của cụm camera k&eacute;p với độ ph&acirc;n giải 12MP, khẩu độ f/1.8 cho camera ch&iacute;nh v&agrave; f/2.6 cho camera phụ. Theo như TCL quảng b&aacute; trong buổi ra mắt sản phẩm, camera của m&aacute;y sẽ được cải tiến cho khả năng tự động c&acirc;n bằng trắng, ổn định h&igrave;nh ảnh v&agrave; lấy n&eacute;t tự động nhanh hơn. Camera trước của m&aacute;y vẫn c&oacute; độ ph&acirc;n giải l&agrave; 8MP tuy nhi&ecirc;n khẩu độ được n&acirc;ng cấp l&ecirc;n f/2.0 thay v&igrave; f/2.2 như tr&ecirc;n KEYone.</p>

<p>Nếu bạn l&agrave; một người ưa th&iacute;ch ng&ocirc;n ngữ thiết kế của Blackberry, muốn một chiếc smartphone với hệ điều h&agrave;nh mở như Android nhưng vẫn đảm bảo những y&ecirc;u cầu khắt khe nhất về bảo mật th&ocirc;ng tin th&igrave; Blackberry KEY2 ch&iacute;nh l&agrave; chiếc điện thoại d&agrave;nh cho bạn.</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
            'slug'=>Str::slug('Điện thoại di động Blackberry KEY 2 - Chính hãng','-').'.aspx',
            'created_at'=>now(),

        ]);DB::table('products')->insert([
        'name'=>'Điện thoại di động BlackBerry KEY 2 LE - Chính hãng',
        'price'=>4290000,
        'old_price'=>5990000,
        'quantity'=>50,
        'cover_image'=>'https://hoanghamobile.com/i/preview/Uploads/2020/10/27/blackberry-key2-le-1-400x460.png',
        'rate'=>400,
        'category_id'=>15,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>Thiết kế ấn tượng</h3>

<p>D&ograve;ng sản phẩm BlackBerry Key 2 LE vẫn mang một ng&ocirc;n ngữ thiết kế kh&aacute; l&agrave; tương đồng với người tiền nhiệm trước đ&oacute; l&agrave; BlackBerry Key 2. Thế nhưng, Key 2 LE vẫn mang cho m&igrave;nh những n&eacute;t ri&ecirc;ng kh&ocirc;ng hề đụng h&agrave;ng với Key 2, v&iacute; dụ như m&aacute;y sử dụng chất liệu nhựa Polycarbonate cao cấp cho phần khung m&aacute;y để gi&uacute;p hạ gi&aacute; th&agrave;nh của m&aacute;y nhưng vẫn giữ được độ bền bỉ v&agrave; cứng c&aacute;p cho m&aacute;y. Kh&ocirc;ng chỉ vậy, nhờ sử dụng chất liệu n&agrave;y, trọng lượng của m&aacute;y cũng được giảm đi đ&aacute;ng kể, c&ugrave;ng với c&aacute;c phần cạnh được thiết kế dạng bo tr&ograve;n gi&uacute;p người d&ugrave;ng c&oacute; được một trải nghiệm cầm nắm dễ chịu nhất.</p>

<p><img src="https://hoanghamobile.com/Uploads/2021/01/26/key-2-le.jpg" style="height:255.125px; width:453.556px" /></p>

<p>C&aacute;c phần ph&iacute;m như tăng giảm &acirc;m lượng, ph&iacute;m nguồn v&agrave; c&aacute;c ph&iacute;m chức năng kh&aacute;c lần lượt được sắp xếp cực k&igrave; khoa học ở b&ecirc;n phần cạnh phải của m&aacute;y. Ở b&ecirc;n cạnh tr&aacute;i m&aacute;y sẽ l&agrave; sự xuất hiện của khe đựng SIM. BlackBerry Key 2 LE cung cấp tới cho người d&ugrave;ng tới 2 SIM hoặc 1 SIM 1 thẻ nhớ để người d&ugrave;ng c&oacute; thể thoải m&aacute;i lựa chọn, ph&ugrave; hợp với nhu cầu sử dụng của bản th&acirc;n. Key 2 LE cung cấp tới cho người d&ugrave;ng 3 biến thể m&agrave;u sắc bao gồm: X&aacute;m Đen, Đỏ Nguy&ecirc;n Tử v&agrave; V&agrave;ng Champagne.</p>

<h3>M&agrave;n h&igrave;nh sắc n&eacute;t, r&otilde; r&agrave;ng</h3>

<p>BlackBerry Key 2 LE sở hữu một m&agrave;n h&igrave;nh rộng chỉ 4.5 inch theo tỉ lệ 4:3 xưa cũ, độ ph&acirc;n giải đạt mức Full HD c&ugrave;ng một tấm nền hiển thị IPS LCD chất lượng, m&aacute;y c&oacute; thể n&oacute;i vẫn thừa hưởng tất cả những điểm mạnh m&agrave; Key 2 để lại. Kết hợp với b&agrave;n ph&iacute;m QWERTY vật l&yacute; đ&atilde; qu&aacute; quen thuộc ở dưới, BlackBerry Key 2 LE ch&iacute;nh l&agrave; một phi&ecirc;n bản Key 2 gi&aacute; rẻ, cực k&igrave; ho&agrave;n hảo m&agrave; người d&ugrave;ng doanh nh&acirc;n, văn ph&ograve;ng thực sự kh&ocirc;ng thể bỏ qua.</p>

<p><img src="https://hoanghamobile.com/Uploads/2021/01/26/key-2-le-2.jpg" style="height:289px; width:462.4px" /></p>

<p>Mang tr&ecirc;n m&igrave;nh một m&agrave;n h&igrave;nh k&iacute;ch thước vừa đủ như vậy, người d&ugrave;ng vẫn ho&agrave;n to&agrave;n c&oacute; thể c&oacute; được những trải nghiệm tốt với những t&aacute;c vụ đơn giản h&agrave;ng ng&agrave;y như đọc b&aacute;o cập nhật tin tức, check mail c&ocirc;ng việc, soạn thảo văn bản,...một c&aacute;ch ho&agrave;n to&agrave;n mượt m&agrave;. Thế nhưng chắc chắn BlackBerry Key 2 LE sẽ l&agrave; một mẫu smartphone kh&ocirc;ng d&agrave;nh cho những đối tượng người d&ugrave;ng th&iacute;ch chơi game hay xem phim.&nbsp;</p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<table>
	<tbody>
		<tr>
			<td><strong>C&ocirc;ng nghệ m&agrave;n h&igrave;nh</strong></td>
			<td>IPS LCD</td>
		</tr>
		<tr>
			<td><strong>Độ ph&acirc;n giải</strong></td>
			<td>1080 x 1620 Pixels</td>
		</tr>
		<tr>
			<td><strong>M&agrave;n h&igrave;nh rộng</strong></td>
			<td>4.5&quot;</td>
		</tr>
		<tr>
			<td><strong>Mặt k&iacute;nh cảm ứng</strong></td>
			<td>K&iacute;nh cường lực Corning Gorilla Glass</td>
		</tr>
		<tr>
			<th colspan="2">Camera sau</th>
		</tr>
		<tr>
			<td><strong>Độ ph&acirc;n giải</strong></td>
			<td>Ch&iacute;nh 13 MP &amp; Phụ 5 MP</td>
		</tr>
		<tr>
			<td><strong>Quay phim</strong></td>
			<td>
			<ol>
				<li>4K 2160p@24fps</li>
				<li>4K 2160p@30fps</li>
				<li>FullHD 1080@24fps</li>
				<li>FullHD 1080p@30fps</li>
				<li>FullHD 1080p@60fps</li>
				<li>HD 720p@24fps</li>
				<li>HD 720p@30fps</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>T&iacute;nh năng</strong></td>
			<td>
			<ol>
				<li>Chạm lấy n&eacute;t</li>
				<li>HDR</li>
				<li>Nhận diện khu&ocirc;n mặt</li>
				<li>Quay chậm (Slow Motion)</li>
				<li>To&agrave;n cảnh (Panorama)</li>
				<li>Tự động lấy n&eacute;t (AF)</li>
			</ol>
			</td>
		</tr>
		<tr>
			<th colspan="2">Camera trước</th>
		</tr>
		<tr>
			<td><strong>Độ ph&acirc;n giải</strong></td>
			<td>8 MP</td>
		</tr>
		<tr>
			<th colspan="2">Hệ điều h&agrave;nh &amp; CPU</th>
		</tr>
		<tr>
			<td><strong>Tốc độ CPU</strong></td>
			<td>1.8 GHz</td>
		</tr>
		<tr>
			<td><strong>Chip đồ họa (GPU)</strong></td>
			<td>Adreno 509</td>
		</tr>
		<tr>
			<th colspan="2">Bộ nhớ &amp; Lưu trữ</th>
		</tr>
		<tr>
			<td><strong>RAM</strong></td>
			<td>4 GB</td>
		</tr>
		<tr>
			<td><strong>Bộ nhớ trong (ROM)</strong></td>
			<td>64 GB</td>
		</tr>
		<tr>
			<td><strong>Bộ nhớ c&ograve;n lại (khả dụng)</strong></td>
			<td>Khoảng 51 GB</td>
		</tr>
		<tr>
			<td><strong>Thẻ nhớ ngo&agrave;i</strong></td>
			<td>MicroSD, hỗ trợ tối đa 256 GB</td>
		</tr>
		<tr>
			<th colspan="2">Kết nối</th>
		</tr>
		<tr>
			<td><strong>Mạng di động</strong></td>
			<td>Hỗ trợ 4G</td>
		</tr>
		<tr>
			<td><strong>Số khe sim</strong></td>
			<td>2 Nano SIM (SIM 2 chung khe thẻ nhớ)</td>
		</tr>
		<tr>
			<td><strong>Wifi</strong></td>
			<td>
			<ol>
				<li>Dual-band (2.4 GHz/5 GHz)</li>
				<li>Wi-Fi 802.11 a/b/g/n/ac</li>
				<li>Wi-Fi Direct</li>
				<li>Wi-Fi hotspot</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>GPS</strong></td>
			<td>
			<ol>
				<li>A-GPS</li>
				<li>BDS</li>
				<li>GLONASS</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Bluetooth</strong></td>
			<td>
			<ol>
				<li>A2DP</li>
				<li>apt-X</li>
				<li>LE</li>
				<li>v5.0</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Kết nối kh&aacute;c</strong></td>
			<td>NFC</td>
		</tr>
		<tr>
			<td><strong>Cổng kết nối/sạc</strong></td>
			<td>USB Type-C</td>
		</tr>
		<tr>
			<td><strong>Jack tai nghe</strong></td>
			<td>3.5 mm</td>
		</tr>
		<tr>
			<th colspan="2">Thiết kế - trọng lượng</th>
		</tr>
		<tr>
			<td><strong>Thiết kế</strong></td>
			<td>Nguy&ecirc;n khối</td>
		</tr>
		<tr>
			<td><strong>K&iacute;ch thước</strong></td>
			<td>D&agrave;i 150.3 mm - Ngang 71.8 mm - D&agrave;y 8.4 mm</td>
		</tr>
		<tr>
			<td><strong>Trọng lượng</strong></td>
			<td>156 g</td>
		</tr>
		<tr>
			<th colspan="2">Pin &amp; Sạc</th>
		</tr>
		<tr>
			<td><strong>Dung lượng pin</strong></td>
			<td>3000 mAh</td>
		</tr>
		<tr>
			<td><strong>Loại pin</strong></td>
			<td>Li-Ion</td>
		</tr>
		<tr>
			<th colspan="2">Tiện &iacute;ch</th>
		</tr>
		<tr>
			<td><strong>Xem phim</strong></td>
			<td>
			<ol>
				<li>3GP</li>
				<li>AVI</li>
				<li>DivX</li>
				<li>H.264(MPEG4-AVC)</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Nghe nhạc</strong></td>
			<td>
			<ol>
				<li>AAC</li>
				<li>FLAC</li>
				<li>MP3</li>
				<li>OGG</li>
				<li>WAV</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Ghi &acirc;m</strong></td>
			<td>C&oacute; (microphone chuy&ecirc;n dụng chống ồn)</td>
		</tr>
		<tr>
			<td><strong>T&iacute;nh năng đặc biệt</strong></td>
			<td>
			<ol>
				<li>Chạm 2 lần tắt/s&aacute;ng m&agrave;n h&igrave;nh</li>
				<li>Đ&egrave;n pin</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Bảo mật n&acirc;ng cao</strong></td>
			<td>
			<ol>
				<li>Mở kh&oacute;a bằng v&acirc;n tay</li>
				<li>Mở kho&aacute; khu&ocirc;n mặt</li>
			</ol>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>
',
        'details'=> '<h3>Cấu h&igrave;nh mạnh mẽ với Snapdragon 636</h3>

<p>Ở thời điểm hiện tại, Snapdragon 636 c&oacute; lẽ đ&atilde; kh&ocirc;ng c&ograve;n l&agrave; một bộ vi xử l&yacute; qu&aacute; khủng thế nhưng chắc chắn n&oacute; vẫn ho&agrave;n to&agrave;n đ&aacute;p ứng được tất tần tật c&aacute;c t&aacute;c vụ văn ph&ograve;ng v&agrave; cơ bản. Đi c&ugrave;ng với thanh RAM 4GB c&ugrave;ng bộ nhớ trong 64GB sẽ gi&uacute;p cho người d&ugrave;ng c&oacute; được những thao t&aacute;c v&ocirc; c&ugrave;ng mượt m&agrave;, lưu trữ thoải m&aacute;i m&agrave; kh&ocirc;ng phải lo nghĩ tới vấn đề bị hết dung lượng lưu trữ. M&aacute;y được c&agrave;i đặt sẵn hệ điều h&agrave;nh Android 8.1 Oreo ngay khi xuất xưởng.</p>

<p><img src="https://hoanghamobile.com/Uploads/2021/01/26/key-2-le-3.jpg" style="height:311px; width:466.792px" /></p>

<p>&nbsp;</p>

<p>Tất nhi&ecirc;n,&nbsp;BlackBerry KEY2 LE đ&atilde; được đưa v&agrave;o danh s&aacute;ch những smartphone sẽ được cập nhật l&ecirc;n Android 9.0 Pie trong thời gian tới. Một số phần mềm bảo mật cũng được t&iacute;ch hợp sẵn tr&ecirc;n d&ograve;ng m&aacute;y n&agrave;y như&nbsp;DTEK v&agrave; Lockr.&nbsp;Cung cấp năng lượng cho BlackBerry Key 2 LE l&agrave; vi&ecirc;n pin dung lượng 3.000mAh, cho ph&eacute;p người d&ugrave;ng c&oacute; thể sử dụng trong một ng&agrave;y l&agrave;m việc d&agrave;i hơi chỉ với một lần sạc. H&atilde;ng đ&atilde; c&ocirc;ng bố Key 2 LE c&oacute; thể sử dụng li&ecirc;n tục l&ecirc;n tới 22 tiếng đồng hồ. Đi c&ugrave;ng với đ&oacute; l&agrave; c&ocirc;ng nghệ sạc nhanh Quick Charge 3.0 cho ph&eacute;p BlackBerry Key 2 LE sạc từ 0 l&ecirc;n 50% chỉ trong v&ograve;ng 35 ph&uacute;t.&nbsp;</p>

<h3>Khả năng nhiếp ảnh tốt</h3>

<p>M&aacute;y được trang bị camera k&eacute;p ở mặt sau với độ ph&acirc;n giải lần lượt l&agrave; 13MP camera ch&iacute;nh, khẩu độ f/2.2 v&agrave; camera phụ hỗ trợ chụp ảnh x&oacute;a ph&ocirc;ng 5MP khẩu độ f/2.4. Key 2 LE cũng được trang bị chế độ chụp ảnh HDR, chụp to&agrave;n cảnh Panorama v&agrave; quay video ở độ ph&acirc;n giải 4K@30fps. Phần đ&egrave;n Flash LED trợ s&aacute;ng cũng được trang bị đ&egrave;n 2 tone m&agrave;u hỗ trợ chụp ảnh trong điều kiện thiếu s&aacute;ng. Camera selfie ở ph&iacute;a trước của m&aacute;y c&oacute; độ ph&acirc;n giải 8MP c&ugrave;ng khả năng quay video độ ph&acirc;n giải Full HD 1080p@30fps.</p>

<p><img src="https://hoanghamobile.com/Uploads/2021/01/26/key-2-le-4.jpg" style="height:306px; width:459.287px" /></p>

<p>Chất lượng ảnh cho ra từ BlackBerry Key 2 LE c&oacute; chất lượng ảnh kh&aacute; tốt, đặc biệt l&agrave; c&aacute;c chi tiết trong ảnh được t&aacute;i tạo lại rất ấn tượng, độ tương phản v&agrave; b&atilde;o h&ograve;a ảnh ổn, kh&ocirc;ng bị qu&aacute; gắt hoặc qu&aacute; bệt khi chụp trong điều kiện đủ s&aacute;ng.&nbsp;</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Điện thoại di động BlackBerry KEY 2 LE - Chính hãng','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'Điện thoại di động Blackberry Key One - Silver - Chính hãng',
        'price'=>3990000,
        'old_price'=>4590000,
        'quantity'=>50,
        'cover_image'=>'https://hoanghamobile.com/i/preview/Uploads/2020/11/03/silver_637399930572545507.png',
        'rate'=>400,
        'category_id'=>15,
        'user_id'=>random_int(1,5),
        'describe'=> '<h3>Thiết kế độc đ&aacute;o kh&ocirc;ng &ldquo;đụng h&agrave;ng&rdquo;</h3>

<p>&nbsp;</p>

<p>Những mẫu điện thoại tới từ BlackBerry lu&ocirc;n c&oacute; được những thiết kế độc đ&aacute;o, mang ngoại h&igrave;nh kh&aacute;c hẳn với những mẫu smartphone hiện đang c&oacute; tr&ecirc;n thị trường v&agrave; BlackBerry Key One cũng kh&ocirc;ng phải l&agrave; một ngoại lệ. Người d&ugrave;ng khi lựa chọn Key One l&agrave; đ&atilde; x&aacute;c định trước sẽ gắn b&oacute; l&acirc;u d&agrave;i với một chiếc smartphone Android c&oacute; t&iacute;ch hợp b&agrave;n ph&iacute;m QWERTY vật l&yacute; huyền thoại một thời. Phần mặt trước nổi trội bởi b&agrave;n ph&iacute;m QWERTY th&igrave; mặt sau của m&aacute;y cũng khiến người d&ugrave;ng phải xi&ecirc;u l&ograve;ng. Mặt lưng của m&aacute;y được ho&agrave;n thiện bằng v&acirc;n cao su nổi, đi ngược lại ho&agrave;n to&agrave;n so với tất cả c&aacute;c h&atilde;ng smartphone hiện nay, khi số đ&ocirc;ng c&aacute;c mẫu điện thoại th&ocirc;ng minh ng&agrave;y nay đều được l&agrave;m kh&ocirc;ng bằng nhựa th&igrave; l&agrave; kim loại hoặc k&iacute;nh.&nbsp;</p>

<p><img src="https://hoanghamobile.com/Uploads/2021/01/26/key-one-1.jpg" style="height:301.125px; width:451.97px" /></p>

<p>&nbsp;</p>

<p>BlackBerry Key One mang lại cho người d&ugrave;ng một cảm gi&aacute;c cầm nắm kh&aacute; chắc tay với khung viền kim loại chắc chắn, bền b&igrave;, đặc biệt c&ograve;n được bo tr&ograve;n uốn cong sang 2 b&ecirc;n cạnh, gi&uacute;p cho mọi thao t&aacute;c sử dụng của người d&ugrave;ng kh&ocirc;ng hề bị cấn. Ngo&agrave;i ra, BlackBerry đ&atilde; rất tinh tế khi cho bo cong cả phần cạnh dưới, gi&uacute;p người d&ugrave;ng c&oacute; thể thoải m&aacute;i hơn khi phải nhập liệu trong thời gian d&agrave;i. Tuy l&agrave; một mẫu điện thoại mang nhiều hơi hướng ho&agrave;i cổ, thế nhưng BlackBerry cũng kh&ocirc;ng qu&ecirc;n t&iacute;ch hợp v&agrave;o Key One những c&ocirc;ng nghệ bảo mật mới. Phần cảm biến v&acirc;n tay một chạm tr&ecirc;n Key One hoạt động kh&aacute; ổn định, nhanh v&agrave; nhạy, kể cả khi tay người d&ugrave;ng c&oacute; d&iacute;nh nước hoặc bụi nhẹ th&igrave; cảm biến vẫn phản ứng b&igrave;nh thường.&nbsp;</p>

<h3>Khả năng nhiếp ảnh tốt d&ugrave; chỉ c&oacute; 1 camera</h3>

<p>&nbsp;</p>

<p>Đi ngược lại xu hướng của c&aacute;c mẫu smartphone hiện tại l&agrave; c&agrave;ng c&oacute; nhiều camera c&agrave;ng tốt th&igrave; BlackBerry Key One chỉ sở hữu duy nhất 1 camera mặt sau độ ph&acirc;n giải 12MP, khẩu độ mở f/2.0. Tuy chỉ sở hữu 1 cảm biến camera duy nhất ở mặt sau thế nhưng ảnh cho ra từ Key One cho ra chất lượng hiển thị rất ổn, kh&ocirc;ng thua k&eacute;m qu&aacute; nhiều so với c&aacute;c mẫu điện thoại tầm trung hiện nay. Tốc độ chụp v&agrave; lưu ảnh ở mức vừa ổn, chỉ c&oacute; một v&agrave;i nhược điểm nhỏ l&agrave; khi chụp bằng chế độ HDR, m&aacute;y vẫn c&ograve;n một ch&uacute;t lag nhẹ.</p>

<p><img src="https://hoanghamobile.com/Uploads/2021/01/26/kay-one-2.jpg" style="height:255px; width:453.333px" /></p>

<p>Như đ&atilde; n&oacute;i ở tr&ecirc;n, chất lượng ảnh cho ra từ BlackBerry Key One c&oacute; chất lượng ảnh kh&aacute; tốt, đặc biệt l&agrave; c&aacute;c chi tiết trong ảnh được t&aacute;i tạo lại rất ấn tượng, độ tương phản v&agrave; b&atilde;o h&ograve;a ảnh ổn, kh&ocirc;ng bị qu&aacute; gắt hoặc qu&aacute; bệt khi chụp trong điều kiện đủ s&aacute;ng. Về ph&iacute;a camera selfie ph&iacute;a trước c&oacute; k&iacute;ch thước ống k&iacute;nh kh&aacute; lớn, c&oacute; độ ph&acirc;n giải 8MP, cung cấp khả năng chụp đ&ecirc;m kh&aacute; tốt.</p>

<p>&nbsp;</p>

<h3>&nbsp;</h3>

<p>&nbsp;</p>
',
        'specifications'=> '<table>
	<tbody>
		<tr>
			<td><strong>C&ocirc;ng nghệ m&agrave;n h&igrave;nh</strong></td>
			<td>IPS LCD</td>
		</tr>
		<tr>
			<td><strong>Độ ph&acirc;n giải</strong></td>
			<td>1080 x 1620 Pixels</td>
		</tr>
		<tr>
			<td><strong>M&agrave;n h&igrave;nh rộng</strong></td>
			<td>4.5&quot;</td>
		</tr>
		<tr>
			<td><strong>Mặt k&iacute;nh cảm ứng</strong></td>
			<td>K&iacute;nh cường lực Corning Gorilla Glass 4</td>
		</tr>
		<tr>
			<th colspan="2">Camera sau</th>
		</tr>
		<tr>
			<td><strong>Độ ph&acirc;n giải</strong></td>
			<td>12 MP</td>
		</tr>
		<tr>
			<td><strong>Quay phim</strong></td>
			<td>
			<ol>
				<li>4K 2160p@24fps</li>
				<li>4K 2160p@30fps</li>
				<li>FullHD 1080@24fps</li>
				<li>FullHD 1080p@30fps</li>
				<li>FullHD 1080p@60fps</li>
				<li>HD 720p@24fps</li>
				<li>HD 720p@30fps</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>T&iacute;nh năng</strong></td>
			<td>
			<ol>
				<li>Chạm lấy n&eacute;t</li>
				<li>HDR</li>
				<li>Lấy n&eacute;t theo pha (PDAF)</li>
				<li>Nhận diện khu&ocirc;n mặt</li>
				<li>Quay chậm (Slow Motion)</li>
				<li>To&agrave;n cảnh (Panorama)</li>
				<li>Tự động lấy n&eacute;t (AF)</li>
			</ol>
			</td>
		</tr>
		<tr>
			<th colspan="2">Camera trước</th>
		</tr>
		<tr>
			<td><strong>Độ ph&acirc;n giải</strong></td>
			<td>8 MP</td>
		</tr>
		<tr>
			<th colspan="2">Hệ điều h&agrave;nh &amp; CPU</th>
		</tr>
		<tr>
			<td><strong>Tốc độ CPU</strong></td>
			<td>2.0 GHz</td>
		</tr>
		<tr>
			<td><strong>Chip đồ họa (GPU)</strong></td>
			<td>Adreno 506</td>
		</tr>
		<tr>
			<th colspan="2">Bộ nhớ &amp; Lưu trữ</th>
		</tr>
		<tr>
			<td><strong>RAM</strong></td>
			<td>3 GB</td>
		</tr>
		<tr>
			<td><strong>Bộ nhớ trong (ROM)</strong></td>
			<td>32 GB</td>
		</tr>
		<tr>
			<td><strong>Bộ nhớ c&ograve;n lại (khả dụng)</strong></td>
			<td>Khoảng 20 GB</td>
		</tr>
		<tr>
			<td><strong>Thẻ nhớ ngo&agrave;i</strong></td>
			<td>MicroSD, hỗ trợ tối đa 256 GB</td>
		</tr>
		<tr>
			<th colspan="2">Kết nối</th>
		</tr>
		<tr>
			<td><strong>Mạng di động</strong></td>
			<td>Hỗ trợ 4G</td>
		</tr>
		<tr>
			<td><strong>Số khe sim</strong></td>
			<td>1 Nano SIM</td>
		</tr>
		<tr>
			<td><strong>Wifi</strong></td>
			<td>
			<ol>
				<li>Wi-Fi 802.11 a/b/g/n/ac</li>
				<li>Wi-Fi Direct</li>
				<li>Wi-Fi hotspot</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>GPS</strong></td>
			<td>
			<ol>
				<li>A-GPS</li>
				<li>BDS</li>
				<li>GLONASS</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Bluetooth</strong></td>
			<td>
			<ol>
				<li>A2DP</li>
				<li>LE</li>
				<li>v4.2</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Kết nối kh&aacute;c</strong></td>
			<td>NFC</td>
		</tr>
		<tr>
			<td><strong>Cổng kết nối/sạc</strong></td>
			<td>USB Type-C</td>
		</tr>
		<tr>
			<td><strong>Jack tai nghe</strong></td>
			<td>3.5 mm</td>
		</tr>
		<tr>
			<th colspan="2">Thiết kế - trọng lượng</th>
		</tr>
		<tr>
			<td><strong>Thiết kế</strong></td>
			<td>Nguy&ecirc;n khối</td>
		</tr>
		<tr>
			<td><strong>K&iacute;ch thước</strong></td>
			<td>D&agrave;i 149.3 mm - Ngang 72.5 mm - D&agrave;y 9.4 mm</td>
		</tr>
		<tr>
			<td><strong>Trọng lượng</strong></td>
			<td>180 g</td>
		</tr>
		<tr>
			<th colspan="2">Pin &amp; Sạc</th>
		</tr>
		<tr>
			<td><strong>Dung lượng pin</strong></td>
			<td>3505 mAh</td>
		</tr>
		<tr>
			<td><strong>Loại pin</strong></td>
			<td>Li-Po</td>
		</tr>
		<tr>
			<th colspan="2">Tiện &iacute;ch</th>
		</tr>
		<tr>
			<td><strong>Xem phim</strong></td>
			<td>
			<ol>
				<li>3GP</li>
				<li>AVI</li>
				<li>DivX</li>
				<li>H.264(MPEG4-AVC)</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Nghe nhạc</strong></td>
			<td>
			<ol>
				<li>AAC</li>
				<li>FLAC</li>
				<li>MP3</li>
				<li>OGG</li>
				<li>WAV</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Ghi &acirc;m</strong></td>
			<td>Kh&ocirc;ng</td>
		</tr>
		<tr>
			<td><strong>T&iacute;nh năng đặc biệt</strong></td>
			<td>
			<ol>
				<li>Chạm 2 lần tắt/s&aacute;ng m&agrave;n h&igrave;nh</li>
				<li>Đ&egrave;n pin</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td><strong>Bảo mật n&acirc;ng cao</strong></td>
			<td>
			<ol>
				<li>Mở kh&oacute;a bằng v&acirc;n tay</li>
				<li>Mở kho&aacute; khu&ocirc;n mặt</li>
			</ol>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>
',
        'details'=> '<h3>Hiệu năng kh&ocirc;ng d&agrave;nh cho chơi game</h3>

<p>&nbsp;</p>

<p>Phải nhắc lại r&otilde; r&agrave;ng một điều rằng, BlackBerry Key One sinh ra kh&ocirc;ng phải l&agrave; để d&agrave;nh cho c&aacute;c t&aacute;c vụ như chơi game hoặc xem phim. BlackBerry Key One sở hữu một tỉ lệ m&agrave;n h&igrave;nh c&oacute; thể n&oacute;i l&agrave; đi ngược lại so với tr&agrave;o lưu hiện nay, khi c&aacute;c mẫu smartphone kh&aacute;c đều c&oacute; tỉ lệ l&agrave; 18.5:9, 19:9 hoặc 20:9 tr&agrave;n viền th&igrave; m&aacute;y lại c&oacute; m&agrave;n h&igrave;nh tỉ lệ c&oacute; phần ho&agrave;i cổ v&agrave; dị - 4:3.</p>

<p><img src="https://hoanghamobile.com/Uploads/2021/01/26/kay-one-3.jpg" style="height:259px; width:460.444px" /></p>

<p>&nbsp;</p>

<p>Cung cấp khả năng xử l&yacute; cho BlackBerry Key One l&agrave; bộ vi xử l&yacute; Snapdragon 625 c&ugrave;ng thanh RAM 3GB, bộ nhớ trong 32GB. R&otilde; r&agrave;ng l&agrave; với bộ cấu h&igrave;nh n&agrave;y, BlackBerry Key One kh&ocirc;ng phải l&agrave; chiếc điện thoại cho c&aacute;c game thủ hay những người d&ugrave;ng hay chơi game. Đối tượng người d&ugrave;ng ch&iacute;nh m&agrave; Key One nhắm tới l&agrave; những kh&aacute;ch h&agrave;ng doanh nh&acirc;n, l&agrave;m văn ph&ograve;ng cần những thao t&aacute;c nhập liệu nhanh v&agrave; ch&iacute;nh x&aacute;c. Key One được BlackBerry trang bị vi&ecirc;n pin dung lượng 3.505mAh kh&aacute; hợp l&yacute; với cấu h&igrave;nh phần cứng của m&aacute;y. Tr&ecirc;n thực tế, Key One cung cấp cho người d&ugrave;ng 6h30 onscreen li&ecirc;n tục v&agrave; thoải m&aacute;i đ&aacute;p ứng nhu cầu một ng&agrave;y d&agrave;i l&agrave;m việc.&nbsp;</p>

<h3>BlackBerry Key One sở hữu nhiều ưu điểm hơn nhược điểm</h3>

<p>&nbsp;</p>

<p>Key One sở hữu rất nhiều ưu điểm hơn l&agrave; nhiều nhược điểm theo như nhiều &yacute; kiến của người d&ugrave;ng. Key One tuy chỉ c&oacute; 1 camera đơn ph&iacute;a sau nhưng chất lượng ảnh cho ra lại cực k&igrave; chất lượng, hiệu năng với Snapdragon 625 l&agrave; ổn với c&aacute;c t&aacute;c vụ văn ph&ograve;ng thường ng&agrave;y, m&agrave;n h&igrave;nh hiển thị r&otilde; d&ugrave; ở ngo&agrave;i trời nắng gắt, loa thoại r&otilde; r&agrave;ng c&ugrave;ng vi&ecirc;n pin bền bỉ. Đ&oacute; l&agrave; c&ograve;n chưa kể với b&agrave;n ph&iacute;m QWERTY m&agrave; người d&ugrave;ng một khi đ&atilde; sử dụng quen th&igrave; sẽ kh&ocirc;ng thể dứt ra được, hỗ trợ c&ocirc;ng việc mạnh mẽ với BlackBerry Hub v&agrave; Hotkey.</p>

<p><img src="https://hoanghamobile.com/Uploads/2021/01/26/kay-one-4.jpg" style="height:266px; width:472.889px" /></p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('Điện thoại di động Blackberry Key One - Silver - Chính hãng','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'BlackBerry Porsche Design P9983 Gold',
        'price'=>29990000,
        'old_price'=>30990000,
        'quantity'=>50,
        'cover_image'=>'https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-poscher-design-gold-p9983.jpg',
        'rate'=>400,
        'category_id'=>15,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>BlackBerry Porsche Design P&#39;9983 Graphite Gold quá sang trọng và cao c&acirc;́p</h2>

<ul>
	<li><strong>Phi&ecirc;n bản BlackBerry mạ vàng cao c&acirc;́p</strong></li>
</ul>

<p>Đ&acirc;y l&agrave; phi&ecirc;n bản hạn chế (số lượng giới hạn) được mạ bằng v&agrave;ng 24k, mang đến sự sang trọng đẳng cấp cho người sử dụng. Chi&ecirc;́c đi&ecirc;̣n thoại này được mạ vàng và b&aacute;n với gi&aacute; rất cao tại ch&iacute;nh thời điểm ra mắt.</p>

<ul>
	<li><strong>Đánh giá th&ocirc;ng s&ocirc;́ v&ecirc;̀ c&acirc;́u hình</strong></li>
</ul>

<p>H&atilde;y c&ugrave;ng điểm qua một v&agrave;i th&ocirc;ng số về cấu h&igrave;nh của&nbsp;<a href="https://thegioiblackberry.com.vn/blackberry-porsche-design-p9983-graphite-gold-1099.html">BlackBerry Porsche Design P&#39;9983 Graphite Gold</a>&nbsp;nhé.</p>

<blockquote>+ M&agrave;n h&igrave;nh cảm ứng 3,1 inch độ ph&acirc;n giải 720 x 720 pixel. + Camera sau 8 MP, camera trước 2 MP. + RAM 2GB. + Vi xử l&yacute; Qualcomm Snapdragon S4 Plus 2 nh&acirc;n, tốc độ 1,5 GHz v&agrave; GPU Adreno 225. + Dung lượng lưu trữ 64 GB (hỗ trợ thẻ nhớ mở rộng). + Pin 2.100 mAh. + Hỗ trợ mạng 4G LTE, Wi-Fi (802.11n) băng tần k&eacute;p, FM, Bluetooth 4.0, GPS v&agrave; NFC. + Sử dụng nền tảng BlackBerry 10 (được c&agrave;i sẵn phi&ecirc;n bản 10.3.0).</blockquote>

<ul>
	<li><strong>Đánh giá v&ecirc;̀ thi&ecirc;́t k&ecirc;́</strong></li>
</ul>

<p><img alt="blackberry-porsche-ma-vang" src="https://sudospaces.com/thegioiblackberry-com-vn/2019/06/blackberry-porsche-ma-vang.jpg" /></p>

<p>blackberry-porsche-ma-vang</p>

<p>P&#39;9983 Graphite Gold sử dụng những đường n&eacute;t g&oacute;c cạnh đem lại cảm gi&aacute;c cứng c&aacute;p v&agrave; mạnh mẽ cho sản phẩm. Đồng thời sự kết hợp ho&agrave;n hảo giữa phần khung kim loại m&agrave;i xước với những chi tiết được mạ vàng cho thấy sự ho&agrave;n hảo trong thiết kế. Mặt trước là bàn phím qwerty.&nbsp;</p>

<p>Mặt sau của&nbsp;<a href="https://thegioiblackberry.com.vn/blackberry-porsche-design-p9983-graphite.html">BlackBerry Porsche Design P&#39;9983 Graphite</a>&nbsp;Gold l&agrave;m bằng da sang trọng, người dùng có th&ecirc;̉ kh&ocirc;ng nhìn th&acirc;́y sự bóng nhoáng, bắt mắt như những m&acirc;̃u đi&ecirc;̣n thoại khác nhưng bù vào đó thì khả năng bám chặt tr&ecirc;n tay, thỏa thích vui đùa mọi hoạt đ&ocirc;̣ng ngoài trời mà kh&ocirc;ng lo bị tu&ocirc;̣t rơi vỡ. Ngoài ra còn m&ocirc;̣t s&ocirc;́ đi&ecirc;̉m nh&acirc;́n đáng chú ý đó chính là&nbsp;logo BlackBerry được đặt ch&iacute;nh giữa nắp lưng, camera v&agrave; đ&egrave;n flash tr&ecirc;n tấm kim loại vàng d&agrave;i với d&ograve;ng chữ P&#39;9983 khắc tr&ecirc;n đó.</p>

<p>Cạnh dưới của Design P&#39;9983 Graphite Gold&nbsp;c&oacute; Microphone ch&iacute;nh với chức năng thu &acirc;m khi đ&agrave;m thoại, b&ecirc;n cạnh l&agrave; phần loa ngo&agrave;i của thiết bị, đ&acirc;y cũng ch&iacute;nh l&agrave; chỗ để ta c&oacute; thể mở phần nắp lưng của chiếc điện thoại để thay pin, thay sim...</p>

<p><img alt="blackberry-porsche-design-p9983-cu-ma-vang" src="https://sudospaces.com/thegioiblackberry-com-vn/2019/06/blackberry-porsche-design-p9983-cu-ma-vang.jpg" /></p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<p>Th&ocirc;ng số kỹ thuật BlackBerry Porsche Design P9983 Gold</p>

<p><img alt="BlackBerry Porsche Design P9983 Gold" src="https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-poscher-design-gold-p9983-x300.jpg" /></p>

<ul>
	<li>Th&ocirc;ng tin chung</li>
	<li>Hệ điều h&agrave;nh
	<p>BlackBerry 10 Os</p>
	</li>
	<li>Ng&ocirc;n ngữ
	<p>Tiếng Việt</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>M&agrave;u m&agrave;n h&igrave;nh
	<p>16M colors</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p>720 x 720 pixels</p>
	</li>
	<li>M&agrave;n h&igrave;nh rộng(&quot;)
	<p>3.1 inches</p>
	</li>
	<li>C&ocirc;ng nghệ cảm ứng
	<p>Cảm ứng điện dung</p>
	</li>
	<li>Chụp h&igrave;nh &amp; Quay phim</li>
	<li>Camera sau
	<p>8 MP, autofocus, LED flash</p>
	</li>
	<li>Camera trước
	<p>2 MP, 720p@30fps</p>
	</li>
	<li>T&iacute;nh năng camera
	<p>Geo-tagging, touch focus, face detection, HDR, panorama</p>
	</li>
	<li>Quay phim
	<p>1080p@30fps</p>
	</li>
	<li>CPU &amp; RAM</li>
	<li>Tốc độ CPU
	<p>1.5 GHz Krait</p>
	</li>
	<li>Số nh&acirc;n
	<p>Dual-core</p>
	</li>
	<li>Chipset
	<p>Qualcomm MSM8960T Snapdragon S4 Pro</p>
	</li>
	<li>RAM
	<p>2 GB RAM</p>
	</li>
	<li>Bộ nhớ &amp; Lưu trữ</li>
	<li>Bộ nhớ trong(ROM)
	<p>64 GB</p>
	</li>
	<li>Thẻ nhớ ngo&agrave;i
	<p>microSD,</p>
	</li>
	<li>Hỗ trợ thẻ tối đa
	<p>up to 256 GB</p>
	</li>
	<li>Thiết kế &amp; Trọng lượng</li>
	<li>K&iacute;ch thước
	<p>119 x 67.1 x 10.6 mm</p>
	</li>
	<li>Trọng lượng(g)
	<p>140 g</p>
	</li>
	<li>Th&ocirc;ng tin pin</li>
	<li>Dung lượng
	<p>2100 mAh</p>
	</li>
	<li>Kết nối &amp; Cổng giao tiếp</li>
	<li>3G
	<p>GSM / HSPA / LTE</p>
	</li>
	<li>Loại sim
	<p>Micro-SIM</p>
	</li>
	<li>Wifi
	<p>Wi-Fi 802.11 a/b/g/n</p>
	</li>
	<li>Giải tr&iacute; &amp; Ứng dụng</li>
	<li>Cổng sạc
	<p>microUSB 2.0</p>
	</li>
</ul>

<p>&nbsp;</p>
',
        'details'=> '<h2>Cảm giác khi người dùng sử dụng&nbsp;BlackBerry Porsche Design P&#39;9983 Graphite Gold</h2>

<p>Cảm gi&aacute;c sử dụng si&ecirc;u ph&acirc;̉m này là kh&aacute; thoải m&aacute;i v&agrave; chắc chắn bởi nó được ho&agrave;n thiện rất tốt về phần cứng. B&agrave;n ph&igrave;m qwerty sử dụng vật liệu mới lạ đem lại cảm gi&aacute;c ấn kh&aacute; nẩy v&agrave; &ecirc;m tay. Về phần mềm tương tự như c&aacute;c thiết bị chạy BB10, Porsche Design P&#39;9983 được tối ưu h&oacute;a c&aacute;c tương t&aacute;c vuốt tr&ecirc;n m&agrave;n h&igrave;nh cảm ứng. Nhất l&agrave; với phi&ecirc;n bản BlackBerry 10.3 người d&ugrave;ng đ&atilde; c&oacute; thể gọi thanh c&agrave;i đặt nhanh từ bất kỳ đ&acirc;u bằng c&aacute;ch vuốt 2 ng&oacute;n tay từ phần m&eacute;p tr&ecirc;n của m&agrave;n h&igrave;nh.</p>

<p>Hiện tại sản phẩm Blackberry Porsche Design P&#39;9983 Graphite Gold đang c&oacute; mặt tại tất cả showroom của Thế Giới BlackBerry tr&ecirc;n c&aacute;c tỉnh th&agrave;nh. H&atilde;y nhanh ch&acirc;n sở hữu cho m&igrave;nh 1 chiếc điện thoại tốt về hiệu năng cũng như sang trọng về đẳng cấp.</p>

<p>&nbsp;</p>
',
        'slug'=>Str::slug('BlackBerry Porsche Design P’9981 (Nobox-Likenew 99%)','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'BlackBerry Porsche Design P9983 Carbon',
        'price'=>13990000,
        'old_price'=>14990000,
        'quantity'=>50,
        'cover_image'=>'https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-porsche-design-p9988-sp-1-2.jpg',
        'rate'=>400,
        'category_id'=>15,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Thiết kế của BlackBerry Porsche Design P9983</h2>

<p>Sở hữu một thiết kế kh&aacute; quen thuộc đối với c&aacute;c bạn sử dụng BlackBerry hiện nay, tuy nhi&ecirc;n c&aacute;c g&oacute;c được l&agrave;m rất vu&ocirc;ng v&agrave; n&eacute;t, đặc biệt l&agrave; viền kim loại chống xước, chống gỉ. Hai g&oacute;c tr&ecirc;n được l&agrave;m vu&ocirc;ng kh&aacute; nhỏ, c&ograve;n ở 2 g&oacute;c dưới vẫn l&agrave; 2 đường v&aacute;t nhẹ nổi bật tr&ecirc;n c&aacute;c d&ograve;ng Porsche Design. Logo nh&agrave; thiết kế in tr&ecirc;n miếng kim loại, găn ph&iacute;a tr&ecirc;n m&agrave;n h&igrave;nh. C&ograve;n Logo của h&atilde;ng được in ở ph&iacute;a dưới b&agrave;n ph&iacute;m.</p>

<p><img alt="Mặt lưng blackberry porche design p9983" src="https://sudospaces.com/thegioiblackberry-com-vn/2019/06/mat-lung-blackberry-porche-design-p9983.jpg" /></p>

<p><em>Mặt lưng của chiếc blackberry p9983 được l&agrave;m bằng carbon</em></p>

<p>K&iacute;ch thước m&aacute;y l&agrave;&nbsp;<strong>119mm x 67mm x 6.7mm</strong>&nbsp;kh&ocirc;ng qu&aacute; to như c&aacute;c d&ograve;ng Smartphone hiện nay nhưng độ d&agrave;y gi&uacute;p cầm kh&aacute; chắc chắn, v&agrave; c&oacute; thể dễ d&agrave;ng di chuyển, cầm nắm. B&agrave;n phim&nbsp;<strong>Qwerty</strong>&nbsp;được BlackBerry&nbsp;l&agrave;m từ chất liệu da mềm, c&aacute;c n&uacute;t bấm lồi 1 ch&uacute;t ở ph&iacute;a tr&ecirc;n tạo cảm gi&aacute;c bấm dễ d&agrave;ng hơn nhiều so với c&aacute;c phi&ecirc;n bản&nbsp;<strong>Classs</strong>,&nbsp;<strong>Q10</strong>, hay c&aacute;c d&ograve;ng&nbsp;<strong>Bold</strong>. Bốn d&ograve;ng ph&iacute;m được thiết kế ho&agrave;n to&agrave;n theo đường thẳng tạo thiết kế mạnh mẽ.</p>

<p><img alt="Kích thước blackberry porche design p9983" src="https://sudospaces.com/thegioiblackberry-com-vn/2019/06/kich-thuoc-blackberry-porche-design-p9983-kha-lon.jpg" /></p>

<p><em>Blackberry p9983 c&oacute; kh&iacute;ch thước kh&ocirc;ng qu&aacute; lớn</em></p>

<h3>M&agrave;n h&igrave;nh của&nbsp;BlackBerry Porsche P9983</h3>

<p>Với thiết kế cổ điển, th&igrave; m&agrave;n h&igrave;nh của P9983 kh&ocirc;ng qu&aacute; lơn như phi&ecirc;n bản đ&agrave;n anh trước đ&oacute;, m&agrave;n h&igrave;nh&nbsp;<a href="https://thegioiblackberry.com.vn/blackberry-porsche-design-p9983-graphite.html" target="_blank">BlackBerry Porsche Design P9983</a>&nbsp;rộng 3.1 inchs, độ ph&acirc;n giải&nbsp;<strong>720x720 px</strong>, mật độ điểm ảnh l&agrave;&nbsp;<strong>330 PPI</strong>. Cảm ứng đa điểm với c&ocirc;ng nghệ mới cho ph&eacute;p xử l&iacute; cực k&igrave; nhạy b&eacute;n tr&ecirc;n m&agrave;n h&igrave;nh kh&aacute; khi&ecirc;m tốn l&agrave;&nbsp;<strong>3.1 inches.</strong>&nbsp;C&aacute;c n&uacute;t chức năng cảm ứng bao gồm n&uacute;t Menu, Back, Call.</p>

<p><img alt="Màn hình blackberry porche design p993" src="https://sudospaces.com/thegioiblackberry-com-vn/2019/06/man-hinh-blackberry-porche-design-p9983.jpg" /></p>

<p><em>M&agrave;n h&igrave;nh chỉ 3.1 inches nhưng c&oacute; độ hiện thị rất cao</em></p>

<p>Tuy kh&ocirc;ng c&oacute; một m&agrave;n h&igrave;nh lớn, nhưng c&aacute;c ứng dụng v&agrave; hoạt được của người d&ugrave;ng&nbsp;BlackBerry Porsche Design P&#39;9983 kh&ocirc;ng bị t&aacute;c động nhiều, với một hệ điều h&agrave;nh đặc bi&ecirc;t, th&igrave; BlackBerry&nbsp;P9983 đủ sức l&agrave;m h&agrave;i l&ograve;ng mọi kh&aacute;ch h&agrave;ng sử dụng m&agrave;n h&igrave;nh cảm ứng.</p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<p>Th&ocirc;ng số kỹ thuật BlackBerry Porsche Design P9983 Carbon</p>

<p><img alt="BlackBerry Porsche Design P9983 Carbon" src="https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-porsche-design-p9988-sp-1-2-x300.jpg" /></p>

<ul>
	<li>Th&ocirc;ng tin chung</li>
	<li>Hệ điều h&agrave;nh
	<p>BlackBerry 10 Os</p>
	</li>
	<li>Ng&ocirc;n ngữ
	<p>Tiếng Việt</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>M&agrave;u m&agrave;n h&igrave;nh
	<p>16M colors</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p>720 x 720 pixels</p>
	</li>
	<li>M&agrave;n h&igrave;nh rộng(&quot;)
	<p>3.1 inches</p>
	</li>
	<li>C&ocirc;ng nghệ cảm ứng
	<p>Cảm ứng điện dung</p>
	</li>
	<li>Chụp h&igrave;nh &amp; Quay phim</li>
	<li>Camera sau
	<p>8 MP, autofocus, LED flash</p>
	</li>
	<li>Camera trước
	<p>2 MP, 720p@30fps</p>
	</li>
	<li>T&iacute;nh năng camera
	<p>Geo-tagging, touch focus, face detection, HDR, panorama</p>
	</li>
	<li>Quay phim
	<p>1080p@30fps</p>
	</li>
	<li>CPU &amp; RAM</li>
	<li>Tốc độ CPU
	<p>Dual-core</p>
	</li>
	<li>Số nh&acirc;n
	<p>1.5 GHz Krait</p>
	</li>
	<li>RAM
	<p>2 GB RAM</p>
	</li>
	<li>Bộ nhớ &amp; Lưu trữ</li>
	<li>Bộ nhớ trong(ROM)
	<p>64 GB</p>
	</li>
	<li>Thẻ nhớ ngo&agrave;i
	<p>microSD,</p>
	</li>
	<li>Hỗ trợ thẻ tối đa
	<p>up to 256 GB</p>
	</li>
	<li>Thiết kế &amp; Trọng lượng</li>
	<li>M&agrave;u sắc
	<p>Đen</p>
	</li>
	<li>K&iacute;ch thước
	<p>119 x 67.1 x 10.6 mm</p>
	</li>
	<li>Trọng lượng(g)
	<p>140 g</p>
	</li>
	<li>Th&ocirc;ng tin pin</li>
	<li>Loại Pin
	<p>Li-Ion</p>
	</li>
	<li>Dung lượng
	<p>2100 mAh</p>
	</li>
	<li>Kết nối &amp; Cổng giao tiếp</li>
	<li>3G
	<p>GSM / HSPA / LTE</p>
	</li>
	<li>Loại sim
	<p>Micro-SIM</p>
	</li>
	<li>Wifi
	<p>Wi-Fi 802.11 a/b/g/n, dual-band, DLNA, hotspot</p>
	</li>
	<li>Giải tr&iacute; &amp; Ứng dụng</li>
	<li>Cổng sạc
	<p>microUSB 2.0</p>
	</li>
</ul>
',
        'details'=> '<h2>Hiệu năng tr&ecirc;n điện thoại Blackberry Porsche Design P9983</h2>

<p>Để đ&aacute;p ưng nhu cầu ng&agrave;y c&agrave;ng cao của kh&aacute;ch h&agrave;ng, nhiều d&ograve;ng Smartphone kh&aacute;c nhau ra đời v&agrave; cho ra những sản phẩm với h&agrave;ng loạt c&aacute;c tiệt &iacute;ch kh&aacute;c nhau. Tuy nhi&ecirc;n đối với BlackBerry, họ đ&atilde; kh&ocirc;ng c&ograve;n muốn tham gia cạnh tranh với những h&atilde;ng sản xuất đện thoại tr&ecirc;n thế giới nữa. Đối với&nbsp;<strong>Porsche Design P9983</strong>, chiếc điện thoại n&agrave;y c&oacute; nhiều ưu điểm d&agrave;nh cho c&aacute;c kh&aacute;ch h&agrave;ng l&agrave;m quản l&iacute;, l&agrave;m việc văn ph&ograve;ng. N&oacute; &iacute;t c&aacute;c t&iacute;nh năng giải tr&iacute; đa dạng như tr&ecirc;n c&aacute;c d&ograve;ng Smartphone cao cấp hiện nay.</p>

<p><img alt="Hiệu năng blackberry porche design p9983" src="https://sudospaces.com/thegioiblackberry-com-vn/2019/06/hieu-nang-cua-blackberry-porche-design-p9983.jpg" /></p>

<p><em>M&aacute;y c&oacute; hiệu năng kh&aacute; cao, c&oacute; thể đ&aacute;p ứng được mọi nhu cầu của người d&ugrave;ng</em></p>

<p><strong>BlackBerry Porsche Design P9983 sở hữu một cấu h&igrave;nh kh&aacute; mạnh mẽ :&nbsp;</strong></p>

<ul>
	<li>CPU Qualcomm MSM8960, l&otilde;i k&eacute;p, xung nhịp 1,5GHz.</li>
	<li>RAM 2GB.</li>
	<li>Bộ nhớ trong 64GB, hỗ trợ th&ecirc;m microSD l&ecirc;n đến 128GB.</li>
	<li>Camera ch&iacute;nh 8MP, camera phụ 2MP.</li>
	<li>Kết nối: WiFi 802.11 a/b/g/n, Bluetooth 4.0, NFC.</li>
	<li>Pin dung lượng 2.100mAh.</li>
	<li>Hệ điều h&agrave;nh: BlackBerry OS 10.3.</li>
	<li>Trọng lượng: 140g.</li>
</ul>

<p>M&aacute;y hỗ trợ cổng USB, HDMI, hỗ trợ cảm biến như:&nbsp;Gia tốc, &aacute;nh s&aacute;ng xung quanh, Gyroscope, Từ kế, tiệm cận. Blackberry Porsche Design P9983 hỗ trợ nhi&ecirc;u c&aacute;c ứng dụng trong c&ocirc;ng việc như : Adobe&reg; Reader, BlackBerry Hub (Email and Social Messaging), BlackBerry&reg; Remember (memos /tasks), Box&trade;, Browser, Calculator, Calendar, Clock, Contacts, Documents To Go&trade;, Dropbox&trade;, Evernote&reg;, File Manager, Text Messaging, Universal Search</p>

<h3>Pin v&agrave; camera tr&ecirc;n&nbsp;BlackBerry Porsche Design P9983</h3>

<p>Tr&ecirc;n P9983 được trang bị 2 camera, một camera trước&nbsp;<strong>2Mpx</strong>&nbsp;v&agrave; 1 camera sau l&agrave;&nbsp;<strong>8Mpx</strong>, đ&acirc;y l&agrave; 2 camera tạm ổn so với c&aacute;c d&ograve;ng m&aacute;y kh&aacute;c, khả năng chụp ảnh v&agrave; quay video của camera sau kh&aacute; tốt, video quay l&ecirc;n tới FullHD.</p>

<p><img alt="Camera blackberry porche design p9983" src="https://sudospaces.com/thegioiblackberry-com-vn/2019/06/camera-sau-blackberry-porche-design-p9983.jpg" /></p>

<p><em>H&igrave;nh ảnh camera sau của blackberry p9983</em></p>

<p><img alt="Pin blackberry porche design p9983" src="https://sudospaces.com/thegioiblackberry-com-vn/2019/06/pin-blackberry-porsign-p9983.jpg" /></p>

<p><em>Pin của blackberry p9983</em></p>

<p>Pin tr&ecirc;n&nbsp;BlackBerry Porsche Design P&#39;9983 l&agrave; quả pin&nbsp;<strong>2100 mAh</strong>, đ&acirc;y l&agrave; một dung lượng kh&aacute; hợp l&iacute; khi m&agrave;n h&igrave;nh của m&aacute;y kh&aacute; nhỏ, c&ugrave;ng với hoạt động&nbsp;ti&ecirc;u thụ nhi&ecirc;n liệu kh&ocirc;ng cao, th&igrave; m&aacute;y ho&agrave;n to&agrave;n c&oacute; thể duy tr&igrave; từ 1-2 ng&agrave;y. C&ugrave;ng với ho&agrave;n loạt c&aacute;c th&ocirc;ng tin đến từ nh&agrave; sản xuất như :</p>

<ul>
	<li><strong>14 giờ</strong>&nbsp;thời gian n&oacute;i chuyện (3G)</li>
	<li>9 giờ đ&agrave;m thoại (2G)</li>
	<li>12 ng&agrave;y thời gian chờ (2G / 3G)</li>
	<li>45 giờ ph&aacute;t lại &acirc;m thanh</li>
	<li>8 giờ ph&aacute;t video</li>
</ul>

<p><img alt="Hiệu năng pin của blackberry porche design p9983 rất tốt" src="https://sudospaces.com/thegioiblackberry-com-vn/2019/06/hieu-nang-pin-cua-blackberry-porche-design-p9983.jpg" /></p>
',
        'slug'=>Str::slug('BlackBerry Porsche Design P9983 Carbon','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'BlackBerry Motion -cũ',
        'price'=>3990000,
        'old_price'=>4990000,
        'quantity'=>50,
        'cover_image'=>'https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-motion-sp-2.jpg',
        'rate'=>400,
        'category_id'=>15,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Nguồn gốc của BlackBerry Motion Nobox New</h2>

<p>Một số phi&ecirc;n bản Motion New Nobox hiện được ph&acirc;n phối tại Shop thuộc loại m&aacute;y người d&ugrave;ng trải nghiệm, đ&acirc;y l&agrave; mẫu BlackBerry được sử dụng &iacute;t ng&agrave;y được nh&agrave; sản xuất cung cấp cho c&aacute;c Shop để kh&aacute;ch h&agrave;ng trải nghiệm v&agrave; để l&agrave;m bảo h&agrave;nh đổi m&aacute;y n&ecirc;n m&aacute;y mới đến 99% v&agrave; kh&ocirc;ng c&oacute; một điểm tr&agrave;y xước n&agrave;o tr&ecirc;n mặt lưng hay mặt k&iacute;nh...</p>

<p><img alt="blackberry-motione-nobox-new-1" src="https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-motione-nobox-new-1.jpg" /></p>

<p>Việc xuất hiện th&ecirc;m d&ograve;ng m&aacute;y n&agrave;y gi&uacute;p người d&ugrave;ng c&oacute; th&ecirc;m lựa chọn với mẫu&nbsp;<a href="https://thegioiblackberry.com.vn/blackberry-android-la-gi.html" target="_blank">BlackBerry Android</a>&nbsp;mới nhất n&agrave;y, mức gi&aacute; so với h&agrave;ng FullBox rẻ hơn, m&agrave; chất lượng ho&agrave;n to&agrave;n tương đương sản phẩm b&oacute;c Seal...</p>

<h3>Trải nghiệm chiếc BlackBerry Motion</h3>

<p>Như c&aacute;c bạn đ&atilde; biết, ch&uacute;ng t&ocirc;i đ&atilde; c&oacute; nhiều đ&aacute;nh gi&aacute; về chiếc BlackBerry thuần cảm ứng n&agrave;y của TCL, được thiết kế dựa tr&ecirc;n sự hiện đại v&agrave; mạnh mẽ, Motion đ&atilde; tạo được một h&igrave;nh ảnh tương đối ph&ugrave; hợp với thị trường, kh&ocirc;ng bị cổ điển như c&aacute;c sản phẩm thuần cảm ứng trước đ&oacute; l&agrave; BlackBerry DTEK50 &amp; BlackBerry DTEK60...</p>

<p><img alt="blackberry-motione-nobox-new-3" src="https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-motione-nobox-new-3.jpg" /></p>

<p>Với c&aacute;c khung viền được gọt rất thanh th&igrave; Motion vẫn tạo cảm gi&aacute;c cầm kh&aacute; thoải m&aacute;i v&agrave; đặc biệt chất liệu tạo cảm gi&aacute;c cầm rất m&aacute;t tay. Chiếc Motion c&oacute; một số điểm chưa ho&agrave;n thiện đ&oacute; l&agrave; c&aacute;c g&oacute;c vu&ocirc;ng v&agrave; m&agrave;n h&igrave;nh th&igrave; kh&aacute; b&aacute;m v&acirc;n tay n&ecirc;n h&atilde;y d&aacute;n m&agrave;n h&igrave;nh để c&oacute; thể giữ m&agrave;n h&igrave;nh ổn định. Mặt lưng được phủ lớp cao su n&ecirc;n c&oacute; thể bị d&iacute;nh mồ h&ocirc;i nếu tay bạn c&oacute; mồi h&ocirc;i...</p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<p>Th&ocirc;ng số kỹ thuật BlackBerry Motion -cũ</p>

<p><img alt="BlackBerry Motion -cũ" src="https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-motion-sp-2-x300.jpg" /></p>

<ul>
	<li>Th&ocirc;ng tin chung</li>
	<li>Hệ điều h&agrave;nh
	<p>BlackBerry Android Os</p>
	</li>
	<li>Ng&ocirc;n ngữ
	<p>Tiếng Việt</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>Loại m&agrave;n h&igrave;nh
	<p>IPS LCD</p>
	</li>
	<li>M&agrave;u m&agrave;n h&igrave;nh
	<p>16M colors</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p>1080 x 1920 pixels</p>
	</li>
	<li>M&agrave;n h&igrave;nh rộng(&quot;)
	<p>5.5 inches</p>
	</li>
	<li>C&ocirc;ng nghệ cảm ứng
	<p>Cảm ứng điện dung</p>
	</li>
	<li>Chụp h&igrave;nh &amp; Quay phim</li>
	<li>Camera sau
	<p>12 MP, f/2.0, phase detection autofocus, dual-LED dual-tone flash</p>
	</li>
	<li>Camera trước
	<p>8 MP (f/2.2, 1.125 um), 1080p@30fps</p>
	</li>
	<li>T&iacute;nh năng camera
	<p>Geo-tagging, touch focus, face detection, HDR, panorama</p>
	</li>
	<li>Quay phim
	<p>2160p@30fps, 1080p@30fps</p>
	</li>
	<li>CPU &amp; RAM</li>
	<li>Tốc độ CPU
	<p>2.0 GHz Cortex-A53</p>
	</li>
	<li>Số nh&acirc;n
	<p>Octa-core</p>
	</li>
	<li>Chipset
	<p>Qualcomm MSM8953 Snapdragon 625</p>
	</li>
	<li>RAM
	<p>4 GB RAM</p>
	</li>
	<li>Bộ nhớ &amp; Lưu trữ</li>
	<li>Bộ nhớ trong(ROM)
	<p>32 GB</p>
	</li>
	<li>Thẻ nhớ ngo&agrave;i
	<p>microSD,</p>
	</li>
	<li>Hỗ trợ thẻ tối đa
	<p>up to 400 GB</p>
	</li>
	<li>Thiết kế &amp; Trọng lượng</li>
	<li>M&agrave;u sắc
	<p>Đen</p>
	</li>
	<li>K&iacute;ch thước
	<p>155.8 x 75.5 x 8.1 mm</p>
	</li>
	<li>Trọng lượng(g)
	<p>167 g</p>
	</li>
	<li>Th&ocirc;ng tin pin</li>
	<li>Loại Pin
	<p>Li-Ion</p>
	</li>
	<li>Dung lượng
	<p>4000 mAh</p>
	</li>
	<li>Kết nối &amp; Cổng giao tiếp</li>
	<li>3G
	<p>GSM / HSPA / LTE</p>
	</li>
	<li>Loại sim
	<p>Nano-SIM</p>
	</li>
	<li>Giải tr&iacute; &amp; Ứng dụng</li>
	<li>Cổng sạc
	<p>2.0, Type-C 1.0 reversible connector</p>
	</li>
</ul>
',
        'details'=> '<h2>Mức gi&aacute; điện thoại BlackBerry Motion Nobox l&agrave; tốt nhất</h2>

<p>Tuy chỉ sở hữu một cấu h&igrave;nh tầm trung, nhưng c&aacute;c c&ocirc;ng nghệ cũng như linh kiện cấu tạo đều hiện đại v&agrave; kh&ocirc;ng c&oacute; hiện tượng lỗi kĩ thuật trong qu&aacute; tr&igrave;nh sử dụng...</p>

<p><img alt="blackberry-motione-nobox-new-2" src="https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-motione-nobox-new-2.jpg" /></p>

<p>Với mức gi&aacute; tốt hớn so với bản Motion FullBox th&igrave; bạn c&ograve;n chờ g&igrave; m&agrave; kh&ocirc;ng sắm ngay một chiếc BlackBerry Motion Nobox, một phong c&aacute;ch ho&agrave;n to&agrave;n sang trọng v&agrave; kh&ocirc;ng hề tầm thường như c&aacute;c d&ograve;ng Android đến từ Trung Quốc...</p>
',
        'slug'=>Str::slug('BlackBerry Motion -cũ','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'BlackBerry Porsche Design P9982 FullBox',
        'price'=>8990000,
        'old_price'=>9990000,
        'quantity'=>50,
        'cover_image'=>'https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-porsche-design-p-9982-sp-1-2.jpg',
        'rate'=>400,
        'category_id'=>15,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Thiết kế mới lạ tr&ecirc;n BlackBerry Porsche Design P&rsquo;9982</h2>

<p>Phi&ecirc;n bản cảm ứng n&agrave;y được thiết kế kh&aacute; lạ so với những phi&ecirc;n bản trước đ&acirc;y như BlackBerry Z10, BlackBerry Z30. N&oacute; l&agrave; d&ograve;ng Smartphone, nhưng c&aacute;c g&oacute;c được l&agrave;m vu&ocirc;ng v&agrave; thẳng tạo sự mạnh mẽ đối với người d&ugrave;ng. Ở phi&ecirc;n bản trước điện thoại BlackBerry Porsche Design P&rsquo;9981 đ&atilde; ảnh hưởng kh&aacute; nhiều đối với phi&ecirc;n bản&nbsp;<strong>BlackBerry&nbsp;P&rsquo;9982</strong>, phần vỏ m&aacute;y được trang bị từ c&aacute;c kim loại đắt tiền, c&oacute; độ cứng tốt nhưng kh&aacute; nhẹ, to&agrave;n bộ mặt sau được phủ một lớp da c&aacute; sấu được l&agrave;m thủ c&ocirc;ng to&agrave;n bộ.</p>

<p><img alt="" src="https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-porsche-design-p9982-thiet-ke.jpg" /></p>

<p><em>Thiết về kim loại nguy&ecirc;n khối c&ugrave;ng c&aacute;c đường n&eacute;t mạnh mẽ</em></p>

<p>Logo Porsche Design đuược in tr&ecirc;n một miếng kim lọai&nbsp;nằm ph&iacute;a tr&ecirc;n m&agrave;n h&igrave;nh, th&acirc;n dưới m&aacute;y được thiết kế kiểu d&aacute;ng giống với điện thoại&nbsp;Blackberry Porsche Design P&rsquo;9981. Phi&ecirc;n bả mới n&agrave;y sở hữu một kiểu d&aacute;ng kh&aacute;c hẳn c&aacute;c d&ograve;ng Smartphone trước đ&acirc;y của BlackBerry. Tuy kh&ocirc;ng qu&aacute; to như c&aacute;c d&ograve;ng Galaxy Note, nhưng chất lượng v&agrave; hiệu năng m&aacute;y cũng kh&ocirc;ng tồi.</p>

<h3>M&agrave;n h&igrave;nh của BlackBerry Porsche Design P&rsquo;9982</h3>

<p>M&agrave;n h&igrave;nh của chiếc BlackBerry P&rsquo;9982 l&agrave; m&agrave;n h&igrave;nh cảm ứng duy nhất&nbsp;cho qu&aacute; tr&igrave;nh sử dụng&nbsp;<strong>Porsche Design P&rsquo;9982</strong>, ho&agrave;n to&agrave;n 100% cản ứng v&agrave; kh&ocirc;ng sử dụng b&agrave;n ph&iacute;m Qwerty. Sở hữu m&agrave;n h&igrave;nh 4.2 inches, so với c&aacute;c d&ograve;ng m&aacute;y kh&aacute;c th&igrave; kh&ocirc;ng hề nhỏ, đ&acirc;y l&agrave; một m&agrave;n h&igrave;nh tầm trung với cấu tạo từ&nbsp;m&agrave;n h&igrave;nh cảm ứng điện dung, độ ph&acirc;n giải 1280&nbsp;x 720 px, mật độ điểm ảnh 355 ppi&nbsp;đ&acirc;y l&agrave; một độ ph&acirc;n giải kh&ocirc;ng được cao, điện thoại Blackberry n&ecirc;n cải thiện m&agrave;n h&igrave;nh để cạnh tranh tốt hơn với Samsung hay iPhone.</p>

<p><img alt="" src="https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-porsche-design-p9982-man-hinh.jpg" /></p>

<p><em>M&agrave;n h&igrave;nh cảm ứng của&nbsp;Porsche Design P&rsquo;9982 kh&aacute; đẹp</em></p>

<p>Kh&ocirc;ng phải l&agrave; h&atilde;ng ph&aacute;t triển Smartphone tốt, c&aacute;c sản phẩm như Blackberry Z10, Z30, Z3 đều đ&atilde; kh&ocirc;ng đi được s&acirc;u v&agrave;o thị trường v&agrave; thường phải r&uacute;t lui sớm, đ&acirc;y l&agrave; những b&agrave;i học lớn cho Blackberry khi ra mắt một sản phẩm Smartphone như&nbsp;<a href="https://thegioiblackberry.com.vn/blackberry-porsche-design-p9982.html" target="_blank">BlackBerry Porsche Design P&rsquo;9982</a>.</p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<p>Th&ocirc;ng số kỹ thuật BlackBerry Porsche Design P&#39;9982 FullBox</p>

<p><img alt="BlackBerry Porsche Design P9982 FullBox" src="https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-porsche-design-p-9982-sp-1-2-x300.jpg" /></p>

<ul>
	<li>Th&ocirc;ng tin chung</li>
	<li>Hệ điều h&agrave;nh
	<p>BlackBerry 10 Os</p>
	</li>
	<li>Ng&ocirc;n ngữ
	<p>Tiếng Việt</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>M&agrave;u m&agrave;n h&igrave;nh
	<p>16M colors</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p>768 x 1280 pixels</p>
	</li>
	<li>M&agrave;n h&igrave;nh rộng(&quot;)
	<p>4.2 inches</p>
	</li>
	<li>C&ocirc;ng nghệ cảm ứng
	<p>Cảm ứng điện dung</p>
	</li>
	<li>Chụp h&igrave;nh &amp; Quay phim</li>
	<li>Camera sau
	<p>8 MP, autofocus, LED flash</p>
	</li>
	<li>Camera trước
	<p>2 MP, 720p@30fps</p>
	</li>
	<li>T&iacute;nh năng camera
	<p>Geo-tagging, face detection, HDR</p>
	</li>
	<li>Quay phim
	<p>1080p@30fps</p>
	</li>
	<li>CPU &amp; RAM</li>
	<li>Tốc độ CPU
	<p>1.5 GHz Krait</p>
	</li>
	<li>Số nh&acirc;n
	<p>Dual-core</p>
	</li>
	<li>Chipset
	<p>Qualcomm MSM8960T Snapdragon S4 Pro</p>
	</li>
	<li>RAM
	<p>2 GB RAM</p>
	</li>
	<li>Bộ nhớ &amp; Lưu trữ</li>
	<li>Bộ nhớ trong(ROM)
	<p>64 GB</p>
	</li>
	<li>Thẻ nhớ ngo&agrave;i
	<p>microSD,</p>
	</li>
	<li>Hỗ trợ thẻ tối đa
	<p>up to 64 GB</p>
	</li>
	<li>Thiết kế &amp; Trọng lượng</li>
	<li>M&agrave;u sắc
	<p>Đen</p>
	</li>
	<li>K&iacute;ch thước
	<p>131 x 65.6 x 9.5 mm</p>
	</li>
	<li>Trọng lượng(g)
	<p>140 g</p>
	</li>
	<li>Th&ocirc;ng tin pin</li>
	<li>Loại Pin
	<p>Li-Ion</p>
	</li>
	<li>Dung lượng
	<p>1800 mAh</p>
	</li>
	<li>Kết nối &amp; Cổng giao tiếp</li>
	<li>3G
	<p>GSM / HSPA / LTE</p>
	</li>
	<li>Loại sim
	<p>Micro-SIM</p>
	</li>
	<li>Wifi
	<p>Wi-Fi 802.11 a/b/g/n, dual-band, DLNA, hotspot</p>
	</li>
	<li>Giải tr&iacute; &amp; Ứng dụng</li>
	<li>Cổng sạc
	<p>microUSB 2.0</p>
	</li>
</ul>
',
        'details'=> '<h2>Hiệu năng hoạt động của điện thoại BlackBerry P&rsquo;9982</h2>

<p>BlackBerry vẫn sử dụng c&aacute;c sản phẩm của Snapdragon, đ&acirc;y l&agrave; những bộ vi xử l&iacute; tốt được Blackberry thường xuy&ecirc;n sử dụng trong c&aacute;c sản phẩm của m&igrave;nh, m&aacute;y sở dụng hệ điều h&agrave;nh ri&ecirc;ng n&ecirc;n phần cứng cũng được Snapdragon thiết kế ri&ecirc;ng để ph&ugrave; hợp với chiếc&nbsp;<a href="https://thegioiblackberry.com.vn/" target="_blank">điện thoại BlackBerry</a>&nbsp;Porsche Design P&rsquo;9982. Cấu hinh so với c&aacute;c d&ograve;ng m&aacute;y tr&ecirc;n thị trường ho&agrave;n to&agrave;n kh&ocirc;ng hề thua k&eacute;m: CPU&nbsp;Qualcomm MSM8960T Snapdragon S4 Pro,&nbsp;Dual-core 1.5 GHz Krait, GPU&nbsp;Adreno 225 hỗ trợ kh&aacute; nhiều game đồ họa trung b&igrave;nh.</p>

<p><img alt="" src="https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-porsche-design-p9982-hieu-nang.jpg" /></p>

<p><em>Blackberry Porsche Design P&rsquo;9982 sở hữu một cấu h&igrave;nh tương đối kh&aacute;</em></p>

<p>Bộ nhớ trong 64GB, Ram 2GB, hỗ trợ thể nhớ l&ecirc;n tới 64 GB,&nbsp;Wi-Fi 802.11 a/b/g/n, dual-band, DLNA, hotspot bắt s&oacute;ng cực n&eacute;t, m&aacute;y c&oacute;&nbsp;vỏ l&agrave;m kim loại nguy&ecirc;n khối tuy nhi&ecirc;n trọng lượng m&aacute;y vẫn rất nhẹ đ&acirc;y l&agrave; điều kh&aacute; lạ tr&ecirc;n phi&ecirc;n bản n&agrave;y với trọng lượng 140 g</p>

<p><strong>Bảng&nbsp;gi&aacute;&nbsp;Porsche Design P&rsquo;9982:&nbsp;</strong></p>

<p>Hiện nay trung t&acirc;m Thế giới Blackberry cung cấp&nbsp;<strong>Porsche Design P&rsquo;9982&nbsp;</strong>ch&iacute;nh h&atilde;ng v&agrave; c&aacute;c d&ograve;ng m&aacute;y qua sử dụng, tất cả đều được bảo h&agrave;nh 6- 12 th&aacute;ng.</p>

<table>
	<caption>&nbsp;</caption>
	<thead>
		<tr>
			<th>Sản phẩm</th>
			<th>Hiện trạng</th>
			<th>Ch&uacute; th&iacute;ch</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Blackberry Porsche Design P&#39;9982</td>
			<td>Cũ</td>
			<td><a href="https://thegioiblackberry.com.vn/blackberry-porsche-design-p9982-cu.html" target="_blank">Xem chi tiết</a></td>
		</tr>
		<tr>
			<td>Blackberry Porsche P&#39;9982 FullBox</td>
			<td>Mới</td>
			<td>&nbsp;</td>
		</tr>
	</tbody>
</table>

<h3>Pin &amp; Camera của điện thoại BlackBerry Porsche Design P&rsquo;9982</h3>

<p>Như c&aacute;c bạn thấy, phi&ecirc;n bản n&agrave;y được thiết kế theo phong c&aacute;ch nam t&iacute;nh nhiều hơn, v&agrave; cũng thể hiện sự mạnh mẽ kh&aacute; r&otilde;. Đối với BlackBerry P&rsquo;9982 những đường cong tr&ecirc;n thiết kế đều ho&agrave;n to&agrave;n bị loại bỏ, về phần Pin của&nbsp;P&rsquo;9982, Blackberry đ&atilde; t&iacute;ch hợp một quả Pin nhỏ khoảng 1800 mAh điều n&agrave;y chứng minh v&igrave; sao m&agrave; trọng lượng của m&aacute;y kh&aacute; l&agrave; nhẹ. Với quả pin n&agrave;y th&igrave; điện thoại BlackBerry Porsche Design P&rsquo;9982 đang thể hiện một điểm hạn chế kh&aacute; lớn của m&igrave;nh.</p>

<p><img alt="" src="https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-porsche-design-p9982-pin.jpg" /></p>

<p><em>Vị tr&iacute; Pin vẫn được lắp ph&iacute;a b&ecirc;n tr&aacute;i</em></p>

<p>Camera của&nbsp; Porsche Design P&rsquo;9982 cũng kh&ocirc;ng c&oacute; qu&aacute; nhiều điều để n&oacute;i, 2 camera hỗ trợ, một c&aacute;i 8MP sử dụng quay video, chụp h&igrave;nh, một c&aacute;i 2MP hỗ trợ chat video, shelfie kh&ocirc;ng qu&aacute; tốt. H&igrave;nh ảnh chụp c&oacute; độ ph&acirc;n giải tốt, FullHD hoặc HD đều l&agrave; h&igrave;nh ảnh c&oacute; độ n&eacute;t cao, m&agrave;u tốt, c&acirc;n bằng s&aacute;ng tốt. Nh&igrave;n chung hệ thống camera điện thoại BlackBerry Porsche Design P&rsquo;9982 chỉ đ&aacute;p ứng nhu cầu phổ th&ocirc;ng của người d&ugrave;ng.</p>

<p><img alt="blackberry-porsche-design-p9982-camera" src="https://sudospaces.com/thegioiblackberry-com-vn/2018/01/blackberry-porsche-design-p9982-camera.jpg" /></p>
',
        'slug'=>Str::slug('BlackBerry Porsche Design P9982 FullBox','-').'.aspx',
        'created_at'=>now(),

    ]);DB::table('products')->insert([
        'name'=>'BlackBerry KEY2 128gb (Gold) mạ vàng 24K',
        'price'=>24000000,
        'old_price'=>24990000,
        'quantity'=>50,
        'cover_image'=>'https://sudospaces.com/thegioiblackberry-com-vn/2020/01/blackberry-key2-gold-5-1.jpg',
        'rate'=>400,
        'category_id'=>15,
        'user_id'=>random_int(1,5),
        'describe'=> '<h2>Một chiếc BlackBerry KEY2 mạ v&agrave;ng&nbsp;24K thật sự đẳng cấp</h2>

<p>Với một chiếc BlackBerry KEY2, ch&uacute;ng ta c&oacute; thể thấy sự sang trọng v&agrave; đẳng cấp m&agrave; KEY2 đem ại, một thiết kế được đ&aacute;nh gi&aacute; l&agrave; một phi&ecirc;n bản đ&atilde; kế thừa được những ưu điểm của KEYone, với một chất liệu mới được &aacute;p dụng v&agrave;o ph&acirc;n kh&uacute;c n&agrave;y đ&oacute; l&agrave; Nh&ocirc;m 7000 một chất liệu đ&atilde; cải thiện r&otilde; rệt về trọng lượng v&agrave; khả năng cầm nắm của KEY2. Tuy viền được l&agrave;m phẳng nhưng khi nắm kh&ocirc;ng bị cấn tay như phi&ecirc;n bản BlackBerry Motion,...</p>

<p><img alt="Blackberry key2 mạ vàng mang đến sự đẳng cấp" src="https://sudospaces.com/thegioiblackberry-com-vn/2019/02/blackberry-key2-gold-5-1.jpg" /></p>

<p><em>M&aacute;y mang đến sự đẳng cấp cho bạn</em></p>

<p>Sau khi được mạ v&agrave;ng th&igrave; lớp viền ho&agrave;n to&agrave;n được mạ một lớp v&agrave;ng cực k&igrave; đẹp v&agrave; mỏng, m&agrave;u đặc biệt ấn tượng của KEY2 gold đ&atilde; tạo n&ecirc;n một sức h&uacute;t rất chất m&agrave; tất cả c&aacute;c Fan của BlackBerry v&ocirc; c&ugrave;ng mong muốn sở hữu. Đ&acirc;y cũng l&agrave; một ph&acirc;n kh&uacute;c cao cấp được mạ v&agrave;ng nhằm đ&aacute;p ứng c&aacute;c nhu cầu mua BlackBerry mạ v&agrave;ng v&agrave; cũng tạo n&ecirc;n một phi&ecirc;n bản duy nhất hiện nay tại Việt Nam cho người d&ugrave;ng.</p>

<h3>Những mức gi&aacute; đầu ti&ecirc;n về chiếc BlackBerry KEY2 mạ v&agrave;ng</h3>

<p>Được đặt l&agrave;m với c&ocirc;ng nghệ mạ mới nhất, ch&uacute;ng t&ocirc;i đ&atilde; c&oacute; những phi&ecirc;n bản BlackBerry KEY2 gold&nbsp;24K đầu ti&ecirc;n tại Việt Nam. C&aacute;c phi&ecirc;n bản KEY2 Gold đều l&agrave; những phi&ecirc;n bản quốc tế với chất lượng m&aacute;y mới tinh 100% mới tiến h&agrave;nh mạ v&agrave;ng.</p>

<p>Để tạo ra một nh&oacute;m những sản phẩm chất lượng, ch&uacute;ng t&ocirc;i đ&atilde; kh&ocirc;ng ngần ngại mang đến những phi&ecirc;n bản độc đ&aacute;o v&agrave; duy nhất. chiếc BlackBerry KEY2 Gold l&agrave; một sản phẩm như vậy khi no được c&ocirc;ng bố tại Shop.</p>

<p>Mức gi&aacute;&nbsp;<a href="https://thegioiblackberry.com.vn/blackberry-key2-gold-ma-vang-24k.html" target="_blank">BlackBerry KEY2 mạ v&agrave;ng</a>&nbsp;hiện nay đ&atilde; c&oacute; mức gi&aacute; kh&aacute; tốt, mạ v&agrave;ng 24K được thể hiện rất tinh tế v&agrave; đẹp mắt với c&aacute;c nghệ nhận mạ v&agrave;ng bậc thầy tại Việt Nam.</p>

<p>Chiếc BlackBerry KEY2 Gold mạ v&agrave;ng vẫn đang l&agrave; một trong những phi&ecirc;n bản đang được rất nhiều c&aacute;c đại gia hay c&aacute;c doanh nh&acirc;n cao cấp sử dụng, m&agrave;u v&agrave;ng tạo n&ecirc;n sức h&uacute;t mạnh mẽ v&agrave; cũng thể hiện một d&ograve;ng m&aacute;y đẳng cấp kh&aacute;c hẳn so với c&aacute;c d&ograve;ng Smartphone th&ocirc;ng thường.</p>

<h3>&nbsp;</h3>
',
        'specifications'=> '<p>Th&ocirc;ng số kỹ thuật BlackBerry KEY2 128gb (Gold) mạ v&agrave;ng 24K</p>

<p><img alt="BlackBerry KEY2 128gb (Gold) mạ vàng 24K" src="https://sudospaces.com/thegioiblackberry-com-vn/2020/01/blackberry-key2-gold-5-1-x300.jpg" /></p>

<ul>
	<li>Th&ocirc;ng tin chung</li>
	<li>Hệ điều h&agrave;nh
	<p>Android 8.1 (Oreo)</p>
	</li>
	<li>Ng&ocirc;n ngữ
	<p>Tiếng Việt</p>
	</li>
	<li>M&agrave;n h&igrave;nh</li>
	<li>Loại m&agrave;n h&igrave;nh
	<p>IPS LCD</p>
	</li>
	<li>M&agrave;u m&agrave;n h&igrave;nh
	<p>16M colors</p>
	</li>
	<li>Độ ph&acirc;n giải
	<p>1080 x 1620 pixels, 3:2 ratio</p>
	</li>
	<li>M&agrave;n h&igrave;nh rộng(&quot;)
	<p>4.5 inches</p>
	</li>
	<li>C&ocirc;ng nghệ cảm ứng
	<p>Capacitive touchscreen</p>
	</li>
	<li>Chụp h&igrave;nh &amp; Quay phim</li>
	<li>Camera sau
	<p>Dual: 12 MP (f/1.8, 1/2.3&quot;, 1.55&micro;m, DP PDAF) + 12 MP (f/2.6, 1.0&micro;m, PDAF), phase detection autofocus</p>
	</li>
	<li>Camera trước
	<p>8 MP (f/2.0, 1.12&micro;m), 1080p</p>
	</li>
	<li>Đ&egrave;n flash
	<p>Dual-LED dual-tone flash</p>
	</li>
	<li>T&iacute;nh năng camera
	<p>Geo-tagging, touch focus, face detection, HDR, panorama</p>
	</li>
	<li>Quay phim
	<p>2160p@30fps, 1080p@30fps</p>
	</li>
	<li>CPU &amp; RAM</li>
	<li>Tốc độ CPU
	<p>4x2.2 GHz Kryo 260 &amp; 4x1.8 GHz Kryo 260</p>
	</li>
	<li>Số nh&acirc;n
	<p>Octa-core</p>
	</li>
	<li>Chipset
	<p>Qualcomm SDM660 Snapdragon 660</p>
	</li>
	<li>RAM
	<p>6 GB RAM</p>
	</li>
	<li>Chip đồ họa (GPU)
	<p>Adreno 512</p>
	</li>
	<li>Bộ nhớ &amp; Lưu trữ</li>
	<li>Bộ nhớ trong(ROM)
	<p>64/128 GB</p>
	</li>
	<li>Thẻ nhớ ngo&agrave;i
	<p>microSD</p>
	</li>
	<li>Hỗ trợ thẻ tối đa
	<p>up to 256 GB</p>
	</li>
	<li>Thiết kế &amp; Trọng lượng</li>
	<li>M&agrave;u sắc
	<p>Gold</p>
	</li>
	<li>K&iacute;ch thước
	<p>151.4 x 71.8 x 8.5 mm</p>
	</li>
	<li>Trọng lượng(g)
	<p>168 g</p>
	</li>
	<li>Th&ocirc;ng tin pin</li>
	<li>Loại Pin
	<p>Li-Ion</p>
	</li>
	<li>Dung lượng
	<p>3500 mAh</p>
	</li>
	<li>C&oacute; thể th&aacute;o rời
	<p>Non-removable</p>
	</li>
	<li>Kết nối &amp; Cổng giao tiếp</li>
	<li>3G
	<p>GSM / HSPA / LTE</p>
	</li>
	<li>Loại sim
	<p>Nano-SIM</p>
	</li>
	<li>Wifi
	<p>Wi-Fi 802.11 a/b/g/n/ac, dual-band, WiFi Direct, hotspot</p>
	</li>
	<li>GPS
	<p>Yes, with A-GPS, GLONASS, BDS2</p>
	</li>
	<li>Bluetooth
	<p>5.0, A2DP, LE, EDR</p>
	</li>
	<li>Giải tr&iacute; &amp; Ứng dụng</li>
	<li>Cổng sạc
	<p>3.0, Type-C 1.0 reversible connector, USB On-The-Go</p>
	</li>
</ul>
',
        'details'=> '<h2>Những điểm mạ v&agrave;ng tr&ecirc;n BlackBerry KEY2</h2>

<p>Với những d&ograve;ng m&aacute;y BlackBerry Android, th&igrave; mới chỉ c&oacute; KEYone l&agrave; sản phẩm được mạ v&agrave;ng, đối với KEY2 to&agrave;n bộ c&aacute;c điểm mạ v&agrave;ng cũng được thể hiện tương như tr&ecirc;n KEYone, phần viền được mạ to&agrave;n bộ, tiếp đ&oacute; l&agrave; logo mặt lưng, viền ngo&agrave;i cụm Camera,...</p>

<p><img alt="Blackberry key2 được mạn vàng phần cuối máy" src="https://sudospaces.com/thegioiblackberry-com-vn/2019/02/blacberry-key2-ma-vang-3.jpg" /></p>

<p><em>Viền cuối m&aacute;y được mạ v&agrave;ng cao cấp</em></p>

<p>C&aacute;c ph&iacute;m bấm nằm tr&ecirc;n cạnh phải của BlackBerry KEY2 cũng được mạ v&agrave;ng v&agrave; những ph&iacute;m bấm nổi bật mỗi khi bạn r&uacute;t r v&agrave; nghe điện thoại, sau khi mạ v&agrave;ng xong KEY2 trở n&ecirc;n như một &ocirc;ng vua vậy, từ một phi&ecirc;n bản sang trọng v&agrave; mạnh mẽ giờ n&oacute; trở th&agrave;nh một ng&ocirc;i sao s&aacute;ng ch&oacute;i v&agrave; đẳng cấp thượng lưu. Về hiệu năng BlackBerry KEY2 gold ho&agrave;n to&agrave;n ổn định v&agrave; được Shop bảo h&agrave;nh theo ch&iacute;nh s&aacute;ch m&aacute;y mới.</p>

<p><img alt="Phím bấm blackberry key2 mạ vàng" src="https://sudospaces.com/thegioiblackberry-com-vn/2019/02/blacberry-key2-ma-vang-4.jpg" /></p>

<p><em>Phần khay sim cũng được mạ v&agrave;ng cao cấp</em></p>

<p><img alt="Viền phải blackberry key2 mạ vàng" src="https://sudospaces.com/thegioiblackberry-com-vn/2019/02/blackberry-key2-gold-1.jpg" /></p>

<p><em>C&aacute;c ph&iacute;m bấm cũng được mạ v&agrave;ng cao cấp nhất</em></p>

<p><img alt="Mặt lưng blackberry key2 mạ vàng" src="https://sudospaces.com/thegioiblackberry-com-vn/2019/02/blackberry-key2-gold-7.jpg" /></p>

<p><em>Mặt lưng được mạ v&agrave;ng phần logo v&agrave; viền camera</em></p>

<p>Nếu bạn đang t&igrave;m cho m&igrave;nh một chiếc m&aacute;y tốt v&agrave; ph&ugrave; hợp nhất với t&uacute;i tiền của bạn nhất th&igrave; cũng c&oacute; thể tham khảo&nbsp;<a href="https://thegioiblackberry.com.vn/bb-key2" target="_blank">DTEK2</a>&nbsp;để c&oacute; thể chọn được sản phẩm ph&ugrave; hợp với m&igrave;nh.&nbsp;Thế giới blackberry cảm ơn qu&yacute; kh&aacute;ch đ&atilde; quan t&acirc;m sản phẩm BlackBerry KEY2 mạ v&agrave;ng của ch&uacute;ng t&ocirc;i!</p>
',
        'slug'=>Str::slug('BlackBerry KEY2 128gb (Gold) mạ vàng 24K','-').'.aspx',
        'created_at'=>now(),

    ]);

    }
}
