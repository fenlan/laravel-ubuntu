<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>laravel模板继承</title>
    <style>
        .header {
            width: 1000px;
            height: 150px;
            margin: 0 auto;
            background: #f5f5f5;
            border: 1px solid #ddd;
        }

        .main {
            width: 1000px;
            height: 300px;
            margin: 0 auto;
            margin-top: 15px;
            clear: both;
        }

        .main .sidebar {
            float: left;
            width: 20%;
            height: inherit;
            background: #f5f5f5;
            border: 1px solid #ddd;
        }

        .main .content {
            float: right;
            width: 75%;
            height: inherit;
            background: #f5f5f5;
            border: 1px solid #ddd;
        }

        .footer {
            width: 1000px;
            height: 150px;
            margin: 0 auto;
            margin-top: 15px;
            background: #f5f5f5;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class='header'>
        @section('header')
        头部
        @show
    </div>

    <div class='main'>
        <div class='sidebar'>
            @section('sidebar')
            侧边栏
            @show
        </div>
        <div class='content'>
            @yield('content', '主要内容')
        </div>
    </div>

    <div class="footer">
        @section('footer')
        尾部
        @show
    </div>

</body>
</html>
