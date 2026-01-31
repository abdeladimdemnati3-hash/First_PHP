<?php 
include('./inc/header.php');
require_once('./inc/config.php');
require_once('./inc/library.php'); 

session_start();

$status = "";
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($email)) {
        $status .= "Email is required!<br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status .= "Invalid email format!<br>";
    }

    if (empty($password)) {
        $status .= "Password is required!<br>";
    } elseif (strlen($password) < 8) {
        $status .= "Password must be at least 8 characters long!<br>";
    } else {
        $option = ['options' => ['regexp' => '/^([a-z0-9])+$/i']];
        if (!filter_var($password, FILTER_VALIDATE_REGEXP, $option)) {
            $status .= "Invalid password format!<br>";
        }
    }

    if (empty($status)) {
        if (authenticate($email, $password)) {
            $_SESSION['email'] = $email;
            redirect("admin"); 
            exit();
        } else {
            $status = "The Provided Credentials didn't work!";
        }
    }
}
?>

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