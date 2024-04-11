<?php

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        return view('characters.index', compact('characters'));
        $table->foreignId('type_id')->constrained('types');

    }

    public function create()
    {
        return view('characters.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:200',
            'description' => 'nullable',
            'attack' => 'required|integer',
            'defence' => 'required|integer',
            'speed' => 'required|integer',
            'life' => 'required|integer',
        ]);

        Character::create($validatedData);
        return redirect()->route('characters.index');
        
    }

       
}

   

