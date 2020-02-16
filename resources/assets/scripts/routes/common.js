// humburger
export default {
  init() {
    // JavaScript to be fired on all pages
    $('.hamburger').click(function() {
      $(this).toggleClass('is-active');
      $('.globalmenu').toggleClass('is-active'); 
      $('.globalmenu__background--top').toggleClass('is-active');
      $('.globalmenu__background--middle').toggleClass('is-active');
      $('.globalmenu__background--under').toggleClass('is-active');
    });
  },
  finalize() {
     // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

// newsletter
function popup() {
  var popup = document.getElementById('popup-prompt');
  if(!popup) return;

  var closeButton = document.getElementById('close-button');
  var trigger = document.getElementById('popping-trigger');

  closePopUp(closeButton);
  closePopUp(trigger);
  function closePopUp(elem) {
    if(!elem) return;
    elem.addEventListener('click', function() {
      popup.classList.toggle('popping');
    });
  }
}
popup();
