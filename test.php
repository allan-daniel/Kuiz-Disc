<?php
try {
  $dbh = new PDO('mysql:host=localhost;dbname=crud', 'root', '120521');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
