
<?php


$baseurl = dirname(__DIR__);

require_once $baseurl.'/config/config.php';

getbaseHeader();
gettitleHeader($title,$keywords,$description);
geturlHeader($fullUrl)

?>



<body>
   <!--header section start -->
   <div class="header_section">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="logo"><a href="<?php echo $fullUrl;?>index.php"><img src="<?php echo $fullUrl;?>assets/images/new-khap.png" width="50" height="50"><span class="main_title"> Khap Software</span></a></div>
         <div class="mr-auto"><a href="<?php echo $fullUrl;?>software.php" class="getcontact">Get Free Trial Software</a> </div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item">
                  <a class="nav-link" href="<?php echo $fullUrl;?>index.php">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="<?php echo $fullUrl;?>about.php">About</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="<?php echo $fullUrl;?>software.php">Our Software</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="<?php echo $fullUrl;?>services.php">Services</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="<?php echo $fullUrl;?>contact.php">Contact Us</a>
               </li>
            </ul>
         </div>
      </nav>
      <div class="banner_main">
         <h1 class="banner_taital">We Build Best</h1>
         <h1 class="banner_taital_1">ERP & CRM Software</h1>
         <p class="banner_text">Revolutionize your workflow with Khap software — a powerful, intuitive software designed to streamline operations and boost productivity. </p>
         <div class="btn_main">
            <div class="more_bt"><a href="<?php echo $fullUrl;?>contact.php">Contact Us</a></div>
            <div class="contact_bt border"><a href="<?php echo $fullUrl;?>project-us.php">Give Us Project</a></div>
         </div>
      </div>
   </div>
   <!--header section end -->
    <!--costume header section start -->
   <div class="costume_header">
      <div class="container">
         <div class="menu_main">
            <ul>
               <li class="<?php echo $basename == 'index.php' ? 'active' : ''; ?>"><a href="<?php echo $fullUrl;?>index.php">Home</a></li>
               <li class="<?php echo $basename == 'about.php' ? 'active' : ''; ?>"><a href="<?php echo $fullUrl;?>about.php">About</a></li>
               <li class="<?php echo $basename == 'software.php' ? 'active' : ''; ?>"><a href="<?php echo $fullUrl;?>software.php">Our Software</a></li>
               <li class="<?php echo $basename == 'services.php' ? 'active' : ''; ?>"><a href="<?php echo $fullUrl;?>services.php">Services</a></li>
               <li class="<?php echo $basename == 'contact.php' ? 'active' : ''; ?>"><a href="<?php echo $fullUrl;?>contact.php">Contact Us</a></li>
            </ul>
         </div>
         <div class="menu_main_1">
            <ul class="ml-auto">
               <li><a href="#">Hire Developer</a></li>
               
            </ul>
         </div>
      </div>
   </div>
   <!--costume header section end -->