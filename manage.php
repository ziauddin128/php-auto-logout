<?php 

session_start();
if(isset($_POST['type']) && $_POST['type']=="ajax")
{
    $now = time();
    if($now-$_SESSION['login_time'] > 10)
    {
        echo "logout";
    }  
}
else 
{
    if(isset($_SESSION['login_time']))
    {
        $now = time();
        if($now-$_SESSION['login_time'] > 10)
        {
            echo "<script>window.location.replace('logout.php')</script>";
        }
    }
    
    $_SESSION['login_time']=time();
    
}


?>