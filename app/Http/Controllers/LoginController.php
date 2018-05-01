<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User; 

use Hash;

class LoginController extends Controller
{
    public function login(Request $request){

        $email=$request->input('email');

        $password=Hash::make($request->input('password'));

        if(Auth::attempt(['email'=>$email,'password'=>$password])){

            $user=$request->user();

            $xml="<loginUser>";

            $xml.=XmlCreator::xmlEncode('user',$user);

            $xml.="<result><code>1</code><message>用户信息加载成功</message></result>";

            $xml.="</loginUser>";

        }

        return $xml;
    }
}
