<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align="center">
        <form action="search.php" method="get">
            Search: <input type="text" name="search" />
            <input type="submit" name="search-btn" value="Search" />
        </form>
    </div>
    <?php
    // Nếu người dùng submit form thì thực hiện
    if (isset($_REQUEST['search-btn']))
    {
        // Gán hàm addslashes để chống sql injection
        $search = addslashes($_GET['search']);
        // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
        if (empty($search)) {
            echo "Yeu cau nhap du lieu vao o trong";
        } else {
            // Kết nối sql
            $conn = mysqli_connect('localhost', 'root', '', 'form-search');

            // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
            $query = "select * from users where username like '%$search%'";

            // Thực thi câu truy vấn
            $sql = mysqli_query($conn, $query);

            // Đếm số đong trả về trong sql.
            $num = mysqli_num_rows($sql);

            // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
            if ($num > 0 && $search != "") 
            {
                // Dùng $num để đếm số dòng trả về.
                echo "$num ket qua tra ve voi tu khoa <b>$search</b>";

                // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                echo '<table border="1" cellspacing="0" cellpadding="10">';
                while ($row = mysqli_fetch_assoc($sql)) {
                    echo '<tr>';
                        echo "<td>{$row['user_id']}</td>";
                        echo "<td>{$row['username']}</td>";
                        echo "<td>{$row['password']}</td>";
                        echo "<td>{$row['email']}</td>";
                        echo "<td>{$row['address']}</td>";
                    echo '</tr>';
                }
                echo '</table>';
            } 
            else {
                echo "Khong tim thay ket qua!";
            }
        }
    }
    ?>
</body>
</html>
