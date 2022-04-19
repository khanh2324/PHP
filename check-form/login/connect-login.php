<?php
    // Xử lý đăng nhập
    if(!isset($_POST['submit-login'])){
        // Kết nối CSDL
        $conn = mysqli_connect('localhost', 'root', '', 'demo_register') or die ('Lỗi kết nối');
        mysqli_set_charset($conn, "utf8");

        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);

        //Mã hoá mật khẩu
        $password = md5($password);

        // Kiểm tra email có tồn tại không
        $query = mysqli_query($conn, "SELECT email, password FROM member WHERE email='$email'");
        if(mysqli_num_rows($query) == 0){
            echo '<script language="javascript">alert("Email không chính xác !"); window.location="form-login.php";</script>';
        }

        //Lấy mật khẩu database
        $row = mysqli_fetch_array($query);

        // So sánh 2 mật khẩu
        if($password != $row['password']){
            echo '<script language="javascript">alert("Mật khẩu không chính xác !"); window.location="form-login.php";</script>';
        }

        //Lưu tên đăng nhập
        $_SESSION['email'] = $email;
        echo '<script language="javascript">alert("Bạn đã đăng nhập thành công !"); window.location="form-login.php";</script>';
        die();

    }
?>