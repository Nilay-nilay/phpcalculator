function calculateloan() {
   const loanAmount = parseFloat(document.getElementById('loanAmount').value);
   const interestRate = parseFloat(document.getElementById('interestRate').value);
   const loanTerm = parseFloat(document.getElementById('loanTerm').value);
   
   const monthlyInterestRate = interestRate /100 /12;
   
   const numberofpayments = loanTerm * 12;
   
   
   const monthlyPayment = (loanAmount * monthlyInterestRate)/(1 - Math.pow(1+ monthlyInterestRate, -numberofpayments));
						  
						  document.getElementById('monthlyPayment').innerText =monthlyPayment.toFixed(2);
							}   
function clearloan() {
	document.getElementById('loanAmount').value='';
	document.getElementById('interestRate').value='';
	document.getElementById('loanTerm').value='';
	document.getElementById('monthlyPayment').innerText='';
	
}							