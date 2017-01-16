<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bài 2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="file">
                <input type="submit" name="ok" value="Upload"/>
            </div>
        </form>
        <?php
            if(isset($_POST['ok'])){  
                if($_FILES['file']['name'] != NULL){ 
                    if($_FILES['file']['type'] == "image/jpeg"
                    || $_FILES['file']['type'] == "image/png"
                    || $_FILES['file']['type'] == "image/gif"){ 
                        if($_FILES['file']['size'] > 1048576){
                            echo "File không được lớn hơn 1mb";
                        }else{ 
                            $path = "upload/"; 
                            $tmp_name = $_FILES['file']['tmp_name'];
                            $name = $_FILES['file']['name'];
                            $type = $_FILES['file']['type']; 
                            $size = $_FILES['file']['size']; 
                            


                            move_uploaded_file($tmp_name,$path.$name);
                            echo "File uploaded! <br />";
                            echo "Tên file : ".$name."<br />";
                            echo "Kiểu file : ".$type."<br />";
                            echo "File size : ".$size;
                       }
                    }else{ 
                       echo "Kiểu file không hợp lệ";
                    }
               }else{
                    echo "Vui lòng chọn file";
               }
            }
            ?>
    </div>
</body>
</html>

 