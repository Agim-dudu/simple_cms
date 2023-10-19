<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama jika ada
        Task::query()->delete();

        // Ambil ID project pertama dan ID user pertama
        $projectId = Project::first()->id;
        $userId = User::first()->id;

        $task1 = new Task([
            'name' => 'Task 1',
            'description' => 'Deskripsi Task 1',
            'priority' => 'High',
            'status' => 'Done',
            'project_id' => $projectId,
            'user_id' => $userId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $task1->save();

        $task2 = new Task([
            'name' => 'Task 2',
            'description' => 'Deskripsi Task 2',
            'priority' => 'Medium',
            'status' => 'Not done',
            'project_id' => $projectId,
            'user_id' => $userId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $task2->save();
    }
}
