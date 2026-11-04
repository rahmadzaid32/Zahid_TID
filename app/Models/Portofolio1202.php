<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio1202 extends Model
{
    protected $table = 'portofolio_1202';
    protected $primaryKey = 'portofolio_id';
    protected $fillable = [
        'judul_proyek',
        'deskripsi',
        'kategori',
        'link_proyek',
    ];
}
