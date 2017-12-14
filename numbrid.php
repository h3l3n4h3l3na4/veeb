<?php
/**
 * Created by PhpStorm.
 * User: kasutaja
 * Date: 14.12.2017
 * Time: 12:25
 */

// 2.	Loo fail nimega numbrid.php ja lisa siia PHP script järgmise sisuga:
// •	Väljasta numbrid 1-10 nii, et

// 1 3 5 7 9 on punased
// 2 4 6 8 10 on sinised

for($arv = 1; $arv <= 10; $arv++){
    if($arv % 2 == 0){
        $varv = 'blue';
    } else{
        $varv = 'red';
    }
    echo '<font color="'.$varv.'">'.$arv.'</font><br/>';
}

