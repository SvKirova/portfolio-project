<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(string[] $array)
 * @method static latest()
 * @method static paginate(int $int)
 * @method static where(string $string, $slug)
 */
class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'body'
    ];
}
