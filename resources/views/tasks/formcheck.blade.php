         <div class="row">

                                    <div class="col-md-5 col-sm-4">

                                         @foreach( $catagory->tasks as $task )
                                                    {{--<li>--}}
                                                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('catagories.tasks.destroy', $catagory->id, $task->id))) !!}

                                         <div class="scroller" style="max-height: 800px;" data-always-visible="0" data-rail-visible="0" data-handle-color="#dae3e7">
                                             <div class="todo-tasklist">
                                                 <div class="todo-tasklist-item todo-tasklist-item-border-green">
{{--
                                                     <img class="todo-userpic pull-left" src="/assets/admin/layout/img/avatar4.jpg" width="27px" height="27px">
--}}
                                                     <div class="todo-tasklist-item-title">
                                                    <td><a href="{{ route('catagories.tasks.show', [$catagory->id, $task->catagory_id]) }}">{{ $task->title }}</a></td><br>
                                                     </div>
                                                     <div class="todo-tasklist-item-text">
                                                         Lorem dolor sit amet ipsum dolor sit consectetuer dolore.
                                                     </div>
                                                     <div class="todo-tasklist-controls pull-left">
                                                         <span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 21 Sep 2014 </span>
                                                         <span class="todo-tasklist-badge badge badge-roundless">Urgent</span>
                                                     </div>
                                                 </div>

                                                   {!! Form::close() !!}

                                                @endforeach


                                                   <h2>Create Task for Catagory "{{ $catagory->Title }}"</h2>


                                                   {!! Form::model(new App\Task, ['route' => ['catagories.tasks.store', $catagory->id], 'class'=>'']) !!}
                                                   @include('tasks/partials/_form', ['submit_text' => 'Create Task'])
                                                   {!! Form::close() !!}

                                </div>
                            </div>