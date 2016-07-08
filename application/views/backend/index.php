<?php
$system_name = 'RadixEMS';
$system_title = $this->db->get_where('settings' , array('type'=>'system_title', 'account_id' => $this->session->userdata('account_id')))->row()->description;
$text_align = $this->db->get_where('settings' , array('type'=>'text_align', 'account_id' => $this->session->userdata('account_id')))->row()->description;
$account_type = $this->session->userdata('login_type');
?>

<!DOCTYPE html>
<html lang="PT_BR">
	<head>
		<title><?php echo $page_title;?> | <?php echo $system_title;?></title>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="RadixEMS" />
		<meta name="author" content="RadixEMS" />
						
		<?php include 'includes_top.php';?>		
	</head>

	<body class="page-body <?php if ($skin_colour != '') echo 'skin-' . $skin_colour;?>" >
		<?php include 'menu_top.php';?>
		
		<div class="col-md-12" >			
			<div style="padding: 20px 0 0 5px;">
				<?php $this->load->view('backend/'.$page_name.'.php');?>

				<?php include 'footer.php';?>
			</div>
		</div>

	    <?php include 'includes_bottom.php';?>
	    
	</body>
</html>