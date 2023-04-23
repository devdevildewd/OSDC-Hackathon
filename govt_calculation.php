
<?php
    $conn = new mysqli('localhost','root','','farmerchoice');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    session_start();
        $cropAmount = $_POST["quantity"];
        $cropName = $_POST["crop"];
        $govtName = $_POST["govt"];

        $results = mysqli_query($conn, "SELECT * FROM government");
            
        while($row = $results->fetch_row())
        {
            if($row[1] == "$cropName" && $row[3] == "$govtName"){
            $ans = $row[2];
            }
        } 

        $totalAmount = $ans * $cropAmount * 100;

        echo "The total amount is ";
        echo "Rs ";
        echo $totalAmount;
        // $_SESSION['useremail'] = $_POST['email'];
        // $_SESSION['userphone'] = $_POST['phone'];
        $useremail = $_SESSION['useremail'];
        $userphone = $_SESSION['userphone'];

        $insertion = mysqli_query($conn, "INSERT INTO price VALUES('$useremail', '$userphone','$totalAmount')");
?>