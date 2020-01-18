$(document).ready(function() {


  $(".hamburger-header").on("click", function() {
    if ($(".mobile-menu-container-header").hasClass("mobile-hide")) {
      $(".mobile-menu-container-header").removeClass("mobile-hide");
      $(".mobile-menu-container-header").addClass("mobile-show");
    } else {
      $(".mobile-menu-container-header").addClass("mobile-hide");
      $(".mobile-menu-container-header").removeClass("mobile-show");
    }
  });
});


  