<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(string[] $faq)
 * @method static latest()
 * @method static where(string $string, Faq $faq)
 * @method static find(Faq $faq)
 * @method static simplePaginate(int $int)
 */
class Faq extends Model
{
    protected $fillable = ['question', 'link', 'answer'];
}
