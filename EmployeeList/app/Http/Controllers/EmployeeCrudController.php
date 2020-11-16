<?php

namespace App\Http\Controllers;

use App\EmployeeCrud;
use Illuminate\Http\Request;

class EmployeeCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = EmployeeCrud::all()->toArray();

        return view('pages/index',['data'=>$datas]); 
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crud = new EmployeeCrud([
            
            'name' => $request->get('name'),
            'gender' => $request->get('gender'),
            'designation' => $request->get('designation'),
            'district' => $request->get('district'),

            
        
        
        ]);

        $crud->save();

        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmployeeCrud  $employeeCrud
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeCrud $employeeCrud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmployeeCrud  $employeeCrud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = EmployeeCrud::find($id);
        return view('pages.edit', compact('crud','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmployeeCrud  $employeeCrud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeCrud $employeeCrud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmployeeCrud  $employeeCrud
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeCrud $employeeCrud)
    {
        //
    }
}
