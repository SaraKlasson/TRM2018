

$(document).ready(function(){

    // Fade in content on front page
    $("#topdivimage").fadeIn(20000);
    $(".navbar-fixed").delay(1000).fadeIn(10000);
    $("#mobilediv").delay(1000).fadeIn(10000);

    

    $(".dropdown-button").dropdown();

    
      // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
$('.collapsible').collapsible();

    $(".sections-wrapper").sectionsnap();










}); // Doc ready

