<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donhang extends Model
{
    protected $table = 'donhang';
    protected $primaryKey = 'id_dh';
    protected $dates = 'ngay';
    protected $foreignKeys = 'id_user';
    protected $fillable = [
        'id_user',
        'thoidiemmua',
        'tennguoinhan',
        'dienthoai',
        'diachigiaohang',
        'trangthai'
    ];
    use HasFactory;
}
