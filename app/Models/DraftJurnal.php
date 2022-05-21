<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DraftJurnal extends Model
{
    use HasFactory;
    protected $fillable = ['konten', 'jurnal_id'];

    public function jurnal(){
        return $this->belongsTo(Jurnal::class);
    }
}
