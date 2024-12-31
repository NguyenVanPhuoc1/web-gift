@extends('frontend.layout.master')

@section('title', 'Chi Tiết Dịch Vụ')

@section('body')

<div class="breadCrumbs">
        <div class="wrap-content">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="text-decoration-none" href="{{url('/')}}">
                        <span>Trang chủ</span>
                    </a>
                </li>
                <li class="breadcrumb-item ">
                    <a class="text-decoration-none" href="{{url('/tin-tuc')}}">
                        <span>Dịch Vụ</span>
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a class="text-decoration-none active" >
                        <span>{{$news->news_name}}</span>
                    </a>
                </li>
            </ol>
        </div>
    </div>
    <div class="container w-clear">
        <div class="row">
            <div class="title-main">
                <span>{{$news->news_name}}</span>
            </div>
            <div class="time-main">
                <i class="fas fa-calendar-week"></i>
                <span>Ngày đăng: {{ $news->created_at ? $news->created_at->format('d/m/Y h:i A') : 'Đang Cập Nhật' }}</span>
            </div>
            @if($news->news_desc)
                <div class="alert w-100" role="alert">
                    <p>{!!htmlspecialchars_decode($news->news_desc, ENT_QUOTES)!!}</p>
                </div>
            @else
            <div class="alert alert-warning w-100" role="alert">
                <strong>Nội dung đang cập nhật</strong>
            </div>
            @endif
            <div class="share othernews mb-3">
                <b>Chính sách khác :</b>
                <ul class="list-news-other">
                    @foreach($relatedNews as $item)
                    <li><a class="text-decoration-none" href="{{route('service_detail',['slug' => $item->slug])}}">{{$item ->news_name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection