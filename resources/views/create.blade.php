@extends('layouts.layout')
@section('content')
@if($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif
<form action="/duck" method="post">
    @csrf
    <label for="">Duck name</label>
    <input type="text" name="duck_name" />
    <button type="submit" >Submit</button>
</form>
@endsection