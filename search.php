<?php
include 'connect.php';

$query = "SELECT * FROM videogames WHERE title like '%" . $_POST["title"] ."%'";
if ($_POST["genre"] != '0') {
    $query .= " AND genre='" . $_POST["genre"] . "'";
}
if ($_POST["devid"] != 0) {
    $query .= " AND pubid=" . $_POST["devid"];
}
if ($_POST["pubid"] != 0) {
    $query .= " AND devid=" . $_POST["pubid"];
}

$query .= " ORDER BY title";
?>
<html>
    <head>
        <title>Search Results</title>
    </head>
    <body>
        <h1>Search Results</h1>
        <?php
        
            printf ("%s <br />\n", $query);
            if ($stmt = $mysqli->prepare($query)) {
            
                /* execute statement */
                $stmt->execute();
                
                /* bind result variables */
                $stmt->bind_result($colid, $col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9);
                
                /* fetch values */
                if ($stmt->fetch()) {
                    printf ("%s (%s)<br />\n", $col1, $col2);
                    while ($stmt->fetch()) {
                        printf ("%s (%s)<br />\n", $col1, $col2);
                    }
                } else {
                    printf ("No Results <br />\n");
                }
            
                /* close statement */
                $stmt->close();
            }
        ?>
    </body>
</html>
<?php
/* close connection */
mysqli_close($mysqli);
?>