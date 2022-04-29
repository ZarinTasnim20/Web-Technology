  
<div class="container-custom-form-login">  
 <form method="post" >
    <fieldset >
      <legend>LOGIN</legend>
      <br> 
      <label>User Name: </label>
      
      <input type="text" name="username" id="username"onkeyup="checkUsername()" onblur="checkUsername ()">
      <span style="color: red; " id="unameErr" >&nbsp;</span>
      <br>
      <label>Password: </label>
      <input type="text" name="pass" id="pass""onkeyup="checkPassword()" onblur="checkPassword()">
      <span style="color: red; " id="passErr">&nbsp;</span>
      <br>
      &nbsp;
      <hr>
      <input type="checkbox" id="me" name="rem-me[]" value="Remember Me">
      <label for="remember me"> Remember Me</label>
      &nbsp;
      <br>
      <br>


      <input type="submit" name="log" value="Log In">
      <a href="Forget Password.php">Forget Password?</a>
     </fieldset>
     <span><?php if(isset($_SESSION['authentication-error'])){
        echo $_SESSION['authentication-error']; 
        $_SESSION['authentication-error']= ""; } ?></span>
 </form>
</div>
<script>
 function validation()
  {
    var uname= document.getElementById("username");
    var pass= document.getElementById("pass");



    if(uname.value.trim()=="" )
    {
       document.getElementById("unameErr").innerHTML= "*Username is required";
       return false;
    }
    else{
      document.getElementById("unameErr").innerHTML= "";
    }

   if(pass.value.trim()=="" )
    {
       document.getElementById("passErr").innerHTML= "*Password is required";
       return false;
    }
    else{
      document.getElementById("passErr").innerHTML= "";
    }


      return true;

  }

  function checkUsername()
  {
    var uname= document.getElementById("username");
    if(uname.value.trim()=="" )
    {
       document.getElementById("unameErr").innerHTML= "*Username is required";
       return false;
    }
    else{
      document.getElementById("unameErr").innerHTML= "";
    }
  }
  

  function checkPassword()
  {
    if(pass.value.trim()=="" )
     {
        document.getElementById("passErr").innerHTML= "*Password is required";
        return false;
     }
     else{
       document.getElementById("passErr").innerHTML= "";
     }
  }
</script>
