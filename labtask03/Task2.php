<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<style type="text/css">
        .black{
        	color: black;
        }
        .red{
            color: red;
        }
        .green{
            color: green;
        }
    </style>
</head>
<body>
	<?php

    $currErr= $repassErr = "";
    $currPass = $Newpass = $Repass = "";

     if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      $currPass = $_POST['currpass'];
      $Newpass = $_POST['newpass'];
      $Repass = $_POST['repass'];

      if(empty($_POST ["currPass"]))
      {
        $currErr ="Current Password is Required";
      }
      else{
        $currPass = $_POST["currPass"];
      }

      if($currPass == $Newpass){
      	$currErr = " New Password should not be same as the Current Password";
      }elseif ($Newpass != $Repass) {
      	$repassErr = "New Password must match with the Retyped Password";
      }else{
      	
      }
    }     
    ?>

	<form method="post" action="<?php echo($_SERVER["PHP_SELF"]);?>">
    <fieldset >
      <legend>CHANGE PASSWORD</legend>
      <label>Current Password: </label>
      <input type="text" name="currpass"><span class="red"></span>
      <br>
      <label><span class="green">New Password:</span> </label>
      <input type="text" name="newpass"><span class="red"><?php echo $currErr ?></span>
      <br>
      <label><span class="red">Retype New Password: </span></label></td>
      <input type="text" name="repass"><span class="red"><?php echo $repassErr ?></span>
      <br>
        <hr>
      <input type="submit">
      <br>
    </fieldset>
</form>
</body>
</html>