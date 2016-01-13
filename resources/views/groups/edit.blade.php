@extends('app')

@section('content')
        <!-- Button trigger modal -->


    @include('/partials/searchuser')
    <h1>Edit "Group"</h1>
    <hr/>
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Change User
    </button>
    {!! Form::open(['url'=>'groups']) !!}
    @include('groups.form',['submitButtonText'=>'Update'])
    {!! Form::close() !!}

    @include('errors.list')
@endsection
@section('footer')
    <script>
        $('#myModal').modal()
    </script>
@endsection