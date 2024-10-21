<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sizin extends Model
{
    use HasFactory;
    protected $table = 'sizins';
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

    //One To Many
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
