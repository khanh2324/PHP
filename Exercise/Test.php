<!DOCTYPE html>
<html>
    <head>
        <title>Giải phương trình bậc nhất</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
            $result = '';
            if(isset($_POST['calulate'])){
                $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
                $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
                if($a == ''){
                    $result = 'Bạn chưa nhập số a';
                }else if($b == ''){
                    $result = 'Bạn chưa nhập số b';
                }else if($a == 0){
                    $result = 'Phương trình vô nghiệm';
                }
                else{
                    $result =  -($b) / $a ;
                }
            }
        ?>
        <h1>Giải phương trình bậc nhất</h1>
        <form method="post" action="">
            <input type="text" style="width: 20px" name="a" value=""/> x 
            +
            <input type="text" style="width: 20px" name="b" value=""/> = 0
            <br><br>
            <input type="submit" name="calulate" value="Kết quả">
        </form>
        <?php echo $result; ?>
    </body>
</html>