

<div id="slider">
  <a  class="control_next">></a>
  <a  class="control_prev"><</a>
  <ul>
    <li>
    <div class="img1">
    <img src="http://itschool.bg/application/uploads/tutorials/gallery/maqpen4eva/6/1.jpg">
    <h4>Уиски 21год. Чивас Роял Салют | 0.70л- <span>243лв.</span></h4>
                        <p>Една от “перлите в короната” на Чивас Ригал, бутилирано в ръчно изработена 
                        порцеланова гарафа</p>
                        </div>

                        

    

   <div class="img1">
     <img src="http://itschool.bg/application/uploads/tutorials/gallery/maqpen4eva/6/1.jpg">
    <h4>Уиски 21год. Чивас Роял Салют | 0.70л- <span>243лв.</span></h4>
                        <p>Една от “перлите в короната” на Чивас Ригал, бутилирано в ръчно изработена 
                        порцеланова гарафа</p>
                        </div>
    
	<div class="img1">
     <img src="http://itschool.bg/application/uploads/tutorials/gallery/maqpen4eva/6/1.jpg">
    <h4>Уиски 21год. Чивас Роял Салют | 0.70л- <span>243лв.</span></h4>
                        <p>Една от “перлите в короната” на Чивас Ригал, бутилирано в ръчно изработена 
                        порцеланова гарафа</p>
                        </div>
    
	<div class="img1">
     <img src="http://itschool.bg/application/uploads/tutorials/gallery/maqpen4eva/6/1.jpg">
    <h4>Уиски 21год. Чивас Роял Салют | 0.70л- <span>243лв.</span></h4>
                        <p>Една от “перлите в короната” на Чивас Ригал, бутилирано в ръчно изработена 
                        порцеланова гарафа</p>
                        </div>
                         <div class="content">ноември-декемри</div>
	</li>
     

    <li>
    <div class="img1">
    <img src="./images/img1.png" alt=""/>
    <h4>Уиски 21год. Чивас Роял Салют | 0.70л- <span>243лв.</span></h4>
                        <p>Първоначален ярък букет с 
плодово - пастелна мекота, 
която се развива до аромат 
на захаросан плод и зряло 
сено с препечени нотки.</p>
                        </div>

                        

    

   <div class="img1">
     <img src="http://itschool.bg/application/uploads/tutorials/gallery/maqpen4eva/6/1.jpg">
    <h4>Уиски 21год. Чивас Роял Салют | 0.70л- <span>243лв.</span></h4>
                        <p>Една от “перлите в короната” на Чивас Ригал, бутилирано в ръчно изработена 
                        порцеланова гарафа</p>
                        </div>
    
	<div class="img1">
     <img src="http://itschool.bg/application/uploads/tutorials/gallery/maqpen4eva/6/1.jpg">
    <h4>Уиски 21год. Чивас Роял Салют | 0.70л- <span>243лв.</span></h4>
                        <p>Една от “перлите в короната” на Чивас Ригал, бутилирано в ръчно изработена 
                        порцеланова гарафа</p>
                        </div>
    
	<div class="img1">
     <img src="http://itschool.bg/application/uploads/tutorials/gallery/maqpen4eva/6/1.jpg">
    <h4>Уиски 21год. Чивас Роял Салют | 0.70л- <span>243лв.</span></h4>
                        <p>Една от “перлите в короната” на Чивас Ригал, бутилирано в ръчно изработена 
                        порцеланова гарафа</p>
                        </div>
                        <div class="content">ноември-декемри</div>


	</li>
    <li>SLIDE 3</li>
    <li>SLIDE 5</li>
    <li>SLIDE 6</li>
    <li>SLIDE 7</li>
    <li>SLIDE 8</li>
  </ul>  
</div>



             

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>




 
<script>
    jQuery(document).ready(function ($) {


	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('right', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});    


</script>


 

