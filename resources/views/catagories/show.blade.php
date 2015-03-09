
@extends('layouts.task')

@section('content')
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                </div>
            </div>

            @include('taskstodo.partials.breadcrumb')

              <div class="row">
                <div class="col-md-12">
<!-- BEGIN TODO SIDEBAR --><!--dont touch-->
                  <div class="todo-sidebar">
                    <div class="portlet light">
                       <div class="portlet-title">
                             <h2>Catagory</h2>
                                 @if (Session::has('message'))
                               <div class="alert alert-info">{{ Session::get('message') }}</div>
                                 @endif
                                @foreach($catagories as $key => $value)

           {{--
                              <li>{{ $value->Title }}</li>
           --}}
                                 <h4><a href="{{ URL::to('catagories/' . $value->id) }}">{{ $value->Title }}</a></h4>

                          {!! Form::close() !!}
                                       @endforeach
                                         <p>
                                                               {!! link_to_route('catagories.index', 'Back to Catagories') !!} |

                                               </p>
                        </div>
                      </div>
                   </div>

<!-- END TODO SIDEBAR --><!--dont touch-->

                    <div class="todo-content">
                        <div class="portlet light">
                            <!-- PROJECT HEAD -->
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-bar-chart font-green-sharp hide"></i>
                                    <span class="caption-helper">CATAGORY:</span> &nbsp; <span class="caption-subject font-green-sharp bold uppercase"><h3>{{ $catagory->Title }}</h3></span>
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
                            </div>{{----}}

                            <!-- end PROJECT HEAD -->

                                <div class="row">


                                    <div class="col-md-5 col-sm-4">



                                         <div class="scroller" style="max-height: 800px;" data-always-visible="0" data-rail-visible="0" data-handle-color="#dae3e7">
                                             <div class="todo-tasklist">
                                                             @foreach( $catagory->tasks as $task )
                                                                                                 {{--<li>--}}
                                                                                                {{-- {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE',
                                                                                                  'route' => array('catagories.tasks.destroy', $catagory->id, $task->id))) !!}
                                                                                                  {!! Form::close() !!}--}}

                                                 <div class="todo-tasklist-item todo-tasklist-item-border-green">

                                                     <div class="todo-tasklist-item-title">
                                                    <a href="{{ route('catagories.tasks.show', [$catagory->id, $task->catagory_id]) }}">{{ $task->title }}</a><br>
                                                     </div>
                                                     <div class="todo-tasklist-item-text">
                                                     {{ $task->description}}

                                                     </div>

                                                     <div class="todo-tasklist-controls pull-left">

                                                         <span class="todo-tasklist-date"><i class="fa fa-calendar"></i> {{ $task->start_date}}</span>
                                                              <span class="todo-tasklist-date"><i class="fa fa-calendar"></i> {{ $task->end_date}}</span>

                                                         <span class="todo-tasklist-badge badge badge-roundless">{{ $task->status}}</span>
                                                     </div>
                                                 </div>
                                                   <p>                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('catagories.tasks.destroy', $catagory->id, $task->id))) !!}
                                                                 {!! link_to_route('catagories.tasks.edit', 'Edit', array($catagory->id, $task->id), array('class' => 'btn btn-info')) !!},
                                                                 {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                                                   </p>


                                                   {!! Form::close() !!}


                                                @endforeach



                                              </div>
                                          </div>


                                     </div>
                                         <div class="col-md-7 col-sm-4">

                                                                          <h2>Create Task for Catagory "{{ $catagory->Title }}"</h2>
                                                                           {!! Form::model(new App\Task, ['route' => ['catagories.tasks.store', $catagory->id], 'class'=>'']) !!}
                                                                           @include('tasks/partials/_form1', ['submit_text' => 'Create Task'])
                                     {{--
                                                                            {!! Form::close() !!}
                                     --}}

                                                                          </div>
                                 </div>
                          </div>
                     </div>

            <!-- END PAGE CONTENT INNER -->
    </div>
    <!-- END PAGE CONTENT -->
    </div>
        </div>
    </div>

@endsection

