<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kategori extends Model
{
    use HasFactory;
    protected $table ="kategori";
    protected $primaryKey ="id";
    public $timestamp ="false";
    protected $fillable = [
        'kd_kategori', 'kategori'
    ];

    public function postingan()
    {
        return $this->hashMany(Postingan::class);
    }
}
