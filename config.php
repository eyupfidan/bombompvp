<?php
try {
    $ayarlar = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );

    $baglanti = new PDO("mysql:host=localhost;dbname=database_name", "database_user", "database_password", $ayarlar);

} catch (PDOException $ex) {
    die($ex->getMessage());
}
?>