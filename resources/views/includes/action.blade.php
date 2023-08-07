<form class="row gy-2 gx-3 align-items-center">
  <div class="col-auto d-flex">
    <a href="{{$pages->url(1)}}" class="btn d-flex justify-content-center align-items-center" style="outline: none;">
      <i class="ti ti-chevrons-left"></i>
    </a>
    <a href="{{$pages->previousPageUrl()}}" class="btn d-flex justify-content-center align-items-center" style="outline: none;">
      <i class="ti ti-chevron-left"></i>
    </a>
    <select class="form-select" id="autoSizingSelect">
      @foreach($pages->getUrlRange(1, $pages->lastPage()) as $key => $item)
      <a href="{{$item}}">
        <option value="25" {{$pages->currentPage() === $key ? 'selected' : ''}}>
          {{$key}}
        </option>
      </a>
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
    <select class="form-select" id="autoSizingSelect">
      @foreach($tagList as $tag)
      <option value="20">{{$tag->ten_loai}}</option>
      @endforeach
    </select>
  </div>
  @endif
  <div class="col-auto">
    <div class="input-group ">
      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<div class="btn-group" role="group" aria-label="Basic example">
  <a href="/admin/products/create" type="button" class="btn btn-primary">create</a>
  <button type="button" class="btn btn-primary" onclick="handleClickAcoinDelete(event)">delete</button>
  <button type="button" class="btn btn-primary">update</button>
</div>