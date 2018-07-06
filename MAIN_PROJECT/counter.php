<button id="mybutton">Click Me</button>

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

