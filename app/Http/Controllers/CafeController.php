<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cafe;
use Illuminate\Support\Facades\DB;

class CafeController extends Controller
{
    public function index()
    {
        $dbCafe = cafe::latest();

        if (request('search')) {
            $dbCafe->where('name', 'like', '%' . request('search') . '%');
        }

        return view('home', [
            "dbCafe" => $dbCafe -> paginate(9)
        ]);
    }
    
    public function show($id)
    {
        return view('cafe', [
            "Cafe" => cafe::find($id),
        ]);
    }
}
