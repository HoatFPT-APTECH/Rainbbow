<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\MovieCategory;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listMovie= Movie::with('movieCategory','director','productor')->get();
        return view("AdminViews.index",['page'=>'movie'],['danhsach'=>$listMovie]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ListCategory= MovieCategory::all();
        return view("AdminViews.index",[
            'page'=>'movieCreate',
        "ListCategory"=>$ListCategory]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $Movie= Movie::find($id);
        return view("AdminViews.index",['page'=>'movieShow'],['Movie'=>$Movie]);
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
    public function destroy(string $id)
    {
        //
    }
}