<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Inertia\Inertia;

class TaskController extends Controller {
    public function index() {
        $tasks = Task::with('priorities')->get();
//        $tasks = Task::all();
        return inertia('Tasks/Index', compact('tasks'));
    }
}
