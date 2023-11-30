<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class Taskcontroller extends Controller
{

    public function addTask(Request $request)
    {
        $request->validate([
            'task' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        $task = Task::create([
            'user_id' => $request->user_id,
            'task' => $request->task,
        ]);

        return response()->json([
            'task' => $task,
            'status' => 1,
            'message' => 'Successfully created a task',
        ]);
    }
    public function changeTaskStatus(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'status' => 'required|in:pending,done',
        ]);

        $task = Task::find($request->task_id);
        // dd($task);
        $task->status = $request->status;
        $task->save();

        $message = ($request->status == 'done') ? 'task done' : 'task pending';

        return response()->json([
            'task' => $task,
            'status' => 1,
            'message' => $message,
        ]);
    }
}
