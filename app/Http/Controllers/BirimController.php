<?php

namespace App\Http\Controllers;

use App\Models\Birim;
use Illuminate\Http\Request;

class BirimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $birims = Birim::all();
        return view('birims.index', compact('birims'));
    }
    /**
     * Show the form for creating the resource.
     */
    public function create()
    {        
        return view('birims.create');
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([            
            'birim_ad' => ['required', 'max:255'],            
        ]);        
    
        //Verilerimizi veritabanına gönderelim:
        $birim = new Birim();
        $birim->birim_ad = $request->birim_ad;        
        $birim->save();
    
        return redirect()->route('birims.index');
    }

    /**
     * Display the resource.
     */
    public function show(string $id)
    {
        $birim = Birim::findOrFail($id);   
        return view('birims.show', compact('birim')); 
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit(string $id)
    {
        $birim = Birim::findOrFail($id);         
        return view('birims.edit', compact('birim')); 
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([            
            'birim_ad' => ['required', 'max:255'],            
        ]);        
    
        //Verilerimizi veritabanına gönderelim:        
        $birim = Birim::findOrFail($id);
        $birim->birim_ad = $request->birim_ad;        
        $birim->save();
    
        return redirect()->route('birims.index');
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(string $id)
    {
        $birim = Birim::findOrFail($id);
        $birim->delete();

        return redirect()->route('birims.index');
    }
}
