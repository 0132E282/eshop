<div style="width : 200px;">
    <div class="d-grid gap-2 mb-3">
        <button class="btn btn-primary" type="submit">thêm</button>
    </div>
    <div class="images-product">
        <h5 class="fw-bold">Ảnh sản phẩm</h5>
        <div class="input py-2 thumbnail">
            <img src="{{$product->hinh ??'\assets-web\images\products\defau.jpeg'}}" class="mx-auto product-img" style="width: 100%; max-height: 200px;" alt="...">
            <div class="text-center">
                <button onclick="handleClickThumbnail(event)" class="text-primary text-decoration-underline-hover" data-bs-toggle="modal" type="button" data-bs-target="#uploadImages" style="cursor: pointer;">tải ảnh sản phẩm</button>
                <input type="text" name="thumbnail_images" class="d-none">
            </div>
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
                    <div class="d-flex flex-wrap description-products_list-img justify-content-start images-list">


                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button data-bs-toggle="modal" type="button" data-bs-target="#uploadImages" onclick="handleClickImages(event)">tải ảnh sản phẩm</button>
            <label class="text-primary text-decoration-underline-hover" for="image-slider" style="cursor: pointer;"></label>
            <!-- <input onchange="uploadFilesImages(event)" class="form-control image-slider" type="file" name="images[]" id="image-slider" multiple> -->
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
    const img = document.querySelector('.product-img');

    function handleClickImages(e) {
        document.querySelector('.description-images').style.display = 'inline-block';
        if (descriptionImages.length > 0) {
            descriptionImages.forEach(element => {
                const checkbox = document.querySelector('.images-list-modal > input[data-id="' + element.id + '"]');
                checkbox.checked = true;
            });
        }
    }

    function handleClickThumbnail(e) {
        const thumable = document.querySelector('.thumbnail-click');
        thumable.style.display = 'inline-block';
    }

    function handleClickSubmitTagsList(e) {
        const createTagList = document.querySelector('form');
        const inputTags = document.querySelector('.create-tags');
        if (inputTags.value) {
            createTagList.action = "/admin/ecommerce/products/create-tag";
            createTagList.submit();
        }
    }
</script>