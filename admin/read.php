<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Infomation</title>
</head>
<body>
    <div class="conteiner">
        <h1>Thông tin nhân viên</h1>
        <?php
            $id = $_GET['id'];
            $conn = mysqli_connect('localhost','root','','qlnv');
            if(!$conn){
                die('Kết nối thất bại'.mysqli_connect_error());
            }
            $sql = "select * from employees";
            mysqli_set_charset($conn,'UTF8');
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                $post_list = mysqli_fetch_all($result);
            }
            echo"<p>ID:".</p>";
            echo"<p></p>";
            echo"<p></p>";
            echo"<p></p>";
        ?>
    </div>
</body>
</html>