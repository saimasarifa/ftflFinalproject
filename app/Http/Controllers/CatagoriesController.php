<?php namespace App\Http\Controllers;

use Input;
use Redirect;

use App\Catagory;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CatagoriesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

   /* protected $rules = [
        'Title' => ['required', 'min:3'],
    ];*/
	public function index()
	{

		$catagories = Catagory::all();
        $task = Task::all();
       // var_dump($task);
		return view('catagories.index', compact('catagories','task'));

		//return view('catagories.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $catagories = Catagory::all();

        return view('catagories.create', compact('catagories'));
/*        $input = Input::all();
        Catagory::create( $input );

        return Redirect::route('catagories.create')->with('message', 'Catagory created');*/
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	/*public function store()
	{
		$input = Input::all();
		Catagory::create( $input );

		return Redirect::route('catagories.index')->with('message', 'Catagory created');


	}*/
    public function store(Requests\CatagoryRequest $request)
    {
       /* $this->validate($request, $this->rules());*/
        $input = Input::all();
        Catagory::create( $input );

        return Redirect::route('catagories.index')->with('message', 'catagory created');
    }


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Catagory $catagory)
	{
        $catagories = Catagory::all();
        $task = Task::all();
        // var_dump($task);
        return view('catagories.show', compact('catagory','catagories','task'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Catagory $catagory)
	{
/*		return view('catagories.edit', compact('catagory'));*/
        $catagories = Catagory::all();
        // var_dump($task);
        return view('catagories.edit', compact('catagory','catagories'));
/*        return view('catagories.index1', compact('catagory','catagories'));*/



    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	/*public function update(Catagory $catagory)
	{
		$input = array_except(Input::all(), '_method');
		$catagory->update($input);

		return Redirect::route('catagories.show', $catagory->catagory_id)->with('message', 'Catagory updated.');


	}*/
    public function update(Catagory $catagory, Request $request)
    {
        $this->validate($request, $this->rules);
        $input = array_except(Input::all(), '_method');
        $catagory->update($input);

        return Redirect::route('catagories.show', $catagory->title)->with('message', 'Project updated.');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Catagory $catagory)
	{
		$catagory->delete();

		return Redirect::route('catagories.index')->with('message', 'Catagory deleted.');
	}

}