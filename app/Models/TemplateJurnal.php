<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateJurnal extends Model
{
    use HasFactory;

    protected $fillable = ['judul'];

    public function jurnal(){
        return $this->hasMany(Jurnal::class,'template_id');
    }
}
