@extends('app')

@section('content')
        <!-- Button trigger modal -->



    <h1>Edit :{!! $memberbio->fname !!}</h1>
    <hr/>
    {!! Form::model($memberbio, ['method'=> 'PATCH', 'action' => ['membercontroller@update', $memberbio->MID]]) !!}
    @include('partials.form',['submitButtonText'=>'Update'])
    {!! Form::close() !!}

    @include('errors.list')
@endsection
