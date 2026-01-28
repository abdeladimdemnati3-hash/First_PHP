<?php
$myName = "Abdeladim Demnati";
$myAge = "18";

if (isset($_POST["Fullname"])) { 
    $myName = $_POST['Fullname'];
    $myAge = $_POST['age'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mx-auto">
                <h2>Confirmation</h2>
                <p>Name: <?php echo $myName; ?></p>
                <p>Age: <?php echo $myAge; ?></p>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>
