<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>title of the</title>
</head>
<body>

<form> 
<input type="text" name="num1" placeholder="number 1">
<input type="text" name="num2" placeholder="number 2">
<select name="operator"> 
 <option>+</option>
 <option>-</option>
 <option>*</option>
 <option>/</option>
</select><br><br>
<button  type="submit"  name="submit" value="submit">вычеслить<button>
</form> 
<br>
<p>Результат:<p>
<?php
     if (isset($_GET['submit'])) {
	     $result1 = $_GET['num1'];
	     $result2 = $_GET['num2'];
	     $operator = $_GET['operator'];
		 switch ($operator) {
			 case "+":
			      echo $result1 + $result2;
			 break;
			 case "-":
			      echo $result1 - $result2;
			 break;
			 case "*":
			      echo $result1 * $result2;
			 break;
			 case "/":
			  if($result2 == 0)
			      echo "Делить на ноль нельзя!!!";
			  else
			  echo $result1 / $result2;
			 break;
		 }
	 }
	 ?> 
</body>
</html>
</html>