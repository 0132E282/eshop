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
            @foreach($billItem->productList as $item)
            @php $qantity +=$item->soluong; $sumPrice += ($item->soluong * $item->gia) - $item -> gia_km @endphp
            <tr>
                <th style="max-width: 200px;">{{$item->ten_sp}}</th>
                <td style="text-align: center;">{{$item->soluong}}</td>
                <td style="text-align: center;">{{number_format( 0+str_replace(",","",$item->gia ?? $item->gia_km))}} VNĐ</td>
                <td style="text-align: center;">{{number_format( 0+str_replace(",","",$item->soluong * $item->gia))}} VNĐ</td>
                <td>
                    <button type="button" data-method="delete" data-url="{{route('delete-product-bill',$item->id_ct)}}" onclick=" handleLickButton(event)" class="btn btn-primary action-delete" data-bs-toggle="modal" data-bs-target="#exampleModal">xóa</button>
                </td>
            </tr>
            @endforeach
            <tr class="bg-primary-subtle" data-id="{{$billItem->id_dh}}">
                <th>vận chuyển : GHTK</th>
                <td>giá Vận chuyển : 1999đ</td>
                <td>tổng số lượng : {{ $qantity}}</td>
                <td>tổng tiền : {{number_format( 0+str_replace(",","",$sumPrice))}} VNĐ</td>
                <td>
                    <button class="btn btn-primary action-delete-bill" data-method="delete" data-url="{{route('delete-bill',$billItem->id_dh)}}" onclick=" handleLickButton(event)" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">xóa</button>
                    <button type="button" class="btn btn-secondary">sửa</button>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="note " style="width: 200px;">
        <textarea class="form-control" disabled placeholder="nghi chú ..." rows="3" style="width: 100%; height: 100%; resize: none;">{{$billItem->nghi_chu}}</textarea>
    </div>
</div>