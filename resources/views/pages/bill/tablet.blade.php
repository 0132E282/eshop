@extends('layouts.admin-default')
@section('seo')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>
@stop
@php $menuCheckStatus = [
[
'id' => 1,
'title' => 'cuẩn bị hàng hóa',
'background' => '',
],
[
'id' => 2,
'title' => 'chuẩn bị giao hàng',
'background' => 'border-warning',
],
[
'id' => 3,
'title' => 'đang giao sàng',
'background' => 'border-primary',
],
[
'id' => 4,
'title' => 'đã giao hàng',
'background' => 'border-success',
],
[
'id' => 5,
'title' => 'hủy đơn hàng',
'background' => 'border-danger',
],
] @endphp
@section('content')
<div class="bg-secondary-subtle px-2 py-3 d-flex justify-content-between ">
  @include ('includes/action/control')
</div>
<table class="table table-hover">
  <thead class="table-dark">
    <tr>
      <th scope="col">
        <input class="form-check-input" type="checkbox">
      </th>
      @foreach ($tablet as $item)
      <th scope="col">{{$item}}</th>
      @endforeach
    </tr>
  </thead>
  <tbody id="accordionExample" class="accordion">
    @foreach($billList as $index => $billItem)
    @php $qantity = 0; $sumPrice = 0 @endphp
    <tr class="accordion" style="cursor: pointer; position: relative;">
      <th scope="row" style="width:40px;">
        <input class="form-check-input" type="checkbox" value="{{$billItem->id_dh}}">
      </th>
      <td>{{$billItem->id_dh}}</td>
      <td data-bs-toggle="collapse" data-bs-target="#collapse{{$index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">{{$billItem->tennguoinhan}}</td>
      <td data-bs-toggle="collapse" data-bs-target="#collapse{{$index }}" aria-expanded="false" aria-controls="collapse{{ $index}}" style="max-width: 250px;">{{$billItem->diachigiaohang }}</td>
      <td data-bs-toggle="collapse" data-bs-target="#collapse{{$index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">{{$billItem->tinh_tp}}</td>
      <td data-bs-toggle="collapse" data-bs-target="#collapse{{$index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">{{$billItem->dienthoai }}</td>
      <td data-bs-toggle="collapse" data-bs-target="#collapse{{$index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">{{ date("Y/m/d",strtotime($billItem->created_at))}}</td>
      <td>
        <div class="dropdown">
          <div class="border border-5 rounded-circle " data-bs-toggle="dropdown" aria-expanded="false" style="width: 20px; height: 20px;"></div>
          <ul class="dropdown-menu">
            @foreach($menuCheckStatus as $item)
            <li>
              <a class="dropdown-item d-flex justify-content-start align-items-center " data-value="{{$item['id']}}">
                <span class="border border-5 rounded-circle d-inline-block me-2 {{$item['background']}}" data-bs-toggle="dropdown" aria-expanded="false" style="width: 20px; height: 20px;"></span>
                <span>{{$item['title']}}</span>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
      </td>
    </tr>
    <tr>
      <td colspan="100%" id="collapse{{ $index }}" class="accordion-collapse collapse" data-bs-parent="accordionExample">
        <div class="accordion-body d-flex">
          <table class="table me-2 mb-0">
            <thead>
              <tr>
                <th scope="col">tên sân phẩm</th>
                <th scope="col" style="text-align: center;">số lượng</th>
                <th scope="col" style="text-align: center;">tiền</th>
                <th scope="col" style="text-align: center;">tổng tiền</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              @foreach($billItem->productList as $product )
              @php $qantity +=$product->soluong; $sumPrice += ($product->soluong * $product->gia) - $product -> gia_km @endphp
              <tr data-id="{{$product->id_ct}}" onclick="handleActionDeleteProductBill(event)">
                <th style="max-width: 200px;">{{$product->ten_sp}}</th>
                <td style="text-align: center;">{{$product->soluong}}</td>
                <td style="text-align: center;">{{number_format( 0+str_replace(",","",$product->gia ?? $product->gia_km))}} VNĐ</td>
                <td style="text-align: center;">{{number_format( 0+str_replace(",","",$product->soluong * $product->gia))}} VNĐ</td>
                <td>
                  <button type="button " class="btn btn-primary action-delete" data-bs-toggle="modal" data-bs-target="#exampleModal">xóa</button>
                </td>
              </tr>
              @endforeach
              <tr class="bg-primary-subtle" data-id="{{$billItem->id_dh}}" onclick="handleActionDeleteProductBill(event)">
                <th>vận chuyển : GHTK</th>
                <td>giá Vận chuyển : 1999đ</td>
                <td>tổng số lượng : {{ $qantity}}</td>
                <td>tổng tiền : {{number_format( 0+str_replace(",","",$sumPrice))}} VNĐ</td>
                <td>
                  <button class="btn btn-primary action-delete-bill" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">xóa</button>
                  <button type="button" class="btn btn-secondary">sửa</button>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="note " style="width: 200px;">
            <textarea class="form-control" disabled placeholder="nghi chú ..." rows="3" style="width: 100%; height: 100%; resize: none;">{{$billItem->nghi_chu}}</textarea>
          </div>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<form action="" method="POST" class="form-action">
  @csrf
  <input type="hidden" name="_method" value="">
</form>

<script>
  const formData = document.querySelector('.form-action');

  function handleActionDeleteProductBill(e) {
    if (e.target.closest('.action-delete')) {
      const id = e.currentTarget.dataset.id;
      formData.action = window.location.pathname + '/delete-bill/' + id;
      formData.querySelector('input[name="_method"]').value = 'delete';
    }
    if (e.target.closest('.action-delete-bill')) {
      const id = e.currentTarget.dataset.id;
      formData.action = window.location.pathname + '/' + id;
      formData.querySelector('input[name="_method"]').value = 'delete';
    }
  }

  function handleClickForm(e) {
    formData.submit();
  }
</script>

@stop
@php
$title = 'xóa thông tin';
$message = 'bạn có muốn xóa không';
@endphp
@include('includes/modal/message')