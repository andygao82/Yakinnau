document.addEventListener( 'DOMContentLoaded', function () {
  const body = document.querySelector('body');
  const bannerSection = document.getElementById('banner-section');
  const aboutSection = document.getElementById('about');
  const reservationSection = document.getElementById('reservation');
  const functionSection = document.getElementById('function');
  const siteWrapper = document.getElementById('wrapper');
  const bannerImages = document.querySelectorAll('.banner-image');
  const bannerWrapper = document.getElementById('banner-wrapper');
  const bottomContent = document.getElementById("bottom-content");

  const homeButton = document.getElementById('home-button');
  const aboutButton = document.getElementById('about-button');
  const reservationButton = document.getElementById('reservation-button');
  const functionButton = document.getElementById('function-button');

  const laptopQuery = window.matchMedia("(max-width: 1599px)");
  const ipadLargeQuery = window.matchMedia("(max-width: 1399px)");
  const ipadMediumQuery = window.matchMedia("(max-width: 1199px)");
  const ipadSmallQuery = window.matchMedia("(max-width: 991px)");
  const mobileQuery = window.matchMedia("(max-width: 767px)");

  function btnClickToDiv (button,targetElement) {
    button.addEventListener("click", function(event) {
      event.preventDefault();
      let targetOffsetTop = targetElement.offsetTop;
      window.scrollTo({
          top: targetOffsetTop,
          behavior: 'smooth'
      });
    });
  }

  btnClickToDiv(homeButton, bannerSection)
  btnClickToDiv(aboutButton, aboutSection)
  btnClickToDiv(reservationButton, reservationSection)
  btnClickToDiv(functionButton, functionSection)

  setTimeout (function () {
    body.classList.add('init');
  }, 500)
  setTimeout (function () {
    siteWrapper.classList.add('active');
  }, 2000)
  setTimeout (function () {
    siteWrapper.classList.add('bg-done');
  }, 3000)
  setTimeout (function () {
    bannerImages.forEach( function (bannerImage) {
      bannerImage.classList.add('fadeUp--anime');
    })
  }, 1500)
  if (mobileQuery.matches) {
    setTimeout (function () {
      bannerWrapper.classList.add('active');
    }, 2000)
  } else {
    setTimeout (function () {
      bannerWrapper.classList.add('active');
    }, 6000)
  }


  inView('.fadeIn-left').on('enter', function (element) {
    element.classList.add('fadeIn--anime');
  });
  inView('.fadeIn-right').on('enter', function (element) {
    element.classList.add('fadeIn--anime');
  });
  inView('.fadeUp-0').on('enter', function (element) {
    element.classList.add('fadeUp-0--anime');
  });
  inView('.bottom-section').on('enter', function (element) {
    element.classList.add('bottom-section--anime');
  });
  
  window.addEventListener('scroll', function () {
    const scrollValue = window.scrollY;
    if (ipadSmallQuery.matches) {
      siteWrapper.style.backgroundPositionY = '50%';
    } else {
      siteWrapper.style.backgroundPositionY = 'calc(50% + '+ scrollValue * .1 + 'px)';
    }
    if(scrollValue >= 149) {
      setTimeout (function () {
        siteWrapper.classList.remove('init');
      }, 1000)
    }
    if (scrollValue > 149 ) {
      bottomContent.classList.add('fadeAway');
    }
  });

});




