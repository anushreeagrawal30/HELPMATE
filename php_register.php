<?php
// Define variables and initialize with empty values
$email = $password = $confirm_password=$Name = "";
$email_err = $password_err = $confirm_password_err =$Name_err= "";
$showAlert = false; 
$showError = false; 
$exists=false; 

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Validate email
    if(empty(($_POST["email"])))
    {
        $email_err = "Please enter a email.";
    }
        else
    {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($conection_db, $sql))
        {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
           $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
            {
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $email_err = "This email is already taken.";
                }
                    else
                {
                    $email = trim($_POST["email"]);
                }
            }
                else
            {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    //validation name
    if(empty(($_POST["Name"])))
    {
        $Name_err = "Please enter a Name.";
    }
        else
    {
        $Name = $_POST["Name"];
    }
 
    
    // Validate password
    if(empty(trim($_POST["password"])))
    {
        $password_err = "Please enter a password.";     
        }
            elseif
            (strlen(trim($_POST["password"])) < 6)
        {
        $password_err = "Password must have atleast 6 characters.";
    }
        else
    {
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"])))
    {
        $confirm_password_err = "Please confirm password.";     
    }
        else
    {
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password))
        {
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($email_err) && empty($password_err) && empty($confirm_password_err))
    {
       
			
			$sql = "INSERT INTO `users` (`Name`,`email`,`password`) VALUES ('$Name','$email','$password')"; 
	
			$result = mysqli_query($conection_db, $sql); 
        
	
			if ($result) { 
                echo'alert("You have registered successfully ")';
                header("location: login.php");
			} 
		 
    }
    // Close connection
    mysqli_close($conection_db);
}