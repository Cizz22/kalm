<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    use HasFactory;

    protected $fillable = ['konsultasi_id','template_id'];

    public function konsultasi(){
        return $this->belongsTo(Konsultasi::class);
    }
    public function template(){
        return $this->belongsTo(TemplateGambar::class, 'template_id');
    }
}
