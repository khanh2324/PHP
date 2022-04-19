<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
    <form method="post" action="handle.php">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value=""> </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value=""/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value=""/></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                    <select name="level">
                        <option value="0">Thành Viên</option>
                        <option value="1">Admin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="do-register" value="Đăng Ký"/></td>
            </tr>
        </table>
    </form>
</body>
</html>