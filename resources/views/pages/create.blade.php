@extends('app')

@section('content')
    <h1>Create Family</h1>
    <hr/>
    {!! Form::open(['url'=>'create']) !!}
    @include('partials.form',['submitButtonText'=>'Save'])
    {!! Form::close() !!}

    @include('errors.list')

@stop