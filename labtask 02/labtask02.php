<!DOCTYPE html>
<head>
    <style type="text/css">
		.red{
			color: red;
		}
	</style>
</head>
<body>

    <?php
        
        $name = $email = $dateOfBirth = $gender = $degree = $bloodGroup = "";
        $nameErr = $emailErr = $dateOfBirthErr = $genderErr = $degreeErr = $bloodGroupErr = "";
        
       if ($_SERVER["REQUEST_METHOD"] == "POST") 
       {
            if (empty($_POST["name"])) 
            {
                $nameErr = "Name is required";
            } 
            else 
            {
                $name = $_POST["name"];
                   
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
                    {
                        $nameErr = "Only letters and white space allowed";
                    }
            }
        }
        

        if (empty($_POST["email"])) 
        {
            $emailErr = "Email is required";
        } 
        else 
        {
            $email =($_POST["email"]);

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {
                    $emailErr = "Invalid email format";
                }
        }


        if (empty($_POST["dateOfBirth"])) 
        {
            $dateOfBirthErr = "Date of birth is required";
        } 
        else 
        {
            $dateOfBirth =($_POST["dateOfBirth"]);
        }


        if (empty($_POST["gender"])) 
        {
            $genderErr = "Gender is required";
        } 
        else 
        {
            $gender =($_POST["gender"]);
        }


        if (empty($_POST["degree"])) 
        {
            $degreeErr = "Degree is required";
        } 
        else 
        {
            $degree = ($_POST["degree"]);
             
        }


        if (empty($_POST["bloodGroup"])) 
        {
            $bloodGroupErr = "Blood group is required";
        } 
        else 
        {
            $bloodGroup =($_POST["bloodGroup"]);
            
        }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <br><input type="text" name="name" value="<?php echo $name;?>"><span class="red">*<?php echo $nameErr ?></span> 
    <br>
    <br>
    E-mail: <br> <input type="text" name="email" value="<?php echo $email;?>"><span class="red">*<?php echo $emailErr ?></span> 
    <br>
    <br>
    
    Date of birth:<br> <input type="Date" name="dateOfBirth" min="1953-01-01" max = "1998-12-31"value="<?php echo $dateOfBirth;?>"><span class="red">*<?php echo $dateOfBirthErr ?></span> 
    <br>
    <br>
    Gender: <br>
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="female") echo "checked";?>
        value="female">Female
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="male") echo "checked";?>
        value="male">Male
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="other") echo "checked";?>
        value="other">Other<span class="red">*<?php echo $genderErr ?></span>
        <br><br>
    
    Degree: <br>
        <input type="radio" name="degree"
        <?php if (isset($degree) && $degree=="SSC") echo "checked";?>
        value="SSC">SSC
        <input type="radio" name="degree"
        <?php if (isset($degree) && $degree=="HSC") echo "checked";?>
        value="HSC">HSC
        <input type="radio" name="degree"
        <?php if (isset($degree) && $degree=="BSc") echo "checked";?>
        value="BSc">BSc
        <input type="radio" name="degree"
        <?php if (isset($degree) && $degree=="MSc") echo "checked";?>
        value="MSc">MSc
        <span class="red">*<?php echo $degreeErr ?></span>
        <br><br>
    
    Blood group: <br>
    <select name="bloodGroup">

    	<option value="" disabled selected></option>
        <option 
            <?php if (isset($bloodGroup) && $bloodGroup=="A+") {echo 'selected="selected"';}?> 
            value="A+">A+
        </option>

        <option 
            <?php if (isset($bloodGroup) && $bloodGroup=="A-") {echo 'selected="selected"';}?> 
            value="A-">A-
        </option>

        <option 
            <?php if (isset($bloodGroup) && $bloodGroup=="B+") {echo 'selected="selected"';}?> 
            value="B+">B+
        </option>

        <option 
            <?php if (isset($bloodGroup) && $bloodGroup=="B-") {echo 'selected="selected"';}?> 
            value="B-">B-
        </option>

        <option 
            <?php if (isset($bloodGroup) && $bloodGroup=="O+") {echo 'selected="selected"';}?> 
            value="O+">O+
        </option>

        <option 
            <?php if (isset($bloodGroup) && $bloodGroup=="O-") {echo 'selected="selected"';}?> 
            value="O-">O-
        </option> 

        <option 
            <?php if (isset($bloodGroup) && $bloodGroup=="AB+") {echo 'selected="selected"';}?> 
            value="AB+">AB+
        </option>

        <option 
            <?php if (isset($bloodGroup) && $bloodGroup=="AB-") {echo 'selected="selected"';}?> 
            value="AB-">AB-
        </option>

    </select><span class="red">* <?php echo $bloodGroupErr;?></span> <br> <br>

    <input type="submit" name=""><br>
</form>
</body>
</html>