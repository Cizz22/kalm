<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'judul', 'template_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function template(){
        return $this->belongsTo(TemplateJurnal::class,'template_id');
    }

    public function draft(){
        return $this->hasMany(DraftJurnal::class);
    }
}
