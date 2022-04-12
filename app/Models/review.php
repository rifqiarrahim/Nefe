<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    static function getReviewbyCafe($id)
    {
        $reviews = DB::table('reviews')->where('cafe_id', $id)->get();
        return $reviews;
    }
    static function getRating($id)
    {
        $rating = DB::table('reviews')->where('cafe_id', $id)->avg('rating');
        return round($rating, 1);
    }
    public function cafe()
    {
        return $this->belongsTo(cafe::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
