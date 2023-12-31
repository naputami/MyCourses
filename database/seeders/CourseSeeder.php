<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'course_date'=> '2023-10-11',
                'student_id' => 1,
                'subject_teacher_id'=> 1
            ],
            [
                'course_date'=> '2023-10-12',
                'student_id' => 2,
                'subject_teacher_id'=> 12

            ],
            [
                'course_date'=> '2023-10-15',
                'student_id' => 3,
                'subject_teacher_id'=> 7

            ],
            [
                'course_date'=> '2023-11-15',
                'student_id' => 7,
                'subject_teacher_id'=> 3

            ],
            [
                'course_date'=> '2023-11-20',
                'student_id' => 5,
                'subject_teacher_id'=> 6

            ],
        ])->each(fn ($course) => \App\Models\Course::create($course));
    }
}
