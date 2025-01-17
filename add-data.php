<?php
error_reporting( 0 );
include 'conn.php';
if ( isset( $_POST[ 'submit' ] ) ) {

    $id = $_POST[ 'id' ];
    $name = $_POST[ 'name' ];
    $email = $_POST[ 'email' ];
    $pass = $_POST[ 'pass' ];
    $qualification = $_POST[ 'qualification' ];
    $address = $_POST[ 'address' ];
    $gender = $_POST[ 'gender' ];
    $language = $_POST[ 'language' ];

    $filename = $_FILES[ 'image' ][ 'name' ];
    $tempname = $_FILES[ 'image' ][ 'tmp_name' ];
    $destination = 'upload/'.$filename;

    move_uploaded_file( $tempname, $destination );

    $lang = implode( ',', $_POST[ 'language' ] ?? [] );
    // $lang = implode( ',', $language );

    // $sql = "INSERT INTO crud ('id',	'name','email','password','	qualification','address','gender','	language' VALUES('$name','$email','$pass','$qualification','$address','$gender','$language')";

    $sql = "INSERT INTO crud (name, email, password, qualification, address, gender, language,image) 
        VALUES ('$name', '$email', '$pass', '$qualification', '$address', '$gender', '$lang','$destination')";

    $check = mysqli_query( $conn, $sql );

    if ( $check ) {
        ?>
<script type='text/javascript'>
alert('Data inserted Successfully!');
window.location = 'index.php';
</script>
<?php

    }
}

//update the data

if ( isset( $_POST[ 'update' ] ) ) {

    $name = $_POST[ 'name' ];
    $email = $_POST[ 'email' ];
    $pass = $_POST[ 'pass' ];
    $qualification = $_POST[ 'qualification' ];
    $address = $_POST[ 'address' ];
    $gender = $_POST[ 'gender' ];
    $language = $_POST[ 'language' ];

    $lang = implode( ',', $_POST[ 'language' ] ?? [] );
    // $lang = implode( ',', $language );

    // $sql = "INSERT INTO crud ('id',	'name','email','password','	qualification','address','gender','	language' VALUES('$name','$email','$pass','$qualification','$address','$gender','$language')";

    $sql = "UPDATE crud SET name='$name', email='$email', password='$password', qualification='$qualification', address='$address', gender='$gender', language='$language' WHERE id = '$id'";

    $check = mysqli_query( $conn, $sql );

    if ( $check ) {
        ?>
<script type='text/javascript'>
alert('Data updated Successfully!');
window.location = 'view-data.php';
</script>
<?php

    } else {
        ?>
<script type='text/javascript'>
alert('Data not updated Successfully!');
window.location = 'index.php';
</script>
<?php
    }
}

?>