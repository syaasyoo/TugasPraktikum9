<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'praktek9';

$koneksi = new mysqli($host,$user,$pass,$dbname);

if($koneksi->connect_error){
die('koneksi gagal :' .$koneksi->connect_error).'';
}
?>