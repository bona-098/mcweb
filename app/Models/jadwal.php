<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;
    public $table = 'jadwals'; 
    protected $fillable = [
        'id',
        'hari',
        'jam',
        'psikolog_id'
    ];
}
