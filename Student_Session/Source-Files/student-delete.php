<?php
    //Nếu là delete thì thực hiện tao tác này
    if(!empty($_POST['delete'])){
        require ('./students.php');
        $student_id = isset($_POST['student_id']) ? $_POST['student_id'] : "" ;
        deleteStudent($student_id);
    }

    // Chuyển hướng về trang danh sách
    header('Location:student-list.php');
?>