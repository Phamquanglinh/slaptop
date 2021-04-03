@extends('layout.app')
@section('content')
    <link rel="stylesheet" href="{{asset('asset/css/detail.css')}}">
    <div id="fb-root"></div>
    <div class="container pt-3 pb-5">
        <div class="slug text-primary pb-2 border-top-0 border-right-0 border-left-0 border border-primary">
            <a href="#">Laptop >></a>
            <a href="#">Laptop Gaming >> </a>
            <a href="#">LAPTOP LENOVO LEGION 5 ...</a>
        </div>
    </div>
    <div class="container bg-light p-5">
        <div class="row align-items-center">
            <div class="col-md-4 col-12">
                <div class="img box-shadow rounded">
                    <img src="https://laptoptitan.vn/wp-content/uploads/2020/08/Top-10-Laptop-Gaming-Gia-re-1.jpg"
                         class="img-fluid rounded">
                </div>
            </div>
            <div class="col-md-8 col-12">
                <div class="detail box-shadow rounded p-3">
                    <div class="h5">LAPTOP LENOVO LEGION 5 15IMH05 (82AU004XVN) GEFORCE GTX1650
                        4GB INTEL CORE I5 10300H 8GB 512GB 15.6″ 120HZ IPS RGB WIN 10
                    </div>
                    <div class="price d-flex flex-wrap align-items-center">
                        <span class="text-muted p-2">24.990.000₫</span><span class="text-primary h4">20.990.000₫</span>
                    </div>
                    <div class="input-group mb-3 flex-wrap">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-primary rounded-0" type="button"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <input type="number" class="quantity">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary rounded-0" type="button"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn btn-primary mb-2"><a href="#" class="link-style-none text-white">Thêm vào giỏ
                            hàng</a></button>
                    <button class="btn btn-success mb-2"><a href="#" class="link-style-none text-white">Mua ngay</a>
                    </button>
                </div>
            </div>
        </div>
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
                    <div class="p-3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.

                        Why do we use it?
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                        their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                        purpose (injected humour and the like).
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="p-3">
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                        words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
                        and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                        written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                        section 1.10.32.

                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                        Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced
                        in their exact original form, accompanied by English versions from the 1914 translation by H.
                        Rackham.
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="p-3">
                        The standard Lorem Ipsum passage, used since the 1500s
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

                        Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                        laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui
                        in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat
                        quo voluptas nulla pariatur?"
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 box-shadow">
            <div class="fb-comments" data-href="https://slaptop.com.vn" data-width="100%" data-numposts="10"></div>
        </div>
        <div class="mt-5">
            <div class="row">
                @for($i=1;$i<=4;$i++)
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="box-shadow bg-white rounded">
                        <a href="#" class="link-style-none box-shadow bg-white">
                            <img src="https://laptoptitan.vn/wp-content/uploads/2020/08/Top-10-Laptop-Gaming-Gia-re-1.jpg"
                                 class="img-fluid rounded">
                            <div class="p-1">
                                <div class="h6">LAPTOP LENOVO LEGION 5 ...</div>
                                <div class="text-primary h4">20.990.000₫</div>
                                <div class="text-muted">24.990.000₫</div>
                            </div>
                        </a>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
