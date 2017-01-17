
<?php
if(isset($_POST['g-recaptcha-response']))
{
	$captcha=$_POST['g-recaptcha-response'];
}

if (isset($_POST['cemail']) && isset($captcha) && $captcha)
{
	$secretKey = "6LcrIhIUAAAAAOt4V6l8EijduFaSUpspm04Lmqwf";
	$ip = $_SERVER['REMOTE_ADDR'];
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
	$responseKeys = json_decode($response,true);
	
	if(intval($responseKeys["success"]) == 1) 
	{
		$to = get_bloginfo('admin_email');
		$subject = $post->post_title.' - '.$_POST['cname'];
		$headers = 'From: "'.get_bloginfo("name").'" <no-reply@centromedicoitaliano.bg>'."\r\n";
		$headers .= 'Reply-To: "'.$_POST['cname'].'" <'.$_POST['cemail'].'>'."\r\n";
		$headers .= 'Content-type: text/html';
		$message = '<p><b>'.__('Name').'</b>: '.$_POST['cname']."</p>\n";
		$message .= '<p><b>E-mail</b>: '.$_POST['cemail']."</p>\n";
		//$message .= '<p><b>'.__('Phone number', 'cmi').'</b>: '.$_POST['cphone']."</p>\n";
		$message .= '<p><b>IP address</b>: '.$_SERVER['REMOTE_ADDR']."</p>\n";
		$message .= '<p><b>'.__('Message', 'cmi')."</b><br/>\n".$_POST['cmessage'].'</p>';
		
		echo '<div class="col2" style="padding: 20px 0;">';
		if (wp_mail( $to, $subject, $message, $headers ))
		{
			echo '<h6>'.pll('Your message was sent successfully').'</h6>';
		}
		
		echo $message;
		echo '</div>';
	}
}
else
{
	if (isset($captcha) && !$captcha)
	{
		?><div class="alert alert-danger"><?php pll_e('Please confirm not robot'); ?></div><?php
	}
	?>

	


	<form id="contact" method="post" accept-charset="utf-8">
		
		
		<div class="col" style="width: 50%; margin: 0 auto;">
				<div class="form-group required"  style="padding: 10px;">
					<label for="name" style="display: block; color: #000;font-weight: 700;" class="only"><?php pll_e( 'Name', 'woocommerce' ); ?> </label>
					<input type="text" style="width: 100%;" class="form-control" id="name" name="cname"/>
				</div>
				<div class="form-group required"  style="padding: 10px;">
					<label for="email" style="display: block; color: #000;font-weight: 700;" class="only"><?php pll_e( 'Email address', 'woocommerce' ); ?></label>
					<input type="text" style="width: 100%;" id="email" class="form-control" name="cemail"/>
				</div>
		
				<div class="form-group required"  style="padding: 10px;">
					<label for="message" style="display: block; color: #000;font-weight: 700;" class="only"><?php pll_e('Message'); ?></label>
					<textarea class="form-control message" style="width: 100%;" id="message" name="cmessage" ></textarea>
				</div>
		
		<script src='https://www.google.com/recaptcha/api.js?hl=<?php echo pll_current_language(); ?>'></script>
	
				<div class="g-recaptcha"  style="padding: 10px;" data-sitekey="6LcrIhIUAAAAAAxYS6cLGGMdPHKS5Pjgz_GJKhNl"></div>
			
				<a href="#" style="padding: 10px;text-align: center;width: 180px; font-weight: 700; text-transform: uppercase;" class="hvr-shadow-radial"  onclick="sendMessage();"><?php pll_e('Send'); ?></a>
		</div>
	</form>
	<?php
}
?>

<script type="text/javascript">
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function sendMessage()
{
	if(!validateEmail($('#contact input[name="cemail"]').val()))
	{
		alert("<?php pll_e('Invalid E-mail address'); ?>");
		return 0;
	}
	
	for (var i = 0; i < $("#contact input.form-control").length; i++)
	{
		if ($.trim($($("#contact input.form-control")[i]).val()) == "")
		{
			alert("<?php pll_e('Please, fill in all the required fields'); ?>!");
			return 0;
		}
	}
	
	$("#contact").submit();
}


</script>