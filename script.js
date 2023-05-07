const navbarNav = document.querySelector('.navbar-nav');
document.querySelector('#hamburger-menu').
onclick = () => {
    navbarNav.classList.toggle('active');
}

const hamburger= document.querySelector('#hamburger-menu');

document.addEventListener('click', function (e) {
if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
}})


const imageWrapper = document.querySelector('.carousel')
const imageItems = document.querySelectorAll('.carousel > *')
const imageLength = imageItems.length
const perView = 4
let totalScroll = 0
const delay = 2000

imageWrapper.style.setProperty('--per-view', perView)
for(let i = 0; i < perView; i++) {
  imageWrapper.insertAdjacentHTML('beforeend', imageItems[i].outerHTML)
}

let autoScroll = setInterval(scrolling, delay)

function scrolling() {
  totalScroll++
  if(totalScroll == imageLength + 1) {
    clearInterval(autoScroll)
    totalScroll = 1
    imageWrapper.style.transition = '0s'
    imageWrapper.style.left = '0'
    autoScroll = setInterval(scrolling, delay)
  }
  const widthEl = document.querySelector('.carousel > :first-child').offsetWidth + 24
  imageWrapper.style.left = `-${totalScroll * widthEl}px`
  imageWrapper.style.transition = '.3s'
}