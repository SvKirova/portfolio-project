<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static create(array $course)
 */
class Course extends Model
{
    protected $fillable = ['passed_at'];

    /**
     * @return HasMany relationship
     */
    public function tests(): HasMany
    {
        return $this->hasMany(Test::class);
    }

    /**
     * @return float|int
     * @throws Exception
     */
    public function calculateCourseGrade(): float|int
    {
        $courseGrade = 0;
        $weighingFactorSum = 0;
        $tests = $this->tests;

        foreach ($tests as $test) {
            $courseGrade += $test->best_grade * $test->weighing_factor;
            $weighingFactorSum += $test->weighing_factor;
        }

        if ($weighingFactorSum != 1) {
            throw new Exception("Weighing factors for course '{$this->name}' do not sum to 1.
            They sum to {$weighingFactorSum}.");
        }

        return $courseGrade;
    }
}
