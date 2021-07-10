@extends('layouts.app')
@section('content')
<div class="container">
  <h1>SINGLE POST: ID = {{$post['id']}}</h1>
  <div class="post">
    <h4>{{$post['title']}}</h4>
    <p>{{$post['content']}}</p>
    Categoria: @if ($post['category_id'])
    <span class="badge badge-primary">{{$post->category['name']}}</span>
    @endif
  </div>
</div>
  
  
@endsection