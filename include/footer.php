<!--footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-sm-6">
               <div class="footer_logo"><img src="<?php echo $fullUrl;?>assets/images/khap-white.png" width="50" hieght="50"> <span class="footer_title">Khap Software</span></div>
               <p class="dolor_text">we are a team of passionate software developers, engineers, and innovators dedicated to transforming ideas into cutting-edge digital solutions. Since our inception, we have been committed to pushing the boundaries of technology, delivering custom software that drives businesses forward.</p>
            </div>
            <div class="col-lg-3 col-sm-6">
               <h4 class="address_text">Adderes</h4>
               <p class="dolor_text">New Delhi, India</p>
               <p class="dolor_text">(+91) 9650891653</p>
               <p class="dolor_text">contactkhap@gmail.com</p>
            </div>
            <div class="col-lg-4 col-sm-12">
               <h4 class="address_text">Newsletter</h4>
               <form class="" method="POST" action="<?php echo $fullUrl;?>config/functions.php">
                  
               <div class="form-group">
                  <input type="text" class="mail_text" placeholder="Enter your email" name="subemail">   
               </div>
               <div class="form-group mt-3">
                  <input type="submit" name="subscribes" value="Subscribe" class="btn btn-info float-right">   
               </div>
               </form>
               
               
            </div>
         </div>
         <div class="social_icon">
            <ul>
               <li><a href="#"><img src="<?php echo $fullUrl;?>assets/images/fb-icon.png"></a></li>
               <li><a href="#"><img src="<?php echo $fullUrl;?>assets/images/twitter-icon.png"></a></li>
               <li><a href="#"><img src="<?php echo $fullUrl;?>assets/images/linkedin-icon.png"></a></li>
               <li><a href="#"><img src="<?php echo $fullUrl;?>assets/images/instagram-icon.png"></a></li>
            </ul>
         </div>
      </div>
   </div>
   <!--footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="copyright_text">Copyright <?php echo date('Y');?> All Right Reserved </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="<?php echo $fullUrl;?>assets/js/jquery.min.js"></script>
   <script src="<?php echo $fullUrl;?>assets/js/popper.min.js"></script>
   <script src="<?php echo $fullUrl;?>assets/js/bootstrap.bundle.min.js"></script>
   <script src="<?php echo $fullUrl;?>assets/js/jquery-3.0.0.min.js"></script>
   <script src="<?php echo $fullUrl;?>assets/js/plugin.js"></script>
   <!-- sidebar -->
   <script src="<?php echo $fullUrl;?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="<?php echo $fullUrl;?>assets/js/custom.js"></script>
   <!-- javascript -->
   <script src="<?php echo $fullUrl;?>assets/js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
   <script>
      var $owl = $('.owl-carousel');

      $owl.children().each(function (index) {
         $(this).attr('data-position', index); // NB: .attr() instead of .data()
      });

      $owl.owlCarousel({
         center: true,
         loop: true,
         items: 3,
      });

      $(document).on('click', '.owl-item>div', function () {
         // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
         var $speed = 300;  // in ms
         $owl.trigger('to.owl.carousel', [$(this).data('position'), $speed]);
      });

   </script>
</body>

</html>