<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'gender',
        'no_tlp',
        'kk',
        'alamat',
        'gambar',
        'tanggal_lahir'
    ];
}
