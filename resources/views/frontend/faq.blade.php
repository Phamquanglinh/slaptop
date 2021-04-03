<?php
$title = 'Câu hỏi thường gặp';
?>
@extends('layout.app')
@section('content')
    <link rel="stylesheet" href="{{asset('asset/css/faq.css')}}">
    <style>

    </style>
    <div class="container-fluid">
        <div class="bg-link text-light">
            <div class="row ">
                <div class="col-md-6 p-5">
                    <h3>SLAPTOP</h3>
                    <p>
                        <img class="" src="{{asset('asset/img/question-page/bg_line_2.png')}}" alt="">
                    </p>
                    <p>Câu hỏi thường gặp</p>
                </div>
                <div class="col-md-6">
                    <span><img class="ml-5" src="{{asset('asset/img/question-page/4.png')}}" alt=""></span>
                </div>
            </div>
        </div>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <p>
                        <button class="btn btn-link text-dark hover-yellow" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Câu hỏi 1: Hóa đơn điện là gì ?
                        </button>
                    </p>
                </div>
                <div id="collapseOne" class="collapsing" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Trả lời:</b></p>
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
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <p>
                        <button class="btn btn-link text-dark" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Câu hỏi 2: Hóa đơn điện Tử Có Mấy Liên ?
                        </button>
                    </p>
                </div>
                <div id="collapseTwo" class="collapsing" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Trả lời:</b></p>
                        <p>Hóa đơn điện tử không có khái niệm liên, và chỉ có 1 bản duy nhất.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <p>
                        <button class="btn btn-link text-dark" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Câu hỏi 3: Những Lợi Ích Của Hóa Đơn Điện Tử ?
                        </button>
                    </p>
                </div>
                <div id="collapseThree" class="collapsing" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Trả lời:</b></p>
                        <ul>
                            <li>- Không tốn chi phí dành cho in ấn như hóa đơn giấy.</li>
                            <li>- Hạn chế rủi ro nguy cơ thất lạc hóa đơn trong quá trình vận chuyển đến người nhận.</li>
                            <li>- Không tốn không gia để lưu trữ bảo quản.</li>
                            <li>- Không cần phải báo cáo tình hình sử dụng hóa đơn.</li>
                            <li>- Tinh gọn về thủ tục giấy tờ, giảm thiểu những công đoạn rườm rà, tiết kiệm thời gian và chi phí một cách tối ưu nhất.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <p>
                        <button class="btn btn-link text-dark" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Câu hỏi 4: Hóa Đơn Điện Tử Có Đang Sử Dụng Song Ngữ ?
                        </button>
                    </p>
                </div>
                <div id="collapseFour" class="collapsing" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Trả lời:</b></p>
                        <p>Có</p>
                        <p>Trường hợp cần ghi thêm tiếng nước ngoài thì tiếng nước ngoài được đặt bên phải trong ngoặc đơn ( ) hoặc đặt ngay dưới dòng tiếng Việt và có cỡ nhỏ hơn chữ tiếng Việt.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <p>
                        <button class="btn btn-link text-dark" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                            Câu hỏi 5: Trường Hợp Mất Hóa Đơn Chuyển Đổi, Có Bị Phạt Hay Không? Phải Làm Gì Trong Vận Chuyển Hàng Trong Trường Hợp Này ?
                        </button>
                    </p>
                </div>
                <div id="collapseFive" class="collapsing" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Trả lời:</b></p>
                        <p>+ Không bị phạt.</p>
                        <p>+ Có thể sử dụng hóa đơn điện tử bằng file thay thế để cung cấp cho cơ quan chức năng ( bao gồm ứng dụng đọc file)</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSix">
                    <p>
                        <button class="btn btn-link text-dark" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            Câu hỏi 6: Phần mềm của tổ chức trung gian cung cấp giải pháp hóa đơn điện tử có thể kết nối từ phần mềm kế toán của doanh nghiệp không?
                        </button>
                    </p>
                </div>
                <div id="collapseSix" class="collapsing" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Trả lời:</b></p>
                        <p>Tùy vào tình hình cụ thể của doanh nghiệp, tổ chức trung gian cung cấp giải pháp hóa đơn điện tử có thể cung cấp các giải pháp tích hợp với bất kỳ hệ thống kế toán nào của doanh nghiệp.Không phải nhập lại dữ liệu.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSeven">
                    <p>
                        <button class="btn btn-link text-dark" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                            Câu hỏi 7: Doanh nghiệp có thể sử dụng chung chữ ký số(CKS) với khai thuế qua mạng, nộp thuế điện tử hay không? Có sử dụng chữ ký của nhà cung cấp Chữ ký số khác được không?
                        </button>
                    </p>
                </div>
                <div id="collapseSeven" class="collapsing" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Trả lời:</b></p>
                        <p>- Có thể dùng chung CKS với các dịch vụ khác.</p>
                        <p>- Có thể sử dụng CKS số của nhà cung cấp khác.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingEigth">
                    <p>
                        <button class="btn btn-link text-dark" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                            Câu hỏi 8: Có bắt buộc có CKS của người mua trên hóa đơn điện ?
                        </button>
                    </p>
                </div>
                <div id="collapseEight" class="collapsing" aria-labelledby="headingEight" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Trả lời:</b></p>
                        <p>Trường hợp người bán có số lượng hóa đơn lớn và muốn đề nghị được miễn tiêu thức chữ ký người mua trên hóa đơn điện tử thì gửi văn bản đề nghị đến cơ quan thuế quản lý trực tiếp để được xem xét từng trường hợp phát sinh cụ thể ( theo công văn 2402/BTC-TCT ngày 23/02/2016)</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingNine">
                    <p>
                        <button class="btn btn-link text-dark" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                            Câu hỏi 9: Có thể xuất hóa đơn điẹne lùi ngày ? Xuất nhảy số
                        </button>
                    </p>
                </div>
                <div id="collapseNine" class="collapsing" aria-labelledby="headingNine" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Trả lời:</b></p>
                        <p>Căn cứ thông tư 39/2014/TT-BTC mục a, khoản 2, điều 16</p>
                        <p>+ Ngày lập hóa đơn đối với bán hàng hóa là thời điểm chuyển giao quyền sở hữu hoặc quyền sử dụng hàng hóa cho người mua, không phân biệt đã thu được tiền hay chưa thu được tiền.</p>
                        <p>+ Ngày lập hóa đơn đối với cung ứng dịch vụ là ngày hoàn thành việc cung ứng dịch vụ, không phân biệt đã thu được tiền hay chưa thu được tiền. Trường hợp tổ chức cung ứng dịch vụ thực hiện thu tiền trước hoặc trong khi cung ứng dịch vụ thì ngày lập hóa đơn là ngày thu tiền.</p>
                        <p>+ Ngày lập hóa đơn đối với hoạt động cung cấp điện sinh hoạt, nước sinh hoạt, dịch vụ viễn thông, dịch vụ truyền hình thực hiện chậm nhất không quá bảy (7) ngày kế tiếp kể từ ngày ghi chỉ số điện, nước tiêu thụ trên đồng hồ hoặc ngày kết thúc kỳ quy ước đối với việc cung cấp dịch vụ viễn thông, truyền hình. Kỳ quy ước để làm căn cứ tính lượng hàng hóa, dịch vụ cung cấp căn cứ thỏa thuận giữa đơn vị cung cấp dịch vụ viễn thông, truyền hình với người mua.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTen">
                    <p>
                        <button class="btn btn-link text-dark" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                            Câu hỏi 10: Doanh nghiệp cần chuẩn bị gì khi đăng ký sử dụng hóa đơn điện tử ?
                        </button>
                    </p>
                </div>
                <div id="collapseTen" class="collapsing" aria-labelledby="headingTen" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Trả lời:</b></p>
                        <p>1.Doanh nghiệp có thể sử dụng một trong hai hình thức: tự xây dựng phần mềm hoặc thông qua nhà cung cấp dịch vụ trung gian.</p>
                        <p>2. Doanh nghiệp phải đáp ứng theo yêu cầu thông tư 32/2011/2011 về điều kiện khởi tạo hóa đơn điện tử.</p>
                        <p>3. Sau khi đáp ứng điều kiện khởi tạo HĐĐT, doanh nghiệp:</p>
                        <ul>
                            <li>Ra quyết định áp dụng Hóa đơn điện tử , gửi cho CQT.</li>
                            <li>Thực hiện thông báo phát hành Hóa đơn điện tử theo quy định.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="mt-5" aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
