document.addEventListener( 'DOMContentLoaded', function () {
  const body = document.querySelector('body');
  const bannerSection = document.getElementById('banner-section');
  const aboutSection = document.getElementById('about');
  const siteWrapper = document.getElementById('wrapper');
  const bannerImages = document.querySelectorAll('.banner-image');
  const bannerWrapper = document.getElementById('banner-wrapper');
  const bottomContent = document.getElementById("bottom-content");
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
  setTimeout (function () {
    bannerWrapper.classList.add('active');
  }, 6000)

  window.addEventListener('scroll', function () {
    const scrollValue = window.scrollY;
    siteWrapper.style.backgroundPositionY = 'calc(50% + '+ scrollValue * .1 + 'px)';
    if(scrollValue == 149) {
      setTimeout (function () {
        siteWrapper.classList.remove('init');
      }, 1000)
    }

    if (scrollValue > 149 ) {
      bottomContent.classList.add('fadeAway');

    }

  
    
  });

});




