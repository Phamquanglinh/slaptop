<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FaqSeeder extends Seeder
{
    public function run()
    {
        DB::table('faqs')->insert([
            'question' => 'Hóa đơn điện là gì ?',
            'answer' =>
                '
                    <p>
                            Hoá đơn điện tử là tập hợp các thông điệp dữ liệu điện tử về bán hàng hoá, cung ứng dịch vụ, được khởi tạo, lập, gửi, nhận, lưu trữ và quản lý bằng phương tiện điện tử. Hóa đơn điện tử phải đáp ứng các nội dung quy định tại Điều 6 Thông tư này.<br>
                            Hoá đơn điện tử được khởi tạo, lập, xử lý trên hệ thống máy tính của tổ chức đã được cấp mã số thuế khi bán hàng hoá, dịch vụ và được lưu trữ trên máy tính của các bên theo quy định của pháp luật về giao dịch điện tử.<br>
                            Hóa đơn điện tử gồm các loại: hóa đơn xuất khẩu; hóa đơn giá trị gia tăng; hóa đơn bán hàng; hoá đơn khác gồm: tem, vé, thẻ, phiếu thu tiền bảo hiểm...; phiếu thu tiền cước vận chuyển hàng không, chứng từ thu cước phí vận tải quốc tế, chứng từ thu phí dịch vụ ngân hàng..., hình thức và nội dung được lập theo thông lệ quốc tế và các quy định của pháp luật có liên quan.<br>
                            Hóa đơn điện tử đảm bảo nguyên tắc: xác định được số hóa đơn theo nguyên tắc liên tục và trình tự thời gian, mỗi số hóa đơn đảm bảo chỉ được lập và sử dụng một lần duy nhất.<br>
                            Hóa đơn đã lập dưới dạng giấy nhưng được xử lý, truyền hoặc lưu trữ bằng phương tiện điện tử không phải là hóa đơn điện tử.<br>
                            Hóa đơn điện tử có giá trị pháp lý nếu thỏa mãn đồng thời các điều kiện sau:<br>
                        <ul>
                            <li>
                                Có sự đảm bảo đủ tin cậy về tính toàn vẹn của thông tin chứa trong hóa đơn điện tử từ khi thông tin được tạo ra ở dạng cuối cùng là hóa đơn điện tử. Tiêu chí đánh giá tính toàn vẹn là thông tin còn đầy đủ và chưa bị thay đổi, ngoài những thay đổi về hình thức phát sinh trong quá trình trao đổi, lưu trữ hoặc hiển thị hóa đơn điện tử.
                            </li>
                            <li>
                                Thông tin chứa trong hóa đơn điện tử có thể truy cập, sử dụng được dưới dạng hoàn chỉnh khi cần thiết.
                            </li>
                        </ul>
                ',
            'created_at' => now(),
        ]);
        DB::table('faqs')->insert([
            'question' => 'Hóa đơn điện Tử Có Mấy Liên ?',
            'answer' => 'Hóa đơn điện tử không có khái niệm liên, và chỉ có 1 bản duy nhất.',
            'created_at' => now(),
        ]);
        DB::table('faqs')->insert([
            'question' => 'Những Lợi Ích Của Hóa Đơn Điện Tử ?',
            'answer' => '<ul>
                            <li> Không tốn chi phí dành cho in ấn như hóa đơn giấy.</li>
                            <li> Hạn chế rủi ro nguy cơ thất lạc hóa đơn trong quá trình vận chuyển đến người nhận.</li>
                            <li> Không tốn không gia để lưu trữ bảo quản.</li>
                            <li> Không cần phải báo cáo tình hình sử dụng hóa đơn.</li>
                            <li> Tinh gọn về thủ tục giấy tờ, giảm thiểu những công đoạn rườm rà, tiết kiệm thời gian và chi phí một cách tối ưu nhất.</li>
                        </ul>',
            'created_at' => now(),
        ]);
        DB::table('faqs')->insert([
            'question' => 'Hóa Đơn Điện Tử Có Đang Sử Dụng Song Ngữ ?',
            'answer' => '<p>- Có</p>
                         <p>- Trường hợp cần ghi thêm tiếng nước ngoài thì tiếng nước ngoài được đặt bên phải trong ngoặc đơn ( ) hoặc đặt ngay dưới dòng tiếng Việt và có cỡ nhỏ hơn chữ tiếng Việt.</p>',
            'created_at' => now(),
        ]);
        DB::table('faqs')->insert([
            'question' => 'Trường Hợp Mất Hóa Đơn Chuyển Đổi, Có Bị Phạt Hay Không? Phải Làm Gì Trong Vận Chuyển Hàng Trong Trường Hợp Này ?',
            'answer' => '<p>+ Không bị phạt.</p>
                         <p>+ Có thể sử dụng hóa đơn điện tử bằng file thay thế để cung cấp cho cơ quan chức năng ( bao gồm ứng dụng đọc file)</p>',
            'created_at' => now(),
        ]);
        DB::table('faqs')->insert([
            'question' => 'Phần mềm của tổ chức cung cấp giải pháp hóa đơn điện tử có thể kết nối từ phần mềm kế toán của doanh nghiệp không?',
            'answer' => '<p>Tùy vào tình hình cụ thể của doanh nghiệp, tổ chức cung cấp giải pháp hóa đơn điện tử có thể cung cấp các giải pháp tích hợp với bất kỳ hệ thống kế toán nào của doanh nghiệp.Không phải nhập lại dữ liệu.</p>',
            'created_at' => now(),
        ]);
        DB::table('faqs')->insert([
            'question' => 'Nếu hóa đơn đã xuất có sai sót có được điều chỉnh không ?',
            'answer' => 'Có thể dùng chung CKS với các dịch vụ khác.',
            'created_at' => now(),
        ]);
        DB::table('faqs')->insert([
            'question' => 'Có bắt buộc có CKS của người mua trên hóa đơn điện ?',
            'answer' => 'Trường hợp người bán có số lượng hóa đơn lớn và muốn đề nghị được miễn tiêu thức chữ ký người mua trên hóa đơn điện tử thì gửi văn bản đề nghị đến cơ quan thuế quản lý trực tiếp để được xem xét từng trường hợp phát sinh cụ thể ( theo công văn 2402/BTC-TCT ngày 23/02/2016)',
            'created_at' => now(),
        ]);
        DB::table('faqs')->insert([
            'question' => 'Có thể xuất hóa đơn điện lùi ngày ? Xuất nhảy số ?',
            'answer' => '<p>Căn cứ thông tư 39/2014/TT-BTC mục a, khoản 2, điều 16</p>
                         <p>+ Ngày lập hóa đơn đối với bán hàng hóa là thời điểm chuyển giao quyền sở hữu hoặc quyền sử dụng hàng hóa cho người mua, không phân biệt đã thu được tiền hay chưa thu được tiền.</p>
                         <p>+ Ngày lập hóa đơn đối với cung ứng dịch vụ là ngày hoàn thành việc cung ứng dịch vụ, không phân biệt đã thu được tiền hay chưa thu được tiền. Trường hợp tổ chức cung ứng dịch vụ thực hiện thu tiền trước hoặc trong khi cung ứng dịch vụ thì ngày lập hóa đơn là ngày thu tiền.</p>
                         <p>+ Ngày lập hóa đơn đối với hoạt động cung cấp điện sinh hoạt, nước sinh hoạt, dịch vụ viễn thông, dịch vụ truyền hình thực hiện chậm nhất không quá bảy (7) ngày kế tiếp kể từ ngày ghi chỉ số điện, nước tiêu thụ trên đồng hồ hoặc ngày kết thúc kỳ quy ước đối với việc cung cấp dịch vụ viễn thông, truyền hình. Kỳ quy ước để làm căn cứ tính lượng hàng hóa, dịch vụ cung cấp căn cứ thỏa thuận giữa đơn vị cung cấp dịch vụ viễn thông, truyền hình với người mua.</p>',
            'created_at' => now(),
        ]);
        DB::table('faqs')->insert([
            'question' => 'Doanh nghiệp cần chuẩn bị gì khi đăng ký sử dụng hóa đơn điện tử ?',
            'answer' => '<p>1.Doanh nghiệp có thể sử dụng một trong hai hình thức: tự xây dựng phần mềm hoặc thông qua nhà cung cấp dịch vụ trung gian.</p>
                         <p>2. Doanh nghiệp phải đáp ứng theo yêu cầu thông tư 32/2011/2011 về điều kiện khởi tạo hóa đơn điện tử.</p>
                         <p>3. Sau khi đáp ứng điều kiện khởi tạo HĐĐT, doanh nghiệp:</p>
                         <ul>
                            <li>Ra quyết định áp dụng Hóa đơn điện tử , gửi cho CQT.</li>
                            <li>Thực hiện thông báo phát hành Hóa đơn điện tử theo quy định.</li>
                         </ul>',
            'created_at' => now(),
        ]);
    }
}
