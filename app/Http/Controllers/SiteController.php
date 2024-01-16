<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() : View
    {

        // LETTERS AND QUANTITIES

        $tiles = ['A'=>9,'B'=>2,'C'=>2,'D'=>4,'E'=>12,'F'=>2,'G'=>3,'H'=>2,'I'=>9,'J'=>1,'K'=>1,'L'=>4,'M'=>2,'N'=>6,'O'=>8,'P'=>2,'Q'=>1,'R'=>6,'S'=>4,'T'=>6,'U'=>4,'V'=>2,'W'=>2,'X'=>1,'Y'=>2,'Z'=>1,'_'=>2];


        // LETTER SCORES

        $letter_scores = ['A'=>1,'E'=>1,'I'=>1,'O'=>1,'U'=>1,'L'=>1,'N'=>1,'R'=>1,'S'=>1,'T'=>1,'D'=>2,'G'=>2,'B'=>3,'C'=>3,'M'=>3,'P'=>3,'F'=>4,'H'=>4,'V'=>4,'W'=>4,'Y'=>4,'K'=>5,'J'=>8,'X'=>8,'Q'=>10,'Z'=>10];


        // BAG FOR TILES

        $bag['tiles'] = [];


        // FOR EACH OF THE TILES...

        foreach($tiles as $letter => $quantity){
        
            // ADD THE QUANTITY TO THE BAG

            for ($i = 1; $i <= $quantity; $i++){

                $bag['tiles'][] = $letter;

            }

        }


        // SHUFFLE 7 RANDOM ARRAY KEYS FROM THE BAG OF TILES

        $random_keys = array_rand($bag['tiles'], 7);

        shuffle($random_keys);
    

        // TILES FOR THE USER

        $user['tiles'] = [];


        // FOR EACH RANDOM KEY...

        foreach($random_keys as $key){

            // ADD THE LETTER VALUE TO THE USER'S TILE

            $user['tiles'][] = [
                'letter' => $bag['tiles'][$key],
                'letter_score' => $letter_scores[$bag['tiles'][$key]]
            ];

        }

        // dd($user);

        // $content=file_get_contents("https://scrabutility.com/TWL06.txt");
        // dd(json_encode($content));
        return view('index', [
            'user_tiles' => $user['tiles']
        ]);
   


    //     if(empty($word)){
    //         return 0;
    //     }

    //     $scoreArray = array('A'=>1,'E'=>1,'I'=>1,'O'=>1,'U'=>1,'L'=>1,'N'=>1,'R'=>1,'S'=>1,'T'=>1,'D'=>2,'G'=>2,'B'=>3,'C'=>3,'M'=>3,'P'=>3,'F'=>4,'H'=>4,'V'=>4,'W'=>4,'Y'=>4,'K'=>5,'J'=>8,'X'=>8,'Q'=>10,'Z'=>10
    //     );

    //     $score = 0;

    //     $word = strtoupper($word);

    //     $letterArray = str_split($word);

    //     foreach($letterArray as $letter){
    //         $score = $score + $scoreArray[$letter];
    //     }

    //     return $score;
    }




    public function import()
    {   
        $valid_word_list = fopen(public_path('valid-words.txt'), 'r');
        dd(public_path('valid-words.txt'));
        $words = [];

        $valid_word_list = file_get_contents("https://scrabutility.com/TWL06.txt");

        $handle = fopen('https://scrabutility.com/TWL06.txt', 'r');

        if($handle){
            while (($line = fgets($handle)) !== false) {
                $words[] = trim(preg_replace('/\s+/', ' ', $line));
                // $words[] = str_replace('\r\n', 'pop', $line);
            }

            fclose($handle);
        }

        foreach($words as $word){
            echo $word.'<br>';
        }
        
        
    }
}
