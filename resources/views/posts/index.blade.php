@extends('layouts.app')

@section('content')

<ul>

    @foreach($posts as $post)

        <li><a href="/posts/{{$post->id}}" >{{$post->title}}</a> | {{$post->body}} <a href="/posts/{{$post->id}}/edit" >Edit</a> </li>

    @endforeach

</ul>


@yield('footer')
