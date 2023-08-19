@extends('pages/table/index')
@section('table')

<form action="POST">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">
                    <input class="form-check-input " onchange="handleOnclickCheckbox(event)" type="checkbox">
                </th>
                <th scope="col">stt</th>
                <th scope="col">avatar</th>
                <th scope="col">tên</th>
                <th scope="col">email</th>
                <th scope="col">ngày tạo</th>
                <th scope="col">quản trị</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataTablet as $index => $user)
            <tr style="cursor: pointer;">
                <th>
                    <input class="form-check-input checkboxId" type="checkbox">
                </th>
                <th scope="row">{{++$index}}</th>
                <td style="max-width : 50px">
                    <img src="{{$user->avatar}}" style="width : 50px; height: 50px;" alt="{{$user->name}}" />
                </td>
                <td>
                    <a href="{{route('update-user',$user->id)}}">
                        {{$user->name}}
                    </a>
                </td>
                <td>
                    {{$user->email}}
                <td>
                    {{ date("Y/m/d",strtotime($user-> created_at))}}
                </td>
                <td>
                    <select data-id="{{$user->id}}" name="isAdmin[{{$user->id}}]" class="form-select selecteIsAdmin" disabled>
                        @foreach($administrationList as $item)
                        <option value="{{$item['id']}}" {{$user->isAdmin=== $item['id'] ? 'selected' : ''}}>{{$item['title']}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    @if(Route::current()->getName() === 'trash-user')
                    <button type="button" class="btn btn-danger" class="action" onclick="handleLickButton(event)" data-method="put" data-url="{{route('restore-user', $user->id)}}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-arrow-counterclockwise"></i>
                    </button>
                    @else
                    <button type="button" class="btn btn-danger" onclick="handleLickButton(event)" data-method="delete" data-url="{{route('delete-user', $user->id)}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="action">
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