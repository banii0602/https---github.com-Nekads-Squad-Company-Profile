<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Partner;
use App\Models\Technologie;
use App\Models\Artikel;

class HomeController extends Controller
{
    public function index()
    {
        $headers = Header::all();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $partners = Partner::all();
        $technologies = Technologie::all();
        $artikels = Artikel::all();

        return view('home.index', compact(
            'headers',
            'services',
            'portfolios',
            'partners',
            'technologies',
            'artikels',
        ));
    }
}
