<form method="POST" action=''>
<input type="submit" name="button1"  value="create new roles">
</form>

               
        
        
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
    
    
    
    $sql = "INSERT INTO test1 (ghmaz, police, citizen)
    VALUES ('1','0','0'),('0','1','0'),('0','0','1')";
    
    
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
 }
?>

