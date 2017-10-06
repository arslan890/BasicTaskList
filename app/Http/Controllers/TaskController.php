<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
	//This method is used to retreive all the tasks from the basictasklist database.
	function show(){
		$tasks = Task::get();
		return view('myviews.welcome',[
			'tasks'=> $tasks
		]);
	}

	// This method is used to insert a new task into the basictasklist database.
	function insertTask(Request $request){
		$validator = Validator::make($request->all(),[
			'name' => 'required|max:255'
		]);

		if($validator->fails()){
			return redirect('/')->withInput()->withErrors($validator);
		}

		$task = new Task;
		$task->name = $request->name;
		$task->save();

		return redirect('/');
	}

	//This method is used to delete a task from the basictasklist database.
	function deleteTask(Task $task){
		$task->delete();
		return redirect('/');
	}
}
