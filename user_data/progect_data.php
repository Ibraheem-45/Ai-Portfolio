<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Form with Loader</title>
    <link rel="stylesheet" href="form_data.css" />
    <script src="../jquery-3.7.1.min.js" defer></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"
      defer
    ></script>
    <script src="form_data.js" defer></script>
  </head>
  <body>
    <button class="langBtn">اردو</button>

    <!-- Loader -->

    <div class="loader">
      <div class="bolb"></div>
      <div class="loader-text">Launching Progect Form 💻</div>
    </div>

    <div class="container">
      <h1 data-en="💻 Project Section" data-ur="💻 پروجیکٹ سیکشن">
        💻 Project Section
      </h1>
      <form
        action="../code.php"
        method="POST"
        enctype="multipart/form-data"
        id="progect_data"
      >
        <label data-en="My Work" data-ur="میرا کام">My Work</label>
        <textarea
          name="my-work"
          rows="8"
          placeholder="Describe your work here..."
          id="myProgect"
          data-en="Describe your work here..."
          data-ur="اپنے کام کی تفصیل یہاں لکھیں..."
        ></textarea>
        <span class="error"></span>

        <!-- Project 1 -->
        <label data-en="Project 1" data-ur="پروجیکٹ 1">Project 1</label>
        <input
          type="text"
          name="progect1"
          class="progect-input"
          placeholder="Project name"
          data-en="Project name"
          data-ur="پروجیکٹ کا نام"
        />
        <span class="error"></span>
        <textarea
          name="progect1Desc"
          class="progectDesc-input"
          rows="4"
          placeholder="Project description..."
          data-en="Project description..."
          data-ur="پروجیکٹ کی تفصیل..."
        ></textarea>
        <span class="error"></span>
        <input type="file" name="progect1Image" accept="image/*" required />
        <input
          type="text"
          name="progect1Link"
          placeholder="Project link (optional)"
          data-en="Project link (optional)"
          data-ur="پروجیکٹ لنک (اختیاری)"
        />

        <!-- Project 2 -->
        <label data-en="Project 2" data-ur="پروجیکٹ 2">Project 2</label>
        <input
          type="text"
          name="progect2"
          class="progect-input"
          placeholder="Project name"
          data-en="Project name"
          data-ur="پروجیکٹ کا نام"
        />
        <span class="error"></span>
        <textarea
          name="progect2Desc"
          class="progectDesc-input"
          rows="4"
          placeholder="Project description..."
          data-en="Project description..."
          data-ur="پروجیکٹ کی تفصیل..."
        ></textarea>
        <span class="error"></span>
        <input type="file" name="progect2Image" accept="image/*" required />
        <input
          type="text"
          name="progect2Link"
          placeholder="Project link (optional)"
          data-en="Project link (optional)"
          data-ur="پروجیکٹ لنک (اختیاری)"
        />

        <!-- Project 3 -->
        <label data-en="Project 3" data-ur="پروجیکٹ 3">Project 3</label>
        <input
          type="text"
          name="progect3"
          class="progect-input"
          placeholder="Project name"
          data-en="Project name"
          data-ur="پروجیکٹ کا نام"
        />
        <span class="error"></span>
        <textarea
          name="progect3Desc"
          class="progectDesc-input"
          rows="4"
          placeholder="Project description..."
          data-en="Project description..."
          data-ur="پروجیکٹ کی تفصیل..."
        ></textarea>
        <span class="error"></span>
        <input type="file" name="progect3Image" accept="image/*" required />
        <input
          type="text"
          name="progect3Link"
          placeholder="Project link (optional)"
          data-en="Project link (optional)"
          data-ur="پروجیکٹ لنک (اختیاری)"
        />

        <!-- Project 4 (optional) -->
        <label data-en="Project 4 (optional)" data-ur="پروجیکٹ 4 (اختیاری)"
          >Project 4 (optional)</label
        >
        <input
          type="text"
          name="progect4"
          class="progect-input"
          placeholder="Project name"
          data-en="Project name"
          data-ur="پروجیکٹ کا نام"
        />
        <span class="error"></span>
        <textarea
          name="progect4Desc"
          class="progectDesc-input"
          rows="4"
          placeholder="Project description..."
          data-en="Project description..."
          data-ur="پروجیکٹ کی تفصیل..."
        ></textarea>
        <span class="error"></span>
        <input type="file" name="progect4Image" accept="image/*" required />
        <input
          type="text"
          name="progect4Link"
          placeholder="Project link (optional)"
          data-en="Project link (optional)"
          data-ur="پروجیکٹ لنک (اختیاری)"
        />

        <!-- Project 5 (optional) -->
        <label data-en="Project 5 (optional)" data-ur="پروجیکٹ 5 (اختیاری)"
          >Project 5 (optional)</label
        >
        <input
          type="text"
          name="progect5"
          class="progect-input"
          placeholder="Project name"
          data-en="Project name"
          data-ur="پروجیکٹ کا نام"
        />
        <span class="error"></span>
        <textarea
          name="progect5Desc"
          class="progectDesc-input"
          rows="4"
          placeholder="Project description..."
          data-en="Project description..."
          data-ur="پروجیکٹ کی تفصیل..."
        ></textarea>
        <span class="error"></span>
        <input type="file" name="progect5Image" accept="image/*" required />
        <input
          type="text"
          name="progect5Link"
          placeholder="Project link (optional)"
          data-en="Project link (optional)"
          data-ur="پروجیکٹ لنک (اختیاری)"
        />

        <!-- Submit Button -->
        <button
          type="submit"
          name="progect-btn"
          data-en="Generate My Portfolio"
          data-ur="میرا پورٹ فولیو تیار کریں"
        >
          Generate My Portfolio
        </button>
      </form>
    </div>
  </body>
</html>
