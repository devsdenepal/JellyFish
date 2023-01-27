
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="logo.jpeg">
    <title>JellyFish Recorder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="lib.js"></script>
  </head>
  <body>
   <div id="controls">
  	 <button id="recordButton"><img src="mcbut.gif" alt="recording mic" class="recorder"></button>
  	 <button id="pauseButton" disabled>Pause mic</button>
  	 <button id="stopButton" disabled>Stop</button>
    </div>
    <div id="formats"><div class="header"><div class="card"><div class="container">Jellyfish recorder</div></div></div></div>
  	<!-- <p><strong>Recordings:</strong></p> -->
  	<ol id="recordingsList"></ol>
    <form>
<select name="songs" onchange="showUser(this.value)" id="selection">
  <option value="">Songs</option>
  <option value="1">Raabta</option>
  <option value="2">Cradles</option>
  <option value="3">Aaarambh hai..</option>
  <option value="4">O saathi re..</option>
  <option value="5">Mujko barsaat bana lo...</option>
  <option value="6">Akhiyon ke jharokhon se..</option>
  </select>
</form>
<form>
  <select name="clip" onchange="addEffect(this.value)" id="clipe">
  <option value="">Effects</option>
<option value="1">SummerTime</option>
<option value="2">Lofi-Study</option>
<option value="3">Corporate BGM</option>

</select>
</form>
<br/>
<div id="res"></div>
    <!-- inserting these scripts at the end to be able to use all the elements in the DOM -->
    <!-- <script src="main.js"></script>
    <script src="sound_meter.js"></script> -->
    <script src="recorder.js"></script>
  	<script src="app.js"></script>
   
<script>
  
  var res = 
document.getElementById('res');

setInterval(function () {
res.style.color=="black";
}, 1000);
const value = document.getElementById("selection").value;
if(value==""){
  res.innerHTML = "<textarea placeholder='Compose your own..'>";
}
let effect=document.getElementById("clipe");
if(effect.value == 1){
console.log(license);
}
    </script>
  </body>
</html>