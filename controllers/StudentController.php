<?php

class StudentController extends \BaseController {

    public function index()
    {
        $studentlist = Student::all();
        return View::make('student.index',compact('studentlist'));
    }


    public function create()
    {
        return View::make('student.create');
    }

    public function store()
    {
        $rules = array(
            'name'=> 'required',
            'cell'=> 'required'
        );
        $student = Input::all();
        $validation = Validator::make($student,$rules);
        if($validation -> passes())
        {
            Student::create($student);
            return Redirect::route('student.index') -> with('message','Added');
        }
    }



    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
