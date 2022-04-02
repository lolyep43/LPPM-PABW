<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortofolioModel extends Model
{
    protected $table = 'portofolio';
    protected $fillable = ['jenis','judul','problem','solusi','fitur','metode','foto','slug'];
    protected $guarded = [];
}
