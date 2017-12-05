<!DOCTYPE HTML>
<html>
<head>
 <meta charset="UTF-8">
 <title>Калькулятор</title>
</head>
<style type="text/css">
table{
 width:60%; background:#ff6666; margin:0 auto; box-shadow:10px 10px 30px #ccc; border-bottom:20px solid #ff6666;
}
.result-box{
 width:60%; margin:0 auto; background: #ff6666; height:100px; margin-top:20px; padding:20px; color:white;box-shadow:10px 10px 30px #ccc; font-family:verdana;
}
td{
font-size:20px; padding:10px; font-family:verdana; color:#fff;
}
input[type=text]{
 padding:10px; width:100px; font-size:20px;
}
input[type=submit]{
 padding:10px;  font-size:16px; cursor:pointer;border:none; background:#4799eb; color:#333; width:300px; height:50px;
}
input[type=reset]{
 padding:10px;  font-size:16px;cursor:pointer; border:none;background:#4799eb; color:#333; height:50px;
}
input[type=submit]:hover{
 background:#eee; color:#444;
}
input[type=reset]:hover{
 background:#eee; color:#444;
}
h1{
 background:#ff6666; color:white; font-family:verdana; padding:20px;
}

</style>
<body>
  <form action="" method="post">
 <table>
 
 <center>
 <h1>Калькулятор</h1>
 <tr><td>Добавте первое значение</td><td><input type="text" name="first_value" id="" /></td></tr>
 <tr><td>Добавте первое значение</td><td><input type="text" name="second_value" id="" /></td></tr>
 <tr><td>Операторы</td> 
 <td>
 <select name="operator" id="">
  <option value="static">Выбрать оператор</option>
  <option value="+">Сложить</option>
  <option value="-">Отнять</option>
  <option value="*">Умножить</option>
  <option value="/">Разделить</option>
  </select></td></tr>
 
 <tr><td><input type="reset" value="Сбросить цыфры" /></td><td><input type="submit" name="submit" value="Давайте считать!!!" /></td></tr>
 <tr><td colspan="2">Автор : Лаврукхин Олег</td></tr>
 </center>
 </table>
 </form>
 
 <?php
 if(isset($_POST['submit'])){
  $first_value = $_POST['first_value'];
  $second_value = $_POST['second_value'];
  $operator = $_POST['operator'];
  
  
   
 
 ?>
 <div class="result-box">
 <h3>Ваш результат : <?php
switch($operator){ 
       case "+":
             echo $first_value + $second_value; 
       break;
       case "-":
             echo $first_value - $second_value; 
       break;
       case "*":
             echo $first_value * $second_value; 
       break;
             case "/":
             if($second_value == 0)
		     echo "Делить на ноль нельзя!!!";
			  else
			  echo $first_value / $second_value;
			 break;
   default:
   echo "Пожалуйста только цифры";
   break;
   
   
   
   
   
  }
  
  
 }
 ?></h3>
 </div>
</body>
</html>