<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';
    protected $primaryKey = 'id';
    protected $fillable = [
        'rul_banner',
        'links',
        'title',
        'description',
        'meta',
        'is_slider'
    ];
    use HasFactory;
}
