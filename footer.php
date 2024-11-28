<style type="text/css">
    .italics-text{
        font-style: italic;
        color: black;
        margin-top: -13px;
        margin-bottom: -35px;
        font-size: 12px;
    }
    .social-media-section{
        width: 100%;
        display: flex;
        justify-content: flex-start;
        align-items: stretch;
        gap: 10px;
        /*margin-top: 10px;*/
        /*display: none;*/
        padding: 0px 0px 0px;
    }
    .social-media-section div{
        width: 35px;
        height: 35px;
        background-color: black;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        padding: 0px 0px 0px;
    }
    .social-media-section div img{
        width: 17px;
        height: 17px;
        background-size: cover;
        object-fit: cover;
        padding: 0px 0px 0px;
    }
    .social-media-section a:nth-child(3) div img{
        width: 18px;
        height: 18px;
    }
    
    @media all and (max-width: 400px){
    .social-media-section div{
        width: 25px;
        height: 25px;
    }
    .social-media-section div img{
        width: 12px;
        height: 12px;
        background-size: cover;
        object-fit: cover;
        padding: 0px 0px 0px;
    }
    .social-media-section a:nth-child(3) div img{
        width: 13px;
        height: 13px;
    }
    }
</style>
<footer>
	<div class="chatha-container post">
		<div class="footer-logo">
			<div class="left-logo">
				<a href="http://chathafoods.com/">
					<img src="images/chatha-foods-logo-footer.png" alt="Chatha Foods" title="Chatha Foods">
				</a>

			</div>
			<div class="right-logo">
				<div class="right-side-logo">
					<div class="log1" style="border-right: 1px solid #d71f3d;">
						<img src="images/nsf-logo.png" alt="Chatha Foods" title="Chatha Foods">
					</div>
					<!--<div class="log2">
						<img src="images/fssc-logo.png" alt="Chatha Foods" title="Chatha Foods">
					</div>-->
					<div class="log3" style="border-right: 1px solid #d71f3d;">
						<img src="images/fssai-logo.png" alt="Chatha Foods" title="Chatha Foods">
					</div>
					<div class="log3" style="border-right: 1px solid #d71f3d;">
						<img src="images/fssai-logo-2.png" alt="Chatha Foods" title="Chatha Foods">
					</div>
					<div class="log5" style="padding-top: 10px; padding-left: 12px;">
						<img src="images/brcgs-logo.png" alt="Chatha Foods" title="Chatha Foods">
					</div>
				</div>


			</div>
		</div>
		<div class="sec-footer">
			<div class="logo-footer">
				<ul>
					<li><a href="ourstory.php">Our Story</a></li>
					<li><a href="ourstory.php#msg-director">Message from Director</a></li>
					<li><a href="quality-assurance.php">Quality Assurance</a></li>
					<li><a href="ourstory.php#msg-director">Future Outlook</a></li>
				</ul>

			</div>
			<div class="navi-menu">
				<ul>
					<li><a href="process.php">Process & Infrastructure</a></li>
					<li><a href="products.php#chatha-institutional">Institutional Products</a></li>
					<li><a href="products.php#retail-products">Retail Products</a></li>
				</ul>
			</div>
			<div class="info-menu">
				<ul>
					<li><a href="contact.php">Enquiry</a></li>
					<li><a href="contact.php">Area Location</a></li>
					<li>
					    <div class="social-media-section" style="padding: 0px 0px 0px 0px; margin-top: 10px;">
					        <a href="https://www.facebook.com/chathafoods.official" target="_blank">
					            <div style="padding: 0px 0px 0px 0px;">
					               <img src="/images/facebook.png"/>
					            </div>
					        </a>
					        <a href="https://www.instagram.com/chathafoods.official" target="_blank">
					            <div style="padding: 0px 0px 0px 0px;">
					               <img src="/images/instagram.png"/>
					            </div>
					        </a>
					        <a href="https://www.linkedin.com/company/chatha-foods/" target="_blank">
					            <div style="padding: 0px 0px 0px 0px;">
					               <img src="/images/linkedin.png"/>
					            </div>
					        </a>
					    </div>
					</li>
					<!--<li><a href="#">CSR</a></li>-->
				</ul>
			</div>
			<div class="contact-menu">
				<span><strong>Chatha Foods Limited</strong><br><h5 class="italics-text" style="font-size: 12px;">(Formerly Chatha Foods Private Limited)</h5><br>Village Chaundheri, P.O. Dapper,<br> Chandigarh - Ambala Highway, <br> Distt. SAS Nagar, Punjab 140 506, India</span><br>
				<span>Ph.: +91-1762-506711</span><br>
				<span>Email : infochathafoods@cfpl.net.in</span>
			</div>
		</div>



	</div>
</footer>




<!--<script src="assets/js/vendor/jquery-slim.min.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
	<script src="assets/js/vendor/popper.min.js"></script>
	<script src="assets/js/vendor/bootstrap.min.js"></script>

	<script src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js">
    </script>

     <script>

   var planes = [
      ["Chatha Foods Private Limited, C/O Reliant Business Centre, SCO No. 60-62, 2nd Floor, Cabin No. 209 Sector 17C, Chandigarh-160017",30.739573,76.7823073],
     ["Village Chaundheri, P.O. Dappar, Chandigarh - Ambala Highway, Distt.Mohali, Punjab 140501 - India",30.5109621,76.7884362],
    //  ["7C6CA1",-41.49413,173.5421],
     // ["7C6CA2",-40.98585,174.50659],
     // ["C81D9D",-40.93163,173.81726],
     // ["C82009",-41.5183,174.78081],
     // ["C82081",-41.42079,173.5783],
     // ["C820AB",-42.08414,173.96632],
      //["C820B6",-41.51285,173.53274]
      ];

        var map = L.map('map').setView([30.739573, 76.7823073], 10);
        mapLink =
            '';
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: ' ' + mapLink + ' ',
            maxZoom: 18,
            }).addTo(map);

      for (var i = 0; i < planes.length; i++) {
         marker = new L.marker([planes[i][1],planes[i][2]])
            .bindPopup(planes[i][0])
            .addTo(map);
      }

      var map1 = L.map('map1').setView([30.739573, 76.7823073], 10);
        mapLink =
            '';
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: ' ' + mapLink + ' ',
            maxZoom: 18,
            }).addTo(map1);

      for (var i = 0; i < planes.length; i++) {
         marker = new L.marker([planes[i][1],planes[i][2]])
            .bindPopup(planes[i][0])
            .addTo(map1);
      }

    </script>

	<!--<script src="js/bootstrap-4-navbar.js"></script>-->

	<!---Start Owlcarousel--->
	<!--<script src="../js/owlcarousel/owl.carousel.js"></script>-->
	<script>

      /* $(document).ready(function() {
          var owl = $('#ora-carousel .owl-carousel');
          owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
              0: {
                items: 1
              },
              600: {
                items: 2
              },
              1000: {
                items: 3
              }
            }
          })

          var owll = $('#ora-portfolio-main .owl-carousel');
          owll.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
              0: {
                items: 1
              },
              600: {
                items: 2
              },
              1000: {
                items: 2
              }
            }
          })


        });*/

      </script>
      <!---End Owlcarousel--->

      <!--paroller.js-->
	  <!--<script src="js/jquery.paroller.js"></script>
	  <script>
	  		//jQuery.noConflict();
		    jQuery(document)
		        .ready(function () {
		            //initialize paroller.js
		            jQuery('[data-paroller-factor]').paroller();
		            //initialize paroller.js and set options for elements with .paroller class
		            /*$('.paroller-example').paroller({
		                factorXs: 0.1,
		                factorSm: 0.1,
		                factorMd: -0.4,
		                factorLg: -0.5,
		                factorXl: -0.6,
		                factor: -0.4,
		                type: 'foreground',
		                direction: 'horizontal'
		            });*/
		        });
		</script>-->

		<!-- animation ---->
		<script src="js/viewportchecker.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function() {
			  jQuery('.post').addClass("hidden-scroll").viewportChecker({
			      classToAdd: 'visible animated fadeInUp', // Class to add to the elements when they are visible
			      offset: 20
			     });
			  });
		</script>

		<!------ Popup slider-------->
		<!--<script>


      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
      }
    </script>-->

    <!------Home background Video-------->
	<!--<script src="js/jquery.vide.js"></script>-->



	<!--<script>
		jQuery(window).scroll(function() {
		    var scroll = jQuery(window).scrollTop();

		    if (scroll >= 200) {
		        jQuery("header .vein-container nav").addClass("condense-top");


		    } else {
		        jQuery("header .vein-container nav").removeClass("condense-top");

		    }
		});
	</script>-->
	 <!----Loader---->
	<!--<script type="text/javascript">
		jQuery(window).load(function() {
		    jQuery(".loader").fadeOut("slow");
		});
	</script>-->

	<!--<script src="../js/jquery.krakatoa.js"></script>-->
	<script>

			//jQuery(window).on('load',function(){
			//	jQuery('.krakatoa').krakatoa();

	</script>
	<script type="text/javascript">
		/*$(document).ready(function() {
			jQuery(".chatha-sub-products ul li").click(function(){
			var goto = Number( $(this).attr('data-slide-to') );
			jQuery("#carouselExampleIndicators1").carousel(goto);
			jQuery(".chatha-sub-products ul li").removeClass("pro-active");
					jQuery(this).addClass("pro-active");

			});
		});*/

	</script>
	 <script type="text/javascript">

		jQuery(function($){
			/*$(document).ready(function(){
    $(".enquire_label").click(function(){
        alert("The paragraph was clicked.");
    });
});*/




			$(document).ready(function() {




			$("#carouselExampleIndicators01 ul li").click(function(){
			 var goto = Number( $(this).attr('data-slide-to') );
		  $("#carouselExampleIndicators01").carousel(goto);

				$("#carouselExampleIndicators01 ul li").removeClass("pro-active");
				$(this).addClass("pro-active");

		});

			/*******/
				$("#carouselExampleIndicators02 ul li").click(function(){
			 var goto = Number( $(this).attr('data-slide-to') );
		  $("#carouselExampleIndicators02").carousel(goto);

				$("#carouselExampleIndicators02 ul li").removeClass("pro-active");
				$(this).addClass("pro-active");

		});


			/***********/

				$("#carouselExampleIndicators020 ul li").click(function(){
			 var goto = Number( $(this).attr('data-slide-to') );
		  $("#carouselExampleIndicators020").carousel(goto);

				$("#carouselExampleIndicators020 ul li").removeClass("pro-active");
				$(this).addClass("pro-active");

		});


			/***********/

			$("#carouselExampleIndicators03 ul li").click(function(){
			 var goto = Number( $(this).attr('data-slide-to') );
		  $("#carouselExampleIndicators03").carousel(goto);

				$("#carouselExampleIndicators03 ul li").removeClass("pro-active");
				$(this).addClass("pro-active");

		});


			/***********/

			$("#carouselExampleIndicators04 ul li").click(function(){
			 var goto = Number( $(this).attr('data-slide-to') );
		  $("#carouselExampleIndicators04").carousel(goto);

				$("#carouselExampleIndicators04 ul li").removeClass("pro-active");
				$(this).addClass("pro-active");

		});


			/***********/

				$("#carouselExampleIndicators040 ul li").click(function(){
			 var goto = Number( $(this).attr('data-slide-to') );
		  $("#carouselExampleIndicators040").carousel(goto);

				$("#carouselExampleIndicators040 ul li").removeClass("pro-active");
				$(this).addClass("pro-active");

		});


			/***********/


			$("#carouselExampleIndicators05 ul li").click(function(){
			 var goto = Number( $(this).attr('data-slide-to') );
		  $("#carouselExampleIndicators05").carousel(goto);

				$("#carouselExampleIndicators05 ul li").removeClass("pro-active");
				$(this).addClass("pro-active");

		});


			/***********/
			$("#carouselExampleIndicators06 ul li").click(function(){
			 var goto = Number( $(this).attr('data-slide-to') );
		  $("#carouselExampleIndicators06").carousel(goto);

				$("#carouselExampleIndicators06 ul li").removeClass("pro-active");
				$(this).addClass("pro-active");

		});


			/***********/

				$("#carouselExampleIndicators060 ul li").click(function(){
			 var goto = Number( $(this).attr('data-slide-to') );
		  $("#carouselExampleIndicators060").carousel(goto);

				$("#carouselExampleIndicators060 ul li").removeClass("pro-active");
				$(this).addClass("pro-active");

		});


			/***********/


			$(".enquire_label01").click(function(){
		var image_val = $('#carouselExampleIndicators1 .carousel-inner .carousel-item.active img').attr('src');

		var pro_val = $('#carouselExampleIndicators01 ul li.pro-active a').html();

		//alert(image_val);
		$('#myModal1 #send-image').attr('src', image_val);
		//$('.').attr('src', image_val);
		$('#myModal1 .hiddenimage').val(image_val);
		$('#myModal1 .hiddenname').val(pro_val);

		});

		/********************/

			$(".enquire_label02").click(function(){
		var image_val = $('#carouselExampleIndicators2 .carousel-inner .carousel-item.active img').attr('src');

		var pro_val = $('#carouselExampleIndicators02 ul li.pro-active a').html();

		//alert(image_val);
		$('#myModal2 #send-image').attr('src', image_val);
		//$('.').attr('src', image_val);
		$('#myModal2 .hiddenimage').val(image_val);
		$('#myModal2 .hiddenname').val(pro_val);

		});

		/********************/

			$(".enquire_label03").click(function(){
		var image_val = $('#carouselExampleIndicators3 .carousel-inner .carousel-item.active img').attr('src');

		var pro_val = $('#carouselExampleIndicators03 ul li.pro-active a').html();

		//alert(image_val);
		$('#myModal3 #send-image').attr('src', image_val);
		//$('.').attr('src', image_val);
		$('#myModal3 .hiddenimage').val(image_val);
		$('#myModal3 .hiddenname').val(pro_val);

		});

		/********************/

			$(".enquire_label04").click(function(){
		var image_val = $('#carouselExampleIndicators4 .carousel-inner .carousel-item.active img').attr('src');

		var pro_val = $('#carouselExampleIndicators04 ul li.pro-active a').html();

		//alert(image_val);
		$('#myModal4 #send-image').attr('src', image_val);
		//$('.').attr('src', image_val);
		$('#myModal4 .hiddenimage').val(image_val);
		$('#myModal4 .hiddenname').val(pro_val);

		});

		/********************/

			$(".enquire_label05").click(function(){
		var image_val = $('#carouselExampleIndicators5 .carousel-inner .carousel-item.active img').attr('src');

		var pro_val = $('#carouselExampleIndicators05 ul li.pro-active a').html();

		//alert(image_val);
		$('#myModal5 #send-image').attr('src', image_val);
		//$('.').attr('src', image_val);
		$('#myModal5 .hiddenimage').val(image_val);
		$('#myModal5 .hiddenname').val(pro_val);

		});

		/********************/

			$(".enquire_label06").click(function(){
		var image_val = $('#carouselExampleIndicators6 .carousel-inner .carousel-item.active img').attr('src');

		var pro_val = $('#carouselExampleIndicators06 ul li.pro-active a').html();

		//alert(image_val);
		$('#myModal6 #send-image').attr('src', image_val);
		//$('.').attr('src', image_val);
		$('#myModal6 .hiddenimage').val(image_val);
		$('#myModal6 .hiddenname').val(pro_val);

		});

		/********************/

			$(".enquire_label020").click(function(){
		var image_val = $('#carouselExampleIndicators2mob .carousel-inner .carousel-item.active img').attr('src');

		var pro_val = $('#carouselExampleIndicators020 ul li.pro-active a').html();

		//alert(image_val);
		$('#myModal20 #send-image').attr('src', image_val);
		//$('.').attr('src', image_val);
		$('#myModal20 .hiddenimage').val(image_val);
		$('#myModal20 .hiddenname').val(pro_val);

		});

		/********************/

		$(".enquire_label040").click(function(){
		var image_val = $('#carouselExampleIndicators4mob .carousel-inner .carousel-item.active img').attr('src');

		var pro_val = $('#carouselExampleIndicators040 ul li.pro-active a').html();

		//alert(image_val);
		$('#myModal40 #send-image').attr('src', image_val);
		//$('.').attr('src', image_val);
		$('#myModal40 .hiddenimage').val(image_val);
		$('#myModal40 .hiddenname').val(pro_val);

		});

		/********************/

		$(".enquire_label060").click(function(){
		var image_val = $('#carouselExampleIndicators6mob .carousel-inner .carousel-item.active img').attr('src');

		var pro_val = $('#carouselExampleIndicators060 ul li.pro-active a').html();

		//alert(image_val);
		$('#myModal60 #send-image').attr('src', image_val);
		//$('.').attr('src', image_val);
		$('#myModal60 .hiddenimage').val(image_val);
		$('#myModal60 .hiddenname').val(pro_val);

		});

		/********************/


			});


		});


    </script>

</body>
</html>
