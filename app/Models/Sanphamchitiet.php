<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanphamchitiet extends Model
{
    protected $table = 'sanphamchitiet';
    protected $primaryKey = 'id_ct';
    protected $foreignKeys = 'id_sp';
    protected $fillable = [
        'id_sp',
        'RAM',
        'CPU',
        'Dia',
        'Mausac',
        'Mausac',
        'anh_mo_ta'
    ];
    use HasFactory;
}
