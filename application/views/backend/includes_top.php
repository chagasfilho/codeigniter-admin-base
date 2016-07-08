<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/neon-core.css">
<link rel="stylesheet" href="assets/css/neon-theme.css">
<link rel="stylesheet" href="assets/css/neon-forms.css">
<link rel="stylesheet" href="assets/css/datepicker.css">
<link rel="stylesheet" href="assets/css/custom.css">

    <?php   
    $skin_colour = $this->db->get_where('settings', array('type' => 'skin_colour'))->row()->description;
    
    if ($skin_colour != ''):?>

        <link rel="stylesheet" href="assets/css/skins/white.css">

    <?php endif;?>

    <?php if ($text_align == 'right-to-left') : ?>
        <link rel="stylesheet" href="assets/css/neon-rtl.css">
    <?php endif; ?>

<script src="assets/js/jquery-1.11.0.min.js"></script>

<link rel="stylesheet" href="assets/js/vertical-timeline/css/component.css">
<link rel="stylesheet" href="assets/js/datatables/responsive/css/datatables.responsive.css">

<!-- Icomoon -->
<link rel="stylesheet" href="assets/fonts/icons/style.css">