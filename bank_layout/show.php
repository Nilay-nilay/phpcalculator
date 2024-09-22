<html>
<head>
<title>show php</title>
</head>
<body bgcolor="#ccff33">
<table border="1" height="200" width="300" align="center">
<tr><th>Name</th><th>Address</th><th>Password</th></tr>
<tr align="center">
<td><?php echo $_POST['name']; ?></td>
<td><?php echo $_POST['address']; ?></td>
<td><?php echo $_POST['upass']; ?></td>
</tr>
</table>
</body>
</html>