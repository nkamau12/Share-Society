@extends('app')

@section('content')
    {!! Form::open(['url'=>'groups','class'=>'modal-body']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Search by Name:') !!}
        {!! Form::select('name[]',$name,null,['id'=>'name','class'=>'form-control','multiple']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('search', ['class'=> 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

@endsection
@section('footer')
    <script>
        $('#name').select2({
            placeholder: 'Search by Name',
            tags: true
        });
    </script>
@endsection