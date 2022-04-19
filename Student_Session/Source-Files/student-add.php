<?php
    require ('./students.php');

    //Biến lưu trữ data và error
    // Biến này phải khai báo ở đây để dưới dùng k bị lỗi
    $data = array();
    $errors = array();

    //Biến kiểm tra có phải action edit hay không
    $is_update_action = false;

    //Trường hợp edit thì ta lấy thông tin để show ra cho người dùng thấy
    if(!empty($_GET['id'])){
        $data = getStudent($_GET['id']);
        $is_update_action = true;
    }

    // Nếu người dùng click vào nút submit
    if(!empty($_POST['add_student'])){
        //Lấy thông tin
        $data['student_id'] = isset($_POST['id']) ? $_POST['id'] : '';
        $data['student_name'] = isset($_POST['name']) ? $_POST['name'] : '';
        $data['student_email'] = isset($_POST['email']) ? $_POST['email'] : '';

        // Validate
        if(empty($data['student_id'])){
            $errors['student_id'] = 'Bạn chưa nhập ID';
        }

        if(empty($data['student_name'])){
            $errors['student_name'] = 'Bạn chưa nhập name';
        }

        if(empty($data['student_email'])){
            $errors['student_email'] = 'Bạn chưa nhập Email';
        }

        // Nếu dữ liệu hợp lệ thì thực hiện thao tác update thông tin 
        // đồng thời chuyển hướng về trang danh sách
        if(empty($errors)){
            updateStudent($data['student_id'], $data['student_name'], $data['student_email']);
            header("Location:student-list.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="./CSS-Files/main.css">
</head>
<body>
    <a class="btn" href="student-list.php">Back</a>
    <br><br>
    <form action="" method="POST">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>Id</td>
                <td>
                    <input type="text" name="id" value="<?php echo !empty($data['student_id']) ? $data['student_id'] : ''; ?>">
                    <?php echo !empty($errors['student_id']) ? $errors['student_id'] : ''; ?>
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" value="<?php echo !empty($data['student_name']) ? $data['student_name'] : ''; ?>">
                    <?php echo !empty($errors['student_name']) ? $errors['student_name'] : ''; ?>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" value="<?php echo !empty($data['student_email']) ? $data['student_email'] : ''; ?>">
                    <?php echo !empty($errors['student_email']) ? $errors['student_email'] : ''; ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="add_student" value="<?php echo ($is_update_action) ? 'Cập Nhật' : 'Thêm Mới'; ?>">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>