<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\review;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required',
            'rating' => 'required', /* Added this line */
            'user_id' => 'required',
            'cafe_id' => 'required',
        ]);
        review::create($validatedData);
        return redirect('/')->with('success', 'Review Berhasil Ditambahkan!');
    }
}
