@extends('layouts.admin-default')
@section('seo')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>
@stop
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
    @foreach($billList as $index => $item)
    @php $qantity = 0; $sumPrice = 0 @endphp

    <tr class="accordion" style="cursor: pointer; position: relative;">
      <th scope="row" style="width:40px;">
        <input class="form-check-input" type="checkbox" value="{{$item->id_dh}}">
      </th>
      <td>{{$item->id_dh}}</td>
      <td data-bs-toggle="collapse" data-bs-target="#collapse{{$index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">{{$item->tennguoinhan}}</td>
      <td data-bs-toggle="collapse" data-bs-target="#collapse{{$index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">{{$item->diachigiaohang }}</td>
      <td data-bs-toggle="collapse" data-bs-target="#collapse{{$index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">hồ chí minh</td>
      <td data-bs-toggle="collapse" data-bs-target="#collapse{{$index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">{{$item->dienthoai }}</td>
      <td data-bs-toggle="collapse" data-bs-target="#collapse{{$index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">{{$item->created_at }}</td>
      <td class="d-flex justify-content-center align-items-center">
        <div class="dropdown">
          <div class="border border-5 rounded-circle " data-bs-toggle="dropdown" aria-expanded="false" style="width: 20px; height: 20px;"></div>

          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item d-flex justify-content-start align-items-center " href="#">
                <span class="border border-5 rounded-circle d-inline-block me-2" data-bs-toggle="dropdown" aria-expanded="false" style="width: 20px; height: 20px;"></span>
                <span>chuẩn bị hàng hóa</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex justify-content-start align-items-center" href="#">
                <span class="border border-5 border-primary  rounded-circle d-inline-block  me-2" data-bs-toggle="dropdown" aria-expanded="false" style="width: 20px; height: 20px;"></span>
                <span> đang vân chuyển</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex justify-content-start align-items-center" href="#">
                <span class="border border-5 border-success  rounded-circle d-inline-block  me-2" data-bs-toggle="dropdown" aria-expanded="false" style="width: 20px; height: 20px;"></span>
                <span>đã giao</span>
              </a>
            </li>
          </ul>
        </div>
      </td>
    </tr>
    <tr>
      <td colspan="{{count($billList)}}" id="collapse{{ $index }}" class="accordion-collapse collapse" data-bs-parent="accordionExample">
        <div class="accordion-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col"><input class="form-check-input" type="checkbox" value="{{$item->id_dh}}"></th>
                <th scope="col">tên sân phẩm</th>
                <th scope="col" style="text-align: center;">số lượng</th>
                <th scope="col" style="text-align: center;">tiền</th>
                <th scope="col" style="text-align: center;">tổng tiền</th>
                <th scope="col"></th>
              </tr>
            </thead>

            <tbody>
              @foreach($item->productList as $item )
              @php $qantity +=$item->soluong; $sumPrice += ($item->soluong * $item->gia) - $item -> gia_km @endphp
              <tr data-id="{{$item->id_dh}}" onclick="handleClickForm(event)">
                <td scope="row" style="width:40px;">
                  <input class="form-check-input" type="checkbox" value="{{$item->id_dh}}">
                </td>
                <th>{{$item->ten_sp}}</th>
                <td style="text-align: center;">{{$item->soluong}}</td>
                <td style="text-align: center;">{{number_format( 0+str_replace(",","",$item->gia ?? $item->gia_km))}} VNĐ</td>
                <td style="text-align: center;">{{number_format( 0+str_replace(",","",$item->soluong * $item->gia))}} VNĐ</td>
                <td><button type="button" class="btn btn-danger action-delete">xóa</button></td>
              </tr>
              @endforeach
              <tr class="bg-primary-subtle">
                <th></th>
                <th></th>
                <th>vận chuyển : GHTK</th>
                <td>giá Vận chuyển : 1999đ</td>
                <td>tổng số lượng : {{ $qantity}}</td>
                <td>tổng tiền : {{number_format( 0+str_replace(",","",$sumPrice))}} VNĐ</td>
              </tr>
            </tbody>
          </table>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<form action="/admin/ecommerce/bill" method="POST" class="form-action">
  @csrf
  @method('delete');
</form>
@stop
<a href="" class="products-link"></a>
<script>
  const link = document.querySelector('.products-link');

  function handleProductItem(e) {
    if (!e.target.closest('.action')) {
      link.href = '/admin/products/' + e.currentTarget.dataset.id;
      link.click();
    }
  }

  function handleClickForm(e) {
    const formAction = document.querySelector('form[class="form-action"]');
    const id = e.currentTarget.dataset.id;
    if (e.target.closest('.action-delete')) {
      formAction.action = `/admin/ecommerce/bill/${id}`;
      formAction.submit();
    }

  }
</script>