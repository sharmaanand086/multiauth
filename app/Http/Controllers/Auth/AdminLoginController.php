<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminLoginController extends Controller
{
	public function __construct(){
      $this->middleware('guest:admin', ['except' => ['logout']]);
	}
    public function showLoginForm(){
    	return view('auth.admin-login');
    }

    public function login(Request $request){
    	//return true;
    	//validate the form data 
        $this->validate($request,[
      'email' => 'required|email',
      'password'=> 'required|min:6'
        ]);

    	//attempt to user login 
  
/*Auth::attempt($credentials,$remember);
Auth::guard('admin')->attempt($credentials,$remember);*/
  if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember))
  {
    //if successfull redirect to intended location
return redirect()->intended(route('admin.dashboard'));
  }
  
    	//if unsuccefull
  	return redirect()->back()->withInput($request->only('email','remember'));
  }


  public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    
}
