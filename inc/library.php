<?php
function authenticate($email, $password)
{
    return ($email === EMAIL && $password === PASSWORD);
}
function redirect($page)
{
    header("Location: $page.php");
    exit;
}
function isAuthenticated()
{
    return isset($_SESSION['email']);
}
function ensureUserIsAuthenticated()
{
    if (!isAuthenticated()) {
        redirect('login');
        die();
    }
}
