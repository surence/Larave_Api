<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use database\factories\StudentFactory;


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
        Student::factory()->times(50)->create();
    }
}


