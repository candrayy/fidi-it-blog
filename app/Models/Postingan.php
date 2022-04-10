<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Postingan extends Model
{
    use HasFactory;
    protected $table ="postingan";
    protected $primaryKey ="id";
    public $timestamp ="false";
    protected $fillable = [
        'kategori_id', 'gambar', 'slug', 'judul',
        'penulis', 'isi', 'created_add'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function penanda()
    {
        return $this->belongsToMany(Penanda::class);
    }
}
