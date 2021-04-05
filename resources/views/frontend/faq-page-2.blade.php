<?php
$title = 'Câu hỏi thường gặp';
?>
@extends('layout.app')
@section('content')
    <link rel="stylesheet" href="{{asset('asset/css/faq.css')}}">
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
                <div class="card-header" id="headingEleven">
                    <p>
                        <button class="btn btn-link text-dark hover-yellow" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseElven">
                            Câu hỏi 11: Trường hợp người mua hàng có nhu cầu chuyển đổi hóa đơn sang hóa đơn giấy, người bán có thể thực hiện được không ?
                        </button>
                    </p>
                </div>
                <div id="collapseEleven" class="collapsing" aria-labelledby="headingEleven" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Trả lời:</b></p>
                        <p>Theo quy định thông tư 32/2011/TT-BTC:</p>
                        <p>+ Người bán hàng hóa được chuyển đổi hóa đơn điện tử sang hóa đơn giấy để chứng minh nguồn gốc xuất xứ hàng hoá hữu hình trong quá trình lưu thông và chỉ được chuyển đổi một (01) lần.</p>
                        <p>+ Hóa đơn điện tử chuyển đổi sang hóa đơn giấy để chứng minh nguồn gốc xuất xứ hàng hóa phải đáp ứng các quy định nêu tại Khoản 2, 3, 4 Điều 12 thông tư 32/2011/TT-BTC và phải có chữ ký người đại diện theo pháp luật của người bán, dấu của người bán.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwelve">
                    <p>
                        <button class="btn btn-link text-dark hover-yellow" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                            Câu hỏi 12: Nếu hóa đơn đã xuất, nếu có sai thì điều chỉnh như thế nào ?
                        </button>
                    </p>
                </div>
                <div id="collapseTwelve" class="collapsing" aria-labelledby="headingTwelve" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Trả lời:</b></p>
                        <p>+ Trường hợp 1: Sai sót về tên, địa chỉ nhưng đúng MST Theo thông tư 26/2015/TT-BTC “ ...các bên lậpbiên bản điều chỉnh và không phải lập hóa đơn điều chỉnh.”</p>
                        <p>+ Trường hợp 2: Sai sót khác.</p>
                        <p>Thực hiện theo quy định tại điều 9, thông tư 32/2011/TT-BTC”</p>
                        <p>1. Trường hợp hóa đơn điện tử đã lập và gửi cho người mua nhưng chưa giao hàng hóa, cung ứng dịch vụ hoặc hóa đơn điện tử đã lập và gửi cho người mua, người bán
                            và người mua chưa kê khai thuế, nếu phát hiện sai thì chỉ được hủy khi có sự đồng ý và xác nhận của người bán và người mua. Việc huỷ hóa đơn điện tử có hiệu lực
                            theo đúng thời hạn do các bên tham gia đã thoả thuận. Hóa đơn điện tử đã hủy phải được lưu trữ phục vụ việc tra cứu của cơ quan nhà nước có thẩm quyền. Người bán
                            thực hiện lập hóa đơn điện tử mới theo quy định tại Thông tư này để gửi cho người mua, trên hóa đơn điên tử mới phải có dòng chữ “hóa đơn này thay thế hóa đơn số..., ký hiệu, gửi ngày tháng năm.
                            Thực hiện theo quy định tại điều 9, thông tư 32/2011/TT-BTC”
                        </p>
                        <p>2. Trường hợp hóa đơn đã lập và gửi cho người mua, đã giao hàng hóa, cung ứng dịch vụ, người bán và người mua đã kê khai thuế, sau đó phát hiện sai sót thì người bán và người mua phải lập văn bản
                            thỏa thuận có chữ ký điện tử của cả hai bên ghi rõ sai sót, đồng thời người bán lập hoá đơn điện tử điều chỉnh sai sót. Hoá đơn điện tử lập sau ghi rõ điều chỉnh (tăng, giảm) số lượng hàng hoá, giá bán,
                            thuế suất thuế giá trị gia tăng, tiền thuế giá trị gia tăng cho hoá đơn điện tử số..., ký hiệu... Căn cứ vào hoá đơn điện tử điều chỉnh, người bán và người mua thực hiện kê khai điều chỉnh theo quy định
                            của pháp luật về quản lý thuế và hóa đơn hiện hành. Hoá đơn điều chỉnh không được ghi số âm (-).
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThirteen">
                    <p>
                        <button class="btn btn-link text-dark hover-yellow" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                            Câu hỏi 13: Cách nộp thông báo mua hàng quan mạng như thế nào ?
                        </button>
                    </p>
                </div>
                <div id="collapseThirteen" class="collapsing" aria-labelledby="headingThirteen" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Trả lời:</b></p>
                        <p><b>Bước 1:</b> Đăng ký nộp Thông báo phát hành hóa đơn qua mạng:</p>
                        <p>– Truy cập web:  nhantokhai.gdt.gov.vn (sử dụng: Internet Explorer  hoặc IE tab trên chrome) Cài java truyền thống.</p>
                        <p>– Bạn đăng nhập với mã số thuế của doanh nghiệp.</p>
                        <p>- Vào mục  “Tài khoản” chọn  “Đăng ký thêm tờ khai”:</p>
                        <p><img class="" src="{{asset('asset/img/question-page/faq-13-1.jpg')}}" alt=""></p>
                        <p>– Chú ý ở đây nhé: THẤY PHẦN MỤC LỚN THÔNG BÁO HÓA ĐƠN:  Tích chọn “Thông báo phát hành hóa đơn” nhấn nút “Tiếp tục” bên dưới.</p>
                        <p>– Sau khi đã đăng ký tờ khai xong.  </p>
                        <img class="" src="{{asset('asset/img/question-page/faq-13-2.jpg')}}" alt="">
                        <p>Bạn tiến hành Nộp Thông báo phát hành hóa đơn:</p>
                        <p>–  Vào mục “Nộp tờ khai” trên menu nằm ngang màu xanh. Đợi java load lên.</p>
                        <p>Nếu vào mục tờ khai mà báo "Đang tải thư viện xin vui lòng chờ trong giây lát" thì cách fix như sau:</p>
                        <p>nếu máy tính đã cài 1 bản duy nhất java8 hoac 6 rồi mà vẫn bị thì  tải java_fix này về:   http://smartbackup.superdata.vn/Java-Full.rar.zip=> giải nén ra  Kích đúp vào biểu tượng <b>“Fix-cks.exe”</b> : </p>
                        <img class="" src="{{asset('asset/img/question-page/faq-13-3.png')}}" alt="">
                        <p>2. Kích chọn "<b>Tiếp theo</b>"</p>
                        <img class="" src="{{asset('asset/img/question-page/faq-13-4.png')}}" alt=""><br>
                        <img class="" src="{{asset('asset/img/question-page/faq-13-5.png')}}" alt="">
                        <p>3. Kích chọn "<b>Cài đặt</b>" rồi chờ quá trình cài đặt trong vài phút để hoàn tất quá trình cài đặt phần mềm sửa lỗi đang tải thư viện :</p>
                        <img class="" src="{{asset('asset/img/question-page/faq-13-6.png')}}" alt="">
                        <p>4. Kích chọn "Kết thúc" khi hoàn tất việc cài đặt phần mềm sửa lỗi đang tải thư viện:</p>
                        <img class="" src="{{asset('asset/img/question-page/faq-13-7.png')}}" alt="">
                        <p>Sau đó màn hình sẽ tự động hiện ra cấu hình Internet Explorer để các bạn có thể chọn tệp tải tờ khai lên:</p>
                        <img class="" src="{{asset('asset/img/question-page/faq-13-8.png')}}" alt="">
                        <p><b>Như vậy là các bạn đã hoàn thành việc cài đặt Phần mềm sửa lỗi đang tải thư viện và có thể tải tờ khai lên thành công rồi.</b></p>
                        <p><b>Bước 2:</b> Nộp mẫu hóa đơn qua mạng</p>
                        <p>– Bạn SCAN mẫu hóa đơn hoặc file mẫu hóa đơn và Quyết định được sử dụng hóa đơn mà cơ quan thuế cấp cho doanh nghiệp. File word gồm mẫu hóa đơn và quyết định được sử dụng hóa đơn.</p>
                        <p>+ Sau khi các bạn đã nộp xong Thông báo phát hành hóa đơn trên trang web nhantokhai. Vào mục “Tra cứu” chọn:  TB01/AC – Thông báo phát hành hóa đơn</p>
                        <img class="" src="{{asset('asset/img/question-page/faq-13-9.jpg')}}" alt="">jpg
                        <p><b>– Đính kèm File Word vào Thông báo phát hành hóa đơn vừa nộp qua mạng:</b></p>
                        <img class="" src="{{asset('asset/img/question-page/faq-13-10.jpg')}}" alt="">
                        <p>– Chọn File Word hóa đơn mẫu để nộp nhấn nút “ký”, chữ ký số load lên nhập mã pin token và nhấn nút “Gửi”.</p>
                        <p>Chú ý: – Sau khi nộp xong thì 2 ngày sau  kiểm tra xem đã được phát hành chưa.</p>
                        <p>– Cách kiểm tra: Truy cập vào Website <a href="http://www.tracuuhoadon.gdt.gov.vn/tbphtc.html">http://www.tracuuhoadon.gdt.gov.vn/tbphtc.html</a> để xem tình hình đã được sử dụng hay chưa. Nếu các bạn thấy kết hóa đơn đã có đầy đủ thông tin (Được phép sử dụng). Nếu chưa có kết quả thì các bạn phải in bản cứng để lên nộp trực tiếp cho Cơ quan Thuế.</p>
                        <p>Từ lần thứ 2 trở đi nếu không có sự thay đổi về nội dung và hình thức hóa đơn phát hành thì không cần phải gửi kèm hóa đơn mẫu  mà chỉ cần làm thông báo phát hành hóa đơn.</p>
                        <p>Như vậy là bạn đã phát hành hoá đơn điện tử lần đầu qua mạng thành công. Để chắc chắn thông tin của bạn đã được cơ quan thuế chấp thuận. Sau 2 ngày bạn kiểm tra thông tin trên trang cổng thông tin điện tử <a href="http://www.tracuuhoadon.gdt.gov.vn/main.html">http://www.tracuuhoadon.gdt.gov.vn/main.html</a></p>
                    </div>
                </div>
            </div>
            <nav class="mt-5" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="http://localhost/slaptop/public/faq" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="http://localhost/slaptop/public/faq">1</a></li>
                    <li class="page-item"><a class="page-link" href="http://localhost/slaptop/public/faq-page-2">2</a></li>
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
