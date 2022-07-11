@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Category</th>
        <th scope="col">actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $posts as $post)

            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->category ? $post->category->name: "-"}}</td>
                <td>
                    @foreach ($post->tags as $tag )
                    <span>{{$tag->name}}</span>

                    @endforeach
                </td>
                <td class="d-flex">
                    <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id)}}">Edit</a>
                    <a class="btn btn-warning" href="{{ route('admin.posts.show', $post->id)}}">Show</a>
                    <form class="d-inline"
                    onsubmit=" return confirm('U sure?') "
                    action="{{route('admin.posts.destroy', $post->id)}}"
                    method="POST"
                    >
                      @csrf
                      @method('DELETE')
                      <input type="submit" class="btn btn-danger d-inline" value="Delete">
                    </form>
                </td>
            </tr>


        @endforeach

    </tbody>
  </table>
@endsection
