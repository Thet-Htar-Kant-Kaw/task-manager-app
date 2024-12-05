<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::all();

        // dd(
        //     Auth::user()
        // );

        // if($tasks->count() > 0){
        //     return TaskResource::collection($tasks);
        // }else{
        //     return response()->json(['No record available'], 200);
        // }

        return view('task.index', compact('tasks')); //compact func is for passing $tasks
    }

    public function create()
    {
        $categories = Category::all();
        return view('task.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'category_id' => 'required',
            'due_date' => 'required',
        ]);
        
        // $validator = Validator::make($request->all(),[
        //     'title' => 'required|max:255|string',
        //     'description' => 'required|max:255|string',
        //     'category_id' => 'required',
        //     'due_date' => 'required',
        // ]);

        // if($validator->fails())
        // {
        //     return response()->json([
        //         'message' => 'All fields are mandatory',
        //         'error' => $validator->messages(),
        //     ], 422);
        // }

        // Below is Task model
        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'due_date' => $request->due_date,
            // 'user_id' => 1
            // 'user_id' => Auth::user()->id,
            // 'user_id' => auth()->user()->id
            'user_id' => Auth::id()
        ]);

        // return response()->json([
        //     'message' => 'Product created successfully',
        //     'data' => new TaskResource($task)
        // ], 200);

        return redirect('tasks');
    }

    public function edit(Task $task)
    {
        // $task = Task::findOrFail($id); //either show the data or show 404
        $categories = Category::all();
        // return view('task.create', compact('categories'));
        // dd($categories);
        return view('task.edit', compact('task', 'categories'));  //pass the task variable as array
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'category_id' => 'required',
            'due_date' => 'required',
        ]);

        // $validator = Validator::make($request->all(),[
        //     'title' => 'required|max:255|string',
        //     'description' => 'required|max:255|string',
        //     'category_id' => 'required',
        //     'due_date' => 'required'
        // ]);

        // if($validator->fails())
        // {
        //     return response()->json([
        //         'message' => 'All fields are mandatory',
        //         'error' => $validator->messages(),
        //     ], 422);
        // }

        $task = Task::findOrFail($id);

        // Below is Task model
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'due_date' => $request->due_date,
        ]);

        // return response()->json([
        //     'message' => 'Product updated successfully',
        //     'data' => new TaskResource($task)
        // ], 200);

        return redirect('tasks');
    }

    public function destroy(Task $task, Request $request)
    {
        if($request->has('force')) {
            $task->forceDelete();
            return redirect()->back()->with('status', 'Task permanently deleted');
        } else {
            $task->delete();
            return redirect()->back()->with('status', 'Task deleted');
        }
    }

    // public function destroy($id)
    // {
    //     $task = Task::findOrFail($id);
    //     // dd($id);
    //     $task->delete();

    //     // return response()->json([
    //     //     'message' => 'Product deleted successfully',
    //     // ],200);

    //     return redirect()->back()->with('status', 'Task deleted');
    // }
}
