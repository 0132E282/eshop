<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'id_post';
    protected $fillable = [
        'heading', 'slug'
    ];
    use HasFactory;
}
