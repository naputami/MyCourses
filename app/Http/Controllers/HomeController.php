<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subjects = Subject::get(["name", "id"]);
        $students = Student::get(["name", "id"]);
        $data = Course::join('students', 'courses.student_id', '=', 'students.id')
                        ->join('subject_teacher', 'courses.subject_teacher_id', '=', 'subject_teacher.id')
                        ->join('subjects', 'subject_teacher.subject_id', '=', 'subjects.id')
                        ->join('teachers', 'subject_teacher.teacher_id', '=', 'teachers.id')
                        ->select('courses.id as course_id','students.name as student_name', 'courses.course_date as course_date', 'teachers.name as teacher_name', 'subjects.name as subject_name')
                        ->get();

        // $title = 'Delete Course!';
        // $text = "Are you sure you want to delete this course?";
        // confirmDelete($title, $text);
        return view('home', compact('subjects', 'students', 'data'));
    }
}
