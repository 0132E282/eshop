<div class="tab-single">
    <div class="row">
        <div class="col-12">
            {!!$productDetails->mota!!}
            <div class="single-des">
                <table class="table" style="max-width: 400px;">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col" colspan="2">thông số sản phẩm</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($productDetails->config as $key => $value )
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$value}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>