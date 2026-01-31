<style>
    .container {
        margin-top: 50px;
        width: 200px;
        margin: auto;
    }
</style>

<?php
$myName = "";
$myAge  = "";


if (in_array($_SERVER['REQUEST_METHOD'], ["POST"]))    {


    //$myName =isset( $_REQUEST['Fullname']) ? $_REQUEST['Fullname'] : "";
    //$myAge = isset( $_REQUEST['age']) ? $_REQUEST['age'] : "";;

    $myName = $_REQUEST['Fullname'] ??  "";
    $myAge =  $_REQUEST['age'] ??  "";;
}
?>

<?php include("header.php"); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 mx-auto"> 
      <form action="" method="POST">
        <p><?php echo $myName . ' age : ' . $myAge; ?></p>
        
        <div class="form-group">
          <label>Your Name :</label>
          <input name="Fullname" type="text" class="form-control">
        </div>
        
        <div class="form-group">
          <label>Your Age:</label>
          <input name="age" type="text" class="form-control">
        </div>
        
        <button type="submit" href="confirmation.php" class="btn btn-success btn-block w-100 mt-2">Submit</button>
      </form>
    </div>
  </div>
</div>

<h2>About Us</h2>
<p><?php echo $myName . ' age : ' . $myAge; ?></p>
<?php include("footer.php"); ?>
