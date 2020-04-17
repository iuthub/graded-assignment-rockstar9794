<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>

       
    @extends('layouts.app')

@section('content')

<form action="/task/{{$task->id}}" method="POST">

    <div id="myDIV" class="header">

      @csrf

      @method('PUT')

      <h2>My To Do List</h2>

      @error('title')

        <div class="alert alert-danger">{{ $note }}</div>

      @enderror

      <input class="@error('title') is-invalid @enderror" value="{{$task->title}}" name="title" type="text" placeholder="Title...">

      <button type="submit" class="addBtn">Update</button>

    </div>

</form>

@endsection