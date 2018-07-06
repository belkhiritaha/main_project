<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>jsTime</title>
</head>
<body>
    <style>
    a:link, a:visited {
    background-color: white;
    color: black;
    border: 2px solid green;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline;
}

a:hover, a:active {
    background-color: green;
    color: white;
}

        span {
            margin-left: 1px;
        }
        .spank {
            margin-left: 12px;
        }
        .timer {
            text-align: center;
            padding: 3px;
            border: 2px solid green;
            overflow: hidden;
            display:inline-table;
            margin-left: 500px;
        }
        
        .title {
            background-color: green;
            margin-top: 0px;
        }
        .reveal {
            display: none;
            margin-top: 0px;
        }
        
        .up {
            display: none;
        }
        
        
</style>
    <hr/>
    <div class="timer" id="timer">
        <div class="title"><p>Game timer</p></div>
<p class="spank">Time left: <span id="time">300</span> seconds.</p>
<p><a href="#" onclick="play()">Start timer</a> <a href="#" onclick="pause()">Pause</a></p>
        
    <div class="up" id="timeup">
        <br/>
        <p>TIME IS UP</p>
        </div> 
        <div class="reveal" id="myDIV">
         
         <a href="who.php">Reveal players</a>
    
    </div>
        
        
        
        
        
<script>
var time = 300,
timeElement = document.getElementById('time'),
timer = null;
var updateTimer = function() {
  timeElement.innerHTML = time--;
    
    
  if (time == 0) {
  	clearInterval(timer);
      var x = document.getElementById("myDIV");
        x.style.display = "block";
      
      
      var y= document.getElementById("timeup");
      y.style.display = "block";
      
  
    }
}
function play() {
	timer = setInterval(updateTimer, 1000);
	return false;
}
function pause() {
	clearInterval(timer);
	return false;
}
</script>
        </div>
    
</body>
</html>