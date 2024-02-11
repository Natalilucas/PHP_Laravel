<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function allTasks(){
        $tasks = $this->getAllTassks();

        return view ('tasks.all_tasks', compact('tasks'));
    }


    public function addTask(){
        $users = DB::table('users')->get();

        return view('tasks.add_tasks', compact('users'));
}
        /*$users = DB::table('users')->get();

return view('tasks.add_tasks', compact('users'));
    }
  $request->validate([
           'name' => 'required|string',
           'user_id' => 'required|integer'
        ]);

    public function createTask(Request $request){
        Task::insert([
            'name' => $request->name
$request->validate([
            'name' => 'required|string',
            'user_id' => 'required|integer',
        ]);
        ]);
        return redirect()->route('tasks.allTasks')->with('message', 'Boa, inserido task');
    */



    public function createTask(Request $request){
        $request->validate([
            'name' => 'required|string|max:10',
            'description' => 'string|max:200',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        $tasks = DB::table('tasks')
        ->insert([
           'name' => $request->name,
           'description' => $request->description,
           'user_id' => $request->user_id
        ]);

        return redirect()->route('tasks.allTasks')->with('message', 'Tarefa adicionada com sucesso!');
    }


    // ->leftJoin('users','users_id','=','users_id')
    //     ->select('tasks.*','users.name as username')


    public function updateTask(Request $request){
        $request->validate([
            'name' => 'required|string|max:10',
            'description' => 'string|max:200',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        $tasks = DB::table('tasks')
        ->where('id', $request->id)
        ->update([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => $request->user_id
        ]);

        return redirect()->route('tasks.allTasks')->with('message', 'Task atualizada!');
    }


    private function getAllTassks(){
        $tasks = DB::table('tasks')
        ->join('users', 'user_id','=','users.id')
        ->select('tasks.*', 'users.name as usname')
        ->get();

        return $tasks;

    }

    public function viewTask($id){
        $myTask = DB::table('tasks')
        -> where('id', $id)
        ->first();

        return view('tasks.view_task', compact('myTask'));
    }

    public function deleteTask($id){
        //dd($id);
        DB::table('task')
        ->where('id', $id)
        ->delete();

        return back();
    }

}
