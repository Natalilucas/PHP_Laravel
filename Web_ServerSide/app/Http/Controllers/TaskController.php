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

    private function getAllTassks(){
        $tasks = Task::table('tasks')
        ->join('users', 'user_id','=','users.id')
        ->select('tasks.*', 'users.name as usname')
        ->get();

        return $tasks;

    }
}
