@extends('layouts.todolist')

@section('main')



<h1>To Do List > 新增代辦事項</h1>
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
<form action="{{route('todolist.store')}}" method="POST">
    @csrf
    <input type="text" value="{{old('content')}}" class="form-label" placeholder="輸入代辦事項" name="content">
    <button type="submit" class="btn btn-secondary">新增</button>
</form>
@endsection
