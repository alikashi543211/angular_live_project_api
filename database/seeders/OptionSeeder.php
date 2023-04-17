<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('options')->truncate();
        DB::table('options')->insert([
            // Question ID 2
            [
                'id' => 1,
                'question_id' => 2,
                'title' => 'Male',
            ],
            [
                'id' => 2,
                'question_id' => 2,
                'title' => 'Female',
            ],
            [
                'id' => 3,
                'question_id' => 2,
                'title' => 'Rather not say',
            ],
            // Question ID 6
            [
                'id' => 4,
                'question_id' => 6,
                'title' => 'Yes',
            ],
            [
                'id' => 5,
                'question_id' => 6,
                'title' => 'No',
            ],
            // Question ID 7
            [
                'id' => 6,
                'question_id' => 7,
                'title' => 'Headache',
            ],
            [
                'id' => 7,
                'question_id' => 7,
                'title' => 'Nausea',
            ],
            [
                'id' => 8,
                'question_id' => 7,
                'title' => 'Problems thinking clearly',
            ],
            [
                'id' => 9,
                'question_id' => 7,
                'title' => 'Dizziness',
            ],
            [
                'id' => 10,
                'question_id' => 7,
                'title' => 'Problems with mood',
            ],
            [
                'id' => 11,
                'question_id' => 7,
                'title' => 'Vision or hearing sensitivity',
            ],
            // Question ID 9
            [
                'id' => 12,
                'question_id' => 9,
                'title' => 'Headache/Migraine',
            ],
            [
                'id' => 13,
                'question_id' => 9,
                'title' => 'Nausea',
            ],
            [
                'id' => 14,
                'question_id' => 9,
                'title' => 'Dizziness',
            ],
            [
                'id' => 15,
                'question_id' => 9,
                'title' => 'Seizures',
            ],
            [
                'id' => 16,
                'question_id' => 9,
                'title' => 'Problems thinking clearly',
            ],
            [
                'id' => 17,
                'question_id' => 9,
                'title' => 'Mood symptoms',
            ],
            [
                'id' => 18,
                'question_id' => 9,
                'title' => 'Others',
            ],
            // Question ID 10
            [
                'id' => 19,
                'question_id' => 10,
                'title' => 'Yes',
            ],
            [
                'id' => 20,
                'question_id' => 10,
                'title' => 'No',
            ],
            // Question ID 11
            [
                'id' => 21,
                'question_id' => 11,
                'title' => 'Aura',
            ],
            [
                'id' => 22,
                'question_id' => 11,
                'title' => 'Light sensitivity',
            ],
            [
                'id' => 23,
                'question_id' => 11,
                'title' => 'Sound sensitivity',
            ],
            // Question ID 12
            [
                'id' => 24,
                'question_id' => 12,
                'title' => 'Yes',
            ],
            [
                'id' => 25,
                'question_id' => 12,
                'title' => 'No',
            ],
            // Question ID 13
            [
                'id' => 26,
                'question_id' => 13,
                'title' => 'Yes',
            ],
            [
                'id' => 27,
                'question_id' => 13,
                'title' => 'No',
            ],
            // Question ID 14
            [
                'id' => 28,
                'question_id' => 14,
                'title' => 'Not at all',
            ],
            [
                'id' => 29,
                'question_id' => 14,
                'title' => 'No more than baseline',
            ],
            [
                'id' => 30,
                'question_id' => 14,
                'title' => 'A mild problem',
            ],
            [
                'id' => 31,
                'question_id' => 14,
                'title' => 'A moderate problem',
            ],
            [
                'id' => 32,
                'question_id' => 14,
                'title' => 'A severe problem',
            ],
            // Question ID 15
            [
                'id' => 33,
                'question_id' => 15,
                'title' => 'Not at all',
            ],
            [
                'id' => 34,
                'question_id' => 15,
                'title' => 'No more than baseline',
            ],
            [
                'id' => 35,
                'question_id' => 15,
                'title' => 'A mild problem',
            ],
            [
                'id' => 36,
                'question_id' => 15,
                'title' => 'A moderate problem',
            ],
            [
                'id' => 37,
                'question_id' => 15,
                'title' => 'A severe problem',
            ],
            // Question ID 16
            [
                'id' => 38,
                'question_id' => 16,
                'title' => 'Not at all',
            ],
            [
                'id' => 39,
                'question_id' => 16,
                'title' => 'No more than baseline',
            ],
            [
                'id' => 40,
                'question_id' => 16,
                'title' => 'A mild problem',
            ],
            [
                'id' => 41,
                'question_id' => 16,
                'title' => 'A moderate problem',
            ],
            [
                'id' => 42,
                'question_id' => 16,
                'title' => 'A severe problem',
            ],
            // Question ID 17
            [
                'id' => 43,
                'question_id' => 17,
                'title' => 'Not at all',
            ],
            [
                'id' => 44,
                'question_id' => 17,
                'title' => 'No more than baseline',
            ],
            [
                'id' => 45,
                'question_id' => 17,
                'title' => 'A mild problem',
            ],
            [
                'id' => 46,
                'question_id' => 17,
                'title' => 'A moderate problem',
            ],
            [
                'id' => 47,
                'question_id' => 17,
                'title' => 'A severe problem',
            ],
            // Question ID 18
            [
                'id' => 48,
                'question_id' => 18,
                'title' => 'Not at all',
            ],
            [
                'id' => 49,
                'question_id' => 18,
                'title' => 'No more than baseline',
            ],
            [
                'id' => 50,
                'question_id' => 18,
                'title' => 'A mild problem',
            ],
            [
                'id' => 51,
                'question_id' => 18,
                'title' => 'A moderate problem',
            ],
            [
                'id' => 52,
                'question_id' => 18,
                'title' => 'A severe problem',
            ],
            // Question ID 19
            [
                'id' => 53,
                'question_id' => 19,
                'title' => 'Not at all',
            ],
            [
                'id' => 54,
                'question_id' => 19,
                'title' => 'No more than baseline',
            ],
            [
                'id' => 55,
                'question_id' => 19,
                'title' => 'A mild problem',
            ],
            [
                'id' => 56,
                'question_id' => 19,
                'title' => 'A moderate problem',
            ],
            [
                'id' => 57,
                'question_id' => 19,
                'title' => 'A severe problem',
            ],
            // Question ID 20
            [
                'id' => 58,
                'question_id' => 20,
                'title' => 'Not at all',
            ],
            [
                'id' => 59,
                'question_id' => 20,
                'title' => 'No more than baseline',
            ],
            [
                'id' => 60,
                'question_id' => 20,
                'title' => 'A mild problem',
            ],
            [
                'id' => 61,
                'question_id' => 20,
                'title' => 'A moderate problem',
            ],
            [
                'id' => 62,
                'question_id' => 20,
                'title' => 'A severe problem',
            ],
            // Question ID 21
            [
                'id' => 63,
                'question_id' => 21,
                'title' => 'Not at all',
            ],
            [
                'id' => 64,
                'question_id' => 21,
                'title' => 'No more than baseline',
            ],
            [
                'id' => 65,
                'question_id' => 21,
                'title' => 'A mild problem',
            ],
            [
                'id' => 66,
                'question_id' => 21,
                'title' => 'A moderate problem',
            ],
            [
                'id' => 67,
                'question_id' => 21,
                'title' => 'A severe problem',
            ],
            // Question ID 22
            [
                'id' => 68,
                'question_id' => 22,
                'title' => 'Yes',
            ],
            [
                'id' => 69,
                'question_id' => 22,
                'title' => 'No',
            ],
            // Question ID 23
            [
                'id' => 70,
                'question_id' => 23,
                'title' => 'Headache',
            ],
            [
                'id' => 71,
                'question_id' => 23,
                'title' => 'Nausea',
            ],
            [
                'id' => 72,
                'question_id' => 23,
                'title' => 'Problems thinking clearly',
            ],
            [
                'id' => 73,
                'question_id' => 23,
                'title' => 'Dizziness',
            ],
            [
                'id' => 74,
                'question_id' => 23,
                'title' => 'Problems with mood',
            ],
            [
                'id' => 75,
                'question_id' => 23,
                'title' => 'Vision or hearing sensitivity',
            ],
            // Question ID 24
            [
                'id' => 76,
                'question_id' => 24,
                'title' => 'Not at all',
            ],
            [
                'id' => 77,
                'question_id' => 24,
                'title' => 'No more than baseline',
            ],
            [
                'id' => 78,
                'question_id' => 24,
                'title' => 'A mild problem',
            ],
            [
                'id' => 79,
                'question_id' => 24,
                'title' => 'A moderate problem',
            ],
            [
                'id' => 80,
                'question_id' => 24,
                'title' => 'A severe problem',
            ],
            // Question ID 25
            [
                'id' => 81,
                'question_id' => 25,
                'title' => 'Not at all',
            ],
            [
                'id' => 82,
                'question_id' => 25,
                'title' => 'No more than baseline',
            ],
            [
                'id' => 83,
                'question_id' => 25,
                'title' => 'A mild problem',
            ],
            [
                'id' => 84,
                'question_id' => 25,
                'title' => 'A moderate problem',
            ],
            [
                'id' => 85,
                'question_id' => 25,
                'title' => 'A severe problem',
            ],
            // Question ID 26
            [
                'id' => 86,
                'question_id' => 26,
                'title' => 'Not at all',
            ],
            [
                'id' => 87,
                'question_id' => 26,
                'title' => 'No more than baseline',
            ],
            [
                'id' => 88,
                'question_id' => 26,
                'title' => 'A mild problem',
            ],
            [
                'id' => 89,
                'question_id' => 26,
                'title' => 'A moderate problem',
            ],
            [
                'id' => 90,
                'question_id' => 26,
                'title' => 'A severe problem',
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
