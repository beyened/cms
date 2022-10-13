@extends('layouts.app')

@section('content')

    {!! Form::open(['method' => 'POST', 'action' => 'PostsController@store', 'files' => true]) !!}
        {!!  Form::token() !!}

    <div class="form-group">
       {!!  Form::file('file', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!!  Form::label('title', 'Title: ', ['class' => 'form-control']) !!}
        {!!  Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

        {!!  Form::label('body', 'Body', ['class' => 'form-control']) !!}
        {!!  Form::text('body'); !!}
        {!!  Form::hidden('user_id', 1) !!}
        {!!  Form::submit('Submit'); !!}
    {!! Form::close() !!}


    @if(count($errors) > 0)

        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

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
