<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projects;
use App\Logs;
use App\SoldHistory;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $projectList = Projects::all();
        return view('project.index', ['project'=> $projectList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(){
        return view('project.add_project');
    }

    public function create(ProjectRequest $req)
    {
       $projects = new Projects();
     
        $projects->pname = $req->pname;
        $projects->client = $req->client;
        
        $projects->tcost = $req->tcost;
        $projects->paid = $req->paid;
        $projects->ecost = $req->ecost;
        $projects->details = $req->details;
        $projects->status = "running";
        $projects->save();

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $req->pname.' project added';
        $log->save();

         return redirect()->route('dashboard.project');
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
        $project = Projects::find($id);
        return view('project.edit_project', ['project'=>$project]);
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
       
        $projects = Projects::find($id);

        $projects->pname = $req->pname;
        $projects->client = $req->client;
        $projects->tcost = $req->tcost;
        $projects->paid = $req->paid;
        $projects->status = $req->status;
        $projects->save();

        if($projects->status=="completed")
        {
        $sold = new SoldHistory();
        
        $sold->pid = $id;
        $sold->pname = $req->pname;
        $sold->tcost = $req->tcost;
        $sold->ecost = $req->ecost;
        $sold->profit = $req->tcost-$req->ecost;
        
        $sold->save();

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $req->pname.' project mark as completed';
        $log->save();

        }

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $req->pname.' project info updated';
        $log->save();

        return redirect()->route('dashboard.project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function delete($id){

       $project = Projects::find($id);
        return view('project.delete_project', ['project'=>$project]);
    }



    public function destroy($id)
    {
        Projects::destroy($id);

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $id .' project deleted';
        $log->save();

        return redirect()->route('dashboard.project');
    }
}