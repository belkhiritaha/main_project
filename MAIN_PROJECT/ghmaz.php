<?php

	require_once("session.php");
	require_once("class.user.php");


	$auth_user = new USER();
	
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
    
?>

<?php

ob_start();
include 'test.php';
ob_end_clean();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "roles";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM test1 WHERE id=1";

    // use exec() because no results are returned
    $conn->exec($sql);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;



 echo 'ghmaz';
 echo '<img src="imghmaz.png">';
?>
<html>
<head><title>Ghmaz</title></head>
</html>