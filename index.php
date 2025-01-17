<?php
// print_r( $_REQUEST );

error_reporting( 0 );
$id = $_REQUEST[ 'id' ];
$name = $_REQUEST[ 'name' ];
$email = $_REQUEST[ 'email' ];
$password = $_REQUEST[ 'password' ];
$qualification = $_REQUEST[ 'qualification' ];
$address = $_REQUEST[ 'address' ];
$gender = $_REQUEST[ 'gender' ];
$language = $_REQUEST[ 'language' ];
$lang = explode( ',', $language );
// print_r( $lang );
?>

<!doctype html>
<html lang = 'en'>

<head>
<meta charset = 'utf-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1'>
<title>Bootstrap demo</title>
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel = 'stylesheet'
integrity = 'sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin = 'anonymous'>
</head>

<body>
<h2></h2>
<div class = 'container mt-5'>
<div class = 'row justify-content-center'>
<a href = 'view-data.php'><button type = 'submit' class = 'btn btn-primary'>View Data</button></a>

<h2>Add Data</h2>
<form action = 'add-data.php' method = 'POST' enctype = 'multipart/form-data' class = 'row g-3 border p-3'>
<div class = 'col-md-6'>
<label class = 'form-label'>Name</label>
<input type = 'text' name = 'name' class = 'form-control' value = "<?php echo $name; ?>" required>
</div>
<div class = 'col-md-6'>
<label class = 'form-label'>Email</label>
<input type = 'email' name = 'email' class = 'form-control' value = " <?php echo $email; ?>" required>
</div>
<div class = 'col-md-6'>
<label class = 'form-label'>Password</label>
<input type = 'password' name = 'pass' class = 'form-control' value = " <?php echo $password; ?>" required>
</div>
<div class = 'col-md-6'>
<label class = 'form-label'>Qualification</label>
<select name = 'qualification' class = 'form-control' required>
<option value = 'BCA' <?php if ( $qualification == 'BCA' ) {
    echo 'selected';
}
?>>BCA</option>
<option value = 'MCA' <?php if ( $qualification == 'MCA' ) {
    echo 'selected';
}
?>>MCA</option>
<option value = 'BE' <?php if ( $qualification == 'BE' ) {
    echo 'selected';
}
?>>BE</option>
</select>
</div>

<div class = 'col-md-6 mb-3'>
<label class = 'form-label'>Address</label>
<textarea class = 'form-control' name = 'address' rows = '3' value = " <?php echo $address; ?>" required
placeholder = 'Enter your address here'>
<?php echo $address;
?>
</textarea>
</div>

<div class = 'col-md-6 mb-3'>
<label class = 'form-label'>image</label>
<input type = 'file' name = 'image' class = 'form-control'>
</div>

<div class = 'col-md-6'>
<label class = 'form-label'>Gender</label>
<div class = 'form-check'>
<input class = 'form-check-input' type = 'radio' name = 'gender' id = 'male' value = 'male' <?php if ( $gender == 'male' ) {
    echo 'checked';
}
?> required>
<label class = 'form-check-label' for = 'male'>Male</label>
</div>
<div class = 'form-check'>
<input class = 'form-check-input' type = 'radio' name = 'gender' id = 'female' value = 'female' <?php if ( $gender == 'female' ) {
    echo 'checked';
}
?> required>
<label class = 'form-check-label' for = 'female'>Female</label>
</div>
</div>

<div class = 'col-md-6'>
<label class = 'form-label'>Select Languages</label>
<div class = 'form-check form-check-inline'>
<input class = 'form-check-input' type = 'checkbox' required value = 'PHP' name = 'language[]' <?php
if ( in_array( 'PHP', $lang ) ) {

    echo 'checked';

}

?>>

<label class = 'form-check-label'>
PHP
</label>
</div>
<div class = 'form-check form-check-inline'>
<input class = 'form-check-input' type = 'checkbox' value = 'Java' name = 'language[ ]' <?php
if ( in_array( 'Java', $lang ) ) {

    echo 'checked';
}
?>>
<label class = 'form-check-label' for = 'java'>
Java
</label>
</div>
<div class = 'form-check form-check-inline'>
<input class = 'form-check-input' type = 'checkbox' value = 'Node.Js' name = 'language[ ]' <?php
if ( in_array( 'Node.Js', $lang ) ) {

    echo 'checked';

}
?>>
<label class = 'form-check-label' for = 'nodejs'>
Node.Js
</label>
</div>
</div>
<?php if ( !empty( $id ) ) {
    ?>
    <div class = 'col-12'>
    <input type = 'hidden' name = 'id' value = "<?php echo $id; ?>">

    <button name = 'update' type = 'submit' class = 'btn btn-success'>Update</button>
    </div>
    <?php } else {
        ?>
        <div class = 'col-12'>
        <button name = 'submit' type = 'submit' class = 'btn btn-success'>Submit</button>
        </div>
        <?php  }
        ?>

        <!-- <div class = 'col-12'>
        <button type = 'submit' class = 'btn btn-success'>Submit</button>
        </div> -->
        </form>
        </div>
        </div>

        <script src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'
        integrity = 'sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin = 'anonymous'>
        </script>
        </body>

        </html>