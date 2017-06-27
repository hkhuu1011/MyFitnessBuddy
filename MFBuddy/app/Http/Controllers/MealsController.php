<?php

namespace App\Http\Controllers;

use App\meals;
use Illuminate\Http\Request;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function meals()
    {
        $title = 'Meals';
        return view('pages.meals', compact('title'));
    }

    public function mealsCreate()
    {
        $title = 'Add your Meal';
        return view('pages.mealsCreate', compact('title'));
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
        $new            = new meals();
        $new->name      =  $request->get( 'name');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function show(meals $meals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function edit(meals $meals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, meals $meals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function destroy(meals $meals)
    {
        //
    }
}
