@extends('layouts.app')
@section('content')
<div class="container">
  <h1>POSTS ADMIN</h1>
  <a href="{{route('admin.posts.create')}}"><button class="btn btn-success">CREATE POST</button></a>
  <hr>
  <div class="posts-container">
    @foreach ($posts as $post)
    <div class="post my-5">
      <h3>> {{$post['title']}}</h3>
      <a href="{{route('admin.posts.show',$post['id'])}}"><button class="btn btn-primary">OPEN</button></a>
      <a href="{{route('admin.posts.edit',$post['id'])}}"><button class="btn btn-secondary mx-2">EDIT</button></a>
      <form class="d-inline" action="{{route('admin.posts.destroy',$post['id'])}}" method="POST">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger">DELETE</button>
      </form>
    </div>
    @endforeach
    
  </div>
</div>
  
  
@endsection