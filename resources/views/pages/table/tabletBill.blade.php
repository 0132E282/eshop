@extends('pages/table/index')
@section('table')
<table class="table table-hover">
  <thead class="table-dark">
    <tr>
      <th scope="col">
        <input class="form-check-input" onchange="handleOnclickCheckbox(event)" type="checkbox">
      </th>
      @foreach ($tablet as $item)
      <th scope="col">{{$item}}</th>
      @endforeach
      @if(isset($menuCheckStatus))
      <th scope="col">{{$menuCheckStatus['title']}}</th>
      @endif
    </tr>
  </thead>
  <tbody id="accordionExample" class="accordion">
    @foreach($dataTablet as $index => $billItem)
    @php $qantity = 0; $sumPrice = 0 @endphp
    <tr class="accordion" style="cursor: pointer; position: relative;">
      <th scope="row" style="width:40px;">
        <input class="form-check-input checkboxId" type="checkbox" value="{{$billItem->id_dh}}">
      </th>
      <td>{{$billItem->id_dh}}</td>
      <td data-bs-toggle="collapse" data-bs-target="#collapse{{$index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">{{$billItem->tennguoinhan}}</td>
      <td data-bs-toggle="collapse" data-bs-target="#collapse{{$index }}" aria-expanded="false" aria-controls="collapse{{ $index}}" style="max-width: 250px;">{{$billItem->diachigiaohang }}</td>
      <td data-bs-toggle="collapse" data-bs-target="#collapse{{$index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">{{$billItem->tinh_tp}}</td>
      <td data-bs-toggle="collapse" data-bs-target="#collapse{{$index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">{{$billItem->dienthoai }}</td>
      <td data-bs-toggle="collapse" data-bs-target="#collapse{{$index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">{{date("Y/m/d",strtotime($billItem->created_at))}}</td>
      <td>
        @if(isset($menuCheckStatus))
        <div class="dropdown">
          <div class="border border-5 rounded-circle " data-bs-toggle="dropdown" aria-expanded="false" style="width: 20px; height: 20px;"></div>
          <ul class="dropdown-menu">
            @foreach($menuCheckStatus['children'] as $item)
            <li>
              <a class="dropdown-item d-flex justify-content-start align-items-center " data-value="{{$item['id']}}">
                <span class="border border-5 rounded-circle d-inline-block me-2 {{$item['background']}}" data-bs-toggle="dropdown" aria-expanded="false" style="width: 20px; height: 20px;"></span>
                <span>{{$item['title']}}</span>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
        @endif
      </td>
    </tr>
    <tr>
      <td colspan="100%" id="collapse{{ $index }}" class="accordion-collapse collapse" data-bs-parent="accordionExample">
        @if(isset($billItem->productList))
        @include('pages/table/childrenTablet')
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection