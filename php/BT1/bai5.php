<?php 
	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 6</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
	<?php 
		$person = array(
				"id"=>1,
				"ten"=>"Cường",
				"ngaySinh" =>"07101996",
				"diaChi" => "haNoi",
				"soThich"=>"xem phim ..."
			);
	 ?>
	 <div class="container">
	 	<table class="table table-hover">
			<tr>
				<td>#</td>
				<td>Tên </td>
				<td>Ngày sinh</td>
				<td>Quê quán</td>
				<td>Sở thích</td>
			</tr>
			<tr>
				<td><?php echo $person['id']; ?></td>
				<td><?php echo $person['ten']; ?> </td>
				<td><?php echo $person['ngaySinh']; ?></td> 
				<td><?php echo $person['diaChi']; ?></td> 
				<td><?php echo $person['soThich']; ?></td> 
			</tr>
		</table>
	 </div>
	
</body>
</html>