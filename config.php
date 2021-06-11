<?php
$db=pg_connect('host=localhost port=5432 dbname=webkkn user=postgres password=nenekLampir0192');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
