<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopikKonsultasi extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function konsultasi(){
        return $this->hasMany(Konsultasi::class, 'topik_id');
    }
}
