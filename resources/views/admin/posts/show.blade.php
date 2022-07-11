@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->category ? $post->category->name: "-"}}</p>
          <p>Tags:

              @foreach ($post->tags as $tag )
              <span>{{$tag->name}}</span>
              @endforeach
          </p>
          <p class="card-text">{{$post->content}}</p>
          <a href="{{ route('admin.posts.edit', $post)}}" class="btn btn-primary">Edit</a>
        </div>
      </div>
</div>
@endsection
