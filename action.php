<?php 
$user = "vaiouser";  
$password = "VaioIndia@1234"; 
$host = "127.0.0.1";  
$dbase = "vaio2";  
$table = "subscribe";  
 
$email= $_POST['email']; 
  
  
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
 
$query= "INSERT INTO $table  ". "VALUES ('$email')"; 
 
mysqli_query ($dbc, $query) 
or die ("Error querying database"); 


echo "<script>
alert('Thank you for Subscribe Us');
window.location.href='/';
</script>";


 
mysqli_close($dbc); 
 
?> 