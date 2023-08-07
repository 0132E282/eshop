@extends('layouts/auth')
@section('content')

<div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
                <div class="card mb-0">
                    <div class="card-body">
                        <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                        </a>
                        <p class="text-center">Your Social Campaigns</p>
                        <form action="/admin/register" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputtext1" class="form-label">tên người dùng</label>
                                <input type="text" value="{{old('name')}}" name="name" class="form-control {{$errors->has('email') ? 'border border-danger':'' }}" id="exampleInputtext1" aria-describedby="textHelp">
                                @error('name') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">địa chỉ email</label>
                                <input type="email" value="{{old('email')}}" name="email" class="form-control {{$errors->has('email') ? 'border border-danger':'' }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('email') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">mật khẩu</label>
                                <input type="password" value="{{old('password')}}" name="password" class="form-control {{$errors->has('email') ? 'border border-danger':'' }}" id="exampleInputPassword1">
                                @error('password') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">tạo tài khoản</button>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="fs-4 mb-0 fw-bold">đã có ký tài khoản</p>
                                <a class="text-primary fw-bold ms-2" href="{{route('login-page')}}">đăng nhập</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection