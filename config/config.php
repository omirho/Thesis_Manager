<?php

/*
 * This file is generated by S. Das.
 * Do not copy it without permission.
 */
//Contact at: tapan84silchar[at]gmail.com
define("HOST11", "http://localhost/ProjectUploader");
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASS", "jarultala");
define("DBNAME", "projectmanager");


function getUserNamePattern() {
    return "/^[a-zA-Z0-9_\.]+$/";
}

function getPasswordPattern() {
    return "/^[a-zA-Z0-9]{6,12}$/";
}

function getRollPattern(){
    return "/^[0-9]{7,8}$/";
}

function getNamePattern(){
    return "/^[a-zA-Z\s\.]+$/";
}

function getThesisFileNamePattern() {
    return "/^[0-9]{7,8}-[MB]TP[I]{1,2}\.pdf$/";
}
?>
