<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
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

    public function index()
    {
        $data = Student::join('levels', 'students.level_id', '=', 'levels.id')
                        ->select('students.name as name', 'students.address as address', 'students.phone as phone', 'levels.name as level')
                        ->get();

        return view('students', ['data' => $data]);
    }

}
