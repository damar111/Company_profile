<?php
require __DIR__ . './../../../app/config/koneksi.php';

$id = $_GET['id'];

$query = "delete from users1 where id='$id'";
mysqli_query($koneksi, $query);

header("Location: http://localhost/buyapps-project2_new/account");
exit();
