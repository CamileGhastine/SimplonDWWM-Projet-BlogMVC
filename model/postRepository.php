<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

