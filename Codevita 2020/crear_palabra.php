<?

$vowel = array(
    "c" => "1",
    "o" => "2",
    "d" => "3",
    "i" => "4",
    "g" => "5",
    "o" => "6",
);

$word = ($vowel[0]+
		$vowel[1]+
        $vowel[2]+
        $vowel[3]+
        $vowel[4]+
        $vowel[5])*
        ($vowel['c']+
        $vowel['o']+
        $vowel['d']+
        $vowel['i']+
        $vowel['g']+
        $vowel['o']
);


echo $word;
                            

?>