<?php

$connection = new mysqli('localhost','root','root','crudoperation');
if(!$connection)
{
    die(mysqli_error($connection));
}
?>
