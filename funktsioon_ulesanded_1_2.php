<?php
/**
 * Created by PhpStorm.
 * User: kasutaja
 * Date: 14.01.2018
 * Time: 19:35
 */

// 1. Koostada funktsioon nimega arvuSumma, mis võtab parameetrina suvalise numbri ja arvutab numbri arvude summa - juhul, kui on argumendina funktsioonile antud number 123, siis programm peab leidma 1+2+3 summa, ehk 6. Lahendamiseks ei tohi kasutada sõnetöötluse võimalused.

function arvuSumma($number){
    $summa = 0;
    while($number != 0){
        $arv = $number % 10;
        echo 'arv on '.$arv.'<br />';
        $number = $number / 10;
        settype($number, 'integer');
        echo 'number on '.$number.'<br />';
}
}

arvuSumma(123);

// 2. Koostada funktsioon nimega otsiNumber, mis võtab parameetrina suvalise arvu ja kindlaks määratud arvu ja arvutab mitu korda määratud arv esineb suvalises numbris, näiteks arv 5 esineb numbris 442158755745 neli korda. Lahendamiseks ei tohi kasutada sõnetöötluse võimalused

function otsiNumber($suvalineArv, $kindelArv){
    echo 'Number '.$kindelArv.' esineb antud arvus '.$suvalineArv;
    $kordadeArv = 0;
    while ($suvalineArv !=0){
        $arv = $suvalineArv % 10;
        if ($arv == $kindelArv){
            $kordadeArv++;
        }
        $suvalineArv = $suvalineArv / 10;
        settype($suvalineArv, 'integer');
    }
    echo  '-----> '.$kordadeArv.' arv korda<br />';

}
otsiNumber(442158755745, 5);




