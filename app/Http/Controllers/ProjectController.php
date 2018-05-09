<?php

namespace App\Http\Controllers;

use Auth;
use App\Model\Project;
use Illuminate\Http\Request;

class ProjectController extends SuperController
{

	public $model = Project::class;

	// create your validation rules 
	public function rules(){
		return [
			'name' => 'required'
		];
	}
    /**
     * Display a listing of the projects a user has
	 *  control over
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		$projects = Auth::user()->projects->get();
        return response()->json($projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	}
	
    /**
	 * Store a newly created project
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
     */
	public function store(Request $request)
    {
		//validate the request
		$this->validator($request->all())->validate();
		// create project
		$project = $this->newModel([
			'name' => $request->name,
			'user_id' => Auth::user()->id,
		]);
		if($project){
			return $this->done($project, 'project created successfully');
		}
		return $this->error();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
		//use the data to update the resource
		$project->update($request->all);
		$project->save();
		return $this->done($project, 'project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
		$deleted = $project->toArray();
		$project->destroy();
		return $this->done($deleted, 'project deleted successfully');
    }
}
