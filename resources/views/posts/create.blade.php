@extends('layouts.app')

@section('content')

    <form method="post" action="/posts" >
        @csrf  {{ csrf_field() }}
        <label for="title"> Title </label>
        <input type="text" name="title" placeholder="Enter post title">
        <label for="body"> Body </label>
        <input type="text" name="body" placeholder="Enter post body">
        <input type="hidden" name="user_id" value="1">
        <input type="submit" name="submit">
    </form>



@yield('footer')
