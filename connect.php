<?php
$mysqli = new mysqli('mysql.eecs.ku.edu', 'rhenders', 'platypus', 'rhenders');

/* comment */
/* rj comment */

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
