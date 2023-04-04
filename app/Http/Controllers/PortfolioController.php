<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Illuminate\Http\Respose;
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        
        return view('portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Illuminate\Http\Respose;
     */
    public function create()
    {
        return view('portfolio.create');
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

        Portfolio::create($input);

        return redirect('/portfolios')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param Illuminate\Http\Request
     * @return Illuminate\Http\Respose
     */
    public function show(portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param Illuminate\Http\Request
     * @return Illuminate\Http\Respose
     */
    public function edit(portfolio $portfolio)
    {
        return view('portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     * @param Illuminate\Http\Request
     * @param App\Models\portfolio;;
     * @return Illuminate\Http\Respose
     */
    public function update(Request $request, portfolio $portfolio)
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

        $portfolio->update($input);

        return redirect('/portfolios')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect('/portfolios')->with('message', 'Data Berhasil Dihapus');
    }
}
