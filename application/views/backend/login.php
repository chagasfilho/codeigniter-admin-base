<!DOCTYPE html>
<html lang="PT-BR">
	<head>
		<?php
		$system_name = 'RadixEMS';
		$system_title =	'RadixEMS';
		?>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="RadixEMS - Entrar" />
		<meta name="author" content="RadixEMS" />
		
		<title><?php echo 'Login';?> | <?php echo $system_title;?></title>		

		<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
		<link rel="stylesheet" href="assets/fonts/icons/style.css">
		<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/neon-core.css">
		<link rel="stylesheet" href="assets/css/neon-theme.css">
		<link rel="stylesheet" href="assets/css/neon-forms.css">
		<link rel="stylesheet" href="assets/css/custom.css">

		<script src="assets/js/jquery-1.11.0.min.js"></script>
	</head>

	<body class="page-body login-page login-form-fall" data-url="<?php echo base_url();?>">
		<!-- This is needed when you send requests via Ajax -->
		<script type="text/javascript">
			var baseurl = '<?php echo base_url();?>';
		</script>

		<div class="login-container">			
			<div class="login-header login-caret">				
				<div class="login-content" style="width:100%;">					
					<a href="<?php echo base_url();?>" class="logo-login">
						[ Login de Usuário ]
					</a>

					<!-- progress bar indicator -->
					<div class="login-progressbar-indicator">
						<h3>43%</h3>
						<span>Processando...</span>
					</div>
				</div>				
			</div>
			
			<div class="login-progressbar">
				<div></div>
			</div>
			
			<div class="login-form">				
				<div class="login-content">					
					<div class="form-login-error">
						<h3>Usuário Inválido</h3>
						<p>Por favor entre com usuário e senha válidos!</p>
					</div>					
					<form method="post" role="form" id="form_login">	
						<div class="list-group">
							<div class="list-group-item">							
								<input type="text" class="form-control no-borders" name="email" id="email" placeholder="Usuário" autocomplete="off" />								
							</div>
							
							<div class="list-group-item">															
								<input type="password" class="form-control no-borders" name="password" id="password" placeholder="Senha " autocomplete="off" />
							</div>
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block btn-login"> Entrar </button>
						</div>													
					</form>
					
					<div class="login-bottom-links">
                    	<p class="copyright link">
                    		&copy; 2016 <strong> Ai Dento</strong>.	
                    	</p>
					</div>					
				</div>				
			</div>	
		</div>

		<!-- Bottom Scripts -->
		<script src="assets/js/gsap/main-gsap.js"></script>
		<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
		<script src="assets/js/bootstrap.js"></script>
		<script src="assets/js/joinable.js"></script>
		<script src="assets/js/resizeable.js"></script>
		<script src="assets/js/neon-api.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script src="assets/js/neon-login.js"></script>
		<script src="assets/js/neon-custom.js"></script>
		<script src="assets/js/neon-demo.js"></script>
	</body>
</html>