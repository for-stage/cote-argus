<?php

namespace App\Http\Controllers;
use App\Models\animal;

use Illuminate\Http\Request;

class AnimalControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //all animals
        $animals= animal::all();
        return response()->json($animals);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        //create a new animal
        $animal=new animal();
        $animal->name=$request->name;
        $animal->type=$request->type;
        $animal->color=$request->color;
        $animal->save();  
        return response()->json(['message' => 'Animal created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        return response()->json([
            'animal', $animal
        ]);
        
       
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete animal by id
        Animal::destroy($id);
        return response()->json(['message' => 'Animal deleted successfully']);
        
        
    }
}
