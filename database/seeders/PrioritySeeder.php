<?php

namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Seeder;

class PrioritySeeder extends Seeder {
    public function run() {
        $priorities = [
            ['lvl' => 1, 'name' => 'Low'],
            ['lvl' => 2, 'name' => 'Medium'],
            ['lvl' => 3, 'name' => 'High'],
        ];

        foreach ($priorities as $priorityData) {
            Priority::create($priorityData);
        }
    }
}
