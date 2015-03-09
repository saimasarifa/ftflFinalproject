<form action="javascript:;" class="form-horizontal">
    <!-- TASK HEAD -->
    <div class="form">
        <!-- END TASK HEAD -->
        <!-- TASK TITLE -->
        <div class="form-group">
            <div class="col-md-12">
                <label>Title</label>
                <input type="text" name="title" class="form-control todo-taskbody-tasktitle" placeholder="Task Title...">
            </div>
        </div><br>
        <br>
        <br>
        <!-- TASK DESC -->
        <div class="form-group">
            <div class="col-md-12">
                <label>Description</label>
                <textarea class="form-control todo-taskbody-taskdesc" rows="8" name="description" placeholder="Task Description..."></textarea>
            </div>
        </div><br>
        <br><br>
        <br>
        <br>
        <!-- END TASK DESC -->


        <!-- TASK DUE DATE -->
        <br>
        <div class="form-group">
            <div class="col-md-12">
             <div class="input-icon input-group date date-picker" >
                                                 <label>start Date</label>
                                                 <i class="fa fa-calendar"></i>
                                                 <input type="text" name="start_date" name="datepicker" data-date-format="yyyy-mm-dd" class="form-control todo-taskbody-due" placeholder="start_date...">
                                             </div>
            </div>
        </div><br>
        <br>
        <br>

        <div class="form-group">
            <div class="col-md-12">
                 <div class="input-icon input-group date date-picker" >
                                    <label>End Date</label>
                                    <i class="fa fa-calendar"></i>
                                    <input type="text" name="end_date" name="datepicker" data-date-format="yyyy-mm-dd" class="form-control todo-taskbody-due" placeholder="end date...">
                                </div>

            </div>
        </div><br>

        <br>
        <br>

        <div class="form-group">
            <div class="col-md-12">
                <label>created by</label>
                <input type="text" name="created_by" class="form-control todo-taskbody-created_by" placeholder="created by...">
            </div>
        </div><br>
        <br>
        <br>
        <div class="form-group">
            <div class="col-md-12">
                <label>modified by</label>
                <input type="text" name="modified_by" class="form-control todo-taskbody-modified_by" placeholder="modified by...">
            </div>
        </div><br>
        <br>
        <br>
        <!-- TASK TAGS -->
        <div class="form-group">
            <div class="col-md-12">
                <label>status</label>
                <input type="text" name="status" class="form-control todo-taskbody-status" placeholder="status...">
            </div>
        </div><br>
        <br>
        <br>

        <div class="form-group">
            <div class="col-md-12">
                <label>Completed</label>
                <input type="checkbox" name="completed" class="form-control todo-taskbody-completed" placeholder="completed...">
            </div>
        </div><br>
        <!-- TASK TAGS -->
        <div class="form-actions right todo-form-actions">
            {!! Form::submit($submit_text) !!}
        </div>
    </div>
</form>