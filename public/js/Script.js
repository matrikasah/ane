

function check(){
  alert('dshdkhs');
}


function toggling(){
  alert('dhjkhdf');
}


var swiper = new Swiper(".mySwiper1", {
  // Default parameters
  slidesPerView: 3,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 2000,
  },
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    920: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
  },
});


var swiper = new Swiper(".mySwiper", {
  // Default parameters
  slidesPerView: 3,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 2000,
  },
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    920: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  },
});

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
}

// document.getElementById("vid").play();

AOS.init();

$(document).ready(function () {
  $(".dropdown-toggle").hover(
    function () {
      $(this).addClass("show");
      // $(this).addClass("position-r");
      // $( this ).siblings( "ul" ).addClass("position-r");
    },
    function () {
      $(this).removeClass("show");
      // $( this ).siblings( "ul" ).removeClass("position-r");
      // $( this ).siblings( "ul" ).removeClass(".show");
    }
  );



});

$("#userDob").datepicker({
  format: "dd-mm-yyyy",
});



$('.dropdown-toggle').click(function() {
  $('.drop-new').dblclick();
  alert('dddd');
});


$(document).ready(function(){ 
	var touch 	= $('#resp-menu');
	var menu 	= $('.menu');
 
	$(touch).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	
	$(window).resize(function(){
		var w = $(window).width();
		if(w > 992 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}


    $('body').bind('cut copy paste', function (e) {
      
      e.preventDefault();
      
    });
	});


  $('#choose-course').click(function(){
    var link= $('.choosecourse').val();
    if(link != "blank"){
      window.location.href = link;
    }
  })
	
});



// // Add active class to the current button (highlight it)
// var header = document.getElementById("menu-active-link");
// var btns = header.getElementsByClassName("menu-link");
// for (var i = 0; i < li.length; i++) {
//   li[i].addEventListener("click", function() {
//   var current = document.getElementsByClassName("active");
//   current[0].className = current[0].className.replace(" active", "");
//   this.className += " active";
//   });
// }


$(".allow_decimal").on("input", function(evt) {
  var self = $(this);
  self.val(self.val().replace(/[^0-9\.]/g, ''));
  if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57)) 
  {
    evt.preventDefault();
  }
});


document.onkeydown = function(e) {
  if(event.keyCode == 123) {
      return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
      return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
      return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
      return false;
  }
  if(e.ctrlKey && e.keyCode == 'C'.charCodeAt(0)){
      return false;
  }
  if(e.ctrlKey && e.keyCode == 'X'.charCodeAt(0)){
      return false;
  }
  if(e.ctrlKey && e.keyCode == 'Y'.charCodeAt(0)){
      return false;
  }
  if(e.ctrlKey && e.keyCode == 'Z'.charCodeAt(0)){
      return false;
  }
  if(e.ctrlKey && e.keyCode == 'V'.charCodeAt(0)){
      return false;
  }
  if (e.keyCode == 67 && e.shiftKey && (e.ctrlKey || e.metaKey)){
      return false;
  }
  if (e.keyCode == 'J'.charCodeAt(0) && e.altKey && (e.ctrlKey || e.metaKey)){
      return false;
  }
  if (e.keyCode == 'I'.charCodeAt(0) && e.altKey && (e.ctrlKey || e.metaKey)){
      return false;
  }
  if ((e.keyCode == 'V'.charCodeAt(0) && e.metaKey) || (e.metaKey && e.altKey)){
      return false;
  }
  if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
      return false;
  }
  if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
      return false;
  }
  if(e.ctrlKey && e.keyCode == 'H'.charCodeAt(0)){
      return false;
  }
  if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
      return false;
  }
  if(e.ctrlKey && e.keyCode == 'F'.charCodeAt(0)){
      return false;
  }
  if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
      return false;
  }
  }
  if (document.addEventListener) {
      document.addEventListener('contextmenu', function(e) {
      e.preventDefault();
      }, false);
  }else{
      document.attachEvent('oncontextmenu', function() {
      window.event.returnValue = false;
      });
  }