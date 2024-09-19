<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renungan extends Model
{
    use HasFactory;

    protected $table = 'renungan';

    protected $fillable = [
        'title',
        'bacaan',
        'ayat_kunci',
        'kalimat_prinsip',
        'kalimat_renung',
        'date_renungan',
        'content_renungan',
        'doa'
    ];
}
