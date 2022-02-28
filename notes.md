<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>




/* Style the button */
button {
  padding: 20px;
  font-size: 20px;
}
</style>
</head>
<body>



<button onclick="openFullscreen();">Open Fullscreen</button>
<button onclick="closeFullscreen();">Close Fullscreen</button>

<script>
var elem = document.documentElement;
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}

function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
  }
}
</script>



</body>
</html>




<?php 
                    

switch( $_GET['lnk']){ 
	case "one": 
	echo "one";
    break; 
    case "two": 
    echo "two";
    break; 
    default: 
    echo "Design default";
    } 
?>




livesearch box - > includeslivesearch.php -> links.xml



 TEMPLATE    

<?php
$title = "Home";
$description = "Basic flex stuffs and all";
$logo = "black";
$home = "active";
include $_SERVER['DOCUMENT_ROOT'] . "/includes/head.php";
?>  


    <main id="main">

    </main>

            
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/includes/foot.php";
?>




XML READ

<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/database/testimonials.xml";
$xmlfile = file_get_contents($path);
$new = simplexml_load_string($xmlfile);
$con = json_encode($new);
$json = json_decode($con, true);
//print_r($con);  
foreach($json as $elem)  
{
    for ($x = 0; $x < count($elem); $x++) 
    {
        echo $elem[$x]['title'] . "&nbsp;&nbsp;&nbsp;&nbsp;". $elem[$x]['author'] ;
        echo "<br>";
    }
}
  
?>
<br>
<br><br><br><br><br>

<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/database/discography.xml";
$xmlfile = file_get_contents($path);
$new = simplexml_load_string($xmlfile);
$con = json_encode($new);
$json = json_decode($con, true);
 
foreach($json as $elem)  
{
    echo "<br>";
    for ($x = 0; $x < count($elem[0]['menu']); $x++) 
    {
        echo $elem[0]['menu'][$x]['title']  ;
        echo "<br>";
    }
}
foreach($json as $elem)  
{

    echo "<br>";
    for ($x = 0; $x  < count($elem[1]['menu']); $x++) 
    {
        echo $elem[1]['menu'][$x]['title']  ;
        echo "<br>";
    }
    echo "<br>";
    for ($x = 0; $x  < count($elem[2]['menu']); $x++) 
    {
        echo $elem[2]['menu'][$x]['title']  ;
        echo "<br>";
    }
}
  
?>


=====================================================================
=====                       LIVE SEARCH                        ======
=====================================================================


<html>
<head>
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","/includes/livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>

</body>
</html>

=====================================================================
=====                                                          ======
=====================================================================