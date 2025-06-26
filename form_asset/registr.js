let loadProgress = 0
const percentText = document.getElementById('percent')

const interval = setInterval(() => {
  loadProgress += 1

  gsap.to('.progress-bar', {
    width: loadProgress + '%',
    duration: 0.4,
    ease: 'power1.out',
  })

  percentText.textContent = loadProgress

  if (loadProgress >= 100) {
    clearInterval(interval)

    //  Animate loader text to fade out before panels
    gsap.to('.loader-text', {
      opacity: 0,
      duration: 0.6,
      ease: 'power2.inOut',
      onComplete: () => {
        gsap.to('.left', {
          x: '-100%',
          duration: 1.2,
          ease: 'power4.inOut',
        })

        gsap.to('.right', {
          x: '100%',
          duration: 1.2,
          ease: 'power4.inOut',
          onComplete: () => {
            document.getElementById('loader').style.display = 'none'
            document.body.style.overflow = 'auto'
          },
        })
      },
    })
  }
}, 100)

// toggle password

const eyeIcon = document.querySelectorAll('.eye')

eyeIcon.forEach((eye) => {
  eye.addEventListener('click', () => {
    const inputGroup = eye.closest('.input-group')
    const passwordInput = inputGroup.querySelector('.password')

    if (passwordInput.type === 'password') {
      passwordInput.type = 'text'
      eye.innerHTML = `<i class="fa-solid fa-eye-slash"></i>`
    } else {
      passwordInput.type = 'password'
      eye.innerHTML = `<i class="fa-solid fa-eye"></i>`
    }
  })
})

//   toggle form

function toggleForms() {
  const loginForm = document.getElementById('login-form')
  const signupForm = document.getElementById('signup-form')

  if (loginForm.style.display === 'none') {
    loginForm.style.display = 'block'
    signupForm.style.display = 'none'
  } else {
    loginForm.style.display = 'none'
    signupForm.style.display = 'block'
  }
}

// stars

const starsContainer = document.querySelector('.stars-container')

// Function create stars
function createStar() {
  const star = document.createElement('div')
  star.classList.add('star')

  // Random position and size
  const size = Math.random() * 5 + 2
  const left = Math.random() * window.innerWidth

  star.style.width = `${size}px`
  star.style.height = `${size}px`
  star.style.left = `${left}px`

  starsContainer.appendChild(star)

  // Remove star
  setTimeout(() => {
    star.remove()
  }, 4000)
}

setInterval(createStar, 100) // 1 star every 100ms

// jquery input validation with signup form
// name regx

$(document).ready(function () {
  let signNameValid = false
  let signEmailValid = false
  let signPasswordValid = false

  $('#signup-name').keyup(function () {
    let signup_name = $(this).val()
    let signup_name_Regx = /^[A-Za-z\s]{3,18}$/

    if (!signup_name_Regx.test(signup_name)) {
      signNameValid = false
      $(this)
        .next('span')
        .show()
        .text('Please Enter Your Alphabate [3, 20]')
        .css('color', 'red')
      $(this).css('border', '2px solid red')
    } else {
      signNameValid = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid darkblue')
    }
  })

  // email regx

  $('#signup-email').keyup(function () {
    let signup_email = $(this).val()
    let signup_email_Regx = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3}$/

    if (!signup_email_Regx.test(signup_email)) {
      signEmailValid = false
      $(this)
        .next('span')
        .show()
        .text('Please enter a valid email adress')
        .css('color', 'red')
      $(this).css('border', '2px solid red')
    } else {
      signEmailValid = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid darkblue')
    }
  })

  // password regx

  $('#signup-password').keyup(function () {
    let signup_password = $(this).val()
    let signup_password_Regx =
      /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[()@$%&./%_])[A-Za-z\d()_@$%&./%]{8,}$/

    if (!signup_password_Regx.test(signup_password)) {
      signPasswordValid = false
      $(this)
        .next('span')
        .show()
        .text(
          'Must contain A-Z, a-z, 0-9, special char, 8+ chars (example : XyZ%2024 )'
        )
        .css('color', 'red')
      $(this).css('border', '2px solid red')
    } else {
      signPasswordValid = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid darkblue')
    }
  })

  $('#signup-form').submit(function (e) {
    $('#signup-name').keyup()
    $('#signup-email').keyup()
    $('#signup-password').keyup()

    if (!signNameValid || !signEmailValid || !signPasswordValid) {
      e.preventDefault() // ✋ Stop submit
      alert('Please fix all the validation errors before submitting.')
    }
  })
})

// login form regx :

$(document).ready(function () {
  loginEmailValid = false
  loginPasswordValied = false

  $('#login-email').keyup(function () {
    let login_email = $(this).val()
    let login_email_Regx = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/

    if (!login_email_Regx.test(login_email)) {
      loginEmailValid = false
      $(this)
        .next('span')
        .show()
        .text('Please enter a valid email adress')
        .css('color', 'red')
      $(this).css('border', '2px solid red')
    } else {
      loginEmailValid = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid darkblue')
    }
  })

  // password regx

  $('#login-password').keyup(function () {
    let login_password = $(this).val()
    let login_password_Regx =
      /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$%&/_()])[A-Za-z\d@$%&/_()]{8,}$/

    if (!login_password_Regx.test(login_password)) {
      loginPasswordValied = false
      $(this)
        .next('span')
        .show()
        .text(
          '(Must contain A-Z, a-z, 0-9, special char, 8+ chars (example : XyZ%2025 )'
        )
        .css('color', 'red')
      $(this).css('border', '2px solid red')
    } else {
      loginPasswordValied = true
      $(this).next('span').hide()
      $(this).css('border', '2px solid darkblue')
    }
  })

  // stop submition

  $('#login-form').submit(function (e) {
    $('#login-email').keyup()
    $('#login-password').keyup()

    if (!loginEmailValid || !loginPasswordValied) {
      e.preventDefault()
      alert('Please fix all the validation errors before submitting.')
    }
  })
})

// login form input value reset

const loginFrom = document.getElementById('login')

loginFrom.addEventListener('submit', (event) => {
  setTimeout(() => {
    loginFrom.reset()
  }, 1000)
})

// login form input value reset

const signFrom = document.getElementById('signup')

signFrom.addEventListener('submit', (event) => {
  setTimeout(() => {
    signFrom.reset()
  }, 1000)
})

// portfolio form detail home, about, etc gsap
