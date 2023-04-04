<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;


class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Illuminate\Http\Respose;
     */
    public function index()
    {
        $headers = Header::all();
        
        return view('header.index', compact('headers'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Illuminate\Http\Respose;
     */
    public function create()
    {
        return view('header.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Illuminate\Http\Request;
     * @return Illuminate\Http\Respose
     */
    public function store(Request $request) 
    {
        $request->validate([
            'title' => 'required','description' => 'required', 'image' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Header::create($input);

        return redirect('/headers')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param Illuminate\Http\Request
     * @return Illuminate\Http\Respose
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param Illuminate\Http\Request
     * @return Illuminate\Http\Respose
     */
    public function edit(Header $header)
    {
        return view('header.edit', compact('header'));
    }

    /**
     * Update the specified resource in storage.
     * @param Illuminate\Http\Request
     * @param App\Models\Header;;
     * @return Illuminate\Http\Respose
     */
    public function update(Request $request, Header $header)
    {
        $request->validate([
            'title' => 'required','description' => 'required', 'image' => 'image'
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

        $header->update($input);

        return redirect('/headers')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Header $header)
    {
        $header->delete();

        return redirect('/headers')->with('message', 'Data Berhasil Dihapus');
    }
}
