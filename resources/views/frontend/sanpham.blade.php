@extends('frontend.layout.master')

@section('title', 'Sản Phẩm')

@section('body')
    <div class="breadCrumbs">
        <div class="wrap-content">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="text-decoration-none" href="{{ url('/') }}">
                        <span>Trang chủ</span>
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a class="text-decoration-none active" href="{{ url('/san-pham') }}">
                        <span>{{ isset($cate) ? $cate->cate_name : 'Sản Phẩm' }}</span>
                    </a>
                </li>

            </ol>
        </div>
    </div>
    <main class="my-5">
        <div class="title-main">
            <span>{{ isset($cate) ? $cate->cate_name : 'Sản Phẩm' }}</span>
        </div>
        <div class="product-list">
            <div class="container">
                <div class="row">
                    @if (count($products)>0)
                    <div class="paging-product-list paging-product-list-2">
                        <div class="grid-product ">
                        @foreach ($products as $product)
                            <div class="item-product">
                                <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="scale-img">
                                    <img class="d-block w-100 rounded object-fit-cover" src="{{ asset( $product->product_image) }}" alt="">
                                </a>
                                <div class="content text-center">
                                    <h3 class="m-0">
                                        <a href="{{ route('product_detail', ['slug' => $product->slug]) }}" class="text-split h-auto ">{{ $product->product_name }}</a>
                                    </h3>
                                    <div class="price border-top">Giá: <span style="color: aqua;">Liên Hệ</span></div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                        <!-- thanh phân trang  -->
                        <div class="pagination justify-content-center">
                            {{$products->appends(request()->query())->links('pagination::bootstrap-4')}}
                        </div>
                    @else
                        <div class="alert alert-warning w-100 text-center" role="alert">
                            <strong>Không tìm thấy sản phảm!</strong>
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </main>

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
        // Sử dụng JavaScript để điều chỉnh thuộc tính display của thẻ nav cuối cùng
        document.addEventListener("DOMContentLoaded", function() {
            const navElements = document.querySelectorAll("nav");
            if (navElements.length > 0) {
                const lastNavElement = navElements[navElements.length - 1];
                lastNavElement.style.display = "unset";
            }
        });
        var isUserLoggedIn = @json(Auth::user());
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.product-price').forEach(function(button) {
                button.addEventListener('click', function(event) {
                    if (!isUserLoggedIn) {
                        event.preventDefault();
                        alert('Bạn phải đăng nhập để mua hàng.');
                    }
                });
            });
        });
    </script>
@endsection
