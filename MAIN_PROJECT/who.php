<?php

require_once("session.php");
	require_once("class.user.php");


	$auth_user = new USER();
	
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);


$text = $userRow['user_name'];
$var_str = var_export($text, true);
$var = "<?php\n\n\$text = $var_str;\n\n?>";
file_put_contents('mst.txt', $var);







$file = fopen("mst.txt","r");


  echo '<p>lghmaz is : ' .$text. '.</p>' ; 

fclose($file);

            



?>