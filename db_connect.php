<?php

function db(){
    global $link;
    $link = mysqli_connect("localhost", "ih423623_radchenko", "Radchenko2018", "ih423623_radchenko" ) or die("couldn't connect to database");
    return $link;
}
