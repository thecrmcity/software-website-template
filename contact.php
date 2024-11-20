<?php 
$title = "Contact Us";
$keywords = "";
$description = "";
require_once 'include/header.php';

?>
   <!--contact section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <h1 class="work_taital">Get In Touch</h1>
      </div>
   </div>
   <div class="contact_section_2">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 padding_0">
               <div><img src="<?php echo $fullUrl;?>assets/images/img-10.png" class="image_10"></div>
            </div>
            <div class="col-md-6">
               <form class="" method="POST" action="<?php echo $fullUrl;?>config/functions.php">
               <div class="email_text">
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Name" name="fullname" required>
                  </div>
                  <div class="form-group">
                     <input type="email" class="email-bt" placeholder="Email" name="useremail" required>
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Phone Numbar" name="userphone" required>
                  </div>
                  <div class="form-group">
                     <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="message" required></textarea>
                  </div>
                  <div class="form-group"><input type="submit" class="btn btn-primary px-5" value="Send" name="contactform"></div>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!--contact section end -->
   <?php 

require_once 'include/footer.php';

?>