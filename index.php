<?php

$searchWords = ['php','html','интернет','Web'];


$searchStrings = [
    'Интернет - большая сеть компьютеров, которые могут взаимодействовать друг с другом.',
    'PHP - это распространенный язык программирования с открытым исходным кодом.',
    'PHP сконструирован специально для ведения Web-разработок и его код может внедряться непосредственно в HTML'
];


 function wordsReview($searchWords,$searchStrings)
 {

     foreach ($searchStrings as $key => $searchString) {
         $res = '';


         foreach ($searchWords as $searchWord) {

             $allWords = '/'.$searchWord.'/ui';


             if (preg_match($allWords, $searchString, $arr)) {
                 $res = $res . ',' .  $arr[0];
             }
         }


         echo 'В предложении ' . ($key+=1) . ' есть слова: ' . $res . '<br>';


     }
 }




wordsReview($searchWords,$searchStrings);

 //add some stupid code

$NewBranch = true;

echo $NewBranch;