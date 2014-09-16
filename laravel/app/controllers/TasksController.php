<?php

class TasksController extends \BaseController {


		/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tasks = Task::all();
		
		return View::make('tasks.index', compact('tasks'));

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{


		return View::make('tasks.create');

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$task = new Task;
		$task->text = Input::get('text');
		$task->save();

		return Redirect::route('tasks.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tasks = Task::find($id);
		
		return View::make('tasks.edit')->with('tasks',$tasks);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
			$tasks = Task::find($id);
			$tasks->text = Input::get('text');
			$tasks->save();

			// redirect
			return Redirect::route('tasks.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		$tasks = Task::find($id);
		$tasks->delete();

		// redirect
		return Redirect::route('tasks.index');
	}


}
