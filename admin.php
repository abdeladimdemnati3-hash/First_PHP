<?php
session_start();
require_once('./inc/config.php'); // adjust path if needed 
require_once('./inc/library.php'); // adjust path if needed 
ensureUserIsAuthenticated(); // block access if not logged in
include('./inc/header.php');

?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Admin Panel - <?php echo $_SESSION['email'] ?? ''; ?></h1>
        </div>
    </div>
</div>

<?php include('./inc/footer.php'); ?>