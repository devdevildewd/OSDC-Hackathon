<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />

  <!-- Lightbox CSS & Script -->
  <script src="resources/lightbox/ekko-lightbox.js"></script>
  <link rel="stylesheet" href="resources/lightbox/ekko-lightbox.css"/>

  <!-- AOS css and JS -->
  <link rel="stylesheet" href="resources/aos/aos.css">
  <script src="resources/aos/aos.js"></script>
  <!-- AOS css and JS END-->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #90EE90;
            font-size: 40px;
        }
        .btn{
            margin-left: 40px;
        }
    </style>
</head>
<body>
    <div class="page">
<?php
    $conn = new mysqli('localhost','root','','farmerchoice');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    $username = $_POST["name"];
    $useremail = $_POST["email"];
    $userphone = $_POST["phone"];

    $check = "SELECT * FROM users WHERE Phone = '$userphone'";
    $result = mysqli_query($conn, $check);

    if(mysqli_num_rows($result) != 0)
    {
        echo '<script> alert("This data entry already exists!")</script>';
        echo "<script>document.location.href = 'home.html'</script>";
    }
    else{

    $sql = "INSERT INTO users(Name, Email, Phone) VALUES('$username','$useremail','$userphone')";

    if(mysqli_query($conn,$sql))
    {
        echo '<script> alert("Registration Successful!")</script>';
        echo "<script>document.location.href = 'home.html'</script>";
    }
    else{
        die('No Record:' .$conn->connect_error);
        header("Location: home.html");
    }
    }
?>
</div>
</body>
</html>