<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function test(Request $request) {
        // 1.取值
        echo $request->input('name', 'default');
        echo $request->has('name');
        $res = $request->all();
        dd($res);

        // 2.判断请求类型
        echo $request->method();
        echo $request->isMethod('GET');
        $res = $request->is('student/*');
        var_dump($res);
    }

    // 3.Session class
    public function session1(Request $request) {
        
    }

    public function session2(Request $request) {
        $res = Session::pull('student', 'default');
        dd($res);
    }
}
