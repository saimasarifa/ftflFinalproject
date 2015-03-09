<?php namespace App\Http\Controllers;
use Input;
use Redirect;

use App\Catagory;
use App\Task;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TasksController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Catagory $catagory)
	{
        $task = Task::all();
		return view('tasks.index', compact('catagory','task'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Catagory $catagory)
	{
		return view('tasks.create', compact('catagory'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Catagory $catagory)
	{
		$input = Input::all();
		$input['catagory_id'] = $catagory->id;
		Task::create( $input );

		return Redirect::route('catagories.show', $catagory->id)->with('Task created.');


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Catagory $catagory, Task $task)
	{
		return view('tasks.show', compact('catagory', 'task'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Catagory $catagory, Task $task)
	{
		return view('tasks.edit', compact('catagory','task'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Catagory $catagory, Task $task)
	{
		$input = array_except(Input::all(), '_method');
		$task->update($input);

		return Redirect::route('catagories.show', [$catagory->id, $task->catagory_id])->with('message', 'Task updated.');


	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Catagory $catagory, Task $task)
	{
		$task->delete();

		return Redirect::route('catagories.show', [$catagory->id, $task->catagory_id])->with('message', 'Task deleted.');
	}

}
