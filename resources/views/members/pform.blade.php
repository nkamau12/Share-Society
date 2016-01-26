@extends('app')

@section('content')
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
        {!! Form::label('p_date','Date of Purchase: ',['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('p_date',null,['class'=>'form-control','placeholder'=>'YYYY-mm-dd']) !!}
        </div>
    </div>

    <label class="col-md-4 control-label">     </label>
    <div class="col-md-3">
        {!! Form::submit('Purchase', ['class'=> 'btn btn-primary form-control']) !!}

    </div>
    <div class="col-md-3">
        {!! Form::reset('Clear', ['class'=> 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection