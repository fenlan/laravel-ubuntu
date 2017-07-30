<?php

namespace App\Http\Controllers;

use App\Student;

class StudentController extends Controller
{
    public function test() {
        $student = new Student();
        $student->ID = '15130110070';
        $student->name = '小青';
        $student->sex = 'female';
        $student->class = '1513011';
        $student->in_time = '2015';
        $student->status = 'stay_in';
        $bool = $student->save();
        dd($bool);
    }
}
