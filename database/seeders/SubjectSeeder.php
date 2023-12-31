<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name'=> 'Math'
            ],
            [
                'name'=> 'English'
            ],
            [
                'name'=> 'Sciences'
            ],
            [
                'name'=> 'Biology'
            ],
            [
                'name'=> 'Chemistry'
            ],
            [
                'name'=> 'Physics'
            ],
            [
                'name'=> 'Bahasa Indonesia'
            ],
        ])->each(fn ($subject) => \App\Models\Subject::create($subject));
    }
}
