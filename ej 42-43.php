<?php
$clave="holamundo123";
$clave_procesada=password_hash($clave,PASSWORD_BCRYPT,["cost=>11"]);
$clave_2="1234567";

if(password_verify($clave_2,$clave_procesada)){
    echo "las claves coinciden";
}else{
    echo "las claves no coinciden";
}