<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Hapus data lama jika ada
        Project::query()->delete();

        $project1 = new Project([
            'name' => 'Project A',
            'description' => 'Deskripsi Project A',
            'start_date' => '2023-01-01',
            'end_date' => '2023-01-31',
            'status' => 'Done',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $project1->save();

        $project2 = new Project([
            'name' => 'Project B',
            'description' => 'Deskripsi Project B',
            'start_date' => '2023-02-01',
            'end_date' => '2023-02-28',
            'status' => 'Not Done',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $project2->save();

    

    }

    
}
