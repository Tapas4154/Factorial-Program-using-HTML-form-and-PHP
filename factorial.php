<html>
<head>
<title>Factorial of a number</title>
</head>
<body>
<font size=14>FACTORIAL OF A NUMBER</font>
<br/>
<br/>
<form action="" method="post">
    <font size=10>
ENTER A NUMBER:<input type="text" name="n1"></font>
<br><br>
<input type="submit" value="FACTORIAL">
<input type="reset">
<?php
if($_POST)
{
$n=$_POST["n1"];
$fact=1;
echo "<br/>
<br/>";
echo "Factorial of $n is: ";
while($n>0)
{
$fact=$fact*$n;
$n--;
}
echo "$fact";
}
?>
</form> 
</body>
</html>
