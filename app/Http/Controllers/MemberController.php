<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $member=Member::all();
        return view('index',compact('member'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('member.createmember');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email'
        ]);
    
        Member::create($request->only(['name', 'email']));
    
        return redirect()->route('member.create')->with('success', 'Usuari creat correctament');
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
    public function destroy($id)
    {
    }
}
