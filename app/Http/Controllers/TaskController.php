<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;


class TaskController extends Controller
{
            /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all(); 
        return view('dashboard', compact('teams'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();
        
        return view('task.createtasks', compact('teams'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'team_id' => 'required|exists:teams,id',
            'start_date' => 'required|date',  
            'due_date' => 'nullable|date',  
            'status' => 'required|in:pendiente,en_progreso,completada',
        ]);
    
        // Crear la tarea
        Task::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'teamid' => $validated['team_id'],
            'start_date' => $validated['start_date'], 
            'due_date' => $validated['due_date'] ?? null,
            'status' => $validated['status'],
        ]);
        
        return redirect()->route('tasks.create')->with('success', 'Tasca creada amb exit');
    }   
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
