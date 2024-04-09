<?php

namespace App\Http\Controllers;

use App\Models\Birim;
use App\Models\Esya;
use Illuminate\Http\Request;

class EsyaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $esyas = Esya::all();
        return view('esyas.index', compact('esyas'));
    }
    /**
     * Show the form for creating the resource.
     */
    public function create()
    {
        $birims = Birim::all();
        return view('esyas.create', compact('birims'));
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'esya_resim' => ['required', 'max:2028', 'image'],
            'esya_ad' => ['required', 'max:255'],
            'esya_aciklama' => ['required'],
            'esya_birim' => ['required'],
            'esya_stok' => ['required'],
        ]);        
    
        //Resmimizi kayıt ederken unique bir isimle kayıt edelim:
        $fileName = time().'_'.$request->esya_resim->getClientOriginalName();
        $filePath = $request->esya_resim->storeAs('uploads', $fileName);
    
        //Verilerimizi veritabanına gönderelim:
        $esya = new Esya();
        $esya->esya_ad = $request->esya_ad;
        $esya->esya_aciklama = $request->esya_aciklama;
        $esya->birim_id = $request->esya_birim;
        $esya->esya_stok = $request->esya_stok;
        $esya->esya_resim = $filePath;
        $esya->save();
    
        return redirect()->route('esyas.index');
    }

    /**
     * Display the resource.
     */
    public function show(string $id)
    {
        $esya = Esya::findOrFail($id);   
        return view('esyas.show', compact('esya')); 
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit(string $id)
    {
        $esya = Esya::findOrFail($id); 
        $birims = Birim::all();       
        return view('esyas.edit', compact('esya', 'birims')); 
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            // 'esya_resim' => ['required', 'max:2028', 'image'],
            'esya_ad' => ['required', 'max:255'],
            'esya_aciklama' => ['required'],
            'esya_birim' => ['required'],
            'esya_stok' => ['required'],
        ]);        
    
        $esya = Esya::findOrFail($id);
    
        //Request içerisinde file var mı kontrolü:
        if($request->hasFile('esya_resim')) {
            $request->validate([
                'esya_resim' => ['required', 'max:2028', 'image'],             
            ]);
    
            //Resmimizi kayıt ederken unique bir isimle kayıt edelim:
            $fileName = time().'_'.$request->esya_resim->getClientOriginalName();
            $filePath = $request->esya_resim->storeAs('uploads', $fileName);            
            $esya->esya_resim = $filePath;
        }        
    
        //Verilerimizi veritabanına gönderelim:        
        $esya->esya_ad = $request->esya_ad;
        $esya->esya_aciklama = $request->esya_aciklama;
        $esya->birim_id = $request->esya_birim;
        $esya->esya_stok = $request->esya_stok;        
        $esya->save();
    
        return redirect()->route('esyas.index');
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(string $id)
    {
        $esya = Esya::findOrFail($id);
        $esya->delete();

        return redirect()->route('esyas.index');
    }
}
