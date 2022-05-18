<?php
$koneksi = mysqli_connect("localhost", "root", "", "form_pendaftaran");

if (!$koneksi) {
    die("connection failed : " . mysqli_connect_error()); //msg eror
}
