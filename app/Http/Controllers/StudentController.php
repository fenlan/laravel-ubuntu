<?php

namespace App\Http\Controllers;


class StudentController extends Controller
{
    public function test() {
        // redirect
        return redirect('session2');
    }

    // 宣传页面
    public function activity0() {

        return '活动快要开始啦，敬请关注';
    }

    // 活动页面
    public function activity1() {

        return '活动进行中，谢谢您的参与1';
    }

    // 活动页面
    public function activity2() {

        return '活动进行中，谢谢您的参与2';
    }
}
