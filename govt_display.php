<!doctype html>
 <html lang="en">
 <head>
     <meta charset= "UTF-8">
     <meta http-equiv = "X-UA-Compatible" content = "IE-edge">
     <meta name = "viewport" content = "width-device-width, initial-scale=1.0">
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
     <title>Display Data In the Table Using PHP</title>
 </head>
 <body style = "background:grey;">
 <div style = "padding: 50px;" class="body">
<div class = "card">
<div class = "card-header">
    RECORDS OF GOVERNMENT PRICE
</div>

<div class = "card-body">
<table class="table table-hover table-dark">
         <thead>
             <tr>
                <th>SNo.</th>
                <th>Crop Name</th>
                <th>Price</th>
                <th>State</th>
             </tr>
        </thead>
         <tbody>
             <?php
             $conn = new mysqli('localhost','root','','farmerchoice');
             if($conn->connect_error){
                 die('Connection Failed: '.$conn->connect_error);
             }
             $sql = "SELECT *FROM government";
             $results = $conn->query($sql);
             
             if(!$results) {
             die('No Record:' .$conn->connect_error);
                }
            while($row = $results->fetch_assoc())
                {
                    echo "
                    <tr>
                        <td scope=\"col\">".$row["SNo."]."</td>
                        <td scope=\"col\">".$row["Crop_Name"]."</td>
                        <td scope=\"col\">".$row["Price"]."</td>
                        <td scope=\"col\">".$row["State"]."</td>
                    </tr>";
                }
             ?>
         </tbody>
     </table>
            </div>
            </div>
        
    
</body>
 </html>