<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?php
    // Get the page title based on the current page URL
    $pageTitle = '';
    $baseURL = 'https://' . $_SERVER['HTTP_HOST'];
    $currentPage = $_SERVER['REQUEST_URI'];
    $currentURL = $baseURL . $currentPage;
    // Explode the current page URL by '/' delimiter
    $urlComponents = explode('/', $currentPage);

    // Get the last component of the URL (page name)
    $pageName = end($urlComponents);

    $indexActive = "";
    $contactActive = "";
    $otherActive = "";
    $description = "";

    // Map page name to the corresponding title
    switch ($pageName) {
        case '':
             $pageTitle = 'Home';
            $indexActive = "active";
            $contactActive = "";
            $otherActive = "";
            $description = "Connect-App: A dating app supporting mentally ill and shy individuals. Mindful matching, safety, and community-driven support for genuine connections and empathy in relationships.";
            break;
        case 'index':
            $pageTitle = 'Home';
            $indexActive = "active";
            $contactActive = "";
            $otherActive = "";
            $description = "Connect-App: A dating app supporting mentally ill and shy individuals. Mindful matching, safety, and community-driven support for genuine connections and empathy in relationships.";
            break;
        case 'blogpost':
        $pageTitle = 'Blog';
        $blogActive = "active";
        $contactActive = "";
        $otherActive = "";
        $description = "";
            break;
        case 'features':
            $pageTitle = 'Features';
            $indexActive = "";
            $contactActive = "";
            $otherActive = "";
            $description = "Discover the exciting features of 'Connect', a dating app designed to support mentally ill and shy individuals. Explore mindful matching, safety measures, and a community-driven support system for genuine connections and empathy in relationships. Learn how 'Connect' revolutionizes online dating for a more inclusive and meaningful experience.";
            break;
        case 'contact':
            $pageTitle = 'Contact Us';
            $indexActive = "";
            $contactActive = "active";
            $otherActive = "";
            $description = "Contact to get in touch with our team. We're address your concerns, and provide support. Reach out to us for any inquiries related to our dating app supporting mentally ill and shy individuals.";
            break;
        case 'privacy-policy':
            $pageTitle = 'Privacy Policy';
            $indexActive = "";
            $contactActive = "";
            $otherActive = "active";
            $description = "Read the privacy policy of Connect-App to understand how we collect, use, and protect your personal information. Our privacy policy outlines our commitment to safeguarding your data and ensuring a secure and respectful experience on our dating app.";
            break;
        case 'term-and-condition':
            $pageTitle = 'Terms & Conditions';
            $indexActive = "";
            $contactActive = "";
            $otherActive = "active";
            $description = "Review the terms and conditions of Connect-App to understand the guidelines and rules governing the use of our dating app. Our terms and conditions cover important aspects such as user responsibilities, content usage, privacy, and more. By using our app, you agree to comply with these terms for a safe and enjoyable experience.";
            break;
        default:
            $pageTitle = 'Unknown Page';
            $indexActive = "";
            $contactActive = "";
            $otherActive = "";
            $description = "Oops! The page you're looking for does not exist. Explore the Connect-App to find genuine connections, empathetic relationships, and support for mentally ill and shy individuals. Visit our homepage or contact us to learn more about our dating app.";
            break;
    }

    echo '<title>Connect- ' . $pageTitle . '</title>';
    ?>
    <meta content="<?php echo $description; ?>" name="description">
    <meta content="Dating app, mentally ill, shy individuals, mindful matching, safety, community-driven support, genuine connections, empathy, relationships" name="keywords">
    <meta name="robots" content="index, follow">

    <meta name="theme-color" content="#e84a5f">

    <meta property="og:title" content="Connect-App::<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="assets/img/favicon.ico">
    <meta property="og:url" content="<?php echo $currentURL; ?>">
    <meta property="og:type" content="website">


    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/favicon.ico" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

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
                <a href="/"><img src="assets/img/logo.png" alt="conect logo" class = "img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="<?php echo $indexActive; ?>" href="/">Home</a></li>
                     <li><a class="<?php echo $blogActive; ?>" href="blogpost">Blog</a></li>
                    <li><a class="<?php echo $contactActive; ?>" href="contact">Contact Us</a></li>
                    <li class="dropdown"><a class="<?php echo $otherActive; ?>" href="#"><span>Other's</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="privacy-policy">Privacy Policy</a></li>
                            <li><a href="term-and-condition">T&C</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav><!-- navbar -->
        </div>
    </header><!-- End Header -->