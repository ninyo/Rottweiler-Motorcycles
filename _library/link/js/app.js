var $mainWrap = $('.wrapper');
var $mainContent = $('.main');

function toggleNavigation() {
  $mainWrap.toggleClass('wrapper--active-nav');
  if($mainWrap.hasClass('wrapper--active-nav')) {
    $mainContent.on('click', toggleNavigation);
  } else {
    $mainContent.off('click', toggleNavigation);
  }
}

$('.nav__toggle-btn').on('click', function() {
  toggleNavigation();
});
