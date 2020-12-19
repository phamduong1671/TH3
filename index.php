<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet"  type="text/css" href="css/style.css">
    <title>Thực Hành 3</title>
</head>
<body>
    <div class = "conteiner">
        <div>
            <h1>Quản Lý Nhân Viên</h1>
            <a href="admin/create.php">Add new employee</a>
        </div>
        <section class = "users">
        <?php
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
        ?>
        </section>
        <table class = "table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            echo'<div class = "container">';
            foreach($post_list as $post){
                echo"<tr>";
                    echo"<td>$post[0]</td>";
                    echo"<td>$post[1]</td>";
                    echo"<td>$post[2]</td>";
                    echo"<td>$post[3]</td>";
                    echo"<td class='ct'>";
                    echo"<a href='admin/read.php?id=". $post[0] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'><img src='icon/b_search.png'>&nbsp; read</span></a>";
                    echo"<a href='admin/update.php?id=". $post[0] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'><img src='icon/b_inline_edit.png'>&nbsp; update</span></a>";
                    echo"<a href='admin/delete.php?id=". $post[0] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'><img src='icon/b_empty.png'>&nbsp; delete</span></a>";
                    echo"</td>";
                    echo"</tr>";
            }
            echo'</div>';
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>