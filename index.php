<?php
	$result="";
	if(isset($_POST['submit']))
	{
		
		require 'newPHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure= 'tls';
		$mail->Username = 'vartikajohari57@gmail.com';
		$mail->Password='#@Gotohell1@';

		$mail->setFrom($_POST['email']);
		$mail->addAddress('vartikajohari57@gmail.com');
		$mail->addReplyTo($_POST['email'],$_POST['w3lName']);
		$mail->isHTML(true);

		$mail->Subject= 'Form Submission: '.$_POST['subject'];
		$mail->Body='<h1 align=center>Name: '.$_POST['w3lName'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['msg'].'</h1>' ;

		if(!$mail->send()){
			$result = "Something went wrong please try again ";
		}
		else
		{
			$result= "Thanks".$_POST['name']."for contacting us we get bavk to you soon!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact us form</title>
</head>
<body>
	<h5><?php echo $result; ?></h5>
<form action="" method="post" class="main-input">
	
	<div class="top-inputs d-grid">
	    <input type="text" placeholder="Name" name="w3lName" id="w3lName" required="">
	    <input type="email" name="email" placeholder="Email" id="w3lSender" required="">
	</div>
	<input type="text" placeholder="Phone Number" name="number" id="w3lName" required="">
	<textarea placeholder="Message" name="msg" id="w3lMessage" required=""></textarea>
	<div class="text-right">
	    <input type="submit" class="btn btn-theme2" value="Submit Now">
	</div>
</form>
</body>
</html>