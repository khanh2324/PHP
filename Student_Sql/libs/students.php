<?php
    //Biến kết nối toàn cục
    global $conn;

    //Hàm kết nối database
    function connect_db() {
        //Gọi tới biến toàn cục $conn
        global $conn;

        //Nếu chưa kết nối thì thực hiện kết nối
        if(!$conn){
            $conn = mysqli_connect('localhost', 'root', '', 'qlsv_db') or die ('Không thể kết nối tới database');
            // Thiết lập font chữ kết nối
            mysqli_set_charset($conn, 'utf8');
        }
    }

    // Hàm ngắt kết nối
    function disconnect_db(){
        //Gọi tới biến toàn cục
        global $conn;

        // Nếu đã kêt nối thì thực hiện ngắt kết nối'
        if($conn){
            mysqli_close($conn);
        }
    }

    // Ham lấy tất cả các sinh viên
    function get_all_students(){
        global $conn;

        //Ham ket noi
        connect_db();

        // Câu truy vấn lấy tất cả sinh viên
        $sql = "select * from tb_sinhvien";

        // Thực hiện câu truy vấn
        $query = mysqli_query($conn, $sql);

        // Mảng chứa kết quả 
        $result = array();

        // Lặp qua từng record và đưa vào biến kết quả
        if($query){
            while ($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }

        // Trả về kết quả
        return $result;
    }

    // Hàm lấy sinh viên theo ID
    function get_student($student_id) {
        global $conn;

        connect_db();

        // Truy vấn sql lấy tất cả các sinh viên chứa id
        $sql = "select * from tb_sinhvien where sv_id = {$student_id}";

        // Thực hiện truy vấn
        $query = mysqli_query($conn, $sql);

        $result = array();

        // Nếu có kết quả thì lưu vào biến result
        if(mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);
            $result = $row;
        }

        return $result;
    }

    // add student
    function add_student($student_name, $student_sex, $student_birthday ){
        // Gọi tới biến toàn cục
        global $conn;

        connect_db();

        // Chống SQL Injection 
        $student_name = addslashes($student_name);
        $student_sex = addslashes($student_sex);
        $student_birthday = addslashes($student_birthday);

        $sql = "
            INSERT INTO tb_sinhvien(sv_name, sv_sex, sv_birthday)
            VALUES ('$student_name', '$student_sex', '$student_birthday')
        ";

        // Thực hiện truy vấn
        $query = mysqli_query($conn, $sql); 

        return $query;
    }

    // Update student 
    function edit_student($student_name, $student_sex, $student_birthday, $student_id){
        global $conn;

        connect_db();

        $student_name       = addslashes($student_name);
        $student_sex        = addslashes($student_sex);
        $student_birthday   = addslashes($student_birthday);

        // Câu truy vấn
        $sql = "
            UPDATE tb_sinhvien SET 
            sv_name = '$student_name',
            sv_sex = '$student_sex',
            sv_birthday = '$student_birthday'
            WHERE sv_id = $student_id
        ";

        $query = mysqli_query($conn, $sql);

        return $query;
    }

    // Delete Student
    function delete_student($student_id){
        global $conn;

        connect_db();

        $sql = "
            DELETE FROM tb_sinhvien
            WHERE sv_id = $student_id
        ";

        $query = mysqli_query($conn, $sql);

        return $query;
    }
?>