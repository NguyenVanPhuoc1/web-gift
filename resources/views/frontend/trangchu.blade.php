@extends('frontend.layout.master')

@section('title', 'Trang Chủ')

@section('body')
    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="{{ asset('front/public/image/slider1.jpg')}}">
                <div class="content">
                    <div class="title">DESIGN SLIDER</div>
                    <div class="topic">ANIMAL</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('front/public/image/slider2.jpg')}}">
                <div class="content">
                    <div class="title">DESIGN SLIDER</div>
                    <div class="topic">ANIMAL</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('front/public/image/slider3.jpg')}}">
                <div class="content">
                    <div class="title">DESIGN SLIDER</div>
                    <div class="topic">ANIMAL</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('front/public/image/slider4.jpg')}}">
                <div class="content">
                    <div class="title">DESIGN SLIDER</div>
                    <div class="topic">ANIMAL</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="{{ asset('front/public/image/slider1.jpg')}}">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('front/public/image/slider3.jpg')}}">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('front/public/image/slider3.jpg')}}">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('front/public/image/slider4.jpg')}}">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>
    <div class="wrap-index">
        <!-- wrap-about -->
        <div class="wrap-about">
            <div class="container">
                <div class="wrap-content">
                    <div class="title-about">
                        <p>giới thiệu</p>
                        <h2></h2>
                    </div>
                    <div class="desc-about" data-aos="fade-up-right">
                        <p>
                            <span>
                                Công ty sản xuất và kinh doanh quà Tết chuyên cung cấp các set quà Tết cao cấp, 
                                kết hợp từ các sản phẩm hạt điều và cà phê chất lượng. Với công nghệ tiên tiến và quy trình sản xuất 
                                hiện đại, công ty tạo ra những món quà ý nghĩa, sang trọng, đáp ứng nhu cầu biếu tặng trong dịp Tết. 
                            </span>
                        </p>
                        <p>
                            <span>
                                Mỗi set quà được thiết kế tinh tế, không chỉ mang giá trị dinh dưỡng mà còn thể hiện sự trân trọng
                                và lời chúc tốt đẹp dành cho người nhận.
                            </span>
                        </p>
                        <a href="{{ route('gioithieu') }}" class="readmore btn ">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- wrap-product__hot -->
        <div class="wrap-product__hot" data-aos="fade-up">
            <div class="container ">
                <div class="wrap-product__content">
                    <div class="title-h2 text-center">
                        <h2 class="text-capitalize">Sản phẩm mới ra mắt</h2>
                    </div>
                    <div class="paging-product-list paging-product-list-2">
                        <div class="grid-product ">
                            @if(count($productNew) > 0)
                                @foreach ($productNew as $product)                     
                                    <!-- product bán chạy -->
                                    <div class="item-product">
                                        <a href="" class="scale-img">
                                            <img src="{{ asset( $product->product_image) }}" alt="">
                                        </a>
                                        <div class="content text-center">
                                            <h3 class="m-0">
                                                <a href="" class="text-split h-auto ">{{ $product->product_name }}</a>
                                            </h3>
                                            <div class="price border-top">Giá: <span style="color: aqua;">Liên Hệ</span></div>
                                        </div>
                                    </div>
                                    <!-- product -->
                                @endforeach
                            @else
                                <div class="alert alert-warning w-100 text-center" role="alert">
                                    <strong>Không tìm thấy sản phẩm!</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wrap-product__hot -->
        <!-- slick-banner -->
        <div class="slick-banner">
            <div class="polite">
                <div class="slick-track">
                    <a href="" target="_blank" title="Quảng Cáo" >
                        <img src="{{ asset('front/public/image/quangcao-2.jpg')}}" alt="Quảng Cáo">
                    </a>
                </div>
            </div>
        </div>
        <!-- slick-banner -->
        <!-- wrap-product-list -->
        <div class="wrap-product-list">
            <div class="box-product">
                <div class="container ">
                    @foreach ($productList as $category => $products)
                    <div class="wrap-product__content py-4" data-aos="fade-up">
                        <div class="title-h2 text-center">
                            <h2 class="text-capitalize">{{ $category }}</h2>
                        </div>
                        <div class="paging-product-list paging-product-list-2">
                            <div class="grid-product ">
                                @if(count($products)>0)
                                    @foreach ($products as $product)
                                    <!-- product bán chạy -->
                                    <div class="item-product">
                                        <a href="" class="scale-img">
                                            <img src="{{ asset( $product->product_image) }}" alt="">
                                        </a>
                                        <div class="content text-center">
                                            <h3 class="m-0">
                                                <a href="" class="text-split h-auto ">{{ $product->product_name }}</a>
                                            </h3>
                                            <div class="price border-top">Giá: <span style="color: aqua;">Liên Hệ</span></div>
                                        </div>
                                    </div>
                                    <!-- product -->
                                    @endforeach
                                @else
                                    <div class="alert alert-warning w-100 text-center" role="alert">
                                        <strong>Không tìm thấy sản phảm!</strong>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- wrap-product-list -->
        <!-- tin tức và sự kiện -->
        <div class="wrap-news">
            <div class="container ">
                <div class="wrap-product__content slick-list">
                    <div class="title-h2 text-center">
                        <h2>Chính Sách & Dịch Vụ</h2>
                    </div>
                    <div class="slick-slider news-list">
                        @foreach ($combinedList as $item)               
                            <!-- chính sách và dịch vụ -->
                            <div class="item-news slick-slide">
                                <!-- Kiểm tra nếu là chính sách -->
                                @if (isset($item->poli_name))
                                    <a href="{{ route('policy_detail', ['slug' => $item->slug]) }}" class="scale-img transition">
                                        <img src="{{ asset($item->poli_image) }}" alt="">
                                    </a>
                                    <div class="content text-center">
                                        <div class="date">
                                            {{ \Carbon\Carbon::parse($item->created_at)->day }} <p>{{ \Carbon\Carbon::parse($item->created_at)->month }}</p>
                                        </div>
                                        <div class="box-title__news">
                                            <h3>
                                                <a href="{{ route('policy_detail', ['slug' => $item->slug]) }}" class="text-split">{{ $item->poli_name }}</a>
                                            </h3>
                                            <div class="text-split">
                                                {!! htmlspecialchars_decode($item->poli_desc, ENT_QUOTES) !!}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <!-- Nếu không phải chính sách, thì là dịch vụ -->
                                    <a href="{{ route('service_detail', ['slug' => $item->slug]) }}" class="scale-img transition">
                                        <img src="{{ asset($item->news_image) }}" alt="">
                                    </a>
                                    <div class="content text-center">
                                        <div class="date">
                                            {{ \Carbon\Carbon::parse($item->created_at)->day }} <p>{{ \Carbon\Carbon::parse($item->created_at)->month }}</p>
                                        </div>
                                        <div class="box-title__news">
                                            <h3>
                                                <a href="{{ route('service_detail', ['slug' => $item->slug]) }}" class="text-split">{{ $item->news_name }}</a>
                                            </h3>
                                            <div class="text-split">
                                                {!! htmlspecialchars_decode($item->news_desc, ENT_QUOTES) !!}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <!-- chính sách và dịch vụ -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter -->
        <div class="wrap-newsleter">
            <div class="wrap-content container">
                <div class="box-newsleter">
                    <div class="title-newsleter">
                        <h2>Đăng ký nhận tin</h2>
                        <p>Nhập thông tin của bạn để nhận tin mới nhất</p>
                    </div>
                    <form id="FormNewsletter" class="form-newsletter validation-newsletter" novalidate="" method="post" action="{{ route('regis-customer') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="newsletter-input">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="newsletter-button">
                            <input type="hidden" name="submit-newsletter" value="submit-newsletter">
                            <input type="submit" name="submit-newsletter" value="Gửi">
                            <input type="hidden" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                        </div>
                    </form>
                    <div class="social-newsletter">
                        <a class="hvr-rotate-y" href="" target="_blank">
                            <img src="{{ asset('front/public/image/fb.png')}}" alt="mxh1">
                        </a>
                        <a class="hvr-rotate-y" href="" target="_blank">
                            <img src="{{ asset('front/public/image/switter.png')}}" alt="mxh2">
                        </a>
                        <a class="hvr-rotate-y" href="" target="_blank">
                            <img src="{{ asset('front/public/image/youtube.png')}}" alt="mxh3">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('ggmap')
    <!-- Footer map -->
    <div class="footer-map" id="footer-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3918.4749787803385!2d106.7580641!3d10.8514325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752797e321f8e9%3A0xb3ff69197b10ec4f!2zVHLGsOG7nW5nIGNhbyDEkeG6s25nIEPDtG5nIG5naOG7hyBUaOG7pyDEkOG7qWM!5e0!3m2!1svi!2s!4v1691219936543!5m2!1svi!2s"
            width="600" height="450" style="border:0;width: 100vw;  " allowfullscreen="true" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            @if (session('success'))
                toastr.success("{{ session('success') }}");
            @endif
            
            @if (session('error'))
                alert("{{ session('error') }}");
            @endif
        });

    </script>
    <script src="{{ asset('front/public/js/app.js') }}"></script>
    <script src="{{ asset('front/public/js/typewriter.js') }}"></script>
@endsection


