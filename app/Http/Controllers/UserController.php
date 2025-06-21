<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function register(){
        $data['title'] = "Register";
        return view('auth.register', $data);
    }

    public function registerAction(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'designation' => 'required',
            'username' => 'required | unique:users',
            'password' => 'required',
            'cpassword' => 'required | same:password',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'designation' => $request->designation,
            'profile' => '',
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        $user->save();
        return redirect()->route('login')->with('success', "Registration Successfull!, Please Login!");
    }

    public function login(){
        $data['title'] = "Login";
        return view('auth.login', $data);
    }

    public function loginAction(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return back()->with('error', "Wrong username or password!");
    }

    public function password(){
        $data['title'] = "Password";
        return view('auth.password', $data);
    }

    public function passwordAction(Request $request){
        $request->validate([
            'opassword' => 'required | current_password',
            'npassword' => 'required',
            'cpassword' => 'required | same:npassword',
        ]);

        $user = User::find(Auth::id());
        $user->password = Hash::make($request->npassword);
        $user->save();
        return back()->with('success', 'Password successfully changed!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function edit(){
        return view('profile.index');
    }

    public function update(Request $request){
        try{
            $url = '';
            DB::beginTransaction();
            $user = User::find(Auth::id());
            if(isset($request->dp)){
                $url =  $request->dp;
            }
            if(isset($request->profile)){
                $url = time().'.'.$request->profile->extension();  
                $request->profile->move('assets/images/profile', $url);
            }
            $user->profile = $url;
            $user->save();

            DB::commit();
            $response["msg"] = "Profile has been successfully updated";
            $response["status"] = "Success";
            $response["is_success"] = true;
            Session::flash('success', "Profile has been successfully updated");
            return redirect('/home');
        }
        catch(\Exception $ex)
        {
            $response["msg"] = "Operation failed. Please try again.";
            $response["exception"] = $ex->getMessage();
            $response["status"] = "Failed";
            $response["is_success"] = false;
            Session::flash('msg', "Something Went Wrong!");
        }
        return redirect()->back()->withInput();
    }
}
