<?php include('header.php');?>
<style type="text/css">
  /*body{*/
  /*    overflow-x: hidden;*/
  /*}*/
  /*.first-overlay{*/
  /*    width: 100vw;*/
  /*    height: 200px;*/
  /*    background-color: #E4E4E4;*/
  /*    opacity: 0.5;*/
  /*    position: absolute;*/
  /*    top: -20vw;*/
  /*    left: -15vw;*/
  /*    transform: rotate(-30deg);*/
  /*}*/
  /*.second-overlay{*/
  /*    width: 100vw;*/
  /*    height: 200px;*/
  /*    background-color: #E4E4E4;*/
  /*    opacity: 0.5;*/
  /*    position: absolute;*/
  /*    top: -50vw;*/
  /*    left: -15vw;*/
  /*    transform: rotate(-30deg);*/
  /*}*/
  /*.third-overlay{*/
      
  /*}*/
  .chatha-products{
        color: #d41f3d;
  }
  .green-bold-text{
      color: #10C000 !important;
      /*font-size: 45px !important;*/
      font-weight: 500 !important;
      margin-bottom: 20px;
  }
  .machine-pre-content h1{
      text-decoration: none !important;
  }
  .chatha-sm-container{
      max-width: 100% !important;
  }
  #vein-welcome .chatha-container #final-product{
      margin-bottom: 60px;
  }
  #welcome-part .main-welcome{
      padding-top: 100px !important;
      padding-bottom: 10px !important;
  }
  .products-see a{
      background: #d41f3d !important;
  }
  .machine-pre-content h1{
      color: #10C000 !important;
      font-weight: 600 !important;
      text-decoration: underline;
      cursor: pointer;
  }
  .chatha-sub-products ul li.pro-active{
      color: #10C000 !important;
  }
  .chatha-sub-products ul li.pro-active a{
      color: #10C000 !important;
  }
  /*a[data-toggle = "modal"]{*/
  /*    background-color: #d41f3d !important;*/
  /*}*/
  /*input[type = "submit"]{*/
  /*    background-color: #d41f3d !important;*/
  /*}*/
  .fun-and-flavorful-section{
      width: 100%;
      text-align: center;
      margin-top: 80px;
      margin-bottom: 60px;
  }
  .fun-and-flavorful-grid-section{
      display: grid;
      width: 40%;
      margin: auto;
      grid-template-columns: repeat(3, 33%);
      align-items: stretch;
      justify-content: space-between;
      margin-top: 40px;
  }
  .fun-and-flavorful-grid-section img{
      width: 150px;
      height: 150px;
      background-size: cover;
      object-fit: cover;
  }
  @media all and (max-width: 1200px){
    .fun-and-flavorful-grid-section{
      width: 45%;
    }
  }
  @media all and (max-width: 1000px){
      .fun-and-flavorful-grid-section{
          width: 60%;
      }
  }
  
  @media all and (max-width: 767px){
      .fun-and-flavorful-grid-section{
          width: 80%;
      }
      #welcome-part .main-welcome{
          padding-top: 50px !important;
          padding-bottom: 10px !important;
      }
      .fun-and-flavorful-section{
          margin-top: 30px;
          margin-bottom: 0px;
      }
  }
  
  @media all and (max-width: 560px){
      .fun-and-flavorful-grid-section{
          width: 70%;
      }
      .fun-and-flavorful-grid-section img{
          width: 100px;
          height: 100px;
      }
  }
  
  @media all and (max-width: 440px){
      .fun-and-flavorful-grid-section{
          width: 80%;
      }
  }
  
  @media all and (max-width: 375px){
      .fun-and-flavorful-grid-section{
          width: 80%;
      }
      .fun-and-flavorful-grid-section img{
          width: 75px;
          height: 75px;
      }
  }
</style>
<section id="vein-welcome">

  <div class="chatha-container res-full">
  	<div class="page-banner post">
       <img class="mobile-hide" src="images/product-slide.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
       <img class="mobile-show" src="images/products-slide-phont.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">

    </div>
  	<!--<div class="vein-hero-slider post">
      <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/product-slide.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/product-slide.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/product-slide.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          </div>
        </div>
        <!-- Left and right controls -->
        <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev">
          <img  src="images/left-arrow-black.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next">
          <img  src="images/right-arrow-black.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
        </a>
      </div>
    </div>-->
    <div id="welcome-part" class="post">
      <div class="main-welcome chatha-sm-container">
        <span>
         Explore Our Exciting Range of Vegetarian Delights
        </span>
      </div>
     </div>
     <div id="final-product" class="post">
      <div class="product-title chatha-sm-container">
        <h1 class="green-bold-text">Discover the Flavorful World of Chatha Foods' Veg Snack Selection</span></h1>
        <span>Indulge in our diverse assortment of vegetarian snacks, meticulously crafted to tantalize your taste buds and satisfy your cravings for delicious, wholesome flavors.</span>
        <br/>
        <br/>
        <span>Immerse yourself in a culinary adventure with Chatha Foods' range of vegetarian snacks. From crispy Falafel Patties to savory Paneer Poppers, each bite is a celebration of flavor and freshness. Whether you're a veggie enthusiast or simply looking for a delightful snack, our carefully curated selection promises to elevate your snacking experience to new heights of satisfaction.</span>
      </div>
      <div class="fun-and-flavorful-section">
          <h1 class="green-bold-text">Fun and Flavorful Food Finds</h1>
          <div class="fun-and-flavorful-grid-section">
              <img src="/images/veg_page/veg.png" alt="100 Veg"/>
              <img src="/images/veg_page/best.png" alt="Best Quality"/>
              <img src="/images/veg_page/noAdded.png" alt="No Added Preservatives"/>
          </div>
      </div>
  	</div>
  </div>
  <!------First------------->
  <div class="machine-sec">
      <div class="sub-machine-sec">
        <div class="post machine-pre hidden-scroll visible animated fadeInUp">
          <!--<img src="images/chicken-appetizers.jpg" alt="Chatha Foods" title="Chatha Foods">-->
          <div id="carouselExampleIndicators1" class="carousel slide " data-ride="carousel" data-interval="false" >
	        <div class="carousel-inner">
	          <div class="carousel-item active">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-FRIES-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/SPICY-CHICKEN-TENDERS-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-NUGGETS-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item ">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-BREAST-NUGGETS-2.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/chicken-appetizers.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-WINGS-BBQ-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item ">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-WINGS-PERI-PERI-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-WINGS-SPICY-SCHEZWAN-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-WINGS-SPICY-SMOKED-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item ">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-WINGS-CRISPY-CRUNCHY-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-MALAI-KEBAB-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-TANDOORI-KEBAB-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-RESHMI-KEBAB-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	        </div>
	      </div>
        </div>
        <div  class="post machine-pre-content hidden-scroll visible animated fadeInUp" id="chicken-appetizers">
          <h1>Snacks & Accompaniments</h1>
          <div>Our vegetarian snacks and accompaniments are made to delight, offering a healthy and delicious choice for every occasion.</div>
          <div id="carouselExampleIndicators01" class="chatha-sub-products">
          	<ul class="">
    			    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="pro-active active"><a href="" title="">CHICKEN FRIES</a></li>
    			    <li data-target="#carouselExampleIndicators1" data-slide-to="1"><a href="" title="">SPICY CHICKEN TENDERS</a></li>
    			    <li data-target="#carouselExampleIndicators1" data-slide-to="2"><a href="" title="">CHICKEN NUGGETS</a></li>
    			    <li data-target="#carouselExampleIndicators1" data-slide-to="3"><a href="" title="">CHICKEN BREAST NUGGETS</a></li>
            	<li data-target="#carouselExampleIndicators1" data-slide-to="4"><a href="" title="">CHICKEN FINGERS - AMRITSARI</a></li>
              <li data-target="#carouselExampleIndicators1" data-slide-to="8"><a href="" title="">CHICKEN WINGS - SPICY & SMOKED</a></li>
    			</ul>
	        <ul>
              <li data-target="#carouselExampleIndicators1" data-slide-to="9"><a href="" title="">CHICKEN WINGS - CRISPY & CRUNCHY</a></li>
	          	<li data-target="#carouselExampleIndicators1" data-slide-to="10"><a href="" title="">CHICKEN MALAI KEBAB</a></li>
	          	<li data-target="#carouselExampleIndicators1" data-slide-to="11"><a href="" title="">CHICKEN TANDOORI KEBAB</a></li>
	          	<li data-target="#carouselExampleIndicators1" data-slide-to="12"><a href="" title="">CHICKEN RESHMI KEBAB</a></li>
	        </ul>
          </div>


          <?php
if( isset($_POST['submit_btn1']) ){

$email_to = 'prashant_verma@cfpl.net.in';
 $to = 'prashant_verma@cfpl.net.in';
         $subject = "Product Enquiry";
         //$subject = "Wholesale Enquiry(".$_POST['subject'].")";


         $message = "<html><body>
  <center><h1 style='text-transform: capitalize'>Product Enquiry </h1>
   </center>
<table border='0' cellpadding='0' cellspacing='0' width='600' align='center' style='box-shadow: 3px 6px 22px gray'>


      <tr>

        <td align='center' valign='top' width='100%' class='templateColumnContainer'>
            <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                <tr>
                <td width='50%' >
                	<img width='100%' src=".$_POST['img_thumb']." >
                </td>
                    <td width='50%' class='rightColumnContent'>
                    <h2>".$_POST['name_post']." </h2>
<h4><b>Name:  </b>".$_POST['name_n']." </h4>

<h4><b>Email:  </b>".$_POST['email_n']." </h4>

<h4><b>Phone Number:  </b>".$_POST['phone_n']." </h4>

<h4><b>Query:  </b>".$_POST['message_n']." </h4>
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
}
      ?>



        </div>
      </div>
      <!-- The Modal -->
		<div class="modal fade" id="myModal1">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">



		      <!-- Modal body -->
		      <div class="modal-body">
		      	<h2>KNOW MORE ABOUT US</h2>
		      	<button type="button" class="close" data-dismiss="modal">&times;</button>

		      	<div>
		      		<img id="send-image" src="">
		      	</div>
		        <div>
		        	<form method="post" class="pro-enq" action="">
				      <div class="pop-form">

				        <input type="hidden" name="name_post" id="post" class="hiddenname" value="Chicken Appetizers">
				        <input type="hidden" name="img_thumb" id="img" class="hiddenimage" value="">

				      <input type="text" id="name" name="name_n" placeholder="Name" class="form-input" required="">

				      <input type="email" id="email" name="email_n" placeholder="Email Address" class="form-input" required="">

				      <input type="tel" id="phone" name="phone_n" class="form-input" placeholder="Contact Number" required="">

				    <textarea rows="10" name="message_n" placeholder="Enquiry"></textarea>
				      <div class="submit-en">
				         <input type="submit" class="" name="submit_btn1" value="Send Enquiry">
				      </div>
				    </div>
				             </form>
		        </div>
		      </div>

		      <!-- Modal footer -->

		    </div>
		  </div>
		</div>
    </div>

    <script type="text/javascript">
    	/*
		jQuery(function($){

			$("#carouselExampleIndicators01 ul li").click(function(){
			 var goto = Number( $(this).attr('data-slide-to') );
		  $("#carouselExampleIndicators01").carousel(goto);

				$("#carouselExampleIndicators01 ul li").removeClass("pro-active");
				$(this).addClass("pro-active");

		});

			$("#carouselExampleIndicators01 .button_label").click(function(){
		var image_val = $('#carouselExampleIndicators1 .carousel-item.active img').attr('src');
		//alert (image_val);
		$('#myModal1 #send-image').attr('src', image_val);
		//$('.').attr('src', image_val);
		$('#myModal1 .hiddenimage').val(image_val);

		});


		});*/


    </script>
    <!------Second------------->


    <div class="machine-sec">
        <div class="sub-machine-sec">
          <div class="post  machine-pre mobile-show hidden-scroll visible animated fadeInUp" style="">
              <div id="carouselExampleIndicators2mob" class="carousel slide " data-ride="carousel" data-interval="false" >
		        <div class="carousel-inner">
		          <div class="carousel-item active">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-PATTY-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-PAPRIKA-PATTY-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-NUGGETS-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item ">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/OVAL-SHAPED-PATTY-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/MUTTON-PAPRIKA-PATTY-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/PERI-PERI-MUTTON-MINCE-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item ">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/BRITISH-ROAST-MUTTON-MINCE-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/GRILLED-CHICKEN-MINCE-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-BURGER-PATTY-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item ">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-SCHNITZEL-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>

		        </div>
		      </div>
          </div>
          <div class="post   machine-pre-content mobile-show hidden-scroll visible animated fadeInUp" >
            <h1>Burger Patty</h1>
            <div>
            	Our veg burger patties are crafted to deliver exceptional taste and texture, making them perfect for any burger lover.
             </div>
             <div id="carouselExampleIndicators020" class="chatha-sub-products">
          	<ul>
	          	<li data-target="#carouselExampleIndicators2mob" data-slide-to="0" class="pro-active active"><a href="" title="">CHICKEN PATTY</a></li>
	          	<li data-target="#carouselExampleIndicators2mob" data-slide-to="1" ><a href="" title="">CHICKEN PAPRIKA PATTY</a></li>
	          	<li data-target="#carouselExampleIndicators2mob" data-slide-to="2" ><a href="" title="">CHICKEN TIKKA PATTY</a></li>
	          	<li data-target="#carouselExampleIndicators2mob" data-slide-to="3" ><a href="" title="">OVAL SHAPED PATTY</a></li>
	          	<li data-target="#carouselExampleIndicators2mob" data-slide-to="4" ><a href="" title="">MUTTON PAPRIKA PATTY</a></li>
	          	<li data-target="#carouselExampleIndicators2mob" data-slide-to="5" ><a href="" title="">PERI PERI - MUTTON MINCE</a></li>
	        </ul>
	        <ul>
	          	<li data-target="#carouselExampleIndicators2mob" data-slide-to="6"><a href="" title="">BRITISH ROAST - MUTTON MINCE</a></li>
	          	<li data-target="#carouselExampleIndicators2mob" data-slide-to="7"><a href="" title="">GRILLED - CHICKEN MINCE</a></li>
	          	<li data-target="#carouselExampleIndicators2mob" data-slide-to="8"><a href="" title="">CHICKEN BURGER PATTY</a><i> (AVAILABLE IN 50 GMS & 90 GMS)</i></li>
	          	<li data-target="#carouselExampleIndicators2mob" data-slide-to="9"><a href="" title="">CHICKEN SCHNITZEL</a></li>
	        </ul>
          </div>

               <?php
if( isset($_POST['submit_btn20']) ){

$email_to = 'prashant_verma@cfpl.net.in';
 $to = 'prashant_verma@cfpl.net.in';
         $subject = "Product Enquiry";
         //$subject = "Wholesale Enquiry(".$_POST['subject'].")";


         $message = "<html><body>
  <center><h1 style='text-transform: capitalize'>Product Enquiry </h1>
   </center>
<table border='0' cellpadding='0' cellspacing='0' width='600' align='center' style='box-shadow: 3px 6px 22px gray'>


      <tr>

        <td align='center' valign='top' width='100%' class='templateColumnContainer'>
            <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                <tr>
                <td width='50%' >
                	<img width='100%' src=".$_POST['img_thumb']." >
                </td>
                    <td width='50%' class='rightColumnContent'>
                    <h2>".$_POST['name_post']." </h2>
<h4><b>Name:  </b>".$_POST['name_n']." </h4>

<h4><b>Email:  </b>".$_POST['email_n']." </h4>

<h4><b>Phone Number:  </b>".$_POST['phone_n']." </h4>

<h4><b>Query:  </b>".$_POST['message_n']." </h4>
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
}
      ?>

          </div>
           <!-- The Modal -->
		<div class="modal fade" id="myModal20">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">



		      <!-- Modal body -->
		      <div class="modal-body">
		      	<h2>KNOW MORE ABOUT US</h2>
		      	<button type="button" class="close" data-dismiss="modal">&times;</button>

		      	<div>
		      		<img id="send-image" src="">
		      	</div>
		        <div>
		        	<form method="post" class="pro-enq" action="">
				      <div class="pop-form">

				        <input type="hidden" name="name_post" id="post" class="hiddenname" value="Chicken Appetizers">
				        <input type="hidden" name="img_thumb" id="img" class="hiddenimage" value="">

				      <input type="text" id="name" name="name_n" placeholder="Name" class="form-input" required="">

				      <input type="email" id="email" name="email_n" placeholder="Email Address" class="form-input" required="">

				      <input type="tel" id="phone" name="phone_n" class="form-input" placeholder="Contact Number" required="">

				    <textarea rows="10" name="message_n" placeholder="Enquiry"></textarea>
				      <div class="submit-en">
				         <input type="submit" class="" name="submit_btn20" value="Send Enquiry">
				      </div>
				    </div>
				             </form>
		        </div>
		      </div>

		      <!-- Modal footer -->

		    </div>
		  </div>
		</div>

          <div class="post   machine-pre-content mobile-hide hidden-scroll visible animated fadeInUp" id="chicken-patty">
            <h1>Burger Patty</h1>
            <div>
            	Our veg burger patties are crafted to deliver exceptional taste and texture, making them perfect for any burger lover.
             </div>
             <div id="carouselExampleIndicators02" class="chatha-sub-products">
          	<ul>
	          	<li data-target="#carouselExampleIndicators2" data-slide-to="0" class="pro-active active"><a href="" title="">CHICKEN PATTY</a></li>
	          	<li data-target="#carouselExampleIndicators2" data-slide-to="1" ><a href="" title="">CHICKEN PAPRIKA PATTY</a></li>
	          	<li data-target="#carouselExampleIndicators2" data-slide-to="2" ><a href="" title="">CHICKEN TIKKA PATTY</a></li>
	          	<li data-target="#carouselExampleIndicators2" data-slide-to="3" ><a href="" title="">OVAL SHAPED PATTY</a></li>
	          	<li data-target="#carouselExampleIndicators2" data-slide-to="4" ><a href="" title="">MUTTON PAPRIKA PATTY</a></li>
	          	<li data-target="#carouselExampleIndicators2" data-slide-to="5" ><a href="" title="">PERI PERI - MUTTON MINCE</a></li>
	        </ul>
	        <ul>
	          	<li data-target="#carouselExampleIndicators2" data-slide-to="6"><a href="" title="">BRITISH ROAST - MUTTON MINCE</a></li>
	          	<li data-target="#carouselExampleIndicators2" data-slide-to="7"><a href="" title="">GRILLED - CHICKEN MINCE</a></li>
	          	<li data-target="#carouselExampleIndicators2" data-slide-to="8"><a href="" title="">CHICKEN BURGER PATTY</a><i> (AVAILABLE IN 50 GMS & 90 GMS)</i></li>
	          	<li data-target="#carouselExampleIndicators2" data-slide-to="9"><a href="" title="">CHICKEN SCHNITZEL</a></li>
	        </ul>
          </div>
            <?php
if( isset($_POST['submit_btn2']) ){

$email_to = 'prashant_verma@cfpl.net.in';
 $to = 'prashant_verma@cfpl.net.in';
         $subject = "Product Enquiry";
         //$subject = "Wholesale Enquiry(".$_POST['subject'].")";


         $message = "<html><body>
  <center><h1 style='text-transform: capitalize'>Product Enquiry </h1>
   </center>
<table border='0' cellpadding='0' cellspacing='0' width='600' align='center' style='box-shadow: 3px 6px 22px gray'>


      <tr>

        <td align='center' valign='top' width='100%' class='templateColumnContainer'>
            <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                <tr>
                <td width='50%' >
                	<img width='100%' src=".$_POST['img_thumb']." >
                </td>
                    <td width='50%' class='rightColumnContent'>
                    <h2>".$_POST['name_post']." </h2>
<h4><b>Name:  </b>".$_POST['name_n']." </h4>

<h4><b>Email:  </b>".$_POST['email_n']." </h4>

<h4><b>Phone Number:  </b>".$_POST['phone_n']." </h4>

<h4><b>Query:  </b>".$_POST['message_n']." </h4>
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
}
      ?>
          </div>
          <!-- The Modal -->
		<div class="modal fade" id="myModal2">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">



		      <!-- Modal body -->
		      <div class="modal-body">
		      	<h2>KNOW MORE ABOUT US</h2>
		      	<button type="button" class="close" data-dismiss="modal">&times;</button>

		      	<div>
		      		<img id="send-image" src="">
		      	</div>
		        <div>
		        	<form method="post" class="pro-enq" action="">
				      <div class="pop-form">

				        <input type="hidden" name="name_post" id="post" class="hiddenname" value="Chicken Appetizers">
				        <input type="hidden" name="img_thumb" id="img" class="hiddenimage" value="">

				      <input type="text" id="name" name="name_n" placeholder="Name" class="form-input" required="">

				      <input type="email" id="email" name="email_n" placeholder="Email Address" class="form-input" required="">

				      <input type="tel" id="phone" name="phone_n" class="form-input" placeholder="Contact Number" required="">

				    <textarea rows="10" name="message_n" placeholder="Enquiry"></textarea>
				      <div class="submit-en">
				         <input type="submit" class="" name="submit_btn2" value="Send Enquiry">
				      </div>
				    </div>
				             </form>
		        </div>
		      </div>

		      <!-- Modal footer -->

		    </div>
		  </div>
		</div>

          <div class="post  machine-pre mobile-hide hidden-scroll visible animated fadeInUp">
              <div id="carouselExampleIndicators2" class="carousel slide " data-ride="carousel" data-interval="false" >
		        <div class="carousel-inner">
		          <div class="carousel-item active">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-PATTY-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-PAPRIKA-PATTY-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/chicken-tikka-patty.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item ">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/OVAL-SHAPED-PATTY-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/MUTTON-PAPRIKA-PATTY-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/PERI-PERI-MUTTON-MINCE-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item ">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/BRITISH-ROAST-MUTTON-MINCE-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/GRILLED-CHICKEN-MINCE-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-BURGER-PATTY-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>
		          <div class="carousel-item ">
		            <img class="d-block w-100" src="http://cfpl.net.in/images/CHICKEN-SCHNITZEL-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
		          </div>

		        </div>
		      </div>
          </div>
        </div>
    </div>
    <!--------Third--------->

    <div class="machine-sec">
      <div class="sub-machine-sec">
        <div class="post machine-pre hidden-scroll visible animated fadeInUp">
          <!--<img src="images/chicken-appetizers.jpg" alt="Chatha Foods" title="Chatha Foods">-->
          <div id="carouselExampleIndicators3" class="carousel slide " data-ride="carousel" data-interval="false" >
	        <div class="carousel-inner">
	          <div class="carousel-item active">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/SMOKED-FRANKS.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/SIMPLY-CLASSIC.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/ZESTY-PEPPER.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item ">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/HOT-ITALIAN-1.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/SAVOURY-SPICY.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>
	          <div class="carousel-item">
	            <img class="d-block w-100" src="http://cfpl.net.in/images/SMOKED-VIENNAS.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
	          </div>

	        </div>
	      </div>
        </div>
        <div  class="post machine-pre-content hidden-scroll visible animated fadeInUp" id="chicken-sausages">
          <h1>Fillers</h1>
          <div>Our veg fillers are versatile and delicious, ideal for enhancing your favorite recipes with wholesome goodness.</div>
          <div id="carouselExampleIndicators03" class="chatha-sub-products">
          	<ul class="">
			    <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="pro-active active"><a href="" title=""> CHICKEN FRANKS</a></li>
			    <li data-target="#carouselExampleIndicators3" data-slide-to="1"><a href="" title=""> SIMPLY CLASSIC</a></li>
			    <li data-target="#carouselExampleIndicators3" data-slide-to="2"><a href="" title=""> ZESTY PEPPER</a></li>

			</ul>
	        <ul>
	          	<li data-target="#carouselExampleIndicators3" data-slide-to="3"><a href="" title="">HOT ITALIAN</a></li>
	          	<li data-target="#carouselExampleIndicators3" data-slide-to="4"><a href="" title=""> SAVOURY & SPICY</a></li>
	          	<li data-target="#carouselExampleIndicators3" data-slide-to="5"><a href="" title="">SMOKED VIENNAS</a></li>

	        </ul>
          </div>

          <?php
if( isset($_POST['submit_btn3']) ){

$email_to = 'prashant_verma@cfpl.net.in';
 $to = 'prashant_verma@cfpl.net.in';
         $subject = "Product Enquiry";
         //$subject = "Wholesale Enquiry(".$_POST['subject'].")";


         $message = "<html><body>
  <center><h1 style='text-transform: capitalize'>Product Enquiry </h1>
   </center>
<table border='0' cellpadding='0' cellspacing='0' width='600' align='center' style='box-shadow: 3px 6px 22px gray'>


      <tr>

        <td align='center' valign='top' width='100%' class='templateColumnContainer'>
            <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                <tr>
                <td width='50%' >
                	<img width='100%' src=".$_POST['img_thumb']." >
                </td>
                    <td width='50%' class='rightColumnContent'>
                    <h2>".$_POST['name_post']." </h2>
<h4><b>Name:  </b>".$_POST['name_n']." </h4>

<h4><b>Email:  </b>".$_POST['email_n']." </h4>

<h4><b>Phone Number:  </b>".$_POST['phone_n']." </h4>

<h4><b>Query:  </b>".$_POST['message_n']." </h4>
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
}
      ?>

        </div>
      </div>
      <!-- The Modal -->
		<div class="modal fade" id="myModal3">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">



		      <!-- Modal body -->
		      <div class="modal-body">
		      	<h2>KNOW MORE ABOUT US</h2>
		      	<button type="button" class="close" data-dismiss="modal">&times;</button>

		      	<div>
		      		<img id="send-image" src="">
		      	</div>
		        <div>
		        	<form method="post" class="pro-enq" action="">
				      <div class="pop-form">

				        <input type="hidden" name="name_post" id="post" class="hiddenname" value="">
				        <input type="hidden" name="img_thumb" id="img" class="hiddenimage" value="">

				      <input type="text" id="name" name="name_n" placeholder="Name" class="form-input" required="">

				      <input type="email" id="email" name="email_n" placeholder="Email Address" class="form-input" required="">

				      <input type="tel" id="phone" name="phone_n" class="form-input" placeholder="Contact Number" required="">

				    <textarea rows="10" name="message_n" placeholder="Enquiry"></textarea>
				      <div class="submit-en">
				         <input type="submit" class="" name="submit_btn3" value="Send Enquiry">
				      </div>
				    </div>
				             </form>
		        </div>
		      </div>

		      <!-- Modal footer -->

		    </div>
		  </div>
		</div>
    </div>
</section>

<!--<div class="first-overlay"></div>-->
<!--<div class="second-overlay"></div>-->
<!--<div class="third-overlay"></div>-->


<script>
    document.addEventListener("DOMContentLoaded", function (){
       let header = document.querySelector("header");
       let footer = document.querySelector("footer");
       let body = document.querySelector("body");
       let veinWelcome = document.getElementById("vein-welcome");
       
       header.style.zIndex = "10";
       footer.style.zIndex = "10";
       body.style.position = "relative";
       veinWelcome.style.zIndex = "10";
    });
</script>
<?php include('footer.php');?>
