<?php
    //kiểm tra sự kiện đăng ký
    if(!isset($_POST['txtUsername'])){
        die('');
    }

    //Nhúng file kết nối vào database
    include('main_connect.php');

    header('Content-Type: text/html; charset=utf-8');

    //Lấy dữ liệu từ file register
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
    $email = addslashes($_POST['txtEmail']);
    $fullname = addslashes($_POST['txtFullname']);
    $birthday = addslashes($_POST['txtBirthday']);
    $sex = addslashes($_POST['txtSex']);

    //Kiểm tra người dùng nhập đầy đủ chưa
    if(!$username || !$password || !$email || !$fullname || !$birthday || !$sex) {
        echo "Vui lòng nhập đầy đủ thông tin.  <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    // Mã hoá password
    $password = md5($password);
    // Kiểm tra tài khoản đã tồn tại hay chưa
    $queryUsername = "SELECT username FROM member WHERE username='$username'";
    if(mysqli_num_rows(mysqli_query($conn,$queryUsername)) > 0) {
        echo "Tài khoản đã tồn tại !";
        exit;
    }

    $queryEmail = "SELECT email FROM member WHERE email='$email'";
    if(mysqli_num_rows(mysqli_query($conn,$queryEmail)) > 0) {
        echo "Email đã tồn tại !";
        exit;
    }

    else{
        
    }

    
?>