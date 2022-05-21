<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilGambar extends Model
{
    use HasFactory;

    protected $fillable = ['source_file', 'nama'];
}
