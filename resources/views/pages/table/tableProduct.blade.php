@extends('pages/table/index')
@section('table')
<form action="" class="form-submit-table" method="post">
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
                <th scope="col">
                    <a href="?_sort&columns={{$item['value']}}&type=desc">
                        {{$item['title']}}
                    </a>
                </th>
                @endforeach
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataTablet as $index => $product)
            <tr style="cursor: pointer;">
                <th scope="row" style="width:40px;">
                    <input class="form-check-input checkboxId" type="checkbox" name="checkboxId[]" value="{{$product->id_sp}}">
                </th>
                <th scope="row" style="max-width: 100px;">{{++$index}}</th>
                <td style="max-width : 50px">
                    <img src="{{$product->hinh}}" style="width : 50px; height: 50px;" alt="{{$product->ten_sp}}" />
                </td>
                <td>
                    <a href="{{route('update-product-page',['id'=>$product->id_sp])}}" class="ellipsis fs-5 d-block" style="max-width: 300px; ">
                        {{$product->ten_sp}}
                    </a>
                </td>
                <td>
                    {{number_format( 0+str_replace(",","",$product->gia ?? 0)) }} VNĐ
                <td>
                    {{number_format( 0+str_replace(",","",$product->gia_km ?? 0)) }} VNĐ
                </td>
                <td>{{$product->soluotxem}}</td>
                <td>{{date("Y/m/d",strtotime($product->ngay))}}</td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="handleLickButton(event)" data-method="delete" data-url="{{route('delete-product',$product->id_sp)}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="action">
                        <i class="ti ti-trash-x fs-4"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</form>
@endsection