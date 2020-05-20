<?php

namespace App\Http\Controllers;

use App\Receipe;
use App\Category;
use Illuminate\Http\Request;

class ReceipeController extends Controller
{
    public function __construct() {
        return $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receipes = Receipe::where('user_id', auth()->id())->get();
        return view('home', compact('receipes'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('create', compact('categories'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validatedData = request()->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'category' => 'required',
        ]);

        //$receipe = new Receipe();
//
        //$receipe->name = request()->name;
        //$receipe->ingredients = request()->ingredients;
        //$receipe->category = request()->category;
        //$receipe->save();

        Receipe::create($validatedData + ['user_id' => auth()->user()->id]);

        return redirect('/receipe');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Receipe $receipe)
    {
        // if ($receipe->user_id !== auth()->id()) {
        //     abort(404);
        // } 
        $this->authorize('view', $receipe);
        return view('show', compact('receipe'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipe $receipe)
    {
        $this->authorize('view', $receipe);
        $categories = Category::all();
        return view('edit', compact('receipe', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Receipe $receipe)
    {
        $this->authorize('view', $receipe);

        $validatedData = request()->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'category' => 'required',
        ]);

        //$receipe = Receipe::find($receipe->id);
        //$receipe->name = request()->name;
        //$receipe->ingredients = request()->ingredients;
        //$receipe->category = request()->category;
        //$receipe->save();

        $receipe->update($validatedData);

        return redirect('/receipe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipe $receipe)
    {
        $this->authorize('view', $receipe);
        $receipe->delete();
        return redirect('/receipe');
    }
}
