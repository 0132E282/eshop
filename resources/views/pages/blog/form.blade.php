@extends('layouts.admin-default')
@section('seo')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>
@stop
@section('content')
<div class="content container-fluid">
    @if(Session::has('successfully') || Session::has('errors') )
    <div class="alert {{Session::has('successfully') ? 'alert-success' : 'alert-danger' }}" role="alert">
        {{Session::get('successfully') ?? Session::get('errors') }} <i class="bi bi-check-circle-fill"></i>
    </div>
    @endif
    <form action="{{route('create-post')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- <h1 class="px-3 fw-blob" style="font-size: 32px;">Tạo Bài post</h1> -->
        <div class="d-flex">
            <div class="container-sm">
                @include('includes/blog/forms/form-input')
            </div>
            <aside class="flex-grow-1">
                @include('includes/blog/forms/form-sidebar')
            </aside>
        </div>
    </form>

</div>
@stop
<script>
    const alert = document.querySelector('.alert');
    console.log(alert);
</script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>