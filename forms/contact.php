<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

	
	if(isset($_POST['submit'])) {
		$name= $_POST['name'];
		$mailFrom= $_POST['email'];
		$subject= $_POST['subject']; 
		$message= $_POST['message'];

		$mailTo= 'ventas@rocasuministros.com';
		
		
		
		$message3= "
			<html>
				<head>
					<title></title>
				</head>
				<body>
					<p>Usted ha recibido un mensaje de: $name</p>
					<br>
					<p>Email: $mailFrom</p>
					<br>
					<p>Mensaje: </p>
					<p>$message</p>
				</body>
			</html>
		";
		
		
		$headers = "From: $name <$mailFrom>"."\r\n";
		//$headers .= 'Reply-To: '.$mailFrom.'\r\n';
		$headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "Content-type: text/html; charset=utf-8"."\r\n";
		$headers .= "X-Mailer: PHP/".phpversion();
		
		
		
		if(mail($mailTo,$subject,$message3,$headers)){
			/*
			echo "<p>Thank you for contacting us. You will get a reply within 24 hours.</p>";
			echo "<br><br><br>";
			echo var_dump($name)."<br>";
			echo var_dump($mailFrom)."<br>";
			echo var_dump($subject)."<br>";
			echo var_dump($message3)."<br>";
			echo var_dump($mailTo)."<br>";
			echo "<br><p>Header:</p>";
			echo var_dump($headers);
			*/
			//echo '<p>GRACIAS POR ENVIAR SU MENSAJE</p>';
			header("Location: ../index.php?ban1=1");
		}
		else{
			
			//echo '<p>ERROR AL ENVIAR</p>';
			
			header("Location: ../index.php?ban1=0");
		}
    }
	
?>