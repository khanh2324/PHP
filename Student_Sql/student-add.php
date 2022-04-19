<?php
    require './libs/students.php';

    //Nếu người dùng submid form
    if(!empty($_POST['add_student'])){
        //Lấy data
        $data['sv_name'] = isset($_POST['name']) ? $_POST['name'] : '';
        $data['sv_sex'] = isset($_POST['sex']) ? $_POST['sex'] : '';
        $data['sv_birthday'] = isset($_POST['birthday']) ? $_POST['birthday'] : '';

        // Validate Thông tin
        $error = array();
        if(empty($_POST['sv_name'])){
            $error['sv_name'] = 'Bạn chưa nhập tên sinh viên';
        }

        if (empty($data['sv_sex'])){
            $errors['sv_sex'] = 'Chưa nhập giới tính sinh vien';
        }
         
        // Neu ko co loi thi insert
        if (!$errors){
            add_student($data['sv_name'], $data['sv_sex'], $data['sv_birthday']);
            // Trở về trang danh sách
            header("location: student-list.php");
        }
    }

    disconnect_db();
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thêm Sinh Viên</title>
        <link rel="stylesheet" href="./CSS-Files/main.css">
    </head>
    <body>
        <h1>Thêm Sinh Viên </h1>
        <a class="btn" href="student-list.php">Trở về</a> <br/> <br/>
        <form method="post" action="student-add.php">
            <table width="50%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name" value="<?php echo !empty($data['sv_name']) ? $data['sv_name'] : ''; ?>"/>
                        <?php if (!empty($errors['sv_name'])) echo $errors['sv_name']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <select name="sex">
                            <option value="Nam">Nam</option>
                            <option value="Nữ" <?php if (!empty($data['sv_sex']) && $data['sv_sex'] == 'Nữ') echo 'selected'; ?>>Nữ</option>
                        </select>
                        <?php if (!empty($errors['sv_sex'])) echo $errors['sv_sex']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Birthday</td>
                    <td>
                        <input type="text" name="birthday" value="<?php echo !empty($data['sv_birthday']) ? $data['sv_birthday'] : ''; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="add_student" value="Lưu"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
    </html>