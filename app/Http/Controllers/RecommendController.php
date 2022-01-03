<?php

namespace App\Http\Controllers;

use App\Models\Recommend;
use Illuminate\Http\Request;

class RecommendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recommends = Recommend::all();
        return view ('recommends.index', compact('recommends'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recommend  $recommend
     * @return \Illuminate\Http\Response
     */
    public function show(Recommend $recommend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recommend  $recommend
     * @return \Illuminate\Http\Response
     */
    public function edit(Recommend $recommend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recommend  $recommend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recommend $recommend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recommend  $recommend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recommend $recommend)
    {
        //
    }
}
