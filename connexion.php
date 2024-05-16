<?php
try {
    $stage= new PDO('mysql:host=localhost;dbname=stage; charset=utf8;','root','');
   // echo('connexion avec succes');
} catch (\Throwable $th) {
   die('echec de connexion'.$th);
}
?>