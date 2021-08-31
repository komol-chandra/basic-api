<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::all();
        return \response()->json($sections);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'     => 'required|unique:sections|max:25',
            'class_id' => 'required',
        ]);
        $save_modal           = new Section();
        $save_modal->name     = $request->name;
        $save_modal->class_id = $request->class_id;
        $save_modal->save();
        return \response("Data Inserted Successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $section = Section::find($id)->first();
        return \response()->json($section);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name'     => 'required|unique:sections|max:25',
            'class_id' => 'required',
        ]);
        $update_model           = Section::find($id)->first();
        $update_model->class_id = $request->class_id;
        $update_model->name     = $request->name;
        $update_model->save();
        return response('Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Section::find($id)->delete();
        return \response('Data Deleted');
    }
}
