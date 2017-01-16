<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài 1 validation form insert database </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

</head>
<body>
    <?php 
        include 'connect_vnp.php';
        if(isset($_POST['ok'])){ 
             if ($name=="") {
            $error[hoTen] = "vui lòng nhập tên";
        }
        if ($address=="") {
            $error[diaChi] = "vui lòng nhập địa chỉ";
        }
        if ($birthday=="") {
            $error[ngaySinh] = "vui lòng nhập ngày sinh";
        } 
        if (empty($error)) {
            echo "ok";
        }
            $sql = "INSERT INTO user(ten, diachi, gioitinh,ngaysinh)
                VALUES('".$name."','".$address."','".$gender."','".$birthday."')";
            mysqli_query($conn,$sql);

        }




    ?>

    <div class="container">

        <h1 style="color: #ccc; text-align: center; padding: 10px; background: #000; border-radius: 10px;">FORM INSERT DB</h1>
        <form method="post">
            <div class="form-group">
                <label for="">Họ Tên </label>
                <input type="text" class="form-control" id=" " placeholder="Họ Tên" name="hoTen" value="<?php echo $name; ?>">
                <?php if (isset($error['name'])):?>
                    <span class="help-block text-danger"><?php echo $error['name'] ?></span>  
                <?php endif ?>
            </div> 
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id=" " placeholder="Địa chỉ" name="diaChi" value="<?php echo $address; ?>">
                <?php if (isset($error['diaChi'])):?>
                    <span class="help-block text-danger"><?php echo $error['diaChi'] ?></span>  
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="">Giới tính </label> 
            </div>
            <div class="form-group">
                <label class="radio-inline">
                    <input type="radio" name="gioiTinh" id="inlineRadio1" value="1"> Nam
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gioiTinh" id="inlineRadio2" value="0"> Nữ
                </label>
            </div>
            <div class="form-group">
                <label for="">Ngày Sinh</label>
                <input type="date" class="form-control" id=" " placeholder="Ngày Sinh" name="ngaySinh" value="<?php echo $birthday; ?>">
                <?php if (isset($error['ngaySinh'])):?>
                    <span class="help-block text-danger"><?php echo $error['ngaySinh'] ?></span>  
                <?php endif ?>
            </div>
          
            <div class="form-group">
                <input type="submit" name="ok" value="insert database">
            </div>
        </form>
    </div>
</body>
</html>