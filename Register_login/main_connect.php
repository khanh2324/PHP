<?php
    // Các giá trị gán để kết nối
    $connect['host'] = 'localhost';
    $connect['username'] = 'root';
    $connect['password'] = '';
    $connect['dbname'] = 'register_login'; // tên database

    $conn = mysqli_connect(
        "{$connect['host']}",
        "{$connect['username']}",
        "{$connect['password']}",
        "{$connect['dbname']}"
    ) or die ("Không thể kết nối với database");
?>