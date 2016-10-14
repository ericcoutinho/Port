<?php

		$email 	     = $_GET['email']; 
		$nome        = $_GET['nome'];
		$reclamacao  = $_GET['reclamacao'];
		$assunto     = $_GET['assunto'];
		//$arquivo   = $_FILES["arquivo"];
		$corpoMSG    = "<strong>Mensagem:</strong> $reclamacao <br> 
					 <strong>Assunto:</strong> $assunto";

		// chamando a classe PHP Mailer	
		require 'PHPMailer/PHPMailerAutoload.php';

		

			//$destinatario = $_POST['destinatario'];
			//$mail->AddBCC($email);
			

			$mail = new PHPMailer;

			//$mail->SMTPDebug = 3;

			$mail-> IsSMTP();

			$mail->Host = 'smtp.gmail.com'; 

			$mail->SMTPAuth = true;

			$mail->Username = 'email@gmail.com'; // seu SMTP username

			$mail->Password = '#senha_email';

			$mail->SMTPSecure = 'ssl';

			$mail->Port = 465;

			$mail->setFrom = 'email';

			
			//$mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );
			$mail->isHTML(true); 
			$mail-> Charset = 'UTF-8';

			$mail->AddAddress($email, 'Eric Coutinho DSouza Ionic');

			$mail->FromName = $nome;

			$mail->Subject  = 'Denuncia enviada pelo App IONIC';

			$mail->Body     = $corpoMSG;

			$mail->AltBody  = $corpoMSG;;

		
			if(!$mail->send()) {
			    echo 'Não foi possível enviar o convite. ' ;
			    echo 'Erro: ' . $mail->ErrorInfo;
			} else {
				//ob_end_clean();
			    //echo 'Convite enviado com sucesso!';
			    //header("Location: convitevirtual.html");
			}


		
	

?>


</body>
</html>