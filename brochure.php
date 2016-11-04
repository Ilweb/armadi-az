<div class="brochure">
	<div class="contains">
		<div><img src="<?php bloginfo('template_directory'); ?>/images/left.png" class="prev" onclick="plusSlides(-1)">
			<div class="big_brochure">	
			<div class="inner_content fade js-fade fade-in is-paused">
				<div>
				<a href="#">
					<img src="<?php bloginfo('template_directory'); ?>/images/product1.png">
					<div>
						<h3>Pici Pasta</h3>
						<p>About Pici Pasta Pici is a traditional flour-and-water Tuscan pasta of fat spaghetti strands which are rolled by hand to achieve a rustic look. </p>
					</div>
				</a>	
				</div>
				<div>
				<a href="#">
					<img src="<?php bloginfo('template_directory'); ?>/images/bottle2.png">
					<div>
						<h3>Bee Company</h3>
						<p>Add it to a breakfast table for a golden touch, give it as a unique and delicious treat. From the Savannah Bee Company of Georgia.</p>
					</div>
				</a>	
				</div>
			</div>
		<div class="inner_content fade">
			<div>
				<a href="#">
					<img src="<?php bloginfo('template_directory'); ?>/images/product1.png">
					<div>
						<h3>Pici Pasta</h3>
						<p>About Pici Pasta Pici is a traditional flour-and-water Tuscan pasta of fat spaghetti strands which are rolled by hand to achieve a rustic look. </p>
					</div>
				</a>	
			</div>
			<div>
				<a href="#">
					<img src="<?php bloginfo('template_directory'); ?>/images/bottle2.png">
					<div>
						<h3>Bee Company</h3>
						<p>Add it to a breakfast table for a golden touch, give it as a unique and delicious treat. From the Savannah Bee Company of Georgia.</p>
					</div>
				</a>	
			</div>
		</div>
		</div>
		<img id="right" src="<?php bloginfo('template_directory'); ?>/images/left.png" class="next" onclick="plusSlides(1)">
		</div>
	</div>
	<img id="active" src="<?php bloginfo('template_directory'); ?>/images/active.png">
</div>

<script>

var slideIndex = 1;

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
	if (slideIndex > 0)
	{
		slides[slideIndex-1].style.display = "inline-block";
	}
}

showSlides(slideIndex);

</script>