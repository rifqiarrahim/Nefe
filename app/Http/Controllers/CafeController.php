<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cafe;
use Illuminate\Support\Facades\DB;

class CafeController extends Controller
{
    public function index()
    {
        $dbCafe = cafe::paginate(9);

        return view('home', compact('dbCafe'));
    }
}
