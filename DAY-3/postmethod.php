<html>
<head>
<title>POST method</title>
</head>
<body>
<h2>FORM</h2>
<h3>fill up the form</h3>
<form action="process.php" method="post" target="_blank">
<table border="0" >
<tr>
<td>Name:<input  type="text" name="txt1" required /> </td>
</tr><br>
<tr>
<td>Age: <input  type="number" name="txt2" min="5" max="100"  required/> </td>
</tr>
<tr>
<td>gender:<input type="text" name="txt3" required/> </td>
<tr>
<td>contact:<input type="number" name="txt4" max="10"  required/> </td>
<tr>
<td><input type="submit" name="submit" /> 
<input type="reset" name="reset" /></td></tr>
</table>
</form></body>
</html>