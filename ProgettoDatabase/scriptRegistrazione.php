<?php
    $hostname = "localhost";
    $username = "user";
    $password = "psswrdDBRistorante";
    $dbName = "progettoristorante";

    // Create connection
    $conn = mysqli_connect($hostname, $username, $password, $dbName);

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $user = $_POST['Username'];
    $pass = $_POST['Password'];
    $nome = $_POST['Nome'];
    $cogn = $_POST['Cognome'];

    $sql = "INSERT INTO cliente (Username, Password, Nome, Cognome) VALUES('$user', '$pass', '$nome', '$cogn')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "<script>alert('Registrazione effettuata');</script>";
    }
    header('Location: https://localhost/ProgettoDatabase/index.php');
?>