<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('sections')->truncate();
        DB::table('sections')->insert([
            [
                'id' => SECTION_DEMO_GRAPHIC,
                'title' => 'Demographic Questions',
            ],
            [
                'id' => SECTION_BRAIN_INJURY,
                'title' => 'Brain Injury Background Information',
            ],
            [
                'id' => SECTION_SYMPTOM,
                'title' => 'Symptoms',
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
