<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeditationTopic extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'topik_id' , 'lagu_id'];



}
