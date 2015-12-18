<?php
session_start();
?>
<!DOCTYPE html> 
<html>
  <head> 
    <meta charset="UTF-8"/> 
    <title>calculator</title>
  </head>
  <body>
    <form action="222.php" method="post">
      number 1 <input type="text" value="" name="num1"><br />
                <select name="oper">
                  <option value="+">+</option>
                  <option value="-">-</option>
                  <option value="*">*</option>
                  <option value="/">/</option>
                  </select><br />
      number 2 <input type="text" value="" name="num2"><br />
              <input type="submit" value="计算"><br /> 
    </form> 
  </body> 
</html> 