<?php
$pdo = new PDO('mysql:host=localhost;dbname=roles', 'root', '');
 
//Our SQL statement. This will empty / truncate the table "videos"
$sql = "TRUNCATE TABLE `myguests`";
 
//Prepare the SQL query.
$statement = $pdo->prepare($sql);
 
//Execute the statement.
$statement->execute();
?>
    
    <p>-------------------------------------------------------------------------------------------------------------</p>
    <div class="wrapper"> 
        
    <div class="new">
<form method="POST" action=''>
<input type="submit" name="button1"  value="Create new game" class="button button5">
</form>
        </div>
    
    
    </div>

       <style>
           
           .wrapper {
               margin-left: 140px;
           }
           
           
           p {
               text-align: center;
               
           }
           
           .new{
              margin-left: 400px; 
              margin-right: 20px;
           }
           
           
           .lobby {
               margin-right: 200px;
               margin-left: 200px;
           }
           
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    float: left;
}

.button5 {border-radius: 50%;}   

             
</style>        
        
        
   <?php     
        
         if (isset($_POST['button1']))
       {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "roles";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    
    $sql = "INSERT INTO myguests (ghmaz, police, citizen,lobby)
    VALUES ('1','0','0','2'),('0','1','0','2'),('0','0','1','2')";
    
    
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "game created sucessfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
 }
?>







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
  $sql = "SELECT * FROM myguests ORDER BY RAND() LIMIT 1 ";
  $result = $conn->query($sql);

  // If the SQL query is succesfully performed ($result not false)
  if($result !== false) {

    // Parse the result set
    foreach($result as $row) {
      echo $row['id']. ' - '. $row['ghmaz']. ' - '. $row['police']. ' - '. $row['citizen']. '<br />';
    }
  }
    

  $conn = null;        // Disconnect
}
catch(PDOException $e) {
  echo $e->getMessage();
}
        

        
///////////////////////////////////////////////////////////////////////////////////////////////////        
        
        if ($row['id'] == "1") {
            
            if ()
            ob_start();
  include 'ghmaz.php';
  ob_end_clean();
             echo '<a class="button button5 wrap" href="ghmaz.php">Get your card</a>';
        }      

 /////////////////////////////////////////////////////////////////////////////////////////////////////
             
        if ($row['id'] == "2") {
            ob_start();
include 'police.php';
ob_end_clean();
             echo '<a class="button button5 wrap" href="police.php">Get your card</a>';
        }   
        
 /////////////////////////////////////////////////////////////////////////////////////////////////////
             
        if ($row['id'] == "3") {
              echo '<a class="button button5 wrap" href="citizen.php">Get your card</a>';
        }            
             
              
        

        
        
             ?>
        