<?php
$pdo = new PDO('mysql:host=localhost;dbname=roles', 'root', '');
 
//Our SQL statement. This will empty / truncate the table "videos"
$sql = "TRUNCATE TABLE `test1`";
 
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
    
        <br/><br/><br/><br/>
        <p>DO NOT CREATE A NEW LOBBY IF A PLAYER ALREADY CREATED ONE!!!!</p>
    
    
    
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

        file_put_contents("count_file.txt", "0"); 
        
        echo '
    <div class="lobby">
    <a href="home.php" class="button button5">Go to new lobby</a>
    </div>';
             
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "roles";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    
    $sql = "INSERT INTO test1 (ghmaz, police, citizen)
    VALUES ('1','0','0'),('0','1','0'),('0','0','1')";
    
    
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

