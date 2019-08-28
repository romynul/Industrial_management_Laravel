<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
   
	public function index(){	

		return view('login.index');
	}

	public function verify(Request $req){	
		

		$result = DB::table('users')->where('email', $req->uname)
				->where('password', $req->password)
				->get();
		
		//echo $result[0]->type;

		if(count($result) > 0){
			$req->session()->put('user', $req->uname);
			$req->session()->put('type', $result[0]->type);
			return redirect()->route('dashboard.index');
		}else{
			$req->session()->flash('msg', 'invalid username or password');
			return redirect()->route('login.index');
			//return view('login.index');
		}
	}
}
