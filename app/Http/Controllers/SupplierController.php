<?php

namespace App\Http\Controllers;
use App\Suppliers;
use App\Logs;

use Illuminate\Http\Request;
use App\Http\Requests\SupplierRequest;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $supplierList = Suppliers::all();
        return view('supplier.index', ['supplier'=> $supplierList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(){
        return view('supplier.add_supplier');
    }

    public function create(SupplierRequest $req)
    {
        $suppliers = new Suppliers();
     
        $suppliers->sname = $req->sname;
        $suppliers->cowner = $req->cowner;
        $suppliers->address = $req->address;
        $suppliers->contact = $req->contact;
        $suppliers->details = $req->details;
        $suppliers->tbuy = 0;
        $suppliers->balance = 0;
        $suppliers->save();

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $req->sname.' supplier added';
        $log->save();

        return redirect()->route('dashboard.supplier');
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
        $supplier = Suppliers::find($id);
        return view('supplier.edit_supplier', ['supplier'=>$supplier]);
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
       
        $supplier = Suppliers::find($id);

        $supplier->sname = $req->sname;
        $supplier->cowner = $req->cowner;
        $supplier->address = $req->address;
        $supplier->contact = $req->contact;
        $supplier->save();

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $req->sname.' supplier info updated';
        $log->save();

        return redirect()->route('dashboard.supplier');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function delete($id){

         $supplier = Suppliers::find($id);
        return view('supplier.delete_supplier', ['supplier'=>$supplier]);
    }



    public function destroy($id)
    {
        Suppliers::destroy($id);

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $id.' id supplier deleted';
        $log->save();
        return redirect()->route('dashboard.supplier');
    }
}