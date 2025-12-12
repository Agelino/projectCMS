<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika nama tabelnya jamak 'abouts', Laravel sudah otomatis tahu)
    protected $table = 'abouts';

    // Membuka izin agar semua kolom bisa diisi (Mass Assignment)
    protected $guarded = [];
}