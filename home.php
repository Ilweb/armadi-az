<?php 
$bodyClass = 'home';
require 'header.php';
?>
<div class="brochure">
	<div class="contains">
		<div><img src="images/left.png" class="prev" onclick="plusSlides(-1)">
			<div class="inner_content fade js-fade fade-in is-paused">
				<div>
				<a href="#">
					<img src="images/product1.png">
					<div>
						<h3>Pici Pasta</h3>
						<p>About Pici Pasta Pici is a traditional flour-and-water Tuscan pasta of fat spaghetti strands which are rolled by hand to achieve a rustic look. </p>
					</div>
				</a>	
				</div>
				<div>
				<a href="#">
					<img src="images/bottle2.png">
					<div>
						<h3>Bee Company</h3>
						<p>Add it to a breakfast table for a golden touch, give it as a unique and delicious treat. From the Savannah Bee Company of Georgia.</p>
					</div>
				</a>	
				</div>
			</div>
		<div class="inner_content fade">
			<div>
				<h3>Bee Company</h3>
				<p>Add it to a breakfast table for a golden touch, give it as a unique and delicious treat. From the Savannah Bee Company of Georgia.</p>
			</div>
		</div>
		<img id="right" src="images/left.png" class="next" onclick="plusSlides(1)">
		</div>
	</div>
	<img id="active" src="images/active.png">
</div>
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

