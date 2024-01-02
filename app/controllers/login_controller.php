<?php
// session_start();

if (isset($_POST['submit_l'])) {
    $userRegistration = new UserLogin($db);
    $registrationResult = $userRegistration->loginUser($_POST['log_email'], $_POST['log_password']);
    // echo '<div class="alert">' . $registrationResult . '</div>';
    if (is_int($registrationResult) === true) {
        header('location: index.php?page=home');
    }
    else{
        header('location: login.php');
    $_SESSION['id'] = $registrationResult;
    }
}
?>