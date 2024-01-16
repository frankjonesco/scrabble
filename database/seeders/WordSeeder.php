<?php

namespace Database\Seeders;

use App\Models\Word;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $valid_words_array = [];

        $valid_word_list = fopen(public_path('valid-words.txt'), 'r');

        if($valid_word_list){
            while (($line = fgets($valid_word_list)) !== false) {
                $valid_words_array[] = trim(preg_replace('/\s+/', ' ', $line));
            }

            fclose($valid_word_list);
        }

        foreach($valid_words_array as $word){

            Word::create([
                'word' => $word
            ]);

        }

    }
}
