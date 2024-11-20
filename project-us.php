<?php 
$title = "Give Us Project";
$keywords = "";
$description = "";
require_once 'include/header.php';

?>
   <!--contact section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <h1 class="work_taital">Give Us Projects</h1>
      </div>
   </div>
   <div class="contact_section_2">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 padding_0">
               <div><img src="<?php echo $fullUrl;?>assets/images/img-1.png" class="image_10"></div>
            </div>
            <div class="col-md-6 p-5">
               <form class="" method="POST" action="<?php echo $fullUrl;?>config/functions.php">
                  <label>Project Name *</label>
                        <input type="text" name="proname" class="form-control" required>
                  <div class="form-group row">
                     <div class="col-md-6 col-lg-6">
                        <label>Full Name *</label>
                        <input type="text" name="fullname" class="form-control" required>
                     </div>
                     <div class="col-md-6 col-lg-6">
                        <label>Email *</label>
                        <input type="email" name="fullemail" class="form-control" required>
                     </div>

                  </div>
                  <div class="form-group row">
                     <div class="col-md-6 col-lg-6">
                        <label>Mobile Number *</label>
                        <input type="text" name="mobile" class="form-control" required>
                     </div>
                     <div class="col-md-6 col-lg-6">
                        <label>Company Name *</label>
                        <input type="text" name="company" class="form-control" required>
                     </div>

                  </div>
                  <div class="form-group">
                     <label class="font-weight-bold">Project Type *</label>
                     <div class="form-check">
                     
                     <label class="form-check-label" for="radio1">
                        <input type="radio" name="protype" value="Finance" required id="radio1" class="form-check-input"> Finance
                     </label>
                     </div>
                     <div class="form-check">
                     
                     <label class="form-check-label" for="radio2">
                        <input type="radio" name="protype" value="Non-Finance" required id="radio2" class="form-check-input"> Non-Finance
                     </label>
                  </div>
                  <div class="form-check">
                     
                     <label class="form-check-label" for="radio3">
                        <input type="radio" name="protype" value="Factory" required id="radio3" class="form-check-input"> Factory
                     </label>
                  </div><div class="form-check">
                     
                     <label class="form-check-label" for="radio4">
                        <input type="radio" name="protype" value="Small Office" required id="radio4" class="form-check-input"> Small Office
                     </label>
                  </div><div class="form-check">
                     
                     <label class="form-check-label" for="radio5">
                        <input type="radio" name="protype" value="Farm" required id="radio5" class="form-check-input"> Farm
                     </label>
                  </div><div class="form-check">
                     
                     <label class="form-check-label" for="radio6">
                        <input type="radio" name="protype" value="Technical" required id="radio6" class="form-check-input"> Technical
                     </label>
                  </div><div class="form-check">
                     
                     <label class="form-check-label" for="radio7">
                        <input type="radio" name="protype" value="Non-Technical" required id="radio7" class="form-check-input"> Non-Technical
                     </label>
                  </div>
                  </div>
                  <div class="form-group">
                     <label class="font-weight-bold">Document Type *</label>
                     <div class="form-check">
                      <label class="form-check-label" for="radio8">
                         <input type="radio" name="doctype" value="New Development" required id="radio8" class="form-check-input"> New Development
                      </label>
                  </div><div class="form-check">
                      <label class="form-check-label" for="radio9">
                         <input type="radio" name="doctype" value="Redevelopment" required id="radio9" class="form-check-input"> Redevelopment
                      </label>
                  </div>
                     
                  </div>
                  <div class="form-group">
                     <label>Project Details *</label>
                     <textarea class="form-control" name="prodetails" required rows="5"></textarea>
                  </div>
                  <div class="form-group">
                     <input type="submit" name="giveproject" class="btn btn-info px-5">
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