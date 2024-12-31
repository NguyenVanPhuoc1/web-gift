@extends('auth.layout.dashboard')
<!-- title -->
@section('title', 'Đăng Nhập')
<!-- nội dung -->
@section('content')
    <!-- particles.js container -->
    <div id="particles-js"></div>
    <!-- form đăng nhập -->
    <div class="form-tt py-3">
        <h4>Đăng Nhập Hệ Thống</h4>
        <form class="login" action="{{route('login.custom')}}" method="post" name="login">
            @csrf
            <div class="form-group">
                <label for="email" class="form-card-boy-label"><b>Nhập Email:</b></label>
                <div class="input-group">
                    <input type="text" name="email" id="email" class="form-control for-seo text-sm @error('email') is-invalid @enderror"
                            placeholder="Nhập email :" required >
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            
            <!-- <input type="password" name="password" placeholder="Password" /> -->
            <div class="form-group">
                <label for="password" class="form-card-boy-label"><b>mật Khẩu</b></label>
                <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control for-seo text-sm @error('password') is-invalid @enderror"
                            placeholder="Nhập mật khẩu :" required >
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <input type="submit" name="submit" value="Đăng nhập" />
        </form>
        <div class="mx-3">
            @error('attempts_left')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!-- Hiển thị Thông báo khi đăng nhập sai -->

    <script>
        $(document).ready(function() {
            // Kiểm tra xem có thông báo thành công không
    
            @if (session('success'))
                toastr.success("{{ session('success') }}");
            @endif
            @if (session('error'))
                toastr.error("{{ session('error') }}");
            @endif
        });
    </script>
@endsection