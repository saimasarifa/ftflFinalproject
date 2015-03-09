<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description') !!}
</div>
{{--<div class="form-group">
               <div class="col-md-12">
                <div class="input-icon input-group date date-picker" >
                                                    <label>start Date</label>
                                                    <i class="fa fa-calendar"></i>
                                                    <input type="text" name="start_date" name="datepicker" data-date-format="yyyy-mm-dd" class="form-control todo-taskbody-due" placeholder="start_date...">
                                                </div>
               </div>
</div>
<div class="form-group">
     <div class="col-md-12">
                 <div class="input-icon input-group date date-picker" >
                                    <label>End Date</label>
                                    <i class="fa fa-calendar"></i>
                                    <input type="text" name="end_date" name="datepicker" data-date-format="yyyy-mm-dd" class="form-control todo-taskbody-due" placeholder="end date...">
                                </div>

            </div>
</div>--}}


<div class="form-group">
    {!! Form::label('created_by', 'created_by:') !!}
    {!! Form::text('created_by') !!}
</div>

<div class="form-group">
    {!! Form::label('modified_by', 'modified_by:') !!}
    {!! Form::text('modified_by') !!}
</div>

<div class="form-group">
    {!! Form::label('status', 'status:') !!}
    {!! Form::text('status') !!}
</div>

<div class="form-group">
    {!! Form::label('completed', 'completed:') !!}
    {!! Form::checkbox('completed') !!}
</div>


<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>