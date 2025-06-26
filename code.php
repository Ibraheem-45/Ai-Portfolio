<?php

session_start();
include "connection.php";

// ========== Signup ========== //
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($connection, $_POST['Sname']);
    $email = mysqli_real_escape_string($connection, $_POST['Semail']);
    $password = mysqli_real_escape_string($connection, $_POST['Spassword']);

    $check = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connection, $check);

    if(mysqli_num_rows($result) > 0){
      $_SESSION['email'] = $email;
        echo "<script>
          alert('Email already exists');
          location.assign('registration.php');
        </script>";
    } else {
        $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')";
        $query = mysqli_query($connection, $sql);

        if($query){
            echo "<script>
            alert('✅ Signup successful! Welcome aboard. 🎉');
                  location.assign('user_data/home_data.php');
                  
            </script>";
        } else {
            echo "<script>
              alert('Signup failed: " . mysqli_error($connection) . "');
            </script>";
        };
    };
};

// ========== Login ========== //
if(isset($_POST['login'])){
    $email = mysqli_real_escape_String($connection, $_POST['Lemail']);
    $password = mysqli_real_escape_string($connection, $_POST['Lpassword']);

    $lCheck = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $lResult = mysqli_query($connection, $lCheck);

    if(mysqli_num_rows($lResult) === 1){
      $_SESSION['email'] = $email;
        echo "<script>
          alert('✅ Login successful! Welcome back. 👋');
          location.assign('user_data/home_data.php');
        </script>";
    } else {
        echo "<script>
          alert('Invalid Email or Password');
          location.assign('registration.php');
        </script>";  
    };
};

//  home data connect 
if (isset($_POST['home-btn'])) {
  $name      = mysqli_real_escape_string($connection, $_POST['name']);
  $title1    = mysqli_real_escape_string($connection, $_POST['title1']);
  $title2    = mysqli_real_escape_string($connection, $_POST['title2']);
  $title3    = mysqli_real_escape_string($connection, $_POST['title3']);
  $home_desc = mysqli_real_escape_string($connection, $_POST['home-desc']);
  $linkedin  = mysqli_real_escape_string($connection, $_POST['linkedin']);
  $facebook  = mysqli_real_escape_string($connection, $_POST['facebook']);
  $github    = mysqli_real_escape_string($connection, $_POST['github']);

  // 2. Files
  $image     = $_FILES['profile-image'];
  $cv        = $_FILES['CV'];
  $imageName = $image['name'];
  $cvName    = $cv['name'];

  $imageExt  = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
  $cvExt     = strtolower(pathinfo($cvName, PATHINFO_EXTENSION));

  $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/Auto_Portfolio_Generated/images/";
  $cvDir     = $_SERVER['DOCUMENT_ROOT'] . "/Auto_Portfolio_Generated/cv/";

  $imagePath = $uploadDir . basename($imageName);
  $cvPath    = $cvDir . basename($cvName);  


  if ($imageExt !== "png" || $image['type'] !== "image/png") {
    echo "<script>alert('❌ Sirf PNG image upload karein (transparent background ke sath)'); 
    location.assign('user_data/home_data.php');</script>";
    exit;
  }

  if (!move_uploaded_file($image['tmp_name'], $imagePath) || !move_uploaded_file($cv['tmp_name'], $cvPath)) {
    echo "<script>alert('❌ File upload failed!'); 
    location.assign('user_data/home_data.php');</script>";
    exit;
  }

  $sql = "INSERT INTO home_data(name, title1, title2, title3, description, linkedin, facebook, github, profileImage, cv_upload)
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt = mysqli_prepare($connection, $sql);

  if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ssssssssss", $name, $title1, $title2, $title3, $home_desc, $linkedin, $facebook, $github, $imageName, $cvName);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo "<script>alert('✅ Home data and CV uploaded successfully!'); location.assign('user_data/about_data.php');</script>";
  } else {
    echo "<script>alert('❌ DB Error: " . mysqli_error($connection) . "');</script>";
  }
}

// ====== About Data ======
if (isset($_POST['about-btn'])) {

  $about_desc = mysqli_real_escape_string($connection, $_POST['about-desc']);

  // uploaded image
  $image         = $_FILES['about-image'];
  $imageName     = $image['name'];
  $imageTmp      = $image['tmp_name'];
  $imageType     = $image['type'];
  $imageExt      = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
  $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/Auto_Portfolio_Generated/images/";

  $imagePath     = $uploadDir . basename($imageName);

  // allowed file types
  $allowedTypes = ['png', 'jpg', 'jpeg', 'webp'];
  $allowedMime  = ['image/png', 'image/jpg', 'image/jpeg', 'image/webp'];

  if (in_array($imageExt, $allowedTypes) && in_array($imageType, $allowedMime)) {

    if (move_uploaded_file($imageTmp, $imagePath)) {

      $sql = "INSERT INTO about_data(description, aboutImage) VALUES (?, ?)";
      $stmt = mysqli_prepare($connection, $sql);

      if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $about_desc, $imageName);

        if (mysqli_stmt_execute($stmt)) {

          echo "<script>
            alert('✅ About section saved successfully! ✍️');
            location.assign('user_data/skill_data.php');
          </script>";

        } else {
          echo "<script>alert('Execute failed: " . mysqli_stmt_error($stmt) . "');</script>";
        }

        mysqli_stmt_close($stmt);

      } else {
        echo "<script>alert('SQL prepare failed: " . mysqli_error($connection) . "');</script>";
      }

    } else {
      echo "<script>
        alert('Failed to upload the image!');
        location.assign('user_data/about_data.php');
      </script>";
    }

  } else {
    echo "<script>
      alert('Please upload a valid image file (PNG, JPG, JPEG, WEBP)');
      location.assign('user_data/about_data.php');
    </script>";
  }
}

// skill_data

if (isset($_POST['skill-btn'])) {
  // input values
  $skill1 = mysqli_real_escape_string($connection, $_POST['Skill1']);
  $skill2 = mysqli_real_escape_string($connection, $_POST['Skill2']);
  $skill3 = mysqli_real_escape_string($connection, $_POST['Skill3']);
  $experience1 = mysqli_real_escape_string($connection, $_POST['Experience1']);
  $experience2 = mysqli_real_escape_string($connection, $_POST['Experience2']);
  $experience3 = mysqli_real_escape_string($connection, $_POST['Experience3']);
  $education1 = mysqli_real_escape_string($connection, $_POST['Education1']);
  $education2 = mysqli_real_escape_string($connection, $_POST['Education2']);
  $education3 = mysqli_real_escape_string($connection, $_POST['Education3']);

  $skillSql = "
    INSERT INTO skill_data (
      skill1, skill2, skill3,
      experience1, experience2, experience3,
      education1, education2, education3
    )
    VALUES (
      '$skill1', '$skill2', '$skill3',
      '$experience1', '$experience2', '$experience3',
      '$education1', '$education2', '$education3'
    )";

  $skillQuery = mysqli_query($connection, $skillSql);

  if ($skillQuery) {
    echo "<script>
      alert('✅ Skills uploaded successfully! 💼');
      location.assign('user_data/progect_data.php');
    </script>";
  } else {
    echo "<script>
      alert('Database Error: " . mysqli_error($connection) . "');
    </script>";
  }
}

// progect_data

if (isset($_POST['progect-btn'])) {

  $mywork = mysqli_real_escape_string($connection, $_POST['my-work']);

  $progect1 = mysqli_real_escape_string($connection, $_POST['progect1']);
  $progect1Desc = mysqli_real_escape_string($connection, $_POST['progect1Desc']);
  $progect1Link = mysqli_real_escape_string($connection, $_POST['progect1Link']);

  $progect2 = mysqli_real_escape_string($connection, $_POST['progect2']);
  $progect2Desc = mysqli_real_escape_string($connection, $_POST['progect2Desc']);
  $progect2Link = mysqli_real_escape_string($connection, $_POST['progect2Link']);

  $progect3 = mysqli_real_escape_string($connection, $_POST['progect3']);
  $progect3Desc = mysqli_real_escape_string($connection, $_POST['progect3Desc']);
  $progect3Link = mysqli_real_escape_string($connection, $_POST['progect3Link']);

  $progect4 = mysqli_real_escape_string($connection, $_POST['progect4']);
  $progect4Desc = mysqli_real_escape_string($connection, $_POST['progect4Desc']);
  $progect4Link = mysqli_real_escape_string($connection, $_POST['progect4Link']);

  $progect5 = mysqli_real_escape_string($connection, $_POST['progect5']);
  $progect5Desc = mysqli_real_escape_string($connection, $_POST['progect5Desc']);
  $progect5Link = mysqli_real_escape_string($connection, $_POST['progect5Link']);

  // Image upload function
  function uploadingProgectImage($fileInputName) {
  $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];
  $fileType = $_FILES[$fileInputName]['type'];
  $imageName = basename($_FILES[$fileInputName]['name']);
  $tmpName = $_FILES[$fileInputName]['tmp_name'];

  $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/Auto_Portfolio_Generated/images/";
  $imagePath = $uploadDir . $imageName;
  

  if (in_array($fileType, $allowedTypes)) {
    if (move_uploaded_file($tmpName, $imagePath)) {
      return $imageName;
    }
  }
  return "";
}

  // Upload images
  $progect1Image = uploadingProgectImage('progect1Image');
  $progect2Image = uploadingProgectImage('progect2Image');
  $progect3Image = uploadingProgectImage('progect3Image');
  $progect4Image = uploadingProgectImage('progect4Image');
  $progect5Image = uploadingProgectImage('progect5Image');

  $progectSql = "INSERT INTO progect_data (
      mywork, 
      progect1, progect1Desc, progect1Image, progect1Link,
      progect2, progect2Desc, progect2Image, progect2Link,
      progect3, progect3Desc, progect3Image, progect3Link,
      progect4, progect4Desc, progect4Image, progect4Link,
      progect5, progect5Desc, progect5Image, progect5Link
    ) 
    VALUES (
      '$mywork',
      '$progect1', '$progect1Desc', '$progect1Image', '$progect1Link',
      '$progect2', '$progect2Desc', '$progect2Image', '$progect2Link',
      '$progect3', '$progect3Desc', '$progect3Image', '$progect3Link',
      '$progect4', '$progect4Desc', '$progect4Image', '$progect4Link',
      '$progect5', '$progect5Desc', '$progect5Image', '$progect5Link'
    )";

  $progectQuery = mysqli_query($connection, $progectSql);

  if ($progectQuery) {
    echo "<script>
      alert('✅ Project uploaded successfully! 💻');
      location.assign('user_data/service_data.php');
    </script>";
  } else {
    echo "<script>
      alert('Failed to insert project data: " . mysqli_error($connection) . "');
    </script>";
  }
}


// services desc

if (isset($_POST['service-btn'])) {
  
  // user Input
  $myServices   = mysqli_real_escape_string($connection, $_POST['myservices']);
  $service1     = mysqli_real_escape_string($connection, $_POST['service1']);
  $service1Desc = mysqli_real_escape_string($connection, $_POST['service1Desc']);
  $service2     = mysqli_real_escape_string($connection, $_POST['service2']);
  $service2Desc = mysqli_real_escape_string($connection, $_POST['service2Desc']);
  $service3     = mysqli_real_escape_string($connection, $_POST['service3']);
  $service3Desc = mysqli_real_escape_string($connection, $_POST['service3Desc']);

  $sql = "INSERT INTO services_data(myservice, service1, service1Desc, service2, service2Desc, service3, service3Desc) 
          VALUES (?, ?, ?, ?, ?, ?, ?)";

  $stmt = mysqli_prepare($connection, $sql);

  if ($stmt) {

    mysqli_stmt_bind_param($stmt, "sssssss", $myServices, $service1, $service1Desc, $service2, $service2Desc, $service3, $service3Desc);

    if (mysqli_stmt_execute($stmt)) {
      echo "<script>
        alert('✅ Services section saved successfully! 🛎️');
        location.assign('user_data/testimonial_data.php');
      </script>";
    } else {
      echo "<script>alert('Execute error: " . mysqli_stmt_error($stmt) . "')</script>";
    };

    mysqli_stmt_close($stmt);
  } else {
    echo "<script>alert('Prepare error: " . mysqli_error($connection) . "')</script>";
  };
};


// testimonial_data

if (isset($_POST['testimonial-btn'])) {
    // text input
    $myTest = mysqli_real_escape_string($connection, $_POST['mytest']);
    $test1Name = mysqli_real_escape_string($connection, $_POST['test1-name']);
    $test1Feedback = mysqli_real_escape_string($connection, $_POST['test1-feedback']);

    $test2Name = mysqli_real_escape_string($connection, $_POST['test2-name']);
    $test2Feedback = mysqli_real_escape_string($connection, $_POST['test2-feedback']);

    $test3Name = mysqli_real_escape_string($connection, $_POST['test3-name']);
    $test3Feedback = mysqli_real_escape_string($connection, $_POST['test3-feedback']);

  function uploadTestimonialImage($fileInputName) {
    $imageName = time() . '_' . $_FILES[$fileInputName]['name'];
    $tmpName = $_FILES[$fileInputName]['tmp_name'];
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/Auto_Portfolio_Generated/images/";
    $imagePath = $uploadDir . $imageName;

    if (move_uploaded_file($tmpName, $imagePath)) {
        return $imageName;
    } else {
        return "";
    };
};

    // Upload images
    $test1Image = uploadTestimonialImage('test1-image');
    $test2Image = uploadTestimonialImage('test2-image');
    $test3Image = uploadTestimonialImage('test3-image');

    $testSql = "INSERT INTO testimonial_data (
        myTest,
        test1Name, test1Feedback, test1Image,
        test2Name, test2Feedback, test2Image,
        test3Name, test3Feedback, test3Image
    ) VALUES (
        '$myTest',
        '$test1Name', '$test1Feedback', '$test1Image',
        '$test2Name', '$test2Feedback', '$test2Image',
        '$test3Name', '$test3Feedback', '$test3Image'
    )";

    $testQuery = mysqli_query($connection, $testSql);

    if ($testQuery) {
        echo "<script>
          alert('✅ Testimonial uploaded successfully! 💬');
          location.assign('user_data/contact_data.php');
        </script>";
    } else {
        echo "<script>
          alert('Failed to insert testimonial data!');
        </script>";
        echo "MySQL Error: " . mysqli_error($connection);
    }
};


// contact section

if (isset($_POST['contact-btn'])) {

  // user input 
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $phoneNumber = mysqli_real_escape_string($connection, $_POST['phone-number']);
  $address = mysqli_real_escape_string($connection, $_POST['address']);

  $contactSql = "INSERT INTO contact_data(email, number, adress)
                 VALUES ('$email', '$phoneNumber', '$address')";

  $contactQuery = mysqli_query($connection, $contactSql);

  if ($contactQuery) {
    echo "<script>
      alert('Contact data saved successfully!');
      location.assign('user_data/themeSelect.php');
    </script>";
  } else {
    echo "Error: " . mysqli_error($connection);
  };
};



// Theme select
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $theme = !empty($_POST['theme']) ? $_POST['theme'] : 'default-theme';

    $_SESSION['user_name'] = $name;
    $_SESSION['selected_theme'] = $theme;

    echo "<script>
        alert('🎨 Theme selected! Now enter your name to generate portfolio.');
        location.href = 'link_generate.php';
    </script>";
}


// PREVIEW
if (isset($_POST['preview'])) {
    if (isset($_SESSION['portfolio_locked']) && $_SESSION['portfolio_locked'] === true) {
        echo "<h3 style='color:red;'>⚠️ You already used generate. Back not allowed.</h3>";
        exit;
    }

    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $theme = $_SESSION['selected_theme'] ?? 'default-theme';
    $slug = strtolower(preg_replace('/\s+/', '-', $name)) . rand(1000, 9999);

    $folderPath = __DIR__ . "/portfolio/$slug";

    // Folder create
    if (!mkdir($folderPath, 0777, true)) {
        die("❌ Folder create nahi ho saka: $folderPath");
    }

    // File copy from main index.php (NOT template!)
    if (!copy(__DIR__ . "/index.php", "$folderPath/index.php")) {
        die("❌ index.php copy nahi ho saka from main file");
    }

    $_SESSION['portfolio_previewed'] = true;

    header("Location: http://localhost/Auto_Portfolio_Generated/portfolio/$slug/");
    exit;
}

// GENERATE
if (isset($_POST['generate'])) {
    if (isset($_SESSION['portfolio_locked']) && $_SESSION['portfolio_locked'] === true) {
        echo "<h3 style='color:red;'>⚠️ Action already taken. Back not allowed.</h3>";
        exit;
    }

    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $theme = $_SESSION['selected_theme'] ?? 'default-theme';
    $slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $name))) . rand(1000, 9999);


    $sql = "INSERT INTO theme_log (full_name, theme_name, slug) VALUES ('$name', '$theme', '$slug')";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        $folderPath = __DIR__ . "/portfolio/$slug";

        if (!mkdir($folderPath, 0777, true)) {
            die("❌ Folder create nahi ho saka: $folderPath");
        }

        if (!copy(__DIR__ . "/index.php", "$folderPath/index.php")) {
            die("❌ index.php copy nahi ho saka from main file");
        }

        $_SESSION['portfolio_locked'] = true;
        $_SESSION['portfolio_link'] = "http://localhost/Auto_Portfolio_Generated/portfolio/$slug/";

        $link = $_SESSION['portfolio_link'];
        echo "<h2 style='color:white; text-align:center;'>✅ Portfolio Created!</h2>";
        echo "<p style='text-align:center;'><a href='$link' target='_blank'>$link</a></p>";
    } else {
        echo "<h3 style='color:red;'>❌ Database insert fail.</h3>";
    }
}

?>

