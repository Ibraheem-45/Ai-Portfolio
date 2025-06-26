<!DOCTYPE html>
<html lang="en">

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
  <link rel="stylesheet" href="assets/style.css">

  <!-- register css -->
  <link rel="stylesheet" href="form_asset/register.css">

  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- jqueyr link -->
  <script src="jquery-3.7.1.min.js"></script>

  <!--  FIRST: GSAP Core -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"
    integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

  <!-- register.js -->
  <script src="form_asset/registr.js" defer></script>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <title>Auto Portfolio Generator - Create Portfolio Without Coding</title>
</head>

<body>


  <!-- loader animation -->

  <div id="loader">
  <div class="panel left"></div>
  <div class="panel right"></div>
    <div class="loader-text">
      <h1 class="name">Skillora</h1>
      <p class="loading">Loading <span id="percent">0</span>%</p>
      <div class="progress-bar-wrapper">
        <div class="progress-bar"></div>
      </div>
    </div>
  </div>


  <div class="stars-container"></div>

  <!-- User Form  -->
   
  <div class="form-container">
    <div class="form-wrapper">
      <div id="login-form" class="form-box">
        <h2>Login</h2>
        <form id="login" action="code.php" method="POST" novalidate>
          <div class="input-group">
            <input type="email" id="login-email" placeholder="Email" name="Lemail">
            <span></span>
          </div>
          <div class="input-group">
            <input type="password" id="login-password" placeholder="Password" name="Lpassword" class = "password">
            <span></span>
            <span class = "eye"><i class="fa-regular fa-eye"></i></span>
          </div>
          <button type="submit" class="submit-btn" name="login">Login</button>

          <div class="social-login">
            <button type="button" class="google-btn">Continue with Google</button>
            <button type="button" class="facebook-btn">Continue with Facebook</button>
          </div>

          <p>Don't have an account? <a href="javascript:void(0)" onclick="toggleForms()">Signup here</a></p>
        </form>
      </div>

      <!-- signup form -->

      <div id="signup-form" class="form-box" style="display: none;">
        <h2>Signup</h2>
        <form id="signup" action="code.php" method="POST" novalidate>
          <div class="input-group">
            <input type="text" id="signup-name" placeholder="Name" name="Sname">
            <span></span>
          </div>
          <div class="input-group">
            <input type="email" id="signup-email" placeholder="Email" name="Semail">
            <span></span>
          </div>
          <div class="input-group">
            <input type="password" id="signup-password" placeholder="Password" name="Spassword" class = "password">
            <span></span>
            <span class = "eye"><i class="fa-regular fa-eye"></i></span>
          </div>
          <button type="submit" class="submit-btn" name="signup">Signup</button>

          <p class="top-p">Already have an account? <a href="javascript:void(0)" onclick="toggleForms()">Login here</a>
          </p>
        </form>
      </div>
    </div>
  </div>


</body>
</html>
