<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggotaModel extends Model
{
    protected $table = 'anggota';
    protected $fillable = ['level','jabatan','nama','foto'];
    protected $guarded = [];
}
