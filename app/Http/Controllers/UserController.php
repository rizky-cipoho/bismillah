<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request){
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password, 'role'=>'user'])) {
            $request->session()->regenerate();

            return redirect('/');
        }
        return back();
    }
    public function logout(Request $request){
        Auth::logout();
        
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        return back();
    }
    public function register(Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'telp'=>$request->telp,
            'address'=>$request->address,
            'sim'=>$request->sim,
            'role'=>'user',
            'password'=>bcrypt($request->password),
        ]);
        
        return back();
    }
}
