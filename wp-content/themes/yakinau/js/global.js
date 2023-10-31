document.addEventListener( 'DOMContentLoaded', function () {
  const siteWrapper = document.getElementById('wrapper');
  setTimeout (function () {
    siteWrapper.classList.add('active');
    console.log(siteWrapper.classList);
  }, 2000)
  setTimeout (function () {
    siteWrapper.classList.add('bg-done');
  }, 3000)
  window.addEventListener('scroll', function () {
    const scrollValue = window.scrollY;
    siteWrapper.style.backgroundPositionY = 'calc(50% + '+ scrollValue * .1 + 'px)';
  });
});