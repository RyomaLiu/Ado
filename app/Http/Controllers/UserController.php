<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as INPUT_DATA;
use App\User;
use App\UserInfo;
use DB;

class UserController extends Controller
{

	public function welcome() {
		return view("login.welcome");
	}

    public function login() {
    	return view("login.login");
    }

    public function login_do() {
        $input = INPUT_DATA::all();
        $result = User::where("user_name","=",$input["user_name"])->where("user_password","=",$input["user_password"])->get();
        if (count($result)==1) {
            $msg = $result[0]["user_name"]." 恭喜您登录成功";
            return view("login.msg",compact("msg"));   
        } else {
            $msg = "登录失败";
            return view("login.msg",compact("msg")); 
        }
    }

    public function regist() {
    	return view("login.regist");
    }

    public function regist_do() {
        $input = INPUT_DATA::all();
        $user = new User();
        $user->user_name = $input["user_name"];
        $user->user_password = $input["user_password"];
        if ($user->save()){
            $msg = $user->user_name." 您已注册成功！";
            return view("login.msg",compact("msg"));
        } else {
            $msg = "注册失败";
            return view("login.msg",compact("msg"));
        }
    }

}
