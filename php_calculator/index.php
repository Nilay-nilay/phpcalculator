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

   <div class="calculator-container">
   <h1>Calculator</h1>
   <form method="post" action="calculate.php">
   <!--<div class="calculator-container">-->
       <div class="form-group">
	       <label for="num1">Enter First Number:</label>
		   <input type="text" name="num1" id="num1" placeholder="Enter 1st Number">
	   </div>
	   <div class="form-group">
	       <label for="num2">Enter Second Number: </label>
		   <input type="text" name="num2" id="interestRate" placeholder="Enter 2nd number">
	   </div>
	   <div class="form-group">
	       <label for="operator">:</label>Select Operator: 
		   <select name="operator" id="operator" placeholder="Choose Operator">
		   <option value="">--select--</option>
		   <option value="add">+</option>
		   <option value="sub">-</option>
		   <option value="mul">*</option>
		   <option value="div">/</option>
		   </select>
		   
	   </div>
	   <br/>
	   <input type="submit" name="calculate" value="Calculate">
	   <div class="result">
	   <h2>Result: <span id="monthlyPayment">
	   <?php if(isset($_REQUEST['data'])) echo $_REQUEST['data'];?>
	   </span></h2>
	   <!--</div>-->
	</div>
	</form>
</div>
<script src="Script.js"></script>

</body>
</html>	