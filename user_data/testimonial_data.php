
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
        <div class="loader-text">Launching Testimonial Form 💬</div>
    </div>
    
  <!-- Form Container -->
<div class="container">
  <h1 data-en="💬 Testimonial Section" data-ur="💬 تعریفات کا سیکشن">💬 Testimonial Section</h1>
  <form action="../code.php" method="POST" enctype="multipart/form-data" id="testimonial_data">

    <!-- Section Intro -->
    <label data-en="Testimonial Section Title or Intro" data-ur="تعریفات کے سیکشن کا عنوان یا تعارف">Testimonial Section Title or Intro (optional)</label>
    <textarea name="mytest" rows="4"
      placeholder="You can write an intro about what people say about you" id="myTestimonial"
      data-en="You can write an intro about what people say about you"
      data-ur="آپ لکھ سکتے ہیں کہ لوگ آپ کے بارے میں کیا کہتے ہیں"></textarea>
    <span class="error"></span>

    <!-- Testimonial 1 -->
    <label data-en="Testimonial 1 - Name or Title" data-ur="تعریف 1 - نام یا عہدہ">Testimonial 1 - Name or Title</label>
    <input name="test1-name" type="text" placeholder="Name, position or short title" class="test-input"
      data-en="Name, position or short title" data-ur="نام، عہدہ یا مختصر عنوان" />
    <span class="error"></span>
    <label data-en="Testimonial 1 - Message" data-ur="تعریف 1 - پیغام">Testimonial 1 - Message</label>
    <textarea name="test1-feedback" rows="5" placeholder="Write what the person said about you"
      class="testDesc-input"
      data-en="Write what the person said about you" data-ur="لکھیں کہ اس شخص نے آپ کے بارے میں کیا کہا"></textarea>
    <span class="error"></span>
    <label data-en="Upload Image for Testimonial 1" data-ur="تعریف 1 کے لیے تصویر اپ لوڈ کریں">Upload Image for Testimonial 1</label>
    <input name="test1-image" type="file" accept="image/*" required />

    <!-- Testimonial 2 -->
    <label data-en="Testimonial 2 - Name or Title" data-ur="تعریف 2 - نام یا عہدہ">Testimonial 2 - Name or Title</label>
    <input name="test2-name" type="text" placeholder="Name, position or short title" class="test-input"
      data-en="Name, position or short title" data-ur="نام، عہدہ یا مختصر عنوان" />
    <span class="error"></span>
    <label data-en="Testimonial 2 - Message" data-ur="تعریف 2 - پیغام">Testimonial 2 - Message</label>
    <textarea name="test2-feedback" rows="5" placeholder="Write what the person said about you"
      class="testDesc-input"
      data-en="Write what the person said about you" data-ur="لکھیں کہ اس شخص نے آپ کے بارے میں کیا کہا"></textarea>
    <span class="error"></span>
    <label data-en="Upload Image for Testimonial 2" data-ur="تعریف 2 کے لیے تصویر اپ لوڈ کریں">Upload Image for Testimonial 2</label>
    <input name="test2-image" type="file" accept="image/*" required />

    <!-- Testimonial 3 -->
    <label data-en="Testimonial 3 - Name or Title" data-ur="تعریف 3 - نام یا عہدہ">Testimonial 3 - Name or Title</label>
    <input name="test3-name" type="text" placeholder="Name, position or short title" class="test-input"
      data-en="Name, position or short title" data-ur="نام، عہدہ یا مختصر عنوان" />
    <span class="error"></span>
    <label data-en="Testimonial 3 - Message" data-ur="تعریف 3 - پیغام">Testimonial 3 - Message</label>
    <textarea name="test3-feedback" rows="5" placeholder="Write what the person said about you"
      class="testDesc-input"
      data-en="Write what the person said about you" data-ur="لکھیں کہ اس شخص نے آپ کے بارے میں کیا کہا"></textarea>
    <span class="error"></span>
    <label data-en="Upload Image for Testimonial 3" data-ur="تعریف 3 کے لیے تصویر اپ لوڈ کریں">Upload Image for Testimonial 3</label>
    <input name="test3-image" type="file" accept="image/*" required />

    <!-- Submit -->
    <button type="submit" name="testimonial-btn"
      data-en="Generate My Portfolio" data-ur="میرا پورٹ فولیو تیار کریں">Generate My Portfolio</button>
  </form>
</div>


</body>
</html>