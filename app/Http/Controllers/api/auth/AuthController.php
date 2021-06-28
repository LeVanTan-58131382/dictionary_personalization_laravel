<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $newUser = new User;

        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);
        
        if($newUser->save()){
            return response()->json(["result" => "successful", "message" => "Đăng ký thành công!", "user" => $newUser ]);
        }

        return response()->json(["result" => "failed", "message" => "Đăng ký không thành công!"]);
    }

    public function login(Request $request)
    {
        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
            
        //     return response()->json(["message" => "Đăng nhập thành công"]);
        // }
        $login = $request->validate([
            "email" => "required|string",
            "password" => "required|string"
        ]);

        if( !Auth::attempt( $login )){
            return response(["result" => "failed", "message" => "Thông tin đăng nhập không đúng!"]);
        }

        $accessToken = Auth::user()->createToken("authToken")->accessToken;

        return response(["result" => "successful", "message" => "Đăng nhập thành công!", "user" => Auth::user(), "accessToken" => $accessToken]);
    }

    public function logout()
    {
        if(Auth::logout())
        {
            return response(["result" => "successful", "message" => "Đăng xuất thành công!"]);
        }

        return response(["result" => "failed", "message" => "Đăng xuất không thành công!"]);

    }
}
