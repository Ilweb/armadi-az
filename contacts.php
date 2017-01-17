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
			echo '<h6>'.pll('Your message was sent successfully', 'cmi').'</h6>';
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
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="form-group required">
					<label for="name" class="only"><?php pll_e( 'First name', 'woocommerce' ); ?> / <?php pll_e( 'Last name', 'woocommerce' ); ?></label>
					<input type="text" class="form-control" id="name" name="cname"/>
				</div>
				<div class="form-group required">
					<label for="email" class="only"><?php pll_e( 'Email address', 'woocommerce' ); ?></label>
					<input type="text" id="email" class="form-control" name="cemail"/></i>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="form-group required">
					<label for="message" class="only"><?php pll_e('Message'); ?></label>
					<textarea class="form-control message" id="message" name="cmessage" placeholder="<?php _e('Message'); ?>"></textarea>
				</div>
			</div>
		</div>
		
		<script src='https://www.google.com/recaptcha/api.js?hl=<?php echo pll_current_language(); ?>'></script>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="g-recaptcha" data-sitekey="6LcrIhIUAAAAAAxYS6cLGGMdPHKS5Pjgz_GJKhNl"></div>
				<input type="button" onclick="sendMessage();" class="btn btn-default btn-color-border-solid" value="Изпрати">
			</div>
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