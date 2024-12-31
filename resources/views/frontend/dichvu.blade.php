@extends('frontend.layout.master')

@section('title', 'Dịch Vụ')

@section('body')
<!-- Body -->
<div class="breadCrumbs">
                <div class="wrap-content">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none" href="{{url('/trang-chu')}}">
                                <span>Trang chủ</span>
                            </a>
                        </li>
                        <li class="breadcrumb-item ">
                            <a class="text-decoration-none active" href="{{url('/tin-tuc')}}">
                                <span>Dịch Vụ</span>
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrap-info wrap-content">
                <div class="container">
                    <div class="title-main">
                        <span>Dịch Vụ</span>
                    </div>
                    <div class="row">
                        @if(count($newsList) > 0 )
                            @foreach($newsList as $item)
                                <div class=" col-12 col-lg-6 ">
                                    <!-- item news -->
                                    <div class="item_news d-flex m-4">
                                        <a href="{{ route('service_detail',['slug'=>$item->slug]) }}" class="scale-img d-block col-4">
                                            <img class="d-block w-100 rounded object-fit-cover" src="{{ asset($item ->news_image)}}" alt="{{$item ->news_name}}">
                                        </a>
                                        <div class="content_news_index col-8 mx-3">
                                            <div class="name_news_index">
                                                <p class="text-split">{{$item ->news_name}}</p>
                                            </div>
                                            <div class="desc_news_index">
                                                
                                                <div class="text-split">{!! htmlspecialchars_decode($item->news_desc, ENT_QUOTES) !!}</div> 
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item news -->
                                </div>
                            @endforeach
                            <div class="pagination mx-auto">
                            {{$newsList->appends(request()->query())->links('pagination::bootstrap-4')}}
                            </div>
                        @else
                            <div class="alert alert-warning w-100 text-center" role="alert">
                                <strong>Không tìm thấy Tin Tức!</strong>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

@endsection