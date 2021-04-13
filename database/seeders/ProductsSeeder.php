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

                'name'=>'Asus Zenbook 14 Q407IQ (Ryzen 5 - 4500U, 8GB, 256B, VGA NVIDIA MX350, 14.0 FHD)',
                'price'=>18490000,
                'old_price'=>19890000,
                'quantity'=>50,
                'cover_image'=>'https://laptopaz.vn/media/lib/1761_71jVnEQUFXL._AC_SL1500_.jpg',
                'rate'=>5,
                'category_id'=>3, //Laptop Văn phòng
                'brand_id'=>2,
                'user_id'=>random_int(1,5),
                'describe'=>Str::random('200'),
                'specifications'=>Str::random('200'),
                'details'=>Str::random('200'),
                'slug'=>Str::slug('Asus Zenbook 14 Q407IQ (Ryzen 5 - 4500U, 8GB, 256B, VGA NVIDIA MX350, 14.0 FHD)','-').'.aspx',
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
    }
}
