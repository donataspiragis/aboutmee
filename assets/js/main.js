"use strict";

$('.menu').click(function(){
    $(this).toggleClass('open');
});




$(document).ready(function(){
    $("a").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
          window.location.hash = hash;
        });
      }
    });
  });
$(document).ready(function(){ 
    $('#scroller-top').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 700); 
        return false; 
    }); 
});

var header = document.getElementById("header");
var sticky = header.offsetTop;

function stickToTop() {
  if (window.pageYOffset > sticky + 400) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

window.onscroll = function() {stickToTop()};




// $(function () {
//   $('#form').bind('click', function (event) {

// event.preventDefault();
//     $.ajax({
//       type: 'POST',
//       url: 'save.php',
//       data: $('form').serialize(),
//       success: function () {
//         alert('form was submitted');
//       }
//     });

//   });
// });

$(document).ready(function(){ 
  $('#play').click(function(){ 
    $('#gamess').removeClass('game-container');
    $('#gamess').addClass('game-container-show');
    $('#cover-game').removeClass('game-img');
    $('#cover-game').addClass('game-img-hide');
  }); 
});
