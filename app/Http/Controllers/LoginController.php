<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\userinfos;


class LoginController extends Controller
{
    //
    public function login(Request $request){
        return view('login');
    }
    public function loginSubmit(Request $req){
        $c = userinfos::where('email',$req->email)
                  ->where('password',md5($req->password))
                  ->first();
                  $this->validate(
                    $req,
                    [   
                        'email'=>'required|email',
                        'password'=>'required',
                    ],
                    [
                        
                        'email.required'=>'Please put your email address',
                        'password.required'=>'Please put your password',
                        
                    ]
                );
                if($c){
                    session()->put('user',$c->id);
                    if($c->type == 'Admin'){
                        return view('pages.admin.dashboard');
                    }
                    if($c->type =='Moderator'){
                        return view('pages.moderator.dashboard');
                    }
                    if($c->type =='Initiator'){
                        return view('pages.initiator.dashboard');
                    }
                    if($c->type =='Donor'){
                        return view('pages.donor.dashboard');
                    }
                }
        return redirect()->route('login');

    }
    public function logout(){
        session()->flush();
        return redirect()->route('login');
    }
}
