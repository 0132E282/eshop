<style>
  .list-menu {
    max-height: 500px;
    width: 100%;
  }
</style>

<div class="row gy-2 gx-3 align-items-center">
  <div class="col-auto d-flex">
    <a href="{{$pages->url(1)}}" class="btn d-flex justify-content-center align-items-center" style="outline: none;">
      <i class="ti ti-chevrons-left"></i>
    </a>
    <a href="{{$pages->previousPageUrl()}}" class="btn d-flex justify-content-center align-items-center" style="outline: none;">
      <i class="ti ti-chevron-left"></i>
    </a>
    <select class="form-select" id="autoSizingSelect" onchange="handleToReqPage(event)">
      @foreach($pages->getUrlRange(1, $pages->lastPage()) as $key => $item)
      <option value="{{$item}}" {{$pages->currentPage() === $key ? 'selected' : ''}}>
        {{$key}}
      </option>
      @endforeach
    </select>
    <a href="{{$pages->nextPageUrl()}}" class="btn d-flex justify-content-center align-items-center" style="outline: none;">
      <i class="ti ti-chevron-right"></i>
    </a>
    <a href="{{$pages->url($pages->lastPage())}}" class="btn d-flex justify-content-center align-items-center" style="outline: none;">
      <i class="ti ti-chevrons-right"></i>
    </a>
  </div>
  @if(isset($tagList))
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingSelect">sap xep</label>
    <select class="form-select" id="autoSizingSelect" onchange="handleGetTypeProduct(event)">
      <option checkdate>tất cả</option>
      @foreach($tagList as $tag)

      <option value="{{route('searchProducts',$tag->ten_loai)}}" {{Route::current()->parameter('text') === $tag->ten_loai ? 'selected' : ''}}>{{$tag->ten_loai}}</option>
      @endforeach
    </select>
  </div>
  @endif
  <div class="col-auto">
    <div class="dropdown" style="width: 340px;">
      <div class="input-group">
        <input type="text" class="form-control search-control" aria-expanded="true" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <button class="btn btn-primary" onclick="handleSearchInput()">
          <i class="bi bi-search"></i>
        </button>
      </div>
      <ul class="dropdown-menu list-menu scrollbar">
      </ul>
    </div>
  </div>
</div>
<div class="btn-group" role="group" aria-label="Basic example">
  <a href="/admin/products/create" type="button" class="btn btn-primary">create</a>
  <button type="button" class="btn btn-primary" onclick="handleClickAcoinDelete(event)">delete</button>
  <button type="button" class="btn btn-primary">update</button>
</div>
<a href="" class="links"></a>
<script>
  const links = document.querySelector('.links');
  const handleSearchInput = function(e) {
    const searchInput = document.querySelector('.search-control');
    if (searchInput.value) {
      const listMenu = document.querySelector('.list-menu');
      const formatter = new Intl.NumberFormat('en-US', {
        style: 'decimal'
      });
      fetch("http://127.0.0.1:8000/search/sanpham/" + searchInput.value)
        .then(res => res.json())
        .then(function(data) {
          const productList = data.map((item) => {
            return `<li style="width :100%;">
             <a class="dropdown-item" href="#" style="width :100%;">
                <div class="card my-0" style="width :100%;" >
                  <div class="row g-0">
                    <div class="col-md-4 p-2" style="width:100px;">
                      <img src="${item.hinh}" class="img-fluid rounded-start" alt="${item.ten_sp}">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body py-2 px-1">
                        <h5 class="card-title" style="max-width:100%; overflow: hidden;  text-overflow: ellipsis; white-space: nowrap;">${item.ten_sp}</h5>
                        <p class="card-text my-0"> ${ formatter.format(item.gia)} VND</p>
                      </div>
                    </div>
                  </div>
                </div>  
              </a>
            </li>`;
          }).join(' ');
          listMenu.innerHTML = productList;
          listMenu.style = 'display:block';
        })
        .catch(function(error) {
          console.log(error)
        });
    }
  }
  const handleToReqPage = function(e) {
    if (e.target.value) {
      links.href = e.target.value;
      links.click();
    }
  }
  const handleGetTypeProduct = function(e) {
    if (e.target.value) {
      links.href = e.target.value;
      links.click();
    }
  }
</script>