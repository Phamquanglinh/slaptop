<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    public function run()
    {
        DB::table('pages')->insert([
            'privacy' => '<h3 class="text-center">Chính sách bảo mật</h3>
                            <p><i>Slaptop.com.vn cam kết sẽ bảo mật những thông tin mang tính riêng tư của bạn. Bạn vui lòng đọc bản “Chính sách bảo mật” dưới đây để hiểu hơn những cam kết mà chúng tôi thực hiện, nhằm tôn trọng và bảo vệ quyền lợi của người truy cập.</i></p>
                            <p><b>1. Mục đích và phạm vi thu thập?</b></p>
                            <p>Để truy cập và sử dụng một số dịch vụ tại Slaptop.com.vn, bạn có thể sẽ được yêu cầu đăng ký với chúng tôi thông tin cá nhân (Email, Họ tên, Số ĐT liên lạc…). Mọi thông tin khai báo phải đảm bảo tính chính xác và hợp pháp. Slaptop.com.vn không chịu mọi trách nhiệm liên quan đến pháp luật của thông tin khai báo.
                                Chúng tôi cũng có thể thu thập thông tin về số lần viếng thăm, bao gồm số trang bạn xem, số links (liên kết) bạn click và những thông tin khác liên quan đến việc kết nối đến site Slaptop.com.vn. Chúng tôi cũng thu thập các thông tin mà trình duyệt Web (Browser) bạn sử dụng mỗi khi truy cập vào slaptop.com.vn, bao gồm: địa chỉ IP, loại Browser, ngôn ngữ sử dụng, thời gian và những địa chỉ mà Browser truy xuất đến.</p>
                            <p><b>2. Phạm vi sử dụng thông tin</b></p>
                            <p>Slaptop.com.vn thu thập và sử dụng thông tin cá nhân bạn với mục đích phù hợp và hoàn toàn tuân thủ nội dung của “Chính sách bảo mật” này. Khi cần thiết, chúng tôi có thể sử dụng những thông tin này để liên hệ trực tiếp với bạn dưới các hình thức như: gởi thư ngỏ, đơn đặt hàng, thư cảm ơn, sms, thông tin về kỹ thuật và bảo mật…</p>
                            <p><b>3. Thời gian lưu trữ thông tin</b></p>
                            <p>Dữ liệu cá nhân của Thành viên sẽ được lưu trữ cho đến khi có yêu cầu hủy bỏ hoặc tự thành viên đăng nhập và thực hiện hủy bỏ. Còn lại trong mọi trường hợp thông tin cá nhân thành viên sẽ được bảo mật trên máy chủ của Slaptop.com.vn.</p>
                            <p><b>4. Cam kết bảo mật thông tin cá nhân khách hàng</b></p>
                            <p>Thông tin cá nhân của thành viên trên Slaptop.com.vn được Slaptop.com.vn cam kết bảo mật tuyệt đối theo chính sách bảo vệ thông tin cá nhân của Slaptop.com.vn. Việc thu thập và sử dụng thông tin của mỗi thành viên chỉ được thực hiện khi có sự đồng ý của khách hàng đó trừ những trường hợp pháp luật có quy định khác.
                                Không sử dụng, không chuyển giao, cung cấp hay tiết lộ cho bên thứ 3 nào về thông tin cá nhân của thành viên khi không có sự cho phép đồng ý từ thành viên.
                                Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu cá nhân thành viên, Slaptop.com.vn sẽ có trách nhiệm thông báo vụ việc cho cơ quan chức năng điều tra xử lý kịp thời và thông báo cho thành viên được biết.
                                Bảo mật tuyệt đối mọi thông tin giao dịch trực tuyến của Thành viên bao gồm thông tin hóa đơn kế toán chứng từ số hóa tại khu vực dữ liệu trung tâm an toàn cấp 1 của Slaptop.com.vn.
                                Hệ thống thanh toán thẻ được cung cấp bởi các đối tác cổng thanh toán (“Đối Tác Cổng Thanh Toán”) đã được cấp phép hoạt động hợp pháp tại Việt Nam. Theo đó, các tiêu chuẩn bảo mật thanh toán thẻ tại Slaptop đảm bảo tuân thủ theo các tiêu chuẩn bảo mật ngành.
                                Ban quản lý Slaptop.com.vn yêu cầu các cá nhân khi đăng ký/mua hàng là thành viên, phải cung cấp đầy đủ thông tin cá nhân có liên quan như: Họ và tên, địa chỉ liên lạc, email, số chứng minh nhân dân, điện thoại, số tài khoản, số thẻ thanh toán …., và chịu trách nhiệm về tính pháp lý của những thông tin trên. Ban quản lý Slaptop.com.vn không chịu trách nhiệm cũng như không giải quyết mọi khiếu nại có liên quan đến quyền lợi của Thành viên đó nếu xét thấy tất cả thông tin cá nhân của thành viên đó cung cấp khi đăng ký ban đầu là không chính xác.</p>
                            <p><b>5. Quy định bảo mật</b></p>
                            <p>Chính sách giao dịch thanh toán bằng thẻ quốc tế và thẻ nội địa (internet banking) đảm bảo tuân thủ các tiêu chuẩn bảo mật của các Đối Tác Cổng Thanh Toán gồm:
                                Thông tin tài chính của Khách hàng sẽ được bảo vệ trong suốt quá trình giao dịch bằng giao thức SSL 256-bit (Secure Sockets Layer).
                                Mật khẩu sử dụng một lần (OTP) được gửi qua SMS để đảm bảo việc truy cập tài khoản được xác thực.
                                Các nguyên tắc và quy định bảo mật thông tin trong ngành tài chính ngân hàng theo quy định của Ngân hàng nhà nước Việt Nam.
                                Chính sách bảo mật giao dịch trong thanh toán của Slaptop áp dụng với Khách hàng:
                                <ul>
                                    <li>Thông tin thẻ thanh toán của Khách hàng mà có khả năng sử dụng để xác lập giao dịch KHÔNG được lưu trên hệ thống của Slaptop. Đối Tác Cổng Thanh Toán sẽ lưu giữ và bảo mật theo tiêu chuẩn quốc tế PCI DSS.</li>
                                    <li>Đối với thẻ nội địa (internet banking), Slaptop chỉ lưu trữ mã đơn hàng, mã giao dịch và tên ngân hàng. Slaptop cam kết đảm bảo thực hiện nghiêm túc các biện pháp bảo mật cần thiết cho mọi hoạt động thanh toán thực hiện trên trang Slaptop.</li>
                                </ul>
                            </p>
                            ',
            'refund' => '<p class="text-primary text-center"><b>QUÝ KHÁCH VUI LÒNG TÌM HIỂU KỸ HƠN QUY ĐỊNH CHI TIẾT VỀ VẤN ĐỀ ĐỔI TRẢ DƯỚI ĐÂY.</b></p>
                          <p class="text-warning">I. Cho khách hàng đổi sản phẩm đến khi nào ưng ý mới thôi. “Không để khách hàng dùng sản phẩm không ưng ý”</p>
                          <p>Với mục đích gắn kết lâu dài với khách hàng và mong muốn mang lại cho khách hàng sản phẩm ứng ý nhất. Slaptop.com.vn khuyến khích khách hàng đổi sản phẩm trong 15 ngày đầu sử dụng sản phẩm nếu cảm thấy không ứng ý hoặc không phù hợp với nhu cầu:</p>
                          <p>Việc đổi sẽ được thực hiện theo  quy định sau.</p>
                          <ul>
                                <li>Khách hàng được dữ nguyên giá trị sản phẩm trong  vòng 15 ngày đầu: </li>
                                <li>Đổi sản phẩm rẻ hơn: Shop sẽ bù phần tiền còn lại cho khách hàng.</li>
                                <li>Đổi sản phẩm lớn tiền hơn: Khách hàng bù khoản tiền còn thiếu cho shop.</li>
                                <li>Để đảm bảo quyền lợi khách hàng, tất cả sản phẩm của Slaptop đều được niêm yết giá tại website: http://slaptop.com.vn</li>
                                <li>Đối với khách hàng ở xa, khách hàng mua máy qua dịch vụ COD- Shop sẽ miễn phí toàn bộ chi phí Ship về và đi để khách hàng được đổi sản phẩm.</li>
                          </ul>
                          <p><b>Chú ý: </b>Chính sách này chỉ ap dụng trong 15 ngày đâu tiên kể từ ngày mua sản phẩm. Đối với khách hàng ở xa, thời gian  không tính thời gian ship hàng đi và đến.
                          Trường hợp máy bị lỗi do người sử dụng vì các lý do: Sản phẩm bị vô nước, chập điện cháy nổ, bị bể vỡ, bị cào cấu trầy xước, bị tác động từ bên ngoài, sản phẩm bị rách tem bảo hành,
                           mất phiếu bán hàng, bảo hành...). Shop sẽ từ chối bảo hành hoặc đổi trả theo chính sách trên đây, chính sách này chỉ áp dụng đối với sản phẩm máy cũ.
                           </p>
                           <p class="text-warning"><b>II. Cho khách hàng trả sản phẩm và lấy lại 100% Tiền</b></p>
                           <p>Không để khách hàng dùng sản phẩm lỗi, sản phẩm hỏng, hoặc dùng với tâm trạng lo lắng hay do quyết định sai. Khách hàng có quyền trả lại sản phẩm và lấy lại 100% tiền vì một trong các lý do sau:</p>
                           <ul>
                                <li>Khách hàng đổi ý muốn mua sản phẩm từ một nhà cung cấp khác, mặc dù shop và sản phẩm của shop chẳng có vấn đề gì cả.</li>
                                <li>Không thích dịch vụ và cách ứng xử của Shop, mặc dù sản phẩm tốt không có lỗi</li>
                                <li>Sản phẩm có lỗi phần cứng do lỗi sản xuất</li>
                                <li>Sản phẩm giao không đúng thông số kỹ thuật, màu sắc, chủng loại, modem</li>
                                <li>Đối với khách hàng ở xa, khách hàng mua máy qua dịch vụ COD. <b>Shop sẽ miễn phí toàn bộ chi phí ship về và đi để khách hàng được đổi sản phẩm.</b></li>
                                <li>Chính sách này chỉ áp dụng trong 03 ngày tức 72giờ kế từ khi mua sản phẩm.</li>
                           </ul>
                           <p>Nếu trường hợp này xảy ra, shop chân thành xin lỗi quý khách hàng vì đã làm mất thời gian của khách hàng mà không thực hiện được mục đích, hi vọng khách hàng thông cảm cho Shop. Shop sẽ thiện chí hết sức nhằm giúp khách hàng trả máy vui vẻ.</p>
                           <p><b><i>Chú ý: </i></b>Chính sách này chỉ ap dụng trong 03 ngày đâu tiên kể từ ngày mua sản phẩm. Đối với khách hàng ở xa, thời gian không tính thời gian ship hàng đi và đến. Trong trường hợp máy bị lỗi do người sử dụng vì các lý do: Sản phẩm bị vô nước,
                            chập điện cháy nổ, bị bể vỡ, bị cào cấu trầy xước, bị tác động từ bên ngoài, sản phẩm bị rách tem bảo hành, mất phiếu bán hàng bảo hành... shop sẽ từ chối bảo hành hoặc đổi trả theo chính sách trên đây. Chính sách này chỉ áp dụng với một số dòng máy,
                            cụ thể sẽ được quy định trên mỗi máy.
                            </p>
                            <p class="text-warning"><b>III. ĐỐI VỚI MẶT HÀNG LINH KIỆN ĐỔI HÀNG PHẢI ĐÁP ỨNG CÁC ĐIỀU KIỆN SAU:</b></p>
                            <ul>
                                <li>Còn nguyên vẹn, đầy đủ như lúc ban đầu giao cho Quý khách (bao bì và những phụ kiện kèm theo).</li>
                                <li>Bị lỗi kỹ thuật hoặc không tương thích.</li>
                                <li>Không quá 5 ngày và còn giữ phiếu mua hàng (phiếu xuất kho hoặc hóa đơn tài chính).</li>
                            </ul>
                            <p class="text-warning"><b>KHÔNG ĐỔI LẠI VỚI NHỮNG THIẾT BỊ SAU:</b></p>
                            <ul>
                                <li>Thiết bị biến dạng, trầy xước hoặc va chạm.</li>
                                <li>Thiết bị có dấu hiệu cháy nổ.</li>
                                <li>Quà tặng.</li>
                            </ul>
                            <p class="text-warning"><b>GIỜ ĐỔI / TRẢ HÀNG:</b></p>
                            <ul>
                                <li>Sáng từ 9h30 – 11h30</li>
                                <li>Chiều từ 14h30 – 16h30</li>
                                <li><b>Chủ nhật không đổi hàng.</b></li>
                            </ul>
                          ',
            'be_client' => '<h2 class="text-center">ĐỐI TÁC</h2>
                            <ul>
                                <li>Viện Công Nghệ Thông Tin T3h</li>
                            </ul>',
            'be_staff' => '<h2 class="text-center font-weight-bold">NHÂN VIÊN</h2>
                            <ul>
                                <li>PHẠM QUANG LINH</li>
                                <li>NGUYỄN VĂN DUY</li>
                                <li>NGUYỄN VĂN TÚC</li>
                                <li>ĐẶNG DUY KHANH</li>
                            </ul>',
            'created_at' => now(),
        ]);
    }
}
