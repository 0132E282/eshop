@extends('layouts.admin-default')
@section('seo')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>
@stop
@section('content')
@if(isset($dataTablet) && count($dataTablet) > 0)

<div class="bg-secondary-subtle px-2 py-3 d-flex justify-content-between ">
    @include ('includes/action/control')
</div>
@if(Session::has('message_successfully'))
<div class="alert alert-primary " role="alert">
    {{Session::get('message_successfully')}}
</div>
@endif
<div>
    @yield('table')
</div>
@else
<div class="alert alert-primary rounded-0 text-center" role="alert">
    không có dữ liệu
</div>
@endif
@include('includes/modal/message',['title'=>'xoa' , 'message'=>'muon xoa khong'])

@stop
<form action="" method="POST" id="form-action">
    @csrf
    <input type="hidden" name="_method" value="">
</form>
<a class="link" href=""></a>
<script>
    const actionForm = document.querySelector('#form-action');
    const link = document.querySelector('.link');
    const dataSubmit = {};

    function handleOnclickCheckbox(e) {
        const checkboxList = document.querySelectorAll('.checkboxId');
        checkboxList.forEach((item) => {
            item.checked = e.target.checked ? true : false;
        })
    }

    function handleLickButton(e) {
        const method = e.currentTarget.dataset.method;
        const url = e.currentTarget.dataset.url;
        if (method && url) {
            actionForm.querySelector('input[name="_method"]').value = method;
            actionForm.action = url;
        }
    }

    function handleUpdate(e) {
        const selecteIsAdmin = document.querySelector('.selecteIsAdmin');
        dataSubmit[selecteIsAdmin.name] = selecteIsAdmin.value;
        dataSubmit['id'] = e.target.dataset.id;
    }

    function onClickUrl(e) {
        if (!e.target.closest('input') && !e.target.closest('select') && !e.target.closest('button')) {
            link.href = e.currentTarget.dataset.url
            link.click();
        }
    }

    function handleSubmit(e) {
        actionForm.submit();
    }
</script>