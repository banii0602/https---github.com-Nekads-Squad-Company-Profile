<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;


class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Illuminate\Http\Respose;
     */
    public function index()
    {
        $partners = Partner::all();
        
        return view('partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Illuminate\Http\Respose;
     */
    public function create()
    {
        return view('partner.create');
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

        Partner::create($input);

        return redirect('/partners')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param Illuminate\Http\Request
     * @return Illuminate\Http\Respose
     */
    public function show(partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param Illuminate\Http\Request
     * @return Illuminate\Http\Respose
     */
    public function edit(partner $partner)
    {
        return view('partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     * @param Illuminate\Http\Request
     * @param App\Models\partner;;
     * @return Illuminate\Http\Respose
     */
    public function update(Request $request, partner $partner)
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

        $partner->update($input);

        return redirect('/partners')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(partner $partner)
    {
        $partner->delete();

        return redirect('/partners')->with('message', 'Data Berhasil Dihapus');
    }
}
