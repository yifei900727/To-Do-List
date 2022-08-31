@extends('layouts.todolist')

@section('main')
<h1>To Do List > 修改</h1>
@if($errors->any())
<div class="p-3 mb-2 bg-danger text-white">
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>

</div>
@endif
<form action="{{route('todolist.show',$todolist)}}">
    @csrf
    <input type="text" value="{{$todolist ->state}}" class="form-label" placeholder="輸入代辦事項" name="state">
    <button type="submit" class="btn btn-secondary">修改</button>
</form>
@endsection
