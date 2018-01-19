<?php
/**
 * Created by PhpStorm.
 * User: kasutaja
 * Date: 19.01.2018
 * Time: 13:05
 */

// nõuame andmebaasitöötlusfunktsioonid kasutusele
require_once 'db_fnk.php';

// tekitame ühendus andmebaasiga
$dbYhendus = yhendus();
// koostame sql lause ja saadame andmebaasi
$sql = 'SHOW TABLES';
$tulemus = saadaParing($dbYhendus, $sql);
//uurime tulemuse sisu teksti kujul
echo '<pre>';
print_r($tulemus);
echo '</pre>';