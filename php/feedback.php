<?php
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $comment = htmlspecialchars($_POST['comment']);
    
    echo 'Name: ' . $name . ', Email: ' . $email . ', Comment: ' . $comment;
?>