<!DOCTYPE html>
<html>
    <head>
        <title>Freetuts.net - Form liên hệ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        // Code PHP xử lý validate
        $error = array();
        $data = array();
        if (!empty($_POST['contact_action']))
        {
            //Lay du lieu
            $data['fullname'] = isset($_POST['fullname']) ? $_POST['fullname'] : '';
            $data['email'] = isset($_POST['email']) ? $_POST['email']: '';
            $data['content'] = isset($_POST['content']) ? $_POST['content'] : '';

            //Kiểm tra định dạng dữ liệu
            require('./validate.php');
            if(empty($data['fullname'])){
                $error['fullname'] = 'Bạn chưa nhập tên';
            }
            if(empty($data['email'])){
                $error['email'] = 'Bạn chưa nhập email';
            }
            else if(!is_email($data['email'])){
                $error['email'] = ' Bạn đã nhập sai định dạng email';
            }
            if(empty($data['content'])){
                $error['content'] = 'Bạn chưa nhập nội dung';
            }

            // Luu dữ liệu
            if(!$error){
                echo 'Dữ liệu có thể lưu trữ';
                // code xử lý lưu trữ
            }
            else{
                echo 'Dữ liệu bị lỗi';
            }
        }
        ?>
        <h1>Form Đăng Nhập</h1>
        <form method="post" action="index.php">
            <table cellspacing="0" cellpadding="5">
                <tr>
                    <td>Tên của bạn</td>
                    <td>
                        <input type="text" name="fullname" id="fullname" value=""/>
                        <div><?php echo isset($error['fullname']) ? $error['fullname'] : ''; ?></div>
                    </td>
                </tr>
                <tr>
                    <td>Email của bạn</td>
                    <td>
                        <input type="text" name="email" id="email" value=""/>
                        <div><?php echo isset($error['email']) ? $error['email'] : ''; ?></div>
                    </td>
                </tr>
                <tr>
                    <td>Nội dung liên hệ</td>
                    <td>
                        <textarea id="content" name="content"></textarea>
                        <div><?php echo isset($error['content']) ? $error['content'] : ''; ?></div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="contact_action" value="Gửi liên hệ"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>