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
    else
    {
        echo "Connessione effettuata";
    }

    $user = $_POST['Username'];
    $pass = $_POST['Password'];

    $sql = "SELECT Username, ruolo FROM utenti WHERE Username = '$user' AND Password = '$pass'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0)
    {
        $risultato = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION['ruolo'] = $risultato['ruolo'];
        $_SESSION['nome'] = $risultato['Username'];
        echo "benvenuto " . $_SESSION['nome'] . " " . $_SESSION['ruolo'];
    }
    else
    {
        echo 'qualcosa è andato storto';
    }
    //header('Location: https://localhost/ProgettoDatabase/index.php');
?>