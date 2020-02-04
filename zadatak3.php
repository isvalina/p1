<?php

$filmovi =array(
"Marvel" => array("Iron Man", "Thor", "Captain America"),
"DC" => array("Wonder Woman", "Shazam!", "Aquaman"),
);

// print_r($filmovi);

?>

<html>
<head>
</head>
<body>

 <form action="" method="post">

<select name="produkcija">
<option value="--">--</option>
<?php

foreach ($filmovi as $produkcija => $naziv_filma){
    echo "<option value='$produkcija'>$produkcija</option>";
 
}


?>

</select>
<input type="Submit" name="Submit" value="Prikaži">
<hr> 

<?php
if(isset($_POST["Submit"])){
    echo "<h3>" . $_POST["produkcija"] . "</h3>";
?>


<ol>
<?php

        foreach ($filmovi[$_POST["produkcija"]] as $produkcija => $naziv_filma){
            echo "<li>" . $naziv_filma . "</li><br>";
        }

}

?>
</ol>

</body>
</html>