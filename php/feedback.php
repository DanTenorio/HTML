<?php
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $comment = htmlspecialchars($_POST['comment']);

    $servername = "us-phx-web737.main-hosting.eu";
    $username = "u668543051_JDT";
    $password = "MSin2m!!";
    $dbname = "u668543051_JDTMySQL";
    
    // Create connection
    $conn = new mysqli($servername,
        $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: "
            . $conn->connect_error);
    }
    
    $sqlquery = "INSERT INTO t_feedback VALUES
        ('$name', '$email', '$comment')";
    
    if ($conn->query($sql) === TRUE) {
        echo "record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    mysqli_close($conn);

    echo 'Name: ' . $name . ', Email: ' . $email . ', Comment: ' . $comment;
?>