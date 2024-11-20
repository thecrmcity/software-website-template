<?php 
$title = "Software";
$keywords = "";
$description = "";
require_once 'include/header.php';

?>
   <!--software section start -->
   <div class="clearfix"></div>
   <div class="software_page clearfix">
      <div class="container">
         <h1 class="software_title">Our Software</h1>
         <p class="software_para">Our Software is a collection of projects, applications, and code samples that demonstrate your skills, experience, and expertise as a software developer. It serves as a visual resume, showcasing your ability to design, develop, and maintain software systems. A well-crafted portfolio can be a powerful tool for attracting potential employers, clients, or collaborators.</p>
         <div class="software_section_2 layout_padding">
            <div class="owl-carousel">
               <div>
                  <img src="<?php echo $fullUrl;?>assets/images/software/security-software.png" class="image_6">
                  <h4 class="ipsum_text">Khap Security Software</h4>
               </div>
               <div>
                  <img src="<?php echo $fullUrl;?>assets/images/software/feedback.png" class="image_6">
                  <h4 class="ipsum_text">Khap Feedback Software,</h4>
               </div>
               <div>
                  <img src="<?php echo $fullUrl;?>assets/images/software/headset-cover.png" class="image_6">
                  <h4 class="ipsum_text">Feedback Software</h4>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--software section end -->
   <?php 

require_once 'include/footer.php';

?>