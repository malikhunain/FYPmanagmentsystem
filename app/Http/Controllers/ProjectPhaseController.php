<?php

namespace App\Http\Controllers;

use App\Models\ProjectPhase;
use Illuminate\Http\Request;

class ProjectPhaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($projectId)
    {
        $phases = ProjectPhase::where('project_id', $projectId)->get();
        return view('student.project.upload', compact('phases'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectPhase $projectPhase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectPhase $projectPhase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectPhase $projectPhase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectPhase $projectPhase)
    {
        //
    }
}
