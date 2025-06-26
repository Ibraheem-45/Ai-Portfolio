
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
        <div class="loader-text">Launching Skill Form 💼</div>
    </div>
    
    <!-- Form Container -->
    <div class="container">
        <h1 data-en="🗂️ Portfolio Information Form" data-ur="🗂️ پورٹ فولیو کی معلومات کا فارم">🗂️ Portfolio Information Form</h1>
            <form action="../code.php" method="POST" id = "skill_data">
            <label data-en="Skill 1" data-ur="مہارت 1">Skill 1</label>
            <input type="text" name="Skill1" placeholder="Enter your primary skill and proficiency (e.g., HTML - 90%)" data-en="Enter your primary skill and proficiency (e.g., HTML - 90%)" data-ur="اپنی بنیادی مہارت اور مہارت کی سطح درج کریں (مثال: HTML - 90%)" id = "skill1" />
            <span class="error"></span>

            <label data-en="Skill2" data-ur="مہارت 2">Skill 2</label>
            <input type="text" name="Skill2" placeholder="Enter your secondary skill (e.g., JavaScript - 80%)" data-en="Enter your secondary skill (e.g., JavaScript - 80%)" data-ur="اپنی دوسری مہارت درج کریں (مثال: JavaScript - 80%)" id = "skill2"/>
            <span class="error"></span>

            <label data-en="Skill 3 (optional)" data-ur="مہارت 3 (اختیاری)">Skill 3 (optional)</label>
            <input type="text" name="Skill3" placeholder="Enter another skill (e.g., PHP - 70%)" data-en="Enter another skill (e.g., PHP - 70%)" data-ur="کوئی اور مہارت درج کریں (مثال: PHP - 70%)" />

            <label data-en="Experience 1" data-ur="تجربہ 1">Experience 1</label>
            <input type="text" name="Experience1" placeholder="Add job title, year, and company (e.g., 2023 - Now | Frontend Developer)" data-en="Add job title, year, and company (e.g., 2023 - Now | Frontend Developer)" data-ur="ملازمت کا عنوان، سال اور کمپنی درج کریں (مثال: 2023 - تاحال | فرنٹ اینڈ ڈویلپر)" id = "experience1" />
            <span class="error"></span>

            <label data-en="Experience 2" data-ur="تجربہ 2">Experience 2</label>
            <input type="text" name="Experience2" placeholder="Add another experience (e.g., 2021 - 2022 | Junior Developer - XYZ)" data-en="Add another experience (e.g., 2021 - 2022 | Junior Developer - XYZ)" data-ur="ایک اور تجربہ شامل کریں (مثال: 2021 - 2022 | جونیئر ڈویلپر - XYZ)" id = "experience2"/>
            <span class="error"></span>

            <label data-en="Experience 3 (optional)" data-ur="تجربہ 3 (اختیاری)">Experience 3 (optional)</label>
            <input type="text" name="Experience3" placeholder="Add more work experience if available" data-en="Add more work experience if available" data-ur="اگر دستیاب ہو تو مزید کام کا تجربہ شامل کریں" />

            <label data-en="Education 1" data-ur="تعلیم 1">Education 1</label>
            <input type="text" name="Education1" placeholder="Add your latest education (e.g., 2024 | FSC from City Name)" data-en="Add your latest education (e.g., 2024 | FSC from City Name)" data-ur="اپنی تازہ ترین تعلیم درج کریں (مثال: 2024 | ایف ایس سی - شہر کا نام)" id = "education1" />
            <span class="error"></span>

            <label data-en="Education 2" data-ur="تعلیم 2">Education</label>
            <input type="text" name="Education2" placeholder="Add previous education (e.g., 2021 | Matric from School Name)" data-en="Add previous education (e.g., 2021 | Matric from School Name)" data-ur="پچھلی تعلیم درج کریں (مثال: 2021 | میٹرک - اسکول کا نام)" id = "education2" />
            <span class="error"></span>

            <label data-en="Education 3 (optional)" data-ur="تعلیم 3 (اختیاری)">Education 3 (optional)</label>
            <input type="text" name="Education3" placeholder="Add any additional education" data-en="Add any additional education" data-ur="کوئی اضافی تعلیم شامل کریں" />

            <button type="submit" name="skill-btn" data-en="Generate My Portfolio" data-ur="میرا پورٹ فولیو تیار کریں">Generate My Portfolio</button>
        </form>
    </div>

</body>
</html>