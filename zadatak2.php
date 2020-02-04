<?php

include("postanski_uredi.php");

asort($postanski_uredi);

// print_r($postanski_uredi);

echo "<table>
        <tr>
            <th>Poštanski broj</th>
            <th>Mjesto</th>
        </tr>";

foreach ($postanski_uredi as $key => $value) {

    if ($key > 25000){
    echo "<tr>
            <td>" . $key . "</td>
            <td>" . $value ."</td>
          </tr>";
    }
}

echo "</table>";



?>