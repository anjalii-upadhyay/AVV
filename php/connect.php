<?php
    $Name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // database connection
    $conn = new mysqli('localhost','root','','prestige_properties');
    if($conn->connect_error){
        die('Connection Failed: ' .$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("INSERT INTO registration(name, number, email, password) values(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $Name, $phone, $email, $password);
        $stmt->execute();
        echo "Registration Successful!";
        $stmt->close();
        $conn->close();
    }
?>
