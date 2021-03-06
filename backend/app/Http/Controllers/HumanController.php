<?php

namespace App\Http\Controllers;

use App\Human;
use Illuminate\Http\Request;

class HumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Human::all();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request  $request)
    {
        $human = new Human;
        $human->human_name = $request->name;
        $human->human_surname = $request->surname;
        $human->human_password = $request->password;     
        $human->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Human  $human
     * @return \Illuminate\Http\Response
     */
    public function show(Human $human)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Human  $human
     * @return \Illuminate\Http\Response
     */
    public function edit(Human $human)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Human  $human
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Human $human)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Human  $human
     * @return \Illuminate\Http\Response
     */
    public function destroy(Human $human)
    {
        //
    }
}
