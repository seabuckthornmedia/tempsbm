
function setDimensions(){
  var windowsHeight = $(window).height();
  $(".preloader").css("height", windowsHeight + "px");
}

$(window).resize(function() {
  setDimensions();
});

// Makes sure the whole site is loaded
$(window).load(function() {
  // Will first fade out the loading animation
	$(".status").fadeOut("slow");
  // Will fade out the whole DIV that covers the website
  $(".preloader").delay(1000).fadeOut("slow");
  // Will fade out the whole DIV that covers the website
  $(".mainContent").fadeIn("slow");
})
