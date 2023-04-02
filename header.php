
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Squadfree Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo bloginfo('template_url'); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo bloginfo('template_url'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo bloginfo('template_url'); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo bloginfo('template_url'); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo bloginfo('template_url'); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo bloginfo('template_url'); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo bloginfo('template_url'); ?>/assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between position-relative">

      <div class="logo">
      <?php 
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
//print_r($image );
if(!empty($image)){ ?>
  <div class="logo ">  <img src="<?php echo $image[0]; ?>"  alt=""></div>
    <?php } 

?>
      </div>

      <nav id="navbar" class="navbar">
        <div>
<?php
      wp_nav_menu( array( 
    'theme_location' => 'header-menu',
     'container' => 'li',
    'menu_class'=> 'navbar-nav mr-auto',
     ) ); 
?>
           </div>
        
          
      </nav><!-- .navbar -->

    </div>
   
  </header>
  <div style="height:100px;width:100%;margin:10px"></div>

  