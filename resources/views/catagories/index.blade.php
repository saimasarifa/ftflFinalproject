
@extends('layouts.task')

@section('content')
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
           {{-- <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>--}}
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN PAGE BREADCRUMB -->
            @include('taskstodo.partials.breadcrumb')
            <!-- End PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->

<!-- BEGIN TODO SIDEBAR -->

<div class="todo-sidebar">
    <div class="portlet light">
        <div class="portlet-title">
           <h2>Catagories</h2>
              @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                @foreach($catagories as $key => $value)

                   {{-- <ul>   <div class="actions">

                                   <div class="btn-group">
                                       <a class="btn green-haze btn-circle btn-sm " href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                          <i class="fa fa-angle-down"></i>
                                       </a>
                                       <ul class="dropdown-menu">

                                           <li>
                                               <a href="{{ URL::to('catagories/'.$value->id) }}">Show </a>
                                           </li>
                                           <li>
                                               <a href="{{ URL::to('catagories/'.$value->id.'/edit/') }}">Edit </a>
                                           </li>

                                           <li>
                                               {!! Form::open(array('method'=> 'DELETE', 'route' => array('catagories.destroy', $value->id))) !!}
                                               {!! Form::submit('Delete', array('class'=> 'btn btn-square alert alert-danger')) !!}
                                               {!! Form::close() !!}
                                           </li>

                                       </ul>

                                   </div>

                               </div>
                               </ul>
               <h4><a href="{{ URL::to('catagories/' . $value->id) }}">{{ $value->Title }}</a></h4>
--}}
                                   <li><div class="actions pull-right ">
                                               <div class="btn-group ">
                                                    <a data-hover="dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" >
                                                        <button class="btn green-haze btn-circle btn-sm ">CRUD</button></a><br>
                                                        <ul class="dropdown-menu" >
                                                             <li>
                                                                    <a href="{{ URL::to('catagories/'.$value->id) }}">Show catagory </a>
                                                             </li><br>
                                                             <li>
                                                                    <a href="{{ URL::to('catagories/'.$value->id.'/edit/') }}">Edit catagory </a>
                                                             </li>
                                                         <li class="divider">
                                                         </li>
                                                             <li>
                                                                {!! Form::open(array('method'=> 'DELETE', 'route' => array('catagories.destroy', $value->id))) !!}
                                                                {!! Form::submit('Delete', array('class'=> 'iconify')) !!}
                                                                {!! Form::close() !!}
                                                            </li>
                                                        </ul>
                                               </div>
                                           </div>
                                           <a href="{{ URL::to('catagories/' . $value->id) }}">{{ $value->Title }}<br>





                                           </a><br /><br /></li>



{{--
               {!! Form::close() !!}
--}}
                @endforeach


            <p>
                {!! link_to_route('catagories.create', 'Create Catagory') !!}

            </p>

        </div>
    </div>
</div>
<!-- END TODO SIDEBAR -->
                    <!-- END TODO SIDEBAR -->
                    <!-- BEGIN TODO CONTENT -->
                    <div class="todo-content">
                        <div class="portlet light">
                            <!-- PROJECT HEAD -->
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-bar-chart font-green-sharp hide"></i>
                                    <span class="caption-helper">CATAGORY:</span> &nbsp; <span class="caption-subject font-green-sharp bold uppercase">Saimas New Work</span>
                                </div>
{{--
                                <div class="actions">
                                    <div class="btn-group">
                                        <a class="btn green-haze btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                            MANAGE <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="i"></i> New Task </a>
                                            </li>
                                            <li class="divider">
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    Pending <span class="badge badge-danger">
												4 </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    Completed <span class="badge badge-success">
												12 </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    Overdue <span class="badge badge-warning">
												9 </span>
                                                </a>
                                            </li>
                                            <li class="divider">
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="i"></i> Delete Project </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
--}}
                            </div>

                            <!-- end PROJECT HEAD -->
                            <div class="portlet-body">
                                <div class="row">

                                    <div class="col-md-5 col-sm-4">
                                   {{--  @foreach($task as $value)
                                    <h4> <a href="{{ URL::to('catagories/' .$value->id) }}">{{ $value->id}}</a></h4>

                                     <a href="{{ URL::to('tasks/' .$value->id) }}">{{ $value->catagory_id }}</a>
                                     <a href="{{ URL::to('tasks/' .$value->id) }}">{{ $value->title }}</a><br>
                                     <a href="{{ URL::to('tasks/' .$value->id) }}">{{ $value->description }}</a><p>

                                     @endforeach--}}




                                        <div class="scroller" style="max-height: 800px;" data-always-visible="0" data-rail-visible="0" data-handle-color="#dae3e7">
                                            <div class="todo-tasklist">
                                                <div class="todo-tasklist-item todo-tasklist-item-border-green">
                                                    <img class="todo-userpic pull-left" src="/assets/admin/layout/img/avatar4.jpg" width="27px" height="27px">
                                                    <div class="todo-tasklist-item-title">
                                                        Slider Redesign
                                                    </div>
                                                    <div class="todo-tasklist-item-text">
                                                        Lorem dolor sit amet ipsum dolor sit consectetuer dolore.
                                                    </div>
                                                    <div class="todo-tasklist-controls pull-left">
                                                        <span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 21 Sep 2014 </span>
                                                        <span class="todo-tasklist-badge badge badge-roundless">Urgent</span>
                                                    </div>
                                                </div>
                                                <div class="todo-tasklist-item todo-tasklist-item-border-red">
                                                    <img class="todo-userpic pull-left" src="/assets/admin/layout/img/avatar5.jpg" width="27px" height="27px">
                                                    <div class="todo-tasklist-item-title">
                                                        Homepage Alignments to adjust
                                                    </div>
                                                    <div class="todo-tasklist-item-text">
                                                        Lorem ipsum dolor sit amet, consectetuer dolore dolor sit amet.
                                                    </div>
                                                    <div class="todo-tasklist-controls pull-left">
                                                        <span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 14 Sep 2014 </span>
                                                        <span class="todo-tasklist-badge badge badge-roundless">Important</span>
                                                    </div>
                                                </div>
                                                <div class="todo-tasklist-item todo-tasklist-item-border-green">
                                                    <img class="todo-userpic pull-left" src="/assets/admin/layout/img/avatar9.jpg" width="27px" height="27px">
                                                    <div class="todo-tasklist-item-title">
                                                        Slider Redesign
                                                    </div>
                                                    <div class="todo-tasklist-controls pull-left">
                                                        <span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 10 Feb 2015 </span>
                                                        <span class="todo-tasklist-badge badge badge-roundless">Important</span>&nbsp;
                                                    </div>
                                                </div>
                                                <div class="todo-tasklist-item todo-tasklist-item-border-blue">
                                                    <img class="todo-userpic pull-left" src="/assets/admin/layout/img/avatar6.jpg" width="27px" height="27px">
                                                    <div class="todo-tasklist-item-title">
                                                        Contact Us Map Location changes
                                                    </div>
                                                    <div class="todo-tasklist-item-text">
                                                        Lorem ipsum amet, consectetuer dolore dolor sit amet.
                                                    </div>
                                                    <div class="todo-tasklist-controls pull-left">
                                                        <span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 04 Oct 2014 </span>
                                                        <span class="todo-tasklist-badge badge badge-roundless">Postponed</span>&nbsp; <span class="todo-tasklist-badge badge badge-roundless">Test</span>
                                                    </div>
                                                </div>
                                                <div class="todo-tasklist-item todo-tasklist-item-border-purple">
                                                    <img class="todo-userpic pull-left" src="/assets/admin/layout/img/avatar7.jpg" width="27px" height="27px">
                                                    <div class="todo-tasklist-item-title">
                                                        Projects list new Forms
                                                    </div>
                                                    <div class="todo-tasklist-item-text">
                                                        Lorem ipsum dolor sit amet, consectetuer dolore psum dolor sit.
                                                    </div>
                                                    <div class="todo-tasklist-controls pull-left">
                                                        <span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 19 Dec 2014 </span>
                                                    </div>
                                                </div>
                                                <div class="todo-tasklist-item todo-tasklist-item-border-yellow">
                                                    <img class="todo-userpic pull-left" src="/assets/admin/layout/img/avatar8.jpg" width="27px" height="27px">
                                                    <div class="todo-tasklist-item-title">
                                                        New Search Keywords
                                                    </div>
                                                    <div class="todo-tasklist-item-text">
                                                        Lorem ipsum dolor sit amet, consectetuer sit amet ipsum dolor, consectetuer ipsum consectetuer sit amet dolore.
                                                    </div>
                                                    <div class="todo-tasklist-controls pull-left">
                                                        <span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 02 Feb 2015 </span>
                                                        <span class="todo-tasklist-badge badge badge-roundless">Postponed</span>&nbsp;
                                                    </div>
                                                </div>
                                                <div class="todo-tasklist-item todo-tasklist-item-border-green">
                                                    <img class="todo-userpic pull-left" src="/assets/admin/layout/img/avatar9.jpg" width="27px" height="27px">
                                                    <div class="todo-tasklist-item-title">
                                                        Slider Redesign
                                                    </div>
                                                    <div class="todo-tasklist-controls pull-left">
                                                        <span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 10 Feb 2015 </span>
                                                        <span class="todo-tasklist-badge badge badge-roundless">Important</span>&nbsp;
                                                    </div>
                                                </div>
                                                <div class="todo-tasklist-item todo-tasklist-item-border-red">
                                                    <img class="todo-userpic pull-left" src="/assets/admin/layout/img/avatar5.jpg" width="27px" height="27px">
                                                    <div class="todo-tasklist-item-title">
                                                        Homepage Alignments to adjust
                                                    </div>
                                                    <div class="todo-tasklist-item-text">
                                                        Lorem ipsum dolor sit amet, consectetuer dolore psum dolor sit.
                                                    </div>
                                                    <div class="todo-tasklist-controls pull-left">
                                                        <span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 14 Sep 2014 </span>
                                                        <span class="todo-tasklist-badge badge badge-roundless">Important</span>
                                                    </div>
                                                </div>
                                                <div class="todo-tasklist-item todo-tasklist-item-border-blue">
                                                    <img class="todo-userpic pull-left" src="/assets/admin/layout/img/avatar6.jpg" width="27px" height="27px">
                                                    <div class="todo-tasklist-item-title">
                                                        Contact Us Improvement
                                                    </div>
                                                    <div class="todo-tasklist-item-text">
                                                        Lorem ipsum amet, psum dolor sit consectetuer dolore.
                                                    </div>
                                                    <div class="todo-tasklist-controls pull-left">
                                                        <span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 21 Feb 2015 </span>
                                                        <span class="todo-tasklist-badge badge badge-roundless">Postponed</span>&nbsp; <span class="todo-tasklist-badge badge badge-roundless">Primary</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-7 col-sm-8">
                                        <div class="scroller" style="max-height: 800px;" data-always-visible="0" data-rail-visible="0" data-handle-color="#dae3e7">
                                                <!-- TASK HEAD -->




                                                <div class="form">
                                                    <div class="form-group">
                                                        <div class="col-md-8 col-sm-8">
                                                            <div class="todo-taskbody-user">
                                                                <img class="todo-userpic pull-left" src="/assets/admin/layout/img/pic2.jpg" width="50px" height="50px">
                                                                <span class="todo-username pull-left">Saima</span>
                                                                <button type="button" class="todo-username-btn btn btn-circle btn-default btn-xs">&nbsp;edit&nbsp;</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="todo-taskbody-date pull-right">
                                                                <button type="button" class="todo-username-btn btn btn-circle btn-default btn-xs">&nbsp; Complete &nbsp;</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END TASK HEAD -->


                                                    <!-- TASK TITLE -->
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                         {!! Form::label('title', 'Title:') !!}
                                                            {!! Form::text('title') !!}
                                                    </div>
                                                    </div>
                                                    <!-- TASK DESC -->
                                                    <div class="form-group">
                                                        <div class="col-md-12">
 {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description') !!}
                                                            </div>
                                                    </div>
                                                    <!-- END TASK DESC -->
                                                    <!-- TASK DUE DATE -->
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <div class="input-icon">
                                                                <i class="fa fa-calendar"></i>
                                                                <input type="text" class="form-control todo-taskbody-due" placeholder="Due Date...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- TASK TAGS -->
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control todo-taskbody-tags" placeholder="Tags..." value="Pending, Requested">
                                                        </div>
                                                    </div>
                                                    <!-- TASK TAGS -->
                                                    <div class="form-actions right todo-form-actions">
                                                        <button class="btn btn-circle btn-sm green-haze">Save Changes</button>
                                                        <button class="btn btn-circle btn-sm btn-default">Cancel</button>
                                                    </div>
                                                </div>
                                                <div class="tabbable-line">
                                                    <ul class="nav nav-tabs ">
                                                        <li class="active">
                                                            <a href="#tab_1" data-toggle="tab">
                                                                Comments </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_2" data-toggle="tab">
                                                                History </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab_1">
                                                            <!-- TASK COMMENTS -->
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <ul class="media-list">
                                                                        <li class="media">
                                                                            <a class="pull-left" href="javascript:;">
                                                                                <img class="todo-userpic" src="/assets/admin/layout/img/avatar8.jpg" width="27px" height="27px">
                                                                            </a>
                                                                            <div class="media-body todo-comment">
                                                                                <button type="button" class="todo-comment-btn btn btn-circle btn-default btn-xs">&nbsp; Reply &nbsp;</button>
                                                                                <p class="todo-comment-head">
                                                                                    <span class="todo-comment-username">Christina Aguilera</span> &nbsp; <span class="todo-comment-date">17 Sep 2014 at 2:05pm</span>
                                                                                </p>
                                                                                <p class="todo-text-color">
                                                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis
                                                                                </p>
                                                                                <!-- Nested media object -->
                                                                                <div class="media">
                                                                                    <a class="pull-left" href="javascript:;">
                                                                                        <img class="todo-userpic" src="/assets/admin/layout/img/avatar4.jpg" width="27px" height="27px">
                                                                                    </a>
                                                                                    <div class="media-body">
                                                                                        <p class="todo-comment-head">
                                                                                            <span class="todo-comment-username">Carles Puyol</span> &nbsp; <span class="todo-comment-date">17 Sep 2014 at 4:30pm</span>
                                                                                        </p>
                                                                                        <p class="todo-text-color">
                                                                                            Thanks so much my dear!
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="media">
                                                                            <a class="pull-left" href="javascript:;">
                                                                                <img class="todo-userpic" src="/assets/admin/layout/img/avatar5.jpg" width="27px" height="27px">
                                                                            </a>
                                                                            <div class="media-body todo-comment">
                                                                                <button type="button" class="todo-comment-btn btn btn-circle btn-default btn-xs">&nbsp; Reply &nbsp;</button>
                                                                                <p class="todo-comment-head">
                                                                                    <span class="todo-comment-username">Andres Iniesta</span> &nbsp; <span class="todo-comment-date">18 Sep 2014 at 9:22am</span>
                                                                                </p>
                                                                                <p class="todo-text-color">
                                                                                    Cras sit amet nibh libero, in gravida nulla. Scelerisque ante sollicitudin commodo Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. <br>
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="media">
                                                                            <a class="pull-left" href="javascript:;">
                                                                                <img class="todo-userpic" src="../../assets/admin/layout/img/avatar6.jpg" width="27px" height="27px">
                                                                            </a>
                                                                            <div class="media-body todo-comment">
                                                                                <button type="button" class="todo-comment-btn btn btn-circle btn-default btn-xs">&nbsp; Reply &nbsp;</button>
                                                                                <p class="todo-comment-head">
                                                                                    <span class="todo-comment-username">Olivia Wilde</span> &nbsp; <span class="todo-comment-date">18 Sep 2014 at 11:50am</span>
                                                                                </p>
                                                                                <p class="todo-text-color">
                                                                                    Cras sit amet nibh libero, in gravida nulla. Scelerisque ante sollicitudin commodo Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. <br>
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- END TASK COMMENTS -->
                                                            <!-- TASK COMMENT FORM -->
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <ul class="media-list">
                                                                        <li class="media">
                                                                            <img class="todo-userpic pull-left" src="../../assets/admin/layout/img/avatar4.jpg" width="27px" height="27px">
                                                                            <div class="media-body">
                                                                                <textarea class="form-control todo-taskbody-taskdesc" rows="4" placeholder="Type comment..."></textarea>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <button type="button" class="pull-right btn btn-sm btn-circle green-haze"> &nbsp; Submit &nbsp; </button>
                                                                </div>
                                                            </div>
                                                            <!-- END TASK COMMENT FORM -->
                                                        </div>
                                                        <div class="tab-pane" id="tab_2">
                                                            <ul class="todo-task-history">
                                                                <li>
                                                                    <div class="todo-task-history-date">
                                                                        20 Jun, 2014 at 11:35am
                                                                    </div>
                                                                    <div class="todo-task-history-desc">
                                                                        Task created
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="todo-task-history-date">
                                                                        21 Jun, 2014 at 10:35pm
                                                                    </div>
                                                                    <div class="todo-task-history-desc">
                                                                        Task category status changed to "Top Priority"
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="todo-task-history-date">
                                                                        22 Jun, 2014 at 11:35am
                                                                    </div>
                                                                    <div class="todo-task-history-desc">
                                                                        Task owner changed to "Nick Larson"
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="todo-task-history-date">
                                                                        30 Jun, 2014 at 8:09am
                                                                    </div>
                                                                    <div class="todo-task-history-desc">
                                                                        Task completed by "Nick Larson"
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END TODO CONTENT -->
                </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT -->
@endsection