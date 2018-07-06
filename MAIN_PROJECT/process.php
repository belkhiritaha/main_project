
<form method="POST" action=''>
<input type="submit" name="button1"  value="Get a card">
</form>
  <?php
       if (isset($_POST['button1']))
       {

$number = $_GET["number"];



if ($number == "1") {
  
echo 'Must have atleast 3 players!';
    
    
} 
elseif ($number == "2") {

echo 'Must have atleast 3 players!';
    
}
 elseif ($number == "3") {

     
     
    $input = array("Police Officer", "Ghmaz", "Citizen",);

$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
    
    
}
 elseif ($number == "4") {
   
     
     
    $input = array("Police Officer", "Ghmaz", "Citizen", "Citizen");

$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
    
    
}
 elseif ($number == "5") {
 
     
     
    $input = array("Police Officer", "Ghmaz", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen");

$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
    
    
}
 elseif ($number == "6") {

     
     
    $input = array("Police Officer", "Ghmaz", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen");

$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
    
    
}
 elseif ($number == "7") {

     
     
    $input = array("Police Officer", "Ghmaz", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen");

$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
    
    
}
 elseif ($number == "8") {
 
     
     
    $input = array("Police Officer", "Ghmaz", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen");

$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
    
    
}
 elseif ($number == "9") {
     
     
     
    $input = array("Police Officer", "Ghmaz", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen");

$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
    
    
}
 elseif ($number == "10") {
     
     
     
    $input = array("Police Officer", "Ghmaz", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen");

$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
    
    
}
 elseif ($number == "11") {
     
     
     
    $input = array("Police Officer", "Ghmaz", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen");

$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
    
    
}



 elseif ($number == "12") {
  $input = array("Police Officer", "Ghmaz", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen");

$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
    
    
}



 elseif ($number == "13") {
     $input = array("Police Officer", "Ghmaz", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen", "Citizen");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
}


if ($input[$rand_keys[0]] == "Police Officer")
 echo '<img src="police.png">';
         }
?>