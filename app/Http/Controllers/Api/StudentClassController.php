<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\StudentClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = StudentClass::get();
        return response()->json($classes);
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
            'name' => 'required|unique:student_classes|max:25',
        ]);

        $data         = [];
        $data['name'] = $request->name;
        $insert       = DB::table('student_classes')->insert($data);
        return \response("Data Inserted Successfully!");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentClass  $studentClass
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = StudentClass::find($id)->first();
        return \response()->json($show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentClass  $studentClass
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentClass $studentClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentClass  $studentClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required|unique:student_classes|max:25',
        ]);

        $data         = [];
        $data['name'] = $request->name;
        $insert       = StudentClass::find($id)->update($data);
        return response('Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentClass  $studentClass
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StudentClass::find($id)->delete();
        return \response('Data Deleted');
    }
}
