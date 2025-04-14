<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasMasjid extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'kas_awal',
        'pemasukan',
        'pengeluaran',
        'kas_akhir',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'kas_awal' => 'integer',
        'pemasukan' => 'integer',
        'pengeluaran' => 'integer',
        'kas_akhir' => 'integer',
    ];
}