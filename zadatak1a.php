<?php
$start = isset($_GET["start"]) ? $_GET["start"] : "Početni broj nije zadan";
$stop = isset($_GET["stop"]) ? $_GET["stop"] : "Završni broj nije zadan";

if($start == "Početni broj nije zadan" || $stop == "Završni broj nije zadan"){
    echo "Nisu uneseni svi potrebni podaci";
}else{

    for ($i=1; $i < $_GET["stop"] ; $i++) { 

        if($i % 7 == 0){
           $niz[] = $i; 
            }
        }
}

rsort($niz);

foreach ($niz as $key => $value) {
    if (substr($value, -1) == 6){
        echo $value . "<br>";
    }
}


?>