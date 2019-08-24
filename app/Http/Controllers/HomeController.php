<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Employee;
use Validator;
use App\Http\Requests\StudentRequest;

class HomeController extends Controller
{


    public function index(Request $req){
		return view('home.index');
	}

    public function add(){
    	return view('home.add');
    }

    public function create(StudentRequest $req){

 
           

    	$employee = new Employee();
    	$employee->username = $req->uname;
    	$employee->password = $req->password;
    	$employee->emp_name = $req->name;
    	$employee->contact_no = $req->contact;
    	$employee->role = "employee";
    	$employee->save();

        $data = Employee::where('username', $req->uname)->where('password', $req->password)->get();
        return redirect()->route('home.details', $data[0]->id);

    }

	public function details($id){

		$std = Employee::find($id);
		
		return view('home.details', ['std'=>$std]);
    }

    public function show(){

    	$stdList = Employee::all();

        //return json($stdlist);
    	return view('home.stdlist', ['std'=> $stdList]);
    }
	
	public function edit($id){

		$std = Employee::find($id);
		return view('home.edit', ['std'=>$std]);
    }

    public function update(Request $req, $id){

    	$employee = Employee::find($id);

    	$employee->username = $req->uname;
        $employee->emp_name = $req->name;
        $employee->contact_no = $req->contact;
    	$employee->save();

		return redirect()->route('home.stdlist');
    }
	public function delete($id){

		$std = Employee::find($id);
		return view('home.delete', ['std'=>$std]);
    }

    public function destroy($id){

		Employee::destroy($id);
		return redirect()->route('home.stdlist');
	}

    public function profile(){

        return view('home.profile');
    }

    public function upload(Request $req){


        if($req->hasFile('pic')){

            $file = $req->file('pic');

/*          echo "Name: ".$file->getClientOriginalName();
            echo "<br>Extension: ".$file->getClientOriginalExtension();
            echo "<br>Size: ".$file->getSize();
            echo "<br>Mime Type: ".$file->getMimeType();
*/
            if($file->move('upload', $file->getClientOriginalName())){
                echo "success";
            }else{
                echo "error";
            }

        }else{
            echo "File upload error!";
        }

    }
}




