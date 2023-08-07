@extends('layouts.web-default')
@section('seo')

@endsection
@section('content')
<div class="content " style="padding:64px 0 ;">
    <div class="container">
        <div class="row">
            <div class="col-4 mt-2">
                @include('includes/blog/card-blog')
            </div>
            <div class="col-4  mt-2">
                @include('includes/blog/card-blog')
            </div>
            <div class="col-4  mt-2">
                @include('includes/blog/card-blog')
            </div>
            <div class="col-4  mt-2">
                @include('includes/blog/card-blog')
            </div>
            <div class="col-4  mt-2">
                @include('includes/blog/card-blog')
            </div>
            <div class="col-4  mt-2">
                @include('includes/blog/card-blog')
            </div>
            <div class="col-4  mt-2">
                @include('includes/blog/card-blog')
            </div>
        </div>
    </div>
    @endsection
   