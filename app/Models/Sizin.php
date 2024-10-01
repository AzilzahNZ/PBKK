<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sizin extends Model
{
    use HasFactory;
    protected $table = 'sizin';
    protected $fillable = [
        'NomorSurat',
        'NamaKegiatan',
        'HariKegiatan',
        'TanggalKegiatan',
        'TempatKegiatan',
        'PJKegiatan',
        'Semester',
        'NomorHPPJ',
        'Status',
    ];
}
