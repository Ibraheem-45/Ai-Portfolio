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
        <div class="loader-text">Launching About Form ✍️</div>
    </div>

    <!-- Form Container -->
    <div class="container">
         <h1 data-en="🧑‍💼 About Section" data-ur="🧑‍💼 تعارفی سیکشن">🧑‍💼 About Section</h1>
        <form action="../code.php" method="POST" enctype="multipart/form-data" id = "about_data">
            <label data-en="Tell us about yourself" data-ur="اپنے بارے میں بتائیں">Tell us about yourself</label>
            <textarea name="about-desc" rows="6" placeholder="Example: I'm a front-end developer with skills in HTML, CSS, and JS..." data-en="Example: I'm a front-end developer with skills in HTML, CSS, and JS..." data-ur="مثال: میں ایک فرنٹ اینڈ ڈویلپر ہوں جسے HTML، CSS، اور JS آتی ہے..." id = "about-desc"></textarea>
            <span class="error"></span>

            <label data-en="Upload Profile Photo for About Section" data-ur="تعارف سیکشن کے لیے پروفائل تصویر اپ لوڈ کریں">Upload Profile Photo for About Section</label>
            <input type="file" name="about-image" />

            <button type="submit" name="about-btn" data-en="Generate My Portfolio" data-ur="میرا پورٹ فولیو تیار کریں">Generate My Portfolio</button>
        </form>
    </div>



</body>

</html>