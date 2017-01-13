
<?php 
	// Tính tiền điện phải trả theo quy tắc 100kW đầu 450đ/kW, từ kW 101-150 750đ/kW, trên 150kW 950đ/kw. Số kw tự định nghĩa
	$n=1900;
	if ($n<=100) {
		$s100 = $n*450;
		echo $s100."dùng ít vậy" ;
	}
	
	if ($n<=150 && $n>100) {
		$s100 = 100*450;
		$s150 = $s100 +($n-100)*750;
		echo $s150."dùng thêm đi ";
	}
	
	if($n>150){
		$s150 =100*450+50*750;
		$max = $s150 + ($n-150)*950;
		echo $max." dùng nhiều điện vãi";
	}
 ?>