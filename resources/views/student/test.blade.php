@extends('layout')

@section('header')
    @parent
    header
@stop

@section('sidebar')
    sidebar
@stop

@section('content')
    content

    <!-- 1.模板中输出变量 -->
    <p>{{ $name }}</p>

    <!-- 2.模板中调用PHP代码 -->
    <p>{{ time() }}</p>
    <p>{{ date('Y-m-d H:i:s', time()) }}</p>

    <!-- 3.原样输出 -->
    <p>@{{ $name }}</p>

    {{-- 4.模板中注释 --}}

    {{-- 5.引入子视图 --}}
    @include('student.commen', ['message' => '我是错误信息'])

    @if ($name == 'fenlan')
        I'm fenlan
    @elseif ($name == 'hello')
        I'm hello
    @else
        Who am I?
    @endif

    <br>
    @unless ($name != 'fenlan')
        I'm fenlan
    @endunless

    <br>
    @for ($i=0; $i < 10; $i++)
        {{ $i }}
    @endfor

@stop
