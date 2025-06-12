<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    use HasFactory;

    protected $table = 'tv'; // nama tabel kamu

    protected $primaryKey = 'tv_id';

    public $timestamps = false; // karena kamu gak pakai created_at & updated_at

    protected $fillable = [
        'merkTV', 'hargaTV', 'tersedia', 'berat'
    ];
}
