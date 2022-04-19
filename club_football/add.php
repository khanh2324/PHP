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
    <form action="process.php" method="post">
        <h1>Thêm cầu thủ</h1>
        <div class="form-group">
            <input type="text" name="name"><span>Tên câu thủ: </span>
        </div>
        <div class="form-group">
            <input type="text" name="age"><span>Tuổi: </span>
        </div>
        <div class="form-group">
            <input type="text" name="national"><span>Quốc tịch: </span>
        </div>
        <div class="form-group">
            <input type="text" name="position"><span>Vị trí: </span>
        </div>
        <div class="form-group">
            <input type="text" name="salary"><span>Lương: </span>
        </div>
        <div class="form-group">
            <button type="submit">Thêm</button>
            <button type="reset">Reset</button>
            <a href="index.php"><button type="button">Cancle</button></a>
        </div>
    </form>
</body>
</html>