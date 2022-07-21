AOS.init({once:'true'});

$(document).ready(function(){
    
  $(".button").click(function(){
    $(".maintext h5").slideToggle("fast");
		$(".button").toggleClass("fa fa-chevron-down fa fa-chevron-up");
  });

  $(".navbar-toggle").click(function(){
    $(".menuicon").toggleClass("fa fa-bars fa fa-times");
  });
  
});

  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
    clearInterval(myTimer);
    myTimer = setInterval("plusSlides(1)", 5000);
  }
  
  var myTimer = setInterval("plusSlides(1)", 5000);

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slides[slideIndex-1].style.display = "block";  
  }
  /*$('.counter').counterUp({
    delay: 10,
    time: 2000
  });
  $('.counter').addClass('animated fadeInDownBig');
  $('h3').addClass('animated fadeIn');
  function view(val) {
    document.getElementById("result").value += val;
  }
  function clean() {
    document.getElementById("result").value = "";
  }
  function backspace() {
    var val = document.getElementById("result").value;
    document.getElementById("result").value = val.substring(
      0,
      val.length - 1
    );
  }
  function equal() {
    var val = document.getElementById("result").value;
    if (val) {
      document.getElementById("result").value = eval(val);
    }
  }*/