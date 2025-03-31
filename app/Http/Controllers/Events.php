<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Event;

class Events extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        
        return response()->json($events);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
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
=======
        
>>>>>>> 13ee9b4e8eaa02b1ed201c445a8aa15140b91ba0
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        return response()->json($event);
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
        $event = Event::find($id);
        if (!$event) {
            return response()->json(['message' => 'Evento não encontrado'], 404);
        }
        $event->delete();
        return response()->json(['message' => 'Evento deletado com sucesso']);
    }
}
