<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Penanda extends Model
{
    use HasFactory;
    protected $table ="penanda";
    protected $primaryKey ="id";
    public $timestamp ="false";
    protected $fillable = [
        'kd_penanda', 'penanda'
    ];

    public function postingan()
    {
        return $this->belongsToMany(Postingan::class);
    }
}

