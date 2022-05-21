<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'psikolog_id',
        'paket_id',
        'topik_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function psikolog(){
        return $this->BelongsTo(User::class, 'psikolog_id');
    }

    public function paket(){
        return $this->belongsTo(PaketKonsultasi::class, 'paket_id');
    }

    public function topik(){
        return $this->belongsTo(TopikKonsultasi::class, 'topik_id');
    }

    public function hasil(){
        return $this->hasMany(HasilKonsultasi::class);
    }
}
