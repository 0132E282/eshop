<div>
    <div class="mb-3">
        <input type="text" name="heading" class="form-control" id="products-names" placeholder="tiêu đề">
        @error('heading') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
    </div>
    <div class="form-group">
        <label for="mota" class="form-label">mo ta</label>
        <textarea class="ckeditor form-control" id="mota" name="content">   </textarea>
    </div>

</div>