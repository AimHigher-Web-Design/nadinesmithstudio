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

//Call Functions
  window.onLoad = activeMenu();
