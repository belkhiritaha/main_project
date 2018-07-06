<?php

	require_once("session.php");
	require_once("class.user.php");


	$auth_user = new USER();
	
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<html>
    <head><title>LGHMAZ</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="styletest.css" type="text/css">
    </head>
    <body>
    <h1>Lghmaz: the online game</h1>
        
    
        
        
        <div class="wrap">
               
        
        
        <?php
        
        
// Connection data (server_address, database, name, poassword)
$hostdb = 'localhost';
$namedb = 'roles';
$userdb = 'root';
$passdb = '';


try {
  // Connect and create the PDO object
  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
  $conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8

  // Define and perform the SQL SELECT query
  $sql = "SELECT * FROM test1 ORDER BY RAND() LIMIT 1 ";
  $result = $conn->query($sql);
    
  // If the SQL query is succesfully performed ($result not false)
  if($result !== false) {
      

    // Parse the result set
    foreach($result as $row) {
      echo $row['id']. ' - '. $row['ghmaz']. ' - '. $row['police']. ' - '. $row['citizen']. '<br />';
        
                
///////////////////////////////////////////////////////////////////////////////////////////////////        
        
        if ($row['id'] == "1") {
            ob_start();
  include 'ghmaz.php';
  ob_end_clean();
             echo '<a id="mybutton" class="button button5 wrap" href="ghmaz.php">Get your card</a>';
        }      

 /////////////////////////////////////////////////////////////////////////////////////////////////////
             
        if ($row['id'] == "2") {
            ob_start();
include 'police.php';
ob_end_clean();
             echo '<a id="mybutton" class="button button5 wrap" href="police.php">Get your card</a>';
        }   
        
 /////////////////////////////////////////////////////////////////////////////////////////////////////
             
        if ($row['id'] == "3") {
              echo '<a id="mybutton" class="button button5 wrap" href="citizen.php">Get your card</a>';
        }        
    }
         
}
  $conn = null;
  }
            // Disconnect

catch(PDOException $e) {    
  echo $e->getMessage();
}
        

    
             
              
        

        
        
             ?>
        
        

<script>
document.getElementById('mybutton').addEventListener('click', function(){
    var xmlhttp;
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("POST","file.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("doit=true");
});
</script>

<?php
$file = fopen("count_file.txt","r");

while(! feof($file))
  {
  echo 'there are ' .fgets($file). ' players in this lobby'. "<br />";
  }

fclose($file);
?> 
            
             

                  
            </div> 
        
            
        
        
      
        
    </body>










</html>