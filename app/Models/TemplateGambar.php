<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateGambar extends Model
{
    use HasFactory;

    protected $fillable =['nama'];

    public function gambar(){
        $this->hasMany(Gambar::class, 'template_id');
    }
}
