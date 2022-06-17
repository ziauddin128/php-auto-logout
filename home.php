<?php 
require "manage.php";
?>


<h2>Wellcome User</h2>
<a href="home1.php">Home1</a>
<a href="logout.php">Logout</a>


<div id="countdown"></div>

<script type="text/javascript">
 var timeleft = 10;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    document.getElementById("countdown").innerHTML = "Finished";
  } else {
    document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";
  }
  timeleft -= 1;
}, 1000);
</script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script> 

setInterval(function()
{
    timeSet();
},2000)

function timeSet()
{
    $.ajax({
    url : "manage.php",
    type:"POST",
    data : "type="+ "ajax",
    success: function(result)
    {
        if(result=="logout")
        {
            window.location.replace("logout.php");
        }
    }
})
}

</script>
