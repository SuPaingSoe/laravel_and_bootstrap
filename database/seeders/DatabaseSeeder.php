<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Batch;
use App\Models\MBA;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(5)->create();
        // Student::factory(10)->create();
        // Teacher::factory(10)->create();
        // Batch::factory(10)->create();
        // MBA::factory(10)->create();
        // Subject::factory(10)->create();
    }
}
