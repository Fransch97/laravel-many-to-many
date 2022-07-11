@extends('layouts.app')

@section('content')
    <div class="container">
        <form id="create-form" action="{{route('admin.posts.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1"  class="form-label">Title</label>
                <input  type="text" name="title" id="create-title" class="form-control" value="{{old('title')}}">
                @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <p style="display: none" id="p-c-t-error" class="text-danger"></p>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Content</label>
                <textarea id="create-content" class="form-control" name="content" cols="30" rows="10">{{old('content')}}</textarea>
                @error('content')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <p style="display: none" id="p-c-c-error" class="text-danger"></p>
            </div>
            <div class="mb-3">
                <select name="category_id" id="">
                    @foreach ($categories as $category)
                    <option @if(old('category_id') == $category->id) @selected(true) @endif value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                @foreach ($tags as $tag )
                <input type="checkbox"
                name="tags[]"
                id="{{$tag->id}}"

                @if (in_array($tag->id, old('tags',[])))
                    checked
                @endif

                value ="{{$tag->id}}"
                >
                <label class="mr-3" for="{{$tag->id}}">{{$tag->name}}</label>
                @endforeach
            </div>

            <button type="submit" id="creade-sub" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
