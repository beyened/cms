@extends('layouts.app')

@section('content')

    <h1>Title </h1> {{$post->title}} </br>
    <h2>Body </h2> {{$post->body}}
    <a href="{{route('posts.edit', $post->id)}}" >Edit </a>

    <form method="POST" action="{{ route('posts.destroy', $post->id)}}">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger btn-icon">
            Delete
        </button>
    </form>


@endsection


@yield('footer')
