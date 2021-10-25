<?php
include_once('settings.php');
include_once('lib.php');

include('header.php');
?>
<div id="header">
    <h1 style = "text-align: center; padding-bottom: 1rem;"><?php echo $title; ?></h1>
</div>

<div id="container">
    <form id="intro" method="GET" action="session.php">
        <?php

        $login = $pagetexts['login-dialog'];
        ?>
        Enter your ID (change)
        <br><br>
        <input style="font-size:12px;" name="userID" type="text" onclick="this.value=''" value="<?php echo $login; ?>">
        <br><br><?php echo $register; ?>
    </form>


    <?php
    include('footer.php');
    ?>