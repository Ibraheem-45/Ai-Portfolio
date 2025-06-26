<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: ../registration.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Form with Loader</title>
    <link rel="stylesheet" href="form_data.css">
    <script src="../jquery-3.7.1.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="form_data.js" defer></script>
</head>

<body>

    <button class="langBtn">اردو</button>

    <!-- loader -->

    <div class="loader">
        <div class="bolb"></div>
        <div class="loader-text">Launching Home Form 🏠</div>
    </div>

    <!-- Form Container -->
     
    <div class="container">
         <h1 data-en="🏠 Home Section" data-ur="🏠 ہوم سیکشن">🏠 Home Section</h1>
        <form action="../code.php" method="POST" enctype="multipart/form-data" id = "home_data">
            <label data-en="Full Name" data-ur="پورا نام">Full Name</label>
            <input type="text" name="name" placeholder="Enter your full name" data-en="Enter your full name" data-ur="اپنا پورا نام درج کریں" id="fullName" />
            <span class="error"></span>

            <label data-en="Professional Title" data-ur="پیشہ ورانہ عنوان">Professional Title</label>
            <input type="text" name="title1" placeholder="e.g. Frontend Developer" data-en="e.g. Frontend Developer" data-ur="مثلاً فرنٹ اینڈ ڈویلپر" class="title-input" id="title1" />
            <span class="error"></span>

            <label data-en="Secondary Skill" data-ur="ثانوی مہارت">Secondary Skill</label>
            <input type="text" name="title2" placeholder="e.g. UI/UX Designer" data-en="e.g. UI/UX Designer" data-ur="مثلاً UI/UX ڈیزائنر" class="title-input" id="title2" />
            <span class="error"></span>

            <label data-en="Other Expertise" data-ur="دیگر مہارتیں">Other Expertise</label>
            <input type="text" name="title3" placeholder="e.g. JavaScript Enthusiast" data-en="e.g. JavaScript Enthusiast" data-ur="مثلاً جاوا اسکرپٹ کے شوقین" class="title-input" id="title3"/>
            <span class="error"></span>

            <textarea name="home-desc" rows="4" placeholder="Write a short bio about yourself..." data-en="Write a short bio about yourself..." data-ur="اپنے بارے میں مختصر تعارف لکھیں..." id="home-desc"></textarea>
            <span class="error"></span>
            <label data-en="LinkedIn Profile (optional)" data-ur="لنکڈ اِن پروفائل (اختیاری)">LinkedIn Profile(optional)</label>
            <input type="text" name="linkedin" placeholder="Paste your LinkedIn profile link" data-en="Paste your LinkedIn profile link" data-ur="اپنی لنکڈ ان پروفائل کا لنک چسپاں کریں" id="link1" />

            <label data-en="Facebook Profile (optional)" data-ur="فیس بک پروفائل (اختیاری)">Facebook Profile(optional)</label>
            <input type="text" name="facebook" placeholder="Paste your Facebook profile link" data-en="Paste your Facebook profile link" data-ur="اپنی فیس بک پروفائل کا لنک چسپاں کریں" id="link2"/>

            <label data-en="GitHub Profile (optional)" data-ur="گٹ ہب پروفائل (اختیاری)">GitHub Profile(optional)</label>
            <input type="text" name="github" placeholder="Paste your GitHub repository link" data-en="Paste your GitHub repository link" data-ur="اپنی گٹ ہب ریپوزٹری کا لنک چسپاں کریں" id="link3"/>

            <label data-en="Upload Your CV (PDF)" data-ur="اپنا سی وی اپ لوڈ کریں (PDF)">Upload Your CV (PDF)</label>
            <input type="file" name="CV" />

            <label data-en="Upload Profile Picture" data-ur="پروفائل تصویر اپ لوڈ کریں" id="profile-image">Upload Profile Picture</label>
            <input type="file" name="profile-image" />

            <button type="submit" name="home-btn" data-en="Generate My Portfolio"
                data-ur="میرا پورٹ فولیو تیار کریں">Generate My Portfolio</button>
        </form>
    </div>

</body>

</html>