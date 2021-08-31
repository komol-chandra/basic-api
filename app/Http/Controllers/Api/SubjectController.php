<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        return \response()->json($subjects);
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
            'name'        => 'required|unique:subjects|max:25',
            'class_id'    => 'required',
            'sections_id' => 'required',
        ]);
        $save_modal              = new Subject();
        $save_modal->name        = $request->name;
        $save_modal->class_id    = $request->class_id;
        $save_modal->sections_id = $request->sections_id;
        $save_modal->code        = $request->code;
        $save_modal->save();
        return \response("Data Inserted Successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::find($id)->first();
        return \response()->json($subject);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name'        => 'required|unique:subjects|max:25',
            'class_id'    => 'required',
            'sections_id' => 'required',
        ]);
        $save_modal              = Subject::find($id)->first();
        $save_modal->name        = $request->name;
        $save_modal->class_id    = $request->class_id;
        $save_modal->sections_id = $request->sections_id;
        $save_modal->code        = $request->code;
        $save_modal->save();
        return \response("Data Updated Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subject::find($id)->delete();
        return \response("data Deleted");
    }
}
