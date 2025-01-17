<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="container">
    <table class="table table-light table-hover">
        <tr class="table-primary table-bordered">
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Qualification</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Language</th>
            <th>Image</th>
            <th colspan="2">Action</th>


        </tr>


        <?php
include 'conn.php';
$sql = 'SELECT * FROM crud';
$data = mysqli_query( $conn, $sql );
if ( mysqli_num_rows( $data )>0 ) {
    while ( $result = mysqli_fetch_assoc( $data ) ) {
        // echo'<pre>';
        // print_r( $result );

        ?>
        <tr class="">
            <td><?php echo $result['id'] ?></td>
            <td><?php echo $result['name'] ?></td>
            <td><?php echo $result['email'] ?></td>
            <td><?php echo $result['password'] ?></td>
            <td><?php echo $result['qualification'] ?></td>
            <td><?php echo $result['address'] ?></td>
            <td><?php echo $result['gender'] ?></td>
            <td><?php echo $result['language'] ?></td>
            <td><img src="<?php echo $result['image'] ?>" height="100" width="100"></td>
            <td>
                <a href="
                    index.php?id=<?php echo $result['id']; ?>&name=<?php echo $result['name']; ?>&email=<?php echo $result['email']; ?>&password=<?php echo $result['password']; ?>&qualification=<?php echo $result['qualification']; ?>&address=<?php echo $result['address']; ?>&gender=<?php echo $result['gender']; ?>&language=<?php echo $result['language']; ?>"
                    class="btn btn-success">
                    Update
                </a>
            </td>

            <td><a href="delete-data.php?id=<?php echo $result['id']; ?>"
                    onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger">Delete</a></td>

        </tr>


        <?php

    }
} else {

}

?>


    </table>
</div>