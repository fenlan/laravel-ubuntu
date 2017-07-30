<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function info() {
        //return 'member-info-id-';
        return view('info', [
            'name' => 'fenlan',
            'age' => 18,
            'sex' => 'male'
        ]);
    }
}
