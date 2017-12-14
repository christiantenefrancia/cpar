<?php
	require_once('config.php'); 
	require_once('include/check_login.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A portfolio template that uses Material Design Lite.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>CPAR LOGIN</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
<!--    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-pink.min.css" />-->
    <link rel="stylesheet" href="assets/css/material.min.css">
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
    
<style>
    body { 
/*
      background: url(assets/img/colours-nature-bnr-oct15.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
*/
        background-size: cover;
        overflow-y: hidden ! important;
        overflow-x: hidden ! important;
        background-color: #b3ccff;
    }    
    
</style>

<body>
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--1-col"></div>
            <div class="mdl-cell mdl-cell--10-col">
                <br>
                <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
                    <main class="mdl-layout__content">
                        <div class="mdl-grid portfolio-max-width portfolio-contact" style="opacity: 0.9">
                            <div class="mdl-cell mdl-cell--8-col mdl-card mdl-shadow--4dp">
            <!--
                                <div class="mdl-card__title">
                                    <h2 class="mdl-card__title-text">Login</h2>
                                </div>
            -->
                                <div class="mdl-card__media">
                                    <img class="article-image" src="assets/img/header.jpg" border="0" alt="">
                                </div>
                                <div class="mdl-card__supporting-text">
            <!--
                                    <p>
                                        Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
                                    </p>
                                    <p>
                                        Excepteur reprehenderit sint exercitation ipsum consequat qui sit id velit elit. Velit anim eiusmod labore sit amet.
                                    </p>
            --> 

                                        <form action="login-ui.php" method="post">
                                             <div class="mdl-grid">
                                                <div class="mdl-cell mdl-cell--2-col"></div>
                                                 <div class="mdl-cell mdl-cell--8-col">
												 <?php require_once('include/login_reminders.php'); ?>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                                        <input class="mdl-textfield__input" id="Name" type="email" name="username">
                                                        <label class="mdl-textfield__label" for="Name">Username...</label>
                                                        <span class="mdl-textfield__error">Letters and spaces only</span>
                                                    </div>
                                                </div>
                                                <div class="mdl-cell mdl-cell--2-col"></div>



                                                <div class="mdl-cell mdl-cell--2-col"></div>
                                                 <div class="mdl-cell mdl-cell--8-col">
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                        <input class="mdl-textfield__input" type="password" name="password" id="Email">
                                                        <label class="mdl-textfield__label" for="Email">Password...</label>
                                                    </div>
                                                 </div>
                                                <div class="mdl-cell mdl-cell--2-col"></div>

                                                 <!-- <div class="mdl-cell mdl-cell--2-col"></div>
                                                 <div class="mdl-cell mdl-cell--5-col">
                                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                                                      <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                                                      <span class="mdl-checkbox__label" style="font-size: 12px;">Remember Me</span>
                                                    </label>
                                                </div>
                                                 <div class="mdl-cell mdl-cell--3-col">
                                                     <span class="mdl-checkbox__label" style="font-size: 12px;">Forgot Password?</span>
                                                 </div>
                                                 <div class="mdl-cell mdl-cell--2-col"></div> -->

                                                 <div class="mdl-cell mdl-cell--2-col"></div>
                                                 <div class="mdl-cell mdl-cell--8-col">
                                                    <p>
                                                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="width: 100%" type="submit">
                                                            Login
                                                        </button>
                                                    </p>
                                                </div>
                                                <div class="mdl-cell mdl-cell--2-col"></div>
                                            </div>
                                        </form>

                                </div>
                            </div>
                        </div>
            <!--
                        <footer class="mdl-mini-footer mdl-color--teal-300">
                            <div class="mdl-mini-footer__left-section">
                                <div class="mdl-logo">CPAR</div>
                            </div>
                            <div class="mdl-mini-footer__right-section">
                                <ul class="mdl-mini-footer__link-list">
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Privacy & Terms</a></li>
                                </ul>
                            </div>
                        </footer>
            -->
                    </main>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--1-col"></div>
    </div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="assets/js/material.min.js"></script>
</body>

</html>
