<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
        protected $fillable = [
        'image',
        'merek',
        'model',
        'platno',
        'price',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
