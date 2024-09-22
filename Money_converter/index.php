<html lang="en">
<head>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <title>Money converter</title>
   <link rel="stylesheet" href="style.css">
   
</head>






<body><?php if(isset($_REQUEST['data'])) ?>
   <div class="calculator-container">
   <h1>Money converter</h1>
   <form method="post" action="converter.php">
   <!--<div class="calculator-container">-->
       <div class="form-group">
	       <label for="num1">Enter Amount:</label>
		   <input type="text" name="inr" id="num1" placeholder="Enter Amount">
	   </div>
	   
	   <div class="form-group">
	       <label for="currency"></label>Select currency: 
		   <select name="currency" id="currency" placeholder="Choose currency">
		   <option value="">--select--</option>
		   <option value="usd">$</option>
		   <option value="yen">¥</option>
		   <option value="eur">€</option>
		   <option value="pnd">£</option>
		   </select>
		   
	   </div>
	   <br/>
	   <input type="submit" name="converter" value="converter">
	   <div class="result">
	   <h2>Result: <span id="Money converter">
	   <?php echo $_REQUEST['data'];?>
	   </span></h2>
	   <!--</div>-->
	</div>
	</form>
</div>

</body>
</html>	