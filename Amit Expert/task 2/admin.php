


<?php session_start(); /* Starts the session */
        
        /* Check Login form submitted */        
        if(isset($_POST['Submit'])){
                /* Define username and associated password array */
                $logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');

                /* Check and assign submitted Username and Password to new variable */
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                
                /* Check Username and Password existence in defined array */            
                   if (isset($logins[$Username]) && $logins[$Username] == $Password && $logins[$Username]!="Admin"){
                        /* Success: Set session variables and redirect to Protected page  */
                        $_SESSION['UserData']['Username']=$logins[$Username];
                        header("location:index.php");
                        exit;
                } else if (isset($logins[$Username]) && $logins[$Username] == $Password && $logins[$Username]=="Admin"){
                        /* Success: Set session variables and redirect to Protected page  */
                        $_SESSION['UserData']['Username']=$logins[$Username];
                        header("location:admin.php");
                        exit;
                }
                
            else  {
                        /*Unsuccessful attempt: Set error message */
                        $msg="<span style='color:red'>Invalid Login Details</span>";
                }
        }
?>