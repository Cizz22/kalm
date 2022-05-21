<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SesiKonsultasi extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'jadwal'];

    public function konsultasi() {
        return $this->hasMany(Konsultasi::class, 'topik_id');
    }
}
