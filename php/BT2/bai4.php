<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <meta charset="UTF-8">
    <title>Bài 4 </title>
</head>
<body> 
    <?php 
        
        include 'connect_vnp.php';
        $sql = "SELECT * FROM user"; 
        $result = mysqli_query($conn, $sql);


        if (isset($_POST['delete'])) { 
            $id=$_POST['delete'];
            $query = "DELETE FROM user WHERE id = $id"; 
            mysqli_query($conn, $query);
           
        }

    ?> 
    <div class="container"  style="margin-top: 100px;">
        <div class="them">
            <button type="button" class="btn btn-success"><a href="bai1.php">thêm</a></button>
        </div>
        <table class="table table-hover"> 
            <tr style="border-bottom: 3px solid #ccc">
                <td>STT</td>
                <td>Họ Tên</td>
                <td>Địa Chỉ</td>
                <td>Giới Tính</td>
                <td>Ngày Sinh</td> 
                <td>Xóa </td>
                <td>Sửa</td>
            </tr>
            
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr style="border-bottom: 1px solid #ccc">
                    <td><?php echo $row['id'] ;?></td> 
                    <td><?php echo $row['ten'] ;?></td> 
                    <td><?php echo $row['diachi']; ?></td> 
                    <td><?php echo $row['gioitinh']; ?></td> 
                    <td><?php echo $row['ngaysinh']; ?></td> 
                    <td>
                        <form method="post">
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" name="delete" value="<?php echo $row['id'];?>"  > 
                            </div>
                        </form>
                    </td>
                    
                    <td><button type="button" class="btn btn-success"><a href="bai3.php">Sửa</a></button></td>
                </tr> 
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>