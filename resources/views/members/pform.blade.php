@extends('app')

@section('content')
    {!! Form::open(['url'=>'/members/'.$id.'/create']) !!}
    <div class="form-group">
        {!! Form::label('clothing_total','Clothing Total: ',['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::number('ClothingTotal',null,['class'=>'form-control','placeholder'=>'$0.00','step'=>'any','min'=>'0']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('FurnitureTotal','Furniture Total: ',['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::number('FurnitureTotal',null,['class'=>'form-control','placeholder'=>'$0.00','step'=>'any','min'=>'0']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('other_total','Other Total: ',['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::number('OtherTotal',null,['class'=>'form-control','placeholder'=>'$0.00','step'=>'any','min'=>'0']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('p_date','Date of Purchase: ',['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('DateOfPurchase',date('Y-m-d'),['class'=>'form-control']) !!}
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