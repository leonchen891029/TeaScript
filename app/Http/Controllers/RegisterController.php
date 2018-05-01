<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

//使用Validator门面
use Validator;

use Hash;

class RegisterController extends Controller
{
    public function register(Request $request){

        $name=$request->input('name');

    	$email=$request->input('email');

    	$password=Hash::make($request->input('password'));

    	$validator=Validator::make($request,User::$registerRules);

    	if($validator->passes()){

    		//实习化User对象
    		$user=new User;

    		$user->name=$name;
    		$user->email=$email;
    		$user->password=$password;

    		$user->save();

    		//待补充返回的逻辑
    	}
    	
    }

}
