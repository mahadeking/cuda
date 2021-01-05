$(document).ready(function(){


   //STICKY MENU (NAV)
    $(".js-services").waypoint(function(direction){
        if (direction== "down") {
            $("nav").addClass("sticky");
        }else {
            $("nav").removeClass("sticky");
        }

    });


   //MIXITUP (PORTFOLIO) 
    var mix = mixitup ('.container');
    //smooth scriler //

   
    $("a").on('click', function (event){
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function (){
                window.location.hash = hash;
                return false
            });           
        }
    });
});


  function openNav(){
      document.getElementById("myNav").style.width = "100%" ;
  }
  function closeNav(){
    document.getElementById("myNav").style.width = "0%" ;
  }