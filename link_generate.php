<?php
session_start();
if (isset($_POST['theme_submit'])) {
    $theme = $_POST['theme'];
    $_SESSION['selected_theme'] = $theme;
}

if (isset($_SESSION['portfolio_locked']) && $_SESSION['portfolio_locked'] === true) {
    $link = $_SESSION['portfolio_link'] ?? null;
    echo "<h2 style='color: red; text-align:center;'>🚫 You already generated your portfolio. Back not allowed.</h2>";
    if ($link) {
        echo "<p style='text-align:center;'><a href='$link' target='_blank'>$link</a></p>";
    }
    exit;
}

if (isset($_SESSION['portfolio_previewed'])) {
    unset($_SESSION['portfolio_previewed']);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Form with Loader</title>
    <link rel="stylesheet" href="user_data/form_data.css" />
    <script src="jquery-3.7.1.min.js" defer></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"
      defer
    ></script>
    <script src="user_data/form_data.js" defer></script>
  </head>
  <body>

  <!-- loader -->

  <div class="loader">
        <div class="bolb"></div>
        <div class="loader-text">Launching Last Step</div>
    </div>

    <!-- container -->
    <div class="container">
      <h2>🎉 One Last Step</h2>
      <p>
  ⚠️ Barai meherbani aagay barhnay se pehle ye baat zaroor parh lo:

  <br /><br />
  👉 Agar tum <strong>Preview</strong> par click karte ho to tum apna portfolio pehle dekh saktay ho. Agar koi cheez galat ho ya change karni ho to back aa kar change kar saktay ho.

  <br /><br />
  ✅ Lekin agar tum <strong>Generate Portfolio Link</strong> par click kar dogay to tumhara final portfolio ban jaye ga aur link mil jaye ga.

  <br /><br />
  🚫 Us ke baad tum wapas nahi aa saktay aur koi change nahi kar saktay. Is liye pehle preview kar lo agar tum sure nahi ho.
</p>

      <form action="code.php" method="POST">
        <input type="text" name="name" placeholder="Enter your name" required />
        <button type="submit" name="generate">Generate Portfolio Link</button>
        <button type="submit" name="preview">Preview Portfolio</button>
      </form>
    </div>
  </body>
</html>
