<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function login(){
        return view ('content.contentlogin');
    }
    public function regis(){
        return view ('content.contentregis');
    }

    public  function login_proses(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('adminhome');
        }else{
            return redirect()->route('login')->with('failed','Email atau Password salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','Anda Berhasil Log Out');
    }
    public function regis_proses(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] =hash::make($request->password);

        user::create($data);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($login)){
            return redirect()->route('adminhome');
        }else{
            return redirect()->route('login')->with('failed','Email atau Password salah');
        }
        
    }
}
