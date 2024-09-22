<?php
if(isset($_REQUEST['calculate']))
{
$loanAmount= $_POST['loanAmount'];
$interestRate=$_POST['interestRate'];
$loanTerm=$_POST['loanTerm'];

   
   $monthlyInterestRate =$interestRate /(100 *12);
   
   $numberofpayments =$loanTerm * 12;
   
   
   $monthlyPayment = ($loanAmount *$monthlyInterestRate*pow(1+ $monthlyInterestRate, $loanTerm))/(pow(1+ $monthlyInterestRate, $loanTerm)-1);
		
}	

header("location:index.php?data=$monthlyPayment")
?>