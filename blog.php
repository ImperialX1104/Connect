<?php
   include('admin/connection.inc.php');
   
   
   $slug = explode("/", $_SERVER['REQUEST_URI']);
   if(count($slug)<3 || $slug[2]==""){
       echo '<script>window.location="/blogpost";</script>';
   }
   $slug =$slug[2];
   $res=mysqli_query($con,"SELECT * FROM blogpost WHERE slug='$slug'");
   $previousBlog=mysqli_query($con,"SELECT slug FROM blogpost WHERE slug > '$slug' ORDER BY slug ASC LIMIT 1");
   if(mysqli_num_rows($previousBlog)>0){
       $previousBlog=mysqli_fetch_assoc($previousBlog);
   }else{
       $previousBlog="";
   }
   
   $nextBlog=mysqli_query($con,"SELECT slug FROM blogpost WHERE slug < '$slug' ORDER BY slug DESC LIMIT 1");
   if(mysqli_num_rows($nextBlog)>0){
       $nextBlog=mysqli_fetch_assoc($nextBlog);
   }else{
       $nextBlog="";
   }
   
   if(mysqli_num_rows($res)>0){
     $fetch_blog=mysqli_fetch_assoc($res);
   }else{
       echo '<script>window.location="/all-blogs";</script>';
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title><?php echo $fetch_blog["title"];?></title>
      <meta content="<?php echo $fetch_blog["description"];?>" name="description">
      <meta content="<?php echo $fetch_blog["keywords"];?>" name="keywords">
      <meta name="robots" content="index, follow">
      <meta name="theme-color" content="#e84a5f">
      <meta property="og:title" content='<?php echo $fetch_blog["title"];?>'>
      <meta property="og:description" content='<?php echo $fetch_blog["description"];?>'>
      <meta property="og:image" content="/assets/img/blog/<?php echo $fetch_blog["banner"];?>">
      <meta property="og:url" content="https://connect-app.in/blog/<?php echo $fetch_blog["slug"];?>">
      <meta property="og:type" content="Blog">
      <!-- Favicons -->
      <link href="/assets/img/favicon.ico" rel="icon">
      <link href="/assets/img/favicon.ico" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      <!-- Main CSS File -->
      <link href="/assets/css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="/assets/css/froala-editor.pkgd.min.css">
      <!-- =======================================================
         * Template Name: Connect-App
         * Updated: July 20 2023 with Bootstrap v5.3.0
         * Developer: Offensive Technology
         ======================================================== -->
   </head>
   <body>
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top d-flex align-items-center">
         <div class="container d-flex justify-content-between align-items-center">
            <div class="logo py-3">
               <a href="/"><img src="/assets/img/logo.png" alt="conect logo" class = "img-fluid"></a>
            </div>
            <nav id="navbar" class="navbar">
               <ul>
                  <li><a  href="/">Home</a></li>
                  <li><a class="active" href="/blogpost">Blog</a></li>
                  <li><a  href="contact">Contact Us</a></li>
                  <li class="dropdown">
                     <a href="#"><span>Other's</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="privacy-policy">Privacy Policy</a></li>
                        <li><a href="term-and-condition">T&C</a></li>
                     </ul>
                  </li>
               </ul>
               <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- navbar -->
         </div>
      </header>
      <!-- End Header -->
      <main id="main">
         <!-- ======= Single Blog Section ======= -->
         <section class="hero-section inner-page">
            <div class="wave">
               <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                     <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
                     </g>
                  </g>
               </svg>
            </div>
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-12">
                     <div class="row justify-content-center">
                        <div class="col-md-10 text-center hero-text">
                           <h1 data-aos="fade-up" data-aos-delay=""><?php echo $fetch_blog["title"];?></h1>
                           <p class="mb-5" data-aos="fade-up" data-aos-delay="100"><?php echo $fetch_blog["date"];?> &bullet; By <a class="text-white"><?php echo $fetch_blog["author"];?></a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Blog container -->
         <section class="site-section mb-4">
            <div class="container">
               <div class="mt-3">
                  <img src="/assets/img/blog/<?php echo $fetch_blog['banner'] ?>" class="img-thumbnail" style="max-height:350px;" alt="<?php echo $fetch_blog['title'] ?>">
               </div>
               <div class="row mt-4">
                  <div class="col-md-8 text-justify">
                      <div class="blog-content px-3 pt-3">
                     <?php echo $fetch_blog["content"];?>
                     </div>
                  </div>
                  <div class="col-md-4 sidebar">
                     <div class="sidebar-box">
                        <div class="categories">
                           <li><a >Date <span><?php echo $fetch_blog["date"];?></span></a></li>
                           <li><a>Author <span><?php echo $fetch_blog["author"];?></span></a></li>
                           <li><a >Tags <span><?php echo $fetch_blog["keywords"];?></span></a></li>
                        </div>
                     </div>
                     <div class="social-share">
                        <a id="whatsapp-social-button" href="#" target="_blank" rel="nofollow"><i class="bi bi-whatsapp"></i></a>
                        <a id="facebook-social-button" href="#" target="_blank" rel="nofollow"><i class="bi bi-facebook"></i></a>
                        <a id="twitter-social-button" href="#" target="_blank" rel="nofollow"><i class="bi bi-twitter"></i></a>
                        <a id="linkedin-social-button" href="#" target="_blank" rel="nofollow"><i class="bi bi-linkedin"></i></a>
                        <a id="reddit-social-button" href="#" target="_blank" rel="nofollow"><i class="bi bi-reddit"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Blog container End -->
      </main>
      <!-- End #main -->
      <hr>
      <!-- ======= Footer ======= -->
      <footer class="footer" role="contentinfo">
         <div class="container">
            <div class="row">
               <div class="col-md-4 mb-4 mb-md-0">
                  <h3>About Us</h3>
                  <p>"Connect: A dating app
                     supporting mentally ill and shy individuals.
                     Mindful matching, safety, and community-driven
                     support for genuine connections and empathy in relationships.".
                  </p>
                  <p class="social">
                     <a href="#"><span class="bi bi-twitter"></span></a>
                     <a href="#"><span class="bi bi-facebook"></span></a>
                     <a href="#"><span class="bi bi-instagram"></span></a>
                  </p>
               </div>
               <div class="col-md-8 mb-4 mb-md-0 text-md-end">
                  <h3>Downloads</h3>
                  <ul class="list-unstyled">
                     <li><a href="#">Get from the Play Store</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="justify-content-center text-center">
            <div class="col-md-12">
               <p class="copyright">&copy; <?php echo date("Y"); ?> Connect. All Rights Reserved</p>
               <div class="credits">Designed by Offensive Technology</div>
            </div>
         </div>
      </footer>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <!-- Vendor JS Files -->
      <script src="/assets/vendor/aos/aos.js"></script>
      <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
      <!-- Template Main JS File -->
      <script src="/assets/js/main.js"></script>
      <script src="/assets/js/social-share.js"></script>
      <script src="/assets/js/froala_editor.pkgd.min.js"></script>
   </body>
</html>