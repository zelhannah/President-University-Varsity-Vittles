<?php
function dbconnection(){
    $con = mysqli_connect("localhost", "root","", "ecosurv");
    return $con;
}

?>