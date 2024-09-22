<style type="text/css">
.catcha
{
width:60px;
background-image:url();
font-size:20px;
border:2px solid;
}
.color
{
color:black;
}


</style>
<!--HTML FROM -->
<form method="post" action="welcome.php" name="form1">
<table width="400px" align="center" bgcolor="#ccff33">
<tr>
<td>name:</td>
<td><input type="text" name="name">
<span id="name" class="color"></span>
</td>
</tr>

<tr>
<td>Enter captcha:</td>
<td><input type="text" name="chk" id="chk">
<span id="error" class="color"></span>
</td>
</tr>
<td>&nbsp;</td>

<td><input type="text" value="26" id="ran" readonly="readonly" class="captcha">
<input type="button" value="Referesh" onclick="Captch()"/></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="check" onclick="return validation();"/></td>
</table>
</form>
<!-- End From-->



<script type ="text/Javascript">

//javascript Referesh Random String

function Captch() {
var x = document.getElementById("ran")
x.value = Math.floor((Math.random() * 10000)+1);
}

//js captcha validation

function validation()
{
if(document.form1.name.value=="")
{
document.getElementById("name").innerHTML="Enter your name!";
document.form1.name.focus();
return false;
}

if(document.form1.chk.value=="")
{
document.getElementById("error").innerHTML="Enter captcha!";
document.form1.chk.focus();
return false;
}

if(document.form1.ran.value!=document.form1.chk.value)
{
document.getElementById("error").innerHTML="captcha Not Matched!";
document.form1.chk.focus();
return false;
}

return true;
}

</script>