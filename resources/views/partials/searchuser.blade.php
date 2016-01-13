<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Search Group</h4>
            </div>
            <div class="modal-body">

                {!! Form::open(['url'=>'groups','class'=>'modal-body']) !!}
                <div class="form-group">
                    <div class="col-md-6">
                        {!! Form::text('fname',null,['class'=>'form-control','placeholder'=>'First Name']) !!}

                    </div>
                    <div class="col-md-6">
                        {!! Form::text('lname',null,['class'=>'form-control','placeholder'=>'Last Name']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Search</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>