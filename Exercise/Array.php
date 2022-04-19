<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
        $authors = array(
            array(
                'name' => 'Nguyễn Văn Cường',
                'blog' => 'freetuts.net',
                'position' => 'admin'
            ),
            array(
                'name' => 'Trương Phúc Hoài Minh',
                'blog' => 'freetuts.net',
                'position' => 'author'
            ),
            array(
                'name' => 'Hoàng Văn Tuyền',
                'blog' => 'freetuts.net',
                'position' => 'author'
            ),
            array(
                'name' => 'Nguyễn Tình',
                'blog' => 'freetuts.net',
                'position' => 'author'
            )
        );

        echo '<ul>';
        foreach ($authors as $key => $author)
        {
            echo '<li>';
            echo 'Phần tử thứ: ' . $key;
            echo '<pre>';
                var_dump($author);
            echo '</pre>';
            echo '</li>';
        }
        echo '</ul>';
        //Truy xuat mang 1 chieu
        //$value = $array[$key];

        // Truy xuat mang nhieu chieu
        // Do key bắt đầu từ 0 nên phần tử thứ 2 sẽ có key =1 
        // $hoai_minh = $author[1];
        
        // Lấy tên
        // $name = $hoai_minh['name'];
    ?>
    <!-- 
        * Thêm phần tử vào mảng
        // Thêm vào cuối mảng (cách 1)
        $array[] = 'value';
        
        // Thêm vào cuối mảng (cách 2)
        array_push($array, 'value');
        
        // Thêm vào một vị trí nào đó
        // trong đó $key có thể là con số (mảng chỉ mục) hoặc chuỗi (mảng kết hợp)
        $array[$key] = 'value';

        * Sửa giá trị trong mảng
        $author['key_can_sua'] = 'value';

     -->
</body>
</html>