<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <!-- Bootrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Đăng ký </h1>
    <br>
    <form method="POST" action="main.php" class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-xs-2">Tài khoản</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="txtUsername">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2">Mật khẩu</label>
            <div class="col-xs-4">
                <input type="password" class="form-control" name="txtPassword">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2">Email</label>
            <div class="col-xs-4">
                <input type="email" class="form-control" name="txtEmail">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2">Họ Tên</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="txtFullname">
            </div>
        </div>
        <div class="form-group">
            <label for="birthday" class="control-label col-xs-2">Ngày Sinh</label>
            <div class="col-xs-4">
                <input type="date" id="birthday" name="txtBirthday">
                <input type="submit">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2">Giới tính</label>
            <div class="col-xs-4">
                <select class="form-select" name="txtSex" aria-label="Default select example">
                    <option selected>Chọn Giới Tính</option>
                    <option value="Nam">Nam</option>
                    <option value="Nu">Nữ</option>
                    <option value="Khac">Khác</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Đăng ký</button>
        <button type="reset" class="btn btn-primary">Nhập lại</button>
    </form>
</body>
</html>