<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Chatha Foods">
  	<meta name="keywords" content="Chatha Foods">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta property="og:title" content="Chatha Foods" />
	<meta property="og:url" content="http://cfpl.net.in/" />
	<meta property="og:description" content="Chatha Foods">
	<meta property="og:image" content="http://cfpl.net.in/images/chatha-foods-logo-header.png">


	<title>Chatha Foods</title>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7/leaflet.css"
    />
    <script src='https://www.google.com/recaptcha/api.js'></script>


<style>

html, body{
    overflow-x: hidden;
}

.nav-item{
    text-align: center;
    margin-bottom: 20px;
}

.dropdown_section-investors{
    z-index: 10;
    background-color: white;
    position: absolute;
    padding: 10px;
    left: 0;
    top: 50px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s linear, visibility 0.3s linear, top 0.3s linear;
    padding-bottom: 20px;
}

.dropdown_section-process{
    z-index: 10;
    background-color: white;
    position: absolute;
    padding: 5px;
    right: 0;
    top: 50px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s linear, visibility 0.3s linear, top 0.3s linear;
    padding-bottom: 15px;
}

.dropdown_section-products{
    z-index: 11;
    background-color: white;
    position: absolute;
    padding: 5px;
    right: -100px;
    top: 50px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s linear, visibility 0.3s linear, top 0.3s linear;
    padding-bottom: 15px;
}

.show-dropdown{
    opacity: 1;
    visibility : visible;
    top: 30px;
}

.dropdown{
    position: relative;
}

.dropdown-item{
    margin-top: 10px;
}

.dropdown_section-investors a{
    text-align: left !important;
}

.dropdown_section-process a{
    text-align: left !important;
}

.dropdown_section-products a{
    text-align: left !important;
}

@media all and (max-width: 1400px){
    .dropdown_section-investors{
      left: -150px;
    }
}

@media all and (max-width: 1200px){
    .dropdown_section-investors{
        left: -200px;
    }
    
    .dropdown_section-process a{
      left: -80%;
    }
}

@media all and (max-width: 940px){
    .dropdown_section-investors{
        left: -250px;
    }
    
    .dropdown_section-process a{
      left: -100%;
    }
}

@media all and (max-width: 900px){
    .dropdown_section-investors{
        left: -300px;
    }
    
    .dropdown_section-process a{
      left: -140%;
    }
}

@media all and (max-width: 895px){
    .dropdown_section-investors{
        left: 0px;
    }
}

@media all and (max-width: 815px){
    .dropdown_section-investors{
        left: -30vw;
    }
    
    .dropdown_section-process a{
      left: -30vw;
    }
}

@media all and (max-width: 800px){
    .dropdown_section-products{
      right: -10px;
    }
}

@media all and (max-width: 767px){
    .dropdown_section-investors{
        left: 3vw;
        padding-top: 0px;
    }
    
    .dropdown_section-process{
      left: 3vw;
      padding-top: 0px;
    }
    
    .dropdown_section-products{
      left: 3vw;
      padding-top: 0px;
    }
}
</style>

</head>
<body>
	<header>
	  <div class="chatha-container">
	    <div class="main-row">
	      <nav class="navbar navbar-expand-lg ">
	        <div class="main-site-logo">
	        	<a class="navbar-brand post" href="http://cfpl.net.in/"><img src="images/chatha-foods-logo-header.png" alt="Chatha Foods" title="Chatha Foods"></a>
	        </div>

			<button class="navbar-toggler post" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse justify-content-end post" id="navbarTogglerDemo03">
	          <ul class="navbar-nav">
	            <li class="nav-item active">
	              <a class="nav-link chatha-home" href="index.php">Home</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link chatha-ourstory" href="ourstory.php">Our Story</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link chatha-quality" href="quality-assurance.php">Quality Assurance</a>
	            </li>
	      <!--      <li class="nav-item dropdown">-->
				   <!--     <a class="nav-link chatha-process" href="#">-->
				   <!--       Process and Infrastructure ▾-->
				   <!--     </a>-->
				   <!--     <div class="dropdown_section-process" aria-labelledby="navbarDropdown">-->
				   <!--         <a class="dropdown-item" href="veg-product.php">Vegetarian Plant</a>-->
				   <!--       <a class="dropdown-item" href="process.php">Non-Vegetarian Plant</a>-->
				   <!--     </div>-->
			    <!--</li>-->
			    
			    
			    <li class="nav-item dropdown">
				        <a class="nav-link chatha-process" href="process.php">
				          Process and Infrastructure
				        </a>
			    </li>
			    
	            
	            
	      <!--      <li class="nav-item dropdown">-->
				   <!--     <a class="nav-link chatha-products" href="#">-->
				   <!--       Products ▾-->
				   <!--     </a>-->
				   <!--     <div class="dropdown_section-products" aria-labelledby="navbarDropdown">-->
				   <!--       <a class="dropdown-item" href="#">Vegetarian</a>-->
				   <!--       <a class="dropdown-item" href="products.php">Non-Vegetarian</a>-->
				   <!--     </div>-->
			    <!--</li>-->
			    
			    
			    
			    <li class="nav-item dropdown">
				        <a class="nav-link chatha-products" href="products.php">
				          Products
				        </a>
			    </li>
	            
	            
	            
	            
	            
	            
	            <!--<li class="nav-item">-->
	            <!--    <a class="nav-link chatha-customizarion-pro" href="#">-->
	            <!--        Customization Pro-->
	            <!--    </a>-->
	            <!--</li>-->
					<li class="nav-item dropdown">
				        <a class="nav-link chatha-investors" href="#">
				          Investors ▾
				        </a>
				        <div class="dropdown_section-investors" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="ipo.php">IPO</a>
				          <a class="dropdown-item" href="investor.php">Disclosure Under Regulation 46 of SEBI LODR</a>
				        </div>
			      	</li>
	            <li class="nav-item">
	              <a class="nav-link chatha-contact" href="contact.php">Contact</a>
	            </li>
	          </ul>
	        </div>
	      </nav>
	    </div>
	  </div>
	</header>
	<script>
	let chathaInvestors = document.querySelector(".chatha-investors");
    let dropdown = document.querySelector(".dropdown_section-investors");
    
    let chathaProcess = document.querySelector(".chatha-process");
    let dropdownProcess = document.querySelector(".dropdown_section-process");
    
    let chathaProducts = document.querySelector(".chatha-products");
    let dropdownProducts = document.querySelector(".dropdown_section-products");

    chathaInvestors.addEventListener("click", function (){
       if (dropdown.classList.contains("show-dropdown")) {
          dropdown.classList.remove("show-dropdown");
       } else {
          dropdown.classList.add("show-dropdown");
       }
    });
    
    chathaProcess.addEventListener("click", function (){
       if (dropdownProcess.classList.contains("show-dropdown")) {
          dropdownProcess.classList.remove("show-dropdown");
       } else {
          dropdownProcess.classList.add("show-dropdown");
       }
    });
    
    chathaProducts.addEventListener("click", function (){
       if (dropdownProducts.classList.contains("show-dropdown")) {
          dropdownProducts.classList.remove("show-dropdown");
       } else {
          dropdownProducts.classList.add("show-dropdown");
       }
    });
   </script>
