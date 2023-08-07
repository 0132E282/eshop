<div>
    <div class="mb-3">
        <label for="products-names" class="form-label">tên sản phẩm</label>
        <input type="text" name="ten_sp" class="form-control" value="{{$product->ten_sp ?? ''}}" id="products-names" placeholder="nhập tên sản phẩm">
        @error('ten_sp') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
    </div>
    <div class="form-group">
        <label for="mota" class="form-label">mô tả sản phẩm</label>
        <textarea class="ckeditor form-control" id="mota" name="mota">{{$product->mota ?? ''}}</textarea>
    </div>
    <div class="form-group">
        <label for="products-names" class="form-label">mô tả ngăn sản phẩm</label>
        <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
    </div>
    <div class="mb-3">
        <label for="gia" class="form-label">giá sản phẩm</label>
        <input type="text" value="" oninput="handleFormatNumber(event)" class="form-control" name="gia" id="gia" value="{{$product->gia ?? ''}}" placeholder="nhập tên sản phẩm">
        @error('gia') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
    </div>
    <div class="mb-3">
        <label for="gia_km" class=" form-label">giá khuyếu mãi</label>
        <input type="text" oninput="handleFormatNumber(event)" class="form-control" id="gia_km" name="gia_km" value="{{$product->gia_km ?? ''}}" placeholder="nhập tên sản phẩm">
    </div>
</div>
<script>
    function handleFormatNumber(e) {
        //https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Intl/NumberFormat
        // => định dạng số
        const formatter = new Intl.NumberFormat('en-US', {
            style: 'decimal'
        });
        //https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/RegExp
        // tìm kiếm các ký tự không phải là số và là khoản trăng khi tìm được nó sẽ thấy thế bàng ""
        e.target.value = formatter.format(e.target.value.replace(/[^\d]/g, '')) ?? '';
    }
</script>