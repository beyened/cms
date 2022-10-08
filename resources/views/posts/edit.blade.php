@extends('layouts.app')

@section('content')

<h3> Edit {{$post->id}} Post </h3>

    <form method="post" action="/posts/{{$post->id}}" >

        @csrf  {{ csrf_field() }}

        @method('PUT')
{{--       OR  {{ method_field('PUT') }}--}}
{{--       OR  <input type="hidden" name="_method" value="PUT">--}}

        <label for="title"> Title </label>
        <input type="text" name="title" placeholder="Enter post title" value="{{$post->title}}">
        <label for="body"> Body </label>
        <input type="text" name="body" placeholder="Enter post body" value="{{$post->body}}">
        <input type="hidden" name="user_id" value="1">
        <input type="submit" name="submit">

    </form>

@endsection

    @yield('footer')
