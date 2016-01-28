@extends('app')

@section('content')
        <!-- Button trigger modal -->



    <h1>Edit : {!! $memberbio["Lname"] !!}</h1>
    <hr/>
    {!! Form::model($memberbio, ['method'=> 'PATCH', 'action' => ['membercontroller@update', $id]]) !!}
    @include('partials.form',['submitButtonText'=>'Update'])
    {!! Form::close() !!}

    @include('errors.list')
@endsection
