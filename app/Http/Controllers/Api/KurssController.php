<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kursi;

class KurssController extends Controller
{
    public function index()
    {
        $kursi = Kursi::all();

        return response()->json($kursi);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nosaukums' => 'required|max:255',
            'paskaidrojums' => 'required',
            'banera_adress' =>'required',
            'cilveku_skaits' => 'required|integer|min:0',
        ]);

        $kursi=Kursi::create($validateData);

        return response()->json($kursi,201);
        
    }


}
