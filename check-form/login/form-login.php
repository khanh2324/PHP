<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style-js.css">
    
    <title>Đăng Nhập</title>
</head>
<body>
    <div class="main">

        <form action="connect-login.php" method="POST" class="form" id="form-2">
            <h3 class="heading">Đăng nhập</h3>

            <div class="spacer"></div>

            <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
            <span class="form-message"></span>
            </div>

            <div class="form-group">
            <label for="password" class="form-label">Mật khẩu</label>
            <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
            <span class="form-message"></span>
            </div>

            <button class="form-submit" name="submit-login">Đăng nhập</button>

            <div class="auth-form__help">
                <span class="auth-form__help-separate">Bạn chưa có tài khoản ?</span>
                <a href="../register/form-register.php" class="auth-form__link">Đăng ký ngay</a>
            </div>
        </form>
      </div>

      <script src="../validator.js"></script>
      <script>
        //Output nhận được
        Validator({
          form: '#form-2',
          formGroupSelector: '.form-group',
          errorSelector: '.form-message',
          rules: [
            Validator.isEmail('#email'),
            Validator.minLength('#password', 6),
          ],
        //   onSubmit: function (data) {
        //     // Call API
        //     console.log(data);
        //   }
        });
      </script>
</body>
</html>