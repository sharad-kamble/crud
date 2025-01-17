<?php
include 'conn.php';
$id = $_REQUEST[ 'id' ];
$sql = "DELETE FROM crud WHERE id='$id'";
$check = mysqli_query( $conn, $sql );

if ( $check ) {
    ?>
    <script type = 'text/javascript'>
    alert( 'Data deleted Successfully!' );
    window.location = 'view-data.php';
    </script>
    <?php

} else {
    ?>
    <script type = 'text/javascript'>
    alert( 'Data delete failed!' );
    window.location = 'view-data.php';
    </script>
    <?php
}

?>