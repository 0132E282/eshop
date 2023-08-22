@extends('pages/table/index')
@php

$administrationList = [
[
'id' => 0,
'title' => 'thường',
],
[
'id' => 1,
'title' => 'quản trị viên',
]
];
@endphp
@section('table')

<form action="POST">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">
                    <input class="form-check-input " onchange="handleOnclickCheckbox(event)" type="checkbox">
                </th>
                <th scope="col">stt</th>
                @foreach($tablet as $item )
                <th scope="col">{{$item['name']}}</th>
                @endforeach
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataTablet as $index => $item)
            <tr style="cursor: pointer;">
                <th>
                    <input class="form-check-input checkboxId" type="checkbox">
                </th>
                <th scope="row">{{++$index}}</th>
                @foreach($tablet as $key => $value)
                @if($value['type'] == 'images')
                <td style="max-width : 50px">
                    <img src="{{$item->avatar}}" style="width : 50px; height: 50px;" alt="{{$item->name}}" />
                </td>
                @endif
                @if($value['type'] == 'text')
                <td>
                    {{$item->$key}}
                </td>
                @endif
                @if($value['type'] == 'email')
                <td>
                    {{$item->$key}}
                </td>
                @endif
                @if($value['type'] === 'select')
                <td>
                    <select data-id="{{$item->id}}" name="isAdmin[{{$item->id}}]" class="form-select selecteIsAdmin" disabled>
                        @foreach($administrationList as $value)
                        <option value="{{$value['id']}}" {{$item->isAdmin=== $value['id'] ? 'selected' : ''}}>{{$value['title']}}</option>
                        @endforeach
                    </select>
                </td>
                @endif
                @endforeach
                <td>
                    <a class="btn  btn-warning" href="{{route('update-user', $item->id)}}">
                        <i class="ti ti-edit"></i>
                    </a>
                    @if(Route::current()->getName() === 'trash-item')
                    <button type="button" class="btn btn-danger" class="action" onclick="handleLickButton(event)" data-method="put" data-url="{{route('restore-user', $item->id)}}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-arrow-counterclockwise fs-4"></i>
                    </button>
                    @else
                    <button type="button" class="btn btn-danger" onclick="handleLickButton(event)" data-method="delete" data-url="{{route('delete-user', $item->id)}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="action">
                        <i class=" ti ti-trash ti ti-lock fs-4"></i>
                    </button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</form>
@endsection
<script>
    handleShowModal()
</script>