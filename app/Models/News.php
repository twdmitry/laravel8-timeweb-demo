<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',       // Добавьте поле title
        'content',     // Если у вас есть поле content, добавьте его тоже
        'created_at',  // Если есть поля created_at, updated_at, добавьте их тоже
        'updated_at',
    ];
}
