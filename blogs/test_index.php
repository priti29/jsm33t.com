<?php
$path = $_SERVER['DOCUMENT_ROOT']."/database/blogs.xml";
$xmlfile = file_get_contents($path);
$new = simplexml_load_string($xmlfile);
$con = json_encode($new);
$json = json_decode($con, true);
 



foreach($json as $elem)  
{

   
    echo "<br>";
    for ($x = 0; $x  < count($elem[0]); $x++) 
    {
        switch ($elem[$x]['yy']) {
            case "2021":
              echo "jaja 2021 <br>";
              break;
            case "2020":
              echo "haha 2022<br>";
              break;
            default:
              echo "naah <br>";
          
    }
}
}


  








?>