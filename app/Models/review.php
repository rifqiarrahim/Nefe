<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function cafe()
    {
        return $this->belongsTo(cafe::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
