<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Student;
use App\Models\SubjectTeacher;
use App\Http\Requests\CourseUpdateRequest;

class CourseController extends Controller
{
    public function store(AddCourseRequest $request)
    {
        $payload=$request->validated();
        $course = Course::create([
            'course_date'=>$payload['course_date'],
            'student_id'=>$payload['student_id'],
            'subject_teacher_id'=>$payload['subject_teacher_id']
        ]);
        return to_route('home');
    }

    public function delete($id)
    {
        $course = Course::find($id);
        $course->delete();
        return to_route('home');

    }

    public function edit(string $id)
    {
        // $course =  Course::where('id', $id)->firstOrFail();
        $course = Course::join('subject_teacher', 'courses.subject_teacher_id', '=', 'subject_teacher.id')
                        ->select('courses.id', 'subject_teacher.subject_id', 'subject_teacher.teacher_id', 'courses.student_id', 'courses.course_date')
                        ->where('courses.id', $id)
                        ->firstOrFail();
        // dd($course);
        $subjects = Subject::get(["name", "id"]);
        $students = Student::get(["name", "id"]);
        $subject_teachers = SubjectTeacher::join('teachers', 'subject_teacher.teacher_id', '=', 'teachers.id')
                            ->select('subject_teacher.id as subject_teacher_id','subject_teacher.teacher_id', 'teachers.name as teacher_name', 'subject_teacher.subject_id')
                            ->get();
        return view('courses.edit', compact('course', 'subjects', 'students', 'subject_teachers'));
    }

    public function update(CourseUpdateRequest $request, string $id)
    {
        $payload = $request->validated();
        $course = Course::find($id);

        $course->update([
            'course_date'=>$payload['course_date'],
            'student_id'=>$payload['student_id'],
            'subject_teacher_id'=>$payload['subject_teacher_id']
        ]);

        return to_route('home');
    }
    
}
