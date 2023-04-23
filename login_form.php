<?php
    $conn = new mysqli('localhost','root','','farmerchoice');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    $useremail = $_POST["email"];
    $userphone = $_POST["phone"];

    $sql = "SELECT * FROM users WHERE Phone = '$userphone' AND Email = '$useremail'";
    $results = mysqli_query($conn, $sql);
    $rowsNum = $results->num_rows;

    if($rowsNum == 0)
    {
        echo '<script> alert("No such account exists!")</script>';
        echo "<script>document.location.href = 'home.html'</script>";
    }
    if($rowsNum == 1)
    {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['useremail'] = $useremail;
        $_SESSION['userphone'] = $userphone;
        header("Location: user_home.php");
    }
    if(!$results) {
    die('No Record:' .$conn->connect_error);
       }
?>