<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Buy Groceries',
            'description' => 'Purchase fruits, vegetables, and other items.',
            'completed' => false,
        ]);

        Task::create([
            'title' => 'Complete Laravel Project',
            'description' => 'Finish the Todo List API project using Laravel Passport.',
            'completed' => true,
        ]);

        Task::create([
            'title' => 'Schedule Meeting with Client',
            'description' => 'Set up a Zoom call with the client for project discussion.',
            'completed' => false,
        ]);
    }
}
