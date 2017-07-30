<?php

namespace App\Http\Controllers;

use App\Student;

class StudentController extends Controller
{
    public function test() {
        $name = 'fenlan';

        return view('student.test', [
            'name' => $name
        ]);
    }
}
