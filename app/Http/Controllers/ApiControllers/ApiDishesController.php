<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiDishesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \App\Models\Dish::all();
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
        $data = $request->json()->all();
        $rules = [
            'dish_name' => 'required',
            'price' => 'required', 
            'restourant_id' => 'required',
            
        ];

        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            $dish = new \App\Models\Dish();
            $dish->dish_name = $data['dish_name'];
            $dish->price = $data['price'];
            $dish->restourant_id = $data['restourant_id'];
            return ($dish->save() !== 1) ? 
                response()->json(['success' => 'success'], 201) : 
                response()->json(['error' => 'saving to database was not successful'], 500)  ;
        } else {
            return $validator->errors()->all();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return \App\Models\Dish::findOrFail($id);
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
        $dish=\App\Models\Dish::find($id);
        $dish->update($request->all());
        return (\App\Models\Dish::findOrFail($id) == true) ?
        response()->json(['success' => 'success'], 200) : 
        response()->json(['error' => 'updating database was not successful'], 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return (\App\Models\Dish::destroy($id) == 1) ? 
        response()->json(['success' => 'success'], 200) : 
        response()->json(['error' => 'deleting from database was not successful'], 500);
    }
}
