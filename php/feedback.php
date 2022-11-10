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
    
    $sql = "INSERT INTO t_feedback VALUES
        ('$name', '$email', '$comment')";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$first_name\n $last_name\n "
            . "$gender\n $address\n $email");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
     
    // Close connection
    mysqli_close($conn);

    header('Location: ../contact.html');

?>