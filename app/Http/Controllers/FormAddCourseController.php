<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\SubjectTeacher;
use Illuminate\Http\Request;

class FormAddCourseController extends Controller
{
    public function index()
    {
        $subjects = Subject::get(["name", "id"]);
        $students = Student::get(["name", "id"]);
        return view('newcourse', compact('subjects', 'students'));
    }

    public function fetchTeacher(Request $request)
    {
        $data["teachers"] = SubjectTeacher::join('teachers', 'subject_teacher.teacher_id', '=', 'teachers.id')
                                          ->select('subject_teacher.id as subject_teacher_id', 'teachers.name as teacher_name')
                                          ->where('subject_teacher.subject_id', $request->subject_id)
                                          ->get();
        
        return response()->json($data);
    }
}
