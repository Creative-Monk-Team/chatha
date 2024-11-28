<?php include('header.php');?>
<style type="text/css">
  .chatha-investors{
        color: #d41f3d;
  }
  /*footer {*/
  /*  margin-top: 400px !important;*/
  /*}*/
  
  .grid-box-ipo{
      width: 100%;
      display: grid;
      grid-template-columns: repeat(3, 33%);
      align-items: stretch;
      justify-content: space-between;
      gap: 20px;
      margin-top: 10px;
  }
  
  .grid-box-ipo a{
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 10px;
      border: none;
      padding: 30px 10px;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
  }
  
  @media all and (max-width: 700px){
    .grid-box-ipo{
      grid-template-columns: repeat(1, 100%);
    }
  }
</style>
<section id="vein-welcome">
<div class="container">
    <!--<div class="grid-box-ipo">-->
    <!--    <a href="documents/drhp.pdf" target="_blank">DRHP</a>-->
    <!--    <a href="documents/RHP.pdf" target="_blank">RHP</a>-->
    <!--    <a href="documents/prospectus.pdf" target="_blank">Prospectus</a>-->
    <!--</div>-->
    
    <ul style="list-style: disc; line-height: 1.5;">
        <li><a href="documents/drhp.pdf" target="_blank">DRHP</a>
        <li><a href="documents/RHP.pdf" target="_blank">RHP</a></li>
        <li><a href="documents/prospectus.pdf" target="_blank">Prospectus</a></li></li>
    </ul>
</div>
</section>


<?php include('footer.php');?>
