@extends('layouts.app')
@section('content')
<div class="container">
  <h1>EDIT POST</h1>
  <form action="{{route('admin.posts.update',$post)}}" method="POST">
    @csrf
    @method('PATCH')
    <div>
      @error('title')
         <div class="text-danger">
           {{$message}}
         </div>
      @enderror
      <input class="form-control" type="text" placeholder="Title" name="title" title="title" value="{{old('title',$post['title'])}}">
      <label for="text"></label>
    </div>
    <div>
      @error('content')
         <div class="text-danger">
           {{$message}}
         </div>
      @enderror
      <textarea class="form-control" name="content" id="content" cols="30" rows="10" placeholder="Content">{{old('content',$post['content'])}}</textarea>
      <label for="text"></label>
    </div>
    <div>
      <label for="category_id"></label>
      <select class="form-control my-5" name="category_id" id="category_id">
        <option value="">--SCEGLI UNA CATEGORIA--</option>
        @foreach ($categories as $cat)
        <option value="{{$cat['id']}}" 
        
        @if ($cat->id==old('category_id'))
          selected
          @elseif ($cat['id']==$post['category_id'])
            selected
        @endif>{{$cat['name']}}</option>
        @endforeach
      </select>
    </div>
    <button class="btn btn-success" type="submit">Update</button>
  </form>
</div>
  
  
@endsection