<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilKonsultasi extends Model
{
    use HasFactory;

    protected $fillable = ['konsultasi_id', 'hasil'];

    public function konsultasi(){
        return $this->belongsTo(Konsultasi::class);
    }
}
