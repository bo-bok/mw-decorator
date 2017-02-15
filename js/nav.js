// NAVIGATION

// initially, hide the modal box
document.querySelector('.nav-modal').style.display = 'none';

// when user clicks small menu (open) icon, the modal box is displayed
document.querySelector('.menu-sm-icon-open').addEventListener('click', function() {
  document.querySelector('.nav-modal').style.display = 'block';
  document.querySelector('body').classList.add('nav-modal-open');
  document.querySelector('.menu-sm-icon').style.display = 'none';
});

// when user clicks small menu (close) icon, the modal box is hidden
document.querySelector('.menu-sm-icon-close').addEventListener('click', function() {
  document.querySelector('.nav-modal').style.display = "none";
  document.querySelector('body').classList.remove('nav-modal-open');
  document.querySelector('.menu-sm-icon').style.display = 'block';
});

// if (window.matchMedia("(min-width: 992px)") == true) {
//   document.querySelector('.nav-modal').style.display = "none";
// }
