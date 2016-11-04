<?php 
$bodyClass = '';
require 'header.php';
?>
<div class="whole_products" id="article">
<div class="slider">
	<div class="slideshow-container">
	  <div class="mySlides fade">
		<div class="numbertext">1 / 3</div>
		<img src="../images/food-4.jpg">
		<div class="text">Caption Text</div>
	  </div>

	  <div class="mySlides fade">
		<div class="numbertext">2 / 3</div>
		<img src="../images/food-2.jpg">
		<div class="text">Caption Two</div>
	  </div>

	  <div class="mySlides fade">
		<div class="numbertext">3 / 3</div>
		<img src="../images/food-3.jpg">
		<div class="text">Caption Three</div>
	  </div>

		<div class="next_article" onclick="plusSlides(1)">
		<div class="arrow_img up"><img src="../images/arrow.png"></div>
		<div class="recipes">
			<div>
				<img src="../images/food-2.jpg">
				<div> Fried chicken
				</div>
			</div>
			<div>
				<img src="../images/food-3.jpg">
				<div> Fried chicken
				</div>
			</div>
			<div>
				<img src="../images/food-4.jpg">
				<div> Fried chicken
				</div>
			</div>
		</div>
		<div class="arrow_img down"><img src="../images/arrow.png"></div>
		
		
		
		
	</div>
	</a>
	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span> 
	  <span class="dot" onclick="currentSlide(2)"></span> 
	  <span class="dot" onclick="currentSlide(3)"></span> 
	</div>
</div>
<div class="recipe_content">
	<div>
		<h4>Lorem ipsum dolor sit amet, wisi a proin</h4>
		<p>Lorem ipsum dolor sit amet, wisi a proin, libero vitae elit sit tincidunt, urna vitae porttitor, pulvinar mauris sed in ac ante. Nisl officia sed vestibulum diam amet, est maecenas vivamus orci, tempor nibh nullam dictum vitae, dui quam ligula eros massa, in viverra. Wisi venenatis. Venenatis ut vitae per sed lectus. Sapien morbi purus quis nec justo feugiat, in congue, vestibulum eros vestibulum, molestie egestas, suscipit quae bibendum scelerisque risus euismod vitae.
		Sed ligula lectus lectus, at lacus erat occaecat nulla et posuere, ullamcorper wisi et morbi, arcu et ipsum fusce massa praesent dolor. Faucibus ut, bibendum morbi sed dui velit, at mattis et rhoncus, vestibulum vel nec neque magna volutpat ac, eget quam eget fames sed ante rutrum. Quis odio, sem nibh hymenaeos neque, eu nunc sapien auctor odio egestas. Venenatis quis rutrum pulvinar odio velit massa. Nulla in nisl nec massa mauris, vivamus orci ut morbi vero aliquam, nisl fusce wisi a vel, urna libero, diam integer rutrum. Aliquam habitasse nonummy duis, non mauris nulla tortor nibh integer, at wisi lacinia sit. 
		<div class="left_box" >Lorem ipsum dolor sit amet, wisi a proin, libero vitae elit sit tincidunt, urna vitae porttitor, pulvinar mauris sed in ac ante. Nisl officia sed vestibulum diam amet, est maecenas vivamus orci, </div>
		</p>
		<img src="../images/food-2.jpg">
		<p>Turpis vitae, mi accumsan nunc felis, pellentesque nulla pharetra vehicula. Massa vitae, ligula adipiscing aliquam tellus, arcu gravida. Orci purus, dolor per suscipit quis, accumsan nunc neque rutrum neque. Ac orci nunc consequat cras nec, id faucibus ligula vitae volutpat ipsum lectus. Luctus mollis amet diam, suspendisse dolor nunc iaculis reiciendis mattis. Duis quis convallis etiam, natoque nec, vivamus a, arcu nisl adipiscing etiam, laoreet quisque ut eleifend malesuada.</p>
		<div>
			<p>Turpis vitae, mi accumsan nunc felis, pellentesque nulla pharetra vehicula. Massa vitae, ligula adipiscing aliquam tellus, arcu gravida. Orci purus, dolor per suscipit quis, accumsan nunc neque rutrum neque. Ac orci nunc consequat cras nec, id faucibus ligula vitae volutpat ipsum lectus. Luctus mollis amet diam, suspendisse dolor nunc iaculis reiciendis mattis. Duis quis convallis etiam, natoque nec, vivamus a, arcu nisl adipiscing etiam, laoreet quisque ut eleifend malesuada.</p>
			<div class="right_img_article"><img src="../images/bottle2.png"></div>
		</div>
		<div>
			<div class="left_img_article"><img src="../images/bottle2.png"></div>
			<p>Turpis vitae, mi accumsan nunc felis, pellentesque nulla pharetra vehicula. Massa vitae, ligula adipiscing aliquam tellus, arcu gravida. Orci purus, dolor per suscipit quis, accumsan nunc neque rutrum neque. Ac orci nunc consequat cras nec, id faucibus ligula vitae volutpat ipsum lectus. Luctus mollis amet diam, suspendisse dolor nunc iaculis reiciendis mattis. Duis quis convallis etiam, natoque nec, vivamus a, arcu nisl adipiscing etiam, laoreet quisque ut eleifend malesuada.</p>
		</div>
	</div>
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