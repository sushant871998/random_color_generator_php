<?php
function random_color(){
	$randcolor='#';
	for ($i=0; $i<6 ; $i++) { 
		$rcolor=rand(0,15);
		switch ($rcolor) {
			case 10:$rcolor='A';
				break;
			case 11:$rcolor='B';
				break;
			case 12:$rcolor='C';
				break;
			case 13:$rcolor='D';
				break;
			case 14:$rcolor='E';
				break;
			case 15:$rcolor='F';
				break;
			
			
		}
		$randcolor.=$rcolor;
	}
	return $randcolor;
}
echo '<div style="background-color:'.random_color().';color:'.random_color().';font-size:40px">'."THIS IS A RANDOM COLOR".'</div>';
$url=$_SERVER['REQUEST_URI'];
header("Refresh: 1; URL=$url");

?>