<?php

namespace App\Http\Controllers;


use App\Student;

class StudentController extends Controller
{

    // 学生列表页
    public function index() {

        $students = Student::get();

        return view('student.index', [
            'student' => $students,
        ]);
    }
}
