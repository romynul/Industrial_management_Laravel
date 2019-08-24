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
		

		$result = DB::table('employee')->where('username', $req->uname)
				->where('password', $req->password)
				->get();
		
		//echo $result[0]->type;

		if(count($result) > 0){

			if($result[0]->role=="admin"){

			$req->session()->put('user', $req->uname);
			$req->session()->put('type', $result[0]->role);
			return redirect()->route('dashboard.index');
			}
			else{
			$req->session()->put('user', $req->uname);
			$req->session()->put('type', $result[0]->role);
			return redirect()->route('products.index');
			}
		}else{
			$req->session()->flash('msg', 'invalid username or password');
			return redirect()->route('login.index');
			//return view('login.index');
		}
	}
}
