<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donhangchitiet extends Model
{
    use HasFactory;
    protected $table = 'donhangchitiet';
    protected $primaryKey = 'id_ct';
    protected $foreignKeys = 'id_dh';
    protected $fillable = [
        'id_dh',
        'id_sp',
        'ten_sp',
        'soluong',
        'gia',
    ];
    use HasFactory;
}
