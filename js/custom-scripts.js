var audio = document.getElementById("audio");

$(document).ready(function() {
  if ($.cookie('pop') == null) {
      $('#splashModal').modal('show');
      $.cookie('pop', '3');
      console.log($.cookie('name'));
  }
});

//Play Music

$(".musicBtn").on("click", function() {
  if($(this).hasClass("fa-play")){
    $(this).removeClass("fa-play");
    $(this).addClass("fa-pause");
    audio.play()
    
  } else {
    $(this).removeClass("fa-pause");
    $(this).addClass("fa-play");
    audio.pause();
  }
  
})

// Hide Banner

$(window).scroll(function() {
  if ($(this).scrollTop() > 10) {
    $('.body-banner').fadeOut();
    $('.bannerText').fadeOut();
  }
  else {
    $('.body-banner').fadeIn();
    $('.bannerText').fadeIn();
  }
});


// Find all YouTube videos
var $allVideos = $("iframe[src^='//www.youtube.com']"),

    // The element that is fluid width
    $fluidEl = $("body");

// Figure out and save aspect ratio for each video
$allVideos.each(function() {

  $(this)
    .data('aspectRatio', this.height / this.width)

    // and remove the hard coded width/height
    .removeAttr('height')
    .removeAttr('width');

});

// When the window is resized
$(window).resize(function() {

  var newWidth = $fluidEl.width();

  // Resize all videos according to their own aspect ratio
  $allVideos.each(function() {

    var $el = $(this);
    $el
      .width(newWidth)
      .height(newWidth * $el.data('aspectRatio'));

  });

// Kick off one resize to fix all videos on page load
}).resize();




// $(window).on('load',function(){
//   $('#splashModal').modal('show');
// });


// Video Player
$(document).ready(function () {
  $(".arrow-right").bind("click", function (event) {
      event.preventDefault();
      $(".vid-list-container").stop().animate({
          scrollLeft: "+=336"
      }, 750);
  });
  $(".arrow-left").bind("click", function (event) {
      event.preventDefault();
      $(".vid-list-container").stop().animate({
          scrollLeft: "-=336"
      }, 750);
  });
});