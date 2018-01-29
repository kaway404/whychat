<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
?>
<?php
$form2['ele'] = $_GET['who'];
$form2['eu'] = $_COOKIE['iduser'];
$form2['texto'] = $_POST['msg'];
	if( DBCreate( 'chat', $form2 ) ){	

	}
?>
<?php } ?>