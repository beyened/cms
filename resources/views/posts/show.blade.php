@extends('layouts.app')

@section('content')

    <h1>Title </h1> {{$post->title}} </br>
    <h2>Body </h2> {{$post->body}}

@yield('footer')
