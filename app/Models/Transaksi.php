<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['metode_id', 'total', 'konsultasi_id'];

    public function metode(){
        return $this->belongsTo(MetodePembayaran::class, 'metode_id');
    }

    public function konsultasi(){
        return $this->belongsTo(Konsultasi::class);
    }

}
