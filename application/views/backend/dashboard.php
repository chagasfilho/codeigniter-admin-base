<?php $encoding = 'UTF-8';?>

<div class="row">   
	<div class="col-md-12">
        <div class="welcome-location">
            <small>Olá, <strong><?php echo mb_convert_case($this->session->userdata('name'), MB_CASE_TITLE, $encoding);?></strong>, Seja Bem Vindo.</small>
        </div>
    </div>
</div>

  
