<?php
  // buat koneksi dengan database mysql
  $host = "192.168.43.48:7306";
  $user = "root";
  $pass = "123456";
  $name = "mahasiswa";
  $link = mysqli_connect($host,$user,$pass,$name);
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysql_connect_errno().
    " - ".mysql_connect_error());
  }
?>
