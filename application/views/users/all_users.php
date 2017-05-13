<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

</head>
<body>

<div id="container">
    <h1>Welcome to CodeIgniter!</h1>

    <?php foreach ($users as $user):?>
        <div id="body">
            <span><?php echo $user['usename'] ?></span>
            <span><?php echo $user['email']?></span>
        </div>
    <?php endforeach;?>
</div>

</body>
</html>