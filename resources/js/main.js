// Variables
// console.log('main file');
//Functions
var activeMenu = function() {
  // console.log('running');
  if(window.location.href.indexOf('jewellery') > -1) {
    $('.active').removeClass('active');
    $('#menu-item-17').addClass('active');
  }
  else if(window.location.href.indexOf('music') > -1) {
    $('.active').removeClass('active');
    $('#menu-item-18').addClass('active');
  }
  else if(window.location.href.indexOf('photography') > -1) {
    $('.active').removeClass('active');
    $('#menu-item-19').addClass('active');
  }
  else {
    $('.active').removeClass('active');
  };
};

// Mobile Menu
var mobileMenu = function() {
  // console.log('script is running');
  document.getElementsByClassName('mobile-menu')[0].addEventListener('click', function() {
    // console.log('found the event');
    // console.log(document.getElementById('menu-home-page').getElementsByClassName('active'));
    if(document.getElementById('menu-home-page').classList.contains('active') == true) {
      console.log('stuff is true');
      document.getElementById('menu-home-page').classList.remove('active');
    }
    else {
      // console.log('stuff is false');
      document.getElementById('menu-home-page').classList.add('active');
    };
    // console.log('finished if');
  });
  // console.log('did event stuff');
};

//Call Functions
  window.onLoad = activeMenu();
  window.onLoad = mobileMenu();
