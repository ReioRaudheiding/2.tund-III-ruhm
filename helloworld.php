<?php
	$first_name = "Reio";
	$last_name = "Raudheiding";
	
	echo $first_name." ".$last_name;
?>
<br>
<?php
	
	$age = 19;
	
	//testib loogikat, juhul kui vanus on väiksem 
	//kui 18 siis kirjuta "alaealine", muul juhul "täisealine"
	
	//if'i sisse loogikatehe
	if($age < 18) {
		echo "alaealine"; //tõene
		
	} else {
		echo "täisealine"; //väär
	}
?>