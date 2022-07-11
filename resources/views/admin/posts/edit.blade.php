@extends('layouts.app')

@section('content')
<div class="container">
    <form id="edit-form" action="{{route('admin.posts.update', $post)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label  class="form-label">Title</label>
            <input id="edit-title" type="text" name="title" class="form-control" value="{{old('title' , $post->title)}}">
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <p id="p-e-t-error" style="display: none" class="text-danger"></p>
        </div>
        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea id="edit-content" class="form-control" name="content" cols="30" rows="10">{{old('content', $post->content)}}</textarea>
            @error('content')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <p id="p-e-c-error" style="display: none" class="text-danger"></p>
        </div>
        <div class="mb-3">
            <select name="category_id" id="">
                @foreach ($categories as $category)
                <option
                @if(old('category_id', $post->category ? $post->category->id : '') == $category->id)  selected @endif
                value="{{$category->id}}"
                >
                    {{$category->name}}
                </option>
                @endforeach
            </select>
        </div>
        <button id="edit-sub" type="submit" class="btn btn-primary">Edit</button>
      </form>
</div>
@endsection
