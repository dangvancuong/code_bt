<?php 
	$n=17;

	function kt($k)
	{
		if($k<2) return false;
		for($i=2; $i<=sqrt($k); $i++){
			if($k%$i==0) return false;
		}
		return true;
	}
	if( kt($n) ){
		echo $n."là số nt";
	}else{
		echo $n." : không phải là số nt";
	}

 ?>