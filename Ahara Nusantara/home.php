<?php
$conn = new mysqli("localhost", "root", "", "ahara_nusantara");

if ($conn->connect_error) {
    die("koneksi gagal: " . $conn->connect_error);
}
