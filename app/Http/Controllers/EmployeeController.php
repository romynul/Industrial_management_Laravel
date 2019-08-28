<?php

namespace App\Http\Controllers;

use App\Users;
use App\Logs;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
       $userList = Users::all();
        return view('employee.index', ['user'=> $userList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(){
        return view('employee.add_employee');
    }

    public function create(EmployeeRequest $req)
    {
        $users = new Users();
     
        $users->ename = $req->ename;
        $users->email = $req->email;
        $users->password = $req->password;
        $users->address = $req->address;
        $users->contact = $req->contact;
        $users->type = $req->type;
        $users->esalary = $req->esalary;
   
        
        $users->save();

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $req->cname.' Employee Added';
        $log->save();

        return redirect()->route('dashboard.employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user = Users::find($id);
        return view('employee.edit_employee', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
       
         $user = Users::find($id);

        $user->email = $req->email;
        $user->ename = $req->ename;
        $user->contact = $req->contact;
        $user->address = $req->address;
        $user->esalary = $req->esalary;
        
   
        $user->save();

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $req->cname.' Employee Information update';
        $log->save();

        return redirect()->route('dashboard.employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function delete($id){

        $user = Users::find($id);
        return view('employee.delete_employee', ['user'=>$user]);
       
    }



    public function destroy($id)
    {
        Users::destroy($id);
        $log = new Logs();
        $log->employee = session('user');
        $log->action = $id.' id Employee Information Deleted';
        $log->save();
        
        return redirect()->route('dashboard.employee');
    }
}
