<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(array $test)
 * @method static where(string $string, $slug)
 */
class Test extends Model
{
    protected $fillable = ['best_grade', 'created_at'];

    /**
     * @return BelongsTo relationship
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
