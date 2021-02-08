<?php

    if(isset($_POST['x'])&&($_POST['y'])&&($_POST['cell_input'])&&($_POST['color'])) {

        $input = $_POST['cell_input'];
        $color = $_POST['color'];

        echo "Total number of squares: " . $_POST['x'] * $_POST['y'];
        echo "<table border='1'>";

        for($i = 0; $i < $_POST['x']; $i++){
            echo "<tr border='1'>";
            for($j = 0; $j < $_POST['y']; $j++){
                echo "<td border='1'> <span style= 'color:$color'> $input </td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }else{
        echo "Parameter Missing";
    }   

?>