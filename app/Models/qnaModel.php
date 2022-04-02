<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qnaModel extends Model
{
    protected $table = 'qna';
    protected $fillable = ['pertanyaan','jawaban'];
    protected $guarded = [];
}
