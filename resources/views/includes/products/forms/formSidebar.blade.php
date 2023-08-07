<div style="width : 200px;">
    <div class="d-grid gap-2 mb-3">
        <button class="btn btn-primary" type="submit">thêm</button>
    </div>
    <div class="images-product">
        <h5 class="fw-bold">Ảnh sản phẩm</h5>
        <div class="input py-2 ">
            <img src="{{$product->hinh ??'\assets-web\images\products\defau.jpeg'}}" class="mx-auto product-img" style="width: 100%; max-height: 200px;" alt="...">
            <div class="text-center">
                <label class="text-primary text-decoration-underline-hover" for="formFileImages" style="cursor: pointer;">tải ảnh sản phẩm</label>
                <input class="form-control" type="file" name="thumbnail_image" id="formFileImages" style="display: none;">
            </div>
            @error('thumbnail_image') <p class="text-danger ms-2" style="font-size: 12px;">{{$message}}</p> @enderror
        </div>
    </div>
    <div class="images-description-product">
        <div class="accordion-item">
            <h2 class="accordion-header ">
                <button class="accordion-button collapsed mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne1">
                    Ảnh mô tả sản phẩm
                </button>
            </h2>
            <div id="flush-collapseOne1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="categories-list mb-3">
                    <div class="d-flex flex-wrap description-products_list-img justify-content-start">
                        <img src="" class="me-1 mt-1 product-img" style="width: 40px; max-height: 40px;" alt="...">
                        <img src="" class="me-1 mt-1 product-img" style="width: 40px; max-height: 40px;" alt="...">
                        <img src="" class="me-1 mt-1 product-img" style="width: 40px; max-height: 40px;" alt="...">
                        <img src="" class="me-1 mt-1 product-img" style="width: 40px; max-height: 40px;" alt="...">
                        <img src="" class="me-1 mt-1 product-img" style="width: 40px; max-height: 40px;" alt="...">
                        <img src="" class="me-1 mt-1 product-img" style="width: 40px; max-height: 40px;" alt="...">
                        <img src="" class="me-1 mt-1 product-img" style="width: 40px; max-height: 40px;" alt="...">
                        <img src="" class="me-1 mt-1 product-img" style="width: 40px; max-height: 40px;" alt="...">
                        <img src="" class="me-1 mt-1 product-img" style="width: 40px; max-height: 40px;" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <label class="text-primary text-decoration-underline-hover" for="formFileImages" style="cursor: pointer;">tải ảnh sản phẩm</label>
            <input class="form-control" type="file" name="description-img[]" id="formFileImages" style="display: none;">
        </div>
    </div>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    danh mực sản phẩm
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="categories-list mb-3">
                    @foreach($tagList as $tag)
                    <div class="form-check mt-2">
                        <input class="form-check-input" name="loai" {{isset($product->id_loai) && $product->id_loai == $tag->id_loai ? "checked" : '' }} type="radio" value="{{$tag->id_loai}}" id="{{$tag->id_loai}}">
                        <label class="form-check-label" for="{{$tag->id_loai}}">
                            {{$tag->ten_loai}}
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">tạo danh mục</label>
        <input type="text" class="form-control create-tags" name="ten_loai" id="formGroupExampleInput" placeholder="tạo danh mục sản phẩm">
    </div>

    <div class="col-12">
        <button type="button" onclick="handleClickSubmitTagsList(event)" class="btn btn-primary" style="width: 100%;">tạo danh mục</button>
    </div>
</div>
<script src="/assets/js/main.js"></script>
<script>
    const uploadImages = document.querySelector('.images-product');
    const img = document.querySelector('.product-img');
    img.style.display = 'none';
    if (img.src) {
        img.style.display = 'block';
    }
    uploadImages.addEventListener('change', function(e) {
        const files = e.target.closest('input[type=file]').files[0];
        const url = createUrl(files);
        img.src = url;
        img.style.display = 'block';
    })
    const descriptionImgProduct = document.querySelector('.description-products_list-img');
    descriptionImgProduct.addEventListener('change', function(e) {
        const files = e.target.closest('input[type=file]').files[0];
    });


    function handleClickSubmitTagsList(e) {
        const createTagList = document.querySelector('form');
        const inputTags = document.querySelector('.create-tags');
        console.log(inputTags);
        if (inputTags.value) {
            createTagList.action = "/admin/ecommerce/products/create-tag";
            createTagList.submit();
        }
    }
</script>