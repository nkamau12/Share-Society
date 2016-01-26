
<div class="form-group">
    {!! Form::label('fname','First Name',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('fname',null,['class'=>'form-control','placeholder'=>'First Name']) !!}
    </div>

</div>

<div class="form-group">
    {!! Form::label('lname','Last Name',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('lname',null,['class'=>'form-control','placeholder'=>'Last Name']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('address1','Address Line 1',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('address1',null,['class'=>'form-control','placeholder'=>'Address Line 1']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('address2','Address Line 2',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('address2',null,['class'=>'form-control','placeholder'=>'Address Line 2']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('postalCode','Postal Code',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('postalCode',null,['class'=>'form-control','placeholder'=>'Postal Code']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('city','City',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('city',null,['class'=>'form-control','placeholder'=>'City']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('province','Province',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('province','BC',['class'=>'form-control','placeholder'=>'Province']) !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Items Allowed</label>
    <div class="col-md-2">
        {!! Form::checkbox('clothing',null) !!}
        {!! Form::label('clothing','Clothing') !!}

    </div>
    <div class="col-md-2">
        {!! Form::checkbox('furniture',null) !!}
        {!! Form::label('furniture','Furniture') !!}
    </div>
    <div class="col-md-2">
        {!! Form::checkbox('other',null) !!}
        {!! Form::label('other','Other') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('agency','Agency From',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('agency',null,['class'=>'form-control','placeholder'=>'Agency From']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('phone','Phone Number',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('phone',null,['class'=>'form-control','required','placeholder'=>'Phone Number']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">     </label>
    <div class="col-md-3">
        {!! Form::submit($submitButtonText, ['class'=> 'btn btn-primary form-control']) !!}

    </div>
    <div class="col-md-3">
        {!! Form::reset('Clear', ['class'=> 'btn btn-primary form-control']) !!}
    </div>
</div>

