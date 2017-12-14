<?php 

if(isset($_SESSION['username_empty'])) {
    echo $_SESSION['username_empty']; 
}

if(isset($_SESSION['password_empty'])) {
    echo $_SESSION['password_empty'];
} 

if(isset($_SESSION['invalid_email'])) {
    echo $_SESSION['invalid_email'];
}

if(isset($_SESSION['account_notfound'])) {
    echo $_SESSION['account_notfound'];
}

if(isset($_SESSION['success_logout'])) {
    echo $_SESSION['success_logout'];
}

if(isset($_SESSION['user_notmatch'])) {
    echo $_SESSION['user_notmatch'];
}


unset($_SESSION['username_empty']);
unset($_SESSION['password_empty']);
unset($_SESSION['invalid_email']);
unset($_SESSION['account_notfound']);
unset($_SESSION['success_logout']);
unset($_SESSION['user_notmatch']);
?>