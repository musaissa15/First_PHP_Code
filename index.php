<?php
// connect to the database
$conn = mysqli_connect("localhost", "musaissa15", "sql123", "phase2");
    ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Document</title>
    </head>

    <body>


        <?php 
        // sql query
    $sql = "SELECT * FROM food;";
    $results = mysqli_query($conn, $sql);
    $result_check = mysqli_num_rows($results);
    if ($result_check > 0) {
        while($row = mysqli_fetch_assoc($results)){
    

         echo $row['food_id'] . " " . $row['food_name'] . " " . $row['food_type'] .  "<br>";
       


        }
    }
    ?>

        <form method="POST" action="pdf.php" target="_blank">
            <input type="submit" name="pdf_creater" value="PDF">
        </form>

    </body>

</html>
