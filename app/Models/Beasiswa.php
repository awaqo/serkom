<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;
    protected $table = "beasiswa";
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'semester',
        'ipk',
        'pilihan_beasiswa',
        'berkas',
        'status_ajuan'
    ];
}
