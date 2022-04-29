
           <div style="width:500px;">  
                                
                <form method="post"onsubmit="validateform()">
                    
                     <fieldset>
                         <legend>REGISTRATION</legend>
                         <br> 
                         <fieldset>
                              <legend>Customer Name</legend> 
                              <input type="text" id="name" name="name" onkeyup="checkName()" onblur="checkName()"/><p style="color: red; " id="nameErr"></p> 
                         </fieldset>
                         <hr>
                          <fieldset>
                               <legend>E-mail</legend>
                               <input type="text" id="e-ml" name = "email" onkeyup="checkEmail()" onblur="checkEmail()" /><p style="color: red; " id="emailErr"></p> 
                          </fieldset>
                          <hr>
                         <fieldset>
                              <legend>User Name</legend>
                              <input type="text" id="u-name" name = "username"onkeyup="checkUserName()" onblur="checkUserName()"><p style="color: red; " id="unameErr"></p>
                         </fieldset>
                         <hr>
                         <fieldset>
                              <legend>Password</legend>
                              <input type="password" id="password" name = "pass"onkeyup="checkPass()" onblur="checkPass()" /><p style="color: red; " id="passErr"></p>
                         </fieldset>
                         <hr>
                         <fieldset>
                              <legend>Confirm Password</legend>
                              <input type="password" id="cpassword" name = "c-pass" onkeyup="checkCPass()" onblur="checkCPass()" /><p style="color: red; " id="cpassErr"></p>
                         </fieldset>
                         <hr>

                         <fieldset>
                         <legend>Gender</legend> 
                          <input type="radio" id="male" name="gender" value="male">
                          <label for="male">Male</label>                     
                          <input type="radio" id="female" name="gender" value="female">
                          <label for="female">Female</label>
                          <input type="radio" id="other" name="gender" value="other">
                          <label for="other">Other</label><br><br>
                         </fieldset>
                         <hr> 
                         <legend>Date of Birth:</legend>
                         <input type="date" name="day"><br><br>
                       
                          </fieldset>
                          <br>
                          <input type="submit" name="submit" value="Submit"  />
                          <input type="reset" name="reset" value="Reset"  /><br />                      
                         
                           
                          </fieldset>
                          
                     
                </form>  
               
           </div>  
           <br>  
<script>  
          function validateform(){  
           
            
          if (name==null || name==""){  
            alert("Name can't be blank");  
            return false;  
          }else if(password.length<6){  
            alert("Password must be at least 6 characters long.");  
            return false;  
          }else if (name==null || name==""){  
            alert("Username can't be blank");  
            return false;  
          }

          }

          function checkName() {
               if (document.getElementById("name").value === "") {
                    document.getElementById("nameErr").innerHTML = "Name can't be blank";
                    document.getElementById("name").style.borderColor = "red";
               }else if (document.getElementById("name").value.length > 18) {
                    document.getElementById("nameErr").innerHTML = "Name must be within 18 characters";
                    document.getElementById("name").style.outlineColor = "red";
               }else if (document.getElementById("name").value.length <= 2) {
                    document.getElementById("nameErr").innerHTML = "Name must have at least 2 characters";
                    document.getElementById("name").style.outlineColor = "red";
               }else{
                    document.getElementById("nameErr").innerHTML = "";
                    document.getElementById("name").style.borderColor = "black";

               }
               
        }
        function checkUserName() {
               if (document.getElementById("u-name").value === "") {
                    document.getElementById("unameErr").innerHTML = "Username can't be blank";
                    document.getElementById("u-name").style.borderColor = "red";
               }else if (document.getElementById("u-name").value.length > 18) {
                    document.getElementById("unameErr").innerHTML = "Username must be within 18 characters";
                    document.getElementById("u-name").style.outlineColor = "red";
               }else if (document.getElementById("u-name").value.length <= 2) {
                    document.getElementById("unameErr").innerHTML = "Username must have at least 2 characters";
                    document.getElementById("u-name").style.outlineColor = "red";
               }else{
                    document.getElementById("unameErr").innerHTML = "";
                    document.getElementById("name").style.borderColor = "black";

               }
               
        }
        function checkEmail()
          {
               var email= document.getElementById("e-ml");

               if(email.value.trim()=="")
               {
                    document.getElementById("emailErr").innerHTML= "*Email is required";
               return false;
               }
               else {
                    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
               if(!email.value.match(mailformat))
               {
                     document.getElementById("emailErr").innerHTML= "*Invalid email format";
                return false;
                }
                else {
                document.getElementById("emailErr").innerHTML= "";
               }
               }

          }

       
        function checkPass(){
          if (document.getElementById("password").value == "") {
                    document.getElementById("passErr").innerHTML = "Password can't be blank";
                    document.getElementById("password").style.borderColor = "red";
          }else if (document.getElementById("password").value.length < 8) {
                    document.getElementById("passErr").innerHTML = "Password must be at least 8 charecters";
                    document.getElementById("password").style.borderColor = "red";
          }
        }
        function checkCPass(){
          if (document.getElementById("cpassword").value == "") {
                    document.getElementById("cpassErr").innerHTML = "Confirm password can't be blank";
                    document.getElementById("cpassword").style.borderColor = "red";
          }else if (document.getElementById("cpassword").value= password) {
                    document.getElementById("cpassErr").innerHTML = "Confirm Password must be matched with password";
                    document.getElementById("cpassword").style.borderColor = "red";
          }
        }
</script>