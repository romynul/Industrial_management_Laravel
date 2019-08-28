<?php

namespace App\Http\Controllers;

use App\Expenses;
use App\Logs;

use Illuminate\Http\Request;
use App\Http\Requests\ExpenseRequest;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
       $expense = Expenses::all();
        return view('expense.index', ['expense'=> $expense]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(){
        return view('expense.add_expense');
    }

    public function create(ExpenseRequest $req)
    {
        $expense = new Expenses();
        $expense->purpose = $req->purpose;
        $expense->details = $req->details;
        $expense->amount = $req->expenseAmount;
        $expense->edate = date('Y-m-d H:i:s');
        $expense->save();

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $req->purpose.' purpose expense Added';
        $log->save();

        return redirect()->route('dashboard.expense');
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
         $expense = Expenses::find($id);
        return view('expense.edit_expense', ['expense'=>$expense]);
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
       
         
        $expense = Expenses::find($id);
        $expense->purpose = $req->purpose;
        $expense->details = $req->details;
        $expense->amount = $req->expenseAmount;
        $expense->save();

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $req->cname.' expense Information update';
        $log->save();

        return redirect()->route('dashboard.expense');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function delete($id){

        $expense = Expenses::find($id);
        return view('expense.delete_expense', ['expense'=>$expense]);
       
    }



    public function destroy($id)
    {
        Expenses::destroy($id);
        $log = new Logs();
        $log->employee = session('user');
        $log->action = $id.' id expense Information Deleted';
        $log->save();
        
        return redirect()->route('dashboard.expense');
    }
}
