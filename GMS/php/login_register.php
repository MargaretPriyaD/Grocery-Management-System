<?php

require('connection.php');

if(isset($_POST['register']))
{
    $user_exist_query="SELECT * FROM `registered_users`WHERE`username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result=mysqli_query($con,$user_exist_query);

    if($result)
    {
      if(mysqli_num_rows($result)>0)#if username or email is already registered
      {
        
        $result_fetch=mysqli_fetch_assoc($result);
        if($result_fetch['username']==$_POST['username'])
        {
            #error for username already registered
        echo"
        <script>
           alert('$result_fetch[username]-Username already taken');
           window.location.href='index.php';
        </script>  
        ";

        }
        else{
            #error for email already registered
            echo"
            <script>
            alert('$result_fetch[email]-E-mail already registered');
            window.location.href='index.php';
            </script>  
            ";  
        }
      }
      else #if no one has taken username and email before
      {
          $query="INSERT INTO `registered_users`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[password]')";
          if(mysqli_query($con,$query))
          {
            #if data insertion successfull
            echo"
              <script>
                 alert('Registration Successful');
                 window.location.href='index.php';
              </script>  
        ";

          }
          else
          {
            #if data cannot be inserted
            echo"
             <script>
                alert('Cannot Run Query');
                 window.location.href='index.php';
             </script>  
        ";

          }
      
        }
    }
    else
    {
        echo"
        <script>
        alert('Cannot Run Query');
        window.location.href='index.php';
        </script>  
        ";
    }
}

?>