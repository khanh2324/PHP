<?php
    // Thiết lập charset utf8
    header('Content-Type: text/html; charset=utf-8');

    //Xử lý đăng ký
    if(!isset($_POST['submit-register'])){
        // Lấy thông tin
        $fullname   = isset($_POST['fullname']) ? addslashes($_POST['fullname']) : '';
        $email      = isset($_POST['email'])    ? addslashes($_POST['email']) : '';
        $password   = isset($_POST['password']) ? md5($_POST['password']) : '';

        // Kết nối CSDL
        $conn = mysqli_connect('localhost', 'root', '', 'demo_register') or die ('Lỗi kết nối');
        mysqli_set_charset($conn, "utf8");

        // Kiểm tra email có bị trùng hay không
        $sql = "SELECT * FROM member WHERE email = '$email'";
        
        // Thực thi câu truy vấn
        $result = mysqli_query($conn, $sql);

        // Nếu kết quả trả về lớn hơn 1 thì nghĩa là fullname hoặc email đã tồn tại trong CSDL
        if (mysqli_num_rows($result) > 0)
        {
            // Sử dụng javascript để thông báo
            echo '<script language="javascript">alert("Thông tin đăng nhập đã tồn tại"); window.location="form-register.php";</script>';
            
            // Dừng chương trình
            die ();
        }
        else {
            // Ngược lại thì thêm bình thường
            $sql = "INSERT INTO member (fullname, password, email) VALUES ('$fullname','$password','$email')";
            
            if (mysqli_query($conn, $sql)){
                echo '<script language="javascript">alert("Đăng ký thành công"); window.location="form-register.php";</script>';
            }
            else {
                echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="form-register.php";</script>';
            }
        }
    }
?>