
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
        <div class="loader-text">Launching Contact Form 📞</div>
    </div>


    <!-- Contact Form Container -->
    <div class="container">
        <h1 data-en="📞 Contact Form" data-ur="📞 رابطہ فارم">📞 Contact Form</h1>
        <form action="../code.php" method="POST" id="contact_form">

            <!-- Email Field -->
            <label for="email" data-en="Email" data-ur="ای میل">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email address" data-en="Enter your email address" data-ur="اپنا ای میل پتہ درج کریں" />
            <span class="error"></span>

            <!-- Phone Number Field -->
            <label for="phone" data-en="Phone Number" data-ur="فون نمبر">Phone Number</label>
            <input type="text" name="phone-number" id="phone" placeholder="Enter your phone number" data-en="Enter your phone number" data-ur="اپنا فون نمبر درج کریں" />
            <span class="error"></span>

            <!-- Address Field -->
            <label for="address" data-en="Address" data-ur="پتہ">Address</label>
            <input type="text" name="address" id="address" placeholder="Enter your address" data-en="Enter your address"  data-ur="اپنا پتہ درج کریں"  />
            <span class="error"></span>

            <button type="submit" name="contact-btn" data-en="Submit Contact Info" data-ur="رابطہ کی معلومات جمع کروائیں">Submit Contact Info</button>
        </form>
    </div>

</body>

</html>