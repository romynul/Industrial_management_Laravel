<?php

namespace App\Http\Controllers;
use App\Labours;
use App\Logs;
use Illuminate\Http\Request;
use App\Http\Requests\LabourRequest;

class LabourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $labourList = Labours::all();
        return view('labour.index', ['labour'=> $labourList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(){
        return view('labour.add_labour');
    }

    public function create(LabourRequest $req)
    {
       $labour = new Labours();
        $labour->lname = $req->labourName;
        $labour->laddress = $req->labourAddress;
        $labour->lcontact = $req->labourContact;
        $labour->expertise = $req->labourExperties;
        $labour->salary = $req->labourSalary;
        $labour->save();

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $req->labourName.' labour Added';
        $log->save();

        return redirect()->route('dashboard.labour');
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
        $labour = Labours::find($id);
        return view('labour.edit_labour', ['labour'=>$labour]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LabourRequest $req, $id)
    {
       
        $labour = Labours::find($id);

        $labour->lname = $req->labourName;
        $labour->laddress = $req->labourAddress;
        $labour->lcontact = $req->labourContact;
        $labour->expertise = $req->labourExperties;
        $labour->salary = $req->labourSalary;
        $labour->save();

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $req->labourName.' labour information Updated';
        $log->save();

       return redirect()->route('dashboard.labour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function delete($id){
        $labour = Labours::find($id);
        return view('labour.delete_labour', ['labour'=>$labour]);
       
    }



    public function destroy($id)
    {
        labours::destroy($id);

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $id.' labour info deleted';
        $log->save();

        return redirect()->route('dashboard.labour');
    }
}