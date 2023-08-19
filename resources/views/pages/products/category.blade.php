@extends('layouts.admin-default')
@section('seo')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>
@stop
@section('content')
<h1>trang đang phát triển</h1>
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