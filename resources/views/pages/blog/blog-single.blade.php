@extends('layouts.web-default')
@section('seo')

@endsection
@section('content')
<!-- Start Blog Single -->
<section class="blog-single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                @include('includes/post-single/content')
            </div>
            <div class="col-lg-4 col-12">
                @include('includes/post-single/sidebar')
            </div>
        </div>
    </div>
</section>
<!--/ End Blog Single -->
@endsection