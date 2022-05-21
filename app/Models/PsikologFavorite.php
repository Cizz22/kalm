<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsikologFavorite extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'psikolog_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function psikolog(){
        return $this->belongsTo(User::class, 'psikolog_id');
    }
}
