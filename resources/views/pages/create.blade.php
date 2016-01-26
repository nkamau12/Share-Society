@extends('app')

@section('content')
    <h1>Create Family</h1>
    <hr/>
    {!! Form::open(['url'=>'groups']) !!}
    @include('partials.form',['submitButtonText'=>'Save'])
    {!! Form::close() !!}

    @include('errors.list')

@stop