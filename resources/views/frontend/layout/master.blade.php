<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="author" content="www.frebsite.nl" />
    <meta name="viewport" content="width=device-width minimum-scale=1.0 maximum-scale=1.0 user-scalable=no" />
    <title>Shop Gift | @yield('title') </title>
    <link rel="icon" href="{{ asset($favicon) }}" type="image/x-icon">
    {{-- <link rel="shortcut icon" href="./Public/image/logo-3016.png" type="image/x-icon"> --}}

    <!-- Add the Font Awesome CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Link css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="{{ asset('front/public/css/gioithieu.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('front/public/css/carousel.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('front/public/css/styles.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('front/public/css/mmenu.css') }}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Liên kết đến tệp CSS của Slick Carousel qua CDN -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('front/public/css/magiczoomplus.css') }}">
    <script src="{{ asset('front/public/js/magiczoomplus.js') }}"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HKZMS27N37"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-HKZMS27N37');
    </script>

    @yield('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Các thẻ meta chung -->
    @yield('meta')
    </style>
</head>

<body>
    <!-- Loading -->
    <div class="loading-overlay">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- menu -->
    <nav class="menu" id="menu">
        <ul>
            <li><a href="#/">Home</a></li>
            <li>
                <span>About us</span>
                <ul>
                    <li><a href="#/">History</a></li>
                    <li>
                        <span>The team</span>
                        <ul>
                            <li>
                                <a href="#/">Management</a>
                            </li>
                            <li>
                                <a href="#/">Sales</a>
                            </li>
                            <li>
                                <a href="#/">Development</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#/">Our address</a></li>
                </ul>
            </li>
            <li><a href="#/">Contact</a></li>

            <li class="Divider">Other demos</li>
            <li><a href="advanced.html">Advanced demo</a></li>
            <li><a href="onepage.html">One page demo</a></li>
        </ul>
    </nav>
    <!--Content -->
    <div id="page">
        <div id="header">
            <div class="banner-header fixed">
                <div class="container d-flex  align-items-center banner-mobile">
                    <!-- <a class="icon-menu" href="#menu"><span></span></a> -->
                    <div class="logo">
                        <img src="{{ asset($logo) }}" alt="">
                    </div>
                    <div class="menu">
                        <ul class="menu-bar ">
                            <li id="trangchu">
                                <a href="{{ route('home') }}" class="transition">Trang chủ</a>
                            </li>
                            <li id="gioithieu">
                                <a href="{{ route('gioithieu') }}" class="transition">Giới thiệu</a>
                            </li>
                            <li class="menu-item" id="sanpham">
                                <a href="{{ route('search') }}" class="transition">sản phẩm</a>
                                <ul class="sub-menu">
                                    @foreach ($cateFe as $item)
                                        <li>
                                            <a href="{{ route('product_by_cate', ['slug' => $item->slug])  }}" class="transition">{{ $item->cate_name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li id="dichvu">
                                <a href="{{ route('get_service') }}" class="transition">dịch vụ</a>
                            </li>
                            <li id="chinhsach">
                                <a href="{{ route('get_policy') }}" class="transition">chính sách</a>
                            </li>
                            <li id="lienhe">
                                <a href="{{ route('contact') }}" class="transition">liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-res">
            <div class="menu-bar-res">
                <a id="hamburger" href="#menu" title="Menu"><span></span></a>
                <div class="box-flex flex-center align-items-center">
                    <div class="search">
                        <input class="txtsearch" type="text" id="keyword2" placeholder="Tìm kiếm"
                            onkeypress="doEnter(event,'keyword2');">
                        <p onclick="onSearch('keyword2');">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- difference here -->
        @yield('body')
        <!-- difference here -->
        <!-- difference here -->
        @yield('ggmap')
        <!-- difference here -->
        <!-- --Footer -->
        <div class="footer">
            <div class="wrap-content container">
                <div class="footer-article">
                    <div class="footer-content">
                        <p class="title-footer">Thông tin liên hệ</p>
                        <p class="title-web">SHOP GIFT</p>
                        <div class="content">
                            <p>125C Đường 14, KP. Bến Cát, P. Phước Bình, TP. Thủ Đức</p>
                            <p class="hotline">0918 077 948</p>
                            <p>pnthanh1469@gmail.com</p>
                            <p>http://voteshopvn.com/</p>
                        </div>
                    </div>

                    <div class="info-footer">
                        <p class="title-footer">Chính sách</p>
                        <ul>
                            <li><a href="chinh-sach-va-quy-dinh-chung">Chính sách và quy định chung</a></li>
                            <li><a href="tieu-chuan-va-quy-trinh">Hướng dẫn mua hàng và phương thức thanh toán</a></li>
                            <li><a href="chinh-sach-van-chuyen">Chính sách vận chuyển</a></li>
                            <li><a href="chinh-sach-doi-tra-hang-va-hoan-tien">Chính sách đổi trả hàng và hoàn tiền</a>
                            </li>
                            <li><a href="chinh-sach-bao-mat-thong-tin-ca-nhan">Chính sách bảo mật thông tin cá nhân</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-qr">
                        <p class="title-footer">Mã QR</p>
                        <a class="qr-code">
                            <img src="" alt="TTQ COFFEE">
                        </a>
                    </div>
                    <div class="footer-fanpage">
                        <p class="title-footer">FANPAGE FACEBOOK</p>
                        <div id="fanpage-facebook">
                            <!-- Fanpage -->
                            <div class="fb-page fb_iframe_widget fb_iframe_widget_fluid" data-href=""
                                data-tabs="timeline" data-width="700" data-height="200" data-small-header="true"
                                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"
                                fb-xfbml-state="rendered"
                                fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=324&amp;height=200&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ffacebookapp%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;tabs=timeline&amp;width=700">
                                <span style="vertical-align: bottom; width: 324px; height: 200px;"><iframe
                                        name="f3e8d58a2dadac" width="700px" height="200px"
                                        data-testid="fb:page Facebook Social Plugin"
                                        title="fb:page Facebook Social Plugin" frameborder="0"
                                        allowtransparency="true" allowfullscreen="true" scrolling="no"
                                        allow="encrypted-media"
                                        src="https://www.facebook.com/v2.6/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df14e38799423504%26domain%3Dvoteshopvn.com%26is_canvas%3Dfalse%26origin%3Dhttp%253A%252F%252Fvoteshopvn.com%252Ff25086322a7b5d8%26relation%3Dparent.parent&amp;container_width=324&amp;height=200&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ffacebookapp%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;tabs=timeline&amp;width=700"
                                        style="border: none; visibility: visible; width: 324px; height: 200px;"
                                        class=""></iframe></span></div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-powered">
                <div class="wrap-content box-flex align-items-center container">
                    <p class="copyright">Coppyright © 2022 <strong>TTQ COFFEE</strong>. Design by Nguyen Van Phuoc Co, Ltd</p>
                    <p class="statistic">
                        <span>Online: <strong>1</strong></span>
                        <span>Tổng truy cập: <strong>6628</strong></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="scrollToTop ">
            <img src="{{ asset('front/public/image/top.png') }}" alt="Go Top">
        </div>
        <div class="messege-facebook" id="messege-facebook">
            <!-- Chat messege -->
            <div class="messeges"></div>
            <!-- zalo -->
            <a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/0707958117">
                <div class="animate__animated animate__infinite animate__zoomIn kenit-alo-circle"></div>
                <div class="animate__animated animate__infinite animate__pulse kenit-alo-circle-fill"></div>
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
                        <path fill="#2962ff"
                            d="M15,36V6.827l-1.211-0.811C8.64,8.083,5,13.112,5,19v10c0,7.732,6.268,14,14,14h10	c4.722,0,8.883-2.348,11.417-5.931V36H15z" />
                        <path fill="#eee"
                            d="M29,5H19c-1.845,0-3.601,0.366-5.214,1.014C10.453,9.25,8,14.528,8,19	c0,6.771,0.936,10.735,3.712,14.607c0.216,0.301,0.357,0.653,0.376,1.022c0.043,0.835-0.129,2.365-1.634,3.742	c-0.162,0.148-0.059,0.419,0.16,0.428c0.942,0.041,2.843-0.014,4.797-0.877c0.557-0.246,1.191-0.203,1.729,0.083	C20.453,39.764,24.333,40,28,40c4.676,0,9.339-1.04,12.417-2.916C42.038,34.799,43,32.014,43,29V19C43,11.268,36.732,5,29,5z" />
                        <path fill="#2962ff"
                            d="M36.75,27C34.683,27,33,25.317,33,23.25s1.683-3.75,3.75-3.75s3.75,1.683,3.75,3.75	S38.817,27,36.75,27z M36.75,21c-1.24,0-2.25,1.01-2.25,2.25s1.01,2.25,2.25,2.25S39,24.49,39,23.25S37.99,21,36.75,21z" />
                        <path fill="#2962ff" d="M31.5,27h-1c-0.276,0-0.5-0.224-0.5-0.5V18h1.5V27z" />
                        <path fill="#2962ff"
                            d="M27,19.75v0.519c-0.629-0.476-1.403-0.769-2.25-0.769c-2.067,0-3.75,1.683-3.75,3.75	S22.683,27,24.75,27c0.847,0,1.621-0.293,2.25-0.769V26.5c0,0.276,0.224,0.5,0.5,0.5h1v-7.25H27z M24.75,25.5	c-1.24,0-2.25-1.01-2.25-2.25S23.51,21,24.75,21S27,22.01,27,23.25S25.99,25.5,24.75,25.5z" />
                        <path fill="#2962ff"
                            d="M21.25,18h-8v1.5h5.321L13,26h0.026c-0.163,0.211-0.276,0.463-0.276,0.75V27h7.5	c0.276,0,0.5-0.224,0.5-0.5v-1h-5.321L21,19h-0.026c0.163-0.211,0.276-0.463,0.276-0.75V18z" />
                    </svg>
                </i>
            </a>
        </div>
        <!-- mmenu scripts -->
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src =
                    'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=1609405829857841&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
        <script src="{{ asset('front/public/js/mmenu.js') }}"></script>
        <!-- Liên kết đến tệp JavaScript của Slick Carousel qua CDN -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <!-- Liên kết đến tệp -->
        <script src="{{ asset('front/public/js/gioithieu.js') }}"></script>
        <script src="{{ asset('front/public/js/slick.js') }}"></script>
        <script>
            AOS.init({
                startEvent: 'load',  
                duration: 1200,
            });
        </script>
        @yield('script')
        
</body>

</html>
