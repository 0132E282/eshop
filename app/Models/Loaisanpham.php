<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaisanpham extends Model
{

    protected $table = 'loai';
    protected $primaryKey = 'id_loai';
    protected $fillable = [
        'ten_loai'
    ];
    use HasFactory;
}
