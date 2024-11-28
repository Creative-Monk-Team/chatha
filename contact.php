<?php include('header.php');?>
<style type="text/css">
  .chatha-contact{
        color: #d41f3d;
  }
  .formerly-text{
        font-style: italic;
        font-size: 12px;
        color: black;
        margin-top: -4px;
    }
</style>
<section id="vein-welcome">

  <div class="chatha-container res-full">

      <div class="page-banner post">
           <img class="mobile-hide" src="images/contact-slide.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img class="mobile-show" src="images/contact-us-slide.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
      </div>
      <!--<div class="vein-hero-slider post">
       <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/contact-slide.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/contact-slide.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/contact-slide.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          </div>
        </div>
        <!-- Left and right controls -->
       <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev">
          <img  src="images/left-arrow-black.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next">
          <img  src="images/right-arrow-black.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
        </a>
      </div>
    </div>-->

    <div class="chatha-container">
      <div class="contact_us">
        <div class="contact-map contact-mobile-show post" id="map1" style="width: 100%; height: 450px">

      </div>
      <div class="contact-add post">
        <h1>Contact us</h1>
        <!--<div>
           <h3>Corporate Office:</h3>
           <span>Chatha Foods Private Limited, C/O Reliant Business Centre, SCO No. 60-62, 2nd Floor, Cabin No. 209, Sector 17C, Chandigarh-160017</span>
        </div>-->
        <div>
           <h3>Corporate Office:</h3>
           <span><strong>Chatha Foods Limited</strong><br><span class="formerly-text">(Formerly Chatha Foods Private Limited)</span><br>Village Chaundheri, P.O. Dapper,<br> Chandigarh - Ambala Highway, <br> Distt. SAS Nagar, Punjab 140 506, India</span><br>
        </div>
        <div class="contact-sub-add">
          <span>Write or call us at</span></<br>
          <span><a href="mailto:infochathafoods@cfpl.net.in" title="">infochathafoods@cfpl.net.in</a></span></<br>
          <span><a href="te:+911762506711" title="">+91-1762-506711</a></span>
        </div>
        <div class="contact-social">
            <span>
              You can also locate us on social media
            </span>
            <a href="#" target="_blank">
              <img src="images/fb-icon.png" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
            </a>
            <a href="#" target="_blank">
              <img src="images/insta-icon.png" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
            </a>

        </div>
      </div>
      <div class="contact-map contact-mobile-hide post" id="map" style="width: 100%; height: 400px">

      </div>
      </div>

    </div>

     <div  class="post contact-main">
      <div class=" chatha-sm-container">
        <h2>Send us a message...</h2>
        <form method="post" class="pro-enq" action="">
            <div class="first-half">
                <input  type="text"  name="f-name" placeholder="Your Name"  required="">
            </div>
            <div class="first-half">
              <input  type="email"  name="c-email" placeholder="Your Email" required>
            </div>

            <input type="text"  name="c-subject" placeholder="Subject" required>

            <textarea rows="9" name="c-message" placeholder="Message"></textarea>

      <div class="g-recaptcha" data-sitekey="6Le5D4wUAAAAAD7RspJjObhSiiwsBhfgaV80qyN4"></div>

            <div class="sub-button">
              <input type="submit" class="design-button" name="submit_single1" value="Send" >
            </div>
      <?php
if( isset($_POST['submit_single1']) ){

     if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){

         $secret = '6Le5D4wUAAAAAKIZioFHJDBS_dHs3sCBFIXenqit';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success){
            $to = 'prashant_verma@cfpl.net.in';
         //$subject = "Customer Enquiry(".$_POST['r-subject'].")";
         $subject = "Contact Form of Chatha Foods";


         $message = "<html><body>
  <center><h1 style='text-transform: capitalize'>Customer Details </h1>
   </center>
<table border='0' cellpadding='0' cellspacing='0' width='600' align='center' style='box-shadow: 3px 6px 22px gray'>


      <tr>

        <td align='center' valign='top' width='100%' class='templateColumnContainer'>
            <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                <tr>
                    <td class='rightColumnContent'>
<h4><b>Name:  </b>".$_POST['f-name']." </h4>

<h4><b>Email:  </b>".$_POST['c-email']." </h4>

<h4><b>Contact Number:  </b>".$_POST['c-subject']." </h4>

<h4><b>Query:  </b>".$_POST['c-message']." </h4>
                       </td>
                </tr>

            </table>
        </td>
    </tr>
</table></body></html>";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         $retval = mail ($to,$subject,$message,$header);



         if( $retval == true ) {
              echo"<div class='suc-msg'>";
            echo "Message sent successfully...";
               echo"</div>";
         }else {
               echo"<div class='err-msg'>";
            echo "Message could not be sent...";
            echo"</div>";
         }
        }
        else{
            echo"<div class='err-msg'>";
            echo "Robot verification failed, please try again.";
             echo"</div>";
        }


     }
     else{
         echo"<div class='err-msg'>";
         echo "Please click on the reCAPTCHA box.";
          echo"</div>";
     }


}
      ?>
      <style>
          .err-msg{
                  width: 100%;
                float: left;
                padding-top: 10px;
                    color: red;
          }
           .suc-msg{
                  width: 100%;
                float: left;
                padding-top: 10px;
                    color: green;
          }
      </style>

             <?php/*
if( isset($_POST['submit_single1']) ){

$email_to = 'prashant_verma@cfpl.net.in';
 $to = 'prashant_verma@cfpl.net.in';
         //$subject = "Customer Enquiry(".$_POST['r-subject'].")";
         $subject = "Contact Form of Chatha Foods";


         $message = "<html><body>
  <center><h1 style='text-transform: capitalize'>Customer Details </h1>
   </center>
<table border='0' cellpadding='0' cellspacing='0' width='600' align='center' style='box-shadow: 3px 6px 22px gray'>


      <tr>

        <td align='center' valign='top' width='100%' class='templateColumnContainer'>
            <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                <tr>
                    <td class='rightColumnContent'>
<h4><b>Name:  </b>".$_POST['f-name']." </h4>

<h4><b>Email:  </b>".$_POST['c-email']." </h4>

<h4><b>Contact Number:  </b>".$_POST['c-subject']." </h4>

<h4><b>Query:  </b>".$_POST['c-message']." </h4>
                       </td>
                </tr>

            </table>
        </td>
    </tr>
</table></body></html>";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         $retval = mail ($to,$subject,$message,$header);

         if( $retval == true ) {
              echo"<span class='suc-msg'>";
            echo "Message sent successfully...";
               echo"</span>";
         }else {
            echo "Message could not be sent...";
         }
}*/
      ?>
          </form>
      </div>
    </div>



  </div>





</section>


<?php include('footer.php');?>
