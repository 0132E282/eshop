@extends('layouts.admin-default')
@section('seo')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>
@stop
@section('content')
<div class="bg-secondary-subtle px-2 py-3 d-flex justify-content-between ">
  @include ('includes.action.control')
</div>
@if(Session::has('message_successfully'))
<div class="alert alert-primary " role="alert">
  {{Session::get('message_successfully')}}
</div>
@endif
<form class="formTablet" method="post">
  @csrf
  @method('delete')
  <table class="table table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">
          <input class="form-check-input" onchange="handleOnclickCheckbox(event)" type="checkbox">
        </th>
        <th scope="col">stt</th>
        @foreach ($tablet as $item)
        <th scope="col">{{$item}}</th>
        @endforeach
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $index => $product)
      <tr onclick="handleProductItem(event)" data-id="{{$product->id_sp}}" style="cursor: pointer;">
        <th scope="row" style="width:40px;">
          <input class="form-check-input checkboxId" name="checkboxId[]" type="checkbox" value="{{$product->id_sp}}">
        </th>
        <th scope="row">{{++$index}}</th>
        <td style="max-width : 50px">
          <img src="{{$product->hinh}}" style="width : 50px; height: 50px;" alt="{{$product->ten_sp}}" />
        </td>
        <td>
          <a href="{{route('update-product-page',['id'=>$product->id_sp])}}">
            {{$product->ten_sp}}
          </a>
        </td>
        <td>
          {{number_format( 0+str_replace(",","",$product->gia ?? 0)) }} VNĐ
        <td>
          {{number_format( 0+str_replace(",","",$product->gia_km ?? 0)) }} VNĐ
        </td>
        <td>{{$product->soluotxem}}</td>
        <td>{{$product->ngay}}</td>
        <td>
          <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal" class="action">
            <i class="ti ti-trash-x fs-4"></i>
          </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</form>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">xóa sản phẩm này</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        bạn chắc có muốn xóa không
      </div>
      <div class="modal-footer">
        <form action="" method="POST" class="action-delete">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-primary">xóa</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">hủy</button>
        </form>
      </div>
    </div>
  </div>
</div>
@stop
<a href="" class="products-link"></a>
<script src="assets/js/main.js"></script>
<script>
  const link = document.querySelector('.products-link');
  const actionForm = document.querySelector('.action-form');

  function handleProductItem(e) {
    const id = e.currentTarget.dataset.id;
    const actionDelete = document.querySelector('.action-delete');
    if (actionDelete) {
      actionDelete.action = `/admin/ecommerce/products/${id}`;
    }
  }

  function handleOnclickCheckbox(e) {
    const checkboxList = document.querySelectorAll('.checkboxId');
    checkboxList.forEach((item) => {
      item.checked = e.target.checked ? true : false;
    })
  }

  function req(
    method = 'GET',
    path = 'http://127.0.0.1:8000/admin/ecommerce/products',
    headers = ['Content-Type', 'application/json']
  ) {
    const xhr = new XMLHttpRequest();
    xhr.open(method, path, true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify(data));
  }

  function handleClickAcoinDelete() {
    const form = document.querySelector('.formTablet')
    form.action = "{{route('delete-product-list')}}";
    form.submit();
  }
</script>