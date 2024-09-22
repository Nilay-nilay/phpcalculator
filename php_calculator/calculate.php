<?php
if(isset($_REQUEST['calculate']))
{
$num1= $_POST['num1'];
$num2=$_POST['num2'];
$opp=$_POST['operator'];

switch($opp)
{
	case "add":
    $res=$num1+$num2;
    echo $res;
	break;
	
	case "sub":
    $res=$num1-$num2;
    echo $res;
	break;
	
	case "mul":
    $res=$num1*$num2;
    echo $res;
	break;
	
	case "div":
    $res=$num1/$num2;
    echo $res;
	break;

}
}
header("location:index.php?data=$res")
?>