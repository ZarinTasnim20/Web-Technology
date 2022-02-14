<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <style type="text/css">
        .red{
            color: red;
        }
        
    </style>
</head>
<body>
    <?php

    $nameErr = $passErr = "";
    $name = $pass = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      if (empty($_POST["name"])) 
      {
        $nameErr = "Name is required";
      } 
      else 
      {
        $name = $_POST["name"];

        if (!preg_match("/^[a-zA-Z0-9.-_]*$/",$name)) 
        {
          $nameErr = "User Name must be contain alpha numeric characters, period, dash or underscore only";
        }
        else if (strlen($name)<=2) 
        {
          $nameErr = "User Name must contain at least two characters";
        }

        
      }
    }     
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (empty($_POST["pass"])) 
        {
        $passErr = "Password is required";
        } 
       else
       {
        if(strlen($_POST['pass']) < 8)
        {
        $passErr = "Password must be at least 8 characters ";
        }
        else if(!(str_contains($_POST['pass'], '@') === true or str_contains($_POST['pass'], '$') === true or str_contains($_POST['pass'], '%') === true or str_contains($_POST['pass'], '#') === true))
        {
            $passErr = "Password must be contain at least one of the special characters ";
            
        }
       }
    }

  ?>
 <form method="post" action="<?php echo($_SERVER["PHP_SELF"]);?>">
    <fieldset >
      <legend>LOGIN</legend>
      <label>User Name: </label>
      <input type="text" name="name"><span class="red"> *<?php echo $nameErr ?></span>
      <br>
      <label>Password: </label>
      <input type="text" name="pass" ><span class="red"> *<?php echo $passErr ?></span>
      <hr>
      <input type="checkbox" name="remember me" value="Remember Me">
      <label for="remember me"> Remember Me</label><br>
      <br>
      <input type="submit">
      <a href="">Forget Password?</a>
     </fieldset>
 </form>
</body>
</html>