<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = 'kontak';
    protected $fillable = ['nomor','alamat'];
    protected $guarded = [];
}
