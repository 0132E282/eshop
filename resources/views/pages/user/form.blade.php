@extends('layouts.admin-default')
@section('seo')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>
@stop
@section('content')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{Session::get('success')}}
</div>
@endif
<div class="container">

    <form action="{{isset($user->id) ? route('update-user',$user->id) : route('add-user')}}" method="POST">
        @csrf
        @if(isset($user->id))
        @method('PUT')
        @endif
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">avatar</label>
            <div class="input-group" style="width: 100px; height: 100px;">
                <img src="{{$user->avatar ?? 'https://www.tenforums.com/geek/gars/images/2/types/thumb_15951118880user.png'}}" class="img-thumbnail" alt="...">
                <input type="file" value="{{$user->avatar ?? ''}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="username" class="col-sm-2 col-form-label">tên người dùng</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="username" value="{{$user->name ?? old('name')}}">
                @error('name') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputEmail3" value="{{$user->email ?? old('email')}}" {{isset($user->isAdmin) ? 'disabled' : '' }}>
                @error('email') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
            </div>
        </div>
        @if(!$user)
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">mật khẩu</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="password">
                @error('password') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
            </div>
        </div>
        @endif
        <div class="row mb-3">
            <label for="selectAdmin" class="col-sm-2 col-form-label">quyền truy cập</label>
            <div class="col-sm-10">
                <select class="form-select " name="isAdmin">
                    @foreach($administrationList as $item)
                    <option value="{{$item['id']}}" {{isset($user->isAdmin) && $user->isAdmin=== $item['id'] ? 'selected' : ''}}>{{$item['title']}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="selectAdmin" class="col-sm-2 col-form-label">hành động</label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary"> {{isset($user->isAdmin) ? 'thây đổi' :'tạo tài tài khoản'}}</button>
                @if(isset($user->isAdmin))
                <button type="submit" class="btn btn-primary"> xóa tài khoản</button>
                <button type="submit" class="btn btn-primary"> khóa tài khoản</button>
                @endif
            </div>
        </div>
    </form>
</div>
@stop