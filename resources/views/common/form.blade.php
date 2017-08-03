<!-- <form class="form-horizontal" method="post" action="@{{ url('student/save') }}"> -->
<form class="form-horizontal" method="post" action="">
    <!-- 解决 TokenMismatchException in VerifyCsrfToken.php line 68 问题 -->
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">姓名</label>

        <div class="col-sm-5">
            <input type="text" name="Student[name]"
                   value="{{ old('Student')['name'] ? old('Student')['name'] : $student->name }}"
                   class="form-control" id="name" placeholder="请输入学生姓名">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors->first('Student.name') }}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="age" class="col-sm-2 control-label">年龄</label>

        <div class="col-sm-5">
            <input type="text" name="Student[age]"
                   value="{{ old('Student')['age'] ? old('Student')['age'] : $student->age }}"
                   class="form-control" id="age" placeholder="请输入学生年龄">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors->first('Student.age') }}</p>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">性别</label>

        <div class="col-sm-5">
            @foreach($student->getSex() as $ind=>$val)
                <label class="radio-inline">
                    <input type="radio" name="Student[sex]"
                           {{ isset(old('Student')['sex']) && old('Student')['sex'] == $ind ? 'checked' : '' }}
                           {{ isset($student->sex) && $student->sex == $ind ? 'checked' : '' }}
                           value="{{ $ind }}"> {{ $val }}
                </label>
            @endforeach
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors->first('Student.sex') }}</p>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">提交</button>
        </div>
    </div>
</form>