<?php

namespace App\Http\Controllers;

use App\Models\sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $sections = sections::all();
            return view('sections.sections', compact('sections'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('sections.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData= $request->validate([
            'section_name' => 'required|unique:sections|max:255',
            'Description' => 'required',
        ]);

        sections::create([
            'section_name' => $request->section_name,
            'Description' => $request->Description,
            'Created_by' => (Auth::user()->name),
        ]);

        return redirect('/sections')->with("success","This Product Is Added In Our Data Base");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sectionSignalShow = sections::find($id);

        return view('sections.show' , compact('sectionSignalShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sectionSignalEdit = sections::find($id);

        return view('sections.edit' , compact('sectionSignalEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        
        $validateData= $request->validate([
            'section_name' => 'required|unique:sections,section_name,'.$id,
            'Description' => 'required',
        ]);

       $finderSectionToUpdated =  sections::find($id);

       $finderSectionToUpdated->update([
            'section_name' => $request->section_name,
            'Description' => $request->Description,
            'Created_by' => (Auth::user()->name),
       ]);

        return redirect('/sections')->with("updated","This Product Is Updated In Our Data Base");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $finderSectionToDelete = sections::find($id);
        $finderSectionToDelete->delete();
        return redirect('/sections')->with("Deleted","This Product Is Deleted In Our Data Base");
    }
}
