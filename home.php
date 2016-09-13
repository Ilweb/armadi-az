<?php 
$bodyClass = 'home';
require 'header.php';
?>
<?php 
require 'brochure.php';
?>
<div class="margin-lr second menu">
	<ul>
		<li><a href="#">Why to choose us</a></li>
		<li><a href="#">How to pay</a></li>
		<li><a href="#">For registrered</a></li>
		<li><a href="#">News</a></li>
	</ul>
</div>
<?php require 'footer.php';?>
<script>
		var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("inner_content");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "inline-block"; 
    setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("inner_content");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  
  slides[slideIndex-1].style.display = "inline-block";
  dots[slideIndex-1].className += " active";
}

</script>

