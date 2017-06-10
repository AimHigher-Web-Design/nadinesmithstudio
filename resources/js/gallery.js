// Variables
var grid = document.querySelector('.grid');
var galleryPictures = {};

//Functions
//draggabilly
var draggy = function() {
  //Initialise Packery
  var pckry = new Packery(grid, {
    itemSelector: '.grid-item',
    gutter: 5,
    columnWidth: 100,
    columnHeight: 100
  });

  pckry.getItemElements().forEach(function(itemElem) {
    var draggie = new Draggabilly(itemElem);
    pckry.bindDraggabillyEvents(draggie);
  });
};

//Gallery pictures
var imageNumbers = function () {
  // console.log('image numbers running');
  //Lanscape images
  var j = 1;
  for(i = 1; i < 175; i++) {
    galleryPictures[i] = 'l(' + j + ')';
    j++;
  };
  //Portrait images
  j = 1;
  for(i = 175; i < 185; i++) {
    galleryPictures[i] = 'p(' + j + ')';
    j++;
  };
  //Square images
  j = 1
  for(i = 185; i < 213; i++) {
    galleryPictures[i] = 's(' + j + ')';
    j++;
  };
  // console.log(galleryPictures);
  pictures();
};

//Gallery generation
var pictures = function() {
  // console.log('pictures running');
  var usedImages = [];
  var usedImagesLength = usedImages.length;
  var hasUsed = false;
  // console.log(usedImages);
  //Wide images
  for(i = 1; i <= 8; i++) {
    var numId = Math.floor(Math.random()*174 + 1);
    usedImagesLength = usedImages.length;
    for(j = -1; j <= usedImagesLength; j++) {
      if(usedImages[j] == 'l-' + numId) {
        hasUsed = true;
      }
      else {}
    };
    if(hasUsed == true) {
      i--;
    }
    // else {
    //   $('.grid').prepend('<div class="grid-item grid-item--width2"><img class="gallery-pics gallery-pics-l" src="/wordpress/wp-content/themes/glenrockhay/resources/images/gallery/l(' + numId + ').jpg" /></div>');
    //   if(usedImagesLength == 0) {
    //     usedImages[0] = 'l-' + numId;
    //   }
    //   else {
    //     usedImages[usedImagesLength] = 'l-' + numId;
    //   };
    };
  };
  //
  //Tall images
  for(i = 1; i <= 8; i++) {
    var numId = Math.floor(Math.random()*39 + 1);
    usedImagesLength = usedImages.length;
    if (numId < 11) {
      for(j = -1; j <= usedImagesLength; j++) {
        if(usedImages[j] == 'p-' + numId) {
          hasUsed = true;
        }
        else {}
      };
      if(hasUsed == true) {
        i--;
      }
      else {
        $('.grid').prepend('<div class="grid-item grid-item--height2"><img class="gallery-pics gallery-pics-p" src="/wordpress/wp-content/themes/glenrockhay/resources/images/gallery/p(' + numId + ').jpg" /></div>');
        // usedImages[usedImagesLength] = 'p-' + numId;
      };
    }
    else {
      numId -= 10;
      for(j = -1; j <= usedImagesLength; j++) {
        if(usedImages[j] == 's-' + numId) {
          hasUsed = true;
        }
        else {}
      };
      if(hasUsed == true) {
        i--;
      }
      else {
        $('.grid').prepend('<div class="grid-item grid-item--height2"><img class="gallery-pics gallery-pics-s" src="/wordpress/wp-content/themes/glenrockhay/resources/images/gallery/s(' + numId + ').jpg" /></div>');
        usedImages[usedImagesLength] = 's-' + numId;
      };
    };
  };
  //small images
  for(i = 1; i <= 16; i++) {
    // console.log('This has run ' + i + ' time');
    var num = Math.floor(Math.random()*3 + 1);
    // var num = 1;
    hasUsed = false;
    // console.log(num);
    if(num == 1) {
      // console.log('num is 1');
      var numId = Math.floor(Math.random()*174 + 1);
      // console.log(numId);
      var usedImagesLength = usedImages.length;
      for(j = 0; j < usedImagesLength; j++) {
        if(usedImages[j] == 'l-' + numId) {
          // console.log('image has already been used ' + numId);
          hasUsed = true;
        }
        else {
          // console.log('should be printing stuff');
          // console.log(usedImages);
          // console.log(j + ' does ' + usedImages[j] + ' equal ' + numId);
        };
      };
      if(hasUsed == true) {
        i--;
        // console.log('image was used, lets try again');
      }
      else {
        $('.grid').prepend('<div class="grid-item"><img class="gallery-pics gallery-pics-l" src="/wordpress/wp-content/themes/glenrockhay/resources/images/gallery/l(' + numId + ').jpg" /></div>');
        usedImages[usedImagesLength] = 'l-' + numId;
        // console.log(usedImages);
      };
    }
    else if (num == 2) {
      // console.log('num is 2');
      var numId = Math.floor(Math.random()*29 + 1);
      var usedImagesLength = usedImages.length;
      for(j = 0; j < usedImagesLength; j++) {
        if(usedImages[j] == 's-' + numId) {
          // console.log('image has already been used' + 'numId');
          hasUsed = true;
        }
        else {
          // console.log('should be printing stuff');
          // console.log(usedImages);
          // console.log(j + 'does' + usedImages[j] + 'equal' + numId);
        };
      };
      if(hasUsed == true) {
        i--;
        // console.log('image was used, lets try again');
      }
      else {
        $('.grid').prepend('<div class="grid-item"><img class="gallery-pics gallery-pics-s" src="/wordpress/wp-content/themes/glenrockhay/resources/images/gallery/s(' + numId + ').jpg" /></div>');
        usedImages[usedImagesLength] = 's-' + numId;
        // console.log(usedImages);
      };
    }
    else {
      // console.log('num is 3');
      var numId = Math.floor(Math.random()*10 + 1);
      var usedImagesLength = usedImages.length;
      for(j = 0; j < usedImagesLength; j++) {
        if(usedImages[j] == 'p-' + numId) {
          // console.log('image has already been used' + 'numId');
          hasUsed = true;
        }
        else {
          // console.log('should be printing stuff');
          // console.log(usedImages);
          // console.log(j + 'does' + usedImages[j] + 'equal' + numId);
        };
      };
      if(hasUsed == true) {
        i--;
        // console.log('image was used, lets try again');
      }
      else {
        $('.grid').prepend('<div class="grid-item"><img class="gallery-pics gallery-pics-p" src="/wordpress/wp-content/themes/glenrockhay/resources/images/gallery/p(' + numId + ').jpg" /></div>');
        usedImages[usedImagesLength] = 'p-' + numId;
        // console.log(usedImages);
      };
    };
  };
  //Big images
  for(i = 1; i <= 8; i++) {
    // console.log('This has run ' + i + ' time');
    var num = Math.floor(Math.random()*3 + 1);
    // var num = 1;
    hasUsed = false;
    // console.log(num);
    if(num == 1) {
      // console.log('num is 1');
      var numId = Math.floor(Math.random()*174 + 1);
      // console.log(numId);
      var usedImagesLength = usedImages.length;
      for(j = 0; j < usedImagesLength; j++) {
        if(usedImages[j] == 'l-' + numId) {
          // console.log('image has already been used ' + numId);
          hasUsed = true;
        }
        else {
          // console.log('should be printing stuff');
          // console.log(usedImages);
          // console.log(j + ' does ' + usedImages[j] + ' equal ' + numId);
        };
      };
      if(hasUsed == true) {
        i--;
        // console.log('image was used, lets try again');
      }
      else {
        $('.grid').prepend('<div class="grid-item grid-item--width2 grid-item--height2"><img class="gallery-pics gallery-pics-l" src="/wordpress/wp-content/themes/glenrockhay/resources/images/gallery/l(' + numId + ').jpg" /></div>');
        usedImages[usedImagesLength] = 'l-' + numId;
        // console.log(usedImages);
      };
    }
    else if (num == 2) {
      // console.log('num is 2');
      var numId = Math.floor(Math.random()*29 + 1);
      var usedImagesLength = usedImages.length;
      for(j = 0; j < usedImagesLength; j++) {
        if(usedImages[j] == 's-' + numId) {
          // console.log('image has already been used' + 'numId');
          hasUsed = true;
        }
        else {
          // console.log('should be printing stuff');
          // console.log(usedImages);
          // console.log(j + 'does' + usedImages[j] + 'equal' + numId);
        };
      };
      if(hasUsed == true) {
        i--;
        // console.log('image was used, lets try again');
      }
      else {
        $('.grid').prepend('<div class="grid-item grid-item--width2 grid-item--height2"><img class="gallery-pics gallery-pics-s" src="/wordpress/wp-content/themes/glenrockhay/resources/images/gallery/s(' + numId + ').jpg" /></div>');
        usedImages[usedImagesLength] = 's-' + numId;
        // console.log(usedImages);
      };
    }
    else {
      // console.log('num is 3');
      var numId = Math.floor(Math.random()*10 + 1);
      var usedImagesLength = usedImages.length;
      for(j = 0; j < usedImagesLength; j++) {
        if(usedImages[j] == 'p-' + numId) {
          // console.log('image has already been used' + 'numId');
          hasUsed = true;
        }
        else {
          // console.log('should be printing stuff');
          // console.log(usedImages);
          // console.log(j + 'does' + usedImages[j] + 'equal' + numId);
        };
      };
      if(hasUsed == true) {
        i--;
        // console.log('image was used, lets try again');
      }
      else {
        $('.grid').prepend('<div class="grid-item grid-item--width2 grid-item--height2"><img class="gallery-pics gallery-pics-p" src="/wordpress/wp-content/themes/glenrockhay/resources/images/gallery/p(' + numId + ').jpg" /></div>');
        usedImages[usedImagesLength] = 'p-' + numId;
        // console.log(usedImages);
      };
    };
  };
  // draggy();
  setTimeout(draggy, 1000);
};

//Call Functions
$(document).ready(imageNumbers);
