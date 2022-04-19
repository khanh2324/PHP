<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
            button{
                margin-right: 20px;
                padding: 5px;
            }
            form{
                width: 600px;
                margin: auto;
                text-align: center;
            }
            div.form-group{
                width: 90%;
                height: 24px;
                margin: 5px;
            }
            div.form-group input{
                float: right;
                height: 20px;
                width: 400px;
            }
            span{
                font: 18px bold;
                font-weight: bold;
                float: right;
                margin-right: 10px; 
            }
            h1{
                text-align: center;
            }
        </style>
</head>
<body>
    <?php
        $id = $_GET["id"];

        $conn = mysqli_connect('localhost', 'root', '', 'club_football');
        $sql = "SELECT * FROM `players` WHERE `id` =" .$id;
        
        $result = mysqli_query($conn, $sql);
        //Gắn dữ liệu lấy được vào mảng $data
        while ($row=mysqli_fetch_assoc($result)) {
            $info = $row;
        }
    ?>
    <!-- action gửi đi id để process nhận diện và xử lý qua url-->
    <form action="process.php?id=<?php echo $id ?>" method="POST">
            <h1>Chỉnh sửa thông tin cầu thủ</h1>
            <div class="form-group">
                <input type="text" name="name" value="<?php echo $info['name'] ?>"><span>Tên cầu thủ: </span>
            </div>
            <div class="form-group">
                <input type="text" name="age" value="<?php echo $info['age'] ?>"><span>Tuổi: </span>
            </div>
            <div class="form-group">
                <input type="text" name="national" value="<?php echo $info['national'] ?>"><span>Quốc tịch: </span>
            </div>
            <div class="form-group">
                <input type="text" name="position" value="<?php echo $info['position'] ?>"><span>Vị trí: </span>
            </div>
            <div class="form-group">
                <input type="text" name="salary" value="<?php echo $info['salary'] ?>"><span>Lương: </span>
            </div>
            <div class="form-group">
                <button type="submit">Cập nhật</button>
                <button type="reset">Reset</button>
                <a href="index.php"><button type="button">Cancle</button></a>
            </div>
        </form>
</body>
</html>