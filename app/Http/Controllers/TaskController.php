<?php

namespace App\Http\Controllers;

use App\Events\TaskCreated;
use App\ToDoList;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $task = ToDoList::create([
            'name' => $request->get('name'),
            'user_id' => $request->get('user_id'),
        ]);
        event(new  TaskCreated($task));
        return response(['success' => true], 200);
    }
}
