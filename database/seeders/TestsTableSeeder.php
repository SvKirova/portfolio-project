<?php

namespace Database\Seeders;

use App\Models\Test;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Validator;

class TestsTableSeeder extends Seeder
{
    /**
     * @return void
     * @throws Exception
     */
    public function run(): void
    {
        $tests = [
            [
                'course_id' => 1,
                'name'=>'Presentation (individual)',
                'weighing_factor'=>1,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>10,
                'created_at'=>'2024-10-18',
                'updated_at'=>'2024-10-18'
            ],
            [
                'course_id' => 2,
                'name'=>'Written knowledge test',
                'weighing_factor'=>1,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>9.6,
                'created_at'=>'2024-11-01',
                'updated_at'=>'2024-11-01'
            ],
            [
                'course_id' => 3,
                'name'=>'Case study exam',
                'weighing_factor'=>1,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>8.7,
                'created_at'=>'2024-10-31',
                'updated_at'=>'2024-10-31'
            ],
            [
                'course_id' => 4,
                'name'=>'Presentation (group)',
                'weighing_factor'=>0.5,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>6.5,
                'created_at'=>'2025-01-29',
                'updated_at'=>'2025-01-29'
            ],
            [
                'course_id' => 4,
                'name'=>'Case study exam',
                'weighing_factor'=>0.5,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>9.5,
                'created_at'=>'2024-12-10',
                'updated_at'=>'2024-12-10'
            ],
            [
                'course_id' => 5,
                'name'=>'On-site case study exam',
                'weighing_factor'=>0.4,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>null,
                'created_at'=>null,
                'updated_at'=>'2024-09-01'
            ],
            [
                'course_id' => 5,
                'name'=>'Database exam',
                'weighing_factor'=>0.1,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>null,
                'created_at'=>null,
                'updated_at'=>'2024-09-01'
            ],
            [
                'course_id' => 5,
                'name'=>'Group presentation on project result',
                'weighing_factor'=>0.25,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>null,
                'created_at'=>null,
                'updated_at'=>null
            ],
            [
                'course_id' => 5,
                'name'=>'Group portfolio with individual elements on requirements',
                'weighing_factor'=>0.25,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>null,
                'created_at'=>null,
                'updated_at'=>null
            ],
            [
                'course_id' => 6,
                'name'=>'Final group delivery',
                'weighing_factor'=>0.25,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>null,
                'created_at'=>null,
                'updated_at'=>null
            ],
            [
                'course_id' => 6,
                'name'=>'Individual project assessment',
                'weighing_factor'=>0.25,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>null,
                'created_at'=>null,
                'updated_at'=>null
            ],
            [
                'course_id' => 6,
                'name'=>'IT Development portfolio',
                'weighing_factor'=>0.50,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>null,
                'created_at'=>null,
                'updated_at'=>null
            ],
            [
                'course_id' => 7,
                'name'=>'Video assignment',
                'weighing_factor'=>1,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>null,
                'created_at'=>null,
                'updated_at'=>null
            ],
            [
                'course_id' => 8,
                'name'=>'Criterium focused interview',
                'weighing_factor'=>1,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>null,
                'created_at'=>null,
                'updated_at'=>null
            ],
            [
                'course_id' => 9,
                'name'=>'Portfolio',
                'weighing_factor'=>1,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>null,
                'created_at'=>null,
                'updated_at'=>null
            ],
            [
                'course_id' => 10,
                'name'=>'Portfolio',
                'weighing_factor'=>1,
                'lowest_passing_grade'=>5.5,
                'best_grade'=>null,
                'created_at'=>null,
                'updated_at'=>null
            ]
        ];

        foreach ($tests as $test) {
            Test::create($test);
        }
    }
}
