<?php
$start = isset($_GET["start"]) ? $_GET["start"] : "Početni broj nije zadan";
$stop = isset($_GET["stop"]) ? $_GET["stop"] : "Završni broj nije zadan";

if($start == "Početni broj nije zadan" || $stop == "Završni broj nije zadan"){
    echo "Nisu uneseni svi potrebni podaci";
}else{

    for ($i=1; $i < $_GET["stop"] ; $i++) { 
        
             $niz[] = $i;
    
        }
}

rsort($niz);

foreach ($niz as $key => $value) {
    if($value % 15 == 0){
        echo "<p style='color: green;'>" . $value . "</p>";
         }elseif($value % 5 == 0){
            echo "<p style='color: blue;'>" . $value . "</p>";
         }elseif($value % 3 == 0){
            echo "<p style='color: red;'>" . $value . "</p>";
         }else{
             echo $value . "<br>";
         }
}

// rsort($niz);

// foreach ($niz as $key => $value) {
//     if($value % 3 == 0){
//         echo "<p style='color: red;'>" . $value . "</p>";
//          }elseif($value % 5 == 0){
//             echo "<p style='color: blue;'>" . $value . "</p>";
//          }elseif($value % 5 == 0 && $value % 3 == 0){
//             echo "<p style='color: green;'>" . $value . "</p>";
//          }else{
//              echo $value;
//          }
// }

?>