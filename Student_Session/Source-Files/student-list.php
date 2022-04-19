<?php
    require ('./students.php');
    $students = getAllStudents();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="./CSS-Files/main.css">
</head>
<body>
    <a class="btn" href="student-add.php">Thêm sinh viên</a>
    <br><br>
    <div>Click vào Fullname để cập nhật thông tin </div>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>ID</td>
            <td>Fullname</td>
            <td>Birthday</td>
            <td>Action</td>
        </tr>
        <?php foreach ($students as $item){ ?>
            <tr href="">
                <td><?php echo $item['student_id']; ?></td>
                <td>
                    <a href="student-add.php?id=<?php echo $item['student_id']; ?>"><?php echo $item['student_name']; ?></a>
                </td>
                <td><?php echo $item['student_email']; ?></td>
                <td>
                    <form method="post" action="student-delete.php">
                        <!-- Thẻ input lưu trữ id để biết -->
                        <input type="hidden" value="<?php echo $item['student_id']; ?>" name="student_id"/>
                        <input onclick="return confirm('Bạn có chắc muốn xoá sinh viên này hay không ?');" type="submit" value="Delete" name="delete"/>
                    </form>
                </td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>