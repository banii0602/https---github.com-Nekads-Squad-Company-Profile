<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;


class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Illuminate\Http\Respose;
     */
    public function index()
    {
        $artikels = Artikel::all();
        
        return view('artikel.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Illuminate\Http\Respose;
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Illuminate\Http\Request;
     * @return Illuminate\Http\Respose
     */
    public function store(Request $request) 
    {
        $request->validate([
            'title' => 'required','description' => 'required','description2' => 'required','description3' => 'required', 'image' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Artikel::create($input);

        return redirect('/artikels')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param Illuminate\Http\Request
     * @return Illuminate\Http\Respose
     */
    public function show(artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param Illuminate\Http\Request
     * @return Illuminate\Http\Respose
     */
    public function edit(artikel $artikel)
    {
        return view('artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     * @param Illuminate\Http\Request
     * @param App\Models\artikel;;
     * @return Illuminate\Http\Respose
     */
    public function update(Request $request, artikel $artikel)
    {
        $request->validate([
            'title' => 'required','description' => 'required','description2' => 'required','description3' => 'required', 'image' => 'image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }else{
            unset($input['image']);
        }

        $artikel->update($input);

        return redirect('/artikels')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(artikel $artikel)
    {
        $artikel->delete();

        return redirect('/artikels')->with('message', 'Data Berhasil Dihapus');
    }
}
