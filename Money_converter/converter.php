<?php
if(isset($_POST['converter']))
{
$num1= $_POST['inr'];
$opt=$_POST['currency'];

switch($opt)
{
	case 'usd':
    $res=$num1/83;
	break;
	
	case 'yen':
    $res=$num1/188.92;
	break;
	
	case 'eur':
    $res=$num1/1.10;
	break;
	case 'pnd':
    $res=$num1/0.92;
	break;

}

}
header("location:index.php?data=$res");
?>