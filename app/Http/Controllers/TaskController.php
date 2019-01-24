<?php

namespace App\Http\Controllers;

use App\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return task::all();
    }
    public function store(Request $request)
    {
      $data = $request->validate([
           'name' => 'required|string',
       ]);

       $task = task::create($data);

        return response($task, 201);
    }
    public function update(Request $request, task $task)
    {
      $data = $request->validate([
           'name' => 'required|string',
           'success' => 'required|boolean',
       ]);

       $task->update($data);

       return response($task, 200);
    }
    public function destroy(task $task)
    {
      $task->delete();
     return response()->json('Deleted todo item', 200);
    }

public function updateAll(Request $request)
   {
     $data = $request->validate([
          'complite' => 'required|boolean',
      ]);
      task::query()->update(['success' =>  $data['complite'] ]);

       return response()->json('Updated', 200);
   }
public function destroyCompleted(Request $request)
       {
         task::query()->where('success', 1)->delete();
        return response()->json('Deleted todo item', 200);
      }
}
