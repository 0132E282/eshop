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
    <form action="{{isset($product->id_sp) ? route('action-update-product',['id'=>$product->id_sp]) : route( 'action-create-product') }}" method="POST" class="d-flex mt-5" enctype="multipart/form-data">
        @csrf
        <div class="container-sm">
            @include('includes.products.forms.input')
        </div>
        <aside class="flex-grow-1">
            @include('includes.products.forms.formSidebar')
        </aside>
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