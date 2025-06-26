// loading animation

setTimeout(() => {
  gsap.fromTo(
    '.loading-page',
    { opacity: 1 },
    {
      opacity: 0,
      duration: 1,
      delay: 4,
      y: '-100%',
    }
  )
}, 5000)

gsap.fromTo(
  '.logo-name',
  {
    y: 50,
    opacity: 0,
  },
  {
    y: 0,
    opacity: 1,
    duration: 3,
    delay: 1.2,
  }
)

const hamburger = document.getElementById('hamburger')
const navLinks = document.getElementById('navLinks')
const hamburgerIcon = hamburger.querySelector('i')

hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('show')

  // Toggle between bars and x
  if (hamburgerIcon.classList.contains('fa-bars')) {
    hamburgerIcon.classList.remove('fa-bars')
    hamburgerIcon.classList.add('fa-times') // X
    hamburgerIcon.classList.remove('fa-times')
    hamburgerIcon.classList.add('fa-bars')
  }
})

// body cursor

const body_cursor = document.querySelector('.body-cursor')

window.addEventListener('mousemove', (e) => {
  // console.log(e.clientX);
  body_cursor.style.left = e.clientX + 'px'
  body_cursor.style.top = e.clientY + 'px'
})

// gsap cursor

const cursor = document.querySelector('.cursor')
const bodys = document.body

bodys.addEventListener('mousemove', (value) => {
  gsap.to(cursor, {
    x: value.x,
    y: value.y,
    duration: 0.4,
  })
})

// type writter

let el = document.getElementById('type-data')

let titles = [el.dataset.title1, el.dataset.title2, el.dataset.title3]

let typeWritter = new Typed('.smart_text', {
  strings: titles,
  typeSpeed: 150,
  backSpeed: 80,
  loop: true,
})

// svg animation gsap

gsap.registerPlugin(ScrollTrigger)

document.querySelectorAll('.line-box').forEach((box) => {
  gsap.to(box, {
    width: '98%',
    ease: 'power2.out',
    scrollTrigger: {
      trigger: box,
      start: 'top 80%',
      end: 'top 30%',
      scrub: true,
      // markers: true
    },
  })
})

// About tab link

const tabs = document.querySelectorAll('.tab-links')
const contents = document.querySelectorAll('.tab-content')

tabs.forEach((tab) => {
  tab.addEventListener('click', () => {
    tabs.forEach((t) => t.classList.remove('active'))
    contents.forEach((c) => c.classList.remove('active-content'))

    tab.classList.add('active')
    document.getElementById(tab.dataset.tab).classList.add('active-content')
  })
})

gsap.registerPlugin(ScrollTrigger)

ScrollTrigger.matchMedia({
  // Desktop
  '(min-width: 1200px)': function () {
    gsap.to('.progect .progect-box', {
      x: '-320%',
      scrollTrigger: {
        trigger: '.progect',
        scroller: 'body',
        start: 'top -30%',
        end: 'top -1000%',
        scrub: 2,
        pin: true,
      },
    })
  },

  // Tablet
  '(max-width: 1199px) and (min-width: 768px)': function () {
    gsap.to('.progect .progect-box', {
      x: '-370%',
      scrollTrigger: {
        trigger: '.progect',
        scroller: 'body',
        start: 'top -30%',
        end: 'top -900%',
        scrub: 2,
        pin: true,
      },
    })
  },

  // Mobile
  '(max-width: 768px) and (min-width: 568px)': function () {
    gsap.to('.progect .progect-box', {
      x: '-410%',
      scrollTrigger: {
        trigger: '.progect',
        scroller: 'body',
        start: 'top -32%',
        end: 'top -800%',
        scrub: 2,
        pin: true,
      },
    })
  },

  // (<= 567px)
  '(max-width: 560px)': function () {
    gsap.to('.progect .progect-box', {
      x: '-450%',
      scrollTrigger: {
        trigger: '.progect',
        scroller: 'body',
        start: 'top -34%',
        end: 'top -1200%',
        scrub: 2,
        pin: true,
      },
    })
  },

  // (Only for exact or smaller devices like 360px wide)
  '(max-width: 360px)': function () {
    gsap.to('.progect .progect-box', {
      x: '-470%',
      scrollTrigger: {
        trigger: '.progect',
        scroller: 'body',
        start: 'top -35%',
        end: 'top -1300%',
        scrub: 2,
        pin: true,
      },
    })
  },
})

// x: `-${(boxCount - 1) * 100}%`
