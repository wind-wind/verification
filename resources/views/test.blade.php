<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>表单验证</title>
</head>
<body>
	    @if ($errors->any())
	        @foreach ($errors->all() as $error)
	            * {{ $error }}<br />
	        @endforeach
	    @endif
  <div>
    <form action="/test" method="post">
      {{csrf_field()}}
      姓名：<input type="text" name="name"><span>{{$info1}}</span><br>
      性别：<input type="text" name="sex"><span>{{$info2}}</span><br>
      年龄：<input type="text" name="age"><span>{{$info3}}</span><br>
      邮箱：<input type="email" name="email"><span>{{$info4}}</span><br>
      <!-- 验证码：<input type="text" name="captcha"><br><img src="{{captcha_src()}}" alt="验证码"><span></span><br> -->
      <input type="submit" value="提交">
    </form>
  </div>
</body>
</html>