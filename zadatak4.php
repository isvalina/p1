<?php



$slike = 
        array(     "slika_1.jpg",
                    "slika_2.jpg",
                    "slika_3.jpg",
                    "slika_4.jpg",
                    "slika_5.jpg",
                    "slika_6.jpg",
                    "slika_7.jpg",
                    "slika_8.jpg",
                    "slika_9.jpg",
                    "slika_10.jpg",
                    "slika_11.jpg",
                    "slika_12.jpg",
                    "slika_13.jpg",
                    "slika_14.jpg",
                    "slika_15.jpg",
                    "slika_16.jpg",
                    "slika_16.jpg",
                    "slika_17.jpg",
                    "slika_18.jpg",
                    "slika_19.jpg",
                    "slika_20.jpg",
                    "slika_21.jpg",
                    "slika_22.jpg",
                    "slika_23.jpg",
                    "slika_24.jpg",
                    "slika_25.jpg",
                    "slika_26.jpg",
                    "slika_27.jpg",
                    "slika_28.jpg",
                    "slika_29.jpg",
                    "slika_30.jpg",
                    "slika_31.jpg",
                    "slika_32.jpg",
                    "slika_33.jpg",
                    "slika_34.jpg",
                    "slika_35.jpg",
                    "slika_36.jpg",
        );

        $max = sizeof($slike)-1;
        $random = rand(0,$max);
        


echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 6; $row++) { 
		echo "<tr>";
		for ($col=1; $col <= 6; $col++) { 
		   $p = $col * $row;
          // echo "<td><img src=" . $slike[$random] . "/></td>";
          echo "<td><img src=slika_" . $random . ".jpg></td>";
          $random = rand(0,$max);
		   	}
	  	    echo "</tr>";
		}
        echo "</table>";
        

        



?>