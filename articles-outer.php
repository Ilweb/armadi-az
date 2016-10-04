<?php 
$bodyClass = '';
require 'header.php';
?>
<div class="whole_products" id="article">
<div class="year">
	<ul>
	<a href="#"><li>Articles</li></a>
	<a href="#"><li id="choosen">Recipes</li></a>
	<a href="#"><li>Facts</li></a>
	</ul>
</div>
<div class="months">
	<div><a href="#"><img src="images/planthouse.png"><div class="one_month articles_title" >Honey</div><div class="boreto">The world of chocolate, premium chocolates</div></a></div>
	<div><a href="#"><img src="images/zaabar.png"><div class="one_month articles_title">Chocolate cake</div><div class="boreto">The world of chocolate, premium chocolates</div></a></div>
	<div><a href="#"><img src="images/monte.png"><div class="one_month articles_title">About meat</div><div class="boreto">The world of chocolate, premium chocolates</div></a></div>
	<div><a href="#"><img src="images/planthouse.png"><div class="one_month articles_title">April</div><div class="boreto">The world of chocolate, premium chocolates</div></a></div>
	<div><a href="#"><img src="images/monte2.png"><div class="one_month articles_title">How to do sausages</div><div class="boreto">The world of chocolate, premium chocolates</div></a></div>
	<div><a href="#"><img src="images/planthouse.png"><div class="one_month articles_title">June</div><div class="boreto">The world of chocolate, premium chocolates</div></a></div>
	<div><a href="#"><img src="images/zaabar2.png"><div class="one_month articles_title">July</div><div class="boreto">The world of chocolate, premium chocolates</div></a></div>
	<div><a href="#"><img src="images/monte2.png"><div class="one_month articles_title">August</div><div class="boreto">The world of chocolate, premium chocolates</div></a></div>
	<div><a href="#"><img src="images/planthouse.png"><div class="one_month articles_title">September</div><div class="boreto">The world of chocolate, premium chocolates</div></a></div>
	<div><a href="#"><img src="images/zaabar.png"><div class="one_month articles_title">October</div><div class="boreto">The world of chocolate, premium chocolates</div></a></div>
	<div><a href="#"><img src="images/monte.png"><div class="one_month articles_title">November</div><div class="boreto">The world of chocolate, premium chocolates</div></a></div>
	<div><a href="#"><img src="images/planthouse.png"><div class="one_month articles_title">Health</div><div class="boreto">The world of chocolate, premium chocolates</div></a></div>
</div>

</div>
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
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>
<?php require 'footer.php';?>