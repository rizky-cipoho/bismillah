<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;
    protected $fillable = [
        'start',
        'durasi',
        'mobil_id',
        'user_id',
        'status',
    ];
    public function mobil(){
        return $this->belongsTo(Mobil::class);
    }
}
