// var swiper = new Swiper(".mySwiper", {
//         slidesPerView: 3,
//         spaceBetween: 30,
//         pagination: {
//           el: ".swiper-pagination",
//         },
//         autoplay: {
//     delay: 2000,
//   },
//       });\\


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

$("#datepicker").datepicker({
  format: "dd-mm-yyyy",
});

// $('.drop-new').click(function(){
    
//     alert('dddd');
// })

$('.dropdown-toggle').click(function() {
  $('.drop-new').dblclick();
  alert('dddd');
});

// function closePrint () {
//   document.body.removeChild(this.__container__);
// }
 
// function setPrint () {
//   this.contentWindow.__container__ = this;
//   this.contentWindow.onbeforeunload = closePrint;
//   this.contentWindow.onafterprint = closePrint;
//   // Required for IE
//   this.contentWindow.focus();
//   this.contentWindow.print();
// }
 
// function printPage(sURL) {
//   var oHideFrame = document.createElement("iframe");
//   oHideFrame.onload = setPrint;
//   oHideFrame.style.position = "fixed";
//   oHideFrame.style.right = "0";
//   oHideFrame.style.bottom = "0";
//   oHideFrame.style.width = "0";
//   oHideFrame.style.height = "0";
//   oHideFrame.style.border = "0";
//   oHideFrame.style.padding = "0";
//   oHideFrame.src = sURL;
//   document.body.appendChild(oHideFrame);
// }
