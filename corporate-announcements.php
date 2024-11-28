<?php include('header.php');?>
<style type="text/css">
  .chatha-investors{
        color: #d41f3d;
  }
  footer {
    margin-top: 100px !important;
  }
  .analyst-parent-section{
      width: 700px;
      border: 1px solid #E0E0E0;
      margin: auto;
      margin-top: 30px;
      padding-bottom: 20px;
  }
  .heading-section{
      width: 100%;
      text-align: left;
      background-color: #d41f3d;
      padding: 10px;
      /*margin-bottom: 20px;*/
      display: flex;
      align-items: center;
      justify-content: space-between;
      cursor: pointer;
  }
    .heading-section2{
      width: 100%;
      text-align: left;
      background-color: #d41f3d;
      padding: 10px;
      /*margin-bottom: 20px;*/
      display: flex;
      align-items: center;
      justify-content: space-between;
      cursor: pointer;
  }
  .heading-section2 span{
      color: white;
      font-size: 18px;
      font-weight: 500;
      letter-spacing: 1px;
  }
    .heading-section3{
      width: 100%;
      text-align: left;
      background-color: #d41f3d;
      padding: 10px;
      /*margin-bottom: 20px;*/
      display: flex;
      align-items: center;
      justify-content: space-between;
      cursor: pointer;
  }
  .heading-section3 span{
      color: white;
      font-size: 18px;
      font-weight: 500;
      letter-spacing: 1px;
  }
  .heading-section span{
      color: white;
      font-size: 18px;
      font-weight: 500;
      letter-spacing: 1px;
  }
  .analyst-children-section{
      width: 95%;
      border: 1px solid #E0E0E0;
      margin: auto;
      padding: 0.5px;
      margin-top: 30px;
  }
  .subHeading-section{
      width: 100%;
      text-align: left;
      background-color: #d41f3d;
      padding: 10px;
  }
  .subHeading-section span{
      color: white;
      font-size: 13px;
      letter-spacing: 1px;
      font-weight: 600;
  }
  .link-section{
      text-align: left;
      padding: 10px;
      border: 1px solid #E0E0E0;
  }
  .link-section a{
      font-size: 13px;
      text-decoration: underline;
  }
  .gray{
      background-color: #E0E0E0;
  }
  .downArrow{
      width: 25px;
      height: 25px;
      background-size: cover;
      object-fit: cover;
      filter: invert(1);
      cursor: pointer;
  }
    .dropdown-section {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }

    .dropdown-section.active {
        display: block;
        /*max-height: 600px; */
    }
    
    .dropdown-section2 {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }

    .dropdown-section2.active {
        display: block;
        /*max-height: 600px; */
    }
    
    .dropdown-section3 {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }

    .dropdown-section3.active {
        display: block;
        /*max-height: 600px; */
    }
    
    .pressRelease{
        margin-top: 30px;
    }
    
    .tradingWindow{a
        margin-top: 30px;
    }
  @media all and (max-width: 994px){
      .analyst-parent-section{
          width: 770px;
      }
  }
  
  @media all and (max-width: 767px){
      .analyst-parent-section{
          width: 600px;
      }
  }
  
  @media all and (max-width: 650px){
    .analyst-parent-section{
          width: 550px;
      }
  }
  
  @media all and (max-width: 600px){
    .analyst-parent-section{
          width: 500px;
      }
  }
  
  @media all and (max-width: 550px){
    .analyst-parent-section{
          width: 450px;
      }
  }
  
  @media all and (max-width: 450px){
    .analyst-parent-section{
          width: 400px;
      }
  }
  
  @media all and (max-width: 420px){
    .analyst-parent-section{
          width: 350px;
      }
  }
  
  @media all and (max-width: 400px){
    .analyst-parent-section{
          width: 330px;
      }
      
    .dropdown-section.active{
        max-height: 700px;
    }
  }
  
  @media all and (max-width: 350px){
    .analyst-parent-section{
          width: 300px;
      }
  }
</style>
<section id="vein-welcome">
<div class="container">
  <!--<ul class="post investors-list">
    <li><a href="documents/drhp.pdf" target="_blank">DRHP</a></li>
  </ul>-->
</div>
  <div class="analyst-parent-section">
      <div class="heading-section">
          <span>Analyst/Investor Meet</span>
          <img src="/documents/downArrow.png" class="downArrow"/>
      </div>
      <div class="dropdown-section">
      <div class="analyst-children-section">
          <div class="subHeading-section">
              <span>Intimation</span>
          </div>
          <div class="link-section">
              <a href="/documents/(April 04, 2024.).pdf" target="_blank">April 04, 2024</a>
          </div>
          <div class="link-section gray">
              <a href="/documents/(April 04, 2024).pdf" target="_blank">April 04, 2024</a>
          </div>
          <div class="link-section">
              <a href="/documents/(April 16, 2024).pdf" target="_blank">April 16, 2024</a>
          </div>
      </div>
      <div class="analyst-children-section">
          <div class="subHeading-section">
              <span>Investor Presentation</span>
          </div>
          <div class="link-section">
              <a href="/documents/Investor Presentation.pdf" target="_blank">Investor Presentation</a>
          </div>
      </div>
      <div class="analyst-children-section">
          <div class="subHeading-section">
              <span>Outcome</span>
          </div>
          <div class="link-section">
              <a href="/documents/Outcome- 04.04.2024.pdf" target="_blank">Outcome - (April 04, 2024)</a>
          </div>
          <div class="link-section gray">
              <a href="/documents/Outcome- 16.04.2024.pdf" target="_blank">Outcome - (April 16, 2024)</a>
          </div>
          <div class="link-section">
              <a href="/documents/Outcome- Transcript- 04.04.2024.pdf" target="_blank">Outcome - Transcript - (April 04, 2024)</a>
          </div>
          <div class="link-section gray">
              <a href="/documents/Outcome- Transcript- 16.04.2024.pdf" target="_blank">Outcome - Transcript - (April 16, 2024)</a>
          </div>
      </div>
      <div class="analyst-children-section">
          <div class="subHeading-section">
              <span>Audio/Video Recordings</span>
          </div>
          <div class="link-section">
              <a href="https://drive.google.com/file/d/15MJ7KajnSXEyBhOQLrrRsdf42s7ciUQP/view" target="_blank">Investor Call - (April 04, 2024)</a>
          </div>
          <div class="link-section gray">
              <a href="https://drive.google.com/file/d/1VvFUwwywhHLd_cp80yV7O-GQYgNt_wuN/view?usp=sharing" target="_blank">Investor Call - (April 16, 2024)</a>
          </div>
      </div>
      <div class="analyst-children-section">
          <div class="subHeading-section">
              <span>Call Transcript</span>
          </div>
          <div class="link-section">
              <a href="/documents/Call Transcript - (April 04 2024).pdf" target="_blank">Call Transcript - (April 04, 2024)</a>
          </div>
        <div class="link-section gray">
              <a href="/documents/Call Transcript-(April16,2024).pdf" target="_blank">Call Transcript - (April 16, 2024)</a>
          </div>
      </div>
      </div>
  </div>
  
  <div class="analyst-parent-section pressRelease">
      <div class="heading-section2">
          <span>Press Release/Media Release</span>
          <img src="/documents/downArrow.png" class="downArrow"/>
      </div>
      <div class="dropdown-section2">
      <div class="analyst-children-section">
          <div class="subHeading-section">
              <span>Press Release</span>
          </div>
          <div class="link-section">
              <a href="/documents/Press Release.pdf" target="_blank">Chatha Foods Limited Unveils Delectable Vegetarian Range - (April 06, 2024)</a>
          </div>
          <div class="link-section gray">
              <a href="/documents/Press Release (April 25, 2024).pdf" target="_blank">Press Release (April 25, 2024)</a>
          </div>
      </div>
      </div>
  </div>
  
    <div class="analyst-parent-section tradingWindow">
      <div class="heading-section3">
          <span>Closure of Trading Window</span>
          <img src="/documents/downArrow.png" class="downArrow"/>
      </div>
      <div class="dropdown-section3">
      <div class="analyst-children-section">
          <div class="link-section">
              <a href="/documents/Window Closure 31 March 2024.pdf" target="_blank">Window Closure 31 March 2024</a>
          </div>
      </div>
      </div>
  </div>
</section>
<script>
    let dropdownSection = document.querySelector(".dropdown-section");
    function toggleDropdown() {
        dropdownSection.classList.toggle("active");
        if (dropdownSection.classList.contains("active")) {
            dropdownSection.style.maxHeight = dropdownSection.scrollHeight + "px";
        } else {
            dropdownSection.style.maxHeight = "0";
        }
    }
    document.querySelector(".heading-section").addEventListener("click", toggleDropdown);
    
    
    
    
    let dropdownSection2 = document.querySelector(".dropdown-section2");
    function toggleDropdown2() {
        dropdownSection2.classList.toggle("active");
        if (dropdownSection2.classList.contains("active")) {
            dropdownSection2.style.maxHeight = dropdownSection2.scrollHeight + "px";
        } else {
            dropdownSection2.style.maxHeight = "0";
        }
    }
    document.querySelector(".heading-section2").addEventListener("click", toggleDropdown2);
    
    
    
    let dropdownSection3 = document.querySelector(".dropdown-section3");
    function toggleDropdown3() {
        dropdownSection3.classList.toggle("active");
        if (dropdownSection3.classList.contains("active")) {
            dropdownSection3.style.maxHeight = dropdownSection3.scrollHeight + "px";
        } else {
            dropdownSection3.style.maxHeight = "0";
        }
    }
    document.querySelector(".heading-section3").addEventListener("click", toggleDropdown3);
</script>
<?php include('footer.php');?>