<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" type="text/css" href="main.css">

        <title><?php echo $page_title; ?></title>
    </head>
    
    <body>

        <div id="wrapper">
            <div class="middle">

                <?php
                
                    if(!isset($_SESSION['username'])){
                        echo "<div id='header'>";
                            echo "<div id='left-side'><h2>Php crud system with admin panel</h2></div>";
                            echo "<div id='right-side'><h3><a href='admin'>ADMIN PANEL</a></h3></div>";
                        echo "</div>";
                    }else{
                        echo "<div id='header'>";
                            echo "<div id='left-side'><h2>Php crud system with admin panel</h2></div>";
                            echo "<p id='right-side'>LOGGEDIN AS <span style='font-size:28px;color:black;'>".$_SESSION['username']."</span> <br><a href='admin' style='color:blue;font-size:25px;'> Access to Admin panel</a></p><br><br>";
                        echo "</div>";
                    }

                ?>

            </div>

            <div id="main">