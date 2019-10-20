<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;

class TestController extends Controller
{
    public function test(Request $res) {
				dump(Input::method());
				$info1 = $info2 = $info3 = $info4 = '';
				if(Input::method() == 'GET') {
					return view('test', compact('info1', 'info2', 'info3', 'info4'));
				}else {
					$all = $res->all();
					$validator = Validator::make($all, [
						'name'=>'required|min:2|max:10',
						'sex'=>'required',
						'age'=>'required|integer|min:18|max:60',
						'email'=>'required|min:10|max:20'
					]);
					if($validator->passes()){
						echo '验证成功！';
						dump($all);
					}else {
						$info = $validator->messages()->toArray();		//获取错误信息
						if(isset($info['name']))
							$info1 = '*'.implode(';',$info['name']);
						if(isset($info['sex']))
							$info2 = '*'.implode(';',$info['sex']);
						if(isset($info['age']))
							$info3 = '*'.implode(';',$info['age']);
						if(isset($info['email']))
							$info4 = '*'.implode(';',$info['email']);
						return view('test', compact('info1', 'info2', 'info3', 'info4'));
					}
				}
	}
}