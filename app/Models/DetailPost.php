<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPost extends Model
{
    protected $table = 'detail_post';
    protected $primaryKey = 'id';
    protected $foreignKey = 'id_post';
    protected $fillable = [
        'content', 'id_post', 'views_count'
    ];
    use HasFactory;
}
