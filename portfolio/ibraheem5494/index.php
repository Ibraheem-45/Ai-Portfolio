<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include $_SERVER['DOCUMENT_ROOT'] . "/Auto_Portfolio_Generated/connection.php";

// home_data
$homeSql = "SELECT * FROM home_data ORDER BY id DESC LIMIT 1";
$homeResult = mysqli_query($connection, $homeSql);

if(mysqli_num_rows($homeResult) > 0){
    $homeData = mysqli_fetch_assoc($homeResult);
    $title1 = $homeData['title1'];
    $title2 = $homeData['title2'];
    $title3 = $homeData['title3'];
}

// about_data

$aboutSql = "SELECT * FROM about_data ORDER BY id DESC LIMIT 1";
$aboutResult = mysqli_query($connection, $aboutSql);

if(mysqli_num_rows($aboutResult) > 0){
    $aboutData = mysqli_fetch_assoc($aboutResult);
}

// skill_data

$skillSql = "SELECT * FROM skill_data ORDER BY id DESC LIMIT 1";
$skillResult = mysqli_query($connection, $skillSql);

if(mysqli_num_rows($skillResult)){
    $skillData = mysqli_fetch_assoc($skillResult);
}

// progect_data

$progectSql = "SELECT * FROM progect_data ORDER BY id DESC LIMIT 1";
$progectResult = mysqli_query($connection, $progectSql);

if(mysqli_num_rows($progectResult) > 0){
    $progectData = mysqli_fetch_assoc($progectResult);
}

// service data

$serviceSql = "SELECT * FROM services_data ORDER BY id DESC LIMIT 1";
$serviceResult = mysqli_query($connection, $serviceSql);

if(mysqli_num_rows($serviceResult) > 0){
    $serviceData = mysqli_fetch_assoc($serviceResult);
}

// testimonial_data

$testimonialSql = "SELECT * FROM testimonial_data ORDER BY id DESC LIMIT 1";

$testimonialResult = mysqli_query($connection, $testimonialSql);

if(mysqli_num_rows($testimonialResult)){
    $testData = mysqli_fetch_assoc($testimonialResult);
}else{
    echo "Testimonia Invaid";
}

// contact data

$contactSql = "SELECT * FROM contact_data ORDER BY id DESC LIMIT 1";
$contactResult = mysqli_query($connection, $contactSql);

if(mysqli_num_rows($contactResult) > 0){
    $contactData = mysqli_fetch_assoc($contactResult);
};




session_start();
$theme = 'default-theme'; // Set default theme

if (!empty($_SESSION['selected_theme'])) {
    $theme = $_SESSION['selected_theme'];
}


?> 

<!DOCTYPE html>
<html lang="en" data-theme="<?= $theme ?>">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ibraheem Awan">
    <meta name="description"
        content="Create a stunning personal portfolio without coding. Our auto portfolio generator helps students, freelancers, and designers build their digital identity easily.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords"
        content="portfolio generator, auto portfolio builder, no-code website, student portfolio, freelancer website, personal portfolio, online identity">

    <!-- assets/style.css -->
     <link rel="stylesheet" href="/Auto_Portfolio_Generated/assets/style.css">

    <!-- font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- typed.js cdn -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js" defer></script>

    <!--  FIRST: GSAP Core -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"
        integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- THEN: ScrollTrigger Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js" defer></script>

    <!-- assets/script.js -->
     <script src="/Auto_Portfolio_Generated/assets/script.js" defer></script>


    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Lobster&family=Playfair+Display&display=swap" rel="stylesheet">

    <title>Auto Portfolio Generator - Create Portfolio Without Coding</title>
</head>

<body>

    <!-- loading -->

    <div class="loading-page">
    <svg width="100" height="100" viewBox="0 0 100 100">
      <circle cx="50" cy="50" r="45" stroke-width="10" fill="none" stroke-dasharray="283" stroke-dashoffset="75" stroke-linecap="round">
        <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="1.2s" repeatCount="indefinite" />
      </circle>
    </svg>
            <div class="logo-name">Skillora</div>
        </div>
    </div>

    <div class="body-cursor"></div>
    <div class="cursor"></div>
    <div class="overlay"></div>

    <header>
        <nav class="navbar">
            <h1 class="logo">Skillora</h1>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#progect">Progect</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#testimonial">Testimonial</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <div class="right-items">
                <div class="icon-box">
                    <button class="icon-btn"><i class="fa-solid fa-sun"></i></button>
                </div>
                <div class="button-box">
                    <button class="contact-btn">Contact</button>
                </div>
                <!-- responsive -->
                <div class="hamburger" id="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>

        <!-- Home section -->

        <section id="home">
            <div class="home-content">
                <h1>Hi👋🏻 I'm <span>
                        <?php echo $homeData['name']?>
                    </span></h1>
                <h3>I am a <span class="smart_text"></span></h3>
                <div id="type-data" data-title1="<?php echo $title1; ?>" data-title2="<?php echo $title2; ?>"
                    data-title3="<?php echo $title3; ?>">
                </div>
                <p>
                    <?php echo $homeData['description']?>
                </p>
                <div class="social-icon">
                    <a href="<?php echo $homeData['facebook']?>" target="_blank"><img src="images//twitter.svg"
                            alt=""></a>
                    <a href="<?php echo $homeData['linkedin']?>" target="_blank"><img src="images//github.svg"
                            alt=""></a>
                    <a href="<?php echo $homeData['github']?>" target="_blank"><img src="images//linkedin.svg"
                            alt=""></a>
                </div>

                <div class="btn-group">
                      <a href="/Auto_Portfolio_Generated/cv/<?php echo $homeData['cv_upload']; ?>" download class="btn1 overlay-btn" style="text-decoration: none;"><span>Download CV</span></a>

                    <button class="btn2"><span>Hire Me</span></button>
                </div>
            </div>

            <div class="home-img">
                 <img src="/Auto_Portfolio_Generated/images/<?php echo $homeData['profileImage']; ?>">
            </div>
        </section>
    </header>


    <!-- about section styling -->

    <section class="about" id="about">
        <div class="line-box"></div>

        <!-- about-container -->
        <div class="about-container container">
            <div class="row">
                <div class="col-1">
                    <img src="/Auto_Portfolio_Generated/images/<?php echo $aboutData['aboutImage']?>" alt="Profile">
                </div>
                <div class="col-2">
                    <h1>About Me</h1>
                    <p class="about-p">
                        <?php echo $aboutData['description']?>
                    </p>

                    <div class="tab-title">
                        <div class="tab-links active" data-tab="skills">Skills</div>
                        <div class="tab-links" data-tab="experience">Experience</div>
                        <div class="tab-links" data-tab="education">Education</div>
                    </div>

                    <div class="tab-content skills active-content" id="skills">
                        <ul>
                            <li>
                                <span>
                                    <?php echo $skillData['skill1'];?>
                                </span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 95%;"></div>
                                </div>
                            </li>
                            <li>
                                <span>
                                    <?php echo $skillData['skill2'];?>
                                </span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%;"></div>
                                </div>
                            </li>
                            <li>
                                <span>
                                    <?php echo $skillData['skill3'];?>
                                </span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%;"></div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content timeline" id="experience">
                        <ul>
                            <li>
                                <?php echo $skillData['experience1'];?>
                            </li>
                            <li>
                                <?php echo $skillData['experience3'];?>
                            </li>
                            <li>
                                <?php echo $skillData['experience3'];?>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content timeline" id="education">
                        <ul>
                            <li>
                                <?php echo $skillData['education1'];?>
                            </li>
                            <li>
                                <?php echo $skillData['education2'];?>
                            </li>
                            <li>
                                <?php echo $skillData['education3'];?>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- progect section -->

    <section class="progect" id="progect">
        <div class="line-box"></div>
        <div class="progect-content">
            <h1>My Works</h1>
            <p>
                <?php echo $progectData['mywork'];?>
            </p>
        </div>

        <div class="progect-container">
            <div class="progect-box">
                <a href=""><img src="/Auto_Portfolio_Generated/images/<?php echo $progectData['progect1Image']?>" alt="" loading="lazy"></a>
                <div class="overlay">
                    <div class="overlay-content">
                        <h3>
                            <?php echo $progectData['progect1'];?>
                        </h3>
                        <p>
                            <?php echo $progectData['progect1Desc'];?>
                        </p>
                        <a href="<?php echo $progectData['progect1Link']?>">View More</a>
                    </div>
                </div>

            </div>
            <div class="progect-box">
                <img src="/Auto_Portfolio_Generated/images/<?php echo $progectData['progect2Image'];?>" alt="" loading="lazy">
                <div class="overlay">
                    <div class="overlay-content">
                        <h3>
                            <?php echo $progectData['progect2'];?>
                        </h3>
                        <p>
                            <?php echo $progectData['progect2Desc'];?>
                        </p>
                        <a href="<?php echo $progectData['progect2Link'];?>">View More</a>
                    </div>
                </div>

            </div>
            <div class="progect-box">
                <img src="/Auto_Portfolio_Generated/images/<?php echo $progectData['progect3Image'];?>" alt="" loading="lazy">
                <div class="overlay">
                    <div class="overlay-content">
                        <h3>
                            <?php echo $progectData['progect3'];?>
                        </h3>
                        <p>
                            <?php echo $progectData['progect3Desc'];?>
                        </p>
                        <a href="<?php echo $progectData['progect3Link'];?>">View More</a>
                    </div>
                </div>

            </div>
            <div class="progect-box">
                <img src="/Auto_Portfolio_Generated/images/<?php echo $progectData['progect4Image'];?>" alt="" loading="lazy">
                <div class="overlay">
                    <div class="overlay-content">
                        <h3>
                            <?php echo $progectData['progect4'];?>
                        </h3>
                        <p>
                            <?php echo $progectData['progect4Desc'];?>
                        </p>
                        <a href="4<?php echo $progectData['progect4Link'];?>">View More</a>
                    </div>
                </div>

            </div>
            <div class="progect-box">
                <img src="/Auto_Portfolio_Generated/images/<?php echo $progectData['progect5Image'];?>" alt="" loading="lazy">
                <div class="overlay">
                    <div class="overlay-content">
                        <h3>
                            <?php echo $progectData['progect5'];?>
                        </h3>
                        <!-- <p>Short description of your awesome project goes here.</p> -->
                        <p>
                            <?php echo $progectData['progect5Desc'];?>
                        </p>
                        <a href="<?php echo $progectData['progect5Link'];?>">View More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- services section -->

    <section class="services" id="service">
        <div class="line-box"></div>



        <div class="services-content">
            <h1>Services</h1>
            <p>
                <?php echo $serviceData['myservice']?>
            </p>
        </div>

        <div class="services-container container">
            <div class="services-box">
                <div class="services-info">
                    <i class="fa-solid fa-tools"></i>
                    <h4>
                        <?php echo $serviceData['service1']?>
                    </h4>
                    <p>
                        <?php echo $serviceData['service1Desc']?>
                    </p>
                </div>
            </div>

            <div class="services-box">
                <div class="services-info">
                    <i class="fa-solid fa-briefcase"></i>
                    <h4>
                        <?php echo $serviceData['service2']?>
                    </h4>
                    <p>
                        <?php echo $serviceData['service2Desc']?>
                    </p>
                </div>
            </div>

            <div class="services-box">
                <div class="services-info">
                    <i class="fa-solid fa-cogs"></i>
                    <h4>
                        <?php echo $serviceData['service3']?>
                    </h4>
                    <p>
                        <?php echo $serviceData['service3Desc']?>
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- testimonial section -->

    <section class="testimonial" id="testimonial">
        <div class="line-box"></div>
        <div class="testimonial-content">
            <h1>Testimonial</h1>
            <p><?php echo $testData['myTest']?></p>
        </div>

            <div class="testimonial-container">
                <div class="testimonial-box">
                    <img src="/Auto_Portfolio_Generated/images/<?php echo $testData['test1Image']?>" alt="">
                    <div class="content-info">
                        <h2><?php echo $testData['test1Name']?></h2>
                        <p><?php echo $testData['test1Feedback']?></p>
                        <div class="box-icon">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>

      <div class="testimonial-box">
                    <img src="/Auto_Portfolio_Generated/images/<?php echo $testData['test2Image']?>" alt="">
                    <div class="content-info">
                        <h2><?php echo $testData['test2Name']?></h2>
                        <p><?php echo $testData['test2Feedback']?></p>
                        <div class="box-icon">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>

                  <div class="testimonial-box">
                    <img src="/Auto_Portfolio_Generated/images/<?php echo $testData['test3Image']?>" alt="">
                    <div class="content-info">
                        <h2><?php echo $testData['test3Name']?></h2>
                        <p><?php echo $testData['test3Feedback']?></p>
                        <div class="box-icon">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>           
            </div>
    </section>


    <!-- contact section -->

    <section class="contact" id="contact">
        <div class="line-box"></div>
        <div class="contact-container">
            <div class="contact-info">
                <h2>Get in Touch</h2>

                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <span>
                        <?php echo $contactData['email']?>
                    </span>
                </div>

                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <span>
                        <?php echo $contactData['number']?>
                    </span>
                </div>

                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>
                        <?php echo $contactData['adress']?>
                    </span>
                </div>
            </div>

            <div class="contact-form">
                <h2>Contact Form</h2>
                <form id="contactForm" novalidate>
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" placeholder="Your full name" />

                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com">

                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Subject (optional)">

                    <label for="message">Message *</label>
                    <textarea id="message" name="message" placeholder="Write your message here..."></textarea>

                    <button type="submit" class="overlay-btn"><span>Send Message</span></button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer section -->

    <footer>
        <div class="row">
            <div class="col">
                <h3 class="footer-logo">Skillora <div class="underline"><span></span></div></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse porro sapiente, soluta et excepturi aliquam at voluptas quae, ducimus quas labore, temporibus aperiam dolorem laboriosam! Alias qui odit perferendis impedit.</p>
            </div>
            <div class="col">
                <h3>Office <div class="underline"><span></span></div></h3>
                <p>Ippl road</p>
                <p>white field bam]nglore</p>
                <p>portfolio generater</p>
                <p class="email">ibraheem@gmail.com</p>
                <h4>03022370434</h4>
            </div>
            <div class="col">
                <h3>Links <div class="underline"><span></span></div></h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Progect</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Testimonial</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Newsletter <div class="underline"><span></span></div></h3>
                <form class="newsletter-form">
                <div class="input-group">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" placeholder="Enter Your Email" required>
                <button type="submit"><i class="fa-solid fa-arrow-right-long"></i></button>
                </div>
            </form>
            <div class="social-icons">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-whatsapp"></i>
                <i class="fa-brands fa-pinterest"></i>
            </div>
            </div>
        </div>
        <hr>
         <p class="copy-right">© <span id="year"></span> Ibraheem's Portfolio. All rights reserved.</p>

    </footer>

</body>

</html>