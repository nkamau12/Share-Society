@extends('app')

@section('content')
    <h1>Add Group</h1>
    <hr/>
    {!! Form::open(['url'=>'groups']) !!}
    @include('groups.form',['submitButtonText'=>'Save'])
    {!! Form::close() !!}

    @include('errors.list')

@stop