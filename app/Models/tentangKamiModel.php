<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tentangKamiModel extends Model
{
    protected $table = 'tentang_kami';
    protected $fillable = ['deskripsi'];
    protected $guarded = [];
}
