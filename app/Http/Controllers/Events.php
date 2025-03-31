<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Events extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "teste";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Rules = [
            'title' => 'required|min:3|max:40',
            'description' => 'required|min:10|max:250',
            'date' => 'required',
            'location' => 'required|min:3|max:40',
            'capacity' => 'required',
            'status' => 'required',
        ];

        $Feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'description.min' => 'O campo deve conter mais de 3 caracteres',
            'location.min' => 'O campo deve conter mais de 3 caracteres',
            'description' => 'O campo deve conter mais de 10 caracteres'
        ];

        $request->validate($Rules, $Feedback);

        $events = $this->events->create([
        'user_id' => $request->user_id,
        'title'=> $request->title,
        'description' => $request->description,
        'date' => $request->date,
        'location' => $request->location,
        'capacity' => $request->capacity,
        'status' => $request->status,
        ]);


        return response()->json($events, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
