<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('questions')->truncate();
        DB::table('questions')->insert([
            // SECTION_DEMO_GRAPHIC
            [
                'id' => 1,
                'section_id' => SECTION_DEMO_GRAPHIC,
                'title' => 'What is your age?',
                'style' => QUESTION_STYLE_DROPDOWN,
                'options_flag' => false,
            ],
            [
                'id' => 2,
                'section_id' => SECTION_DEMO_GRAPHIC,
                'title' => 'What is your gender?',
                'style' => QUESTION_STYLE_BUTTON,
                'options_flag' => true,
            ],
            [
                'id' => 3,
                'section_id' => SECTION_DEMO_GRAPHIC,
                'title' => 'Are you at risk of any of the following?',
                'style' => "N/A",
                'options_flag' => false,
            ],

            // SECTION_BRAIN_INJURY
            [
                'id' => 4,
                'section_id' => SECTION_BRAIN_INJURY,
                'title' => 'Date of Injury?',
                'style' => QUESTION_STYLE_DATE_FIELD,
                'options_flag' => false,
            ],
            [
                'id' => 5,
                'section_id' => SECTION_BRAIN_INJURY,
                'title' => 'Tell us briefly about your injury',
                'style' => QUESTION_STYLE_TEXT_FIELD,
                'options_flag' => false,
            ],
            [
                'id' => 6,
                'section_id' => SECTION_BRAIN_INJURY,
                'title' => 'Did you lose consciousness?',
                'style' => QUESTION_STYLE_BUTTON,
                'options_flag' => true,
            ],
            [
                'id' => 7,
                'section_id' => SECTION_BRAIN_INJURY,
                'title' => 'Within the first 72 hours of the accident, what symptoms did you experience?',
                'style' => QUESTION_STYLE_CHECKBOX,
                'options_flag' => true,
            ],
            [
                'id' => 8,
                'section_id' => SECTION_BRAIN_INJURY,
                'title' => 'Since the accident, have you undergone any physical therapy, surgery, or other treatments?',
                'style' => "N/A",
                'options_flag' => false,
            ],

            // SECTION_SYMPTOM
            [
                'id' => 9,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Mark all of the symptoms you are experiencing.',
                'style' => QUESTION_STYLE_CHECKBOX,
                'options_flag' => true,
            ],
            [
                'id' => 10,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Are you suffering from headaches?',
                'style' => QUESTION_STYLE_BUTTON,
                'options_flag' => true,
            ],
            [
                'id' => 11,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Are your headaches associated with a visual aura or light and sound sensitivity?',
                'style' => QUESTION_STYLE_CHECKBOX,
                'options_flag' => true,
            ],
            [
                'id' => 12,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Do your headaches cause nausea or episodes of vomitting?',
                'style' => QUESTION_STYLE_BUTTON,
                'options_flag' => true,
            ],
            [
                'id' => 13,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Are your headaches associated with significant neck pain?',
                'style' => QUESTION_STYLE_BUTTON,
                'options_flag' => true,
            ],
            [
                'id' => 14,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'How dizzy do you feel?',
                'style' => QUESTION_STYLE_BUTTON,
                'options_flag' => true,
            ],
            [
                'id' => 15,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Do you now suffer from nausea and/or vomitting?',
                'style' => QUESTION_STYLE_SLIDER,
                'options_flag' => true,
            ],
            [
                'id' => 16,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Do you suffer from poor memory or forgetfulness more than usual?',
                'style' => QUESTION_STYLE_SLIDER,
                'options_flag' => true,
            ],
            [
                'id' => 17,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Do you feel like you are suffering from poor memory or forgetfulness?',
                'style' => QUESTION_STYLE_SLIDER,
                'options_flag' => true,
            ],
            [
                'id' => 18,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Do you feel like you are suffering from poor concentration and/or taking longer to think?',
                'style' => QUESTION_STYLE_SLIDER,
                'options_flag' => true,
            ],
            [
                'id' => 19,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Compared to before your injury, do you now suffer from depression or tearfulness?',
                'style' => QUESTION_STYLE_SLIDER,
                'options_flag' => true,
            ],
            [
                'id' => 20,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Compared to before your injury, do you feel that you are more irritable or easily frustrated?',
                'style' => QUESTION_STYLE_SLIDER,
                'options_flag' => true,
            ],
            [
                'id' => 21,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Compared to your typical sleep schedule, do you now suffer from disturbed sleep?',
                'style' => QUESTION_STYLE_SLIDER,
                'options_flag' => true,
            ],
            [
                'id' => 22,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Is your sleep affected by pain?',
                'style' => QUESTION_STYLE_BUTTON,
                'options_flag' => true,
            ],
            [
                'id' => 23,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Do you have trouble with staying sleep or falling asleep?',
                'style' => QUESTION_STYLE_CHECKBOX,
                'options_flag' => true,
            ],
            [
                'id' => 24,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Compared with before the injury, do you now suffer from fatigue?',
                'style' => QUESTION_STYLE_SLIDER,
                'options_flag' => true,
            ],
            [
                'id' => 25,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Are you experiencing cervical neck pain?',
                'style' => QUESTION_STYLE_BUTTON,
                'options_flag' => true,
            ],
            [
                'id' => 26,
                'section_id' => SECTION_SYMPTOM,
                'title' => 'Are you experiencing lower back pain?',
                'style' => QUESTION_STYLE_BUTTON,
                'options_flag' => true,
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
