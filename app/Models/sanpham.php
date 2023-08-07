<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    protected $table = 'sanpham';
    protected $primaryKey = 'id_sp';
    protected $foreignKey = 'id_loai';
    protected $fillable = [
        'ten_sp', 'gia', 'gia_km', 'mota', 'hinh', 'ngay', 'id_loai'
    ];
    use HasFactory;
}
