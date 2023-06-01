<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudioTech extends Model
{
    use HasFactory;

    protected $table = 'audio_tech';
    protected $fillable = [];
    public $timestamps = false;
}
