<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Helpers\HttpStatus;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    /**
     * Retrieve a list of tasks in descending order.
     *
     * @return \Illuminate\Http\JsonResponse
    */
    public function index()
    {
        $tasks = Task::orderBy('id', 'desc')->get();

        return response()->json([
            'message' => 'Tasks retrieved successfully',
            'tasks' => $tasks
        ], HttpStatus::OK);
    }

    /**
     * Display the specified task by ID.
     *
     * @param int $id The ID of the task to retrieve.
     * @return \Illuminate\Http\JsonResponse
    */
    public function show($id)
    {
        $task = Task::find($id);
        if ($task) {
            return response()->json($task);
        }
        return response()->json([
            'error' => 'Task not found'
        ], HttpStatus::NOT_FOUND);
    }

    /**
     * Create a new task and store it in the database.
     *
     * @param \App\Http\Requests\TaskRequest $request The validated request task data.
     * @return \Illuminate\Http\JsonResponse
    */
    public function store(TaskRequest $request)
    {
        $task = Task::create($request->validated());

        return response()->json([
            'message' => 'Task created successfully',
            'task' => $task
        ], HttpStatus::CREATED);
    }

    /**
     * Update the specified task in the database.
     *
     * @param \App\Http\Requests\TaskRequest $request The validated request updated task data.
     * @param int $id The ID of the task to update.
     * @return \Illuminate\Http\JsonResponse
    */
    public function update(TaskRequest $request, $id)
    {
        $task = Task::find($id);
        if (!$task) {
            return response()->json([
                'error' => 'Task not found'
            ], HttpStatus::NOT_FOUND);
        }

        $task->update($request->validated());

        return response()->json([
            'message' => 'Task updated successfully',
            'task' => $task
        ], HttpStatus::OK);
    }

    /**
     * Delete the specified task from the database.
     *
     * @param int $id The ID of the task to delete.
     * @return \Illuminate\Http\JsonResponse
    */
    public function destroy($id)
    {
        $task = Task::find($id);
        if ($task) {
            $task->delete();
            return response()->json([
                'message' => 'Task deleted successfully'
            ], HttpStatus::OK);
        }
        return response()->json([
            'error' => 'Task not found'
        ], HttpStatus::NOT_FOUND);
    }
}
