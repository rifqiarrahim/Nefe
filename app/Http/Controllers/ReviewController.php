<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\review;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        if ($request->get('like') == null) {
            $request->request->add(['like' => 0]);
        } else {
            $request->merge([
                'like' => 0,
            ]);
        }
        $validatedData = $request->validate([
            'comment' => 'required',
            'rating' => 'required', /* Added this line */
            'user_id' => 'required',
            'like' => 'required',
            'cafe_id' => 'required',
        ]);
        review::create($validatedData);
        return redirect('/')->with('success', 'Review Berhasil Ditambahkan!');
    }
}
