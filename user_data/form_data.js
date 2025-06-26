window.addEventListener('load', () => {
  // text animation
  gsap.to('.loader-text', {
    delay: 1.2,
    duration: 1.4,
    opacity: 1,
    y: -10,
    ease: 'power2.out',
  })

  // animation any 4 second

  setTimeout(() => {
    gsap.to('.loader', {
      duration: 1.4,
      opacity: 0,
      scale: 1.05,
      ease: 'power4.inOut',
      onComplete: () => {
        document.querySelector('.loader').style.display = 'none'
        document.body.style.overflow = 'auto'
      },
    })
  }, 10000)
})

// change language btn

const changeLangBtn = document.querySelector('.langBtn')

const elements = document.querySelectorAll('[data-en]')

let createLanguage = 'en'

changeLangBtn.addEventListener('click', () => {
  if (createLanguage === 'en') {
    createLanguage = 'ur'
  } else {
    createLanguage = 'en'
  }

  // button text

  if (createLanguage === 'en') {
    changeLangBtn.textContent = 'اردو'
  } else {
    changeLangBtn.textContent = 'English'
  }

  elements.forEach((el) => {
    const translation = el.getAttribute(`data-${createLanguage}`)
    console.log(translation)

    if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
      el.placeholder = translation
    } else {
      el.textContent = translation
    }
  })
})

// jquery validaton

// home name validation
$(document).ready(function () {
  let homeNameValid = false
  let homeTitlesValid = false
  let homeDescValid = false
  let aboutDescValid = false
  let skill1Validation = false
  let skill2Validation = false
  let experience1Validation = false
  let experience2Validation = false
  let education1Validation = false
  let education2Validation = false
  let myProgectValidation = false
  let progectTitleValidation = false
  let progectDescValidation = false
  let myserviceValidation = false
  let serviceValidation = false
  let serviceDescValidation = false
  let myTestValidation = false
  let testTitleValidation = false
  let testDescValidation = false
  let emailValidation = false
  let phoneValidation = false
  let addressValidation = false

  $('#fullName').on('input', function () {
    if ($(this).hasClass('invalid')) {
      $(this).removeClass('invalid')
      $(this).next('span').hide()
    }
  })

  $('#fullName').keyup(function () {
    let fullName = $(this).val()
    let fullNameRegx = /^[A-Za-z\s]{5,10}$/

    if (!fullNameRegx.test(fullName)) {
      homeNameValid = false
      $(this)
        .next('span')
        .show()
        .text('Please enter 5-10 alphabet letters')
        .css('color', 'red')
      $(this).css('border', '2px solid red')
    } else {
      homeNameValid = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  // home titles validation
  $('.title-input').keyup(function () {
    let titles = $(this).val()
    let title1Regx = /^[A-Za-z\s]{5,20}$/

    if (!title1Regx.test(titles)) {
      homeTitlesValid = false
      $(this).next('span').show().text('enter 18 alphabate')
      $(this).css('border', '2px solid red')
    } else {
      homeTitlesValid = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  // home desc validation
  $('#home-desc').keyup(function () {
    let homeDesc = $(this).val().trim()
    let homeIsValid = homeDesc.length >= 250 && homeDesc.length <= 600

    if (!homeIsValid) {
      homeDescValid = false
      $(this)
        .next('span')
        .show()
        .text('Please enter between 250 to 600 characters.')
      $(this).css('border', '2px solid red')
    } else {
      homeDescValid = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  // about_data submition check
  $('#home_data').submit(function (e) {
    $('#fullName').keyup()
    $('.title-input').keyup()
    $('#home-desc').keyup()
    if (!homeNameValid || !homeTitlesValid || !homeDescValid) {
      e.preventDefault()
      alert(
        '❌ Please fix all the validation errors before submitting the form.'
      )
    } else {
      alert('✅ Home information submitted successfully!')
    }
  })

  // about desc validation
  $('#about-desc').keyup(function () {
    let aboutDesc = $(this).val().trim()
    let aboutIsValid = aboutDesc.length >= 300 && aboutDesc.length <= 600

    if (!aboutIsValid) {
      aboutDescValid = false
      $(this)
        .next('span')
        .show()
        .text('Please enter between 300 to 600 characters.')
      $(this).css('border', '2px solid red')
    } else {
      aboutDescValid = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  // about_data submition check
  $('#about_data').submit(function (e) {
    $('#about-desc').keyup()
    if (!aboutDescValid) {
      e.preventDefault()
      alert(
        '❌ Please fix all the validation errors before submitting the form.'
      )
    } else {
      alert('✅ About information submitted successfully!')
    }
  })

  // skill_data validation
  $('#skill1').keyup(function () {
    let skill1 = $(this).val()
    let skill1Regx = /^[A-Za-z0-9\s\+\#\.\-\/]{2,30}$/

    if (!skill1Regx.test(skill1)) {
      skill1Validation = false
      $(this)
        .next('span')
        .show()
        .text('Please enter a valid skill 1 (e.g., C++, HTML/CSS/javascript)')
        .css('color', 'red')
      $(this).css('border', '2px solid red')
    } else {
      skill1Validation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  // skill2 vaidation
  $('#skill2').keyup(function () {
    let skill2 = $(this).val().trim()
    let skill2Regx = /^[A-Za-z0-9\s\+\#\.\-\/]{2,30}$/

    if (!skill2Regx.test(skill2)) {
      skill2Validation = false
      $(this)
        .next('span')
        .show()
        .text('Please enter a valid skill 2 (e.g., C++, HTML/CSS/javascript)')
        .css('color', 'red')
      $(this).css('border', '2px solid red')
    } else {
      skill2Validation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  // experience2 validation
  $('#experience1').keyup(function () {
    let experience1 = $(this).val().trim()
    let experience1Regx = /^(?=.*[A-Za-z])[A-Za-z0-9+\-_,.| ]{10,100}$/

    if (!experience1Regx.test(experience1)) {
      experience1Validation = false
      $(this)
        .next('span')
        .show()
        .text(
          'Please enter a valid experience 2 detail. Include at least one letter (A-Z). Allowed characters: letters, numbers, spaces, and symbols like + - _ , . | Example: 2023 - Now | Frontend Developer'
        )
        .css('color', 'red')
      $(this).css('border', '2px solid red')
    } else {
      experience1Validation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  // experience2 validation
  $('#experience2').keyup(function () {
    let experience2 = $(this).val().trim()
    let experience2Regx = /^(?=.*[A-Za-z])[A-Za-z0-9+\-_,.| ]{10,100}$/

    if (!experience2Regx.test(experience2)) {
      experience2Validation = false
      $(this)
        .next('span')
        .show()
        .text(
          'Please enter a valid experience 2 detail. Include at least one letter (A-Z). Allowed characters: letters, numbers, spaces, and symbols like + - _ , . | Example: 2023 - Now | Frontend Developer'
        )
        .css('color', 'red')
      $(this).css('border', '2px solid red')
    } else {
      experience2Validation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  // eucation1 validation
  $('#education1').keyup(function () {
    let education1 = $(this).val().trim()
    let education1Regx = /^(?=.*[A-Za-z])[A-Za-z0-9+\-_,.| ]{10,100}$/

    if (!education1Regx.test(education1)) {
      education1Validation = false
      $(this)
        .next('span')
        .show()
        .text(
          'Please enter a valid education 1 detail (10-100 characters). It must include at least one letter (A–Z). Allowed characters: letters, numbers, spaces, and symbols like + - _ , . |. Example: 2024 | FSC from Lahore'
        )
        .css('color', 'red')
      $(this).css('border', '2px solid red')
    } else {
      education1Validation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  // education2 validation
  $('#education2').keyup(function () {
    let education2 = $(this).val().trim()
    let education2Regx = /^(?=.*[A-Za-z])[A-Za-z0-9+\-_,.| ]{10,100}$/

    if (!education2Regx.test(education2)) {
      education2Validation = false
      $(this)
        .next('span')
        .show()
        .text(
          'Please enter a valid education 2 detail (10-100 characters). It must include at least one letter (A–Z). Allowed characters: letters, numbers, spaces, and symbols like + - _ , . |. Example: 2024 | FSC from Lahore'
        )
        .css('color', 'red')
      $(this).css('border', '2px solid red')
    } else {
      education2Validation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  // skill_data submition check

  $('#skill_data').submit(function (e) {
    $('#skill1').keyup()
    $('#skill2').keyup()
    $('#experience1').keyup()
    $('#experience2').keyup()
    $('#education1').keyup()
    $('#education2').keyup()

    if (
      !skill1Validation ||
      !skill2Validation ||
      !experience1Validation ||
      !experience2Validation ||
      !education1Validation ||
      !education2Validation
    ) {
      e.preventDefault()
      //   alert('Please fix all the validation errors before submitting.')
      alert(
        '❌ Please fix all the validation errors before submitting the form.'
      )
    } else {
      alert('✅ Skill information submitted successfully!')
    }
  })

  // Description Validation (My Work)
  $('#myProgect').keyup(function () {
    const myProgegtDesc = $(this).val()
    const myProgectDescValid =
      myProgegtDesc.length >= 250 && myProgegtDesc.length <= 500

    if (!myProgectDescValid) {
      myProgectValidation = false
      $(this)
        .next('span')
        .show()
        .text('Please enter a description between 250 and 500 characters.')
      $(this).css('border', '2px solid red')
    } else {
      myProgectValidation = true
      $(this).next().hide()
      $(this).css('border', '2px solid green')
    }
  })

  // Project Title Validation
  $('.progect-input').keyup(function () {
    const progectTitle = $(this).val()
    const progectRegx = /^[A-Za-z\s]{3,18}$/

    if (!progectRegx.test(progectTitle)) {
      progectTitleValidation = false
      $(this)
        .next('span')
        .show()
        .text(
          'Project title must be 3 to 18 letters only (no numbers or symbols).'
        )
      $(this).css('border', '2px solid red')
    } else {
      progectTitleValidation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  // Project Description Validation
  $('.progectDesc-input').keyup(function () {
    const progectDesc = $(this).val()
    const progectDescRegx =
      progectDesc.length >= 200 && progectDesc.length <= 400

    if (!progectDescRegx) {
      progectDescValidation = false
      $(this)
        .next('span')
        .show()
        .text('Project description should be between 200 and 400 characters.')
      $(this).css('border', '2px solid red')
    } else {
      progectDescValidation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  // Form Submit Validation
  $('#progect_data').submit(function (e) {
    $('#myProgect').keyup()
    $('.progect-input').keyup()
    $('.progectDesc-input').keyup()

    if (
      !myProgectValidation ||
      !progectTitleValidation ||
      !progectDescValidation
    ) {
      e.preventDefault()
      alert(
        '❌ Please fix all the validation errors before submitting the form.'
      )
    } else {
      alert('✅ Progect information submitted successfully!')
    }
  })

  // service section validaiton

  $('#myService').keyup(function () {
    let myServiceDesc = $(this).val()
    let myServiceDescValid =
      myServiceDesc.length >= 250 && myServiceDesc.length <= 500

    if (!myServiceDescValid) {
      myserviceValidation = false
      $(this)
        .next('span')
        .show()
        .text(
          '(Your description must be between 250 to 500 characters. Please provide enough detail about your services to help clients understand what you offer.)'
        )
      $(this).css('border', '2px solid red')
    } else {
      myserviceValidation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  $('.service-input').keyup(function () {
    let servicesTitle = $(this).val()
    let servicesRegx = /^[A-Za-z\s]{3,25}$/

    if (!servicesRegx.test(servicesTitle)) {
      serviceValidation = false
      $(this)
        .next('span')
        .show()
        .text(
          'Please enter a valid service title (only letters, 3-25 characters)'
        )
      $(this).css('border', '2px solid red')
    } else {
      serviceValidation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  $('.serviceDesc-input').keyup(function () {
    let serviceDesc = $(this).val()
    let serviceDescValid =
      serviceDesc.length >= 200 && serviceDesc.length <= 400

    if (!serviceDescValid) {
      serviceDescValidation = false
      $(this)
        .next('Span')
        .show()
        .text(
          'Description must be between 200 to 400 characters. Explain your service in detail.'
        )
      $(this).css('border', '2px solid red')
    } else {
      serviceDescValidation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  $('#service_data').submit(function (e) {
    $('.myserviceDesc').keyup()
    $('.service-input').keyup()
    $('.serviceDesc-input').keyup()
    if (!myserviceValidation || !serviceValidation || !serviceDescValidation) {
      e.preventDefault()
      alert(
        '❌ Please fix all the validation errors before submitting the form.'
      )
    } else {
      alert('✅ Service information submitted successfully!')
    }
  })

  // testimonial_data

  $('#myTestimonial').keyup(function () {
    let myTestDesc = $(this).val()
    let myTestDescValid = myTestDesc.length >= 250 && myTestDesc.length <= 500

    if (!myTestDescValid) {
      myTestValidation = false
      $(this)
        .next('span')
        .show()
        .text(
          '(Your description must be between 250 to 500 characters. Please provide enough detail about your services to help clients understand what you offer.)'
        )
      $(this).css('border', '2px solid red')
    } else {
      myTestValidation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  $('.test-input').keyup(function () {
    let testTitle = $(this).val()
    let testTitleRegx = /^[A-Za-z\s]{3,20}$/

    if (!testTitleRegx.test(testTitle)) {
      testTitleValidation = false
      $(this)
        .next('span')
        .show()
        .text(
          'Please enter a valid service title (only letters, 3-20 characters)'
        )
      $(this).css('border', '2px solid red')
    } else {
      testTitleValidation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  $('.testDesc-input').keyup(function () {
    let testDesc = $(this).val()
    let testDescValid = testDesc.length >= 200 && testDesc.length <= 300

    if (!testDescValid) {
      testDescValidation = false
      $(this)
        .next('Span')
        .show()
        .text(
          'Description must be between 200 to 300 characters. Explain your service in detail.'
        )
      $(this).css('border', '2px solid red')
    } else {
      testDescValidation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  $('#testimonial_data').submit(function (e) {
    $('#myTestimonial').keyup()
    $('.test-input').keyup()
    $('.testDesc-input').keyup()
    if (!myTestValidation || !testTitleValidation || !testDescValidation) {
      e.preventDefault()
      alert(
        '❌ Please fix all the validation errors before submitting the form.'
      )
    } else {
      alert('✅ Testimonial information submitted successfully!')
    }
  })

  //   contact_data

  // Email Validation
  $('#email').on('keyup blur', function () {
    let email = $(this).val().trim()
    let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/

    if (!emailRegex.test(email)) {
      emailValidation = false
      $(this).next('span').show().text('Please enter a valid email address.')
      $(this).css('border', '2px solid red')
    } else {
      emailValidation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  // Phone Validation
  $('#phone').on('keyup blur', function () {
    let phone = $(this).val().trim()
    let phoneRegex = /^[0-9]{10,15}$/

    if (!phoneRegex.test(phone)) {
      phoneValidation = false
      $(this)
        .next('span')
        .show()
        .text('Please enter a valid phone number (10-15 digits).')
      $(this).css('border', '2px solid red')
    } else {
      phoneValidation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  // Address Validation
  $('#address').on('keyup blur', function () {
    let address = $(this).val().trim()
    if (address.length < 5) {
      addressValidation = false
      $(this)
        .next('span')
        .show()
        .text('Address must be at least 5 characters long.')
      $(this).css('border', '2px solid red')
    } else {
      addressValidation = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid green')
    }
  })

  // Form Submit Validation
  $('#contact_form').submit(function (e) {
    $('#email').keyup()
    $('#phone').keyup()
    $('#address').keyup()

    if (!emailValidation || !phoneValidation || !addressValidation) {
      e.preventDefault()
      alert('Please fix all the validation errors before submitting the form.')
    } else {
      alert('✅ Contact information submitted successfully!')
    }
  })
})
