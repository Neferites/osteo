<?php
	error_reporting(E_ALL^E_NOTICE);
	ini_set("display_errors", 1);
	require 'header.php';
	$error = array();
	$sent = false;

	if($_POST['envoiMessage']) {
			if(strlen($_POST['nom']) < 2) {
				$error['nom'] = '<div style="padding:5px; margin-top:10px;" class="alert alert-danger"><i class="fa fa-warning"></i> Le champ nom est <strong>videou inférieur à deux caractères</strong></div>';
			}
			if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
				$error['mail'] = '<div style="padding:5px; margin-top:10px;" class="alert alert-danger"><i class="fa fa-warning"></i> Le champ mail est <strong>vide ou incorrect</strong></div>';
			}
			if(strlen($_POST['message'])<10) {
				$error['message'] = '<div style="padding:5px; margin-top:10px;" class="alert alert-danger"><i class="fa fa-warning"></i> Le champ message doit <strong>comporter</strong> au moins <strong>10 caractères</strong>.</div>';
			}
			if($_POST['captcha']!='42') {
				$error['captcha'] = '<div style="padding:5px; margin-top:10px;" class="alert alert-danger"><i class="fa fa-warning"></i> Veuillez répondre à la question de <strong>vérification</strong>.</div>';
			}

			if(count($error) == 0) {
				
				$headers = 'From: '.  htmlspecialchars($_POST['nom']).' <'.$_POST['mail'].'>';
				$to = "marie.fayolle.osteo@gmail.com";
				$subject = 'Contact osteopathie par site';
				if(mail($to,$subject,htmlspecialchars($_POST['message']),$headers)) {
					$sent = true;
						unset($_POST);
				} else {
					$error[] = 'Une erreur temporaire empèche l\'envoi de votre message.<br />Vous pouvez directement contacter marie [point] fayolle [point] osteo [arobase] gmail [point] com';
				}
			}
     	}
	?>
	
<div class="container personnal">
	<div class="row">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<form role="form" method="post" action="">

					<div class="form-group formulaire">
						<label for="nom">Votre Nom</label>
						<input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" value="<?php echo $_POST['nom'];?>">
						<?php
						if(isset($error['nom'])){
							echo $error['nom'];
						}
						?>
					</div>


					<div class="form-group formulaire">
						<label for="mail">Votre Adresse Mail</label>
						<input type="email" class="form-control" name="mail" id="mail" placeholder="Adresse Mail" value="<?php echo $_POST['mail'];?>">
						<?php
						if(isset($error['mail'])){
							echo $error['mail'];
						}
						?>
					</div>

					<div class="form-group formulaire">
						<label for="message">Votre Message</label>
						<textarea class="form-control" name="message" id="message" placeholder="Message" rows="3" value="<?php echo $_SESSION['message'];?>"></textarea>
						<?php
						if(isset($error['message'])){
							echo $error['message'];
						}
						?>
					</div>

                    <div class="form-group formulaire">
							<label for="captcha">Combien font Quarante plus Deux (en chiffres) ?</label>
							<input type="text" class="form-control" name="captcha" id="captcha" />
						
                        <?php
						if(isset($error['captcha'])){
							echo $error['captcha'];
						}
						elseif($sent){
							echo '<div style="padding:5px; margin-top:10px;" class="alert alert-success"><i class="fa fa-info-circle"></i> Votre mail à été correctement envoyé.</div>';
						}
                        ?>
                    </div>
					
					<button type="submit" id="envoiMessage" name="envoiMessage" value="1" class="btn btn-primary">Envoyer</button>
				</form>
			</div>
		</div>	
	</div>
</div>

<?php
	require 'footer.php';
?>