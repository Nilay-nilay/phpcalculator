<html lang="en">
<head>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <title>EMI Calculator</title>
   <link rel="stylesheet" href="style.css">
   
</head>


<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <title>EMI Calculator</title>
   <link rel="stylesheet" href="style.css">



<body>
<?php if(isset($_REQUEST['data'])) ?>
<form method="POST" action="EMIcal.php">
   <div class="calculator-container">
   <h1>EMI Calculator</h1>
   <!--<div class="calculator-container">-->
       <div class="form-group">
	       <label for="loanAmount">Loan Amount:</label>
		   <input type="number" name="loanAmount" placeholder="Enter loan Amount">
	   </div>
	   <div class="form-group">
	       <label for="interestRate">Annual interest Rate(%):</label>
		   <input type="number" name="interestRate" placeholder="Enter interest Rate">
	   </div>
	   <div class="form-group">
	       <label for="loanTerm">Loan Term (years):</label>
		   <input type="number" name="loanTerm" placeholder="Enter loan Term">
	   </div>
	   <br/>
	   <input type="submit" name="calculate" value="calculate">&nbsp;
         <!--	   <div class="result">-->
	   <h2>Monthly payment: <span id="monthlyPayment">Rs.<?php echo $_REQUEST['data']; ?></span></h2>
	   <!--</div>-->
	</div>
</div>
</form>
</body>https://pin.it/5c45GMAPW
</html>	