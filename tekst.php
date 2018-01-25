<?php
/**
 * Created by PhpStorm.
 * User: kasutaja
 * Date: 25.01.2018
 * Time: 10:32
 */

class tekst
{ // klassi algus
    // klassi omadused (väljad, fields)
    // klassi muutuja
    var $sone = ''; // teksti kirjeldavad sõnad
    // klassi tegevused
    // meetodid
    // teksti määramine
    // maaraTekst('Tere Maailm!')
    function maaraTekst($sone){
        $this->sone = $sone;
    }
    // teksti väljastamine
    function prindiTekst(){
        echo $this->sone.'<br />';
    }
} // klassi lõpp