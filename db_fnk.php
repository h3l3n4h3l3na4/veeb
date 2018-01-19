<?php
/**
 * Created by PhpStorm.
 * User: kasutaja
 * Date: 19.01.2018
 * Time: 12:30
 */
require_once 'db_conf.php'; // nõuane konfiguratsiooni faili sisu kasutamist

// andmebaasi serveriga ühendamine ja
// andmebaasi valik
function yhendus(){
    $yhendus = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (!$yhendus){
        echo 'Puudub ühendus andmebaasi serveriga<br />';
        echo mysqli_connect_error().'<br />';
        echo mysqli_connect_errno().'<br />';
        return false;
    } else {
        echo 'Ühendus andmebaasi serveriga on olemas<br />';
        return $yhendus;
    }
}
// päringu saamtmise funktsioon
function saadaParing($yhendus, $sql) {
    $tulemus = mysqli_query($yhendus, $sql);
    if (!$tulemus) {
        echo 'Probleem päringuga '.$sql.'<br />';
        echo mysqli_error($yhendus).'<br/>';
        echo mysgli_errno($yhendus).'<br/>';
        return false;
    }else {
        echo 'Päring läks läbi<br />';
        return $tulemus;
    }
}

// andmetega päringu saamtmise funktsioon
function annaAndmed($yhendus, $sql){
    $tulemus = saadaParing($yhendus, $sql);
    $andmed = array(); //massiiv kuhu paneme päringuga tulnud andmed
    if ($tulemus != false) {
        while ($rida = mysqli_fetch_assoc($tulemus)) {
            $andmed[] = $rida;
        }
    }
    if (count($andmed) == 0) {
        return false;
    }else {
    // tagastame päringu andmetega täidetud massiivi
    return $andmed;
}