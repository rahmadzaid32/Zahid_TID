<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $table = 'cv';
    protected $primaryKey = 'cv_id';

    protected $fillable = [
        'nama_lengkap',
        'nim',
        'prodi',
        'email',
        'no_hp',
        'keahlian',
        'tentang_saya',
    ];
}
