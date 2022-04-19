<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Club Football</title>
    <style type="text/css">
            table{
                width: 800px;
                margin: auto;
                text-align: center;
            }
            tr {
                border: 1px solid;
            }
            th {
                border: 1px solid;
            }
            td {
                border: 1px solid;
            }
            h1{
                text-align: center;
                color: red;
            }
            #button{
                margin: 2px;
                margin-right: 10px;
                float: right;
            }
        </style>
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'club_football');
        //Câu lệnh lấy tất cả các dữ liệu trong bảng players
        $sql = "SELECT * FROM `players` ORDER BY `id`";
        // Chạy câu sql
        $result = mysqli_query($conn, $sql);
        // Gắn dữ liệU vào mảng $data
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        $html = '';
        foreach ($data as $value) {
            // .= để nối chuỗi
            $html .= ' 
            <tr role="row">
                <td>'.$value['id'].'</td>
                <td>'.$value['name'].'</td>
                <td>'.$value['age'].'</td>
                <td>'.$value['national'].'</td>
                <td>'.$value['position'].'</td>
                <td>'.$value['salary'].' $</td>
                <td><a href="edit.php?id='.$value['id'].'">Edit</a></td>
                <td><a href="delete.php?id='.$value['id'].'"> Delete</a></td>
            </tr>';
        }
    ?>
    <table id="database" style="border: 1px solid">
        <h1>Quản lý cầu thủ</h1>
        <thead>
            <tr role="row">
                <td>ID</td>
                <td>Tên Cầu Thủ</td>
                <td>Tuổi</td>
                <td>Quốc tịch</td>
                <td>Vị trí</td>
                <td>Lương</td>
                <td style="width: 7%;">Edit</td>
                <td style="width: 10%;">Delete</td>
            </tr>
        </thead>
        <tbody>
            <?php
                echo $html;
            ?>
        </tbody>
        <tfoot>
                <tr>
                    <td colspan="8">
                        <a href="add.php"><button id="button">Thêm cầu thủ</button></a>
                    </td>
                </tr>
            </tfoot>
    </table>
</body>
</html>