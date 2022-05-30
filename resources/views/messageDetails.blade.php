<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<!--extend layout master.blade.php -->
@extends('layouts.master')
 
<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', 'Mini Twitter')
 
<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')
 
@section('content')
<h2>Message Details:</h2>
 
<h3>{{$message->title}}</h3>
<p>{{$message->content}}</p>
@endsection

<form action="/message/{{$message->id}}" method="post">
   @csrf
   @method('delete')
   <button type="submit">Delete</button>
</form>

</body>
</html>