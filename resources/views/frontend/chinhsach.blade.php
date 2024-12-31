@extends('frontend.layout.master')

@section('title', 'Chính Sách')

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
                    <a class="text-decoration-none active" href="{{url('/chinh-sach')}}">
                        <span>Chính Sách</span>
                    </a>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrap-info wrap-content mt-5 mb-5">
        <div class="container">
            <div class="title-main">
                <span>Chính Sách</span>
            </div>
            <div class="row">
                @if(count($policyList) > 0 )
                    @foreach($policyList as $item)
                        <div class=" col-12 col-lg-6 ">
                            <!-- item news -->
                            <div class="item_news d-flex m-4">
                                <a href="{{ route('policy_detail',['slug'=>$item->slug]) }}" class="scale-img d-block col-4">
                                    <img class="d-block w-100 rounded object-fit-cover" src="{{ asset($item ->poli_image)}}" alt="{{$item ->poli_name}}">
                                </a>
                                <div class="content_news_index col-8 mx-3">
                                    <div class="name_news_index">
                                        <p class="text-split">{{$item ->poli_name}}</p>
                                    </div>
                                    <div class="desc_news_index">
                                        
                                        <div class="text-split">{!! htmlspecialchars_decode($item->poli_desc, ENT_QUOTES) !!}</div> 
                                    </div>
                                </div>
                            </div>
                            <!-- item news -->
                        </div>
                    @endforeach
                    <div class="pagination mx-auto">
                    {{$policyList->appends(request()->query())->links('pagination::bootstrap-4')}}
                    </div>
                @else
                    <div class="alert alert-warning w-100 text-center" role="alert">
                        <strong>Không tìm thấy Chính Sách!</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection