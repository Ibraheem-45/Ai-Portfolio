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
        <div class="loader-text">Launching Service Form 🛎️</div>
    </div>
    
    <!-- form container -->

    <div class="container">
        <h1 data-en="🛎️ Services Section" data-ur="🛎️ خدمات کا سیکشن">🛎️ Services Section</h1>
        <form action="../code.php" method="POST" id="service_data">
            <label data-en="My Services" data-ur="میری خدمات">My Services</label>
            <textarea name="myservices" rows="4" placeholder="Briefly describe the services you offer..." data-en="Briefly describe the services you offer..." data-ur="آپ کون سی خدمات فراہم کرتے ہیں، مختصر بیان کریں..." id="myService" class="myserviceDesc"></textarea>
            <span class="error"></span>

            <label data-en="Service 1" data-ur="سروس 1">Service 1</label>
            <input type="text" name="service1" placeholder="e.g. Frontend Development" data-en="e.g. Frontend Development" data-ur="مثلاً فرنٹ اینڈ ڈویلپمنٹ" class="service-input" id="service1" />
            <span class="error"></span>
            <textarea name="service1Desc" rows="5" placeholder="Describe Service 1 in detail..." data-en="Describe Service 1 in detail..." data-ur="سروس 1 کی مکمل تفصیل لکھیں..." class="serviceDesc-input"></textarea>
            <span class="error"></span>

            <label data-en="Service 2" data-ur="سروس 2">Service 2</label>
            <input type="text" name="service2" placeholder="e.g. UI/UX Design" data-en="e.g. UI/UX Design" data-ur="مثلاً UI/UX ڈیزائن" class="service-input" id="service2" />
            <span class="error"></span>
            <textarea name="service2Desc" rows="5" placeholder="Describe Service 2 in detail..." data-en="Describe Service 2 in detail..." data-ur="سروس 2 کی مکمل تفصیل لکھیں..." class="serviceDesc-input"></textarea>
            <span class="error"></span>

            <label data-en="Service 3" data-ur="سروس 3">Service 3</label>
            <input type="text" name="service3" placeholder="e.g. JavaScript Bug Fixing" data-en="e.g. JavaScript Bug Fixing" data-ur="مثلاً جاوا اسکرپٹ بگ ٹھیک کرنا" class="service-input" id="service3" />
            <span class="error"></span>
            <textarea name="service3Desc" rows="5" placeholder="Describe Service 3 in detail..." data-en="Describe Service 3 in detail..." data-ur="سروس 3 کی مکمل تفصیل لکھیں..." class="serviceDesc-input"></textarea>
            <span class="error"></span>

            <!-- Submit Button -->
            <button type="submit" name="service-btn" data-en="Generate My Portfolio" data-ur="میرا پورٹ فولیو تیار کریں"> Generate My Portfolio</button>
        </form>
    </div>


</body>

</html>