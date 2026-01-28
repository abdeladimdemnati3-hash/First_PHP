<?php include('./inc/header.php');
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
require_once('./inc/config.php');
require_once('./inc/library.php'); 

session_start();




// 
$status = "";
$email = $_POST['email'] ?? '';
$pasword = $_POST['pasword'] ?? '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (authenticate($email, $password)) {
        session_start();
        $_SESSION['email'] = $email;
        redirect("admin"); 
        die();
    } else {
        $status = "The Provided Credentials didn't work!";
    }
}

?>
<p><?php echo "$email - $password"; ?></p>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <?php if ($status != "") { ?>
                <div class="alert alert-danger"><?php echo $status; ?></div>
            <?php } ?>
            <form action="" method="POST">
                <div class="form-group"> <label for="email">Email :</label> <input name="email" id="email" type="email"
                        class="form-control"> </div>
                <div class="form-group"> <label for="password">Password :</label> <input name="password" id="password"
                        type="password" class="form-control"> </div>
                <button value="login" type="submit" class="btn btn-danger w-100 mt-3 mb-3">Login</button>
            </form>
        </div>
    </div>
</div>

<?php include('./inc/footer.php'); ?>