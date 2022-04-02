<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogModel extends Model
{
    protected $table = 'blog';
    protected $fillable = ['judul','deskripsi','foto','slug'];
    protected $guarded = [];
}
