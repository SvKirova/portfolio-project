<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'cu_code'=>'CU75001',
                'name'=>'PCO:Program- and Career Orientation',
                'credits'=>2.5,
                'passed_at'=>'2024-10-18',
                'created_at'=>'2024-09-01',
                'updated_at'=>'2024-10-18'
            ],
            [
                'cu_code'=>'CU75002',
                'name'=>'CBA:Computer Science Basics',
                'credits'=>5,
                'passed_at'=>'2024-11-01',
                'created_at'=>'2024-09-01',
                'updated_at'=>'2024-11-01'
            ],
            [
                'cu_code'=>'CU75003',
                'name'=>'PBA:Programming Basics',
                'credits'=>5,
                'passed_at'=>'2024-10-31',
                'created_at'=>'2024-09-01',
                'updated_at'=>'2024-10-31'
            ],
            [
                'cu_code'=>'CU75004',
                'name'=>'OOP:Object-Oriented Programming',
                'credits'=>10,
                'passed_at'=>'2025-01-29',
                'created_at'=>'2024-09-01',
                'updated_at'=>'2025-01-29'
            ],
            [
                'cu_code'=>'CU75080',
                'name'=>'FPR1:Framework Project 1',
                'credits'=>10,
                'passed_at'=>null,
                'created_at'=>'2024-09-01',
                'updated_at'=>'2024-09-01'
            ],
            [
                'cu_code'=>'CU75011',
                'name'=>'FPR2:Framework Project 2',
                'credits'=>10,
                'passed_at'=>null,
                'created_at'=>'2024-09-01',
                'updated_at'=>'2024-09-01'
            ],
            [
                'cu_code'=>'CU75081',
                'name'=>'BIC:Business IT Consultancy Basics',
                'credits'=>2.5,
                'passed_at'=>null,
                'created_at'=>'2024-09-01',
                'updated_at'=>'2024-09-01'
            ],
            [
                'cu_code'=>'CU75068',
                'name'=>'PPD-E:Personal Professional Development:Exploration',
                'credits'=>12.5,
                'passed_at'=>null,
                'created_at'=>'2024-09-01',
                'updated_at'=>'2024-09-01'
            ],
            [
                'cu_code'=>'CU75056',
                'name'=>'ITP1:IT Personality 1',
                'credits'=>1.25,
                'passed_at'=>null,
                'created_at'=>'2024-09-01',
                'updated_at'=>'2024-09-01'
            ],
            [
                'cu_code'=>'CU75057',
                'name'=>'ITP2:IT Personality 2',
                'credits'=>1.25,
                'passed_at'=>null,
                'created_at'=>'2024-09-01',
                'updated_at'=>'2024-09-01'
            ]
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
