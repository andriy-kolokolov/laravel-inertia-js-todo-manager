<?php

namespace Database\Seeders;

use App\Models\Priority;
use App\Models\Task;
use Database\Factories\PriorityTaskFactory;
use Illuminate\Database\Seeder;

class PriorityTaskSeeder extends Seeder {
    public function run(): void {
        // Get all tasks and priorities
        $tasks = Task::all();
        $priorities = Priority::all();

        // Loop through tasks and attach random priorities
        foreach ($tasks as $task) {
            $randomPriorities = $priorities->random(rand(1, 3)); // You can adjust the number of priorities to attach here
            $task->priorities()->attach($randomPriorities);
        }

    }
}
