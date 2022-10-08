@extends('layouts.app')

@section('content')

    {!! Form::open(['url' => '/posts', 'method' => 'put']) !!}
        echo Form::token();
        echo Form::label('email', 'E-Mail Address', ['class' => 'awesome']);
    {!! Form::close() !!}

{{--    <form method="post" action="/posts" >--}}
{{--        @csrf  {{ csrf_field() }}--}}
{{--        <label for="title"> Title </label>--}}
{{--        <input type="text" name="title" placeholder="Enter post title">--}}
{{--        <label for="body"> Body </label>--}}
{{--        <input type="text" name="body" placeholder="Enter post body">--}}
{{--        <input type="hidden" name="user_id" value="1">--}}
{{--        <input type="submit" name="submit">--}}
{{--    </form>--}}



@endsection

@yield('footer')
