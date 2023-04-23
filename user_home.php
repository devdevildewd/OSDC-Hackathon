<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
{
  header("location : home.html");
  exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
  <!-- Font Awesome End -->

    <title>Home</title>
    <link rel="stylesheet" href="external.css">

    <script type="text/javascript"> 
      function display_c(){
      var refresh=1000; // Refresh rate in milli seconds
      mytime=setTimeout('display_ct()',refresh)
      }

      function display_ct() {
      var x = new Date()
      var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
      x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
      document.getElementById('ct').innerHTML = x1;
      display_c();
 }
      </script>
  </head>
  <body onload=display_ct();>
    <header>
        <nav class="navbar navbar-expand-sm">
          <a href="home.html" class="navbar-brand">
            <img src="resources/logo1.png" alt="" height="40px" />
          </a>
          <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#my-navbar">
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="my-navbar">
            <ul class="nav  bar-nav ml-auto">
            <!-- <ul class="navbar-nav mx-auto"> -->
            <!-- <ul class="navbar-nav mr-auto"> -->
              <li class="nav-item">
                <a href="user_home.html" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="table.php" class="nav-link">MSP</a>
              </li>
              <li class="nav-item">
                <a href="table2.php" class="nav-link">Circular Rate</a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">Log out</a>
              </li>
              <!-- <li class="nav-item">
                <a id="service-menu" class="nav-link">Login</a>
              </li> -->
             
            </ul>
            <a href="tel:18xx-xxx-xxxx" class="nav-link"><i class="fa-solid fa-phone"></i> 1800-180-1551</a>
           <span id='ct' ></span>
          </div>
          
        </nav>
        <div class="row">
          <div class="col-sm p-5 mt-5" id="banner-content"  data-aos="fade-right" data-aos-duration="1000">

          <p class="font-weight-bold" style="color: #003320;">Welcome 
            <?php
              echo $_SESSION['useremail'];
            ?>  
            to the Farmers Choice</p>

            <p style="color: #003300;">
            Agriculture is a top priority in India but even after all the hard work and produce done by the farmers, in today's market the farmers are urged by the Agents, which leads to poverty. Middleman's role in marketing the farm product is necessary to remove in order to provide direct sales between farmers and buyers. This site allows for better communication between the farmer and the customer.
            </p>
          </div>
          <div class="col-sm pl-5 pt-5" style="margin-top: 200px;" data-aos="fade-left" data-aos-duration="2000">
            <img src="resources/tractor.png" alt="" width="500px">
          </div>
        </div>
      </header>


  
  <main>
    <div class="row choice">
      <div class="col-sm pl-5 pt-5 mb-5" data-aos="fade-up" data-aos-duration="1000">
        <center><img src="resources/government.jpg" class="rounded float-start" alt="..." width="70% "></center><br>
        
        <div class="mid-pics">
        <center><p>Click here to check Government issued price</p><br>
          <a href="table.php">
            <button type="button" class="btn btn-success">Minimum Support Price</button>
          </a>
        </center>
       </div>
        
      </div>
      <div class="col-sm pl-5 pt-5 mb-5"  data-aos="fade-up" data-aos-duration="2000">
        <center><img src="resources/private.jpg" class="rounded float-end" alt="..." width="70%"></center><br>
      <center><p>Click here to check Circular Rates</p><br>
        <a href="table2.php"><button type="button" class="btn btn-success">Circular Price</button></a></center>
      </div>
    </div> 
  </main>

  <section id="gallery" class="p-5 text-center">
      <h3 class="pl-4 pt-5 choose_taital">Our Gallery<hr></h3>
      <a href="resources/images/productImages/Bajra4.jpg" data-toggle="lightbox" data-gallery="my-gallery"><img src="resources/images/productImages/Bajra4.jpg" alt=""></a>
      <a href="resources/images/productImages/Green Apple4.jpg" data-toggle="lightbox" data-gallery="my-gallery"><img src="resources/images/productImages/Green Apple4.jpg" alt=""></a>
      <a href="resources/images/productImages/Ladyfinger5.jpg" data-toggle="lightbox" data-gallery="my-gallery"><img src="resources/images/productImages/Ladyfinger5.jpg" alt=""></a>
      <a href="resources/images/productImages/Rice5.jpg" data-toggle="lightbox" data-gallery="my-gallery"><img src="resources/images/productImages/Rice5.jpg" alt=""></a>
      <a href="resources/images/productImages/Sapota(Chikoo)5.jpg" data-toggle="lightbox" data-gallery="my-gallery"><img src="resources/images/productImages/Sapota(Chikoo)5.jpg" alt=""></a>
      <a href="resources/images/productImages/Wheat5.jpg" data-toggle="lightbox" data-gallery="my-gallery"><img src="resources/images/productImages/Wheat5.jpg" alt=""></a>
    </section>


    <div class="about_section layout_padding">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6">
               <div class="about_main">
                  <h1 class="about_taital">About Our Website</h1>
                  <p class="about_text">The main target of the owner of this website is to directly connect the farmer(or seller) to goverment(or buyer) so that farmer could get an adequate amount for the crop being sold</p>
                  <div class="readmore_bt"><a href="https://en.wikipedia.org/wiki/Farmer">Read More</a></div>
               </div>
            </div>
            <div class="col-md-6 padding_0">
               <div class="image_7"><img src="resources/about.png" width="100%"></div>
            </div>
         </div>
      </div>
   </div>

   <!-- client section start -->
   <div class="client_section layout_padding">
    <div class="container">
       <h1 class="choose_taital">What says our cutomers</h1>
       <p class="choose_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its</p>
       <div id="my_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
             <div class="carousel-item active">
                <div class="client_section_2 layout_padding">
                   <div class="row">
                      <div class="col-md-6">
                         <h2 class="siaalya_text">RamPal</h2>
                         <p class="lorem_text">मैं इस वेबसाइट का उपयोग सभी प्रकार की फसल बेचने के लिए करूँगा। बिक्री और अच्छे अवसरों को स्वचालित करने के लिए सबसे अच्छी चीज।</p>
                         <div class="quite_icon">
                            <a href="#">
                               <img src="resources/quite-icon.png">
                         </div>
                      </div>
                      <div class="col-md-6">
                      <h2 class="siaalya_text">Naresh</h2>
                      <p class="lorem_text">सबसे अच्छी बात मैंने अपनी बिक्री को स्वचालित करना और अच्छा लाभ कमाना पाया है। मैं अभी भी नहीं जानता था कि कैसे शुरू करूं लेकिन सब ठीक हो गया।</p>
                      <div class="quite_icon"><a href="#"><img src="resources/quite-icon.png"></div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
             <div class="client_section_2 layout_padding">
             <div class="row">
             <div class="col-md-6">
             <h2 class="siaalya_text">रामवती</h2>
             <p class="lorem_text">एक जादू की तरह काम करता है। उपयोग में आसान और त्वरित प्रतिक्रिया के साथ एक अच्छा यूजर इंटरफेस है। कुल मिलाकर इससे प्रभावित हुए।</p>
             <div class="quite_icon"><a href="#"><img src="resources/quite-icon.png"></div>
             </div>
             <div class="col-md-6">
             <h2 class="siaalya_text">फुवरिया</h2>
             <p class="lorem_text">आय के अच्छे अवसर के लिए मैं निश्चित रूप से इस वेबसाइट को सीजन की उपज बेचने की सलाह दूँगी|</p>
             <div class="quite_icon"><a href="#"><img src="resources/quite-icon.png"></div>
             </div>
             </div>
             </div>
             </div>
          </div>
          <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="next">
          <i class="fa fa-arrow-left"></i>
          </a>
          <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
          <i class="fa fa-arrow-right"></i>
          </a>
       </div>
    </div>
 </div>
 <!-- client section end --> 

    <section class="container-fluid bg-secondary" id="services">
      <h3 class="pl-4 pt-5 choose_taital">Government POLICIES<hr></h3>
      <div class="row p-4 text-center">
        <div class="col-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          <div class="bg-white p-4 my-2">
            <p class="c-features-icon"><i class="fa-solid fa-users fa-2x"></i></p>
            <h5>Agriculture Infrastructure Fund</h5>
            <p>
              A pan India Central Sector Scheme providing debt financing facility for investment in Agri infrastructure. <br><br>
              <a href="https://vikaspedia.in/schemesall/schemes-for-farmers/agriculture-infrastructure-fund"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </p>
          </div>
        </div>
        <div class="col-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
          <div class="bg-white p-4 my-2">
            <p class="c-features-icon"><i class="fa-solid fa-users fa-2x"></i></p>
            <h5>Credit facility for farmers </h5>
            <p>
              Provides information related to institutional credit available for farmers. <br><br>
              <a href="https://vikaspedia.in/schemesall/schemes-for-farmers/credit-facility-for-farmers"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </p>
          </div>
        </div>
        <div class="col-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          <div class="bg-white p-4 my-2">
            <p class="c-features-icon"><i class="fa-solid fa-users fa-2x"></i></p>
            <h5>Crop insurance schemes</h5>
            <p>
              Scheme to safeguard farmers from financial loss occurring due to non-preventable natural risks. <br><br>
              <a href="https://vikaspedia.in/schemesall/schemes-for-farmers/crop-insurance-schemes"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </p>
          </div>
        </div>
      </div>
      
    </section>

  <footer class="container-fluid ">
    <div class="row text-center text-white">
      <div class="col-sm pt-5 my-2">
        <h4>Do you need any help?<br> We are ready to help!</h4>
        <button class="btn btn-warning" data-toggle="modal" data-target="#contactModal">Get In Touch</button>
      </div>
      <div class="col-sm  my-2" data-aos="zoom-in" data-aos-duration="1000">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.849386713295!2d77.48436321499923!3d28.664228041380134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1934e30505b%3A0x6bcac3cfd71bc573!2sWave%20City%20Ghaziabad!5e0!3m2!1sen!2sin!4v1668609141130!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-sm pt-3  my-2 text-left">
        <img src="resources/logo1.png" alt="">
        <p>
          503, 5th Floor, OM Tower, City Centre, <br/>
          Wave City, Ghaziabad, UP
        </p>
        <p>
          Contact: 98XXXXXXXX, 98XXXXXXXX
        </p>
      </div>
    </div>
  </footer>
  
  </body>
  <script>
    $(function() {
    AOS.init();
    //script for light box
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    })
  });
  </script>
  
</html>