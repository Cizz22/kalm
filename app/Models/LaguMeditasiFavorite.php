<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaguMeditasiFavorite extends Model
{
    use HasFactory;

    protected $fillable = ['lagu_id', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function lagu(){
        return $this->belongsTo(LaguMeditasi::class, 'lagu_id');
    }
}
