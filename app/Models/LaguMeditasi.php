<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaguMeditasi extends Model
{
    use HasFactory;

    protected $fillable = ['judul'];

    public function lagufavorit(){
        return $this->hasMany(LaguMeditasiFavorite::class, 'lagu_id');
    }
}
