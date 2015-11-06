<?php
ini_set ("session.use_trans_sid", true);
session_start();
include ('../index.php');
function registrationCorrect() {
    if (empty($_POST['login']));
    if (empty($_POST['pd']));
    if (empty($_POST['mail']));
    else {
        $login = $_POST['login'];
        $password = $_POST['pd'];
        $mail = $_POST['mail'];

        if (isset($_POST['enter'])) {
            $arr = array($login, $password, $mail);
            echo json_encode($arr);
        }
        return true;
    }
}

if (isset($_SESSION['id']) || (isset($_COOKIE['login']) && isset($_COOKIE['pd']))) {
    header('Location: http://localhost');
}
else {
    if (isset($_POST['enter'])) {
        $correct = registrationCorrect();
        if ($correct) {
            echo "Registration successful";
        }
    }
}
echo "Registration successful";
?>