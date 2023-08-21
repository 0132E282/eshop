@extends('pages/table/index')
@section('table')
<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">
                <input class="form-check-input" onchange="handleOnclickCheckbox(event)" type="checkbox">
            </th>
            <th scope="col">stt</th>
            @foreach ($tablet as $item)
            <th scope="col">{{$item}}</th>
            @endforeach
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dataTablet as $index => $post)
        <tr style="cursor: pointer;">
            <th scope="row" style="width:40px;">
                <input class="form-check-input checkboxId" name="checkboxId[]" type="checkbox" value="{{$post->id_post}}">
            </th>
            <th scope="row">{{++$index}}</th>
            <td style="max-width : 50px">
                <img src="{{$post->thumb_url}}" style="width : 50px; height: 50px;" alt="{{$post->heading}}" />
            </td>
            <td>
                <a class="ellipsis fs-5">
                    {{$post->heading}}
                </a>
            </td>
            <td class="text-center">{{$post->view_count ?? 0}}</td>
            <td>{{ date("Y/m/d",strtotime($post->created_at))}}</td>
            <td>
                <button type="button" class="btn btn-danger" onclick="handleLickButton(event)" data-method="delete" data-bs-toggle="modal" data-bs-target="#exampleModal" class="action">
                    <i class="ti ti-trash-x fs-4"></i>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection