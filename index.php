<?php include('header.php');?>
<style type="text/css">
  .chatha-home{
        color: #d41f3d;
  }
  
  .dropdown_section-products2{
       z-index: 11;
       background-color: white;
       position: absolute;
       padding: 5px;
       left: 0px;
       top: 30px;
       box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px !important;
       opacity: 0;
       visibility: hidden;
       transition: opacity 0.3s linear, visibility 0.3s linear, top 0.3s linear;
       padding-bottom: 15px;
  }
  
  .dropdown_section-products2 a{
      padding: 0px 10px !important;
      margin-bottom: -10px !important;
      background: transparent !important;
      color: black !important;
  }

  .dropdown_section-products2.show-dropdown2{
       opacity: 1 !important;
       visibility : visible !important;
       top: 65px;
  }
  
  @media only screen and (min-width: 1111px) {
    #vein-welcome .chatha-container .innovate-mob h1:before {
        width: 30% !important;
    }
    
     #vein-welcome .chatha-container .innovate-mob h1:after {
        width: 30% !important;
    }
  }
</style>
<section id="vein-welcome">

  <div class="chatha-container res-full">
    <div class="vein-hero-slider post">
      <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          <!--<div class="carousel-item active">-->
          <!--  <a href="products.php">-->
          <!--    <img class="d-block w-100" src="images/product-slider.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->
          <!--  </a>-->
          <!--</div>-->
          
          
          <!--<div class="carousel-item active">-->
          <!--  <a href="process.php">-->
          <!--    <img class="d-block w-100" src="images/Multiverse Banner.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->
          <!--  <a href="products.php">-->
          <!--</div>-->
          
          
          <div class="carousel-item active">
            <a href="process.php">
              <img class="d-block w-100" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods" id="carousel-image1" loading="lazy">
            <a href="products.php">
          </div>
          <div class="carousel-item">
            <a href="ourstory.php">
              <img class="d-block w-100" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods" id="carousel-image2" loading="lazy">
            </a>
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev">
          <img  src="images/left-arrow-red.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next">
          <img  src="images/right-arrow-red.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
        </a>
      </div>
    </div>
  </div>

  <!--<div class="chatha-container res-full mobile-show">-->
  <!--  <div class="vein-hero-slider post">-->
  <!--    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">-->
  <!--      <div class="carousel-inner">-->
            
  <!--        <div class="carousel-item active">-->
  <!--          <a href="products.php">-->
  <!--            <img class="d-block w-100" src="images/product-slider-m.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->
  <!--          </a>-->
  <!--        </div>-->
          
  <!--        <div class="carousel-item active">-->
  <!--          <a href="process.php">-->
  <!--            <img class="d-block w-100" src="images/Multiverse Banner Mobile.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->
  <!--          <a href="products.php">-->
  <!--        </div>-->
          
          
  <!--        <div class="carousel-item active">-->
  <!--          <a href="process.php">-->
  <!--            <img class="d-block w-100" src="images/quality-assurance-slide-m.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->
  <!--          </a>-->
  <!--        </div>-->
  <!--        <div class="carousel-item">-->
  <!--          <a href="ourstory.php">-->
  <!--            <img class="d-block w-100" src="images/process-and-infrastructure-slide-m.jpg" alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->
  <!--          </a>-->
  <!--        </div>-->
  <!--      </div>-->
        <!-- Left and right controls -->
  <!--      <a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev">-->
  <!--        <img  src="images/left-arrow-red.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods" style="width: 15px; height: 27px;">-->
  <!--      </a>-->
  <!--      <a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next">-->
  <!--        <img  src="images/right-arrow-red.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods" style="width: 15px; height: 27px;">-->
  <!--      </a>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->

  <div class="chatha-container ">
      <div class=" welcome-mob-content post">
        <span class="chatha-sm-container">
            Founded in 1997, Chatha Foods Limited is one of India’s recognised frozen food processor, serving top QSRs(Quick Serving Restaurants), CDRs (Casual Dining Restaurants), and other players in the HoReCa (Hotel-Restaurant-Catering) segment. Our manufacturing facilities and systems are <strong> BRC Certified. </strong>
        </span>
      </div>
      <div class="innovate-mob post">
        <h1><span>Innovation & Meat</span></h1>
        <div>
          <img  src="images/plant.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <h2>State-of-the-art plant</h2>
          <div>With the most sophisticated machinery installed, our state-of-the-art plant has a production capacity of 500 tonnes per month.</div>
        </div>
        <div>
          <img  src="images/raw-meat.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <h2>Best quality raw meat</h2>
          <div>Our raw meat is sourced only from approved suppliers, and is supplied with a certificate assuring its quality.</div>
        </div>
         <div>
          <img  src="images/hygenic.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <h2>Modern & hygienic facilities</h2>
          <div>The most modern and hygienic facilities and processes are present all throughout the plant.</div>
        </div>
         <div class="lt-child-mob">
          <img  src="images/german-tech.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <h2>Cutting-edge German technology</h2>
          <div class="lt-child-mob">The most premium quality products are produced, batch after batch, owing to the cutting-edge German technology our plant possesses.</div>
        </div>
      </div>
    </div>
    <div class="machine-sec">
      <div class="sub-machine-sec">
        <div class="post machine-pre">
          <img  src="images/plant-house.jpg"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
        </div>
        <div class="post machine-pre-content">
          <h2>Our well-equipped plant houses up-to-the minute machinery,</h2>
          <div>backed by hi-tech technology, capable of effortlessly meeting the ever-increasing demands arising from our associations with leading international and national QSRs. The raw meat entering our plant undergoes several extremely hygienic and modern processes before being packaged and sent out to the market. At every stage, taste and quality are kept as the topmost priorities.</div>
        <!--  <div class="dropdown">-->
        <!--      <a style="cursor: pointer" class="chatha-products2" title="Explore our plant">Explore our plant</a>-->
        <!--      <div class="dropdown_section-products2" aria-labelledby="navbarDropdown" style="width: 200px; padding: 5px;">-->
			     <!--<a class="dropdown-item" href="veg-product.php">Vegetarian Plant</a>-->
			     <!--<a class="dropdown-item" href="process.php">Non-Vegetarian Plant</a>-->
		      <!--</div>-->
        <!--  </div>-->
              <a style="cursor: pointer" class="chatha-products2" title="Explore our plant" href="process.php">Explore our plant</a>
        </div>
      </div>
    </div>

     <div class="machine-sec">
        <div class="sub-machine-sec">
          <div class="post  machine-pre mobile-show">
              <img  src="images/processed-meat-products.jpg"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          </div>
          <div class="post   machine-pre-content">
            <h2>Our ultimate goal is to produce top-notch processed meat products, </h2>
            <div>known for both their premium quality as well as delectable taste. It is with this aim that we began our journey in 1998. And today, after almost twenty years of hard-work and dedication put in by our team, we have earned the title of one of the most sought-after processed meat manufacturers in India.
             </div>
            <a href="ourstory.php" title="">Read our Story</a>
          </div>
          <div class="post  machine-pre mobile-hide">
              <img  src="images/processed-meat-products.jpg"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          </div>
        </div>
    </div>
    <div class="post chatha-container mob-our-products">
      <h1>Our Products</h1>
      <span class="products-see">
        <a href="products.php" >See All Products</a>
      </span>
      <div class="main-product-mob">
        <div>
          <a href="products.php#chicken-appetizers" title="">
            <img  src="images/chicken-appetizers.jpg"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
            <h3>Chicken Appetizers</h3>
          </a>
        </div>
        <div>
          <a href="products.php#chicken-patty" title="">
            <img  src="images/chicken-patties.jpg"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
            <h3>Chicken Patties</h3>
          </a>
        </div>
        <div>
          <a href="products.php#chicken-sausages" title="">
            <img  src="images/chicken-sausages.jpg"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
            <h3>Chicken Sausages</h3>
          </a>
        </div>
        <div>
          <a href="products.php#sliced-meat" title="">
            <img  src="images/sliced-meat.jpg"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
            <h3>Sliced Meat</h3>
          </a>
        </div>
        <div>
          <a href="products.php#toppings" title="">
            <img  src="images/topping-and-fillers.jpg"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
            <h3>Toppings & Fillers</h3>
          </a>
        </div>
        <div>
          <a href="products.php#other-options" title="">
            <img  src="images/other-options.jpg"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
            <h3>Other Options</h3>
          </a>
        </div>
      </div>
      <div class="product-mob-content">
         <span class="">
            For years, we have been supplying premium quality meat products to the leading international chains like<strong> Domino's, Subway, Burger King</strong> nd many more, in India. Our successful associations have won us many praises and accolades, including nomination for the<strong> ‘Best Supplier of the Year (Pan Asia)’</strong> award by Subway, for the year 2018.

        </span>
      </div>
      <div class="company-logo-mob post">
        <h1><span>Our Associates</span></h1>
        <div class="asso-content">
          Optimum reach with international & local QSRs
        </div>
        <div class="comp-main-logo">
          <img  src="images/dominos-pizza.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/ccd.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/burger-king.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/subway.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <!--<img  src="images/pvr.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->
          <!--<img  src="images/srs.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->

          <!--<img  src="images/royce-rolls.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->
          <img  src="images/roll-xpress.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/nik-bakers.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">

          <img  src="images/burger-singh.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/burger-farm.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/ihop.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <!--<img  src="images/broaster.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->
          <img  src="images/pizzeria.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/boston-bites.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <!--<img  src="images/super-donuts.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->
          <!--<img  src="images/fun-bytes.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->
          <img  src="images/burgrill.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <!--<img  src="images/pita-pita.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->
          <!--<img  src="images/belgian-fries.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->
          <!--<img  src="images/the-lawerences-school.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->
          <img  src="images/blue-tribe.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/cafe-chocolicious.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/cafeteria.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/green-bird.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/hfc.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/pfc-foods.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/plantmade.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/applebees.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/chills.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/cineline.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/hongs-kitchen.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/hyper-pure.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/plantway.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/pro-meat.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/quality-nz.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/ricos.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/shaky-harry.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/taco-bell.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <img  src="images/tata.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
          <!--<img  src="images/wok-express.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">-->
          <img  src="images/chinese-wok.png"  alt="Chatha Foods" title="Chatha Foods" alt="Chatha Foods">
        </div>
      </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function (){
        let carouselImage1 = document.getElementById("carousel-image1");
        let carouselImage2 = document.getElementById("carousel-image2");
        if(window.innerWidth < 992){
            carouselImage1.src = "images/quality-assurance-slide-m.jpg";
            carouselImage2.src = "images/process-and-infrastructure-slide-m.jpg";
        }
        else{
            carouselImage1.src = "images/quality-assurance-slide.jpg";
            carouselImage2.src = "images/process-and-infrastructure-slide.jpg";
        }
    });
    
    let chathaProducts2 = document.querySelector(".chatha-products2");
    let dropdownProducts2 = document.querySelector(".dropdown_section-products2");
    
    chathaProducts2.addEventListener("click", function (){
       if (dropdownProducts2.classList.contains("show-dropdown2")) {
          dropdownProducts2.classList.remove("show-dropdown2");
       } else {
          dropdownProducts2.classList.add("show-dropdown2");
       }
    });
</script>
<?php include('footer.php');?>
