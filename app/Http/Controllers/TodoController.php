<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TodoController extends Controller

{
    //liste all user tasks
    public function index(){
        $tasks = Task::all();
        
        return view('tasks', compact('tasks'));

    }

    public function create(Request $request){

        Task::create([
            'texte' => $request->task,
            'etat' => 0,
            'user_id' => auth()->id() 
          
        ]);

        return redirect('tasks');
    }


    public function delete($id){

        $task = Task::findOrFail($id);
        $task->delete();
        return redirect('tasks');
    }

    public function edit($id){

        $task = Task::findOrFail($id);



        return view('taskEdit', compact('task'));
    }

    public function update($id, Request $request) {
    

    $task = Task::findOrFail($id);

    $task->update(["texte"=>$request->task
    ]);

    return redirect('tasks');
    }


    
    public function dashboard(){

        return view('dashboard');

    }
}
