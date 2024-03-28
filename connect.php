<?php
$con = new mysqli('localhost', 'root', 'Utsav!@#456', 'crudoperation');
if (!$con) {
    die(mysqli_error($con));
}
