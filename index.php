
<?php 

$conn = mysqli_connect("localhost","root","","new_user");
$msg = '';
if(isset($_POST['submit']))
{
    $email = mysqli_real_escape_string($conn,$_POST['email']); 
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    

$sql = "SELECT * FROM `user` WHERE `email`='$email' && `password`='$password'";    
$result = mysqli_query($conn,$sql) or die('Hello');

if(mysqli_num_rows($result) > 0)
{
   session_start();
   $_SESSION['login']="yes";
   $_SESSION['login_time']=time();
   echo "<script>window.location.replace('home.php')</script>";
}
else 
{
   $msg = "Please Provide Valid Details";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


<div class="loginForm">
    <div class="form_div">
        <h2 class="text-center">Login Form</h2>
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        <p class="error_msg"><?php echo $msg  ?></p>
    </div>
</div>   


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>