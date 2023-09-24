<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atribut extends Model
{
    use HasFactory;
    protected $table = 'atributs';
    protected $guarded = [];
    protected $casts = [
        'rentang_tanggal' => 'array',
    ];
    
}