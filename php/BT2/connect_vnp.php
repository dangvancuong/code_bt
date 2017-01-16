<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $namedb = "vnp_1";


    $name = isset($_POST['hoTen']) ? $_POST['hoTen']:'';
    $address = isset($_POST['diaChi']) ? $_POST['diaChi']:'';
    $gender = isset($_POST['gioiTinh']) ? $_POST['gioiTinh']:'';
    $birthday = isset($_POST['ngaySinh']) ? $_POST['ngaySinh']:-1; 
        
    $error=[];
       

    $conn = new mysqli($servername, $username, $password, $namedb); 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
?>
