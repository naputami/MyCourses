<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'teacher_id'=> 1,
                'subject_id'=> 1
            ],
            [
                'teacher_id'=> 1,
                'subject_id'=> 2
            ],
            [
                'teacher_id'=> 2,
                'subject_id'=> 3
            ],
            [
                'teacher_id'=> 2,
                'subject_id'=> 4
            ],
            [
                'teacher_id'=> 3,
                'subject_id'=> 7
            ],
            [
                'teacher_id'=> 3,
                'subject_id'=> 2
            ],
            [
                'teacher_id'=> 4,
                'subject_id'=> 5
            ],
            [
                'teacher_id'=> 5,
                'subject_id'=> 6
            ],
            [
                'teacher_id'=> 5,
                'subject_id'=> 1
            ],
            [
                'teacher_id'=> 6,
                'subject_id'=> 3
            ],
            [
                'teacher_id'=> 7,
                'subject_id'=> 6
            ],
            [
                'teacher_id'=> 7,
                'subject_id'=> 5
            ],
        ])->each(fn ($item) => \App\Models\SubjectTeacher::create($item));
    }
}
