<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketKonsultasi extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'harga'];

    public function konsultasi(){
        return $this->hasMany(Konsultasi::class, 'paket_id');
    }
}
