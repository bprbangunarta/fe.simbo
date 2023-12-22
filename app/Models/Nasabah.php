<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;
    protected $table = 'data_nasabah';

    protected $fillable = [
        'user_id',
        'no_cif',
        'no_ktp',
        'nama_nasabah',
        'alamat',
        'kelamin',
    ];
}
