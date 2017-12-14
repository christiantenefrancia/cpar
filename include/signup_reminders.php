<?php

if($_SESSION['name_reminder']) {
    echo $_SESSION['name_reminder'];
}

if($_SESSION['email_reminder']) {
    echo $_SESSION['email_reminder'];
}

if($_SESSION['password_reminder']) {
    echo $_SESSION['password_reminder'];
}

if($_SESSION['userType_reminder']) {
    echo $_SESSION['userType_reminder'];
}

if($_SESSION['department_reminder']) {
    echo $_SESSION['department_reminder'];
}

unset($_SESSION['name_reminder']);
unset($_SESSION['email_reminder']);
unset($_SESSION['password_reminder']);
unset($_SESSION['userType_reminder']);
unset($_SESSION['department_reminder']);

?>