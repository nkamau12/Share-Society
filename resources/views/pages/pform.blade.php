@extends('app')

@section('content')
    @include('/partials/searchuser')
    <h1>Purchase "Family"</h1>
    <hr/>
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Change Family
    </button>
    {!! Form::open(['url'=>'groups']) !!}
    <div class="form-group">
        {!! Form::label('clothing_total','Clothing Total: ',['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('clothing_total',null,['class'=>'form-control','placeholder'=>'$0.00']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('furniture_total','Furniture Total: ',['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('furniture_total',null,['class'=>'form-control','placeholder'=>'$0.00']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('other_total','Other Total: ',['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('other_total',null,['class'=>'form-control','placeholder'=>'$0.00']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">     </label>
        <div class="col-md-3">
            {!! Form::submit('Purchase', ['class'=> 'btn btn-primary form-control']) !!}

        </div>
        <div class="col-md-3">
            {!! Form::reset('Clear', ['class'=> 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}
@endsection
@section('footer')
    <script>
        $('#myModal').modal()
    </script>
@endsection