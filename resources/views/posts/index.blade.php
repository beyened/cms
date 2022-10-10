@extends('layouts.app')

@section('content')

    <a href="posts/create" > Add posts </a>

<ul>

    @foreach($posts as $post)

        <li><a href="/posts/{{$post->id}}" >{{$post->title}}</a> |
            {{$post->body}} <a href="/posts/{{$post->id}}/edit" >Edit</a> |
            <form method="POST" action='/posts/{{ $post->id }}'>
                @csrf
                @method('DELETE')
                <button type="submit" class="submitbtn" name="delete">Delete</button>
            </form>
        </li>

    @endforeach

</ul>


@endsection

@yield('footer')
