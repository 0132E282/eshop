<!-- Modal -->
<style>
    .input-images:has(>input:checked) {
        border: 5px solid black;
    }
</style>
<div class="modal fade modal-xl" id="uploadImages" tabindex="-1" aria-labelledby="uploadImages" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="uploadImages">upload file images</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="height: 400px;">
                @if(isset($listImages) && count($listImages) > 0)
                <div class="action">
                    <div class="py-3">
                        <label class="btn btn-primary" for="upload">
                            <i class="ti ti-upload" style="font-size: 20px;"></i>
                            upload
                        </label>
                    </div>
                </div>
                <div class="row">
                    @foreach($listImages as $key => $images)
                    <div class="col-1">
                        <label class="position-relative input-images images-list-modal rounded">
                            <input class="form-check-input position-absolute top-0 end-0" data-id="{{$key}}" type="checkbox" value="{{$images}}">
                            <img src="{{$images}}" class="rounded float-end" alt="..." style="width: 100%; height: 100% ;">
                        </label>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="m-auto" style="max-width: 200px;">
                    <label for="upload">
                        <i class="ti ti-upload" style="font-size: 50px;"></i>
                    </label>

                </div>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" data-bs-dismiss="modal" onclick="handleLickImage(event)" class="btn btn-primary btn-action description-images" style="display: none;">oke </button>
                <button type="button" data-bs-dismiss="modal" onclick="handleUploadThumbnail(event)" class="btn btn-primary btn-action  thumbnail-click" style="display: none;">luu</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">hủy</button>
            </div>
        </div>
    </div>
</div>
<form action="{{route('upload-images')}}" class="d-flex align-items-center justify-content-center flex-column" id="upload-images" method="post" enctype="multipart/form-data" style=" height: 100%;">
    <input class="d-none" name="files-images[]" onchange="handleUploadFile(event)" multiple type="file" id="upload">
    @csrf
</form>
<script>
    let descriptionImages = []
    let thumbnailProducts = {}
    const thumbnail = document.querySelector('.thumbnail');
    const uploadImagesModal = document.getElementById('uploadImages');
    uploadImagesModal.addEventListener('hidden.bs.modal', (e) => {
        const btnModal = e.currentTarget.querySelectorAll('.btn.btn-action');
        btnModal.forEach(element => {
            element.style.display = 'none';
        });
    })

    function handleUploadThumbnail(e) {
        const fileCheckbox = document.querySelector('input[type="checkbox"]:checked');
        if (fileCheckbox) {
            const thumbnailProducts = {
                id: fileCheckbox.dataset.id,
                value: fileCheckbox.value
            }
            fileCheckbox.checked = false;
            thumbnail.querySelector('img').src = thumbnailProducts.value;
            thumbnail.querySelector('input[type="text"]').value = thumbnailProducts.value;
        }
    }

    function handleUploadFile(e) {
        const formUpload = document.querySelector('#upload-images');
        formUpload.submit();
    }

    function handleLickImage(e) {
        const checkboxImages = document.querySelectorAll('input[type="checkbox"]:checked');
        descriptionImages = Array.from(checkboxImages).map((item) => {
            const object = {
                id: item.dataset.id,
                value: item.value
            }
            item.checked = false;
            return object;
        });
        const imagesListHtml = document.querySelector('.images-list');
        imagesListHtml.innerHTML = descriptionImages.map((item) => {
            return `<label class="class="me-1 mt-1 description-images" style="width: 40px; max-height: 40px;"">
            <img src="${item.value}"  alt="..." style="width:100%; height:100%;">
            <input class="d-none" type="text" value="${item.value}" name='description_images[]'>
            </label>
            `;
        }).join(', ');
    }



    function handleOnSubmit(e) {
        const formImage = document.getElementById('upload-images');
        formImage.submit();
    }
</script>