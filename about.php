<?php 
$title = "About Us";
$keywords = "";
$description = "";
require_once 'include/header.php';

?>
   <!-- about section start -->
   <div class="about_section layout_padding padding_top_90">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="about_taital">About Softwares</h1>
               <p class="about_text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in
                  a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                  Latin professor at Hampden</p>
               <div class="read_bt"><a href="#">Read More</a></div>
            </div>
            <div class="col-md-6">
               <div><img src="<?php echo $fullUrl;?>assets/images/img-1.png" class="image_1"></div>
            </div>
         </div>
      </div>
   </div>
   <!--about section end -->
    <?php 

require_once 'include/footer.php';

?>