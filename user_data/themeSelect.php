<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Form with Loader</title>
    <link rel="stylesheet" href="form_data.css">
    <script src="../jquery-3.7.1.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"
        integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="form_data.js" defer></script>
</head>

<body>

    <button class="langBtn">اردو</button>

    <!-- loader -->

    <div class="loader">
        <div class="bolb"></div>
        <div class="loader-text">Launching Theme Form 🎨</div>
    </div>

    <!-- Form Container -->
<div class="container">
    <h1 data-en="🎨 Auto Portfolio Form" data-ur="🎨 خودکار پورٹ فولیو فارم">🎨 Auto Portfolio Form</h1>
    <form action="../code.php" method="POST">
      <select name="theme">
      <option value="">-- Choose Theme --</option>
      <option value="midnight-purple">Midnight Purple</option>
      <option value="ocean-depths">Ocean Depths</option>
      <option value="cyberpunk-neon">Cyberpunk Neon</option>
      <option value="space-gray">Space Gray</option>
      <option value="emerald-night">Emerald Night</option>
      <option value="dracula-night">Dracula Night</option>
      <option value="matrix-code">Matrix Code</option>
      <option value="carbon-steel">Carbon Steel</option>
      <option value="inferno-glow">Inferno Glow</option>
      <option value="ice-storm">Ice Storm</option>
      <option value="space-nebula">Space Nebula</option>
      <option value="sunset-flame">Sunset Flame</option>
      <option value="royal-ink">Royal Ink</option>
      <option value="volcano-ash">Volcano Ash</option>
      <option value="choco-mocha">Choco Mocha</option>
    </select>

       <label data-en="Full Name" data-ur="پورا نام">Full Name</label>
            <input type="text" name="name" placeholder="Enter your full name" data-en="Enter your full name" data-ur="اپنا پورا نام درج کریں" id="fullName" />
    <button type="submit" name="submit">Apply Theme</button>
    </form>
</div>


</body>
</html>



 