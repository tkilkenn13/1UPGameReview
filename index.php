<?php include 'connect.php' ?>
<html>
    <head>
        <title>1UP Game Reviews</title>
    </head>
    <body>
        <form action="search.php" method="post">
            Title: <input type="text" name="title"><br />
            Genre:
                <select name="genre">
                    <?php
                        $query = "Select distinct genre from videogames";
                        if ($stmt = $mysqli->prepare($query)) {
                            /* execute statement */
                            $stmt->execute();
                            
                            /* bind result variables */
                            $stmt->bind_result($col1);
                            
                            /* fetch values */
                            if ($stmt->fetch()) {
                                printf ("<option value='0'>None</option>\n");
                                printf ("<option value='%1\$s'>%1\$s</option>\n", $col1);
                                while ($stmt->fetch()) {
                                    printf ("<option value='%1\$s'>%1\$s</option>\n", $col1);
                                }
                            } else {
                                printf ("<option value='0'>None</option>\n");
                            }
                        
                            /* close statement */
                            $stmt->close();
                        }
                    ?>
                </select><br />
            Developer:
                <select name="devid">
                    <?php
                        $query = "Select * from developers";
                        if ($stmt = $mysqli->prepare($query)) {
                            /* execute statement */
                            $stmt->execute();
                            
                            /* bind result variables */
                            $stmt->bind_result($col1, $col2);
                            
                            /* fetch values */
                            if ($stmt->fetch()) {
                                printf ("<option value='0'>None</option>\n");
                                printf ("<option value='%s'>%s</option>\n", $col1, $col2);
                                while ($stmt->fetch()) {
                                    printf ("<option value='%s'>%s</option>\n", $col1, $col2);
                                }
                            } else {
                                printf ("<option value='0'>None</option>\n");
                            }
                        
                            /* close statement */
                            $stmt->close();
                        }
                    ?>
                </select><br />
            Publisher:
                <select name="pubid">
                    <?php
                        $query = "Select * from publishers";
                        if ($stmt = $mysqli->prepare($query)) {
                            /* execute statement */
                            $stmt->execute();
                            
                            /* bind result variables */
                            $stmt->bind_result($col1, $col2);
                            
                            /* fetch values */
                            if ($stmt->fetch()) {
                                printf ("<option value='0'>None</option>\n");
                                printf ("<option value='%s'>%s</option>\n", $col1, $col2);
                                while ($stmt->fetch()) {
                                    printf ("<option value='%s'>%s</option>\n", $col1, $col2);
                                }
                            } else {
                                printf ("<option value='0'>None</option>\n");
                            }
                        
                            /* close statement */
                            $stmt->close();
                        }
                    ?>
                </select><br />
            <input type="submit">
        </form>
    </body>
</html>