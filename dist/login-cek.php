<?php
include "connect.php";

$username = 'username';
$password = 'password';

$admin=($koneksi,"SELECT * FROM user where username='username' and password='password'");

?>